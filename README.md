## commands to run the App

### Clone the App
- git clone https://github.com/haidyeed/M-order.git

- cd M-order

(if needed run ..)

- cp .env.example .env
- composer install
- php artisan key:generate

### Database setup & commands 
- CREATE DATABASE m-order

- php artisan migrate
- php artisan db:seed

### .env setup for DB and Payment keys
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=m-order
DB_USERNAME=root
DB_PASSWORD=

## logs viewer url 
(rap2hpoutre package)
http://127.0.0.1:8000/logs


## run on ..
http://127.0.0.1:8000

## Authentication (using multiple roles middleware)
**any user password is password    via seeder or you may register yourself.**

📁 Project Structure (only changed files or folders)
T-order-payment/
├── app
│    └── Http
│      └── Controllers    
|        └── Dashboard    #for admin dashboard
|        └── Front        #for user pages
│      └── Middleware     #for authentication and role
│      └── Requests       #for validation
│    └── Models 
│    └── Observers        #for refunded orders stock adjustment 
│    └── Services
│      └── cartService.php  #for calculations & TODO::we can apply orderService and stockService for clean code.
├── database
│   └── factories
│   └── migrations
│   └── seeders
├── routes
│   └── web.php          #TODO::we can use api.php for api routes
├── storage
│   └── logs
├── .env.example
└── README.md

# Routes Doc.
## Authentication
### Register
only users can register .. admin can not they only created via seeders

### login
user login 
email: user@test.com
password: password
redirected to home page 

admin login
email: admin@test.com
password: password
redirected to dashboard page

### logout
for both users and admins
### notes
- user can access home and shop page without login but when trying to view cart or checkout user must be logged in
- logged in user can add to cart - checkout and place order
- logged in admin can view dashboard - manage products and orders - change order status - change product status
- observer is used to increase product stock on order refunded but this may be handled via stock transaction management to re-assure calculations and stock numbers 
