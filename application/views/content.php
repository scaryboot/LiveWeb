	<div class="col-sm-9 padding-right">
						<div class="features_items">
							<h2 class="title text-center">Daftar Barang</h2>
							<?php foreach($contents as $content){ ?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url($content['path']); ?>"/>
												<h2><?php echo $content['harga_konten']; ?></h2>
												<p><?php echo $content['judul_konten']; ?></p>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2><?php echo $content['harga_konten']; ?></h2>
													<p><?php echo $content['judul_konten']; ?></p>
													<p><?php echo $content['isi']; ?></p>	
												</div>
											</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					
						
						
						
						