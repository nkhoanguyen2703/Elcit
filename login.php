<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div style="margin: auto; width: 40%;">
      <h1>Elcit.ctu.edu.vn</h1>
      <p><h4>Khoa công nghệ thông tin và truyền thông</h4></p>
      
      
      
        <form method="POST" action=''>
            <div class="form-group">
              <label for="usr">Name:</label>
              <input type="text" name="txtid" class="form-control" id="usr">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd">
            </div>
            <div class="form-group">
              
              <button type="submit" name='btnlogin' class="btn btn-default">Đăng nhập</button>
            </div>
        </form>
        
        
      
      

  
    </div>
</div>

</body>
</html>
<?php 
      session_start();
        if(isset($_POST['btnlogin'])){
          $id=$_POST['txtid'];
          if($id=='GV'){
            echo "<script>alert('Đăng nhập thành công');window.location='index.php';</script>";
            $_SESSION['GV']='Teacher Selena';
          }
          if($id=='SV'){
            echo "<script>alert('Đăng nhập thành công');window.location='index.php';</script>";
            $_SESSION['SV']='Student John';
          }
          if($id=='QT'){
            echo "<script>alert('Đăng nhập thành công');window.location='index.php';</script>";
            $_SESSION['QT']='Admin';
          }
          else{
            echo "<script>alert('Sai ID hoặc mật khẩu');</script>";
          }
          
        }

?>

