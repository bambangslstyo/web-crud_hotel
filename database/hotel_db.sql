/*
Navicat MySQL Data Transfer

Source Server         : Bambang
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : hotel_db

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2017-02-04 21:13:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kamar
-- ----------------------------
DROP TABLE IF EXISTS `kamar`;
CREATE TABLE `kamar` (
  `kamar_id` int(11) NOT NULL AUTO_INCREMENT,
  `kamar_kode` varchar(11) NOT NULL,
  `kamar_tipe` varchar(20) NOT NULL,
  `kamar_tarif` double NOT NULL,
  PRIMARY KEY (`kamar_id`),
  UNIQUE KEY `kamar_kode` (`kamar_kode`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kamar
-- ----------------------------
INSERT INTO `kamar` VALUES ('15', 'K0002', 'Superior Room', '1830000');
INSERT INTO `kamar` VALUES ('14', 'K0001', 'Presidential Room', '6990000');
INSERT INTO `kamar` VALUES ('16', 'K0003', 'Standar Room', '650000');
INSERT INTO `kamar` VALUES ('17', 'K0004', 'Standar Room', '650000');

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL AUTO_INCREMENT,
  `pegawai_nama` varchar(30) NOT NULL,
  `pegawai_jabatan` varchar(15) NOT NULL,
  `pegawai_alamat` varchar(50) NOT NULL,
  `pegawai_jk` varchar(10) NOT NULL,
  `pegawai_umur` varchar(3) NOT NULL,
  `pegawai_notlp` varchar(15) NOT NULL,
  PRIMARY KEY (`pegawai_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES ('14', 'Dwi', 'Resepsionis', 'Jl. Batua Raya', 'Laki-Laki', '22', '085233468758');
INSERT INTO `pegawai` VALUES ('15', 'Khaidir', 'Doorman', 'jl. Antang', 'Laki-Laki', '24', '085659753218');

-- ----------------------------
-- Table structure for tamu
-- ----------------------------
DROP TABLE IF EXISTS `tamu`;
CREATE TABLE `tamu` (
  `tamu_id` int(11) NOT NULL AUTO_INCREMENT,
  `tamu_kode` varchar(11) NOT NULL,
  `tamu_nama` varchar(30) NOT NULL,
  `tamu_alamat` varchar(50) NOT NULL,
  `tamu_jk` varchar(10) NOT NULL,
  `tamu_umur` varchar(3) NOT NULL,
  `tamu_notlp` varchar(15) NOT NULL,
  PRIMARY KEY (`tamu_id`),
  UNIQUE KEY `tamu_kode` (`tamu_kode`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tamu
-- ----------------------------
INSERT INTO `tamu` VALUES ('12', 'T0001', 'Bambang Sulistyo', 'Jl. Cendrawasih', 'Laki-Laki', '22', '082327833333');
INSERT INTO `tamu` VALUES ('18', 'T0002', 'Ahmad', 'Jalan-jalan', 'Laki-Laki', '22', '085693126856');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaksi_no` varchar(11) NOT NULL,
  `tamu_nama` varchar(30) NOT NULL,
  `kamar_tipe` varchar(20) NOT NULL,
  `transaksi_tarif` double NOT NULL,
  `transaksi_nginap` int(11) NOT NULL,
  `transaksi_total` double NOT NULL,
  `transaksi_bayar` double NOT NULL,
  `transaksi_kembali` double NOT NULL,
  PRIMARY KEY (`transaksi_id`),
  UNIQUE KEY `transaksi_no` (`transaksi_no`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('18', 'T0001', 'Bambang', 'Presidential Room', '6990000', '4', '27960000', '28000000', '40000');
INSERT INTO `transaksi` VALUES ('19', 'T0002', 'Ahmad', 'Superior Room', '1830000', '6', '10980000', '10990000', '10000');
