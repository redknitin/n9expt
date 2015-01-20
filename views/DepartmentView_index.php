<?php include 'views/header.php'; ?>

<h1>Departments</h1>

<a href="?action=edit">Add</a>

<table border="1">
	<tr>
		<th>Department ID</th>
		<th>Department Name</th>
		<th>Location</th>
		<th>City Name</th>
		<th>Actions</th>
	</tr>

<?php foreach($this->data as $iter_department): ?>
	<tr>
		<td><?= $iter_department->id ?></td>
		<td><?= $iter_department->name ?></td>
		<td><?= $iter_department->location ?></td>
		<td><?= $iter_department->city_name ?></td>
		<td>
			<a href="?action=edit&id=<?= $iter_department->id ?>">Edit</a>
			 - 
			<form class="inline-display" method="post" action="?action=delete">
				<input type="hidden" name="id" value="<?= $iter_department->id ?>">
				<input type="submit" value="Delete" onclick="return confirm('Do you want to delete this record');">
			</form>
		</td>
	</tr>
<?php endforeach; ?>

</table>

<?php include 'views/footer.php'; ?>