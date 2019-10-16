<?php include('shared/header.php') ?>
<header>
    <h1>Guilds</h1>
</header>
<main>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Members</th>
                <th>Status</th>
                <th>Creation Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guilds as $guild_index => $guild): ?>
            <tr>
                <td class="avatar">
                    <img class="guild-skull" src="https://mc-heads.net/avatar/<?= $guild->guildMaster->uuid ?>/100" alt="<?= $guild->name ?>'s avatar">
                </td>
                <td>
                    <a href="/guild.php?id=<?= $guild->id ?>"><?= $guild->name ?></a>
                </td>
                <td class="members">
                    <?= count($guild->members) ?>
                </td>
                <td><?= $guild->status ?></td>
                <td>
                    <?= date("m/d/Y", $guild->creationDate / 1000); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include('shared/footer.php') ?>
