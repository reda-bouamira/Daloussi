-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 11:00 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kijiji_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `year` int(11) NOT NULL,
  `make` text NOT NULL,
  `model` text NOT NULL,
  `trim` text NOT NULL,
  `price` double NOT NULL,
  `km` int(11) NOT NULL,
  `bodytype` text NOT NULL,
  `engine` text NOT NULL,
  `colour` text NOT NULL,
  `transmission` text NOT NULL,
  `fuel` text NOT NULL,
  `drivetrain` text NOT NULL,
  `description` text NOT NULL,
  `main_image` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `url`, `title`, `year`, `make`, `model`, `trim`, `price`, `km`, `bodytype`, `engine`, `colour`, `transmission`, `fuel`, `drivetrain`, `description`, `main_image`, `images`) VALUES
(86, 'https://www.kijiji.ca/v-cars-trucks/winnipeg/finance-available-2007-ford-fusion-sel/1345400976', 'Finance available ! 2007 Ford Fusion SEL', 2007, 'ford', 'fusion', 'SEL', 3999, 198000, 'sedan', 'n/a', 'black', 'automatic', 'gas', 'fwd', 'Daloussi Auto          ——————Daloussi Auto——————-\nDon&#39;t miss it , CALL NOW 204-583-4617\n###3 MONTHS WARRANTY included ###\nSelling 2007 Ford Fusion Sel , 2.3L, 4cyl , automatic transmission has 198 kms , 5 seats , loaded with keyless entry , AC,FM/AM , power windows , power lock , cloth seats , block heater, and much more...\n----------FINANCE AVAILABLE---------\nTHIS CAR GOES HOME WITH A BRAND NEW SAFETY INSPECTION.\nIf you are interested call or text me at : 204-583-4617\nPrice $3899\nSerious buyer only \nFirst come , First serve \nWe are located at 395 goulet st , Winnipeg , MB\nDon’t forget to like our Facebook and Instagram page Daloussi Auto\nWe are open Monday-Saturday :9am till 7pm\nSunday : 12-5pm\nWe do accept cash , debit , credit card , cheques , E-transfer , trade .\nApply for finance at www.daloussi-auto.ca   Engine: 4 Cylinder Engine 2.3L/140L/100Km City: 10.3L/100Km Hwy: 6.9Mechanical Equipment17&#34; aluminum wheels2.3L 16-valve I4 engine4-wheel disc brakesBattery saver w/pwr accessory delayCompact spare tireEngine block heaterFront wheel driveP225/50R17 Michelin Pilot HIX MXM4 all-season tiresVariable assist pwr steeringInterior Equipment(2) 12V pwr outlets(2) coat hooks(3) assist handlesAnti-theft perimeter alarmDash-top storage binDoor panels-inc: map pockets, cup holdersDual illuminated visor vanity mirrorsElectrochromic rearview mirrorElectronic automatic temperature control (EATC) w/outside temp displayFront seatback map pocketsFront/rear carpeted floor matsExterior EquipmentAuto on/off quad halogen headlampsChrome grille surroundChrome window trimColour-keyed bodyside moulding w/bright beltlineColour-keyed pwr heated mirrors w/puddle lampsFixed-interval speed-sensitive windshield wipersFog lampsSolar tinted glassSafety EquipmentChild safety rear door locksEmergency trunk releaseLATCH systemOccupant classification systemPersonal safety system-inc: seat belt pretensioners, load-limiting retractors, dual-stage front air bags, driver seat position sensor, crash severity sensor, front BeltMinderSide impact protection system-inc: side impact air bags, side curtain air bagsFactory Options2.3L 16-VALVE I4 ENGINE', 'https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/YwMAAOSw78xbZTP4/$_35.JPG', ' https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/YwMAAOSw78xbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/20sAAOSwe91bZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/4HYAAOSwliJbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/O9sAAOSwXNNbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/BXkAAOSwYSBbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/lJIAAOSwAnJbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/AycAAOSw~AhbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/iwkAAOSwjW5bZTP4/$_57.JPG,'),
(87, 'https://www.kijiji.ca/v-cars-trucks/winnipeg/finance-available-2007-ford-fusion-sel/1345400976', 'Finance available ! 2007 Ford Fusion SEL', 2007, 'ford', 'fusion', 'SEL', 3999, 198000, 'sedan', 'n/a', 'black', 'automatic', 'gas', 'fwd', 'Daloussi Auto          ——————Daloussi Auto——————-\nDon&#39;t miss it , CALL NOW 204-583-4617\n###3 MONTHS WARRANTY included ###\nSelling 2007 Ford Fusion Sel , 2.3L, 4cyl , automatic transmission has 198 kms , 5 seats , loaded with keyless entry , AC,FM/AM , power windows , power lock , cloth seats , block heater, and much more...\n----------FINANCE AVAILABLE---------\nTHIS CAR GOES HOME WITH A BRAND NEW SAFETY INSPECTION.\nIf you are interested call or text me at : 204-583-4617\nPrice $3899\nSerious buyer only \nFirst come , First serve \nWe are located at 395 goulet st , Winnipeg , MB\nDon’t forget to like our Facebook and Instagram page Daloussi Auto\nWe are open Monday-Saturday :9am till 7pm\nSunday : 12-5pm\nWe do accept cash , debit , credit card , cheques , E-transfer , trade .\nApply for finance at www.daloussi-auto.ca   Engine: 4 Cylinder Engine 2.3L/140L/100Km City: 10.3L/100Km Hwy: 6.9Mechanical Equipment17&#34; aluminum wheels2.3L 16-valve I4 engine4-wheel disc brakesBattery saver w/pwr accessory delayCompact spare tireEngine block heaterFront wheel driveP225/50R17 Michelin Pilot HIX MXM4 all-season tiresVariable assist pwr steeringInterior Equipment(2) 12V pwr outlets(2) coat hooks(3) assist handlesAnti-theft perimeter alarmDash-top storage binDoor panels-inc: map pockets, cup holdersDual illuminated visor vanity mirrorsElectrochromic rearview mirrorElectronic automatic temperature control (EATC) w/outside temp displayFront seatback map pocketsFront/rear carpeted floor matsExterior EquipmentAuto on/off quad halogen headlampsChrome grille surroundChrome window trimColour-keyed bodyside moulding w/bright beltlineColour-keyed pwr heated mirrors w/puddle lampsFixed-interval speed-sensitive windshield wipersFog lampsSolar tinted glassSafety EquipmentChild safety rear door locksEmergency trunk releaseLATCH systemOccupant classification systemPersonal safety system-inc: seat belt pretensioners, load-limiting retractors, dual-stage front air bags, driver seat position sensor, crash severity sensor, front BeltMinderSide impact protection system-inc: side impact air bags, side curtain air bagsFactory Options2.3L 16-VALVE I4 ENGINE', 'https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/YwMAAOSw78xbZTP4/$_35.JPG', ' https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/YwMAAOSw78xbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/20sAAOSwe91bZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/4HYAAOSwliJbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/O9sAAOSwXNNbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/BXkAAOSwYSBbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/lJIAAOSwAnJbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/AycAAOSw~AhbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/iwkAAOSwjW5bZTP4/$_57.JPG,'),
(88, 'https://www.kijiji.ca/v-cars-trucks/winnipeg/finance-available-2007-ford-fusion-sel/1345400976', 'Finance available ! 2007 Ford Fusion SEL', 2007, 'ford', 'fusion', 'SEL', 3999, 198000, 'sedan', 'n/a', 'black', 'automatic', 'gas', 'fwd', 'Daloussi Auto          ——————Daloussi Auto——————-\nDon&#39;t miss it , CALL NOW 204-583-4617\n###3 MONTHS WARRANTY included ###\nSelling 2007 Ford Fusion Sel , 2.3L, 4cyl , automatic transmission has 198 kms , 5 seats , loaded with keyless entry , AC,FM/AM , power windows , power lock , cloth seats , block heater, and much more...\n----------FINANCE AVAILABLE---------\nTHIS CAR GOES HOME WITH A BRAND NEW SAFETY INSPECTION.\nIf you are interested call or text me at : 204-583-4617\nPrice $3899\nSerious buyer only \nFirst come , First serve \nWe are located at 395 goulet st , Winnipeg , MB\nDon’t forget to like our Facebook and Instagram page Daloussi Auto\nWe are open Monday-Saturday :9am till 7pm\nSunday : 12-5pm\nWe do accept cash , debit , credit card , cheques , E-transfer , trade .\nApply for finance at www.daloussi-auto.ca   Engine: 4 Cylinder Engine 2.3L/140L/100Km City: 10.3L/100Km Hwy: 6.9Mechanical Equipment17&#34; aluminum wheels2.3L 16-valve I4 engine4-wheel disc brakesBattery saver w/pwr accessory delayCompact spare tireEngine block heaterFront wheel driveP225/50R17 Michelin Pilot HIX MXM4 all-season tiresVariable assist pwr steeringInterior Equipment(2) 12V pwr outlets(2) coat hooks(3) assist handlesAnti-theft perimeter alarmDash-top storage binDoor panels-inc: map pockets, cup holdersDual illuminated visor vanity mirrorsElectrochromic rearview mirrorElectronic automatic temperature control (EATC) w/outside temp displayFront seatback map pocketsFront/rear carpeted floor matsExterior EquipmentAuto on/off quad halogen headlampsChrome grille surroundChrome window trimColour-keyed bodyside moulding w/bright beltlineColour-keyed pwr heated mirrors w/puddle lampsFixed-interval speed-sensitive windshield wipersFog lampsSolar tinted glassSafety EquipmentChild safety rear door locksEmergency trunk releaseLATCH systemOccupant classification systemPersonal safety system-inc: seat belt pretensioners, load-limiting retractors, dual-stage front air bags, driver seat position sensor, crash severity sensor, front BeltMinderSide impact protection system-inc: side impact air bags, side curtain air bagsFactory Options2.3L 16-VALVE I4 ENGINE', 'https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/YwMAAOSw78xbZTP4/$_35.JPG', ' https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/YwMAAOSw78xbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/20sAAOSwe91bZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/4HYAAOSwliJbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/O9sAAOSwXNNbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/BXkAAOSwYSBbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/lJIAAOSwAnJbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/AycAAOSw~AhbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/iwkAAOSwjW5bZTP4/$_57.JPG,'),
(89, 'https://www.kijiji.ca/v-cars-trucks/winnipeg/finance-available-2007-ford-fusion-sel/1345400976', 'Finance available ! 2007 Ford Fusion SEL', 2007, 'ford', 'fusion', 'SEL', 3999, 198000, 'sedan', 'n/a', 'black', 'automatic', 'gas', 'fwd', 'Daloussi Auto          ——————Daloussi Auto——————-\nDon&#39;t miss it , CALL NOW 204-583-4617\n###3 MONTHS WARRANTY included ###\nSelling 2007 Ford Fusion Sel , 2.3L, 4cyl , automatic transmission has 198 kms , 5 seats , loaded with keyless entry , AC,FM/AM , power windows , power lock , cloth seats , block heater, and much more...\n----------FINANCE AVAILABLE---------\nTHIS CAR GOES HOME WITH A BRAND NEW SAFETY INSPECTION.\nIf you are interested call or text me at : 204-583-4617\nPrice $3899\nSerious buyer only \nFirst come , First serve \nWe are located at 395 goulet st , Winnipeg , MB\nDon’t forget to like our Facebook and Instagram page Daloussi Auto\nWe are open Monday-Saturday :9am till 7pm\nSunday : 12-5pm\nWe do accept cash , debit , credit card , cheques , E-transfer , trade .\nApply for finance at www.daloussi-auto.ca   Engine: 4 Cylinder Engine 2.3L/140L/100Km City: 10.3L/100Km Hwy: 6.9Mechanical Equipment17&#34; aluminum wheels2.3L 16-valve I4 engine4-wheel disc brakesBattery saver w/pwr accessory delayCompact spare tireEngine block heaterFront wheel driveP225/50R17 Michelin Pilot HIX MXM4 all-season tiresVariable assist pwr steeringInterior Equipment(2) 12V pwr outlets(2) coat hooks(3) assist handlesAnti-theft perimeter alarmDash-top storage binDoor panels-inc: map pockets, cup holdersDual illuminated visor vanity mirrorsElectrochromic rearview mirrorElectronic automatic temperature control (EATC) w/outside temp displayFront seatback map pocketsFront/rear carpeted floor matsExterior EquipmentAuto on/off quad halogen headlampsChrome grille surroundChrome window trimColour-keyed bodyside moulding w/bright beltlineColour-keyed pwr heated mirrors w/puddle lampsFixed-interval speed-sensitive windshield wipersFog lampsSolar tinted glassSafety EquipmentChild safety rear door locksEmergency trunk releaseLATCH systemOccupant classification systemPersonal safety system-inc: seat belt pretensioners, load-limiting retractors, dual-stage front air bags, driver seat position sensor, crash severity sensor, front BeltMinderSide impact protection system-inc: side impact air bags, side curtain air bagsFactory Options2.3L 16-VALVE I4 ENGINE', 'https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/YwMAAOSw78xbZTP4/$_35.JPG', ' https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/YwMAAOSw78xbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/20sAAOSwe91bZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/4HYAAOSwliJbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/O9sAAOSwXNNbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/BXkAAOSwYSBbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/lJIAAOSwAnJbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/AycAAOSw~AhbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/iwkAAOSwjW5bZTP4/$_57.JPG,'),
(90, 'https://www.kijiji.ca/v-cars-trucks/winnipeg/finance-available-2005-nissan-x-trail-awd/1348853378', 'Finance available! 2005 Nissan X-trail AWD', 2005, 'nissan', 'xtrail', 'XE', 3999, 255000, 'suvcrossover', 'n/a', 'tan', 'automatic', 'gas', 'awd', 'Daloussi Auto          ——————Daloussi Auto——————-\n\nDon&#39;t miss it , CALL NOW 204-583-4617\n\n###3 MONTHS WARRANTY included ###\n\nSelling 2006 Nissan X-trail XE AWD , 2.5L , 4cyl, automatic transmission has only 255kms, 5seats , loaded with keyless entry , AC,FM/AM , power windows , power lock cloth seats ,block heater, and much more...\n\n----------FINANCE AVAILABLE---------\n\nTHIS CAR GOES HOME WITH A BRAND NEW SAFETY INSPECTION.\n\nIf you are interested call or text me at : 204-583-4617\n\nPrice $3999\nSerious buyer only \nFirst come , First serve \nWe are located at 395 goulet st , Winnipeg , MB\n\nDon’t forget to like our Facebook page Daloussi Auto\n\nWe are open Monday-Saturday :9am till 7pm\nSunday : 12-5pm\n\nWe do accept cash , debit , credit card , cheques , E-transfer , trade .   Engine: 4 Cylinder Engine 2.5L/152L/100Km City: 10.8L/100Km Hwy: 8.1Mechanical Equipment16&#34; steel wheels w/wheel covers2.5L DOHC 16-valve 4-cylinder engine4-speed automatic transmission4-wheel vented disc brakes60 litre fuel tank907 kg (2000 lb) towing capacityAll-mode all wheel driveContinuously Variable Valve Timing Control System (CVVTS)Direct ignition system w/platinum-tipped spark plugsElectronic Brake Force Distribution (EBD) w/Brake AssistInterior Equipment(11) cargo area hooks-inc: utility hook on tailgate12-volt pwr outlets-inc: storage box ', 'https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/JrIAAOSwCHBbIT2c/$_35.JPG', ' https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/JrIAAOSwCHBbIT2c/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/Nn4AAOSwMKNbIT2c/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/n-EAAOSwnTpbIT2b/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/t3wAAOSwty5bIT2b/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/q~IAAOSw48dbIT2b/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/rMEAAOSwTbVbIT2b/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/MmsAAOSw9RdbIT2b/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/S-UAAOSwJ7dbIT2b/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/A1QAAOSwm8NbIT2b/$_57.JPG,'),
(91, 'https://www.kijiji.ca/v-cars-trucks/winnipeg/finance-available-2009-hyundai-elantra-gl/1317390523', 'Finance available !2009 HYUNDAI ELANTRA GL', 2009, 'hyundai', 'elantra', 'GL', 3999, 245000, 'sedan', 'n/a', 'gray', 'automatic', 'gas', 'fwd', 'Daloussi Auto          ——————Daloussi Auto——————-\n\nDon&#39;t miss it , CALL NOW 204-583-4617\n\n###3 MONTHS WARRANTY included ###\n\nSelling 2009 Hyundai Elantra GL , 2.0L , 4Cyl , automatic transmission has245kms , 5seats , loaded with keyless entry , AC,FM/AM , power windows , power lock , cloth seats , block heater, and much more...\n\n----------FINANCE AVAILABLE---------\n\nTHIS CAR GOES HOME WITH A BRAND NEW SAFETY INSPECTION.\n\nIf you are interested call or text me at : 204-583-4617\n\nPrice : $ 3999\n\nSerious buyer only \nFirst come , First serve \nWe are located at 395 goulet st , Winnipeg , MB\n\nDon’t forget to like our Facebook and Instagram page Daloussi Auto\n\nWe are open Monday-Saturday :9am till 7pm\nSunday : 12-5pm\n\nWe do accept cash , debit , credit card , cheques , E-transfer , trade .\n\nApply for finance at www.daloussi-auto.ca   Engine: 4 Cylinder Engine 2.0L/121L/100Km City: 8.4L/100Km Hwy: 6.0Mechanical Equipment2.0L DOHC 16-valve CVVT I4 engine60-amp/hr battery w/battery saver90-amp alternatorFront wheel driveFront/rear stabilizer barsIndependent MacPherson strut front suspension w/coil springs, gas shocksIndependent multi-link rear suspension w/gas shocksPwr engine-speed sensing rack ', 'https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/u9IAAOSwsvZbgGca/$_35.JPG', ' https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/u9IAAOSwsvZbgGca/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/EIkAAOSwXn5bgGca/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/njYAAOSwEFFbgGca/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/KZ4AAOSwVAZbgGca/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/A14AAOSwXIhbgGca/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/NbkAAOSwhSVbgGca/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/2hoAAOSwG9ZbgGca/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/TGMAAOSwnN5bgGca/$_57.JPG,'),
(92, 'https://www.kijiji.ca/v-cars-trucks/winnipeg/finance-available-2007-ford-fusion-sel/1345400976', 'Finance available ! 2007 Ford Fusion SEL', 2007, 'ford', 'fusion', 'SEL', 3999, 198000, 'sedan', 'n/a', 'black', 'automatic', 'gas', 'fwd', 'Daloussi Auto          ——————Daloussi Auto——————-\nDon&#39;t miss it , CALL NOW 204-583-4617\n###3 MONTHS WARRANTY included ###\nSelling 2007 Ford Fusion Sel , 2.3L, 4cyl , automatic transmission has 198 kms , 5 seats , loaded with keyless entry , AC,FM/AM , power windows , power lock , cloth seats , block heater, and much more...\n----------FINANCE AVAILABLE---------\nTHIS CAR GOES HOME WITH A BRAND NEW SAFETY INSPECTION.\nIf you are interested call or text me at : 204-583-4617\nPrice $3899\nSerious buyer only \nFirst come , First serve \nWe are located at 395 goulet st , Winnipeg , MB\nDon’t forget to like our Facebook and Instagram page Daloussi Auto\nWe are open Monday-Saturday :9am till 7pm\nSunday : 12-5pm\nWe do accept cash , debit , credit card , cheques , E-transfer , trade .\nApply for finance at www.daloussi-auto.ca   Engine: 4 Cylinder Engine 2.3L/140L/100Km City: 10.3L/100Km Hwy: 6.9Mechanical Equipment17&#34; aluminum wheels2.3L 16-valve I4 engine4-wheel disc brakesBattery saver w/pwr accessory delayCompact spare tireEngine block heaterFront wheel driveP225/50R17 Michelin Pilot HIX MXM4 all-season tiresVariable assist pwr steeringInterior Equipment(2) 12V pwr outlets(2) coat hooks(3) assist handlesAnti-theft perimeter alarmDash-top storage binDoor panels-inc: map pockets, cup holdersDual illuminated visor vanity mirrorsElectrochromic rearview mirrorElectronic automatic temperature control (EATC) w/outside temp displayFront seatback map pocketsFront/rear carpeted floor matsExterior EquipmentAuto on/off quad halogen headlampsChrome grille surroundChrome window trimColour-keyed bodyside moulding w/bright beltlineColour-keyed pwr heated mirrors w/puddle lampsFixed-interval speed-sensitive windshield wipersFog lampsSolar tinted glassSafety EquipmentChild safety rear door locksEmergency trunk releaseLATCH systemOccupant classification systemPersonal safety system-inc: seat belt pretensioners, load-limiting retractors, dual-stage front air bags, driver seat position sensor, crash severity sensor, front BeltMinderSide impact protection system-inc: side impact air bags, side curtain air bagsFactory Options2.3L 16-VALVE I4 ENGINE', 'https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/YwMAAOSw78xbZTP4/$_35.JPG', ' https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/YwMAAOSw78xbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/20sAAOSwe91bZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/4HYAAOSwliJbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/O9sAAOSwXNNbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/BXkAAOSwYSBbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/lJIAAOSwAnJbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/AycAAOSw~AhbZTP4/$_57.JPG,https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/iwkAAOSwjW5bZTP4/$_57.JPG,');

-- --------------------------------------------------------

--
-- Table structure for table `carurl`
--

CREATE TABLE `carurl` (
  `urlNum` int(11) NOT NULL,
  `URL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carurl`
--

INSERT INTO `carurl` (`urlNum`, `URL`) VALUES
(46, 'https://www.kijiji.ca/v-cars-trucks/winnipeg/finance-available-2005-nissan-x-trail-awd/1348853378'),
(47, 'https://www.kijiji.ca/v-cars-trucks/winnipeg/finance-available-2009-hyundai-elantra-gl/1317390523'),
(48, 'https://www.kijiji.ca/v-cars-trucks/winnipeg/finance-available-2007-ford-fusion-sel/1345400976');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carurl`
--
ALTER TABLE `carurl`
  ADD PRIMARY KEY (`urlNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `carurl`
--
ALTER TABLE `carurl`
  MODIFY `urlNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
