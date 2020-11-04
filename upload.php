<?php
include("server1.php");

//upload file
if(isset($_POST['submit']))
{
   $allow = array('pdf');
    $temp = explode(".",$_FILES['fileToUpload']['name']);
    $extension = end($temp);
    $upload_files = basename( $_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"upploads/".$_FILES['fileToUpload']['name']);
    $qry = mysqli_query($db,"Insert into files(pdf) VALUES('$upload_files')");
    
    if($qry)
    {
        echo  $upload_files . "  is uploaded";
    }
    else{
        echo "Not uploaded";
    }
}

?>