<?php

require "fpdf/fpdf.php";




$key = $_GET["id"];

$pdf=new FPDF();
//$pdf->AddPage();
include 'con.php';
$kwh = number_format($inforow['CURTMPKWH']) ;
    $info_ = mysqli_query($db,"SELECT * FROM emails WHERE _KEY='$key' ");
while ($inforow_ = mysqli_fetch_array($info_))
{
     $pdf->AddPage();
   
$_acc = $inforow_['NEWACTS'];



//Select the Products you want to show in your PDF file
//$result=mysqli_query($db,"SELECT * FROM emails");

//Initialize the 3 columns and the total
$column_code = "";
$column_name = "";
$column_price = "";
$total = 0;


$info = mysqli_query($db,"SELECT * FROM  fbilmast  WHERE NEWACTS ='$_acc' ");
while ($inforow = mysqli_fetch_array($info))
{
      $load++;
      $area = $inforow['AREA'];
   $currentbill = $inforow['CURRENTBIL'];
   
     $billmonth = $inforow['BILLMONTH'];
       $billyear = $inforow['BILLYEAR'];
$acc = $inforow['NEWACTS'];
$name = $inforow['CNAME'];
$oldacc = $inforow['MSSIDESN'];
$newm = $inforow['NEWMSN'];
$address = $inforow['CADDRESS'];
$ctype = $inforow['CTYPE'];
$mtp = $inforow['MULTIPLIER'];
$due = $inforow['DUEDATE'];
$status = $inforow['BILLSTAT'];
$presentreadingdate = $inforow['PRSDATRDNG'];
$lastreadingdate = $inforow['PRVBILDAT'];
$lastreading = $inforow['PRVMTRRDNG'];

$presentreading = $inforow['PRSMTRRDNG'];
$kwh = number_format($inforow['CURTMPKWH']) ;
$deamndreading = $inforow['PRSDEMRDNG']/10000;
$kwu = $mtp*$deamndreading;

}
$ac_n =$acc;
if(ctype_digit($ac_n) && strlen($ac_n) == 10) {
 $ac_n = substr($ac_n, 0, 2) .'-'.
            substr($ac_n, 2, 4) .'-'.
            substr($ac_n, 6);
}

//For each row, add the field to the corresponding column

$set1  ="Generation Energy Charge";
$set2  ="Real Property Tax";
$set3  ="Transmission Energy Charge";
$set4  ="Transmission Demand Charge";
$set5  ="System Loss Charge";
$set6  ="Distribution Demand Charge";
$set7  ="Distribution Energy Charge";
$set8  ="Supply Retail Cust Charge";
$set9  ="Supply Energy Charge";
$set10  ="Metering Retail Cust Charge";
$set11  ="Metering Energy Charge";
$set12  ="MCC";
$set13  ="ME (UCMI)";
$set14  ="Environmental Charge";
$set15  ="Life Line Rate Subsidy";
$set16  ="Life Line Rate Discount";
$set17  ="GRAM";
$set18  ="ICERA";
$set19  ="Franchise Tax";
$set20  ="Business Tax";
$set21  ="Generation Vat";
$set22  ="Transmission Vat";
$set23  ="System Loss Vat";
$set24  ="Dustribution Vat";
$set25  ="Others Vat";
$set26  ="Senior Citizen Discount";
$set27  ="Senior Citizen Subsidy";
$set28  ="NPC Stranded Cost";
$set29  ="NPC Stranded Debt";
$set30  ="UC FIT-ALL";
$set31  ="Real Property Tax";
$set32  ="ME (UC CI RED)";
$set33  ="ICCS Adj.";
$set34  ="PPD Adj.";
$set35  ="PPD Adj.";












   $info1 = mysqli_query($db,"SELECT * FROM  fbilmast  WHERE NEWACTS = '$_acc' LIMIT 1");
while ($inforow1 = mysqli_fetch_array($info1))
{



for($x =1;$x <= 35 ;$x++){









//$get = eval('return $set'. $x . ';');



  


      $selecrate = "fbrate".$area;

      $srate = 'RATE'.$x;

$rate=0;
   $info2 = mysqli_query($db,"SELECT * FROM `$selecrate` WHERE CTYPE ='$ctype' ");
while ($inforow2 = mysqli_fetch_array($info2))
{
$rate = number_format($inforow2[$srate]/10000, 4,'.');

}
if($rate ==0){
    $rate='0.0000';
}
    


$column_code = $column_code.eval('return $set'. $x . ';')."\n";
    $column_name = $column_name.$rate."\n";
    $column_price = $column_price.number_format($inforow1['CHARGE'.$x]/100, 2,'.',',')."\n";



}

}







 $pdf->Image('KaelcoLogo.jpg',6,3,20);
  // Select Arial bold 15
     $pdf->SetFont('Courier', '', 12);
        // Move to the right
     $pdf->Cell(80);
        // Framed title
   $pdf->Cell(25, -5, 'Kalinga-Apayao Electric Cooperative, Inc.', 0, 0, 'C');

$pdf->SetY(12);
     $pdf->Cell(80);
        // Framed title
   $pdf->Cell(25, 0, 'Tabuk, Kalinga Apayao', 0, 0, 'C');
   $pdf->SetY(21);
      $pdf->Cell(80);
        // Framed title
        $pdf->SetFont('', 'B', 0);
   $pdf->Cell(25, -5, 'STATEMENT OF ACCOUNTS', 0, 0, 'C',);
   $pdf->SetY(26);
     $pdf->Cell(80);
        // Framed title
        $pdf->SetFont('', 'B', 0);
   $pdf->Cell(25, -5, 'Billing Month '.date("M-Y ", strtotime($billyear."-".$billmonth."-1")), 0, 0, 'C',);



$pdf->Line(8, 27.6, 210-8, 27.6);
$pdf->Line(8, 27, 210-8, 27);



  $pdf->SetFont('', '', 11);
$alignx = 27;
$setval1="Account Number: ";
$setval2="Old Acnt No: ";
$setval3="New Meter S.N: ";
$setval4="Consumer Type: ";

$setval5=$ac_n;
$setval6=$oldacc;
$setval7=$newm ;
$setval8=$ctype;
$setval9="N A M E: ";
$setval10="Consumer Address: ";
$setval11="Multiplier: ";
$setval12="Type : ";


$setval13=$name;;
$setval14=$address;
$setval15=$mtp ;
$setval16=$status;
   

  // $currentbill = $inforow['CURRENTBIL'];
   //  $billmonth = $inforow['BILLMONTH'];
      // $billyear = $inforow['BILLYEAR'];
//$acc = $inforow['NEWACTS'];
//$name = $inforow['CNAME'];
//$oldacc = $inforow['MSSIDESN'];
//$newm = $inforow['NEWMSN'];
//$address = $inforow['CADDRESS'];
//$ctype = $inforow['CTYPE'];
//$mtp = $inforow['MULTIPLIER'];
//$due = $inforow['DUEDATE'];
//$status = $inforow['BILLSTAT'];
//$presentreadingdate = $inforow['PRSDATRDNG'];
//$lastreadingdate = $inforow['PRVBILDAT'];
//$lastreading = $inforow['PRVMTRRDNG'];


 for($x =1;$x <= 8 ;$x++){


if($x <= 4){
    $alignx+=4;
$pdf->SetY($alignx);
     $pdf->Cell(-3);
        // Framed title
   $pdf->Cell(-5, 0, eval('return $setval'. $x . ';'),0 ,0, 'L',);
  
}
if($x == 5){
      $pdf->SetFont('', 'B', 11);
    $alignx = 27;
}
if($x >= 5){
   $alignx+=4;
$pdf->SetY($alignx);
   $pdf->Cell(33);
        // Framed title
   $pdf->Cell(-5, 0, eval('return $setval'. $x . ';'),0 ,0, 'L',);

}



 }

     $pdf->SetFont('', '', 11);
$alignx = 27;
for($x =9;$x <= 16 ;$x++){


if($x <= 12){
    $alignx+=4;
$pdf->SetY($alignx);
     $pdf->Cell(78);
        // Framed title
   $pdf->Cell(-5, 0, eval('return $setval'. $x . ';'),0 ,0, 'L',);
  
}
if($x == 13){
      $pdf->SetFont('', 'B', 11);
    $alignx = 27;
}
if($x == 13){
      $pdf->SetFont('', 'B', 10);
  
}
if($x >= 13){
   $alignx+=4;
$pdf->SetY($alignx);
   $pdf->Cell(118);
        // Framed title
   $pdf->Cell(-5, 0, eval('return $setval'. $x . ';'),0 ,0, 'L',);

}




 }

  $pdf->SetFont('', '', 11);
$alignx = 45;
$setvall1="Present Reading Date: ";
$setvall2="Previous Reading Date: ";
$setvall3=$presentreadingdate;
$setvall4=$lastreadingdate;

$setvall5=round($presentreading , 0);
$setvall6=round($lastreading , 0);
$setvall7="KWH Used:";
$setvall8="Kw Used:";
$setvall9=$kwh;
$setvall10= number_format($kwu ,2);



$pdf->Line(8, 47, 210-8, 47);



 for($x =1;$x <= 4 ;$x++){


if($x <= 2){
    $alignx+=6;
$pdf->SetY($alignx);
     $pdf->Cell(-3);
        // Framed title
   $pdf->Cell(-5, 0, eval('return $setvall'. $x . ';'),0 ,0, 'L',);
  
}

if($x == 3){
      $pdf->SetFont('', 'B', 11);
 $alignx = 45;
}

if($x >= 3){
   $alignx+=6;
$pdf->SetY($alignx);
   $pdf->Cell(51);
        // Framed title
   $pdf->Cell(-5, 0, eval('return $setvall'. $x . ';'),0 ,0, 'L',);

}




 }



 $alignx = 45;

 for($x =5;$x <= 8 ;$x++){


if($x <= 6){
    $alignx+=6;
$pdf->SetY($alignx);
     $pdf->Cell(90);
        // Framed title
   $pdf->Cell(0, 0, eval('return $setvall'. $x . ';'),0 ,0, 'L',);
  
}


if($x == 7){
      $pdf->SetFont('', '', 11);
 $alignx = 45;
}

if($x >= 7){
   $alignx+=6;
$pdf->SetY($alignx);
   $pdf->Cell(130);
        // Framed title
   $pdf->Cell(-5, 0, eval('return $setvall'. $x . ';'),0 ,0, 'L',);

}



 }



 $alignx = 45;
  $pdf->SetFont('', 'B', 11);
 for($x =9;$x <= 10 ;$x++){



    $alignx+=6;
$pdf->SetY($alignx);
     $pdf->Cell(155);
        // Framed title
   $pdf->Cell(0, 0, eval('return $setvall'. $x . ';'),0 ,0, 'L',);
  

 }


$pdf->Line(8, 61, 210-8, 61);


//while ($row = mysqli_fetch_array($result))
//{
   // $code = $row["PTYPE"];
  //  $name = $row["PTYPE"];
   // $real_price = $row["PTYPE"];
   // $price_to_show = $row["PTYPE"];

   // $column_code = $column_code.$code."\n";
  //  $column_name = $column_name.$name."\n";
  //  $column_price = $column_price.$price_to_show."\n";

//}


 $sc =$currentbill*0.03;
                $scar =($currentbill*0.03)+$currentbill;
          
//Create a new PDF file


//Fields Name position
$Y_Fields_Name_position =61;
//Table position, under Fields Name
$Y_Table_Position = 69;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(255,255,255);
//Bold Font for Field Name
$pdf->SetFont('Courier','B',11);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(20,6,'Description',0,0,'L',0);
$pdf->SetX(124);
$pdf->Cell(100,6,'Rate',0,0,'L',0);
$pdf->SetX(178);
$pdf->Cell(20,6,'Amount',0,0,'L',0);

$pdf->Ln();
$pdf->Line(8, 67, 210-8, 67);
//Now show the 3 columns
$pdf->SetFont('Courier','',11);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(10);
$pdf->MultiCell(100,4,$column_code,0, 'L');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(115);
$pdf->MultiCell(26,4,$column_name,0, 'R', 'J', 0);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(176);

$pdf->MultiCell(26,4,$column_price,0, 'R', 'J', 0);

$pdf->Line(201, 210,170, 210);
  $pdf->SetFont('', '', 11);
$alignx = 220;
$seta1  ="Billing Date:";
$seta2  ="Due Date:";
$seta3  =date("M d, Y ", strtotime($presentreadingdate));
$seta4  =date("M d, Y ", strtotime($due));
$setb1  ="Total Current Bill:";
$setb2  ="House Wiring Loan:";
$setb3  ="Re-Structed Accounts:";
$setb4  ="Transformer Rental:";
$setb5  ="Pole Rental:";
$setb6 ="Total Amount Due:";
$setb7 ="Surcharge:";
$setb8 ="Total Amount After Due Date:";
$setc1  = number_format($currentbill/100, 2,'.',',');
$setc2  ="0.00";
$setc3  ="0.00";
$setc4  ="0.00";
$setc5  ="0.00";
$setc6 =number_format($currentbill/100, 2,'.',',');
$setc7 =number_format($sc/100, 2,'.',',');
$setc8 = number_format($scar/100, 2,'.',',');
$setc9 ="Note :Disregard Surcharge if payment made within 10 days upon receipt.";

 for($x =1;$x <= 4 ;$x++){


if($x <= 2){
    $alignx+=8;
$pdf->SetY($alignx);
     $pdf->Cell(-3);
        // Framed title
   $pdf->Cell(0, 0, eval('return $seta'. $x . ';'),0 ,0, 'L',);
  
}
if($x == 3){
      $pdf->SetFont('', 'B', 11);
$alignx = 220;
}

if($x >= 3){
       $alignx+=8;
 $pdf->SetY($alignx);
     $pdf->Cell(28);
        // Framed title
   $pdf->Cell(0, 0, eval('return $seta'. $x . ';'),0 ,0, 'L',);

}

 }
      $pdf->SetFont('', '', 11);
$alignx = 208;


 for($x =1;$x <= 8 ;$x++){



    $alignx+=5;
    if($x == 6){
        $alignx+=2;
    }
$pdf->SetY($alignx);
     $pdf->Cell(90);
        // Framed title
   $pdf->Cell(0, 0, eval('return $setb'. $x . ';'),0, 'R', 'J', 0,);
  
if($x == 8){
     $alignx+=3;
}
 }

$pdf->Image('profile/soa.jpg',6,265,200);
      $pdf->SetFont('', 'B', 11);
$alignx = 208;


 for($x =1;$x <= 9 ;$x++){


    $alignx+=5;
    if($x == 6){
        $alignx+=2;
    }
     if($x == 7){
        $pdf->SetFont('', '', 11);
    }
$pdf->SetY($alignx);
     $pdf->Cell(160);
        // Framed title
   if($x == 9){
           $alignx+=2;
 $pdf->Cell(-150);
     $pdf->SetFont('', '', 11);
        $pdf->Cell(0, 0, eval('return $setc'. $x . ';'),0, 'C', 'J', 0,);
    }else{
           $pdf->Cell(0, 0, eval('return $setc'. $x . ';'),0, 'R', 'J', 0,);
    }


     if($x == 7){
   $pdf->Line(204, 248,170, 248);
    $alignx+=2;
     $pdf->SetFont('', 'B', 11);
    }
 
 }
   

   

 


}



$pdf->Output();

?>