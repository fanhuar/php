<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
<?php
	// PHP中关闭notice级别的错误提示
	// php.ini文件中error_reporting -> error_reporting = E_ALL & ~E_NOTICE
	error_reporting(E_ALL ^ E_NOTICE); // PHP中关闭某个页面的notice级别的错误提示
	$initial = $_REQUEST['grade'];
	$grade = explode(" ", $initial);
	$allGrade = 0;
	foreach ($grade as $key => $value) {
		$allGrade += (int)$value;
	}
?>
<form action="array.php" method="post">
	<input type="text" name="grade" value="<?php echo $initial;?>" />
	<input type="submit" value="开始统计">
</form>
<?php 
	echo '成绩总合：'.$allGrade;
	echo '<br>平均成绩：'.$allGrade/count($grade);
 ?>
</body>
</html>
