run "rm #{release_path}/app/Config/core.php && ln -s #{shared_path}/Config/core.php #{release_path}/app/Config/core.php"
run "rm #{release_path}/app/Config/database.php && ln -s #{shared_path}/Config/database.php #{release_path}/app/Config/database.php"
run "rm #{release_path}/app/Config/bootstrap.php && ln -s #{shared_path}/Config/bootstrap.php #{release_path}/app/Config/bootstrap.php"
sudo "echo 'date.timezone = Asia/Tokyo' > /etc/php/cli-php5.4/ext-active/timezone.ini"
sudo "echo 'date.timezone = Asia/Tokyo' > /etc/php/fpm-php5.4/ext-active/timezone.ini"

