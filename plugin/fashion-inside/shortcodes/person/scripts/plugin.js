tinymce.PluginManager.add('wpperson', function( editor ) {

	function replacePersonShortcodes ( content ) {
		return content.replace( /\[person([^\]]*)\]/g, function( match ) {
			return html( 'wp-gallery', match );
		});
	}

	function editPerson( node ) {

	}

	// Register the command so that it can be invoked by using tinyMCE.activeEditor.execCommand('...');
	editor.addCommand( 'WP_Person', function() {
		editPerson( editor.selection.getNode() );
	});


	editor.on( 'BeforeSetContent', function( event ) {
		// 'wpview' handles the gallery shortcode when present
		if ( ! editor.plugins.wpperson || typeof wp === 'undefined' || ! wp.mce ) {
			event.content = replacePersonShortcodes( event.content );
		}
	});

});