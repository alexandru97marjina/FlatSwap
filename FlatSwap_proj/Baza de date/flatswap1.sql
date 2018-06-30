-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 03:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flatswap1`
--

-- --------------------------------------------------------

--
-- Table structure for table `angajat`
--

CREATE TABLE `angajat` (
  `id_angajat` int(11) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nr_telefon` int(20) NOT NULL,
  `sarcini_total` int(11) NOT NULL,
  `sarcini_realizate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `angajat`
--

INSERT INTO `angajat` (`id_angajat`, `nume`, `prenume`, `email`, `nr_telefon`, `sarcini_total`, `sarcini_realizate`) VALUES
(1, 'Marculescu', 'Ion', 'Marculescu@mail.com', 69432174, 15, 8),
(2, 'Andreiescu', 'Irina', 'Andreiescu@mail.com', 78433717, 23, 9),
(3, 'Constantinescu', 'Ion', 'Constant@mail.com', 79642154, 10, 3),
(4, 'Petrescu', 'Radu', 'Petrescu@mail.com', 79631134, 19, 6);

-- --------------------------------------------------------

--
-- Table structure for table `apartament`
--

CREATE TABLE `apartament` (
  `id_apartament` int(11) NOT NULL,
  `nr_camere` int(11) DEFAULT NULL,
  `etajul` int(11) DEFAULT NULL,
  `starea` varchar(30) DEFAULT NULL,
  `suprafata` int(11) DEFAULT NULL,
  `nr_etaje` int(11) DEFAULT NULL,
  `mobilat` varchar(30) DEFAULT NULL,
  `incalzire` varchar(30) DEFAULT NULL,
  `sector` varchar(30) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `text` text,
  `pret` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apartament`
--

INSERT INTO `apartament` (`id_apartament`, `nr_camere`, `etajul`, `starea`, `suprafata`, `nr_etaje`, `mobilat`, `incalzire`, `sector`, `title`, `text`, `pret`) VALUES
(1, 1, 12, 'Reparatie euro', 41, 16, 'da', 'autonoma', 'Telecentru', 'Bloc nou telecentru, 41 m2, reparatie euro', 'Apartament situat in sectorul Telecentru, str. M. Berezovschi/ str. Grenoble.\r\n\r\nSuprafata totala a imobilului este de 41 m2, amplasat la nivelul 12 din 16, in bloc nou construit . Locuinta este compartimentata in dormitor, bucatarie, balcon, bloc sanitar si antreu.', 35600),
(2, 3, 5, 'Reparatie euro', 65, 9, 'Da', 'autonoma', 'Ciocana', 'Centru, bd. Iuri Gagarin, 3 odai, 65 m2, Euroreparatie!', 'Apartamentul perfect pentru tine și familia ta! Fii deosebit cu o locuinta deosebita!\r\n\r\nImobilul este situat in sectorul Centru, bd. Iuri Gagarin.\r\nApartamentul are suprafata de 65 m2 si este amplasat la nivelul 5, bloc secundar.\r\n\r\nImobilul este compartimentat in 3 odai, bucatarie, 2 balcoane, bloc sanitar și antreu.', 34990),
(3, 3, 3, 'medie', 74, 4, 'Da', 'centralizata', 'Riscani', 'Riscani, str. MB asarab, 3 odai, 74 m2, zona de parc!', 'Suprafata totala a imobilului este de 74 m2, amplasat la nivelul 3 din 5.\r\nLocuinta este compartimentata in 3 odai, bucatarie, balcon, logie, 2 blocuri sanitare si antreu.', 45500),
(4, 4, 9, 'Reparatie euro', 85, 10, 'Da', 'centralizata', 'Buiucani', 'Buiucani, bd. Alba Iulia, 4 odai, 85 m2, euroreparatie', 'Apartament cu 4 odai in bloc seria 135, situat in sectorul Buiucani, bd. Alba Iulia.\r\nSuprafata: 85 m2, amplasat la nivelul 9 din 10.\r\n', 68000),
(5, 2, 4, 'Medie', 48, 5, 'Da', 'centralizata', 'Botanica', 'Botanica, str. Independentei, 2 odai, 48 m2, et. 4/5, seria Hrusciovka', 'Apartamentul are suprafata de 48 m2, amplasat la nivelul 4 din 5, in bloc seria Hrusciovka.\r\n', 26500),
(6, 2, 4, 'Reparatie euro', 57, 4, 'Da', 'autonoma', 'Centru', 'Centru, str. Zamfir Arbore, 2 odai, 57 m2, euroreparatie!', 'Apartament cu 2 odai cu suprafata de 57 m2, amplasat la nivelul 4 din 4, in bloc nou.\r\n', 42000),
(7, 2, 8, 'Varianta alba', 57, 9, 'Nu', 'autonoma', 'Centru', 'Bloc locativ varianta alba', 'Apartament cu 2 odai cu suprafata de 57 m2, amplasat la nivelul 8 din 9 in bloc nou dat in exploatare!', 38000),
(8, 2, 11, 'Reparatie euro', 70, 14, 'Da', 'autonoma', 'Buiucani', 'Bloc nou! Buiucani, str. Ghioceilor, apartament cu 2 odai, 70 m2, euroreparatie!', 'Apartament in bloc locativ nou dat in exploatare, amplasat in sectorul Buiucani, str. Ghioceilor.\r\nSuprafata totala a imobilului este de 70 m2, amplasat la nivelul 11 din 14.\r\nLocuinta este compartimentata in 2 odai, bucatarie, balcon, bloc sanitar si antreu.\r\n', 48700),
(9, 2, 3, 'Reparatie euro', 59, 5, 'Da', 'centralizata', 'Posta Veche', 'Posta Veche, str-la Studentilor, 2 odai, 59 m2, euroreparatie!', 'Suprafata totala a imobilului este de 59 m2, amplasat la nivelul 3 din 5, in bloc seria 102.\r\nLocuința este compartimentata in 2 odai, bucatarie, balcon, bloc sanitar separat și antreu.\r\n', 34500),
(10, 3, 5, 'Reparatie euro', 160, 5, 'Da', 'autonoma', 'Telecentru', 'Penthouse de lux! Telecentru, 160 m2, design exclusiv! + terasa!', 'Propunem spre vanzare un apartament stilat cu design personalizat, confortabil, luminos, spatios și rafinat!\r\n\r\nTelecentru, str. Ciocarliei, bloc nou in imediata apropiere de Parcul Valea Morilor.\r\nApartamentul are suprafata de 160 m2 și este amplasat la nivelul 5.\r\n\r\nImobilul este compartimentat in 3 odai, bucatarie, 3 blocuri sanitare, garderoba, balcon, terasa și antreu.\r\nApartamentul se remarca prin planificare reusita cu design individual stilat si dotari tehnice de calitate.', 225000),
(11, 3, 3, 'buna', 0, 5, 'Da', 'centralizata', 'Riscani', 'Apartament stare buna', 'Apartament mobiliat, intr-o stare buna cu 3 camere in sectorul Riscani,ofera accs la magazine, scoli, gradinite.', 48000),
(12, 3, 3, 'buna', 87, 0, 'Da', 'centralizata', 'Telecentru', 'Apartament stare buna Telecentru', 'Apartament cu toate comoditatile, in Chisinau, \r\nSectorul telecentru ,  infrastructura bogata.', 47000),
(13, 1, 3, 'buna', 50, 5, 'Da', 'autonoma', 'Posta Veche', 'Apartament Posta veche', 'Apartament in stare buna, posta veche , incalzire autonoma.', 30000),
(14, 3, 6, 'Reparatie Euro', 120, 10, 'Da', 'autonoma', 'Centru', 'Apartament Centru', 'Apartament sectorul centru , mobilat, reparatie euro.', 80000),
(15, 3, 5, 'Reparatie Euro', 110, 9, 'Da', 'autonoma', 'Ciocana', 'Apartament Lux Ciocana', 'Apartament Lux, reparatie euro ,sectorul ciocana .\r\n', 84000),
(16, 3, NULL, NULL, NULL, NULL, 'Da', 'centralizata', 'Ciocana', NULL, NULL, NULL),
(17, 1, NULL, NULL, NULL, NULL, 'Da', 'centralizata', 'Buiucani', NULL, NULL, NULL),
(18, 1, NULL, NULL, NULL, NULL, 'Da', 'centralizata', 'Ciocana', NULL, NULL, NULL),
(19, 2, NULL, NULL, NULL, NULL, 'Da', 'autonoma', 'Buiucani', NULL, NULL, NULL),
(20, 1, NULL, NULL, NULL, NULL, 'Da', 'centralizata', 'Riscani', NULL, NULL, NULL),
(21, 3, NULL, NULL, NULL, NULL, 'Da', 'autonoma', 'Telecentru', NULL, NULL, NULL),
(22, 4, NULL, NULL, NULL, NULL, 'Da', 'autonoma', 'Centru', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contractc`
--

CREATE TABLE `contractc` (
  `id_contractc` int(11) NOT NULL,
  `id_cumparator` int(11) NOT NULL,
  `id_apartament` int(11) NOT NULL,
  `id_angajat` int(11) NOT NULL,
  `data_in` date NOT NULL,
  `data_sf` date NOT NULL,
  `id_serv` int(11) NOT NULL,
  `pret` int(11) NOT NULL,
  `realizat` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contractc`
--

INSERT INTO `contractc` (`id_contractc`, `id_cumparator`, `id_apartament`, `id_angajat`, `data_in`, `data_sf`, `id_serv`, `pret`, `realizat`) VALUES
(1, 1, 4, 1, '2017-12-03', '2017-12-20', 7, 1000, 1),
(3, 3, 1, 1, '2017-09-15', '2017-12-20', 5, 500, 1),
(4, 4, 3, 2, '2017-10-15', '2017-12-02', 7, 1000, 1),
(5, 5, 16, 2, '2017-12-13', '2018-01-25', 7, 1000, 0),
(6, 6, 17, 3, '2017-12-04', '2017-12-21', 5, 500, 1),
(7, 7, 18, 4, '2017-12-05', '2017-12-30', 5, 500, 0),
(8, 8, 19, 4, '2017-11-16', '2018-01-25', 7, 1000, 0),
(9, 9, 20, 3, '2017-12-11', '2018-02-07', 5, 500, 0),
(10, 10, 21, 2, '2017-12-12', '2018-02-07', 7, 1000, 0),
(11, 11, 22, 2, '2017-12-24', '2018-02-01', 7, 1000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contractv`
--

CREATE TABLE `contractv` (
  `id_contractv` int(11) NOT NULL,
  `id_vinzator` int(11) NOT NULL,
  `id_apartament` int(11) NOT NULL,
  `id_angajat` int(11) NOT NULL,
  `data_in` date NOT NULL,
  `data_sf` date NOT NULL,
  `id_serv` int(11) NOT NULL,
  `pret` int(11) NOT NULL,
  `realizat` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contractv`
--

INSERT INTO `contractv` (`id_contractv`, `id_vinzator`, `id_apartament`, `id_angajat`, `data_in`, `data_sf`, `id_serv`, `pret`, `realizat`) VALUES
(1, 1, 7, 2, '2017-12-11', '2017-12-19', 4, 1000, 1),
(2, 2, 2, 3, '2017-12-13', '2017-12-20', 6, 500, 1),
(3, 6, 11, 4, '2017-11-03', '2017-12-20', 2, 100, 1),
(4, 9, 13, 1, '2017-12-04', '2017-12-21', 6, 500, 1),
(5, 11, 15, 1, '2017-12-04', '2017-12-19', 4, 1000, 1),
(6, 3, 1, 4, '2017-11-14', '2018-01-09', 4, 1000, 0),
(7, 4, 3, 2, '2017-12-10', '2018-01-25', 4, 1000, 0),
(8, 5, 4, 4, '2017-11-13', '2018-02-13', 6, 500, 0),
(9, 7, 5, 2, '2017-11-13', '2018-01-23', 6, 500, 0),
(10, 8, 6, 1, '2017-11-12', '2018-01-17', 4, 1000, 0),
(11, 10, 8, 3, '2017-11-19', '2018-02-05', 4, 1000, 0),
(12, 12, 9, 1, '2017-11-05', '2018-01-31', 4, 1000, 0),
(13, 13, 10, 3, '2017-11-05', '2018-01-24', 6, 500, 0),
(14, 14, 12, 2, '2017-11-05', '2018-01-18', 6, 500, 0),
(15, 15, 14, 4, '2017-11-05', '2018-01-26', 6, 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cumparator`
--

CREATE TABLE `cumparator` (
  `id_cumparator` int(11) NOT NULL,
  `nume_cumparator` varchar(30) NOT NULL,
  `prenume_cumparator` varchar(30) NOT NULL,
  `telefon` int(11) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cumparator`
--

INSERT INTO `cumparator` (`id_cumparator`, `nume_cumparator`, `prenume_cumparator`, `telefon`, `email`) VALUES
(1, 'Jorovlea', 'Catalin', 68654312, 'Jorovlea@mail.com'),
(2, 'Lunescu', 'Andrei', 79341638, 'Lunescu@gmail.com'),
(3, 'Ghica', 'Petru', 68899876, 'Ghica@gmail.com'),
(4, 'Chilescu', 'Anastasia', 68747743, 'Chilescu@gmail.com'),
(5, 'Arama', 'Anatol', 68858382, 'Arama@gmail.com'),
(6, 'Mindrescu', 'Lucia', 78542174, 'Mindrescu@gmail.com'),
(7, 'Hincu', 'Vasile', 68757473, 'Hincu@gmail.com'),
(8, 'Ionescu', 'Andrei', 68574727, 'Ionescu@gmail.com'),
(9, 'Ursu', 'Ionela', 78651212, 'Ursu@gmail.com'),
(10, 'Lascu', 'Anatol', 78521342, 'Lascu@gmail.com'),
(11, 'Rosca ', 'Elena', 78543211, 'Rosca@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `grserv`
--

CREATE TABLE `grserv` (
  `id_grserv` int(11) NOT NULL,
  `nume_grupa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grserv`
--

INSERT INTO `grserv` (`id_grserv`, `nume_grupa`) VALUES
(1, 'Vinzare'),
(2, 'Cumparare'),
(3, 'Dare in Arenda'),
(4, 'Chirie');

-- --------------------------------------------------------

--
-- Table structure for table `servicii`
--

CREATE TABLE `servicii` (
  `id_serv` int(11) NOT NULL,
  `nume_serviciu` varchar(50) NOT NULL,
  `id_grserv` int(11) NOT NULL,
  `pret_serv` int(11) DEFAULT NULL,
  `Descriere` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servicii`
--

INSERT INTO `servicii` (`id_serv`, `nume_serviciu`, `id_grserv`, `pret_serv`, `Descriere`) VALUES
(1, 'Evaluarea Imobilului', 1, 100, 'Doriti sa vindeti un apartament?\r\nNoi va oferim o evaluare a acestuia profesionista, in urma evaluarii noastra ve-ti sti pretul adevarat a imobilului pe piata'),
(2, 'Asistenta in vinzarea apartamentului', 1, 100, 'Apartamentul Dvs. este pregatit pentru vanzare si ati gasit un cumparator?\r\nVa ajutam sa perfectati tranzactia de vanzare operativ si in deplina siguranta, astfel incat actele sa corespunda intocmai legislatiei, iar dumneavoastra sa primiti neintarziat suma de bani scontata.'),
(3, 'Asistenta Juridica', 1, 100, 'Asistenta juridica deplina in vederea realizarii  tranzactiei cu obiectul imobiliar'),
(4, 'Vanzarea apartamentelor', 1, 1000, 'Mai intai de toate, noi suntem cei care va reprezentam si va protejam interesele pe piata imobiliara. Incredintand companiei noastre vanzarea imobilului dvs, faceti din start economii de timp, veti vinde convenabil apartamentul si veti obtine un spectru complex de servicii adiacente.'),
(5, 'Arenda Imobilului', 4, 500, 'Compania noastra ofera servicii de inchiriere a apartamentelor, caselor si spatiilor comerciale in Chisinau si in suburbii. De asemenea, conlucram cu clienti corporativi, selectam locuinte pentru angajatii organizatiilor si companiilor pe diferite termene, atit pentru cateva luni, cit si pentru perioade mai mari.'),
(6, 'Darea in arenda a Imobilului', 3, 500, 'Compania noastra ofera posibilitatea de a gasi arendasi pentru spatiul dumnevoastra imobiliar, avind o clientela destul de mare, si o colaborare de succes cu alte companii.'),
(7, 'Cumpararea Imobilului', 2, 1000, 'Noi oferim posibilitatea de a va gasi apartamentul viseolor dumnevoastra, vom gasi apartamentul care corespunde cerintelor dumnevoastra.');

-- --------------------------------------------------------

--
-- Table structure for table `vinzator`
--

CREATE TABLE `vinzator` (
  `id_vinzator` int(11) NOT NULL,
  `nume_vinzator` varchar(30) NOT NULL,
  `prenume_vinzator` varchar(30) NOT NULL,
  `telefon` int(11) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vinzator`
--

INSERT INTO `vinzator` (`id_vinzator`, `nume_vinzator`, `prenume_vinzator`, `telefon`, `email`) VALUES
(1, 'Lupascu', 'Alexei', 68348754, 'Lupascu@mail.com'),
(2, 'Ursu', 'Ana', 67321246, 'Ursu@mail.com'),
(3, 'Glinciuc', 'Gheorghe', 68341265, 'Glinciuc@mail.com'),
(4, 'Varzaru', 'Petru', 78432871, 'Varzaru@mail.com'),
(5, 'Vladimirescu', 'Victor', 68456545, 'Vladimirescu@mail.com'),
(6, 'Anenco', 'Marc', 69543212, 'Anenco@gmail.com'),
(7, 'Cernescu', 'Ion', 78543212, 'Cernescu@gmail.com'),
(8, 'Mihailescu', 'Ion', 78258574, 'Mihailescu@gmail.com'),
(9, 'Igor', 'Radulescu', 78656565, 'Radulescu@gmail.com'),
(10, 'Josan', 'Catalin', 78321232, 'Josan@gmail.com'),
(11, 'Onofrei', 'Diana', 68547371, 'Onofrei@gmail.com'),
(12, 'Petrescu', 'Mihai', 68214375, 'Petrescu@gmail.com'),
(13, 'Timofev', 'Dan', 67432154, 'Timofev@gmail.com'),
(14, 'Nileev', 'Vladimir', 78121314, 'Nileev@gmail.com'),
(15, 'Surucean', 'Emil', 68532119, 'Surucean@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angajat`
--
ALTER TABLE `angajat`
  ADD PRIMARY KEY (`id_angajat`);

--
-- Indexes for table `apartament`
--
ALTER TABLE `apartament`
  ADD PRIMARY KEY (`id_apartament`);

--
-- Indexes for table `contractc`
--
ALTER TABLE `contractc`
  ADD PRIMARY KEY (`id_contractc`),
  ADD KEY `id_angajat` (`id_angajat`),
  ADD KEY `id_cumparator` (`id_cumparator`),
  ADD KEY `id_serv` (`id_serv`),
  ADD KEY `id_apartament` (`id_apartament`);

--
-- Indexes for table `contractv`
--
ALTER TABLE `contractv`
  ADD PRIMARY KEY (`id_contractv`),
  ADD KEY `id_angajat` (`id_angajat`),
  ADD KEY `id_serv` (`id_serv`),
  ADD KEY `id_vinzator` (`id_vinzator`),
  ADD KEY `id_apartament` (`id_apartament`);

--
-- Indexes for table `cumparator`
--
ALTER TABLE `cumparator`
  ADD PRIMARY KEY (`id_cumparator`);

--
-- Indexes for table `grserv`
--
ALTER TABLE `grserv`
  ADD PRIMARY KEY (`id_grserv`);

--
-- Indexes for table `servicii`
--
ALTER TABLE `servicii`
  ADD PRIMARY KEY (`id_serv`),
  ADD KEY `id_grserv` (`id_grserv`);

--
-- Indexes for table `vinzator`
--
ALTER TABLE `vinzator`
  ADD PRIMARY KEY (`id_vinzator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angajat`
--
ALTER TABLE `angajat`
  MODIFY `id_angajat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `apartament`
--
ALTER TABLE `apartament`
  MODIFY `id_apartament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contractc`
--
ALTER TABLE `contractc`
  MODIFY `id_contractc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contractv`
--
ALTER TABLE `contractv`
  MODIFY `id_contractv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cumparator`
--
ALTER TABLE `cumparator`
  MODIFY `id_cumparator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `grserv`
--
ALTER TABLE `grserv`
  MODIFY `id_grserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `servicii`
--
ALTER TABLE `servicii`
  MODIFY `id_serv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vinzator`
--
ALTER TABLE `vinzator`
  MODIFY `id_vinzator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contractc`
--
ALTER TABLE `contractc`
  ADD CONSTRAINT `contractc_ibfk_1` FOREIGN KEY (`id_angajat`) REFERENCES `angajat` (`id_angajat`),
  ADD CONSTRAINT `contractc_ibfk_3` FOREIGN KEY (`id_cumparator`) REFERENCES `cumparator` (`id_cumparator`),
  ADD CONSTRAINT `contractc_ibfk_4` FOREIGN KEY (`id_serv`) REFERENCES `servicii` (`id_serv`),
  ADD CONSTRAINT `contractc_ibfk_5` FOREIGN KEY (`id_apartament`) REFERENCES `apartament` (`id_apartament`);

--
-- Constraints for table `contractv`
--
ALTER TABLE `contractv`
  ADD CONSTRAINT `contractv_ibfk_1` FOREIGN KEY (`id_angajat`) REFERENCES `angajat` (`id_angajat`),
  ADD CONSTRAINT `contractv_ibfk_3` FOREIGN KEY (`id_serv`) REFERENCES `servicii` (`id_serv`),
  ADD CONSTRAINT `contractv_ibfk_4` FOREIGN KEY (`id_vinzator`) REFERENCES `vinzator` (`id_vinzator`),
  ADD CONSTRAINT `contractv_ibfk_5` FOREIGN KEY (`id_apartament`) REFERENCES `apartament` (`id_apartament`);

--
-- Constraints for table `servicii`
--
ALTER TABLE `servicii`
  ADD CONSTRAINT `servicii_ibfk_1` FOREIGN KEY (`id_grserv`) REFERENCES `grserv` (`id_grserv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
