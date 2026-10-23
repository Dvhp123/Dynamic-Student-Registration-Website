# Student Registration PHP Project

This project is a simple PHP application for registering student details. It includes a form page and a PHP script that inserts the submitted data into a MySQL database.

## Project Files

- `index.php` - Student registration form
- `page.php` - PHP script that connects to MySQL and inserts student data

## Features

- Collects student information such as:
  - Student ID
  - First name
  - Last name
  - Address
  - Contact number
  - Branch
- Saves the data into the `tbStudent` table in the `dbStudent` database

## Prerequisites

Before running this project, make sure you have:

- PHP installed
- Apache or another local web server
- MySQL database server
- A stack such as XAMPP or WAMP

## Setup Instructions

1. Install and start XAMPP/WAMP.
2. Place this project folder inside the web server root, usually:
   - `C:/xampp/htdocs/`
   - or `C:/wamp64/www/`
3. Start Apache and MySQL from your control panel.
4. Create the database and table in MySQL.

Example database setup:

```sql
CREATE DATABASE dbStudent;

USE dbStudent;

CREATE TABLE tbStudent (
    StudentId VARCHAR(50),
    StudentFirstName VARCHAR(100),
    StudentLastName VARCHAR(100),
    StudentAddress VARCHAR(255),
    StudentContact VARCHAR(20),
    StudentBranch VARCHAR(100)
);
```

## Run the Project

Open your browser and visit:

```text
http://localhost/php/
```

If your folder name is different, use that folder name in the URL instead.

## Notes

- The code currently uses the MySQL connection details:
  - username: `root`
  - password: empty
- If your local database uses different credentials, update them in `page.php`.
- The form posts data to the backend logic in `page.php`, so the database connection and insert query must remain valid for the form to work correctly.

## Common Troubleshooting

- If the page does not load, confirm Apache is running.
- If the form does not submit, check the MySQL database connection and table names.
- If the browser shows a database error, verify that the database and table exist and match the names used in the code.

## License

This project is intended for educational and learning purposes.
