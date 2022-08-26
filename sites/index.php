<!doctype html>
<meta charset="utf-8" />
<title>dev.srv</title>
<meta content="initial-scale=1,width=device-width" name="viewport" />
<style>
:root{
	color-scheme: light dark;
}
body{
	margin: auto;
	max-width:92%;
	width:40em;
}
</style>
<h1>dev.srv</h1>
<?php
$sites = glob(__DIR__ . '/*/web');
if($sites){
?>
<ul>
<?php
	foreach($sites as $site){
		$path = substr($site, strlen(__DIR__));
		$name = substr($path, 1, -4);
?>
	<li><a href="http://<?=$name?>.l/"><?=$name?>.l</a> (<a href="<?=$path?>/"><?=$name?> subfolder</a>)</li>
<?php
}
?>
</ul>
<?php
}else{
?>
<p>No dev sites found.</p>
<?php
}
?>
<p>Uptime: <?=`uptime`?></p>
