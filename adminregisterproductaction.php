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
    isset($_POST['defaultRegisterProductFormName']) && !empty($_POST['defaultRegisterProductFormName']) &&
    isset($_POST['defaultRegisterProductFormQty']) && !empty($_POST['defaultRegisterProductFormQty']) &&
    isset($_POST['defaultRegisterProductFormPrice']) && !empty($_POST['defaultRegisterProductFormPrice']) &&
    isset($_POST['defaultRegisterProductFormGuarantee']) && !empty($_POST['defaultRegisterProductFormGuarantee']) &&
    isset($_POST['defaultRegisterProductFormDescription']) && !empty($_POST['defaultRegisterProductFormDescription']) &&
    isset($_POST['defaultRegisterProductFormBrand']) && !empty($_POST['defaultRegisterProductFormBrand']) &&
    isset($_POST['defaultRegisterProductFormRam']) && !empty($_POST['defaultRegisterProductFormRam']) &&
    isset($_POST['defaultRegisterProductFormHard']) && !empty($_POST['defaultRegisterProductFormHard'])
) {
    $name = $_POST['defaultRegisterProductFormName'];
    $qty = $_POST['defaultRegisterProductFormQty'];
    $price = $_POST['defaultRegisterProductFormPrice'];
    $guarantee = $_POST['defaultRegisterProductFormGuarantee'];
    $brand = $_POST['defaultRegisterProductFormBrand'];
    $ram = $_POST['defaultRegisterProductFormRam'];
    $hard = $_POST['defaultRegisterProductFormHard'];
    $description = $_POST['defaultRegisterProductFormDescription'];
    $image = basename($_FILES['defaultRegisterProductFormImage']['name']);
} else {
?>
    <script type="text/javascript">
        window.alert("تمامی فیلد ها باید پر شوند");
        location.replace("adminregisterproduct.php");
    </script>
<?php
}
$uploadok = 1;
$target_dir = "images/product/";
$target_file = $target_dir . basename($_FILES["defaultRegisterProductFormImage"]["name"]);
$img_type = pathinfo($target_file, PATHINFO_EXTENSION);
$checked = getimagesize($_FILES["defaultRegisterProductFormImage"]["tmp_name"]);
if ($checked !== false) {
    $uploadok = 1;
} else {
    $uploadok = 0;
?>
    <script type="text/javascript">
        window.alert("پرونده انتخابی عکس نمی باشد");
        location.replace("adminregisterproduct.php");
    </script>
<?php

}
if (file_exists($target_file)) {
    $uploadok = 0;
?>
    <script type="text/javascript">
        window.alert("پرونده ای با این نام موجود است");
        location.replace("adminregisterproduct.php");
    </script>
<?php
} ?>
<?php
if ($img_type != "jpg" && $img_type != "png" && $img_type != "jpeg" && $img_type != "gif") {
    $uploadok = 0;
?>
    <script type="text/javascript">
        window.alert("پسوند فایل های قابل قبول شامل jpeg و gif وpng می باشد");
        location.replace("adminregisterproduct.php");
    </script>
<?php
}
if ($uploadok == 0) {
?>
    <script type="text/javascript">
        window.alert("آپلود تصویر با خطا انجام شد");
        location.replace("adminregisterproduct.php");
    </script>
    <?php
} else {
    if (move_uploaded_file($_FILES["defaultRegisterProductFormImage"]["tmp_name"], $target_file)) {
        $uploadok = 1;
    } else {
        $uploadok = 0;
    ?>
        <script type="text/javascript">
            window.alert("پسوند فایل های قابل قبول شامل jpeg و gif وpng می باشد");
            location.replace("adminregisterproduct.php");
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
$query = "INSERT INTO product(name,price,qty,description,image_address,brand_id,guaratee,ram,hard) VALUES('$name',
'$price','$qty','$description','$image','$brand','$guarantee','$ram','$hard')";
if (mysqli_query($link, $query) === true) { ?>
    <script type="text/javascript">
        window.alert("مدیر گرامی ثبت محصول با موفقیت انجام شد");
        location.replace("adminregisterproduct.php");
    </script>
    <?php}
else{
     ?>
    <script type="text/javascript">
        window.alert("مدیر گرامی ثبت محصول با خطا مواجه شد");
        location.replace("adminregisterproduct.php");
    </script>
<?php

}
?>
<?php include("include/footer.php");
exit(); ?>