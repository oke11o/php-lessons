CREATE TABLE `geekbrains` . `feedbacks`
(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'author name',
  `comment` TEXT NOT NULL COMMENT '',
  `date` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'date of post',
  `time` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'time of post',
  PRIMARY KEY(`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;