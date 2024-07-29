# Expense Manager Laravel
## Description
This project is an expense management system developed with Laravel. It includes features for user authentication and CRUD (create, read, update, delete) operations for expenses and is designed to run in a Docker environment.

## Requirements
Before you begin, make sure you have the following requirements installed:
- Docker
- Docker Compose

## Environment Setup
1. **Clone the Repository**
```
https://github.com/shirleynoliveiraa/laravel-expenses-project.git
cd laravel-expenses-project
```

2. **Copy the Example Environment File**

Copy the .env.example file to create a .env file (make sure you have permission to read and write the files from the project)
```
cp .env.example .env
```

Edit the .env file to configure the environment variables. The default settings are as follows:
```
DB_CONNECTION=mysql
DB_HOST=laravel-db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root
```
3. **Build and Start the Docker Containers**
```
docker-compose up -d --build
```
This will start the local server at http://localhost:9000.

4. **Run Tests**

To run the tests, execute the following command inside the app container:
```
docker-compose exec app php artisan test
```

## Additional Commands
- **Stopping Containers**
```
docker-compose down
```
- **Rebuilding Containers**

If you make changes to the Dockerfile or docker-compose.yml, you may need to rebuild the containers:
```
docker-compose up -d --build
```
- **Accessing the Container Shell**

To access the shell inside the app container, you can use:
```
docker-compose exec app bash
```
- **Troubleshooting**

If you encounter issues with the containers not starting correctly, you can check the logs using:
```
docker-compose logs
```

- **Ensure Docker is running and there are no port conflicts on your machine.**

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
