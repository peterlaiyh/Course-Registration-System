<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Edit Course</title>
    </head>
    <body>
    <input class="btn btn-link btn-lg" type="button" onclick="location.href='../login.php';" value="Error Occured (Unauthorized Access). Click Here to Return to Login Page.">
        <?php
            $s_id = $_COOKIE["s_id"];
            $e_c_id = $_POST["e_c_id"];
            $e_c_name = $_POST["e_c_name"];
            $e_sen = $_POST["e_sen"];
            $e_cat = $_POST["e_cat"];
            $e_rgr = $_POST["e_rgr"];
            $e_cre = $_POST["e_cre"];
            $e_ter = $_POST["e_ter"];
            if($e_c_id){
                $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
                $pdo = new PDO($dsn,"root","root");
                try{
                    $sql = "UPDATE t_course_list SET c_name = '$e_c_name', sensei = '$e_sen', category = '$e_cat', r_grade = '$e_rgr', credit = '$e_cre', term = '$e_ter' WHERE c_id ='$e_c_id'";
                    $pdostatement = $pdo -> query($sql);
                    echo "<script>alert('Course Information Updated!');window.location.href='adminboard.php';</script>";
                }catch (PDOException $e){
                    echo "Error message:".$e -> getMessage();
                    quit();
                }
            }
        ?>
    </body>
</html>