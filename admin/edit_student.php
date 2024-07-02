<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Edit Student</title>
    </head>
    <body>
    <input class="btn btn-link btn-lg" type="button" onclick="location.href='../login.php';" value="Error Occured (Unauthorized Access). Click Here to Return to Login Page.">
        <?php
            $s_id = $_COOKIE["s_id"];
            $e_s_id = $_POST["e_s_id"];
            $e_pwd = $_POST["e_pwd"];
            $e_s_name = $_POST["e_s_name"];
            $e_pro = $_POST["e_pro"];
            $e_gra = $_POST["e_gra"];
            if($e_s_id){
                $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
                $pdo = new PDO($dsn,"root","root");
                try{
                    $sql = "UPDATE t_student_list SET pwd = '$e_pwd', s_name = '$e_s_name', program = '$e_pro', grade = '$e_gra' WHERE s_id ='$e_s_id'";
                    $pdostatement = $pdo -> query($sql);
                    echo "<script>alert('Student Information Updated!');window.location.href='adminboard.php';</script>";
                }catch (PDOException $e){
                    echo "Error message:".$e -> getMessage();
                    quit();
                }
            }
        ?>
    </body>
</html>