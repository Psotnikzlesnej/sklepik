CREATE TABLE `product` (
  `ID` integer PRIMARY KEY,
  `name` varchar(255),
  `description` varchar(255),
  `video_url` varchar(255),
  `promo_price` decimal,
  `catalog_price` decimal,
  `serial_number` varchar(255),
  `stock` integer,
  `delivery_ID` integer,
  `visible` boolean DEFAULT 1,
  `variant_group_ID` integer,
  `variant_name` varchar(255)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `delivery` (
  `ID` integer PRIMARY KEY,
  `name` varchar(255)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `category` (
  `ID` integer PRIMARY KEY,
  `name` varchar(255),
  `image_name` varchar(255),
  `parent` integer,
  `level` integer,
  `description` varchar(512)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `manufacturer` (
  `ID` integer PRIMARY KEY,
  `name` varchar(255),
  `image_name` varchar(255)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `parameter_value` (
  `ID` integer PRIMARY KEY,
  `value` varchar(255),
  `parameter` varchar(255)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `product_image` (
  `ID` integer PRIMARY KEY,
  `image_name` varchar(255),
  `product_ID` integer,
  `main` boolean
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `flag` (
  `ID` integer PRIMARY KEY,
  `name` ENUM ('new', 'promo', 'featured')
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `filter_value` (
  `ID` integer PRIMARY KEY,
  `ID_filter` integer,
  `value` varchar(255)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `filter` (
  `ID` integer PRIMARY KEY,
  `type` ENUM ('color', 'grid_multiple', 'range', 'slider'),
  `name` varchar(255)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `banner` (
  `ID` integer PRIMARY KEY,
  `title` varchar(255),
  `description` varchar(255),
  `image_name` varchar(255),
  `link` varchar(255),
  `visible` boolean DEFAULT 1,
  `type` ENUM ('home_top', 'home_tile', 'home_bottom', 'store'),
  `alt` varchar(255),
  `mask` boolean DEFAULT 1
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `product_category` (
  `product_ID` integer,
  `category_ID` integer,
  PRIMARY KEY (`product_ID`, `category_ID`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

ALTER TABLE `product_category` ADD FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`);

ALTER TABLE `product_category` ADD FOREIGN KEY (`category_ID`) REFERENCES `category` (`ID`);

CREATE TABLE `product_manufacturer` (
  `product_ID` integer,
  `manufacturer_ID` integer,
  PRIMARY KEY (`product_ID`, `manufacturer_ID`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

ALTER TABLE `product_manufacturer` ADD FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`);

ALTER TABLE `product_manufacturer` ADD FOREIGN KEY (`manufacturer_ID`) REFERENCES `manufacturer` (`ID`);


CREATE TABLE `product_parameter_value` (
  `product_ID` integer,
  `parameter_value_ID` integer,
  PRIMARY KEY (`product_ID`, `parameter_value_ID`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

ALTER TABLE `product_parameter_value` ADD FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`);

ALTER TABLE `product_parameter_value` ADD FOREIGN KEY (`parameter_value_ID`) REFERENCES `parameter_value` (`ID`);


CREATE TABLE `product_flag` (
  `product_ID` integer,
  `flag_ID` integer,
  PRIMARY KEY (`product_ID`, `flag_ID`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

ALTER TABLE `product_flag` ADD FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`);

ALTER TABLE `product_flag` ADD FOREIGN KEY (`flag_ID`) REFERENCES `flag` (`ID`);


CREATE TABLE `product_filter_value` (
  `product_ID` integer,
  `filter_value_ID` integer,
  PRIMARY KEY (`product_ID`, `filter_value_ID`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

ALTER TABLE `product_filter_value` ADD FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`);

ALTER TABLE `product_filter_value` ADD FOREIGN KEY (`filter_value_ID`) REFERENCES `filter_value` (`ID`);

ALTER TABLE `product_image` ADD FOREIGN KEY (`product_ID`) REFERENCES `product` (`ID`);

ALTER TABLE `product` ADD FOREIGN KEY (`delivery_ID`) REFERENCES `delivery` (`ID`);

ALTER TABLE `filter_value` ADD FOREIGN KEY (`ID_filter`) REFERENCES `filter` (`ID`);

ALTER TABLE `category` ADD FOREIGN KEY (`parent`) REFERENCES `category` (`ID`);
