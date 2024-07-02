<?php
    $s_id = $_COOKIE["s_id"];
    $e_s_id = $_POST["e_s_id"];
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
                <h2>Edit Student</h2>
                <form action="edit_student.php" method="post">
                    <table class="table table-bordered table-hover">
                        <tr class="table-dark">
                        <th></th>    
                            <th>Student ID</th>
                            <th>Password</th>
                            <th>Student Name</th>
                            <th>Program</th>
                            <th>Grade</th>
                        </tr>
                    <?php
                    $e_s_id = $_POST["e_s_id"];
                    $dsn = "mysql:dbname=course_registration;host=localhost;charset=utf8;";
                    try{
                        $sql = "SELECT * FROM t_student_list WHERE s_id='$e_s_id'";
                        $pdostatement = $pdo -> query($sql);
                        $student = $pdostatement -> fetch();
                        echo "<tr>";
                        echo "<td>Current</td>";
                        echo "<td>".$student[0]."</td>";
                        echo "<td>".$student[1]."</td>";
                        echo "<td>".$student[2]."</td>";
                        echo "<td>".$student[3]."</td>";
                        echo "<td>".$student[4]."</td>";
                    }catch (PDOException $e){
                        echo "Error message:".$e -> getMessage();
                    }
                    ?>
                        <tr>
                            <td>New</td>
                            <td>
                                <p><input id="e_s_id" name="e_s_id" type="text" disabled=true value="<?php echo $student[0]?>"></p>
                                <p class="text-danger">*Student ID cannot be changed.</p>
                            </td>
                            <td><input id="e_pwd" name="e_pwd" type="text" maxlength=12 value="<?php echo $student[1]?>"></td>
                            <td><input id="e_s_name" name="e_s_name" type="text" pattern="\w.{0,}" value="<?php echo $student[2]?>"></td>
                            <td style="text-align:left">
                                <p><input id="e_pro" name="e_pro" type="radio" value="Professional" checked>Professional</p>
                                <p><input id="e_pro" name="e_pro" type="radio" value="Innovator">Innovator</p>
                            </td>
                            <td style="text-align:left">
                                <p><input id="e_gra" name="e_gra" type="radio" value="1" checked>1</p>
                                <p><input id="e_gra" name="e_gra" type="radio" value="2">2</p>
                            </td>
                            </form>
                        </tr>
                    </table>
                    <input class="btn btn-primary btn-sm" type="submit" id="send" disabled=true onclick="e_s_id.disabled=false;" value="Confirm Edit">
                    <input class="btn btn-success btn-sm" type="button" id="search" disabled=true onclick="location.href='students.php';" value="Return to Search">
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