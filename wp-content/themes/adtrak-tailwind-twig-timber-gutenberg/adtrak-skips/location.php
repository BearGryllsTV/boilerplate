<?php

$context = Timber::context();
$context['post'] = new Timber\Post();
Timber::render( [ '_skips/location.twig' ], $context );

?>