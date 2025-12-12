CREATE DATABASE cooperative;

use cooperative;

CREATE TABLE cooperative_chauffeur(
	id_chauffeur INT PRIMARY KEY AUTO_INCREMENT,
	nom_chauffeur VARCHAR(100)
);

INSERT INTO cooperative_chauffeur (nom_chauffeur) VALUES
('Rakoto Jean'),
('Randria Paul'),
('Rasoa Marie'),
('Raharison Luc'),
('Andrianina Sophie'),
('Rakotobe Michel'),
('Rabe Claude'),
('Rasolofo Hery'),
('Randrianasolo Nivo'),
('Ramanana Fidy'),
('Razafy Toky'),
('Ralison Bruno'),
('Rakotondrabe Emma'),
('Andriamahefa José'),
('Rabesandratana Lanto');

CREATE TABLE cooperative_vehicule(
	id_vehicule INT PRIMARY KEY AUTO_INCREMENT,
	nom_vehicule VARCHAR(100),
	immatriculation VARCHAR(20)
);

INSERT INTO cooperative_vehicule (nom_vehicule, immatriculation) VALUES 
('Sprinter Mercedes', '6050 TAS'),
('Hiace Toyota', '3421 TBA'),
('Coaster Toyota', '7892 TAA'),
('Sprinter Mercedes', '5634 TBJ'),
('Daily Iveco', '2109 TAF'),
('Hiace Toyota', '8745 TBO'),
('Coaster Toyota', '4567 TAM'),
('Sprinter Mercedes', '1298 TBB'),
('Rosa Mitsubishi', '6783 TAG'),
('Daily Iveco', '9012 TAN'),
('Hiace Toyota', '3456 TBD'),
('Coaster Toyota', '7821 TAJ'),
('Sprinter Mercedes', '5234 TBF'),
('Rosa Mitsubishi', '8901 TAE'),
('Daily Iveco', '2567 TBH');

CREATE TABLE cooperative_trajet(
	id_trajet INT PRIMARY KEY AUTO_INCREMENT,
	nom_trajet VARCHAR(100),
	date_debut TIMESTAMP,
	date_fin TIMESTAMP,
	montant_recette NUMERIC(10,2),
	montant_carburant NUMERIC(10,2)
);

INSERT INTO cooperative_trajet (nom_trajet, date_debut, date_fin, montant_recette, montant_carburant) VALUES 
('Antananarivo - Antsirabe', '2024-12-01 06:00:00', '2024-12-01 09:30:00', 450000.00, 80000.00),
('Antsirabe - Antananarivo', '2024-12-01 14:00:00', '2024-12-01 17:30:00', 420000.00, 75000.00),
('Antananarivo - Toamasina', '2024-12-02 05:00:00', '2024-12-02 12:00:00', 680000.00, 120000.00),
('Toamasina - Antananarivo', '2024-12-03 06:00:00', '2024-12-03 13:00:00', 650000.00, 115000.00),
('Antananarivo - Fianarantsoa', '2024-12-04 04:30:00', '2024-12-04 12:30:00', 720000.00, 140000.00),
('Fianarantsoa - Antananarivo', '2024-12-05 05:00:00', '2024-12-05 13:00:00', 700000.00, 135000.00),
('Antananarivo - Mahajanga', '2024-12-06 04:00:00', '2024-12-06 14:00:00', 850000.00, 180000.00),
('Mahajanga - Antananarivo', '2024-12-07 05:00:00', '2024-12-07 15:00:00', 820000.00, 175000.00),
('Antananarivo - Antsirabe', '2024-12-08 07:00:00', '2024-12-08 10:30:00', 460000.00, 82000.00),
('Antsirabe - Antananarivo', '2024-12-08 15:00:00', '2024-12-08 18:30:00', 440000.00, 78000.00),
('Antananarivo - Toliara', '2024-12-09 03:00:00', '2024-12-09 15:00:00', 950000.00, 200000.00),
('Toliara - Antananarivo', '2024-12-10 04:00:00', '2024-12-10 16:00:00', 920000.00, 195000.00),
('Antananarivo - Toamasina', '2024-12-11 05:30:00', '2024-12-11 12:30:00', 670000.00, 118000.00),
('Toamasina - Antananarivo', '2024-12-12 06:00:00', '2024-12-12 13:00:00', 660000.00, 116000.00),
('Antananarivo - Antsirabe', '2024-12-12 08:00:00', '2024-12-12 11:30:00', 455000.00, 81000.00);

CREATE TABLE cooperative_histo_trajet_jour(
	id_histo INT PRIMARY KEY AUTO_INCREMENT,
	id_trajet INT,
	id_vehicule INT,
	id_chauffeur INT,
	kw_effectue NUMERIC(6,2),
	montant_recette NUMERIC(10,2),
	montant_carburant NUMERIC(10,2),
	date_trajet_jr DATE,

	FOREIGN KEY (id_trajet) REFERENCES cooperative_trajet(id_trajet),
	FOREIGN KEY (id_vehicule) REFERENCES cooperative_vehicule(id_vehicule),
	FOREIGN KEY (id_chauffeur) REFERENCES cooperative_chauffeur(id_chauffeur)
);


INSERT INTO cooperative_histo_trajet_jour (id_trajet, id_vehicule, id_chauffeur, kw_effectue, montant_recette, montant_carburant, date_trajet_jr) VALUES 
(1, 1, 1, 85.00, 200000.00, 35000.00, '2025-01-05'),
(1, 1, 2, 85.00, 250000.00, 45000.00, '2025-01-12'),
(2, 2, 3, 170.00, 420000.00, 75000.00, '2025-01-05'),
(3, 3, 4, 175.00, 300000.00, 50000.00, '2025-01-06'),
(3, 3, 5, 175.00, 380000.00, 70000.00, '2025-01-13'),
(4, 4, 6, 120.00, 250000.00, 45000.00, '2025-01-07'),
(4, 4, 7, 115.00, 200000.00, 35000.00, '2025-01-14'),
(4, 4, 8, 115.00, 200000.00, 35000.00, '2025-01-21'),
(5, 5, 9, 205.00, 350000.00, 65000.00, '2025-01-08'),
(5, 5, 10, 205.00, 370000.00, 75000.00, '2025-01-15'),
(6, 6, 11, 410.00, 700000.00, 135000.00, '2025-01-09'),
(7, 7, 12, 140.00, 250000.00, 50000.00, '2025-01-10'),
(7, 7, 13, 135.00, 200000.00, 40000.00, '2025-01-17'),
(7, 7, 14, 140.00, 220000.00, 45000.00, '2025-01-24'),
(7, 7, 15, 135.00, 180000.00, 45000.00, '2025-01-31'),
(8, 8, 1, 275.00, 450000.00, 90000.00, '2025-01-11'),
(8, 8, 2, 275.00, 370000.00, 85000.00, '2025-01-18'),
(9, 9, 3, 170.00, 460000.00, 82000.00, '2025-01-12'),
(10, 10, 4, 85.00, 220000.00, 38000.00, '2025-01-12'),
(10, 10, 5, 85.00, 220000.00, 40000.00, '2025-01-19'),
(11, 11, 6, 320.00, 350000.00, 75000.00, '2025-01-13'),
(11, 11, 7, 315.00, 300000.00, 60000.00, '2025-01-20'),
(11, 11, 8, 315.00, 300000.00, 65000.00, '2025-01-27'),
(12, 12, 9, 475.00, 500000.00, 100000.00, '2025-01-14'),
(12, 12, 10, 475.00, 420000.00, 95000.00, '2025-01-21'),
(13, 13, 11, 350.00, 670000.00, 118000.00, '2025-01-15'),
(14, 14, 12, 175.00, 350000.00, 60000.00, '2025-01-16'),
(14, 14, 13, 175.00, 310000.00, 56000.00, '2025-01-23'),
(15, 15, 14, 85.00, 230000.00, 42000.00, '2025-01-16'),
(15, 15, 15, 85.00, 225000.00, 39000.00, '2025-01-23');