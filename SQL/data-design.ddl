drop table if exists `comment`;
drop table if exists dog;
drop table if exists `user`;

create table `user`(
	userId BINARY(16) not null,
	userName VARCHAR(128) not null,
	userHash CHAR(97) not null,
	userAddress VARCHAR(100) not null,
	userPhoneNumber VARCHAR(15),
	userEmail VARCHAR(255) not null,
	unique(userId),
	unique(userEmail),
	primary key(userId)
);

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
	index(dogUserId),
	foreign key(dogUserId) references `user`(userId),
	primary key(dogId)
);

create table `comment` (
	commentId BINARY (16) not null,
	commentUserId BINARY (16) not null,
	commentDogId BINARY (16) not null,
	commentContent VARCHAR(255),
	index(commentUserId),
	index(commentDogId),
	foreign key(commentUserId) references `user`(userId),
	foreign key(commentDogId) references dog(dogId),
	primary key(commentId)
);