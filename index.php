<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php session_start(); 
if(!isset($_SESSION['GV']) && !isset($_SESSION['SV']) && !isset($_SESSION['QT']) ){
  echo "<script>window.location='login.php'</script>";
}

?>



<?php
        if(isset($_SESSION['SV'])){
           include "khoa/menutopSV.php";
        }else
        if(isset($_SESSION['GV'])){
           include "tan/menutopQT.php";
        }else
        if(isset($_SESSION['QT'])){
           include "huy/menutopGV.php";
        }

        ?>


<div class="container">
   <h2>Panels with Contextual Classes </h2>
    
    <div class="row">
        


      <div class="col-sm-3">


        <?php
        if(isset($_SESSION['SV'])){
           include "khoa/dashboardSV.php";
        }
        if(isset($_SESSION['GV'])){
           include "tan/dashboardQT.php";
        }
        if(isset($_SESSION['QT'])){
           include "huy/dashboardGV.php";
        }

        ?>


       </div>
      <div class="col-sm-9">


        
           <?php
            $key='khoa/home.php';
            if(isset($_GET['key'])){
                $key=$_GET['key'];
            }
            include $key;
           ?>


        



      </div>
        



    </div>
    
    
    <div class="panel panel-default">
        <div class="panel-body">A Basic Panel</div>
    </div>
    
</div>


</body>
</html>

