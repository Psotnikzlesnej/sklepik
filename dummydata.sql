
INSERT INTO `banner` (`ID`, `title`, `description`, `image_name`, `link`, `visible`, `type`, `alt`, `mask`) VALUES
(1, 'banner_home', 'Poznaj SEDNA Schneider Electric Sedna to osprzęt elektroinstalacyjny o wyrazistym kształcie oraz unikalnej formie.', './photo/Group 40.png', 0, 'home_top', 'banner strony głównej', 1),
(2, 'Agivu', 'erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congu', 'http://dummyimage.com/158x100.png/5fa2dd/ffffff', 'http://tripod.com/mauris/enim/leo/rhoncus/sed.jsp?gravida=sapien&sem=in&praesent=sapien&id=iaculis&massa=congue&id=vivamus&nisl=metus&venenatis=arcu&lacinia=adipiscing&aenean=molestie&sit=hendrerit&amet=at&justo=vulputate&morbi=vitae&ut=nisl&odio=aenean&c', 1, 'home_bottom', 'eu interdum eu tincidunt in leo', 0),
(3, 'Meetz', 'platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed a', 'http://dummyimage.com/185x100.png/5fa2dd/ffffff', 'http://biblegateway.com/congue/elementum/in/hac/habitasse/platea/dictumst.json?neque=massa&libero=volutpat&convallis=convallis&eget=morbi&eleifend=odio&luctus=odio&ultricies=elementum&eu=eu&nibh=interdum&quisque=eu&id=tincidunt&justo=in&sit=leo&amet=maece', 1, 'store', 'felis sed interdum venenatis turpis', 1),
(4, 'Livefish', 'cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis just', 'http://dummyimage.com/153x100.png/ff4444/ffffff', 'http://epa.gov/habitasse/platea.xml?aenean=nisi&fermentum=at&donec=nibh&ut=in&mauris=hac&eget=habitasse&massa=platea&tempor=dictumst&convallis=aliquam&nulla=augue&neque=quam&libero=sollicitudin&convallis=vitae&eget=consectetuer&eleifend=eget&luctus=rutrum', 0, 'home_tile', 'consectetuer adipiscing elit proin risus praesent', 0),
(5, 'Mydeo', 'rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehi', 'http://dummyimage.com/116x100.png/5fa2dd/ffffff', 'https://webnode.com/at/turpis/a.jpg?vulputate=eleifend&luctus=quam&cum=a&sociis=odio&natoque=in&penatibus=hac&et=habitasse&magnis=platea&dis=dictumst&parturient=maecenas&montes=ut&nascetur=massa&ridiculus=quis&mus=augue&vivamus=luctus&vestibulum=tincidunt', 1, 'store', 'vel nisl duis ac nibh fusce lacus purus', 1),
(6, 'Twimm', 'porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes ', 'http://dummyimage.com/108x100.png/dddddd/000000', 'http://wiley.com/condimentum.jsp?natoque=nec&penatibus=nisi&et=volutpat&magnis=eleifend&dis=donec&parturient=ut&montes=dolor&nascetur=morbi&ridiculus=vel&mus=lectus&etiam=in&vel=quam&augue=fringilla&vestibulum=rhoncus&rutrum=mauris&rutrum=enim&neque=leo&a', 1, 'home_tile', 'id turpis integer aliquet massa', 0),
(7, 'Nlounge', 'lorem ipsum dolor sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan', 'http://dummyimage.com/156x100.png/cc0000/ffffff', 'https://guardian.co.uk/curabitur/convallis/duis/consequat.xml?cum=eu&sociis=sapien&natoque=cursus&penatibus=vestibulum&et=proin&magnis=eu&dis=mi&parturient=nulla&montes=ac&nascetur=enim&ridiculus=in&mus=tempor&vivamus=turpis&vestibulum=nec&sagittis=euismo', 1, 'home_top', 'vivamus vestibulum sagittis sapien cum sociis natoque', 1),
(8, 'Meeveo', 'suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at veli', 'http://dummyimage.com/186x100.png/cc0000/ffffff', 'https://behance.net/fusce/congue/diam.jsp?potenti=faucibus&cras=accumsan&in=odio&purus=curabitur&eu=convallis&magna=duis&vulputate=consequat&luctus=dui&cum=nec&sociis=nisi&natoque=volutpat&penatibus=eleifend&et=donec&magnis=ut&dis=dolor&parturient=morbi&m', 0, 'home_bottom', 'in blandit ultrices enim lorem ipsum dolor', 0);

INSERT INTO `category` (`ID`, `name`, `image_name`, `parent`, `level`,`description`) VALUES
(1, 'Gniazdka, wyłączniki', 'http://dummyimage.com/168x100.png/5fa2dd/ffffff', NULL, 1,  'Gniazda elektryczne są niezbędnym elementem instalacji elektrycznej. To dzięki nim użytkownicy mogą zasilić urządzenia i sprzęt. Kontakty elektryczne są funkcjonalne i łatwe w montażu. Posiadamy zarówno gniazda instalacyjne natynkowe, podtynkowe, nowoczesne gniazdka teleinformatyczne, RTV i SAT, jak i hermetyczne, sprawdzające się tam, gdzie istnieje ryzyko kontaktu z wodą – łazienka, kuchnia…'),
(2, 'Dynazzy', 'http://dummyimage.com/117x100.png/cc0000/ffffff', NULL, 1,  'viverra diam vitae quam suspendisse potenti nullam porttitor'),
(3, 'Yodo', 'http://dummyimage.com/210x100.png/5fa2dd/ffffff', NULL, 1,  'mattis egestas metus aenean fermentum donec'),
(4, 'Aivee', 'http://dummyimage.com/188x100.png/dddddd/000000', NULL, 1,  'molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque'),
(5, 'Zoozzy', 'http://dummyimage.com/160x100.png/ff4444/ffffff', NULL, 1,  'pellentesque ultrices mattis odio donec vitae nisi nam ultrices'),
(6, 'Gigashots', 'http://dummyimage.com/140x100.png/dddddd/000000', 3, 2, 'lectus in est risus auctor sed tristique in tempus sit'),
(7, 'Dynava', 'http://dummyimage.com/123x100.png/dddddd/000000', 4, 2, 'id consequat in consequat ut nulla sed'),
(8, 'Gabvine', 'http://dummyimage.com/107x100.png/ff4444/ffffff', 6, 3, 'potenti nullam porttitor lacus at turpis donec posuere metus');

INSERT INTO `delivery` (`ID`, `name`) VALUES
(1, '24'),
(2, '24'),
(3, '24'),
(4, '24'),
(5, '24'),
(6, '24'),
(7, '24'),
(8, '24');

INSERT INTO `filter` (`ID`, `type`, `name`) VALUES
(1, 'color', 'Kolor'),
(2, 'range', 'Zakres'),
(3, 'slider', 'Cena'),
(4, 'grid_multiple', 'Numer');

INSERT INTO `filter_value` (`ID`, `ID_filter`, `value`) VALUES
(1, 1, 'Żółty'),
(2, 1, 'Czerwony'),
(3, 2, '25'),
(4, 2, '100'),
(5, 3, '50'),
(6, 3, '75'),
(7, 4, '90'),
(8, 4, '100');

INSERT INTO `flag` (`ID`, `name`) VALUES
(1, 'Nowość'),
(2, 'Dostępny'),
(3, 'Promocja');

INSERT INTO `parameter_value` (`ID`, `value`, `parameter`) VALUES
(1, '33', 'parametr'),
(2, '21', 'velit vivamus'),
(3, '36', 'metus'),
(4, '110', 'nisi'),
(5, '56', 'pede lobortis'),
(6, '60', 'ultrices');

INSERT INTO `product` (`ID`, `name`, `description`, `video_url`, `promo_price`, `catalog_price`, `serial_number`, `stock`, `delivery_ID`, `visible`, `variant_group_ID`, `variant_name`) VALUES
(1, 'Łącznik jednobiegunowy (moduł) 10AX, 250V~, zaciski śrubowe biały Simon 10 CW1.01/11', 'Simon 10 to ekonomiczna seria modułowa dla inwestycji, na których zróżnicowana kolorystyka nie jest wymagana. Dwa podstawowe kolory: biały i kremowy oraz pełen przekrój asortymentu łączników i gniazd pozwolą na kompleksowe wyposażenie każdego mieszkania lub biura. Elementem wyróżniającym tę serię jest nieprzewodzący prądu mostek wykonany z wysokiej jakości tworzywa zapewniającego trwałość i elastyczność oraz bezpieczeństwo podczas prac montażowych', './Photo -1.png', '442,85', '656,65', 'IPC-HFW2231S-S-0280B', 89, 8, 1, 1, 'czarny'),


(2, 'Caryl', 'cursus id turpis integer aliquet massa id lobortis convallis tortor', 'http://dummyimage.com/169x100.png/dddddd/000000', '20', '87', '4237e8dsx793', 96, 7, 1, 1, 'id lobortis convallis tortor risus dapibus augue vel accumsan tellus'),
(3, 'Gilbertina', 'ac lobortis vel dapibus at diam nam', 'http://dummyimage.com/181x100.png/ff4444/ffffff', '72', '21', '4237e8dsx793', 41, 6, 0, 1, 'justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut'),
(4, 'Charline', 'lacinia eget tincidunt eget tempus vel pede morbi', 'http://dummyimage.com/213x100.png/dddddd/000000', '93', '49', '4237e8dsx793', 20, 5, 0, 2, 'morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum'),
(5, 'Thane', 'nulla mollis molestie lorem quisque ut erat curabitur', 'http://dummyimage.com/150x100.png/cc0000/ffffff', '76', '85', '4237e8dsx793', 84, 4, 1, 2, 'maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus'),
(6, 'Jacob', 'amet erat nulla tempus vivamus in felis', 'http://dummyimage.com/230x100.png/ff4444/ffffff', '5', '99', '4237e8dsx793', 37, 3, 1, 2, 'id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate'),
(7, 'Beck', 'nullam molestie nibh in lectus pellentesque at', 'http://dummyimage.com/148x100.png/dddddd/000000', '13', '87', '4237e8dsx793', 12, 2, 1, 3, 'lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare'),
(8, 'Ingunna', 'nulla ut erat id mauris vulputate elementum nullam varius', 'http://dummyimage.com/195x100.png/dddddd/000000', '93', '71', '4237e8dsx793', 47, 1, 0, 3, 'ipsum primis in faucibus orci luctus et ultrices posuere cubilia');

INSERT INTO `product_category` (`product_ID`, `category_ID`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 4),
(8, 3);

INSERT INTO `product_filter_value` (`product_ID`, `filter_value_ID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 2),
(5, 7),
(6, 4),
(7, 4),
(8, 8);

INSERT INTO `product_flag` (`product_ID`, `flag_ID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2);

INSERT INTO `product_image` (`ID`, `image_name`, `product_ID`, `main`) VALUES
(1, './photos/Image 149.png', 1, 0),
(2, 'http://dummyimage.com/205x100.png/cc0000/ffffff', 8, 0),
(3, 'http://dummyimage.com/170x100.png/5fa2dd/ffffff', 4, 0),
(4, 'http://dummyimage.com/220x100.png/5fa2dd/ffffff', 1, 0),
(5, 'http://dummyimage.com/112x100.png/dddddd/000000', 6, 0),
(6, 'http://dummyimage.com/219x100.png/dddddd/000000', 6, 0),
(7, 'http://dummyimage.com/210x100.png/dddddd/000000', 6, 1),
(8, 'http://dummyimage.com/243x100.png/cc0000/ffffff', 8, 0);

INSERT INTO `product_parameter_value` (`product_ID`, `parameter_value_ID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 2),
(5, 3),
(6, 4),
(7, 5),
(8, 6);



insert into manufacturer (ID, name, image_name) values (1, 'Skilith', 'http://dummyimage.com/188x100.png/cc0000/ffffff');
insert into manufacturer (ID, name, image_name) values (2, 'Wordpedia', 'http://dummyimage.com/180x100.png/cc0000/ffffff');
insert into manufacturer (ID, name, image_name) values (3, 'Edgeblab', 'http://dummyimage.com/201x100.png/cc0000/ffffff');
insert into manufacturer (ID, name, image_name) values (4, 'Npath', 'http://dummyimage.com/244x100.png/5fa2dd/ffffff');
insert into manufacturer (ID, name, image_name) values (5, 'Aimbu', 'http://dummyimage.com/134x100.png/dddddd/000000');
insert into manufacturer (ID, name, image_name) values (6, 'Tagcat', 'http://dummyimage.com/177x100.png/5fa2dd/ffffff');
insert into manufacturer (ID, name, image_name) values (7, 'Twinte', 'http://dummyimage.com/113x100.png/dddddd/000000');
insert into manufacturer (ID, name, image_name) values (8, 'Mydo', 'http://dummyimage.com/210x100.png/cc0000/ffffff');



INSERT INTO `product_manufacturer` (`product_ID`, `manufacturer_ID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 2),
(5, 3),
(6, 4),
(7, 5),
(8, 6);
