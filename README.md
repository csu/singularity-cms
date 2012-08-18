# Singularity

Singularity is a simple, flat file CMS which interprets marks up HTML using Markdown.

## URLs

A file at content/index.html can be accessed at /. A file at content/text.txt can be accessed at /text. A file at content/sub/index.txt can be accessed at index.txt. A file at content/sub/text.txt can be accessed at /sub/text. If a file does not exist or cannot be found, content/404.txt will be used in its place. The content directory and other aspects of how Singularity handles URLs can be easily edited.