
<?PHP
$_OPTIMIZATION["title"] = "����������� ���������";
$user_id = $_SESSION["user_id"];
$uname = $_SESSION["user"];
$db->Query("SELECT COUNT(*) FROM db_users_a WHERE referer_id = '$user_id'");
$refs = $db->FetchRow(); // ������� ��������� 1 ������
$db->Query("SELECT COUNT(*) FROM db_users_a WHERE referer_id2 = '$user_id'");
$refs2 = $db->FetchRow(); // ������� ��������� 2 ������
$db->Query("SELECT COUNT(*) FROM db_users_a WHERE referer_id3 = '$user_id'");
$refs3 = $db->FetchRow(); // ������� ��������� 3 ������

# ========= ����� ����� ���������� �� ��������� ========= #
        $db->Query("SELECT doxod2 FROM db_users_a WHERE referer_id2 = '$user_id'");
        $doxod_refs2 = $db->FetchArray();
        $doxod_refs2['doxod2'];

        $db->Query("SELECT doxod2,doxod3 FROM db_users_a WHERE referer_id3 = '$user_id'");
        $doxod_refs3 = $db->FetchArray();
        $doxod_refs3['doxod3'];

        $zarab_na_refax = $prof_data["from_referals"] + $doxod_refs2['doxod2'] + $doxod_refs3['doxod3'];
?>




<div class="page-content-wrapper ">

    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-lg-3 partner_cl_top">
                <div class="panel text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title text-muted font-light profilemsz">���������� ���������</h4>
                    </div>
                    <div class="panel-body p-t-0">
                        <h2 class="m-t-0 m-b-5 profilemst"><i class="mdi mdi-account-network text-danger m-r-10"></i><b><?=$refs; ?> / <?=$refs2; ?> / <?=$refs3; ?> ���.</b></h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 partner_cl_top">
                <div class="panel text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title text-muted font-light profilemsz">����� � ���������</h4>
                    </div>
                    <div class="panel-body p-t-0">
                        <h2 class="m-t-0 m-b-5 profilemst"><i class="mdi mdi-cash-multiple text-primary m-r-10"></i><b><?=sprintf("%.2f",$zarab_na_refax); ?>�</b></h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 partner_cl_top">
                <div class="panel text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title text-muted font-light profilemsz">���������� ���. ������</h4>
                    </div>
                    <div class="panel-body p-t-0">
                        <h2 class="m-t-0 m-b-5 profilemst"><i class="mdi mdi-mouse text-danger m-r-10"></i><b>�� ���</b></h2>
                    </div>
                </div>
            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-lg-9 partner_cl">
                <div class="panel panel-primary">
                    <div class="panel-body">
  <div class="row">
  <div class="col-md-6">
                          <h4 class="m-b-10 m-t-0" style="color:#d20909;">����������� ������ � �������:</h4>
    <h5 class="profileinfoh5"><b class="partner_stath5">���. ������:</b> <span style="float:none;margin-left: 15px;"> http://<?=$_SERVER['HTTP_HOST']; ?>/?ref=<?=$_SESSION["user_id"]; ?></span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">������ 448x60:</b> <span style="float:none;margin-left: 15px;"> � ����������</span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">������ 200x300:</b> <span style="float:none;margin-left: 15px;"> � ����������</span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">������ 240x400:</b> <span style="float:none;margin-left: 15px;"> � ����������</span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">������ 728x90:</b> <span style="float:none;margin-left: 15px;"> � ����������</span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">������ 200x200:</b> <span style="float:none;margin-left: 15px;"> � ����������</span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">������ 100x100:</b> <span style="float:none;margin-left: 15px;"> � ����������</span></h5>
                        </div>
  <div class="col-md-6">
  <h4 class="m-b-10 m-t-0" style="color:#d20909;">���. ����������:</h4>
                          <h5 class="profileinfoh5"><b class="partner_stath5">- ���-�� ��������� (1 ��.):</b> <span><?=$refs; ?> ���.</span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">- ���-�� ��������� (2 ��.):</b> <span><?=$refs2; ?> ���.</span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">- ���-�� ��������� (3 ��.):</b> <span><?=$refs3; ?> ���.</span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">- ����� ����� � ���������:</b> <span><?=sprintf("%.2f",$zarab_na_refax); ?>�</span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">- ����� � ��������� (1 ��.):</b> <span><?=$prof_data["from_referals"];?>�</span></h5>
    <h5 class="profileinfoh5"><b class="partner_stath5">- ����� � ��������� (2 ��.):</b> <span><?=$doxod_refs2['doxod2'];?>�</span></h5>
    <h5 class="profileinfoh5 m-b-0"><b class="partner_stath5">- ����� � ��������� (3 ��.):</b> <span><?=$doxod_refs3['doxod3'];?>�</span></h5>
  </div>
  </div>
</div>
                </div>
            </div>
            <div class="col-lg-9 partner_cl">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h4 class="m-b-10 m-t-0">�������� ����������� ���������:</h4>
  <p>� ����������� ��������� ����� ����������� ����� ������������ �������. ��������� ��������������� ��� �������������� �� ������������ �������� ����� ���������. �������� - ������������, ������� ������������������ �� ������� ����� �������� �� ����� ����������� ������.</p>
                        <h4 class="m-b-10 m-t-0">��������������:</h4>
  <p class="partner_payp"> - 12% �� ����� ���������� �������� 1 ������</p>
  <p class="partner_payp"> - 3% �� ����� ���������� �������� 2 ������</p>
  <p class="partner_payp"> - 1% �� ����� ���������� �������� 3 ������</p>
  <p class="partner_payp"> - 0.005 ���. � ������� ��������� � "Ѹ������ ������"</p>
  <p class="partner_payp"> - 5% �� ����� ���������� ���������� �������</p>
  <h5 class="m-b-0 m-t-0" style="color:#b10909;letter-spacing:1px;">�������������� ������������� �� ��� ������ ��� ������!</h5>
</div>
                </div>
            </div>
        </div> <!-- End Row -->

    </div><!-- container -->


</div>