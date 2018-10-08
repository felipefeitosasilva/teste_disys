CREATE TABLE `usuarios_dev` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`usuario_nome` VARCHAR(50) NULL DEFAULT '0',
	`usuario_email` VARCHAR(50) NULL DEFAULT '0',
	`senha` VARCHAR(50) NULL DEFAULT '0',
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=5
;
