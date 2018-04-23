
<?PHP
$tfstats = time() - 60*60*24;
$db->Query("SELECT 
(SELECT COUNT(*) FROM db_users_a) all_users,
(SELECT SUM(insert_sum) FROM db_users_b) all_insert, 
(SELECT SUM(payment_sum) FROM db_users_b) all_payment,
(SELECT COUNT(*) FROM db_users_a WHERE date_reg > '$tfstats') new_users");
$stats_data = $db->FetchArray();
?>
<div class="numbers">
  <div class="container">
    <div class="row">
      <ul class="numbers__list">
        <li class="numbers__list-item col-md-3">
          <h3 class="numbers__value"><?=$stats_data["all_users"]; ?> ���.</h3>
          <p class="numbers__desc">����� ����������</p>
          <div class="homestatico"><img src="/img/stat_1.png"></div>
        </li>
        <li class="numbers__list-item col-md-3">
          <h3 class="numbers__value"><?=sprintf("%.2f",$stats_data["all_insert"]); ?> ���.</h3>
          <p class="numbers__desc">����� ����������</p>
          <div class="homestatico"><img src="/img/stat_2.png"></div>
        </li>
        <li class="numbers__list-item col-md-3">
          <h3 class="numbers__value"><?=sprintf("%.2f",$stats_data["all_payment"]); ?> ���.</h3>
          <p class="numbers__desc">���������� �����������</p>
          <div class="homestatico"><img src="/img/stat_3.png"></div>
        </li>
        <li class="numbers__list-item col-md-3">
          <h3 class="numbers__value"><?=intval(((time() - $config->SYSTEM_START_TIME) / 86400 ) +1); ?> ����</h3>
          <p class="numbers__desc">����� ������</p>
          <div class="homestatico"><img src="/img/stat_4.png"></div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="about">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="about__body">
          <div class="about__body-inner">
            <h2 class="title"><span class="title__mark">� ������� </span></h2>
            <p>MOTORMONEY - ��� RIP ������������� ������� ��������� � ������������ <b>���������</b> � ������ <b>�������� �����</b>!
            ��� ��� �� ��� ��������� ��� ������������������ � ����� �������, ��������� ���� ����������� �������� � �������� ���������� �����!</p>
            <p></p>
            <a class="btn about__btn" href="/about">
              <span class="btn__text">������ ����������</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="discount">
          <h2 class="title discount__title">
            <span class="title__mark">����������������� </span>����� ������!</h2>
          <div class="discount__body">
            <p class="discount__desc">������� ������ ��������� ������� �� ����� � ������� <span style="background: rgb(255, 210, 0);padding: 2px 5px;border-radius: 3px;color: #001530;font-size:13px;">Hyundai Solaris</span> ������������ � ����� ������������� �������� � ������ ������!</p>
            <a class="btn" href="/user/register">
              <span class="btn__text">�����������</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="feature">
  <div class="feature__list">
    <div class="container">
      <div class="feature__row-list row">
        <div class="feature__item col-md-3">
          <div class="feature__icon">
            <img src="/img/pre_1.png">
          </div>
          <h3 class="feature__title">����������� ������</h3>
          <p class="feature__desc">�� ���������� ���������� ������ ����������� ����������, ���� ���������� � ���� ����� ����. </p>
        </div>
        <div class="feature__item col-md-3">
          <div class="feature__icon">
            <img src="/img/pre_2.png">
          </div>
          <h3 class="feature__title">�������� ����������</h3>
          <p class="feature__desc">���������� ������� ������ ������� � �������� ��� ��������� ������ ������������ �������.</p>
        </div>
        <div class="feature__item col-md-3">
          <div class="feature__icon">
            <img src="/img/pre_3.png">
          </div>
          <h3 class="feature__title">���������� ��������</h3>
          <p class="feature__desc">��������� �� �������� �������� ����������, ������� � ������� ����� ������� ����� �������� �������.</p>
        </div>
        <div class="feature__item col-md-3">
          <div class="feature__icon">
            <img src="/img/pre_4.png">
          </div>
          <h3 class="feature__title">���������� ������</h3>
          <p class="feature__desc">�������� � ���������� ������, ��������� ������� ������� � ��� ������ ������������� �����������.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="feature__list">
    <div class="container">
      <div class="feature__row-list row">
        <div class="feature__item col-md-3">
          <div class="feature__icon">
            <img src="/img/pre_5.png">
          </div>
          <h3 class="feature__title">���������� ������</h3>
          <p class="feature__desc">������ �������� �� ����������, ���������� �������, ��� ��������� ������������ �����������.</p>
        </div>
        <div class="feature__item col-md-3">
          <div class="feature__icon">
            <img src="/img/pre_6.png">
          </div>
          <h3 class="feature__title">SSL ����������</h3>
          <p class="feature__desc">�� ����� ���������� ���������� �� Comodo, ���� ������ ������� �� ������� � ���� ���������������.</p>
        </div>
        <div class="feature__item col-md-3">
          <div class="feature__icon">
            <img src="/img/pre_7.png">
          </div>
          <h3 class="feature__title">��������� ������</h3>
          <p class="feature__desc">���� �������� � ����� ��������� ���������, � ����� ���������������� ��� ���� ���������� ������.</p>
        </div>
        <div class="feature__item col-md-3">
          <div class="feature__icon">
            <img src="/img/pre_8.png">
          </div>
          <h3 class="feature__title">������� ���������</h3>
          <p class="feature__desc">��������� �������� � ������������ ���������� motormoney ������� ����� ��������� ������������.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="best">
  <div class="container">
    <div class="row">
      <div class="best__title col-md-12">
        <h2 class="title">
          <span class="title__mark">�������� </span>��������</h2>
      </div>
      <ul class="best__list">
        <li class="best__item col-md-4">
          <img src="/img/features_1.png" class="featuresico">
          <h3 class="best__item-title">�������</h3>
          <p class="best__item-desc">������������� ������� ������� �� ���� ���������. ��� ����������� ���������� � ����� �������!</p>
        </li>
        <li class="best__item col-md-4">
          <img src="/img/features_2.png" class="featuresico">
          <h3 class="best__item-title">���������</h3>
          <p class="best__item-desc">������ � ����� ������� ����� �� ������ ������������ ��������� ����� �� � ������������ ������!</p>
        </li>
        <li class="best__item col-md-4">
          <img src="/img/features_3.png" class="featuresico">
          <h3 class="best__item-title">������������</h3>
          <p class="best__item-desc">���������� ������� ������� ��� ���� �������������. ������������ � ���������� ������� ��������������!</p>
        </li>
      </ul>
    </div>
  </div>
</div>
		<div class="faq">
			<div class="container">
				<h2 class="title">
					<span class="title__mark">������/�����</span>
				</h2>
				<ul class="faq__list">
					<li class="faq__item faq__item_active row">
						<div class="col-md-7">
							<div class="faq__question">��� � ���� ���������� � ������� motormoney?</div>
							<div class="faq__answer">��� ������. � ����� ������� ���������� ��������� �������� ���������, ���: �������� ������ ���������, �������� ������ �  �������, ����������� ��������� � �.�</div>
							<div class="faq__answer"><br>��������� � �������� ��������� �� ������ ��������� ����� ����� ����������� � "<a href="">��������� �������</a>".</div>
						</div>
					</li>
					<li class="faq__item row">
						<div class="col-md-7">
							<div class="faq__question">� ��� ���� ����� ��� ����� �� ������ ����������� �� ���������?</div>
							<div class="faq__answer">���, � ��� ���� ������, �� ������ �������� ����� �������, ������� ���������� �� ����� �������, ��� �����-���� �����������.</div>
						</div>
					</li>
					<li class="faq__item row">
						<div class="col-md-7">
							<div class="faq__question">�� ����� ��������� ������� �������������� ���� � ����� �������?</div>
							<div class="faq__answer">���������� ������� ����� ����������� ����� ��������� �������: ������.������, QIWI �������, WebMoney, PAYEER, Perfect Money, ADV Cash, Free-Kassa � �.�</div>
							<div class="faq__answer"><br>������� �������������� � �������������� ������ �� ��������� �������: PAYEER, ������.������, QIWI �������, VISA/MasterCard, Perfect Money � ��������� ��������.</div>
						</div>
					</li>
					<li class="faq__item row">
						<div class="col-md-7">
							<div class="faq__question">���� �� � ��� ����������� ���������?</div>
							<div class="faq__answer">�������. ����������� ��������� � motormoney ����� 2 ������, ��������� � ����������� ��������� ������������� �� ���� ��� ������.</div>
						</div>
					</li>
					<li class="faq__item row">
						<div class="col-md-7">
							<div class="faq__question">� ���� �������� �������, ���� � ���� ����������?</div>
							<div class="faq__answer">�� ������ �������� � ������ ��������� �������������, ��� ����� ��������� � ������ "<a href="/helpme">������</a>" � �������� ����� ������� ��� ��� ������ ������� � ��������������.</div>
						</div>
					</li>
				</ul>
			</div>
		</div>