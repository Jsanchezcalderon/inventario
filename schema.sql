create database inventario;
use inventario;
create table productos(
id int primary key auto_increment,
nombre varchar (25) not null,
referencia varchar (25) not null,
precio int not null,
peso int not null,
categoria varchar (25) not null,
stock int not null,
fecha_crea date not null
);

create table ventas(
	idventa int primary key auto_increment,
    cantidad int not null,
    idproducto int
);

alter table ventas add constraint ´ventas_fk_1´ foreign key(idproducto) references productos(id);