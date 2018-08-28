<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
	<meta charset="utf-8">
</head>
<body>
	@include('layouts/header')

	<h1>{{$username or '游客'}}</h1>
	<h1>{{$title}}</h1>
	<p>{{date('Y-m-d')}}</p>
	<p>{{$content}}</p>
	<p>{!!$pages!!}</p>
	
	@include('layouts/footer')

</body>
</html>