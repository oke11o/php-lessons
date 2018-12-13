CREATE TABLE `gallery`
(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'type of images',
	`name` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'name of image',
	`src` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'relative path for gallery images',
	`views` INT(11) NOT NULL DEFAULT '0' COMMENT 'number of views of image',
  `description` TEXT NOT NULL COMMENT 'short description of the product',
  `details` TEXT NOT NULL COMMENT 'description of the product',
  `price` FLOAT(11) NOT NULL DEFAULT '0' COMMENT 'price of the product',
  `productID` INT(11) NOT NULL DEFAULT '0',
  `link` VARCHAR(256) NOT NULL DEFAULT '',
  PRIMARY KEY(`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

INSERT INTO gallery (type, name, src, productID)
VALUES
  ('house1', 'House 1 preview 1', 'img/gallery/house-01-preview-01.jpg', '1114095'),
  ('house1', 'House 1 preview 2', 'img/gallery/house-01-preview-02.jpg', '1114095'),
  ('house1', 'House 1 preview 3', 'img/gallery/house-01-preview-03.jpg', '1114095'),
  ('house1', 'House 1 preview 4', 'img/gallery/house-01-preview-04.jpg', '1114095'),
  ('house1', 'House 1 preview 5', 'img/gallery/house-01-preview-05.jpg', '1114095'),
  ('house1', 'House 1 preview 6', 'img/gallery/house-01-preview-06.jpg', '1114095'),
  ('house1', 'House 1 constructions%nbsp;1', 'img/gallery/house-01-const-01.jpg', '1114095'),
  ('house1', 'House 1 constructions%nbsp;2', 'img/gallery/house-01-const-02.jpg', '1114095'),
  ('house1', 'House 1 constructions%nbsp;3', 'img/gallery/house-01-const-03.jpg', '1114095'),
  ('house1', 'House 1 constructions%nbsp;4', 'img/gallery/house-01-const-04.jpg', '1114095');

INSERT INTO gallery (type, name, src, price, productID, link)
VALUES
  ('house1 preview', 'House type 1', 'img/gallery/house-01-const-05.jpg', '98.99', '1114095', 'https://www.turbosquid.com/3d-models/3d-model-house-constructions/1114095');

INSERT INTO gallery (type, name, src, productID)
VALUES
  ('house2', 'House 2 preview 1', 'img/gallery/house-02-preview-01.jpg', '1198921'),
  ('house2', 'House 2 preview 2', 'img/gallery/house-02-preview-02.jpg', '1198921'),
  ('house2', 'House 2 preview 3', 'img/gallery/house-02-preview-03.jpg', '1198921'),
  ('house2', 'House 2 preview 4', 'img/gallery/house-02-preview-04.jpg', '1198921'),
  ('house2', 'House 2 preview 5', 'img/gallery/house-02-preview-05.jpg', '1198921'),
  ('house2', 'House 2 preview 6', 'img/gallery/house-02-preview-06.jpg', '1198921'),
  ('house2', 'House 2 preview 7', 'img/gallery/house-02-preview-07.jpg', '1198921'),
  ('house2', 'House 2 preview 8', 'img/gallery/house-02-preview-08.jpg', '1198921'),
  ('house2', 'House 2 preview 9', 'img/gallery/house-02-preview-09.jpg', '1198921'),
  ('house2', 'House 2 preview 10', 'img/gallery/house-02-preview-10.jpg', '1198921'),
  ('house2', 'House 2 constructions%nbsp;1', 'img/gallery/house-02-const-04.jpg', '1198921'),
  ('house2', 'House 2 constructions%nbsp;2', 'img/gallery/house-02-const-03.jpg', '1198921'),
  ('house2', 'House 2 constructions%nbsp;3', 'img/gallery/house-02-const-02.jpg', '1198921'),
  ('house2', 'House 2 constructions%nbsp;4', 'img/gallery/house-02-const-01.jpg', '1198921');

INSERT INTO gallery (type, name, src, price, productID, link)
VALUES
  ('house2 preview', 'House type 2', 'img/gallery/house-02-const-05.jpg', '98.99', '1198921', 'https://www.turbosquid.com/3d-models/house-country-3d-model-1198921');

-- ALTER TABLE `gallery` ADD `details` TEXT NOT NULL COMMENT 'description of the product' AFTER `description`;

-- UPDATE `lesson_05` SET `name` = 'House 1 constructions&nbsp;1' WHERE `lesson_05`.`id` = 8;

-- UPDATE `gallery` SET `productID` = '1114095' WHERE `type` LIKE 'house1%';
-- UPDATE `gallery` SET `productID` = '1198921' WHERE `type` LIKE 'house2%';

-- UPDATE `gallery` SET `link` = 'https://www.turbosquid.com/3d-models/3d-model-house-constructions/1114095' WHERE `type` LIKE 'house1 preview';
-- UPDATE `gallery` SET `link` = 'https://www.turbosquid.com/3d-models/house-country-3d-model-1198921' WHERE `type` LIKE 'house2 preview';