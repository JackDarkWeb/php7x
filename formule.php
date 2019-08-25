<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulaire</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
</head>
<body>
<form method="post" action="<?= $_SERVER["PHP_SELF"]?>">
    <input type="text" name="user" size="60" maxlength="150" value="Enter your usename" onfocus="this.value=''" pattern="([^0-9])"/><br/><br/>
    <input type="email" name="email" size="60" maxlength="250" value="Enter your email" onclick="this.value=''" pattern="(^[a-z0-9]+)@([a-z0-9])+(\.)([a-z]{2,4})"/><br/><br/>
    <input type="tel" name="tel" size="60" pattern="^0[0-9]{9}" value="Enter your number phone" onclick="this.value=''"/><br/><br/>
    <input type="password" name="password" value="Tape your password" onfocus="this.value=''" size="60" minlength="9" /><br/><br/>
    <input type="date"name="date"  min="2016-01-01" max="<?= date('Y-m-d')?>"/><br/><br/>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>
<?php
