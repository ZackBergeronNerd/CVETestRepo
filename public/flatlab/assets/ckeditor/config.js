/**
 * @license Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For the complete reference:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	/*
	config.toolbarGroups = [
		{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
		{ name: 'paragraph',   groups: [ 'list' ] },
		{ name: 'links', items: [ 'Link','Unlink' ] },
		{ name: 'styles', items: ['FontSize'] },
		{ name: 'colors' }
	];
	*/

	config.toolbar = 'Basic';

	config.toolbar_Basic =
	[
		['Format', 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'],
	];

	// Remove some buttons, provided by the standard plugins, which we don't
	// need to have in the Standard(s) toolbar.
	//config.removeButtons = 'Strike Through,Subscript,Superscript';
};
