CREATE DATABASE management;
USE management;

create table companies
(
    id         bigint unsigned auto_increment
        primary key,
    name       varchar(255) not null,
    email      varchar(255) not null,
    phone      varchar(255) not null,
    address    varchar(255) not null,
    deleted_at timestamp null,
    created_at timestamp null,
    updated_at timestamp null
) collate = utf8mb4_unicode_ci;

create table migrations
(
    id        int unsigned auto_increment
        primary key,
    migration varchar(255) not null,
    batch     int          not null
) collate = utf8mb4_unicode_ci;

create table products
(
    id         bigint unsigned auto_increment
        primary key,
    name       varchar(255) not null,
    weight double not null,
    value double not null,
    company_id bigint unsigned not null,
    created_at timestamp null,
    updated_at timestamp null,
    GTIN       varchar(14)  not null,
    constraint GTIN
        unique (GTIN),
    constraint products_company_id_foreign
        foreign key (company_id) references companies (id)
) collate = utf8mb4_unicode_ci;

create table usuarios
(
    id                  bigint unsigned auto_increment
        primary key,
    nome                varchar(255) not null,
    email               varchar(255) not null,
    email_verificado_em timestamp null,
    senha               varchar(255) not null,
    token               varchar(100) null,
    criado_em           timestamp null,
    atualizado_em       timestamp null,
    constraint usuarios_email_unique
        unique (email)
) collate = utf8mb4_unicode_ci;

