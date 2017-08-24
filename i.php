<?php
echo phpinfo();


//
//$s = '12345';
//$s[$s[1]] = '2';
//echo $s;die;
//
//
//$str = 'LAMP';
//$str1 = 'LAMPBrother';
//$strc = strcmp($str,$str1);
//echo $strc;

//
//$file_name = '/Users/gm/Documents/www/91lsme/log/admin/admin_2017.log';
//define("MAX_SHOW", 8192);
//
//$file_size      = 0;
//$file_size_new  = 0;
//$add_size       = 0;
//$ignore_size    = 0;
//$fp = fopen($file_name, "r");
//
//while(1){
//	clearstatcache();
//	$file_size_new  = filesize($file_name);
//	$add_size       = $file_size_new - $file_size;
//	if($add_size > 0){
//		if($add_size > MAX_SHOW){
//			$ignore_size    = $add_size - MAX_SHOW;
//			$add_size       = MAX_SHOW;
//			fseek($fp, $file_size + $ignore_size);
//		}
//		fwrite(
//			STDOUT,
//			fread($fp, $add_size)
//		);
//		$file_size  = $file_size_new;
//	}
//	usleep(5000);
//}
//
//fclose($fp);