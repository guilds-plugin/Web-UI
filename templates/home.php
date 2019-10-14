<?php include('shared/header.html') ?>
<main>
    <h1>Guilds</h1>
    <table class="table-bordered" id="main-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Members</th>
                <th>Status</th>
                <th>Creation Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guilds as $guild_index => $guild): ?>
            <tr>
                <td><img class="guild-skull" src="https://mc-heads.net/avatar/<?= $guild->guildMaster->uuid ?>/100"><a href="/guild.php?id=<?= $guild->id ?>"><?= $guild->name ?></a></td>
                <td class="members">
                    <? echo sizeof($guild->members) ?>
                </td>
                <td><?= $guild->status ?></td>
                <td>
                    <? echo date("m/d/Y H:i:s", $guild->creationDate / 1000); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include('shared/footer.html') ?>
