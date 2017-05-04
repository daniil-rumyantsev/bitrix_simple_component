<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<style>
	#movieInfo td
	{
		min-width: 100px;
		max-width: 300px;
		vertical-align: top;
		padding: 2px 0;
	}
	
</style>
<table style="margin:20px;">
	<tr>
		<td style="vertical-align:top;">
			<img src="<?= $arResult["IMAGE"] ?>" alt="">
		</td>
		<td style="vertical-align:top;padding-left:30px;">
			<h1><?= $arResult["NAME"] ?></h1>
			<table id="movieInfo">
				<tr>
					<td>Рейтинг</td>
					<td>&#9734; <?=$arResult["RATING"]?> <b>K</b> <?=$arResult["PROPERTY_RATING_KINOPOISK_VALUE"]?> <b>I</b> <?=$arResult["PROPERTY_RATING_IMDB_VALUE"]?></td>
				</tr>
				<tr>
					<td>Название</td>
					<td><?=$arResult["PROPERTY_ORIGINAL_NAME_VALUE"]?></td>
				</tr>
				<tr>
					<td>Год</td>
					<td><a href="/movie/?year=<?=$arResult["PROPERTY_YEAR_VALUE"]?>"><?=$arResult["PROPERTY_YEAR_VALUE"]?></a></td>
				</tr>
				<tr>
					<td>Жанры</td>
					<td>
						<?php foreach ($arResult["PROPERTY_GENRES_VALUE"] as $g): ?>
						<a href="/movie/?genre=<?=$g?>"><?=$g?></a>&nbsp;
						<?php endforeach; ?>
					</td>
				</tr>
				<tr>
					<td>Страна</td>
					<td>
						<?php foreach ($arResult["PROPERTY_COUNTRY_VALUE"] as $c): ?>
						<a href="/movie/?country=<?=$c?>"><?=$c?></a>&nbsp;
						<?php endforeach; ?>
					</td>
				</tr>
				<tr>
					<td>Режиссёр</td>
					<td><?=$arResult["PROPERTY_DIRECTOR_VALUE"]?></td>
				</tr>
				<tr>
					<td>Сценарий</td>
					<td>
						<?php foreach ($arResult["PROPERTY_SCRIPT_VALUE"] as $s): ?>
						<a href="/movie/?script=<?=$s?>"><?=$s?></a>&nbsp;
						<?php endforeach; ?>
					</td>
				</tr>
				<tr>
					<td>Актёры</td>
					<td>
						<?php foreach ($arResult["PROPERTY_CAST_VALUE"] as $a): ?>
						<a href="/movie/?cast=<?=$a?>"><?=$a?></a>&nbsp;
						<?php endforeach; ?>
					</td>
				</tr>
				<tr>
					<td>Время</td>
					<td><?=$arResult["PROPERTY_DURATION_VALUE"]?></td>
				</tr>
				<tr>
					<td>Премьера</td>
					<td>
						<?php foreach ($arResult["PROPERTY_RELEASE_VALUE"] as $r) echo $r.'<br>'; ?>
					</td>
				</tr>
				<tr>
					<td>DVD</td>
					<td><?=$arResult["PROPERTY_DVD_VALUE"]?></td>
				</tr>
			</table>
			<p><?=$arResult["DETAIL_TEXT"]?></p>
		</td>
	</tr>
</table>	
<p><a href="/movie/"><< Весь список</a></p>