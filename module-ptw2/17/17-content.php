<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-17">
	<div class="bg-md">
		<div class="bg-people">
			<div class="content">
				<div class="title">
					<span>Find And Explore World Top Places By Famous Cities.</span>
				</div>
				<div class="desc">
					<span>Cities you must explore this summer</span>
				</div>
			</div>
		</div>
		<!-- Swiper -->
		<div class="swiper-img">
			<div class="container">
				<div class="swiper-container">
				    <div class="swiper-wrapper">
				      	<div class="swiper-slide">
				      		<div class="element-swiper">
				      			<img src="./images/france.jpg" alt="hinh-thap">
				      		</div>
				      	</div>
				      	<div class="swiper-slide">
				      		<div class="element-swiper">
				      			<img src="./images/france.jpg" alt="hinh-thap">
				      		</div>
				      	</div>
				      	<div class="swiper-slide">
				      		<div class="element-swiper">
				      			<img src="./images/france.jpg" alt="hinh-thap">
				      		</div>
				      	</div>
				    </div>

				    <!-- Add Arrows -->
				    <div class="swiper-button-next"></div>
				    <div class="swiper-button-prev"></div>
			  	</div>
			</div>
		</div>
	</div>
</div>