create table Rol (
cod_rol varchar(100),
Primary key(cod_rol)
);

create table semestre(
cod_semestre varchar(100),
fecha_inicio date,
fecha_fin date,
ano int,
primary key(cod_semestre)
);

create table Tec_tipo(
nombre_tipo varchar(100),
primary key(nombre_tipo) 
);

create table Usuario(
rut varchar(100),
nombre varchar(100),
apellido varchar(100),
contraseña varchar(100),
genero varchar(100),
correo varchar(100),
telefono varchar(100),
cod_rol varchar(100),
primary key (rut),
foreign key (cod_rol) references Rol
);


create table Profesor(
rut varchar(100),
primary key(rut),
foreign key(rut) references Usuario
);

create table Administrador(
rut varchar(100),
primary key (rut),
foreign key (rut) references Usuario
);

create table Proyecto(
cod_proyecto varchar(100),
nom_proyecto varchar(100),
fecha_inicio date,
fecha_fin date,
fecha_inicio_real date,
fecha_fin_real date,
descripcion_proyecto varchar(100),
sigla varchar(100),
tipo_desarrollo varchar(100),
cod_semestre varchar(100),
primary key (cod_proyecto),
foreign key(cod_semestre) references semestre
);

create table Documento(
cod_documento varchar(100),
descripcion varchar(100),
cod_proyecto varchar(100),
primary key (cod_documento),
foreign key (cod_proyecto) references Proyecto
);

create table Equipo(
cod_equipo varchar(100),
nombre_equipo varchar(100),
cod_semestre varchar(100),
cod_proyecto varchar(100),
primary key (cod_equipo),
foreign key(cod_semestre) references semestre,
foreign key (cod_proyecto) references Proyecto
);


create table Alumno(
rut  varchar(100),
carrera varchar(100),
ano_ingreso int,
cargo varchar(100),
cod_semestre varchar(100),
cod_equipo varchar(100),
primary key (rut),
foreign key (cod_semestre) references semestre,
foreign key (cod_equipo) references Equipo
);

create table Alu_documento(
rut varchar(100),
cod_documento varchar(100),
primary key(rut,cod_documento),
foreign key (rut)references Alumno,
foreign key (cod_documento) references Documento
);

create table Prof_documento(
rut varchar(100),
cod_documento varchar(100),
primary key (rut,cod_documento),
foreign key (rut) references Profesor,
foreign key (cod_documento) references Documento
);

create table Tecnologia(
nom_tecnologia varchar(100),
nivel_tecnologia varchar(100),
rut varchar(100),
nombre_tipo varchar(100),
primary key(nom_tecnologia),
foreign key(rut) references Alumno,
foreign key(nombre_tipo) references Tec_tipo
);

create table Requerimiento(
cod_requerimiento varchar(100),
tipo_requerimiento varchar(100),
nom_requerimiento varchar(100),
descripcion_requerimiento varchar(100),
complejidad varchar(100),
horas_requerimiento int,
control_cambios varchar(100),
prioridad varchar(100),
estado varchar(100),
impacto varchar(100),
cod_proyecto varchar(100),
primary key (cod_requerimiento),
foreign key (cod_proyecto) references Proyecto
);

create table Tarea(
cod_tarea varchar(100),
nom_tarea varchar(100),
hora_invertida int,
cod_requerimiento varchar(100),
primary key (cod_tarea),
foreign key (cod_requerimiento) references Requerimiento
);

create table Alu_tarea(
cod_tarea varchar(100),
rut varchar(100),
primary key (cod_tarea,rut),
foreign key (cod_tarea) references Tarea,
foreign key (rut) references Alumno
);

