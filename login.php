<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Maxipain
 * Date: 8/2/2019
 * Time: 9:23 AM
 */
include_once 'functions/actions.php';
$obj=new DataOperations();

if(isset($_POST['submit'])){
    $admission = $obj->con->real_escape_string(htmlentities($_POST['admission']));
    $password = md5($_POST['password']);

    $where = array('adm'=>$admission,'student_password'=>$password);
    if($obj->fetch_records('student',$where)){
        $_SESSION['student'] = $admission;
        header('location:index.php');

    }
    else{
        echo "<script>alert('wrong login details')</script>";

    }
}

?>
<html>
<head>
    <title>login</title>
</head>
<body>
<form action="" method="post">
    <p>Admission number</p>
    <input type="text" name="admission" placeholder="Enter username"/>
    <p>Password</p>
    <input type="password" name="password" placeholder="Enter password"/><br><br>
    <button type="submit" name="submit">Login</button>
</form>
</body>
</html>
