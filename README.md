# Plane Ticket Booking System

The Plane Ticket Booking System is a web application that allows users to browse and book flights. Users can search for available flights by specifying the departure and destination airports, as well as the date of departure. Once the user has selected a flight, they can purchase tickets for the desired class and number of passengers.

As an administrator, the user can manage the database of countries, cities, airports, planes, classes, and flights. The administrator can add, edit, or delete any of these entities, as well as passengers and user roles.

The application is built using  the Laravel framework, with a MySQL database for storing data. It also uses HTML, CSS, JavaScript and bootstrap for the front-end.

Overall, the Plane Ticket Booking System provides a simple and convenient way for users to search for and book flights, while also offering administrators the tools to manage the system efficiently.

## Installation

To run this application, you need to have the following software installed on your machine:

- [Node.js](https://nodejs.org/) version 12 or later
- [XAMPP](https://www.apachefriends.org/index.html) version 7.3.0 or later
- [Composer](https://getcomposer.org/) version 2.0 or later

Then, follow these steps:

1.Clone this repository:

    git clone https://github.com/Yassinesahyane89/filrouge_plane_ticket_booking_system.git
 
2.Navigate to the project directory:

    cd filrouge_plane_ticket_booking_system
    
3.Start the Apache and MySQL modules in XAMPP
4.Create a new .env file by copying the .env.example file and updating the database credentials and other environment variables as needed.

    cp .env.example .env

5.Generate a new application key

    php artisan key:generate

6.Install the PHP dependencies:

    composer install

7.Run the database migrations:

    php artisan migrate
    
8.Install the Node.js dependencies:

    npm install

9.Start the local server by running php artisan serve.

    php artisan serv


## Usage

Once the server is running and you've opened the application in your web browser, you can use it to browse available flights, select your departure and destination airports, choose a date and time, and purchase tickets.

Contributing
If you'd like to contribute to this project, please follow these steps:

1. Fork this repository.
2. Create a new branch: git checkout -b my-new-feature
3. Make your changes and commit them: git commit -am 'Add some feature'
4. Push to the branch: git push origin my-new-feature
5. Create a new Pull Request.

## Features
  The Plane Ticket Booking System has the following features:
    - As a user, I can search for available flights with airport depart and arrival with a date for depart.
    - As a user, I can select a flight.
    - As an administrator, I can add, edit, or delete all countries.
    - As an administrator, I can add, edit, or delete all cities.
    - As an administrator, I can add, edit, or delete all airports.
    - As an administrator, I can add, edit, or delete all planes.
    - As an administrator, I can add, edit, or delete all classes.
    - As an administrator, I can add, edit, or delete all flights.
    - As an administrator, I can edit or delete all passengers.
    - As an administrator, I can edit and delete user roles, and assign access permissions to each role.

## License
This project is licensed under the MIT License. See the LICENSE file for details.


