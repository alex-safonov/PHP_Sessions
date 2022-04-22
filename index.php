Использование функции session_start

<?php
// start a session
session_start();
?>

Автоматический запуск сеанса
В файле php.ini есть параметр session.auto_start
session.auto_start = 1

с помощью файла .htaccess.
php_value session.auto_start 1

Как получить идентификатор сеанса
<?php
session_start();
echo session_id();
?>

Если вы хотите заменить сгенерированный системой идентификатор сеанса на ваш, это можно сделать, передав первый аргумент функции session_id.
<?php
session_id(YOUR_SESSION_ID);
session_start();
?>

Как инициализировать переменные сеанса
<?php
// start a session
session_start();
 
// initialize session variables
$_SESSION['logged_in_user_id'] = '1';
$_SESSION['logged_in_user_name'] = 'Tutsplus';
 
// access session variables
echo $_SESSION['logged_in_user_id'];
echo $_SESSION['logged_in_user_name'];
?>

Сброс переменных сессии
<?php
// start a session
session_start();
 
// initialize a session variable
$_SESSION['logged_in_user_id'] = '1';
 
// unset a session variable
unset($_SESSION['logged_in_user_id']);
?>

Как уничтожить сессию
<?php
// start a session
session_start();
 
// assume that we’ve initialized a couple of session variables in the other script already
 
// destroy everything in this session
session_destroy();
?>
