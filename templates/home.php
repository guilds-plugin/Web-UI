<?php include('shared/header.html') ?>
<main>
	<h1>Guilds</h1>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
	    <?php foreach ($guilds as $guild_index => $guild): ?>
	    	<tr>
	    		<td><a href="/guild.php?id=<?= $guild_index ?>"><?= $guild_index ?></a></td>
	    		<td><?= $guild->name ?></td>
	    		<td><?= $guild->status ?></td>
	    	</tr>
	    <?php endforeach; ?>
		</tbody>
	</table>
</main>
<?php include('shared/footer.html') ?>