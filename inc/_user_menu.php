 <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <div class="user-details">
                        <div class="text-center">
                            <img src="/img/nouser.png" alt="" class="img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?=$_SESSION["user"]; ?></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/profile"> ��� �������</a></li>
                                    <li><a href="/settings"> ���������</a></li>
				   <li><a href="/myreferrals">�������� </a></li>
                                    <li class="divider"></li>
                                    <li><a href="/output"> �����</a></li>
                                </ul>
                            </div>

                            <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
                        </div>
						<br>
                        <button type="button" class="btn waves-effect btn-default btn-block" style="text-align: left;padding: 6px 10px;font-size: 13px;" data-toggle="tooltip" data-placement="top" data-original-title="������ �� ����� ��� �������">
						    <i class="mdi mdi-arrow-left-bold-circle-outline"></i> �� �������: <div class="balancelist">{!BALANCE_B!} ���.</div>
						</button>
                        <button type="button" class="btn waves-effect btn-default btn-block" style="text-align: left;padding: 6px 10px;font-size: 13px;margin-top:5px;" data-toggle="tooltip" data-placement="top" data-original-title="��� ������ �� ����� ��� ������">
						    <i class="mdi mdi-arrow-right-bold-circle-outline"></i> �� �����: <div class="balancelist">{!BALANCE_P!} ���.</div>
						</button>
                        <button type="button" class="btn waves-effect btn-default btn-block" style="text-align: left;padding: 6px 10px;font-size: 13px;margin-top:5px;" data-toggle="tooltip" data-placement="top" data-original-title="��� ������ �� ����� ��� �������">
						    <i class="mdi mdi-bullhorn"></i> �� �������: <div class="balancelist">0.00 ���.</div>
						</button>
                    </div>
                    <!--- Divider -->
                   <div id="sidebar-menu">
                        <ul>
                            <li><hr></li>
                            <li><a href="/profile" class="waves-effect"><i class="fa fa-user-circle"></i><span> ��� ������� </span></a></li>
                            <li><a href="/carpark" class="waves-effect"><i class="fa fa-car"></i><span> ��� �������� <span class="badge badge-default pull-right" data-toggle="tooltip" data-placement="left" data-original-title="���-�� ����� � ����� ���������"><?=$prof_data["a_t"]+$prof_data["b_t"]+$prof_data["c_t"]+$prof_data["d_t"]+$prof_data["e_t"]+$prof_data["f_t"]; ?></span></span></a></li>
                            <li><a href="/training" class="waves-effect"><i class="fa fa-info-circle"></i><span> ��������� ������ </span></a></li>
                            <li><hr></li>
                            <li><a href="/insert" class="waves-effect"><i class="fa fa-plus-square"></i><span> ��������� ������ </span></a></li>
                            <li><a href="/outpay" class="waves-effect"><i class="fa fa-minus-square"></i><span> �������� ������� </span></a></li>
                            <li><a href="/exchange" class="waves-effect"><i class="fa fa-refresh"></i><span> ����� ������� </span></a></li>
                            <li><hr></li>
                            <li><a href="/surfing" class="waves-effect"><i class="fa fa-mouse-pointer"></i><span> Ѹ����� ������ <span class="badge badge-default pull-right" data-toggle="tooltip" data-placement="left" data-original-title="��������� ������ ��� ���������">25</span></span></a></li>
                            <li><a href="/addsurfing" class="waves-effect"><i class="fa fa-forward"></i><span> �������� ���� � ������� </span></a></li>
			<li><a href="/adv_balance" class="waves-effect"><i class="fa fa-bullhorn"></i><span> ��������� ������ </span></a></li>
                            <li><hr></li>
                            <li><a href="/partnership" class="waves-effect"><i class="fa fa-handshake-o"></i><span> ����������� ��������� </span></a></li>
                            <li><a href="/myreferrals" class="waves-effect"><i class="fa fa-users"></i><span> ������ ��������� <span class="badge badge-default pull-right" data-toggle="tooltip" data-placement="left" data-original-title="���-�� ����� ���������">19</span></span></a></li>
                            <li><a href="/promo" class="waves-effect"><i class="fa fa-picture-o"></i><span> ��������� ��������� </span></a></li>
                            <li><hr></li>
                            <li><a href="/quests" class="waves-effect" style="color: #b05454;font-weight: bold;"><i class="fa fa-ravelry" style="color: #b05454;"></i><span> ������������ ������ </span></a></li>
						    <li><a href="./daily" class="waves-effect"><i class="fa fa-gift"></i><span> ���������� ����� </span></a></li>
                            <li><a href="/stat" class="waves-effect"><i class="fa fa-area-chart"></i><span> ���������� ������� </span></a></li>
                            <li><a href="/calculator" class="waves-effect"><i class="fa fa-calculator"></i><span> ����������� ������ </span></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->
