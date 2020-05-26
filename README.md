# vue-test
Laravel test app with [Vue.js](https://vuejs.org/) and [UIkit](https://getuikit.com/)

1. Install dependencies

```bash
composer install

npm install
```

2. Copy .env file and generate app key

```bash
cp .env.example .env

php artisan key:generate
```

3. Connect to database in .env file

```
DB_CONNECTION=mysql
DB_DATABASE=app_db
DB_USERNAME=root
DB_PASSWORD=mah_pass123!
```

4. Migrate and seed
```
php artisan migrate

php artisan db:seed
```

User admin@admin.com / password is created.

5. Run npm dev

```bash
npm run dev
```

6. Start PHP dev server
```bash
php artisan serve
```
