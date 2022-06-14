/*
 Navicat Premium Data Transfer

 Source Server         : beay
 Source Server Type    : MySQL
 Source Server Version : 100416
 Source Host           : localhost:3306
 Source Schema         : db_beay

 Target Server Type    : MySQL
 Target Server Version : 100416
 File Encoding         : 65001

 Date: 10/06/2022 17:25:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ecom_atributos
-- ----------------------------
DROP TABLE IF EXISTS `ecom_atributos`;
CREATE TABLE `ecom_atributos`  (
  `id_atributo` int(11) NOT NULL,
  `atributo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fch_r` datetime(0) NULL DEFAULT NULL,
  `fch_m` datetime(0) NULL DEFAULT NULL,
  `fch_e` datetime(0) NULL DEFAULT NULL,
  `usr_r` tinyblob NULL,
  `usr_m` tinyblob NULL,
  `usr_e` tinyblob NULL,
  PRIMARY KEY (`id_atributo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for ecom_atributos_tipos
-- ----------------------------
DROP TABLE IF EXISTS `ecom_atributos_tipos`;
CREATE TABLE `ecom_atributos_tipos`  (
  `id_atributo_tipo` int(11) NOT NULL,
  `tipo_atributo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fch_r` datetime(0) NULL DEFAULT NULL,
  `fch_m` datetime(0) NULL DEFAULT NULL,
  `fch_e` datetime(0) NULL DEFAULT NULL,
  `usr_r` tinyint(4) NULL DEFAULT NULL,
  `usr_m` tinyint(4) NULL DEFAULT NULL,
  `usr_e` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_atributo_tipo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for ecom_productos
-- ----------------------------
DROP TABLE IF EXISTS `ecom_productos`;
CREATE TABLE `ecom_productos`  (
  `id_producto` int(11) NOT NULL,
  `id_tipo_venta` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `siempre_disponible` tinyint(4) NOT NULL,
  `fch_r` datetime(0) NULL DEFAULT NULL,
  `fch_m` datetime(0) NULL DEFAULT NULL,
  `fch_e` datetime(0) NULL DEFAULT NULL,
  `usr_r` tinyint(4) NULL DEFAULT NULL,
  `usr_m` tinyint(4) NULL DEFAULT NULL,
  `usr_e` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_producto`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for ecom_productos_atributos
-- ----------------------------
DROP TABLE IF EXISTS `ecom_productos_atributos`;
CREATE TABLE `ecom_productos_atributos`  (
  `id_producto_atributo` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_atributo` int(11) NOT NULL,
  `id_atributo_tipo` int(11) NOT NULL,
  `fch_r` datetime(0) NULL DEFAULT NULL,
  `fch_m` datetime(0) NULL DEFAULT NULL,
  `fch_e` datetime(0) NULL DEFAULT NULL,
  `usr_m` tinyint(4) NULL DEFAULT NULL,
  `usr_r` tinyint(4) NULL DEFAULT NULL,
  `usr_e` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_producto_atributo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for ecom_productos_combinaciones
-- ----------------------------
DROP TABLE IF EXISTS `ecom_productos_combinaciones`;
CREATE TABLE `ecom_productos_combinaciones`  (
  `id_producto_combinacion` int(11) NOT NULL,
  `id_producto_atributo` int(11) NOT NULL,
  `combinacion` tinyint(4) NOT NULL,
  `fch_r` datetime(0) NULL DEFAULT NULL,
  `fch_m` datetime(0) NULL DEFAULT NULL,
  `fch_e` datetime(0) NULL DEFAULT NULL,
  `usr_r` tinyint(4) NULL DEFAULT NULL,
  `usr_m` tinyint(4) NULL DEFAULT NULL,
  `usr_e` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_producto_combinacion`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for erp_almacen
-- ----------------------------
DROP TABLE IF EXISTS `erp_almacen`;
CREATE TABLE `erp_almacen`  (
  `id_almacen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `almacen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_almacen`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for erp_productos_combinaciones_almacenes
-- ----------------------------
DROP TABLE IF EXISTS `erp_productos_combinaciones_almacenes`;
CREATE TABLE `erp_productos_combinaciones_almacenes`  (
  `id_producto_combinacion_almacen` int(11) NOT NULL,
  `id_almacen` int(11) NOT NULL,
  `combinacion` tinyint(4) NOT NULL,
  `fch_r` datetime(0) NULL DEFAULT NULL,
  `fch_m` datetime(0) NULL DEFAULT NULL,
  `fch_e` datetime(0) NULL DEFAULT NULL,
  `usr_r` tinyint(4) NULL DEFAULT NULL,
  `usr_e` tinyint(4) NULL DEFAULT NULL,
  `usr_m` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_producto_combinacion_almacen`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for erp_productos_tipos_ventas
-- ----------------------------
DROP TABLE IF EXISTS `erp_productos_tipos_ventas`;
CREATE TABLE `erp_productos_tipos_ventas`  (
  `id_producto_tipo_venta` int(11) NOT NULL,
  `id_tipo_venta_unidad` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fch_r` datetime(0) NULL DEFAULT NULL,
  `fch_m` datetime(0) NULL DEFAULT NULL,
  `fch_e` datetime(0) NULL DEFAULT NULL,
  `usr_r` tinyint(4) NULL DEFAULT NULL,
  `usr_m` tinyint(4) NULL DEFAULT NULL,
  `usr_e` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_producto_tipo_venta`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for erp_sucursales
-- ----------------------------
DROP TABLE IF EXISTS `erp_sucursales`;
CREATE TABLE `erp_sucursales`  (
  `id_sucursal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sucursal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_sucursal`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for erp_sucursales_almacenes
-- ----------------------------
DROP TABLE IF EXISTS `erp_sucursales_almacenes`;
CREATE TABLE `erp_sucursales_almacenes`  (
  `id_sucursal_almacen` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `id_almacen` int(11) NOT NULL,
  `fch_r` datetime(0) NULL DEFAULT NULL,
  `fch_m` datetime(0) NULL DEFAULT NULL,
  `fch_e` datetime(0) NULL DEFAULT NULL,
  `usr_r` tinyint(4) NULL DEFAULT NULL,
  `usr_m` tinyint(4) NULL DEFAULT NULL,
  `usr_e` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_sucursal_almacen`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

SET FOREIGN_KEY_CHECKS = 1;
