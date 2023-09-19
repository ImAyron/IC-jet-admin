--
-- Arquivo gerado com SQLiteStudio v3.4.4 em ter set 19 12:17:35 2023
--
-- Codificação de texto usada: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Tabela: antenas
CREATE TABLE "antenas" ("id" integer not null primary key autoincrement, "local" varchar not null, "codigo" varchar not null, "created_at" datetime, "updated_at" datetime);

-- Tabela: failed_jobs
CREATE TABLE "failed_jobs" ("id" integer not null primary key autoincrement, "uuid" varchar not null, "connection" text not null, "queue" text not null, "payload" text not null, "exception" text not null, "failed_at" datetime default CURRENT_TIMESTAMP not null);

-- Tabela: items
CREATE TABLE "items" ("id" integer not null primary key autoincrement, "codigo" varchar not null, "descricao" varchar not null, "dataFab" date not null, "created_at" datetime, "updated_at" datetime);
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
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (12, '12', 'Blusa Privativo CTI (EXG) 11', '2023-09-19', '2023-09-19 10:34:27', '2023-09-19 10:34:27');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (13, '13', 'Blusa Privativo CTI (GG)-12', '2023-09-19', '2023-09-19 10:35:08', '2023-09-19 10:35:08');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (14, '14', 'Blusa Privativo CTI (GG)-13', '2023-09-19', '2023-09-19 10:35:36', '2023-09-19 10:35:36');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (15, '15', 'Blusa Privativo CTI (P)-14', '2023-09-19', '2023-09-19 10:35:59', '2023-09-19 10:35:59');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (16, '16', 'Blusa Privativo CTI (GG)-15', '2023-09-19', '2023-09-19 10:36:27', '2023-09-19 10:36:27');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (17, '17', 'Blusa Privativo CTI (G)-16', '2023-09-19', '2023-09-19 10:36:49', '2023-09-19 10:38:32');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (18, '18', 'Blusa Privativo CTI (P)-17', '2023-09-19', '2023-09-19 10:37:41', '2023-09-19 10:37:41');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (19, '19', 'Blusa Privativo CTI (m)-18', '2023-09-19', '2023-09-19 10:39:05', '2023-09-19 10:39:05');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (20, '20', 'Blusa Privativo CTI (G)-19', '2023-09-19', '2023-09-19 10:39:42', '2023-09-19 10:39:42');
INSERT INTO items (id, codigo, descricao, dataFab, created_at, updated_at) VALUES (21, '21', 'Blusa Privativo CTI (G)-20', '2023-09-19', '2023-09-19 10:40:05', '2023-09-19 10:40:05');

-- Tabela: leituras
CREATE TABLE "leituras" ("id" integer not null primary key autoincrement, "tipo" text not null, "EPC" text not null, "Data" text not null, "company_id" text not null, "created_at" datetime, "updated_at" datetime);
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
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (264, 'Saída', 'E2806890000040030B64AE2A', '2023-09-15 13:56:33', 'CTI', '2023-09-15 13:56:40', '2023-09-15 13:56:40');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (265, 'Saída', 'E2806890000040030B64E05B', '2023-09-15 14:09:01', 'CTI', '2023-09-15 14:09:09', '2023-09-15 14:09:09');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (266, 'Entrada', 'E28068900000400598D77559', '2023-09-15 14:09:02', 'CTI', '2023-09-15 14:09:09', '2023-09-15 14:09:09');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (267, 'Entrada', 'E2806890000040030B64AE2A', '2023-09-15 14:09:08', 'CTI', '2023-09-15 14:09:16', '2023-09-15 14:09:16');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (268, 'Entrada', 'E2806890000040030B64E05B', '2023-09-15 14:12:08', 'CTI', '2023-09-15 14:12:16', '2023-09-15 14:12:16');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (269, 'Saída', 'E2806890000040030B64AE2A', '2023-09-15 14:12:29', 'CTI', '2023-09-15 14:12:37', '2023-09-15 14:12:37');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (270, 'Entrada', 'E2806890000040030B64AE2A', '2023-09-15 14:12:53', 'CTI', '2023-09-15 14:13:00', '2023-09-15 14:13:00');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (271, 'Saída', 'E2806890000040030B64AE2A', '2023-09-15 14:15:29', 'CTI', '2023-09-15 14:15:37', '2023-09-15 14:15:37');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (272, 'Saída', 'E28068900000400598D7CDE2', '2023-09-15 15:17:01', 'CTI', '2023-09-15 15:17:16', '2023-09-15 15:17:16');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (273, 'Entrada', 'E28068900000400598D7CDE2', '2023-09-15 15:17:01', 'CTI', '2023-09-15 15:17:17', '2023-09-15 15:17:17');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (274, 'Entrada', 'E2806890000040030B64AE2A', '2023-09-15 15:17:16', 'CTI', '2023-09-15 15:17:23', '2023-09-15 15:17:23');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (275, 'Saída', 'E2806890000040030B64AE2A', '2023-09-15 15:27:10', 'CTI', '2023-09-15 15:27:17', '2023-09-15 15:27:17');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (276, 'Entrada', 'E2806890000040030B64AE2A', '2023-09-15 15:57:23', 'CTI', '2023-09-15 15:57:30', '2023-09-15 15:57:30');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (277, 'Saída', 'E2806890000040030B64AE2A', '2023-09-15 17:10:52', 'CTI', '2023-09-15 17:10:59', '2023-09-15 17:10:59');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (278, 'Entrada', 'E2806890000040030B64AE2A', '2023-09-15 18:07:00', 'CTI', '2023-09-15 18:07:08', '2023-09-15 18:07:08');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (279, 'Saída', 'E28068900000500598D64849', '2023-09-15 19:39:33', 'CTI', '2023-09-15 19:39:49', '2023-09-15 19:39:49');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (280, 'Entrada', 'E28068900000500598D64849', '2023-09-15 19:39:33', 'CTI', '2023-09-15 19:39:50', '2023-09-15 19:39:50');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (281, 'Entrada', 'E28068900000500598D5B522', '2023-09-15 22:16:05', 'CTI', '2023-09-15 22:16:11', '2023-09-15 22:16:11');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (282, 'Saída', 'E28068900000500598D5B522', '2023-09-15 22:50:46', 'CTI', '2023-09-15 22:50:52', '2023-09-15 22:50:52');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (283, 'Entrada', 'E28068900000500598D5B522', '2023-09-16 00:18:26', 'CTI', '2023-09-16 00:18:32', '2023-09-16 00:18:32');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (284, 'Entrada', 'E28068900000400598D808F0', '2023-09-18 10:30:10', 'CTI', '2023-09-18 10:30:13', '2023-09-18 10:30:13');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (285, 'Saída', 'E28068900000400598D808F0', '2023-09-18 10:33:32', 'CTI', '2023-09-18 10:33:35', '2023-09-18 10:33:35');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (300, 'Entrada', 'E28068900000400598D808F0', '2023-09-18 10:44:20', 'CTI', '2023-09-18 10:44:23', '2023-09-18 10:44:23');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (301, 'Saída', 'E28068900000400598D808F0', '2023-09-18 10:52:27', 'CTI', '2023-09-18 10:52:31', '2023-09-18 10:52:31');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (302, 'Entrada', 'E28068900000400598D808F0', '2023-09-18 10:52:27', 'CTI', '2023-09-18 10:52:31', '2023-09-18 10:52:31');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (303, 'Entrada', 'E28068900000400598D808F0', '2023-09-18 10:54:03', 'CTI', '2023-09-18 10:54:07', '2023-09-18 10:54:07');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (304, 'Entrada', '300F4F573AD001C0C46C23BE', '2023-09-18 14:11:07', 'CTI', '2023-09-18 14:11:18', '2023-09-18 14:11:18');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (305, 'Saída', 'E2806890000040030B64E05B', '2023-09-18 22:56:35', 'CTI', '2023-09-19 01:20:36', '2023-09-19 01:20:36');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (306, 'Entrada', 'E28068900000500598D72D24', '2023-09-18 23:00:12', 'CTI', '2023-09-19 01:20:36', '2023-09-19 01:20:36');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (307, 'Entrada', 'E2806890000040030B64E05B', '2023-09-19 04:00:59', 'CTI', '2023-09-19 04:01:09', '2023-09-19 04:01:09');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (308, 'Saída', 'E2806890000040030B64E05B', '2023-09-19 05:54:00', 'CTI', '2023-09-19 05:54:11', '2023-09-19 05:54:11');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (309, 'Saída', 'E28068900000500598D72D24', '2023-09-19 06:40:07', 'CTI', '2023-09-19 06:40:17', '2023-09-19 06:40:17');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (310, 'Entrada', 'E2806890000040030B64E05B', '2023-09-19 09:32:43', 'CTI', '2023-09-19 09:32:52', '2023-09-19 09:32:52');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (311, 'Saída', 'E28068900000400598D808F0', '2023-09-19 10:32:30', 'CTI', '2023-09-19 10:32:40', '2023-09-19 10:32:40');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (312, 'Entrada', 'E28068900000400598D8192B', '2023-09-19 10:32:40', 'CTI', '2023-09-19 10:32:50', '2023-09-19 10:32:50');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (313, 'Saída', 'E28068900000400598D8192B', '2023-09-19 10:37:02', 'CTI', '2023-09-19 10:37:11', '2023-09-19 10:37:11');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (314, 'Entrada', 'E28068900000400598D8192B', '2023-09-19 10:40:17', 'CTI', '2023-09-19 10:40:26', '2023-09-19 10:40:26');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (315, 'Entrada', 'E28068900000400598D808F0', '2023-09-19 10:40:24', 'CTI', '2023-09-19 10:40:34', '2023-09-19 10:40:34');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (316, 'Saída', 'E28068900000400598D8192B', '2023-09-19 10:40:37', 'CTI', '2023-09-19 10:40:46', '2023-09-19 10:40:46');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (317, 'Entrada', 'E28068900000400598D61106', '2023-09-19 10:41:00', 'CTI', '2023-09-19 10:41:10', '2023-09-19 10:41:10');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (318, 'Saída', 'E28068900000400598D808F0', '2023-09-19 10:41:01', 'CTI', '2023-09-19 10:41:10', '2023-09-19 10:41:10');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (319, 'Entrada', 'E28068900000500598D7319E', '2023-09-19 10:41:01', 'CTI', '2023-09-19 10:41:10', '2023-09-19 10:41:10');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (320, 'Entrada', 'E2806890000050030B649D63', '2023-09-19 10:41:01', 'CTI', '2023-09-19 10:41:10', '2023-09-19 10:41:10');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (321, 'Entrada', 'E28068900000500598D788D7', '2023-09-19 10:41:01', 'CTI', '2023-09-19 10:41:10', '2023-09-19 10:41:10');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (322, 'Entrada', 'E2806890000040030B64CE64', '2023-09-19 10:41:08', 'CTI', '2023-09-19 10:41:18', '2023-09-19 10:41:18');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (323, 'Entrada', 'E28068900000500598D5D1DA', '2023-09-19 10:41:28', 'CTI', '2023-09-19 10:41:38', '2023-09-19 10:41:38');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (324, 'Entrada', 'E28068900000400598D808F0', '2023-09-19 10:41:41', 'CTI', '2023-09-19 10:41:50', '2023-09-19 10:41:50');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (325, 'Entrada', 'E28068900000400598D8192B', '2023-09-19 10:59:27', 'CTI', '2023-09-19 10:59:32', '2023-09-19 10:59:32');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (326, 'Saída', 'E28068900000400598D8192B', '2023-09-19 11:00:17', 'CTI', '2023-09-19 11:00:22', '2023-09-19 11:00:22');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (327, 'Entrada', 'E28068900000500598D75060', '2023-09-19 11:00:36', 'CTI', '2023-09-19 11:00:40', '2023-09-19 11:00:40');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (328, 'Saída', 'E2806890000040030B64CE64', '2023-09-19 11:01:16', 'CTI', '2023-09-19 11:01:20', '2023-09-19 11:01:20');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (329, 'Saída', 'E28068900000500598D75060', '2023-09-19 11:01:17', 'CTI', '2023-09-19 11:01:20', '2023-09-19 11:01:20');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (330, 'Entrada', 'E28068900000400598D8192B', '2023-09-19 11:01:18', 'CTI', '2023-09-19 11:01:22', '2023-09-19 11:01:22');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (331, 'Saída', 'E28068900000400598D61106', '2023-09-19 11:01:18', 'CTI', '2023-09-19 11:01:22', '2023-09-19 11:01:22');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (332, 'Saída', 'E28068900000400598D808F0', '2023-09-19 11:01:19', 'CTI', '2023-09-19 11:01:22', '2023-09-19 11:01:22');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (333, 'Entrada', 'E28068900000400598D808F0', '2023-09-19 11:01:57', 'CTI', '2023-09-19 11:02:01', '2023-09-19 11:02:01');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (334, 'Entrada', 'E2806890000050030B649D63', '2023-09-19 11:02:11', 'CTI', '2023-09-19 11:02:15', '2023-09-19 11:02:15');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (335, 'Saída', 'E28068900000400598D8192B', '2023-09-19 11:02:11', 'CTI', '2023-09-19 11:02:15', '2023-09-19 11:02:15');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (336, 'Entrada', 'E2806890000040030B64CE64', '2023-09-19 11:02:13', 'CTI', '2023-09-19 11:02:17', '2023-09-19 11:02:17');
INSERT INTO leituras (id, tipo, EPC, Data, company_id, created_at, updated_at) VALUES (337, 'Entrada', 'E28068900000500598D84D3A', '2023-09-19 11:02:17', 'CTI', '2023-09-19 11:02:21', '2023-09-19 11:02:21');

-- Tabela: locals
CREATE TABLE "locals" ("id" integer not null primary key autoincrement, "created_at" datetime, "updated_at" datetime);

-- Tabela: migrations
CREATE TABLE "migrations" ("id" integer not null primary key autoincrement, "migration" varchar not null, "batch" integer not null);
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
CREATE TABLE "operacaos" ("id" integer not null primary key autoincrement, "tipo" integer not null default 'saida', "antena_id" integer not null, "tag_id" integer not null, "user_id" integer not null, "created_at" datetime, "updated_at" datetime, foreign key("antena_id") references "antenas"("id"), foreign key("tag_id") references "tags"("id"), foreign key("user_id") references "users"("id"));

-- Tabela: operations
CREATE TABLE "operations" ("antena_id" integer not null, "tag_id" integer not null, "user_id" integer not null, "id" integer not null primary key autoincrement, "operations" text not null, "tipo" text not null, "antena" text not null, "funcionario" text not null default 'Deslogado', "created_at" datetime, "updated_at" datetime, foreign key("antena_id") references "antenas"("id"), foreign key("tag_id") references "tags"("id"), foreign key("user_id") references "users"("id"));

-- Tabela: password_resets
CREATE TABLE "password_resets" ("email" varchar not null, "token" varchar not null, "created_at" datetime);

-- Tabela: personal_access_tokens
CREATE TABLE "personal_access_tokens" ("id" integer not null primary key autoincrement, "tokenable_type" varchar not null, "tokenable_id" integer not null, "name" varchar not null, "token" varchar not null, "abilities" text, "last_used_at" datetime, "created_at" datetime, "updated_at" datetime);

-- Tabela: sessions
CREATE TABLE "sessions" ("id" varchar not null, "user_id" integer, "ip_address" varchar, "user_agent" text, "payload" text not null, "last_activity" integer not null, primary key ("id"));
INSERT INTO sessions (id, user_id, ip_address, user_agent, payload, last_activity) VALUES ('P9NyURjE6yH9jbH8FoPWzfx019HZbrORFbJ6yLA1', 1, '192.168.1.104', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZHp0M0IzSWlHcldkNzRtbU1pQ3V4SWN6TXpSVG9XeDJMbzNPcURjTCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDJJMGhzWFFHRVBjZVM2NHRqUzZuZy5XT2ZVRC5OcTB1QkJmeDlkbGJaa0YvTFdWaWV4VHhlIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1NDoiaHR0cDovLzE5Mi4xNjguMS4xMDQ6ODAwMC90YWcvRTI4MDY4OTAwMDAwNTAwNTk4RDg0RDNBIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkMkkwaHNYUUdFUGNlUzY0dGpTNm5nLldPZlVELk5xMHVCQmZ4OWRsYlprRi9MV1ZpZXhUeGUiO30=', 1695136555);

-- Tabela: tags
CREATE TABLE "tags" ("id" integer not null primary key autoincrement, "codigo" varchar not null, "item_id" integer not null, "created_at" datetime, "updated_at" datetime, "dataFab" date not null, foreign key("item_id") references "items"("id"));
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
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (14, 'E28068900000500598D5D1DA', 12, '2023-09-19 10:45:07', '2023-09-19 10:45:26', '2023-09-19');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (15, 'E28068900000500598D788D7', 13, '2023-09-19 10:45:49', '2023-09-19 10:46:51', '2023-09-19');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (16, 'E28068900000500598D7319E', 14, '2023-09-19 10:47:42', '2023-09-19 10:48:15', '2023-09-19');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (17, 'E2806890000050030B649D63', 15, '2023-09-19 10:49:44', '2023-09-19 10:50:06', '2023-09-19');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (18, 'E28068900000500598D84D3A', 16, '2023-09-19 10:50:29', '2023-09-19 10:51:11', '2023-09-19');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (19, 'E28068900000400598D661A1', 17, '2023-09-19 10:51:27', '2023-09-19 10:51:53', '2023-09-19');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (20, 'E28068900000400598D61106', 18, '2023-09-19 10:52:11', '2023-09-19 10:52:46', '2023-09-19');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (21, 'E28068900000500598D75060', 19, '2023-09-19 10:53:03', '2023-09-19 10:53:20', '2023-09-19');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (22, 'E28068900000400598D8192B', 21, '2023-09-19 10:53:07', '2023-09-19 11:00:08', '2023-09-19');
INSERT INTO tags (id, codigo, item_id, created_at, updated_at, dataFab) VALUES (23, 'E2806890000040030B64CE64', 20, '2023-09-19 10:55:32', '2023-09-19 10:57:58', '2023-09-19');

-- Tabela: team_invitations
CREATE TABLE "team_invitations" ("id" integer not null primary key autoincrement, "team_id" integer not null, "email" varchar not null, "role" varchar, "created_at" datetime, "updated_at" datetime, foreign key("team_id") references "teams"("id") on delete cascade);

-- Tabela: team_user
CREATE TABLE "team_user" ("id" integer not null primary key autoincrement, "team_id" integer not null, "user_id" integer not null, "role" varchar, "created_at" datetime, "updated_at" datetime);

-- Tabela: teams
CREATE TABLE "teams" ("id" integer not null primary key autoincrement, "user_id" integer not null, "name" varchar not null, "personal_team" tinyint(1) not null, "created_at" datetime, "updated_at" datetime);
INSERT INTO teams (id, user_id, name, personal_team, created_at, updated_at) VALUES (1, 1, 'ayron''s Team', 1, '2023-08-28 09:29:51', '2023-08-28 09:29:51');

-- Tabela: users
CREATE TABLE "users" ("id" integer not null primary key autoincrement, "name" varchar not null, "email" varchar not null, "email_verified_at" datetime, "password" varchar not null, "remember_token" varchar, "profile" varchar check ("profile" in ('administrator', 'user')) not null default 'user', "current_team_id" integer, "profile_photo_path" varchar, "created_at" datetime, "updated_at" datetime, "two_factor_secret" text, "two_factor_recovery_codes" text);
INSERT INTO users (id, name, email, email_verified_at, password, remember_token, profile, current_team_id, profile_photo_path, created_at, updated_at, two_factor_secret, two_factor_recovery_codes) VALUES (1, 'ayron', 'ayronpaiva@outlook.com', NULL, '$2y$10$2I0hsXQGEPceS64tjS6ng.WOfUD.Nq0uBBfx9dlbZkF/LWViexTxe', 'DSMuWyA766pM8BJsfbUIYxK9CCLF9NHDZGoCHK6dtnoMiM5FLxoD8L66UGi5', 'administrator', NULL, NULL, '2023-08-28 09:29:51', '2023-08-28 09:29:51', NULL, NULL);

-- Índice: failed_jobs_uuid_unique
CREATE UNIQUE INDEX "failed_jobs_uuid_unique" on "failed_jobs" ("uuid");

-- Índice: password_resets_email_index
CREATE INDEX "password_resets_email_index" on "password_resets" ("email");

-- Índice: personal_access_tokens_token_unique
CREATE UNIQUE INDEX "personal_access_tokens_token_unique" on "personal_access_tokens" ("token");

-- Índice: personal_access_tokens_tokenable_type_tokenable_id_index
CREATE INDEX "personal_access_tokens_tokenable_type_tokenable_id_index" on "personal_access_tokens" ("tokenable_type", "tokenable_id");

-- Índice: sessions_last_activity_index
CREATE INDEX "sessions_last_activity_index" on "sessions" ("last_activity");

-- Índice: sessions_user_id_index
CREATE INDEX "sessions_user_id_index" on "sessions" ("user_id");

-- Índice: tags_codigo_unique
CREATE UNIQUE INDEX "tags_codigo_unique" on "tags" ("codigo");

-- Índice: team_invitations_team_id_email_unique
CREATE UNIQUE INDEX "team_invitations_team_id_email_unique" on "team_invitations" ("team_id", "email");

-- Índice: team_user_team_id_user_id_unique
CREATE UNIQUE INDEX "team_user_team_id_user_id_unique" on "team_user" ("team_id", "user_id");

-- Índice: teams_user_id_index
CREATE INDEX "teams_user_id_index" on "teams" ("user_id");

-- Índice: users_email_unique
CREATE UNIQUE INDEX "users_email_unique" on "users" ("email");

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
