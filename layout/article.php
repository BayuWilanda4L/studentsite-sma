<div class="container article">
	<div class="row">
		<div class="col-md-12">
			<div class="article2">
			<h1 class="text-center">
			<?php
				$query = $db_conn->prepare("SELECT * FROM pengumuman WHERE judul=:judul");
				$query->bindParam(":judul", $judul_db);
				$query->execute();
				$pengumuman=$query->fetch(PDO::FETCH_ASSOC);
				echo "$pengumuman[judul]";
			?>
			</h1>
			<hr>
			<p>
				<?php
				echo "$pengumuman[isi]";
				?>
			</p>
			</div>
		</div>
	</div>
</div>