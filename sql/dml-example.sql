-- creating new userProfiles --


INSERT INTO profile(name, email, hash, salt, joinDate)
VALUES('abc', 'abc@mail.com', 'pwh', 'pws', 'NOW()');

INSERT INTO profile(name, email, hash, salt, joinDate)
VALUES('def', 'def@mail.com', 'pwh', 'pws', 'NOW()');

INSERT INTO profile(name, email, hash, salt, joinDate)
VALUES('ghi', 'ghi@mail.com', 'pwh', 'pws', 'NOW()');

INSERT INTO profile(name, email, hash, salt, joinDate)
VALUES('jkl', 'jkl@mail.com', 'pwh', 'pws', 'NOW()');

-- use primary key to relate profile and item tables --


SELECT profileId FROM profile;


-- creating the users storeItems --


INSERT INTO storeItems(itemProfileId, price, itemDes, tags)
VALUES(1, price, 'item description', tags);

INSERT INTO item(itemProfileId, itemInfo, itemDate)
VALUES(2, price, 'item description', tags);

INSERT INTO item(itemProfileId, itemInfo, itemDate)
VALUES(3, price, 'item description', tags);

INSERT INTO item(itemProfileId, itemInfo, itemDate)
VALUES(4, price, 'item description', tags);


-- delete a users bloody profile --


DELETE profile

