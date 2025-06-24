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
  	  - Add/View/update/delete any record in the system  

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

 **Other**  

    - Reports of hotspot areas 
- List of Doctors

  - Role‐based access control: each user sees only what their role permits  
---

## Tech Stack

- **Language:** PHP, HTML, CSS, JavaScript  
- **Framework/Library:** Bootstrap  
- **Backend:** MySQL
- **IDE:** VS Code

---

## Prerequisites
1. **Web Server:** WAMP Server (or similar software) installed on Windows.  
2. **PHP:** Version 8.x or above.  
3. **MySQL:** Version 9.1 or above (ensure the `mysqli` extension is enabled).  
4. **Browser:** Edge, Chrome, Firefox  or any modern browser.  

---

## Installation & Setup

1. **Clone or Download**  
   ```bash
git clone https://github.com/AthulKrishnaG/Pandtrack.git
Or download and extract the ZIP into your web server’s document root (e.g., C:\wamp64\www\).
2.Move Files
oEnsure the entire project folder (pandtrack/) is inside www/ (for WAMP) 
oThe final path should look like:
oC:\wamp64\www\pandtrack\  
o.vscode
oajax-load
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
3.Start WAMP
oRun the application.
4.Import Database
oOpen phpMyAdmin (http://localhost/phpmyadmin).
oCreate a new database named pantra.
oClick Import → Choose File → select pantra.sql (provided in the database/ folder) → Import.
oThis will create all necessary tables with default data.
5.dbconnection.php *
oOpen dbconnection.php in VS Code.
oUpdate the MySQL credentials if necessary (default WAMP credentials):
o<?php
o// dbconnection.php
o$db_servername   = "localhost";
o$db_username = "root";
o$db_password = "";         // default is empty for WAMP
o$db_dbname = "pantra";
o$dbconnection = mysqli_connect($db_servername, $db_username, $db_password, $db_dbname);
oif (mysqli_connect_error()) {
o  echo "Failed to connect to MySQL:  " . mysqli_connect_error();
o}
o?>
oSave and close.
* dbconnection.php for establishing database connection are available in the required folders ( SSLA,SSLD, SSLP). So, not necessary to configure.
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
(After first login, Admin can create additional doctor/user/ patient accounts.)

Usage
1.Admin Login
oGo to http://localhost/pandtrack/login.php  
oEnter Admin credentials (user name(email id) :admin@gmail.com, password: admin).
oAfter logging in, the Admin dashboard shows options to manage patient, source, contacts, primary contact, patient’s medical history, users, schedule duty of doctor, discharge, disease, symptoms, medicines and hotspots areas. 
2.Doctor Registration &  Usage
oA new doctor visits http://localhost/pandtrack/login.php. 
oAdmin can add doctors and the email id  &  phone number are the doctor login credentials.
oDoctor can manage patient, patient’s medical history, users, schedule duty of doctor, discharge, disease, symptoms, medicines and hotspots areas. 
oDoctor can view source, contacts and primary contact.
3.Patient Registration & Usage
oA new patient visits register.php, signs up, and logs in immediately (no approval needed).
oPatient dashboard allows add/view : source/contact/primary contact details. 
oPatient can view medicine history, discharge details, disease, symptoms, medicines and hotspots areas.
oThey can update personal profile

Roles & Permissions
1.Admin
oFull access: Manage patient, source, contacts, primary contact, patient’s medical history, users, schedule duty of doctor, discharge, disease, symptoms, medicines and hotspots areas. 
oAdd/view/edit/delete any record in the system.
2.Doctor
oAdd/view patient, patient’s medical history, users, schedule duty of doctor, discharge, disease, symptoms, medicines and hotspots areas.
oView source, contacts and primary contact.
oAdd/view list of all doctors (including consultation schedules).
3.Patient
oAdd/view : source/contact/primary contact details.
oView personal consultation/medicine history.
oView disease/symptom/medicine/hotspot areas.
