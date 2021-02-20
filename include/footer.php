<footer class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-3 text-right">
            <div>
              <img src="images/witheLogo.png" width="170px" height="100px" />
            </div>
            <p class="justify-content-end m-auto">
              شانا موبایل، سایت فروشگاهی متمرکز بر فروش موبایل و لوازم جانبی
              موبایل است .
            </p>
            <div class="d-flex social-media withe-icon">
              <span
                class="mx-1 d-flex justify-content-center align-items-center"
                ><i class="fab fa-twitter m-auto"></i
              ></span>
              <span
                class="mx-1 d-flex justify-content-center align-items-center"
                ><i class="fab fa-instagram"></i
              ></span>
              <span
                class="mx-1 d-flex justify-content-center align-items-center"
                ><i class="fab fa-linkedin-in"></i
              ></span>
            </div>
          </div>
          <div class="col-6">
            <div class="row text-right">
              <div class="col">
                <h5>اطلاعات</h5>
                <ul>
                  <li class=""><a href="">شرکت ما</a></li>
                  <li class=""><a href="">فروشگاه</a></li>
                  <li class=""><a href="">خدمات ما</a></li>
                  <li class=""><a href="">تماس با ما</a></li>
                </ul>
              </div>
              <div class="col">
                <h5>دسترسی سریع</h5>
                <ul>
                  <li class=""><a href="">خانه</a></li>
                  <li class=""><a href="">فروشگاه</a></li>
                  <li class=""><a href="">درباره ما</a></li>
                  <li class=""><a href="">فروشگاه</a></li>
                  <li class=""><a href="">سبد خرید</a></li>
                </ul>
              </div>
              <div class="col">
                <h5>پشتیبانی</h5>
                <ul>
                  <li class=""><a href="">پشتیبانی آنلاین</a></li>
                  <li class=""><a href="">قوانین ارسال</a></li>
                  <li class=""><a href="">روش های بازگرداندن</a></li>
                  <li class=""><a href="">حریم خصوصی</a></li>
                  <li class=""><a href="">شرایط و قوانین</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-3 d-flex">
            <div class="col-6 align-self-center pl-1">
              <div class="p-2 bg-white m-2 rounded overflow-hidden">
                <img class="w-100" src="images/enamad.png" />
              </div>
            </div>
            <div class="col-6 align-self-center pl-1">
              <div class="p-2 bg-white m-2 rounded overflow-hidden">
                <img class="w-100" src="images/samandehi.png" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script>
      $(document).ready(function () {
        // Activate Carousel
        $("#myCarousel").carousel();

        // Enable Carousel Indicators
        $(".item1").click(function () {
          $("#myCarousel").carousel(0);
        });
        $(".item2").click(function () {
          $("#myCarousel").carousel(1);
        });
        $(".item3").click(function () {
          $("#myCarousel").carousel(2);
        });

        // Enable Carousel Controls
        $(".carousel-control-prev").click(function () {
          $("#myCarousel").carousel("prev");
        });
        $(".carousel-control-next").click(function () {
          $("#myCarousel").carousel("next");
        });
      });
    </script>
  </body>
</html>
