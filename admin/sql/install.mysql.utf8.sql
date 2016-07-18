DROP TABLE IF EXISTS `npdvc_plants`;

CREATE TABLE `npdvc_plants` (
	`id`					INT(11)     NOT NULL AUTO_INCREMENT,
	`short_name`			TEXT NOT NULL,
	`description`			TEXT NOT NULL,
	`company_name`			TEXT NOT NULL,
	`address_line1`			TEXT NOT NULL,
	`address_line2`			TEXT NOT NULL,
	`postcode_city`			TEXT NOT NULL,
	`country`				TEXT NOT NULL,
	`tel`					TEXT NOT NULL,
	`fax`					TEXT NOT NULL,
	`email`					TEXT NOT NULL,
	`images`				TEXT NOT NULL,
	`quality_certificate`	TEXT NOT NULL,
	`quality_certificates`	TEXT NOT NULL,
	`address`				TEXT NOT NULL,
	`maps`					TEXT NOT NULL,
	`published` 			tinyint(4) NOT NULL,
	`created`				DATETIME NOT NULL,
	`created_by`			INT(10) NOT NULL,
	`modified`				DATETIME,
	`modified_by`			INT(10),
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
/*
INSERT INTO `#__plants` (`greeting`) VALUES
('Hello World!'),
('Good bye World!');
*/
