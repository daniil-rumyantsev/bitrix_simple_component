<?php

foreach($arResult["ITEMS"] as &$item)
{
	$resizedPicture = CFile::ResizeImageGet($item["PREVIEW_PICTURE"], array('width' => 150, 'height' => 225), BX_RESIZE_IMAGE_EXACT);
    $item["IMAGE"] = $resizedPicture["src"];
	$item["RATING"] = round(($item["PROPERTY_RATING_KINOPOISK_VALUE"]+$item["PROPERTY_RATING_IMDB_VALUE"])/2, 1);
}

?>