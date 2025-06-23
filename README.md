# PANDTRACK (Pandemic Tracking System)

**PANDTRACK** is a web-based application built with PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap. It helps administrators, doctors, and patients track pandemic-related data (e.g., patient details, diseases, symptoms, contact lists, hotspot areas) in Kerala. The system is designed to simplify and automate day-to-day healthcare workflows and reporting.

---

## Table of Contents

1. [Features](#features)  
2. [Tech Stack](#tech-stack)  
3. [Prerequisites](#prerequisites)  
4. [Installation & Setup](#installation--setup)  
5. [Database Configuration](#database-configuration)  
6. [Project Structure](#project-structure)  
7. [Default Credentials](#default-credentials)  
8. [Usage](#usage)  
9. [Roles & Permissions](#roles--permissions)  

---

## Features

- **Admin**  
  - Manage Patients (add, view, edit, delete) 
  - Manage Source info (add, view, edit, delete)
- Manage Contact info (add, view, edit, delete) 
- Manage Primary Contact info (add, edit, update, delete)
- Manage Patients Medicine History (add, edit, update, delete)
  - Manage users (add, view, update, delete)  
  - Configure doctor types and assign duty (add, view, edit, delete)  
- Manage Discharge info (add, view, edit, delete)
- Manage Disease (add, view, edit, delete)
- Manage Symptoms (add, view, edit, delete)
- Manage Medicines (add, view, edit, delete)
- Manage hotspot areas (add, view, edit, delete)
  - View/update/delete any record in the system  

- **Doctor**  
  
  - Login and add/view/edit, delete) patient details (Patient info, Medicine history, Discharge details)  
  - Manage consultation schedules (Add/view, edit, delete) 
- Manage Disease (add, view, edit, delete)
- Manage Symptoms (add, view, edit, delete)
- Manage Medicines (add, view, edit, delete)
- Manage hotspot areas (add, view, edit, delete)
- View Source info, Contact info, Primary Contact info

- **Patient**  

  - Register and login  
  - View personal consultation history, medicine history 
  - Share disease details (source, contact list, Primary Contact info)  
  - View/Edit Profile

- **Other**  

  - Reports of hotspot areas 
- List of Doctors

  - Role‐based access control: each user sees only what their role permits  
---

## Tech Stack

- **Language:** PHP, HTML, CSS, JavaScript  
- **Framework/Library:** Bootstrap  
- **Backend:** MySQL (using WAMP/XAMPP)  
- **IDE:** VS Code

---

## Prerequisites
1. **Web Server:** WAMP Server (or XAMPP) installed on Windows.  
2. **PHP:** Version 8.x or above.  
3. **MySQL:** Version 9.1 or above (ensure the `mysqli` extension is enabled).  
4. **Browser:** Edge, Chrome, Firefox  or any modern browser.  

---

## Installation & Setup

1. **Clone or Download**  
   ```bash
      git clone https://github.com/AthulKrishnaG/Pandtrack.git
Or download and extract the ZIP into your web server’s document root (e.g., C:\wamp64\www\)

2.Move Files
o  Ensure the entire project folder (pandtrack/) is inside www/ (for WAMP) or htdocs/ (for XAMPP).
o  The final path should look like:

o  C:\wamp64\www\pandtrack\  

o  .vscode
o  ajax-load
o  ├─ css\  
o  ├─ fonts\  
o  ├─ HTML\  
o  ├─ images\  
o  ├─ includes\  
o  ├─ js\  
o  ├─ less\  
o  ├─ SSLA\  
o  ├─ SSLD\  
o  ├─ SSLP\  
o  ├─ dbconnection.php  
o  ├─ footer.php  
o  ├─ header.php  
o  ├─ header2.php  
o  ├─ index.php  
o  ├─ login.php  
o  ├─ phpcodes-Delete.php  
o  ├─ phpcodes-Insert.php  
o  ├─ phpcodes-Login.php  
o  ├─ phpcodes-Update.php  
o  ├─ register.php  
o  └─ success.php  

3. Start WAMP/XAMPP
   o Run the application.
   o Start Apache and MySQL services.
4.Import Database
   o Open phpMyAdmin (http://localhost/phpmyadmin).
   o Create a new database named pantra.
oClick Import → Choose File → select pantra.sql (provided in the database/ folder) → Import.
oThis will create all necessary tables with default data.
5.Configure dbconnection.php
oOpen dbconnection.php in VS Code.
oUpdate the MySQL credentials if necessary (default WAMP credentials):
o<?php
o// dbconnection.php
o$db_servername   = "localhost";
o$db_username = "root";
o$db_password = "";         // default is empty for WAMP
o$db_dbname = "pantra";
o
o$dbconnection = mysqli_connect($db_servername, $db_username, $db_password, $db_dbname);
oif (mysqli_connect_error()) {
o  echo "Failed to connect to MySQL:  " . mysqli_connect_error();
o}
o?>
oSave and close.
6.Access the Application
oIn your browser, navigate to http://localhost/pandtrack 
oYou should see the landing page 

Database Configuration
Database Name: pantra

Project Structure
pandtrack/
│
├─ .vscode/  
├─ ajax-load/  
├─ css/  
├─ fonts/  
├─ HTML/  
├─ images/  
├─ includes/  
├─ js/  
├─ less/  
├─ SSLA/  
├─ SSDL/  
├─ SSLP/  
│
├─ dbconnection.php  
├─ footer.php  
├─ header.php  
├─ header2.php  
├─ index.php  
├─ login.php  
├─ phpcodes-Delete.php  
├─ phpcodes-Insert.php  
├─ phpcodes-Login.php  
├─ phpcodes-Update.php  
├─ register.php  
└─ success.php  
css/: Stylesheets and Bootstrap overrides.
js/: JavaScript files (AJAX calls, form validation, etc.).
includes/: Reusable components (e.g., navigation menus, sidebars).
SSLA/, SSLD/, SSLP/: Submodules/pages for different user roles or modules.
dbconnection.php: Establishes a connection to MySQL.
phpcodes-*.php: CRUD operations for different user actions (Insert, Update, Delete, Login).
register.php: User registration form (doctor/patient).
login.php: Login form for all user roles.
index.php: Landing page/dashboard (role‐based redirect).
header.php, footer.php, header2.php: Common header/footer templates.

Default Credentials
Admin
oEmail: admin@gmail.com
oPassword: admin
(After first login, Admin can create additional doctor or patient accounts.)

Usage
1.Admin Login
oGo to http://localhost/pandtrack/login.php  
oEnter Admin credentials (admin@gmail.com / admin).
oAfter logging in, the Admin dashboard shows options to manage patient, source, users, hotspots areas, contacts, primary contact,  schedule doctor, discharge, disease, symptoms, medicines . 
2.Doctor Registration & Approval
oA new doctor visits http://localhost/pandtrack/login.php. 
oAdmin can add doctors and the email id , phone number are the doctor login credentials
3.Patient Registration & Usage
oA new patient visits register.php, signs up, and logs in immediately (no approval needed).
oPatient dashboard allows viewing consultation history, medicine history, and adding source/contact/primary contact details.
