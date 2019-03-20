install:
	composer install

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

lint-fix:
	composer run-script phpcbf -- --standard=PSR12 src bin

even:
	php bin/game-even

prime:
	php bin/game-prime

gcd:
	php bin/game-gcd

calc:
	php bin/game-calc

progression:
	php bin/game-progression

reload:
	composer dump-autoload
