<?php
	$config['header'] = "NodAPS Setup Wizard";
	$config['applicationPath'] = "../nodcms/config/";
	$config['database_file'] = "database.php";
	
	// INTRODUCTION
	$introduction = array();
	$introduction["product"] = "Appointment Management System - NodAPS";
	$introduction["productVersion"] = "3.5";
	$introduction["company"] = "Chic Theme";

	// SERVER REQUIREMENTS
	$requirements = array();
	$requirements["phpVersion"] = "5";
	$requirements["extensions"] = array("mysql", "pcre");

	// FILE PERMISSIONS
	// r = readable, w = writable, x = executable
	$filePermissions = array();
	$filePermissions["database.php"] = "rw";
