#!/bin/bash

echo "Creating folder structure and files for php webapp..."

mkdir -p ./assets ./assets/css ./includes ./views ./controllers

echo "Creating necessary files"

touch index.php db_conn.php router.php ./includes/footer.php ./includes/header.php ./includes/layout.php ./views/404.php ./views.php

