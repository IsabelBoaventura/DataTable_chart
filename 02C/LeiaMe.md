# DataTables

Usando a playList do Celke implementar modificações seguindo outro tutorial

- playList de Celke:  

    Como usar DataTables com PHP
    https://www.youtube.com/watch?v=WWQ5d5ttjoI&list=PLmY5AEiqDWwDnscmb2C9fdQ5EqkkoiWMS


## Filtro de intervalo de datas avançado do PHP Ajax em DataTables e Chart.js usando o seletor de intervalo de datas

- https://www.webslesson.info/2022/03/php-ajax-advance-date-range-filter-in-datatables-chartjs-using-date-range-picker.html




## Estrutra
    - WAMP 64
    - PHPMyAdmin 5.0.2
    - PHP 7.3.21
    - Apache 2.4.46 usando a porta 80
    - MySQL 8.0.21 usando a porta 3306
    - Senha do banco de Dados: `123456`
    - Database criada anteriormente `celke`

 

## Banco de Dados 

            CREATE TABLE `cargo` (
                `id` INT(10) NOT NULL AUTO_INCREMENT,
                `cargo` VARCHAR(50) NOT NULL COLLATE 'utf8_unicode_ci',
                `nome` VARCHAR(100) NOT NULL COLLATE 'utf8_unicode_ci',
                `escritorio` VARCHAR(40) NOT NULL COLLATE 'utf8_unicode_ci',
                `idade` INT(10) NOT NULL,
                `salario` DOUBLE(11,4) NOT NULL,
                `admissao` DATE NOT NULL,
                PRIMARY KEY (`id`) USING BTREE
            )COLLATE='utf8_unicode_ci'
            ENGINE=InnoDB;
            
            
   
## Mão a Obra


