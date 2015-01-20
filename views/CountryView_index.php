<?php include 'views/header.php'; ?>

<h1>Countries</h1>

<a href="?action=edit">Add</a>

<ul>
<?php foreach($this->data as $iter_country): ?>
<li>
	<?= $iter_country->code ?> - <?= $iter_country->name ?> 
	<a href="?action=edit&code=<?= $iter_country->code ?>">Edit</a>
	 - 
	<form class="inline-display" method="post" action="?action=delete">
		<input type="hidden" name="code" value="<?= $iter_country->code ?>">
		<input type="submit" value="Delete" onclick="return confirm('Do you want to delete this record');">
	</form>
</li>
<?php endforeach; ?>
</ul>

<?php include 'views/footer.php'; ?>