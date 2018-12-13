CREATE TABLE `users`
(
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(256) NOT NULL DEFAULT '',
  `email` VARCHAR(256) NOT NULL DEFAULT '',
  `name` VARCHAR(256) NOT NULL DEFAULT '',
  `password_hash` VARCHAR(256) NULL,
  `token` VARCHAR(256) NULL,
  `last_action_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login` (`login`),
  UNIQUE INDEX `email` (`email`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

-- ALTER TABLE `users` ADD `login` VARCHAR(256) NOT NULL AFTER `id`;
-- ALTER TABLE `users` ADD UNIQUE INDEX( `login`);
-- ALTER TABLE `users` ADD `name` VARCHAR(256) NOT NULL AFTER `email`;

INSERT INTO `users` (login, email, name, password_hash)
VALUES
  ('admin', 'admin@site.ru', 'master', '$argon2i$v=19$m=1024,t=2,p=2$TDY4NThWNkp3REVkLjNtOA$FqD2sLlB3HLFvxNLTxZNVkt3XE+5r+S4zmeiI+sf3es');

-- $argon2i$v=19$m=1024,t=2,p=2$TDY4NThWNkp3REVkLjNtOA$FqD2sLlB3HLFvxNLTxZNVkt3XE+5r+S4zmeiI+sf3es -- 'admin'