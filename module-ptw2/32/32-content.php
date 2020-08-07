<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-32">
	<div class="container">
		<div class="row">
			<div class="col-md-8"></div>
			<div class="col-md-4">
				<div class="form-info">
					<div class="business-inf">
						<i class="fa fa-map-signs"></i>Business Info
					</div>
					<!-- main content -->
					<div class="main-content">
						<ul class="list-content">
							<li>
								<span>
									<i class="fa fa-map-o"></i>3rd Ave, New York
								</span>
							</li>
							<li>
								<span>
									<i class="fa fa-map-o"></i><a href="#" class="link-map">support@lozin.com</a>
								</span>
							</li>
							<li>
								<span>
									<i class="fa fa-map-o"></i>852-22632270
								</span>
							</li>
							<li>
								<span>
									<i class="fa fa-map-o"></i>http://gaviasthemes.com
								</span>
							</li>
						</ul>
						<!--  -->
						<ul class="list-icon">
							<li>
								<a href="#" class="icon"><i class="fa fa-facebook-official"></i></a>
							</li>
							<li>
								<a href="#" class="icon"><i class="fa fa-google"></i></a>
							</li>
							<li>
								<a href="#" class="icon"><i class="fa fa-linkedin-square"></i></a>
							</li>
							<li>
								<a href="#" class="icon"><i class="fa fa-twitter"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>