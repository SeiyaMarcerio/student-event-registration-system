# Installation Guide

## Requirements
- Raspberry Pi Zero 2W
- PHP
- MariaDB

## Installation Steps

1. Clone the repository.

2. Create the database:

CREATE DATABASE student_event_system;

3. Create the tables:
- users
- events
- registrations

4. Configure database connection in db.php.

5. Start the PHP server:

php -S 0.0.0.0:8000

6. Open the application in a browser:

http://169.254.1.1:8000
