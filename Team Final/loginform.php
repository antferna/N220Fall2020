<?php
//should give us access to db
//include_once ('includes/database.php');

$page_title = "Elite Drives | Log In";

include ('includes/header.php');
?>

<!--$conn inside our code to connect to db-->

<body>
    <div class="loginbackground"></div>
<?php
$login_status = '';
    if (isset($_SESSION['login_status']))
        $login_status = $_SESSION['login_status'];


    //if the user's last login attempt succeeded
    if ($login_status == 1){
        echo "<p>You are logged in as " . $_SESSION['login'] . "</p>";
        exit();
    }
    // if the user has just registered
    if ($login_status == 3) {
        echo "<p>Thank you for registering with us. Your account has been created.</p>";
        echo "<a href = 'logout.php'>Log Out</a><br />";
        exit ();
    }

    //if the user's last login attempt failed
    if ($login_status == 2){
        echo "<p> Username or password invalid. Please try again. </p>";
    }
?>
    <div id="frm" class="login-box">
        <form method='post' action='login.php' >

            <div class="textbox">
                <p>
                    <img id="login-user" src="/img/images/user-icon-png-white.png" >
                    <label>Username:</label>
                    <input type="text" id='username' name='username' required />
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" id='password' name='password' required />
                </p>

            </div>

            <p>
                <input class="loginBtn" type="submit" id="login-btn" value="Login" />
            </p>

            <p>
                <p id="sign-up-text">not a member yet?</p>
                <a href="createuser.php" btn class="signupBtn">Sign-Up!</a>
<!--                <btn class="signupBtn">Sign-Up!</btn>-->
            </p>



        </form>
    </div>



<?php
//    $sql = "SELECT * FROM users;";
//    $result = mysqli_query( $conn, $sql );
//    $resultCheck = mysqli_num_rows($result);
//
//    if ($resultCheck > 0) {
//
//    }
//?>

<!--<div class="loginbackground">-->
<!--    <div class="login-box">-->
<!--        <h1>Login</h1>-->
<!--        <div class="textbox">-->
<!--                 not sure why the user and lock icons didn't load..-->
<!--            <img id="login-user" src="www/img/images/login/user-icon-png-white.png" alt="">-->
<!--            <input type="text" placeholder="Username" name="" value="">-->
<!--        </div>-->
<!--        <div class="textbox">-->
<!--            <img id="login-lock" src="www/img/images/login/lock-icon-png-white.png" alt="">-->
<!--            <input type="text" placeholder="Password" name="" value="">-->
<!--        </div>-->
<!---->
<!--        <input class="btn" type="button" name="" value="Sign in">-->
<!--    </div>-->
<!--</div>-->
</body>



<?php
//if (isset($_POST ['submit'] )) {
//    $un=$_POST['username'];
//    $pw=$_POST['password'];
//
//    if ($un=='username' && $pw=='password') {
//        header("location:home.php");
//        exit();
//    }
//    else
//        echo '<span style="color: #f65158; text-align: center;">Invalid Username/Password</span>' ;
//
//}
//?>