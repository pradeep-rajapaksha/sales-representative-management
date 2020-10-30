#Sales Representative Management
________________________________________________________________________________

##Requirements
	Below list of applications need to be installed before start the app configuration
		1). Apache2
		2). MySQL database server
		3). PHP 7.2 or higher
		4). Git
		5). Composer

##Installation Guide
	Follow the steps below to install the application and login to the application
		1). Clone or Download the repository to your 
		2). Locate into the root of the cloned repository 
		3). run below to install the required dependencies
			`composer install`
			`npm install`
		4). Update the .env file with required database settings
		5). run `php artisan migrate --seed` to execute the migration and the database seeds
		6). run below build the assets 
			`npm run prod`
		7). run below command to run the application in localhost mode
			`php artisan serve`
		8). Use `pradeepprasanna.rajapaksha4@gmail.com` and `password` to login to the application