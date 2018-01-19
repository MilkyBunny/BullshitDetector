<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./style.css" type="text/css" rel="stylesheet">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
    <title>Bullshit Detector</title>

</head>

<body>
<div class="header">
    <h1><img src="https://pre00.deviantart.net/3f23/th/pre/i/2014/096/0/c/bullshit_logo_by_blackreverend-d7daa21.jpg"
             alt="bullshit logo" style="width:100px;height:100px;"/><strong>Bullshit Detector</strong></h1>
</div>
<?php
$bullshit = rand(0, 1);

if(!empty($_POST['content'])){

?>

<div class="result <?php
if($bullshit){
    echo "bullshit";
} else{
    echo "nonbullshit";
}
?>">
    <?php
    echo '"' . $_POST['content'] . '" ';
    if($bullshit){
        echo "is bullshit";
    } else{
        echo "is not bullshit";
    }

    ?>
</div>
<?php
}
?>

<form method="POST">
    <div>
        <textarea name="content" placeholder="Please copy your text here"><?php echo $_POST['content']; ?></textarea>
    </div>
    <input type="submit" value="Bullshit?"/>

</form>




<footer>
    2018 GSD (GET SHIT DONE) Consulting
</footer>

</body>
</html>