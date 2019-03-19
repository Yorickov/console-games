install:
	composer install

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

lint-fix:
	composer run-script phpcbf -- --standard=PSR12 src bin

even:
	php bin/game-even

reload:
	composer dump-autoload
