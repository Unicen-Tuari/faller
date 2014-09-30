
CREATE TABLE   PERSONA(
id_persona     integer not null,
nombre         varchar(25) not null,
apellido       varchar(25) not null,
direccion      varchar(100) not null,
celular        integer          null, 
email          varchar(100) not null,
password       varchar(100) not null,
CONSTRAINT     PK_persona
primary        key(id_persona)
);


/*INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, dni_empleado, sector_raiz, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo,foto_reclamo) 
VALUES(2, 37198, 2, 37198533, '','2009/12/12-','SDSD',2,2,'en tramite','hola pololla','lala');
*/

CREATE TABLE RECLAMO_REL(
id_reclamo     		integer			not null,
id_persona			integer 		not null,/*autoincrement */
id_sector			 varchar(100)	not null,/*es integer*/
dni_empleado		integer 		    null,  /*no se tiene en cuenta en el sitema actua*/
sector_raiz         varchar(50)         null,
fecha				date 			not null,
resumen_sector      varchar(1000)	not null,
area_actual         integer			not null,
area_ya_paso		integer 		not null,
estado_reclamo      varchar(20) 	not null,
reclamo             varchar(1000)	not null,
foto_reclamo        varchar(500)	not null,
CONSTRAINT			pk_RECLAMO_REL
PRIMARY KEY         (id_reclamo,id_persona,id_sector)
);

/*
CREATE TABLE FOTOS_RECLAMOS(
id_foto 
id_reclamo
);
*/

INSERT INTO SECTOR (id_sector, nombre_sector, jefe_s,lista_predefinida,sector_raiz,clave)
             VALUES(2,'Obras Publicas', 1,'OB', 111,123);
CREATE TABLE SECTOR(
id_sector			 varchar(100) not null,/*la primary key verdadera*/
nombre_sector       varchar(100)  not null,
jefe_s				integer 	  not null,
lista_predefinida   varchar(100)  not null,
sector_raiz			integer   	      null,
clave               varchar(500)  not null, 
CONSTRAINT			pk_SECTOR
PRIMARY KEY         (id_sector)
);




CREATE TABLE EMPLEADO(
id_sector		    varchar(100) 	not null,
dni_empleado		integer 		not null, 
jefe_s 				integer			    null,
nombre         		varchar(25) 	not null,
apellido       		varchar(25) 	not null,
email          		varchar(100)        null,
puesto_espesifico   varchar(200)    	null,
clave               varchar(200) 		null,
CONSTRAINT			pk_EMPLEADO
PRIMARY KEY         (dni_empleado,id_sector)
);



ALTER TABLE RECLAMO_REL
	ADD CONSTRAINT Fk_RECLAMO_REL_SECTOR
	  FOREIGN KEY (id_sector)
	    REFERENCES SECTOR(id_sector) ,
	ADD CONSTRAINT Fk_RECLAMO_REL_PERSONA
	  FOREIGN KEY (id_persona)
	    REFERENCES PERSONA (id_persona)	
;

ALTER TABLE EMPLEADO
ADD CONSTRAINT Fk_EMPLEADO_SECTOR
	  FOREIGN KEY (id_sector)
	    REFERENCES SECTOR(id_sector)

;



INSERT INTO PERSONA(id_persona, nombre, apellido, direccion, celular, email, password) 
VALUES(37198, 'fran', 'aller', '4abril', 228458, 'franco.e.aller@gmail.com', 'fran');

INSERT INTO PERSONA(id_persona, nombre, apellido, direccion, celular, email, password) 
VALUES(37198534, 'esteban', 'aller', '4abril', 228458, 'esteban.e.aller@gmail.com', 'esteban');

/************************************************fin insertar persona******************************************************/


/************************************************insertar sector******************************************************/
INSERT INTO SECTOR (id_sector, nombre_sector, jefe_s,lista_predefinida,sector_raiz)
             VALUES(2,'Obras Publicas', 'OB', 111,"1","");
INSERT INTO SECTOR (id_sector, nombre_sector, jefe_s,lista_predefinida,sector_raiz) VALUES('Infraestructura', 'INF', 111,"1","");
INSERT INTO SECTOR (id_sector, nombre_sector, jefe_s,lista_predefinida,sector_raiz) VALUES('Asfalto', 'AS', 111,"1","");
INSERT INTO SECTOR (id_sector, nombre_sector, jefe_s,lista_predefinida,sector_raiz) VALUES('Intendente', 'INT', 111,"1","");
INSERT INTO SECTOR (id_sector, nombre_sector, jefe_s,lista_predefinida,sector_raiz) VALUES('Luminaria', 'LM', 111,"1","");
INSERT INTO SECTOR (id_sector, nombre_sector, jefe_s,lista_predefinida,sector_raiz) VALUES('Arboleda', 'LM', 111,"1","");
INSERT INTO SECTOR (id_sector, nombre_sector, jefe_s,lista_predefinida,sector_raiz) VALUES('Cloacas', 'LM', 111,"1","");
INSERT INTO SECTOR (id_sector, nombre_sector, jefe_s,lista_predefinida,sector_raiz) VALUES('Gas', 'LM', 111,"1","");
INSERT INTO SECTOR (id_sector, nombre_sector, jefe_s,lista_predefinida,sector_raiz) VALUES('Basura', 'LM', 111,"1","");



/************************************************fin insertar sector******************************************************/

/************************************************insertar reclamo******************************************************/

/*INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, dni_empleado, sector_raiz, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo,foto_reclamo) 
VALUES(2, 2, 2, 37198533, "",'12/12/2009','SDSD',2,2,'en tramite','hola pololla',"lala");
*/
/*INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo,foto_reclamo) VALUES(2,2,2,'12/12/2009','SDSD',2,2,'en tramite','hola pololla',"lala");/*
/*INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo)
 				  VALUES(:id_reclamo, :id_persona, :id_sector, :fecha, :resumen_sector, :area_actual, :area_ya_paso, :estado_reclamo, reclamo);
*/

/************************************************fin insertar reclamo******************************************************/


/************************************************insertar Empleado******************************************************/

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Obras Publicas',1,'','empobras', 'peralta', 'carlos@gmail.com', 'arquitecto', '123');

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Infraestructura',1,'','empinfraestructura', 'peralta', 'carlos@gmail.com', 'arquitecto', '123');

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Asfalto',1,'','empsasfalto', 'peralta', 'carlos@gmail.com', 'arquitecto', '123');

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Luminaria',1,'','empluminaria', 'peralta', 'carlos@gmail.com', 'arquitecto', '123');

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Intendente',1,'','empintendente', 'peralta', 'empintendente@gmail.com', 'arquitecto', '123');

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Cloacas',1,'','empcloacas', 'peralta', 'empcloacas@gmail.com', 'arquitecto', '123');

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Gas',1,'','empgas', 'peralta', 'empgas@gmail.com', 'arquitecto', '123');
/*

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Basura',1,'','empbasura', 'peralta', 'empbasura@gmail.com', 'arquitecto', '123');

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Arboleda',1,'','emparboleda', 'peralta', 'Arboleda@gmail.com', 'arquitecto', '123');

*/
/*

$arraySelect= array('O'=>'Obras Publicas','i'=>'Infraestructura','a'=>'Asfalto','ie'=>'Intendente','l'=>'Luminaria','ar'=>'Arboleda','clo'=>'Cloacas','gas'=>'Gas','basura'=>'Basura');
*/



/************************************************FIN insertar Empleado******************************************************/
