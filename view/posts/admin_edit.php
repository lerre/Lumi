<div class="page-header">
	<h1>Editer un article</h1>
</div>

<form action="<?php echo Router::url('admin/posts/edit'); ?>">
	<?php echo $this->Form->input('name', 'titre') ?>
	<?php echo $this->Form->input('content', 'Contenu') ?>
</form>