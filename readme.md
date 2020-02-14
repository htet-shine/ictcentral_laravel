# Laravel Online Store (Working Progress)

This my second laravel project/application. This project is inspired by [Andre Madarang](https://www.youtube.com/channel/UCtb40EQj2inp8zuaQlLx3iQ "Youtube Channel"). I believe in learning through good examples and practicing. I've learned a lot of things that I did not know about laravel during this project. This is a big step-up from the [Beginner Blog](https://github.com/htet-shine/beginner_laravel_blog) I did while taking laravel classes.

I created a responsive template which can be found [Here](https://github.com/htet-shine/ictcentral_template) myself and follow along with the examples. This is not a clone of Andre Madarang's project as you will see if you look through my source code.

### Features
* Responsive Design
* Browse Products by Category
* Sort Products by Price
* Browse Related Products (Working Progress)
* Shopping Cart includes removing indivual or all items, updating quantities
* Stripe Checkout
* More features such as Creating Users Accounts and Admin CMS will come through as I work on this project

If you want to know more details about this project head over to [my website](https://htetshineaung.com).

With all of that out of the way lets begin installation.

---

### Installation Instructions

Note that the instructions are written with the mindset that this application would be run on a local server.

#### All Prerequisites

1. Download [xampp](https://www.apachefriends.org/download.html) (or similar alternatives)
1. Download [composer](https://getcomposer.org/download/)
1. Download [winrar](https://www.win-rar.com/start.html?&L=0)
1. Download [project files](https://github.com/htet-shine/ictcentral_laravel/archive/master.zip)

After downloading

* Install **xampp, composer and winrar** (all of these are just to make sure you have everything you need to setup this application. Chances are you already have these installed)
* Launch xampp and start **Apache** and **MySQL** services
<br><br>
* Open a web browser and type in `localhost/phpmyadmin`
* Create a new database [ name of your chice ] and `utf8mb4_unicode_ci` collation
* Extract __the project zip file__ and you will get **a folder** that contains all the folders and files from this repository
* Place that folder in `C:\xampp\htdocs` (Default xampp install location)
* Open the folder and rename `.env.example` to `.env`
* Open `.env` file in notepad or your favorite text editor and change the following lines
```
DB_DATABASE=     (your database name)
DB_USERNAME=root (or your username if you have one)
DB_PASSWORD=     (type in password if you have set it else leave it blank)
```
* Open command prompt (or similar command line interface) and cd into the root folder of the project
```bash
cd *folder path*
```

1. Run `composer install` to install framework dependencies
1. Run `php artisan key:generate` to create application encryption key
1. Run `php artisan migrate` to create tables in your database
1. Run `php artisan db:seed` to insert pre-made data into your tables
1. Open your browser and type in `localhost/your_root_folder_name` and click on `public` folder

If you see the home page of the application, you've successfully installed the application.

#### Update Cart Quantity Fix

If you are going to run this application on a actual live server, this fix won't be necessary. But if you are on `localhost`, follow these steps.

1. Go to the project's root directory `resources\views` and open `cart.blade.php`
1. Find this line at the bottom of the page between script tags
```javascript
axios.patch(`/cart/${id}`, {
```
1. Replace it with
```javascript
axios.patch(`/your_root_folder_name/public/cart/${id}`, {
```

The reason that this happened is that it is trying to request patch at `localhost/cart/${id}` which does not exist in http routes. Thats why you need to put actual root directory path before `/cart/${id}`.

On a live server, you will have a domain name such as `www.website.com`. This issue won't exist because that domain become a root directory and  patch request would look like this `www.website.com/cart/${id}`.


#### Stripe Fix

This application uses Strip API for checkout functionality. At this point, checkout function will not work as the API keys for stripe are  missing and I cannot share my own keys. So

* You can check out my [Live Demo](https://ictcentral.htetshineaung.com) hosted by myself for testing purposes. (or)
* You can use your own stripe account and API Keys.

Here's how to do it.

1. Create a Stripe Account and login to dashboard
1. Go to "Get your test API keys" and you will get 2 API keys
1. Open `.env` file again.
1. Add the following lines at the bottom of it
```
STRIPE_KEY= (your stripe publishable key)
STRIPE_SECRET= (your stripe secret key)
```

1. Go to the project's root directory `resources\views` and open `checkout.blade.php` with text editor
1. Find this line and replace it with your key
```javascript
var stripe = Stripe('your publishable key');
```

And you are ready to use check out function. The orders can be seen on your stripe dashboard.


---

I will be updating this repo as I continue with this project. If you have any questions [Send me an Email](mailto:htetshineaung.business@gmail.com)

Thank you for checking out my repository. Have a good day.



