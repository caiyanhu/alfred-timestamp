<?php

date_default_timezone_set("PRC");
$query = empty($argv[1]) ? '' : $argv[1];

if (empty($query)) {
	$param = microtime();
	$output = '当前时间戳为：' . $param;
}
else if (is_numeric($query)) {
	$param = date('Y-m-d H:i:s', $query);
	$output = $param+"000";
}
else {
	$param = strtotime($query);
	$output = $param+"000";
}

echo '<?xml version="1.0" encoding="utf-8"?>
<items>
    <item valid="yes" arg="'.$param.'">
        <title>'.$output.'</title>
        <subtitle></subtitle>
        <icon></icon>
    </item>
</items>';

?>
