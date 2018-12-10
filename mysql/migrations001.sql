CREATE TABLE `geekbrains` . `lesson_05`
(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'type of images',
	`name` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'name of image',
	`src` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'relative path for gallery images',
	`views` INT(11) NOT NULL DEFAULT '0' COMMENT 'number of views of image',
  `description` TEXT NOT NULL COMMENT 'description of the image',
  PRIMARY KEY(`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

INSERT INTO lesson_05 (type, name, src)
VALUES
  ('house1', 'House 1 preview 1', 'img/gallery/house-01-preview-01.jpg'),
  ('house1', 'House 1 preview 2', 'img/gallery/house-01-preview-02.jpg'),
  ('house1', 'House 1 preview 3', 'img/gallery/house-01-preview-03.jpg'),
  ('house1', 'House 1 preview 4', 'img/gallery/house-01-preview-04.jpg'),
  ('house1', 'House 1 preview 5', 'img/gallery/house-01-preview-05.jpg'),
  ('house1', 'House 1 preview 6', 'img/gallery/house-01-preview-06.jpg'),
  ('house1', 'House 1 preview 7', 'img/gallery/house-01-preview-07.jpg'),
  ('house1', 'House 1 constructions%nbsp;1', 'img/gallery/house-01-const-01.jpg'),
  ('house1', 'House 1 constructions%nbsp;2', 'img/gallery/house-01-const-02.jpg'),
  ('house1', 'House 1 constructions%nbsp;3', 'img/gallery/house-01-const-03.jpg'),
  ('house1', 'House 1 constructions%nbsp;4', 'img/gallery/house-01-const-04.jpg'),
  ('house1', 'House 1 constructions%nbsp;5', 'img/gallery/house-01-const-05.jpg');

INSERT INTO lesson_05 (type, name, src)
VALUES
  ('house2', 'House 2 preview 1', 'img/gallery/house-02-preview-01.jpg'),
  ('house2', 'House 2 preview 2', 'img/gallery/house-02-preview-02.jpg'),
  ('house2', 'House 2 preview 3', 'img/gallery/house-02-preview-03.jpg'),
  ('house2', 'House 2 preview 4', 'img/gallery/house-02-preview-04.jpg'),
  ('house2', 'House 2 preview 5', 'img/gallery/house-02-preview-05.jpg'),
  ('house2', 'House 2 preview 6', 'img/gallery/house-02-preview-06.jpg'),
  ('house2', 'House 2 preview 7', 'img/gallery/house-02-preview-07.jpg'),
  ('house2', 'House 2 preview 8', 'img/gallery/house-02-preview-08.jpg'),
  ('house2', 'House 2 preview 9', 'img/gallery/house-02-preview-09.jpg'),
  ('house2', 'House 2 preview 10', 'img/gallery/house-02-preview-10.jpg'),
  ('house2', 'House 2 constructions%nbsp;1', 'img/gallery/house-02-const-04.jpg'),
  ('house2', 'House 2 constructions%nbsp;2', 'img/gallery/house-02-const-03.jpg'),
  ('house2', 'House 2 constructions%nbsp;3', 'img/gallery/house-02-const-02.jpg'),
  ('house2', 'House 2 constructions%nbsp;4', 'img/gallery/house-02-const-01.jpg'),
  ('house2', 'House 2 constructions%nbsp;5', 'img/gallery/house-02-const-05.jpg');

-- UPDATE `lesson_05` SET `name` = 'House 1 constructions&nbsp;1' WHERE `lesson_05`.`id` = 8;