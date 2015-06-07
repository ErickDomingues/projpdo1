CREATE DATABASE teste;
CREATE TABLE `alunos` (
`id`  int(11) NOT NULL  ,
`nome`  varchar(255)  ,
`nota`  int(11)  ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB;

INSERT INTO `alunos` VALUES ('1', 'Erick', '1'), ('2', 'João', '3'), ('3', 'Pedro', '5'), ('4', 'Marcos', '9'), ('5', 'Benedito', '4'), ('6', 'Jeferson', '0'), ('7', 'Danilo', '8'), ('8', 'Shyko', '10'), ('9', 'Jonathan', '2'), ('10', 'Eduardo', '2'), ('11', 'Benedito', '7'), ('12', 'Marcelo', '7'), ('13', 'Henrique', '4'), ('14', 'Mariana', '3'), ('15', 'Franciele', '8'), ('16', 'Francisca', '0'), ('17', 'Aline', '3'), ('18', 'Monique', '8'), ('19', 'Cintia', '10'), ('20', 'Inês', '10');
