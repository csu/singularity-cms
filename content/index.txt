# Singularity

Singularity is a simple, flat file CMS which marks up HTML using Markdown. It's short and concise, taking nothing but less than 40 lines of PHP code and an htaccess file.

## Customization

The content directory, file type, and Bootstrap theme can be easily customized by simply editing the PHP variables provided:

	define('CONTENT_DIR', ROOT_DIR .'content/'); //change this to change which folder you want your content to be stored in
	$bootswatch_theme = "cerulean"; //choose any bootstrap theme included in strapdown.js!
	$file_format = ".txt"; //change this to choose a file type, be sure to include the period

## URLs

A file at content/index.html can be accessed at /.  
A file at content/text.txt can be accessed at /text.  
A file at content/sub/index.txt can be accessed at index.txt.  
A file at content/sub/text.txt can be accessed at /sub/text.  
If a file does not exist or cannot be found, content/404.txt will be used in its place. The content directory and other aspects of how Singularity handles URLs can be easily edited.  
The script can also handle different filetypes (just modify one line of PHP).

## Markdown

Singularity uses [strapdown.js](#credits) to mark up HTML. Strapdown.js also works with various [Bootstrap](#credits) themes. You can easily add your own HTML and CSS styles, headers, and footers. It's as easy as editing a flat HTML file.

## Credits
Copyright (c) 2012 Christopher J. Su  
Inspired by Pico and Stacey.
Uses [strapdown.js](http://strapdownjs.com/), which in turn, uses [marked](https://github.com/chjj/marked/) and [Bootstrap](http://twitter.github.com/bootstrap/).