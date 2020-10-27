-- CREATE DATABASE php_project;
USE php_project;

drop table if exists post_tag;
drop table if exists log_in;
drop table if exists posts;
drop table if exists tags;
drop table if exists users_info;
drop table if exists comments;

create table if not exists users_info
(
	user_id 	int		 		not null 	auto_increment primary key,
    first_name	varchar(30)		not null,		
    last_name	varchar(30)		not null,
    gender		varchar(10)		not null,
    birthday	date			not null,
    email		varchar(30)		not null	unique,
    phone		varchar(30)		not null	unique,
    address		varchar(100)	not null,  
    job			varchar(50)		not null,
    avatar_url	varchar(1000)	not null,
    no_posts	int				default 0,
    no_followers int			default 0,
    no_likes	int				default 0
);

create table if not exists log_in
(
	user_id 	int				not null 	primary key,
    username	varchar(100)	not null	unique,
    pass_word		varchar(100)	not null,
    foreign key (user_id) references users_info (user_id)
);

create table if not exists posts
(
	post_id		int		not null 	auto_increment primary key,
    author_id 	int		not null ,
    title		varchar(1000)		not null,
    content		text,
    date_create	date,
    no_likes	int 	default 0,
    no_comments	int		default 0,
    foreign key (author_id) references users_info (user_id)
);

create table if not exists tags
(
	tag_id		int			not null	auto_increment primary key,
    tag_title	varchar(100) not null	unique,
    no_posts	int		default 0
);

create table if not exists post_tag
(
	post_id 	int 	not null,
    tag_id		int		not null,
    primary key (post_id, tag_id),
    foreign key (post_id) references posts(post_id),
    foreign key (tag_id) references tags(tag_id)
);

create table if not exists comments
(
	comment_id	int 	not null	auto_increment	primary key,
    user_id	int		not null,
    post_id	int		not null,
    content	text,
    foreign key (user_id) references users_info (user_id),
    foreign key (post_id) references posts (post_id)
);

