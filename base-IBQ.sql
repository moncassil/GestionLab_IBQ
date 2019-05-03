create database IBQ;
use IBQ;

create table  persona
(
id_persona varchar (50) not null,
nombre_persona varchar(50) not null,
ape_mat varchar (50) not null,
ape_pat varchar(50) not null,
tel_persona varchar (30),
cargo_persona varchar (30) not null,
coment_persona varchar (100),
primary key (id_persona)

);

create table laboratorio 
(
clave_lab varchar (50) not null,
nombre_lab varchar (50) not null,
ubicacion_lab varchar (50) not null,
primary key (clave_lab)
);

create table encargado
(
id_persona varchar (50) not null,
clave_lab varchar (50) not null,
fecha_entra varchar (50 ) not null,

constraint id_persona foreign key (id_persona)
references persona (id_persona),

constraint clave_lab foreign key (clave_lab)
references laboratorio (clave_lab)
);

create table almacen
(
id_almacen varchar (50) not null,
clave_lab varchar (50) not null,

primary key (id_almacen),
constraint clavee_lab foreign key (clave_lab)
references laboratorio (clave_lab)

);

create table instrumento
(
clave_instrum varchar (50) not null,
nom_instrum varchar(50) not null,
num_gaveta int not null,
cantidad int not null,
obser_instrum varchar (50),

primary key (clave_instrum)
);

create table quimicos
(
clave_quim varchar (50) not null,
num_gaveta_quim int not null,
nombre_quim varchar (50) not null,
tipo_cant varchar(50) not null,
gramaje varchar (50) not null,
obs_quim varchar (50),

primary key (clave_quim)
);

DROP TABLE IF EXISTS usuarios;
CREATE TABLE `ibq`.`usuarios` (
  `usuario` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  `tipo_usuario` varchar(45) NOT NULL,
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC));
  
  INSERT INTO `ibq`.`usuarios`
(`usuario`,
`contrasena`,
`tipo_usuario`)
VALUES
('admin',
'1234',
'administrador');