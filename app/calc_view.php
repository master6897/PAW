<?php require_once dirname(__FILE__).'/../config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">
    <title>Kalkulator kredytowy</title>
</head>
<body>
    <div style="width:90%; margin: 2em auto;">
        <a href="<?php print(_APP_ROOT); ?>/app/druga_chroniona.php" class="pure-button">Kolejna chroniona strona</a>
        <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    </div>
    <div style="width:90%; margin: 2em auto;">
        <form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
            <legend>Kalkulator kredytowy</legend>
            <fieldset>
                <label>Proszę podać kwotę kredytu:</label>
                <input type="text" name="credits" value="<?php out($credits)?>"></input>
                <label>Prosze podać na ile lat:</label>
                <input type="text" name="years" value="<?php out($years)?>"></input>
                <label>Proszę podać oprocentowanie kredytu (z '.' w przypadku oprocentowania po przecinku, np. (8.5)):</label>
                <input type="text" name="percent" value="<?php out($percentage)?>"></input>
                <input type="submit" value="Oblicz!" class="pure-button pure-button-primary"></input>
            </fieldset>
        </form>
    </div>
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