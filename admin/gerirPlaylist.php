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
$table->setTitle("playlists");
//SELECT `id`, `nome`, `ativa`, `hora_inicio`, `hora_fim`, `tv_id` FROM `playlists` WHERE 1
//select the table in the datebase
$table->prepareTable("playlists");

//list of fields for list, new, edit and import records
$table->setFieldsAtive("id, nome, ativa, hora_inicio",'list');
$table->setFieldsAtive("nome, ativa, hora_inicio", 'new');
$table->setFieldsAtive("nome, ativa, hora_inicio", 'edit');
$table->setFieldsAtive("nome, ativa, hora_inicio", 'csv');

//define field name passw as a password, hidding the file 
//$table->setFieldPass("passw",0, "md5");

//define lists of values to supplay to a field
$table->setFieldList("tv_id",1," SELECT `id`,`local` FROM `listaTVs` ORDER BY `local`");
$table->setFieldList("ativa",2,"1=>Active,0=>Inactive");

//the fiekd to be present as an image
//$table->setImageField("photo","../fotos/thumbs/",30);

//Link each record on the listo to external page passing the key value
//$table->setLinkPage("/public/perfil.php");

//Labels for fields
$table->setLabel('hora_inicio',"Hora de Inicio");
$table->setLabel('ativa',"Estado");
$table->setLabel('nome',"Nome da Playlist");

//defines a criterion for the viewing action, where criterion is an sql (where) criterion that equals fields with values
//$table->setCriterio("type='Admin'");

//Do what is necessary to maintain the table in an html page. Lists the data and allows you to insert new ones, edit and delete records. Use a 'do' parameter to make decisions
$table->showHTML();


?>
