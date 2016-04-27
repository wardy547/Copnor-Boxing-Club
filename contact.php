<?php require 'header.php' ?>

<form action="form.php" method="post">
    Your name<br>
    <input type="text" name="cf_name"><br>
    Your e-mail<br>
    <input type="text" name="cf_email"><br>
    Message<br>
    <textarea name="cf_message">
    </textarea>
    
    <input type="submit" value="Send">
    <input type="reset" value="Clear">
</form>