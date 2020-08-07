<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-43">
	<div class="container">
		<div class="row">
			<div class="col-md-9"></div>
			<div class="col-md-3">
				<div class="form-contact">
					<div class="main-content">
						<div class="title">How can we help you ?</div>
						<div class="desc">Contact our Drupal gurus via our support channel</div>
						<div class="action">
							<a href="#" class="btn-contact">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>