<?php
include 'configdb.php';
if(isset($_POST['login_btn'])){
  $username=mysqli_real_escape_string($conn,trim($_POST['username']));
  $password=mysqli_real_escape_string($conn,md5($_POST['password']));
  if(empty($username)&&empty($password)){
    $error= 'Помилка в авторизації перевірте вхідні дані';
    header('location:../index');
  }else{
 //chek login
   $result=mysqli_query($conn,"SELECT * FROM `multi_login` WHERE `username`='$username' AND password='$password'");
   $row=mysqli_fetch_assoc($result);
   $count=mysqli_num_rows($result);
   if($count==1){
    $_SESSION['user']=array(
     'username'=>$row['username'],
     'password'=>$row['password'],
     'user_type'=>$row['user_type'],
     'id'=>$row['id']
   );
    $role=$_SESSION['user']['user_type'];
   //redirect from role
    switch($role){
      case 'Юзер':
      header("location: ".$_SERVER["HTTP_REFERER"]);
      break;
      case 'Адміністрація':
      header("location: ".$_SERVER["HTTP_REFERER"]);
      break;
    }
  }else{
   echo "<script>alert('Пароль або логін невірні')
   window.location = '../index';
   </script>";
 }
}
}
?>