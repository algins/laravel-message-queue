setup:
	composer install
	cp -n .env.example .env || true
	php artisan key:gen --ansi
	touch database/database.sqlite
	php artisan migrate
	npm install
	npm run build

start:
	php artisan serve --host 0.0.0.0

work:
	php artisan queue:work

prod:
	npm run build

clear:
	php artisan optimize:clear

lint:
	composer exec --verbose phpcs -- --standard=PSR12 app
	composer exec --verbose phpstan -- --level=5 analyse app
