<?php
require_once dirname(__FILE__).'/../../config.php';

function getLoginParams(&$form){
    $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $form['password'] = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
}

function validateLoginForm(&$form,&$messages){
    if(!(isset($form['login']) && isset($form['password']))){
        return false;
    }
    //sprawdzenie czy puste
    if($form['login'] == ""){
        $messages[] = "Nie podano nazwy użytkownika";
    }
    if($form['password'] == ""){
        $messages[] = "Nie podano hasła";
    }
    if(count($messages)>0){
        return false;
    }
    
    if($form['login']=='admin' && $form['password']=='admin'){
        session_start();
        $_SESSION['role']='admin';
        return true;
    }
    if($form['login']=='user' && $form['password']=='user'){
        session_start();
        $_SESSION['role']='user';
        return true;
    }
    $messages [] = "Niepoprawny login lub hasło";
    return false;
}
$form = array();
$messages = array();

getLoginParams($form);
if(!validateLoginForm($form,$messages)){
    include _ROOT_PATH.'/app/security/login_view.php';
}else{
    header("Location: "._APP_URL);
}
?>