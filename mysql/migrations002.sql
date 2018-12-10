CREATE TABLE `geekbrains` . `visites`
(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
  `page` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'type of page',
  `views` INT(11) NOT NULL DEFAULT '0' COMMENT 'number of visites of the page',
  PRIMARY KEY(`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

INSERT INTO visites (page)
VALUES
  ('main'),
  ('gallery 1'),
  ('gallery 2'),
  ('contacts'),
  ('feedback');