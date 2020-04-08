# Online Testing

A Backend project using ``Slim`` Framework, ``Eloquent`` ORM tool and ``Composer`` Dependency mananger.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development purposes. 

### Prerequisites

1. Install XAMPP 

2. Install Composer 

3. Install Postman (not mandatory but will help in checking the API)

### Steps to Run

1. Make changes in the XAMPP configuration to point DocumentRoot to the public subfolder in the folder directory 

``DocumentRoot "C:/xampp/htdocs/onlinetest/public"``
    
2. Go to the main folder and open terminal/commmand prompt 

``composer install`` 

  You will see a vendor folder being created with the dependencies.
  
``composer dump-autoload``
    
  The project would have loaded all dependencies and generated the autoloader maps. you can close the terminal/ command prompt post this step.
    
3. Open Shell from the xampp workspace

``CREATE DATABASE <DATABASE_NAME>;``
  
  In current version the <DATABASE_NAME> is user. The database creation step is a one time process in a fresh system.
  
``USE <DATABASE_NAME>;``
    
    CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `age` int(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    

  This is just a sample script of creating the table (according to the current implementation). We can close the shell.

4. Start the Apache server and the Mysql server from the xampp dashboard.

5. Open Postman and create a new request. 

  The Request Url :-
  
     http://localhost:1337/users
     
  The HTTP Request Method (select this from the dropdown menu) :-
  
     POST 

  Go to the Body option and select the Raw radio button. Change the dropdown to JSON.
  
     [{
	   "username":"bora",
	   "age":27
     }]
     
You should get a response with 201 Created status code and Response body :-

     {"user_id":1}
## Built With

* [Slim](http://www.slimframework.com/docs/v4/) - The PHP micro framework
* [Eloquent](http://www.slimframework.com/docs/v3/cookbook/database-eloquent.html) - ORM (this is the documentation for version 3 of slim but I have used it for version 4)
* [Composer](https://getcomposer.org/doc/) - Dependency Manager

## Authors

* **Sudeshna Bora** 
