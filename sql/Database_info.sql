-------database creation---------
CREATE DATABASE music_application;
use music_application;

-------structure for admin table-------
CREATE table admin(
	id int NOT null AUTO_INCREMENT,
    admin_name varchar(255),
    admin_password varchar(255),
    created_at timestamp,
    updated_at timestamp,
    
    primary key(id)
);

-------structure for users table-------
    CREATE TABLE users(
	id int not null AUTO_INCREMENT,
    user_name varchar(255),
    password varchar(255),
    is_admin int not null,
    is_premium int not null,
    created_at timestamp,
    updated_at timestamp,
    
    primary key (id)
);

----------structure for artist table -----------
CREATE table artist_table(
    id int not null AUTO_INCREMENT,
    name varchar(255),
    admin_id int not null,
    image_path varchar(255),
    created_at timestamp,
    updated_at timestamp,
    
    PRIMARY KEY(id),
    FOREIGN key(admin_id) REFERENCES users(id),
);
---------structure for songs table -----------
CREATE table songs_table(
    id int not null AUTO_INCREMENT,
    name varchar(255),
    admin_id int not null,
    artist_id int,
    song_path varchar(255),
    image_path varchar(255),
    created_at timestamp,
    updated_at timestamp,
  
    PRIMARY KEY(id),
       FOREIGN key(artist_id) REFERENCES artist_table(id),
    FOREIGN key(admin_id) REFERENCES users(id),
);


