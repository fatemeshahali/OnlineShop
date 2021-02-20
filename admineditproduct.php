<?php include("include/header.php"); ?>
<?php
if (isset($_SESSION['usertype']) && $_SESSION['usertype'] !== "admin") {

?>
    <script type="text/javascript">
        location.replace("index.php");
    </script>
<?php
}
?>
<?php
$code=0;
if(isset($_GET['id']))
{	$code=$_GET['id'];}
$link=mysqli_connect("localhost:3307","root","","shop");
$link->set_charset("utf8");
if(mysqli_connect_errno())
{
	 exit("error:".mysqli_connect_error());
}
 $query="SELECT * FROM product WHERE product_id=$code ";
 $resualt=mysqli_query($link,$query);
$row=mysqli_fetch_array($resualt);
if($row)
{?>
<section class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto col-custom mb-4">
                <!-- Default form register -->
                <form class="text-center border border-light p-5" method="POST" action="admineditproductaction.php?id=<?php echo($row['product_id'])?>" enctype="multipart/form-data">
                    <p class="h4 mb-4">ویرایش محصول</p>
                    <input value="<?php echo($row['name']) ?>" type="text" id="defaultRegisterProductFormName" name="defaultRegisterProductFormName" class="form-control mb-4" placeholder="نام برند " />
                    <input value="<?php echo($row['qty']) ?>" type="number" id="defaultRegisterBrandFormQty" name="defaultRegisterProductFormQty" class="form-control mb-4" placeholder="موجودی در انبار" />
                    <input value="<?php echo($row['price']) ?>" type="number"  max="10000000000" id="defaultRegisterBrandFormPrice" name="defaultRegisterProductFormPrice" class="form-control mb-4" placeholder="قیمت" />
                    <input value="<?php echo($row['guaratee']) ?>" type="text" id="defaultRegisterProductFormGuarantee" name="defaultRegisterProductFormGuarantee" class="form-control mb-4" placeholder="گارانتی" />
                    <input value="<?php echo($row['ram']) ?>" type="text" id="defaultRegisterProductFormRam" name="defaultRegisterProductFormRam" class="form-control mb-4" placeholder="حافظه رم" />
                    <input value="<?php echo($row['hard']) ?>" type="text" id="defaultRegisterProductFormHard" name="defaultRegisterProductFormHard" class="form-control mb-4" placeholder="حافظه داخلی" />
                    <?php
                    $link = mysqli_connect("localhost:3307", "root", "", "shop");
                    $link->set_charset("utf8");
                    if (mysqli_connect_errno()) {
                        exit("error:" . mysqli_connect_error());
                    }
                    $query = "SELECT * from brand ";
                    $result = mysqli_query($link, $query);
                    ?>
                    <select name="defaultRegisterProductFormBrand" class="form-control mb-4">
                        <?php
                        while ($row1 = mysqli_fetch_array($result)) {
                        ?>

                            <option <?php if($row1['brand_id']==$row['brand_id']) echo("selected") ?> value=<?php echo ($row1['brand_id']) ?> class="form-control mb-4"><?php echo ($row1['name']) ?></option>
                        <?php } ?>
                    </select>
                    <textarea rows="3" id="defaultRegisterProductFormDescription" name="defaultRegisterProductFormDescription" class="form-control mb-4" placeholder="توضیحات">
                    <?php echo($row['description']) ?>
              </textarea>
                    <!-- <div class="single-input-item  d-flex" class="form-control mb-4">
                        <input type="file" id="defaultRegisterProductFormImage" name="defaultRegisterProductFormImage" multiple class="form-control mb-4 justify-content-center">
                    </div> -->
                    <div class="single-input-item  d-flex" class="form-control mb-4">
                        <button class="btn btn-info my-4 button-red-color" type="submit">
                            ویرایش محصول
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php } include("include/footer.php"); ?>