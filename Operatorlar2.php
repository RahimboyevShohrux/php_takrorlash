<?php
//A butun son. Jumlani rostlikka tekshiring. "A toq son";
// $a=31;
// echo ($a%2==1) ? "$a soni toq"." ":" $a soni toq emas","  ";

//M va N sonlar berilgan. Jumlani rostlikka tekshiring: "M son N sondan katta"
// $m=12;
// $n=15;
// echo ($m>$n)? "$m soni $n dan katta"."  "  :"$m soni $n sonidan katta emas"."  ";


//A va B sonlar berilgan.Jumlani rostlikka tekshiring: "A va B sonlarining yig`indisi 100 dan katta";

// $number1=49;
// $number2=53;
// echo ($number1 + $number2 > 100) ? "$number1 va $number2 sonlarining yig'indisi 100dan katta"."   ":" Sonlarning yig'indisi 100 dan katta emas";


//A, B, C sonlari berilgan. Jumlani rostlikka tekshiring:"C soni A va B sonlari orasida yotadi".
// $val1=23; // a son
// $val2=45; // b son ;
// $val3=55; // c son;
// echo ($val3 > $val1 and $val3	< $val2) ? "$val3 soni $val1 va $val2 orasida yotadi"." ":"$val3 soni $val1 va $val2 orasida yotmaydi"."  ";


//Ikkita A va B soni berilgan. Jumlani rostlikka tekshiring:"A va B sonlarining hech bo'lmaganda 1 tasi toq".
// $a=5; $b=6;
// echo ($a%2==1 or $b%2==1) ? "$a va $b sonlarining heh bo'lmasa bittasi toq":"$a va $b sonlari toq sonlar emas";


//Musbat butun son berilgan. Jumlani rostlikka tekshiring:"Berilgan son ikki xonali juft son"
// $a=14;
// // $a=5;
// // $a=4;
// // $a=104;



// if((int)($a/10) >= 1 and (int)($a/10) < 10 ){  //bilamizki bir xonali sonni 10 ga bo'lsak 0.1, 0.5 nechidir son chiqadi. 2 xonali sonni 10 ga bo'lsak 1.1, 5.6 nechidir chiqadi va har doim 1 dan katta;
// 	if ($a%2==0) {
// 	echo "$a soni 2 xonali juft son";
// 	}

// 	else{
// 		echo "$a soni 2 xonali juft emas";
// 	}

	
// }
// else{
	
// 	if ($a%2==0) {
// 		echo "$a soni 2 xonali emas lekin juft son";
		
		
// 	}
// 	else{
// 		echo "$a soni 2 xonali emas juft ham emas";
// 	}
// }


//7-masalaShaxmat doskasining X va Y koordinatalari berilgan.1-8 oraliqda yotuvchi sonlar. Doskaning chap pastki maydoni (1, 1) qora rang ekanligini bilgan holda, jumlani rostlikka tekshiring:"Berilgan (X, Y) maydon OQ rangda" 
 
 //izoh shaxmat doskasini yaxshilab kuzatib qonuniyatni aniqladim. Kordinatalar ayirmasini 2 ga bo'lsak qoldiq 0 bolsa qora rang qoldiq 1 bo'lsa oq rang;
 
 //$x=4; $y=6; // shaxmat doskasida ushbu kordinata qora rangda;
 //echo (abs($x-$y)%2==0)? "Shaxmat doskasida x=$x va y=$y kordinatada qora rang":"Oq rangda";
 
 //8-masala:Shaxmat doskasining ikkita turli (x1, y1) (x2, y2) koordinatalari berilgan.
/*(1-8 oraliqda yotuvchi butun sonlar). Jumlani rostlikka tekshiring: 
"Shoh bir yurishda bir maydondan ikkinchisiga o’ta oladi".*/

// $x1=6; $y1=3; // shox turgan kordinata
// //izoh:Shoh 1 ta kordinata yura oladi
// $x2=5;$y2=4; //tekshiriluvchi kordinata
// if($x1>0 and $x2>0 and $y1>0 and $y2>0){ //shaxmatda kordinatala1 (1,1) dan boshlanadi.
// echo (abs($x2-$x1)==1 and abs($y2-$y1)==1)? "shox bir maydondan ikkinchisiga o'ta oladi":"Shox bir maydondan 2 chisiga o'ta olmaydi";
// }
// else{
// 	echo "kordinatalar 0 dan katta bo'lishi kerak";
// }

//9-masalaShaxmat doskasining ikkita turli (x1, y1) (x2, y2) koordinatalari berilgan.(1-8 oraliqda yotuvchi butun sonlar). Jumlani rostlikka tekshiring:
//"Ot bir yurishda bir maydondan ikkinchisiga o’ta oladi".

 ////Izoh: Ot L ga ohshab yuradi agar 1 qadanm y o'qi bo'ylab harakatlansa 2 qadam x o'qi bo'ylab harakatlanishi kerak. Yoki aksincha
// $x1=6; $y1=3; //ot turgan kordinata;
// $x2=4; $y2=4; // tekshirmoqchi bo'lgan kordinata;
// echo ((abs($x2-$x1)==2 and abs($y2-$y1)==1) or (abs($x2-$x1)==1 and abs($y2-$y1)==2)) ? "Ot ($x2,$y2) kordinataga yura oladi":"Ot ($x2,$y2) kordinataga yura olmaydi";


/*10-masala: Svetafor har soatning boshlanishida 3 minut yashil yonadi. Keyin 2 minut qizil
yonadi. Keyin 3 minut sariq yonadi. Soatning N - daqiqasida svetafor qanday rangda?
Misol: 44-daqiqada qizil, 56-daqiqada sariq.*/



function Svetafor($N){
	$aylana=8;
	
$minut = $N % $aylana;
if ($minut > 0 && $minut <= 3) {
echo "yashil";
}
else if ($minut > 3 && $minut <= 5) {
echo "qizil";
}
else if (($minut > 5 && $m < 8) || $minut == 0) {
echo "sariq";
}
}
echo Svetafor(44);





