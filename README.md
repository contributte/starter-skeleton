<h1 align=center>Snow Project</h1>

<p align=center>
    Snow Project is a web starter kit project for Nette Framework with many useful libraries.
</p>

<p align=center>
🕹 <a href="https://f3l1x.io">f3l1x.io</a> | 💻 <a href="https://github.com/f3l1x">f3l1x</a> | 🐦 <a href="https://twitter.com/xf3l1x">@xf3l1x</a>
</p>

<p align=center>
    <code>composer create-project planette/snow-project@dev acme</code>
</p>

<p align=center>
    <img src="https://raw.githubusercontent.com/planette/snow-project/master/.docs/screenshot1.png">
</p>

-----

## Installation

You will need `PHP 7.2+` and [Composer](https://getcomposer.org/). 

Create project using composer. 

```
composer create-project planette/snow-project@dev acme
```

Now you have application installed. It's time to run it.

## Startup

The easiest way is to use php built-in web server.

```
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

We use [RobotLoader](https://doc.nette.org/cs/3.0/robotloader) for autoloading .

## Frontend

There is also some assets included via `cdn`.

- [jQuery 3.x](https://jquery.com/)
- [Bootsrap 4.x](https://getbootstrap.com/)
- [Select2 4.x](https://select2.org/)

## Sponsoring

<a href="https://github.com/tlapnet"><img  width="200" src="https://cdn.rawgit.com/f3l1x/xsource/2463efb7/assets/tlapdev.png"></a>

The development is sponsored by [Tlapnet](https://www.tlapnet.cz)
