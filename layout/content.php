<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">ANNOUNCEMENT</h1>
			<hr>
			<?php 
				$query = $db_conn->prepare("SELECT * FROM pengumuman ORDER BY tanggal DESC LIMIT 0,10");
				$query->execute();

				while ($pengumuman=$query->fetch(PDO::FETCH_ASSOC)) {
					$link = str_replace(" ", "+", $pengumuman['judul']);

					echo "
					<div>
				        <div class='list-group'>
				  			<a class='list-group-item' style='cursor:pointer' href='event/$link/'><i class='fa fa-bullhorn fa-fw' aria-hidden='true'></i>
				  				$pengumuman[judul] <span>[ $pengumuman[tanggal] ]</span>
				  			</a>
				  		</div>
				  	</div>";
				}
			?>
		</div>
	</div>
</div>