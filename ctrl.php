<?php
include_once 'config.php';

// print_r($_POST);
// print_r($_POST['submit']);
// if(isset($_PSOT['submit'])){

    $name = $_POST['name'];
    $phone = $_POST['pnone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $massage = $_POST['massage'];
    $createdby = 1;
    $createdon = date('d:m:y');

     $query = "INSERT INTO contact SET
        fname = '$name',
        phone = '$phone',
        email = '$email',
        subject = '$subject',
        massage = '$massage',
        ceatedby = '$createdby',
        createdon = '$createdon'";

    $result = mysqli_query($GLOBALS['conn'], $query);

    if($result){
        header('location: index.php?succes');
        // $html.'<script>alert("You request sent succesfully")</script>';
    }else{
        header('location: index.php?error');
        // $html.'<script>alert("You request sent unsuccesfully")</script>';
    }

    

// }

?>