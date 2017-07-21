DROP TABLE IF EXISTS item;
DROP TABLE IF EXISTS profile;


-- create profile entity


create TABLE PROFILE(
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,

	profileName VARCHAR(500) NOT NULL,
	profileEmail VARCHAR(128) NOT NULL
	UNIQUE(profileEmail),

	profileHash CHAR(128) NOT NULL,
	profileSalt CHAR(64) NOT NULL,
	profileJoinDate DATETIME(6) NOT NULL,

-- this officiates the primary key for the entity
	PRIMARY KEY(profileId)
	
);


-- create items entity


CREATE TABLE items(
	itemsId INT UNSIGNED AUTO_INCREMENT NOT NULL,

-- primary key sans auto_inc, to be used for foreign key
	itemsProfileId INT UNSIGNED NOT NULL,
-- create index for foreign key
	INDEX(itemsProfileId),

-- attributes
	itemsPrice DECIMAL(19,4) NOT NULL,
	itemsDes VARCHAR(500) NOT NULL,

-- declare primary key
	PRIMARY KEY(itemsId),
	
-- declare foreign key
	FOREIGN KEY(itemsProfileId) REFERENCES profile(profileId)

);