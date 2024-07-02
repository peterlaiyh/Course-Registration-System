<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Delete Student</title>
</head>
<body>
<input class="btn btn-link btn-lg" type="button" onclick="location.href='login.php';" value="Error Occured (Unauthorized Access). Click Here to Return to Login Page.">
    <?php
        $d_s_id = $_POST["d_s_id"];
        if($d_s_id){
            $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
            try{
                $pdo = new PDO($dsn,"root","root");
                $d_s = "DELETE FROM t_student_list WHERE s_id='$d_s_id'";
                $d_c =  "DELETE FROM t_reg_list WHERE s_id='$d_s_id'";
                $pdostatement = $pdo -> query($d_s); 
                $pdostatement = $pdo -> query($d_c); 
                echo "<script>alert('Student (Including Courses Taken) Deleted!');window.location.href='adminboard.php';</script>";
            }catch (PDOException $e){
                echo "Error message:".$e -> getMessage();
            }
        }
    ?>
</body>
</html>