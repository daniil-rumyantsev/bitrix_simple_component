<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("iblock");

$arSelect = Array("NAME", "CODE", "PREVIEW_PICTURE", "PROPERTY_RATING_KINOPOISK", "PROPERTY_RATING_IMDB", "PROPERTY_YEAR");
$arFilter = Array("IBLOCK_ID"=>11, "ACTIVE"=>"Y");

// Дополнительные фильтры

$year = intval($_GET["year"]);
$cast = HTMLToTxt($_GET["cast"]);
$genre = HTMLToTxt($_GET["genre"]);
$script = HTMLToTxt($_GET["script"]);
$country = HTMLToTxt($_GET["country"]);

if ($year) $arFilter["PROPERTY_YEAR"] = $year;
if ($cast) $arFilter["PROPERTY_CAST"] = $cast;
if ($genre) $arFilter["PROPERTY_GENRES"] = $genre;
if ($script) $arFilter["PROPERTY_SCRIPT"] = $script;
if ($country) $arFilter["PROPERTY_COUNTRY"] = $country;

$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNextElement())
{
	$arResult["ITEMS"][] = $ob->GetFields();
} 

$this->IncludeComponentTemplate();
?>