# Singularity

Singularity is a simple, flat file CMS which marks up HTML using Markdown. It's short and concise, taking nothing but less than 40 lines of PHP code and an htaccess file.

## URLs

A file at content/index.html can be accessed at /.  
A file at content/text.txt can be accessed at /text.  
A file at content/sub/index.txt can be accessed at index.txt.  
A file at content/sub/text.txt can be accessed at /sub/text.  
If a file does not exist or cannot be found, content/404.txt will be used in its place. The content directory and other aspects of how Singularity handles URLs can be easily edited.

## Markdown

Singularity uses [strapdown.js](#credits) to mark up HTML. Strapdown.js also works with various Bootstrap themes.

## Credits
Copyright (c) 2012 Christopher J. Su  
Inspired by Pico and Stacey.
Uses [strapdown.js](http://strapdownjs.com/), which in turn, uses [marked](https://github.com/chjj/marked/) and [Bootstrap](http://twitter.github.com/bootstrap/).