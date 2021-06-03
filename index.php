<?php

//POST
echo $_POST['name']."<br/>";
echo $_POST['email']."<br/>";
echo $_POST['message']."<br/>";

//GET
#echo $_GET['name']."<br/>";
#echo $_GET['email']."<br/>";
#echo $_GET['message']."<br/>";

if (isset($_REQUEST['name'])) {
    echo $_REQUEST['name']."<br/>";
}

if (isset($_REQUEST['email'])) {
    echo $_REQUEST['email']."<br/>";
}

if (isset($_REQUEST['message'])) {
    echo $_REQUEST['message']."<br/>";
}
?>

<html>
<head>
    <title>Working with Form</title>
    <style>
        fieldset input, fieldset textarea{
            width: 100%;
            margin-bottom: 10px;
        }
        fieldset{
            width: 400px;
        }
        legend{
            font-size: 26px;
        }
    </style>
</head>
<body>

<form action="index.php" method="post">
    <fieldset>
        <legend>Sample form</legend>
        <label>Name:</label>
        <input type="text" name="name" value="<?=isset($_REQUEST['name']) ? $_REQUEST['name'] : '';?>">
        <label>E-mail:</label>
        <input type="text" name="email" value="<?=isset($_REQUEST['email']) ? $_REQUEST['email'] : '';?>">
        <label>Message</label>
        <textarea name="message"><?=isset($_REQUEST['message']) ? $_REQUEST['message'] : '';?></textarea>
    </fieldset>
    <input type="submit" value="Submit">
</form>
</body>
</html>