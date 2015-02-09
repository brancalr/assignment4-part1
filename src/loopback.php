<?php
error_reporting(E_ALL);
ini_set('display', 1);

//reference: http://stackoverflow.com/questions/359047/php-detecting-request-type-get-post-put-or-delete 
if ( $_SERVER['REQUEST_METHOD'] == 'GET' && empty($_GET) ) {
	echo '{"Type": "Get", "parameters": null}';
}
elseif ( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET) ) {
	echo '{"Type": "Get", "parameters": '. json_encode($_GET). '}';
}
elseif ( $_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST) ) {
	echo '{"Type": "Post", "parameters": null}';
}
elseif ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	echo '{"Type": "Post", "parameters": '. json_encode($_POST). '}';
}

?>