<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<ul id="movieList" style="margin:20px;list-style:none;">

	<?php foreach($arResult["ITEMS"] as $item): ?>

    <li style="display:inline-block;margin:20px;max-width:150px;">
    	<img alt="" src="<?=$item["IMAGE"]?>">
        <h5><a href="<?= $arParams["FOLDER"].$item["CODE"].'/' ?>"><?=$item["NAME"]?></a></h5>
        <p>&#9734; <?=$item["RATING"]?><span style="float:right;"><?=$item["PROPERTY_YEAR_VALUE"]?></span></p>
    </li>  
    
    <?php endforeach; ?>     
        
</ul>
<p><a href="/movie/">Показать все</a></p>