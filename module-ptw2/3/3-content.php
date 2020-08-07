<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-3">
	<div class="container">
		<div class="color-skins">
			<!-- form color -->
			<div class="form-color-skin">
				<div class="text-color">
					<p>Color Skins</p>
				</div>
				<!-- bang mau -->
				<div class="color-content">
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
					<a class="item-color default" href="#"></a>
				</div>
				<!--  -->
				<div class="text-body">
					<p>Body Layout</p>
				</div>
			</div>
			<!-- btn body -->
			<div class="btn-body">
				<a href="#">Boxed</a>
				<a href="#">Wide</a>
			</div>
		</div>
	</div>
</div>