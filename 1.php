<?php 
$id='';
$page='';
if(isset($_GET['clear'])){
	file_put_contents('./1.txt', '');
	$url = "./";  
echo "<script type='text/javascript'>";  
echo "window.location.href='$url'";  
echo "</script>";  
}
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
if(isset($_GET['content'])){
	$page = $_GET['content'];
}
if($id!='' && $page!=''){
	$data = $id.': '.$page.' '.date('y-m-d h:i:s',time());
$filename="./1.txt";

$handle=fopen($filename,"a+");

$str=fwrite($handle,$data.'<br>');

 fclose($handle);

	//file_put_contents('./1.txt', $data);
}
	
$file_path = "1.txt";
if(file_exists($file_path)){

$str = file_get_contents($file_path);

if($str != ''){
	echo $str.' ';

}

}
	
 ?>