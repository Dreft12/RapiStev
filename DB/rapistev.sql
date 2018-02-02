CREATE TABLE users
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  Cedula     INT          NOT NULL,
  Nombre     VARCHAR(100) NOT NULL,
  Apellido   VARCHAR(100) NULL,
  User       VARCHAR(200) NOT NULL,
  Contraseña VARCHAR(255) NOT NULL,
  Correo     VARCHAR(200) NOT NULL,
  idTipo     INT          NOT NULL,
  idActivo   INT          NOT NULL,
  CONSTRAINT users_id_uindex
  UNIQUE (id),
  CONSTRAINT users_Cedula_uindex
  UNIQUE (Cedula)
)
  ENGINE = InnoDB;


