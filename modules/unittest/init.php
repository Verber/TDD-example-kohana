<?php

// If we're on the CLI then PHPUnit will already be loaded
if (class_exists('PHPUnit_TextUI_Command', FALSE))
{
	Kohana_Tests::configure_environment();

	// Stop kohana from processing the request
	define('SUPPRESS_REQUEST', TRUE);
}

Route::set('unittest', 'unittest(/<action>)')
	->defaults(array(
		'controller' => 'unittest',
		'action'     => 'index',
	));
