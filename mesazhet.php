<!DOCTYPE html>
<html>
    <head>
<title>Mesazhet</title>
<link rel="stylesheet" type="text/css" href="css/style7.css">


    </head>
<body>

<?php include("include/header.php")?>
    

    <div>
        <div>
            <nav>
                <div>
                    <button>
                        <span></span>
                    </button>
                    <div>
                        <form action="">
                            <input type="text" placeholder="Search">
                            <button>Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>



<div>
    <div>
        <h1>Mesazhet nga Klientet</h1>


        <?php
        ?>
    </div>

    <br>
    <div>
        <table style='border-color:white; border-width:1px; border-style:solid;'>
            <tr>
                <th scope="row" style="border-color:white; border-width:1px; border-style:solid;">Emri</th>
                <th scope="row" style="border-color:white; border-width:1px; border-style:solid;">Mbiemri</th>
                <th scope="row" style="border-color:white; border-width:1px; border-style:solid;">Email</th>
                <th scope="row" style="border-color:white; border-width:1px; border-style:solid;">Telefoni</th>
                <th scope="row" style="border-color:white; border-width:1px; border-style:solid;">Mesazhi</th>
                
            </tr>

            <?php
                
                $mesazhet = getMesazhi();
                if($mesazhet){
                    $i=0;
                    while($mesazhi = mysqli_fetch_assoc($mesazhet)){
                        if($i % 2 == 0){
                            echo "<tr></tr>";
                        }else{
                            echo "<tr></tr>";
                        }
                        $mes = $mesazhi['kontaktuesiid'];
                        echo "<td style='border-color:white; border-width:1px; border-style:solid;'>" .$mesazhi['emri'] . "</td>";
                        echo "<td style='border-color:white; border-width:1px; border-style:solid;'>" .$mesazhi['mbiemri'] . "</td>";
                        echo "<td style='border-color:white; border-width:1px; border-style:solid;'>" .$mesazhi['email'] . "</td>";
                        echo "<td style='border-color:white; border-width:1px; border-style:solid;'>" .$mesazhi['telefoni'] . "</td>";
                        echo "<td style='border-color:white; border-width:1px; border-style:solid;'>" .$mesazhi['mesazhi'] . "</td>";

                        

                        $i++;

                    }
                    
                }
 
              
            ?>






        </table>
    </div>
</div>



<?php include("include/footer.php") ?>


 
</body>
</html>
