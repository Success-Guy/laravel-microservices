## Laravel microservice

To run this application:

Make a copy of .env.example to .env and supply credential for rabbitmq section at the bottom for each service.
A rabbitMQ cloud service by https://www.cloudamqp.com was used in the project.
You can use it or install your own RabbitMQ server.

### User service
To run user service:
````
cd userService
docker-compose up -d
````
The service will be accessible at port 8001

### Notification service

Run:
````
cd notificationService
docker-compose up -d
````

Test can be run on each service by running:
```
php artisan test
```
