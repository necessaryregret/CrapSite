<html><head><title></title></head><body>
<?php
if (empty($_POST['dir'])){$dir='/var/www/html/uploads/public';}else{$dir=$_POST['dir'];}

$files = array_slice(scandir($dir),2);
foreach ($files as $f){ echo "<a href=getfile.php?f=".urlencode($dir."/".$f).">".$f."</a><br/>";}
?>

<form action="filelist.php" method=post>
dir:<input type="text" name="dir">
<input type="submit" name="submit" value="submit">
</form>

</body></html>
