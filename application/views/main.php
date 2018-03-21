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
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			<form method="POST" action="/new">
				<div class="form-group">
					<h2 class="margin-top-20"> Введите ссылку </h2>
					<input name="link" required type="text" class="is-full-width" id="url-input" placeholder="https://google.com">
				</div>
				<button type="submit" class="btn btn-success">Сократить ссылку</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>