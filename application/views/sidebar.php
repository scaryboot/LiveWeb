<div class="left-sidebar">
						<div class="brands_products">
							<h2>Kategori</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php
										foreach($kategoris as $kategori){
									?>
									<li><a href="<?php echo base_url()."index.php/web/categori/".$kategori['kode_kategori'];?>">
									<?php echo $kategori['judul_kategori']; ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						
						<div class="shipping text-center">
							<img src="<?php echo base_url()."asset/";?>images/home/shipping.jpg" alt="" />
						</div>