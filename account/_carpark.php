
<div class="page-content-wrapper ">

    <div class="container">

        <div class="row">
            <div class="col-md-12">

<?PHP
# by Juice - jumast@ya.ru - (c) 2017 
# RIP motormoney, ���������������� ������� ������� Fruif-Farm �� ����� ������ ������ � ������������ ������.
# �� ����� ����� ���� �������������, �� �� ��������, ��������� ������� ������� ����� ������� � ������
# �� ��������� ����� �������, ������� � �.�. ������ �� ��������� ����.

$_OPTIMIZATION["title"] = "������� ����";
$usid = $_SESSION["user_id"];
$refid = $_SESSION["referer_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();

# ������� ������ ������
if(isset($_POST["item"])){

$array_items = array(1 => "a_t", 2 => "b_t", 3 => "c_t", 4 => "d_t", 5 => "e_t", 6 => "f_t");
$array_name = array(1 => "����� - 1 �������", 2 => "��� - 2 �������", 3 => "����� - 3 �������", 4 => "��� - 4 �������", 5 => "������ - 5 �������", 6 => "�������� - 6 �������");
$item = intval($_POST["item"]);
$citem = $array_items[$item];

	if(strlen($citem) >= 3){
		
		# ��������� �������� ������������
		$need_money = $sonfig_site["amount_".$citem];
		if($need_money <= $user_data["money_b"]){
			
			if($user_data["last_sbor"] == 0 OR $user_data["last_sbor"] > ( time() - 60*20) ){
				
				$to_referer = $need_money * 0.1;

				# ��������� �������� � ��������� ������
				$db->Query("UPDATE db_users_b SET money_b = money_b - $need_money, $citem = $citem + 1,  
				last_sbor = IF(last_sbor > 0, last_sbor, '".time()."') WHERE id = '$usid'");

				# ���� ������� ������������ 50% �� ���������
				$energy = $need_money * 0.005;
				$db->Query("UPDATE db_users_b SET pay_points = pay_points + '$energy' WHERE id = '$usid'");
				
				# ������ ������ � �������
				$db->Query("INSERT INTO db_stats_btree (user_id, user, tree_name, amount, date_add, date_del) 
				VALUES ('$usid','$usname','".$array_name[$item]."','$need_money','".time()."','".(time()+60*60*24*15)."')");
				$life_time->AddItem($usid,$citem);
				
				echo "<div class='alert alert-success'><b>�� ������� ������ �������.</b></div>";
				
				$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
				$user_data = $db->FetchArray();
				
			
			}else echo "<center><div class='alert error'>����� ��� ��� ������, ������� ������� �������</div></center><BR />";
		
		}else echo "<div class='alert alert-danger'><b>������������ ����� ��� �������.</b></div>";
	    }

}

$lvl1= ($sonfig_site["a_in_h"]*100)/$sonfig_site["amount_a_t"]/$sonfig_site["items_per_coin"]*24*30; // �����������
$lvl2= ($sonfig_site["b_in_h"]*100)/$sonfig_site["amount_b_t"]/$sonfig_site["items_per_coin"]*24*30; // �����������
$lvl3= ($sonfig_site["c_in_h"]*100)/$sonfig_site["amount_c_t"]/$sonfig_site["items_per_coin"]*24*30; // �����������
$lvl4= ($sonfig_site["d_in_h"]*100)/$sonfig_site["amount_d_t"]/$sonfig_site["items_per_coin"]*24*30; // �����������
$lvl5= ($sonfig_site["e_in_h"]*100)/$sonfig_site["amount_e_t"]/$sonfig_site["items_per_coin"]*24*30; // �����������
$lvl6= ($sonfig_site["f_in_h"]*100)/$sonfig_site["amount_f_t"]/$sonfig_site["items_per_coin"]*24*30; // �����������

?>


</div></div>


        <div class="row">
            <div class="col-md-12 col-lg-6">
<div class="row">
  <div class="col-md-12">
<?php
include '_claim.php';
?>
</div>
                <div class="col-md-12">
                    <div class="panel panel-color panel-warning">
                        <div class="panel-heading">
        <h3 class="panel-title carsinfoblockh3">�������� �������� ��������</h3>
    </div>
                          <div class="panel-body p-t-10">
        <h4 class="carsinfoh4">��������, ������ � �������� ���������:</h4>
      <p class="carsinfop">��� ������ ����� � ����� ���������, ��� ������ ����� �� ��������. �������� ������� ��������� ������ � motormoney ��� "�������� ���������". � ������ �� �������������� ����� ���� �������� ���������, ������� ���������� � ���������� ������������ ������� ������ �� ��� ��������� �������. ���, ��������, ������ 9 ������ �������� 24.3 ����� � ���, 583 ������ � ���� ��� 17496 ������ � �����!</p>
        <h4 class="carsinfoh4">������� ��������� �� ������� motormoney:</h4>
      <p class="carsinfop">���� �� �� ������ �������� ������, �� �� ���������� ��� ���������� ���������� ���������:</p>
      <p class="carsinfop" style="padding-left:20px;"><a href="/user/surfing">Ѹ����� ������</a> - �������� ����� ����� �������������� � ��������� �� 0,07 ��� �� ���� ��������!</p>
      <!--<p class="carsinfop" style="padding-left:20px;"><a href="">����� �����</a>, <a href="">���� �� ����</a>, <a href="">������� �����</a> - �������� ���� � ������� �������������� �������.</p>-->
      <p class="carsinfop" style="padding-left:20px;"><a href="/user/partnership">����������� ���������</a> - ����������� � ������ ����� ������ � �������� � ��������� �����������.</p>
      <p class="carsinfop" style="padding-left:20px;"><a href="/user/daily">���������� �����</a>, <a href="/contest">��������</a> - ��������� ����� � ������ �� ���� ���������� �� �������!</p>
      <p class="carsinfop" style="padding-left:20px;"><a href="/user/quests">������������ ������</a> - ��������� �������������� �� ���������� ������� � �������� �������!</p>
    </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title text-muted font-light profilemsz"><i>������ � ����� ���������</i></h4>
                        </div>
                          <div class="panel-body p-t-10">
      <div class="row">
	<table class="table table-bordered">
		<thead><th>��������</th><th>�������� ����</th></thead>
<?php $life_time->GetTable($usid); ?>
	</table>      </div>
    </div>
                    </div>
                </div>
</div>
            </div>
<div class="col-md-12 col-lg-6">
<div class="row">
<div class="col-sm-12 col-sm-6">
      <div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title text-center">Hyundai Solaris</h3></div>
          <div class="panel-body">
<div class="carsbuydiv"><img src="/img/cars/n1.png"></div>
<h5 class="profileinfoh5">���������: <span><?=$sonfig_site["amount_a_t"]; ?> ���.</span></h5>
<h5 class="profileinfoh5">����������: <span><?=sprintf("%.0f",$lvl1); ?>% / ���.</span></h5>
<h5 class="profileinfoh5">��������: <span><?=$sonfig_site["a_in_h"]/10000; ?>� / ���</span></h5>

<form action="/carpark?shop" method="post">
<input type="hidden" name="item" value="1">
<button type="submit" class="btn waves-effect btn-default btn-block carsshopbtn"> <i class="mdi mdi-cart"></i> ������ ������ (<?=$sonfig_site["amount_a_t"]; ?> �.)</button>
</form>

</div>
      </div>
  </div><div class="col-sm-12 col-sm-6">
      <div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title text-center">Volkswagen Beetle</h3></div>
          <div class="panel-body">
<div class="carsbuydiv"><img src="/img/cars/n2.png"></div>
              <h5 class="profileinfoh5">���������: <span><?=$sonfig_site["amount_b_t"]; ?> ���.</span></h5>
<h5 class="profileinfoh5">����������: <span><?=sprintf("%.0f",$lvl2); ?>% / ���.</span></h5>
<h5 class="profileinfoh5">��������: <span><?=$sonfig_site["b_in_h"]/10000; ?>� / ���</span></h5>

<form action="/carpark?shop" method="post">
<input type="hidden" name="item" value="2">
<button type="submit" class="btn waves-effect btn-default btn-block carsshopbtn"> <i class="mdi mdi-cart"></i> ������ ������ (<?=$sonfig_site["amount_b_t"]; ?> �.)</button>
</form>
</div>
      </div>
  </div><div class="col-sm-12 col-sm-6">
      <div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title text-center">Toyota Camry</h3></div>
          <div class="panel-body">
<div class="carsbuydiv"><img src="/img/cars/n3.png"></div>
              <h5 class="profileinfoh5">���������: <span><?=$sonfig_site["amount_c_t"]; ?> ���.</span></h5>
<h5 class="profileinfoh5">����������: <span><?=sprintf("%.0f",$lvl3); ?>% / ���.</span></h5>
<h5 class="profileinfoh5">��������: <span><?=$sonfig_site["c_in_h"]/10000; ?>� / ���</span></h5>

<form action="/carpark?shop" method="post">
<input type="hidden" name="item" value="3">
<button type="submit" class="btn waves-effect btn-default btn-block carsshopbtn"> <i class="mdi mdi-cart"></i> ������ ������ (<?=$sonfig_site["amount_c_t"]; ?> �.)</button>
</form>
</div>
      </div>
  </div><div class="col-sm-12 col-sm-6">
      <div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title text-center">BMW 530i</h3></div>
          <div class="panel-body">
<div class="carsbuydiv"><img src="/img/cars/n4.png"></div>
              <h5 class="profileinfoh5">���������: <span><?=$sonfig_site["amount_d_t"]; ?> ���.</span></h5>
<h5 class="profileinfoh5">����������: <span><?=sprintf("%.0f",$lvl4); ?>% / ���.</span></h5>
<h5 class="profileinfoh5">��������: <span><?=$sonfig_site["d_in_h"]/10000; ?>� / ���</span></h5>

<form action="/carpark?shop" method="post">
<input type="hidden" name="item" value="4">
<button type="submit" class="btn waves-effect btn-default btn-block carsshopbtn"> <i class="mdi mdi-cart"></i> ������ ������ (<?=$sonfig_site["amount_d_t"]; ?> �.)</button>
</form>
</div>
      </div>
  </div><div class="col-sm-12 col-sm-6">
      <div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title text-center">Audi Q7</h3></div>
          <div class="panel-body">
<div class="carsbuydiv"><img src="/img/cars/n5.png"></div>
              <h5 class="profileinfoh5">���������: <span><?=$sonfig_site["amount_e_t"]; ?> ���.</span></h5>
<h5 class="profileinfoh5">����������: <span><?=sprintf("%.0f",$lvl5); ?>% / ���.</span></h5>
<h5 class="profileinfoh5">��������: <span><?=$sonfig_site["e_in_h"]/10000; ?>� / ���</span></h5>

<form action="/carpark?shop" method="post">
<input type="hidden" name="item" value="5">
<button type="submit" class="btn waves-effect btn-default btn-block carsshopbtn"> <i class="mdi mdi-cart"></i> ������ ������ (<?=$sonfig_site["amount_e_t"]; ?> �.)</button>
</form>
</div>
      </div>
  </div><div class="col-sm-12 col-sm-6">
      <div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title text-center">Mercedes-Benz SLS AMG</h3></div>
          <div class="panel-body">
<div class="carsbuydiv"><img src="/img/cars/n6.png"></div>
              <h5 class="profileinfoh5">���������: <span><?=$sonfig_site["amount_f_t"]; ?> ���.</span></h5>
<h5 class="profileinfoh5">����������: <span><?=sprintf("%.0f",$lvl6); ?>% / ���.</span></h5>
<h5 class="profileinfoh5">��������: <span><?=$sonfig_site["f_in_h"]/10000; ?>� / ���</span></h5>

<form action="/carpark?shop" method="post">
<input type="hidden" name="item" value="6">
<button type="submit" class="btn waves-effect btn-default btn-block carsshopbtn"> <i class="mdi mdi-cart"></i> ������ ������ (<?=$sonfig_site["amount_f_t"]; ?> �.)</button>
</form>
</div>
      </div>
  </div><div class="col-sm-12 col-sm-6">
      <div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title text-center">Porsche 991 Cabrio</h3></div>
          <div class="panel-body">
<div class="carsbuydiv"><img src="/img/cars/n7.png"></div>
              <h5 class="profileinfoh5">���������: <span>12500 ���.</span></h5>
<h5 class="profileinfoh5">����������: <span>32% / ���.</span></h5>
<h5 class="profileinfoh5">��������: <span>5.55? / ���</span></h5>

<form action="/carpark?shop" method="post">
<input type="hidden" name="item" value="7">
<button type="submit" class="btn waves-effect btn-default btn-block carsshopbtn"> <i class="mdi mdi-cart"></i> ������ ������ (12500 ���.)</button>
</form>
</div>
      </div>
  </div><div class="col-sm-12 col-sm-6">
      <div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title text-center">Tesla Model S</h3></div>
          <div class="panel-body">
<div class="carsbuydiv"><img src="/img/cars/n8.png"></div>
              <h5 class="profileinfoh5">���������: <span>20000 ���.</span></h5>
<h5 class="profileinfoh5">����������: <span>33% / ���.</span></h5>
<h5 class="profileinfoh5">��������: <span>9.16? / ���</span></h5>

<form action="/carpark?shop" method="post">
<input type="hidden" name="item" value="8">
<button type="submit" class="btn waves-effect btn-default btn-block carsshopbtn"> <i class="mdi mdi-cart"></i> ������ ������ (20000 ���.)</button>
</form>
</div>
      </div>
  </div><div class="col-sm-12 col-sm-6">
      <div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title text-center">Ferrari F12</h3></div>
          <div class="panel-body">
<div class="carsbuydiv"><img src="/img/cars/n9.png"></div>
              <h5 class="profileinfoh5">���������: <span>50000 ���.</span></h5>
<h5 class="profileinfoh5">����������: <span>35% / ���.</span></h5>
<h5 class="profileinfoh5">��������: <span>24.3? / ���</span></h5>

<form action="/carpark?shop" method="post">
<input type="hidden" name="item" value="9">
<button type="submit" class="btn waves-effect btn-default btn-block carsshopbtn"> <i class="mdi mdi-cart"></i> ������ ������ (50000 ���.)</button>
</form>
</div>
      </div>
  </div></div>
</div>
        </div>
        <!-- end row -->


    </div><!-- container -->


</div> <!-- Page content Wrapper -->
<link href="./style/sweet-alert.css" rel="stylesheet" type="text/css">
<script src="./style/sweet-alert.min.js"></script>

</div> <!-- content -->