<?php
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'content/');

//Change this to your strapdown.js location before using!
//$strapdown_location = "/strapdown.js";
$strapdown_location = "http://strapdownjs.com/v/0.1/strapdown.js";


// Get request url and script url
$url = '';
$request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
$script_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
	
// Get our url path and trim the / of the left and the right
if($request_url != $script_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $script_url)) .'/', '', $request_url, 1), '/');

// Get the file path
if($url) $file = strtolower(CONTENT_DIR . $url);
else $file = CONTENT_DIR .'index';

// Load the file
if(is_dir($file)) $file = CONTENT_DIR . $url .'/index.txt';
else $file .= '.txt';

//Show 404 if file cannot be found
if(file_exists($file)) $content = file_get_contents($file);
else $content = file_get_contents(CONTENT_DIR .'404.txt');
?>
<!DOCTYPE html>
<html>
<title><?php echo ucwords(strtolower($url)); ?></title>
<xmp theme="united" style="display:none;">
<?php echo $content; ?>
</xmp>
<script src="<?php echo $strapdown_location; ?>"></script>
</html>