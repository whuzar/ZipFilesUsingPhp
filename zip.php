<?php
$zip = new ZipArchive();
$path = "./zips/";
$date = date("Y-m-d H:i:s");
$fileName = date("Ymd_His").'.zip';
$pathFile = $path.$fileName;
if($zip->open($pathFile, ZipArchive::CREATE!==TRUE)){
    echo "Error opening ";
}

$zip->addFromString("file1.txt", "elo elo {$date}");
$zip->addFromString("file2.txt", "witam {$date}");
$zip->addFile("zip2.php"); 
echo "No.files: ".$zip->numFiles; 
$zip->close();
?>