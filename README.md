# Tlapnet Snow Web Project

Lightweight Nette sandbox. 

Easy to use but powerful.

## Contains 

### Backend
 
It's based on [Contributte](https://contributte.org/) packages.

- `contributte/application`
- `contributte/bootstrap`
- `contributte/di`
- `contributte/forms`
- `contributte/http`
- `contributte/mail`
- `contributte/utils`
- `contributte/latte`
- `contributte/tracy`
- `nette/robot-loader`

We use [RobotLoader](https://doc.nette.org/cs/2.4/robotloader) for autoloading .

### Frontend

There is also some assets included via `cdn`.

- [jQuery 3.3.1](https://jquery.com/)
- [Bootsrap 4.1.3](https://getbootstrap.com/)
- [Select2 4.0.5](https://select2.org/)

## Installation

You will need `PHP >= 7.1` and [Composer](https://getcomposer.org/). 

Create project using composer. 

```
composer create-project tlapnet/snow-project@dev path/to/install
```

Now you have application installed. It's time to run it.

### Web Server

The easiest way is to use php built-in web server.

```
php -S 0.0.0.0:8000 -t www
```

Then visit [http://localhost:8000](http://localhost:8000) in your browser.
