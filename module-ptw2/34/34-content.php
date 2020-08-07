<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-34">
	<div class="container">
		<div class="row">
			<div class="col-md-8"></div>
			<div class="col-md-4">
				<div class="form-info">
					<div class="business-inf">
						<i class="fa fa-clock-o"></i>Business Hours
					</div>
					<!-- main content -->
					<div class="main-content">
						<ul class="list-content">
							<li>
								Tuesday: 
								<span>Closed</span>
							</li>
							<li>
								Wednesday:
								<span>Closed</span>
							</li>
							<li>
								Monday:
								<span>12:00 am - 12:10 pm</span>
							</li>
							<li>
								Thursday:
								<span>12:00 am - 12:10 pm</span>
							</li>
							<li>
								Friday:
								<span>12:00 am - 12:10 pm</span>
							</li>
							<li>
								Saturday:
								<span>12:00 am - 12:10 pm</span>
							</li>
							<li>
								Sunday:
								<span>12:00 am - 12:10 pm</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>