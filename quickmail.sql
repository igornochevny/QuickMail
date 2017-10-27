-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 27 2017 г., 19:11
-- Версия сервера: 5.6.34
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `quickmail`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bunches`
--

CREATE TABLE `bunches` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `bunches`
--

INSERT INTO `bunches` (`id`, `user_id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`) VALUES
(1, 3, 'rewrwerwe', 'werwerwerwerw', '2017-10-26 18:03:58', '2017-10-26 18:03:58', NULL, 0, 0),
(2, 1, 'IgorNocha', 'Bunch for Igor', '2017-10-27 06:57:08', '2017-10-27 06:57:08', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_id` int(10) UNSIGNED DEFAULT NULL,
  `bunch_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `campaigns`
--

INSERT INTO `campaigns` (`id`, `name`, `template_id`, `bunch_id`, `description`, `created_at`, `updated_at`, `user_id`, `deleted_at`, `created_by`, `updated_by`) VALUES
(1, 'dsadsadasdas', 1, 1, 'dasdsadasda', '2017-10-26 18:05:46', '2017-10-26 18:05:46', 3, NULL, 0, 0),
(2, 'ewqeqweqw', 2, 1, 'eqweqweqw', '2017-10-26 18:07:39', '2017-10-26 18:07:39', 3, NULL, 0, 0),
(3, 'Olegggg', 6, 1, 'dadasdsadasd', '2017-10-27 07:36:55', '2017-10-27 07:36:55', 3, NULL, 3, 3),
(4, 'IgorNocha', 5, 2, 'dsakdlsakdlsakdlsada', '2017-10-27 08:13:39', '2017-10-27 08:13:39', 1, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2017_10_17_133348_create_campaigns_table', 3),
(4, '2017_10_17_133438_create_bunches_table', 3),
(8, '2017_10_22_102624_AddTemplatesUserTable', 7),
(9, '2017_10_22_103301_AddBunchesUserTable', 8),
(10, '2017_10_22_104811_create_campaigns_table', 9),
(11, '2017_10_22_133800_create_campaigns_table', 10),
(21, '2017_10_12_202429_create_templates_table', 11),
(22, '2017_10_26_205937_create_templates_table', 12),
(23, '2017_10_26_210054_create_bunches_table', 13),
(24, '2017_10_26_210147_create_campaigns_table', 14),
(25, '2017_10_26_210251_create_subscribers_table', 15),
(26, '2017_10_26_212139_template_created_by_table', 16),
(27, '2017_10_27_094716_bunch_created_by_table', 17),
(28, '2017_10_27_103023_campaign_create_by_table', 18);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `bunch_id` int(10) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subscribers`
--

INSERT INTO `subscribers` (`id`, `bunch_id`, `first_name`, `last_name`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'ewqeqweqw', 'qweqweqweq', 'qweqweq@mail.ru', '2017-10-26 18:05:31', '2017-10-26 18:05:31', NULL),
(2, 2, 'Igor', 'Nocha', 'igornochevnyi@mail.ru', '2017-10-27 06:57:42', '2017-10-27 08:58:45', NULL),
(3, 2, 'dsadsadas', 'sadasdasdad', 'igornochevny00@mail.ru', '2017-10-27 08:51:47', '2017-10-27 09:08:37', '2017-10-27 09:08:37'),
(4, 2, 'dasdasd', 'dsadasda', 'igornochevny00@mail.ru', '2017-10-27 12:49:46', '2017-10-27 12:49:46', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `templates`
--

CREATE TABLE `templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `templates`
--

INSERT INTO `templates` (`id`, `user_id`, `name`, `content`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`) VALUES
(1, 3, 'ewqeqweqweqweqweqweqe', '<p>rwerwerwerwe</p>', '2017-10-26 18:04:15', '2017-10-26 19:10:51', '2017-10-26 19:10:51', 0, 0),
(2, 3, 'ewqeq', '<p>wewqeqweqwe</p>', '2017-10-26 18:07:20', '2017-10-26 19:10:48', '2017-10-26 19:10:48', 0, 0),
(3, 3, 'eqweq', '<p>eqweqweqweqw</p>', '2017-10-26 19:06:39', '2017-10-26 19:10:45', '2017-10-26 19:10:45', 3, 3),
(4, 1, 'dsadadsada', '<p>dasdsadasdsadsad</p>', '2017-10-26 19:07:17', '2017-10-26 19:10:43', '2017-10-26 19:10:43', 1, 1),
(5, 1, 'IgorN', '<p><em>Template for Igor</em></p>', '2017-10-26 19:11:23', '2017-10-27 06:42:41', NULL, 1, 1),
(6, 3, 'OlegO', '<p>Template for Oleg</p>', '2017-10-27 06:13:50', '2017-10-27 06:13:50', NULL, 3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'igor', 'igornochevny@gmail.com', '$2y$10$RjPsfgyf7WAKLxtl6mm/Te/kvVhH9quG3Q6BxFCOLtOYLtrrviita', 'hsPNSSKGk5Yod6TZrLGTyyxYeJv6VIqrhXEhH4HWIIi9iMnpNuniSaATTW4l', '2017-10-12 17:27:09', '2017-10-12 17:27:09'),
(2, 'oleg', 'privet@gmail.com', '$2y$10$.JWEq5nJFCCOUpj2ojngsOE2/cKi3dX3R1uV1LOBs4Y6r62kxom3y', '3Wkr2h94PWyfk8Z2GyKLbPZgOahvFJbv4BzqBJeNuuRKY7kVMsIBm5HzqD2l', '2017-10-25 17:07:54', '2017-10-25 17:07:54'),
(3, 'dfdsfsdfsdfs', 'oleg@mail.ru', '$2y$10$.IzCbLAbVSghoZmW2d7n5ufWGk/tn/zsSDHdi6LU25hW.UrLGNx0a', 'mMHAox1L8jYJplrHikuwVqsykT83zFb0ULIeR9T0L6eLgQLguiWLfUOOBWzd', '2017-10-25 17:16:27', '2017-10-25 17:16:27');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bunches`
--
ALTER TABLE `bunches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bunches_user_id_foreign` (`user_id`),
  ADD KEY `bunches_created_by_index` (`created_by`),
  ADD KEY `bunches_updated_by_index` (`updated_by`);

--
-- Индексы таблицы `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaigns_user_id_foreign` (`user_id`),
  ADD KEY `campaigns_template_id_foreign` (`template_id`),
  ADD KEY `campaigns_bunch_id_foreign` (`bunch_id`),
  ADD KEY `campaigns_created_by_index` (`created_by`),
  ADD KEY `campaigns_updated_by_index` (`updated_by`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscribers_bunch_id_foreign` (`bunch_id`);

--
-- Индексы таблицы `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `templates_user_id_foreign` (`user_id`),
  ADD KEY `templates_created_by_index` (`created_by`),
  ADD KEY `templates_updated_by_index` (`updated_by`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bunches`
--
ALTER TABLE `bunches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bunches`
--
ALTER TABLE `bunches`
  ADD CONSTRAINT `bunches_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `campaigns_bunch_id_foreign` FOREIGN KEY (`bunch_id`) REFERENCES `bunches` (`id`),
  ADD CONSTRAINT `campaigns_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`),
  ADD CONSTRAINT `campaigns_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD CONSTRAINT `subscribers_bunch_id_foreign` FOREIGN KEY (`bunch_id`) REFERENCES `bunches` (`id`);

--
-- Ограничения внешнего ключа таблицы `templates`
--
ALTER TABLE `templates`
  ADD CONSTRAINT `templates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
