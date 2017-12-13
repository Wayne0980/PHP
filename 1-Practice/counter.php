<?php
echo "Visitor : ".my_counter();


function my_counter(){
	
	$data="count.txt";
	if(file_exists($data))
	{
		
		$fp=fopen($data,"r");
		$old_count=fread($fp,filesize($data));
		$new_count=$old_count+1;
		fclose($fp);
	}else{
		
		$new_count=1;
	}
	
	$fp=fopen($data,"w");
	fwrite($fp,$new_count);
	fclose($fp);
	return $new_count;
}

?>