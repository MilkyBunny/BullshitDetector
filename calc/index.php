<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./style.css" type="text/css" rel="stylesheet">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
    <title>My Magic Calculator</title>

</head>

<body>
<div class="header">
    <h1><strong>My Magic Calculator</strong></h1>
</div>

<form method="POST">

    <input type="text" name="v1" value="<?php echo $_POST['v1']; ?>"/> +
    <input type="text" name="v2" value="<?php echo $_POST['v2']; ?>"/>
    <input type="submit" value="sum?"/>

</form>

<?php
if(
    !empty($_POST['v1'])
    and
    !empty($_POST['v2'])
) {

    $result = $_POST['v1'] + $_POST['v2'];
    echo $_POST['v1'] . '+' . $_POST['v2'] . '=' . $result;
}
?>



<footer>
    <strong>2018 GSD (GET SHIT DONE) Consulting</strong>
</footer>

</body>
</html>