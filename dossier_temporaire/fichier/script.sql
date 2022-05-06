CREATE TABLE Appareil(
   Id_Appareil INT AUTO_INCREMENT,
   name VARCHAR(75) ,
   image VARCHAR(100) ,
   PRIMARY KEY(Id_Appareil)
);

CREATE TABLE Marque_Console(
   Id_Marque_Console INT AUTO_INCREMENT,
   name VARCHAR(75) ,
   logo VARCHAR(100) ,
   image VARCHAR(100) ,
   Id_Appareil INT,
   PRIMARY KEY(Id_Marque_Console),
   FOREIGN KEY(Id_Appareil) REFERENCES Appareil(Id_Appareil)
);

CREATE TABLE Marque_Telephone(
   Id_Marque_Telephone INT AUTO_INCREMENT,
   name VARCHAR(75) ,
   logo VARCHAR(100) ,
   image VARCHAR(100) ,
   Id_Appareil INT,
   PRIMARY KEY(Id_Marque_Telephone),
   FOREIGN KEY(Id_Appareil) REFERENCES Appareil(Id_Appareil)
);

CREATE TABLE Piece_IPhone__13_Pro_Phone_6_1_pouce(
   Id_Piece_IPhone__13_Pro_Phone_6_1_pouce INT AUTO_INCREMENT,
   name VARCHAR(50) ,
   price DECIMAL(5,2)  ,
   PRIMARY KEY(Id_Piece_IPhone__13_Pro_Phone_6_1_pouce)
);

CREATE TABLE Piece_Nintendo_Switch(
   Id_Piece_Nintendo_Switch INT AUTO_INCREMENT,
   name VARCHAR(75) ,
   price DECIMAL(5,2)  ,
   PRIMARY KEY(Id_Piece_Nintendo_Switch)
);

CREATE TABLE Block_NEWS(
   Id_Block_NEWS INT AUTO_INCREMENT,
   text TEXT,
   PRIMARY KEY(Id_Block_NEWS)
);

CREATE TABLE Carouselle(
   Id_Carouselle INT AUTO_INCREMENT,
   title VARCHAR(15) ,
   text VARCHAR(30) ,
   image VARCHAR(100) ,
   PRIMARY KEY(Id_Carouselle)
);

CREATE TABLE Devis(
   Id_Devis INT AUTO_INCREMENT,
   global_price DECIMAL(5,2)  ,
   link VARCHAR(150) ,
   PRIMARY KEY(Id_Devis)
);

CREATE TABLE IPhone__13_Pro_Phone_6_1_pouce(
   Id_iPhone__13_Pro_Phone_6_1_pouce INT AUTO_INCREMENT,
   name VARCHAR(75) ,
   image_presentation VARCHAR(100) ,
   image_1 VARCHAR(100) ,
   image_2 VARCHAR(100) ,
   Id_Marque_Telephone INT,
   PRIMARY KEY(Id_iPhone__13_Pro_Phone_6_1_pouce),
   FOREIGN KEY(Id_Marque_Telephone) REFERENCES Marque_Telephone(Id_Marque_Telephone)
);

CREATE TABLE Nintendo_Switch(
   Id_Nintendo_switch INT AUTO_INCREMENT,
   name VARCHAR(75) ,
   image_presentation VARCHAR(100) ,
   image_1 VARCHAR(100) ,
   image_2 VARCHAR(100) ,
   Id_Marque_Console INT,
   PRIMARY KEY(Id_Nintendo_switch),
   FOREIGN KEY(Id_Marque_Console) REFERENCES Marque_Console(Id_Marque_Console)
);

CREATE TABLE Iphone13PRO16POUCE(
   Id_iPhone__13_Pro_Phone_6_1_pouce INT,
   Id_Piece_IPhone__13_Pro_Phone_6_1_pouce INT,
   PRIMARY KEY(Id_iPhone__13_Pro_Phone_6_1_pouce, Id_Piece_IPhone__13_Pro_Phone_6_1_pouce),
   FOREIGN KEY(Id_iPhone__13_Pro_Phone_6_1_pouce) REFERENCES IPhone__13_Pro_Phone_6_1_pouce(Id_iPhone__13_Pro_Phone_6_1_pouce),
   FOREIGN KEY(Id_Piece_IPhone__13_Pro_Phone_6_1_pouce) REFERENCES Piece_IPhone__13_Pro_Phone_6_1_pouce(Id_Piece_IPhone__13_Pro_Phone_6_1_pouce)
);

CREATE TABLE NintendoSwitch(
   Id_Nintendo_switch INT,
   Id_Piece_Nintendo_Switch INT,
   PRIMARY KEY(Id_Nintendo_switch, Id_Piece_Nintendo_Switch),
   FOREIGN KEY(Id_Nintendo_switch) REFERENCES Nintendo_Switch(Id_Nintendo_switch),
   FOREIGN KEY(Id_Piece_Nintendo_Switch) REFERENCES Piece_Nintendo_Switch(Id_Piece_Nintendo_Switch)
);

CREATE TABLE LignePhone1(
   Id_Piece_IPhone__13_Pro_Phone_6_1_pouce INT,
   Id_Devis INT,
   PRIMARY KEY(Id_Piece_IPhone__13_Pro_Phone_6_1_pouce, Id_Devis),
   FOREIGN KEY(Id_Piece_IPhone__13_Pro_Phone_6_1_pouce) REFERENCES Piece_IPhone__13_Pro_Phone_6_1_pouce(Id_Piece_IPhone__13_Pro_Phone_6_1_pouce),
   FOREIGN KEY(Id_Devis) REFERENCES Devis(Id_Devis)
);

CREATE TABLE LigneConsole1(
   Id_Piece_Nintendo_Switch INT,
   Id_Devis INT,
   PRIMARY KEY(Id_Piece_Nintendo_Switch, Id_Devis),
   FOREIGN KEY(Id_Piece_Nintendo_Switch) REFERENCES Piece_Nintendo_Switch(Id_Piece_Nintendo_Switch),
   FOREIGN KEY(Id_Devis) REFERENCES Devis(Id_Devis)
);
