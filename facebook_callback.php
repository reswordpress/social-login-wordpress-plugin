<?php
if ( ! isset( $_SESSION ) ) {
	session_start();
}
if ( isset( $_GET['code'] ) ) {
	$_SESSION['facebook_code'] = $_GET['code'];
}
header( 'Location: /' . 'wp-login.php' );