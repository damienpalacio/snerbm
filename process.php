<?php

/**
 * process.php
 *
 * Damien Palacio
 * Geocomputation - UZH
 * 2016
 *
 **/

require_once('header.php');

$action = null;
if(isset($_GET['action'])) {
	$action = $_GET['action'];
}
$file = null;
if(isset($_GET['f'])) {
	$file = $_GET['f'];
}
$error = '';	

function process($file) {
global $_upload, $_dir_out, $error;
	// check it exists
	if(!file_exists($_upload.$file)) {
		$error = "File doesn't exists";
	} else {
		// TODO: we don't submit to systems but we convert to TREC eval format --> use RulesEval.
		
		// Then run through Trec_Eval
		// $dir_out instead of $_dir_out TEMP
		$dir_out = "applis/";
		$fileRes = "logs.txt";
		$command = /*$dir_out.*/"trec_eval.exe -c ".$dir_out."qrels.txt ".$dir_out."results/input/input.clavin2 > ".$dir_out.$fileRes;
		//$command = str_replace(" ", "\ ", $command);
		//$command = str_replace("/", "\\", $command);
		echo $command;
		echo exec($command); //shell_exec
		// http://localhost/snerbm/process.php?f=examples.txt
		return $fileRes;
	}
}

function loadResults($res_file) {
	$data = array();
	// check it exists
	$dir_out = "applis/";
	if(!file_exists($dir_out.$res_file)) {
		$error = "File doesn't exists";
	} else {
		$file = fopen($dir_out.$res_file, 'r');
		if($file) {
			while (!feof($file))	{
				$line = fgets($file);
				if(!empty($line)) {					
					$parts = preg_split("/[\t]/", $line);
					$data[$parts[0]] = $parts[2];
				}
			}
		}
	}
	return $data;
}

// Step 2 : Display results
if($action == 'res') {
	// Verification of existance of the results
	$fileName = checkResults($_results.$file);
	$_smarty->assign('error',$error);
	if(!empty($error)) {
		$tpl = 'process_results.tpl';
	}else{
		$_smarty->assign('filename',$fileName);
		$tpl = 'process.tpl';
	}
	
// Else Step 1 : Process file
}else{
	$fileRes = process($file);
	$data = loadResults($fileRes);
	$_smarty->assign("data", $data);
	$tpl = 'process.tpl';	
}

$title = 'Process file';

include('footer.php');

?>
