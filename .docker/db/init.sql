-- Create user if not exists
CREATE USER 'debian-sys-maint'@'localhost' IDENTIFIED BY 'uyyXMyCNx0D2Cff6';

-- Grant all privileges on all databases to the user
GRANT ALL PRIVILEGES ON *.* TO 'debian-sys-maint'@'localhost';

-- Create user 'gunny' with a password and grant all privileges with grant option
CREATE USER 'gunny'@'%' IDENTIFIED BY '123123';
GRANT ALL PRIVILEGES ON *.* TO 'gunny'@'%' WITH GRANT OPTION;

-- Flush privileges to apply the changes
FLUSH PRIVILEGES;
