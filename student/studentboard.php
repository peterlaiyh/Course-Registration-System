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
    <title>My Courses</title>
</head>
    <body>
        <?php include '../dashboard.php';?>
        <form action="drop.php" method="post">
            <div class="container container-sm d-flex gap-1 my-2">
                <input type="button" id ="search" class="btn btn-primary btn-sm" onclick="location.href='search.php';" disabled = true value = "Search and Add New Courses">    
                <input class="btn btn-danger btn-sm" type="submit" id="drop" disabled=true value="Drop Selected Course(s)">   
            </div>
        <div class="container container-sm d-grid gap-1 my-2">
            <h2>Current Chosen Courses</h2>
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
                                $taken_list = "SELECT * FROM t_course_list JOIN t_reg_list ON t_course_list.c_id = t_reg_list.c_id AND s_id = '$s_id'";
                                $pdostatement = $pdo -> query($taken_list);
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
                            };
                        ?>
                    </tr>
                </table>
            </div>
        </form>
    </body>
    <script>
        const btn_search = document.getElementById("search");
        const btn_drop = document.getElementById("drop");
        const s_id = "<?php echo $s_id;?>";
        if(s_id){
            btn_search.disabled = false;
            btn_drop.disabled = false;
        }
    </script>
</html>