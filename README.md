# Currency Converter Antavo

- Requirements:
  - Docker
  
## Project setup:
**Clone the repo**

```git clone https://github.com/denes096/wbmotion.git```

**Run the init.sh script to build the Docker iamage**

```sudo bash init.sh```

**Run the docker compose**

```docker-compose up -d```

**Ssh to docker and install composer packages**

```
docker-compose exec backend /bin/bash
composer install
php bin/console doctrine:schema:update
```

**Run dumps**
```
INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Szeged'),
(2, 'Budapest'),
(3, 'Szolnok'),
(4, 'Eger'),
(5, 'Esztergom'),
(6, 'Csongrád');


INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Magyarország'),
(2, 'Anglia'),
(3, 'Németország'),
(4, 'Szerbia'),
(5, 'Románia');
```

**Visit the domains**
* https://frontend.webmotion.io
