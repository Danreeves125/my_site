# gulp-ex-replace [![NPM version][npm-image]][npm-url]
> A string replace plugin for gulp 3

## What does this fork change

Bind current file path to the replace function at the **last** parameter (for current parameters ref to [MDN](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/replace))

This is useful when you want to replace the **absolute** path with **relative** path

```javascript
/**
 * Ex: have two files
 * project/pages/home/index.html
 * project/js/common.js
 *
 * the index.html has an url: /js/common.js
 * want to replace the url with the relative url: ../../js/common.js
 *
 */
var replace = require('gulp-ex-replace');
var path = require('path');
gulp.task('replacement', function () {
  gulp.src(['file.txt'])
    .pipe(replace(/\/?js[^'")?]+\.js/g, function (match, _, __, filePath) {
      var fileDir = path.dirname(filePath);
      var url = ('project/' + math).replace('//', '/');
      return path.relative(fileDir, url);
    }))
    .pipe(gulp.dest('dist'));
});
```

## Usage

First, install `gulp-ex-replace` as a development dependency:

```shell
npm install --save-dev gulp-ex-replace
```

Then, add it to your `gulpfile.js`:

### Regex Replace
```javascript
var replace = require('gulp-ex-replace');

gulp.task('templates', function(){
  gulp.src(['file.txt'])
    .pipe(replace(/foo(.{3})/g, '$1foo'))
    .pipe(gulp.dest('build/file.txt'));
});
```
### String Replace
```javascript
var replace = require('gulp-ex-replace');

gulp.task('templates', function(){
  gulp.src(['file.txt'])
    .pipe(replace('bar', 'foo'))
    .pipe(gulp.dest('build/file.txt'));
});
```


## API

gulp-replace can be called with a string or regex.

### replace(string, replacement[, options])

#### string
Type: `String`

The string to search for.

#### replacement
Type: `String` or `Function`

The replacement string or function. If `replacement` is a function, it will be called once for each match and will be passed the string that is to be replaced.

### replace(regex, replacement[, options])

#### regex
Type: `RegExp`

The regex pattern to search for. See the [MDN documentation for RegExp] for details.

#### replacement
Type: `String` or `Function`

The replacement string or function. See the [MDN documentation for String.replace] for details.

### gulp-replace options

An optional third argument, `options`, can be passed.

#### options
Type: `Object`

##### options.skipBinary
Type: `boolean`  
Default: `false`

Skip binary files


[MDN documentation for RegExp]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/RegExp
[MDN documentation for String.replace]: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/replace#Specifying_a_string_as_a_parameter

[travis-url]: http://travis-ci.org/lazd/gulp-replace
[travis-image]: https://secure.travis-ci.org/lazd/gulp-replace.svg?branch=master
[npm-url]: https://npmjs.org/package/gulp-ex-replace
[npm-image]: https://badge.fury.io/js/gulp-ex-replace.svg
