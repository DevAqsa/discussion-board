# Discussion Board (Q&A Type)

## Overview
The **Discussion Board** is a simple Q&A-style web application where users can ask questions, post answers, and engage in discussions. This project is built using **PHP** and **MySQL**, with a focus on user-friendly interactions.

## Features
- ✅ User registration and authentication
- ✅ Ask questions and post answers
- ✅ View and search for questions
- ✅ Comment on questions and answers


## Tech Stack
- **Frontend:** HTML, CSS(Bootstrap)
- **Backend:** PHP (MySQLi for database connection)
- **Database:** MySQL (MariaDB in Local by Flywheel)
- **Server:** Local by Flywheel

## Installation & Setup
### 1. Clone the Repository
```sh
https://github.com/yourusername/discussion-board.git
```

### 2. Setup Local by Flywheel
- Start **Local by Flywheel**
- Create a new site named `discussion-board`
- Go to the **Database** tab and note down the credentials

### 3. Configure Database Connection
- Open `common/db.php`
- Update the following:
```php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "discuss";
$port = 3306; // Check LocalWP for the correct port
```

### 4. Import the Database
- Open **Adminer** (from Local by Flywheel)
- Create a database `discuss`
- Import `database/discuss.sql` file

### 5. Start the Application
- Open your browser and go to:
```sh
http://discussion-board.local/
```

## Folder Structure
```
app/
 ├── public/
 │   ├── index.php  # Homepage
 │   ├── questions.php  # List of questions
 │   ├── ask.php  # Ask a question
 │   ├── answer.php  # Answer a question
 │   ├── assets/  # CSS, JS, images
 │
 ├── common/
 │   ├── db.php  # Database connection
 │   ├── functions.php  # Helper functions
 │
 ├── server/
 │   ├── requests.php  # Handles form submissions
 │
 ├── database/
 │   ├── discuss.sql  # Database structure
```



## Contributing
1. Fork the project
2. Create a feature branch (`git checkout -b feature-name`)
3. Commit changes (`git commit -m 'Add new feature'`)
4. Push to branch (`git push origin feature-name`)
5. Create a Pull Request



---
### Need Help?
Feel free to open an issue or contact me at **devaqsa@gmail.com**

