<?php

// function
function ____app_css_file_manager($file_source, $file_target, $get_source) {

	$file_handler = fopen($file_source, "r");
	$file_data = fread($file_handler, filesize($file_source));
	fclose($file_handler);

	$json_data = $file_data;
	$data_output = "";
	$json_data_decode = json_decode($json_data);

	foreach($json_data_decode as $key => $value) {

		if(!in_array($key, $get_source, true)) {
			$data_output .= "";
		} else {

			if(substr($value, 0, 4) === "http") {
				$data_output .= "@import url('" . "{$value}?cache=" . time() . "');" . "\n";
			} else {
				$data_output .= "@import url('" . APP_RES_PATH . "{$value}?cache=" . time() . "');" . "\n";
			}
		}

	}

	//$data_output .= "//* hello world 69 *//";
	$file_handler = fopen($file_target, "w");
	fwrite($file_handler, $data_output);
	fclose($file_handler);

}

// function 
function ____app_js_file_manager($file_source, $file_target, $get_sources_header, $get_sources_footer) {

	$file_handler = fopen($file_source, "r");
	$file_data = fread($file_handler, filesize($file_source));
	fclose($file_handler);

	$json_data = $file_data;
	$json_data_decode = json_decode($json_data, true);

	$js_array_head = "var js_array_head = [ \n";
	$js_array_footer = "var js_array_footer = [ \n";

	$gsh = $get_sources_header;
	array_pop($get_sources_header);

	$gsf = $get_sources_footer;
	array_pop($get_sources_footer);

	foreach($json_data_decode as $key => $value) {

		if(!in_array($key, $get_sources_header, true)) {
			$js_array_head .= "";
		} else {	
			$js_array_head .="'" . APP_RES_PATH . "{$value}?cache=" .time() . "',\n";	
		}

		if(!in_array($key, $get_sources_footer, true)) {
			$js_array_footer .= "";
		} else {	
			$js_array_footer .="'" . APP_RES_PATH . "{$value}?cache=" .time() . "',\n";	
		}

	}

	$h = end($gsh);
	$hh = $json_data_decode[$h];
	$hhh = APP_RES_PATH . $hh;

	$f = end($gsf);
	$ff = $json_data_decode[$f];
	$fff = APP_RES_PATH . $ff;

	$js_array_head .= "'{$hhh}?cache=" . time() ."'";
	$js_array_head .= "\n];\n\n";

	$js_array_footer .= "'{$fff}?cache=" . time() ."'";
	$js_array_footer .= "\n];\n\n";

	//$js_array_footer .= "// tester";

	$file_handler = fopen($file_target, "w");
	fclose($file_handler);

	$file_handler = fopen($file_target, "a");
	fwrite($file_handler, $js_array_head);
	fclose($file_handler);

	$file_handler = fopen($file_target, "a");
	fwrite($file_handler, $js_array_footer);
	fclose($file_handler);

}

?>