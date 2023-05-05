<?php

$folder = 'uploads';
$files = glob($folder . '/*');

foreach($files as $file){
    if(is_file($file)){
        unlink($file);
    }
}
 
$file = $_FILES["file"];
$ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
if($ext=="txt"){
move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
}

$file2 = $_FILES["file2"];
$ext2 = pathinfo($_FILES["file2"]["name"], PATHINFO_EXTENSION);
if($ext2=="txt"){
move_uploaded_file($file2["tmp_name"], "uploads/" . $file2["name"]);
}

if($ext=="txt" && $ext2=="txt"){
    $folder_name = "uploads/";
    $file_name = glob($folder_name."*")[0];
    $file_name2 = glob($folder_name."*")[1];
    $new_file_name = "text1.txt";
    $new_file_name2 = "text2.txt";
    rename($file_name, $folder_name.$new_file_name);
    rename($file_name2, $folder_name.$new_file_name2);
    header('Location: upload.html');
}else{
    header('Location: reupload.php');
}

?>