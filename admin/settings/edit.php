<?php
if(isset($_POST['btn'])){
    $data=$_POST['frm'];

    editsettings($data);
   header("location:dashbord.php?m=settings&p=edit");
}
?>

<h1 class="pageLables">
    ویرایش تنظیمات وب سایت
</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش  تنظیمات
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان </label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان وب سایت را وارد کنید" value="<?php echo $settings['title'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">عنوان description</label>
                        <input type="text" name="frm[description]" class="form-control" value="<?php echo $settings['description'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان برند 1</label>
                        <input type="text" name="frm[brand1]" class="form-control" placeholder="عنوان سرصفحه1 را وارد کنید" value="<?php echo $settings['brand1'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان برند 2 </label>
                        <input type="text" name="frm[brand2]" class="form-control" placeholder="عنوان سرصفحه2 را وارد کنید" value="<?php echo $settings['brand2'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="img" id="exampleInputFile">
                        <img src="<?php echo $settings['img']; ?>" width="60" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان متن بنر </label>
                        <input type="text" name="frm[textbaner]" class="form-control" placeholder="متن روی عکس بنر را وارد کنید" value="<?php echo $settings['textbaner'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان متن محصولات </label>
                        <input type="text" name="frm[title_product]" class="form-control" placeholder="متن سرصفحه محصولات را وارد کنید" value="<?php echo $settings['title_product'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان متن خبر </label>
                        <input type="text" name="frm[title_news]" class="form-control" placeholder="متن سرصفحه خبر را وارد کنید" value="<?php echo $settings['title_news'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">متن کپی رایت </label>
                        <input type="text" name="frm[copyright]" class="form-control" placeholder="متن کپی رایت وب سایت را وارد کنید" value="<?php echo $settings['copyright'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">متن برنامه نویس </label>
                        <input type="text" name="frm[programer]" class="form-control" placeholder="عنوان برنامه نویس را وارد کنید" value="<?php echo $settings['programer'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">لینک برنامه نویس </label>
                        <input type="text" name="frm[url_programer]" class="form-control" placeholder="لینک برنامه نویس را وارد کنید" value="<?php echo $settings['url_programer'];?>">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

