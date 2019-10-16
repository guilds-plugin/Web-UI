<?php include('shared/header.php') ?>
<header>
    <h1>Guilds</h1>
</header>
<main>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Guild</th>
                <th>Balance</th>
                <th>Members</th>
                <th>Tier</th>
                <th>Arena Victories</th>
                <th>Age</th>
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
                <td>
                    <?= $_ENV['CURRENCY_SYMBOL'] . number_format($guild->balance, $_ENV['DECIMAL_PLACES']) ?>
                </td>
                <td class="members">
                    <?= count($guild->members) ?>
                </td>
                <td>
                    <?= $guild->tier->level ?>
                </td>
                <td>
                    <?php if ($guild->guildScore->wins == 0) { echo("0"); } else { echo($guild->guildScore->wins); } ?>
                </td>
                <td><?= $guild->age ?> day(s)</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include('shared/footer.php') ?>
