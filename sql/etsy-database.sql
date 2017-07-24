	DROP TABLE IF EXISTS items;
	DROP TABLE IF EXISTS profile;


--  create profile entity
	CREATETABLE profile(
		profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
		profileName VARCHAR(500) NOT NULL,
		profileEmail VARCHAR(128) NOT NULL UNIQUE (profileEmail),
		profileHash CHAR(128) NOT NULL,
		profileSalt CHAR(64) NOT NULL,
		profileJoinDate DATETIME(6) NOT NULL,

-- this officiates the primary key for the entity
		PRIMARY (profileId)

);


-- create items entity
	CREATETABLE items(
		itemId INT UNSIGNED AUTO_INCREMENT NOT NULL,
-- primary key sans auto_inc, to be used for foreign key
		itemProfileId INT UNSIGNED NOT NULL,
-- create index for foreign key
		INDEX(itemProfileId),
-- attributes
		itemPrice DECIMAL(19,4) NOT NULL,
		itemDes VARCHAR(500) NOT NULL,
-- declare primary key
		PRIMARY (itemId),
-- declare foreign key
		FOREIGN (itemProfileId) REFERENCES profile(profileId)

);