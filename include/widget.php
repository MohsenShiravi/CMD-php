<?php
function addwidget($data,$img){
    $connection=config();
    $sql="INSERT INTO widget_tbl (title,text,img,url_details) VALUES ('$data[title]','$data[text]','$img','$data[url_details]')";
    mysqli_query($connection,$sql);

    return $result;
}
function listwidgetadmin()
{
    $connection = config();
    $sql = "SELECT * FROM widget_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}
function deletewidget($id){
    $connection=config();
    $sql="DELETE FROM widget_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function showeditwidget($id){
    $connection=config();
    $sql="SELECT * FROM widget_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function editwidget($data,$id,$img,$oldpic){
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldpic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic=uploader($img,"../images/widget/",$folder,"widget");
    }
    else{
        $pic=$oldpic;
    }
    $connection=config();
    $sql="UPDATE widget_tbl SET title='$data[title]',text='$data[text]',url_details='$data[url_details]',img='$pic' WHERE id='$id'";
    mysqli_query($connection,$sql);
}

function listwidgetdefault()
{
    $connection = config();
    $sql = "SELECT * FROM widget_tbl";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}
