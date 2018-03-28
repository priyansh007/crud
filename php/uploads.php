
<?php

 $targetfolder = "uploads/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {


 header("location:create.php?em=uploads/".basename( $_FILES['file']['name'])."");

 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";


}

?>