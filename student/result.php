<?php
    $s_id = $_COOKIE["s_id"];
    $lan = $_POST["lan"];
    $cat = $_POST["cat"];
    $rg = $_POST["rg"];
    $cre = $_POST["cre"];
    $c_name = $_POST["c_name"];
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
            <form action="add.php" method="post">
                <input class="btn btn-primary btn-sm" type="submit" id="add" disabled=true value="Add Selected Course(s)">    
                <input class="btn btn-success btn-sm" type="button" id="search" disabled=true onclick="location.href='search.php';" value="Return to Search">
                <input class="btn btn-danger btn-sm" type="button" id="return" disabled=true onclick="location.href='studentboard.php';" value="Return to My Courses">
                <h2>Search Result</h2>
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
                    </tr>
                    <?php
                        try{
                            $course_list = "
                            SELECT * FROM t_course_list LEFT JOIN t_reg_list ON t_course_list.c_id = t_reg_list.c_id AND s_id = '$s_id' HAVING s_id IS NULL
                            AND instr(substr(t_course_list.c_id,1,1),'$lan') AND instr(category,'$cat') AND instr(r_grade,'$rg') AND instr(credit,'$cre') AND instr(c_name,'$c_name')
                            ";
                            $pdostatement = $pdo -> query($course_list);
                                foreach ($pdostatement as $row){
                                    echo "<tr>";
                                    echo "<td><input type='checkbox' name='add_course[]' value='".$row[0]."'></td>";
                                    echo "<td>".$row[0]."</td>";
                                    echo "<td>".$row[1]."</td>";
                                    echo "<td>".$row[2]."</td>";
                                    echo "<td>".$row[3]."</td>";
                                    echo "<td>".$row[4]."</td>";
                                    echo "<td>".$row[5]."</td>";
                                    echo "<td>".$row[6]."</td>";
                                    echo "</tr>";
                                }
                            }catch (PDOException $e){
                            echo "Error message:".$e -> getMessage();
                        }
                    ?>
                </table>
            </form>
        </div>
    </body>
    <script>
        const btn_add = document.getElementById("add");
        const btn_search = document.getElementById("search");
        const btn_return = document.getElementById("return");
        const s_id = "<?php echo $s_id;?>";
        if(s_id){
            btn_add.disabled = false;
            btn_search.disabled = false;
            btn_return.disabled = false;
        }
    </script>
</html>