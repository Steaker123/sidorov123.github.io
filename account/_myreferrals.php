
<?PHP
$_OPTIMIZATION["title"] = "������ ���������";
$user_id = $_SESSION["user_id"];
$uname = $_SESSION["user"];
$db->Query("SELECT COUNT(*) FROM db_users_a WHERE referer_id = '$user_id'");
$refs = $db->FetchRow(); // ������� ��������� 1 ������
$db->Query("SELECT COUNT(*) FROM db_users_a WHERE referer_id2 = '$user_id'");
$refs2 = $db->FetchRow(); // ������� ��������� 2 ������
$db->Query("SELECT COUNT(*) FROM db_users_a WHERE referer_id3 = '$user_id'");
$refs3 = $db->FetchRow(); // ������� ��������� 3 ������

?>
<div class="page-content-wrapper ">

    <div class="container">


        <div class="row">
        <div class="col-md-12">
              <div class="panel panel-primary">
                  <div class="panel-body">

                      <h4 class="m-b-30 m-t-0">���������: <font color="#000;"><?=$refs; ?> / <?=$refs2; ?> / <?=$refs3; ?> ���.</font></h4>

                      <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-12">




<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#ref1" data-toggle="tab">�������� 1-�� ������</a></li>
  <li><a href="#ref2" data-toggle="tab">�������� 2-�� ������</a></li>
  <li><a href="#ref3" data-toggle="tab">�������� 3-�� ������</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane fade in active" id="ref1"><table class="table table-striped table-bordered text-center" style="width: 100%;" width="100%" cellspacing="0">
<thead>
	<th style="padding: 5px;text-align: center;"><b>�����</b></th>
	<th style="padding: 5px;text-align: center;"><b>�����</b></th>
	<th style="padding: 5px;text-align: center;"><b>���������</b></th>
	<th style="padding: 5px;text-align: center;"><b>��������</b></th>
	<th style="padding: 5px;text-align: center;"><b>���� �����������</b></th>
</thead>
<?PHP
  $all_money = 0;
  $db->Query("SELECT db_users_a.user, db_users_a.date_reg, db_users_a.referals, db_users_a.email, db_users_a.refsite, db_users_b.to_referer FROM db_users_a, db_users_b 
  WHERE db_users_a.id = db_users_b.id AND db_users_a.referer_id = '$user_id' ORDER BY to_referer DESC");
  
	if($db->NumRows() > 0){
  
  		while($ref = $db->FetchArray()){
		
		?>
<tbody>
<tr align="center" class="ltb">
		<td style="padding: 5px;"><b><a href="/wall/<?=$ref["user"]; ?>"><?=$ref["user"]; ?></a></b></td>
		<td style="padding: 5px;"><?=sprintf("%.2f",$ref["to_referer"]); ?> ���.</td>
		<td style="padding: 5px;"><?=$ref["referals"]; ?></td>
		<td style="padding: 5px;"><a href="http://<?=$ref["refsite"]; ?>" target="_blank"><?=$ref["refsite"]; ?></a></td>
		<td style="padding: 5px;"><?=date("d.m.Y H:i",$ref["date_reg"]); ?></td>
	</tr>
		<?PHP
		$all_money += $ref["to_referer"];
		}
  
	}else echo '<tr><td align="center" colspan="5">� ��� ��� ��������� 1-�� ������</td></tr>'
  ?>
</tbody></table>
	</div>

	<div class="tab-pane fade" id="ref2"><table class="table table-striped table-bordered text-center" style="width: 100%;" width="100%" cellspacing="0">
<thead>
	<th style="padding: 5px;text-align: center;"><b>�����</b></th>
	<th style="padding: 5px;text-align: center;"><b>�����</b></th>
	<th style="padding: 5px;text-align: center;"><b>���������</b></th>
	<th style="padding: 5px;text-align: center;"><b>��������</b></th>
	<th style="padding: 5px;text-align: center;"><b>���� �����������</b></th>
</thead>
<?PHP
  $all_money = 0;
  $db->Query("SELECT db_users_a.user, db_users_a.date_reg, db_users_a.referals, db_users_a.email, db_users_a.refsite, db_users_a.doxod2 FROM db_users_a, db_users_b 
  WHERE db_users_a.id = db_users_b.id AND db_users_a.referer_id2 = '$user_id' ORDER BY doxod2 DESC");

	if($db->NumRows() > 0){
  
  		while($ref = $db->FetchArray()){
		
		?>
<tbody>
<tr align="center" class="ltb">
		<td style="padding: 5px;"><b><a href="/wall/<?=$ref["user"]; ?>"><?=$ref["user"]; ?></a></b></td>
		<td style="padding: 5px;"><?=sprintf("%.2f",$ref["doxod2"]); ?> ���.</td>
		<td style="padding: 5px;"><?=$ref["referals"]; ?></td>
		<td style="padding: 5px;"><a href="http://<?=$ref["refsite"]; ?>" target="_blank"><?=$ref["refsite"]; ?></a></td>
		<td style="padding: 5px;"><?=date("d.m.Y H:i",$ref["date_reg"]); ?></td>
	</tr>
		<?PHP
		$all_money += $ref["doxod2"];
		}
  
	}else echo '<tr><td align="center" colspan="5">� ��� ��� ��������� 2-�� ������</td></tr>'
  ?>
</tbody></table>
	</div>

	<div class="tab-pane fade" id="ref3"><table class="table table-striped table-bordered text-center" style="width: 100%;" width="100%" cellspacing="0">
<thead>
	<th style="padding: 5px;text-align: center;"><b>�����</b></th>
	<th style="padding: 5px;text-align: center;"><b>�����</b></th>
	<th style="padding: 5px;text-align: center;"><b>���������</b></th>
	<th style="padding: 5px;text-align: center;"><b>��������</b></th>
	<th style="padding: 5px;text-align: center;"><b>���� �����������</b></th>
</thead>
<?PHP
  $all_money = 0;
  $db->Query("SELECT db_users_a.user, db_users_a.date_reg, db_users_a.referals, db_users_a.email, db_users_a.refsite, db_users_a.doxod3 FROM db_users_a, db_users_b 
  WHERE db_users_a.id = db_users_b.id AND db_users_a.referer_id3 = '$user_id' ORDER BY doxod3 DESC");

	if($db->NumRows() > 0){
  
  		while($ref = $db->FetchArray()){
		
		?>
<tbody>
<tr align="center" class="ltb">
		<td style="padding: 5px;"><b><a href="/wall/<?=$ref["user"]; ?>"><?=$ref["user"]; ?></a></b></td>
		<td style="padding: 5px;"><?=sprintf("%.2f",$ref["doxod3"]); ?> ���.</td>
		<td style="padding: 5px;"><?=$ref["referals"]; ?></td>
		<td style="padding: 5px;"><a href="http://<?=$ref["refsite"]; ?>" target="_blank"><?=$ref["refsite"]; ?></a></td>
		<td style="padding: 5px;"><?=date("d.m.Y H:i",$ref["date_reg"]); ?></td>
	</tr>
		<?PHP
		$all_money += $ref["doxod3"];
		}
  
	}else echo '<tr><td align="center" colspan="5">� ��� ��� ��������� 3-�� ������</td></tr>'
  ?>
</tbody></table>
	</div>
</div>

<div style="clear:both;">
</div>


</div></div></div>

                  </div>
              </div>
          </div>
        </div> <!-- End Row -->

    </div><!-- container -->


</div>