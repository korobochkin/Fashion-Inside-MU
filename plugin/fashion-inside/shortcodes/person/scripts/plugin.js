tinymce.PluginManager.add('wpperson', function( editor ) {

	function editPerson( node ) {

	}

	// Register the command so that it can be invoked by using tinyMCE.activeEditor.execCommand('...');
	editor.addCommand( 'WP_Person', function() {
		editPerson( editor.selection.getNode() );
	});

});