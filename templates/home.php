<?php include('shared/header.html') ?>
<main>
    <? foreach ($guilds as $guild): ?>
    	<?= $guild->name ?>
    <? endforeach; ?>
</main>
<?php include('shared/footer.html') ?>