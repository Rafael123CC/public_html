<?php
//@session_start();
ini_set("error_reporting", E_ALL);

require __DIR__ . '/../config.php';
require __DIR__ . '/../autoload.php';
//require __DIR__ . '/../bootstrap.php';
//use classes\authentication\Authentication;
//use classes\db\Database;
use classes\db\TableBD;


//Create an object 
$table= new TableBD();

//Set the path for the html template
$table->setTemplate(_CAMINHO_TEMPLATE . "tabela.php");

//Set title of the list
$table->setTitle("Layouts");
//SELECT `id`, `local`, `resX`, `resY` FROM `listaTVs` WHERE 1
//select the table in the datebase
$table->prepareTable("layoutSchema");

//list of fields for list, new, edit and import records
$table->setFieldsAtive("id, idLayout, x, y, larg, alt, origem",'list');
$table->setFieldsAtive("idLayout, x, y, larg, alt, origem", 'new');
$table->setFieldsAtive("idLayout, x, y, larg, alt, origem", 'edit');
$table->setFieldsAtive("idLayout, x, y, larg, alt, origem", 'csv');

//define field name passw as a password, hidding the file 
//$table->setFieldPass("passw",0, "md5");

//define lists of values to supplay to a field
//$table->setFieldList("tv_id",1," SELECT `id`,`local` FROM `listaTVs` ORDER BY `local`");
//$table->setFieldList("active",2,"1=>Active,0=>Inactive");
//$table->setFieldList("tipo",2,"1=>youtube,2=>videoLocal,3=>foto");

//the fiekd to be present as an image
//$table->setImageField("photo","../fotos/thumbs/",30);

//Link each record on the listo to external page passing the key value
//$table->setLinkPage("/public/perfil.php");

//Labels for fields
//$table->setLabel('userID',"Process");
//$table->setLabel('name',"Full Name");
$table->setLabel('origem',"Origem");
$table->setLabel('alt',"Altura");
$table->setLabel('larg',"Largura");
$table->setLabel('y',"Cordenada Y");
$table->setLabel('x',"Cordenada X");
$table->setLabel('idLayout',"Id do Layout");

//defines a criterion for the viewing action, where criterion is an sql (where) criterion that equals fields with values
$table->setCriterio("id=".$_REQUEST['id']);

//Do what is necessary to maintain the table in an html page. Lists the data and allows you to insert new ones, edit and delete records. Use a 'do' parameter to make decisions
$table->showHTML();


?>
