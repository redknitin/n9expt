<?php include 'views/header.php'; ?>

<h1>Departments</h1>

<form class="inline-display" method="post" action="?action=save<?= isset($_GET['id'])?"&id={$_GET['id']}":'' ?>">
	<input type="text" name="name" placeholder="Name" value="<?= $this->data->name ?>">
	<input type="text" name="location" placeholder="Location" value="<?= $this->data->location ?>">
	<select name="city_code">
		<?php foreach ($this->lookup['city'] as $iter_city): ?>
		<option value="<?= $iter_city->code ?>"<?= $iter_city->code == $this->data->city_code ? ' selected="selected"' : '' ?>><?= $iter_city->name ?></option>
		<?php endforeach; ?>
	</select>	
	<input type="submit" value="Save">
</form>

<?php include 'views/footer.php'; ?>