<? 
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

const IBLOCK_MOVIES = 11;

CModule::IncludeModule("iblock");

$arSelect = Array(
		"ID",
		"NAME", 
		"CODE", 
		"PREVIEW_PICTURE", 
		"PROPERTY_RATING_KINOPOISK", 
		"PROPERTY_RATING_IMDB",
		"PROPERTY_ORIGINAL_NAME",
		"PROPERTY_YEAR",
		"PROPERTY_GENRES",
		"PROPERTY_COUNTRY",
		"PROPERTY_DIRECTOR",
		"PROPERTY_SCRIPT",
		"PROPERTY_CAST",
		"PROPERTY_DURATION",
		"PROPERTY_RELEASE",
		"PROPERTY_DVD",
		"DETAIL_TEXT"
		);
	
$arFilter = $arParams["MOVIE_ID"] 
			? Array("IBLOCK_ID"=>IBLOCK_MOVIES, "ID" => intval($arParams["MOVIE_ID"]), "ACTIVE"=>"Y") 
			: Array("IBLOCK_ID"=>IBLOCK_MOVIES, "CODE" => $arParams["MOVIE_CODE"], "ACTIVE"=>"Y");

			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
$ob = $res->GetNextElement();
$arResult = $ob->GetFields();	

$this->IncludeComponentTemplate();
?>