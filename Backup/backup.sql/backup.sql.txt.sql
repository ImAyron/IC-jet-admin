--
-- Arquivo gerado com SQLiteStudio v3.4.4 em sex set 15 12:17:27 2023
--
-- Codificação de texto usada: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Tabela: antenas
CREATE TABLE IF NOT EXISTS "antenas" ("id" integer not null primary key autoincrement, "local" varchar not null, "codigo" varchar not null, "created_at" datetime, "updated_at" datetime);

-- Tabela: failed_jobs
CREATE TABLE IF NOT EXISTS "failed_jobs" ("id" integer not null primary key autoincrement, "uuid" varchar not null, "connection" text not null, "queue" text not null, "payload" text not null, "exception" text not null, "failed_at" datetime default CURRENT_TIMESTAMP not null);

-- Tabela: items
CREATE TABLE IF NOT EXISTS "items" ("id" integer not null primary key autoincrement, "codigo" varchar not null, "descricao" varchar not null, "dataFab" date not null, "created_at" datetime, "updated_at" datetime);
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (1, '1', 'Blusa Privativo CTI (P)', '2023-08-28', '2023-08-28 09:30:44', '2023-08-28 09:30:44');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (2, '2', 'Blusa Privativo CTI (P)', '2023-08-28', '2023-08-28 09:32:13', '2023-08-28 09:32:13');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (3, '3', 'Blusa Privativo CTI (M)', '2023-08-28', '2023-08-28 09:33:16', '2023-08-28 09:33:16');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (4, '4', 'Blusa Privativo CTI (M)', '2023-08-28', '2023-08-28 09:34:38', '2023-08-28 09:34:38');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (5, '5', 'Blusa Privativo CTI (G)', '2023-08-28', '2023-08-28 09:35:48', '2023-08-28 09:35:48');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (6, '6', 'IM Ayron', '2023-08-30', '2023-08-30 08:36:45', '2023-08-30 08:36:45');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (7, '7', 'Blusa Privativo CTI (P)', '2023-09-04', '2023-09-04 09:07:53', '2023-09-04 09:07:53');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (8, '8', 'Blusa Privativo CTI (G)', '2023-09-04', '2023-09-04 09:09:44', '2023-09-04 09:09:44');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (9, '9', 'Blusa Privativo CTI (G)', '2023-09-04', '2023-09-04 09:12:35', '2023-09-04 09:12:35');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (10, '10', 'Blusa Privativo CTI (GG)', '2023-09-04', '2023-09-04 09:14:27', '2023-09-04 09:14:27');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (11, '11', 'Blusa Privativo CTI (P)', '2023-09-04', '2023-09-04 09:18:00', '2023-09-04 09:18:00');

-- Tabela: leituras
CREATE TABLE IF NOT EXISTS "leituras" ("id" integer not null primary key autoincrement, "tipo" text not null, "EPC" text not null, "Data" text not null, "company_id" text not null, "created_at" datetime, "updated_at" datetime);
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (159, 'Entrada', 'E401499801700100014BEC0F', '2023-09-06 06:53:33', 'CTI', '2023-09-06 06:53:33', '2023-09-06 06:53:33');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (160, 'Entrada', 'E28068900000400598D5F621', '2023-09-06 14:29:55', 'CTI', '2023-09-06 14:29:55', '2023-09-06 14:29:55');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (161, 'Saída', 'E28068900000400598D5F621', '2023-09-07 07:20:15', 'CTI', '2023-09-07 07:20:21', '2023-09-07 07:20:21');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (162, 'Entrada', 'E28068900000400598D5F621', '2023-09-07 07:20:15', 'CTI', '2023-09-07 07:20:21', '2023-09-07 07:20:21');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (163, 'Entrada', 'E28068900000400598D5F621', '2023-09-07 19:40:53', 'CTI', '2023-09-11 10:00:21', '2023-09-11 10:00:21');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (164, 'Entrada', 'AAA100002D9084C600001309', '2023-09-08 15:12:56', 'CTI', '2023-09-11 10:00:21', '2023-09-11 10:00:21');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (165, 'Entrada', 'AAA1000031C000EB000000D2', '2023-09-08 15:18:13', 'CTI', '2023-09-11 10:00:21', '2023-09-11 10:00:21');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (166, 'Saída', 'AAA1000031C000EB000000D2', '2023-09-08 15:28:48', 'CTI', '2023-09-11 10:00:21', '2023-09-11 10:00:21');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (167, 'Saída', 'AAA1000031C000EB000000D2', '2023-09-08 16:13:00', 'CTI', '2023-09-11 10:00:21', '2023-09-11 10:00:21');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (168, 'Saída', 'E28068900000400598D5F621', '2023-09-09 07:27:43', 'CTI', '2023-09-11 10:00:21', '2023-09-11 10:00:21');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (169, 'Saída', 'E28068900000400598D5F621', '2023-09-09 07:27:53', 'CTI', '2023-09-11 10:00:21', '2023-09-11 10:00:21');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (170, 'Entrada', '790865051952700000898447', '2023-09-11 18:54:36', 'CTI', '2023-09-11 19:18:51', '2023-09-11 19:18:51');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (171, 'Saída', '790865051952700000898447', '2023-09-11 19:10:24', 'CTI', '2023-09-11 19:18:51', '2023-09-11 19:18:51');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (172, 'Entrada', 'E2806890000040030B64AE2A', '2023-09-12 07:30:35', 'CTI', '2023-09-12 11:42:38', '2023-09-12 11:42:38');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (173, 'Entrada', 'E2806890000040030B64E05B', '2023-09-12 07:30:37', 'CTI', '2023-09-12 11:42:38', '2023-09-12 11:42:38');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (174, 'Entrada', 'E28068900000400598D7CDE2', '2023-09-12 07:30:37', 'CTI', '2023-09-12 11:42:38', '2023-09-12 11:42:38');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (175, 'Entrada', 'E28068900000400598D77559', '2023-09-12 07:30:38', 'CTI', '2023-09-12 11:42:38', '2023-09-12 11:42:38');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (176, 'Entrada', 'E28068900000400598D81922', '2023-09-12 07:30:38', 'CTI', '2023-09-12 11:42:38', '2023-09-12 11:42:38');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (177, 'Entrada', 'E28068900000400598D824EF', '2023-09-12 07:30:38', 'CTI', '2023-09-12 11:42:38', '2023-09-12 11:42:38');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (178, 'Entrada', 'E28068900000500598D72D24', '2023-09-12 07:30:38', 'CTI', '2023-09-12 11:42:38', '2023-09-12 11:42:38');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (179, 'Saída', 'E28068900000400598D81922', '2023-09-12 12:49:36', 'CTI', '2023-09-12 12:49:36', '2023-09-12 12:49:36');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (180, 'Saída', 'E28068900000500598D72D24', '2023-09-12 18:40:31', 'CTI', '2023-09-12 18:40:41', '2023-09-12 18:40:41');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (181, 'Entrada', 'E28068900000500598D72D24', '2023-09-12 18:40:31', 'CTI', '2023-09-12 18:40:41', '2023-09-12 18:40:41');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (182, 'Entrada', 'E28068900000500598D72D24', '2023-09-12 18:40:31', 'CTI', '2023-09-12 18:40:42', '2023-09-12 18:40:42');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (183, 'Saída', 'E28068900000400598D77559', '2023-09-12 19:28:04', 'CTI', '2023-09-12 19:28:04', '2023-09-12 19:28:04');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (184, 'Entrada', 'E28068900000400598D77559', '2023-09-12 19:28:04', 'CTI', '2023-09-12 19:28:04', '2023-09-12 19:28:04');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (185, 'Entrada', 'E28068900000500598D72D24', '2023-09-12 19:34:47', 'CTI', '2023-09-12 19:34:47', '2023-09-12 19:34:47');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (186, 'Entrada', 'E28068900000500598D64849', '2023-09-12 19:35:46', 'CTI', '2023-09-12 19:35:46', '2023-09-12 19:35:46');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (187, 'Entrada', 'E28068900000500598D5B522', '2023-09-12 19:42:18', 'CTI', '2023-09-12 19:42:19', '2023-09-12 19:42:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (188, 'Saída', 'E2806890000040030B64E05B', '2023-09-12 20:00:58', 'CTI', '2023-09-12 20:00:59', '2023-09-12 20:00:59');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (189, 'Entrada', 'E2806890000040030B64E05B', '2023-09-12 20:01:14', 'CTI', '2023-09-12 20:01:15', '2023-09-12 20:01:15');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (190, 'Saída', 'E2806890000040030B64E05B', '2023-09-12 20:33:39', 'CTI', '2023-09-12 20:33:40', '2023-09-12 20:33:40');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (191, 'Entrada', 'E2806890000040030B64E05B', '2023-09-12 20:34:44', 'CTI', '2023-09-12 20:34:44', '2023-09-12 20:34:44');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (192, 'Saída', 'E2806890000040030B64E05B', '2023-09-12 20:38:34', 'CTI', '2023-09-12 20:38:34', '2023-09-12 20:38:34');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (193, 'Saída', 'E28068900000500598D5B522', '2023-09-12 21:03:31', 'CTI', '2023-09-12 21:03:31', '2023-09-12 21:03:31');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (194, 'Entrada', 'E2806890000040030B64E05B', '2023-09-12 21:03:54', 'CTI', '2023-09-12 21:03:54', '2023-09-12 21:03:54');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (195, 'Saída', 'E28068900000500598D72D24', '2023-09-12 21:04:35', 'CTI', '2023-09-12 21:04:35', '2023-09-12 21:04:35');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (196, 'Saída', 'E2806890000040030B64E05B', '2023-09-12 21:11:54', 'CTI', '2023-09-12 21:11:54', '2023-09-12 21:11:54');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (197, 'Entrada', 'E2806890000040030B64E05B', '2023-09-12 21:12:46', 'CTI', '2023-09-12 21:12:46', '2023-09-12 21:12:46');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (198, 'Entrada', 'E28068900000500598D5B522', '2023-09-12 21:58:12', 'CTI', '2023-09-12 21:58:12', '2023-09-12 21:58:12');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (199, 'Saída', 'E28068900000500598D5B522', '2023-09-12 21:58:47', 'CTI', '2023-09-12 21:58:48', '2023-09-12 21:58:48');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (200, 'Entrada', 'E28068900000500598D5B522', '2023-09-12 22:07:35', 'CTI', '2023-09-12 22:07:35', '2023-09-12 22:07:35');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (201, 'Entrada', 'E28068900000400598D77559', '2023-09-12 23:03:30', 'CTI', '2023-09-12 23:03:30', '2023-09-12 23:03:30');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (202, 'Saída', 'E2806890000040030B64E05B', '2023-09-12 23:07:45', 'CTI', '2023-09-12 23:07:46', '2023-09-12 23:07:46');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (203, 'Entrada', 'E2806890000040030B64E05B', '2023-09-12 23:10:07', 'CTI', '2023-09-12 23:10:08', '2023-09-12 23:10:08');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (204, 'Saída', 'E28068900000400598D77559', '2023-09-12 23:14:38', 'CTI', '2023-09-12 23:14:38', '2023-09-12 23:14:38');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (205, 'Saída', 'E2806890000040030B64E05B', '2023-09-12 23:27:58', 'CTI', '2023-09-12 23:27:58', '2023-09-12 23:27:58');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (206, 'Entrada', 'E28068900000500598D72D24', '2023-09-12 23:49:38', 'CTI', '2023-09-12 23:49:38', '2023-09-12 23:49:38');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (207, 'Entrada', 'E2806890000040030B64E05B', '2023-09-12 23:56:42', 'CTI', '2023-09-12 23:56:42', '2023-09-12 23:56:42');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (208, 'Saída', 'E2806890000040030B64E05B', '2023-09-12 23:57:59', 'CTI', '2023-09-12 23:57:59', '2023-09-12 23:57:59');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (209, 'Entrada', 'E2806890000040030B64E05B', '2023-09-12 23:58:17', 'CTI', '2023-09-12 23:58:17', '2023-09-12 23:58:17');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (210, 'Saída', 'E28068900000500598D72D24', '2023-09-13 00:19:13', 'CTI', '2023-09-13 00:19:13', '2023-09-13 00:19:13');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (211, 'Saída', 'E2806890000040030B64E05B', '2023-09-13 00:19:50', 'CTI', '2023-09-13 00:19:50', '2023-09-13 00:19:50');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (212, 'Entrada', 'E2806890000040030B64E05B', '2023-09-13 00:33:42', 'CTI', '2023-09-13 00:33:43', '2023-09-13 00:33:43');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (213, 'Saída', 'E2806890000040030B64E05B', '2023-09-13 00:35:00', 'CTI', '2023-09-13 00:35:01', '2023-09-13 00:35:01');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (214, 'Entrada', 'E28068900000500598D72D24', '2023-09-13 00:53:06', 'CTI', '2023-09-13 00:53:08', '2023-09-13 00:53:08');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (215, 'Entrada', 'E2806890000040030B64E05B', '2023-09-13 00:53:07', 'CTI', '2023-09-13 00:53:08', '2023-09-13 00:53:08');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (216, 'Saída', 'E2806890000040030B64E05B', '2023-09-13 00:53:07', 'CTI', '2023-09-13 00:53:08', '2023-09-13 00:53:08');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (217, 'Saída', 'E2806890000040030B64E05B', '2023-09-13 00:54:58', 'CTI', '2023-09-13 00:54:59', '2023-09-13 00:54:59');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (218, 'Entrada', 'E2806890000040030B64E05B', '2023-09-13 02:12:26', 'CTI', '2023-09-13 02:12:28', '2023-09-13 02:12:28');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (219, 'Saída', 'E28068900000500598D5B522', '2023-09-13 04:45:29', 'CTI', '2023-09-13 04:45:31', '2023-09-13 04:45:31');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (220, 'Saída', 'E28068900000500598D72D24', '2023-09-13 05:16:21', 'CTI', '2023-09-13 05:16:22', '2023-09-13 05:16:22');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (221, 'Entrada', 'E28068900000500598D72D24', '2023-09-13 05:18:10', 'CTI', '2023-09-13 05:18:11', '2023-09-13 05:18:11');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (222, 'Saída', 'E28068900000500598D72D24', '2023-09-13 05:53:54', 'CTI', '2023-09-13 05:53:55', '2023-09-13 05:53:55');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (223, 'Entrada', 'E28068900000500598D72D24', '2023-09-13 05:54:06', 'CTI', '2023-09-13 05:54:07', '2023-09-13 05:54:07');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (224, 'Saída', 'E28068900000500598D72D24', '2023-09-13 06:02:54', 'CTI', '2023-09-13 06:02:55', '2023-09-13 06:02:55');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (225, 'Entrada', 'E28068900000500598D72D24', '2023-09-13 06:03:17', 'CTI', '2023-09-13 06:03:17', '2023-09-13 06:03:17');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (226, 'Entrada', 'E28068900000500598D5B522', '2023-09-13 06:32:35', 'CTI', '2023-09-13 06:32:37', '2023-09-13 06:32:37');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (227, 'Entrada', 'E28068900000400598D77559', '2023-09-13 08:41:03', 'CTI', '2023-09-13 08:41:04', '2023-09-13 08:41:04');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (228, 'Entrada', 'E28068900000400598D5F621', '2023-09-13 10:22:28', 'CTI', '2023-09-13 10:22:29', '2023-09-13 10:22:29');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (229, 'Saída', 'E28068900000400598D5F621', '2023-09-13 10:23:16', 'CTI', '2023-09-13 10:23:17', '2023-09-13 10:23:17');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (230, 'Entrada', 'E28068900000400598D5F621', '2023-09-13 11:18:11', 'CTI', '2023-09-13 11:18:19', '2023-09-13 11:18:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (231, 'Saída', 'E28068900000400598D5F621', '2023-09-13 11:18:11', 'CTI', '2023-09-13 11:18:19', '2023-09-13 11:18:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (232, 'Saída', 'E28068900000400598D5F621', '2023-09-13 12:17:14', 'CTI', '2023-09-13 12:17:14', '2023-09-13 12:17:14');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (233, 'Entrada', 'E28068900000400598D5F621', '2023-09-13 14:38:46', 'CTI', '2023-09-13 14:38:46', '2023-09-13 14:38:46');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (234, 'Saída', 'E28068900000400598D5F621', '2023-09-13 15:11:49', 'CTI', '2023-09-13 15:11:49', '2023-09-13 15:11:49');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (235, 'Entrada', 'E28068900000400598D5F621', '2023-09-13 15:34:49', 'CTI', '2023-09-13 15:34:50', '2023-09-13 15:34:50');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (236, 'Saída', 'E28068900000400598D5F621', '2023-09-13 16:25:52', 'CTI', '2023-09-13 16:25:52', '2023-09-13 16:25:52');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (237, 'Entrada', 'E28068900000400598D5F621', '2023-09-13 17:47:52', 'CTI', '2023-09-13 17:47:53', '2023-09-13 17:47:53');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (238, 'Saída', 'E28068900000400598D824EF', '2023-09-13 19:53:21', 'CTI', '2023-09-13 19:53:22', '2023-09-13 19:53:22');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (239, 'Saída', 'E28068900000400598D7CDE2', '2023-09-14 07:15:13', 'CTI', '2023-09-14 07:15:12', '2023-09-14 07:15:12');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (240, 'Entrada', 'E28068900000400598D7CDE2', '2023-09-14 10:03:49', 'CTI', '2023-09-14 10:03:48', '2023-09-14 10:03:48');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (241, 'Saída', 'E28068900000400598D7CDE2', '2023-09-14 14:03:16', 'CTI', '2023-09-14 14:03:14', '2023-09-14 14:03:14');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (242, 'Entrada', 'E28068900000400598D7CDE2', '2023-09-14 14:26:57', 'CTI', '2023-09-14 14:26:56', '2023-09-14 14:26:56');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (243, 'Saída', 'E28068900000400598D5F621', '2023-09-14 14:38:45', 'CTI', '2023-09-14 14:38:43', '2023-09-14 14:38:43');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (244, 'Entrada', 'E28068900000400598D824EF', '2023-09-14 14:38:45', 'CTI', '2023-09-14 14:38:43', '2023-09-14 14:38:43');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (245, 'Saída', 'E28068900000400598D7CDE2', '2023-09-14 17:25:07', 'CTI', '2023-09-14 17:25:05', '2023-09-14 17:25:05');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (246, 'Saída', 'E2806890000040030B64E05B', '2023-09-14 17:31:25', 'CTI', '2023-09-14 17:31:23', '2023-09-14 17:31:23');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (247, 'Entrada', 'E2806890000040030B64E05B', '2023-09-14 17:31:34', 'CTI', '2023-09-14 17:31:32', '2023-09-14 17:31:32');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (248, 'Saída', 'E28068900000400598D77559', '2023-09-14 17:31:34', 'CTI', '2023-09-14 17:31:32', '2023-09-14 17:31:32');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (249, 'Saída', 'E28068900000500598D72D24', '2023-09-14 17:31:36', 'CTI', '2023-09-14 17:31:34', '2023-09-14 17:31:34');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (250, 'Saída', 'E28068900000500598D5B522', '2023-09-14 17:31:36', 'CTI', '2023-09-14 17:31:34', '2023-09-14 17:31:34');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (251, 'Entrada', 'E28068900000400598D7CDE2', '2023-09-14 21:43:31', 'CTI', '2023-09-14 21:43:29', '2023-09-14 21:43:29');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (252, 'Saída', 'E28068900000400598D77559', '2023-09-15 08:39:15', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (253, 'Saída', 'E2806890000040030B64AE2A', '2023-09-15 08:58:39', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (254, 'Entrada', 'E2806890000040030B64AE2A', '2023-09-15 08:58:53', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (255, 'Entrada', 'E28068900000400598D77559', '2023-09-15 09:06:22', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (256, 'Saída', 'E28068900000400598D77559', '2023-09-15 09:39:44', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (257, 'Saída', 'E2806890000040030B64E05B', '2023-09-15 10:14:52', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (258, 'Entrada', 'E2806890000040030B64E05B', '2023-09-15 10:14:52', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (259, 'Entrada', 'E2806890000040030B64E05B', '2023-09-15 10:18:31', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (260, 'Entrada', 'E28068900000400598D77559', '2023-09-15 10:19:53', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (261, 'Saída', 'E28068900000400598D77559', '2023-09-15 10:22:21', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (262, 'Saída', 'E2806890000040030B64AE2A', '2023-09-15 11:25:40', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (263, 'Entrada', 'E2806890000040030B64AE2A', '2023-09-15 11:32:58', 'CTI', '2023-09-15 12:01:19', '2023-09-15 12:01:19');

-- Tabela: locals
CREATE TABLE IF NOT EXISTS "locals" ("id" integer not null primary key autoincrement, "created_at" datetime, "updated_at" datetime);

-- Tabela: migrations
CREATE TABLE IF NOT EXISTS "migrations" ("id" integer not null primary key autoincrement, "migration" varchar not null, "batch" integer not null);
INSERT INTO migrations (id, migration, batch) VALUES (10, '2021_10_25_233935_create_locals_table', 1);
INSERT INTO migrations (id, migration, batch) VALUES (14, '2021_10_25_234100_create_operacaos_table', 1);
INSERT INTO migrations (id, migration, batch) VALUES (15, '2022_01_11_185611_create_operations_table', 1);
INSERT INTO migrations (id, migration, batch) VALUES (134, '2014_10_12_000000_create_users_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (135, '2014_10_12_100000_create_password_resets_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (136, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (137, '2019_08_19_000000_create_failed_jobs_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (138, '2019_12_14_000001_create_personal_access_tokens_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (139, '2020_05_21_100000_create_teams_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (140, '2020_05_21_200000_create_team_user_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (141, '2020_05_21_300000_create_team_invitations_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (142, '2021_10_13_203700_create_sessions_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (143, '2021_10_25_234022_create_items_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (144, '2021_10_25_234040_create_tags_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (145, '2021_10_25_234050_create_antenas_table', 2);
INSERT INTO migrations (id, migration, batch) VALUES (146, '2022_12_17_230330_create_leituras_table', 2);

-- Tabela: operacaos
CREATE TABLE IF NOT EXISTS "operacaos" ("id" integer not null primary key autoincrement, "tipo" integer not null default 'saida', "antena_id" integer not null, "tag_id" integer not null, "user_id" integer not null, "created_at" datetime, "updated_at" datetime, foreign key("antena_id") references "antenas"("id"), foreign key("tag_id") references "tags"("id"), foreign key("user_id") references "users"("id"));

-- Tabela: operations
CREATE TABLE IF NOT EXISTS "operations" ("antena_id" integer not null, "tag_id" integer not null, "user_id" integer not null, "id" integer not null primary key autoincrement, "operations" text not null, "tipo" text not null, "antena" text not null, "funcionario" text not null default 'Deslogado', "created_at" datetime, "updated_at" datetime, foreign key("antena_id") references "antenas"("id"), foreign key("tag_id") references "tags"("id"), foreign key("user_id") references "users"("id"));

-- Tabela: password_resets
CREATE TABLE IF NOT EXISTS "password_resets" ("email" varchar not null, "token" varchar not null, "created_at" datetime);

-- Tabela: personal_access_tokens
CREATE TABLE IF NOT EXISTS "personal_access_tokens" ("id" integer not null primary key autoincrement, "tokenable_type" varchar not null, "tokenable_id" integer not null, "name" varchar not null, "token" varchar not null, "abilities" text, "last_used_at" datetime, "created_at" datetime, "updated_at" datetime);

-- Tabela: sessions
CREATE TABLE IF NOT EXISTS "sessions" ("id" varchar not null, "user_id" integer, "ip_address" varchar, "user_agent" text, "payload" text not null, "last_activity" integer not null, primary key ("id"));
INSERT INTO sessions (id, user_id, ip_address, user_agent, payload, last_activity) VALUES ('d6k33j0Flhd2BMycNgXBqC5CPk4YoRswuqc5Np2f', 1, '192.168.1.103', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRWdsVnVZMlRUSlloU01abG9MYnVvRjFTc25IWmJzaHdIODdWNnBCRCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDJJMGhzWFFHRVBjZVM2NHRqUzZuZy5XT2ZVRC5OcTB1QkJmeDlkbGJaa0YvTFdWaWV4VHhlIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMzoiaHR0cDovLzE5Mi4xNjguMS4xMDM6ODAwMC9sZWl0dXJhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkMkkwaHNYUUdFUGNlUzY0dGpTNm5nLldPZlVELk5xMHVCQmZ4OWRsYlprRi9MV1ZpZXhUeGUiO30=', 1694741140);
INSERT INTO sessions (id, user_id, ip_address, user_agent, payload, last_activity) VALUES ('uxiby3XNSTAuEgciaZKfpA7uEgBE49VOJhshzx00', 1, '192.168.1.103', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSzlsbERwQTBITmxiN2VPOWlkZDBVaU1WMm9LakpuMFJrbERZWkw4dyI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDJJMGhzWFFHRVBjZVM2NHRqUzZuZy5XT2ZVRC5OcTB1QkJmeDlkbGJaa0YvTFdWaWV4VHhlIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMzoiaHR0cDovLzE5Mi4xNjguMS4xMDM6ODAwMC9sZWl0dXJhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1694791046);

-- Tabela: tags
CREATE TABLE IF NOT EXISTS "tags" ("id" integer not null primary key autoincrement, "codigo" varchar not null, "item_id" integer not null, "created_at" datetime, "updated_at" datetime, "dataFab" date not null, foreign key("item_id") references "items"("id"));
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (1, 'E28068900000400598D824EF', 1, '2023-08-28 09:31:13', '2023-08-28 09:31:13', '2023-08-28 09:31:10');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (2, 'E28068900000400598D81922', 2, '2023-08-28 09:32:28', '2023-08-28 09:32:28', '2023-08-28 09:32:25');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (3, 'E28068900000400598D77559', 3, '2023-08-28 09:33:28', '2023-08-28 09:33:28', '2023-08-28 09:33:25');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (4, 'E28068900000400598D7CDE2', 4, '2023-08-28 09:35:15', '2023-08-28 09:35:15', '2023-08-28 09:35:12');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (5, 'E28068900000500598D72D24', 5, '2023-08-28 09:36:22', '2023-08-28 09:36:22', '2023-08-28 09:36:19');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (6, 'E28068900000400598D808F0', 6, '2023-08-30 08:36:23', '2023-08-30 08:37:26', '2023-08-30');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (7, 'E28068900000500598D5B522', 7, '2023-09-04 09:07:48', '2023-09-04 09:08:24', '2023-09-04');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (8, 'E28068900000500598D64849', 8, '2023-09-04 09:10:14', '2023-09-04 09:10:14', '2023-09-04 09:10:11');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (9, 'E28068900000400598D5F621', 9, '2023-09-04 09:12:54', '2023-09-04 09:12:54', '2023-09-04 09:12:49');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (10, 'E2806890000040030B64AE2A', 10, '2023-09-04 09:14:36', '2023-09-04 09:15:24', '2023-09-04');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (11, 'E2806890000040030B64E05B', 11, '2023-09-04 09:19:31', '2023-09-04 09:19:31', '2023-09-04 09:19:27');

-- Tabela: team_invitations
CREATE TABLE IF NOT EXISTS "team_invitations" ("id" integer not null primary key autoincrement, "team_id" integer not null, "email" varchar not null, "role" varchar, "created_at" datetime, "updated_at" datetime, foreign key("team_id") references "teams"("id") on delete cascade);

-- Tabela: team_user
CREATE TABLE IF NOT EXISTS "team_user" ("id" integer not null primary key autoincrement, "team_id" integer not null, "user_id" integer not null, "role" varchar, "created_at" datetime, "updated_at" datetime);

-- Tabela: teams
CREATE TABLE IF NOT EXISTS "teams" ("id" integer not null primary key autoincrement, "user_id" integer not null, "name" varchar not null, "personal_team" tinyint(1) not null, "created_at" datetime, "updated_at" datetime);
INSERT INTO teams (id, user_id, name, personal_team, created_at, updated_at) VALUES (1, 1, 'ayron''s Team', 1, '2023-08-28 09:29:51', '2023-08-28 09:29:51');

-- Tabela: users
CREATE TABLE IF NOT EXISTS "users" ("id" integer not null primary key autoincrement, "name" varchar not null, "email" varchar not null, "email_verified_at" datetime, "password" varchar not null, "remember_token" varchar, "profile" varchar check ("profile" in ('administrator', 'user')) not null default 'user', "current_team_id" integer, "profile_photo_path" varchar, "created_at" datetime, "updated_at" datetime, "two_factor_secret" text, "two_factor_recovery_codes" text);
INSERT INTO users (id, name, email, email_verified_at, password, remember_token, profile, current_team_id, profile_photo_path, created_at, updated_at, two_factor_secret, two_factor_recovery_codes) VALUES (1, 'ayron', 'ayronpaiva@outlook.com', NULL, '$2y$10$2I0hsXQGEPceS64tjS6ng.WOfUD.Nq0uBBfx9dlbZkF/LWViexTxe', 'DSMuWyA766pM8BJsfbUIYxK9CCLF9NHDZGoCHK6dtnoMiM5FLxoD8L66UGi5', 'administrator', NULL, NULL, '2023-08-28 09:29:51', '2023-08-28 09:29:51', NULL, NULL);

-- Índice: failed_jobs_uuid_unique
CREATE UNIQUE INDEX IF NOT EXISTS "failed_jobs_uuid_unique" on "failed_jobs" ("uuid");

-- Índice: password_resets_email_index
CREATE INDEX IF NOT EXISTS "password_resets_email_index" on "password_resets" ("email");

-- Índice: personal_access_tokens_token_unique
CREATE UNIQUE INDEX IF NOT EXISTS "personal_access_tokens_token_unique" on "personal_access_tokens" ("token");

-- Índice: personal_access_tokens_tokenable_type_tokenable_id_index
CREATE INDEX IF NOT EXISTS "personal_access_tokens_tokenable_type_tokenable_id_index" on "personal_access_tokens" ("tokenable_type", "tokenable_id");

-- Índice: sessions_last_activity_index
CREATE INDEX IF NOT EXISTS "sessions_last_activity_index" on "sessions" ("last_activity");

-- Índice: sessions_user_id_index
CREATE INDEX IF NOT EXISTS "sessions_user_id_index" on "sessions" ("user_id");

-- Índice: tags_codigo_unique
CREATE UNIQUE INDEX IF NOT EXISTS "tags_codigo_unique" on "tags" ("codigo");

-- Índice: team_invitations_team_id_email_unique
CREATE UNIQUE INDEX IF NOT EXISTS "team_invitations_team_id_email_unique" on "team_invitations" ("team_id", "email");

-- Índice: team_user_team_id_user_id_unique
CREATE UNIQUE INDEX IF NOT EXISTS "team_user_team_id_user_id_unique" on "team_user" ("team_id", "user_id");

-- Índice: teams_user_id_index
CREATE INDEX IF NOT EXISTS "teams_user_id_index" on "teams" ("user_id");

-- Índice: users_email_unique
CREATE UNIQUE INDEX IF NOT EXISTS "users_email_unique" on "users" ("email");

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
