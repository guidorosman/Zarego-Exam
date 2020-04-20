# Zarego-Examen
A Laravel project with Laradock. It consists in three pages. The index which has two links to go to a video page or a form page where an user can register. After registration, the user will recive an email with information and a thank's page will be shown. If the user was already registered a warning page will be shown.

## Installation

1. Clone the git repository in your local machine. Open the terminal and write:

```
git clone https://github.com/guidorosman/Zarego-Examen.git
```

2. Enter project directory:

```
cd Zarego-Examen
```

3. Give permissons to storage and bootstrap/cache so laravel can run correctly


```
chmod 777 -R storage
```

```
chmod 777 -R bootstrap/cache
```

4. Enter laradock subdirectory

```
cd laradock
```

5. Run the nginx and mysql containers to generate the virtual environment to run laravel project

```
docker-compose up -d nginx mysql
```

6. By last, enter the Workspace container and execute php artisan migrate to create the tables we need in the database

```
docker-compose exec workspace bash
```

```
php artisan migrate
```

## Testing Emails

If you want to test emails you can use Miltrap. Go to the web site <https://mailtrap.io/> and sign in or register. Then create a new inbox, and update the .env file in the project with the username and password that Mailtrap generated to you:

In the .env file you will find something like this:

MAIL_USERNAME=yourusername

MAIL_PASSWORD=yourpasword
