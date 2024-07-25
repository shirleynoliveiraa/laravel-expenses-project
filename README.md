# Expense Manager Laravel
## Description
This project is an expense management system developed with Laravel. It includes features for user authentication and CRUD (create, read, update, delete) operations for expenses.

## Requirements
Before you begin, make sure you have the following requirements installed:

- PHP (>= 8.0)
- Composer (for PHP package management)
- MySQL (for the project database)
- Node.js (for JavaScript package management and Vite execution)
- SQLite (for testing)

## Environment Setup
1. Clone the Repository
```
https://github.com/shirleynoliveiraa/laravel-expenses-project.git
cd expenses-manager-laravel
```

2. Install Dependencies

```
composer install
npm install
```

3. Configure the Environment
Copy the .env.example file to create a .env file:
```
cp .env.example .env
```
Edit the .env file to configure the environment variables. The default setup uses MySQL for the project database and SQLite only for testing:
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:ty1r2zhA6PHmmwYap381uXumRq0+ByYOuPrtnmGwC9Y=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
4. Configure the Database
For the project database (MySQL), ensure that the MySQL server is running and that the configuration in the .env file is correct.

For the testing database (SQLite), you can create an empty SQLite file for testing:
```
touch database/testing.sqlite
```
5. Run Migrations
To set up the database and apply the migrations:
```
php artisan migrate
```
To run the test migrations:
```
php artisan migrate --env=testing
```
6. Start the Server
You can start the development server using the command:
```
php artisan serve
```
This will start the local server at http://localhost:8000.

7. Run Tests
To run the tests, use the command:
```
php artisan test
```

## Using the API
To facilitate testing the API endpoints, I have created a folder named request-http that contains .http files for use with the Visual Studio Code REST Client extension. These files are configured to quickly and directly test API functionality. Follow the instructions below to test the endpoints:

1. Install the REST Client extension in Visual Studio Code if it's not already installed.
2. Open Visual Studio Code and load the project.
3. Navigate to the request-http folder in your project.
4. Open one of the .http files you want to test.
5. Replace the authentication token with your actual token obtained from the login endpoint response.
6. Execute the request by clicking the "Send Request" button above the request in the editor.

![image](https://github.com/user-attachments/assets/51bec9bd-895e-44e3-adb3-e3e44ad47603)

By following these steps, you can test all API endpoints using the REST Client extension in VS Code.

