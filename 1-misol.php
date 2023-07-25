<?php
//1-masala: A va B sonlarning qiymatlarini almashtiring. A va B ning yangi qiymatlari ekranga chiqsin. Boshqa yangi o'zgaruvchi ishlatmasdan qiymatlarini almashtiring.
$a=5;
$b=6;
//qo'shimcha o'zgaruvchisiz almashtirish
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;


echo "a=".$a.' '.'b='.$b." ";
//2-masala Ikki xonali son berilgan. Uning raqamlar yig’indisini aniqlang
$number=56;
//izoh sonni 10 ga bo'lgandagi butun qismiga qoldiqni qo'shamiz;
$qoldiq=$number%10;
$butun=(int)($number/10);
$sum=$butun+$qoldiq;
echo 'Raqamlar yigindisi'." ". $sum."  ";

//3-masala 3-masala. xonali son berilgan. Uning yuzlar xonasidagi raqamini aniqlang.
$son=345;
$yuzlar_xonasi=(int)(345/100);
print('yuzlar xonasidagi raqam:').$yuzlar_xonasi."  ";

//4-masala 3 xonali son berilgan. Uning raqamlarini teskari tartibda yozilishidan hosil bo’lgan sonni aniqlang.

$son_3xona=678;

$number_yuzlar=(int)($son_3xona/100);

$number_10lar=(int)(($son_3xona - $number_yuzlar*100)/10);


$number_birlar=($son_3xona % 10);

$teskari_son=$number_birlar*100+$number_10lar*10+$number_yuzlar;
echo "$son_3xona ga teskari son=".$teskari_son."  ";
//5-masala: Kun boshidan boshlab N sekund vaqt o’tdi. Kun boshidan boshlab qancha soat, minut, sekund o’tganini aniqlash. Masalan: N = 86295 Natija: Kun boshidan 23 soat, 58 daqiqa, 15 soniya o'tdi.;

$sekund=86295; //kiritilgan sekund
$qoldiq=86295%3600;
$soat=($sekund-$qoldiq)/3600;
$qoldiq2=$qoldiq%60;
$minut=($qoldiq-$qoldiq2)/60;
$soniya=(86295-($soat*3600+$minut*60));
echo "kun boshidan $soat soat, $minut minut  , $soniya soniya vaqt o'tdi"."  ";

//6-masala Tomonlari 17 metr va 25 metr ga teng bo`lgan xonaga,tomonlari 100sm bo`lgan kafeldan, nechtasi kerak bo`ladi.
$tomon1=17; $tomon2=25; //metrda
$yuza=$tomon1*$tomon2;//metr kvadrat;
$kafel=1;//100 sm= 1m  ya'ni kafel yuzasi 1 metr kvadrat
$natija=$yuza/$kafel;

echo "tomonlari 17 va 25 metr xonaga $natija kafel ketadi";

//7-masala Tomonlari 17 m va 24 m ga teng bo`lgan xonaga, tomonlari 80sm bo`lgan kafeldan, nechtasi kerak bo`ladi. Faqat butun kafel ishlatilganlarni sonini aniqlang.
$t1=17;
$t2=24;
$k=0.8; //80sm=0.8m
$kafelYuzasi=0.64;
$butun=(int)(17/0.8)*(int)(24/0.8);


echo " $butun ta butun kafel ishlatilgan"."  ";

//8-masala Tomonlari 17 m va 24 m ga teng bo`lgan xonaga, tomonlari 80sm bo`lgan kafeldan yotqizildi. Butun kafel ishlatilmaydigan qismini yuzini aniqlang.
//izoh o'zgaruvchilarni elon qilib o'trmaymiz sababi bundan oldinga masala bilan birxil faqat shart o'zgargan
$yuzaXona=(17*24);
$kafelYuzasi=0.64;
//ishlatilmagan yuza bu qoldiq yuza hisoblanadi;
//yani 17*24 xona yuzasi =408 ekan;
//kafel yuzasi 0.64;
//bundan ko'rinip turbdiki (408=x*0.64 + r)  bu yerda x butun kafellar soni , r qoldiq yuza;
//r=408-0.64*x;
$qoldiqyuza=$yuzaXona-$butun*0.64;
echo "ishlatilmagan yuza $qoldiqyuza ga teng";




