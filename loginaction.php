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
if(isset($_POST['defaultLoginFormUsername'])&& !empty($_POST['defaultLoginFormUsername'])&&
isset($_POST['defaultLoginFormPassword'])&& !empty($_POST['defaultLoginFormPassword']))
{$username=$_POST['defaultLoginFormUsername'];
$pass=$_POST['defaultLoginFormPassword'];
}
else{
?>
<script type="text/javascript">
     window.alert("تمامی فیلد ها باید پر شوند");
     location.replace("login.php");

</script>
<?php
}
$link=mysqli_connect("localhost:3307","root","","shop");
$link->set_charset("utf8");
if(mysqli_connect_errno())
{
	 exit("error:".mysqli_connect_error());
}
 $query="SELECT * FROM user WHERE email='$username' AND password='$pass'";
$resualt=mysqli_query($link,$query);
$row=mysqli_fetch_array($resualt);
if($row)
{
	$_SESSION["login"]=true;
	$_SESSION["username"]=$username;
	$_SESSION["realname"]=$row['first_name'];
	if($row['type']==0){
		$_SESSION['usertype']="public";}
	elseif($row['type']==1){
        $_SESSION['usertype']="admin";}
        ?>
<script type="text/javascript">
     window.alert("ورود با موفقیت انجام شد");
     location.replace("index.php");
</script>
<?php
}
else{
    ?>
    <script type="text/javascript">
         window.alert("نام کاربری یا کلمه عبور نادرست است");
         location.replace("login.php");
    
    </script>
    <?php
    
          }
    ?>
<?php include("include/footer.php"); ?>