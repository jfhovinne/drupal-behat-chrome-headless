# Docker-based Drupal 8 + Behat + Chrome headless stack

[![Build Status](https://travis-ci.org/jfhovinne/drupal-behat-chrome-headless.svg?branch=master)](https://travis-ci.org/jfhovinne/drupal-behat-chrome-headless)

## Usage

```
chmod 777 files && touch settings.php && docker-compose up -d
docker exec -u user -w /var/www/web dbch_web drush si standard --db-url=mysql://drupal:drupal@db:3306/drupal
docker exec -u user -w /home/user/dev dbch_web composer install
docker exec -u user -w /home/user/dev dbch_web bin/behat -c tests/behat.yml tests/features/
```
