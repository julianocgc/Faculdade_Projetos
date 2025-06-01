CREATE TABLE IF NOT EXISTS `curriculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sexo` enum('masculino','feminino') NOT NULL,
  `idade` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `arquivo_curriculo` varchar(255) DEFAULT NULL,
  `comentarios` text,
  `data_envio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('novo','analisando','aprovado','rejeitado') DEFAULT 'novo',
  PRIMARY KEY (`id`),
  KEY `idx_email` (`email`),
  KEY `idx_data_envio` (`data_envio`),
  KEY `idx_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Comentários sobre a estrutura:
-- id: Chave primária auto incremento
-- nome: Nome completo do candidato (até 100 caracteres)
-- sexo: Enum para masculino/feminino
-- idade: Idade do candidato (até 3 dígitos)
-- email: Email do candidato (até 100 caracteres)
-- cidade: Cidade do candidato (até 100 caracteres)
-- estado: Estado do candidato (2 caracteres - sigla)
-- arquivo_curriculo: Nome do arquivo de currículo salvo no servidor
-- comentarios: Comentários adicionais do candidato
-- data_envio: Data e hora do envio (automático)
-- status: Status do currículo (novo, analisando, aprovado, rejeitado)
