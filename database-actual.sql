-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2018 a las 19:49:40
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hardstop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(20) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `imagen`, `precio`, `stock`, `tipo`) VALUES
(1, 'Cpu AMD A6 9500 APU 3.8Ghz AM4', 'N.Â° de nÃºcleos de CPU\r\n2 /\r\nN.Â° de nÃºcleos de GPU\r\n6 /\r\nNÃºcleos de cÃ³mputo\r\n8 (2 CPU + 6 GPU) /\r\nReloj base\r\n3.5GHz /\r\nReloj de aumento mÃ¡x.\r\n3.8GHz /\r\nCachÃ© L2 total\r\n1024KB /\r\nDesbloqueados\r', '1540519057-adm.jpg', 2100, 13, '2'),
(2, 'Cpu AMD RYZEN 5 1600 AM4 3.2 Ghz', 'socket\r\nAM4 /\r\nmodelo\r\nRyzen 5 1600 /\r\nNÃºcleos\r\n12 /\r\nFrecuencia\r\n3.6 Ghz /\r\nL1\r\n576  MB /\r\nL2\r\n3 MB  /\r\nL3\r\n16MB /\r\nTDP\r\n65 W / ', '1540519358-compragamer_Imganen_general_2578_Cpu_AMD_RYZEN_1600_6Cores_-_12Threads_3.2Ghz_AM4.jpg', 7000, 15, '2'),
(3, 'Cpu AMD RYZEN 5 1600X 3.6Ghz AM4', 'socket\r\nAM4 /\r\nmodelo\r\nRyzen 5 1600X /\r\nNÃºcleos\r\n6 /\r\nHilos\r\n12 /\r\nFrecuencia\r\n3.6 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nL1\r\n576 KB MB /\r\nL2\r\n3 MB /\r\nL3\r\n16 MB /\r\nTDP\r\n95 W /\r\n', '1540519528-compragamer_Imganen_general_7901_Cpu_AMD_RYZEN_5_1600X_3.6Ghz_AM4_SIN_COOLER.jpg', 7900, 9, '2'),
(4, 'Cpu AMD RYZEN Threadripper 1950X TR4', 'socket\r\nTR4 /\r\nmodelo\r\nThreadripper 1950X /\r\nNÃºcleos\r\n16 /\r\nHilos\r\n32 /\r\nFrecuencia\r\n3.4 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nL1\r\n1.5 MB /\r\nL2\r\n8 MB /\r\nL3\r\n32 MB /\r\nTDP\r\n180 W / ', '1540519654-compragamer_Imganen_general_7903_Cpu_AMD_Ryzen_Threadripper_1950X_TR4_16_Cores_32_Threads.jpg', 36000, 5, '2'),
(5, 'Cpu AMD RYZEN 7 1700X  3.8GHz Turbo AM4', 'socket\r\nAM4 /\r\nmodelo\r\nRyzen 7 1700X /\r\nNÃºcleos\r\n8 /\r\nHilos\r\n16 /\r\nFrecuencia\r\n3.8 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nL2\r\n4 MB /\r\nL3\r\n16 MB /\r\nTDP\r\n95 W /', '1540519781-compragamer_Imganen_general_8388_Cpu_AMD_RYZEN_7_1700X_8-Core_3.8GHz_Turbo_AM4_95W_SIN_COOLER.jpg', 8500, 10, '2'),
(6, 'Cpu AMD RYZEN 5 2400G 3.9GHz + Radeon Vega 11 AM4', 'socket\r\nAM4 /\r\nmodelo\r\nRYZEN 5 2400G /\r\nNÃºcleos\r\n4 /\r\nHilos\r\n8 /\r\nFrecuencia\r\n3.6 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nChipset GPU\r\nRadeon Vega 11 /\r\nL2\r\n2 MB /\r\nL3\r\n4 MB /\r\nIncluye Cooler CPU\r\nSÃ­ /\r\nT', '1540519904-compragamer_Imganen_general_8518_Cpu_AMD_RYZEN_5_2400G_3.9GHz___Radeon_Vega_11_AM4_Wraith_Stealth_Cooler.jpg', 7499, 11, '2'),
(7, 'Cpu AMD RYZEN 5 2600 3.90Ghz  AM4', 'socket\r\nAM4 /\r\nmodelo\r\nAMD RYZEN 5 2600 /\r\nNÃºcleos\r\n6 /\r\nHilos\r\n12 /\r\nFrecuencia\r\n3.4 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nL2\r\n3 MB /\r\nL3\r\n16 MB /\r\nIncluye Cooler CPU\r\nSÃ­ /\r\nTDP\r\n65 W', '1540520004-compragamer_Imganen_general_8520_Cpu_AMD_RYZEN_5_2600_3.90Ghz_Pinnacle_AM4_Wraith_Stealth_Cooler.jpg', 8595, 12, '2'),
(8, 'Cpu AMD RYZEN 5 2600X 4.25Ghz  AM4', 'socket\r\nAM4 /\r\nmodelo\r\nRYZEN 5 2600X /\r\nNÃºcleos\r\n6 /\r\nHilos\r\n12 /\r\nFrecuencia\r\n3.6 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nL2\r\n3 MB /\r\nL3\r\n16 MB /\r\nIncluye Cooler CPU\r\nSÃ­ /\r\nTDP\r\n95 W', '1540520098-compragamer_Imganen_general_8525_Cpu_AMD_RYZEN_5_2600X_4.25Ghz_Pinnacle_AM4_Wraith_Spire_Cooler.jpg', 12500, 16, '2'),
(9, 'Cpu AMD RYZEN 3 1300X 3.7Ghz AM4 ', 'socket\r\nAM4 /\r\nmodelo\r\nRyzen 3 1300X /\r\nNÃºcleos\r\n4 /\r\nHilos\r\n4 /\r\nFrecuencia\r\n3.5 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nL1\r\n384 KB MB /\r\nL2\r\n2 MB /\r\nL3\r\n8 MB /\r\nIncluye Cooler CPU\r\nSÃ­ /\r\nTDP\r\n65 W', '1540520196-compragamer_Imganen_general_8526_Cpu_AMD_RYZEN_3_1300X_3.7Ghz_AM4_Wraith_Stealth_Cooler.jpg', 3700, 17, '2'),
(10, 'Cpu AMD RYZEN 3 2200G 3.7GHz + Radeon Vega 8 AM4', 'socket\r\nAM4 /\r\nmodelo\r\nRYZEN 3 2200G /\r\nNÃºcleos\r\n4 /\r\nHilos\r\n4 /\r\nFrecuencia\r\n3.5 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nChipset GPU\r\nRadeon Vega 8 /\r\nL2\r\n2 MB /\r\nL3\r\n4 MB /\r\nIncluye Cooler CPU\r\nSÃ­ /\r\nTD', '1540520293-compragamer_Imganen_general_8527_Cpu_AMD_RYZEN_3_2200G_3.7GHz___Radeon_Vega_8_AM4_Wraith_Stealth_Cooler.jpg', 5500, 21, '2'),
(11, 'Cpu AMD RYZEN 7 2700 4.1GHz AM4  RGB Led Cooler', 'socket\r\nAM4 /\r\nmodelo\r\nRYZEN 7 2700 /\r\nNÃºcleos\r\n8 /\r\nHilos\r\n16 /\r\nFrecuencia\r\n3.2 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nL2\r\n4 MB /\r\nL3\r\n16 MB /\r\n\r\nTDP \r\n95 W', '1540520375-compragamer_Imganen_general_8528_Cpu_AMD_RYZEN_7_2700_4.1GHz_Pinnacle_AM4_Wraith_Spire_Led_Cooler.jpg', 13000, 16, '2'),
(12, 'Cpu AMD RYZEN 7 2700X 4.35GHz  AM4', 'socket\r\nAM4 /\r\nmodelo\r\nRYZEN 7 2700X /\r\nNÃºcleos\r\n8 /\r\nHilos\r\n16 /\r\nFrecuencia\r\n3.7 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nL2\r\n4 MB /\r\nL3\r\n16 MB /\r\nIncluye Cooler CPU\r\nSÃ­ /\r\nTDP\r\n105 W\r\n', '1540520443-compragamer_Imganen_general_8530_Cpu_AMD_RYZEN_7_2700X_4.35GHz_Pinnacle_AM4_105W_Wraith_Prism.jpg', 17000, 14, '2'),
(13, 'Cpu AMD RYZEN 3 1200 3.4Ghz AM4', 'socket\r\nAM4 /\r\nmodelo\r\nRyzen 3 1200 /\r\nNÃºcleos\r\n4 /\r\nHilos\r\n4 /\r\nFrecuencia\r\n3.1 Ghz /\r\nFrecuencia Turbo\r\n3 GHz /\r\nL1\r\n384 KB MB /\r\nL2\r\n2 MB /\r\nL3\r\n8 MB /\r\nIncluye Cooler CPU\r\nSÃ­ /\r\nTDP\r\n65 W\r\n', '1540520497-compragamer_Imganen_general_8532_Cpu_AMD_RYZEN_3_1200_3.4Ghz_AM4_Wraith_Stealth_Cooler.jpg', 3600, 33, '2'),
(14, 'Procesador Intel Core i3 8100 3.6 GHZ LGA 1151 Coffe Lake', 'socket\r\n1151 8va /\r\nmodelo\r\ni3 8100 /\r\nNÃºcleos\r\n4 /\r\nHilos\r\n4 /\r\nFrecuencia\r\n3.6 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nChipset GPU\r\nIntel UHD Graphics 630 /\r\nL3\r\n6 MB /\r\nIncluye Cooler CPU\r\nSÃ­ /\r\nTDP\r\n3', '1540520596-compragamer_Imganen_general_7906_Procesador_Intel_Core_i3_8100_3.6_GHZ_LGA_1151_Coffe_Lake.jpg', 6000, 24, '2'),
(15, 'Procesador Intel Core i5 8400 4.0 GHZ LGA 1151 V2 Coffe Lake', 'socket\r\n1151 8va /\r\nmodelo\r\nIntel i5 8400 /\r\nNÃºcleos\r\n6 /\r\nHilos\r\n6 /\r\nFrecuencia\r\n2.8 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nChipset GPU\r\nIntel UHD Graphics 630 /\r\nL3\r\n9 MB /\r\nIncluye Cooler CPU\r\nSÃ­ /\r\n', '1540520667-compragamer_Imganen_general_7907_Procesador_Intel_Core_i5_8400_4.0_GHZ_LGA_1151_V2_Coffe_Lake.jpg', 11000, 26, '2'),
(16, 'Procesador Intel Core i7 8700K 4.7 GHZ LGA 1151 Coffe Lake', 'socket\r\n1151 8va /\r\nmodelo\r\ni7 8700K /\r\nNÃºcleos\r\n6 /\r\nHilos\r\n12 /\r\nFrecuencia\r\n3.7 Ghz /\r\nFrecuencia Turbo\r\n5 GHz /\r\nChipset GPU\r\nIntel UHD Graphics 630 /\r\nL3\r\n12 MB /\r\nTDP\r\n95 W', '1540520724-compragamer_Imganen_general_7909_Procesador_Intel_Core_i7_8700K_4.7_GHZ_LGA_1151_Coffe_Lake.jpg', 22000, 15, '2'),
(17, 'Procesador Intel Core i5 8600K 4.3 GHZ LGA 1151 V2 Coffe Lak', 'socket\r\n1151 8va /\r\nmodelo\r\ni5 8600K /\r\nNÃºcleos\r\n6 /\r\nHilos\r\n6 /\r\nFrecuencia\r\n3.6 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nChipset GPU\r\nIntel UHD Graphics 630 /\r\nL3\r\n9 MB /\r\nTDP\r\n95 W', '1540520817-compragamer_Imganen_general_8477_Procesador_Intel_Core_i5_8600K_4.3_GHZ_LGA_1151_V2_Coffe_Lake.jpg', 13999, 14, '2'),
(18, 'Procesador Intel Pentium G4560 3.5Ghz LGA 1151 Kaby Lake', 'socket\r\n1151 /\r\nmodelo\r\nPentium G4560 /\r\nNÃºcleos\r\n2 /\r\nHilos\r\n4 /\r\nFrecuencia\r\n3.5 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nChipset GPU\r\nIntel HD Graphics 610 /\r\nL1\r\n64KB por nÃºcleo MB /\r\nL2\r\n3 MB /\r\nInclu', '1540520898-compragamer_Imganen_general_8478_Procesador_Intel_Pentium_G4560_3.5Ghz_LGA_1151.jpg', 3200, 17, '2'),
(19, 'Procesador Intel Core i3 7100 3.9 GHZ LGA 1151 Kaby Lake', 'socket\r\n1151 /\r\nmodelo\r\ni3 7100 /\r\nNÃºcleos\r\n2 /\r\nHilos\r\n4 /\r\nFrecuencia\r\n3.9 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nChipset GPU\r\nIntel HD Graphics 630 /\r\nL1\r\n64KB por nÃºcleo MB /\r\nL2\r\n3 MB /\r\nIncluye Coo', '1540520956-compragamer_Imganen_general_8480_Procesador_Intel_Core_i3_7100_LGA_1151.jpg', 6200, 21, '2'),
(20, 'Procesador Intel Core i5 7400 3.5 GHZ LGA 1151 Kaby Lake', '\r\nmodelo \r\ni5 7400 /\r\nNÃºcleos\r\n4 /\r\nHilos\r\n4 /\r\nFrecuencia\r\n3 Ghz /\r\nFrecuencia Turbo\r\n4 GHz /\r\nChipset GPU\r\nIntel HD Graphics 630 /\r\nL1\r\n64KB por nÃºcleo MB /\r\nL2\r\n6 MB /\r\nIncluye Cooler CPU\r\nSÃ­ /\r', '1540521031-compragamer_Imganen_general_8481_Procesador_Intel_Core_i5_7400_3.5_GHZ_LGA_1151_Kaby_Lake.jpg', 10999, 17, '2'),
(21, 'Placa de video Zotac GTX 1050 2GB DDR5', 'Tipo\r\npcie\r\nChipset GPU\r\nGTX 1050\r\nModelo\r\nZT-P10500A-10L\r\nConsumo\r\n75 W\r\nWatts totales recomendados\r\n300 W\r\nVelocidad del Core Base\r\n1354 Mhz\r\nVelocidad del Core Turbo\r\n1455 Mhz\r\nCapacidad de Memoria', '1540521478-compragamer_Imganen_general_1154_Placa_de_video_Zotac_GTX_1050_2GB_DDR5.jpg', 8100, 12, '6'),
(22, 'Placa de Video MSI GTX 1050 Ti 4GB GDDR5 OC', 'Tipo\r\npcie\r\nChipset GPU\r\nGTX 1050 Ti\r\nModelo\r\nMSI GTX 1050 Ti 4GB\r\nConsumo\r\n75 W\r\nWatts totales recomendados\r\n300 W\r\nVelocidad del Core Base\r\n1341 Mhz\r\nVelocidad del Core Turbo\r\n1455 Mhz\r\nCapacidad de', '1540521610-compragamer_Imganen_general_1786_Placa_de_Video_MSI_Gtx_1050_TI_4Gb_OC.jpg', 9610, 30, '6'),
(23, 'Placa de Video ASUS GTX 1060 6GB OC DDR5 DUAL', 'Tipo\r\npcie\r\nChipset GPU\r\nGTX1060\r\nModelo\r\nDual\r\nConsumo\r\n120 W\r\nWatts totales recomendados\r\n400 W\r\nCantidad PCIE de 6 pines\r\n1\r\nVelocidad del Core Base\r\n1594 Mhz\r\nVelocidad del Core Turbo\r\n1809 Mhz\r\nC', '1540521697-compragamer_Imganen_general_1872_Placa_de_Video_ASUS_DUAL_GTX_1060_O6GB.jpg', 18500, 16, '6'),
(24, 'Placa de Video Asus GTX 1050 Ti 4GB DDR5 OC STRIX GAMING AUR', 'Tipo\r\npcie\r\nChipset GPU\r\nGTX 1050 Ti\r\nModelo\r\nStrix OC\r\nConsumo\r\n90 W\r\nWatts totales recomendados\r\n300 W\r\nCantidad PCIE de 6 pines\r\n1\r\nVelocidad del Core Base\r\n1392 Mhz\r\nVelocidad del Core Turbo\r\n1506', '1540521783-compragamer_Imganen_general_2454_Placa_de_Video_Asus_GTX_1050_Ti_4GB_DDR5_OC_STRIX_GAMING.jpg', 12500, 21, '6'),
(25, 'Placa de Video EVGA GTX 1060 6GB SSC GAMING', 'Tipo\r\npcie\r\nChipset GPU\r\nGTX1060\r\nModelo\r\nSSC\r\nConsumo\r\n120 W\r\nWatts totales recomendados\r\n400 W\r\nCantidad PCIE de 8 pines\r\n1\r\nVelocidad del Core Base\r\n1607 Mhz\r\nVelocidad del Core Turbo\r\n1835 Mhz\r\nCa', '1540521860-compragamer_Imganen_general_3727_Placa_de_Video_EVGA_GTX_1060_6GB_DDR5_SSC_GAMING.jpg', 15950, 26, '6'),
(26, 'Placa de Video Zotac RTX 2080 8GB GDDR6 AMP Gaming', 'Tipo\r\npcie\r\nChipset GPU\r\nRTX 2080\r\nModelo\r\nZT-T20800D-10P\r\nConsumo\r\n225 W\r\nWatts totales recomendados\r\n600 W\r\nCantidad PCIE de 6 pines\r\n1\r\nCantidad PCIE de 8 pines\r\n1\r\nVelocidad del Core Base\r\n1515 Mh', '1540521969-compragamer_Imganen_general_9478_Placa_de_Video_Zotac_RTX_2080_8GB_AMP_Gaming.jpg', 50000, 5, '6'),
(27, 'Placa de Video ASUS GTX 1050 2GB DDR5 Cerberus OC', 'Tipo\r\npcie\r\nChipset GPU\r\nGTX 1050\r\nModelo\r\nCERBERUS-GTX1050-O2G\r\nConsumo\r\n70 W\r\nWatts totales recomendados\r\n300 W\r\nVelocidad del Core Base\r\n1430 Mhz\r\nVelocidad del Core Turbo\r\n1544 Mhz\r\nCapacidad de M', '1540522073-compragamer_Imganen_general_9722_Placa_de_Video_ASUS_GeForce_GTX_1050_2GB_DDR5_Cerberus_OC.jpg', 9800, 12, '6'),
(28, 'Placa de Video Gigabyte RX 550 2GB D5', 'Tipo\r\npcie\r\nChipset GPU\r\nRX 550\r\nModelo\r\nD5\r\nConsumo\r\n75 W\r\nWatts totales recomendados\r\n300 W\r\nVelocidad del Core Base\r\n1195 Mhz\r\nVelocidad del Core Turbo\r\n1195 Mhz\r\nCapacidad de Memoria\r\n2048 MB\r\nVel', '1540522377-compragamer_Imganen_general_7942_Placa_de_Video_Gigabyte_RX_550_2GB_D5.jpg', 7500, 24, '6'),
(29, 'Placa de Video Gigabyte RX 560 4GB DDR5 OC D5', 'Tipo\r\npcie\r\nChipset GPU\r\nRX 560\r\nModelo\r\nGV-RX560GAMING OC-4GD\r\nPuente para SLI/CroosfireX\r\nCrossfire\r\nConsumo\r\n75 W\r\nWatts totales recomendados\r\n300 W\r\nVelocidad del Core Base\r\n1189 Mhz\r\nVelocidad de', '1540522447-compragamer_Imganen_general_8047_Placa_de_Video_Gigabyte_RX_560_4GB_DDR5_OC_D5_Rev_2.0.jpg', 7200, 12, '6'),
(30, 'Placa de video Asus RX 560 4GB DDR5 EVO OC', 'Tipo\r\npcie\r\nChipset GPU\r\nRX 560\r\nModelo\r\nAsus RX 560 EVO 4GB OC\r\nPuente para SLI/CroosfireX\r\nCrossfire\r\nConsumo\r\n75 W\r\nWatts totales recomendados\r\n300 W\r\nVelocidad del Core Base\r\n1187 Mhz\r\nVelocidad d', '1540522539-compragamer_Imganen_general_9073_Placa_de_video_Asus_RX_560_4B_DDR5_EVO_OC.jpg', 7500, 26, '6'),
(31, 'Placa de Video Gigabyte RX 580 4GB AORUS RGB Fusion', 'Tipo\r\npcie\r\nChipset GPU\r\nRX 580\r\nModelo\r\nAorus\r\nPuente para SLI/CroosfireX\r\nCrossfire\r\nDoble Puente\r\nSÃ­\r\nConsumo\r\n180 W\r\nWatts totales recomendados\r\n500 W\r\nCantidad PCIE de 8 pines\r\n1\r\nVelocidad del ', '1540522643-compragamer_Imganen_general_9882_Placa_de_Video_Gigabyte_RX_580_4GB_AORUS_RGB_Fusion.jpg', 10900, 18, '6'),
(32, 'Disco RÃ­gido WD 2TB SATA 6.0GB/s Blue', 'Memoria Cache\r\n32 MB\r\nConsumo\r\n15 W\r\nTipo de disco\r\nMecÃ¡nico\r\nTipo de conexiÃ³n\r\nSATA\r\nTasa de transferencia\r\n6 Ghz\r\nCapacidad\r\n2000 GB', '1540522910-compragamer_Imganen_general_1206_Disco_R__gido_WD_2TB_Sata_3_6.0Gb_s_Caviar_Blue.jpg', 3100, 34, '8'),
(33, 'Disco Solido SSD Kingston A400 120GB 500MB/s', 'Memoria Cache\r\n128 MB\r\nConsumo\r\n10 W\r\nTipo de disco\r\nSÃ³lido\r\nTipo de conexiÃ³n\r\nSATA\r\nTasa de transferencia\r\n6 Ghz\r\nCapacidad\r\n120 GB', '1540523008-compragamer_Imganen_general_9024_Disco_Solido_SSD_Kingston_A400_120GB_500MB_s.jpg', 1200, 28, '8'),
(34, 'Disco Solido SSD Kingston A400 480GB 500MB/s', 'Consumo\r\n5 W\r\nTipo de disco\r\nSÃ³lido\r\nTipo de conexiÃ³n\r\nSATA\r\nTasa de transferencia\r\n6 Ghz\r\nCapacidad\r\n480 GB', '1540523074-compragamer_Imganen_general_9238_Disco_Solido_SSD_Kingston_A400_480GB_500MB_s.jpg', 3500, 28, '8'),
(35, 'Disco Rigido Seagate 2TB SATA 6GB/s 64MB 7200RPM Barracuda', 'Memoria Cache\r\n64 MB\r\nConsumo\r\n3 W\r\nTipo de disco\r\nMecÃ¡nico\r\nTipo de conexiÃ³n\r\nSATA\r\nTasa de transferencia\r\n6 Ghz\r\nCapacidad\r\n2048 GB', '1540523169-compragamer_Imganen_general_10335_Disco_Rigido_Seagate_2TB_SATA_6GB_s_64MB_7200RPM_Barracuda.jpg', 3200, 14, '8'),
(36, 'Memoria Kingston DDR4 4GB 2400Mhz HyperX Fury Black', 'Capacidad\r\n4096 MB\r\nVelocidad\r\n2400 Mhz\r\nTipo\r\nDDR4\r\nCantidad de memorias\r\n1', '1540523388-compragamer_Imganen_general_1769_Memorias_Kingston_DDR4_4GB_2400Mhz_Hyper_Fury_Black.jpg', 2100, 24, '5'),
(37, 'Memoria Crucial DDR3 4GB 1600Mhz', 'Capacidad\r\n4096 MB\r\nVelocidad\r\n1600 Mhz\r\nTipo\r\nDDR3\r\nCantidad de memorias\r\n1\r\nLatencia\r\n9 CL\r\nVoltaje\r\n1.5 V', '1540523452-compragamer_Imganen_general_5215_Memorias_Crucial_DDR3_4GB_1600Mhz.jpg', 1600, 30, '5'),
(38, 'Memoria Team DDR4 8GB 3200Mhz T-Force Night Hawk Black RGB', 'Capacidad\r\n8192 MB\r\nVelocidad\r\n3200 Mhz\r\nTipo\r\nDDR4\r\nCantidad de memorias\r\n1\r\nLatencia\r\n16 CL\r\nVoltaje\r\n1.35 V', '1540523516-compragamer_Imganen_general_7196_Memoria_Team_DDR4_8GB_3200Mhz_T-Force_Night_Hawk_Black_RGB.jpg', 6500, 14, '5'),
(39, 'Memoria Kingston DDR4 8GB 2400MHz HyperX Fury Red', 'Capacidad\r\n8192 MB\r\nVelocidad\r\n2400 Mhz\r\nTipo\r\nDDR4\r\nCantidad de memorias\r\n1\r\nLatencia\r\n15 CL\r\nVoltaje\r\n1 V', '1540523589-compragamer_Imganen_general_9705_Memoria_Kingston_DDR4_8GB_2400MHz_HyperX_Fury_Red.jpg', 3999, 13, '5'),
(40, 'Memoria Kingston DDR3 8GB 1866MHz HyperX Fury Blue', 'Capacidad\r\n8192 MB\r\nVelocidad\r\n1866 Mhz\r\nTipo\r\nDDR3\r\nCantidad de memorias\r\n1\r\nLatencia\r\n10 CL\r\nVoltaje\r\n1.5 V', '1540523644-compragamer_Imganen_general_10166_Memoria_Kingston_DDR3_8GB_1866MHz_HyperX_Fury_Blue.jpg', 3200, 11, '5'),
(41, 'Memoria Corsair DDR4 8GB 2666MHz Vengeance RGB Black', 'Capacidad\r\n8192 MB\r\nVelocidad\r\n2666 Mhz\r\nTipo\r\nDDR4\r\nCantidad de memorias\r\n1\r\nLatencia\r\n15 CL\r\nVoltaje\r\n1.2 V', '1540523716-compragamer_Imganen_general_10168_Memoria_Corsair_DDR4_8GB_2666MHz_Vengeance_RGB_Black.jpg', 5200, 8, '5'),
(42, 'Fuente Sentey XCP630-TS 630W', 'Formato\r\nATX\r\nWatts Nominal\r\n630 W\r\nWatts Reales\r\n630 W\r\nCompatible con posiciÃ³n inferior\r\nSÃ­\r\nTipo de cableado\r\nCables fijos\r\nAmpers en linea +12V\r\n40 A\r\nColor\r\nNegro\r\nConector 24 pines\r\nSÃ­\r\nConec', '1540523923-compragamer_Imganen_general_1285_Fuente_Sentey_XCP630-TS_630W.jpg', 1790, 21, '7'),
(43, 'Fuente Thermaltake Smart 500W 80 Plus White', 'Formato\r\nATX\r\nWatts Nominal\r\n500 W\r\nWatts Reales\r\n500 W\r\nCompatible con posiciÃ³n inferior\r\nSÃ­\r\nConector 24 pines\r\nSÃ­\r\nConector CPU 4 pines\r\n1\r\nConector CPU 4pines plus\r\n1\r\nConector pcie 6 pines\r\n2\r', '1540523992-compragamer_Imganen_general_9093_Fuente_Thermaltake_Smart_500W_80_Plus_White.jpg', 2170, 16, '7'),
(44, 'Fuente Cooler Master 500W Masterwatt Lite 80 Plus', 'Formato\r\nATX\r\nWatts Nominal\r\n500 W\r\nWatts Reales\r\n456 W\r\nCompatible con posiciÃ³n inferior\r\nSÃ­\r\nConector 24 pines\r\nSÃ­\r\nConector CPU 4 pines\r\n1\r\nConector CPU 4pines plus\r\n1\r\nConector pcie 6 pines\r\n2\r', '1540524044-compragamer_Imganen_general_9098_Fuente_Cooler_Master_500W_Masterwatt_Lite_80_.jpg', 2290, 15, '7'),
(45, 'Fuente NZXT 550W HALE82 V2 80 Plus Bronze Modular', 'Formato\r\nATX\r\nWatts Nominal\r\n550 W\r\nWatts Reales\r\n550 W\r\nCompatible con posiciÃ³n inferior\r\nSÃ­\r\nCertificaco 80 plus\r\n80 PLUS Bronze\r\nTipo de cableado\r\nFull Modular\r\nAmpers en linea +12V\r\n41.25 A\r\nCol', '1540524121-compragamer_Imganen_general_9104_Fuente_NZXT_550W_HALE82_V2_80_Plus_Bronze_Modular.jpg', 3899, 13, '7'),
(46, 'Cooler CPU Zalman CNPS5X Performa Intel y AMD AM4', 'Socket Compatibles\r\n775, 1155, 1156, 1366, AM2, AM2+, AM3, AM3+, FM1, FM2, FM2+, 1155_3, 2011, 1150, 1151, 2011v3, AM4, 1151 8va\r\n', '1540524536-compragamer_Imganen_general_1485_Cooler_CPU_Zalman_CNPS5X_Performa_Intel_y_AMD.jpg', 1350, 21, '3'),
(47, 'Cooler CPU Cooler Master Master Air MA610P RGB', 'Socket Compatibles\r\n775, 1150, 1151, 1151 8va, 1155, 1155_3, 1156, 1366, 2011, 2011_v3, AM2, AM2+, AM3, AM4, AM3+, FM1, FM2, FM2+', '1540524589-compragamer_Imganen_general_8411_Cooler_CPU_Cooler_Master_Master_Air_MA610P_RGB.jpg', 4100, 14, '3'),
(48, 'Cooler CPU Gigabyte Aorus PWM ATC700 DUAL RGB Intel y AMD AM', 'Socket Compatibles\r\n1150, 1151, 1151 8va, 1155, 1155_3, 1156, 1366, 2011, 2011_v3, 775, AM2, AM2+, AM3, AM3+, AM4, FM1, FM2, FM2+', '1540524653-compragamer_Imganen_general_9237_Cooler_CPU_Gigabyte_Aorus_PWM_ATC700_DUAL_RGB_Intel_y_AMD_AM4_Ready.jpg', 6999, 3, '3'),
(49, 'Gabinete Corsair Carbide 400C White', 'Factor Mother\r\nITX, M-ATX, ATX, E-ATX\r\nCon ventana\r\nSÃ­\r\nTipo de ventana\r\nAcrÃ­lico\r\nColores\r\nBlanco\r\nTipo de fuente admitida\r\nATX\r\nCoolers Fan de 120mm soportados\r\n6\r\nCoolers Fan de 120mm includidos\r', '1540524812-compragamer_Imganen_general_1963_Gabinete_Corsair_Carbide_400C_White.jpg', 3800, 10, '11'),
(50, 'Gabinete Thermaltake Versa C21 RGB MTB ATX', 'Factor Mother\r\nITX, M-ATX, ATX\r\nAncho\r\n216 mm\r\nAlto\r\n521 mm\r\nProfundidad\r\n469 mm\r\nLargo mÃ¡ximo VGA\r\n390 mm\r\nTipo de fuente admitida\r\nATX\r\nCoolers Fan de 120mm soportados\r\n5\r\nCoolers Fan de 120mm incl', '1540524896-compragamer_Imganen_general_4634_Gabinete_Thermaltake_View_C21_RGB_MTB_ATX_Blue.jpg', 2800, 6, '11'),
(51, 'Gabinete NZXT S340 Razer Edition ATX', 'Factor Mother\r\nITX, M-ATX, ATX\r\nCon ventana\r\nSÃ­\r\nTipo de ventana\r\nAcrÃ­lico\r\nColores\r\nNegro\r\nTipo de fuente admitida\r\nATX\r\nCoolers Fan de 120mm soportados\r\n3\r\nCoolers Fan de 120mm includidos\r\n2\r\nCool', '1540524986-compragamer_Imganen_general_5618_Gabinete_NZXT_S340_Razer_Edition_ATX.jpg', 5000, 4, '11'),
(52, 'Gabinete AEROCOOL Cylon RGB Flow LED ATX', 'Factor Mother\r\nITX, ATX, M-ATX\r\nAncho\r\n198 mm\r\nAlto\r\n459 mm\r\nProfundidad\r\n413 mm\r\nLargo mÃ¡ximo VGA\r\n371 mm\r\nTipo de fuente admitida\r\nATX\r\nCoolers Fan de 120mm soportados\r\n7\r\nCoolers Fan de 120mm incl', '1540525153-compragamer_Imganen_general_8574_Gabinete_AEROCOOL_Cylon.jpg', 1999, 8, '11'),
(53, 'Teclado Logitech G213 Prodigy Gaming', 'ESPECIFICACIONES TÃ‰CNICAS\r\nResistente a salpicaduras: \r\nSometido a pruebas con derrames de 60 ml de lÃ­quido\r\n Tipo de conexiÃ³n: USB 2.0\r\nProtocolo USB: USB 2.0\r\nVelocidad USB: MÃ¡xima\r\nIndicadores ', '1540560912-compragamer_Imganen_general_4469_Teclado_Logitech_G213_Prodigy_Gaming.jpg', 2030, 16, '10'),
(54, 'Teclado Mechanical HyperX Alloy FPS Cherry MX Blue', 'Especificaciones tÃ©cnicas: \r\n\r\nMarca Hyperx \r\nModelo: Alloy FPS \r\nâ€¢ Interfaz : Usb\r\nTipo : Mecanico\r\nTeclas : Cherry MX Blue\r\nCable : Si\r\nTecla Ã‘ : Si\r\nColores : Negro con Rojo\r\nâ€¢ Polling : 1000', '1540561115-compragamer_Imganen_general_9626_Teclado_Mecanico_HyperX_Alloy_FPS_Cherry_MX_Red.jpg', 3899, 19, '10'),
(55, 'Mouse Logitech G502 Gaming Proteus Spectrum RGB', 'ESPECIFICACIONES TÃ‰CNICAS\r\nSeguimiento\r\nResoluciÃ³n: 200 â€“ 12.000 dpi\r\nAceleraciÃ³n mÃ¡xima: >40 G*\r\nVelocidad mÃ¡xima: >300 ips*\r\n* Pruebas realizadas en Logitech G240 Gaming Mouse Pad\r\n\r\nRespuest', '1540561281-compragamer_Imganen_general_4471_Mouse_Logitech_G502_Gaming_Proteus_Spectrum__RGB.jpg', 2500, 24, '10'),
(56, 'Mouse Logitech G PRO Gaming 12000DPI RGB', 'ESPECIFICACIONES TÃ‰CNICAS\r\nSeguimiento \r\nResoluciÃ³n: 200 â€“ 12.000 dpi\r\nAceleraciÃ³n mÃ¡xima: >40 G*\r\nVelocidad mÃ¡xima: >300 IPS*\r\n*Pruebas realizadas en Logitech G240 Gaming Mouse Pad\r\n\r\nRespuest', '1540561437-compragamer_Imganen_general_9519_Mouse_Logitech_G_PRO_Gaming.jpg', 1350, 27, '10'),
(57, 'Mouse HyperX Pulsefire FPS Pro RGB 16,000DPI', 'Especificaciones tÃ©cnicas: \r\n\r\nModelo: Pulsefire FPS Pro\r\nMarca: HyperX\r\nFactor de Forma: ErgonÃ³mico \r\nIluminaciÃ³n: Zona RGB Ãºnica\r\nBotones: 6 \r\nSistema de pulsaciÃ³n: Omron (20M) \r\nTipo de sensor', '1540561580-compragamer_Imganen_general_9699_Mouse_HyperX_Pulsefire_FPS_Pro_RGB_16_000DP.jpg', 2200, 41, '10'),
(58, 'Mouse HyperX Pulsefire Surge RGB', 'Especificaciones tÃ©cnicas: \r\n\r\nModelo: Pulsefire Surge RGB HX-MC002B\r\nMarca: HyperX\r\nErgonomÃ­a: SimÃ©trica\r\nSensor:Pixart PMW3389\r\nResoluciÃ³n:Hasta 16.000 DPI\r\nAjustes DPI:800 / 1600 / 3200 DPI\r\nVe', '1540561689-compragamer_Imganen_general_10467_Mouse_HyperX_Pulsefire_Surge_RGB.jpg', 1800, 21, '10'),
(59, 'Mouse Pad Logitech G440 Gaming	', 'ESPECIFICACIONES\r\nModelo: G440.\r\nDimesiones (Altura, Anchura y Profundidad): 280 mm x 340 mm x 3 mm.\r\nPeso: 229 g. (aprox.)\r\nColor: Negro.\r\nMaterial: Caucho,tela.', '1540561845-compragamer_Imganen_general_4588_Mousepad_Logitech_G440_Gaming.jpg', 650, 21, '10'),
(60, 'Auriculares HyperX Cloud Stinger Gaming Negro', 'Auriculares \r\nConductor:DinÃ¡mico, 50mm con imanes de neodimio \r\nTipo:Circumaural, Cerrado atrÃ¡s \r\nRespuesta frecuente:8Hz-23,000Hz \r\nImpedancia:30 O \r\nNivel de presiÃ³n de sonido:102 Â± 3dBSPL / mW ', '1540561955-compragamer_Imganen_general_9806_Auriculares_Microfono_Logitech_G433_Gaming_Black_7.1__PC___PS4___Xbox___Switch.jpg', 2300, 34, '10'),
(61, 'Mother ASUS PRIME A320M-K AM4 Ryzen 2da Gen Ready M-ATX', 'Socket\r\nAM4\r\nChipsets Principal\r\nAMD A320\r\nPlataforma\r\nAMD\r\nConector 24pines\r\n1\r\nConsumo\r\n45 w\r\nConectos CPU 4pines\r\n1\r\nWatts mÃ¡ximos para CPU\r\n140\r\nFactor\r\nM-ATX\r\nCantidad de slot DDR4\r\n2\r\nSalidas H', '1540562105-compragamer_Imganen_general_8651_Mother_Asus_A320M-K_PRIME_AM4_Ryzen_2da_Gen_Ready.jpg', 2600, 34, '4'),
(62, 'Mother ASUS TUF X470-PLUS GAMING ATX AM4', 'Socket\r\nNo, AM4\r\nChipsets Principal\r\nAMD X470\r\nPlataforma\r\nAMD\r\nConector 24pines\r\n1\r\nConsumo\r\n35 w\r\nConectos CPU 4pines\r\n1\r\nConector CPU 4pines Plus\r\n1\r\nWatts mÃ¡ximos para CPU\r\n105\r\nFactor\r\nATX\r\nCant', '1540562190-compragamer_Imganen_general_9004_Mother_ASUS_TUF_X470-PLUS_AM4.jpg', 7500, 30, '4'),
(63, 'Mother ASUS PRIME B450M-A AM4  Aura Sync', 'Socket\r\nAM4\r\nChipsets Principal\r\nAMD B450\r\nPlataforma\r\nAMD\r\nConector 24pines\r\n1\r\nConsumo\r\n35 w\r\nConectos CPU 4pines\r\n1\r\nConector CPU 4pines Plus\r\n1\r\nWatts mÃ¡ximos para CPU\r\n150\r\nFactor\r\nM-ATX\r\nCantid', '1540562284-compragamer_Imganen_general_9554_Mother_ASUS_PRIME_B450M-A_AM4_HDMI_M.2_USB_3.1_Aura_Sync.jpg', 4100, 13, '4'),
(64, 'Mother Asrock H110M-HDV R3.0 S1151  M-ATX  7ma GEN	', 'Socket\r\n1151\r\nChipsets Principal\r\nIntel H110\r\nPlataforma\r\nIntel\r\nConector 24pines\r\n1\r\nConsumo\r\n40 w\r\nConectos CPU 4pines\r\n1\r\nWatts mÃ¡ximos para CPU\r\n140\r\nFactor\r\nM-ATX\r\nCantidad de slot DDR4\r\n2\r\nSali', '1540562390-compragamer_Imganen_general_8564_Mother_Asrock_H110M-HDV_R3.0_S1151_DDR4_M-ATX_-_BIOS_7ma_GEN.jpg', 2600, 14, '4'),
(65, 'Mother Gigabyte GA-B360M ', 'Socket\r\nNo, 1151 8va\r\nChipsets Principal\r\nIntel B360\r\nPlataforma\r\nIntel\r\nConector 24pines\r\n1\r\nConsumo\r\n35 w\r\nConectos CPU 4pines\r\n1\r\nConector CPU 4pines Plus\r\n1\r\nWatts mÃ¡ximos para CPU\r\n95\r\nFactor\r\nM', '1540562490-compragamer_Imganen_general_9068_Mother_Gigabyte_GA-B360M_GAMING__HD.jpg', 3999, 12, '4'),
(66, 'Monitor Samsung 24\' Curvo LC24F390FHLX', 'Tipo de ilumunaciÃ³n\r\nLED\r\nPantalla Curva\r\nSÃ­\r\nPulgadas\r\n24 \'\r\nPulgadas Visibles\r\n23.5 \'\r\nResoluciÃ³n MÃ¡xima\r\n1920x1080\r\nMÃ¡xima frecuencia\r\n60 Hz\r\nCantidad de colores\r\n16.7 M\r\nTiempo de respuesta\r\n', '1540562592-compragamer_Imganen_general_8720_Monitor_Samsung__24___Curvo_LC24F390FHLX.jpg', 8500, 9, '9'),
(67, 'Monitor Zowie 24\" XL2411 DARK GREY 144Mhz', 'Tipo de ilumunaciÃ³n\r\nLED\r\nTipo de panel\r\nTN\r\nPulgadas\r\n24 \'\r\nPulgadas Visibles\r\n24 \'\r\nResoluciÃ³n MÃ¡xima\r\n1920x1080\r\nMÃ¡xima frecuencia\r\n144 Hz\r\nCantidad de colores\r\n16.8 M\r\nTiempo de respuesta\r\n1 m', '1540562673-compragamer_Imganen_general_8734_Monitor_Zowie_24__XL2411_DARK_GREY_144Mhz_1ms.jpg', 21000, 9, '9'),
(68, 'Monitor LG LED 27\' 27MP48HQ-P HDMI', 'Tipo de ilumunaciÃ³n\r\nLCD-LED\r\nTipo de panel\r\nIPS\r\nPulgadas\r\n27 \'\r\nPulgadas Visibles\r\n27 \'\r\nResoluciÃ³n MÃ¡xima\r\n1920x1080\r\nMÃ¡xima frecuencia\r\n60 Hz\r\nCantidad de colores\r\n16.7 M\r\nTiempo de respuesta\r', '1540562750-compragamer_Imganen_general_9586_Monitor_LG_LED_27___27MP48HQ-P_HDMI_5ms.jpg', 9989, 7, '9'),
(69, 'Kit AMD RYZEN 3 1200 + Mother Asus A320M-K PRIME AM4', '\r\n1 x Mother ASUS PRIME A320M-K AM4 Ryzen 2da Gen Ready M-ATX\r\n\r\n1 x Cpu AMD RYZEN 3 1200 3.4Ghz AM4 Wraith Stealth Cooler', '1540563031-compragamer_Imganen_general_0_Kit_AMD_RYZEN_3_1200___Mother_Asus_A320M-K_PRIME_AM4.jpg', 6100, 5, '4'),
(70, 'Kit AMD RYZEN 3 1200 + Mother Asus A320M-K PRIME AM4 + 4GB D', '\r\n1 x Mother ASUS PRIME A320M-K AM4 Ryzen 2da Gen Ready M-ATX\r\n\r\n1 x Cpu AMD RYZEN 3 1200 3.4Ghz AM4 Wraith Stealth Cooler\r\n\r\n1 x Memoria Team DDR4 4GB 2400Mhz T-Force Vulcan Red\r\n', '1540563115-compragamer_Imganen_general_0_Kit_AMD_RYZEN_3_1200___Mother_Asus_A320M-K_PRIME_AM4___4GB_DDR4.jpg', 7999, 7, '4'),
(71, 'Kit AMD RYZEN 3 1200 + Mother Asus A320M-K PRIME AM4 + 8GB D', '\r\n1 x Mother ASUS PRIME A320M-K AM4 Ryzen 2da Gen Ready M-ATX\r\n\r\n1 x Cpu AMD RYZEN 3 1200 3.4Ghz AM4 Wraith Stealth Cooler\r\n\r\n1 x Memoria Team DDR4 8GB 2400Mhz T-Force Vulcan Red', '1540563191-compragamer_Imganen_general_0_Kit_AMD_RYZEN_3_1200___Mother_Asus_A320M-K_PRIME_AM4___4GB_DDR4.jpg', 9800, 3, '4'),
(72, 'PC Battlebox Essential | GeForce GTX 1060 6GB + IntelÂ® Core', 'Especificaciones:\r\n- GeForce GTX 1060 6GB DDR5\r\n- Procesador Intel Core i5 8400 8va GeneraciÃ³n\r\n- Disco Duro 1TB Western Digital Blue\r\n- Disco Solido 120GB KINGSTON A400\r\n- Gabinete AZZA TITAN\r\n- Fue', '1540563510-battlebox1.jpg', 35000, 3, '14'),
(73, 'Pc Intel Pentium G5400 4GB DDR4 SSD 120GB', 'Componentes:\r\n\r\nProcesador IntelÂ® Pentiumâ„¢ G4560 3.30GHZ\r\nMother MSI 1151 H110M-PRO-VH\r\nMemoria 4GB DDR4 2400MHZ CRUCIAL\r\nDisco SSD 120GB A400 Kingston\r\nGabinete ATX DATAVISION + 500w\r\nTeclado, Par', '1540563579-compuoficina.jpg', 9980, 9, '12'),
(74, 'PC Gamer Intel Coreâ„¢ i3 8100 8GB DDR4 1TB GeForce GTX 1060', 'Componentes:\r\n\r\nCPU Intel Core i3 8100\r\nMother ASROCK 1151 H310M \r\nMemoria 8GB DDR4 2400MHz Crucial\r\nDisco RÃ­gido 1TB WD Caviar Blue\r\nVGA GEFORCE GTX 1060 3GB GDDR5 ZOTAC\r\nGabinete Sentey G18 + Fuent', '1540563651-gamerbox1.jpg', 27800, 4, '13'),
(75, 'GAMER BOX Extreme | Intel Core i7â„¢ ASUS 16GB DDR4 1TB Gefo', 'Procesador INTEL i7-8700\r\nMother   ASROCK H310\r\nMemoria 16GB DDR4 2400MHZ VALUE RAM (2 x 8GB)\r\nDisco RÃ­gido 1TB WD Caviar Blue\r\nPlaca de video GTX 1060 6GB DDR5 Zotac\r\nGabinete Viper Black RED Raidma', '1540563860-gamerbox.png', 49000, 2, '15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prodxventa`
--

CREATE TABLE `prodxventa` (
  `id_prodxventa` int(11) NOT NULL,
  `cant` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `prodxventa`
--

INSERT INTO `prodxventa` (`id_prodxventa`, `cant`, `id_venta`, `id_prod`) VALUES
(1, 1, 0, 14),
(2, 1, 0, 4),
(3, 1, 5, 37);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id_registro` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `calle` varchar(70) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `partido` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL,
  `tel` int(12) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `cod_ver` varchar(8) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id_registro`, `mail`, `password`, `nombre`, `apellido`, `calle`, `provincia`, `partido`, `localidad`, `cp`, `tel`, `dni`, `cod_ver`, `fecha`) VALUES
(1, 'marceloparamio99@gmail.com', 'an12', 'Elon', 'Musk', 'tesla 85', 'Capital Federal', 'palermo', 'caba', 1564, 85859898, '45121212', '3456c', '2026-10-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `fecha`, `id_usuario`, `total`) VALUES
(1, '2018-11-01', 1, 6000),
(2, '2018-11-01', 1, 36000),
(3, '2018-11-01', 1, 7000),
(4, '2018-11-01', 1, 1600),
(5, '2018-11-01', 1, 1600);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `prodxventa`
--
ALTER TABLE `prodxventa`
  ADD PRIMARY KEY (`id_prodxventa`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `prodxventa`
--
ALTER TABLE `prodxventa`
  MODIFY `id_prodxventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
