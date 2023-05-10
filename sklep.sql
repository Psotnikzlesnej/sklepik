-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Maj 2023, 09:14
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` tinyint(1) DEFAULT 1,
  `type` enum('home_top','home_tile','home_bottom','store') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `banner`
--

INSERT INTO `banner` (`ID`, `title`, `description`, `image_name`, `link`, `visible`, `type`, `alt`) VALUES
(1, 'Divanoodle', 'vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non q', 'http://dummyimage.com/182x100.png/ff4444/ffffff', 'http://slashdot.org/in/magna.png?consequat=ac&morbi=consequat&a=metus&ipsum=sapien&integer=ut&a=nunc&nibh=vestibulum&in=ante&quis=ipsum&justo=primis&maecenas=in&rhoncus=faucibus&aliquam=orci&lacus=luctus&morbi=et&quis=ultrices&tortor=posuere&id=cubilia&nu', 0, 'home_top', 'nulla facilisi cras non velit nec'),
(2, 'Agivu', 'erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congu', 'http://dummyimage.com/158x100.png/5fa2dd/ffffff', 'http://tripod.com/mauris/enim/leo/rhoncus/sed.jsp?gravida=sapien&sem=in&praesent=sapien&id=iaculis&massa=congue&id=vivamus&nisl=metus&venenatis=arcu&lacinia=adipiscing&aenean=molestie&sit=hendrerit&amet=at&justo=vulputate&morbi=vitae&ut=nisl&odio=aenean&c', 1, 'home_bottom', 'eu interdum eu tincidunt in leo'),
(3, 'Meetz', 'platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed a', 'http://dummyimage.com/185x100.png/5fa2dd/ffffff', 'http://biblegateway.com/congue/elementum/in/hac/habitasse/platea/dictumst.json?neque=massa&libero=volutpat&convallis=convallis&eget=morbi&eleifend=odio&luctus=odio&ultricies=elementum&eu=eu&nibh=interdum&quisque=eu&id=tincidunt&justo=in&sit=leo&amet=maece', 1, 'store', 'felis sed interdum venenatis turpis'),
(4, 'Livefish', 'cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis just', 'http://dummyimage.com/153x100.png/ff4444/ffffff', 'http://epa.gov/habitasse/platea.xml?aenean=nisi&fermentum=at&donec=nibh&ut=in&mauris=hac&eget=habitasse&massa=platea&tempor=dictumst&convallis=aliquam&nulla=augue&neque=quam&libero=sollicitudin&convallis=vitae&eget=consectetuer&eleifend=eget&luctus=rutrum', 0, 'home_tile', 'consectetuer adipiscing elit proin risus praesent'),
(5, 'Mydeo', 'rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehi', 'http://dummyimage.com/116x100.png/5fa2dd/ffffff', 'https://webnode.com/at/turpis/a.jpg?vulputate=eleifend&luctus=quam&cum=a&sociis=odio&natoque=in&penatibus=hac&et=habitasse&magnis=platea&dis=dictumst&parturient=maecenas&montes=ut&nascetur=massa&ridiculus=quis&mus=augue&vivamus=luctus&vestibulum=tincidunt', 1, 'store', 'vel nisl duis ac nibh fusce lacus purus'),
(6, 'Twimm', 'porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes ', 'http://dummyimage.com/108x100.png/dddddd/000000', 'http://wiley.com/condimentum.jsp?natoque=nec&penatibus=nisi&et=volutpat&magnis=eleifend&dis=donec&parturient=ut&montes=dolor&nascetur=morbi&ridiculus=vel&mus=lectus&etiam=in&vel=quam&augue=fringilla&vestibulum=rhoncus&rutrum=mauris&rutrum=enim&neque=leo&a', 1, 'home_tile', 'id turpis integer aliquet massa'),
(7, 'Nlounge', 'lorem ipsum dolor sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan', 'http://dummyimage.com/156x100.png/cc0000/ffffff', 'https://guardian.co.uk/curabitur/convallis/duis/consequat.xml?cum=eu&sociis=sapien&natoque=cursus&penatibus=vestibulum&et=proin&magnis=eu&dis=mi&parturient=nulla&montes=ac&nascetur=enim&ridiculus=in&mus=tempor&vivamus=turpis&vestibulum=nec&sagittis=euismo', 1, 'home_top', 'vivamus vestibulum sagittis sapien cum sociis natoque'),
(8, 'Meeveo', 'suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at veli', 'http://dummyimage.com/186x100.png/cc0000/ffffff', 'https://behance.net/fusce/congue/diam.jsp?potenti=faucibus&cras=accumsan&in=odio&purus=curabitur&eu=convallis&magna=duis&vulputate=consequat&luctus=dui&cum=nec&sociis=nisi&natoque=volutpat&penatibus=eleifend&et=donec&magnis=ut&dis=dolor&parturient=morbi&m', 0, 'home_bottom', 'in blandit ultrices enim lorem ipsum dolor');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`ID`, `name`, `image_name`, `parent`, `level`, `type`, `description`) VALUES
(1, 'Cogilith', 'http://dummyimage.com/168x100.png/5fa2dd/ffffff', NULL, 1, 'justo etiam pretium', 'consequat dui nec nisi volutpat eleifend donec ut'),
(2, 'Dynazzy', 'http://dummyimage.com/117x100.png/cc0000/ffffff', NULL, 1, 'accumsan tortor quis', 'viverra diam vitae quam suspendisse potenti nullam porttitor'),
(3, 'Yodo', 'http://dummyimage.com/210x100.png/5fa2dd/ffffff', NULL, 1, 'duis aliquam convallis', 'mattis egestas metus aenean fermentum donec'),
(4, 'Aivee', 'http://dummyimage.com/188x100.png/dddddd/000000', NULL, 1, 'dapibus augue vel', 'molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque'),
(5, 'Zoozzy', 'http://dummyimage.com/160x100.png/ff4444/ffffff', NULL, 1, 'nullam orci pede', 'pellentesque ultrices mattis odio donec vitae nisi nam ultrices'),
(6, 'Gigashots', 'http://dummyimage.com/140x100.png/dddddd/000000', 3, 2, 'blandit lacinia erat', 'lectus in est risus auctor sed tristique in tempus sit'),
(7, 'Dynava', 'http://dummyimage.com/123x100.png/dddddd/000000', 4, 2, 'eu felis fusce', 'id consequat in consequat ut nulla sed'),
(8, 'Gabvine', 'http://dummyimage.com/107x100.png/ff4444/ffffff', 6, 3, 'nulla tellus in', 'potenti nullam porttitor lacus at turpis donec posuere metus');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `delivery`
--

CREATE TABLE `delivery` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `delivery`
--

INSERT INTO `delivery` (`ID`, `name`) VALUES
(1, '24'),
(2, '24'),
(3, '24'),
(4, '24'),
(5, '24'),
(6, '24'),
(7, '24'),
(8, '24');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filter`
--

CREATE TABLE `filter` (
  `ID` int(11) NOT NULL,
  `type` enum('manufacturer','color','grid_multiple','range','slider') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `filter`
--

INSERT INTO `filter` (`ID`, `type`, `name`) VALUES
(1, 'color', 'Trupe'),
(2, 'color', 'Oba'),
(3, 'range', 'Devpoint'),
(4, 'range', 'Eimbee'),
(5, 'slider', 'Devbug'),
(6, 'slider', 'Photojam'),
(7, 'grid_multiple', 'Zoomzone'),
(8, 'grid_multiple', 'Voonder');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filter_value`
--

CREATE TABLE `filter_value` (
  `ID` int(11) NOT NULL,
  `ID_filter` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `flag`
--

CREATE TABLE `flag` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `flag`
--

INSERT INTO `flag` (`ID`, `name`) VALUES
(1, 'new'),
(2, 'new'),
(3, 'new'),
(4, 'new'),
(5, 'promo'),
(6, 'promo'),
(7, 'promo'),
(8, 'promo');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `parameter_value`
--

CREATE TABLE `parameter_value` (
  `ID` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_price` decimal(10,0) DEFAULT NULL,
  `catalog_price` decimal(10,0) DEFAULT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `delivery_ID` int(11) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT 1,
  `variant_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variant_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `product`
--

INSERT INTO `product` (`ID`, `name`, `description`, `video_url`, `promo_price`, `catalog_price`, `serial_number`, `stock`, `delivery_ID`, `visible`, `variant_name`, `variant_ID`) VALUES
(1, 'Granger', 'est risus auctor sed tristique in tempus sit amet sem', 'http://dummyimage.com/166x100.png/ff4444/ffffff', '55', '22', '4237e8dsx793', 89, 8, 1, 'amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt', 1),
(2, 'Caryl', 'cursus id turpis integer aliquet massa id lobortis convallis tortor', 'http://dummyimage.com/169x100.png/dddddd/000000', '20', '87', '4237e8dsx793', 96, 7, 1, 'id lobortis convallis tortor risus dapibus augue vel accumsan tellus', 1),
(3, 'Gilbertina', 'ac lobortis vel dapibus at diam nam', 'http://dummyimage.com/181x100.png/ff4444/ffffff', '72', '21', '4237e8dsx793', 41, 6, 0, 'justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut', 1),
(4, 'Charline', 'lacinia eget tincidunt eget tempus vel pede morbi', 'http://dummyimage.com/213x100.png/dddddd/000000', '93', '49', '4237e8dsx793', 20, 5, 0, 'morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum', 2),
(5, 'Thane', 'nulla mollis molestie lorem quisque ut erat curabitur', 'http://dummyimage.com/150x100.png/cc0000/ffffff', '76', '85', '4237e8dsx793', 84, 4, 1, 'maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus', 2),
(6, 'Jacob', 'amet erat nulla tempus vivamus in felis', 'http://dummyimage.com/230x100.png/ff4444/ffffff', '5', '99', '4237e8dsx793', 37, 3, 1, 'id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate', 2),
(7, 'Beck', 'nullam molestie nibh in lectus pellentesque at', 'http://dummyimage.com/148x100.png/dddddd/000000', '13', '87', '4237e8dsx793', 12, 2, 1, 'lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare', 3),
(8, 'Ingunna', 'nulla ut erat id mauris vulputate elementum nullam varius', 'http://dummyimage.com/195x100.png/dddddd/000000', '93', '71', '4237e8dsx793', 47, 1, 0, 'ipsum primis in faucibus orci luctus et ultrices posuere cubilia', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_category`
--

CREATE TABLE `product_category` (
  `product_ID` int(11) NOT NULL,
  `category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_filter`
--

CREATE TABLE `product_filter` (
  `product_ID` int(11) NOT NULL,
  `filter_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_flag`
--

CREATE TABLE `product_flag` (
  `product_ID` int(11) NOT NULL,
  `flag_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_image`
--

CREATE TABLE `product_image` (
  `ID` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_ID` int(11) DEFAULT NULL,
  `main` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `product_image`
--

INSERT INTO `product_image` (`ID`, `image_name`, `product_ID`, `main`) VALUES
(1, 'http://dummyimage.com/113x100.png/ff4444/ffffff', 1, 0),
(2, 'http://dummyimage.com/205x100.png/cc0000/ffffff', 8, 0),
(3, 'http://dummyimage.com/170x100.png/5fa2dd/ffffff', 4, 0),
(4, 'http://dummyimage.com/220x100.png/5fa2dd/ffffff', 1, 0),
(5, 'http://dummyimage.com/112x100.png/dddddd/000000', 6, 0),
(6, 'http://dummyimage.com/219x100.png/dddddd/000000', 6, 0),
(7, 'http://dummyimage.com/210x100.png/dddddd/000000', 6, 1),
(8, 'http://dummyimage.com/243x100.png/cc0000/ffffff', 8, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_parameter_value`
--

CREATE TABLE `product_parameter_value` (
  `product_ID` int(11) NOT NULL,
  `parameter_value_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `parent` (`parent`);

--
-- Indeksy dla tabeli `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `filter`
--
ALTER TABLE `filter`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `filter_value`
--
ALTER TABLE `filter_value`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_filter` (`ID_filter`);

--
-- Indeksy dla tabeli `flag`
--
ALTER TABLE `flag`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `parameter_value`
--
ALTER TABLE `parameter_value`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `delivery_ID` (`delivery_ID`);

--
-- Indeksy dla tabeli `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_ID`,`category_ID`),
  ADD KEY `category_ID` (`category_ID`);

--
-- Indeksy dla tabeli `product_filter`
--
ALTER TABLE `product_filter`
  ADD PRIMARY KEY (`product_ID`,`filter_ID`),
  ADD KEY `filter_ID` (`filter_ID`);

--
-- Indeksy dla tabeli `product_flag`
--
ALTER TABLE `product_flag`
  ADD PRIMARY KEY (`product_ID`,`flag_ID`),
  ADD KEY `flag_ID` (`flag_ID`);

--
-- Indeksy dla tabeli `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `product_ID` (`product_ID`);

--
-- Indeksy dla tabeli `product_parameter_value`
--
ALTER TABLE `product_parameter_value`
  ADD PRIMARY KEY (`product_ID`,`parameter_value_ID`),
  ADD KEY `parameter_value_ID` (`parameter_value_ID`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `category` (`ID`);

--
-- Ograniczenia dla tabeli `filter_value`
--
ALTER TABLE `filter_value`
  ADD CONSTRAINT `filter_value_ibfk_1` FOREIGN KEY (`ID_filter`) REFERENCES `filter` (`ID`);

--
-- Ograniczenia dla tabeli `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`delivery_ID`) REFERENCES `delivery` (`ID`);

--
-- Ograniczenia dla tabeli `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `product_category_ibfk_1` FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `product_category_ibfk_2` FOREIGN KEY (`category_ID`) REFERENCES `category` (`ID`);

--
-- Ograniczenia dla tabeli `product_filter`
--
ALTER TABLE `product_filter`
  ADD CONSTRAINT `product_filter_ibfk_1` FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `product_filter_ibfk_2` FOREIGN KEY (`filter_ID`) REFERENCES `filter` (`ID`);

--
-- Ograniczenia dla tabeli `product_flag`
--
ALTER TABLE `product_flag`
  ADD CONSTRAINT `product_flag_ibfk_1` FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `product_flag_ibfk_2` FOREIGN KEY (`flag_ID`) REFERENCES `flag` (`ID`);

--
-- Ograniczenia dla tabeli `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`);

--
-- Ograniczenia dla tabeli `product_parameter_value`
--
ALTER TABLE `product_parameter_value`
  ADD CONSTRAINT `product_parameter_value_ibfk_1` FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `product_parameter_value_ibfk_2` FOREIGN KEY (`parameter_value_ID`) REFERENCES `parameter_value` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
