![](https://heatbadger.now.sh/github/readme/contributte/starter-skeleton/)

<p align=center>
  <a href="https://github.com/contributte/starter-skeleton/actions"><img src="https://badgen.net/github/checks/contributte/starter-skeleton/master"></a>
  <a href="https://coveralls.io/r/contributte/starter-skeleton"><img src="https://badgen.net/coveralls/c/github/contributte/starter-skeleton"></a>
  <a href="https://packagist.org/packages/contributte/starter-skeleton"><img src="https://badgen.net/packagist/dm/contributte/starter-skeleton"></a>
  <a href="https://packagist.org/packages/contributte/starter-skeleton"><img src="https://badgen.net/packagist/v/contributte/starter-skeleton"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/contributte/starter-skeleton"><img src="https://badgen.net/packagist/php/contributte/starter-skeleton"></a>
  <a href="https://github.com/contributte/starter-skeleton"><img src="https://badgen.net/github/license/contributte/starter-skeleton"></a>
  <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
  <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

<p align=center>
	<img src="https://api.microlink.io?url=https%3A%2F%2Fexamples.contributte.org%2Fstarter-skeleton%2F&overlay.browser=light&screenshot=true&meta=false&embed=screenshot.url"></img>
</p>

-----

## Goal

Main goal is to provide easy-to-use starter-kit project for Nette developers.

## Demo

https://examples.contributte.org/starter-skeleton/

## Installation

You will need `PHP 8.0+` and [Composer](https://getcomposer.org/).

Create project using composer.

```bash
composer create-project -s dev contributte/starter-skeleton acme
```

Now you have application installed. It's time to run it.

## Startup

The easiest way is to use php built-in web server.

```bash
php -S 0.0.0.0:8000 -t www
```

Then visit [http://localhost:8000](http://localhost:8000) in your browser.

## Backend

It's based on [Contributte](https://contributte.org/) packages.

- [`contributte/application`](https://github.com/contributte/application)
- [`contributte/bootstrap`](https://github.com/contributte/bootstrap)
- [`contributte/di`](https://github.com/contributte/di)
- [`contributte/forms`](https://github.com/contributte/forms)
- [`contributte/http`](https://github.com/contributte/http)
- [`contributte/mail`](https://github.com/contributte/mail)
- [`contributte/utils`](https://github.com/contributte/utils)
- [`contributte/latte`](https://github.com/contributte/latte)
- [`contributte/tracy`](https://github.com/contributte/tracy)
- [`nette/robot-loader`](https://github.com/nette/robot-loader)

This project is using [RobotLoader](https://doc.nette.org/cs/3.0/robotloader) for autoloading .

## Frontend

There is also some assets included via `CDN`.

- [jQuery 3.x](https://jquery.com/)
- [Bootsrap 4.x](https://getbootstrap.com/)
- [Select2 4.x](https://select2.org/)

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for using this project.
