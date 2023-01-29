
 /$$$$$$$  /$$           /$$       /$$ /$$      /$$ /$$   /$$                    
| $$__  $$|__/          | $$      |__/| $$$    /$$$| $$$ | $$                    
| $$  \ $$ /$$ /$$$$$$$$| $$   /$$ /$$| $$$$  /$$$$| $$$$| $$ /$$   /$$  /$$$$$$ 
| $$$$$$$/| $$|____ /$$/| $$  /$$/| $$| $$ $$/$$ $$| $$ $$ $$| $$  | $$ /$$__  $$
| $$__  $$| $$   /$$$$/ | $$$$$$/ | $$| $$  $$$| $$| $$  $$$$| $$  | $$| $$  \__/
| $$  \ $$| $$  /$$__/  | $$_  $$ | $$| $$\  $ | $$| $$\  $$$| $$  | $$| $$      
| $$  | $$| $$ /$$$$$$$$| $$ \  $$| $$| $$ \/  | $$| $$ \  $$|  $$$$$$/| $$      
|__/  |__/|__/|________/|__/  \__/|__/|__/     |__/|__/  \__/ \______/ |__/      

=============================================================================
Info Weapons Version

php 		=> 8.1.10
composer	=> 2.3.5
xampp 	=> 3.3.5
vscode	=> 1.74.2
os		=> Windows 11 64bit

=============================================================================
First Setup

Execute these :
cd ./ticket_order			// change directory to laravel app folder
cp .env.example .env		// copy the .env file
composer install			// install requirement libraries
php artisan key:generate	// generate key

Import sql file in '/database/ticket_order.sql' to your database
Setup database configuration in .env file

and you dont need migration anymore ;)

Tell Artisan to Serve It!
Enjoy..

=============================================================================
Fix Logout Error

comment the return of getRememberToken() function at:
ticket_order/vendor/laravel/framework/src/Illuminate/Auth/GenericUser.php

=============================================================================
About Me:
  *can see in my linkedin page :D 'Dont forget to connect me in there'


Social Media:
 - Instagram	: @rizkimnur_ (https://www.instagram.com/rizkimnur_/)         
 - GitHub		: RizkiMN (https://github.com/rizkimn)                   
 - LinkedIn	: Rizki M Nur (https://www.linkedin.com/in/rizkimnur/)                                                  
 - Website	: https://rizkimn.github.io/


Thank You ;)