<?PHP
$_OPTIMIZATION["title"] = "����� ������ �� �������";
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();
?>  

<div class="page-content-wrapper ">

    <div class="container">

<?PHP

if(isset($_POST["sum"])){

$sum = intval($_POST["sum"]);

	if($sum >= 1000){
	
		if($user_data["money_p"] >= $sum and $sum >=1000){
		
		$add_sum = ($sonfig_site["percent_swap"] > 0) ? ( ($sonfig_site["percent_swap"] / 100) * $sum) + $sum : $sum;
		
		$ta = time();
		$td = $ta + 60*60*24*15;
		
		$db->Query("UPDATE db_users_b SET money_b = money_b + $add_sum, money_p = money_p - $sum WHERE id = '$usid'");
		$db->Query("INSERT INTO db_swap_ser (user_id, user, amount_b, amount_p, date_add, date_del) VALUES ('$usid','$usname','$add_sum','$sum','$ta','$td')");
		
		echo "<div class='alert alert-success'>����� ����������</div>";
		
		}else echo "<div class='alert alert-danger'>������������ ����� ��� ������</div>";
	
	}else echo "<div class='alert alert-warning'>����������� ����� ��� ������ 1000 �����</div>";

}

?>


<div class="row">
<div class="col-lg-9 partner_cl">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title racetabletitle" style="color: #fff7ea;text-shadow: 1px 1px 3px #6b470b;"><i class="fa fa-refresh"></i> ����� � ������ �� �������</h3>
                            </div>
                            <div class="panel-body">
                                <center><img class="exchange_img" src="/img/exchange2.png"></center>
      <blockquote class="m-t-15"><p class="exchange_desctext">������������� ����� ������� � ������ ������� ��� ������, �� ��� ������ ��� �������. ���. �����: 1 ���.</p> <footer>�������� ����������� ������.</footer></blockquote>
                            <form action="/exchange?ok" method="post">
                                <div class="form-group exchange_formelem">
                                    <input name="sum" id="sum" onkeyup="GetSumPer();" maxlength="7" class="form-control" placeholder="������� ����� ������... (���.)" required="" type="text">
          <button type="submit" name="swap" class="btn waves-effect btn-default btn-block m-t-10"> <i class="mdi mdi-call-split"></i> ���������� ����� �������</button>
                                </div>
      </form>
    </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title racetabletitle" style="color: #fff7ea;text-shadow: 1px 1px 3px #6b470b;"><i class="fa fa-refresh"></i> ����� � ������ �� �������</h3>
                            </div>
                            <div class="panel-body">
                                <center><img class="exchange_img" src="/img/exchange.png"></center>
      <blockquote class="m-t-15"><p class="exchange_desctext">������������� ����� ������� � ������ ������� ��� ������, �� ��� ������ ��� �������. ���. �����: 1 ���.</p> <footer>�������� ����������� ������.</footer></blockquote>
                            <form action="/exchange?ok" method="post">
                                <div class="form-group exchange_formelem">
                                    <input name="sum" maxlength="7" class="form-control" placeholder="������� ����� ������... (���.)" required="" type="text">
          <button type="submit" class="btn waves-effect btn-default btn-block m-t-10"> <i class="mdi mdi-call-split"></i> ���������� ����� �������</button>
                                </div>
      </form>
    </div>
                        </div>
                    </div>
                </div><!-- end row -->
</div>
</div>

    </div><!-- container -->


</div>
<script language="javascript">GetSumPer();</script>


