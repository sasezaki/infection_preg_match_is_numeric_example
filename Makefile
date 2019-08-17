.PHONY: all
all: cs-check phpstan infection

.PHONY: cs-check
cs-check:
	./vendor/bin/phpcs

.PHONY: phpstan
phpstan:
	./vendor/bin/phpstan analyse --level=7 src tests

.PHONY: infection
infection:
	phpdbg -qrr ./vendor/bin/infection