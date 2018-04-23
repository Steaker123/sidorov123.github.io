<?PHP
$_OPTIMIZATION["title"] = "�������� �����";
$_OPTIMIZATION["description"] = "������� ��������� � ������� ����������";
$_OPTIMIZATION["keywords"] = "������� ��, ������� ���������, ������� ����������";
?>

<div class="head-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title-page">��������</h1>
        <div class="breadcrumbs">
          <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
              <a href="/" class="breadcrumbs__link">�������</a>
            </li>
            <li class="breadcrumbs__item">��������</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="content" style="padding-top:0;">

  <div class="gallery">
    <div class="gallery__container container">
      <h2 class="title gallery__title">
          <span class="title__mark">������ </span>���������</h2>
      <p class="desc">�������� - ��� �������� ����������� ��� �������� ���������� ������� ���������� ������������� ����� �� �� ����������.<br> �� ����� � ��������� ����� ���������� ����� �� ������������� �������. <b>����� ������������� �� ������ ��� ������.</b></p>
      <div class="filter gallery__filter">
<span data-filter=".gallery__list-item" class="filter__item filter__item_active">
          <span class="filter__item-text">��� ��������</span>
        </span>
        <span data-filter=".gallery__list-item_invest" class="filter__item">
          <span class="filter__item-text">������� ����������</span>
        </span>
        <span data-filter=".gallery__list-item_refferal" class="filter__item">
          <span class="filter__item-text">������� ���������</span>
        </span>
      </div>


<div class="gallery__list row" style="position: relative; height: 1185px;">

        <div class="gallery__list-item gallery__list-item_refferal col-md-9" style="position: absolute; left: 0px; top: 1185px;">

<?PHP

# ������ ���������
if(isset($_GET["list"])){


	# ������ �������������
	$db->Query("SELECT * FROM db_competition WHERE status > 0");
	if($db->NumRows() > 0){
	
	?>

	
	<?PHP
		while($data = $db->FetchArray()){
		
		?>

123


		<?PHP
		}

	}else echo "<div class='alert alert-danger'><b>��� ����������� ���������</b></div>";


?>



<?PHP

return;
}


$db->Query("SELECT * FROM db_competition WHERE status = 0 LIMIT 1");
if($db->NumRows() == 1){
$comp = $db->FetchArray();	
	?>
	<div class="popup_protect__def__img col" style="display: block;">
		<img src="/img/contest_2.png">
	</div>
	<div class="card__head">
		<h3 class="card__name" style="font-size: 16px;">����������� ������� ��������� �<?=$comp["id"]; ?> - ���� <b style="color: #f73454;"><?=$comp["1m"]+$comp["2m"]+$comp["3m"]+$comp["4m"]+$comp["5m"]; ?> ���.</b></h3>
		<div class="card__period">������ ��������: <?=date("d.m.Y � H:i:s", $comp["date_add"]); ?></div>
		<div class="card__period">��������� ��������: <?=date("d.m.Y � H:i:s", $comp["date_end"]); ?></div>
	</div>
	<p class="desc" style="margin-bottom: 10px;">� �������� ��������� ��� ������������ �������. 5 �������� ����, ���������� �� ������������, �������� ������� ��������� ���� ������ �� ����� ���������� �������� �� ���������� �����.</p>

	<?PHP
	
	# ������ �������������
	$db->Query("SELECT * FROM db_competition_users ORDER BY points DESC LIMIT 10");
	if($db->NumRows() > 0){
	
	?>

<table class="bordered" style="width:100%;margin-bottom:15px;">
                <thead>
                <tr>
                  <th>�������</th>
                  <th>�����</th>
                  <th>����� ����������</th>
                <th>����</th>
                </tr>
                </thead>
                <tbody>
	<?PHP
		$position = 1;
		while($data = $db->FetchArray()){
		
		?>
			<tr class="htt" >
				<td align="center" width="75"><?=$position; ?></td>
				<td align="center"><?=$data["user"]; ?></td>
				<td align="center"><?=sprintf("%.0f",$data["points"]); ?></td>
				<td align="center"><?=(intval($comp["{$position}m"]) > 0) ? $comp["{$position}m"]." ���." : "-" ?></td>
		 	</tr>
		<?PHP
		$position++;
		}
	
	?></tbody>
</table>
	<?PHP
	
	}else echo "<center><b><font color = '#d20234'>��� ���������� � ��������</font></b></center>";

}else echo "<center><b><font color = '#d20234'>� ������ ������ ������� ��������� �� ����������</font></b></center>";

?>

        </div>

        <div class="gallery__list-item gallery__list-item_invest col-md-9" style="position: absolute; left: 0px; top: 0px;">



<?PHP

# ������ ���������
if(isset($_GET["list2"])){


	# ������ �������������
	$db->Query("SELECT * FROM db_invcompetition WHERE status > 0");
	if($db->NumRows() > 0){
	
	?>
	
	
	<?PHP
		while($data = $db->FetchArray()){
		
		?>

123
		<?PHP
		}

	}else echo "<center><b><font color = 'red'>��� ����������� ���������</font></b></center><BR />";


?>

<?PHP

return;
}


$db->Query("SELECT * FROM db_invcompetition WHERE status = 0 LIMIT 1");
if($db->NumRows() == 1){
$comp = $db->FetchArray();	
	?>

          <div class="popup_protect__def__img col" style="display: block;">
            <img src="/img/contest_1.png">
          </div>
                    <div class="card__head">
            <h3 class="card__name" style="font-size: 16px;">����������� ������� ���������� �<?=$comp["id"]; ?> - ���� <b style="color: #f73454;"><?=$comp["1m"]+$comp["2m"]+$comp["3m"]+$comp["4m"]+$comp["5m"]; ?> ���.</b></h3>
            <div class="card__period">������ ��������: <?=date("d/m/Y � H:i:s", $comp["date_add"]); ?></div>
            <div class="card__period">��������� ��������: <?=date("d/m/Y � H:i:s", $comp["date_end"]); ?></div>
          </div>
              <p class="desc" style="margin-bottom: 10px;">� �������� ��������� ��� ������������ �������. 5 �������� ����, ���������� �� ������������, ������� ��������� ���� ������ �� ����� ���������� �������� �� ���������� �����.</p>
	<?PHP
	
	# ������ �������������
	$db->Query("SELECT * FROM db_invcompetition_users WHERE points > '0' ORDER BY points DESC LIMIT 10");
	if($db->NumRows() > 0){
	
	?>
<table class="bordered" style="width:100%;margin-bottom:15px;">
                <thead>
                <tr>
                  <th>�������</th>
                  <th>�����</th>
                  <th>����� ����������</th>
                <th>����</th>
                </tr>
                </thead>
                <tbody>
	<?PHP
		$position = 1;
		while($data = $db->FetchArray()){
		
		?>
			<tr class="htt" >
				<td align="center" width="75"><?=$position; ?></td>
				<td align="center"><?=$data["user"]; ?></td>
				<td align="center"><?=sprintf("%.0f",$data["points"]); ?></td>
				<td align="center"><?=(intval($comp["{$position}m"]) > 0) ? $comp["{$position}m"]." ���." : "-" ?></td>
		 	</tr>
		<?PHP
		$position++;
		}
	
	?>
</table>

	<?PHP
	
	}else echo "<center><b><font color = '#d20234'>��� ���������� � ��������</font></b></center>";

}else echo "<center><b><font color = '#d20234'>� ������ ������ ������� ���������� �� ����������</font></b></center>";

?>
              </div></div></div>
</div>