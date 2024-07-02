<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Search and Edit Courses</title>
    </head>
    <body>
        <?php include '../dashboard.php';?>    
        <div class="container bg-light container-sm d-grid gap-1 my-4">
            <h2>Add a Course</h2>
                <form action="add_course.php" method="post">
                    <p>
                        Course ID:
                        <input id="n_c_id" name="n_c_id" type="text" pattern="[N123]{1}[0-9]{3}" required maxlength=4>
                    </p>
                    <p>
                        Course Name:
                        <input id="n_c_name" name="n_c_name" type="text" pattern="\w.{1,}">
                    </p>
                    <p>
                        Sensei:
                        <input id="sen" name="sen" type="text" pattern="\w.{1,}">
                    </p>
                    <p>Category:
                        <select id="cat" name="cat">
                        <option value=""></option> 
                        <option value="Foundation Subjects (Compulsory)">Foundation Subjects (Compulsory)</option> 
                        <option value="Foundation Subjects (Elective)">Foundation Subjects (Elective)</option> 
                        <option value="Core Subjects (Compulsory)">Core Subjects (Compulsory)</option> 
                        <option value="Core Subjects (Elective)">Core Subjects (Elective)</option> 
                        <option value="STS-A">STS-A</option>
                        </select>
                    </p>
                    <p>
                        Recommended Grade:
                        <select id="rgr" name="rgr">
                        <option value="1">1</option> 
                        <option value="2">2</option> 
                        <option value="1,2">1,2</option> 
                        <option value="2推奨">2推奨</option> 
                        </select>
                    </p>
                    <p>
                        Credit:
                        <select id="cre" name="cre">
                        <option value="0">0</option> 
                        <option value="2">2</option> 
                        <option value="4">4</option>
                        </select>
                    </p>
                    <p>
                        Term:
                        <select id="ter" name="ter">
                        <option value="Fall 1">Fall 1</option> 
                        <option value="Fall 2">Fall 2</option> 
                        <option value="Fall 3">Fall 3</option>
                        <option value="Fall 1 - 3">Fall 1 - 3</option> 
                        <option value="Spring 1">Spring 1</option> 
                        <option value="Spring 2">Spring 2</option>
                        <option value="Spring 3">Spring 3</option> 
                        <option value="Spring 1 - 2">Spring 1 - 2</option> 
                        <option value="Fall 3～ Spring 3">Fall 3～ Spring 3</option>
                        </select>
                    </p>
                    <input class="btn btn-success btn-sm" type="submit" id="add" disabled=true value="Add Course">
                </form>
            <h2>Search for Courses</h2>
            <form action="result_course.php" method="post">
                <p>
                    Language:
                    <input id="lan" name="lan" type="radio" value="" checked>All
                    <input id="lan" name="lan" type="radio" value="1">Japanese
                    <input id="lan" name="lan" type="radio" value="2">English
                </p>
                <p>
                    Category:
                    <input id="cat" name="cat" type="radio" value="" checked>All
                    <input id="cat" name="cat" type="radio" value="Compulsory">Compulsory
                    <input id="cat" name="cat" type="radio" value="Elective">Elective
                </p>
                <p>
                    Recommended Grade:
                    <input id="rg" name="rg" type="radio" value="" checked>All
                    <input id="rg" name="rg" type="radio" value="1">1
                    <input id="rg" name="rg" type="radio" value="2">2
                </p>
                <p>
                    Credit:
                    <input id="cre" name="cre" type="radio" value="" checked>All
                    <input id="cre" name="cre" type="radio" value="0">0
                    <input id="cre" name="cre" type="radio" value="2">2
                    <input id="cre" name="cre" type="radio" value="4">4
                </p>
                <p>
                    Keyword in Course Name:
                    <input id="c_name" name="c_name" type="text">
                <p>
                    <input class="btn btn-primary btn-sm" type="submit" id="search" disabled=true value="Search for Courses">
                    <input class="btn btn-danger btn-sm" type="button" id="return" disabled=true onclick="location.href='adminboard.php';" value="Return to Admin Board">
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