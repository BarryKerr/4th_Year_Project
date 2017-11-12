<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 06/03/2017
 * Time: 22:46
 */
if(isset($_COOKIE["username"])) {

    require_once('conn.php');//get connection to the database
    $studentID = $_POST['student_ID'];
    $fname = $_POST['fName'];
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST)) {
        $sql = "insert into  student values ( :studentID,:fname,:sname,:email,:password)";
        $stmt = $handler->prepare($sql);
        $stmt->bindParam(':studentID', $studentID);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':sname', $sname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        header('Location: http://52.26.52.79/editDeleteStudent.php');
    }
}