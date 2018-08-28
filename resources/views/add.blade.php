<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="/user/insert" method="post">
		<input type="text" name="username">
		
		{{csrf_field()}}
		<button>提交</button>

	</form>
</body>
</html>