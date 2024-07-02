<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Add</title>
</head>
<body>
<input class="btn btn-link btn-lg" type="button" onclick="location.href='adminboard.php';" value="Error Occured (No Courses Selected). Click Here to Return to Admin Board.">
    <?php
        $s_s_id = $_POST["s_s_id"];
        $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
        $add_course = $_POST["add_course"];
        try{
            $pdo = new PDO($dsn,"root","root");
            $sql = "INSERT INTO t_reg_list (s_id,c_id) VALUE ('$s_s_id','$add_course')";
            $pdostatement = $pdo -> query($sql); 
            echo "<script>alert('Course Added for the Student!');window.location.href='adminboard.php';</script>";
        }catch (PDOException $e){
            echo "Error message:".$e -> getMessage();
        }
    ?>
</body>
</html>