<?php

require_once('vendor/formbuilder/formbuilder.php');
require_once('vendor/validator/validator.php');
spl_autoload_register('AutoLoader');

function AutoLoader($className)
{
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    require_once 'vendor/formbuilder' . DIRECTORY_SEPARATOR . $file . '.php';
    //Make your own path, Might need to use Magics like ___DIR___
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<?php
$nameError ='';
$prenomError ='';
if (isset($_POST['envoyer'])) {
    $valid = new Validator;

    $valid->setName('');
    $valid->setValue($_POST['name']);
    $valid->isText();

    $valid->setName('');
    $valid->setValue($_POST['prenom']);
    $valid->isText();
    foreach ($valid->getErrors() as $name => $error) {
$nameError= ($name=='name') ?$error : '' ;
$prenomError= ($name=='prenom') ?$error : '' ;
        var_dump($valid);
var_dump($name);
    }
}
$form = new FormBuilder();

echo $form->startform('', 'POST', ' border border p-5 container justify-center ');
echo $form->checkbox1("checkbox", "", "");
echo $form->checkbox2("checkbox", "", "") . '<br><br>';
echo $form->input("", "name", "Nom") . '<br><br>';
echo $nameError;
echo $form->input("", "prenom", "Prenom") . '<br><br>';
echo $prenomError;
echo $form->input("mail", "Mail", "Mail") . '<br><br>';
echo $form->input("number", "Tel", "tel") . '<br><br>';
echo $form->select() . '<br><br>';
echo $form->textArea("", "Commentaire") . '<br><br>';
echo $form->button('Envoyer', 'monId');
echo $form->endform();




?>

</body>
</html>