# Plane Ticket Booking System

This is a web application for booking plane tickets. Users can browse available flights, select their preferred departure and destination airports, choose a date and time, and purchase tickets.

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

### User Stories

#### User
- **Search for Available Flights:** To search for available flights, navigate to the "Search Flights" page and enter your departure and arrival airports, as well as the date for departure.
- **Select a Flight:** To select a flight, view the search results and choose a flight that meets your criteria.

#### Administrator
- **Add, Edit, or Delete Countries:** To add, edit, or delete countries, navigate to the "Countries" page and use the provided forms and controls.
- **Add, Edit, or Delete Cities:** To add, edit, or delete cities, navigate to the "Cities" page and use the provided forms and controls.
- **Add, Edit, or Delete Airports:** To add, edit, or delete airports, navigate to the "Airports" page and use the provided forms and controls.
- **Add, Edit, or Delete Planes:** To add, edit, or delete planes, navigate to the "Planes" page and use the provided forms and controls.
- **Add, Edit, or Delete Classes:** To add, edit, or delete classes, navigate to the "Classes" page and use the provided forms and controls.
- **Add, Edit, or Delete Flights:** To add, edit, or delete flights, navigate to the "Flights" page and use the provided forms and controls.
- **Edit or Delete Passengers:** To edit or delete passengers, navigate to the "Passengers" page and use the provided controls.
- **Edit and Delete User Roles and Permissions:** To edit or delete user roles and permissions, navigate to the "User Roles" page and use the provided controls.

## License
This project is licensed under the MIT License. See the LICENSE file for details.


