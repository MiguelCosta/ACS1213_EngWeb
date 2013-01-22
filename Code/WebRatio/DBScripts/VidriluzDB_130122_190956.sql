-- Group [Group]
create table `group` (
   `oid`  integer  not null,
   `groupname`  varchar(255),
  primary key (`oid`)
);


-- Module [Module]
create table `module` (
   `oid`  integer  not null,
   `moduleid`  varchar(255),
   `modulename`  varchar(255),
  primary key (`oid`)
);


-- User [User]
create table `user` (
   `oid`  integer  not null,
   `username`  varchar(255),
   `password`  varchar(255),
   `email`  varchar(255),
  primary key (`oid`)
);


-- Oramento [ent1]
create table `orcamento` (
   `oid`  integer  not null,
   `serie`  integer,
   `numserie`  integer,
   `data`  date,
   `anexos`  varchar(255),
   `estado`  varchar(255),
   `valortotal`  double precision,
  primary key (`oid`)
);


-- Oramento Linha [ent10]
create table `orcamento_linha` (
   `oid`  integer  not null,
   `descricao`  varchar(255),
   `valor`  double precision,
  primary key (`oid`)
);


-- Produto [ent2]
create table `produto` (
   `oid`  integer  not null,
   `nome`  varchar(255),
   `cor`  varchar(255),
   `padrao`  varchar(255),
   `espessura`  double precision,
   `dimensaomax`  double precision,
   `manufacturas`  varchar(255),
   `caixa`  varchar(255),
   `tipo`  varchar(255),
  primary key (`oid`)
);


-- Encomenda [ent3]
create table `encomenda` (
   `oid`  integer  not null,
   `serie`  integer,
   `numserie`  integer,
   `data`  date,
   `anexos`  varchar(255),
   `estado`  varchar(255),
  primary key (`oid`)
);


-- Promo‹o [ent4]
create table `promocao` (
   `oid`  integer  not null,
   `nome`  varchar(255),
   `descricao`  varchar(255),
   `datainicial`  date,
   `datafinal`  date,
  primary key (`oid`)
);


-- Encomenda Linha [ent5]
create table `encomenda_linha` (
   `oid`  integer  not null,
   `descricao`  varchar(255),
  primary key (`oid`)
);


-- Cliente [ent7]
create table `cliente` (
   `user_oid`  integer  not null,
   `nomecompleto`  varchar(255),
   `telefone`  varchar(255),
   `datanascimento`  date,
   `particular`  bit,
   `empresa`  varchar(255),
   `contacto`  varchar(255),
  primary key (`user_oid`)
);


-- Album [ent8]
create table `album` (
   `oid`  integer  not null,
   `nome`  varchar(255),
   `data`  date,
  primary key (`oid`)
);


-- Fotografia [ent9]
create table `fotografia` (
   `oid`  integer  not null,
  primary key (`oid`)
);


-- Group_DefaultModule [Group2DefaultModule_DefaultModule2Group]
alter table `group`  add column  `module_oid`  integer;
alter table `group`   add index fk_group_module (`module_oid`), add constraint fk_group_module foreign key (`module_oid`) references `module` (`oid`);


-- Group_Module [Group2Module_Module2Group]
create table `group_module` (
   `group_oid`  integer not null,
   `module_oid`  integer not null,
  primary key (`group_oid`, `module_oid`)
);
alter table `group_module`   add index fk_group_module_group (`group_oid`), add constraint fk_group_module_group foreign key (`group_oid`) references `group` (`oid`);
alter table `group_module`   add index fk_group_module_module (`module_oid`), add constraint fk_group_module_module foreign key (`module_oid`) references `module` (`oid`);


-- User_DefaultGroup [User2DefaultGroup_DefaultGroup2User]
alter table `user`  add column  `group_oid`  integer;
alter table `user`   add index fk_user_group (`group_oid`), add constraint fk_user_group foreign key (`group_oid`) references `group` (`oid`);


-- User_Group [User2Group_Group2User]
create table `user_group` (
   `user_oid`  integer not null,
   `group_oid`  integer not null,
  primary key (`user_oid`, `group_oid`)
);
alter table `user_group`   add index fk_user_group_user (`user_oid`), add constraint fk_user_group_user foreign key (`user_oid`) references `user` (`oid`);
alter table `user_group`   add index fk_user_group_group (`group_oid`), add constraint fk_user_group_group foreign key (`group_oid`) references `group` (`oid`);


-- Oramento_Oramento Linha [rel14]
alter table `orcamento_linha`  add column  `orcamento_oid`  integer;
alter table `orcamento_linha`   add index fk_orcamento_linha_orcamento (`orcamento_oid`), add constraint fk_orcamento_linha_orcamento foreign key (`orcamento_oid`) references `orcamento` (`oid`);


-- Produto_Oramento Linha [rel18]
alter table `orcamento_linha`  add column  `produto_oid`  integer;
alter table `orcamento_linha`   add index fk_orcamento_linha_produto (`produto_oid`), add constraint fk_orcamento_linha_produto foreign key (`produto_oid`) references `produto` (`oid`);


-- Encomenda_Encomenda Linha [rel19]
alter table `encomenda_linha`  add column  `encomenda_oid`  integer;
alter table `encomenda_linha`   add index fk_encomenda_linha_encomenda (`encomenda_oid`), add constraint fk_encomenda_linha_encomenda foreign key (`encomenda_oid`) references `encomenda` (`oid`);


-- Album_Fotografia [rel20]
alter table `fotografia`  add column  `album_oid`  integer;
alter table `fotografia`   add index fk_fotografia_album (`album_oid`), add constraint fk_fotografia_album foreign key (`album_oid`) references `album` (`oid`);


-- Produto_Encomenda Linha [rel21]
alter table `encomenda_linha`  add column  `produto_oid`  integer;
alter table `encomenda_linha`   add index fk_encomenda_linha_produto (`produto_oid`), add constraint fk_encomenda_linha_produto foreign key (`produto_oid`) references `produto` (`oid`);


-- User_Encomenda [rel24]
alter table `encomenda`  add column  `user_oid`  integer;
alter table `encomenda`   add index fk_encomenda_user (`user_oid`), add constraint fk_encomenda_user foreign key (`user_oid`) references `user` (`oid`);


-- User_Oramento [rel25]
alter table `orcamento`  add column  `user_oid`  integer;
alter table `orcamento`   add index fk_orcamento_user (`user_oid`), add constraint fk_orcamento_user foreign key (`user_oid`) references `user` (`oid`);


-- Produto_Promo‹o [rel29]
alter table `promocao`  add column  `produto_oid`  integer;
alter table `promocao`   add index fk_promocao_produto (`produto_oid`), add constraint fk_promocao_produto foreign key (`produto_oid`) references `produto` (`oid`);


-- GEN FK: Cliente --> User
alter table `cliente`   add index fk_cliente_user (`user_oid`), add constraint fk_cliente_user foreign key (`user_oid`) references `user` (`oid`);


