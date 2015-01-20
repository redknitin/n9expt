<?php include 'views/header.php'; ?>

<h1>Countries</h1>

<a href="?action=edit">Add</a>

<table border="1">
	<tr>
		<th>City Code</th>
		<th>City Name</th>
		<th>Country Name</th>
		<th>Actions</th>
	</tr>
<?php foreach($this->data as $iter_city): ?>
	<tr>
		<td><?= $iter_city->code ?></td>
		<td><?= $iter_city->name ?></td>
		<td><?= $iter_city->country_name ?></td>
		<td>
			<a href="?action=edit&code=<?= $iter_city->code ?>">Edit</a>
			 - 
			<form class="inline-display" method="post" action="?action=delete">
				<input type="hidden" name="code" value="<?= $iter_city->code ?>">
				<input type="submit" value="Delete" onclick="return confirm('Do you want to delete this record');">
			</form>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php include 'views/footer.php'; ?>