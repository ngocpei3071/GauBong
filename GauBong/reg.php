<?php
require 'db/connect.php';
if(isset($_POST['btn-reg'])){
    
    
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $preferences = $_POST['preferences'];
    
    $nationality = $_POST['nationality'];
    $note = $_POST['note'];
    if(!empty($studentId)&&!empty($name)&&!empty($email)&&!empty($gender)&&!empty($preferences)&&!empty($nationality)){
    //     echo "<pre>";
    // print_r($_POST);
    include "index.html";
    $sql = " INSERT INTO `taikhoan` (`studentId`, `name`,`email`,`gender`,`preferences`,`nationality`,`note`) VALUES ('$studentId', '$name','$email','$gender','$preferences','$nationality','$note')";
    if($conn->query($sql)===TRUE){
        echo "lưu dữ liệu thành công";
    }else{
        echo "lỗi{$sql}".$conn->error;
    }
    }else{
        echo "Bạn cần nhập đầy đủ thông tin trước khi đăng ký";
    }
    

}
    
?>