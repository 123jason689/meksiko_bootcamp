# Meksiko - Inventory Management & Invoicing System

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white) ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E) ![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white) ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)

Meksiko is a web-based inventory and sales data management application built with the Laravel framework. It provides a comprehensive solution for managing products, categories, and customer invoices. The system is designed with two distinct user roles: **Admin** for complete data management and **User** for Browse products and generating invoices.

This project was developed as a final project for the **BNCC Praetorian Recruitment Bootcamp**.

-----

## ✨ Key Features

### Admin Role

  - **Full CRUD Operations:** Admins can Create, Read, Update, and Delete products and product categories.
  - **Product Management:** Add new products with details such as name, category, price, stock quantity, a descriptive text, and an image upload.
  - **Category Management:** Create and delete product categories to organize the inventory.
  - **Secure Access:** Admin pages are protected by middleware, preventing access by unauthorized users.

### User Role

  - **Product Catalog:** Users can view a complete, filterable catalog of all available products.
  - **Out-of-Stock Handling:** The system displays a clear "Out of Stock" message for items with zero quantity.
  - **Shopping Cart:** Users can add items to their cart (faktur) and adjust quantities.
  - **Invoice Generation:** Generate a detailed invoice with a unique invoice number, customer details, product list, subtotal, and grand total.
  - **PDF Invoices:** Download generated invoices as PDF files for printing or record-keeping.
  - **Order History:** View a history of all past invoices and transactions.
  - **Authentication:** Secure user registration and login functionality.

-----

## 🛠️ Tech Stack & Tools

This project is built with a modern tech stack, ensuring robustness and scalability.

| Technology | Badge |
| :--- | :--- |
| **Laravel** | ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) |
| **PHP** | ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) |
| **MySQL** | ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white) |
| **JavaScript** | ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E) |
| **Bootstrap** | ![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white) |
| **HTML5** | ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) |
| **CSS3** | ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white) |
| **DomPDF** | ![DomPDF](https://img.shields.io/badge/PDF%20Generation-DomPDF-red?style=for-the-badge) |
| **Composer** | ![Composer](https://img.shields.io/badge/Composer-885610?style=for-the-badge&logo=composer&logoColor=white) |

-----

## 🚀 Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

  - **XAMPP:** A local server environment with Apache and MySQL.
  - **PHP 8.0+**
  - **Composer:** A dependency manager for PHP.
  - **Node.js & NPM:** For managing front-end dependencies.

### Installation

1.  **Clone the Repository**

    ```sh
    git clone https://github.com/your-username/meksiko_bootcamp.git
    cd meksiko_bootcamp
    ```

2.  **Install PHP Dependencies**
    Use Composer to install all the required backend packages.

    ```sh
    composer install
    ```

3.  **Install JavaScript Dependencies**
    Use NPM to install front-end packages.

    ```sh
    npm install
    ```

4.  **Set Up Environment File**

      - Duplicate the `.env.example` file and rename it to `.env`.
      - Open your XAMPP control panel and start the **Apache** and **MySQL** services.
      - Open `phpMyAdmin` and create a new database. A good name would be `meksiko_db`.
      - Update your `.env` file with your database credentials:
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=meksiko_db
        DB_USERNAME=root
        DB_PASSWORD=
        ```

5.  **Generate Application Key**
    This key is used for encryption and is essential for security.

    ```sh
    php artisan key:generate
    ```

6.  **Run Database Migrations and Seed Data**
    This command will create all necessary tables and populate the database with dummy data for products and categories.

    ```sh
    php artisan migrate --seed
    ```

7.  **Create Storage Link**
    This makes the `storage/app/public` directory accessible from the web to display uploaded images.

    ```sh
    php artisan storage:link
    ```

8.  **Compile Front-end Assets**

    ```sh
    npm run dev
    ```

9.  **Start the Development Server**
    Your project is now ready\! Start the Laravel server.

    ```sh
    php artisan serve
    ```

    You can now access the application at **[suspicious link removed]**.

-----

## 👤 Admin & User Accounts

  - **Admin Account:** Per the project requirements, admin accounts must be created manually through the database. You can do this by adding a new user in the `users` table and then adding their `user_id` to the `admins` table.
  - **User Account:** You can register a new user account directly from the application's `/register` page.

-----

## 📧 Contact

**Project Author:** Jason Melvin Hartono
