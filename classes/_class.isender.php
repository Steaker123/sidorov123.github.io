<?php
class isender{
    
	var $Hosts = "";
	
	/*======================================================================*\
	Function:	__construct
	Descriiption: ����������� ������
	\*======================================================================*/
	function __construct(){
	
		$this->Hosts = str_replace("www.","",$_SERVER['HTTPS_HOST']);
	
	}
	
	/*======================================================================*\
	Function:	SendRegKey
	Descriiption: ���������� ��������������� ����
	\*======================================================================*/
	function SendRegKey($mail, $key){
	
		$text = "�� ��� ���-�� ������ �����(�) ������� ����������� �������� � btc.universall.ru �� ��� ����������� �����.<br><br>";
		$text.= "����� ��������� ����������� � btc.universall.ru, ����������, ��������� �� ��������� ������: <a href='http://cripto.biz".$this->Hosts."/signup/key/{$key}'>";
		$text.= "http://cripto.biz".$this->Hosts."/signup/key/{$key}</a>";
		$subject = "������ �� ����������� � cripto.biz";
		
		return $this->SendMail($mail, $subject, $text);
		
	}
	
	/*======================================================================*\
	Function:	RecoveryPassword
	Descriiption: �������������� ������
	\*======================================================================*/
	function RecoveryPassword($user, $pass, $mail){
	
		$text.= "<b>���������(��) ������������</b>, �� ������� ������ � �������������� ������. <br><br>";
		$text.= "��� ������: {$pass}";
		$subject = "�������������� ������ � cripto.biz";
		
		return $this->SendMail($mail, $subject, $text);
		
	}
	
	/*======================================================================*\
	Function:	SendAfterReg
	Descriiption: ���������� ������ ����� �����������
	\*======================================================================*/
	function SendAfterReg($user, $mail, $pass){
	
		$text = "<b>���������(��) ������������</b>, �� ��������� ����������� ������� � ���� btc.universall.ru. ������ ��� ������� ����������!<br><br>";
		$text.= "��� ����� ����������� ������: {$user};{$pass}.";
		$subject = "���������� ����������� � cripto.biz";
		
		return $this->SendMail($mail, $subject, $text);
		
	}
	
	/*======================================================================*\
	Function:	SetNewPassword
	Descriiption: ���������� ������ ����� ����� ������
	\*======================================================================*/
	function SetNewPassword($user, $pass, $mail){
	
		$text = "<b>���������(��) ������������,</b><BR />";
		$text.= "���� ����� ������ ��� �����: {$user};{$pass}<BR />";
		$text.= "���� �� �� ��������� ������ ��������� ��� ��� ����� ������, ����������, ���������� � ������ ���������.";
		$subject = "����� ������ � cripto.biz";
		
		return $this->SendMail($mail, $subject, $text);
		
	}
	
	
	/*======================================================================*\
	Function:	Headers
	Descriiption: �������� ���������� ������
	\*======================================================================*/
	function Headers(){
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers.= "Content-type: text/html; charset=Windows-1251\r\n";
	$headers.= "Date: ".date("m.d.Y (H:i:s)",time())."\r\n";
	$headers.= "From: noreply@cripto.biz \r\n";
	
		return $headers;
	
	}
	
	/*======================================================================*\
	Function:	SendMail
	Descriiption: �����������
	\*======================================================================*/
	function SendMail($recipient, $subject, $message){
	
		$message .= "<br><br>
                <small>����������, �� ��������� �� ������ ������. ������ �������� ����� �� ����� ���� ����������� ��� ����� � ����. 
                ���� � ��� ���� �������, ����������� � support@cripto.biz</small>";
		return (mail($recipient, $subject, $message, $this->Headers())) ? true : false;
	
	}
	
	
	
}
?>