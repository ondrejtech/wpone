<?php

require_once("simple-html-dom.php");


$app_file = array();
$csv_buffer = array();

$app_file["input"] = "https://www.svarovacka.cz/feed-svarovacka.php";
$app_file["output"] = "data/svarovacka-data.csv";
$app_file["csv_header"] = array('url', 'img_url', 'product_name', 'product_description', 'category', 'price_vat');

array_push($csv_buffer, $app_file["csv_header"]);


echo "hello world";


/*
$xml_parser = file_get_html($app_file["input"]);

$i = 0;

foreach($xml_parser->find("SHOPITEM") as $item) {
	$i++;

	array_push(
	$csv_buffer,
	array(
	$item->children(4)->innertext
	)
	);

	if($i == 10) {
		break;
	}

}



$app_file["csv_handler"] = fopen($app_file["output"], "w");

foreach($csv_buffer as $item) {
	fputcsv($app_file["csv_handler"], $item);
}


fclose($app_file["csv_handler"]);
*/




?>