<?php require_once dirname(__FILE__).'/../config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator kredytowy</title>
</head>
<body>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
    <label>Proszę podać kwotę kredytu:</label>
    <input type="text" name="credits" value="<?php if(isset($credits)) echo $credits?>"></input>
    </br>
    <label>Prosze podać na ile lat:</label>
    <input type="text" name="years" value="<?php if(isset($years)) echo $years?>"></input>
    </br>
    <label>Proszę podać oprocentowanie kredytu (z '.' w przypadku oprocentowania po przecinku, np. (8.5)):</label>
    <input type="text" name="percent" value="<?php if(isset($percentage)) echo $percentage?>"></input>
    </br>
    <input type="submit" value="Oblicz!"></input>
</form>
<?php
if(isset($messages)){
    foreach($messages as $mess){
        echo '<h3 style="color:red;">'.$mess.'</h3>';
    }
}
if(isset($rata)){
    echo '<h3>Twoja miesięczna rata wynosi: '.$rata.'</h3>';
    echo '<h3>Całkowity koszt kredytu wynosi: '.$cost.'</h3>';
}
?>
</body>
</html>