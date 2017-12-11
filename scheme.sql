DROP DATABASE IF EXISTS laracasts_pdo;

CREATE DATABASE laracasts_pdo;

USE laracasts_pdo;

CREATE TABLE `tasks` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `description` TEXT NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0
);