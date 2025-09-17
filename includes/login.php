<?	
	$AktNev = "";
	$AktJelszo = "";
	
	if (!empty($_POST['login'])) {
		$AktNev=$_POST['login'];
	}
	if (!empty($_POST['pass'])) {
		$AktJelszo=$_POST['pass'];
	}
	
?>
<html>
<head>
	<title>Bejelentkezés</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="document.urlap.login.focus();document.urlap.login.select();">
	<table height="100%" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align=center valign=middle> 
			<table width="300" border="0" cellspacing="0" cellpadding="0" class="szoveg">
				<!-- <tr><td><div class="cim">bejelentkezés</div></td></tr> -->
				<tr><td BGCOLOR=#849CB3><img src="" width="300" height="5"></td></tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr> 
          <td>Kérem adja meg nevét és jelszavát.
          </td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td> 
            <form name="urlap" action="<?=$this->url()?>" method="post">
			  <table width="300" border="0" cellspacing="0" cellpadding="0" class="szoveg">
              <tr><td width="120">felhasználónév</td><td width="180"><div align="right"><input type="text" name="login" value="<?=$AktNev?>" size="20" maxlength="20"></div></td></tr>
              <tr><td width="120">jelszó</td><td width="180"><div align="right"><input type="password" name="pass" size="20" maxlength="20" value="<?=$AktJelszo?>"></div></td></tr>
              </table>
			  <tr><td>&nbsp;</td></tr>
			  <tr><td><div align="right"><input type="submit" name="Submit" value="bejelentkezés"></div></td></tr>
            </FORM>
        </td></tr>
		<tr><td>&nbsp;</td></tr>
        <tr><td BGCOLOR=#849CB3><img src="" width="300" height="5"></td></tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>