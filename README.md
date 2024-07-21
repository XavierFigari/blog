# Blog

## Description
This project is a very simple blog web application, written in PHP and SQL. It allows users to create, modify, and view blog posts. The application provides functionalities such as blog post management, navigation, and error handling.

This project follows the Model-View-Controller (MVC) design pattern, which separates the application into three interconnected components:
- **Model**: Manages the data logic : interacts with the SQL database.
- **View**: Handles the presentation and user interface.
- **Controller**: Manages the communication between the Model and the View.

See below for an overview of the MVC components in this project.

The project also uses the Front Controller pattern, which centralizes the request handling and routing logic. The `index.php` file acts as the single entry point for all requests, allowing for a unified request handling process.


## Features
- Create blog posts
- Modify blog posts
- View blog posts
- Simple navigation
- 404 error handling

## Requirements
- PHP 8.2 or higher
- MySQL 
- Web server (e.g., Apache, Nginx, or PHP built-in server)

## Installation
1. Clone the repository:
    ```sh
    git clone https://github.com/username/repository.git
    ```
2. Set up the database:
    - Create a new MySQL database.
    - Import the SQL schema located in `database/schema.sql`:
        ```sh
        mysql -u username -p database_name < database/schema.sql
        ```
## Usage
1. Start the web server: you can use an Apache or Nginx server, or the built-in PHP server:
    ```sh
    php -S localhost:8000 -t public
    ```
2. Open your web browser and navigate to `http://localhost:8000`.


## Software Components

### Model
The Model represents the data and the business logic of the application. In this project, the Model is implemented in the `app/persistences` directory. The Model interacts with the database and performs CRUD (Create, Read, Update, Delete) operations.
In this project, the model ils implemented in a single file:
`app/persistences/blogPostData.php`

### View
The View is responsible for rendering the user interface. It displays the data provided by the Model and sends user actions to the Controller. The views are located in the ressources/views directory.
Example: 
`ressources/views/blogPost.tpl.php`

### Controller
The Controller handles the user input and interacts with the Model to retrieve data. It then passes this data to the View for rendering. The controllers are located in the app/controllers directory.
Example: app/controllers/blogPostController.php

```php
<?php

require '../app/persistences/blogPostData.php';

// Get the id from URL (interact with the user)
$postId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

// Get the blog post and comments (interact with the Model)
$post = blogPostById($database, $postId);
$comments = commentsByBlogPost($database, $postId);

// Load the view (pass data to the View for rendering)
require '../ressources/views/blogPost.tpl.php';
```

### Summary
- Model: Located in app/persistences, handles data and business logic.
- View: Located in ressources/views, handles the presentation.
- Controller: Located in app/controllers, manages the communication between Model and View.

This separation of responsibilities makes the application easier to manage, test, and scale.