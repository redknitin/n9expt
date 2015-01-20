<?php include 'views/header.php'; ?>

<h1>Countries</h1>

<form class="inline-display" method="post" action="?action=save<?= isset($_GET['code'])?"&code={$_GET['code']}":'' ?>">
	<input type="text" name="code" placeholder="Code" value="<?= $this->data->code ?>">
	<input type="text" name="name" placeholder="Name" value="<?= $this->data->name ?>">
	<input type="submit" value="Save">
</form>

<?php include 'views/footer.php'; ?>