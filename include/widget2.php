<?php
function addwidget2($data,$img){
    $connection=config();
    $sql="INSERT INTO widget2_tbl (title,text,img) VALUES ('$data[title]','$data[text]','$img')";
    mysqli_query($connection,$sql);

    return $result;
}
function listwidget2admin()
{
    $connection = config();
    $sql = "SELECT * FROM widget2_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}
function deletewidget2($id){
    $connection=config();
    $sql="DELETE FROM widget2_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function showeditwidget2($id){
    $connection=config();
    $sql="SELECT * FROM widget2_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function editwidget2($data,$id,$img,$oldpic){
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldpic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic=uploader($img,"../images/widget2/",$folder,"widget2");
    }
    else{
        $pic=$oldpic;
    }
    $connection=config();
    $sql="UPDATE widget2_tbl SET title='$data[title]',text='$data[text]',img='$pic' WHERE id='$id'";
    mysqli_query($connection,$sql);
}

function listwidget2default()
{
    $connection = config();
    $sql = "SELECT * FROM widget2_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}
