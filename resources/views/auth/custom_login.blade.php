<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul class="list-unstyled">
			@foreach ($errors->all() as $error)
				<li>{!! $error !!}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action="{{ route('login') }}" method="post">
		@csrf

		<input type="text" name="pseudo">
		<input type="password" name="password">
		<input type="submit">
	</form>

</body>
</html>