-- creating new userProfiles --
INSERT INTO profile (profileName, profileEmail, profileHash, profileSalt, profileJoinDate)
VALUES('abc', 'abc@mail.com', 'pwh', 'pws', NOW());

INSERT INTO profile (profileName, profileEmail, profileHash, profileSalt, ProfileJoinDate)
VALUES('def', 'def@mail.com', 'pwh', 'pws', NOW());

INSERT INTO profile (profileName, profileEmail, profileHash, profileSalt, ProfileJoinDate)
VALUES('ghi', 'ghi@mail.com', 'pwh', 'pws', NOW());

INSERT INTO profile (profileName, profileEmail, profileHash, profileSalt, ProfileJoinDate)
VALUES('jkl', 'jkl@mail.com', 'pwh', 'pws', NOW());


-- use primary key to relate profile and item tables --
SELECT profileId FROM profile;


-- creating the users storeItems --
INSERT INTO items (itemId, itemName, itemPrice, itemDes, itemProfileId)
VALUES(1, 'thing1', 5, 'item description', 1);

INSERT INTO items (itemId, itemName, itemPrice, itemDes, itemProfileId)
VALUES(2, 'thing2', 10, 'item description', 2);

INSERT INTO items (itemId, itemName, itemPrice, itemDes, itemProfileId)
VALUES(3, 'thing3', 15, 'item description', 3);

INSERT INTO items (itemId, itemName, itemPrice, itemDes, itemProfileId)
VALUES(4, 'thing4', 20, 'item description', 4);


-- delete a users bloody profile --



