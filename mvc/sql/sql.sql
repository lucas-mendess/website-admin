CREATE TABLE `website`.`usuarios` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `senha` VARCHAR(200) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified_at` DATETIME NULL,
);
ALTER TABLE `website`.`usuarios`
ADD INDEX(`niveis_acesso_id`);
ALTER TABLE `website`.`usuarios`
ADD INDEX(`situacao_usuario_id`);
ALTER TABLE `website`.`usuarios`
ADD FOREIGN KEY (`situacao_usuario_id`) REFERENCES `situacao_usuarios`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `website`.`usuarios`
ADD FOREIGN KEY (`niveis_acesso_id`) REFERENCES `niveis_acessos`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
/*---------------------------------------------------------------*/
CREATE TABLE `website`.`niveis_acessos` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(200) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified_at` DATETIME NULL,
);
/*---------------------------------------------------------------*/
CREATE TABLE `website`.`situacao_usuarios` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` ENUM("ativo", "inativo", "aguardando") NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified_at` DATETIME NULL,
);
/*---------------------------------------------------------------*/
CREATE TABLE `website`.`contatos` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `telefone` INT NOT NULL,
    `celular` INT NULL,
    `usuario_id` INT NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified_at` DATETIME NULL,
);
ALTER TABLE `contatos`
ADD INDEX(`usuario_id`);
ALTER TABLE `contatos`
ADD FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
/*---------------------------------------------------------------*/
CREATE TABLE `website`.`enderecos` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `endereco` VARCHAR(255) NOT NULL,
    `numero` INT NOT NULL,
    `bairro` VARCHAR(100) NOT NULL,
    `cidade` VARCHAR(100) NOT NULL,
    `usuario_id` INT NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified_at` DATETIME NULL
);
ALTER TABLE `enderecos`
ADD INDEX(`usuario_id`);
ALTER TABLE `enderecos`
ADD FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;