CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT '',
  `email` varchar(100) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `status` smallint(10) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `passowrd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
INSERT INTO `user` (`id`, `username`, `password_hash`, `password_reset_token`, `email`, `auth_key`, `status`, `created_at`, `updated_at`, `role`, `passowrd`)
VALUES
	(1, 'will', '$2y$13$J1R9vCNcvrohbzO6DTS9UOoNykFPdqtxW2rENyLK0zSuEbhG.iSry', '', 'lishuzu@gmail.com', 'yvdQkJEaDGsrjE7loiszKxQN8di0-t2B', 10, 1525053642, 1525053642, 0, NULL);

