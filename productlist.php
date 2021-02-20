<?php include("include/header.php"); ?>
<div class="row d-flex justify-content-center align-items-center">
    <div class="col-10">
        <table class="table table-bordered  text-center ">
            <thead class="thead-light">
            <tr>
                <th class="table-style" scope="col">کد محصول</th>
                <th class="table-style" scope="col">عکس محصول</th>
                <th class="table-style" scope="col">اسم محصول</th>
                <th  class="table-style"scope="col">قیمت</th>
                <th class="table-style" scope="col">تعداد</th>
                <th class="table-style" scope="col">اسم برند</th>
                <th class="table-style" scope="col">توضیحات</th>
                <th class="table-style" scope="col">گارانتی</th>
                <th class="table-style" scope="col">رم</th>
                <th class="table-style" scope="col">هارد</th>
                <th class="table-style" scope="col">ویرایش</th>
                <th class="table-style" scope="col">حذف</th>
            </tr>
            </thead>
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
            <tbody>
            <tr>
                <td class="table-style" scope="row"><?php echo ($row['product_id']) ?></td>
                <td class="table-style"><img src="images/product/<?php echo ($row['image_address']) ?>" style="width: 100px; height: 100px;"></td>
                <td  class="table-style"><?php echo ($row['name']) ?></td>
                <td  class="table-style"><?php echo ($row['price']) ?>تومان </td>
                <td class="table-style"><?php echo ($row['qty']) ?></td>
                <td class="table-style"><?php echo ($row['brand_id']) ?></td>
                <td class="table-style-des" ><?php echo ($row['description']) ?></td>
                <td class="table-style"><?php echo ($row['guaratee']) ?></td>
                <td class="table-style"><?php echo ($row['ram']) ?></td>
                <td class="table-style"><?php echo ($row['hard']) ?></td>
                <td class="table-style"><a href="admineditproduct.php?id=<?php echo ($row['product_id']); ?>"><button type="button" class="btn btn-success w-100">ویرایش</button></a></td>
                <td class="table-style"><a href="admindeleteaction.php?id=<?php echo ($row['product_id']); ?>"><button type="button" class="btn btn-danger w-100">حذف</button></a></td>
            </tr>
            </tbody>
            <?php }
?>
        </table>
    </div>
</div>
<section class="body-content"></section>
<?php include("include/footer.php"); ?>