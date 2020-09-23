<?php
$t=isset($_GET['t']) ?$_GET['t']: 'str';
$callback=isset($_GET['callback']) ?$_GET['callback']: 'fn';

if($t=='str'){
  $str=array('aaa','bbb','ccc','ddd');
  echo $callback.'('.json_encode($str).')';  
}else{
  $arr=array('111','222','333','444');  
  echo $callback.'('.json_encode($arr).')';  
}




?>