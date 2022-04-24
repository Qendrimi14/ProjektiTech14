<!DOCTYPE html>
<html>
    <head>
<title>Members</title>
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
        <h1>Members Information</h1>


        <?php
        ?>
    </div>

    <br>
    <div>
        <table style='border-color:white; border-width:1px; border-style:solid;'>
            <tr>
                <th scope="row" style="border-color:white; border-width:1px; border-style:solid;" >Emri</th>
                <th scope="row" style="border-color:white; border-width:1px; border-style:solid;">Mbiemri</th>
                <th scope="row" style="border-color:white; border-width:1px; border-style:solid;">Email</th>
                <th scope="row" style="border-color:white; border-width:1px; border-style:solid;">Username</th>
            
            </tr>
            
            <?php
                
                $members = getMembers();
                if($members){
                    $i = 0;
                    while($member = mysqli_fetch_assoc($members)){
                        if($i % 2 == 0){
                            echo "<tr></tr>";
                         }else{
                             echo "<tr></tr>";
                        }
                        $kid = $member['klientiid'];
                        
                        echo "<td style='border-color:white; border-width:1px; border-style:solid;'>" .$member['emri'] . "</td>";
                        echo "<td style='border-color:white; border-width:1px; border-style:solid;'>" .$member['mbiemri'] . "</td>";
                        echo "<td style='border-color:white; border-width:1px; border-style:solid;'>" .$member['email'] . "</td>";
                        echo "<td style='border-color:white; border-width:1px; border-style:solid;'>" .$member['username'] . "</td>" ;
                        
                       
                    
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
