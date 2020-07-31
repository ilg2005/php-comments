CREATE DATABASE chimmed
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE chimmed;

CREATE TABLE orders
(
    id      int AUTO_INCREMENT PRIMARY KEY,
    name    VARCHAR(128) NOT NULL,
    tel     VARCHAR(25),
    email   VARCHAR(128) NOT NULL,
    comment TEXT,
    date    TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create index chimmed_name_index
    on orders (name);
create index chimmed_tel_index
    on orders (tel);
create index chimmed_email_index
    on orders (email);
create index chimmed_date_index
    on orders (date);






