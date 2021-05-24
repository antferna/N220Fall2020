<?php
$page_title = "Elite Drives | Create New User";

include ('includes/header.php');
require_once('includes/database.php');

?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<html>
<body style="padding-left: 50px">
<h2>User Registration Form</h2>
<p>Please complete the following form.</p>
<!-- the registration form starts here    -->
<form name="reg" action="user_confirm.php" method="post">
    <table width="550" border="2" cellspacing="0" cellpadding="5" rules="none" frame="box">
        <tr>
            <td class="leftcol">First Name:</td>
            <td><input type="text" name='firstname' value='Firstname' required/></td>
        </tr>
        <tr>
            <td class="leftcol">Last Name:</td>
            <td> <input type="text" name='lastname' value="Lastname" required/> </td>
        </tr>
        <tr>
            <td class="leftcol">Username:</td>
            <td><input type="text" name='username' value="Username" required/> </td>
        </tr>
        <tr>
            <td class="leftcol">Password:</td>
            <td><input type="text" name='password' value="Password" required/> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Add User" />

                <input type="reset" value="Clear Form" />
            </td>
        </tr>
    </table>
</form>
<!-- the registration form ends here  -->
</body>
<?php
include 'includes/footer.php';
?>
</html>
