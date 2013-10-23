Finish me
=========

A web application to help find a project to finish.

Installation
------------

### Requirements

* [Symfony 2.3 requirements](http://symfony.com/doc/current/reference/requirements.html)
* [Composer](http://getcomposer.org/) for package management
* [Git](http://git-scm.com/) for cloning the repository

### Get the code

``` bash
$ git clone https://github.com/kikoval/finishme.git
```

or

[download the zip file](https://github.com/kikoval/finishme/archive/master.zip).


``` bash
$ cd finishme
$ php composer.phar install
$ php app/console doctrine:schema:create
$ php app/console assetic:dump
```

To run a dev web server execute:
``` bash
$ php app/console server:run
```


Licence
-------

See `LICENCE`.
