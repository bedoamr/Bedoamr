<?php
//Coniction by Mr.Monk

$mrmonkIP='127.0.0.1';// �� ��� ������� ������� ��� �� ��������� �� �� �� �� ���� �� �� ���� �� ��

$mrmonkHost='localhost';// �� ��� ������� ������� ��� �� ��������� �� �� �� �� ����� �� ����

$mrmonkUser='root';// �� ��� ������� ����� ������ ���� ������ ��� �� �� �� �� ����� �� ����

$mrmonkDB='hamoo';// ��� ����� ��������

$mrmonkPass='123456789';// ������ ��������

$mrmonkPort='5829';// ���� ������� ��� ��� ��� ����

$rs = mysql_connect($mrmonkIP, $mrmonkUser, $mrmonkPass) or die(mysql_error());
mysql_select_db($mrmonkDB,$rs) or die(mysql_error());//Connection

//Change some rights by Mr.Monk

$mrmonkServer='daany';// ��� ������

$mrmonkFace='https://www.facebook.com/BedoAmr01096';// ��� ��� ������

$mrmonkFroum='https://www.youtube.com/channel/UCjnUD2TjOsLcJsemVOK-fMA';// ������� ���� ������ �� ������ �� ���� �����

//Shipping Rates by Mr.Monk

$mrmonkNam='VIP6';// ��� ��� ���� �����

$mrmonkName='VIP';// ����� ������ �����

$mrmonkNames='Level 6';// ����� ������ ������

$mrmonkPrice='25';// ��� ������

$mrmonkNam2='GoldCup';// ��� ���� ���� �����

$mrmonkName2='Gold Cup';// ����� ������ �����

$mrmonkNames2='3,000 HP , Attack , MP';// ����� ������ ������

$mrmonkPrice2='50';// ��� ������

$mrmonkNam3='Cps Purchase[1]';// ��� ���� ���� �����

$mrmonkName3='1,000,000';// ����� ������ �����

$mrmonkNames3='ConquerPoints';// ����� ������ ������

$mrmonkPrice3='10';// ��� ������

$mrmonkNam4='Cps Purchase[2]';// ��� ���� �������

$mrmonkName4='10,000,000';// ����� ������ �����

$mrmonkNames4='ConquerPoints';// ����� ������ ������

$mrmonkPrice4='85';// ��� ������

//Download Links by Mr.Monk

$mrmonkClient='https://www.youtube.com/channel/UCjnUD2TjOsLcJsemVOK-fMA';// ���� ����� ����� ������

$mrmonkPatch='';// ���� ����� ���� ������ �����

$mrmonkPatch2='';// ���� ����� ���� ���� �����

$mrmonkAutoPatch='';// ���� ����� ����� ���� ������

// ������ : ����� ����� ��� ������ �� ��� ������ ������ �������

// End Config
?>