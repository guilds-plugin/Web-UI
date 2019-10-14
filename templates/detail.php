<?php include('shared/header.html') ?>
<main>
	<a href="/">Go back</a>
	<h1><?= $guild->name ?></h1>
	<?php foreach($guild->members as $member): ?>
    <img src = "https://mc-heads.net/body/<?= $member->uuid ?>">
    <?php endforeach; ?>
</main>
<?php include('shared/footer.html') ?>