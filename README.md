README
======

What is it?
-----------------

Test project contain Symfony2(2.8). 

Installation
------------

**Vagrant Way (Long time):

1. Clone this repo in your computer
2. Enter to dir `test-symfony-vagrant`
3. Execute command `vagrant up`
4. After install, exec command `vagrant ssh`
5. Change dirrectory `cd /var/www/stest`
6. Exec command `composer update`
7. Write to your host file: `192.168.56.101	stest.local`
 

**Symfony way:

1. Clone this repo in your computer
2. Use power this [Guide][1]

p.s. SQL Dump its here -> /sql/stest.sql


Documentation
-------------

Project contains 3 routes:

- /  {default route}
- [/listview][2] {route for show Goods list in order 2,3,1}
- [/tableview][3] {route for show table of goods with column `Photos`}


[1]: https://symfony.com/doc/2.8/setup/homestead.html
[2]: http://stest.local/listview
[3]: http://stest.local/tableview
