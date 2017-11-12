<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 27/02/2017
 * Time: 22:51
 */
require_once('conn.php');//open connection to the database

$studentID = $_POST['studentID'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['mail'];
$password = $_POST['pword'];


if(isset($_POST)) {
    $sql = "update student set f_name = :fname,surname = :sname,email = :email, password = :password where Student_ID = :studentID";
    $stmt = $handler->prepare($sql);
    $stmt->bindParam(':studentID', $studentID);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':sname', $sname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    header('Location: http://52.26.52.79/editDeleteStudent.php');
}


