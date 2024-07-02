<?php
    $s_id = $_POST["s_id"];
    $pwd = $_POST["pwd"];
    $npwd = $_POST["npwd"];
    $npwd_c = $_POST["npwd_c"];
    $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
    try{
        $pdo = new PDO($dsn,"root","root");
        $sql = "SELECT '*' FROM t_student_list WHERE s_id ='$s_id' and pwd = '$pwd'";
        $pdostatement = $pdo -> query($sql); 
        $rownum = $pdostatement -> rowCount();
        if($pwd==$npwd){
            header("Location: changepw.php?login=samepwd");
        }else if($npwd!=$npwd_c){
            header("Location: changepw.php?login=wrongconfirm");
        }else if($rownum){
            $sql = "UPDATE t_student_list SET pwd = '$npwd' WHERE s_id ='$s_id'";
            $pdostatement = $pdo -> query($sql); 
            echo "<script>alert('Password Changed');window.location.href='login.php';</script>";
        }else{
            header("Location: changepw.php?login=error");
        }
    }catch (PDOException $e){
        echo "Error message:".$e -> getMessage();
    }
?>