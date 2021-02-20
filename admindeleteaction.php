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
    isset($_GET['id']) && !empty($_GET['id'])
) {

    $id = $_GET['id'];
} else {
?>
    <script type="text/javascript">
        window.alert("شناسه محصول وارد نشده است");
        location.replace("productlist.php");
    </script>
<?php
}

$link = mysqli_connect("localhost:3307", "root", "", "shop");
$link->set_charset("utf8");
if (mysqli_connect_errno()) {
    exit("error:" . mysqli_connect_error());
}

$imgquery = "SELECT image_address FROM product WHERE product_id=$id'";
if (mysqli_query($link, $imgquery) === true) {
    $imgaddress = $imgquery['image_address'];
} else { ?>
    <script type="text/javascript">
        window.alert("مدیر گرامی تصویر محصول یافت نشد");
        location.replace("productlist.php");
    </script>
    <?php}

$target_file="images/product/".$imgaddress;
if(!unlink($target_file)) ?>
    <script type="text/javascript">
        window.alert("مدیر گرامی حذف محصول با خطا مواجه شد");
        location.replace("productlist.php");
    </script>
<?php


$query = "DELETE FROM product  
where product_id='$id'";
if (mysqli_query($link, $query) === true) { ?>
    <script type="text/javascript">
        window.alert("مدیر گرامی حذف محصول با موفقیت انجام شد");
        location.replace("productlist.php");
    </script>
    <?php}
else{
     ?>
    <script type="text/javascript">
        window.alert("مدیر گرامی حذف محصول با خطا مواجه شد");
        location.replace("productlist.php");
    </script>
<?php

}
}
?>
<?php include("include/footer.php");
exit(); ?>