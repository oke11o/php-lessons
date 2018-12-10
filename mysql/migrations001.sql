CREATE TABLE `geekbrains` . `lesson_05`
(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'name of image',
	`src` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'relative path for gallery images',
	`views` INT(11) NOT NULL DEFAULT '0' COMMENT 'number of views of image',
  `description` TEXT NOT NULL COMMENT 'description of the image',
  PRIMARY KEY(`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

INSERT INTO lesson_05 (name, src)
VALUES
  ('House 1 preview 1', 'img/gallery/house-01-preview-01.jpg'),
  ('House 1 preview 2', 'img/gallery/house-01-preview-02.jpg'),
  ('House 1 preview 3', 'img/gallery/house-01-preview-03.jpg'),
  ('House 1 preview 4', 'img/gallery/house-01-preview-04.jpg'),
  ('House 1 preview 5', 'img/gallery/house-01-preview-05.jpg'),
  ('House 1 preview 6', 'img/gallery/house-01-preview-06.jpg'),
  ('House 1 preview 7', 'img/gallery/house-01-preview-07.jpg'),
  ('House 1 constructions%nbsp;1', 'img/gallery/house-01-const-01.jpg'),
  ('House 1 constructions%nbsp;2', 'img/gallery/house-01-const-02.jpg'),
  ('House 1 constructions%nbsp;3', 'img/gallery/house-01-const-03.jpg'),
  ('House 1 constructions%nbsp;4', 'img/gallery/house-01-const-04.jpg'),
  ('House 1 constructions%nbsp;5', 'img/gallery/house-01-const-05.jpg');

INSERT INTO lesson_05 (name, src)
VALUES
  ('House 2 preview 1', 'img/gallery/house-02-preview-01.jpg'),
  ('House 2 preview 2', 'img/gallery/house-02-preview-02.jpg'),
  ('House 2 preview 3', 'img/gallery/house-02-preview-03.jpg'),
  ('House 2 preview 4', 'img/gallery/house-02-preview-04.jpg'),
  ('House 2 preview 5', 'img/gallery/house-02-preview-05.jpg'),
  ('House 2 preview 6', 'img/gallery/house-02-preview-06.jpg'),
  ('House 2 preview 7', 'img/gallery/house-02-preview-07.jpg'),
  ('House 2 preview 8', 'img/gallery/house-02-preview-08.jpg'),
  ('House 2 preview 9', 'img/gallery/house-02-preview-09.jpg'),
  ('House 2 preview 10', 'img/gallery/house-02-preview-10.jpg'),
  ('House 2 constructions%nbsp;1', 'img/gallery/house-02-const-04.jpg'),
  ('House 2 constructions%nbsp;2', 'img/gallery/house-02-const-03.jpg'),
  ('House 2 constructions%nbsp;3', 'img/gallery/house-02-const-02.jpg'),
  ('House 2 constructions%nbsp;4', 'img/gallery/house-02-const-01.jpg'),
  ('House 2 constructions%nbsp;5', 'img/gallery/house-02-const-05.jpg');

-- UPDATE `lesson_05` SET `name` = 'House 1 constructions&nbsp;1' WHERE `lesson_05`.`id` = 8;
-- UPDATE `lesson_05` SET `name` = 'House 1 constructions&nbsp;2' WHERE `lesson_05`.`id` = 9;
-- UPDATE `lesson_05` SET `name` = 'House 1 constructions&nbsp;3' WHERE `lesson_05`.`id` = 10;
-- UPDATE `lesson_05` SET `name` = 'House 1 constructions&nbsp;4' WHERE `lesson_05`.`id` = 11;
-- UPDATE `lesson_05` SET `name` = 'House 1 constructions&nbsp;5' WHERE `lesson_05`.`id` = 12;

-- UPDATE `lesson_05` SET `name` = 'House 2 constructions&nbsp;1' WHERE `lesson_05`.`id` = 24;
-- UPDATE `lesson_05` SET `name` = 'House 2 constructions&nbsp;2' WHERE `lesson_05`.`id` = 25;
-- UPDATE `lesson_05` SET `name` = 'House 2 constructions&nbsp;3' WHERE `lesson_05`.`id` = 26;
-- UPDATE `lesson_05` SET `name` = 'House 2 constructions&nbsp;4' WHERE `lesson_05`.`id` = 27;
-- UPDATE `lesson_05` SET `name` = 'House 2 constructions&nbsp;5' WHERE `lesson_05`.`id` = 28;