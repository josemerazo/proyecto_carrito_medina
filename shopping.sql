-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2024 a las 01:29:19
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shopping`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-01-29 03:19:34', '2024-01-29 03:19:34'),
(2, 2, '2024-01-29 04:25:42', '2024-01-29 04:25:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_product`
--

CREATE TABLE `carrito_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `carrito_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_18_042517_create_products_table', 1),
(7, '2024_01_28_185223_carrito_user_table', 1),
(8, '2024_01_28_223012_create_productos_carrito_table', 2),
(9, '2024_01_29_004424_add_quantity_to_carrito_product_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `price` double NOT NULL,
  `shipping_cost` double NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `shipping_cost`, `description`, `category_id`, `brand_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Zucaritas', 'Zucaritas', 'Zucaritas', 4.79, 0.25, 'zucaritas', 1, 1, 'zucaritas.jpg', NULL, NULL),
(2, 'Chispahoy', 'Chispahoy', 'Chispahoy', 2.5, 0.25, 'Chispahoy', 2, 2, 'Chipsahoy.jpg', NULL, NULL),
(3, 'Nesquik', 'Nesquik', 'Nesquik', 3, 0.25, 'Nesquik', 1, 3, 'Nesquik.png', NULL, NULL),
(4, 'chocapic', 'chocapic', 'chocapic', 3.5, 0.25, 'chocapic', 1, 3, 'chocapic.jpg', NULL, NULL),
(5, 'Takis', 'Takis', 'Takis', 2.5, 0.25, 'takis', 2, 4, 'takis.jpeg', NULL, NULL),
(6, 'Doritos', 'Doritos', 'Doritos', 1.5, 0.25, 'Doritos', 2, 5, 'doritos.jpg', NULL, NULL),
(7, 'cheetos', 'cheetos', 'cheetos', 1.5, 0.25, 'cheetos', 2, 6, 'cheetos.webp', NULL, NULL),
(8, 'Ruffles', 'Ruffles', 'Ruffles', 1, 0.25, 'Ruffles', 2, 6, 'ruffles.webp', NULL, NULL),
(9, 'Coca cola', 'Coca cola', 'Coca cola', 3, 0.25, 'Coca cola', 4, 7, 'cocacola.jpg', NULL, NULL),
(10, 'Sprite', 'Sprite', 'Sprite', 0.99, 0.25, 'Sprite', 4, 4, 'sprite.webp', NULL, NULL),
(11, 'Fanta', 'Fanta', 'Fanta', 0.99, 0.25, 'Fanta', 4, 4, 'Fanta.webp', NULL, NULL),
(12, 'Fiora', 'Fiora', 'Fiora', 1.99, 0.25, 'Fiora', 4, 5, 'fiora.jpg', NULL, NULL),
(13, 'Leche la lechera', 'Leche la lechera', 'Leche la lechera', 1.6, 0.25, 'Leche la lechera', 3, 8, 'leche.webp', NULL, NULL),
(14, 'Leche deslactosada', 'Leche deslactosada', 'Leche deslactosada', 1.99, 0.25, 'Leche deslactosada', 3, 8, 'leche2.webp', NULL, NULL),
(15, 'leche chocolate', 'leche chocolate', 'leche chocolate', 1.67, 0.25, 'leche chocolate', 3, 5, 'leche3.jpg', NULL, NULL),
(16, 'leche toni', 'leche toni', 'leche toni', 1.79, 0.25, 'leche toni', 3, 5, 'leche4.webp', NULL, NULL),
(17, 'Jamon plumrose', 'Jamon plumrose', 'Jamon plumrose', 1.99, 0.25, 'Jamon plumrose', 5, 6, 'jamon.jpg', NULL, NULL),
(18, 'Mortadela Plumrose', 'Mortadela Plumrose', 'Mortadela Plumrose', 4.8, 0.25, 'Mortadela Plumrose', 5, 6, 'mortadela.jpg', NULL, NULL),
(19, 'pavo', 'pavo', 'pavo', 9.99, 0.25, 'pavo', 5, 6, 'pavo.jpg', NULL, NULL),
(20, 'Carne molida', 'Carne molida', 'Carne molida', 5.99, 0.25, 'Carne molida', 5, 7, 'carne.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jeremy Medina', 'jeremy123@gmail.com', NULL, '$2y$12$OQqKU8EpRE9bjLE1.QErx.UbQwbzfUSkJiRUgFTVpOY0sMftMK0TG', NULL, '2024-01-29 03:19:25', '2024-01-29 03:19:25'),
(2, 'Prueba prueba', 'prueba123@gmail.com', NULL, '$2y$12$FVpJFV/biewRnVEeBqt2HOfx7gvh5Z23eXfEcSZB78N8Xy2WB5Nau', NULL, '2024-01-29 04:25:35', '2024-01-29 04:25:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carritos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `carrito_product`
--
ALTER TABLE `carrito_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_carrito_producto_id_foreign` (`product_id`),
  ADD KEY `productos_carrito_carrito_id_foreign` (`carrito_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `carrito_product`
--
ALTER TABLE `carrito_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD CONSTRAINT `carritos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `carrito_product`
--
ALTER TABLE `carrito_product`
  ADD CONSTRAINT `productos_carrito_carrito_id_foreign` FOREIGN KEY (`carrito_id`) REFERENCES `carritos` (`id`),
  ADD CONSTRAINT `productos_carrito_producto_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
