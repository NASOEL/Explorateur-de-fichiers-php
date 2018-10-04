<?php
$dir = "/tmp/php5";

// Ouvre un dossier bien connu, et liste tous les fichiers
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "fichier : $file : type : " . filetype($dir . $file) . "\n";
        }
        closedir($dh);
    }
}
?>