<?PHP
$_OPTIMIZATION["title"] = "���� ����������";
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users_a, db_users_b WHERE db_users_a.id = db_users_b.id AND db_users_a.id = '$user_id'");
$prof_data = $db->FetchArray();
?> 

<?php
include 'user_bonus.php';
?>

<script type="text/javascript">
(function(){
    var rb = document.createElement('script');
        d = new Date();
    d.setHours(0);
    d.setMinutes(0);
    d.setSeconds(0);
    d.setMilliseconds(0);
    rb.type = 'text/javascript';
    rb.async = true;
    rb.src = '//s1.rotaban.ru/rotaban.js?v=' + d.getTime();
    (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(rb);
})();
</script>


								<div class="silver-bk">


<style>     
  .bonus_user_error {
    background: #e8e8f8;
    padding: 11px 107px 10px;
    height: 80px;margin: 10px 0;
    position: relative;
    opacity: 0.5;
}
  .bonus_user {
    background: #e8e8f8;
    padding: 11px 107px 10px;
    position: relative;
}
.bonus_user_name {
    color: #3838bd;
    font-weight: bold;
    font-size: 20px;
}
.bonus_user_title {
    color: rgba(0, 0, 0, 0.42);
    font-weight: bold;
    font-size: 15px;
}
.prize {
    position: absolute; right: 0px;top: 0;
    margin1: -62px 424px;text-align: center;
    width: 124px;height: 80px;
    color: #ffffff;
    padding: 2px 7px; border: 4px double #e8e8f8;
    background: #3838bd;
}
.prize span{font-weight: bold;
	font-size: 24px;
	display: block; line-height: 22px;
}
</style>

<?php if ($prof_data[bonus_1] >= 1) { ?>
<div class="bonus_user">
<img src="/img/growth.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name"> ����� ����������� ������ #1</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ����������� ������� �� ����� 100 � ����� ������.</div>
  <div class="prize"> ����: <span>100</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/growth.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name"> ����� ����������� ������ #1</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ����������� ������� �� ����� 100 � ����� ������.</div>
  <div class="prize"> ����:  <span>100</span> ����� </div>
</div>

<? } ?>
<?php if ($prof_data[bonus_1] >= 2) { ?>
<div class="bonus_user">
<img src="/img/growth.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name"> ����� ����������� ������ #2</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ����������� ������� �� ����� 200 � ����� ������.</div>
  <div class="prize"> ����: <span>200</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/growth.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name"> ����� ����������� ������ #2</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ����������� ������� �� ����� 200 � ����� ������.</div>
  <div class="prize"> ����: <span>200</span> ����� </div>
</div>

<? } ?>

 <?php if ($prof_data[bonus_1] >= 3) { ?>
<div class="bonus_user">
<img src="/img/growth.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name"> ����� ����������� ������ #3</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ����������� ������� �� ����� 300 � ����� ������.</div>
  <div class="prize"> ����: <span>300</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/growth.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name"> ����� ����������� ������ #3</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ����������� ������� �� ����� 300 � ����� ������.</div>
  <div class="prize"> ����: <span>300</span> ����� </div>
</div>

<? } ?>

<?php if ($prof_data[bonus_1] >= 4) { ?>
<div class="bonus_user">
<img src="/img/growth.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name"> ����� ����������� ������ #4</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ����������� ������� �� ����� 400 � ����� ������.</div>
  <div class="prize"> ����: <span>400</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/growth.png" style=" position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name"> ����� ����������� ������ #4</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ����������� ������� �� ����� 400 � ����� ������.</div>
  <div class="prize"> ����: <span>400</span> ����� </div>
</div>

<? } ?>

<?php if ($prof_data['bonus_2'] >= 1) { ?>
<div class="bonus_user">
<img src="/img/network.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #1db680"> ����� �������� #1</div>
  <div class="bonus_user_title"> ������ ����� �������� ������� ������� 50 � ������ ���������.</div>
  <div class="prize" style="background: #1db680;"> ����: <span>500</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/network.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #1db680"> ����� �������� #1</div>
  <div class="bonus_user_title" > ������ ����� �������� ������� ������� 50 � ������ ���������.</div>
  <div class="prize" style="background: #1db680;"> ����: <span>500</span> ����� </div>
</div>

<? } ?>

<?php if ($prof_data['bonus_2'] >= 2) { ?>
<div class="bonus_user">
<img src="/img/network.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #1db680"> ����� �������� #2</div>
  <div class="bonus_user_title"> ������ ����� �������� ������� ������� 100 � ������ ���������.</div>
  <div class="prize" style="background: #1db680;"> ����: <span>1000</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/network.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #1db680"> ����� �������� #2</div>
  <div class="bonus_user_title"> ������ ����� �������� ������� ������� 100 � ������ ���������.</div>
  <div class="prize" style="background: #1db680;"> ����: <span>1000</span> ����� </div>
</div>

<? } ?>

<?php if ($prof_data['bonus_2'] >= 3) { ?>
<div class="bonus_user">
<img src="/img/network.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #1db680"> ����� �������� #3</div>
  <div class="bonus_user_title"> ������ ����� �������� ������� ������� 200 � ������ ���������.</div>
  <div class="prize" style="background: #1db680;"> ����: <span>1500</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/network.png" style="    position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #1db680"> ����� �������� #3</div>
  <div class="bonus_user_title"> ������ ����� �������� ������� ������� 200 � ������ ���������.</div>
  <div class="prize" style="background: #1db680;"> ����: <span>1500</span> ����� </div>
</div>

<? } ?>


<?php if ( $prof_data['bonus_3'] >= 1) { ?>
<div class="bonus_user">
<img src="/img/hourglass.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #424a60"> ������� ����� #1</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� � ������� ����������� ������ 30 ����.</div>
  <div class="prize" style="background: #424a60 ;"> ����: <span>1000</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/hourglass.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color:#424a60 "> ������� ����� #1</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� � ������� ����������� ������ 30 ����.</div>
  <div class="prize" style="background: #424a60"> ����: <span>1000</span> ����� </div>
</div>
<? } ?>

<?php if ($prof_data['bonus_3'] >= 2) { ?>
<div class="bonus_user">
<img src="/img/hourglass.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #424a60"> ������� ����� #2</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� � ������� ����������� ������ 150 ����.</div>
  <div class="prize" style="background: #424a60 ;"> ����: <span>1500</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/hourglass.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color:#424a60 "> ������� ����� #2</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� � ������� ����������� ������ 150 ����.</div>
  <div class="prize" style="background: #424a60"> ����: <span>1500</span> ����� </div>
</div>

<? } ?> 

<?php if ($prof_data['bonus_3'] >= 3) { ?>
<div class="bonus_user">
<img src="/img/hourglass.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #424a60"> ������� ����� #3</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� � ������� ����������� ������ 360 ����.</div>
  <div class="prize" style="background: #424a60 ;"> ����: <span>2000</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/hourglass.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color:#424a60 "> ������� ����� #3</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� � ������� ����������� ������ 360 ����.</div>
  <div class="prize" style="background: #424a60"> ����: <span>2000</span> ����� </div>
</div>

<? } ?>

<?php if ( $prof_data['bonus_4'] >= 1) { ?>
<div class="bonus_user">
<img src="/img/strongbox.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #a87e43"> ������� ����� #1</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ������� �� �������� 10000 �� �����  ������� � ������.</div>
  <div class="prize" style="background: #a87e43"> ����: <span>1400</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/strongbox.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color:#a87e43 "> ������� ����� #1</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ������� �� �������� 10000 �� �����  ������� � ������.</div>
  <div class="prize" style="background: #a87e43"> ����: <span>1400</span> �����  </div>
</div>

<? } ?>
<?php if ( $prof_data['bonus_4'] >= 2) { ?>
<div class="bonus_user">
<img src="/img/strongbox.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #a87e43"> ������� ����� #2</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ������� �� �������� 20000 �� �����  ������� � ������.</div>
  <div class="prize" style="background: #a87e43"> ����: <span>2100</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/strongbox.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color:#a87e43 "> ������� ����� #2</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ������� �� �������� 20000 ������� �� �����  � ������.</div>
  <div class="prize" style="background: #a87e43"> ����: <span>2100</span> ����� </div>
</div>

<? } ?>
<?php if ( $prof_data['bonus_4'] >= 3) { ?>
<div class="bonus_user">
<img src="/img/strongbox.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color: #a87e43"> ������� ����� #3</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ������� �� �������� 30000 ������� �� �����  � ������.</div>
  <div class="prize" style="background: #a87e43"> ����: <span>2800</span> ����� </div>
</div>

<? }else{ ?>

<div class="bonus_user_error">
<img src="/img/strongbox.png" style="position: absolute; margin: -4px -86px;">
  <div class="bonus_user_name" style="color:#a87e43 "> ������� ����� #3</div>
  <div class="bonus_user_title"> ������ ����� �������� ���� ������� ������� �� �������� 30000 ������� �� ����� � ������.</div>
  <div class="prize" style="background: #a87e43"> ����: <span>2800</span> ����� </div>
</div>

<? } ?>

								<div class="clr"></div>	
								</div>
								

