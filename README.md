<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# BigShop

This is a sample application that demonstrates an E-commerce website using Laravel Framework. The application loads products into a MySQL database and displays them. Users can select to display products in a single category. Users can click on any product to get more information including pricing, reviews, and rating. Users can select items and add them to their shopping cart

## Import Data
Then give the command into the command line ->
```bash
php artisan db:seed
```
![scrnli_02_08_2021_22-59-52](https://user-images.githubusercontent.com/37486791/128086087-2d059bf6-1828-489d-84eb-434060f0b1f2.png)
![scrnli_02_08_2021_23-05-40](https://user-images.githubusercontent.com/37486791/128086096-e9cc3b8a-58a1-42a8-aa47-7d3f9c5123c9.png)
![Uploading scrnli_04_08_2021_03-04-55.png…]()


## Getting Started

To get started  you can simply clone this `bigdata` repository.

Clone the `bigdata` repository using git:

```bash
clone https://github.com/taraqr9/bigshop.git
cd bigshop
```

After the clone project first give a command on the console ->
```bash
composer update 
```


Then give the command ->
```bash
php artisan migrate
php artisan db:seed
```


## Tech Stack
* Laravel
* MySQL
* HTML
* CSS
* Bootstrap
