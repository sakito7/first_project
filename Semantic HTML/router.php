<?php
// router.php
if (preg_match(pattern: '/\.(?:png|jpg|jpeg|gif)$/', subject: $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else { 
    echo "<p>Welcome to PHP</p>";
}
?>

<?php
// router.php
if (php_sapi_name() == 'cli-server') {
    /* route static assets and return false */
}
/* go on with normal index.php operations */
?>

<?php
//router.php
$path = pathinfo($_SERVER["SCRIPT_FILENAME"]);
if ($path["extension"] == "el") {
    header(header: "Content-Type: text/x-script.elisp");
    readfile(filename: $_SERVER["SCRIPT_FILENAME"]);
}
else {
    return FALSE;
}
?>