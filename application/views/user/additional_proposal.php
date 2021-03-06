
<style type="text/css">
	#additional_proposal a.button{
		padding: 15px 25px;
		font-size: 16px;
	}
	#additional_proposal .proposal{
		padding: 50px 20px;
		border: 3px solid #dedede;
	}
	#additional_proposal h3{
		font-size: 25px;
		line-height: 1.2;
	}
	@media(max-width: 768px){
		.mb20-small{
			margin-bottom: 20px;
		}
		.center-on-small{
			text-align: center;
		}
	}
</style>
<section id="additional_proposal">
	<div class="row expanded large-12  pt50 pb130">
		<h2 class="text-center uppercase">Может пригодиться</h2>
		<h5 class="text-center mb80 text-18 text-light">В нашем каталоге есть все необходимое для кладки блоков</h5>
		<div class="row large-10">
			<?php foreach ($data['additional_products'] AS $product) {
				if ($product['recommended'] == 1) { ?>
					<div class="column large-6 medium-6 small-12 mb30">
						<div class="column large-12 proposal">
							<div class="column large-8 small-12">
								<h3 class="mt0"><?php echo $product['name']; ?></h3>
								<p class="mb50"><?php echo $product['description']; ?></p>
							</div>
							<div class="column large-4 small-12 mb20-small">
								<img
									src="<?php echo base_url() ?>application/resources/user_resources/img/<?php echo $product['image'] ?>">
							</div>
							<div class="column large-12 center-on-small">
								<a href="/user/product/<?php echo $product['id'] ?>"
								   class="button btn-blueLine btn-inverted btn-transparent uppercase ">Подробнее <i
										class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				<?php }
			}?>
		</div>
	</div>
</section>