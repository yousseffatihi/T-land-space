/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100139
 Source Host           : localhost:3306
 Source Schema         : TLand

 Target Server Type    : MySQL
 Target Server Version : 100139
 File Encoding         : 65001

 Date: 13/05/2019 18:34:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for Administrator
-- ----------------------------
DROP TABLE IF EXISTS `Administrator`;
CREATE TABLE `Administrator` (
  `idAdministrator` int(10) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idAdministrator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Administrator
-- ----------------------------
BEGIN;
INSERT INTO `Administrator` VALUES (1, 'Salah', 'El Badaoui', '1993-05-13', 'salaheddine.elbadaoui1@gmail.com', 'Salah1993', 'Sakan B3id 3la kenitra walakin 7daha');
COMMIT;

-- ----------------------------
-- Table structure for Client
-- ----------------------------
DROP TABLE IF EXISTS `Client`;
CREATE TABLE `Client` (
  `idClient` int(10) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Client
-- ----------------------------
BEGIN;
INSERT INTO `Client` VALUES (1, 'Youssef', 'Fatihi', '1995-01-17', 'usefps@gmail.com', 'qwerty1234', 'Sakan f Pam 2 Hda Fowarat');
INSERT INTO `Client` VALUES (2, 'Oussama', 'Zitou', '1998-10-19', 'Zitou@gmail.com', 'azert09876', 'Sakan Fal Wafa');
COMMIT;

-- ----------------------------
-- Table structure for ClientReservation
-- ----------------------------
DROP TABLE IF EXISTS `ClientReservation`;
CREATE TABLE `ClientReservation` (
  `idClient` int(10) NOT NULL,
  `idWorkspace` int(10) NOT NULL,
  `DateReservation` date NOT NULL,
  `NumberOfPlaces` int(11) DEFAULT NULL,
  `status` nvarchar(20) DEFAULT NULL,
  PRIMARY KEY (`idClient`,`idWorkspace`,`DateReservation`) USING BTREE,
  KEY `FKClientRese325255` (`idClient`),
  KEY `FKClientRese593027` (`idWorkspace`),
  KEY `PKCleintReservationDate` (`DateReservation`) USING BTREE,
  CONSTRAINT `FKClientRese325255` FOREIGN KEY (`idClient`) REFERENCES `Client` (`idClient`),
  CONSTRAINT `FKClientRese593027` FOREIGN KEY (`idWorkspace`) REFERENCES `Workspace` (`idWorkspace`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ClientReservation
-- ----------------------------
BEGIN;
INSERT INTO `ClientReservation` VALUES (1, 1, '2019-05-13', 5);
INSERT INTO `ClientReservation` VALUES (1, 1, '2019-05-14', 5);
INSERT INTO `ClientReservation` VALUES (1, 1, '2019-05-15', 1);
INSERT INTO `ClientReservation` VALUES (2, 1, '2019-05-13', 1);
INSERT INTO `ClientReservation` VALUES (2, 1, '2019-05-14', 3);
INSERT INTO `ClientReservation` VALUES (2, 1, '2019-05-16', 10);
COMMIT;

-- ----------------------------
-- Table structure for Event
-- ----------------------------
DROP TABLE IF EXISTS `Event`;
CREATE TABLE `Event` (
  `idEvent` int(10) NOT NULL,
  `NameEvent` varchar(200) DEFAULT NULL,
  `TextEvent` text,
  `Image` blob,
  `DatePost` date DEFAULT NULL,
  `File` blob,
  `DateEvent` date DEFAULT NULL,
  `DateExpiration` date DEFAULT NULL,
  `idAdministrator` int(10) NOT NULL,
  PRIMARY KEY (`idEvent`),
  KEY `FKEvent325276` (`idAdministrator`),
  CONSTRAINT `FKEvent325276` FOREIGN KEY (`idAdministrator`) REFERENCES `Administrator` (`idAdministrator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Event
-- ----------------------------
BEGIN;
INSERT INTO `Event` VALUES (1, 'Let\'s Read Some Books Together', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo donec enim diam vulputate ut. Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Enim praesent elementum facilisis leo vel fringilla est. Ullamcorper a lacus vestibulum sed arcu non odio. Amet nisl suscipit adipiscing bibendum. Enim lobortis scelerisque fermentum dui faucibus. Consequat nisl vel pretium lectus quam. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Varius duis at consectetur lorem. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus. Sagittis vitae et leo duis ut diam. Turpis tincidunt id aliquet risus feugiat in. Tortor condimentum lacinia quis vel. Non tellus orci ac auctor augue. Consectetur adipiscing elit duis tristique sollicitudin nibh. Ultricies mi quis hendrerit dolor magna eget. Risus ultricies tristique nulla aliquet enim tortor at.\n\nEget nunc scelerisque viverra mauris in aliquam. Nunc sed velit dignissim sodales ut eu sem integer. Diam sollicitudin tempor id eu nisl. Odio ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. Tellus cras adipiscing enim eu. Id diam vel quam elementum pulvinar etiam non quam lacus. Sit amet justo donec enim. Orci nulla pellentesque dignissim enim sit. Arcu felis bibendum ut tristique et egestas quis ipsum. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Mattis nunc sed blandit libero volutpat. Nunc sed velit dignissim sodales. Amet mauris commodo quis imperdiet massa tincidunt. Neque gravida in fermentum et sollicitudin ac orci phasellus egestas. Tempus quam pellentesque nec nam aliquam sem et tortor consequat.\n\nAdipiscing at in tellus integer feugiat. Placerat vestibulum lectus mauris ultrices eros in. Sed faucibus turpis in eu. Sollicitudin tempor id eu nisl nunc. Pharetra et ultrices neque ornare aenean euismod elementum nisi. Quis commodo odio aenean sed adipiscing diam donec adipiscing tristique. Aliquet nibh praesent tristique magna sit amet purus. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Id consectetur purus ut faucibus pulvinar elementum integer enim neque. Eu ultrices vitae auctor eu augue ut lectus arcu. Sed augue lacus viverra vitae congue eu consequat ac. Sed sed risus pretium quam vulputate dignissim. Malesuada proin libero nunc consequat. In aliquam sem fringilla ut.\n\nConsectetur lorem donec massa sapien faucibus et. Pretium fusce id velit ut tortor pretium viverra. Cras tincidunt lobortis feugiat vivamus at augue eget arcu. Fermentum posuere urna nec tincidunt. Volutpat diam ut venenatis tellus in metus vulputate. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Nulla pellentesque dignissim enim sit amet venenatis urna. Blandit cursus risus at ultrices mi. Semper quis lectus nulla at volutpat diam ut. Turpis egestas sed tempus urna et pharetra. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Venenatis tellus in metus vulputate eu scelerisque.\n\nQuis commodo odio aenean sed. Sapien pellentesque habitant morbi tristique senectus et. Sit amet purus gravida quis blandit turpis cursus in hac. Enim nunc faucibus a pellentesque. Vitae et leo duis ut diam quam nulla. Faucibus pulvinar elementum integer enim neque volutpat ac. Integer enim neque volutpat ac tincidunt vitae semper quis. Dui ut ornare lectus sit amet est placerat. Duis at tellus at urna condimentum mattis pellentesque. Ut pharetra sit amet aliquam id diam maecenas ultricies. Lectus sit amet est placerat in egestas erat imperdiet sed. Cursus sit amet dictum sit amet justo donec enim diam. Ut consequat semper viverra nam libero. Purus gravida quis blandit turpis cursus in hac habitasse. Nullam vehicula ipsum a arcu cursus vitae. Egestas maecenas pharetra convallis posuere morbi leo.\n\nIn aliquam sem fringilla ut morbi tincidunt augue interdum velit. Aliquet eget sit amet tellus. Urna nec tincidunt praesent semper feugiat nibh sed. Leo duis ut diam quam nulla porttitor massa id. Viverra justo nec ultrices dui. Enim neque volutpat ac tincidunt. Ut sem nulla pharetra diam. In egestas erat imperdiet sed. Enim blandit volutpat maecenas volutpat blandit. Id diam maecenas ultricies mi eget. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Id nibh tortor id aliquet lectus proin nibh nisl.\n\nTempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Faucibus turpis in eu mi bibendum neque egestas. Ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Aliquam etiam erat velit scelerisque in dictum. Vestibulum rhoncus est pellentesque elit ullamcorper. In pellentesque massa placerat duis ultricies. Dui ut ornare lectus sit amet est placerat in egestas. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius. Quam quisque id diam vel quam. Viverra tellus in hac habitasse platea dictumst vestibulum. Hac habitasse platea dictumst quisque. Non consectetur a erat nam at lectus urna duis. Hendrerit dolor magna eget est lorem ipsum dolor sit amet. Netus et malesuada fames ac turpis egestas. In nisl nisi scelerisque eu ultrices vitae auctor. Cras ornare arcu dui vivamus. Magna ac placerat vestibulum lectus mauris ultrices eros in cursus.\n\nNulla aliquet enim tortor at. Tortor at risus viverra adipiscing at. Adipiscing diam donec adipiscing tristique risus nec. Rhoncus est pellentesque elit ullamcorper dignissim cras. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Congue mauris rhoncus aenean vel elit. Enim ut sem viverra aliquet eget sit amet tellus cras. Amet nulla facilisi morbi tempus. Adipiscing commodo elit at imperdiet. Et sollicitudin ac orci phasellus egestas. Non consectetur a erat nam. Diam quis enim lobortis scelerisque fermentum dui faucibus in. Scelerisque varius morbi enim nunc faucibus a pellentesque. Ornare arcu odio ut sem. Neque gravida in fermentum et. Et netus et malesuada fames ac turpis. Quis vel eros donec ac odio tempor orci dapibus ultrices. Est ante in nibh mauris cursus mattis.\n\nVel fringilla est ullamcorper eget nulla facilisi. Aliquet risus feugiat in ante metus dictum. Ultricies integer quis auctor elit sed vulputate mi sit amet. Semper eget duis at tellus at urna condimentum mattis pellentesque. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Facilisis magna etiam tempor orci eu lobortis elementum nibh. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Arcu non sodales neque sodales ut. Ullamcorper a lacus vestibulum sed arcu. Velit laoreet id donec ultrices tincidunt arcu. Nisl tincidunt eget nullam non nisi est sit amet. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget. In eu mi bibendum neque egestas. Vitae semper quis lectus nulla at volutpat. Nisl tincidunt eget nullam non nisi est sit.\n\nAt risus viverra adipiscing at in tellus integer. Enim diam vulputate ut pharetra sit. Dignissim convallis aenean et tortor at risus viverra. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam. A diam sollicitudin tempor id eu. Donec massa sapien faucibus et molestie ac. Mauris cursus mattis molestie a. Ullamcorper morbi tincidunt ornare massa eget. Ullamcorper dignissim cras tincidunt lobortis. Aliquam vestibulum morbi blandit cursus. Tellus elementum sagittis vitae et leo duis ut diam. Sed vulputate mi sit amet mauris commodo quis. Consectetur libero id faucibus nisl tincidunt. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. Tortor at auctor urna nunc id cursus metus aliquam. Et netus et malesuada fames ac turpis egestas integer eget.', NULL, '2019-05-13', NULL, '2019-05-17', '2019-05-18', 1);
INSERT INTO `Event` VALUES (2, 'Let\'s Watch End Game Together', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo donec enim diam vulputate ut. Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Enim praesent elementum facilisis leo vel fringilla est. Ullamcorper a lacus vestibulum sed arcu non odio. Amet nisl suscipit adipiscing bibendum. Enim lobortis scelerisque fermentum dui faucibus. Consequat nisl vel pretium lectus quam. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Varius duis at consectetur lorem. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus. Sagittis vitae et leo duis ut diam. Turpis tincidunt id aliquet risus feugiat in. Tortor condimentum lacinia quis vel. Non tellus orci ac auctor augue. Consectetur adipiscing elit duis tristique sollicitudin nibh. Ultricies mi quis hendrerit dolor magna eget. Risus ultricies tristique nulla aliquet enim tortor at.\n\nEget nunc scelerisque viverra mauris in aliquam. Nunc sed velit dignissim sodales ut eu sem integer. Diam sollicitudin tempor id eu nisl. Odio ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. Tellus cras adipiscing enim eu. Id diam vel quam elementum pulvinar etiam non quam lacus. Sit amet justo donec enim. Orci nulla pellentesque dignissim enim sit. Arcu felis bibendum ut tristique et egestas quis ipsum. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Mattis nunc sed blandit libero volutpat. Nunc sed velit dignissim sodales. Amet mauris commodo quis imperdiet massa tincidunt. Neque gravida in fermentum et sollicitudin ac orci phasellus egestas. Tempus quam pellentesque nec nam aliquam sem et tortor consequat.\n\nAdipiscing at in tellus integer feugiat. Placerat vestibulum lectus mauris ultrices eros in. Sed faucibus turpis in eu. Sollicitudin tempor id eu nisl nunc. Pharetra et ultrices neque ornare aenean euismod elementum nisi. Quis commodo odio aenean sed adipiscing diam donec adipiscing tristique. Aliquet nibh praesent tristique magna sit amet purus. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Id consectetur purus ut faucibus pulvinar elementum integer enim neque. Eu ultrices vitae auctor eu augue ut lectus arcu. Sed augue lacus viverra vitae congue eu consequat ac. Sed sed risus pretium quam vulputate dignissim. Malesuada proin libero nunc consequat. In aliquam sem fringilla ut.\n\nConsectetur lorem donec massa sapien faucibus et. Pretium fusce id velit ut tortor pretium viverra. Cras tincidunt lobortis feugiat vivamus at augue eget arcu. Fermentum posuere urna nec tincidunt. Volutpat diam ut venenatis tellus in metus vulputate. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Nulla pellentesque dignissim enim sit amet venenatis urna. Blandit cursus risus at ultrices mi. Semper quis lectus nulla at volutpat diam ut. Turpis egestas sed tempus urna et pharetra. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Venenatis tellus in metus vulputate eu scelerisque.\n\nQuis commodo odio aenean sed. Sapien pellentesque habitant morbi tristique senectus et. Sit amet purus gravida quis blandit turpis cursus in hac. Enim nunc faucibus a pellentesque. Vitae et leo duis ut diam quam nulla. Faucibus pulvinar elementum integer enim neque volutpat ac. Integer enim neque volutpat ac tincidunt vitae semper quis. Dui ut ornare lectus sit amet est placerat. Duis at tellus at urna condimentum mattis pellentesque. Ut pharetra sit amet aliquam id diam maecenas ultricies. Lectus sit amet est placerat in egestas erat imperdiet sed. Cursus sit amet dictum sit amet justo donec enim diam. Ut consequat semper viverra nam libero. Purus gravida quis blandit turpis cursus in hac habitasse. Nullam vehicula ipsum a arcu cursus vitae. Egestas maecenas pharetra convallis posuere morbi leo.\n\nIn aliquam sem fringilla ut morbi tincidunt augue interdum velit. Aliquet eget sit amet tellus. Urna nec tincidunt praesent semper feugiat nibh sed. Leo duis ut diam quam nulla porttitor massa id. Viverra justo nec ultrices dui. Enim neque volutpat ac tincidunt. Ut sem nulla pharetra diam. In egestas erat imperdiet sed. Enim blandit volutpat maecenas volutpat blandit. Id diam maecenas ultricies mi eget. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Id nibh tortor id aliquet lectus proin nibh nisl.\n\nTempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Faucibus turpis in eu mi bibendum neque egestas. Ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Aliquam etiam erat velit scelerisque in dictum. Vestibulum rhoncus est pellentesque elit ullamcorper. In pellentesque massa placerat duis ultricies. Dui ut ornare lectus sit amet est placerat in egestas. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius. Quam quisque id diam vel quam. Viverra tellus in hac habitasse platea dictumst vestibulum. Hac habitasse platea dictumst quisque. Non consectetur a erat nam at lectus urna duis. Hendrerit dolor magna eget est lorem ipsum dolor sit amet. Netus et malesuada fames ac turpis egestas. In nisl nisi scelerisque eu ultrices vitae auctor. Cras ornare arcu dui vivamus. Magna ac placerat vestibulum lectus mauris ultrices eros in cursus.\n\nNulla aliquet enim tortor at. Tortor at risus viverra adipiscing at. Adipiscing diam donec adipiscing tristique risus nec. Rhoncus est pellentesque elit ullamcorper dignissim cras. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Congue mauris rhoncus aenean vel elit. Enim ut sem viverra aliquet eget sit amet tellus cras. Amet nulla facilisi morbi tempus. Adipiscing commodo elit at imperdiet. Et sollicitudin ac orci phasellus egestas. Non consectetur a erat nam. Diam quis enim lobortis scelerisque fermentum dui faucibus in. Scelerisque varius morbi enim nunc faucibus a pellentesque. Ornare arcu odio ut sem. Neque gravida in fermentum et. Et netus et malesuada fames ac turpis. Quis vel eros donec ac odio tempor orci dapibus ultrices. Est ante in nibh mauris cursus mattis.\n\nVel fringilla est ullamcorper eget nulla facilisi. Aliquet risus feugiat in ante metus dictum. Ultricies integer quis auctor elit sed vulputate mi sit amet. Semper eget duis at tellus at urna condimentum mattis pellentesque. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Facilisis magna etiam tempor orci eu lobortis elementum nibh. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Arcu non sodales neque sodales ut. Ullamcorper a lacus vestibulum sed arcu. Velit laoreet id donec ultrices tincidunt arcu. Nisl tincidunt eget nullam non nisi est sit amet. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget. In eu mi bibendum neque egestas. Vitae semper quis lectus nulla at volutpat. Nisl tincidunt eget nullam non nisi est sit.\n\nAt risus viverra adipiscing at in tellus integer. Enim diam vulputate ut pharetra sit. Dignissim convallis aenean et tortor at risus viverra. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam. A diam sollicitudin tempor id eu. Donec massa sapien faucibus et molestie ac. Mauris cursus mattis molestie a. Ullamcorper morbi tincidunt ornare massa eget. Ullamcorper dignissim cras tincidunt lobortis. Aliquam vestibulum morbi blandit cursus. Tellus elementum sagittis vitae et leo duis ut diam. Sed vulputate mi sit amet mauris commodo quis. Consectetur libero id faucibus nisl tincidunt. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. Tortor at auctor urna nunc id cursus metus aliquam. Et netus et malesuada fames ac turpis egestas integer eget.', NULL, '2019-05-12', NULL, '2019-05-19', '2019-05-20', 1);
COMMIT;

-- ----------------------------
-- Table structure for Organisation
-- ----------------------------
DROP TABLE IF EXISTS `Organisation`;
CREATE TABLE `Organisation` (
  `ID` int(10) NOT NULL,
  `NameOrganisation` varchar(50) DEFAULT NULL,
  `Responsible` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `DateOrganisation` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Organisation
-- ----------------------------
BEGIN;
INSERT INTO `Organisation` VALUES (1, 'WebFoot', 'Nsalla Ashref', 'WebFoot@gmail.com', 'Web1234Foot', '2018-05-13');
COMMIT;

-- ----------------------------
-- Table structure for OrganisationReservation
-- ----------------------------
DROP TABLE IF EXISTS `OrganisationReservation`;
CREATE TABLE `OrganisationReservation` (
  `OrganisationID` int(10) NOT NULL,
  `idWorkspace` int(10) NOT NULL,
  `DateReservation` date NOT NULL,
  `NumberOfPlaces` int(11) DEFAULT NULL,
  `status` nvarchar(20) DEFAULT NULL,
  PRIMARY KEY (`OrganisationID`,`idWorkspace`,`DateReservation`) USING BTREE,
  KEY `FKOrganisati932384` (`OrganisationID`),
  KEY `FKOrganisati912134` (`idWorkspace`),
  KEY `PKDateOrganisationReservation` (`DateReservation`) USING BTREE,
  CONSTRAINT `FKOrganisati912134` FOREIGN KEY (`idWorkspace`) REFERENCES `Workspace` (`idWorkspace`),
  CONSTRAINT `FKOrganisati932384` FOREIGN KEY (`OrganisationID`) REFERENCES `Organisation` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of OrganisationReservation
-- ----------------------------
BEGIN;
INSERT INTO `OrganisationReservation` VALUES (1, 1, '2019-05-26', 20,'Pending');
INSERT INTO `OrganisationReservation` VALUES (1, 1, '2019-06-01', 20,'Pending');
COMMIT;

-- ----------------------------
-- Table structure for Post
-- ----------------------------
DROP TABLE IF EXISTS `Post`;
CREATE TABLE `Post` (
  `idPost` int(10) NOT NULL,
  `NamePost` varchar(50) DEFAULT NULL,
  `TextPost` text,
  `Image` blob,
  `DatePost` date DEFAULT NULL,
  `File` blob,
  `idAdministrator` int(10) NOT NULL,
  PRIMARY KEY (`idPost`),
  KEY `FKPost479969` (`idAdministrator`),
  CONSTRAINT `FKPost479969` FOREIGN KEY (`idAdministrator`) REFERENCES `Administrator` (`idAdministrator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Post
-- ----------------------------
BEGIN;
INSERT INTO `Post` VALUES (1, '10 Things To Improve Your Studies', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo donec enim diam vulputate ut. Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Enim praesent elementum facilisis leo vel fringilla est. Ullamcorper a lacus vestibulum sed arcu non odio. Amet nisl suscipit adipiscing bibendum. Enim lobortis scelerisque fermentum dui faucibus. Consequat nisl vel pretium lectus quam. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Varius duis at consectetur lorem. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus. Sagittis vitae et leo duis ut diam. Turpis tincidunt id aliquet risus feugiat in. Tortor condimentum lacinia quis vel. Non tellus orci ac auctor augue. Consectetur adipiscing elit duis tristique sollicitudin nibh. Ultricies mi quis hendrerit dolor magna eget. Risus ultricies tristique nulla aliquet enim tortor at.\n\nEget nunc scelerisque viverra mauris in aliquam. Nunc sed velit dignissim sodales ut eu sem integer. Diam sollicitudin tempor id eu nisl. Odio ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. Tellus cras adipiscing enim eu. Id diam vel quam elementum pulvinar etiam non quam lacus. Sit amet justo donec enim. Orci nulla pellentesque dignissim enim sit. Arcu felis bibendum ut tristique et egestas quis ipsum. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Mattis nunc sed blandit libero volutpat. Nunc sed velit dignissim sodales. Amet mauris commodo quis imperdiet massa tincidunt. Neque gravida in fermentum et sollicitudin ac orci phasellus egestas. Tempus quam pellentesque nec nam aliquam sem et tortor consequat.\n\nAdipiscing at in tellus integer feugiat. Placerat vestibulum lectus mauris ultrices eros in. Sed faucibus turpis in eu. Sollicitudin tempor id eu nisl nunc. Pharetra et ultrices neque ornare aenean euismod elementum nisi. Quis commodo odio aenean sed adipiscing diam donec adipiscing tristique. Aliquet nibh praesent tristique magna sit amet purus. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Id consectetur purus ut faucibus pulvinar elementum integer enim neque. Eu ultrices vitae auctor eu augue ut lectus arcu. Sed augue lacus viverra vitae congue eu consequat ac. Sed sed risus pretium quam vulputate dignissim. Malesuada proin libero nunc consequat. In aliquam sem fringilla ut.\n\nConsectetur lorem donec massa sapien faucibus et. Pretium fusce id velit ut tortor pretium viverra. Cras tincidunt lobortis feugiat vivamus at augue eget arcu. Fermentum posuere urna nec tincidunt. Volutpat diam ut venenatis tellus in metus vulputate. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Nulla pellentesque dignissim enim sit amet venenatis urna. Blandit cursus risus at ultrices mi. Semper quis lectus nulla at volutpat diam ut. Turpis egestas sed tempus urna et pharetra. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Venenatis tellus in metus vulputate eu scelerisque.\n\nQuis commodo odio aenean sed. Sapien pellentesque habitant morbi tristique senectus et. Sit amet purus gravida quis blandit turpis cursus in hac. Enim nunc faucibus a pellentesque. Vitae et leo duis ut diam quam nulla. Faucibus pulvinar elementum integer enim neque volutpat ac. Integer enim neque volutpat ac tincidunt vitae semper quis. Dui ut ornare lectus sit amet est placerat. Duis at tellus at urna condimentum mattis pellentesque. Ut pharetra sit amet aliquam id diam maecenas ultricies. Lectus sit amet est placerat in egestas erat imperdiet sed. Cursus sit amet dictum sit amet justo donec enim diam. Ut consequat semper viverra nam libero. Purus gravida quis blandit turpis cursus in hac habitasse. Nullam vehicula ipsum a arcu cursus vitae. Egestas maecenas pharetra convallis posuere morbi leo.\n\nIn aliquam sem fringilla ut morbi tincidunt augue interdum velit. Aliquet eget sit amet tellus. Urna nec tincidunt praesent semper feugiat nibh sed. Leo duis ut diam quam nulla porttitor massa id. Viverra justo nec ultrices dui. Enim neque volutpat ac tincidunt. Ut sem nulla pharetra diam. In egestas erat imperdiet sed. Enim blandit volutpat maecenas volutpat blandit. Id diam maecenas ultricies mi eget. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Id nibh tortor id aliquet lectus proin nibh nisl.\n\nTempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Faucibus turpis in eu mi bibendum neque egestas. Ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Aliquam etiam erat velit scelerisque in dictum. Vestibulum rhoncus est pellentesque elit ullamcorper. In pellentesque massa placerat duis ultricies. Dui ut ornare lectus sit amet est placerat in egestas. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius. Quam quisque id diam vel quam. Viverra tellus in hac habitasse platea dictumst vestibulum. Hac habitasse platea dictumst quisque. Non consectetur a erat nam at lectus urna duis. Hendrerit dolor magna eget est lorem ipsum dolor sit amet. Netus et malesuada fames ac turpis egestas. In nisl nisi scelerisque eu ultrices vitae auctor. Cras ornare arcu dui vivamus. Magna ac placerat vestibulum lectus mauris ultrices eros in cursus.\n\nNulla aliquet enim tortor at. Tortor at risus viverra adipiscing at. Adipiscing diam donec adipiscing tristique risus nec. Rhoncus est pellentesque elit ullamcorper dignissim cras. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Congue mauris rhoncus aenean vel elit. Enim ut sem viverra aliquet eget sit amet tellus cras. Amet nulla facilisi morbi tempus. Adipiscing commodo elit at imperdiet. Et sollicitudin ac orci phasellus egestas. Non consectetur a erat nam. Diam quis enim lobortis scelerisque fermentum dui faucibus in. Scelerisque varius morbi enim nunc faucibus a pellentesque. Ornare arcu odio ut sem. Neque gravida in fermentum et. Et netus et malesuada fames ac turpis. Quis vel eros donec ac odio tempor orci dapibus ultrices. Est ante in nibh mauris cursus mattis.\n\nVel fringilla est ullamcorper eget nulla facilisi. Aliquet risus feugiat in ante metus dictum. Ultricies integer quis auctor elit sed vulputate mi sit amet. Semper eget duis at tellus at urna condimentum mattis pellentesque. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Facilisis magna etiam tempor orci eu lobortis elementum nibh. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Arcu non sodales neque sodales ut. Ullamcorper a lacus vestibulum sed arcu. Velit laoreet id donec ultrices tincidunt arcu. Nisl tincidunt eget nullam non nisi est sit amet. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget. In eu mi bibendum neque egestas. Vitae semper quis lectus nulla at volutpat. Nisl tincidunt eget nullam non nisi est sit.\n\nAt risus viverra adipiscing at in tellus integer. Enim diam vulputate ut pharetra sit. Dignissim convallis aenean et tortor at risus viverra. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam. A diam sollicitudin tempor id eu. Donec massa sapien faucibus et molestie ac. Mauris cursus mattis molestie a. Ullamcorper morbi tincidunt ornare massa eget. Ullamcorper dignissim cras tincidunt lobortis. Aliquam vestibulum morbi blandit cursus. Tellus elementum sagittis vitae et leo duis ut diam. Sed vulputate mi sit amet mauris commodo quis. Consectetur libero id faucibus nisl tincidunt. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. Tortor at auctor urna nunc id cursus metus aliquam. Et netus et malesuada fames ac turpis egestas integer eget.', NULL, '2019-05-13', NULL, 1);
INSERT INTO `Post` VALUES (2, 'Can You Do This?', 'Lorem ipsum dolor', 0x66696C653A2F2F2F55736572732F63726561746976652F446F63756D656E74732F4D61696E2E6A7067, '2019-05-13', 0x66696C653A2F2F2F55736572732F63726561746976652F446F63756D656E74732F556E7469746C65642E68746D6C, 1);
COMMIT;

-- ----------------------------
-- Table structure for Promotion
-- ----------------------------
DROP TABLE IF EXISTS `Promotion`;
CREATE TABLE `Promotion` (
  `idPromotion` int(10) NOT NULL,
  `NamePromotion` varchar(200) DEFAULT NULL,
  `TextPromotion` text,
  `Image` blob,
  `DatePost` date DEFAULT NULL,
  `DatePromotion` date DEFAULT NULL,
  `DateExpiration` date DEFAULT NULL,
  `idAdministrator` int(10) NOT NULL,
  PRIMARY KEY (`idPromotion`),
  KEY `FKPromotion228464` (`idAdministrator`),
  CONSTRAINT `FKPromotion228464` FOREIGN KEY (`idAdministrator`) REFERENCES `Administrator` (`idAdministrator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Promotion
-- ----------------------------
BEGIN;
INSERT INTO `Promotion` VALUES (1, 'Ramadan Promtion', 'M3a ramdan ymken likom tfatro f darkom :)', NULL, '2019-05-13', '2019-05-14', '2019-05-31', 1);
INSERT INTO `Promotion` VALUES (2, 'Summer Promotion', 'F Had Harara Kayn Promotion dyal sayf', NULL, '2019-05-13', '2019-05-31', '2019-06-29', 1);
COMMIT;

-- ----------------------------
-- Table structure for Subscription
-- ----------------------------
DROP TABLE IF EXISTS `Subscription`;
CREATE TABLE `Subscription` (
  `IdClient` int(10) NOT NULL,
  `IdEvent` int(10) NOT NULL,
  `DateSubscription` date NOT NULL,
  PRIMARY KEY (`IdClient`,`IdEvent`,`DateSubscription`) USING BTREE,
  KEY `FKSubscripti270949` (`IdClient`),
  KEY `FKSubscripti47137` (`IdEvent`),
  KEY `PKDateSubscription` (`DateSubscription`) USING BTREE,
  CONSTRAINT `FKSubscripti270949` FOREIGN KEY (`IdClient`) REFERENCES `Client` (`IdClient`),
  CONSTRAINT `FKSubscripti47137` FOREIGN KEY (`IdEvent`) REFERENCES `Event` (`IdEvent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of Subscription
-- ----------------------------
BEGIN;
INSERT INTO `Subscription` VALUES (1, 1, '2019-05-13');
INSERT INTO `Subscription` VALUES (1, 2, '2019-05-13');
INSERT INTO `Subscription` VALUES (2, 2, '2019-05-15');
COMMIT;

-- ----------------------------
-- Table structure for WorkSpace
-- ----------------------------
DROP TABLE IF EXISTS `WorkSpace`;
CREATE TABLE `WorkSpace` (
  `IdWorkSpace` int(10) NOT NULL AUTO_INCREMENT,
  `City` varchar(50) DEFAULT NULL,
  `Capacity` int(10) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdWorkSpace`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of WorkSpace
-- ----------------------------
BEGIN;
INSERT INTO `WorkSpace` VALUES (1, 'Kenitra', 30, 'Center Ville St Lyote');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
