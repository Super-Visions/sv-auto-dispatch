<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'sv-auto-dispatch/1.1.1',
	array(
		// Identification
		//
		'label' => 'Auto dispatch Tickets',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'combodo-dispatch-userrequest/1.1.5||combodo-dispatch-incident/1.1.4',
			'itop-service-mgmt/2.4.0||itop-service-mgmt-provider/2.4.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.sv-auto-dispatch.php',
			'main.sv-auto-dispatch.php',
		),
		'webservice' => array(

		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
