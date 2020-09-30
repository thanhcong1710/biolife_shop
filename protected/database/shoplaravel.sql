/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shoplaravel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-09-23 22:39:44
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `about`
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `year` date NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `googlemap` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `activi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `about_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO about VALUES ('8', '2003-01-01', 'Thành lập', '0973446636', 'hieubvhd@gmail.com', '0973446636', 'vietec.com.vn', 'Tòa nhà Vietec Số 01- NV3/D22 Khu biệt thự nhà vườn 62 Trần Bình - Phường Mai Dịch - Quận Cầu Giấy - Hà Nội', '', 'i06E0_logo.png', 'Ngay từ khi thành lập Vietec.,JSC đã xác định đội ngũ nhân sự có năng lực là nền tảng của sự thành công, 9 thành viên khi đó bao gồm những cố vấn, chuyên gia tư vấn nghiệp vụ, chuyên gia cấp cao, chưa kể đội ngũ cộng tác viên và nhân sự làm việc tại các đại lý phân phối trên toàn quốc.', '1', '2017-08-05 09:58:45', '2017-08-05 09:58:45', null);
INSERT INTO about VALUES ('9', '2004-01-01', 'Phần mềm doanh nghiệp', '0973446636', 'hieubvhd@gmail.com', '0973446636', 'vietec.com.vn', 'Tòa nhà Vietec Số 01- NV3/D22 Khu biệt thự nhà vườn 62 Trần Bình - Phường Mai Dịch - Quận Cầu Giấy - Hà Nội', '', 'ERWQA_logo.png', 'Ngay từ khi thành lập Vietec.,JSC đã xác định đội ngũ nhân sự có năng lực là nền tảng của sự thành công, 9 thành viên khi đó bao gồm những cố vấn, chuyên gia tư vấn nghiệp vụ, chuyên gia cấp cao, chưa kể đội ngũ cộng tác viên và nhân sự làm việc tại các đại lý phân phối trên toàn quốc.', '1', '2017-08-05 09:59:57', '2017-08-05 10:04:39', null);
INSERT INTO about VALUES ('10', '2005-01-01', 'Hành chính công', '0973446636', 'hieubvhd@gmail.com', '0973446636', 'vietec.com.vn', 'Tòa nhà Vietec Số 01- NV3/D22 Khu biệt thự nhà vườn 62 Trần Bình - Phường Mai Dịch - Quận Cầu Giấy - Hà Nội', '', '5GSTT_logo.png', 'Ngay từ khi thành lập Vietec.,JSC đã xác định đội ngũ nhân sự có năng lực là nền tảng của sự thành công, 9 thành viên khi đó bao gồm những cố vấn, chuyên gia tư vấn nghiệp vụ, chuyên gia cấp cao, chưa kể đội ngũ cộng tác viên và nhân sự làm việc tại các đại lý phân phối trên toàn quốc.', '1', '2017-08-05 10:01:07', '2017-08-05 10:01:07', null);
INSERT INTO about VALUES ('11', '2006-01-01', 'Giáo dục', '0973446636', 'hieubvhd@gmail.com', '0973446636', 'vietec.com.vn', 'Tòa nhà Vietec Số 01- NV3/D22 Khu biệt thự nhà vườn 62 Trần Bình - Phường Mai Dịch - Quận Cầu Giấy - Hà Nội', '', 'HTVku_logo.png', 'Ngay từ khi thành lập Vietec.,JSC đã xác định đội ngũ nhân sự có năng lực là nền tảng của sự thành công, 9 thành viên khi đó bao gồm những cố vấn, chuyên gia tư vấn nghiệp vụ, chuyên gia cấp cao, chưa kể đội ngũ cộng tác viên và nhân sự làm việc tại các đại lý phân phối trên toàn quốc.', '1', '2017-08-05 10:01:55', '2017-08-05 10:01:55', null);
INSERT INTO about VALUES ('12', '2007-01-01', 'Quân sự', '0973446636', 'hieubvhd@gmail.com', '0973446636', 'vietec.com.vn', 'Tòa nhà Vietec Số 01- NV3/D22 Khu biệt thự nhà vườn 62 Trần Bình - Phường Mai Dịch - Quận Cầu Giấy - Hà Nội', '', 'Q9EpD_logo.png', 'Ngay từ khi thành lập Vietec.,JSC đã xác định đội ngũ nhân sự có năng lực là nền tảng của sự thành công, 9 thành viên khi đó bao gồm những cố vấn, chuyên gia tư vấn nghiệp vụ, chuyên gia cấp cao, chưa kể đội ngũ cộng tác viên và nhân sự làm việc tại các đại lý phân phối trên toàn quốc.', '1', '2017-08-05 10:02:40', '2017-08-05 10:02:40', null);
INSERT INTO about VALUES ('13', '2011-01-01', 'Sản xuất', '0973446636', 'hieubvhd@gmail.com', '0973446636', 'vietec.com.vn', 'Tòa nhà Vietec Số 01- NV3/D22 Khu biệt thự nhà vườn 62 Trần Bình - Phường Mai Dịch - Quận Cầu Giấy - Hà Nội', '', 'Bl4uL_logo.png', 'Ngay từ khi thành lập Vietec.,JSC đã xác định đội ngũ nhân sự có năng lực là nền tảng của sự thành công, 9 thành viên khi đó bao gồm những cố vấn, chuyên gia tư vấn nghiệp vụ, chuyên gia cấp cao, chưa kể đội ngũ cộng tác viên và nhân sự làm việc tại các đại lý phân phối trên toàn quốc.', '1', '2017-08-05 10:03:28', '2017-08-05 10:03:28', null);
INSERT INTO about VALUES ('14', '2017-01-01', 'Thực phẩm', '0973446636', 'hieubvhd@gmail.com', '0973446636', 'vietec.com.vn', 'Tòa nhà Vietec Số 01- NV3/D22 Khu biệt thự nhà vườn 62 Trần Bình - Phường Mai Dịch - Quận Cầu Giấy - Hà Nội', '', 'xY5Qr_logo.png', 'Ngay từ khi thành lập Vietec.,JSC đã xác định đội ngũ nhân sự có năng lực là nền tảng của sự thành công, 9 thành viên khi đó bao gồm những cố vấn, chuyên gia tư vấn nghiệp vụ, chuyên gia cấp cao, chưa kể đội ngũ cộng tác viên và nhân sự làm việc tại các đại lý phân phối trên toàn quốc.', '1', '2017-08-05 10:04:19', '2017-08-05 11:32:40', null);

-- ----------------------------
-- Table structure for `banner`
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO banner VALUES ('6', 'logo', '4st1m_logo.png', 'hhhsgfdbsfngdfh', 'vietec.com.vn', '1', '1', '2017-08-11 11:35:04', '2017-08-11 11:35:04', null);

-- ----------------------------
-- Table structure for `bills`
-- ----------------------------
DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_customer` int(10) unsigned NOT NULL,
  `date_order` date NOT NULL,
  `total` double(12,2) NOT NULL,
  `payment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `check_bills` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `bills_id_unique` (`id`),
  KEY `bills_id_customer_foreign` (`id_customer`),
  CONSTRAINT `bills_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bills
-- ----------------------------
INSERT INTO bills VALUES ('20', '32', '2017-08-03', '1200000.00', 'COD', 'Giao hàng trong ngày nhé', '2017-08-03 15:12:02', '2017-08-22 10:18:55', null, '1');
INSERT INTO bills VALUES ('21', '33', '2017-08-03', '730000.00', 'COD', 'Ngày mai chuyển hàng', '2017-08-03 15:29:34', '2017-08-22 08:30:05', null, '0');
INSERT INTO bills VALUES ('22', '34', '2017-08-11', '8087770.00', 'COD', 'ảbaetb', '2017-08-11 14:54:06', '2017-08-22 08:30:36', null, '0');
INSERT INTO bills VALUES ('23', '35', '2017-08-21', '1060000.00', 'COD', 'ểtn', '2017-08-21 16:57:53', '2017-08-22 08:30:32', null, '0');
INSERT INTO bills VALUES ('24', '36', '2017-09-05', '760000.00', 'COD', 'fff', '2017-09-05 11:18:40', '2017-09-05 11:19:28', null, '1');
INSERT INTO bills VALUES ('25', '37', '2018-03-09', '1400000.00', 'COD', '', '2018-03-09 17:10:49', '2018-03-09 17:12:25', null, '1');
INSERT INTO bills VALUES ('26', '38', '2018-05-30', '240000.00', 'COD', 'stheryjrty', '2018-05-30 19:27:11', '2018-05-30 19:28:08', null, '1');

-- ----------------------------
-- Table structure for `bill_detail`
-- ----------------------------
DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE `bill_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_bills` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bill_detail_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bill_detail
-- ----------------------------
INSERT INTO bill_detail VALUES ('28', '20', '2', '1', '160000', '2017-08-03 15:12:02', '2017-08-04 09:42:31', null);
INSERT INTO bill_detail VALUES ('29', '20', '3', '3', '120000', '2017-08-03 15:12:02', '2017-08-21 11:36:01', null);
INSERT INTO bill_detail VALUES ('30', '20', '1', '2', '120000', '2017-08-03 15:12:02', '2017-08-09 14:56:39', null);
INSERT INTO bill_detail VALUES ('31', '20', '5', '1', '160000', '2017-08-03 15:12:02', '2017-08-03 15:12:02', null);
INSERT INTO bill_detail VALUES ('32', '20', '13', '1', '280000', '2017-08-03 15:12:02', '2017-08-03 15:12:02', null);
INSERT INTO bill_detail VALUES ('33', '21', '8', '2', '150000', '2017-08-03 15:29:34', '2017-08-09 15:19:56', null);
INSERT INTO bill_detail VALUES ('34', '21', '9', '1', '150000', '2017-08-03 15:29:35', '2017-08-09 15:20:03', null);
INSERT INTO bill_detail VALUES ('35', '21', '13', '1', '280000', '2017-08-03 15:29:35', '2017-08-03 15:29:35', null);
INSERT INTO bill_detail VALUES ('36', '22', '4', '1', '160000', '2017-08-11 14:54:06', '2017-08-11 14:54:06', null);
INSERT INTO bill_detail VALUES ('37', '22', '22', '1', '150000', '2017-08-11 14:54:06', '2017-08-11 14:54:06', null);
INSERT INTO bill_detail VALUES ('38', '22', '75', '10', '777777', '2017-08-11 14:54:06', '2017-08-21 17:01:02', null);
INSERT INTO bill_detail VALUES ('39', '23', '1', '3', '120000', '2017-08-21 16:57:54', '2017-08-21 16:57:54', null);
INSERT INTO bill_detail VALUES ('40', '23', '2', '1', '160000', '2017-08-21 16:57:54', '2017-08-21 16:57:54', null);
INSERT INTO bill_detail VALUES ('41', '23', '3', '2', '120000', '2017-08-21 16:57:54', '2017-08-21 16:57:54', null);
INSERT INTO bill_detail VALUES ('42', '23', '9', '2', '150000', '2017-08-21 16:57:54', '2017-08-21 16:57:54', null);
INSERT INTO bill_detail VALUES ('43', '24', '4', '1', '160000', '2017-09-05 11:18:40', '2017-09-05 11:18:40', null);
INSERT INTO bill_detail VALUES ('44', '24', '2', '2', '160000', '2017-09-05 11:18:40', '2017-09-05 11:18:40', null);
INSERT INTO bill_detail VALUES ('45', '24', '1', '1', '120000', '2017-09-05 11:18:40', '2017-09-05 11:18:40', null);
INSERT INTO bill_detail VALUES ('46', '24', '5', '1', '160000', '2017-09-05 11:18:41', '2017-09-05 11:18:41', null);
INSERT INTO bill_detail VALUES ('47', '25', '2', '2', '160000', '2018-03-09 17:10:49', '2018-03-09 17:11:53', null);
INSERT INTO bill_detail VALUES ('48', '25', '3', '2', '120000', '2018-03-09 17:10:50', '2018-03-09 17:12:01', null);
INSERT INTO bill_detail VALUES ('49', '25', '13', '3', '280000', '2018-03-09 17:10:50', '2018-03-09 17:12:06', null);
INSERT INTO bill_detail VALUES ('50', '26', '3', '2', '120000', '2018-05-30 19:27:11', '2018-05-30 19:27:11', null);

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` int(10) unsigned NOT NULL,
  `idNews` int(10) unsigned NOT NULL,
  `idProducts` int(10) unsigned NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_iduser_foreign` (`idUser`),
  KEY `comment_idnews_foreign` (`idNews`),
  KEY `comment_idproducts_foreign` (`idProducts`),
  CONSTRAINT `comment_idnews_foreign` FOREIGN KEY (`idNews`) REFERENCES `news` (`id`),
  CONSTRAINT `comment_idproducts_foreign` FOREIGN KEY (`idProducts`) REFERENCES `products` (`id`),
  CONSTRAINT `comment_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for `contacts`
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contacts_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO contacts VALUES ('13', 'Hiếu', 'hieubvhd@gmail.com', '0973446636', 'Mua Bánh', 'Tôi muốn mua bánh ngọt hải hà số lượng lớn Shop có bán buôn không', '2017-08-11 10:55:34', '2017-08-11 10:55:34', null);

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customer_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO customer VALUES ('32', 'Bùi Văn Hiếu', 'nam', 'hieubvhd@gmail.com', 'Hà Nội', '0973446636', 'Giao hàng trong ngày nhé', '2017-08-03 15:12:02', '2017-08-03 15:12:02', null);
INSERT INTO customer VALUES ('33', 'Nguyễn Minh Huyền', 'nam', 'hieubvhd@gmail.com', 'Hà Nội', '0973446636', 'Ngày mai chuyển hàng', '2017-08-03 15:29:34', '2017-08-04 10:33:54', null);
INSERT INTO customer VALUES ('34', 'Hiếu', 'nam', 'hieubvhd@gmail.com', 'Hà Nội', '45675678', 'ảbaetb', '2017-08-11 14:54:05', '2017-08-11 14:54:05', null);
INSERT INTO customer VALUES ('35', 'Hiếu', 'nam', 'hieubvhd@gmail.com', 'Hà Nội', '45675678', 'ểtn', '2017-08-21 16:57:53', '2017-08-21 16:57:53', null);
INSERT INTO customer VALUES ('36', 'KHách thập phương', 'nam', 'hieubvhd@gmail.com', 'HN', '0973446636', 'fff', '2017-09-05 11:18:40', '2017-09-05 11:18:40', null);
INSERT INTO customer VALUES ('37', 'Bùi văn hiếu', 'nam', 'hieubvhd@gmail.com', 'fdyjrut', '0973446636', '', '2018-03-09 17:10:49', '2018-03-09 17:10:49', null);
INSERT INTO customer VALUES ('38', 'THoongs', 'nam', 'hieubvhd@gmail.com', 'HN', '4567568', 'stheryjrty', '2018-05-30 19:27:10', '2018-05-30 19:27:10', null);

-- ----------------------------
-- Table structure for `danhmucmenu`
-- ----------------------------
DROP TABLE IF EXISTS `danhmucmenu`;
CREATE TABLE `danhmucmenu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `show` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `orderby` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `danhmucmenu_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of danhmucmenu
-- ----------------------------
INSERT INTO danhmucmenu VALUES ('1', 'Bán hàng', '', '', '', '1', '2017-08-06 12:31:58', '2017-08-06 14:09:56', null, null);
INSERT INTO danhmucmenu VALUES ('2', 'Tin tức', '', '', '', '1', '2017-08-06 12:32:14', '2017-08-06 13:08:53', null, null);
INSERT INTO danhmucmenu VALUES ('3', 'Danh mục, hệ thống', '', '', '', '1', '2017-08-06 13:13:43', '2017-08-06 13:13:43', null, null);
INSERT INTO danhmucmenu VALUES ('4', 'Quản lý menu', '', '', '', '1', '2017-08-06 14:22:28', '2017-08-06 14:22:28', null, null);
INSERT INTO danhmucmenu VALUES ('5', 'aethse', 'thset', 'hethaet', 'aeth', '1', '2017-08-06 20:59:45', '2017-08-06 20:59:59', '2017-08-06 20:59:59', null);
INSERT INTO danhmucmenu VALUES ('6', 'tehsryh', 'sthsry', 'sryhsry', 'sryjry', '1', '2017-08-06 21:00:53', '2017-08-06 21:16:02', '2017-08-06 21:16:02', null);

-- ----------------------------
-- Table structure for `facebookpluginssocial`
-- ----------------------------
DROP TABLE IF EXISTS `facebookpluginssocial`;
CREATE TABLE `facebookpluginssocial` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sdk_javascript` text COLLATE utf8_unicode_ci NOT NULL,
  `googlemap` text COLLATE utf8_unicode_ci,
  `chatonline` text COLLATE utf8_unicode_ci,
  `comments` text COLLATE utf8_unicode_ci,
  `like_button` text COLLATE utf8_unicode_ci,
  `share_button` text COLLATE utf8_unicode_ci,
  `send_button` text COLLATE utf8_unicode_ci,
  `follow_button` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `facebookpluginssocial_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of facebookpluginssocial
-- ----------------------------
INSERT INTO facebookpluginssocial VALUES ('1', '<div id=\"fb-root\"></div>\r\n<script>(function(d, s, id) {\r\n  var js, fjs = d.getElementsByTagName(s)[0];\r\n  if (d.getElementById(id)) return;\r\n  js = d.createElement(s); js.id = id;\r\n  js.src = \"//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10\";\r\n  fjs.parentNode.insertBefore(js, fjs);\r\n}(document, \'script\', \'facebook-jssdk\'));</script>', '<div class=\"fb-send\" data-href=\"https://www.facebook.com/tuanhung.fanpage/\"></div>', '<div class=\"fb-send\" data-href=\"https://www.facebook.com/tuanhung.fanpage/\"></div>', '<div class=\"fb-comments\" data-href=\"https://www.facebook.com/tuanhung.fanpage/\" data-numposts=\"10\"></div>', '<div class=\"fb-like\" data-href=\"https://www.facebook.com/tuanhung.fanpage/\" data-layout=\"standard\" data-action=\"like\" data-size=\"small\" data-show-faces=\"true\" data-share=\"true\"></div>', '<div class=\"fb-share-button\" data-href=\"https://www.facebook.com/tuanhung.fanpage/\" data-layout=\"button_count\" data-size=\"small\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Ftuanhung.fanpage%2F&src=sdkpreparse\">Chia sẻ</a></div>', '', '', '2017-08-07 17:00:56', '2017-08-15 15:39:15', null);

-- ----------------------------
-- Table structure for `loaitin`
-- ----------------------------
DROP TABLE IF EXISTS `loaitin`;
CREATE TABLE `loaitin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idTheLoai` int(10) unsigned NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loaitin_id_unique` (`id`),
  KEY `loaitin_idtheloai_foreign` (`idTheLoai`),
  CONSTRAINT `loaitin_idtheloai_foreign` FOREIGN KEY (`idTheLoai`) REFERENCES `theloai` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of loaitin
-- ----------------------------
INSERT INTO loaitin VALUES ('1', '1', 'Nga - Mỹ', 'nga-my', '2017-07-31 10:23:00', '2017-07-31 10:23:00', null);
INSERT INTO loaitin VALUES ('2', '1', 'Châu âu', 'chau-au', '2017-07-31 10:23:26', '2017-07-31 10:23:26', null);
INSERT INTO loaitin VALUES ('3', '1', 'Chiến sự', 'chien-su', '2017-07-31 10:23:32', '2017-07-31 10:23:32', null);
INSERT INTO loaitin VALUES ('4', '2', 'Giao thông', 'giao-thong', '2017-07-31 10:24:05', '2017-07-31 10:24:05', null);
INSERT INTO loaitin VALUES ('5', '2', 'Nông nghiệp', 'nong-nghiep', '2017-07-31 10:24:13', '2017-07-31 10:24:13', null);
INSERT INTO loaitin VALUES ('6', '5', 'Bóng đá', 'bong-da', '2017-07-31 10:35:03', '2017-07-31 10:35:03', null);
INSERT INTO loaitin VALUES ('7', '5', 'Quần vợt', 'quan-vot', '2017-07-31 10:35:15', '2017-07-31 10:35:15', null);
INSERT INTO loaitin VALUES ('8', '6', 'Thắng cảnh', 'thang-canh', '2017-07-31 10:37:33', '2017-07-31 10:39:24', null);
INSERT INTO loaitin VALUES ('9', '1', 'rtheryh', 'rtheryh', '2017-07-31 10:37:38', '2017-07-31 10:37:45', '2017-07-31 10:37:45');
INSERT INTO loaitin VALUES ('10', '1', 'ảgawre', 'agawre', '2017-08-06 21:25:57', '2017-08-06 21:26:07', '2017-08-06 21:26:07');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `show` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_theloaimenu` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO menu VALUES ('7', 'Load ajax select option Loại Tin ---', 'getChangLoaiTin', 'AjaxController@getLoaiTin', 'admin/ajax/loaitin', '0', '2017-08-06 07:56:01', '2017-08-09 15:07:49', null, '7');
INSERT INTO menu VALUES ('8', 'Load ajax select option Nhà cung cấp', 'getDanhSachProvider_Ajax', 'AjaxController@getDanhSachProvider', 'admin/ajax/provider', '0', '2017-08-06 07:57:38', '2017-08-09 15:09:29', null, '3');
INSERT INTO menu VALUES ('9', 'Gửi đơn hàng', 'getCheckBills', 'AjaxController@getCheckBills', 'admin/ajax/checkBills', '0', '2017-08-06 07:58:56', '2017-08-09 15:10:20', null, '4');
INSERT INTO menu VALUES ('10', 'Sửa đơn hàng', 'getChangeTotal', 'AjaxController@getChangeTotal', 'admin/ajax/changeTotal', '0', '2017-08-06 07:59:49', '2017-08-09 15:16:35', null, '4');
INSERT INTO menu VALUES ('11', 'getTheLoaiMenu', 'getTheLoaiMenu', 'AjaxController@getTheLoaiMenu', 'admin/ajax/theloaimenu', '0', '2017-08-06 16:04:13', '2017-08-09 15:17:20', null, '16');
INSERT INTO menu VALUES ('14', 'Danh sách', 'getDanhSachType_Products', 'Type_ProductsController@getDanhSach', 'admin/type_products/danhsach', '1', '2017-08-06 15:32:02', '2017-08-06 15:32:02', null, '1');
INSERT INTO menu VALUES ('15', 'postThem', 'postThemType_Products', 'Type_ProductsController@postThem', 'admin/type_products/them', '0', '2017-08-06 15:33:26', '2017-08-06 15:33:26', null, '1');
INSERT INTO menu VALUES ('16', 'Sửa', 'getSuaType_Products', 'Type_ProductsController@getSua', 'admin/type_products/sua', '0', '2017-08-06 15:34:16', '2017-08-06 15:34:16', null, '1');
INSERT INTO menu VALUES ('17', 'getXoa', 'getXoaType_Products', 'Type_ProductsController@getXoa', 'admin/type_products/xoa', '0', '2017-08-06 15:35:44', '2017-08-06 15:35:44', null, '1');
INSERT INTO menu VALUES ('18', 'Thêm mới', 'getThemType_Products', 'Type_ProductsController@getThem', 'admin/type_products/them', '1', '2017-08-06 15:44:05', '2017-08-06 15:44:05', null, '1');
INSERT INTO menu VALUES ('19', 'postSua', 'postSuaType_Products', 'Type_ProductsController@postSua', 'admin/type_products/sua', '0', '2017-08-06 15:45:07', '2017-08-06 15:45:07', null, '1');
INSERT INTO menu VALUES ('20', 'Danh sách', 'getDanhSachProvider', 'ProviderController@getDanhSach', 'admin/provider/danhsach', '1', '2017-08-06 15:50:39', '2017-08-06 15:50:39', null, '2');
INSERT INTO menu VALUES ('21', 'Thêm mới', 'getThemProvider', 'ProviderController@getThem', 'admin/provider/them', '1', '2017-08-06 15:51:46', '2017-08-06 15:51:46', null, '2');
INSERT INTO menu VALUES ('22', 'postThem', 'postThemProvider', 'ProviderController@postThem', 'admin/provider/them', '0', '2017-08-06 15:53:07', '2017-08-06 15:53:07', null, '2');
INSERT INTO menu VALUES ('23', 'getSua', 'getSuaProvider', 'ProviderController@getSua', 'admin/provider/sua', '0', '2017-08-06 15:53:58', '2017-08-06 15:53:58', null, '2');
INSERT INTO menu VALUES ('24', 'postSua', 'postSuaProvider', 'ProviderController@postSua', 'admin/provider/sua', '0', '2017-08-06 15:54:31', '2017-08-06 15:54:31', null, '2');
INSERT INTO menu VALUES ('25', 'getXoa', 'getXoaProvider', 'ProviderController@getXoa', 'admin/provider/xoa', '0', '2017-08-06 15:55:09', '2017-08-06 15:55:09', null, '2');
INSERT INTO menu VALUES ('26', 'Danh sách', 'getDanhSachProducts', 'ProductsController@getDanhSach', 'admin/products/danhsach', '1', '2017-08-06 15:58:30', '2017-08-06 15:58:30', null, '3');
INSERT INTO menu VALUES ('27', 'Thêm mới', 'getThemProducts', 'ProductsController@getThem', 'admin/products/them', '1', '2017-08-06 15:59:14', '2017-08-06 15:59:14', null, '3');
INSERT INTO menu VALUES ('28', 'postThem', 'postThemProducts', 'ProductsController@postThem', 'admin/products/them', '0', '2017-08-06 16:00:06', '2017-08-06 16:00:06', null, '3');
INSERT INTO menu VALUES ('29', 'getSua', 'getSuaProducts', 'ProductsController@getSua', 'admin/products/sua', '0', '2017-08-06 16:00:56', '2017-08-06 16:00:56', null, '3');
INSERT INTO menu VALUES ('30', 'postSua', 'postSuaProducts', 'ProductsController@postSua', 'admin/products/sua', '0', '2017-08-06 16:01:37', '2017-08-06 16:01:37', null, '3');
INSERT INTO menu VALUES ('31', 'getXoa', 'getXoaProducts', 'ProductsController@getXoa', 'admin/products/xoa', '0', '2017-08-06 16:02:19', '2017-08-06 16:02:19', null, '3');
INSERT INTO menu VALUES ('33', 'Hóa đơn', 'getDanhSachBills', 'BillsController@getDanhSach', 'admin/bills/danhsach', '1', '2017-08-06 16:07:43', '2017-08-06 16:07:43', null, '4');
INSERT INTO menu VALUES ('34', 'getBillDetail', 'getBillDetail', 'Bill_DetailController@getBillDetail', 'admin/bill_detail/detail', '0', '2017-08-06 16:09:09', '2017-08-06 16:09:09', null, '4');
INSERT INTO menu VALUES ('35', 'Khách hàng', 'getDanhSachCustomer', 'CustomerController@getDanhSach', 'admin/customer/danhsach', '1', '2017-08-06 16:11:42', '2017-08-06 16:11:42', null, '4');
INSERT INTO menu VALUES ('36', 'getDanhSachFormCustomer', 'getDanhSachBillsFormCustomer', 'BillsController@getDanhSachFormCustomer', 'admin/bills/danhsach', '0', '2017-08-06 16:13:51', '2017-08-06 16:13:51', null, '4');
INSERT INTO menu VALUES ('37', 'getXoa đơn hàng chi tiết', 'getXoaBillDetail', 'Bill_DetailController@getXoa', 'admin/bill_detail/xoa', '0', '2017-08-06 16:16:45', '2017-08-06 16:16:45', null, '4');
INSERT INTO menu VALUES ('38', 'postChuyenHang - gửi mail và chuyển đơn hàng', 'postChuyenHang', 'Bill_DetailController@postChuyenHang', 'admin/bill_detail/chuyenhang', '0', '2017-08-06 16:18:59', '2017-08-06 16:18:59', null, '4');
INSERT INTO menu VALUES ('39', 'getXoa - xóa đơn hàng chính', 'getXoaBills', 'BillsController@getXoa', 'admin/bills/xoa', '0', '2017-08-06 16:20:29', '2017-08-06 16:20:29', null, '4');
INSERT INTO menu VALUES ('40', 'getXoa - xóa khách hàng', 'getXoaCustomer', 'CustomerController@getXoa', 'admin/customer/xoa', '0', '2017-08-06 16:21:52', '2017-08-06 16:21:52', null, '4');
INSERT INTO menu VALUES ('41', 'Liên hệ khách', 'getDanhSachContacts', 'ContactsController@getDanhSach', 'admin/contacts/danhsach', '1', '2017-08-06 16:23:41', '2017-08-06 16:23:41', null, '4');
INSERT INTO menu VALUES ('42', 'getXoa xáo liên hệ của khách', 'getXoaContacts', 'ContactsController@getXoa', 'admin/contacts/xoa', '0', '2017-08-06 16:25:54', '2017-08-06 16:25:54', null, '4');
INSERT INTO menu VALUES ('43', 'Danh sách', 'getDanhSachTheLoai', 'TheLoaiController@getDanhSach', 'admin/theloai/danhsach', '1', '2017-08-06 16:28:01', '2017-08-06 16:28:01', null, '5');
INSERT INTO menu VALUES ('44', 'Thêm mới', 'getThemTheLoai', 'TheLoaiController@getThem', 'admin/theloai/them', '1', '2017-08-06 16:28:47', '2017-08-06 16:28:47', null, '5');
INSERT INTO menu VALUES ('45', 'postThem - thêm mới thể loại tin', 'postThemTheLoai', 'TheLoaiController@postThem', 'admin/theloai/them', '0', '2017-08-06 16:29:43', '2017-08-06 16:29:43', null, '5');
INSERT INTO menu VALUES ('46', 'getSua - sửa thể loại', 'getSuaTheLoai', 'TheLoaiController@getSua', 'admin/theloai/sua', '0', '2017-08-06 16:30:48', '2017-08-06 16:30:48', null, '5');
INSERT INTO menu VALUES ('47', 'postSua - sửa thể loại', 'postSuaTheLoai', 'TheLoaiController@postSua', 'admin/theloai/sua', '0', '2017-08-06 16:31:26', '2017-08-06 16:31:26', null, '5');
INSERT INTO menu VALUES ('48', 'getXoa - xáo thể loại tin', 'getXoaTheLoai', 'TheLoaiController@getXoa', 'admin/theloai/xoa', '0', '2017-08-06 16:32:05', '2017-08-06 16:32:05', null, '5');
INSERT INTO menu VALUES ('49', 'Danh sách', 'getDanhSachLoaiTin', 'LoaiTinController@getDanhSach', 'admin/loaitin/danhsach', '1', '2017-08-06 16:33:08', '2017-08-06 16:33:08', null, '6');
INSERT INTO menu VALUES ('50', 'Thêm mới', 'getThemLoaiTin', 'LoaiTinController@getThem', 'admin/loaitin/them', '1', '2017-08-06 16:34:17', '2017-08-06 16:34:17', null, '6');
INSERT INTO menu VALUES ('51', 'postThem', 'postThemLoaiTin', 'LoaiTinController@postThem', 'admin/loaitin/them', '0', '2017-08-06 16:35:18', '2017-08-06 16:35:18', null, '6');
INSERT INTO menu VALUES ('52', 'getSua', 'getSuaLoaiTin', 'LoaiTinController@getSua', 'admin/loaitin/sua', '0', '2017-08-06 16:36:30', '2017-08-06 16:36:30', null, '6');
INSERT INTO menu VALUES ('53', 'postSua', 'postSuaLoaiTin', 'LoaiTinController@postSua', 'admin/loaitin/sua', '0', '2017-08-06 16:37:39', '2017-08-06 16:37:39', null, '6');
INSERT INTO menu VALUES ('54', 'getXoa', 'getXoaLoaiTin', 'LoaiTinController@getXoa', 'admin/loaitin/xoa', '0', '2017-08-06 16:38:24', '2017-08-06 16:38:24', null, '6');
INSERT INTO menu VALUES ('55', 'Danh sách', 'getDanhSachNews', 'NewsController@getDanhSach', 'admin/news/danhsach', '1', '2017-08-06 16:40:42', '2017-08-06 16:40:42', null, '7');
INSERT INTO menu VALUES ('56', 'Thêm mới', 'getThemNews', 'NewsController@getThem', 'admin/news/them', '1', '2017-08-06 16:41:25', '2017-08-06 16:41:25', null, '7');
INSERT INTO menu VALUES ('57', 'postThem', 'postThemNews', 'NewsController@postThem', 'admin/news/them', '0', '2017-08-06 16:42:00', '2017-08-06 16:42:00', null, '7');
INSERT INTO menu VALUES ('58', 'getSua', 'getSuaNews', 'NewsController@getSua', 'admin/news/sua', '0', '2017-08-06 16:42:50', '2017-08-06 16:42:50', null, '7');
INSERT INTO menu VALUES ('59', 'postSua', 'postSuaNews', 'NewsController@postSua', 'admin/news/sua', '0', '2017-08-06 16:43:24', '2017-08-06 16:43:24', null, '7');
INSERT INTO menu VALUES ('60', 'getXoa', 'getXoaNews', 'NewsController@getXoa', 'admin/news/xoa', '0', '2017-08-06 16:43:59', '2017-08-06 16:43:59', null, '7');
INSERT INTO menu VALUES ('61', 'Danh sách', 'getDanhSachSlide', 'SlideController@getDanhSach', 'admin/slide/danhsach', '1', '2017-08-06 16:45:03', '2017-08-06 16:45:03', null, '8');
INSERT INTO menu VALUES ('62', 'Thêm mới', 'getThemSlide', 'SlideController@getThem', 'admin/slide/them', '1', '2017-08-06 16:45:56', '2017-08-06 16:45:56', null, '8');
INSERT INTO menu VALUES ('63', 'postThem', 'postThemSlide', 'SlideController@postThem', 'admin/slide/them', '0', '2017-08-06 16:46:30', '2017-08-06 16:46:30', null, '8');
INSERT INTO menu VALUES ('64', 'getSua', 'getSuaSlide', 'SlideController@getSua', 'admin/slide/sua', '0', '2017-08-06 16:47:04', '2017-08-06 16:47:04', null, '8');
INSERT INTO menu VALUES ('65', 'postSua', 'postSuaSlide', 'SlideController@postSua', 'admin/slide/sua', '0', '2017-08-06 16:47:38', '2017-08-06 16:47:38', null, '8');
INSERT INTO menu VALUES ('66', 'getXoa', 'getXoaSlide', 'SlideController@getXoa', 'admin/slide/xoa', '0', '2017-08-06 16:48:09', '2017-08-06 16:48:09', null, '8');
INSERT INTO menu VALUES ('67', 'Danh sách', 'getDanhSachUnit', 'UnitController@getDanhSach', 'admin/unit/danhsach', '1', '2017-08-06 17:00:15', '2017-08-06 17:00:15', null, '9');
INSERT INTO menu VALUES ('68', 'Thêm mới', 'getThemUnit', 'UnitController@getThem', 'admin/unit/them', '1', '2017-08-06 17:00:52', '2017-08-06 17:00:52', null, '9');
INSERT INTO menu VALUES ('69', 'postThem', 'postThemUnit', 'UnitController@postThem', 'admin/unit/them', '0', '2017-08-06 17:01:33', '2017-08-06 17:01:33', null, '9');
INSERT INTO menu VALUES ('70', 'getSua', 'getSuaUnit', 'UnitController@getSua', 'admin/unit/sua', '0', '2017-08-06 17:02:07', '2017-08-06 17:02:07', null, '9');
INSERT INTO menu VALUES ('71', 'postSua', 'postSuaUnit', 'UnitController@postSua', 'admin/unit/sua', '0', '2017-08-06 17:02:54', '2017-08-06 17:02:54', null, '9');
INSERT INTO menu VALUES ('72', 'getXoa', 'getXoaUnit', 'UnitController@getXoa', 'admin/unit/xoa', '0', '2017-08-06 17:03:27', '2017-08-06 17:03:27', null, '9');
INSERT INTO menu VALUES ('73', 'Danh sách', 'getDanhSachUser', 'UserController@getDanhSach', 'admin/users/danhsach', '1', '2017-08-06 17:04:33', '2017-08-06 17:04:33', null, '10');
INSERT INTO menu VALUES ('74', 'Thêm mới', 'getThemUser', 'UserController@getThem', 'admin/users/them', '1', '2017-08-06 17:06:00', '2017-08-06 17:06:00', null, '10');
INSERT INTO menu VALUES ('75', 'postThem', 'postThemUser', 'UserController@postThem', 'admin/users/them', '0', '2017-08-06 17:06:36', '2017-08-06 17:06:36', null, '10');
INSERT INTO menu VALUES ('76', 'getSua', 'getSuaUser', 'UserController@getSua', 'admin/users/sua', '0', '2017-08-06 17:07:13', '2017-08-06 17:07:13', null, '10');
INSERT INTO menu VALUES ('77', 'postSua', 'postSuaUser', 'UserController@postSua', 'admin/users/sua', '0', '2017-08-06 17:07:39', '2017-08-06 17:07:39', null, '10');
INSERT INTO menu VALUES ('78', 'getXoa', 'getXoaUser', 'UserController@getXoa', 'admin/users/xoa', '0', '2017-08-06 17:08:19', '2017-08-06 17:08:19', null, '10');
INSERT INTO menu VALUES ('79', 'Thông tin chung', 'getDanhSachThongtinchung', 'hongtinchungController@getDanhSach', 'admin/thongtinchung/danhsach', '1', '2017-08-06 17:10:02', '2017-08-06 17:10:02', null, '11');
INSERT INTO menu VALUES ('80', 'postSua', 'postSuaThongtinchung', 'ThongtinchungController@postSua', 'admin/thongtinchung/sua', '0', '2017-08-06 17:10:46', '2017-08-06 17:10:46', null, '11');
INSERT INTO menu VALUES ('81', 'Danh sách', 'getDanhSachBanner', 'BannerController@getDanhSach', 'admin/banner/danhsach', '1', '2017-08-06 17:12:00', '2017-08-06 17:12:00', null, '12');
INSERT INTO menu VALUES ('82', 'Thêm mới', 'getThemBanner', 'BannerController@getThem', 'admin/banner/them', '1', '2017-08-06 17:12:35', '2017-08-06 17:12:35', null, '12');
INSERT INTO menu VALUES ('83', 'postThem', 'postThemBanner', 'BannerController@postThem', 'admin/banner/them', '0', '2017-08-06 17:13:04', '2017-08-06 17:13:04', null, '12');
INSERT INTO menu VALUES ('84', 'getSua', 'getSuaBanner', 'BannerController@getSua', 'admin/banner/sua', '0', '2017-08-06 17:13:36', '2017-08-06 17:13:36', null, '12');
INSERT INTO menu VALUES ('85', 'postSua', 'postSuaBanner', 'BannerController@postSua', 'admin/banner/sua', '0', '2017-08-06 17:14:04', '2017-08-06 17:14:04', null, '12');
INSERT INTO menu VALUES ('86', 'getXoa', 'getXoaBanner', 'BannerController@getXoa', 'admin/banner/xoa', '0', '2017-08-06 17:14:31', '2017-08-06 17:14:31', null, '12');
INSERT INTO menu VALUES ('87', 'Danh sách', 'getDanhSachAbout', 'AboutController@getDanhSach', 'admin/about/danhsach', '1', '2017-08-06 17:15:34', '2017-08-06 17:15:34', null, '13');
INSERT INTO menu VALUES ('88', 'Thêm mới', 'getThemAbout', 'AboutController@getThem', 'admin/about/them', '1', '2017-08-06 17:16:14', '2017-08-06 17:16:14', null, '13');
INSERT INTO menu VALUES ('89', 'postThem', 'postThemAbout', 'AboutController@postThem', 'admin/about/them', '0', '2017-08-06 17:16:48', '2017-08-06 17:16:48', null, '13');
INSERT INTO menu VALUES ('90', 'getSua', 'getSuaAbout', 'AboutController@getSua', 'admin/about/sua', '0', '2017-08-06 17:17:34', '2017-08-06 17:17:34', null, '13');
INSERT INTO menu VALUES ('91', 'postSua', 'postSuaAbout', 'AboutController@postSua', 'admin/about/sua', '0', '2017-08-06 17:18:10', '2017-08-06 17:18:10', null, '13');
INSERT INTO menu VALUES ('92', 'getXoa', 'getXoaAbout', 'AboutController@getXoa', 'admin/about/xoa', '0', '2017-08-06 17:18:40', '2017-08-06 17:18:40', null, '13');
INSERT INTO menu VALUES ('93', 'Danh sách', 'getDanhSachDanhMucMenu', 'DanhMucMenuController@getDanhSach', 'admin/danhmucmenu/danhsach', '1', '2017-08-06 17:19:30', '2017-08-06 17:19:30', null, '14');
INSERT INTO menu VALUES ('94', 'Thêm mới', 'getThemDanhMucMenu', 'DanhMucMenuController@getThem', 'admin/danhmucmenu/them', '1', '2017-08-06 17:20:00', '2017-08-06 17:20:00', null, '14');
INSERT INTO menu VALUES ('95', 'postThem', 'postThemDanhMucMenu', 'DanhMucMenuController@postThem', 'admin/danhmucmenu/them', '0', '2017-08-06 17:20:37', '2017-08-06 17:20:37', null, '14');
INSERT INTO menu VALUES ('96', 'getSua', 'getSuaDanhMucMenu', 'DanhMucMenuController@getSua', 'admin/danhmucmenu/sua', '0', '2017-08-06 17:21:11', '2017-08-06 17:21:11', null, '14');
INSERT INTO menu VALUES ('97', 'postSua', 'postSuaDanhMucMenu', 'DanhMucMenuController@postSua', 'admin/danhmucmenu/sua', '0', '2017-08-06 17:21:40', '2017-08-06 17:21:40', null, '14');
INSERT INTO menu VALUES ('98', 'getXoa', 'getXoaDanhMucMenu', 'DanhMucMenuController@getXoa', 'admin/danhmucmenu/xoa', '0', '2017-08-06 17:22:09', '2017-08-06 17:22:09', null, '14');
INSERT INTO menu VALUES ('99', 'Danh sách', 'getDanhSachTheLoaiMenu', 'TheLoaiMenuController@getDanhSach', 'admin/theloaimenu/danhsach', '1', '2017-08-06 17:22:47', '2017-08-06 17:22:47', null, '15');
INSERT INTO menu VALUES ('100', 'Thêm mới', 'getThemTheLoaiMenu', 'TheLoaiMenuController@getThem', 'admin/theloaimenu/them', '1', '2017-08-06 17:23:20', '2017-08-06 17:23:20', null, '15');
INSERT INTO menu VALUES ('101', 'postThem', 'postThemTheLoaiMenu', 'TheLoaiMenuController@postThem', 'admin/theloaimenu/them', '0', '2017-08-06 17:23:54', '2017-08-06 17:23:54', null, '15');
INSERT INTO menu VALUES ('102', 'getSua', 'getSuaTheLoaiMenu', 'TheLoaiMenuController@getSua', 'admin/theloaimenu/sua', '0', '2017-08-06 17:24:33', '2017-08-06 17:24:33', null, '15');
INSERT INTO menu VALUES ('103', 'postSua', 'postSuaTheLoaiMenu', 'TheLoaiMenuController@postSua', 'admin/theloaimenu/sua', '0', '2017-08-06 17:25:17', '2017-08-06 17:25:17', null, '15');
INSERT INTO menu VALUES ('104', 'getXoa', 'getXoaTheLoaiMenu', 'TheLoaiMenuController@getXoa', 'admin/theloaimenu/xoa', '0', '2017-08-06 17:25:49', '2017-08-06 17:25:49', null, '15');
INSERT INTO menu VALUES ('105', 'Danh sách', 'getDanhSachMenu', 'MenuController@getDanhSach', 'admin/menu/danhsach', '1', '2017-08-06 17:26:50', '2017-08-06 17:26:50', null, '16');
INSERT INTO menu VALUES ('106', 'Thêm mới', 'getThemMenu', 'MenuController@getThem', 'admin/menu/them', '1', '2017-08-06 17:27:12', '2017-08-06 17:27:12', null, '16');
INSERT INTO menu VALUES ('107', 'postThem', 'postThemMenu', 'MenuController@postThem', 'admin/menu/them', '0', '2017-08-06 17:27:59', '2017-08-06 17:27:59', null, '16');
INSERT INTO menu VALUES ('108', 'getSua', 'getSuaMenu', 'MenuController@getSua', 'admin/menu/sua', '0', '2017-08-06 17:28:35', '2017-08-06 17:28:35', null, '16');
INSERT INTO menu VALUES ('109', 'postSua', 'postSuaMenu', 'MenuController@postSua', 'admin/menu/sua', '0', '2017-08-06 17:29:01', '2017-08-06 17:29:01', null, '16');
INSERT INTO menu VALUES ('110', 'getXoa', 'getXoaMenu', 'MenuController@getXoa', 'admin/menu/xoa', '0', '2017-08-06 17:29:29', '2017-08-06 17:29:29', null, '16');
INSERT INTO menu VALUES ('112', 'Facebook Plugins Social- Chat online - GoogleMap', 'getDanhSachFacebookPluginsSocial', 'FacebookPluginsSocialController@getDanhSach', 'admin/thongtinchung/facebookpluginssocial', '1', '2017-08-08 16:55:00', '2017-08-08 16:55:00', null, '11');
INSERT INTO menu VALUES ('113', 'postSua', 'postSuaFacebookPluginsSocial', 'FacebookPluginsSocialController@postSua', 'admin/thongtinchung/suafacebookpluginssocial', '0', '2017-08-08 16:55:45', '2017-08-08 16:55:45', null, '11');
INSERT INTO menu VALUES ('114', 'Tìm kiếm theo Loại + Nhà phân phối', 'postDanhSachProducts', 'ProductsController@postDanhSach', 'admin/products/danhsach', '0', '2017-08-22 10:03:53', '2017-08-22 10:03:53', null, '3');
INSERT INTO menu VALUES ('115', 'Sản phẩm bán chạy', 'getBanChayProducts', 'ThongKeController@getBanChay', 'admin/thongke/banchay', '1', '2017-08-22 10:42:45', '2017-08-22 10:42:45', null, '18');
INSERT INTO menu VALUES ('116', 'Export ban chạy', 'getBanChayExport', 'ExportExcelController@getBanChay', 'admin/export/banchay', '0', '2017-08-22 11:14:17', '2017-08-22 11:14:17', null, '18');
INSERT INTO menu VALUES ('117', 'Xuất excel hóa đơn gốc', 'getBillsExport', 'ExportExcelController@getBills', 'admin/export/export_banchay', '0', '2017-08-22 16:06:49', '2017-08-22 16:06:49', null, '4');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO migrations VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO migrations VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO migrations VALUES ('2017_07_24_085402_customer', '1');
INSERT INTO migrations VALUES ('2017_07_24_090644_bills', '1');
INSERT INTO migrations VALUES ('2017_07_24_091434_type_products', '1');
INSERT INTO migrations VALUES ('2017_07_24_091844_products', '1');
INSERT INTO migrations VALUES ('2017_07_24_092839_bill_detail', '1');
INSERT INTO migrations VALUES ('2017_07_24_094159_news', '1');
INSERT INTO migrations VALUES ('2017_07_24_094724_slide', '1');
INSERT INTO migrations VALUES ('2017_07_26_084732_Timezones', '2');
INSERT INTO migrations VALUES ('2017_07_29_110914_theloai', '3');
INSERT INTO migrations VALUES ('2017_07_29_110925_loaitin', '3');
INSERT INTO migrations VALUES ('2017_07_31_114329_Comments', '4');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiBat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `SoLuongXem` int(11) NOT NULL,
  `idLoaiTin` int(11) NOT NULL,
  `comments` text COLLATE utf8_unicode_ci,
  `like_button` text COLLATE utf8_unicode_ci,
  `share_button` text COLLATE utf8_unicode_ci,
  `send_button` text COLLATE utf8_unicode_ci,
  `follow_button` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO news VALUES ('9', 'Truy tìm xe khách chạy ngược chiều trên quốc lộ 1A', 'truy-tim-xe-khach-chay-nguoc-chieu-tren-quoc-lo-1a', '<h3>Xe kh&aacute;ch của nh&agrave; xe Tiến Phương ph&oacute;ng ngược chiều tr&ecirc;n quốc lộ 1A khiến nhiều phương tiện phải n&eacute; tr&aacute;nh.</h3>\r\n', '<div class=\"block_ads_connect fck_detail width_common\" style=\"float:left; font-family:arial; font-size:14px; font-stretch:normal; line-height:normal; overflow:visible; padding:0px; width:500px\">\r\n<p>Ng&agrave;y 31/7, Ph&ograve;ng cảnh s&aacute;t giao th&ocirc;ng Thanh Ho&aacute; cho biết đang điều tra lỗi vi phạm của chiếc xe kh&aacute;ch chạy ngược chiều tr&ecirc;n quốc lộ 1A.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"margin:0px auto 10px; max-width:100%; padding:0px; width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"truy-tim-xe-khach-chay-nguoc-chieu-tren-quoc-lo-1a\" src=\"https://i-vnexpress.vnecdn.net/2017/07/31/1111-5395-1501470107.jpg\" style=\"border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Chiếc xe chạy ngược chiều tr&ecirc;n quốc lộ 1A đoạn qua tỉnh Thanh Ho&aacute;.&nbsp;<em>Ảnh cắt từ clip.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&ldquo;Qua video, ch&uacute;ng t&ocirc;i đ&atilde; x&aacute;c định được biển số v&agrave; chủ phương tiện. Đơn vị đang y&ecirc;u cầu l&aacute;i xe đến khai b&aacute;o&rdquo;, trung t&aacute; Tống Th&agrave;nh Văn - Đội trưởng CSGT quốc lộ 1A Thanh Ho&aacute; cho hay.</p>\r\n\r\n<p>Theo trung t&aacute; Văn, với lỗi chạy ngược chiều, t&agrave;i xế chắc chắn sẽ bị xử phạt h&agrave;nh ch&iacute;nh một triệu đồng, đồng thời bị tước giấy ph&eacute;p l&aacute;i xe 30 ng&agrave;y.</p>\r\n\r\n<div style=\"padding:0px; text-align:center\">\r\n<div class=\"box_embed_video_parent\" style=\"padding:0px\">\r\n<div class=\"box_embed_video\" style=\"background:#f5f5f5; height:0px; margin-bottom:1em; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px 0px 281.25px; position:relative; width:500px\">\r\n<div class=\"bg_overlay_small_unpin\" style=\"background:#000000; height:281px; left:0px; opacity:0; padding:0px; position:absolute; top:0px; transition:top 0.5s, left 0.5s, width 0.5s ease, height 0.5s ease, opacity 1s ease-in; width:500px; z-index:9999\">&nbsp;</div>\r\n\r\n<div class=\"bg_overlay_small\" style=\"background:0px 0px; height:281px; left:174.5px; padding:0px; position:fixed; top:-50px; transition:left 0.5s, width 0.5s ease, height 0.5s ease, top 0.5s ease; width:500px; z-index:-1\">&nbsp;</div>\r\n\r\n<div class=\"embed-container\" style=\"height:0px; margin-bottom:1em; margin-left:0px; margin-right:0px; margin-top:0px; opacity:1; overflow:hidden; padding:0px 0px 281.25px; position:relative; transition-duration:0.7s; transition-property:left; transition-timing-function:cubic-bezier(0.7, 1, 0.7, 1); width:500px; z-index:9999\"><iframe class=\"parser_player_vnexpress\" frameborder=\"0\" height=\"270\" id=\"player_159614_0\" src=\"http://video.vnexpress.net/parser.html?id=159614&amp;t=2&amp;ft=video&amp;si=1000000&amp;ap=0&amp;ishome=0&amp;player_id=159614_0&amp;articleId=3620650\" style=\"margin: 0px; padding: 0px; position: absolute; top: 0px; left: 0px; width: 500px; height: 281.25px;\" width=\"480\"></iframe>\r\n\r\n<div class=\"parser_title\" style=\"background:#ffffff; box-sizing:border-box; font-stretch:normal; height:30px; left:0px; line-height:normal; opacity:0; overflow:hidden; padding:7px 10px; position:absolute; text-overflow:ellipsis; top:168.75px; transition-duration:0.2s; transition-property:all; transition-timing-function:cubic-bezier(0.2, 1, 0.2, 1); visibility:hidden; white-space:nowrap; width:500px\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>Hai ng&agrave;y nay, tr&ecirc;n mạng x&atilde; hội xuất hiện video quay cảnh một xe kh&aacute;ch m&agrave;u v&agrave;ng chạy ngược chiều tr&ecirc;n quốc lộ 1A. Nh&agrave; chức tr&aacute;ch x&aacute;c định, phương tiện vi phạm mang biển số Thanh Ho&aacute; của h&atilde;ng xe Tiến Phương, chạy tuyến Thanh Ho&aacute; &ndash; Th&aacute;i Nguy&ecirc;n. Khu vực chiếc xe vi phạm giao th&ocirc;ng thuộc địa b&agrave;n thị x&atilde; Bỉm Sơn.</p>\r\n</div>\r\n\r\n<div class=\"author_mail width_common\" style=\"color:#d6d6d6; float:left; font-family:arial; font-size:14px; margin-bottom:15px; margin-left:0px; margin-right:0px; margin-top:0px; padding:0px; text-align:right; width:500px\">\r\n<p><strong>L&ecirc; Ho&agrave;ng</strong></p>\r\n</div>\r\n', 'VgFmD_1111-5395-1501470107.jpg', '1', '2017-07-31 11:15:26', '2017-08-15 15:48:45', null, '1', '4', 'stnsry', 'nryn', 'ndry', 'sryndry', 'ndrtyn');
INSERT INTO news VALUES ('10', 'Đáp trả Mỹ, Putin yêu cầu Washington cắt giảm 755 nhân viên ngoại giao', 'dap-tra-my-putin-yeu-cau-washington-cat-giam-755-nhan-vien-ngoai-giao', '<h3>Putin yêu cầu Mỹ giảm 755 nhân viên ngoại giao tại Nga - động thái nhằm đáp trả dự luật trừng phạt được lưỡng viện Mỹ thông qua.&nbsp;</h3>\r\n', '<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"font-family:arial; font-size:14px; margin:0px auto 10px; max-width:100%; padding:0px; width:500px\">\r\n	<tbody style=\"margin: 0px; padding: 0px;\">\r\n		<tr style=\"margin: 0px; padding: 0px;\">\r\n			<td style=\"margin: 0px; padding: 0px; line-height: 0;\"><img alt=\"dap-tra-my-putin-yeu-cau-washington-cat-giam-755-nhan-vien-ngoai-giao\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"https://i-vnexpress.vnecdn.net/2017/07/31/2017-07-30T172539Z-1764854560-3725-2389-1501458099.jpg\" style=\"border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px\" /></td>\r\n		</tr>\r\n		<tr style=\"margin: 0px; padding: 0px;\">\r\n			<td style=\"margin: 0px; padding: 0px; line-height: 0;\">\r\n			<p class=\"Image\" style=\"margin: 0px; padding: 10px; line-height: normal; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; background: rgb(245, 245, 245);\">Tổng thống Nga Putin. Ảnh:&nbsp;<em style=\"margin:0px; padding:0px\">Reuters</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\"><span style=\"margin:0px; padding:0px\">Putin nói trong cuộc phỏng vấn phát sóng trên&nbsp;<em style=\"margin:0px; padding:0px\">Vesti TV</em>&nbsp;ngày 30/7 rằng đến ngày 1/9, Mỹ sẽ phải cắt giảm 755 nhân viên ngoại giao tại Nga.&nbsp;</span><span style=\"margin:0px; padding:0px\">\"Hơn 1.000 nhân viên, gồm nhà ngoại giao và nhân viên hỗ trợ, đang làm việc tại Nga. 755 người sẽ phải ngừng hoạt động\", Putin tuyên bố.</span></p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Một quan chức giấu tên tại Đại sứ quán Mỹ ở Nga nói rằng cơ quan này đã tuyển dụng khoảng 1.100 nhà ngoại giao và nhân viên hỗ trợ, bao gồm cả công dân Nga và Mỹ.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Moscow ngày 28/7 nói rằng đến ngày 1/9, Mỹ phải giảm số nhân viên ngoại giao ở Nga xuống còn 455 người, bằng số lượng nhà ngoại giao Nga ở Mỹ sau khi Washington trục xuất 35 người Nga vào tháng 12 năm ngoái.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\"><span style=\"margin:0px; padding:0px\">Bộ Ngoại giao Mỹ từ chối bình luận về số lượng chính xác nhân viên sứ quán và lãnh sự tại Nga.&nbsp;</span><span style=\"margin:0px; padding:0px\">Tuy nhiên, một quan chức Bộ Ngoại giao Mỹ gọi động thái của Nga là \"hành động đáng tiếc và không cần thiết\".</span></p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\"><span style=\"margin:0px; padding:0px\">\"Chúng tôi đang đánh giá tác động của hạn chế này và xem xét cách phản ứng\", quan chức Mỹ nói.</span></p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\"><span style=\"margin:0px; padding:0px\">Lưỡng viện Mỹ tuần qua thông qua dự luật trừng phạt mới với Nga. Dự luật dài 184 trang nhắm đến những người bị cho là vi phạm nhân quyền, tham nhũng, tập trung vào các lĩnh vực then chốt của nền kinh tế Nga như mua bán vũ khí và xuất khẩu năng lượng.</span></p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Dự luật còn hạn chế khả năng kiểm soát của Tổng thống Trump với trừng phạt Nga. Theo đó, ông Trump cần phải có sự chấp thuận từ quốc hội nếu muốn nới lỏng trừng phạt Moscow.&nbsp;<span style=\"margin:0px; padding:0px\">Nhà Trắng ngày 29/7 thông báo Trump sẽ ký dự luật.</span></p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px; text-align: right;\"><strong style=\"margin:0px; padding:0px\">Phương Vũ</strong></p>\r\n', 'S3pAi_2017-07-30T172539Z-1764854560-3725-2389-1501458099.jpg', '0', '2017-07-31 11:17:54', '2017-07-31 11:17:54', null, '5', '1', null, null, null, null, null);
INSERT INTO news VALUES ('11', 'Ám ảnh Chiến tranh Lạnh trở về với New York vì tên lửa Triều Tiên', 'am-anh-chien-tranh-lanh-tro-ve-voi-new-york-vi-ten-lua-trieu-tien', '<p>Những người dân New York lớn tuổi phấp phỏng vì mối đe dọa rình rập từ tên lửa Triều Tiên.</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"font-family:arial; font-size:14px; margin:0px auto 10px; max-width:100%; padding:0px; width:500px\">\r\n	<tbody style=\"margin: 0px; padding: 0px;\">\r\n		<tr style=\"margin: 0px; padding: 0px;\">\r\n			<td style=\"margin: 0px; padding: 0px; line-height: 0;\"><img alt=\"am-anh-chien-tranh-lanh-tro-ve-voi-new-york-vi-ten-lua-trieu-tien\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"https://i-vnexpress.vnecdn.net/2017/07/31/170730-north-korea-missile-112-1703-1586-1501475325.jpg\" style=\"border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px\" /></td>\r\n		</tr>\r\n		<tr style=\"margin: 0px; padding: 0px;\">\r\n			<td style=\"margin: 0px; padding: 0px; line-height: 0;\">\r\n			<p class=\"Image\" style=\"margin: 0px; padding: 10px; line-height: normal; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; background: rgb(245, 245, 245);\">Tên lửa Triều Tiên được phóng đi trong cuộc thử nghiệm tối 28/7. Ảnh:&nbsp;<em style=\"margin:0px; padding:0px\">AFP</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Triều Tiên tối 28/7 phóng tên lửa đạn đạo xuyên lục địa (ICBM) lần thứ hai. Tên lửa bay khoảng 45 phút và rơi xuống khu vực cách một đảo nhỏ ngoài khơi Nhật Bản 150 km. Chuyên gia tính toán nó có thể \"bắn tới thành phố New York\" nếu phóng với góc chuẩn.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Mối đe dọa rình rập mang tên Triều Tiên đang khiến nỗi ám ảnh Chiến tranh Lạnh trở về với không ít người dân New York, đặc biệt là những người ở thế hệ trước, theo&nbsp;<em style=\"margin:0px; padding:0px\">AFP</em>.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Steven Kovalenko, thợ cơ khí 71 tuổi, cho biết kho vũ khí hạt nhân cũng như sự phát triển của chương trình tên lửa Triều Tiên khiến ông vô cùng lo âu. \"Chúng ngày càng mở rộng. Chẳng ai đề cập gì đến nó và nay họ nắm chúng trong tay\", ông Kovalenko nói. \"Mọi người đều lo lắng, rất lo lắng, nhưng không ai hành động\".</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Kovalenko cũng thêm rằng ông không chỉ lo âu về lãnh đạo Triều Tiên Kim Jong-un mà còn e ngại trước chính Tổng thống Mỹ Donald Trump. Theo Kovalenko, sự khó đoán và tính khí hung hăng của ông chủ Nhà Trắng không thể giúp giải quyết cuộc khủng hoảng trên bán đảo Triều Tiên.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">David Arthur, 62 tuổi, cho hay những sự việc xảy ra thời gian qua đã mang ông quay trở về với thời điểm cách đây hàng thập kỷ. Lúc bấy giờ, ông chỉ là một cậu bé 10 tuổi nhưng đã phải làm quen với những cuộc tập dượt tránh bom.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">\"Cứ mỗi lần có tiếng còi báo động hú lên là tôi lại lo lắng\", ông Arthur nói. \"Chúng ta đã trở thành mục tiêu\".</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"font-family:arial; font-size:14px; margin:0px auto 10px; max-width:100%; padding:0px; width:500px\">\r\n	<tbody style=\"margin: 0px; padding: 0px;\">\r\n		<tr style=\"margin: 0px; padding: 0px;\">\r\n			<td style=\"margin: 0px; padding: 0px; line-height: 0;\"><a href=\"http://vnexpress.net/infographics/quan-su/uy-luc-ten-lua-dan-dao-co-the-ban-toi-new-york-cua-trieu-tien-3620645.html?sig=36f5ce8a8d3a25097382357238471f93\" style=\"margin: 0px; padding: 0px; color: rgb(0, 79, 139); text-decoration-line: none;\"><img alt=\"am-anh-chien-tranh-lanh-tro-ve-voi-new-york-vi-ten-lua-trieu-tien-1\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"https://i-vnexpress.vnecdn.net/2017/07/31/Hwasong14-1501469487-9561-1501475325.jpg\" style=\"border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px\" /></a></td>\r\n		</tr>\r\n		<tr style=\"margin: 0px; padding: 0px;\">\r\n			<td style=\"margin: 0px; padding: 0px; line-height: 0;\">\r\n			<p class=\"Image\" style=\"margin: 0px; padding: 10px; line-height: normal; text-rendering: geometricPrecision; font-stretch: normal; font-size: 12px; background: rgb(245, 245, 245);\">Uy lực tên lửa đạn đạo có thể bắn tới New York của Triều Tiên. (Ấn vào ảnh để xem kích cỡ to hơn). Đồ họa:&nbsp;<em style=\"margin:0px; padding:0px\">Việt Chung</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Cựu thống đốc New York Nelson Rockefeller từng rất quan tâm tới việc tạo dựng cho người dân những nơi trú ẩn an toàn. Trong nhiệm kỳ của mình, ông đã ra lệnh xây hàng nghìn hầm trú ẩn kiên cố. Năm 1963, khoảng 17.448 tòa nhà được quân đội xác định làm nơi trú ẩn hạt nhân.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Người ta dễ nhận biết chúng bởi những dấu hiệu đặc trưng với biểu tượng chất phóng xạ màu đen in trên nền vàng. Hiện vẫn còn hàng chục cơ sở như vậy nhưng rất nhiều người dân ngày nay không hiểu về tầm quan trọng của chúng.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Arthur kể tầng hầm tòa nhà nơi ông ở từng là một hầm trú ẩn nhưng nay bị biến thành phòng giặt đồ. Nó hiện được lắp cửa sổ nhìn ra phố nên không thể đảm bảo an toàn như trước.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">\"Chương trình xây hầm trú ẩn đã đóng băng vài thập kỷ nên chúng không còn đáng tin nữa\", ông Jeffrey Schlegelmilch, phó giám đốc Trung tâm Quốc gia về Ứng phó Thảm họa thuộc Viện Trái Đất, Đại học Columbia, nhận xét.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Những năm gần đây, New York cũng tập trung vào nhiệm vụ xây dựng năng lực ứng phó thảm họa, song những bài tập mô phỏng này chưa chuẩn bị cho người dân khả năng phản ứng trước ICBM, chuyên gia đánh giá.</p>\r\n\r\n<div style=\"margin: 0px; padding: 0px; font-family: arial; font-size: 14px; text-align: center;\">\r\n<div class=\"box_embed_video_parent\" style=\"margin: 0px; padding: 0px;\">\r\n<div class=\"box_embed_video\" style=\"margin: 0px 0px 1em; padding: 0px 0px 281.25px; height: 0px; width: 500px; position: relative; background: rgb(245, 245, 245);\">\r\n<div class=\"bg_overlay_small_unpin\" style=\"margin: 0px; padding: 0px; background: rgb(0, 0, 0); width: 500px; height: 281px; position: absolute; top: 0px; left: 0px; opacity: 0; transition: top 0.5s, left 0.5s, width 0.5s ease, height 0.5s ease, opacity 1s ease-in; z-index: 9999;\">&nbsp;</div>\r\n\r\n<div class=\"bg_overlay_small\" style=\"margin: 0px; padding: 0px; background: 0px 0px; width: 500px; height: 281px; position: fixed; top: -50px; z-index: -1; transition: left 0.5s, width 0.5s ease, height 0.5s ease, top 0.5s ease; left: 174.5px;\">&nbsp;</div>\r\n\r\n<div class=\"embed-container\" style=\"margin: 0px 0px 1em; padding: 0px 0px 281.25px; position: relative; height: 0px; overflow: hidden; width: 500px; transition-duration: 0.7s; transition-property: left; transition-timing-function: cubic-bezier(0.7, 1, 0.7, 1); z-index: 9999; opacity: 1;\"><iframe allowfullscreen=\"\" class=\"parser_player_vnexpress\" data-status=\"stop\" data-view=\"inview\" frameborder=\"0\" height=\"270\" id=\"player_159464_0\" src=\"http://video.vnexpress.net/parser.html?id=159464&amp;t=2&amp;ft=video&amp;si=1000000&amp;ap=0&amp;ishome=0&amp;player_id=159464_0&amp;articleId=3620549\" style=\"margin: 0px; padding: 0px; position: absolute; top: 0px; left: 0px; width: 500px; height: 281.25px;\" width=\"480\"></iframe>\r\n\r\n<div class=\"parser_title\" style=\"margin: 0px; padding: 7px 10px; opacity: 0; visibility: hidden; width: 500px; position: absolute; top: 168.75px; left: 0px; background: rgb(255, 255, 255); height: 30px; box-sizing: border-box; font-stretch: normal; line-height: normal; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; transition-duration: 0.2s; transition-property: all; transition-timing-function: cubic-bezier(0.2, 1, 0.2, 1);\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p class=\"Image\" style=\"margin: 0px; padding: 5px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px; text-align: center;\">&nbsp;Triều Tiên công bố video thử ICBM lần hai.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Theo ông Schlegelmilch, không thành phố hay khu vực nào ở Mỹ hiện tại được chuẩn bị đầy đủ để ứng phó với một cuộc tấn công hạt nhân. Schlegelmilch cho rằng nhiệm vụ quan trọng nhất lúc này là nâng cao nhận thức cho người dân về mối hiểm họa.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Tại khu phố Hàn Quốc thuộc trung tâm Manhattan, New York, 2 người phụ nữ Hàn Quốc trẻ tuổi đang làm việc tại Mỹ chia sẻ họ lo lắng cho gia đình mình ở quê nhà hơn.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px;\">Theo họ, nếu xung đột leo thang thành một cuộc chiến tranh toàn diện, Hàn Quốc mới là bên chịu thiệt hại nặng nề hơn cả, không phải Mỹ. \"Chúng tôi không muốn chiến tranh tái diễn nữa\", một người nói.</p>\r\n\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; font-family: arial; font-size: 14px; text-align: right;\"><strong style=\"margin:0px; padding:0px\">Vũ Hoàng</strong></p>\r\n', 'uLBn6_170730-north-korea-missile-112-1703-1586-1501475325.jpg', '0', '2017-07-31 11:20:48', '2017-07-31 12:49:12', null, '0', '3', null, null, null, null, null);
INSERT INTO news VALUES ('12', 'Thạc sĩ kinh doanh thuyết phục nông dân làm ăn hợp tác xã', 'thac-si-kinh-doanh-thuyet-phuc-nong-dan-lam-an-hop-tac-xa', '<h3>11 hợp tác xã kiểu mới ở Khánh Hòa đều được Thạc sĩ Phạm Mạnh Cường nâng đỡ, xuống tận ruộng thuyết phục bà con thành lập.</h3>\r\n', '<p>Luật Hợp tác xã 2012 đã mở đường cho nhiều hợp tác xã kiểu mới ra đời tại các địa phương trên cả nước. Mô hình này thúc đẩy hoạt động kinh doanh hiệu quả hơn, bởi các xã viên có toàn quyền&nbsp;trong hoạt động sản xuất và&nbsp;tài sản của mình. Ngoài ra, còn được&nbsp;hưởng nhiều lợi ích,&nbsp;hỗ trợ đầu vào và đầu ra sản phẩm.</p>\r\n\r\n<p>Thời điểm luật ban hành, nông dân Khánh Hòa vẫn còn canh tác manh mún. Thạc sĩ Phạm Mạnh Cường - Phó phòng kinh tế và hợp tác trang trại (Sở Nông nghiệp Phát triển Nông thôn Khánh Hòa) có cơ hội tiếp cận với bà con trên địa bàn tỉnh. Sau khi nắm bắt được thuận lợi và khó khăn trong hoạt động sản xuất nông nghiệp, ông có cơ sở để tham mưu chính sách sát với thực tế.</p>\r\n\r\n<p>Xuất thân từ nhà nông, thạc sĩ sinh năm 1969 hiểu rõ nỗi vất vả của bà con khi giá bán nông sản không ổn định. Thương lái thường tìm cơ hội ép giá để đạt lợi nhuận cao nhất, trong khi người dân chỉ mong bán được sản phẩm và đảm bảo giá trị ngày công (khoảng 120.000 đồng).</p>\r\n\r\n<p>Ông cho rằng, nông dân muốn quyết định được giá bán, giá thành sản xuất, hiệu quả sinh lời của đồng vốn đầu tư sau mỗi chu kỳ kinh doanh... thì phải tiến tới làm ăn có tổ chức. Xuất phát từ thực tế đó, ông xuống tận ruộng tư vấn, thuyết phục cho bà con thành lập hợp tác xã kiểu mới.</p>\r\n\r\n<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"font-family:arial; font-size:14px; margin:0px auto 10px; max-width:100%; padding:0px; width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"polyad\" src=\"https://i-vnexpress.vnecdn.net/2017/07/29/NewsOutSide-28-7-201729-528449-1818-9565-1501309286.jpeg\" style=\"border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ông Phạm Mạnh Cường tại vườn rau thơm của hợp tác xã rau Đắc Lộc. Ảnh:&nbsp;<em>NVCC</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ông Cường cho biết, việc thành lập hợp tác xã kiểu mới không khó, cần vốn điều lệ 100 triệu đồng và ít nhất 8 thành viên. Tuy nhiên, để thành công thì các xã viên phải xác định được lợi thế và hạn chế về con người, đất đai, quan hệ sở hữu, quản lý, phân phối, vốn, thị trường, kết cấu hạ tầng, công cụ, sản phẩm, dịch vụ, nghĩa vụ, quyền lợi, tư cách của thành viên... Đồng thời,&nbsp;đánh giá được cơ hội và thách thức để xây dựng được phương án kinh doanh hiệu quả, sát với thực tế, tránh bị động.</p>\r\n\r\n<p>Đơn vị đầu tiên ông Cường đến gặp là tổ hợp tác trồng rau tại thôn Đắc Lộc, xã Vĩnh Phương, TP Nha Trang. Địa bàn có nghề canh tác hoa màu lâu đời trên nền đất phù sa bồi đắp hàng năm, nông sản chủ lực là các loại rau thơm như ngò gai, ngò rí, mùi, tía tô... với&nbsp;giá bán thấp, trung bình 10.000 đồng mỗi kg. Năm 2015, thôn Đắc Lộc thành lập tổ hợp tác để tập trung sản xuất nhưng hiệu quả không cải thiện nhiều.</p>\r\n\r\n<p>Ông Cường xuống tận nơi, trò chuyện và chỉ cho bà con thấy được lợi ích tham gia hợp tác xã kiểu mới theo Luật Hợp tác xã 2012. Cụ thể, bà con sẽ được hỗ trợ giống, hướng dẫn kỹ thuật canh tác theo tiêu chuẩn VietGap, tìm đầu ra ổn định cho sản phẩm qua các kênh siêu thị, trường học. Nếu thành công,&nbsp;giá bán ổn định và không phụ thuộc vào&nbsp;thương lái.</p>\r\n\r\n<p>Thạc sĩ Cường chia sẻ, có những lúc ông muốn bỏ giữa chừng. Bà con chưa quen với mô hình mới, thiếu kiến thức về kinh tế thị trường, nên họ trông chờ nhiều vào hỗ trợ của nhà nước, thay vì hiểu rằng mỗi thành viên phải biết chia sẻ lợi ích. Thương lái đứng bên ngoài níu kéo, phá giá, thậm chí tung tin nếu vào hợp tác xa mất hết tài sản khiến người nông dân lung lay.</p>\r\n\r\n<p>“Tôi nghĩ đã làm thì quyết không bỏ cuộc”, ông Cường nói. Vậy nên cuối tuần, ông kiên trì xuống tận đồng ruộng, phân tích cho nông dân thấy được lợi ích lâu dài của việc liên kết sản xuất.&nbsp;</p>\r\n\r\n<div style=\"margin: 0px; padding: 0px; font-family: arial; font-size: 14px; text-align: center;\">\r\n<div style=\"margin: 0px; padding: 0px;\">\r\n<div class=\"box_embed_video_parent\" style=\"margin: 0px; padding: 0px;\">\r\n<div class=\"box_embed_video\" style=\"margin: 0px 0px 1em; padding: 0px 0px 281.25px; height: 0px; width: 500px; position: relative; background: rgb(245, 245, 245);\">\r\n<div class=\"bg_overlay_small_unpin\" style=\"margin: 0px; padding: 0px; background: rgb(0, 0, 0); width: 500px; height: 281px; position: absolute; top: 0px; left: 0px; opacity: 0; transition: top 0.5s, left 0.5s, width 0.5s ease, height 0.5s ease, opacity 1s ease-in; z-index: 9999;\">&nbsp;</div>\r\n\r\n<div class=\"bg_overlay_small\" style=\"margin: 0px; padding: 0px; background: 0px 0px; width: 500px; height: 281px; position: fixed; top: -50px; z-index: -1; transition: left 0.5s, width 0.5s ease, height 0.5s ease, top 0.5s ease; left: 174.5px;\">&nbsp;</div>\r\n\r\n<div class=\"embed-container\" style=\"margin: 0px 0px 1em; padding: 0px 0px 281.25px; position: relative; height: 0px; overflow: hidden; width: 500px; transition-duration: 0.7s; transition-property: left; transition-timing-function: cubic-bezier(0.7, 1, 0.7, 1); z-index: 9999; opacity: 1;\"><iframe class=\"parser_player_vnexpress\" frameborder=\"0\" height=\"270\" id=\"player_159462_0\" src=\"http://video.vnexpress.net/parser.html?id=159462&amp;t=2&amp;ft=video&amp;si=1000000&amp;ap=0&amp;ishome=0&amp;player_id=159462_0&amp;articleId=3620069\" style=\"margin: 0px; padding: 0px; position: absolute; top: 0px; left: 0px; width: 500px; height: 281.25px;\" width=\"480\"></iframe>\r\n\r\n<div class=\"parser_title\" style=\"margin: 0px; padding: 7px 10px; opacity: 0; visibility: hidden; width: 500px; position: absolute; top: 168.75px; left: 0px; background: rgb(255, 255, 255); height: 30px; box-sizing: border-box; font-stretch: normal; line-height: normal; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; transition-duration: 0.2s; transition-property: all; transition-timing-function: cubic-bezier(0.2, 1, 0.2, 1);\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>Đến tháng 9/2016, 8 hộ nông dân đã đồng ý thành lập hợp tác xã Rau VietGap Đắc Lộc đầu tiên tại tỉnh Khánh Hòa.&nbsp;Các tiêu chuẩn VietGap được đưa vào áp dụng, sản lượng đạt 25 tấn mỗi tháng, tăng giá bán lên 17.000-34.000 đồng mỗi kg giúp xã viên dần ổn định kinh tế.</p>\r\n\r\n<p>Cho tới nay, ông đã tư vấn thành lập thêm 10 hợp tác xã kiểu mới sản xuất rau an toàn, mía đường, chăn nuôi gia cầm, dịch vụ tổng hợp, củ quả và cây ăn quả. Trong đó, 8 hợp tác xã được cấp chứng nhận đăng ký kinh doanh và 3 nơi đang chờ thủ tục cấp.&nbsp;</p>\r\n\r\n<p style=\"text-align:right\"><strong>Thanh Thủy</strong></p>\r\n', 'n0Yp2_NewsOutSide-28-7-201729-528449-1818-9565-1501309286.jpeg', '0', '2017-07-31 11:22:17', '2017-07-31 11:22:17', null, '0', '5', null, null, null, null, null);
INSERT INTO news VALUES ('13', 'dsgfbsfgnsgfsn', 'dsgfbsfgnsgfsn', '<p>sfdgnsfgnsfnh</p>\r\n', '<p>sdgnsfdgnadfbsrtn</p>\r\n', '', '0', '2017-07-31 12:54:49', '2017-07-31 12:54:58', '2017-07-31 12:54:58', '0', '2', null, null, null, null, null);
INSERT INTO news VALUES ('14', 'Mỹ tuyên bố không phải kẻ thù, muốn đối thoại với Triều Tiên', 'my-tuyen-bo-khong-phai-ke-thu-muon-doi-thoai-voi-trieu-tien', '<h3 class=\"short_intro txt_666\" style=\"margin: 0px; padding: 0px 0px 10px; color: rgb(68, 68, 68); text-rendering: geometricPrecision; font-stretch: normal; font-size: 14px; line-height: 18px; font-family: arial; width: 500px;\">\r\n	Ngoại trưởng Tillerson cho biết Mỹ không tìm cách thay đổi chế độ ở Triều Tiên, muốn giải quyết khủng hoảng bằng đàm phán.</h3>\r\n', '<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; color: rgb(51, 51, 51); font-family: arial; font-size: 14px;\">\r\n	&nbsp;</p>\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; color: rgb(51, 51, 51); font-family: arial; font-size: 14px; text-align: center;\">\r\n	<img alt=\"\" src=\"/upload/images/pm.jpg\" style=\"width: 480px; height: 640px;\" /></p>\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; color: rgb(51, 51, 51); font-family: arial; font-size: 14px;\">\r\n	&quot;Chúng tôi không muốn thay đổi hay phá hoại chế độ Triều Tiên, chúng tôi cũng không muốn đẩy nhanh quá trình thống nhất bán đảo Triều Tiên hay tìm lý do đưa quân vượt qua vĩ tuyến 38. Chúng tôi không phải kẻ thù của Triều Tiên, nhưng các bạn đang tạo ra hiểm họa không thể chấp nhận và chúng tôi phải đáp trả&quot;,&nbsp;<em style=\"margin: 0px; padding: 0px;\">Reuters&nbsp;</em><span style=\"margin: 0px; padding: 0px;\">dẫn tuyên bố của&nbsp;</span><span style=\"margin: 0px; padding: 0px;\">Ngoại trưởng Mỹ Rex Tillerson hôm 1/8</span><span style=\"margin: 0px; padding: 0px;\">.&nbsp;</span></p>\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; color: rgb(51, 51, 51); font-family: arial; font-size: 14px;\">\r\n	&nbsp;</p>\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; color: rgb(51, 51, 51); font-family: arial; font-size: 14px;\">\r\n	<span style=\"margin: 0px; padding: 0px;\"><img alt=\"\" src=\"/upload/images/2017-07-30T172539Z-1764854560-3725-2389-1501458099.jpg\" style=\"width: 500px; height: 300px;\" /></span></p>\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; color: rgb(51, 51, 51); font-family: arial; font-size: 14px;\">\r\n	<span style=\"margin: 0px; padding: 0px;\">Ngoại trưởng&nbsp;</span>Tillerson khẳng định Washington muốn đối thoại với Bình Nhưỡng, nhưng nước này phải từ bỏ tham vọng hạt nhân.&nbsp;<span style=\"margin: 0px; padding: 0px;\">Ông cho biết Mỹ muốn dùng biện pháp hòa bình để thuyết phục Triều Tiên chấm dứt chương trình tên lửa và hạt nhân.&nbsp;</span></p>\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; color: rgb(51, 51, 51); font-family: arial; font-size: 14px;\">\r\n	Triều Tiên trong tháng 7 thử liên tiếp hai tên lửa đạn đạo xuyên lục địa (ICBM), thể hiện quyết tâm sở hữu ICBM mang đầu đạn hạt nhân có tầm bắn tới Mỹ. Washington nhận định vụ thử hôm 28/7 chứng tỏ tên lửa Hwasong-14 của Bình Nhưỡng có thể bao trùm gần như toàn bộ khu vực Bắc Mỹ.</p>\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; color: rgb(51, 51, 51); font-family: arial; font-size: 14px;\">\r\n	Ông Tillerson cũng kêu gọi Trung Quốc sử dụng ảnh hưởng của mình để tạo điều kiện cho các cuộc đối thoại Mỹ - Triều, cho rằng các lựa chọn khác &quot;không thật sự hấp dẫn&quot;. Chính quyền Tổng thống Mỹ Donald Trump từng khẳng định mọi giải pháp đối phó Triều Tiên đều được xem xét, bao gồm cả can thiệp quân sự.</p>\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; color: rgb(51, 51, 51); font-family: arial; font-size: 14px;\">\r\n	<span style=\"margin: 0px; padding: 0px;\">Thượng nghị sĩ Mỹ Lindsey Graham trước đó cho biết Tổng thống Trump sẵn sàng tấn công Triều Tiên nếu nước này tiếp tục tìm cách đe dọa Mỹ bằng ICBM.</span></p>\r\n<p class=\"Normal\" style=\"margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision; color: rgb(51, 51, 51); font-family: arial; font-size: 14px; text-align: right;\">\r\n	<span style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Tử Quỳnh</strong></span></p>\r\n', 'G5Vda_Tillerson-JPG-3289-1501639544.jpg', '0', '2017-08-02 12:06:32', '2017-08-02 14:47:12', null, '0', '3', null, null, null, null, null);
INSERT INTO news VALUES ('15', 'Hãng tin Anh ước tính tổn thất của Nga ở Syria gia tăng', 'hang-tin-anh-uoc-tinh-ton-that-cua-nga-o-syria-gia-tang', '<h3><strong>Nga cho biết c&oacute; 10 qu&acirc;n nh&acirc;n thiệt mạng ở Syria trong năm nay nhưng theo h&atilde;ng tin Anh Reuters, con số n&agrave;y tr&ecirc;n thực tế &iacute;t nhất l&agrave; 40.</strong></h3>\r\n', '<p><img alt=\"\" src=\"/upload/images/hhh.jpg\" style=\"height:720px; width:593px\" /></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"color:#333333; font-family:arial; font-size:14px; margin:0px auto 10px; max-width:100%; padding:0px; width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Quân nhân Nga dò mìn ở thành phố Palmyra, Syria. Ảnh: RT.\" src=\"https://i-vnexpress.vnecdn.net/2017/08/02/5718ef70c36188ef2c8b45be-7933-1501658552.jpg\" style=\"border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Qu&acirc;n nh&acirc;n Nga d&ograve; m&igrave;n ở th&agrave;nh phố Palmyra, Syria, th&aacute;ng 4/2016. Ảnh:&nbsp;<em>RT.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Bộ Quốc ph&ograve;ng Nga cho biết c&oacute; 10 qu&acirc;n nh&acirc;n Nga thiệt mạng ở Syria trong năm nay. Tuy nhi&ecirc;n, h&atilde;ng tin Anh<em>&nbsp;Reuters</em>, dựa tr&ecirc;n th&ocirc;ng tin từ th&acirc;n nh&acirc;n, bạn b&egrave; binh sĩ thiệt mạng v&agrave; quan chức địa phương, ước t&iacute;nh con số n&agrave;y &iacute;t nhất l&agrave; 40 người, trong đ&oacute; c&oacute; 17 qu&acirc;n nh&acirc;n.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Tổn thất của Nga trong 7 th&aacute;ng đầu năm 2017 cao hơn so với trong 15 th&aacute;ng trước đ&oacute;, từ khi Nga bắt đầu chiến dịch kh&ocirc;ng k&iacute;ch ở Syria th&aacute;ng 9/2015. Reuters ước t&iacute;nh tổn thất trong 15 th&aacute;ng n&agrave;y l&agrave; 36 qu&acirc;n nh&acirc;n v&agrave; nh&agrave; thầu tư nh&acirc;n Nga.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Hầu hết những trường hợp thiệt mạng m&agrave; Reuters đưa tin đều được x&aacute;c nhận bởi hơn một người. H&atilde;ng tin kết luận 9 trường hợp dựa v&agrave;o th&ocirc;ng tin tr&ecirc;n truyền th&ocirc;ng địa phương hoặc mạng x&atilde; hội c&ugrave;ng một nguồn kh&aacute;c.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Bộ Quốc ph&ograve;ng Nga v&agrave; Điện Kremlin kh&ocirc;ng b&igrave;nh luận về th&ocirc;ng tin của Reuters. Nga kh&ocirc;ng c&ocirc;ng bố tổng thương vong trong chiến dịch qu&acirc;n sự ở Syria v&agrave; chỉ th&ocirc;ng b&aacute;o một số trường hợp.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:right\"><strong>Như T&acirc;m</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"color:#333333; font-family:arial; font-size:14px; margin:0px auto 10px; max-width:100%; padding:0px; width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Quân nhân Nga dò mìn ở thành phố Palmyra, Syria. Ảnh: RT.\" src=\"https://i-vnexpress.vnecdn.net/2017/08/02/5718ef70c36188ef2c8b45be-7933-1501658552.jpg\" style=\"border:0px; font-size:0px; line-height:0; margin:0px; max-width:100%; padding:0px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Qu&acirc;n nh&acirc;n Nga d&ograve; m&igrave;n ở th&agrave;nh phố Palmyra, Syria, th&aacute;ng 4/2016. Ảnh:&nbsp;<em>RT.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Bộ Quốc ph&ograve;ng Nga cho biết c&oacute; 10 qu&acirc;n nh&acirc;n Nga thiệt mạng ở Syria trong năm nay. Tuy nhi&ecirc;n, h&atilde;ng tin Anh<em>&nbsp;Reuters</em>, dựa tr&ecirc;n th&ocirc;ng tin từ th&acirc;n nh&acirc;n, bạn b&egrave; binh sĩ thiệt mạng v&agrave; quan chức địa phương, ước t&iacute;nh con số n&agrave;y &iacute;t nhất l&agrave; 40 người, trong đ&oacute; c&oacute; 17 qu&acirc;n nh&acirc;n.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Tổn thất của Nga trong 7 th&aacute;ng đầu năm 2017 cao hơn so với trong 15 th&aacute;ng trước đ&oacute;, từ khi Nga bắt đầu chiến dịch kh&ocirc;ng k&iacute;ch ở Syria th&aacute;ng 9/2015. Reuters ước t&iacute;nh tổn thất trong 15 th&aacute;ng n&agrave;y l&agrave; 36 qu&acirc;n nh&acirc;n v&agrave; nh&agrave; thầu tư nh&acirc;n Nga.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Hầu hết những trường hợp thiệt mạng m&agrave; Reuters đưa tin đều được x&aacute;c nhận bởi hơn một người. H&atilde;ng tin kết luận 9 trường hợp dựa v&agrave;o th&ocirc;ng tin tr&ecirc;n truyền th&ocirc;ng địa phương hoặc mạng x&atilde; hội c&ugrave;ng một nguồn kh&aacute;c.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">Bộ Quốc ph&ograve;ng Nga v&agrave; Điện Kremlin kh&ocirc;ng b&igrave;nh luận về th&ocirc;ng tin của Reuters. Nga kh&ocirc;ng c&ocirc;ng bố tổng thương vong trong chiến dịch qu&acirc;n sự ở Syria v&agrave; chỉ th&ocirc;ng b&aacute;o một số trường hợp.</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:right\"><strong>Như T&acirc;m</strong></p>\r\n', '1Gpuo_2017-07-30T172539Z-1764854560-3725-2389-1501458099.jpg', '0', '2017-08-02 17:01:25', '2017-08-02 17:56:01', null, '0', '3', null, null, null, null, null);

-- ----------------------------
-- Table structure for `news_copy`
-- ----------------------------
DROP TABLE IF EXISTS `news_copy`;
CREATE TABLE `news_copy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiBat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `SoLuongXem` int(11) NOT NULL,
  `idLoaiTin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news_copy
-- ----------------------------
INSERT INTO news_copy VALUES ('1', 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', '', '', 'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ', 'sample1.jpg', '0', '2017-03-11 06:20:23', '0000-00-00 00:00:00', null, '0', '0');
INSERT INTO news_copy VALUES ('2', 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', '', '', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', 'sample2.jpg', '0', '2016-10-20 02:07:14', '0000-00-00 00:00:00', null, '0', '0');
INSERT INTO news_copy VALUES ('3', 'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', '', '', 'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ', 'sample3.jpg', '0', '2016-10-20 02:07:14', '0000-00-00 00:00:00', null, '0', '0');
INSERT INTO news_copy VALUES ('4', 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', '', '', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', 'sample4.jpg', '0', '2016-10-20 02:07:14', '0000-00-00 00:00:00', null, '0', '0');
INSERT INTO news_copy VALUES ('5', 'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình', '', '', 'Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu h ', 'sample5.jpg', '0', '2016-10-20 02:07:14', '0000-00-00 00:00:00', null, '0', '0');
INSERT INTO news_copy VALUES ('6', 'dsrbsetrbsrynr', 'dsrbsetrbsrynr', '<p>srynsry</p>\r\n', '<p>srytnsry</p>\r\n', 'DNGDw_hhh.jpg', '0', '2017-07-28 15:56:07', '2017-07-28 16:32:35', '2017-07-28 16:32:35', '0', '0');
INSERT INTO news_copy VALUES ('7', 'Tiêm kích Su-35S Nga khoe tên lửa trước triển lãm hàng không', 'tiem-kich-su-35s-nga-khoe-ten-lua-truoc-trien-lam-hang-khong', '<p>ảebsetsretnsr</p>\r\n', '<p>srnsr</p>\r\n', 'ZhwYd_pm.jpg', '0', '2017-07-28 15:57:02', '2017-07-28 16:32:31', '2017-07-28 16:32:31', '0', '0');
INSERT INTO news_copy VALUES ('8', 'Hàng mới về 2345', 'gdndryn', '<p>Hàng mới về</p>\r\n', '<p>Hàng mới về</p>\r\n', 'XJ5VT_hhh.jpg', '0', '2017-07-28 16:15:02', '2017-07-28 16:32:26', '2017-07-28 16:32:26', '0', '0');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_type_products` int(10) unsigned NOT NULL,
  `id_provider` int(10) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `in_price` double(10,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `quantity_sold` int(11) DEFAULT NULL,
  `unit_price` double(10,2) NOT NULL,
  `promotion_price` double(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `comments` text COLLATE utf8_unicode_ci,
  `like_button` text COLLATE utf8_unicode_ci,
  `share_button` text COLLATE utf8_unicode_ci,
  `send_button` text COLLATE utf8_unicode_ci,
  `follow_button` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `products_id_type_products_foreign` (`id_type_products`),
  CONSTRAINT `products_id_type_products_foreign` FOREIGN KEY (`id_type_products`) REFERENCES `type_products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO products VALUES ('1', 'Bánh Crepe Sầu riêng', '5', '0', 'Bánh crepe sầu riêng nhà làm', '100000.00', '10', '3', '150000.00', '120000.00', '1430967449-pancake-sau-rieng-6.jpg', '1', '1', '2016-10-26 03:00:16', '2017-09-05 11:19:21', null, null, null, null, null, null);
INSERT INTO products VALUES ('2', 'Bánh Crepe Chocolate', '6', '0', '', '100000.00', '10', '5', '180000.00', '160000.00', 'crepe-chocolate.jpg', '1', '1', '2016-10-26 03:00:16', '2018-03-09 17:12:17', null, null, null, null, null, null);
INSERT INTO products VALUES ('3', 'Bánh Crepe Sầu riêng - Chuối', '5', '0', '', '100000.00', '10', '7', '150000.00', '120000.00', 'crepe-chuoi.jpg', '1', '0', '2016-10-26 03:00:16', '2018-05-30 19:28:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('4', 'Bánh Crepe Đào', '5', '0', '', '100000.00', '10', '1', '160000.00', '0.00', 'crepe-dao.jpg', '1', '1', '2016-10-26 03:00:16', '2017-09-05 11:19:21', null, null, null, null, null, null);
INSERT INTO products VALUES ('5', 'Bánh Crepe Dâu', '5', '0', '', '100000.00', '10', '2', '160000.00', '0.00', 'crepedau.jpg', '1', '1', '2016-10-26 03:00:16', '2017-09-05 11:19:21', null, null, null, null, null, null);
INSERT INTO products VALUES ('6', 'Bánh Crepe Pháp', '5', '0', '', '100000.00', '10', '0', '200000.00', '180000.00', 'crepe-phap.jpg', '1', '0', '2016-10-26 03:00:16', '2016-10-24 22:11:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('7', 'Bánh Crepe Táo', '5', '0', '', '100000.00', '10', '0', '160000.00', '0.00', 'crepe-tao.jpg', '1', '1', '2016-10-26 03:00:16', '2016-10-24 22:11:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('8', 'Bánh Crepe Trà xanh', '5', '0', '', '100000.00', '10', '0', '160000.00', '150000.00', 'crepe-traxanh.jpg', '1', '0', '2016-10-26 03:00:16', '2017-08-22 08:30:04', null, null, null, null, null, null);
INSERT INTO products VALUES ('9', 'Bánh Crepe Sầu riêng và Dứa', '5', '0', '', '100000.00', '10', '0', '160000.00', '150000.00', 'saurieng-dua.jpg', '1', '0', '2016-10-26 03:00:16', '2017-08-22 08:30:32', null, null, null, null, null, null);
INSERT INTO products VALUES ('11', 'Bánh Gato Trái cây Việt Quất', '3', '0', '', '100000.00', '10', '0', '250000.00', '0.00', '544bc48782741.png', '2', '0', '2016-10-12 02:00:00', '2016-10-27 02:24:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('12', 'Bánh sinh nhật rau câu trái cây', '3', '0', '', '100000.00', '10', '0', '200000.00', '180000.00', '210215-banh-sinh-nhat-rau-cau-body- (6).jpg', '2', '0', '2016-10-12 02:00:00', '2016-10-27 02:24:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('13', 'Bánh kem Chocolate Dâu', '3', '0', '', '100000.00', '10', '4', '300000.00', '280000.00', 'banh kem sinh nhat.jpg', '2', '1', '2016-10-12 02:00:00', '2018-03-09 17:12:17', null, null, null, null, null, null);
INSERT INTO products VALUES ('14', 'Bánh kem Dâu III', '3', '0', '', '100000.00', '10', '0', '300000.00', '280000.00', 'Banh-kem (6).jpg', '2', '0', '2016-10-12 02:00:00', '2016-10-27 02:24:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('15', 'Bánh kem Dâu I', '3', '0', '', '100000.00', '10', '0', '350000.00', '320000.00', 'banhkem-dau.jpg', '2', '1', '2016-10-12 02:00:00', '2016-10-27 02:24:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('16', 'Bánh trái cây II', '3', '0', '', '100000.00', '10', '0', '150000.00', '120000.00', 'banhtraicay.jpg', '1', '0', '2016-10-12 02:00:00', '2016-10-27 02:24:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('17', 'Apple Cake', '3', '0', '', '100000.00', '10', '0', '250000.00', '240000.00', 'Fruit-Cake_7979.jpg', '2', '0', '2016-10-12 02:00:00', '2016-10-27 02:24:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('18', 'Bánh ngọt nhân cream táo', '2', '0', '', '100000.00', '10', '0', '180000.00', '0.00', '20131108144733.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('19', 'Bánh Chocolate Trái cây', '2', '0', '', '100000.00', '10', '0', '150000.00', '0.00', 'Fruit-Cake_7976.jpg', '1', '1', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('20', 'Bánh Chocolate Trái cây II', '2', '0', '', '100000.00', '10', '0', '150000.00', '0.00', 'Fruit-Cake_7981.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('21', 'Peach Cake', '2', '0', '', '100000.00', '10', '0', '160000.00', '150000.00', 'Peach-Cake_3294.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('22', 'Bánh bông lan trứng muối I', '1', '0', '', '100000.00', '10', '0', '160000.00', '150000.00', 'banhbonglantrung.jpg', '1', '1', '2016-10-13 02:20:00', '2017-08-22 08:30:36', null, null, null, null, null, null);
INSERT INTO products VALUES ('23', 'Bánh bông lan trứng muối II', '1', '0', '', '100000.00', '10', '0', '180000.00', '0.00', 'banhbonglantrungmuoi.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('24', 'Bánh French', '1', '0', '', '100000.00', '10', '0', '180000.00', '0.00', 'banh-man-thu-vi-nhat-1.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('25', 'Bánh mì Australia', '1', '0', '', '100000.00', '10', '0', '80000.00', '70000.00', 'dung-khoai-tay-lam-banh-gato-man-cuc-ngon.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('26', 'Bánh mặn thập cẩm', '1', '0', '', '100000.00', '10', '0', '50000.00', '0.00', 'Fruit-Cake.png', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('27', 'Bánh Muffins trứng', '1', '0', '', '100000.00', '10', '0', '100000.00', '80000.00', 'maxresdefault.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('28', 'Bánh Scone Peach Cake', '1', '0', '', '100000.00', '10', '0', '120000.00', '0.00', 'Peach-Cake_3300.jpg', '1', '1', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('29', 'Bánh mì Loaf I', '1', '0', '', '100000.00', '10', '0', '100000.00', '0.00', 'sli12.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('30', 'Bánh kem Chocolate Dâu I', '4', '0', '', '100000.00', '10', '0', '380000.00', '350000.00', 'sli12.jpg', '2', '1', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('31', 'Bánh kem Trái cây I', '4', '0', '', '100000.00', '10', '0', '380000.00', '350000.00', 'Fruit-Cake.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('32', 'Bánh kem Trái cây II', '4', '0', '', '100000.00', '10', '0', '380000.00', '350000.00', 'Fruit-Cake_7971.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('33', 'Bánh kem Doraemon', '4', '0', '', '100000.00', '10', '0', '280000.00', '250000.00', 'p1392962167_banh74.jpg', '2', '1', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('34', 'Bánh kem Caramen Pudding', '4', '0', '', '100000.00', '10', '0', '280000.00', '0.00', 'Caramen-pudding636099031482099583.jpg', '2', '1', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('35', 'Bánh kem Chocolate Fruit', '4', '0', '', '100000.00', '10', '0', '320000.00', '300000.00', 'chocolate-fruit636098975917921990.jpg', '2', '1', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('36', 'Bánh kem Coffee Chocolate GH6', '4', '0', '', '100000.00', '10', '0', '320000.00', '300000.00', 'COFFE-CHOCOLATE636098977566220885.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('37', 'Bánh kem Mango Mouse', '4', '0', '', '100000.00', '10', '0', '320000.00', '300000.00', 'mango-mousse-cake.jpg', '2', '1', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('38', 'Bánh kem Matcha Mouse', '4', '0', '', '100000.00', '10', '0', '350000.00', '330000.00', 'MATCHA-MOUSSE.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('39', 'Bánh kem Flower Fruit', '4', '0', '', '100000.00', '10', '0', '350000.00', '330000.00', 'flower-fruits636102461981788938.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('40', 'Bánh kem Strawberry Delight', '4', '0', '', '100000.00', '10', '0', '350000.00', '330000.00', 'strawberry-delight636102445035635173.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('41', 'Bánh kem Raspberry Delight', '4', '0', '', '100000.00', '10', '0', '350000.00', '330000.00', 'raspberry.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('42', 'Beefy Pizza', '6', '0', 'Thịt bò xay, ngô, sốt BBQ, phô mai mozzarella', '100000.00', '10', '0', '150000.00', '130000.00', '40819_food_pizza.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('43', 'Hawaii Pizza', '6', '0', 'Sốt cà chua, ham , dứa, pho mai mozzarella', '100000.00', '10', '0', '120000.00', '0.00', 'hawaiian paradise_large-900x900.jpg', '2', '1', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('44', 'Smoke Chicken Pizza', '6', '0', 'Gà hun khói,nấm, sốt cà chua, pho mai mozzarella.', '100000.00', '10', '0', '120000.00', '0.00', 'chicken black pepper_large-900x900.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('45', 'Sausage Pizza', '6', '0', 'Xúc xích klobasa, Nấm, Ngô, sốtcà chua, pho mai Mozzarella.', '100000.00', '10', '0', '120000.00', '0.00', 'pizza-miami.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('46', 'Ocean Pizza', '6', '0', 'Tôm , mực, xào cay,ớt xanh, hành tây, cà chua, phomai mozzarella.', '100000.00', '10', '0', '120000.00', '0.00', 'seafood curry_large-900x900.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('47', 'All Meaty Pizza', '6', '0', 'Ham, bacon, chorizo, pho mai mozzarella.', '100000.00', '10', '0', '140000.00', '0.00', 'all1).jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('48', 'Tuna Pizza', '6', '0', 'Cá Ngừ, sốt Mayonnaise,sốt càchua, hành tây, pho mai Mozzarella', '100000.00', '10', '0', '140000.00', '0.00', '54eaf93713081_-_07-germany-tuna.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('49', 'Bánh su kem nhân dừa', '7', '0', '', '100000.00', '10', '0', '120000.00', '100000.00', 'maxresdefault.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('50', 'Bánh su kem sữa tươi', '7', '0', '', '100000.00', '10', '0', '120000.00', '100000.00', 'sukem.jpg', '2', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('51', 'Bánh su kem sữa tươi chiên giòn', '7', '0', '', '100000.00', '10', '0', '150000.00', '0.00', '1434429117-banh-su-kem-chien-20.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('52', 'Bánh su kem dâu sữa tươi', '7', '0', '', '100000.00', '10', '0', '150000.00', '0.00', 'sukemdau.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('53', 'Bánh su kem bơ sữa tươi', '7', '0', '', '100000.00', '10', '0', '150000.00', '0.00', 'He-Thong-Banh-Su-Singapore-Chewy-Junior.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('54', 'Bánh su kem nhân trái cây sữa tươi', '7', '0', '', '100000.00', '10', '0', '150000.00', '0.00', 'foody-banh-su-que-635930347896369908.jpg', '1', '1', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('55', 'Bánh su kem cà phê', '7', '0', '', '100000.00', '10', '0', '150000.00', '0.00', 'banh-su-kem-ca-phe-1.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('56', 'Bánh su kem phô mai', '7', '0', '', '100000.00', '10', '0', '150000.00', '0.00', '50020041-combo-20-banh-su-que-pho-mai-9.jpg', '1', '0', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('57', 'Bánh su kem sữa tươi chocolate', '7', '0', '', '100000.00', '10', '0', '150000.00', '0.00', 'combo-20-banh-su-que-kem-sua-tuoi-phu-socola.jpg', '1', '1', '2016-10-13 02:20:00', '2016-10-19 03:20:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('58', 'Bánh Macaron Pháp', '2', '0', 'Thưởng thức macaron, người ta có thể tìm thấy từ những hương vị truyền thống như mâm xôi, chocolate, cho đến những hương vị mới như nấm và trà xanh. Macaron với vị giòn tan của vỏ bánh, béo ngậy ngọt ngào của phần nhân, với vẻ ngoài đáng yêu và nhiều màu sắc đẹp mắt, đây là món bạn không nên bỏ qua khi khám phá nền ẩm thực Pháp.', '100000.00', '10', '0', '200000.00', '180000.00', 'Macaron9.jpg', '2', '0', '2016-10-26 17:00:00', '2016-10-11 17:00:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('59', 'Bánh Tiramisu - Italia', '2', '0', 'Chỉ cần cắn một miếng, bạn sẽ cảm nhận được tất cả các hương vị đó hòa quyện cùng một chính vì thế người ta còn ví món bánh này là Thiên đường trong miệng của bạn', '100000.00', '10', '0', '200000.00', '0.00', '234.jpg', '2', '0', '2016-10-26 17:00:00', '2016-10-11 17:00:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('60', 'Bánh Táo - Mỹ', '2', '0', 'Bánh táo Mỹ với phần vỏ bánh mỏng, giòn mềm, ẩn chứa phần nhân táo thơm ngọt, điểm chút vị chua dịu của trái cây quả sẽ là một lựa chọn hoàn hảo cho những tín đồ bánh ngọt trên toàn thế giới.', '100000.00', '10', '0', '200000.00', '0.00', '1234.jpg', '2', '0', '2016-10-26 17:00:00', '2016-10-11 17:00:00', null, null, null, null, null, null);
INSERT INTO products VALUES ('61', 'Bánh Cupcake - Anh Quốc', '6', '0', 'Những chiếc cupcake có cấu tạo gồm phần vỏ bánh xốp mịn và phần kem trang trí bên trên rất bắt mắt với nhiều hình dạng và màu sắc khác nhau. Cupcake còn được cho là chiếc bánh mang lại niềm vui và tiếng cười như chính hình dáng đáng yêu của chúng.', '100000.00', '10', '0', '150000.00', '120000.00', 'cupcake.jpg', '2', '1', null, null, null, null, null, null, null, null);
INSERT INTO products VALUES ('62', 'Bánh Sachertorte', '6', '0', 'Sachertorte là một loại bánh xốp được tạo ra bởi loại&nbsp;chocholate&nbsp;tuyệt hảo nhất của nước Áo. Sachertorte có vị ngọt nhẹ, gồm nhiều lớp bánh được làm từ ruột bánh mì và bánh sữa chocholate, xen lẫn giữa các lớp bánh là mứt mơ. Món bánh chocholate này nổi tiếng tới mức thành phố Vienna của Áo đã ấn định&nbsp;tổ chức một ngày Sachertorte quốc gia, vào 5/12 hằng năm', '100000.00', '10', '0', '250000.00', '220000.00', '111.jpg', '2', '0', null, null, null, null, null, null, null, null);
INSERT INTO products VALUES ('75', 'hhhhhhhh', '2', '2', '<p><img alt=\"\" src=\"/Dropbox/shoplaravel/upload/images/2017-07-30T172539Z-1764854560-3725-2389-1501458099.jpg\" style=\"height:300px; width:500px\" /></p>\r\n', '100000.00', '10', '0', '77777777.00', '777777.00', 'yHqJE_hhh.jpg', '2', '1', '2017-08-03 09:49:00', '2017-08-22 08:30:36', null, null, null, null, null, null);
INSERT INTO products VALUES ('76', 'test bánh ngọt kinh đô', '2', '2', '<p>test b&aacute;nh ngọt kinh đ&ocirc;</p>\r\n', '100000.00', '10', '0', '88888.00', '66666.00', 'm4FQ9_NewsOutSide-28-7-201729-528449-1818-9565-1501309286.jpeg', '1', '1', '2017-08-05 23:48:32', '2017-08-05 23:55:09', null, null, null, null, null, null);
INSERT INTO products VALUES ('77', 'bánh ngọt kinh đo', '2', '2', '<p>b&aacute;nh ngọt kinh đo</p>\r\n', '100000.00', '10', '0', '9993.00', '4444.00', '79ZXX_Tillerson-JPG-3289-1501639544.jpg', '1', '1', '2017-08-05 23:52:58', '2017-08-05 23:52:58', null, null, null, null, null, null);
INSERT INTO products VALUES ('78', 'dgndryn', '2', '2', '<p>srynsryndrynưethwht</p>\r\n', '100000.00', '10', '0', '45.00', '34.00', '5xXfE_hhh.jpg', '1', '1', '2017-08-15 15:52:58', '2017-08-15 15:54:59', null, 'http://localhost/Dropbox/shoplaravel/admin/products/sua/78', '', '', '', 'http://localhost/Dropbox/shoplaravel/admin/products/sua/78');

-- ----------------------------
-- Table structure for `provider`
-- ----------------------------
DROP TABLE IF EXISTS `provider`;
CREATE TABLE `provider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_type_products` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of provider
-- ----------------------------
INSERT INTO provider VALUES ('1', '1', 'Danisa', '', '', '2017-07-31 15:39:38', '2017-07-31 16:03:30', null);
INSERT INTO provider VALUES ('2', '2', 'Kinh Đô', '', '', '2017-07-31 15:40:25', '2017-07-31 16:03:17', null);
INSERT INTO provider VALUES ('3', '4', 'Tràng tiền', '', '', '2017-07-31 15:40:51', '2017-07-31 16:03:48', null);
INSERT INTO provider VALUES ('4', '1', 'Hải hà', '', '', '2017-07-31 15:44:31', '2017-07-31 16:04:24', null);
INSERT INTO provider VALUES ('5', '1', 'dsnbsryn', '', '', '2017-07-31 15:45:44', '2017-07-31 16:05:34', '2017-07-31 16:05:34');
INSERT INTO provider VALUES ('6', '1', 'fgndtn', '', '', '2017-07-31 15:45:49', '2017-07-31 16:05:38', '2017-07-31 16:05:38');
INSERT INTO provider VALUES ('7', '5', 'stenbryn', '', '', '2017-07-31 15:47:40', '2017-07-31 16:05:40', '2017-07-31 16:05:40');
INSERT INTO provider VALUES ('8', '8', 'sgbsrtb', '', '', '2017-07-31 15:47:46', '2017-07-31 16:05:46', '2017-07-31 16:05:46');
INSERT INTO provider VALUES ('9', '4', 'sebsrtbsrt', '', '', '2017-07-31 15:47:50', '2017-07-31 16:05:45', '2017-07-31 16:05:45');
INSERT INTO provider VALUES ('10', '11', 'jjjjjjjjjjjj', '', '', '2017-07-31 16:00:40', '2017-07-31 16:05:42', '2017-07-31 16:05:42');

-- ----------------------------
-- Table structure for `slide`
-- ----------------------------
DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of slide
-- ----------------------------
INSERT INTO slide VALUES ('1', 'banner1', 'banner1.jpg', '', '', null, null, null);
INSERT INTO slide VALUES ('2', 'banner2', 'banner2.jpg', '', '', null, null, null);
INSERT INTO slide VALUES ('3', 'banner3', 'banner3.jpg', '', '', null, null, null);
INSERT INTO slide VALUES ('14', 'hhhh', 'EQ5bL_hungpm.jpg', '<p>hhhhhhhhhhh</p>\r\n', 'hhhhhhhhhh', '2017-07-28 12:02:53', '2017-07-28 12:03:07', '2017-07-28 12:03:07');

-- ----------------------------
-- Table structure for `theloai`
-- ----------------------------
DROP TABLE IF EXISTS `theloai`;
CREATE TABLE `theloai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `theloai_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of theloai
-- ----------------------------
INSERT INTO theloai VALUES ('1', 'Thế giới', 'the-gioi', '2017-07-31 09:19:08', '2017-07-31 09:19:08', null);
INSERT INTO theloai VALUES ('2', 'Xã hội', 'xa-hoi', '2017-07-31 09:21:18', '2017-07-31 09:21:18', null);
INSERT INTO theloai VALUES ('3', 'Pháp luật', 'phap-luat', '2017-07-31 09:22:05', '2017-07-31 09:22:05', null);
INSERT INTO theloai VALUES ('4', 'Kinh doanh', 'kinh-doanh', '2017-07-31 09:22:47', '2017-07-31 09:22:47', null);
INSERT INTO theloai VALUES ('5', 'Thể thao', 'the-thao', '2017-07-31 09:24:49', '2017-07-31 09:24:49', null);
INSERT INTO theloai VALUES ('6', 'Du lịch', 'du-lich', '2017-07-31 09:25:53', '2017-07-31 09:25:53', null);
INSERT INTO theloai VALUES ('7', 'Giáo dục', 'giao-duc', '2017-07-31 09:31:43', '2017-07-31 09:31:43', null);
INSERT INTO theloai VALUES ('8', 'Sức khỏe', 'suc-khoe', '2017-07-31 09:35:02', '2017-07-31 09:35:02', null);
INSERT INTO theloai VALUES ('9', 'dfgndhf', 'dfgndhf', '2017-07-31 09:55:39', '2017-07-31 10:02:09', '2017-07-31 10:02:09');
INSERT INTO theloai VALUES ('10', 'dgnsr', 'dgnsr', '2017-07-31 09:55:46', '2017-07-31 10:02:13', '2017-07-31 10:02:13');
INSERT INTO theloai VALUES ('11', 'snsrtynsrn', 'snsrtynsrn', '2017-07-31 09:55:50', '2017-07-31 10:01:53', '2017-07-31 10:01:53');
INSERT INTO theloai VALUES ('12', 'Cười', 'cuoi', '2017-07-31 09:57:24', '2017-07-31 10:01:28', null);
INSERT INTO theloai VALUES ('13', 'ggggggggg', 'ggggggggg', '2017-08-06 21:30:15', '2017-08-06 21:30:33', '2017-08-06 21:30:33');

-- ----------------------------
-- Table structure for `theloaimenu`
-- ----------------------------
DROP TABLE IF EXISTS `theloaimenu`;
CREATE TABLE `theloaimenu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_danhmucmenu` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `show` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of theloaimenu
-- ----------------------------
INSERT INTO theloaimenu VALUES ('1', '1', 'Loại sản phẩm', '', '', '', '1', '2017-08-06 13:11:14', '2017-08-06 13:11:14', null);
INSERT INTO theloaimenu VALUES ('2', '1', 'Nhà cung cấp', '', '', '', '1', '2017-08-06 13:11:43', '2017-08-06 13:11:43', null);
INSERT INTO theloaimenu VALUES ('3', '1', 'Sản phẩm', '', '', '', '1', '2017-08-06 13:11:53', '2017-08-06 13:11:53', null);
INSERT INTO theloaimenu VALUES ('4', '1', 'Đơn hàng, khách hàng', '', '', '', '1', '2017-08-06 13:12:06', '2017-08-06 13:12:06', null);
INSERT INTO theloaimenu VALUES ('5', '2', 'Thể loại tin', '', '', '', '1', '2017-08-06 13:12:24', '2017-08-06 13:12:24', null);
INSERT INTO theloaimenu VALUES ('6', '2', 'Loại tin', '', '', '', '1', '2017-08-06 13:12:36', '2017-08-06 13:12:36', null);
INSERT INTO theloaimenu VALUES ('7', '2', 'Tin tức', '', '', '', '1', '2017-08-06 13:12:44', '2017-08-06 13:12:44', null);
INSERT INTO theloaimenu VALUES ('8', '2', 'Slide', '', '', '', '1', '2017-08-06 13:12:52', '2017-08-06 13:12:52', null);
INSERT INTO theloaimenu VALUES ('9', '3', 'Đơn vị tính', '', '', '', '1', '2017-08-06 13:14:02', '2017-08-06 13:14:02', null);
INSERT INTO theloaimenu VALUES ('10', '3', 'User', '', '', '', '1', '2017-08-06 13:15:06', '2017-08-06 13:15:06', null);
INSERT INTO theloaimenu VALUES ('11', '3', 'Cấu hình', '', '', '', '1', '2017-08-06 13:15:16', '2017-08-06 13:15:16', null);
INSERT INTO theloaimenu VALUES ('12', '3', 'Banner', '', '', '', '1', '2017-08-06 15:29:09', '2017-08-06 15:29:09', null);
INSERT INTO theloaimenu VALUES ('13', '3', 'Giới thiệu', '', '', '', '1', '2017-08-06 15:29:17', '2017-08-06 15:29:17', null);
INSERT INTO theloaimenu VALUES ('14', '4', 'Danh mục menu', '', '', '', '1', '2017-08-06 15:29:33', '2017-08-06 15:29:33', null);
INSERT INTO theloaimenu VALUES ('15', '4', 'Thể loại menu', '', '', '', '1', '2017-08-06 15:29:44', '2017-08-06 15:29:44', null);
INSERT INTO theloaimenu VALUES ('16', '4', 'Menu', '', '', '', '1', '2017-08-06 15:29:54', '2017-08-06 15:29:54', null);
INSERT INTO theloaimenu VALUES ('18', '1', 'Báo cáo - Thống kê', '', '', '', '1', '2017-08-21 08:43:19', '2017-08-21 08:43:19', null);

-- ----------------------------
-- Table structure for `thongtinchung`
-- ----------------------------
DROP TABLE IF EXISTS `thongtinchung`;
CREATE TABLE `thongtinchung` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `googlemap` text COLLATE utf8_unicode_ci,
  `chatonline` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `thongtinchung_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of thongtinchung
-- ----------------------------
INSERT INTO thongtinchung VALUES ('1', 'Công ty cổ phần phần mềm FPT', '0973446636', 'hieubvhd@gmail.com', '0973446636', 'vietec.com.vn', 'Tòa nhà Vietec Số 01- NV3/D22 Khu biệt thự nhà vườn 62 Trần Bình - Phường Mai Dịch - Quận Cầu Giấy - Hà Nội', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238412.85801215755!2d105.65641418327837!3d20.984582235611096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ad030385f1%3A0xfe64859e05219d67!2sFPT+Information+System+(FIS)!5e0!3m2!1svi!2s!4v1501822346632\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238412.85801215755!2d105.65641418327837!3d20.984582235611096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ad030385f1%3A0xfe64859e05219d67!2sFPT+Information+System+(FIS)!5e0!3m2!1svi!2s!4v1501822346632\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', null, '2017-08-15 15:24:04', null);

-- ----------------------------
-- Table structure for `type_products`
-- ----------------------------
DROP TABLE IF EXISTS `type_products`;
CREATE TABLE `type_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_products_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of type_products
-- ----------------------------
INSERT INTO type_products VALUES ('1', 'Bánh mặn', '<p>Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.</p>\r\n', 'banh-man-thu-vi-nhat-1.jpg', null, '2017-07-31 12:53:37', null);
INSERT INTO type_products VALUES ('2', 'Bánh ngọt', 'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween..', '20131108144733.jpg', '2016-10-12 02:16:15', '2016-10-13 01:38:35', null);
INSERT INTO type_products VALUES ('3', 'Bánh trái cây', 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \"lạc\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.', 'banhtraicay.jpg', '2016-10-18 00:33:33', '2016-10-15 07:25:27', null);
INSERT INTO type_products VALUES ('4', 'Bánh kem', 'Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan – một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem. Tuy nhiên, cốt bánh kem thực ra có rất nhiều loại với hương vị, kết cấu và phương thức làm khác nhau chứ không chỉ đơn giản là “bánh bông lan” chung chung đâu nhé!', 'banhkem.jpg', '2016-10-26 03:29:19', '2016-10-26 02:22:22', null);
INSERT INTO type_products VALUES ('5', 'Bánh crepe', 'Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải “xiêu lòng”', 'crepe.jpg', '2016-10-28 04:00:00', '2016-10-27 04:00:23', null);
INSERT INTO type_products VALUES ('6', 'Bánh Pizza', 'Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn được những nhà cầm quyền EU chứng nhận là một phần di sản văn hóa ẩm thực châu Âu. Và để được chứng nhận là một nhà sản xuất pizza không hề đơn giản. Người ta phải qua đủ mọi các bước xét duyệt của chính phủ Ý và liên minh châu Âu nữa… tất cả là để đảm bảo danh tiếng cho món ăn này.', 'pizza.jpg', '2016-10-25 17:19:00', null, null);
INSERT INTO type_products VALUES ('7', 'Bánh su kem', 'Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... đánh đều tạo thành một hỗn hợp và sau đó bằng thao tác ép và phun qua một cái túi để định hình thành những bánh nhỏ và cuối cùng được nướng chín. Bánh su kem có thể thêm thành phần Sô cô la để tăng vị hấp dẫn. Bánh có xuất xứ từ nước Pháp.', 'sukemdau.jpg', '2016-10-25 17:19:00', null, null);
INSERT INTO type_products VALUES ('8', 'Bánh ngọt Japan----------', '<p>Bánh ngọt Japan----</p>\r\n', '8C86D_hhh.jpg', '2017-07-29 09:58:49', '2017-07-29 10:24:09', null);
INSERT INTO type_products VALUES ('9', 'Bánh ngọt Japan', '<p>Bánh ngọt Japan</p>\r\n', 'PTYJX_pm.jpg', '2017-07-29 10:00:01', '2017-07-29 10:00:01', null);
INSERT INTO type_products VALUES ('10', 'Bánh Hàn Quốc', '<p>Bánh Hàn Quốc</p>\r\n', 'z8yFc_hungpm.jpg', '2017-07-29 10:02:58', '2017-08-05 23:21:30', '2017-08-05 23:21:30');
INSERT INTO type_products VALUES ('11', 'Bánh Ngọt Mỹ', '<p>Bánh Ngọt Mỹ</p>\r\n', 'vTVt0_hhh.jpg', '2017-07-29 10:03:17', '2017-07-29 10:03:17', null);

-- ----------------------------
-- Table structure for `unit`
-- ----------------------------
DROP TABLE IF EXISTS `unit`;
CREATE TABLE `unit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unit_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of unit
-- ----------------------------
INSERT INTO unit VALUES ('1', 'Hộp', '2017-07-31 17:03:32', '2017-07-31 17:07:09', null);
INSERT INTO unit VALUES ('2', 'Cái', '2017-07-31 17:03:44', '2017-07-31 17:07:43', null);
INSERT INTO unit VALUES ('3', 'Chiếc', '2017-07-31 17:03:49', '2017-07-31 17:07:56', null);
INSERT INTO unit VALUES ('4', 'sgfnsfhgn', '2017-07-31 17:03:51', '2017-07-31 17:05:23', '2017-07-31 17:05:23');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lavel` int(2) NOT NULL DEFAULT '0',
  `route` text COLLATE utf8_unicode_ci,
  `id_route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_theloaimenu` text COLLATE utf8_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('8', 'hieubv-vietec', 'hieubvhd@gmail.com', 'hieubvhd@gmail.com', '$2y$10$v/J4KHlfX2Oe7DKVo4sawuGeL0wJoOORB97l7LbF67jl0vIjcV4I.', '1', null, null, null, 'QZNVJt69mGLMaWBaiCEpwUfY0SeudX0gkf3UfAhX5Q1yElEU6Jv6otyyNv9A', '2017-07-27 13:54:38', '2017-08-03 14:07:11', '0973446636', 'Hà Nội', null);
INSERT INTO users VALUES ('9', 'hieubv', 'hieubv0802@gmail.com', 'hieubv0802@gmail.com', '$2y$10$xRkDnlZ7eRFU3tGSKCJbpO4b7hTAwz2VYLoCAREM7sF5KrHguGJxK', '2', null, null, null, null, '2017-07-27 18:54:10', '2017-07-27 18:54:10', '0973446636', 'Hà Nội', null);
INSERT INTO users VALUES ('10', 'Bùi Văn Hiếu', 'dangky@gmail.com', 'dangky@gmail.com', '$2y$10$ZBgCS7DoqvWqDx7a.oN3CeJMbdPsk0gvWwCt5LWvahgxgM/jD0lwO', '0', null, null, null, null, '2017-07-28 13:43:27', '2017-07-28 14:56:55', '674567', 'Hà Nội', null);
INSERT INTO users VALUES ('12', 'admin', 'admin@gmail.com', 'admin@gmail.com', '$2y$10$i2kg9foP8d/MChYYhA26Du0TUMerOi9q7n24qMEwGjRWDYfG6HHFW', '2', null, null, null, null, '2017-08-06 22:05:57', '2017-08-06 22:05:57', '0973446636', 'Hà Nội', null);
INSERT INTO users VALUES ('13', 'Đăng ký', 'dk@gmail.com', 'dk@gmail.com', '$2y$10$GgRolmWd1CpbFnxuu31UN.81LTWb85U3C0/.oHIoJP2p9rkRzR0.W', '0', null, null, null, null, '2017-08-06 22:06:48', '2017-08-06 22:06:48', '0973446636', 'Hà Nội', null);
INSERT INTO users VALUES ('14', 'thường', 'thuong@gmail.com', 'thuong@gmail.com', '$2y$10$cywosegwGWzcR0elNaBFj.gjdXXdsZtPWxITg2bPOfywJFpab35ea', '3', null, null, '2,3,4,5,10,11', null, '2017-08-07 08:18:10', '2017-08-08 12:38:57', '0973446636', 'Hà Nội', null);
INSERT INTO users VALUES ('15', 'thường 2', 'thuong2@gmail.com', 'thuong2@gmail.com', '$2y$10$EeQaB.bGiIXFzt0JiXSwleFy1wKb2VmnHfCk7Mr0JYl.e21WTltK2', '3', null, null, '2,3,4', null, '2017-08-07 08:18:57', '2017-08-08 12:39:55', '0973446636', 'Hà Nội', null);
INSERT INTO users VALUES ('16', 'aethset', 'hieuSDvsabvhd@gmail.com', 'hieuSDvsabvhd@gmail.com', '$2y$10$JmnQlAnGQEBaKTMOZj7ONOkTL5xQ8GpGAj.P9eeGfgcbZXDi0MzaC', '0', null, null, null, null, '2017-08-07 16:20:53', '2017-08-07 16:20:53', '0973446636', 'éthet', null);
INSERT INTO users VALUES ('23', 'đăng ký', 'bsrtbsr@gmail.com', 'bsrtbsr@gmail.com', '$2y$10$qHFXjBMrilz5nOD2qUbZgOAzWLuC18f0FxikZj9bZTdP1SeIRnSiG', '0', null, null, null, null, '2017-08-08 11:52:26', '2017-08-08 11:52:26', '567465', 'sdtndry', null);
INSERT INTO users VALUES ('24', 'thường', 'arb@gmail.com', 'arb@gmail.com', '$2y$10$9S83te6YCGouhU3EMIBov.3lE1ztzv0gtulh8Fe.tJys0lPSGHRoe', '3', null, null, '5,6,7,8,9,10,11,12', null, '2017-08-08 11:53:13', '2017-08-08 11:53:13', '56758', 'sdndry', null);
INSERT INTO users VALUES ('25', 'sdbster', 'setbrst@gmil.com', 'setbrst@gmil.com', '$2y$10$cP0wTmKlMhDlhiIAhYjM/OgTNGCFSI3uepPqlmw0lS7obR5NYAyVq', '3', null, null, '12,13', null, '2017-08-09 13:24:40', '2017-08-09 13:24:40', '54365', 'sebstre', null);
INSERT INTO users VALUES ('26', '123456', '123456@gmail.com', '123456@gmail.com', '$2y$10$zseyjeJSWp5IjdI2iRMZWu/NSwufdtTjLdJEzigew9tGVJpCFFszW', '0', null, null, null, null, '2018-03-09 17:09:20', '2018-03-09 17:09:20', '123456', '123456', null);
