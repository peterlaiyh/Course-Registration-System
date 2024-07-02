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
<input class="btn btn-link btn-lg" type="button" onclick="location.href='adminboard.php';" value="Error Occured (No Students Selected). Click Here to Return to Admin Board.">
    <?php
        $s_c_id = $_POST["s_c_id"];
        $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
        $drop_student = $_POST["drop_student"];
        try{
            $pdo = new PDO($dsn,"root","root");
            for($i=0;$i<count($drop_student);$i++){
                $sql = "DELETE FROM t_reg_list WHERE c_id='$s_c_id' AND s_id='$drop_student[$i]'";
                $pdostatement = $pdo -> query($sql); 
            }
            echo "<script>alert('Students(s) Dropped for the Course!');window.location.href='adminboard.php';</script>";
        }catch (PDOException $e){
            echo "Error message:".$e -> getMessage();
        }
    ?>
</body>
</html>