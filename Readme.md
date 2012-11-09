# Notify

Many Applications and Modules need to deliver messages to the user, and there is no uniformity on how that is done.
It's the developer's job to tweek all those notifications and views of different modules to make, if possible, a unified look.

This is where Notify comes in.

Notify is a simple Kohana 3 module designed to capture messages from different methods and modules to be displayed later with a unified look and feel.

# Composer

The module can be installed using [Composer](http://getcomposer.org/). An example `composer.json` file might look like this.

```javascript
{
	"require"     :{
		"anroots/notify": "*"
	},
	"repositories":[
		{
			"type":"vcs",
			"url" :"http://github.com/anroots/Notify"
		}
	]
}
```

# Requirements

* Kohana 3.3 (for PSR-0 compliance, rename class files to lowercase to use with Kohana 3.2 or enable the legacy autoloader in
`bootstrap.php`)
* PHP 5.4

# Authors

The module was originally developed by Ricardo de Luna (https://github.com/kaltar/Notify).
This is a fork of that work with some added / changed functionality.