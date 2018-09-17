<?php get_header(); ?>



<section id="slideshow">
	<ul id="slides">
		<li class="slide showing"><img src="images/slideshow/slide1-1920x500.jpg" id="slidepicture" alt="allocacoc slide-1" /></li>
		<li class="slide"><img src="images/slideshow/slide2-1920x500.jpg" id="slidepicture" alt="allocacoc slide-2" /></li>
		<li class="slide"><img src="images/slideshow/slide3-1920x500.jpg" id="slidepicture" alt="allocacoc slide-3" /></li>
		<li class="slide"><img src="images/slideshow/slide4-1920x500.jpg" id="slidepicture" alt="allocacoc slide-4" /></li>
		<li class="slide"><img src="images/slideshow/slide6-1920x500.jpg" id="slidepicture" alt="allocacoc slide-6" /></li>
		<li class="slide"><img src="images/slideshow/slide7-1920x500.jpg" id="slidepicture" alt="allocacoc slide-7" /></li>
		<li class="slide"><img src="images/slideshow/slide8-1920x500.jpg" id="slidepicture" alt="allocacoc slide-8" /></li>
	</ul>
</section>

<section class="popproduct">
	<div class="container">
		<h2 class="colorgrey text-center">Популярные модели</h2>
		<div class="product-catalog onlythree">
					<div class="product-item item-4">
						<a href="model.php?modelid=<?php echo $mod['modelid']; ?>"><div class="product-img"><img src="images/products/<?php echo $img[0]; ?>" alt="<?php echo $mod['title']; ?>" /></div>
							<h4 class="product-title colorblue"><?php echo $mod['title']; ?></h4>
						</a>
					</div>
		</div>
	</div>
</section>

<section class="about-us-index">
	<div class="grey-background">
		<div class="container">
			<div class="index-about">
				<div class="index-about-image">
					<img src="images/about-img.jpg" alt="Концепция компании allocacoc">
				</div>
				<div class="index-about-text">
					<h2>Концепция компании</h2>
					<p>Мы стремимся к другому стандарту и критически смотрим на хорошо известные продукты массового потребления, чтобы переосмыслить их. Наша конечная цель: создать другой стандарт так, чтобы когда потребитель представлял определенный продукт, oн бы представлял наше изобретение и забыл бы o предыдущем.</p>
				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>