-- reset --
-- must drop in reverse order --
SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS storeItems;
DROP TABLE IF EXISTS userProfile;


-- create profile entity --

CREATE TABLE userProfile(
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	name VARCHAR(500) NOT NULL,
	email VARCHAR (128) NOT NULL,
	UNIQUE(email)
		hash CHAR(128) NOT NULL,
	salt CHAR(64) NOT NULL,
	joinDate DATETIME(6) NOT NULL,
	-- declare primary key --
	PRIMARY KEY(profileId)
);


-- create items entity --

CREATE TABLE storeItems(
	itemId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	-- primary key sans auto_inc, used for foreign key --
	itemProfileId INT UNSIGNED NOT NULL,
	-- attributes --
	price DECIMAL(19,4) NOT NULL,
	itemDes VARCHAR(500) NOT NULL,
	tags INT UNSIGNED NOT NULL,
	-- create index for foreign key --
	INDEX(itemProfileId)
		-- declare foreign key --
		FOREIGN KEY(itemProfileId) REFERENCES profile(profileId)
	-- declare primary key --
	PRIMARY KEY(itemId)
);

SET FOREIGN_KEY_CHECKS=1;

