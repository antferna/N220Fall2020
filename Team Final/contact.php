<?php
$page_title = "Elite Drives | Contact Us";
include ('includes/header.php');

?>

    <div class="contactimg"><br><br><br><br><b>Contact Us</b></div>


<div class="contactformdiv">
<form method="post" action="contact_confirm.php" name="contactform">
    <table height="300" width="550" border="2" cellspacing="0" cellpadding="5" rules="none" frame="box">
        <tr>
            <td class="leftcol">Name:</td>
            <td>&nbsp; <input type="text" name="name" required> </td>
        </tr>

        <tr>
            <td class="leftcol">Email:</td>
            <td> &nbsp; <input type="email" name="email" required> </td>
        </tr>

        <tr>
            <td class="leftcol">  </td>
            <td> &nbsp; <input type="checkbox" name="information" id="information" value="Yes">&nbsp;Please send me more information.</td>
        </tr>
        <tr>
            <td class="leftcol">Description:</td>
            <td> &nbsp;

                <textarea name="description" rows="5" cols="45" required> </textarea>

            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">

                <input type="submit" value="Send"> &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="reset" value="Clear Form">

            </td>
        </tr>
    </table>
</form>

</div>

<?php
include ('includes/footer.php');
?>








