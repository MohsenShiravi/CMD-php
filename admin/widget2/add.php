<?php
    if(isset($_POST['btn'])){
        $data=$_POST['frm'];
        $folder="widget2-".rand();
        $img=uploader('img',"../images/widget2/",$folder,"widget2");
        addwidget2($data,$img);
    }
?>

<h1 class="pageLables">افزودن ویجت جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن ویجت جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان ویجت</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان ویجکت را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">متن ویجت</label>
                        <textarea name="frm[text]" class="form-control ckeditor" rows="8"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="img" id="exampleInputFile">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
