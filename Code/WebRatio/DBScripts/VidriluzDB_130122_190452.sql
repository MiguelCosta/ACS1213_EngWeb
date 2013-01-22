-- Orçamento_Orçamento Linha [rel14]
alter table `orcamento_linha`  add column  `orcamento_oid`  integer;
alter table `orcamento_linha`   add index fk_orcamento_linha_orcamento (`orcamento_oid`), add constraint fk_orcamento_linha_orcamento foreign key (`orcamento_oid`) references `orcamento` (`oid`);


-- GEN FK: Cliente --> User
alter table `cliente`   add index fk_cliente_user (`user_oid`), add constraint fk_cliente_user foreign key (`user_oid`) references `user` (`oid`);


-- REL FK: defaultGroups [DefaultModule2Group]
alter table `group`   add index fk_group_module (`module_oid`), add constraint fk_group_module foreign key (`module_oid`) references `module` (`oid`);


-- REL FK: modules [Group2Module]
alter table `group_module`   add index fk_group_module_group (`group_oid`), add constraint fk_group_module_group foreign key (`group_oid`) references `group` (`oid`);


-- REL FK: groups [Module2Group]
alter table `group_module`   add index fk_group_module_module (`module_oid`), add constraint fk_group_module_module foreign key (`module_oid`) references `module` (`oid`);


-- REL FK: defaultUsers [DefaultGroup2User]
alter table `user`   add index fk_user_group (`group_oid`), add constraint fk_user_group foreign key (`group_oid`) references `group` (`oid`);


-- REL FK: groups [User2Group]
alter table `user_group`   add index fk_user_group_user (`user_oid`), add constraint fk_user_group_user foreign key (`user_oid`) references `user` (`oid`);


-- REL FK: users [Group2User]
alter table `user_group`   add index fk_user_group_group (`group_oid`), add constraint fk_user_group_group foreign key (`group_oid`) references `group` (`oid`);


-- REL FK: ProdutoToOrçamento Linha [rel18#role35]
alter table `orcamento_linha`   add index fk_orcamento_linha_produto (`produto_oid`), add constraint fk_orcamento_linha_produto foreign key (`produto_oid`) references `produto` (`oid`);


-- REL FK: EncomendaToEncomenda Linha [rel19#role37]
alter table `encomenda_linha`   add index fk_encomenda_linha_encomenda (`encomenda_oid`), add constraint fk_encomenda_linha_encomenda foreign key (`encomenda_oid`) references `encomenda` (`oid`);


-- REL FK: AlbumToFotografia [rel20#role39]
alter table `fotografia`   add index fk_fotografia_album (`album_oid`), add constraint fk_fotografia_album foreign key (`album_oid`) references `album` (`oid`);


-- REL FK: ProdutoToEncomenda Linha [rel21#role41]
alter table `encomenda_linha`   add index fk_encomenda_linha_produto (`produto_oid`), add constraint fk_encomenda_linha_produto foreign key (`produto_oid`) references `produto` (`oid`);


-- REL FK: UserToEncomenda [rel24#role47]
alter table `encomenda`   add index fk_encomenda_user (`user_oid`), add constraint fk_encomenda_user foreign key (`user_oid`) references `user` (`oid`);


-- REL FK: UserToOrçamento [rel25#role49]
alter table `orcamento`   add index fk_orcamento_user (`user_oid`), add constraint fk_orcamento_user foreign key (`user_oid`) references `user` (`oid`);


-- REL FK: ProdutoToPromoção [rel29#role57]
alter table `promocao`   add index fk_promocao_produto (`produto_oid`), add constraint fk_promocao_produto foreign key (`produto_oid`) references `produto` (`oid`);


