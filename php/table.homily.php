<?php

/*
 * Editor server script for DB table homily
 * Automatically generated by http://editor.datatables.net/generator
 */

// DataTables PHP library
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'homily', 'id' )
	->fields(
		Field::inst( 'date' )
			->validator( 'Validate::dateFormat', array( 'empty'=>false, 'format'=>'m/d/y' ) )
			->getFormatter( 'Format::date_sql_to_format', 'm/d/y' )
			->setFormatter( 'Format::date_format_to_sql', 'm/d/y' ),
		Field::inst( 'title' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'gospel' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'calendarYear' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'homily' )
			->validator( 'Validate::notEmpty' )
	)
	->process( $_POST )
	->json();

