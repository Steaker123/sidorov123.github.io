
<h2>��������� ������� | 1000 ����� = 5 �������</h2>

<?PHP
$usid = $_SESSION["user_id"];
$usname = $_SESSION["user"];

$db->Query("SELECT * FROM db_users_b WHERE id = '$usid' LIMIT 1");
$user_data = $db->FetchArray();

$db->Query("SELECT * FROM db_config WHERE id = '1' LIMIT 1");
$sonfig_site = $db->FetchArray();
?>  
<div class="alert panel-default">

 <?PHP
  if($user_data["insert_sum"] >=0) {
  
if(isset($_POST["sum2"])){

$sum2 = intval($_POST["sum2"]);

  if($sum2 >= 1000){
  
    if($user_data["money_p"] >= $sum2){
    
  $add_sum2 = $sum2/200;
    
   
    
    $db->Query("UPDATE db_users_b SET pay_points = pay_points + $add_sum2, money_p = money_p - $sum2 WHERE id = '$usid'");
    
    
    echo "<center class='alert alert-success'><b>�� ������� ���������!</b></center><BR />";
    
    }else echo "<center class='alert alert-danger'><b>������������ ����� �� ����� ������</b></center><BR />";
  
  }else echo "<center class='alert alert-danger'><b>����������� ����� ��� �������� 1000 �����</b></center><BR />";

}

?>
<form action="" method="post">

<table class="table table-bordered" style="width: 500px;" border="0" align="center">
  <tr>
    <td style="vertical-align: middle;"><font color="#000;">������� ������ ��� ������</font> (���. 1000): </td>
    <td align="center"><input type="text" class="lg" name="sum2" id="sum2" value="1000" style="width:140px;"/></td>
  </tr>
  
  <tr>
    <td style="vertical-align: middle;" colspan="2" align="center"><input type="submit" name="swap" value="���������" class="btn btn-success" /></td>
  </tr>
</table>
</form> 
<?
  } else { echo "<center><font color='red'>�� �� ������ ���������, ���������� ��������� ������� ������ �� ����� �� 100 ���.</font></center>"; }
  ?>
</div>