<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-13">
	<div class="bg-md13">
		<div class="container">
			<div class="main-content">
				<p class="title">Looking for business solutions?</p>
				<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
				<a href="#" class="btn">Explore Business Solutions <i class="fa fa-arrow-right"></i></a>
				
			</div>
		</div>
	</div>
</div>