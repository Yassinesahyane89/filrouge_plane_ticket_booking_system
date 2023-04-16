# Plane Ticket Booking System

This is a web application for booking plane tickets. Users can browse available flights, select their preferred departure and destination airports, choose a date and time, and purchase tickets.

## Installation

To run this application, you need to have the following software installed on your machine:

- [Node.js](https://nodejs.org/) version 12 or later
- [XAMPP](https://www.apachefriends.org/index.html) version 7.3.0 or later
- [Composer](https://getcomposer.org/) version 2.0 or later

Then, follow these steps:

1. Clone this repository: `git clone https://github.com/Yassinesahyane89/filrouge_plane_ticket_booking_system.git`
2. Navigate to the project directory: `cd filrouge_plane_ticket_booking_system`
3. Start the Apache and MySQL modules in XAMPP
4. Create a new .env file by copying the .env.example file and updating the database credentials and other environment variables as needed.
6. Install the PHP dependencies: `composer install`
7. Run the database migrations: `php artisan migrate`
8. Install the Node.js dependencies: `npm install`
9. Start the server: `npm start`
10. Start the local server by running php artisan serve.
```bash
git clone https://github.com/Yassinesahyane89/filrouge_plane_ticket_booking_system.git
cd filrouge_plane_ticket_booking_system
cp .env.example .env
php artisan key:generate
composer i
php artisan migrate
npm install
npm start
php artisan serv
```

##Usage

Once the server is running and you've opened the application in your web browser, you can use it to browse available flights, select your departure and destination airports, choose a date and time, and purchase tickets.

Contributing
If you'd like to contribute to this project, please follow these steps:

1. Fork this repository.
2. Create a new branch: git checkout -b my-new-feature
3. Make your changes and commit them: git commit -am 'Add some feature'
4. Push to the branch: git push origin my-new-feature
5. Create a new Pull Request.

##License
This project is licensed under the MIT License. See the LICENSE file for details.

In this updated README file, we've included two new steps: step 6 to install the PHP dependencies with Composer, and step 7 to run the database migrations with `php artisan migrate`. The rest of the steps remain the same.

