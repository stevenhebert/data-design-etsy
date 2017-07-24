-- creating new userProfiles --
INSERT INTO profile (profileName, profileEmail, profileHash, profileSalt, ProfileJoinDate)
VALUES('abc', 'abc@mail.com', 'pwh', 'pws', 'NOW()');

INSERT INTO profile (profileName, profileEmail, profileHash, profileSalt, ProfileJoinDate)
VALUES('def', 'def@mail.com', 'pwh', 'pws', 'NOW()');

INSERT INTO profile (profileName, profileEmail, profileHash, profileSalt, ProfileJoinDate)
VALUES('ghi', 'ghi@mail.com', 'pwh', 'pws', 'NOW()');

INSERT INTO profile (profileName, profileEmail, profileHash, profileSalt, ProfileJoinDate)
VALUES('jkl', 'jkl@mail.com', 'pwh', 'pws', 'NOW()');


-- use primary key to relate profile and item tables --
SELECT profileId FROM profile;


-- creating the users storeItems --
INSERT INTO items (itemProfileId, itemPrice, itemDes)
VALUES(1, itemPrice, 'item description');

INSERT INTO items (itemProfileId, itemPrice, itemDes)
VALUES(2, itemPrice, 'item description');

INSERT INTO items (itemProfileId, itemPrice, itemDes)
VALUES(3, itemPrice, 'item description');

INSERT INTO items (itemProfileId, itemPrice, itemDes)
VALUES(4, itemPrice, 'item description');


-- delete a users bloody profile --



