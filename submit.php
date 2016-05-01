<?php

/**
 * submit.php
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
$error = '';	

function checkUpload($upFile) {
global $_upload, $error;
	if(!empty($upFile)){
		// filename given
		db_connect("mysql");
		$fileName = mysql_real_escape_string($_FILES['file']['name']) ;
		// filename temporary on server
		$fileNameTemp = $_FILES['file']['tmp_name'] ;
		// filetype given
		$fileType = $_FILES['file']['type'] ;
		// file weight given
		$fileWeight = $_FILES['file']['size'] ;
		// code error if there are one
		$codeError = $_FILES['file']['error'] ;

		// if error
		if ($codeError) {
          	 switch ($codeError){
                   case 1: // UPLOAD_ERR_INI_SIZE
                   $error = $error.'<li>File too big.</li>';
                   break;
                   case 2: // UPLOAD_ERR_FORM_SIZE
                   $error = $error.'<li>File too big.</li>';
                   break;
                   case 3: // UPLOAD_ERR_PARTIAL
                   $error = $error.'<li>Transfer canceled.</li>';
                   break;
                   case 4: // UPLOAD_ERR_NO_FILE
                   $error = $error.'<li>Empty file.</li>';
                   break;
				   case 5: // UPLOAD_ERR_NO_TMP_DIR
                   $error = $error.'<li>Temp folder is missing.</li>';
                   break;
				   case 6: // UPLOAD_ERR_CANT_WRITE
                   $error = $error.'<li>Cannot write on server.</li>';
                   break;
         	 }
		}else{
			// Copy temporary file to our directory
			if(is_uploaded_file($fileNameTemp)) {
				$mov = move_uploaded_file($fileNameTemp,$_upload.$fileName);
				if(!$mov){
					$error = $error.'<li>Temp folder ('.$_upload.') not accessible?</li>';
				}
			}else{
				$error = $error.'<li>Upload failed.</li>';
			}
		}
	}else{
		$error = $error.'<li>File not chosen.</li>';
	}
	return $fileName;
}

// Step 2 : File Validation
if($action == 'up') {
	// Verification of existance of the file and upload done
	$fileName = checkUpload($_FILES['file']['name']);
	$_smarty->assign('error',$error);
	if(!empty($error)) {
		$tpl = 'submit.tpl';
	}else{
		$_smarty->assign('filename',$fileName);
		$tpl = 'submit_successful.tpl';
	}
	
// Else Step 1 : Choose file
}else{
	$tpl = 'submit.tpl';	
}

$title = 'Submit a file';

include('footer.php');

?>
