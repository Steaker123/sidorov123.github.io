 <?
$_OPTIMIZATION["title"] = "���������� � ������������";
 $usname = $_SESSION["user"];
 $usid = $_SESSION["user_id"];
 $date = time();
 $cena = 10; // ��������� ������
 $rate = 0.1; // ����������� �������� �� ����������� �����
 
 if(isset($_GET['name'])) {
 $name = htmlspecialchars($_GET['name']);
 $q = $db->Query("SELECT * FROM db_users_a WHERE user = '$name'");
 $us_inf = $db->FetchArray($q);
 $us = $us_inf['id'];
 $db->Query("SELECT * FROM db_users_b WHERE user = '$name'");
 $dat = $db->FetchArray();
 
 ?>

<div class="panel panel-info">
	<div class="panel-heading" style="padding: 5px 15px;">���������� � ������������:</div>
	<div class="panel-body">
ID: <span class="pull-right"><?=$us_inf['id']; ?></span><br/>
�����: <span class="pull-right"><?=$name; ?></span><br/>
�����������: <span class="pull-right"><?=date('d-m-Y', $us_inf['date_reg']); ?> �.</span><br/>
�������: <span class="pull-right"><?=date('d-m-Y', $us_inf['date_login']); ?> �.</span><br/>
���� �����: <span class="pull-right"><?=$dat['insert_sum']; ?> ���.</span><br/>
����� �����: <span class="pull-right"><?=$dat['payment_sum']; ?> ���.</span><br/>
��� ���������(�������): <span class="pull-right"><b><a href="<?=$us_inf['referer']; ?>"><?=$us_inf['referer']; ?></a></b></span><br/>
������ ��������: <span class="pull-right"><?=$dat['to_referer']; ?> ���.</span><br/>
���-�� ���������: <span class="pull-right"><?=$us_inf["referals"]; ?> ���.</span><br/>
��������� �� ���������: <span class="pull-right"><?=$dat['from_referals']; ?> ���.</span><br/>
	</div>
</div>



</center>


<? } else {?>

 <div class="page-header">
	<h1>����� ������������</h1>
</div>
<div class="alert alert-info">	
����� ������������ , ��� ���������� ����������� ������ ��������� � ������������� , ����� ��� ��������� ���� ��� �� ���������������� � ��������� �� ��� ����������� �� �������.
��������, ��� ��� ������� ��� �� ��������� � ��������� � ������������� �������� �� ������� ����� �����������.<br><br>

�� ��� ��������� �������?<br>
1. �� ���������� ����� ������ <b>2%</b> �� ����� � ������, �������� ���� �� 1 % ������ � �������.<br>
2. �� ����� ������� ������ <b>1%</b> ������ ������������.<br>
3. �� ������� ������ ������ ������ <b>0.1%</b> �� ����� � ������.<br>
4. �� ��������� ������� �� <b>0.1 �� 5</b> ������� ��������.<br><br>

</div>	

<? } ?>