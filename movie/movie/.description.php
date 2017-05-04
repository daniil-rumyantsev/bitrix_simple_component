<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array(
   "NAME" => GetMessage("COMP_NAME"),
   "DESCRIPTION" => GetMessage("COMP_DESCR"),
   "PATH" => array(
      "ID" => "content",
      "CHILD" => array(
         "ID" => "movie",
         "NAME" => GetMessage("MOVIE")
      )
   ),
   "AREA_BUTTONS" => array(
      array(
         'URL' => "javascript:alert('Кнопка!!!');",
         'SRC' => '/images/button.jpg',
         'TITLE' => "Кнопка!"
      ),
   ),
   "CACHE_PATH" => "Y",
   "COMPLEX" => "Y"
);
?>