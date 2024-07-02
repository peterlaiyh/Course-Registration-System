<?php
    $s_id = $_POST["s_id"];
    $pwd = $_POST["pwd"];
    $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
    try{
        $pdo = new PDO($dsn,"root","root");
        $sql = "SELECT * FROM t_student_list WHERE s_id ='$s_id' and pwd = '$pwd'";
        $pdostatement = $pdo -> query($sql); 
        $rownum = $pdostatement -> rowCount();
        if($rownum and $s_id == "s00000"){
            $_SESSION["is_login"] = TRUE;
            $student = $pdostatement -> fetch();
            setcookie("s_id", $s_id);
            setcookie("greeting","<h2>Hello, ".$student["s_name"]." "."!</h2>");
            header("Location: admin/adminboard.php");
        }else if($rownum){
            $_SESSION["is_login"] = TRUE;
            $student = $pdostatement -> fetch();
            setcookie("s_id", $s_id);
            setcookie("greeting","<h2>Hello, ".$student["s_id"]." ".$student["s_name"]." "."!</h2>");
            header("Location: student/studentboard.php");
        }else{
            $_SESSION['is_login'] = FALSE;
            header("Location: login.php?login=error");
        }
    }catch (PDOException $e){
        echo "Error message:".$e -> getMessage();
    }
?>