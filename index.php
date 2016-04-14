<?php
// Check if installation was successful
$check = file_exists("installed");
if ($check < "1") {
    echo "Die Installation war leider nicht erfolgreich oder wurde nicht ausgeführt, bitte erneut versuchen > <a href='install.html'>Zum Installer</a>";
    exit;
}
    include 'check-new-data.php';
    readfile("start.html");
?>