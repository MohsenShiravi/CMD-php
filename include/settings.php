<?php
function settings(){
    $connection=config();
    $sql="SELECT * FROM settings";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function editsettings($data){
    $connection=config();
    $sql="UPDATE settings SET title='$data[title]',description='$data[description]',brand1='$data[brand1]',brand2='$data[brand2]',textbaner='$data[textbaner]',title_product='$data[title_product]',title_news='$data[title_news]',copyright='$data[copyright]',programer='$data[programer]',url_programer='$data[url_programer]'";
    mysqli_query($connection,$sql);
}