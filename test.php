<?php

?>
<form action='' method='post'>
<input type='text' name='str'>
<input type='submit' name='sss' >
</form>
<?php
$str=$_REQUEST['str'];
echo "<pre>";
$str= preg_replace("/[\"]+/","&quot;",$str);
$str=preg_replace("/[\']+/","\'",$str);

echo "select * test where id='".$str."'";





?>