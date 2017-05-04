<?php

$resizedPicture = CFile::ResizeImageGet($arResult["PREVIEW_PICTURE"], array('width' => 200, 'height' => 300), BX_RESIZE_IMAGE_EXACT);
$arResult["IMAGE"] = $resizedPicture["src"];
$arResult["RATING"] = round(($arResult["PROPERTY_RATING_KINOPOISK_VALUE"]+$arResult["PROPERTY_RATING_IMDB_VALUE"])/2, 1);

?>