<?php

$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES['fileup']['name']);

$imagefiletype = pathinfo($taget_file,PATHINFO_EXTENSION);

$imageuploadok = 1;

if(isset($_POST['submit'])){

$check = getimagesize($_FILES['fileup']['tmp_name']);

if($check !== false){

echo "File is an image";

$imageuploadok = 1;

}

else{

echo "File is not an image";
$imageuploadok = 0;
}
}



if($_FILES['fileup']['size'] > 500000){

echo "Sorry, your file is too large.";
    $imageuploadOk = 0;

}

if($imageuploadok == 0){

echo "File cannot be uploaded";

}
else{


if(move_uploaded_file($_FILES['fileup']['tmp_name'],$target_file)){

echo "File Uplodaed";
}

else{
echo "File uploded failed";

}


}


?>