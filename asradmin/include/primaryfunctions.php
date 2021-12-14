<?php 
function UploadFile($copypath,$imagename,$logo_img){

		//Split the Image Array
		$pImage_name=$logo_img.str_replace(" ","-",$imagename['name']);
		$pImage_name=$logo_img.str_replace("%20","-",$imagename['name']);
		$x_file_name=$logo_img.str_replace(" ","-",$imagename['name']);
		$x_file_name=$logo_img.str_replace("%20","-",$imagename['name']);
		$pImage_path=$imagename['tmp_name'];
		$pImage_type=$imagename['type'];
		//print $pImage_type;
		//print $pImage_name."Image";
		$exist=file_exists($copypath.$pImage_name);
		if($exist!=1)
				{
						 if(!copy($pImage_path,$copypath.$pImage_name))
						 {
							  echo "Error:Can not copy the specified file into ".$copypath;
							  exit;
						 }
				}
		else{
				unlink($copypath.$pImage_name);
				if(!copy($pImage_path,$copypath.$pImage_name))
						 {
							  echo "Error:Can not copy the specified file ".$copypath.$pImage_name;
							  exit;
						 }
				}
		
		return $x_file_name;
	} ?>