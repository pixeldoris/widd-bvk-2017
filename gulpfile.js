/* eslint-disable */
const gulp = require('gulp');
const tasks = require('strt-gulptasks')({
  source: 'src',
  output: 'public/dist',
  browsers: ['ie 11', 'last 2 versions'],
  scripts: {
    publicPath: '/dist/scripts',
  },
  serve: {
    proxy: 'http://bvk.dev/',
  }
});

gulp.task('default', gulp.series(
  tasks.clean,
  gulp.parallel(
    tasks.styles,
    tasks.scripts,
    tasks.images,
    tasks.icons,
    tasks.files,
    tasks.serve
  ),
  tasks.watch
));

gulp.task('production', gulp.series(
  gulp.parallel(
    tasks.styles,
    tasks.scripts,
    tasks.images,
    tasks.files
  )
));
