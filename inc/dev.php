<?php

add_action( 'phpmailer_init', 'dm_phpmailer_init' );
function dm_phpmailer_init( $phpmailer ) {
    $phpmailer->Host = 'mailhog';
    $phpmailer->Port = 1025;
    $phpmailer->IsSMTP();
}
