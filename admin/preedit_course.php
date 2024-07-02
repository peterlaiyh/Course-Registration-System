<?php
    $s_id = $_COOKIE["s_id"];
    $e_c_id = $_POST["e_c_id"];
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
        <title>Edit Student</title>
    </head>
    <body>
        <?php include '../dashboard.php';?>
        <div class="container bg-light container-sm d-grid gap-1 my-4 text-center">
            <div>
                <h2>Edit Course</h2>
                <form action="edit_course.php" method="post">
                    <table class="table table-bordered table-hover">
                        <tr class="table-dark">
                        <th></th>    
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Sensei</th>
                        <th>Category</th>
                        <th>Recommended Grade</th>
                        <th>Credit</th>
                        <th>Term</th>
                        </tr>
                    <?php
                    $e_c_id = $_POST["e_c_id"];
                    $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
                    try{
                        $sql = "SELECT * FROM t_course_list WHERE c_id='$e_c_id'";
                        $pdostatement = $pdo -> query($sql);
                        $course = $pdostatement -> fetch();
                        echo "<tr>";
                        echo "<td>Current</td>";
                        echo "<td>".$course[0]."</td>";
                        echo "<td>".$course[1]."</td>";
                        echo "<td>".$course[2]."</td>";
                        echo "<td>".$course[3]."</td>";
                        echo "<td>".$course[4]."</td>";
                        echo "<td>".$course[5]."</td>";
                        echo "<td>".$course[6]."</td>";
                    }catch (PDOException $e){
                        echo "Error message:".$e -> getMessage();
                    }
                    ?>
                        <tr>

                            <td>New</td>
                            <td>
                                <p><input id="e_c_id" name="e_c_id" type="text" disabled=true value="<?php echo $course[0]?>"></p>
                                <p class="text-danger">*Course ID cannot be changed.</p>
                            </td>
                            <td><input id="e_c_name" name="e_c_name" type="text" value="<?php echo $course[1]?>"></td>
                            <td><input id="e_sen" name="e_sen" type="text" value="<?php echo $course[2]?>"></td>
                            <td>
                                <select id="e_cat" name="e_cat">
                                    <option value=""></option> 
                                    <option value="Foundation Subjects (Compulsory)">Foundation Subjects (Compulsory)</option> 
                                    <option value="Foundation Subjects (Elective)">Foundation Subjects (Elective)</option> 
                                    <option value="Core Subjects (Compulsory)">Core Subjects (Compulsory)</option> 
                                    <option value="Core Subjects (Elective)">Core Subjects (Elective)</option> 
                                    <option value="STS-A">STS-A</option>
                                </select>
                            </td>
                            <td>
                                <select id="e_rgr" name="e_rgr">
                                    <option value="1" checked>1</option> 
                                    <option value="2">2</option> 
                                    <option value="1,2">1,2</option> 
                                    <option value="2推奨">2推奨</option> 
                                </select>
                            </td>
                            <td>
                                <select id="e_cre" name="e_cre">
                                    <option value="0">0</option> 
                                    <option value="2" checked>2</option> 
                                    <option value="4">4</option>
                                </select>
                            </td>
                            <td>
                                <select id="e_ter" name="e_ter">
                                    <option value="Fall 1">Fall 1</option> 
                                    <option value="Fall 2" checked>Fall 2</option> 
                                    <option value="Fall 3">Fall 3</option>
                                    <option value="Fall 1 - 3">Fall 1 - 3</option> 
                                    <option value="Spring 1" checked>Spring 1</option> 
                                    <option value="Spring 2">Spring 2</option>
                                    <option value="Spring 3">Spring 3</option> 
                                    <option value="Spring 1 - 2" checked>Spring 1 - 2</option> 
                                    <option value="Fall 3～ Spring 3">Fall 3～ Spring 3</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <input class="btn btn-primary btn-sm" type="submit" id="send" disabled=true onclick="e_c_id.disabled=false;" value="Confirm Edit">
                    <input class="btn btn-success btn-sm" type="button" id="search" disabled=true onclick="location.href='courses.php';" value="Return to Search">
                    <input class="btn btn-danger btn-sm" type="button" id="return" disabled=true onclick="location.href='adminboard.php';" value="Return to Admin Board">
                </form>
            </div>
        </div>
    </body>
    <script>
        const e_s_id = document.getElementById("e_s_id");
        const btn_send = document.getElementById("send");
        const btn_search = document.getElementById("search");
        const btn_return = document.getElementById("return");
        const s_id = "<?php echo $s_id;?>";
        if(s_id){
            btn_send.disabled = false;
            btn_search.disabled = false;
            btn_return.disabled = false;
        }
    </script>
</html>