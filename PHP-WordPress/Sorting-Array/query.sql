CREATE DATABASE testDB;
CREATE TABLE data (
    user_name VARCHAR(255),
    user_email VARCHAR(255),
    status VARCHAR(255),
    license_key VARCHAR(255)
);

INSERT INTO data (user_name, user_email, status, license_key)
VALUES ('abc1', 'abc1@test.com', 'active', 'license_key1', 'abc2', 'abc2@test.com', 'inactive', 'license_key2', 'abc3', 'abc3@gmail.com', 'disabled', 'license_key3');

SELECT 'abc1', 'abc1@test.com', 'active', 'license_key1'
UNION ALL 
SELECT 'abc2', 'abc2@test.com', 'inactive', 'license_key2'
UNION ALL
SELECT 'abc3', 'abc3@test.com', 'diabled', 'license_key3';

SELECT * FROM data;
