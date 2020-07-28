CREATE DATABASE future
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE future;

CREATE TABLE comments
(
  id      int AUTO_INCREMENT PRIMARY KEY,
  name    VARCHAR(128) NOT NULL,
  comment TEXT,
  date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create index future_name_index
  on comments (name);
create index future_date_index
  on comments (date);






