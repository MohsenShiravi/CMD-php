<?php
$id=$_GET['id'];
deletewidget2($id);
header("location:dashbord.php?m=widget2&p=list");
?>