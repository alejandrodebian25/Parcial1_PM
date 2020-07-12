
-- -----------------------------------------------------
-- Table `academico`.`DEPARTAMENTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DEPARTAMENTO` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `codigo` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`USUARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `USUARIO` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ci` INT NOT NULL,
  `clave` VARCHAR(20) NULL,
  PRIMARY KEY (`id`)
)ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`IDENTIFICADOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IDENTIFICADOR` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ci` INT NOT NULL,
  `nombres` VARCHAR(50) NOT NULL,
  `apellidos` VARCHAR(50) NOT NULL,
  `fecha_nac` DATE NOT NULL,
  `color` VARCHAR(10) NULL,
  `foto` VARCHAR(20) NULL,
  `id_lugar_res` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_lugar_res`) REFERENCES `DEPARTAMENTO` (`id`),
  FOREIGN KEY (`id_usuario`) REFERENCES `USUARIO` (`id`)
)ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`MATERIA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MATERIA` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `sigla` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`NOTAS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NOTAS` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nota_final` INT NULL,
  `id_identificador` INT NOT NULL,
  `id_materia` INT NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_identificador`) REFERENCES `IDENTIFICADOR` (`id`),
  FOREIGN KEY (`id_materia`) REFERENCES `academico`.`MATERIA` (`id`)
)ENGINE = InnoDB;



-- Insercion departamentos
insert into departamento values (1 ,'La Paz','lp');
insert into departamento values (2 ,'Cochabamba','cb');
insert into departamento values (3 ,'Santa Cruz','sc');
insert into departamento values (4 ,'Oruro','or');
insert into departamento values (5 ,'Chuquisaca','ch');
insert into departamento values (6 ,'Beni','be');
insert into departamento values (7 ,'Pando','pd');
insert into departamento values (8 ,'Potosi','pt');
insert into departamento values (9 ,'Tarija','tj');


/* -- Insercion usuarios */
insert into usuario values (1,'6945027','123456');
insert into usuario values (2,'121212','222222');
insert into usuario values (3,'131313','333333');
insert into usuario values (4,'141414','444444');

/* --Insercion identificador  */

insert into identificador values (1 ,6945027,'Freddy Alejandro','Quea Cama','1991-05-26','#16A085','alejandroq.jpg',1,1);
insert into identificador values (2 ,121212,'Jorge','Castro Melendres','2020-07-15','#16A085','jorgec.png',1,2);
insert into identificador values (3 ,131313,'Luis Pablo','Perez Ortiz','2020-03-17','#FFFFFF','luisp.png',4,3);
insert into identificador values (4 ,141414,'Maria','Flores Mamani','2019-12-17','#FFFFFF','mariaf.png',6,4);

/* --Insercion materias */
insert into materia values (1,'Estructura de datos','INF-131');
insert into materia values (2,'Sistemas Contables','CPA-201');
insert into materia values (3,'AuditorIa Informatica','INF-314');
insert into materia values (4,'Programacion Virtual','INF-325');
insert into materia values (5,'Idiomas II','INF-329');

/* --Insercion materias */
insert into notas values ( 1,69,1,1);
insert into notas values ( 2,45,1,2);
insert into notas values ( 3,87,1,3);
insert into notas values ( 4,90,1,4);
insert into notas values ( 5,44,1,5);
 
insert into notas values ( 6 ,45,2,1);
insert into notas values ( 7 ,76,2,2);
insert into notas values ( 8 ,76,2,3);
insert into notas values ( 9 ,34,2,4);
insert into notas values ( 10,87,2,5);
 
insert into notas values ( 11,67,3,1);
insert into notas values ( 12,47,3,2);
insert into notas values ( 13,87,3,3);
insert into notas values ( 14,97,3,4);
insert into notas values ( 15,47,3,5);
 
insert into notas values ( 16,45,4,1);
insert into notas values ( 17,47,4,2);
insert into notas values ( 18,66,4,3);
insert into notas values ( 19,34,4,4);
insert into notas values ( 20,36,4,5);



