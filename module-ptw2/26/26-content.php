<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-26">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<div class="phan-hinh">
							<div class="bg-mellow">
								<a href="#" class="image-mellow">
									<img src="./images/listing-20.png" alt="hinh">
								</a>
							</div>
							<!-- icon -->
							<div class="listing-preview">
								<div class="icon-camera">
									<a href="#"><i class="fa fa-video-camera"></i> Gallery </a>
								</div>
								<div class="icon-video">
									<a href="#"><i class="fa fa-camera"></i> Video</a>
								</div>
							</div>
						</div>
						<!-- text-content -->
						<div class="phan-chu">
							<div class="mellow-heaven">
								<a href="#" class="text-mellow">Mellow Heaven</a>
								<div class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
								<div class="icon-map">
									<i class="fa fa-map-o"></i> 
									East Syracuse, NY
								</div>
								<div class="icon-phone">
									<i class="fa fa-phone"></i>
									+013 22632270
								</div>
							</div>
							<!-- footer-content -->
							<div class="bar-newyork">
								<span class="icon-hudo">
									<a href="#"><i class="fa fa-glass"></i>Bars & Pubs</a>
								</span>
								<span class="new-york"><i class="fa fa-map-marker"></i><a href="#">New York</a></span>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="col-md-6">
						<div class="phan-hinh">
							<div class="bg-mellow">
								<a href="#" class="image-mellow">
									<img src="./images/listing-20.png" alt="hinh">
								</a>
							</div>
							<!-- icon -->
							<div class="listing-preview">
								<div class="icon-camera">
									<a href="#"><i class="fa fa-video-camera"></i> Gallery </a>
								</div>
								<div class="icon-video">
									<a href="#"><i class="fa fa-camera"></i> Video</a>
								</div>
							</div>
						</div>
						<!-- text-content -->
						<div class="phan-chu">
							<div class="mellow-heaven">
								<a href="#" class="text-mellow">Moon and Roses</a>
								<div class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
								<div class="icon-map">
									<i class="fa fa-map-o"></i> 
									Verona, New York
								</div>
								<div class="icon-phone">
									<i class="fa fa-phone"></i>
									+013 22632270
								</div>
							</div>
							<!-- footer-content -->
							<div class="bar-newyork">
								<span class="icon-hudo">
									<a href="#" class="night-life"><i class="fa fa-music"></i>Nightlife</a>
								</span>
								<span class="new-york"><i class="fa fa-map-marker"></i><a href="#">New York</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>