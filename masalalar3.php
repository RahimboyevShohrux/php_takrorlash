<?php
/*1-masala.Xonangizni oboyini almashtirmoqchisiz.
Xonaning balandligi 2.7m. Tomonlari 5m va 3 m. 
1 ta rulon oboy 10 m, eni 1.15. Bozordan faqat butun rulonli oboy olish mumkin.
Xonanin oboylash uchun:
- nechta rulon oboy kerak;
- eni 1.15 bo'lgan oboydan qancha metr oboy ketadi.*/

//izoh honani to'gri burchakli paraleliped deb tasavur qilamiz.
//paralelipedda 6 ta qirra mavjud. biz 4 qirrasini yuzini hiosoblaymiz.sababi  xonaning tepa va past qismiga oboy yopishtrilmaydi
 $h=2.7;
 $t1=5;$t2=3;
 //yon tomon devor yuzi;
 $s_yon=$h*$t1;
 $s_old=$h*$t2;
 // 2 ta yon tomon va 2 ta old tomon: yani qarama qarshi tomonlar yuzasi teng
 // to'la yuzani hisoblaymiz
 $s_umumiy=2*$h*($t1+$t2);
 // oboy bu to'gri to'rtburchak degani
 $rulon=10;
 $oboy_eni=1.15;
 $s_oboy=$rulon*$oboy_eni;
 $result=($s_umumiy/$s_oboy); //necha top oboy ketishi
 $metr=$result*$rulon;// nechi metr  oboy ketishi;
 print "$metr metr oboy ketadi"." "; // bu aniq necha metr ketishi 
 
 //bozorda faqat butun oboy sotilgani uchun shart beramiz;
 //agar nechi metr ketishi float bo'lsa biz endi bitta ko'p rulon olishimiz kerak bo'ladi
 //masalan: sizga 35 m oboy ketsa siz 3 ta rulon 30 metr  ololmaysiz. Shuning uchun 40 m qilip olasiz.
 if(is_float($result)){
 	$result=ceil($result);
 }
 else {
 	$resiult=$result;
 }
 echo "$result ta rulon olish kerak"."  ";
 /*2-masala: 
 Xonaning balandligi 2.7m. Xonaning tomonlari 5m va 3 m. 
1 ta g`ishtning balandli 10 sm, uzunli 25sm, eni 12sm.
Oynasi va eshiki yo`q bo`lgan xonani, faqat devorlarini g`ishtdan terish uchun 
nechta g`isht kerak bo`ladi. 

Devorning qalinligi : 25sm. 
G`isht orasiga qo`yiladigan loyning o`lchamlari hisobga olinmasin.*/
$h=2.7;
$t1=5;
$t2=3;
$h_gisht=0.1;// 10 sm =0.1 metr
$gisht_eni=0.12;
$gisht_uzunligi=0.25;
//4 ta devorga nechta gisht ketadi?
$eniga=(($t1+$t2)/$gisht_eni)*2;//eniga ketadigan g'isht
$boyiga=$h/$h_gisht; 
$umumiy=$eniga*$boyiga;
echo $umumiy."ta gisht ketadi"." ";


/*Hafta kunlari quyidagicha tartibda berilgan:
0 - yakshanba
1 - dushanba
2 - seshanba
3 - chorshanba
4 - payshanba
5 - juma
6 - shanba

1-365  oraliqda yotuvchi K soni berilgan. Agar 1-yanvar dushanba bo`lsa,
berilgan K - kun, haftaning qaysi kuniga to`g`ri keladi.
*/
$k=(int)45;
echo ($k % 7 == 0) ? "yakshanba": "";
echo ($k % 7 == 1) ? "dushanba": "";
echo ($k % 7 == 2) ? "seshanba": "";
echo ($k % 7 == 3) ? "chorshanba": "";
echo ($k % 7 == 4) ? "payshanba": "";
echo ($k % 7 == 5) ? "juma": "";
echo ($k % 7 == 6) ? "shanba": "";




 
 


