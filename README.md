## Introduction

This project is just a coding `Toy Robot challenge`. 

Instructions for that can be found here [Coding Challenge](https://github.com/edrans/toy-robot-challenge).
This Project assumes that when exceuted it'll start from its last position

## Setup & Installation

- clone the repository
- cd to the cloned directory
- run command `composer install` to install the dependencies

## Usage instructions

- This can be tested on command line with Laravel `artisan`
- There are total of 4 functions that can be used
  - Report : can be used with command `php artisan run:robot report`
  - Move : can be used with command `php artisan run:robot move`
  - Left : can be used with command `php artisan run:robot left`
  - Right : can be used with command `php artisan run:robot right`


## Future Improvements and Pending
- Because of time shortage I wasn't able to work on Error Handling in the code
- Code can be improved future for User input.
- For quicker turnaround I used the Laravel Commands to work with. We can rather use PHP standrd input `php://stdin` to run everything under single command and parse the commands to execute
- Function `left` and `right` can be further improved to move clockwise where a single function can do the task
- Code comments are done quickly and minimal
- further as per PHP 7.4 PHP 8 we can define input Types and return types for functions
