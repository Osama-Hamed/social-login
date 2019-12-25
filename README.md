# Social Media Login

User registration and login system including social media login.

### Environment variables

- GOOGLE_CLIENT_ID
- GOOGLE_CLIENT_SECRET
- FACEBOOK_CLIENT_ID
- FACEBOOK_CLIENT_SECRET

### Installation && Running

```bash
$ git clone https://github.com/Osama-Hamed/task
$ cd task
$ cp .env.example .env
```
Create a database and add it to the .env file as well as your api secrets.

```bash
composer install
php artisan migrate
npm install
npm run dev
php artisan serve --port=8000
```