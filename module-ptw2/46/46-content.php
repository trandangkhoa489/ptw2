<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-46">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<h2 class="title">Careers</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="bd-care">
							<div class="content-care">
								<div class="logo-inner">
									<img src="./images/job-1.png" alt="logo1">
								</div>
								<div class="content-inner">
									<div class="type-time">FULL TIME</div>
									<div class="title"><a href="#">Digital Designer</a></div>
									<div class="list-inf">
										<ul>
											<li>
												<i class="fa fa-suitcase"></i>
												Gaviasthemes
											</li>
											<li>
												<i class="fa fa-map-marker"></i>
												New South Wales, Australia
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="bd-care">
							<div class="content-care">
								<div class="logo-inner">
									<img src="./images/job-1.png" alt="logo1">
								</div>
								<div class="content-inner">
									<div class="type-time">FULL TIME</div>
									<div class="title"><a href="#">Digital Designer</a></div>
									<div class="list-inf">
										<ul>
											<li>
												<i class="fa fa-suitcase"></i>
												Gaviasthemes
											</li>
											<li>
												<i class="fa fa-map-marker"></i>
												New South Wales, Australia
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="bd-care">
							<div class="content-care">
								<div class="logo-inner">
									<img src="./images/job-1.png" alt="logo1">
								</div>
								<div class="content-inner">
									<div class="type-time">FULL TIME</div>
									<div class="title"><a href="#">Digital Designer</a></div>
									<div class="list-inf">
										<ul>
											<li>
												<i class="fa fa-suitcase"></i>
												Gaviasthemes
											</li>
											<li>
												<i class="fa fa-map-marker"></i>
												New South Wales, Australia
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="bd-care">
							<div class="content-care">
								<div class="logo-inner">
									<img src="./images/job-1.png" alt="logo1">
								</div>
								<div class="content-inner">
									<div class="type-time">FULL TIME</div>
									<div class="title"><a href="#">Digital Designer</a></div>
									<div class="list-inf">
										<ul>
											<li>
												<i class="fa fa-suitcase"></i>
												Gaviasthemes
											</li>
											<li>
												<i class="fa fa-map-marker"></i>
												New South Wales, Australia
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="bd-care">
							<div class="content-care">
								<div class="logo-inner">
									<img src="./images/job-1.png" alt="logo1">
								</div>
								<div class="content-inner">
									<div class="type-time">FULL TIME</div>
									<div class="title"><a href="#">Digital Designer</a></div>
									<div class="list-inf">
										<ul>
											<li>
												<i class="fa fa-suitcase"></i>
												Gaviasthemes
											</li>
											<li>
												<i class="fa fa-map-marker"></i>
												New South Wales, Australia
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>