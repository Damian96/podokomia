const minifyWatch = require('node-minify-watch').watch;
const path = require('path');

minifyWatch({
  watch: './js/beautified/',
  type: 'gcc',
  language: 'ECMASCRIPT5',
  fileOut: (f) => './js/' + path.basename(f, '.js') + '.min.js',
});

minifyWatch({
  watch: './css/beautified/',
  type: 'yui',
  fileOut: (f) => './css/' + path.basename(f, '.css') + '.min.css',
});