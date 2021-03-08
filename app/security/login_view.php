
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">
    <title>Logowanie</title>
</head>
<body>
    <div style="width:90%; margin: 2em auto;">
        <form action="<?php print(_APP_URL);?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
            <legend>Logowanie</legend>
            <fieldset>
                <label>Proszę podać nazwę użytkownika</label>
                <input type="text" name="login"></input>
                <label>Prosze podać hasło</label>
                <input type="password" name="password"></input>
                <input type="submit" value="Zaloguj!" class="pure-button pure-button-primary"></input>
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
