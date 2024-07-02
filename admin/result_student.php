<?php
    $s_id = $_COOKIE["s_id"];
    $k_s_id = $_POST["k_s_id"];
    $k_s_name = $_POST["k_s_name"];
    $pro = $_POST["pro"];
    $gra = $_POST["gra"];
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
        <title>Search Result</title>
    </head>
    <body>
        <?php include '../dashboard.php';?>
        <div class="container bg-light container-sm d-grid gap-1 my-4 text-center">
            <div>
                <input class="btn btn-success btn-sm" type="button" id="search" disabled=true onclick="location.href='students.php';" value="Return to Search">
                <input class="btn btn-danger btn-sm" type="button" id="return" disabled=true onclick="location.href='adminboard.php';" value="Return to Admin Board">
                <h2>Search Result</h2>
                <table class="table table-bordered table-hover">
                    <tr class="table-dark">
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>See Courses</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Program</th>
                        <th>Grade</th>
                    </tr>
                    <?php
                        try{
                            $student_list = "SELECT * FROM t_student_list
                            WHERE instr(s_id,'$k_s_id') AND instr(s_name,'$k_s_name') AND instr(program,'$pro') AND instr(grade,'$gra')";
                            $pdostatement = $pdo -> query($student_list);
                                foreach ($pdostatement as $row){
                                    echo "<tr>";
                                    echo "<td><form action='preedit_student.php' method='post'><button class='btn btn-link btn-sm' type='text' name='e_s_id' value='".$row[0]."'>Edit</button></form></td>";
                                    echo "<td><form action='delete_student.php' method='post'><button class='btn btn-link btn-sm' type='text' name='d_s_id' value='".$row[0]."'>Delete</button></form></td>";
                                    echo "<td><form action='see_courses.php' method='post'><button class='btn btn-link btn-sm' type='text' name='s_s_id' value='".$row[0]."'>See Courses</button></form></td>";
                                    echo "<td>".$row[0]."</td>";
                                    echo "<td>".$row[2]."</td>";
                                    echo "<td>".$row[3]."</td>";
                                    echo "<td>".$row[4]."</td>";
                                    echo "</tr>";
                                }
                        }catch (PDOException $e){
                            echo "Error message:".$e -> getMessage();
                        }
                    ?>
                    
                </table>
            </div>
        </div>
    </body>
    <script>
        const btn_search = document.getElementById("search");
        const btn_return = document.getElementById("return");
        const s_id = "<?php echo $s_id;?>";
        if(s_id){
            btn_search.disabled = false;
            btn_return.disabled = false;
        }
    </script>
</html>