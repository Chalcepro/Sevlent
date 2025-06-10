# Sevlent Software Solutions (S3)

## 💻 Website project (laravel)

### 👨‍🎓 By: Sokomba Chalcedony Ariel  
**Course:** Computer Science  
**Institution:** Lincoln College of Science, Management and Technology  
**Student ID:** LUC-NGA-002-ADM-100817  
**Semester:** 4

---

### Introduction
The w3school replica is built with Laravel by making use of premade assets and tools from other sites to develop the slick and responsive website.

## Installation Steps
Follow the steps below to get the project up and running:

### Step 1: clone the project
git clone https://github.com/Chalcepro/Sevlent
Or download the file as Zip and extract in your xampp htdocs folder

### Step 2: Go to the project directory and install dependencies
composer install

### Step 3: Create .env file
Rename the .env.example file to .env.

### Step 4:  Create a Database
Create a new database in your local or remote MySQL server and add the database credentials in your .env file.

### Step 5: Add SMTP details (optional)
To make the contact form work correctly, add your SMTP details in the .env file.

### Step 6: Run Migrations
Run the migration command to create the necessary tables in the database.
php artisan migrate

### Step 7: Generate Application Key.
php artisan key:generate

### Step 8: Add Dummy User for Admin.
php artisan db:seed

### Step 9: Serve the Application
php artisan serve


### Login Link
#### You can login at the following URL: http://localhost:8000/login

The admin login information can only be accessed by the admin himself.
Contact +234 703 944 3182 for further enquiries.






