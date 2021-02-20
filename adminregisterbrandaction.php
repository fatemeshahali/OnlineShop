<?php include("include/header.php"); ?>
<?php
if ((isset($_SESSION['usertype']) && $_SESSION['usertype'] !== "admin")) {
?>
    <script type="text/javascript">
        location.replace("index.php");
    </script>
<?php
}
?>

<?php
if (
    isset($_POST['defaultRegisterBrandFormName']) && !empty($_POST['defaultRegisterBrandFormName']) &&

    isset($_POST['defaultRegisterBrandFormDescription']) && !empty($_POST['defaultRegisterBrandFormDescription'])
) {
    $name = $_POST['defaultRegisterBrandFormName'];
    $description = $_POST['defaultRegisterBrandFormDescription'];
    $image = basename($_FILES['defaultRegisterBrandFormImage']['name']);
} else {
?>
    <script type="text/javascript">
        window.alert("تمامی فیلد ها باید پر شوند");
        location.replace("adminregisterbrand.php");
    </script>
<?php
}
$uploadok = 1;
$target_dir = "images/brand/";
$target_file = $target_dir . basename($_FILES["defaultRegisterBrandFormImage"]["name"]);
$img_type = pathinfo($target_file, PATHINFO_EXTENSION);
$checked = getimagesize($_FILES["defaultRegisterBrandFormImage"]["tmp_name"]);
if ($checked !== false) {
    $uploadok = 1;
} else {
    $uploadok = 0;
?>
    <script type="text/javascript">
        window.alert("پرونده انتخابی عکس نمی باشد");
        location.replace("adminregisterbrand.php");
    </script>
<?php

}
if (file_exists($target_file)) {
    $uploadok = 0;
?>
    <script type="text/javascript">
        window.alert("پرونده ای با این نام موجود است");
        location.replace("adminregisterbrand.php");
    </script>
<?php
} ?>
<?php
if ($img_type != "jpg" && $img_type != "png" && $img_type != "jpeg" && $img_type != "gif") {
    $uploadok = 0;
?>
    <script type="text/javascript">
        window.alert("پسوند فایل های قابل قبول شامل jpeg و gif وpng می باشد");
        location.replace("adminregisterbrand.php");
    </script>
<?php
}
if ($uploadok == 0) {
?>
    <script type="text/javascript">
        window.alert("آپلود تصویر با خطا انجام شد");
        location.replace("adminregisterbrand.php");
    </script>
    <?php
} else {
    if (move_uploaded_file($_FILES["defaultRegisterBrandFormImage"]["tmp_name"], $target_file)) {
        $uploadok = 1;
    } else {
        $uploadok = 0;
    ?>
        <script type="text/javascript">
            window.alert("پسوند فایل های قابل قبول شامل jpeg و gif وpng می باشد");
            location.replace("adminregisterbrand.php");
        </script>
    <?php
    }
    ?>
<?php
}
$link = mysqli_connect("localhost:3307", "root", "", "shop");
$link->set_charset("utf8");
if (mysqli_connect_errno()) {
    exit("error:" . mysqli_connect_error());
}
$query = "INSERT INTO brand(name,description,image_address) VALUES('$name','$description','$image')";
if (mysqli_query($link, $query) === true) { ?>
    <script type="text/javascript">
        window.alert("مدیر گرامی ثبت برند با موفقیت انجام شد");
        location.replace("adminregisterbrand.php");
    </script>
    <?php}
else{
     ?>
    <script type="text/javascript">
        window.alert("مدیر گرامی ثبت برند با خطا مواجه شد");
        location.replace("adminregisterbrand.php");
    </script>
<?php

}
?>
<?php include("include/footer.php");
exit(); ?>