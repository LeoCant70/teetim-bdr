services:
  app:
    build:
      context: .
      dockerfile: Dockerfile
    volumes:
      - ..:/var/www/html:cached
    ports:
      - "8080:80"
    environment:
      DB_HOST: db
      DB_NAME: ${DB_NAME}
      DB_USER: ${DB_USER}
      DB_PASS: ${DB_PASS}
    depends_on:
      - db

  db:
    image: mysql:8.0
    restart: unless-stopped
    environment:
      MYSQL_ROOT_PASSWORD: ${DB_ROOT_PASS}
      MYSQL_DATABASE: ${DB_NAME}
      MYSQL_USER: ${DB_USER}
      MYSQL_PASSWORD: ${DB_PASS}
    volumes:
      - db-data:/var/lib/mysql
      - ../db:/docker-entrypoint-initdb.d:ro

  phpmyadmin:
    image: phpmyadmin:5
    restart: unless-stopped
    environment:
      PMA_HOST: db
      PMA_USER: root
      PMA_PASSWORD: ${DB_ROOT_PASS}
    ports:
      - "8081:80"
    depends_on:
      - db

volumes:
  db-data:
