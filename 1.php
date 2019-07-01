<?php 

function rm_dir($path){
	if(!is_dir($path)) {
		return NULL;
	}

	$dh = opendir($path);
	while(($row= readdir($dh))!==false) {
		if($row == '.'||$row=='..') {
			continue;
		}
		if(!is_dir($path.'/'.$row)) {
			unlink($path.'/'.$row);
		}else{

			rm_dir($path.'/'.$row);
		}
	}
	closedir($dh);
	rmdir($path);
	echo '删除了',$path,'文件夹','<br />';
	return true;
}
=
/**
 * undocumented function
 *
 * @return void
 * @author 
 **/
function ()
{
}
 ?>