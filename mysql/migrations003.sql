CREATE TABLE `geekbrains` . `feedbacks`
(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'author name',
  `email` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'author email adress';
  `comment` TEXT NOT NULL COMMENT '',
  `date` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'date of post',
  `time` VARCHAR(256) NOT NULL DEFAULT '' COMMENT 'time of post',
  PRIMARY KEY(`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

INSERT INTO feedbacks (name, email, comment, date, time)
VALUES
  ('Vasya', 'mail@mail.ru', 'texttexttext', 'today', 'now'),
  ('Mike', 'mike@mail.ru', 'lorem ipsum', '2018-12-11', '14:33'),
  ('Mike', 'mike@mail.ru', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo perspiciatis accusamus dolore suscipit officiis? Tempore dicta maiores voluptatibus nisi odio.', '2018-12-11', '14:35'),
  ('Niko', 'niko@mail.ru', 'Porro voluptas sed laboriosam vitae eligendi ducimus aspernatur exercitationem. Alias, ducimus consequatur quos earum quidem explicabo rerum fuga deserunt repudiandae.', '2018-12-11', '14:37'),
  ('Мария', 'maria@mail.ru', 'Doloribus inventore distinctio nobis eaque, ipsam explicabo dolorem aperiam similique? Nobis reiciendis voluptatum fuga ducimus error quam non consequatur perspiciatis.', '2018-12-11', '14:39'),
  ('Jimmy', 'jimmy@mail.ru', 'okay, Jimmy', '2018-12-11', '14:41'),
  ('Вася', 'vasya@mail.ru', 'Но консультация с широким активом однозначно фиксирует необходимость укрепления моральных ценностей. Значимость этих проблем настолько очевидна, что базовый вектор развития не оставляет шанса для прогресса профессионального сообщества.', '2018-12-11', '14:45'),
  ('Brian Johnson', 'bj@acdc.au', 'For those about to rock, we salute you!', '2018-12-11', '15:17');