<?php include("include/header.php"); ?>
<section class="body-content">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li class="item1 active"></li>
              <li class="item2"></li>
              <li class="item3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/slider1.jpg" alt="Los Angeles" width="1100" height="500" />
              </div>
              <div class="carousel-item">
                <img src="images/slider2.jpg" alt="Chicago" width="1100" height="500" />
              </div>

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="border d-flex p-4 align-items-center">
            <div class="w-25">
              <img class="w-100" src="images/3.PNG" />
            </div>
            <div class="text-right pr-2">
              <div>
                <b>پشتیبانی 24 ساعته</b>
              </div>

              <small>پاسخگویی شبانه روزی</small>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="border d-flex p-4 align-items-center">
            <div class="w-25">
              <img class="w-100" src="images/4.PNG" />
            </div>
            <div class="text-right pr-2">
              <div>
                <b>با اعتماد بخرید</b>
              </div>
              <small>محصولات اصل و با کیفیت</small>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="border d-flex p-4 align-items-center">
            <div class="w-25">
              <img class="w-100" src="images/5.PNG" />
            </div>
            <div class="text-right pr-2">
              <div>
                <b>پرداخت امن</b>
              </div>
              <small>امنیت پرداخت تضمین شده</small>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="border d-flex p-4 align-items-center">
            <div class="w-25">
              <img class="w-100" src="images/6.PNG" />
            </div>
            <div class="text-right pr-2">
              <div>
                <b>ارسال رایگان</b>
              </div>
              <small>مبالغ بالای 100 هزار تومان</small>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="row mb-5">
          <div class="col-12 col-md-6">
            <img class="w-100" src="images/7.jpg" />
          </div>
          <div class="col-12 col-md-6">
            <img class="w-100" src="images/8.jpg" />
          </div>
        </div>
      </div>

        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="custommenu-title-blog position-relative d-inline">
                    <span>محصولات شانا</span>
                </h3>
            </div>
        </div>
        <?php
        $link = mysqli_connect("localhost:3307", "root", "", "shop");
        $link->set_charset("utf8");
        if (mysqli_connect_errno()) {
            exit("error:" . mysqli_connect_error());
        }
        $query = "SELECT * from product ";
        $result = mysqli_query($link, $query);
        ?>

        <div class="row mb-5">


            <?php
            $counter = 0;
            while ($row = mysqli_fetch_array($result)) {
                $counter++;
            ?>
                <div class="col-12 col-md-6 col-lg-3" style="margin-top: 10px;" >
                    <div class="card h-100">
                        <img src="images/product/<?php echo ($row['image_address']) ?>" class="card-img-top h-35" />
                        <div class="card-body text-right d-flex justify-content-between flex-column">
                            <div class="w-100 d-flex justify-content-between">
                                <h5 class="card-title"><?php echo ($row['name']) ?></h5>
                                <span><?php echo ($row['price']) ?></span>
                            </div>
                            <p class="card-text" style="flex:auto">
                                <?php echo ($row['description']) ?>
                            </p>
                            <div class="w-100 text-center">
                                <a href="detail.php?id=<?php echo ($row['product_id']); ?>" class="btn btn-primary">مشاهده و افزودن به سبد خرید</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }
            ?>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row newsletter">
            <div class="container">
                <div class="row h-100">
                    <div class="col-12 h-100 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-center">
                            <h3>ثبت نام در خبرنامه</h3>
                            <div class="mb-4">
                                برای دریافت تخفیف های ویژه و رویداد ها عضو شوید
                            </div>
                        </div>
                        <div class="d-flex">
                            <input class="input-text border-0 h-100 pl-5 pr-2" type="email" name="email" placeholder="ایمیل خود را وارد کنید." />
                            <button class="btn btn-primary">اشتراک</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("include/footer.php"); ?>