[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

hepterscores
===

###About
Hepterscores is bases on the `_s` theme from Automattic, found [here](http://underscores.me).

We've added a few bits of functionality:
* Gulp is ready to go with some basic Sass and JS compiling
* WPAlchemy metaboxes are set up, you just need to move the `wpalchemy` folder from the theme directory to your `wp-content` directory
* Sass files are arranged in a more logical manner for a non-blog than that which ships from `_s`



###Gulp
To get Gulp going, navigate to the theme directory in the command line and type:
	npm install




Getting Started
---------------

If you want to keep it simple, head over to http://underscores.me and generate your `hepterscores` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

Download or clone `hepterscores` from GitHub. The first thing you want to do is copy the `hepterscores` directory and change the name to something else (like, say, `megatherium`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'hepterscores'` (inside single quotations) to capture the text domain.
2. Search for `hepterscores_` to capture all the function names.
3. Search for `Text Domain: hepterscores` in style.css.
4. Search for <code>&nbsp;hepterscores</code> (with a space before it) to capture DocBlocks.
5. Search for `hepterscores-` to capture prefixed handles.

OR

* Search for: `'hepterscores'` and replace with: `'megatherium'`
* Search for: `hepterscores_` and replace with: `megatherium_`
* Search for: `Text Domain: hepterscores` and replace with: `Text Domain: megatherium` in style.css.
* Search for: <code>&nbsp;hepterscores</code> and replace with: <code>&nbsp;Megatherium</code>
* Search for: `hepterscores-` and replace with: `megatherium-`

Then, update the stylesheet header in `style.css` and the links in `footer.php` with your own information. Next, update or delete this readme.
