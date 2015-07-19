whateverVC
==========

Bare bones PHP 5 \*VC project template for pepole not wanting to use any framework.

Description
-----------

whateverVC is a small project template that allows you to do whatever you want in bare PHP. It was designed to be as minimal as possible and non-intrusive. Built around KISS principle it doesn't do anything fancy.

It was designed with really tiny projects in mind (like small tools) so if you want to make something big in it you should rather look for something along the lines of [CodeIgniter](http://www.codeigniter.com/) or [Laravel](http://laravel.com/)

Features
--------
* Folder stucture with class autoloader
* Basic routing function
* Single PDO object instance (no ORM and it will never be implemented)
* Config file

That's all. No really.. There is nothing more in this.

Requirements
------------
PHP 5 and MySQL (if you wish to use a database) thats all.

Usage
-----

Normally there would be a doc there but since it's so darn small here you have a small tutorial on what this thing does and what you can do with it.

### Router

whateverVC route looks like this:

`awesomeproject.com/classname/method/param1/param2/param3/`

the router searches for class called `classnameController` in `classnameController.php`

then it looks for method called `method` in class `classnameController` and passes parameters as an array to the function as `$data`

### Controller

Let's take a look at an example implementation of a whateverVC controller

```PHP
class HelloController extends Controller{
  public function hello(){
    $this->view('hello');
  }
}
```
as you can see to create a controller all you have to do is to extend a Controller class which give you an access to `view` class that loads a php file form views folder.
### View

Views are simple PHP files, PHP is good enough for quick and dirty templating. To make a view call a function from the body of a controller:

`$this->view('view_name')`

This function will look for file called `view_name.php` in `views` directory and include it.

### Model (Whatever)

Often when you are prototyping or making a small tool you don't nesecarirly want to use a whole ORM soultion but work using plain SQL, that's why this part of the template is called Whatever, because you can use an ORM but you don't have to you are free to do whatever you want.

All you get from a Model class by default is a PDO handler wich you can access using a static method:

`Model::db();`

### Libraries

Of course you can use PHP libraries like [tcpdf](http://www.tcpdf.org/) in your projects all you have to do is to put it in the `lib` directory.

Just remember to put the file with the class definition that has the same name as class in the root of the `lib` directory.

---

That's all you just mastered whateverVC.

Go on, make some stuff! :)
