<?PHP

$_OPTIMIZATION["title"] = "�������������� ������";
$_OPTIMIZATION["description"] = "�������������� �������� ������";
$_OPTIMIZATION["keywords"] = "�������������� �������� ������";

if(isset($_SESSION["user_id"])){ Header("Location: /account"); return; }

?>
            <article class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
<?PHP

	if(isset($_POST["email"])){

		
		$email = $func->IsMail($_POST["email"]);
		$time = time();
		$tdel = $time + 60*15;
		
			if($email !== false){
				
				$db->Query("DELETE FROM db_recovery WHERE date_del < '$time'");
				$db->Query("SELECT COUNT(*) FROM db_recovery WHERE ip = INET_ATON('".$func->UserIP."') OR email = '$email'");
				if($db->FetchRow() == 0){
				
					$db->Query("SELECT id, user, email, pass FROM db_users_a WHERE email = '$email'");
					if($db->NumRows() == 1){
					$db_q = $db->FetchArray();
					
					# ������ ������ � ��
					$db->Query("INSERT INTO db_recovery (email, ip, date_add, date_del) VALUES ('$email',INET_ATON('".$func->UserIP."'),'$time','$tdel')");
					
					# ���������� ������
					$sender = new isender;
					$sender -> RecoveryPassword($db_q["email"], $db_q["pass"], $db_q["email"]);
					
					echo "<center><div class='alert alert-success'>������ ���������� �� ��� E-mail</div><br/><br/><a href='/'><img src='/img/logo-small.png' style='max-width: 100%;'></a></center>";
					?>

					<?PHP
					return; 
					
					}else echo "<center><div class='alert alert-danger'>������������ � ����� E-mail �� ���������������</div></center>";
				
				}else echo "<center><div class='alert alert-warning'>�� ��� E-mail ��� IP ��� ��� ��������� ������ �� ��������� 15 �����</div></center>";
				
			}else echo "<center><div class='alert alert-danger'>������������ ������ E-mail</div></center>";
		}

?>

<form id="loginform" action="" method="post">

                            <div class="form-heading text-center">
					<a href="/"><img src="/img/logo-small.png" style="max-width: 100%;"></a>
					<div class="title">��������� ������</div>
                            </div>

                            <div class="row"><div class="col-md-12">
									<div class="alert alert-info">
                                    	<span class="text-center">������� E-mail, �� �������� ��� ������ � ������������ ��� �������������� ������.</span> 
                                	</div>
								</div>
                                <div class="col-md-12">
	<input name="email" type="text" placeholder="������� e-mail" maxlength="55" value="<?=(isset($_POST["email"])) ? $_POST["email"] : false; ?>">
</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
	<input type="submit" value="������������ ������" class="adam-button adam-red">

		<p class="title-description"><a href="/login">��������� ������?</a></p>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>
            </article>