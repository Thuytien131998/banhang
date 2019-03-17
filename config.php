<?php
$con = mysqli_connect("localhost","root","","banhang");
if(mysqli_connect_errno()){
    echo "Ket noi khong thanh cong !" .mysqli_connect_errno();
}
mysqli_query($con,"SET CHARACTER SET 'utf8'");
mysqli_query($con,"SET SESSION conlation_connection='utf8_unicode_ci'");
?>