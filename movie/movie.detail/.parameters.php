<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(),
	"PARAMETERS" => array(
		"MOVIE_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("MOVIE_ID"),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"REFRESH" => "Y",
		),
	),
);

?>