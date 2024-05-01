# LexTalk

LexTalk is a real-time chat application built with Laravel, utilizing Pusher as the broadcasting driver and Laravel Echo on the client side.

## Features

- Real-time chat: Engage in conversations with other users in real-time.
- Pusher integration: Utilizes Pusher as the broadcasting driver for real-time updates.
- Laravel Echo: Integrates Laravel Echo on the client side for listening to events and broadcasting updates.

## Requirements

- PHP (>= 8.1)
- Composer
- Node.js
- Pusher account (for broadcasting)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/lextalk.git
    ```

2. Navigate into the project directory:

    ```bash
    cd lextalk
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Install Node.js dependencies:

    ```bash
    npm install
    ```

5. Configure your environment variables by copying the `.env.example` file to `.env` and filling in the necessary details, including your Pusher credentials.

6. Generate an application key:

    ```bash
    php artisan key:generate
    ```

7. Run database migrations:

    ```bash
    php artisan migrate
    ```

8. Serve the application:

    ```bash
    php artisan serve
    ```

9. Access the application in your web browser.

## Usage

- Register an account or log in if you already have one.
- Start chatting with other users in real-time!

## Credits

- LexTalk is created and maintained by Emmanuel Mbagwu, for learning and training purpose.