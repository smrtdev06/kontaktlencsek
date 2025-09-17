<?php

/**
 * ADOdb Lite is a PHP class to encapsulate multiple database APIs and is compatible with 
 * a subset of the ADODB Command Syntax. 
 * Currently supports Frontbase, MaxDB, miniSQL, MSSQL, MSSQL Pro, MySQLi, MySQLt, MySQL, PostgresSQL,
 * PostgresSQL64, PostgresSQL7, PostgresSQL8, SqLite and Sybase.
 * 
 */

class postgres8_driver_ADOConnection extends ADOConnection
{
	var $connect_string;
	var $sysDate = "CURRENT_DATE";
	var $sysTimeStamp = "CURRENT_TIMESTAMP";

	function postgres8_driver_ADOConnection()
	{
		$this->dbtype = 'postgres8';
		$this->dataProvider = 'postgres';
	}

	/**
	 * Connection to database server and selected database
	 * 
	 * @access private 
	 */

	function _connect($host = "", $username = "", $password = "", $database = "", $persistent, $forcenew)
	{
		if (!function_exists('pg_connect')) return false;

		$this->host = $host;
		$this->username = $this->query_addslashes($username);
		$this->password = $this->query_addslashes($password);
		if (strlen($database) == 0) $database = 'template1';
		$this->database = $this->query_addslashes($database);		

		if ($this->username || $this->password || $this->database) {
			$this->connect_string = $this->host;
		   	if ($this->connect_string)  {
			 	$host = split(":", $this->connect_string);
				if ($host[0]) $this->connect_string = "host=" . $this->query_addslashes($host[0]);
				else $this->connect_string = 'host=localhost';
				if (isset($host[1])) $this->connect_string .= " port=$host[1]";
				else if (!empty($this->port)) $this->connect_string .= " port=" . $this->port;
			}
		   	if ($this->username) $this->connect_string .= " user=" . $this->username;
		   	if ($this->password) $this->connect_string .= " password=" . $this->password;
			if ($this->database) $this->connect_string .= " dbname=" . $this->database;
		}
		else
		{
			$this->connect_string = $this->host;
		}

		$this->persistent = $persistent;
		$this->forcenewconnection = $forcenew;

		$this->_makeconnection();

		if ($this->connectionId === false)
		{
			if ($fn = $this->raiseErrorFn) 
				$fn($this->dbtype, 'CONNECT', $this->ErrorNo(), $this->ErrorMsg(), $this->host, $this->database, $this);
			return $this->SelectDB( $this->database );
		}

		return true;
	} 

	function _makeconnection()
	{
		if($this->persistent == 1)
		{
			$this->connectionId = @pg_pconnect( $this->connect_string );
		}
		else
		{
			if(!$this->forcenewconnection)
			{
				$this->connectionId = @pg_connect( $this->connect_string );
			}
			else
			{
				$this->connectionId = @pg_connect( $this->connect_string, PGSQL_CONNECT_FORCE_NEW );
			}
		}
	}

	function query_addslashes($query)
	{
		$len = strlen($query);
		if ($len == 0)
			return "''";
		if (strncmp($query,"'",1) === 0 && substr($query,$len-1) == "'")
			return $s;
		return "'".addslashes($query)."'";
	}

	/**
	 * Choose a database to connect.
	 *
	 * @param dbname 	is the name of the database to select
	 * @return 		true or false
	 * @access public
	 */

	function SelectDB($dbname)
	{
		$this->database = $dbname;

		if ($this->connectionId === false)
		{
			if($this->createdatabase == true)
			{
				$this->connectionId = @pg_pconnect( "host=$this->host user=$this->username password=$this->password" );
				$result = @pg_query($this->connectionId, "CREATE DATABASE " . $this->database );
				if ($result === false) { // error handling if query fails
					$this->connectionId = false;
					return false;
				} 

				$this->_makeconnection();
				if($this->connectionId === false)
				{
					$this->connectionId = false;
					return false;
				}
				else
				{
					return true;
				}
			}
			$this->connectionId = false;
			return false;
		}
		else
		{
			return true;
		}
	} 

	/**
	 * Return database error message
	 * Usage: $errormessage =& $db->ErrorMsg();
	 * 
	 * @access public
	 */

	function ErrorMsg()
	{
		return @pg_last_error($this->connectionId);
	}

	/**
	 * Return database error number
	 * Usage: $errorbo =& $db->ErrorNo();
	 * 
	 * @access public
	 */

	function ErrorNo()
	{
		$error = @pg_last_error( $this->connectionId );
		return strlen($error) ? $error : 0;
	}

	/**
	 * Returns # of affected rows from insert/delete/update query
	 * 
	 * @access public 