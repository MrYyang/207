<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
		<h2>修改</h2>
	<form action="/tiezi/30" method="POST">
		<input type="text" name="abc">
		{{csrf_field()}}
		{{ method_field('PUT') }}
		<button>提交</button>
	</form>

	<h2>删除</h2>
	<form action="/tiezi/30" method="POST">
		<input type="text" name="abc">
		{{csrf_field()}}
		{{ method_field('DELETE') }}
		<button>提交</button>
	</form>
</body>
</html>