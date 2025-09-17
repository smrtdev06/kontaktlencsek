<?php
// Temporary redirect to public directory
// Rename this file to index.php if your document root can't be changed to public/

$request_uri = $_SERVER['REQUEST_URI'];
$base_path = dirname($_SERVER['SCRIPT_NAME']);

// Remove the base path from the request URI
if ($base_path !== '/') {
    $request_uri = substr($request_uri, strlen($base_path));
}

// Redirect to the public directory
header("Location: /public" . $request_uri);
exit;
?> 