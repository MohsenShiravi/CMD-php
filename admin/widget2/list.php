    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست ویجت2 وب سایت
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>  عنوان ویجت</th>
                        <th> متن ویجت</th>
                        <th>تصویر </th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $list=listwidget2admin();
                        foreach ($list as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title']; ?></td>
                        <td><?php echo $val['text']; ?></td>
                        <td><img width="60"  src="<?php echo $val['img']; ?>"/></td>
                        <td><a href="dashbord.php?m=widget2&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=widget2&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
