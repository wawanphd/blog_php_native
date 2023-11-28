-- auto-generated definition
create table tbl_blog
(
    id       int auto_increment primary key,
    judul    varchar(100) not null,
    isi      varchar(255) not null,
    kategori varchar(50)  not null
);

INSERT INTO db_blog.tbl_blog (id, judul, isi, kategori) VALUES (1, 'test1', 'test1', 'test1');
INSERT INTO db_blog.tbl_blog (id, judul, isi, kategori) VALUES (2, 'test2', 'test2', 'test2');
INSERT INTO db_blog.tbl_blog (id, judul, isi, kategori) VALUES (3, 'test3', 'test3', 'test3');


