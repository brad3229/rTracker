CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;