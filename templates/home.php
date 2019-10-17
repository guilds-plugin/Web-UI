<?php include('shared/header.php') ?>
<header>
    <h1>Guilds</h1>
</header>
<main>
    <table class="table" id="board">
        <thead>
            <tr>
                <th></th>
                <th aria-label="The name of the Guild" data-balloon-pos="up">Guild</th>
                <th aria-label="The current bank balance of the Guild" data-balloon-pos="up">Balance</th>
                <th aria-label="The amount of members in the Guild" data-balloon-pos="up">Members</th>
                <th aria-label="The level of the Guild" data-balloon-pos="up">Tier</th>
                <th aria-label="The number of war victories the Guild has" data-balloon-pos="up">Arena Victories</th>
                <th aria-label="The age of the Guild" data-balloon-pos="up">Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guilds as $guild_index => $guild): ?>
            <tr>
                <td class="avatar">
                    <img class="guild-skull" src="https://mc-heads.net/avatar/<?= $guild->guildMaster->uuid ?>/100" alt="<?= $guild->name ?>'s avatar">
                </td>
                <td class="center">
                    <a href="/guild.php?id=<?= $guild->id ?>"><?= $guild->name ?></a>
                </td>
                <td class="center">
                    <?= $_ENV['CURRENCY_SYMBOL'] . number_format($guild->balance, $_ENV['DECIMAL_PLACES']) ?>
                </td>
                <td class="center">
                    <?= count($guild->members) ?>
                </td>
                <td class="center">
                    <?= $guild->tier->level ?>
                </td>
                <td class="center">
                    <?php if ($guild->guildScore->wins == 0) { echo("0"); } else { echo($guild->guildScore->wins); } ?>
                </td>
                <td class="center"><?= $guild->age ?> day(s)</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include('shared/footer.php') ?>
