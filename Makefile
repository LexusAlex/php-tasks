# Собрать образы
docker-build:
	docker-compose build
# Собрать образы + проверить на наличие новых версии образов
docker-build-pull:
	docker-compose build --pull
# Запуск контейнеров в фоновом режиме
docker-up:
	docker-compose up -d
# Перезапуск контейнеров
docker-restart:
	docker-compose restart
# Остановить контейнеры поднятые командой docker-compose up
docker-down:
	docker-compose down --remove-orphans
# Проверить обновления composer
composer-outdated:
	docker-compose run --rm php-cli-debian composer outdated
# Обновить карту классов
composer-autoload:
	docker-compose run --rm php-cli-debian composer dump-autoload
# Загрузить зависимости composer
composer-i:
	docker-compose run --rm php-cli-debian composer install
# Обновить зависимости composer
composer-u:
	docker-compose run --rm php-cli-debian composer u
# Остановить контейнеры а также удалить тома
docker-down-clear:
	docker-compose down -v --remove-orphans
# phpunit все тесты
test:
	docker-compose run --rm php-cli-debian composer test
test-http:
	docker-compose run --rm php-cli-debian composer test-http
test-types:
	docker-compose run --rm php-cli-debian composer test-types
test-html:
	docker-compose run --rm php-cli-debian composer test-html
test-array:
	docker-compose run --rm php-cli-debian composer test-array
test-date:
	docker-compose run --rm php-cli-debian composer test-date
test-integer:
	docker-compose run --rm php-cli-debian composer test-integer
test-bool:
	docker-compose run --rm php-cli-debian composer test-bool
test-templates:
	docker-compose run --rm php-cli-debian composer test-templates
test-construction:
	docker-compose run --rm php-cli-debian composer test-construction