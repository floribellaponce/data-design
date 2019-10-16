-- these statements will drop the tables from database and re-add them in child to parent order.
drop table if exists `comment`;
drop table if exists dog;
drop table if exists `user`;

-- creating new table called `user`.
create table `user`(
	userId BINARY(16) not null,
	userName VARCHAR(128) not null,
	userHash CHAR(97) not null,
	userAddress VARCHAR(100) not null,
	userPhoneNumber VARCHAR(15),
	userEmail VARCHAR(255) not null,
	unique(userId),
	-- making attribute unique to ensure emails does not duplicate.
	unique(userEmail),
	-- this officiates the primary key for this table.
	primary key(userId)
);

-- creating new table called dog.
create table dog(
	dogId BINARY(16) not null,
	dogName VARCHAR(50) not null,
	dogBreed VARCHAR(20),
	dogColor VARCHAR(5),
	dogSize VARCHAR(6),
	dogAge INT(2),
	dogImage VARCHAR(255) not null,
	dogExtraComments VARCHAR(255),
	dogUserId BINARY(16) not null,
	unique(dogId),
	index(dogName),
	-- this is the index for the foreign key to improve join performance between tables.
	index(dogUserId),
	-- this creates the foreign relationship with other tables.
	foreign key(dogUserId) references `user`(userId),
	-- this officiates the primary key for this table.
	primary key(dogId)
);

-- creating new table called `comment`.
create table `comment` (
	commentId BINARY (16) not null,
	commentUserId BINARY (16) not null,
	commentDogId BINARY (16) not null,
	commentContent VARCHAR(255),
	-- these are the indexes for the foreign keys to improve join performance between tables.
	index(commentUserId),
	index(commentDogId),
	-- this creates the foreign relationship with other tables.
	foreign key(commentUserId) references `user`(userId),
	foreign key(commentDogId) references dog(dogId),
	-- this officiates the primary key for this table.
	primary key(commentId)
);