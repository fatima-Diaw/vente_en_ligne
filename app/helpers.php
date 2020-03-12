<?php

function getPrice($price)
{
	$price = dd(floatval($price));
	return number_format($price,2, ',', ' ') . ' frcfa';
}