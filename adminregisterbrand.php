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
                <form class="text-center border border-light p-5" method="POST" action="adminregisterbrandaction.php" enctype="multipart/form-data">
                    <p class="h4 mb-4">ثبت برند</p>
                    <input type="text" id="defaultRegisterBrandFormName" name="defaultRegisterBrandFormName" class="form-control mb-4" placeholder="نام برند " />
                    <textarea rows="3" id="defaultRegisterBrandFormDescription" name="defaultRegisterBrandFormDescription" class="form-control mb-4" placeholder="توضیحات">
              </textarea>
                    <div class="single-input-item  d-flex" class="form-control mb-4">
                        <!-- <label for="defaultRegisterBrandFormImage" dir="rtl" calss="justify-content-center d-flex"> تصویر:</label> -->
                        <input type="file" id="defaultRegisterBrandFormImage" name="defaultRegisterBrandFormImage" multiple class="form-control mb-4 justify-content-center">
                    </div>
                    <div class="single-input-item  d-flex" class="form-control mb-4">
                        <button class="btn btn-info my-4 button-red-color" type="submit">
                            ثبت برند
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include("include/footer.php"); ?>