<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Search Courses</title>
    </head>
    <body>
        <?php include '../dashboard.php';?>    
        <div class="container bg-light container-sm d-grid gap-1 my-4">
            <h2>Search Courses</h2>
            <form action="result.php" method="post">
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
                <div>
                    <input class="btn btn-primary btn-sm" type="submit" id="search" disabled=true value="Search Courses">
                    <input class="btn btn-danger btn-sm" type="button" id="return" disabled=true onclick="location.href='studentboard.php';" value="Return to My Courses">
                </div>
            </form>
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