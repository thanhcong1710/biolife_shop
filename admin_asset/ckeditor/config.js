/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';


	//config.filebrowserImageBrowseUrl = 'admin/getfinder?type=Images';
	/*config.filebrowserBrowseUrl = '/Dropbox/shoplaravel/admin_asset/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/Dropbox/shoplaravel/admin_asset/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = '/Dropbox/shoplaravel/admin_asset/ckfinder/ckfinder.html?type=Flash';*/
	
	config.filebrowserBrowseUrl = 'admin/getfinder';
	config.filebrowserImageBrowseUrl = 'admin/getfinder?type=Images';
	config.filebrowserFlashBrowseUrl = 'admin/getfinder?type=Flash';

	config.filebrowserUploadUrl = '/Dropbox/shoplaravel/admin_asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = '/Dropbox/shoplaravel/admin_asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = '/Dropbox/shoplaravel/admin_asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	
};
