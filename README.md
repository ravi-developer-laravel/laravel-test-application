# laravel-sample-application
This is test application for demo create API using Laravel. In this applicaiton user subscribe to website and receive notification through email when owner add new post.

Install the dependencies

```shell

composer install


``` 

Run the database migrations

```shell

php artisan migrate


``` 

database with sample data

```shell

php artisan db:seed


``` 

Start the development server

```shell

php artisan serve


``` 

Send emails to user subscribers, run the below command

```shell

php artisan addnewpost:sendemail

```

To start processing the queues, run the following command 
 
```shell

php artisan queue:work

```
 
