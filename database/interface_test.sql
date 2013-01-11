SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

#createa base url table
DROP TABLE IF EXISTS `DB_BASE_URL`;
CREATE TABLE `DB_BASE_URL`(
	`ID` INTEGER NOT NULL,
	`URL` VARCHAR(255),
	`DESC` VARCHAR(255),
	PRIMARY KEY (`ID`)
);

#create interface table
DROP TABLE IF EXISTS `DB_INTERFACE`;
CREATE TABLE `DB_INTERFACE`(
	`ID` INTEGER NOT NULL,
	`NAME` VARCHAR(255),
	`DESC` VARCHAR(255),
	PRIMARY KEY (`ID`)
);

#create interface common parameters or headers
DROP TABLE IF EXISTS `DB_COMMON_PRAMETERS`;
CREATE TABLE `DB_COMMON_PRAMETERS`(
	`ID` INTEGER NOT NULL,
	`NAME` VARCHAR(255),
	`VALUE` VARCHAR(255),
	`DESC` VARCHAR(255),
	PRIMARY KEY (`ID`)
);

#create interface extention table
DROP TABLE IF EXISTS `DB_INTERFACE_EXTENTION`;
CREATE TABLE `DB_INTERFACE_EXTENTION`(
	`INT_ID` INTEGER NOT NULL,
	`EXT_NAME` VARCHAR(255),
	`EXT_TYPE` VARCHAR(255),
	`EXT_VALUE` VARCHAR(255),
	`DESC` VARCHAR(255)
);

SET FOREIGN_KEY_CHECKS = 1;