# Electricity-Billing-System-Using-DBMS
## Overview

The Electricity Billing System is a web-based application designed to manage and streamline the process of electricity bill payments and administration. The project is divided into two main modules: one for users and another for administrators.

In the User Module, registered users can log in to view their electricity consumption details, check their bill amounts, and make payments securely through the website. This module aims to provide users with a convenient and accessible platform for managing their electricity bills.

The Admin Module is designed for administrators who manage the overall system. Admins have the ability to generate new bills for users based on their electricity usage, create new user accounts, and maintain the integrity of the billing process. This module is essential for ensuring that the system operates smoothly and efficiently.

## Features

### User Module

- User Login: Users can log in using their credentials.

- View Bill: Users can view their current and past electricity bills.

- Pay Bill: Users can securely pay their electricity bills online.

### Admin Module

- Admin Login: Admins can access the system using a secure login.

- Generate Bills: Admins can generate bills for users based on their electricity usage.

- User Management: Admins can create new users and manage existing ones.

## Technologies Used

- Frontend: HTML, CSS, JavaScript

- Backend: PHP

- Database: MySQL

## ER Diagram

The Entity-Relationship (ER) Diagram for the Electricity Billing System illustrates the data model and the relationships between different entities within the system. This diagram provides a visual representation of the database structure, highlighting key entities such as Users, Bills, and Administrators, and their associations.

![er diagram](https://github.com/user-attachments/assets/8962b3dd-1790-4030-9655-f02f2f4b8aad)

## Schema Diagram

The Schema Diagram for the Electricity Billing System provides a detailed overview of the database structure, showing how tables are organized and related to each other. This diagram serves as a blueprint for understanding the data architecture, ensuring a clear representation of tables, fields, primary keys, and relationships.

## Key Tables:

- Users: Stores information about the customers, including their login credentials and personal details.

- Admins: Contains data about the administrators who manage the system, including their login credentials.

- Bills: Holds the billing information, linking each bill to a specific user and including details like the amount due, due date, and payment status.

- Payments: Tracks payment transactions, linking them to the corresponding bills and users.
## Relationships:

- Each User can have multiple Bills, representing their electricity charges over time.

- Admins are responsible for generating Bills and managing Users.

- Payments are linked to Bills, capturing the details of each transaction made by the user.

![schema diagram](https://github.com/user-attachments/assets/35e431bb-bc6e-48d4-8347-c024d265285d)
    
## Front Screen

![front screen](https://github.com/user-attachments/assets/b0cd3fe9-e869-4efe-9086-04b4f39f1c80)

## Admin Dashboard

![admin dashbord](https://github.com/user-attachments/assets/748b2a02-e6c9-4c30-b2af-1d33ba0ea455)

## Customer Records

![customer](https://github.com/user-attachments/assets/e7fe014e-669e-444d-a061-adfcbd4efe51)

