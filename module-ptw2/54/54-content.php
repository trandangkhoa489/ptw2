<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-54">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="title-hd">Why Choose Us?</h2>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="unique-element">
					<div class="icon-char">
						<span class="icon-container"><i class="fa fa-area-chart"></i></span>
					</div>
					<div class="text-title">Unique elements</div>
					<div class="text-content">Extreme attention to detail is the essence of Colin's unique design concepts.</div>
				</div>
				<div class="unique-element">
					<div class="icon-app-store">
						<span class="icon-container"><i class="fa fa-area-chart"></i></span>
					</div>
					<div class="text-title">Unique elements</div>
					<div class="text-content">Extreme attention to detail is the essence of Colin's unique design concepts.</div>
				</div>
				<div class="unique-element">
					<div class="icon-high-performance">
						<span class="icon-container"><i class="fa fa-area-chart"></i></span>
					</div>
					<div class="text-title">Unique elements</div>
					<div class="text-content">Extreme attention to detail is the essence of Colin's unique design concepts.</div>
				</div>
			</div>
			<!-- hinh dt -->
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="iphone-bg">
					<img src="./images/iphone.png" alt="hinh-dt">
				</div>
			</div>
			<!-- noi dung ben phai -->
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="premium-modules">
					<div class="icon-char">
						<span class="icon-container"><i class="fa fa-area-chart"></i></span>
					</div>
					<div class="text-title">Unique elements</div>
					<div class="text-content">Extreme attention to detail is the essence of Colin's unique design concepts.</div>
				</div>
				<div class="premium-modules">
					<div class="icon-app-store">
						<span class="icon-container"><i class="fa fa-area-chart"></i></span>
					</div>
					<div class="text-title">Unique elements</div>
					<div class="text-content">Extreme attention to detail is the essence of Colin's unique design concepts.</div>
				</div>
				<div class="premium-modules">
					<div class="icon-high-performance">
						<span class="icon-container"><i class="fa fa-area-chart"></i></span>
					</div>
					<div class="text-title">Unique elements</div>
					<div class="text-content">Extreme attention to detail is the essence of Colin's unique design concepts.</div>
				</div>
			</div>
		</div>
	</div>
</div>