<?php
    if(isset($_POST['btn'])){
        $data=$_POST['frm'];
        addcontact($data);
    }
?>

<h1 class="pageLables">افزودن خبر جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن خبر جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید">

                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm[text]" class="form-control ckeditor" rows="8"></textarea>
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
