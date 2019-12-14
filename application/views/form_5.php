<?php	
ob_start();
$pdf=new exFPDF();
$pdf->AddPage(); 
$pdf->SetXY(0,5);
$pdf->SetMargins(5,5,5);
$pdf->SetAutoPageBreak(false);
$pdf->SetFont('helvetica','',9);
$count=count($result);
if($count>0){
	


//########################################################

  $tableB=new easyTable($pdf,64, 'width:100%;height:100%; align:C{C};  border:1; fbgcolor:#ffffff; font-color:#000000;line-height:1;');


 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:TRL;');
 $tableB->printRow();

$logo_path = "assets/images/icon/logo.png";
 $tableB->easyCell("", 'img:'.$logo_path.',w20,h17; align:L;rowspan:4;border:L; colspan:10; valign:B;width:50%;');

 
 $tableB->easyCell("",'align:C;width:100%;colspan:6;font-size:10;font-style:B;border:;');
 $tableB->easyCell("The Employees' Provident Fund Scheme, 1952",'align:C;width:100%;colspan:30;font-size:10;font-style:B;border:;');
 $tableB->easyCell("Form - 5 ",'align:R;width:100%;colspan:17;font-size:10;font-style:B;border:;');
 $tableB->easyCell("",'align:R;width:100%;colspan:1;font-size:10;font-style:B;border:R;');
 $tableB->printRow();

  $tableB->easyCell("",'align:C;width:100%;colspan:6;font-size:10;font-style:B;border:;');
 $tableB->easyCell("Paragarph 36 (2) (a) and (b)",'align:C;width:100%;colspan:30;font-size:10;font-style:B;border:;');
 $tableB->easyCell("",'align:C;width:100%;colspan:18;font-size:10;font-style:B;border:R;');
 $tableB->printRow();

  $tableB->easyCell("",'align:C;width:100%;colspan:6;font-size:10;font-style:B;border:;');
 $tableB->easyCell("Employees' Pension Scheme, 1995",'align:C;width:100%;colspan:30;font-size:10;font-style:B;border:;');
 $tableB->easyCell("",'align:C;width:100%;colspan:18;font-size:10;font-style:B;border:R;');
 $tableB->printRow();

  $tableB->easyCell("",'align:C;width:100%;colspan:6;font-size:10;font-style:B;border:;');
 $tableB->easyCell("Paragarph 20 (4)",'align:C;width:100%;colspan:30;font-size:10;font-style:B;border:;');
 $tableB->easyCell("",'align:C;width:100%;colspan:18;font-size:10;font-style:B;border:R;');
 $tableB->printRow();

 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();

 
 $tableB->easyCell("Return of Employees' qualifying for membership of the Employees' Provident Fund, Employees' Pension Fund & Employees' Deposit Linked Insurance ",'align:L;width:100%;colspan:64;font-size:8;font-style:;border:RL;');
 $tableB->printRow();

 $tableB->easyCell("fund for the first time during the month of",'align:L;width:100%;colspan:20;font-size:8;font-style:;border:L;');
 $tableB->easyCell($result[0]['month_year'],'align:C;width:100%;colspan:10;font-size:10;font-style:B;border:B;');
 $tableB->easyCell("",'align:L;width:100%;colspan:34;font-size:8;font-style:;border:R;');
 $tableB->printRow();

  $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();

 
 $tableB->easyCell("To be sent to the Commissioner with Form 2 (EPS & EPF)",'align:L;width:100%;colspan:25;font-size:8;font-style:;border:L;');
 $tableB->easyCell("",'align:L;width:100%;colspan:4;font-size:8;font-style:;border:TBRL;');
 $tableB->easyCell("",'align:L;width:100%;colspan:35;font-size:8;font-style:;border:R;');
 $tableB->printRow();

  $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();


 $tableB->easyCell("Name & Address of the Factory/ Establishment :",'align:L;width:100%;colspan:20;font-size:8;font-style:;border:L;');
 $tableB->easyCell($result[0]['comp_name']." , ".$result[0]['comp_address'],'align:L;width:100%;colspan:20;font-size:9;font-style:B;border:B;');
 $tableB->easyCell("",'align:L;width:100%;colspan:24;font-size:8;font-style:;border:R;');
 $tableB->printRow();

  $tableB->easyCell("",'align:L;width:100%;colspan:20;font-size:8;font-style:;border:L;');
 $tableB->easyCell($result[0]['comp_post_office']." , ".$result[0]['comp_district']." - ".$result[0]['comp_pincode'],'align:L;width:100%;colspan:20;font-size:9;font-style:B;border:B;');
 $tableB->easyCell("",'align:L;width:100%;colspan:24;font-size:8;font-style:;border:R;');
 $tableB->printRow();

   $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();

 
 $tableB->easyCell("Code No. of Factory/ Establishment :",'align:L;width:100%;colspan:20;font-size:8;font-style:;border:L;');
 $tableB->easyCell($result[0]['comp_estb_id'],'align:L;width:100%;colspan:20;font-size:10;font-style:B;border:B;');
 $tableB->easyCell("",'align:L;width:100%;colspan:24;font-size:8;font-style:;border:R;');
 $tableB->printRow();

 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();

 
 
 $tableB->easyCell("SR NO", ' align:L; valign:M;colspan:2;font-size:8;font-style:B;');
 $tableB->easyCell("Account No. ", ' align:C; colspan:5;font-size:8;font-style:B; valign:M;');
 $tableB->easyCell("Name of the Member \n (in BLOCK letters)", ' align:C;font-style:B; colspan:12;font-size:8; valign:M;');
 $tableB->easyCell("Name of the parent ( or name of the spouse if married)", ' align:C;font-style:B; colspan:12;font-size:8; valign:M;');
 $tableB->easyCell("Date of Birth", ' align:C; colspan:6;font-size:8; valign:M;font-style:B;');
 $tableB->easyCell("Sex", ' align:C; colspan:5;font-size:8;font-style:B; valign:M;');
 $tableB->easyCell("Date of Joining the Fund", 'font-style:B; align:C; colspan:6;font-size:8; valign:M;');
 $tableB->easyCell("Total Period of Previous Service as on the date of joining the Fund (Enclose scheme certificate if applicable)", ' align:C; colspan:9;font-style:B;font-size:8; valign:M;');
 $tableB->easyCell("Remarks", ' align:C; font-style:B;colspan:7;font-size:8; valign:M;');
 $tableB->printRow();
 

for($i=0;$i<$count;$i++){

$sr=$i+1;
 $tableB->easyCell($sr, ' align:L; valign:M;colspan:2;font-size:8;font-style:B;');
 $tableB->easyCell($result[$i]['member_id'], ' align:C;colspan:5;font-size:8;font-style:; valign:M;');
 $tableB->easyCell($result[$i]['name_as_aadhaar'], ' align:C; colspan:12;font-size:8;font-style:; valign:M;');
 $tableB->easyCell($result[$i]['father_husband'], ' align:C; colspan:12;font-size:8;font-style:; valign:M;');
 $tableB->easyCell($result[$i]['dob'], ' align:C; colspan:6;font-size:8;font-style:; valign:M;');
 $tableB->easyCell($result[$i]['gender'], ' align:C; colspan:5;font-size:8;font-style:; valign:M;');
 $tableB->easyCell($result[$i]['doj'], ' align:C; colspan:6;font-size:8;font-style:; valign:M;');
 $tableB->easyCell("", ' align:C; colspan:9;font-size:8;font-style:; valign:M;');
 $tableB->easyCell("", ' align:C; colspan:7;font-size:8;font-style:; valign:M;');
 $tableB->printRow();


	
} 
 
 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();
 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();
 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();
 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();
 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();
 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();

 
 $tableB->easyCell("Date :",'align:L;width:100%;colspan:4;font-size:9;font-style:B;border:L;');
 $tableB->easyCell($result[0]['next_month'],'align:L;width:100%;colspan:10;font-size:9;font-style:B;border:;');
 $tableB->easyCell("",'align:L;width:100%;colspan:8;font-size:9;font-style:B;border:;');
 $tableB->easyCell("Signature of the employer or other authorised officer and stamp of the Factory /Establishment",'align:C;width:100%;colspan:42;font-size:8;font-style:B;border:RT;');
 $tableB->printRow();

 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RL;');
 $tableB->printRow();
 $tableB->easyCell("",'width:100%;colspan:64;font-size:30;font-style:i;border:RLB;');
 $tableB->printRow();
 
 
 $tableB->endTable(10);

}
	 

//###############################################


 $pdf->Output();
 ob_end_flush();
?>