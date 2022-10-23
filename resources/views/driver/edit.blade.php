<!DOCTYPE html>
<html>
	<head>
		<title>EDIT DRIVER</title>
	</head>
	<body>
		<div>
			{!! Form:: open(['method' => 'put', 'route' => ['driver.update', $driver->id]])  !!}

			<p>
				{!! Form:: label('name', 'Name ') !!}
				{!! Form:: text('name', $driver->name, ['placeholder' => 'Driver name']) !!}

			</p>

			@error('name')
				<div> {{$message}}</div>
			@enderror

			<p>
				{!! Form:: label('telephone', 'Telephone ') !!}
				{!! Form:: text('telephone', $driver->telephone, ['placeholder' => 'Telephone Number']) !!}
			</p>

			@error('telephone')
				<div> {{$message}}</div>
			@enderror

			{!! Form:: submit('Update Driver') !!}
			{!! Form:: close() !!}
		</div>
	</body>
</html>