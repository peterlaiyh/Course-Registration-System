<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <?php
        $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
        $pdo = new PDO($dsn,"root","root");
        try{
            $s_id = $_COOKIE["s_id"];
            $student_list = "SELECT * from t_student_list WHERE s_id ='$s_id'";
            $pdostatement = $pdo -> query($student_list);
            $student = $pdostatement -> fetch();
            $login = "'../login.php'";
            $changepw = "'../changepw.php'";
            echo '<div class="container container-sm d-flex gap-1 my-2">';
            echo $_COOKIE["greeting"];
            echo '<input type="button" class="btn btn-link btn-sm" onclick="location.href='.$login.'" value = "Logout">';
            echo '<input type="button" class="btn btn-link btn-sm" onclick="location.href='.$changepw.'" value = "Change Password">';
            echo '</div>';
        }catch (PDOException $e){
            echo "Error message:".$e -> getMessage();
            echo "<script>alert('Unauthorized Access!');window.location.href='login.php';</script>";
        }
    ?>    
</body>
</html>
