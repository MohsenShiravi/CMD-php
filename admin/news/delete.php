<?php
$id=$_GET['id'];
deletenews($id);
header("location:dashbord.php?m=news&p=list");
?>