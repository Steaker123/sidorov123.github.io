<?PHP
######################################
# ������ Fruit Farm
# ����� Rufus
# ICQ: 819-374
# Skype: Rufus272
######################################

# ������������� �������
function __autoload($name){ include("classes/_class.".$name.".php");}

# ����� ������� 
$config = new config;

# �������
$func = new func;

# ���� ������
$db = new db($config->HostDB, $config->UserDB, $config->PassDB, $config->BaseDB);





if (isset($_POST["m_operation_id"]) && isset($_POST["m_sign"]))
{
	$m_key = $config->secretW;
	$arHash = array($_POST['m_operation_id'],
			$_POST['m_operation_ps'],
			$_POST['m_operation_date'],
			$_POST['m_operation_pay_date'],
			$_POST['m_shop'],
			$_POST['m_orderid'],
			$_POST['m_amount'],
			$_POST['m_curr'],
			$_POST['m_desc'],
			$_POST['m_status'],
			$m_key);
	
	$sign_hash = strtoupper(hash('sha256', implode(":", $arHash)));
	if ($_POST["m_sign"] == $sign_hash && $_POST['m_status'] == "success")
	{
		
	$db->Query("SELECT * FROM db_payeer_insert WHERE id = '".intval($_POST['m_orderid'])."'");
	if($db->NumRows() == 0){ echo $_POST['m_orderid']."|error"; exit;}
	
	$payeer_row = $db->FetchArray();
	if($payeer_row["status"] > 0){ echo $_POST['m_orderid']."|success"; exit;}
	
	$db->Query("UPDATE db_payeer_insert SET status = '1' WHERE id = '".intval($_POST['m_orderid'])."'");
	
	$ik_payment_amount = $payeer_row["sum"];
	$user_id = $payeer_row["user_id"];
   
	# ���������
	$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
	$sonfig_site = $db->FetchArray();
   
   $db->Query("SELECT user, referer_id FROM db_users_a WHERE id = '{$user_id}' LIMIT 1");
   $user_ardata = $db->FetchArray();
   $user_name = $user_ardata["user"];
   $refid = $user_ardata["referer_id"];
   
   # ��������� ������
   $serebro = sprintf("%.4f", floatval($sonfig_site["ser_per_wmr"] * $ik_payment_amount) );
   
   $db->Query("SELECT ref_proc FROM db_users_b WHERE id = '{$refid}' LIMIT 1");
   $ref_proc = $db->FetchRow();

   $db->Query("SELECT insert_sum FROM db_users_b WHERE id = '{$user_id}' LIMIT 1");
   $ins_sum = $db->FetchRow();

   /* ====== ��������� 3 ������� ====== */
$db->Query("SELECT user, referer_id, referer_id2, referer_id3 FROM db_users_a WHERE id = '{$user_id}' LIMIT 1");
    $user_ardata = $db->FetchArray();
    $ref2 = $user_ardata["referer_id2"];
    $ref3 = $user_ardata["referer_id3"];

    # ������ ������� �����
    $to_referer  = ($serebro * 0.07)+($serebro*$ref_proc); // ������ ������� - 7 ��������
    $to_referer2 = ($serebro * 0.02); // ������ ������� - 2 ��������
    $to_referer3 = ($serebro * 0.01); // ������ ������� - 1 �������

    $db->Query("UPDATE db_users_b SET money_p = money_p + $to_referer2 WHERE id = '$ref2'");
    $db->Query("UPDATE db_users_b SET money_p = money_p + $to_referer3 WHERE id = '$ref3'");
    $db->Query("UPDATE db_users_a SET doxod2 = doxod2 + $to_referer2 WHERE id = '$user_id'");
    $db->Query("UPDATE db_users_a SET doxod3 = doxod3 + $to_referer3 WHERE id = '$user_id'");
    /* ====== /��������� 3 ������� ====== */

	if($ik_payment_amount < 100) {
		   $serebro = ($serebro + ($serebro * 0.05));
		                          }
		   elseif ($ik_payment_amount >= 100 and $ik_payment_amount < 250) {
			$serebro = ($serebro + ($serebro * 0.1));
		   }
		   
		   elseif ($ik_payment_amount >= 250 and $ik_payment_amount < 500) {
			$serebro = ($serebro + ($serebro * 0.15));
		   }
		   
		   elseif ($ik_payment_amount >= 500 and $ik_payment_amount < 1000) {
			$serebro = ($serebro + ($serebro * 0.2));
		   }
		   		   
		    elseif ($ik_payment_amount >= 1500) {
			$serebro = ($serebro + ($serebro * 0.25));
		   }
   

   $lsb = time();
   
   $db->Query("UPDATE db_users_b SET money_b = money_b + '$serebro', pay_points = pay_points + '$to_pay_points', a_t = a_t + '$add_tree', to_referer = to_referer + '$to_referer', last_sbor = '$lsb', insert_sum = insert_sum + '$ik_payment_amount' WHERE id = '{$user_id}'");

   # ��������� �������� �������� � ������
   $db->Query("UPDATE db_users_b SET money_p = money_p + $to_referer, from_referals = from_referals + '$to_referer'  WHERE id = '$refid'");
  

   
   
   # ���������� ����������
   $da = time();
   $dd = $da + 60*60*24*15;
   $db->Query("INSERT INTO db_insert_money (user, user_id, money, serebro, date_add, date_del) 
   VALUES ('$user_name','$user_id','$ik_payment_amount','$serebro','$da','$dd')");
   
   # ������� ����������
$usname = $user_name;
$db->Query("INSERT INTO db_invcompetition_users (user, user_id, points) VALUES ('$usname','$user_id','0')");

$db->Query("SELECT * FROM db_invcompetition WHERE status = '0' LIMIT 1");
$invcomp = $db->FetchArray();
	
$db->Query("SELECT COUNT(*) FROM db_invcompetition_users WHERE user_id = '{$user_id}'");
$rett = $db->FetchArray();
   
if ($invcomp["date_add"] >= 0 AND $invcomp["date_end"] > $da){
$db->Query("UPDATE db_invcompetition_users SET points = points + '$ik_payment_amount' WHERE user_id = '$user_id'");
} else
$db->Query("UPDATE db_invcompetition_users SET points = points + '0' WHERE user_id = '$user_id'");


# �������
$competition = new competition($db);
$competition->UpdatePoints($user_id, $ik_payment_amount);

# ��������� �����
$pp = new pay_points($db);
$pp ->UpdatePayPoints($ik_payment_amount,$user_id);

$db->Query("UPDATE db_users_b SET a_t = a_t + '$a_t', b_t = b_t + '$b_t', c_t = c_t + '$c_t', d_t = d_t + '$d_t', e_t = e_t + '$e_t',  f_t = f_t + '$f_t', last_sbor = '$lsb' WHERE id = '{$user_id}'");
   
	# ���������� ���������� �����
	$db->Query("UPDATE db_stats SET all_insert = all_insert + '$ik_payment_amount' WHERE id = '1'");
	
	echo $_POST['m_orderid']."|success";
	exit;
	
	
	}
	echo $_POST['m_orderid']."|error";
}
?>