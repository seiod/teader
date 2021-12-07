/*
TEADER DATABASE v1.0
Author: José Antonio Ramírez
*/

CREATE DATABASE IF NOT EXISTS teaderdb;

USE teaderdb;

CREATE TABLE IF NOT EXISTS books(
    id          int(255) not null auto_increment,
    title       varchar(255) not null,
    author      varchar(255) not null,
    editorial   varchar(255),
    price       varchar(255),
    vat         varchar(255),
    created_at  datetime,
    updated_at  datetime,
    CONSTRAINT pk_book_id PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS users(
    id              int(255) not null auto_increment,
    name            varchar(255) not null,
    surname         varchar(255) not null,
    email           varchar(255) not null,
    password        varchar(255) not null,
    image           varchar(255),
    date_birth      datetime not null,
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_user_id PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS take_book(
    id              int(255) not null auto_increment,
    user_id         int(255) not null,
    book_id         int(255) not null,
    reference       varchar(255) not null,
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_take_book_id PRIMARY KEY(id),
    CONSTRAINT fk_user_id_take_book FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_book_id_take_book FOREIGN KEY(book_id) REFERENCES books(id),
    CONSTRAINT uq_take_book_reference UNIQUE(reference)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS reviews(
    id              int(255) not null auto_increment,
    take_book_id    int(255) not null,
    description     varchar(255),
    calification    int(100) not null,
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_reviews_id PRIMARY KEY(id),
    CONSTRAINT fk_take_book_id_reviews FOREIGN KEY(take_book_id) REFERENCES take_book(id)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS notes(
    id              int(255) not null auto_increment,
    user_id         int(255) not null,
    title           varchar(255),
    description     varchar(255),
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_note_id PRIMARY KEY(id),
    CONSTRAINT fk_user_id_note FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS orders(
    id                      int(255) not null auto_increment,
    user_id                 int(255) not null,
    take_book_reference     varchar(255) not null,
    cost                    varchar(255) not null,
    vat                     varchar(255) not null,
    status                  varchar(255) not null,
    created_at              datetime,
    updated_at              datetime,
    CONSTRAINT pk_order_id PRIMARY KEY(id),
    CONSTRAINT fk_user_id_order FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS bills(
    id                      int(255) not null auto_increment,
    order_id                int(255) not null,
    reference               varchar(255) not null,
    bank                    varchar(255),
    amount                  varchar(255) not null,
    status                  varchar(255),
    created_at              datetime,
    updated_at              datetime,
    CONSTRAINT pk_bill_id PRIMARY KEY(id),
    CONSTRAINT fk_order_id_bill FOREIGN KEY(order_id) REFERENCES orders(id),
    CONSTRAINT uq_bill_reference UNIQUE(reference)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS thinks(
    id                  int(255) not null auto_increment,
    title               varchar(255) not null,
    think               varchar(255) not null,
    author              varchar(255),
    created_at          datetime,
    updated_at          datetime,
    CONSTRAINT pk_think_id PRIMARY KEY(id)
)ENGINE=InnoDb;