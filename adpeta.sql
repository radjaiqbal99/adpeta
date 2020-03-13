/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : adpeta

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 13/03/2020 13:16:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for akun
-- ----------------------------
DROP TABLE IF EXISTS `akun`;
CREATE TABLE `akun`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nrp/nid` int(255) NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role-id` int(255) NULL DEFAULT NULL,
  `is-active` int(255) NULL DEFAULT NULL,
  `date-create` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of akun
-- ----------------------------
INSERT INTO `akun` VALUES (1, 1, 'iqbal', 'Admin', '123', 'sadasd', 1, 0, 123123);
INSERT INTO `akun` VALUES (2, 2, 'saas', 'Mahasiswa', '123', 'asggsdf', 2, 0, 123123123);
INSERT INTO `akun` VALUES (3, 3, 'jnkn', 'Dosen', '123', 'kmjsandasnd', 3, 0, 123123);
INSERT INTO `akun` VALUES (4, 4, 'kjasdnklasn', 'Dosenwali', '123', 'asdalksnd', 4, 0, 123123);
INSERT INTO `akun` VALUES (5, 5, 'asldnlk', 'Kordinatorta', '123', 'asdasd', 5, 0, 123123);
INSERT INTO `akun` VALUES (6, 6, 'asldmal;smd', 'kordinatrokp', '123', 'saldnaskld', 6, 0, 12390132);

-- ----------------------------
-- Table structure for akun-role
-- ----------------------------
DROP TABLE IF EXISTS `akun-role`;
CREATE TABLE `akun-role`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role-akun` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of akun-role
-- ----------------------------
INSERT INTO `akun-role` VALUES (1, 'admin');
INSERT INTO `akun-role` VALUES (2, 'mahasiswa');
INSERT INTO `akun-role` VALUES (3, 'dosen');
INSERT INTO `akun-role` VALUES (4, 'dosen_wali');
INSERT INTO `akun-role` VALUES (5, 'kordinator_ta');
INSERT INTO `akun-role` VALUES (6, 'kordinator_kp');

SET FOREIGN_KEY_CHECKS = 1;
