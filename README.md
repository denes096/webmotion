# Webmotion project

- Requirements:
  - Docker
- Note: compatible with Apple Silicon
  
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
php bin/console doctrine:schema:update --force
```

**Run dumps**
```
php bin/console app:load-fixtures
```

**Visit the domains**
* https://frontend.webmotion.io
