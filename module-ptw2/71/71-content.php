<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-71">
	<div class="container">
		<div class="row">
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="form-message">
					<div class="title">
						<h2>Send Us A Message Now.</h2>
						<span>Lorem ipsum dolor amet eiusmod tempor incididunt.</span>
					</div>
					<div class="form-content">
						<div class="your-inp">
							<label>Your Name</label>
							<input type="text" size="60" maxlength="255" >
						</div>
						<div class="your-inp">
							<label>Your Name</label>
							<input type="text" size="60" maxlength="255" >
						</div>
						<div class="your-inp">
							<label>Your Name</label>
							<input type="text" size="60" maxlength="255" >
						</div>
						<div class="message">
							<label>Message</label>
							<textarea rows="6" cols="60" placeholder="Message " required="required" ></textarea>
						</div>
						<div class="btn-send">
							<a href="#" class="btnS">Send message</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>