<html>
<head>
 <title>Login Sederhana Dengan MySqli</title>
 <style>
  .form {
   margin: 10% 0 0 25%;
   float: left;
   width: 60%;
  }
  .input {
   padding: 1%;
   color: #777777;
   font-size: 14pt;
   float: left;
   width: 80%;
   margin-bottom: 1%;
  }
  .submit {
   padding: 1%;
   color: #fff;
   background-color: #ff4d94;
   font-size: 14pt;
   font-family: Times New Roman;
   float: left;
   width: 25%;
  }
  .welcome {
   color: #ff4d94;
   font-size: 20pt;
   font-weight: 900;
   font-family: Centaur;
  }


  </style>

</head>
<body>

<div class="form">
<span class="welcome">Daftar</span>
 <form action="" method="post">
  <input class="input" type="text" name="username" placeholder="Username"><br>
  <input class="input" type="password" name="password" placeholder="Password"><br>
  <input class="submit" type="submit" value="Daftar" name="simpan">
<br><br>
<br><br><br>
<br><br>

 </form>
</div>

</body>
</html>

<?php
include 'db.php';

if (@$_POST['simpan']) {

  $username = @$_POST['username'];
  $passwordold = @$_POST['password'];

  $password = md5($passwordold);

  mysqli_query($connect, "INSERT INTO user(username,password) VALUES ('$username', '$password')");

?>

<script type="text/javascript">
  alert("SIMPAN berhasil");
  window.location.href="index2.php"

</script>

<?php  }
 ?> 