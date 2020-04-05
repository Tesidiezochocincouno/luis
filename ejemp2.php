<?php

//Un ejemplo de plugin con un problema de CSRF
 

add_action( 'init', 'maybe_delete_user' );
function maybe_delete_user() {
	if ( isset( $_POST['action'] ) && $_POST['action'] === 'delete-user' ) {

		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		$user_id = absint( $_POST['user_id'] );

		wp_delete_user( $user_id );
	}
}