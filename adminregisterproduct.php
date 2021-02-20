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
<section class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mx-auto col-custom mb-4">
                <!-- Default form register -->
                <form class="text-center border border-light p-5" method="POST" action="adminregisterproductaction.php" enctype="multipart/form-data">
                    <p class="h4 mb-4">ثبت محصول</p>
                    <input type="text" id="defaultRegisterProductFormName" name="defaultRegisterProductFormName" class="form-control mb-4" placeholder="نام محصول " />
                    <input type="number" id="defaultRegisterBrandFormQty" name="defaultRegisterProductFormQty" class="form-control mb-4" placeholder="موجودی در انبار" />
                    <input type="number"  max="10000000000" id="defaultRegisterBrandFormPrice" name="defaultRegisterProductFormPrice" class="form-control mb-4" placeholder="قیمت" />
                    <input type="text" id="defaultRegisterProductFormGuarantee" name="defaultRegisterProductFormGuarantee" class="form-control mb-4" placeholder="گارانتی" />
                    <input type="text" id="defaultRegisterProductFormRam" name="defaultRegisterProductFormRam" class="form-control mb-4" placeholder="حافظه رم" />
                    <input type="text" id="defaultRegisterProductFormHard" name="defaultRegisterProductFormHard" class="form-control mb-4" placeholder="حافظه داخلی" />
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
                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <option value=<?php echo ($row['brand_id']) ?> class="form-control mb-4"><?php echo ($row['name']) ?></option>
                        <?php } ?>
                    </select>
                    <textarea rows="3" id="defaultRegisterProductFormDescription" name="defaultRegisterProductFormDescription" class="form-control mb-4" placeholder="توضیحات">
              </textarea>
                    <div class="single-input-item  d-flex" class="form-control mb-4">
                        <input type="file" id="defaultRegisterProductFormImage" name="defaultRegisterProductFormImage" multiple class="form-control mb-4 justify-content-center">
                    </div>
                    <div class="single-input-item  d-flex" class="form-control mb-4">
                        <button class="btn btn-info my-4 button-red-color" type="submit">
                            ثبت محصول
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include("include/footer.php"); ?>