# Example BackEnd End Project: BEEP
This project show a way to create a PHP project when you start programming PHP.

## Installation
To install this project clone this repo to a fresh folder on your computer.

### Packages
1. Open up an terminal
2. Go to the project folder (to where you created the clone of the repo)
3. Type *composer i*
4. Type *npm i*

### Database
1. Open config.example.php in the root folder
2. Copy the contents of this file
3. Create a new file and name it config.php
4. Create a new database
5. Put your database credentials in config.php
6. Open up a terminal window
7. Go to the project folder (e.g. beep)
8. Typ *php migrate.php* and press ENTER

### Boot a server
You can use the php build in server:
1. Open up a terminal
2. Go to the project folder, e.g. beep.
3. Typ *cd public* ENTER
4. Typ *php -S localhost:8000* ENTER (or enter another port like 3000, 8080 etc.)
