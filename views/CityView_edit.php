<?php include 'views/header.php'; ?>

<h1>Cities</h1>

<form class="inline-display" method="post" action="?action=save<?= isset($_GET['code'])?"&code={$_GET['code']}":'' ?>">
	<input type="text" name="code" placeholder="Code" value="<?= $this->data->code ?>">
	<input type="text" name="name" placeholder="Name" value="<?= $this->data->name ?>">
	<select name="country_code">
		<?php foreach ($this->lookup['country'] as $iter_country): ?>
		<option value="<?= $iter_country->code ?>"<?= $iter_country->code == $this->data->country_code ? ' selected="selected"' : '' ?>><?= $iter_country->name ?></option>
		<?php endforeach; ?>
	</select>	
	<input type="submit" value="Save">
</form>

<?php include 'views/footer.php'; ?>