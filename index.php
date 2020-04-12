# MySQL
$host = 'localhost';
$login = 'login';
$pass = 'pass';
$dbName = 'db_name';

// Подключаемся к базе
$connect = mysqli_connect($host, $login, $pass, $dbName);

// Проверяем подключение
if(mysqli_connect_errno()) {
  echo mysqli_connect_error();
}

Базовые SQL команды

// Создание таблицы
$query = 'create table if not exists `DB_NAME` . `TABLE_NAME`(
  `id` INT NOT NULL auto_increment,
  `name` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(11) NOT NULL,
  PRIMARY_KEY(`id`)
)';
