<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-2">
	<div class="container">
		<div class="typography">
			<div class="btn-typography">
				<!-- button -->
				<div class="btn-form">
					<button type="button" class="btn btn-primary">
						Preview
					</button>
					<button type="button" class="btn btn-warning">
						Reset
					</button>
				</div>
				<!-- form -->
				<div class="form-typography">
					<div class="text-typography">
						<button type="button" class="btn btn-light">Typography</button>
					</div>
					<div class="content-typography">
						<div class="font-primary">
							<label>Font Primary</label>
							<div class="dropdown">
							  	<button class="btn btn-secondary dropdown-toggle" type="button">
							   	---
							  	</button>
							</div>
						</div>
						<div class="font-primary">
							<label>Font Second</label>
							<div class="dropdown">
							  	<button class="btn btn-secondary dropdown-toggle" type="button">
							   	---
							  	</button>
							</div>
						</div>
						<div class="font-primary">
							<label>Font Weight Body</label>
							<div class="dropdown">
							  	<button class="btn btn-secondary dropdown-toggle" type="button">
							   	---
							  	</button>
							</div>
						</div>
						<div class="font-primary">
							<label>Font size Body</label>
							<div class="dropdown">
							  	<button class="btn btn-secondary dropdown-toggle" type="button">
							   	---
							  	</button>
							</div>
						</div>
					</div>
				</div>
				<!-- body -->
				<div class="form-body">
					<div class="text-typography">
						<button type="button" class="btn btn-light">Body</button>
					</div>
				</div>
			</div>
		</div>
		<!-- body -->
	</div>
</div>