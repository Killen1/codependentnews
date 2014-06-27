module.exports = function(grunt) {
 
    grunt.registerTask('watch', [ 'watch' ]);
   
    grunt.initConfig({
        uglify: {
            options: {
                mangle: true,
                compress: true,
                preserveComments: 'some'
            },
            js: {
                files: {
                    'dist/js/codependent.min.js': ['assets/js/collapse.js', 'assets/js/carousel.js', 'assets/js/custom-js.js', 'assets/js/transition.js']
                }
            }
        },
        less: {
            style: {
                options: {
                    cleancss: true,
                },
                files: {
                    'dist/css/codependent.min.css': 'assets/less/bootstrap.less'
                }
            }
        },
        watch: {
            js: {
                files: ['js/*.js'],
                tasks: ['uglify:js'],
                options: {
                    livereload: true,
                }
            },
            css: {
                files: [
                    'less/*.less',
                ],
                tasks: ['less:style'],
                options: {
                    livereload: true,
                }
            }
        }
    });
 
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-notify');
};