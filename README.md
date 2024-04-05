# Stripe Laravel Checkout Basic

This repository contains a basic implementation of Stripe Checkout with Laravel.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/bmiit145/stripe_payment_laravel_checkout_basic.git
    ```

2. Navigate to the project directory:

    ```bash
    cd stripe_payment_laravel_checkout_basic
    ```

3. Install composer dependencies:

    ```bash
    composer install
    ```

4. Install npm dependencies and compile assets:

    ```bash
    npm install && npm run dev
    ```

5. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

6. Generate application key:

    ```bash
    php artisan key:generate
    ```

7. Update `.env` file with your Stripe API keys:

    ```dotenv
    STRIPE_KEY=your-stripe-public-key
    STRIPE_SECRET=your-stripe-secret-key
    ```

## Usage

1. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

2. Visit `http://localhost:8000` in your web browser.

3. You should see a basic checkout page where you can enter your payment details and make a payment via Stripe.

## Dependencies

- [stripe/stripe-php](https://packagist.org/packages/stripe/stripe-php): Stripe PHP bindings for interacting with the Stripe API.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please feel free to open an issue or create a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
