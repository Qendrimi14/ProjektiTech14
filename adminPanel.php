<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AdminPanel</title>
<link rel="stylesheet" type="text/css" href="css/style7.css">
</head>

<body>

<?php include("include/header.php")?>




  <div class="container-fluid p-4">
<form  action="upload.php" method="POST" enctype="multipart/form-data" >
    <fieldset>

    <legend>Shto Produktin</legend>

            
            <div >
                <label  for="emri">Emri</label>  
                <div >
                    <input  name="emri" type="text" placeholder="Emri"  required="">                    
                </div>
            </div>
           
            
            <div class="form-group">
            <label for="pershkrimi">Pershkrimi</label>  
            <div class="col-md-5">
            <input  name="pershkrimi" type="text" placeholder="Pershkrimi" required="">
                
            </div>
            </div>

            
            <div >
            <label for="cmimi">Cmimi</label>  
            <div class="col-md-5">
            <input  name="cmimi" type="text" placeholder="Cmimi"  required="">
                
            </div>
            </div>

            
            <div>
            <label  for="file">Foto</label>
            <div >
                <input id="file" name="file"  type="file">
            </div>
            </div>

            
            <div >
            <label for="submit"></label>
            <div>
                <button name="submit">Shto</button>
            </div>
            </div>

    </fieldset>
</form>
</div>



 






<?php include("include/footer.php") ?>

</body>
</html>