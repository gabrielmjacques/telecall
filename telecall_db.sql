SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `telecall_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `telecall_db`;

CREATE TABLE `master_users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `cel` varchar(19) NOT NULL,
  `tel_fixo` varchar(18) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `login` varchar(6) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `master_users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `master_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
