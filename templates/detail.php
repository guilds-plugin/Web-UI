<?php include('shared/header.php') ?>
<header>
    <h1><?= $guild->name ?></h1>
    <a href="/">Go back</a>
</header>
<main>
	<?php foreach($guild->members as $member): ?>
    <img src = "https://mc-heads.net/body/<?= $member->uuid ?>">
    <?php endforeach; ?>
</main>
<?php include('shared/footer.php') ?>