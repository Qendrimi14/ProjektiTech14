


<?php
    
    
     include "include/functions.php";

    if(isset($_POST['submit'])){
        $file= $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize =$_FILES['file']['size'];
        $fileError =$_FILES['file']['error'];
        $fileType =$_FILES['file']['type'];


        $fileExt = explode('.' , $fileName);

        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        $emri = $_POST['emri'];
        $pershkrimi = $_POST['pershkrimi'];
        $cmimi = $_POST['cmimi'];


        if(in_array($fileActualExt,$allowed)){
            if($fileError === 0){

                if($fileSize < 1000000){
                    
                    echo $fileName;

                    $fileDestination = 'foto/' . $fileName;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    addProdukti($emri, $pershkrimi, $cmimi, $fileName);
                    header("Location:Products.php?uploadsuccess");


                }else{
                    echo "Your file is too big!";
                }
            }else{
                echo "There was an error uploading your file!";
            }
        }else{
            echo "Your cannot upload files of this type!";
        }

    }

?>

