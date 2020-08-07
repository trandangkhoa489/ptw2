<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module_7">
    <div class="container">
        <div class="row">
            <div class="seeHow col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
	            <h2>See How It Works</h2>
	            <p>Discover & connect with great local businesses</p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                <div class="icon-Search">
                	<span class="fSearch">
                		<i class="fa fa-search"></i>
                	</span>
                	<div class="text-seeHow">
                        <p>Find Interesting Place</p>
                        <p>Donec id elit non mi porta gravida at eget metus lorem ipsum dolor.</p>
                        <a href="/#">Read more <i class="fa fa-long-arrow-right"></i></a>
                    </div> 
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                <div class="icon-Search">
                	<span class="fSearch">
                		<i class="fa fa-map"></i>
                	</span>
                	<div class="text-seeHow">
                        <p>Find Interesting Place</p>
                        <p>Donec id elit non mi porta gravida at eget metus lorem ipsum dolor.</p>
                        <a href="/#">Read more <i class="fa fa-long-arrow-right"></i></a>
                    </div> 
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                <div class="icon-Search">
                	<span class="fSearch">
                		<span>
                			<i class="fa fa-map-marker"></i>
                		</span>
                		
                	</span>
                	<div class="text-seeHow">
                        <p>Find Interesting Place</p>
                        <p>Donec id elit non mi porta gravida at eget metus lorem ipsum dolor.</p>
                        <a href="/#">Read more <i class="fa fa-long-arrow-right"></i></a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>  