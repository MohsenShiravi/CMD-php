<?php
    if(isset($_POST['btn'])){
        $data=$_POST['frm'];
        $folder="widget-".rand();
        $img=uploader('img',"../images/widget/",$folder,"widget");
        addwidget($data,$img);
    }
?>

<h1 class="pageLables">افزودن ویجکت جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن ویجکت جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان ویجکت</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان ویجکت را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">متن ویجکت</label>
                        <textarea  id="editor1" name="frm[text]" class="form-control ckeditor" rows="8"></textarea>
                        <script>
                            CKEDITOR.replace('editor1')
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">لینک اطلاعات</label>
                        <input type="text" name="frm[url_details]" class="form-control" >
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
