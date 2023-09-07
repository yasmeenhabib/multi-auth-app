# Laravel Multi-Auth Course Management App

This Laravel application is a multi-auth system that allows different user roles to interact with a simple course management system. It includes three user roles: Admin, Teacher, and Student.


# Prerequisites
Before you begin, ensure you have met the following requirements:

- PHP installed on your machine.

- Laravel 7.4

- Composer globally installed.

- MySQL or another compatible database management system.

## Installation

1. Clone the repository to your local machine:
2. Navigate to the project directory:
```bash
cd your-project
```
3. Install project dependencies using Composer:

```bash
composer install
```
4. Configure your database connection in the .env file:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

5. Run database migrations to create the required tables:

```bash
php artisan migrate
```
6. Seed the database with initial users:

```bash
php artisan db:seed
```

## Usage
- Start the Laravel development server:
```bash
php artisan serve

```
- Open your web browser and access the application at http://localhost:8000.

- Log in using one of the provided user credentials:

**Admin**:

Email: admin@devbunch.com


Password: 12345678

**Teacher**:

Email: teacher@devbunch.com 


Password: 12345678

**Student:**

Email: student@devbunch.com


Password: 12345678


# User Roles
- **Admin**: Admin users have full access to course CRUD operations (create, read, update, delete) and can manage all aspects of the application.

- **Teacher**: Teacher users can create, read, update, and delete courses, but they have limited access to other parts of the application.

- **Student**: Student users can only view courses and do not have the ability to create, update, or delete courses.

# Routes
- /courses: The dashboard where users can view the list of courses.
- /courses/{course}: View course details.
- /courses/create: Create a new course (accessible by Admin and Teacher).
- /courses/{course}/edit: Edit an existing course (accessible by Admin and Teacher).
- /courses/{course}/delete: Delete a course (accessible by Admin and Teacher).
