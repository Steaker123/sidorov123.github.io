<?PHP
$user_id = $_SESSION["user_id"];
$db->Query("SELECT * FROM db_users_a, db_users_b WHERE db_users_a.id = db_users_b.id AND db_users_a.id = '$user_id'");
$prof_data = $db->FetchArray();
?> 

<style>
	
    .bonuscoment {
        position: fixed;
        font-family: Arial, Helvetica, sans-serif;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,0.8);
        z-index: 99999;
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        display: none;
        pointer-events: none;
    }

    .bonuscoment:target {
        display: block;
        pointer-events: auto;
        padding-top: 150;
    }

    .bonuscoment > div {
           width: 500px;
    position: relative;
    border: 1px solid;
    border-radius: 4%;
    height: 284;
    color: black; 
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 5px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: #fff;
    background: -o-linear-gradient(#fff, #999);
    box-sizing: border-box;
    }

    .close {
        color: #777777;
        line-height: 25px;
        position: absolute;
        font-family: monospace;
        right: 6px;
        font-size: 26px;
        text-align: center;
        top: 5px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
    }

    .comment_1 {
    color: #659f13!important;
    font-family: arial;
    font-weight: bold;
    font-size: 19px;
    text-align: center;
}
img.comment_img {
    margin: 30px 150px;
    padding: 10px;
}
.comment_1 p {
    font-size: 13px;
    color: #1a8aa5;
}

</style>


<div id="bonus11" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
����� ����������� ������ #1
  <p>���������� �� �������� "����� ����������� ������ #1" ������������� ��������� ��� ������� � ���� 100 �������.</p>
</div>
 
  <img src="/img/growth_1.png" class="comment_img">

          </div>
        </div>

<div id="bonus12" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
����� ����������� ������ #2
  <p>���������� �� �������� "����� ����������� ������ #2" ������������� ��������� ��� ������� � ���� 200 �������.</p>
</div>
 
  <img src="/img/growth_1.png" class="comment_img">

          </div>
        </div>
        <div id="bonus13" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
����� ����������� ������ #3
  <p>���������� �� �������� "����� ����������� ������ #3" ������������� ��������� ��� ������� � ���� 300 �������.</p>
</div>
 
  <img src="/img/growth_1.png" class="comment_img">

          </div>
        </div>

        <div id="bonus14" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
����� ����������� ������ #4
  <p>���������� �� �������� "����� ����������� ������ #4" ������������� ��������� ��� ������� � ���� 400 �������.</p>
</div>
 
  <img src="/img/growth_1.png" class="comment_img">

          </div>
        </div>

                <div id="bonus21" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
����� �������� #1
  <p>���������� �� �������� "����� �������� #1" ������������� ��������� ��� ������� � ���� 500 �������.</p>
</div>
 
  <img src="/img/network_1.png" class="comment_img">

          </div>
        </div>


                <div id="bonus22" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
����� �������� #2
  <p>���������� �� �������� "����� �������� #2" ������������� ��������� ��� ������� � ���� 1000 �������.</p>
</div>
 
  <img src="/img/network_1.png" class="comment_img">

          </div>
        </div>

        <div id="bonus23" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
����� �������� #3
  <p>���������� �� �������� "����� �������� #3" ������������� ��������� ��� ������� � ���� 1500 �������.</p>
</div>
 
  <img src="/img/network_1.png" class="comment_img">

          </div>
        </div>

        <div id="bonus31" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
������� ����� #1
  <p>���������� �� �������� "������� ����� #1" ������������� ��������� ��� ������� � ���� 1000 �������.</p>
</div>
 
  <img src="/img/hourglass_1.png" class="comment_img">

          </div>
        </div>

                <div id="bonus32" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
������� ����� #2
  <p>���������� �� �������� "������� ����� #2" ������������� ��������� ��� ������� � ���� 1500 �������.</p>
</div>
 
  <img src="/img/hourglass_1.png" class="comment_img">

          </div>
        </div>

          <div id="bonus33" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
������� ����� #3
  <p>���������� �� �������� "������� ����� #3" ������������� ��������� ��� ������� � ���� 2000 �������.</p>
</div>
 
  <img src="/img/hourglass_1.png" class="comment_img">

          </div>
        </div>

                  <div id="bonus41" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
������� ����� #1
  <p>���������� �� �������� "������� ����� #1" ������������� ��������� ��� ������� � ���� 1400 �������.</p>
</div>
 
  <img src="/img/strongbox_1.png" class="comment_img">

          </div>
        </div>
                          <div id="bonus42" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
������� ����� #2
  <p>���������� �� �������� "������� ����� #2" ������������� ��������� ��� ������� � ���� 2100 �������.</p>
</div>
 
  <img src="/img/strongbox_1.png" class="comment_img">

          </div>
        </div>

                                 <div id="bonus43" class="bonuscoment">
<div>
<a href="#close" title="�������" class="close"><img src="/img/x.png"></a>
<br>
            <div class="comment_1">
������� ����� #3
  <p>���������� �� �������� "������� ����� #3" ������������� ��������� ��� ������� � ���� 2800 �������.</p>
</div>
 
  <img src="/img/strongbox_1.png" class="comment_img">

          </div>
        </div>