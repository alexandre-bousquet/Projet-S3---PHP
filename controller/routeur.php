<?php
$DS = DIRECTORY_SEPARATOR;
$ROOT_FOLDER = __DIR__ . $DS . "..";
require_once $ROOT_FOLDER. $DS ."lib".$DS."File.php";;
//require_once File::build_path(['controller','ControllerVoiture.php']);
// On recupère l'action passée dans l'URL
if(!empty($_GET['action'])){
$action = $_GET['action'];}
else if (!empty($_POST['action']))
{$action = $_POST['action'];}
// Appel de la méthode statique $action de ControllerVoiture
//ControllerVoiture::$action();
?>