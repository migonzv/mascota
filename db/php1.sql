CREATE DATABASE IF NOT EXISTS php1_migonzv
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE php1_migonzv;

CREATE TABLE IF NOT EXISTS usuarios (
  cedula INT(10) PRIMARY KEY NOT NULL,
  nombre VARCHAR(20) NOT NULL,
  apellido VARCHAR(20) NOT NULL,
  direccion VARCHAR(100) NOT NULL,
  email VARCHAR(30) NOT NULL,
  telefono VARCHAR(20) NOT NULL,
  sexo VARCHAR(2) NOT NULL,
  nacionalidad VARCHAR(20) NOT NULL,
  ciudad VARCHAR(20) NOT NULL
);

INSERT INTO usuarios (cedula, nombre, apellido, direccion, email, telefono, sexo, nacionalidad, ciudad)
VALUES
(24493959, 'Claire', 'Whiteford', '15th Floor', 'cwhiteford0@constant.com', '+1-414-361-2016', 'F', 'United States', 'Milwaukee'),
(27587858, 'Milzie', 'Keave', 'Apt 1808', 'mkeave1@flickr.com', '+1-336-569-4294', 'F', 'United States', 'Winston Salem'),
(23974272, 'Nefen', 'Keech', '10th Floor', 'nkeech2@mail.ru', '+86-109-141-6144', 'M', 'China', 'Rongdoi'),
(18235545, 'Emmet', 'Glyn', 'Suite 31', 'eglyn3@cyberchimps.com', '+81-308-555-7214', 'M', 'Japan', 'Maki'),
(19848377, 'Mordecai', 'Jurgen', 'Room 183', 'mjurgen4@ocn.ne.jp', '+255-972-373-4773', 'M', 'Tanzania', 'Katumba'),
(27778558, 'Eydie', 'Calleja', 'Apt 1866', 'ecalleja5@guardian.co.uk', '+7-684-501-4662', 'M', 'Russia', 'Belgorod'),
(24557059, 'Cull', 'MacUchadair', 'Suite 36', 'cmacuchadair6@ground.com', '+86-238-786-5244', 'M', 'China', 'Yangxipu'),
(24648180, 'Frederich', 'Lotterington', 'Room 1615', 'flotterington7@mapquest.com', '+1-913-151-6790', 'M', 'United States', 'Shawnee Mission'),
(22921371, 'Zed', 'Sowerby', '16th Floor', 'zsowerby8@radio.com', '+86-898-633-5072', 'M', 'China', 'Wanshan'),
(27055492, 'Ines', 'Bourthouloume', '14th Floor', 'ibourthouloume9@webster.com', '+7-822-448-5339', 'F', 'Russia', 'Siverskiy');