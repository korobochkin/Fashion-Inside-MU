module.exports = function (grunt) {
	var initConfig = {};

	initConfig ['pkg'] = grunt.file.readJSON ('package.json');

	initConfig ['copy'] = {
		filenames_in_wordpress: {
			files: [
				{
					expand: true,
					cwd: 'bower_components/filenames-in-wordpress/plugin/',
					src: [
						'**',
					],
					dest: 'plugin/fashion-inside/filenames/inc/',
				},
			],
		},
	};
	
	grunt.initConfig (initConfig);

	grunt.loadNpmTasks ('grunt-contrib-copy');

	// Tasks for Filenames in WordPress
	grunt.registerTask ('filenames_in_wordpress',
		[
			'copy:filenames_in_wordpress'
		]
	);

	// All tasks before deploy
	grunt.registerTask ('do_all',
		[
			'filenames_in_wordpress',
		]
	);

	grunt.registerTask ('default', ['do_all']);
};
