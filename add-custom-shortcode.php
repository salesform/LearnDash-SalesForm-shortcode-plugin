<?php

function trid_link() {
	$user_id = get_current_user_id();
	if (!$user_id) {
		return "";
	} else {
		$meta = get_user_meta( $user_id );
		return (isset($meta["TRID"][0]) ? $meta["TRID"][0] : "");
	}
}

add_shortcode('trid', 'trid_link');

function token_link() {
	$user_id = get_current_user_id();
	if (!$user_id) {
		return "";
	} else {
		$meta = get_user_meta( $user_id );
		return (isset($meta["TOKEN"][0]) ? $meta["TOKEN"][0] : "");
	}
}

add_shortcode('token', 'token_link');