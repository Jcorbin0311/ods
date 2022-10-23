<!DOCTYPE html>
<html>
	<head>
		<title>Add A DRIVER</title>
	</head>
	<body>
		<div>
			{!! Form:: open(['method' => 'post', 'route' => 'driver.store'])  !!}

			<p>
				{!! Form:: label('name', 'Name ') !!}
				{!! Form:: text('name', '', ['placeholder' => 'Driver name']) !!}

			</p>

			@error('name')
				<div> {{$message}}</div>
			@enderror

			<p>
				{!! Form:: label('telephone', 'Telephone ') !!}
				{!! Form:: text('telephone', '', ['placeholder' => 'Telephone Number']) !!}
			</p>

			@error('telephone')
				<div> {{$message}}</div>
			@enderror

			{!! Form:: submit('Add New Driver') !!}
			{!! Form:: close() !!}
		</div>
	</body>
</html>