DROP TABLE IF EXISTS item;
DROP TABLE IF EXISTS profile;


-- create profile entity
	CREATE TABLE profile(
		profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
		profileName VARCHAR(500) NOT NULL,
		profileEmail VARCHAR(128) NOT NULL,
		profileHash CHAR(128) NOT NULL,
		profileSalt CHAR(64) NOT NULL,
		profileJoinDate DATETIME(6) NOT NULL,
-- this officiates the primary key for the entity
		UNIQUE (profileEmail),
		PRIMARY KEY(profileId)
		);

-- create items entity
	CREATE TABLE items(
		itemId INT UNSIGNED AUTO_INCREMENT NOT NULL,
-- primary key sans auto_inc, to be used for foreign key
		itemProfileId INT UNSIGNED NOT NULL,
-- create index for foreign key
		INDEX(itemProfileId),
-- attributes
		itemName VARCHAR(128) NOT NULL,
		itemPrice DECIMAL(19,4) NOT NULL,
		itemDes VARCHAR(500) NOT NULL,
-- declare foreign key
		FOREIGN KEY(itemProfileId) REFERENCES profile(profileId),
-- declare primary key
		PRIMARY KEY(itemId)
		);