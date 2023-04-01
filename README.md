## This repo contains a simple login/signup form with a backend in PHP and frontend in vanilla HTML and CSS.
-----------------------

### The backend is a simple PHP script that uses a MySQL database to store the user data.

### The method to initialize the repo is as follows:
- Clone the repo
- Create a database named `assign8` in MySQL
- Create a table `users` in the database with the following columns:
  - `id` (int, auto-increment, primary key)
  - `email` (varchar(255), unique)
  - `first_name` (varchar(255))
  - `last_name` (varchar(255))
  - `password` (varchar(255))
  - `isloggedIn` boolean (default 0)


- Change the database credentials in `config.php` to match your MySQL database

- Once you have php and apache2 installed on your computer then you can open the link http://localhost/assignment8/login.html to open the login page from there you can login or navigate to the other pages.

### To know the detailed workflow of this project [visit here](https://scribehow.com/shared/PHP_Assignment_1_Workflow__Os3BicybTAa2sjhJZapL3g)