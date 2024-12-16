CREATE TABLE utilisateur (
  id_user int PRIMARY KEY AUTO_INCREMENT  not null,
    name varchar (200) not null,
    email varchar (200) not null ,
    pasword varchar (200) not null,
    role ENUM ('client','chef') not null 
    
);

CREATE TABLE menu(
id_menu int PRIMARY key AUTO_INCREMENT not null,
    titre varchar (200 ) NOT null ,
    description varchar (200) not null 
);

CREATE table reservation (
id_reservation int PRIMARY KEY AUTO_INCREMENT not null,
    id_client int,
    FOREIGN KEY (id_client) REFERENCES utilisateur (id_user) ON DELETE CASCADE,
    id_menu int,
    FOREIGN key (id_menu)REFERENCES menu (id_menu) ON DELETE CASCADE,
    statu ENUM ('accepter', 'refuser') NOT null,
    date_reservation DATETIME NOT NULL,
    nombre_personnes INT NOT NULL
);
CREATE TABLE plat (
id_plat int PRIMARY key AUTO_INCREMENT not null ,
 nom varchar (200)NOT null,
   prix varchar (200) not null,
    url varchar (200) not null
);

CREATE table menu_plat(
    id_menu_plat int PRIMARY KEY not null ,
id_plat int ,
    FOREIGN KEY (id_plat) REFERENCES plat (id_plat) ON DELETE CASCADE ,
    id_menu int,
    FOREIGN key (id_menu) REFERENCES menu (id_menu) ON DELETE CASCADE
);