

<?php include("include/header.php"); ?>
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
    <div class="row d-flex flex-row">
        <div class="col-6 d-flex align-content-center justify-content-center my-5 p-4  ">
          <div class="w-75 border d-flex align-items-center justify-content-center">
            <img src="images/product/<?php echo($row['image_address']) ?>" class="w-100 h-100 shadow-sm">
          </div>
        </div>
        <div class="col-6 d-flex flex-column  my-5" dir="rtl">
            <div class="d-flex flex-column border-bottom w-75">
                <h2 class=" d-flex justify-content-start w-100 font-weight-bold"><?php echo($row['name']) ?></h2>
                <div class="d-flex py-3">
                    <img src="images/star.png" style="width: 20px; height: 20px;">
                    <img src="images/star.png" style="width: 20px; height: 20px;">
                    <img src="images/star.png" style="width: 20px; height: 20px;">
                    <img src="images/star.png" style="width: 20px; height: 20px;">
                    <img src="images/star.png" style="width: 20px; height: 20px;">
                </div>
                <div class="d-flex justify-content-start w-100 amount-style font-weight-bold pb-3"><?php echo($row['price']) ?></div>
                <div class="d-flex justify-content-start w-100  pb-5"> <?php echo($row['description']) ?></div>
            </div>
          <div class="d-flex flex-column">
            <div class="font-weight-bold w-100 d-flex justify-content-start pt-3">گزینه های در دسترس</div>
            <div class="d-flex flex-column w-100 pt-5">
              <div class="font-weight-bold w-100 d-flex justify-content-start pb-3">رنگ</div>
              <div class="w-100 d-flex justify-content-start">
                  <img src="images/color1.jpg" class="color-box shadow-sm border mx-1">
                  <img src="images/color2.jpg" class="color-box shadow-sm border mx-1">
                  <img src="images/color3.jpg" class="color-box shadow-sm border mx-1">
                  <img src="images/color5.jpg" class="color-box shadow-sm border mx-1">
              </div>
              <div class="d-flex align-content-center w-100 pt-5" dir="rtl">
                <div class="d-flex align-items-center">
                  <div class="font-weight-bold pl-3" >تعداد</div>
                  <input type="text" class="w-50" style="height: 38px">
                </div>
                  <button class="btn btn-primary  w-25 " type="button">افزودن به سبد</button>
              </div>
              <div class="d-flex w-75 mt-3">
                        <div class="font-weight-bold" style="color: red">تعداد موجود در انبار:</div>
                        <div class="font-weight-bold" style="color: red"><?php echo($row['qty']) ?></div>
                    </div>
              <div class="d-flex pt-5 flex-column">
                <div class="d-flex align-items-center pt-2">
                  <div class="font-weight-bold">برند: </div>
                  <span class="pr-2"><?php echo($row['brand_id']) ?></span>
                </div>
                <div class="d-flex align-items-center pt-2">
                  <div class="font-weight-bold">هارد: </div>
                  <span class="pr-2"><?php echo($row['hard']) ?></span>
                </div>
                <div class="d-flex align-items-center pt-2">
                  <div class="font-weight-bold">رم: </div>
                  <span class="pr-2"><?php echo($row['ram']) ?></span>
                </div>
                <div class="d-flex align-items-center pt-2">
                  <div class="font-weight-bold">گارانتی: </div>
                  <span class="pr-2"><?php echo($row['guaratee']) ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6"></div>
    </div>
</section>
<?php } ?>
<?php include("include/footer.php"); ?>