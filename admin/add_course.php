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
        <input class="btn btn-link btn-lg" type="button" onclick="location.href='../login.php';" value="Error Occured (Unauthorized Access). Click Here to Return to Login Page.">
        <?php
            $s_id = $_COOKIE["s_id"];
            $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
            $n_c_id = $_POST["n_c_id"];
            $n_c_name = $_POST["n_c_name"];
            $sen = $_POST["sen"];
            $cat = $_POST["cat"];
            $rgr = $_POST["rgr"];
            $cre = $_POST["cre"];
            $ter = $_POST["ter"];
            try{
                $pdo = new PDO($dsn,"root","root");
                $sql = "INSERT INTO t_course_list (c_id,c_name,sensei,category,r_grade,credit,term) VALUE ('$n_c_id','$n_c_name','$sen','$cat','$rgr','$cre','$ter')";
                $pdostatement = $pdo -> query($sql); 
                echo "<script>alert('Course Added!');window.location.href='adminboard.php';</script>";
            }catch (PDOException $e){
                echo "Error message:".$e -> getMessage();
            }
        ?>
    </body>
</html>