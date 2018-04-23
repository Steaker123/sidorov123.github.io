<!doctype html>
<html lang="ru">

<head>
    <meta charset="windows-1251" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>MotorMoney - �������������� ������</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arsenal:400,700|Ubuntu" />
    <link rel="stylesheet" href="/style/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="/style/pagestyle.css" type="text/css" />
    <link rel="stylesheet" href="/style/formstyle.css" type="text/css" /> 
    <link rel="icon" type="image/png" href="favicon.ico">
    <link href="/style/sweet-alert.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="content">
<?PHP

# �������
function TimerSet(){
	list($seconds, $microSeconds) = explode(' ', microtime());
	return $seconds + (float) $microSeconds;
}

$_timer_a = TimerSet();

# ����� ������
@session_start();

# ����� ������
@ob_start();

# ��������� ��� Include
define("CONST_RUFUS", true);

# ������������� �������
function __autoload($name){ include("classes/_class.".$name.".php");}

# ����� ������� 
$config = new config;

# �������
$func = new func;

# ���� ������
$db = new db($config->HostDB, $config->UserDB, $config->PassDB, $config->BaseDB);


include 'pages/_recovery.php';

# ������� ������� � ����������
$content = ob_get_contents();

# ������� �����
ob_end_clean();

# �������� ������
$content = str_replace("{!TITLE!}",$_OPTIMIZATION["title"],$content);
$content = str_replace('{!DESCRIPTION!}',$_OPTIMIZATION["description"],$content);
$content = str_replace('{!KEYWORDS!}',$_OPTIMIZATION["keywords"],$content);
$content = str_replace('{!GEN_PAGE!}', sprintf("%.5f", (TimerSet() - $_timer_a)) ,$content);
// ������� �������
echo $content;
?>

            <div class="clearfix"></div>
        </div>
    </div>
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/sweet-alert.min.js"></script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
</body>
</html>