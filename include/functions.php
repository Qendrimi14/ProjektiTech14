<?php

session_start();

global $dbconn;
connectionDB();

function connectionDB(){
    global $dbconn;
    $dbconn = mysqli_connect('localhost', 'root', '', 'tech14');

    if(!$dbconn){
        die(" Lidhja me DB nuk u krijua per ". mysqli_error($dbconn));
    }
    return $dbconn;
}


function Login($email, $password){
    global $dbconn;
    $sql="SELECT klientiid, emri, mbiemri, username ,email, password, roli FROM klientet 
    Where email = '$email' and password='$password'";

    $result = mysqli_query($dbconn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($result){
        if($resultCheck > 0){
            $klienti=array();
            $data=mysqli_fetch_assoc($result);
            $klienti['klientiid']=$data['klientiid'];
            $klienti['emri']=$data['emri'];
            $klienti['mbiemri']=$data['mbiemri'];
            $klienti['username']=$data['username'];
            $klienti['roli']=$data['roli'];
            $_SESSION['klienti']=$klienti;
            header("location:Home.php");
            echo"<h4 class ='test=success'>You are logged in</h4>";
        }else{
            echo"<h4 class ='text-danger'>Email ose password gabim!</h4>";
        }
    }else{
        die (" Error db: ". mysqli_error($dbconn));
    }
}
function register($emri, $mbiemri, $username ,$email, $password){
    global $dbconn;
    $sql = "INSERT INTO klientet (emri, mbiemri, username, email, password, roli) VALUES ('$emri', '$mbiemri', '$username', '$email', '$password', 0)";
    $result=mysqli_query($dbconn, $sql);

    if($result){
        $_SESSION['message'] = "Anetari " .$emri . " u shtua me sukses";
    }else{
        die('Error tek lidhja me DB: '. mysqli_error($dbconn));
    }
}

function kontakti($emri, $mbiemri,$email,$telefoni, $mesazhi){
    global $dbconn;
    $sql ="INSERT INTO kontakti (emri,mbiemri, email, telefoni, mesazhi) VALUES ('$emri','$mbiemri', '$email', '$telefoni', '$mesazhi')";
    $result = mysqli_query($dbconn,$sql);

    if($result){
        $_SESSION['message'] = "Kontakti " .$emri . " u shtua me sukses";
    }else{
        die('Error tek lidhja me DB:' . mysqli_error($dbconn));
    }


}





function addProdukti($emri, $pershkrimi, $cmimi, $foto){
    global $dbconn;
    $sql = "INSERT INTO produktet (emri, pershkrimi, cmimi, foto) VALUES ('$emri', '$pershkrimi', '$cmimi','$foto')";
    $result = mysqli_query($dbconn,$sql);
    if($result){
        $_SESSION['message'] = "Produkti " .$emri . "u shtua me sukses";
    }else{
        die('Error tek lidhja me DB: ' . mysqli_error($dbconn));
    }
}

function logout(){
    session_destroy();
    //unset($_SESSION['klienti']);
    header("location:index.php");
}


function getMesazhi(){
    global $dbconn;
    $sql ='SELECT kontaktuesiid,emri,mbiemri,email, telefoni, mesazhi FROM kontakti';
    
    $result=mysqli_query($dbconn, $sql);
    if($result){
        return $result;
    }else{
        die('Error tek lidhja me DB:' . mysqli_error($dbconn));
    }
}



function getMembers(){
    global $dbconn;
    $sql = 'SELECT klientiid, emri, mbiemri, username, email FROM klientet';

    $result = mysqli_query($dbconn, $sql);
    if($result){
        return $result;
    }else{
        die('Error tek lidhja me DB: ' . mysqli_error($dbconn));
    }
}

function getProduktet(){
    global $dbconn;
    $sql='SELECT emri, foto, pershkrimi, produktiid, cmimi FROM produktet';
    $result = mysqli_query($dbconn, $sql);

    if($result){
        if(mysqli_num_rows($result)> 0){
            return $result;
        }else{
            echo "nuk ekziston asnje produkt";
        }

    }else{
        die ('Lidhja me DB nuk eshte krijuar: ' . mysqli_error($dbconn));
    }
}

function getProdukti($id){
    global $dbconn;
    $sql = 'SELECT emri, foto, pershkrimi, cmimi FROM produktet WHERE produktiid='.$id;
    $result = mysqli_query($dbconn,$sql);

    if($result){
        if(mysqli_num_rows($result)>0){
            return $produkti = mysqli_fetch_assoc($result);
        }else{
            echo 'Produkti nuk ekziston';
        }

    }else{
        die('Lidhja me DB nuk eshte krijuar '.mysqli_error($dbconn));
    }
}

function merrShitjet(){
    global $dbconn;
    if(isset($_SESSION['klienti'])){
        $id =$_SESSION['klienti']['klientiid'];

        $sql = 'SELECT p.emri, p.pershkrimi, sh.komente, sh.kostoja
        FROM produktet p INNER JOIN shitjet sh
        ON p.produktiid = sh.produktiid
        WHERE sh.klientiid = ' .$id ;
        $result = mysqli_query($dbconn,$sql);
        if($result){
            if(mysqli_num_rows($result)>0){
                return $result;
            }else{
                return null;
            }

        }else{
            die ('Error tek lidhja me DB: ' . mysqli_error($dbconn));
        }
        
        
    }
}


function addShitjet($produktiID, $klientID, $cmimiProduktit){
    global $dbconn;
    $sql="INSERT INTO shitjet(produktiid, klientiid,kostoja) VALUES ('$produktiID','$klientID','$cmimiProduktit')";

    $result = mysqli_query($dbconn,$sql);

    if($result){
        if(mysqli_num_rows($result)>0){
            echo"Shitja u regjistrua me sukses";
        }else{
            echo 'Shitja nuk u regjistrua';
        }

    }else{
        die('Gabim tek: <br>' . mysqli_error($dbconn));
    }
}






function checkLoggedIn(){
    if(isset($_SESSION['klienti'])){
        return true;
    }else{
        return false;
    }
}

?>
