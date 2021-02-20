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
            method="post"
            action="registeraction.php">
              <p class="h4 mb-4">ثبت نام</p>

              <div class="form-row mb-4">
                <div class="col">
                  <!-- First name -->
                  <input
                    type="text"
                    id="defaultRegisterFormFirstName"
                    name="defaultRegisterFormFirstName"
                    class="form-control"
                    placeholder="نام"
                  />
                </div>
                <div class="col">
                  <!-- Last name -->
                  <input
                    type="text"
                    id="defaultRegisterFormLastName"
                    name="defaultRegisterFormLastName"
                    class="form-control"
                    placeholder="نام خانوادگی"
                  />
                </div>
              </div>
              <!-- E-mail -->
              <input
                type="email"
                id="defaultRegisterFormEmail"
                name="defaultRegisterFormEmail"
                class="form-control mb-4"
                placeholder="پست الکترونیکی"
              />

              <!-- Password -->
              <input
                type="password"
                id="defaultRegisterFormPassword"
                name="defaultRegisterFormPassword"
                class="form-control mb-4"
                placeholder="رمز عبور"
              />

               <!-- RePassword -->
               <input
                type="password"
                id="defaultRegisterFormRePassword"
                name="defaultRegisterFormRePassword"
                class="form-control mb-4"
                placeholder="تکرار رمز عبور"
              />

              <!-- Phone number -->
              <input
                type="text"
                id="defaultRegisterFormMobile"
                name="defaultRegisterFormMobile"
                class="form-control mb-4"
                placeholder="موبایل"
              />

              <!-- Newsletter -->
              <div class="custom-control custom-checkbox d-flex" dir="rtl">
                <input
                  type="checkbox"
                  class="custom-control-input"
                  id="defaultRegisterFormNewsletter"
                />
                <label
                  class="custom-control-label"
                  for="defaultRegisterFormNewsletter"
                  >عضویت در خبرنامه</label
                >
              </div>

              <!-- Sign up button -->
              <div class="single-input-item mb-3 d-flex">
                <button
                  class="btn btn-info my-4 button-red-color"
                  type="submit"
                >
                  ثبت نام
                </button>
              </div>

              <hr color="#0062cc" />
              <p>
                <em>ثبت نام</em> به منزله پذیرفتن
                <a href="" target="_blank">قوانین فروشگاه</a>
                است.
              </p>
            </form>
          </div>
        </div>
      </div>
</section>
      <?php include("include/footer.php"); ?>