-- Postgres SQL - Create Database Code:

create table tb_status(
	id SERIAL not null primary key,
    status varchar(25) not null
);

insert into tb_status(status)values('pendente');
insert into tb_status(status)values('realizado');

create table tb_tarefas(
	id SERIAL not null primary key,
    id_status int not null default 1,
    foreign key(id_status) references tb_status(id),
	tarefa text not null,
    data_cadastrado timestamp not null default current_timestamp
)

CREATE TABLE public.tb_usuarios
(
    id serial NOT NULL,
    nome character varying(150) NOT NULL,
    email character varying(250) NOT NULL,
    senha character varying(100) NOT NULL,
    data_cadastro timestamp with time zone NOT NULL default current_timestamp,
    PRIMARY KEY (id)
);