<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(),
	"PARAMETERS" => array(
		"SEF_MODE" => Array(
			"list" => array(
				"NAME" => GetMessage("T_MOVIE_SEF_PAGE"),
				"DEFAULT" => "",
				"VARIABLES" => array(),
			),
			"detail" => array(
				"NAME" => GetMessage("T_MOVIE_SEF_PAGE_DETAIL"),
				"DEFAULT" => "#ELEMENT_ID#/",
				"VARIABLES" => array("ELEMENT_ID", "SECTION_ID"),
			),
			"search" => array(
				"NAME" => GetMessage("T_MOVIE_SEF_PAGE_SEARCH"),
				"DEFAULT" => "search/",
				"VARIABLES" => array(),
			),
		),
	),
);

?>