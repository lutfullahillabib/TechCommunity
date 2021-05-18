<?php
session_start();
include("db.php"); //data connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php
if(isset($_SESSION['name']))
{
    echo "<script type='text/javascript'>alert('You have to logout first!!'); window.location.href='dashboard.php'</script>";

}
else
{
?>
<a href="index.php">    <img class="back" src="css/back.png" alt="" srcset="" width="50" height="48" style="margin:25px 40px;"></a>
<div class="login-box">

    <h1>Register</h1>
    <form method="post" action="userdata.php">
        <div class="textbox">
             <input type="text" name="name" placeholder="Username" required/>
        </div>
        
        <div class="textbox">
            <input type="email" name="email" placeholder="Email" required/>
        </div>

        <div class="textbox">
            <input type="password" name="pass" placeholder="Password" required/>
        </div>

        <div class="textbox">
        <input type="password" name="c_pass" placeholder="Confirm Password" required/>
        </div>


        <button name="register" type="submit" class="btn btn-secondary">Submit</button>

        Already have an account?<a href="userlogin.php"> Login</a>


    </form>
</div>
 <!--bootstrap js-->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>

<?php
}
?>

    