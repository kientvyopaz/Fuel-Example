<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>FuelPHP Framework</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<div class="py-5">
			<h2>Tasks</h2>
			<div class="w-50">
				<form method="POST" action="/tasks">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" required />
					</div>
					<div class="form-group">
						<label for="body">Body</label>
						<textarea class="form-control" id="body" name="body" cols="20" rows="7"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>

		<div>
			<h2>List Tasks</h2>

			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Title</th>
						<th class="text-center" scope="col">Body</th>
						<th class="text-right" scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($tasks as $task) {
					?>
						<tr>
							<td><?php echo $task->id ?></td>
							<td><?php echo $task->title ?></td>
							<td class="text-center"><?php echo $task->body ?></td>
							<td class="text-right"><button class="btn btn-danger">Delete</button></td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>