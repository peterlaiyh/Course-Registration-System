<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Search and Edit Students</title>
    </head>
    <body>
        <?php include '../dashboard.php';?>    
        <div class="container bg-light container-sm d-grid gap-1 my-4">
            <h2>Add a Student</h2>
                <form action="add_student.php" method="post">
                    <p>
                        Student ID:
                        <input id="n_s_id" name="n_s_id" type="text" placeholder="s12345" pattern="[s]{1}[0-9]{5}" required maxlength=6>
                    </p>
                    <p>
                        Student Name:
                        <input id="n_s_name" name="n_s_name" type="text" pattern="\w.{1,}">
                    </p>
                    <p>
                        Program:
                    <input id="pro" name="pro" type="radio" value="Professional" checked>Professional
                    <input id="pro" name="pro" type="radio" value="Innovator">Innovator
                    </p>
                    <p>
                        Grade:
                    <input id="gra" name="gra" type="radio" value="1" checked>1
                    <input id="gra" name="gra" type="radio" value="2">2
                    </p>
                    <input class="btn btn-success btn-sm" type="submit" id="add" disabled=true value="Add Student">
                </form>
            <h2>Search for Students</h2>
            <form action="result_student.php" method="post">
                    <p>
                        Keyword in Student ID:
                        <input id="k_s_id" name="k_s_id" type="text" placeholder="s12345" pattern="[s]{1}[0-9]{0,5}" maxlength=6>
                    </p>
                    <p>
                        Keyword in Student Name:
                        <input id="k_s_name" name="k_s_name" type="text" pattern="\w.{0,}">
                    </p>
                    <p>
                        Program:
                        <input id="pro" name="pro" type="radio" value="" checked>All
                        <input id="pro" name="pro" type="radio" value="Professional">Professional
                        <input id="pro" name="pro" type="radio" value="Innovator">Innovator
                    </p>
                    <p>
                        Grade:
                        <input id="gra" name="gra" type="radio" value="" checked>All
                        <input id="gra" name="gra" type="radio" value="1">1
                        <input id="gra" name="gra" type="radio" value="2">2
                    </p>
                    <input class="btn btn-primary btn-sm" type="submit" id="search" disabled=true value="Search for Students">
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