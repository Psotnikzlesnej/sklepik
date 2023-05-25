
INSERT INTO `banner` (`ID`, `title`, `description`, `image_name`, `link`, `visible`, `type`, `alt`, `mask`) VALUES
(1, 'Poznaj SEDNA ', '<h2> Schneider Electric </h2> <p> Sedna to osprzęt elektroinstalacyjny o wyrazistym kształcie oraz unikalnej formie.</p>','Group_40.jpg', 'http://biblegateway.com/congue/elementum/in/hac/habitasse/platea/dictumst.json?neque=massa&libero=volutpat&convallis=convallis&eget=morbi&eleifend=odio&luctus=odio&ultricies=elementum&eu=eu&nibh=interdum&quisque=eu&id=tincidunt&justo=in&sit=leo&amet=maece', 1, 'home_top', 'baner strony głównej', 1),
(2, 'Philips HUE', '<h2> Oświetl swój dom </h2> <p>Wyobraź sobie, że jednym dotknięciem wyłączasz wszystkie światła.</p>', 'Mask_Group_40.jpg', 'http://biblegateway.com/congue/elementum/in/hac/habitasse/platea/dictumst.json?neque=massa&libero=volutpat&convallis=convallis&eget=morbi&eleifend=odio&luctus=odio&ultricies=elementum&eu=eu&nibh=interdum&quisque=eu&id=tincidunt&justo=in&sit=leo&amet=maece', 1, 'home_top', '2 baner strony głównej', 1),
(3, 'Pomoc Eksperta', '<h2> Doradzamy </h2>', 'image_203.jpg', 'http://biblegateway.com/congue/elementum/in/hac/habitasse/platea/dictumst.json?neque=massa&libero=volutpat&convallis=convallis&eget=morbi&eleifend=odio&luctus=odio&ultricies=elementum&eu=eu&nibh=interdum&quisque=eu&id=tincidunt&justo=in&sit=leo&amet=maece', 1, 'home_tile', 'home tile ekspert', 1),
(4, 'Szukaj Wygodnie', '<h2> Elhurt plus </h2>', 'image_204.jpg', 'http://epa.gov/habitasse/platea.xml?aenean=nisi&fermentum=at&donec=nibh&ut=in&mauris=hac&eget=habitasse&massa=platea&tempor=dictumst&convallis=aliquam&nulla=augue&neque=quam&libero=sollicitudin&convallis=vitae&eget=consectetuer&eleifend=eget&luctus=rutrum', 1, 'home_tile', 'home tile szukaj', 1),
(5, 'Seria Unica', '<h2> Wyjątkowy wzór </h2>', 'image_205.jpg', 'https://webnode.com/at/turpis/a.jpg?vulputate=eleifend&luctus=quam&cum=a&sociis=odio&natoque=in&penatibus=hac&et=habitasse&magnis=platea&dis=dictumst&parturient=maecenas&montes=ut&nascetur=massa&ridiculus=quis&mus=augue&vivamus=luctus&vestibulum=tincidunt', 1, 'home_tile', 'home tile unica', 1),
(6, 'Sprawdź dlaczego my', 'Początki działalności to rok 2002r i otwarcie hurtowni elektrycznej, oferującej podstawoer produkty do instalacji elektrycznych jak i również materiały używane w przemyśle wydobywczym. Firma dostarczała produkty trudno dostępne do kopalń, zakładów przemysłowych <img src="icon1.png"> <img src="icon2.png"> <img src="icon3.png">', 'image.jpg', 'http://wiley.com/condimentum.jsp?natoque=nec&penatibus=nisi&et=volutpat&magnis=eleifend&dis=donec&parturient=ut&montes=dolor&nascetur=morbi&ridiculus=vel&mus=lectus&etiam=in&vel=quam&augue=fringilla&vestibulum=rhoncus&rutrum=mauris&rutrum=enim&neque=leo&a', 1, 'home_bottom', 'about_us', 0),
(7, 'DJI Mavic Air 2', '<h2> Fly More Combo </h2>', 'img_04.jpg', 'https://guardian.co.uk/curabitur/convallis/duis/consequat.xml?cum=eu&sociis=sapien&natoque=cursus&penatibus=vestibulum&et=proin&magnis=eu&dis=mi&parturient=nulla&montes=ac&nascetur=enim&ridiculus=in&mus=tempor&vivamus=turpis&vestibulum=nec&sagittis=euismo', 1, 'store', 'banner sklep', 1);

INSERT INTO `category` (`ID`, `name`, `image_name`, `parent`, `level`,`description`) VALUES
(1, 'Gniazdka,wyłączniki', 'http://dummyimage.com/168x100.png/5fa2dd/ffffff', NULL, 1,  'Gniazda elektryczne są niezbędnym elementem instalacji elektrycznej. To dzięki nim użytkownicy mogą zasilić urządzenia i sprzęt. Kontakty elektryczne są funkcjonalne i łatwe w montażu. Posiadamy zarówno gniazda instalacyjne natynkowe, podtynkowe, nowoczesne gniazdka teleinformatyczne, RTV i SAT, jak i hermetyczne, sprawdzające się tam, gdzie istnieje ryzyko kontaktu z wodą – łazienka, kuchnia…'),
(2, 'Philips', 'http://dummyimage.com/168x100.png/5fa2dd/ffffff', 1, 2,  'Oferujemy szeroki wybór żarówek marki Philips. Jako renomowany producent oświetlenia, Philips jest znany ze swojej innowacyjności, jakości wykonania i trwałości swoich produktów. Dzięki naszej ofercie żarówek Philips, możesz oświetlić swój dom, biuro lub dowolne miejsce w najbardziej efektywny i stylowy sposób.'),
(3, 'Osram', 'http://dummyimage.com/168x100.png/5fa2dd/ffffff', 1, 2,  'Jako wiodący producent oświetlenia, Osram słynie z wysokiej jakości produktów, innowacyjnych rozwiązań i niezawodności. Dzięki naszej bogatej ofercie żarówek marki Osram, możesz stworzyć odpowiednie oświetlenie w każdym pomieszczeniu i wypełnić je ciepłem i atmosferą.'),
(4, 'Spiral', 'http://dummyimage.com/168x100.png/5fa2dd/ffffff', 1, 2,  ' Jako renomowany producent oświetlenia, Spiral słynie z wysokiej jakości produktów, innowacyjnych rozwiązań i zaawansowanej technologii. Dzięki naszej bogatej ofercie żarówek Spiral, możesz znaleźć idealne rozwiązanie oświetleniowe do swojego domu, biura lub dowolnego innego miejsca.'),
(5, 'Automatyka, Sterowanie', 'http://dummyimage.com/117x100.png/cc0000/ffffff', NULL, 1,  'Witamy w kategorii "Automatyka, sterowanie" naszego sklepu internetowego! Znajdziesz tutaj szeroki wybór wysokiej jakości produktów, które umożliwią Ci automatyzację procesów oraz precyzyjne sterowanie nimi. Nasza oferta obejmuje innowacyjne urządzenia i systemy z różnych branż, takich jak przemysł, energetyka, transport i wiele innych. Dzięki naszym produktom będziesz mógł zoptymalizować swoje operacje, zwiększyć efektywność oraz osiągnąć doskonałą kontrolę nad swoimi procesami.'),
(6, 'Żródła światła', 'http://dummyimage.com/210x100.png/5fa2dd/ffffff', NULL, 1,  'Oferujemy szeroki wybór wysokiej jakości produktów, które doskonale oświetlą Twoje wnętrza i stworzą przyjemną atmosferę w każdym pomieszczeniu. Nasza oferta obejmuje różnorodne rodzaje źródeł światła, które są nie tylko funkcjonalne, ale także estetyczne i energooszczędne.'),
(7, 'Oświetlenie wewnętrzne', 'http://dummyimage.com/188x100.png/dddddd/000000', NULL, 1,  'Znajdziesz tutaj szeroki wybór wysokiej jakości produktów, które pozwolą Ci stworzyć idealną atmosferę wewnątrz swojego domu, biura czy innego wnętrza. Nasza oferta obejmuje różnorodne style, wzory i rodzaje oświetlenia, które spełnią Twoje najwyższe oczekiwania.'),
(8, 'Rozdzielnie i aparatura', 'http://dummyimage.com/160x100.png/ff4444/ffffff', NULL, 1,  'W naszym sklepie stawiamy na wysoką jakość, dlatego oferujemy produkty renomowanych producentów, którzy są gwarancją nie tylko solidności, ale również bezpieczeństwa Twojej instalacji elektrycznej. Zapewniamy profesjonalną obsługę i doradztwo, aby pomóc Ci w wyborze odpowiednich produktów dla Twoich indywidualnych potrzeb. Przełącz na wyższy poziom efektywności i bezpieczeństwa dzięki naszym rozdzielniom i aparaturze!'),
(9, 'Materiały instalacyjne', 'http://dummyimage.com/140x100.png/dddddd/000000', NULL , 1, ' Oferujemy szeroki wybór wysokiej jakości produktów, które umożliwią Ci kompleksowe i solidne wykonanie instalacji elektrycznych, hydraulicznych, telekomunikacyjnych i wielu innych. Nasza oferta obejmuje różnorodne materiały, narzędzia i akcesoria, które są niezbędne do prawidłowego wykonania prac instalacyjnych.');

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
(1, 1, 'Yellow'),
(2, 1, 'Red'),
(3, 1, 'RebeccaPurple'),
(4, 1, 'Magenta'),
(5, 1, 'Orange'),
(6, 1, 'Lime'),
(7, 1, 'Green'),
(8, 1, 'Cyan'),
(9, 1, 'DodgerBlue'),
(10, 1, 'NavajoWhite'),
(11, 1, 'White'),
(12, 1, 'Black'),
(13, 1, 'Pink'),
(14, 1, 'PeachPuff'),
(15, 1, 'Wheat'),
(16, 2, '25'),
(17, 2, '100'),
(18, 3, '50'),
(19, 3, '75'),
(20, 4, '90'),
(21, 4, '100');

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
(2, 'Żarówka filamentowa SPIRAL 4W LED E27 IP20 2700K Eko-light', 'Model ML553 to żarówka LED o maksymalnej mocy 4 W odpowiadającej 31 W przy tradycyjnej żarówce oraz zasilaniu równym 230 V. Zastosowano w niej gwint typu E27. Żarówka jest źródłem światła o przyjemnym i bezpiecznym ciepłym zabarwieniu. W związku z tym jej temperatura barwowa jest równa 2700 K. A strumień świetlny ma wartość 280 lumenów. Produkt nie współpracuje ze ściemniaczem.', 'http://dummyimage.com/169x100.png/dddddd/000000', '19.99', '49.99', '4237e8dsx793', 96, 7, 1, 2, 'Brązowy'),
(3, 'Żarówka LED VALUE CLASSIC A MATOWA 40 5,5W 4000K E27 Osram', 'E27 Osram to żarówka LED o maksymalnej mocy 5,5 W odpowiadającej 31 W przy tradycyjnej żarówce oraz zasilaniu równym 260 V. Zastosowano w niej gwint typu E27. Żarówka jest źródłem światła o przyjemnym i bezpiecznym ciepłym zabarwieniu. W związku z tym jej temperatura barwowa jest równa 4000 K. A strumień świetlny ma wartość 280 lumenów. Produkt nie współpracuje ze ściemniaczem.', 'http://dummyimage.com/181x100.png/ff4444/ffffff', '18.99', '29.99', '4237e8dsx793', 41, 6, 1, 3, 'Biały-4000K'),
(4, 'Żarówka LED VALUE CLASSIC A MATOWA 40 5,5W 6500K E27 Osram', 'E27 Osram to żarówka LED o maksymalnej mocy 5,5 W odpowiadającej 31 W przy tradycyjnej żarówce oraz zasilaniu równym 260 V. Zastosowano w niej gwint typu E27. Żarówka jest źródłem światła o przyjemnym i bezpiecznym ciepłym zabarwieniu. W związku z tym jej temperatura barwowa jest równa 6500 K. A strumień świetlny ma wartość 280 lumenów. Produkt nie współpracuje ze ściemniaczem.', 'http://dummyimage.com/181x100.png/ff4444/ffffff', '18.99', '29.99', '4237e8dsx793', 41, 6, 1, 3, 'Biały-6500K'),
(5, 'Żarówka LED VALUE CLASSIC A MATOWA 40 5,5W 2700K E27 Osram', 'E27 Osram to żarówka LED o maksymalnej mocy 5,5 W odpowiadającej 31 W przy tradycyjnej żarówce oraz zasilaniu równym 260 V. Zastosowano w niej gwint typu E27. Żarówka jest źródłem światła o przyjemnym i bezpiecznym ciepłym zabarwieniu. W związku z tym jej temperatura barwowa jest równa 2700 K. A strumień świetlny ma wartość 280 lumenów. Produkt nie współpracuje ze ściemniaczem.', 'http://dummyimage.com/181x100.png/ff4444/ffffff', '18.99', '29.99', '4237e8dsx793', 41, 6, 1, 3, 'Biały-2700K'),
(6, 'Żarówka LED CorePro 13W E27 2700K ciepła Philips 8718696490747', 'Nie trzeba czekać. Źródła światła LED firmy Philips zapewniają maksymalną jasność natychmiast po włączeniu. Wskaźnik oddawania barw (CRI) opisuje wpływ źródła światła na wygląd kolorów. Wskaźnik CRI naturalnego światła na zewnątrz wynosi 100 — jest to standard, z którym porównujemy wszelkie inne źródła światła. Wskaźnik CRI źródeł światła LED firmy Philips jest zawsze wyższy niż 80, a więc zbliżony do wartości, jaką ma światło słoneczne, dzięki czemu źródła światła LED wiernie i naturalnie oddają kolory.', 'http://dummyimage.com/230x100.png/ff4444/ffffff', '11.99', '24.99', '4237phil4793', 37, 3, 1, 4, 'Biały'),
(7, 'Żarówka Philips CorePro LED PLC 4.5W 830 2P G24d-1 3000K ciepła', ' Żarówka CorePro LED ide­al­nie zaspo­koi pod­sta­wowe potrzeby oświe­tle­niowe, zapew­nia­jąc piękne świa­tło i nie­za­wodną pracę, któ­rej ocze­kuje się od lamp LED, a przy tym jest przy­stępna cenowo. Są prze­wi­dziane jako zamien­niki żaró­wek.Zapew­niają dosko­nałą ener­go­osz­częd­ność i bar­dzo niskie koszty kon­ser­wa­cji.', 'http://dummyimage.com/148x100.png/dddddd/000000', '33.99', '64.99', '4237e8dsx793', 12, 2, 1, 5, 'Biały'),
(8, 'Pasek taśma LED Philips LightStrip 5m zestaw', 'Jeśli taśmy LightStrip nie mają pasują idealnie do wybranego miejsca, można je łatwo skrócić do odpowiedniej długości. Taśmy można przycinać w miejscach, w których widoczne są specjalne oznaczenia co 10cm. Wystarczy podłączyć. Prosta instalacja taśmy LightStrip są bardzo łatwe w instalacji i gwarantują natychmiastową zabawę — wystarczy podłączyć. Wszystkie niezbędne elementy znajdują się w zestawie, a wymagane czynności są objaśnione w skróconej instrukcji obsługi.', 'http://dummyimage.com/195x100.png/dddddd/000000', '9.99', '19.99', '4237e8dsx793', 47, 1, 1, 6, 'Żółty');

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
(1, 'Image 1.png', 1, 0),
(2, 'zarowka_filamentowa.jpg', 2, 0),
(3, 'zarowka_OSRAM_produkt.jpg', 3, 0),
(4, 'zarowka_OSRAM_pudelko.jpg', 3, 0),
(5, 'zarowka_OSRAM_produkt.jpg', 4, 0),
(6, 'zarowka_OSRAM_pudelko.jpg', 4, 0),
(7, 'zarowka_OSRAM_produkt.jpg', 5, 0),
(8, 'zarowka_OSRAM_pudelko.jpg', 5, 0),
(9, 'zarowka_PHILIPS_produkt.jpg', 6, 0),
(10, 'zarowka_PHILIPS_wyciagnieta.jpg', 6, 0),
(11, 'zarowka_PHILIPS_prezentacja.jpg', 6, 0),
(12, 'corepro_PHILIPS_produkt.jpg', 7, 0),
(13, 'corepro_PHILIPS_energia.png', 7, 0),
(14, 'tasmaLED_PHILIPS_produkt.jpg', 8, 0),
(15, 'tasmaLED_PHILIPS_żółta.png', 8, 0),
(16, 'tasmaLED_PHILIPS_zasilacz.jpg', 8, 0);

INSERT INTO `product_parameter_value` (`product_ID`, `parameter_value_ID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 2),
(5, 3),
(6, 4),
(7, 5),
(8, 6);



insert into manufacturer (ID, name, image_name) values (1, 'Philips', 'Philips_logo.png');
insert into manufacturer (ID, name, image_name) values (2, 'Osram', 'osram_logo.png');
insert into manufacturer (ID, name, image_name) values (3, 'Spiral', 'spiral_logo.png');

INSERT INTO `product_manufacturer` (`product_ID`, `manufacturer_ID`) VALUES
(1, 1),
(2, 3),
(3, 2),
(4, 2),
(5, 2),
(6, 1),
(7, 1),
(8, 1);
