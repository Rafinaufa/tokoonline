<div class='container-fluid'>

		

	<div class='row text-center'>
	
		<?php foreach ($barang as $brg) : ?>
		
		<div class="card ml-3 mb-3" style="width: 16rem;">
		  <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" class="card-img-top" alt="...">
		  <div class="card-body">
			<h5 class="card-title mb-1"><?php echo $brg-> nama_brg ?></h5>
			<small><?php echo $brg-> keterangan?></small><br>
			<span class="badge badge-pill badge-success mb-3">Rp. <?php echo $brg->harga ?></span>
			<?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg ->id_brg, '<div calss=btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
			<a href="#" class="btn btn-sm btn-success">Detail</a>
		  </div>
		</div>
		
		<?php endforeach; ?>
	</div>
</div>