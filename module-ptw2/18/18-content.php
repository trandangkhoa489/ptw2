<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-18">
	<div class="bg-md18">
		<div class="container">
			<div class="main-content">
				<h2>Experience New York like you never did before</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
			</div>
			<div class="btn-content">
				<a href="#" class="btn">Read More <i class="fa fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
</div>