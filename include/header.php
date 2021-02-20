<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- <link rel="stylesheet" href="css/font.awesome.min.css"> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href='https://cdn.fontcdn.ir/Font/Persian/Yekan/Yekan.css' rel='stylesheet' type='text/css'>
  <title>Document</title>
  <style>
    a:hover {
      text-decoration: none !important
    }

    .search {
      top: 100%;
      left: 0;
      display: none;
    }

    .fa-search:hover .search {
      display: block;
    }
  </style>
</head>

<body dir="rtl">
  <nav>
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-between py-4 position-relative">
          <div><img src="logo.png" width="170px" height="70px" /></div>
          <div>
            <ul>
              <li class="px-2 d-inline dropdown">
                <a class="px-2 d-inline dropbtn" href="index.php">خانه</a>
              </li>
              <?php if (!(isset($_SESSION['login']) && $_SESSION['login'] === true)) { ?>
                <li class="px-2 d-inline dropdown">
                  <a class="px-2 d-inline dropbtn" href="register.php">ثبت نام</a>
                </li>
              <?php } ?>
              <li class="px-2 d-inline"><a href="">درباره ما</a></li>
              <li class="px-2 d-inline"><a href="">تماس با ما</a></li>
              <?php if (isset($_SESSION['usertype']) && $_SESSION['usertype'] === "admin") { ?>
                <li class="px-2 d-inline dropdown">
                  <a class="px-2 d-inline dropbtn" href="">مدیریت</a>
                  <ul class="dropdown-content text-right pt-2 justify-content-around">
                    <li class="px-2 d-inline">
                      <a class="px-2 d-inline menu-title" href="">محصولات</a>
                      <ul class="text-right">
                        <li class="px-2 d-inline"><a href="adminregisterproduct.php">ثبت محصول</a></li>
                        <li class="px-2 d-inline"><a href="productlist.php">مشاهده محصولات</a></li>
                      </ul>
                    </li>
                    <li class="px-2 d-inline">
                      <a class="px-2 d-inline menu-title" href="">برند ها</a>
                      <ul class="text-right">
                        <li class="px-2 d-inline"><a href="adminregisterbrand.php">ثبت برند</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              <?php } ?>
            </ul>
          </div>
          <div>
            <ul>

              <?php if (isset($_SESSION['login']) && $_SESSION['login'] === true) { ?>
                <a href="logout.php">
                  <div class="fas fa-sign-out-alt m-3"></div>
                </a>
              <?php } else { ?>
                <a href="login.php">
                  <div class="fa fa-user m-3"></div>
                </a>
              <?php } ?>

              <div class="fa fa-search m-3 position-relative pb-2"><input class="form-control w-auto position-absolute search " placeholder="جستجو"></div>

              <?php if (isset($_SESSION['usertype']) && $_SESSION['usertype'] === "admin") { ?>
                <a href="productlist.php">
                  <div class="fas fa-list m-3"></div>
                </a>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
