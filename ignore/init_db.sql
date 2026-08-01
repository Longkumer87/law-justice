CREATE TABLE `users` ( 
  `user_id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `user_name` VARCHAR(250) NOT NULL,
  `user_password` VARCHAR(250) NOT NULL,
  `user_full_name` VARCHAR(250) NOT NULL,
  `user_email` VARCHAR(250) NOT NULL,
  `user_phone` VARCHAR(15) NOT NULL,
  `user_dept` INT UNSIGNED NOT NULL DEFAULT 0 ,
  `user_role` INT UNSIGNED NOT NULL DEFAULT 0 ,
  `user_dist` INT UNSIGNED NOT NULL DEFAULT 0 ,
  `user_delete` INT UNSIGNED NOT NULL DEFAULT 0 ,
  `user_regis` DATETIME NOT NULL,
   PRIMARY KEY (`user_id`)
)
ENGINE = InnoDB;

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_full_name`, `user_email`, `user_phone`, `user_dept`, `user_role`, `user_dist`, `user_delete`, `user_regis`) VALUES (1, 'admin','91756c7a1de263c09700a5d4c4d1d8c81fc38ab1', 'Administrator', 'admin@gmail.com', '8974248778', 0, 1, 0, 0, '2026-07-28 00:00:00');


CREATE TABLE `districts` ( 
  `dist_id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `dist_name` VARCHAR(250) NOT NULL,
  `dist_name_short` VARCHAR(8) NULL DEFAULT NULL ,
   PRIMARY KEY (`dist_id`)
)
ENGINE = InnoDB;

CREATE TABLE `departments` ( 
  `dept_id` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `dept_name` VARCHAR(512) NOT NULL,
  `dept_name_short` VARCHAR(250) NULL DEFAULT NULL ,
  `dept_created` DATE NULL DEFAULT NULL ,
   PRIMARY KEY (`dept_id`)
)
ENGINE = InnoDB;

