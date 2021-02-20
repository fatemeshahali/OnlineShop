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
<section class="body-content">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 mx-auto col-custom mb-4">
            <!-- Default form register -->
            <form class="text-center border border-light p-5"
            method="POST"
            action="loginaction.php">
              <p class="h4 mb-4">ورود اعضا</p>

              <!-- First name -->
              <input
                type="text"
                id="defaultLoginFormUsername"
                name="defaultLoginFormUsername"
                class="form-control mb-4"
                placeholder="نام کاربری "
              />

              <!-- Password -->
              <input
                type="password"
                id="defaultLoginFormPassword"
                name="defaultLoginFormPassword"
                class="form-control mb-4"
                placeholder="رمز عبور"
              />

              <!-- Newsletter -->
              <div class="custom-control custom-checkbox d-flex" dir="rtl">
                <input
                  type="checkbox"
                  class="custom-control-input"
                  id="keepMeSighnIn"
                />
                <label class="custom-control-label" for="keepMeSighnIn">
                  مرا به خاطر بسپار</label
                >
              </div>

              <div class="single-input-item  d-flex">
                <button
                  class="btn btn-info my-4 button-red-color"
                  type="submit"
                >
                  ورود
                </button>
              </div>
              <div class="d-flex mb-3">
                  <a  href="register.php"> ثبت نام</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php include("include/footer.php"); ?>