<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Add Student</title>
    </head>
    <body>
        <input class="btn btn-link btn-lg" type="button" onclick="location.href='adminboard.php';" value="Error occured (No input on student information). Click Here to Return to Admin Board.">
        <?php
            $s_id = $_COOKIE["s_id"];
            $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
            $n_s_id = $_POST["n_s_id"];
            $n_pwd = $n_s_id."kic";
            $n_s_name = $_POST["n_s_name"];
            $pro = $_POST["pro"];
            $gra = $_POST["gra"];
            try{
                $pdo = new PDO($dsn,"root","root");
                $sql = "INSERT INTO t_student_list (s_id,pwd,s_name,program,grade) VALUE ('$n_s_id','$n_pwd','$n_s_name','$pro','$gra')";
                $pdostatement = $pdo -> query($sql); 
                echo "<script>alert('Student Added!');window.location.href='adminboard.php';</script>";
            }catch (PDOException $e){
                echo "Error message:".$e -> getMessage();
            }
        ?>
    </body>
</html>