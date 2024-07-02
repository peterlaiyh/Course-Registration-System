<?php
$login=isset($_GET['login']) ? $_GET['login'] : "";
setcookie("s_id","");
setcookie("greeting","");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Login</title>
    </head>
    <body>
        <div class="container bg-light container-sm d-grid gap-1 my-4 text-center">
            <h2>Login</h2>
                <form action="verification.php" method="post">
                    <p>StudentID: <input id="s_id" name="s_id" type="text" placeholder="s12345" pattern="[s]{1}[0-9]{5}" required maxlength=6></p>
                    <p>Password: <input id="pwd" name="pwd" type="password" required maxlength=12></p>
                    <p><input class="btn btn-dark btn-sm" type="submit" value="Login"></p>
                </form>
            <?php
                if($login=='error'){
                    echo "<center><font color='red'>*Incorrect Student ID or Password!</font></center>";
                }
            ?>
        </div>
    </body>
</html>