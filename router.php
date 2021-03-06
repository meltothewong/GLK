<?php
$root = $_SERVER['DOCUMENT_ROOT'];
chdir( $root );
 
$path = '/'.ltrim( parse_url( $_SERVER['REQUEST_URI'] )['path'],'/' );
 
if ( file_exists( $root.$path ) ) {
    if ( is_dir( $root.$path ) && substr( $path,strlen( $path ) - 1, 1 ) !== '/' ) {
        header( 'Location: '.rtrim( $path,'/' ).'/' );
        exit;
    }
    if ( strpos($path,'.php') === false ) {
            return false;
    } else {
        chdir( dirname( $root.$path ) );
        require_once $root.$path;
    }
} else {
    if ( strpos($path,'wp-content/uploads') ) {
        header("Location: http://grandlakekitchen.dreamhosters.com".$path);
        exit;
    }
    include_once 'index.php';
}
