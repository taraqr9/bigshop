<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# BigShop

This is a sample application that demonstrates an E-commerce website using Laravel Framework. The application loads products into a MySQL database and displays them. Users can select to display products in a single category. Users can click on any product to get more information including pricing, reviews, and rating. Users can select items and add them to their shopping cart

## Import Data
Then give the command into the command line ->
```bash
php artisan db:seed
```
![Uploading scrnli_04_08_2021_03-07-36.png…]()
![Screenshot (689)](https://user-images.githubusercontent.com/37486791/128086970-16845d2d-a0d7-4f3c-ae04-ea48d6bca64d.png)
![scrnli_04_08_2021_03-08-10](https://user-images.githubusercontent.com/37486791/128086974-d19ef5fe-8e5b-4fd0-8292-d9791826962e.png)
![scrnli_04_08_2021_03-10-13](https://user-images.githubusercontent.com/37486791/128086980-69669be2-ce60-4bc9-86b1-067d1ec51fe6.png)
![Uploading scrnli_04_08_2021_03-09-50.png…]()



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
