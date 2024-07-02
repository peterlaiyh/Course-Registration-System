<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Drop</title>
</head>
<body>
<input class="btn btn-link btn-lg" type="button" onclick="location.href='studentboard.php';" value="Error Occured (No Courses Selected). Click Here to Return to My Courses.">
    <?php
        $s_id = $_COOKIE["s_id"];
        $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
        $drop_course = $_POST["drop_course"];
        try{
            $pdo = new PDO($dsn,"root","root");
            for($i=0;$i<count($drop_course);$i++){
                $sql = "DELETE FROM t_reg_list WHERE s_id='$s_id' AND c_id='$drop_course[$i]'";
                $pdostatement = $pdo -> query($sql); 
            }
            echo "<script>alert('Course(s) Dropped!');window.location.href='studentboard.php';</script>";
        }catch (PDOException $e){
            echo "Error message:".$e -> getMessage();
        }
    ?>
</body>
</html>