<?php 
    include 'database.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a = new database();
        $a->update('data',['name'=>$name,'email'=>$email,'phone'=>$phone,'subject'=>$subject,'message'=>$message,'updated'=>$date],"id='$id'");
        if ($a == true) {
            header('location:index.php');
        }
    }
?>>