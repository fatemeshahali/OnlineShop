<?php include("include/header.php"); ?>
  <?php
   if((isset($_SESSION['login']) && $_SESSION['login']===true))
	  { 
?>
<script type="text/javascript">
     location.replace("index.php");
</script>
<?php
	  }
?>

<?php
if(isset($_POST['defaultRegisterFormFirstName'])&& !empty($_POST['defaultRegisterFormFirstName'])&&
   isset($_POST['defaultRegisterFormLastName'])&& !empty($_POST['defaultRegisterFormLastName'])&&
isset($_POST['defaultRegisterFormEmail'])&& !empty($_POST['defaultRegisterFormEmail'])&&
isset($_POST['defaultRegisterFormMobile'])&& !empty($_POST['defaultRegisterFormMobile'])&&
isset($_POST['defaultRegisterFormPassword'])&& !empty($_POST['defaultRegisterFormPassword'])&&
isset($_POST['defaultRegisterFormRePassword'])&& !empty($_POST['defaultRegisterFormRePassword']))
{$firstname=$_POST['defaultRegisterFormFirstName'];
$lastname=$_POST['defaultRegisterFormLastName'];
$mobile=$_POST['defaultRegisterFormMobile'];
$email=$_POST['defaultRegisterFormEmail'];
$pass=$_POST['defaultRegisterFormPassword'];
$repass=$_POST['defaultRegisterFormRePassword'];

}
else{
?>
<script type="text/javascript">
     window.alert("تمامی فیلد ها باید پر شوند");
     location.replace("register.php");

</script>
<?php

	  }
?>
<?php
if($pass != $repass){?>
     <script type="text/javascript">
          window.alert("کلمه عبور و تکرار آن یکسان نیست");
          location.replace("register.php");
     
     </script>

<?php
}
$link=mysqli_connect("localhost:3307","root","","shop");
$link->set_charset("utf8");
if(mysqli_connect_errno())
{
	 exit("error:".mysqli_connect_error());
}
 $query="INSERT INTO user(first_name,last_name,email,mobile,password,type) VALUES('$firstname','$lastname','$email','$mobile','$pass','0')";
 if(mysqli_query($link,$query)===true)
 {?> 
  <script type="text/javascript">
          window.alert("کاربر گرامی ثبت نام شما با موفقیت انجام شد");
          location.replace("login.php");
     
     </script>

 <?php}
else{
     ?>
     <script type="text/javascript">
          window.alert("ثبت نام با خطا مواجه شد");
          location.replace("register.php");
     
     </script>
     <?php
     
            }
     ?>
<?php include("include/footer.php");
exit();?>