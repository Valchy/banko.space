# Banko.Space

Banko.Space is a small project to demonstrate how a digital bank would work. You can create an account for free with fake $500. Then you have the functionality of sending, receiving and topping up again your account.

## Installation

Use [composer](https://getcomposer.org/) to download all the packages.
```
composer update
php artisan migrate
php bs:seed
npm install && npm run dev
```

Make sure to copy the .example.env file into a .env file then
```
php artisan key:generate
```

## Usage

```php
php artisan
npm run prod|dev|watch
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)