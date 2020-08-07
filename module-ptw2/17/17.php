<?php
require_once 'scssphp/scss.inc.php';

use ScssPhp\ScssPhp\Compiler;

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

$scss = new Compiler();
$scss->setImportPaths('scss/');
$style = $scss->compile('@import "style.scss";');
file_put_contents("css/style.css", $style);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Module-17</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo $url_path ?>/css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- swiper css -->
	<link rel="stylesheet" href="<?php echo $url_path ?>/css/swiper-bundle.min.css">

</head>
<body>
	<?php include '../17/17-content.php'; ?>

	<!-- swiper js -->
 	<script src="./js/swiper-bundle.js"></script>
	<script src="./js/17.js"></script>

</body>
</html>