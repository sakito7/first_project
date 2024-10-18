<?php
//router.php
$path = pathinfo(path: $_SERVER["SCRIPT_FILENAME"]);
if ($path["extension"] == "el") {
    header(header: "Content-Type: text/x-script.elisp");
    readfile(filename: $_SERVER["SCRIPT_FILENAME"]);
}
else {
    return FALSE;
}
?>