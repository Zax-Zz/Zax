<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor = $_POST["nomor"];
    $folder = $_POST["subdo"];
    
    if (isset($_POST["nomor"])) {
        $newfol = "w/$folder";
        $folderPath = "$newfol";
        

        mkdir($folderPath);

        $zipFilePath = "script.com/$nomor.zip";
        $newZipFilePath = "$folderPath/$nomor.zip";
        copy($zipFilePath, $newZipFilePath);

        $zip = new ZipArchive;
        if ($zip->open($newZipFilePath) === TRUE) {
            $zip->extractTo($folderPath);
            $zip->close();
        }

        unlink($newZipFilePath);

        // Arahkan ke done.php setelah proses selesai
        header("Location: success.php?folder=$newfol");
        exit();
    }
}
        
?>
