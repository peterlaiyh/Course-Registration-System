<?php
    $s_id = $_COOKIE["s_id"];
    $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
    $pdo = new PDO($dsn,"root","root");
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Admin Board</title>
</head>
    <body>
        <?php include '../dashboard.php';?>
        <div class="container container-sm d-flex gap-1 my-2">
            <input type="button" id ="students" class="btn btn-primary btn-sm" onclick="location.href='students.php';" disabled = true value = "Search and Edit Students">    
            <input type="button" id ="courses" class="btn btn-danger btn-sm" onclick="location.href='courses.php';" disabled = true value = "Search and Edit Courses">
        </div>
    </body>
    <script>
        const btn_students = document.getElementById("students");
        const btn_courses = document.getElementById("courses");
        const s_id = "<?php echo $s_id;?>";
        if(s_id){
            btn_students.disabled = false;
            btn_courses.disabled = false;
        }
    </script>
</html>