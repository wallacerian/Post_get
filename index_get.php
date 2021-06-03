<?php

#echo $_POST['name']."<br/>";
#echo $_POST['email']."<br/>";
#echo $_POST['message']."<br/>";

echo $_REQUEST['name']."<br/>";
echo $_REQUEST['email']."<br/>";
echo $_REQUEST['message']."<br/>";

?>
<html>
<head>
    <title>Working with Form</title>
    <style>
        fieldset input, fieldset textearea{
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

<form action="index.php" method="get">
    <fieldset>
        <legend>Sample form</legend>
        <label>Name:</label>
        <input type="text" name="name" value="<?= $_GET['name'] ?>">
        <label>E-mail:</label>
        <input type="text" name="email" value="<?= $_GET['email'] ?>">
        <label>Message</label>
        <textarea name="message<?= $_GET['message'] ?>"></textarea>
    </fieldset>
    <input type="submit" value="Submit">
</form>

</body>

</html>
