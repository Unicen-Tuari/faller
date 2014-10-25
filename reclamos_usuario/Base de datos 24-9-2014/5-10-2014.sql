/*
COSAS A PENSAR CUANDO NO SE PUEDE ADERIR UNA FOREIGN KEY:
-Ver que los tipos de las claves que esty referenciando sean iguales(muchas veces me paso este problema)
CUNADO HAGO UN INSERT:
-ver que en el values este poniendo todos los campos
UNA FECHA DEBE TENER EL SIGUIENTE FORMATO:
-'2001/07/22'

CAMBIE:13/10
-id_Sector autoincr
-dni_empleado por id_emple auto
-area_que_ya_ha_pasado

modifique la id de empledo
y agregue un campo llamado id_empleado

modifique nombres
-persona por usuario
-reclamo_rel por reclamo

*/


CREATE TABLE   USUARIO(

id_persona     		integer not null auto_increment,
nombre         		varchar(25) not null,
apellido       		varchar(25) not null,
dni_persona   		integer not null,
fecha_nacimiento	date null ,/*tiene que ser not null para asi no dejar ingresar a personas menores de edad al sistema*/
email          		varchar(100) not null,
celular        		integer      not null,
telefono_fijo  		integer          null,
direccion      		varchar(100) not null,
password       		varchar(100) not null,
fecha_registro 		date 		not null,
CONSTRAINT     		PK_persona
primary        		key(id_persona)

);


/*INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, dni_empleado, sector_raiz, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo,foto_reclamo) 
VALUES(2, 37198, 2, 37198533, '','2009/12/12-','SDSD',2,2,'en tramite','hola pololla','lala');
*/




CREATE TABLE RECLAMO(
id_reclamo     		integer			not null auto_increment,/*clave principal que se tiene que autoincrementar*/
id_persona			integer 		not null,
id_sector			 integer	not null,/*es integer*/
id_empleado			integer 		    null,  /*no se tiene en cuenta en el sitema actua*/
sector_raiz         varchar(50)         null,
fecha				date 			 null,
resumen_sector      varchar(1000)	not null,
area_actual         integer			not null,
areas_que_ya_ha_pasado	integer 		not null,
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
/*

ALTER TABLE ACCIONES_RECLAMO
	ADD CONSTRAINT Fk_ACCIONES_RECLAMO_RECLAMO
	  FOREIGN KEY (id_reclamo,id_empleado)
	    REFERENCES RECLAMO(id_reclamo,id_empleado)
	      ON UPDATE cascade
            ON DELETE SET NULL

;


CREATE TABLE ACCIONES_RECLAMO(
id_accion           	 integer 		not null auto_increment,	
id_reclamo     			 integer		not null,
id_empleado				 integer		not null,
fecha_pasado_a_otra_area date        	null,
ultima_vez_visto		 date      		null,
CONSTRAINT			pk_ACCIONES_RECLAMO
PRIMARY KEY         (id_accion,id_reclamo,id_empleado)     	
)



*/




CREATE TABLE SECTOR(
id_sector			integer  not null auto_increment,/*clave principal que se tiene que autoincrementar*/
nombre_sector       varchar(100)  not null,
jefe_s				integer 	  not null,
lista_predefinida   varchar(100)  not null,
sector_raiz			integer   	      null,
clave               varchar(500)  not null, 
CONSTRAINT			pk_SECTOR
PRIMARY KEY         (id_sector)
);




CREATE TABLE EMPLEADO(
id_sector		    integer  	not null ,
id_empleado         integer 	not null auto_increment, /*clave principal que se tiene que autoincrementar*/
dni_empleado		integer 		not null, 
jefe_s 				integer			    null,
nombre         		varchar(25) 	not null,
apellido       		varchar(25) 	not null,
email          		varchar(100)        null,
puesto_espesifico   varchar(200)    	null,
clave               varchar(200) 		null,
CONSTRAINT			pk_EMPLEADO
PRIMARY KEY         (id_empleado,id_sector)
);



ALTER TABLE RECLAMO
	ADD CONSTRAINT Fk_RECLAMO_REL_SECTOR
	  FOREIGN KEY (id_sector)
	    REFERENCES SECTOR(id_sector) ,
	ADD CONSTRAINT Fk_RECLAMO_REL_USUARIO
	  FOREIGN KEY (id_persona)
	    REFERENCES USUARIO (id_persona)	
;

ALTER TABLE EMPLEADO
ADD CONSTRAINT Fk_EMPLEADO_SECTOR
	  FOREIGN KEY (id_sector)
	    REFERENCES SECTOR(id_sector)

;




/************************************************fin insertar persona******************************************************/
INSERT INTO USUARIO( nombre,
					 apellido,dni_persona,fecha_nacimiento,direccion, celular,Telefono_fijo, email, password,fecha_registro)
					VALUES( 'Franco', 'Aller', 37198,'2001/07/22',
			 				 '4 de Abril', 2284588180,'', 'franco.e.aller@gmail.com','fran','2020/07/22');
	

/************************************************insertar sector******************************************************/
INSERT INTO SECTOR ( nombre_sector, jefe_s,lista_predefinida,sector_raiz,clave)  	VALUES('Obras Publicas'	, 1, 'OB', '111',	'123');
INSERT INTO SECTOR ( nombre_sector, jefe_s,lista_predefinida,sector_raiz,clave)  	VALUES('Infraestructura'	, 1, 'OB', '211',	'123');
INSERT INTO SECTOR ( nombre_sector, jefe_s,lista_predefinida,sector_raiz,clave)  	VALUES('Asfalto'			, 1, 'OB', '311',	'123');
INSERT INTO SECTOR ( nombre_sector, jefe_s,lista_predefinida,sector_raiz,clave)  	VALUES('Intendente'		, 1, 'OB', '411',	'123');
INSERT INTO SECTOR ( nombre_sector, jefe_s,lista_predefinida,sector_raiz,clave)  	VALUES('Luminaria'		, 1, 'OB', '511',	'123');
INSERT INTO SECTOR ( nombre_sector, jefe_s,lista_predefinida,sector_raiz,clave)  	VALUES('Arboleda'			, 1, 'OB', '611',	'123');
INSERT INTO SECTOR ( nombre_sector, jefe_s,lista_predefinida,sector_raiz,clave)  	VALUES('Cloacas'			, 1, 'OB', '711',	'123');
INSERT INTO SECTOR ( nombre_sector, jefe_s,lista_predefinida,sector_raiz,clave)  	VALUES('Gas'				, 1, 'OB', '811',	'123');
INSERT INTO SECTOR ( nombre_sector, jefe_s,lista_predefinida,sector_raiz,clave)  	VALUES('Basura'			, 1, 'OB', '911',	'123')


/************************************************fin insertar sector******************************************************/

/************************************************insertar reclamo******************************************************/

/*INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo,foto_reclamo) VALUES(2,2,2,'12/12/2009','SDSD',2,2,'en tramite','hola pololla',"lala");/*
/*INSERT INTO RECLAMO_REL (id_reclamo, id_persona, id_sector, fecha, resumen_sector, area_actual, area_ya_paso, estado_reclamo, reclamo)
 				  VALUES(:id_reclamo, :id_persona, :id_sector, :fecha, :resumen_sector, :area_actual, :area_ya_paso, :estado_reclamo, reclamo);
*/


/************************************************insertar Empleado******************************************************/

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre,
 apellido, email, puesto_espesifico, clave )
VALUES(1,3888888,'','empleadoobras', 'peralta', 'carlos@gmail.com', 'arquitecto', '123');

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre,
 apellido, email, puesto_espesifico, clave )
VALUES(2,3888888,'','empleadoinfraestructura', 'peralta', 'carlos@gmail.com', 'arquitecto', '123');




/************************************************fin insertar reclamo******************************************************/
INSERT INTO RECLAMO( id_persona, id_sector, id_empleado, sector_raiz, fecha, resumen_sector, area_actual, areas_que_ya_ha_pasado, estado_reclamo, reclamo,foto_reclamo) 
VALUES( 1, 2, null, '38888888','2009/07/03','SDSD',2,2,'en tramite','hola pololla',"lala");

/*
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


INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Basura',1,'','empbasura', 'peralta', 'empbasura@gmail.com', 'arquitecto', '123');

INSERT INTO EMPLEADO(id_sector, dni_empleado, jefe_s, nombre, apellido, email, puesto_espesifico, clave )
VALUES('Arboleda',1,'','emparboleda', 'peralta', 'Arboleda@gmail.com', 'arquitecto', '123');

*/
/*

$arraySelect= array('O'=>'Obras Publicas','i'=>'Infraestructura','a'=>'Asfalto','ie'=>'Intendente','l'=>'Luminaria','ar'=>'Arboleda','clo'=>'Cloacas','gas'=>'Gas','basura'=>'Basura');
*/



/************************************************FIN insertar Empleado******************************************************/
