<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="/system/views/profiler/style.css">
	<link rel="stylesheet" href="/system/views/profiler/bootstrap.min.css">
	<title>Short</title>
</head>

<body>
<div class="container">
		<div class="row margin-top-20">
			<div class="col-xs-3 col-xs-offset-3">
				<h3 class="url-short-share-lable"> Ссылка для шаринга </h3>
				<input class="is-full-width" id="url-short-share" type="text" value="<?php echo($link); ?>">
			</div>
			<div class="col-xs-3">
				<h3 class="url-short-statistic-lable"> Ссылка для статистики </h3>
				<input class="is-full-width" id="url-short-statistic" type="text" value="<?php echo($link.'/stats'); ?>">
			</div>
		</div>
	</div>
</body>
</html>