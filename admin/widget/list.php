    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست ویجکت های اصلی وب سایت
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>  عنوان ویجکت</th>
                        <th> متن ویجکت</th>
                        <th>لینک اطلاعات</th>
                        <th>تصویر </th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $list=listwidgetadmin();
                        foreach ($list as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title']; ?></td>
                        <td><?php echo $val['text']; ?></td>
                        <td><?php echo $val['url_details']; ?></td>
                        <td><img width="60"  src="<?php echo $val['img']; ?>"/></td>
                        <td><a href="dashbord.php?m=widget&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=widget&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
