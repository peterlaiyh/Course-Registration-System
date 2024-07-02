<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Delete Course</title>
</head>
<body>
<input class="btn btn-link btn-lg" type="button" onclick="location.href='../login.php';" value="Error Occured (Unauthorized Access). Click Here to Return to Login Page.">
    <?php
        $d_c_id = $_POST["d_c_id"];
        if($d_c_id){
            $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
            try{
                $pdo = new PDO($dsn,"root","root");
                $d_c = "DELETE FROM t_course_list WHERE c_id='$d_c_id'";
                $d_s =  "DELETE FROM t_reg_list WHERE c_id='$d_c_id'";
                $pdostatement = $pdo -> query($d_c); 
                $pdostatement = $pdo -> query($d_s); 
                echo "<script>alert('Course (Including Students Taking) Deleted!');window.location.href='adminboard.php';</script>";
            }catch (PDOException $e){
                echo "Error message:".$e -> getMessage();
            }
        }
    ?>
</body>
</html>