# Subscription-Based Payment Integration in Laravel using Cashier & Paddle

This project demonstrates how to implement a subscription-based payment system in a Laravel application using Laravel Cashier and Paddle. It serves as a guide for developers looking to integrate recurring billing and subscription management into their Laravel projects.

## Features

-   **Subscription Management**: Users can subscribe to different plans (Basic and Pro).
-   **Payment Gateway Integration**: Uses Paddle for handling payments.
-   **Plan Pricing Options**: Supports both monthly and yearly subscription plans.
-   **Protected Content**: Only subscribed users can access certain features (e.g., time tracker).
-   **Webhook Integration**: Automated communication between the app and Paddle for handling subscription updates.

## Technologies Used

-   **Laravel**: PHP Framework
-   **Laravel Cashier**: Manages subscription billing with Paddle.
-   **Paddle**: Payment gateway for subscriptions.
-   **MySQL**: Database for storing user and subscription data.

## Getting Started

### Prerequisites

-   PHP 8.x or higher
-   Composer
-   MySQL
-   Ngrok (for webhook testing)

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/laravel-subscription-demo.git
    cd laravel-subscription-demo
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Set up your `.env` file:

    - Copy the `.env.example` to create a `.env` file:
        ```bash
        cp .env.example .env
        ```
    - Configure your database, Paddle API keys, and other environment variables in the `.env` file:
        ```plaintext
        DB_DATABASE=your_database
        DB_USERNAME=your_username
        DB_PASSWORD=your_password
        PADDLE_BASIC_MONTHLY=your_basic_monthly_plan_id
        PADDLE_BASIC_YEARLY=your_basic_yearly_plan_id
        PADDLE_PRO_MONTHLY=your_pro_monthly_plan_id
        PADDLE_PRO_YEARLY=your_pro_yearly_plan_id
        ```

4. Run database migrations:

    ```bash
    php artisan migrate
    ```

5. Install Laravel Breeze for authentication:

    ```bash
    composer require laravel/breeze --dev
    php artisan breeze:install
    npm install && npm run dev
    php artisan migrate
    ```

6. Set up the Paddle webhook using Ngrok:

    ```bash
    ./ngrok http 8000
    ```

7. Link the webhook URL on Paddle to `https://your-ngrok-url/paddle/webhook`.

8. Start the application:
    ```bash
    php artisan serve
    ```

## Usage

1. Register a new user via the authentication system.
2. Once logged in, if the user is not subscribed, they will be presented with subscription options.
3. Select a subscription plan (Basic or Pro) and proceed with the payment via Paddle.
4. After a successful payment, the user can access the protected content, such as the time-tracker feature.

## License

This project is licensed under the MIT License.

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests to improve this demo.

## Acknowledgments

-   Laravel Documentation
-   Paddle Documentation
-   Laravel Cashier
