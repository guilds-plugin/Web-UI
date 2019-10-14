<?php include('shared/header.html') ?>
<main>
    <div class="container">
        <div class="table-responsive">
            <h1>Guilds</h1>
            <table class="table table-bordered">
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
                        <td><a href="/guild.php?id=<?= $guild->id ?>"><img style="width: 50px; height: 50px;" src="https://mc-heads.net/avatar/<?= $guild->guildMaster->uuid ?>/100"><?= $guild->name ?></a></td>
                        <td><? echo sizeof($guild->members) ?></td>
                        <td><?= $guild->status ?></td>
                        <td>
                            <? echo date("m/d/Y H:i:s", $guild->creationDate / 1000); ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include('shared/footer.html') ?>
