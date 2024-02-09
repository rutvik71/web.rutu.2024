<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    
<?php
require_once "connect.php";?>
<?php
$query = "SELECT * FROM food";
$result = mysqli_query($connect,$query);

if(mysqli_num_rows($result)>0 ){
    while($row = mysqli_fetch_assoc($result)){?>
        
        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            
              <?php  echo $row['firstname'];?>
              <?php  echo $row['secondname'];?>
              <?php  echo $row['email'];?>
              <?php  echo $row['telephone'];?>
            
         </div>
       </div>
        <a href="updateform.php">updateform</a>
      
    
       
<?php
    }
}
?>
</body>
</html>