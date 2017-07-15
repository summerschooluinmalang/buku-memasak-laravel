<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>

	{{ "statement" }}

	<table class="table">
		<tr>
			<th>#</th>
			<th>name</th>
			<th>old</th>
			<th>address</th>
		</tr>

		@foreach ($students as $key => $student)
			<tr>
				<td>{{ $student->id }}</td>
				<td>{{ $student->name }}</td>
				<td>{{ $student->old }}</td>
				<td>{{ $student->address }}</td>
			</tr>
		@endforeach

	</table>

	<?php $i=0; ?>

	@if ($i>0)

		{{ $i }}

	@endif

</body>
</html>