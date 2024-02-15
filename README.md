# Ecom Laravel - E-commerce Marketplace

Welcome to Ecom Laravel, an e-commerce marketplace that offers a diverse range of products from various brands. This Laravel-based platform is designed to provide users with a seamless and efficient online shopping experience. From easy navigation to inventory management and home delivery, Ecom aims to make online shopping convenient for both customers and administrators.

## Live Demo

Visit the live demo of Ecom Laravel: [https://ecom.amiruzzaman.xyz/](https://ecom.amiruzzaman.xyz/)

### Admin Login:
- **Email:** admin@email.com
- **Password:** admin123

### User Login:
- **Email:** amirzaman24@gmail.com
- **Password:** test1234

## Requirements and Features

### Requirement 1: Admin Inventory Management

#### Features:

- Admin can manage inventory efficiently.
- Add new cars to the inventory.
- Modify stock levels.
- Delete cars from the inventory.
- Include different brands in the product listings.

### Requirement 2: Product & Order Management

#### Features:

- Customers can easily search for products.
- Product search by brands for enhanced convenience.
- Customers can make purchases at discounted prices.
- Admins can search for orders efficiently in the admin panel.

### Requirement 3: Customer Feedback System

#### Features:

- Customers can send messages and make inquiries.
- View feedback provided by other customers.
- Customers can reply to feedback.
- Admins can send and reply to feedback, maintaining communication with customers.

### Requirement 4: Cart Management

#### Features:

- Customers can add cars to their carts for easy shopping.
- View the contents of the cart before proceeding to checkout.
- Option to delete items or empty the entire cart.
- Admins can download invoices for record-keeping.

### Requirement 5: Delivery Management

#### Features:

- Customers can track the delivery status of their orders.
- Admins can update the delivery status efficiently.
- Customers have the option to cancel orders before delivery.
- Once delivery is complete, customers cannot cancel orders.

## Setup Instructions

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/ecom-laravel.git
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Set up your environment variables by copying the `.env.example` file to `.env` and configuring it accordingly.

4. Generate application key:

   ```bash
   php artisan key:generate
   ```

5. Run database migrations:

   ```bash
   php artisan migrate
   ```

6. Serve the application:

   ```bash
   php artisan serve
   ```

Visit [http://localhost:8000](http://localhost:8000) to access the application.


