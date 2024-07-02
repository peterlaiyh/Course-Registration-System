<?php
$s_id = $_COOKIE["s_id"];
$login=isset($_GET['login']) ? $_GET['login'] : "";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Change Password</title>
    </head>

    <body>
        <div class="container bg-light container-sm d-grid gap-1 my-4 text-center">
            <h2>Change Password</h2>
            <form action="verificationchange.php" method="post">
                <p>StudentID: <input id="s_id" name="s_id" type="text" value="<?php echo $s_id;?>" disabled=true></p>
                <p>Original Password: <input id="pwd" name="pwd" type="password" required maxlength=12></p>
                <p>New Password: <input id="npwd" name="npwd" type="password" required maxlength=12></p>
                <p>New Password (Confirmation): <input id="npwd_c" name="npwd_c" type="password" required maxlength=12></p>
                <p>
                    <input class="btn btn-primary btn-sm" type="submit" id="send" disabled=true onclick="input_s_id.disabled=false" value="Send">    
                    <input class="btn btn-danger btn-sm" type="button" id="return" disabled=true onclick="location.href='login.php';" value="Return to Login Page">
                </p>
            </form>
            <?php
                switch($login){
                    case "samepwd":
                        echo "<center><font color='red'>*New Password is the same as Original Password!</font></center>";
                        break;
                    case "wrongconfirm":
                        echo "<center><font color='red'>*New Password (Confirmation) is diffetent from New Passowrd!</font></center>";
                        break;
                    case "error":
                        echo "<center><font color='red'>*Incorrect Student ID or Password!</font></center>";
                        break;
                    default:
                        break;
                }
            ?>
        </div>
    </body>
    <script>
        const input_s_id = document.getElementById("s_id");
        const btn_return = document.getElementById("return");
        const btn_send = document.getElementById("send");
        const s_id = "<?php echo $s_id;?>";
        if(s_id){
            btn_return.disabled = false;
            btn_send.disabled = false;
        }
    </script>
</html>