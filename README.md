# Pollsimple
Pollsimple is simple web application for voting. Application offer some basic functionality like others votings and ratings system on the web. Special features of this project is AJAX integration with Jquery. For more detailed informations about features in this project you can use table of contents. ![GitHub](https://img.shields.io/github/license/testiranjephp/dqdq?color=%2364ceaa)



1. [About project](#about-project)
2. [How to install](#how-to-install)
3. [How to contribute](#how-to-contribute)
4. [Frontend perspective](#frontend-perspective)
5. [Backend perspective](#backend-perspective)
6. [Security perspective](#security-perspective)
7. [At the end](#at-the-end)

Application features:
  1. Admin panel with login and protection.
  2. Default admin user with possibilites to create more admin for voting system.
  3. Poll includes way to new, edit and delete polls.
  4. After one vote client cant vote again on same poll.
  5. Last poll is active on index page and only votable.

# About project

Voting systems today is requireed part of web. Intention of this piece of sotware is to allow your visitors to vote on poll. That poll can be in connection with your web page. Great example of using this system are e-commerce application where your client vote for products and help you to make your business more successfully. 

Pollsimple allow you all functionality that fits your needs. Beauty of Pollsimple is simple and easy way for use, and of course simple installation processs in just few steps.

# How to install

### How to install

1. Download this zip file .
2. Move files to server.
3. Open your phpmyadmin and run pollsimple.sql to create all things that you need to work in database.
4. Open database.php and change your informations.
4. Open index.php page ande make a vote.
5. As admin request admin/index.php and login with username admin and password admin. 

### How to integrate in existing project

You can integrate this project in your existing web project. For that, PHP knowledge is requireed. Especially about your authorisation and hashing algorithm. For more informations about integrating, please view source code.

# How to contribute

### Using this software
Using  this software is first and greatest way to support project and share to others men and let them to know about existence of this project. 

### Report a bug
If you find some bugs, during the usage of this software is also way to help devlope this project in the future. Software made from few thousands lines of code is normal to have some small bugs.

### Propose a changes
Propose a changes for next versions of this software is nice thing. You can propose just ideas for devloping, but also you can make changes by yourself and propose me to accept that.

# Frontend perspective

Frontend side of this project consist from few things.

 1. Basic index page from voting with simple html/css and link to my Github account ( Feel free to edit this as you wish )
 2. Css,JS and images are folders in Assets folder and they keep this files for better organisation
 3. Result page is loaded through Jquery with AJAX
 
 ![alt text](https://user-images.githubusercontent.com/25035726/71424117-0f792d80-268f-11ea-82e9-768a8bfe70a2.png)
 

# Backend perspective

From backend side of this project.

  1. Basic authorization for administrators panel
  2. There is a way to add more adminstrators
  3. Administrators have options to create/edit/delete polls
  4. Only one poll is active and possible to vote
  5. Results from database is showed in percentage form
  6. Tables have relations with primary and foreign keys

# Security perspective

Basic security principles are integrated in this project.
  
  1. Validation input to ensure proper data format
  2. Prepared statments to avoid sql injection
  3. Hashing password in Blowfish algorithm to store password in database in unreadble way
  4. Data from database are escaped to prevent XSS
  
# At the end
In the future this app will have more functionality. You can fork this project and add more functionality that fits your needs and if want you can propose changes.
