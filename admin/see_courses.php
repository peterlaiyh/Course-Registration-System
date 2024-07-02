<?php
    $s_id = $_COOKIE["s_id"];
    $s_s_id = $_POST["s_s_id"];
    $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
    $pdo = new PDO($dsn,"root","root");
    $pdostatement = $pdo -> query("SELECT s_name FROM t_student_list WHERE s_id='$s_s_id'");
    $student = $pdostatement -> fetch();
    $s_s_name = $student[0];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>See Courses</title>
    </head>
    <body>
        <?php include '../dashboard.php';?>    
        <div class="container bg-light container-sm d-grid gap-1 my-4 text-center">
            <h2><?php echo $s_s_id." ".$s_s_name;?></h2>
            <form action="add_for_student.php" method="post">
            <input type="text" id="s_s_id" name="s_s_id" hidden=true value="<?php echo $s_s_id;?>">    
            <select id="add_course" name ="add_course">
                    <?php
                        try{
                            $course_list = "SELECT * FROM t_course_list LEFT JOIN t_reg_list ON t_course_list.c_id = t_reg_list.c_id AND s_id = '$s_s_id' HAVING s_id IS NULL";
                            $pdostatement = $pdo -> query($course_list);
                            foreach ($pdostatement as $row){
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                            }catch (PDOException $e){
                                    echo "Error message:".$e -> getMessage();
                            }
                    ?>
                </select>
                <input class="btn btn-primary btn-sm" type="submit" id="add" disabled=true value="Add Chosen Course">    
            </form>
            <form action="drop_for_student.php" method="post">
                <input type="text" id="s_s_id" name="s_s_id" hidden=true value="<?php echo $s_s_id;?>">
                <input class="btn btn-danger btn-sm" type="submit" id="drop" disabled=true value="Drop Selected Course(s)">    
                <input class="btn btn-success btn-sm" type="button" id="return" disabled=true onclick="location.href='adminboard.php';" value="Return to Admin Board">
                <table class="table table-bordered table-hover">
                    <tr class="table-dark">
                        <th>Select</th>
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Sensei</th>
                        <th>Category</th>
                        <th>Recommended Grade</th>
                        <th>Credit</th>
                        <th>Term</th>
                        <?php
                            try{
                                $course_list = "SELECT * FROM t_course_list JOIN t_reg_list ON t_course_list.c_id = t_reg_list.c_id AND s_id = '$s_s_id'";
                                $pdostatement = $pdo -> query($course_list);
                                $credit = 0;
                                foreach ($pdostatement as $row){
                                    echo "<tr>";
                                    echo "<td><input type='checkbox' name='drop_course[]' value='".$row[0]."'></td>";
                                    echo "<td>".$row[0]."</td>";
                                    echo "<td>".$row[1]."</td>";
                                    echo "<td>".$row[2]."</td>";
                                    echo "<td>".$row[3]."</td>";
                                    echo "<td>".$row[4]."</td>";
                                    echo "<td>".$row[5]."</td>";
                                    $credit += $row[5];
                                    echo "<td>".$row[6]."</td>";
                                    echo "</tr>";
                                }
                            echo "<h4>Total Credit: ".$credit."</h4>";
                            if($credit>36){
                                echo "<p class='text-danger'>*Over 36 credits. Please drop some courses!</p>";
                            }
                            }catch (PDOException $e){
                            echo "Error message:".$e -> getMessage();
                            }
                        ?>
                    </tr>
                </table>
            </form>
        </div>
    </body>
    <script>
        const s_s_id = document.getElementById("s_s_id");
        const btn_add = document.getElementById("add");
        const btn_drop = document.getElementById("drop");
        const btn_return = document.getElementById("return");
        const s_id = "<?php echo $s_id;?>";
        if(s_id){
            btn_add.disabled = false;
            btn_drop.disabled = false;
            btn_return.disabled = false;
        }
    </script>
</html>