# RobotControlButtonsAndPHPDatabaseFetch
This repository contains the deliverables for the robot control buttons task, for the Smart Methods company summer training for IoT

This project has 3 files:

1- control code.html: this file is a webpage written in html and has buttons for controlling the robot, each button controls the robot in a certain way

2- sender.php: this is a php file that when any button is clicked, it sends the buttons value to a database (self hosted for testing) and saves it in a table there

3- fetch.php: this php file is responsible for getting all the previously saved data in the database and shows them in a webpage. it shows the history of all the previous commands clicked.
