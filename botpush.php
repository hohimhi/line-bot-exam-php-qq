﻿ini_set('memory_limit', '8192M'); ﻿<?php
    $accessToken = "cTnKGPoV5We1pHUXDXJpRQGySzdPehWnp1DYJQwueVzwtOXONHFaKAs185kcpWV8T1Jivxv5xKrfWcGRyf9b1ARnLBYlMa4vuqntDdt4HC6pbgJgQ9XqzP52zyXefNnWbkdb0PJ1d7U2td3+qXivxwdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
   $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
    $arrayPostData['messages'][0]['type'] = "text";
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดี"){
        $arrayPostData['messages'][0]['text'] = "QQ";
       }
else if($message == "3001-31"){
          $arrayPostData['messages'][0]['text'] = "UDN001187,(3001-31) บ้านจิก โหนด B - (3031-49) ปั้มวีรกิจ=12 Core= 5.7 km.
UDN001264,(3001-31) บ้านจิก โหนด B - (3033-40) บ้านหนองโอน=Optic 12 Core DW = 12.47 km.";
    }
else if($message == "3001-32"){
          $arrayPostData['messages'][0]['text'] = "NKI000001,(3001-32) me จงมี - (3201-63) me หนองสองห้อง=12 Core= 39.82 km.
UDN000013,(3001-32) me จงมี - (3031-38) me รังษิณา=Optic 12 Core DW = 1.03 km.
UDN000091,(ME3001-32) จงมี - (3023-43) ซอยเวียงพิงค์=Optic 12 Core DW = 1.062 km.
UDN000092,(ME3001-32B) จงมี Node B - (3023-44) ซอยพิบูลย์=Optic 12 Core DW = 0.686 km.
UDN000113,(ME3001-32) จงมี - (3023-67) บ้านห้วย=Optic 12 Core DW = 1.867 km.
UDN000114,(ME3001-32B) จงมี Node B - (3023-68) หนองประจักษ์1=Optic 12 Core DW = 1.916 km.
UDN000131,(ME3001-32B) จงมี Node B - (3023-87) โกเมนซิตี้=Optic 12 Core DW = 1.271 km.
UDN000170,(ME3001-32B) จงมี Node B - (3031-71) ไปรษณีย์=Optic 12 Core DW = 1.485 km.
UDN000175,(ME3001-32B) จงมี Node B - (3031-76) ซอยเบญจาง=Optic 12 Core DW = 0.882 km.
UDN000218,(ME3001-32B) จงมี Node B - (3032-59) จันทร์สว่างซอย3=Optic 12 Core DW = 0.729 km.
UDN000421,(3032-36) ชุมสาย อุดรคอนโดเทล - (3001-32) me จงมี=24 Core= 3.225 km.
UDN000428,(3023-59) me บ้านจิก - (3001-32) me จงมี=12 Core= 3.592 km.
UDN000430,(3023-48) me ศรีพินิจ - (3001-32) me จงมี=12 Core= 5.492 km.
UDN001206,(3001-32) ME จงมี - (3001-35) ME วัฒนานุวงศ์=12 Core= 2.75 km.";
    }
else if($message == "3001-33"){
          $arrayPostData['messages'][0]['text'] = "UDN000021,(3001-56) หมู่บ้าน ร่มเย็น 3 - (3001-33) หมู่บ้าน แสนสราญ=Optic 12 Core DW = 1.1 km.
UDN000039,(3001-33) แสนสราญ - (3001-59) หมู่บ้าน เฟิร์สโฮม=Optic 12 Core DW = 1.63 km.";
    }
else if($message == "3001-34"){
          $arrayPostData['messages'][0]['text'] = "UDN000429,(3023-59) me บ้านจิก - (3001-34) me ศรีพินิจ=12 Core= 4.032 km.
UDN000534,(ME3001-34B) ศรีพินิจB - (3033-156) ลุมพินี3=Optic 12 Core DW = 1.2 km.
UDN001207,(3001-34) ME ศรีพินิจ - (3001-35) ME วัฒนานุวงศ์=12 Core= 3.944 km.";
    }
else if($message == "3001-35"){
          $arrayPostData['messages'][0]['text'] = "UDN000022,(3023-52) แจ่มนุสรณ์ - (3001-35) วัฒนานุวงศ์=Optic 12 Core DW = 0.878 km.
UDN000371,(3001-35) วัฒนานุวงศ์  - () สำนักงานคณะกรรมการกิจการโทรคมนาคมแห่งชาติ (กทช.)=Optic 12 Core DW = 1.1 km.
UDN001206,(3001-32) ME จงมี - (3001-35) ME วัฒนานุวงศ์=12 Core= 2.75 km.
UDN001207,(3001-34) ME ศรีพินิจ - (3001-35) ME วัฒนานุวงศ์=12 Core= 3.944 km.";
    }
else if($message == "3001-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000015,(3023-92) บ้านเดื่อ - (3001-37) me แยกสามพร้าว=Optic 12 Core DW = 0.943 km.
UDN000016,(3032-34) me bigc - (3001-37) me แยกสามพร้าว=12 Core= 6 km.
UDN000044,(ME3001-37) Metronet สามพร้าว - (3001-66) บ้านหนองบุ=Optic 12 Core DW = 2.281 km.
UDN000248,(ME3001-37) Metronet สามพร้าว - (3032-90) การเคหะ2=Optic 12 Core DW = 3.267 km.
UDN000278,(ME3001-37) Metronet สามพร้าว - (3033-61) หมู่บ้านสิริน=Optic 12 Core DW = 0.548 km.";
    }
else if($message == "3001-39"){
        $arrayPostData['messages'][0]['text'] = "UDN000024,(3023-79) หนองเหล็ก 2 - (3001-39) เคหะชุมชนอุดรธานี CAB10 R4=Optic 12 Core DW = 0.845 km.";
    }
else if($message == "3001-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000025,(ME3001-45) ME พนาริน - (3001-40) พีเค 4=Optic 12 Core DW = 4.739 km.
UDN000093,(3001-40) พีเค 4 - (3023-45) บ้านกุดสระ=Optic 12 Core DW = 2.899 km.
UDN000262,(3001-40) พีเค 4 - (3033-43) บ้านท่าตูม=Optic 12 Core DW = 0.851 km.
UDN000277,(3001-40) PKC - (3033-60) ศรีธานี=Optic 12 Core DW = 0.992 km.
UDN000373,(3001-40) พีเค 4 - () บริษัท แอล. เอ็น. เอส. กรุ๊ป จำกัด=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3001-43"){
          $arrayPostData['messages'][0]['text'] = "UDN000025UDN000026,(3001-58) บ้านสวนพฤกษา - (3001-43) หมู่บ้าน PK 5=Optic 12 Core DW = 1.8 km.
UDN000227,(3001-43) หมู่บ้าน PK 5 - (3032-68) บ้านม่วง=Optic 12 Core DW = 1.289 km.,(ME3001-45) ME พนาริน - (3001-40) พีเค 4=Optic 12 Core DW = 4.739 km.
UDN000093,(3001-40) พีเค 4 - (3023-45) บ้านกุดสระ=Optic 12 Core DW = 2.899 km.
UDN000262,(3001-40) พีเค 4 - (3033-43) บ้านท่าตูม=Optic 12 Core DW = 0.851 km.
UDN000277,(3001-40) PKC - (3033-60) ศรีธานี=Optic 12 Core DW = 0.992 km.
UDN000373,(3001-40) พีเค 4 - () บริษัท แอล. เอ็น. เอส. กรุ๊ป จำกัด=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3001-44"){
          $arrayPostData['messages'][0]['text'] = "UDN000026,(30UDN000018,(3001-44) กฤษณา หนองสำโรง - (3033-118) เอื้ออาทรหนองสำโรง=Optic 12 Core DW = 1.1 km.
UDN000027,(3031-48) บ้านหนองบ่อ - (3001-44) กฤษณา หนองสำโรง=Optic 12 Core DW = 1.996 km.01-58) บ้านสวนพฤกษา - (3001-43) หมู่บ้าน PK 5=Optic 12 Core DW = 1.8 km.
UDN000227,(3001-43) หมู่บ้าน PK 5 - (3032-68) บ้านม่วง=Optic 12 Core DW = 1.289 km.";
    }
else if($message == "3001-45"){
          $arrayPostData['messages'][0]['text'] = "UDN000012,(3UDN000012,(3031-57) me กระจ่างวิทย์ - (3001-45) me พนาริน=12 Core= 5 km.
UDN000025,(ME3001-45) ME พนาริน - (3001-40) พีเค 4=Optic 12 Core DW = 4.739 km.
UDN000087,(3001-45) ME พนาริน - (3023-38) จงมี CAB 10=Optic 12 Core DW = 0.75 km.
UDN000508,(3001-45) Me พนาริน - (3033-153) บ้านดอนหวาย=Optic 12 Core DW = 1.8 km.
UDN001615,(3001-45) พนาริน - (3033-484) พนาริน 2=Optic 12 Core DW = 1.175 km.031-57) me กระจ่างวิทย์ - (3001-45) me พนาริน=12 Core= 5 km.
UDN000025,(ME3001-45) ME พนาริน - (3001-40) พีเค 4=Optic 12 Core DW = 4.739 km.
UDN000087,(3001-45) ME พนาริน - (3023-38) จงมี CAB 10=Optic 12 Core DW = 0.75 km.
UDN000508,(3001-45) Me พนาริน - (3033-153) บ้านดอนหวาย=Optic 12 Core DW = 1.8 km.
UDN001615,(3001-45) พนาริน - (3033-484) พนาริน 2=Optic 12 Core DW = 1.175 km.";
    }
else if($message == "3001-46"){
          $arrayPostData['messages'][0]['text'] = "UDN000028,(UDN000028,(3001-49) หมู่บ้านหรรษา - (3001-46) วัวข้อง=Optic 12 Core DW = 1.1 km.
UDN000215,(3001-46) วัวข้อง - (3032-55) เชียงพิณ=Optic 12 Core DW = 1.642 km.
UDN000398,(3001-46 ) วัวข้อง  - (3033-90) วัวข้อง2=Optic 12 Core DW = 0.5 km.3001-49) หมู่บ้านหรรษา - (3001-46) วัวข้อง=Optic 12 Core DW = 1.1 km.
UDN000215,(3001-46) วัวข้อง - (3032-55) เชียงพิณ=Optic 12 Core DW = 1.642 km.";
    }
else if($message == "3001-47"){
          $arrayPostData['messages'][0]['text'] = "UDN000398,(3001UDN000029,() BJ Mainroot อุดร - ขอนแก่น Cable1 - (3001-47) ฟลอร่าวิลล์=Optic 12 Core DW = 1.6 km.
UDN000223,(3001-47) ฟลอร่าวิลล์ - (3032-64) หมู่บ้านเสริมสุข=Optic 12 Core DW = 0.512 km.
UDN001303,(BJ) BJ mainroute อุดร-ขอนแก่น - (3001-47) ฟลอร่าวิวล์=Optic 12 Core DW = 0.2 km.
UDN001304,(3001-47) ฟลอร่าวิวล์ - (3032-67) โนนภู่ทอง=Optic 12 Core DW = 2.32 km.-46 ) วัวข้อง  - (3033-90) วัวข้อง2=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3001-48"){
          $arrayPostData['messages'][0]['text'] = "UDN00UDN000030,(3023-65) หนองหิน - (3001-48) หนองวัวซอ=12 Core= 22 km.
UDN000071,(3001-48) หนองวัวซอ - (3009-37) บ้านหมากหญ้า=Optic 12 Core DW = 5.096 km.
UDN000075,(3001-48) หนองวัวซอ - (3009-41) ตลาดหนองวัวซอ=Optic 12 Core DW = 0.666 km.
UDN000210,(3001-48) หนองวัวซอ - (3032-50) หนองวัวซอ2=Optic 12 Core DW = 1.133 km.
UDN000985,(3001-48) ME หนองวัวซอ - (3010-38) ME กุดจับ=12 Core= 26.419 km.0029,() BJ Mainroot อุดร - ขอนแก่น Cable1 - (3001-47) ฟลอร่าวิลล์=Optic 12 Core DW = 1.6 km.
UDN000223,(3001-47) ฟลอร่าวิลล์ - (3032-64) หมู่บ้านเสริมสุข=Optic 12 Core DW = 0.512 km.
UDN001303,(BJ) BJ mainroute อุดร-ขอนแก่น - (3001-47) ฟลอร่าวิวล์=Optic 12 Core DW = 0.2 km.
UDN001304,(3001-47) ฟลอร่าวิวล์ - (3032-67) โนนภู่ทอง=Optic 12 Core DW = 2.32 km.";
    }
else if($message == "3001-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000028,(3001-49) หมู่บ้านหรรษา - (3001-46) วัวข้อง=Optic 12 Core DW = 1.1 km.
UDN000031,(3031-79) ชัชวาลการบัญชี - (3001-49) หมู่บ้านหรรษา=Optic 12 Core DW = 1.9 km.
UDN000194,(3001-49) หมู่บ้านหรรษา - (3031-95) หรรษา 2=Optic 12 Core DW = 1.065 km.";
    }
else if($message == "3001-50"){
          $arrayPostData['messages'][0]['text'] = "UDN000032,(ME3023-65) Metronet หนองหิน - (3001-50) คุณธรรมธานี=Optic 12 Core DW = 1.55 km.
UDN000251,(3001-50) คุณธรรมธานี - (3032-93) คุณธรรมธานี 2=Optic 12 Core DW = 0.973 km.
UDN000523,(3001-50) คุณธรรมธานี - (3033-158) คุณธรรมธานี3=Optic 12 Core DW = 0.625 km.";
    }
else if($message == "3001-51"){
          $arrayPostData['messages'][0]['text'] = "UDN000033,(3031-63) me ซอยยานเกราะ - (3001-51) บ้านเซ=Optic 12 Core DW = 1.4 km.
UDN000944,(3001-51) บ้านเซ - (3033-284) บ้านเซ 2=Optic 12 Core DW = 1.3 km.
UDN001936,(3001-51) บ้านเซ - (3033-505) บ้านเซ4=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3001-53"){
          $arrayPostData['messages'][0]['text'] = "UDN000034,(3031-53) ซอยศรีสวรรค์ - (3001-53) ศรีพินิจ CAB 3=Optic 12 Core DW = 0.65 km.
UDN000217,(3001-53) ศรีพินิจ CAB 3 - (3032-58) บ้านพักมทบ.24=Optic 12 Core DW = 2.062 km.";
    }
else if($message == "3001-54"){
        $arrayPostData['messages'][0]['text'] = "UDN000035,(3031-46) พลอยวิลล่า2 - (3001-54) หมู่บ้าน มิตรภาพ เก่า=Optic 12 Core DW = 0.769 km.";
    }
else if($message == "3001-56"){
        $arrayPostData['messages'][0]['text'] = "UDN000021,(3001-56) หมู่บ้าน ร่มเย็น 3 - (3001-33) หมู่บ้าน แสนสราญ=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3001-57"){
          $arrayPostData['messages'][0]['text'] = "UDN000037,(3023-34) ค่ายเสนีย์รณยุทธ - (3001-57) หมู่บ้าน ณัฐการ=Optic 12 Core DW = 1.9 km.
UDN000254,(3001-57) หมู่บ้าน ณัฐการ - (3032-96) ซอยรุ่งเรือง=Optic 12 Core DW = 0.945 km.";
    }
else if($message == "3001-58"){
          $arrayPostData['messages'][0]['text'] = "UDN000026,(3001-58) บ้านสวนพฤกษา - (3001-43) หมู่บ้าน PK 5=Optic 12 Core DW = 1.8 km.
UDN000038,(3031-63) me ซอยยานเกราะ - (3001-58) บ้านสวนพฤกษา=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3001-59"){
          $arrayPostData['messages'][0]['text'] = "UDN000039,(3001-33) แสนสราญ - (3001-59) หมู่บ้าน เฟิร์สโฮม=Optic 12 Core DW = 1.63 km.
UDN000086,(3001-59) หมู่บ้าน เฟิร์สโฮม - (3023-37) หมู่บ้านอุดรแลนด์=Optic 12 Core DW = 1.81 km.";
    }
else if($message == "3001-60"){
          $arrayPostData['messages'][0]['text'] = "UDN000040,(3032-39) โนนสูง-ป่าหวาย - (3001-60) บ้านชัยพร=Optic 12 Core DW = 3.038 km.
UDN000237,(3001-60) บ้านชัยพร - (3032-78) หนองหมื่นท้าว=Optic 12 Core DW = 1.664 km.
UDN000260,(3001-60) บ้านชัยพร - (3033-41) หมู่บ้าน ชัยพรเล็ควิลล์=Optic 12 Core DW = 1.472 km.
UDN000756,(3001-60) บ้านชัยพร - (3033-224) FTTx โนนสูง=12 Core= 2.76 km.
UDN001199,(3001-60) บ้านชัยพร - (3033-337) นาคลอง=Optic 12 Core DW = 4.3 km.";
    }
else if($message == "3001-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000041,(3031-49) ปั้มวีรกิจ - (3001-61) หมู่บ้านกฤษณา-บ้านเลื่อม=Optic 12 Core DW = 0.826 km.
UDN000290,(3001-61) หมู่บ้านกฤษณา-บ้านเลื่อม - (3033-74) หมู่บ้านเงินทองธานี=Optic 12 Core DW = 1.1 km.
UDN000943,(3001-61) หมู่บ้านกฤษณา-บ้านเลื่อม - (3033-277) wireless บ้านเลื่อม=Optic 12 Core DW = 1.36 km.
UDN001919,(3001-61) หมู่บ้านกฤษณา-บ้านเลื่อม - (3033-409) หมู่บ้านกฤษณา-บ้านเลื่อม 2=Optic 12 Core DW = 2.85 km.";
    }
else if($message == "3001-64"){
        $arrayPostData['messages'][0]['text'] = "UDN000042,(3031-58) ซอยแก้วอุดม - (3001-64) บ้านบ่อสร้าง=Optic 12 Core DW = 0.789 km.";
    }
else if($message == "3001-65"){
          $arrayPostData['messages'][0]['text'] = "UDN000043,(3023-48) ศรีพินิจB - (3001-65) ซอยทองคำอุทิศ=Optic 12 Core DW = 1.4 km.
UDN000141,(3001-65) ซอยทองคำอุทิศ - (3031-39) ซอยมาวิน=Optic 12 Core DW = 0.588 km.";
    }
else if($message == "3001-66"){
          $arrayPostData['messages'][0]['text'] = "UDN000044,(ME3001-37) Metronet สามพร้าว - (3001-66) บ้านหนองบุ=Optic 12 Core DW = 2.281 km.
UDN000205,(3001-66) บ้านหนองบุ - (3032-44) สามพร้าว2=Optic 12 Core DW = 2.498 km.";
    }
else if($message == "3002-101"){
          $arrayPostData['messages'][0]['text'] = "UDN000559,(3002-58) ห้วยเกิ้ง2 - (3002-101) ม่วงหวาน=Optic 12 Core DW = 3.117 km.
UDN001078,(3002-101) บ้านม่วงหวาน - (3002-122) บ้านหนองเหี้ย=Optic 12 Core DW = 1.873 km.";
    }
else if($message == "3002-102"){
        $arrayPostData['messages'][0]['text'] = "UDN000560,(3002-103) หมากบ้า - (3002-102) โนนสา=Optic 12 Core DW = 3.377 km.";
    }
else if($message == "3002-103"){
          $arrayPostData['messages'][0]['text'] = "UDN000560,(3002-103) หมากบ้า - (3002-102) โนนสา=Optic 12 Core DW = 3.377 km.
UDN001455,(3002-103) บ้านหมากบ้า - (3002-174) บ้านนกขะบา=Optic 12 Core DW = 1.61 km.";
    }
else if($message == "3002-104"){
          $arrayPostData['messages'][0]['text'] = "UDN001128,(3002-44) มูลนิธิ - (3002-104) มูลนิธิ2=Optic 12 Core DW = 1.11 km.
UDN001129,(3002-104) มูลนิธิ2 - (3002-60) บ้านนาแบก=Optic 12 Core DW = 1.09 km.";
    }
else if($message == "3002-105"){
          $arrayPostData['messages'][0]['text'] = "UDN000565,(3002-94) เกิ้งน้อย - (3002-105) เกิ้งน้อย2=Optic 12 Core DW = 2.076 km.
UDN001109,(3002-105) เกิ้งน้อย2 - (3002-159) บ้านหนองหญ้ารังกา=Optic 12 Core DW = 5 km.
UDN001208,(3002-58) บ้านห้วยเกิ้ง2 - (3002-105) บ้านเกิ้งน้อย2=Optic 12 Core DW = 2.24 km.";
    }
else if($message == "3002-106"){
        $arrayPostData['messages'][0]['text'] = "UDN000573,(3002-79) ผาสุก - (3002-106) บ้านแวง=Optic 12 Core DW = 2.378 km.";
    }
else if($message == "3002-108"){
        $arrayPostData['messages'][0]['text'] = "UDN001127,(3002-40) ธนาคารกรุงไทย - (3002-108) บ้านหนองผึ้ง=Optic 12 Core DW = 3.17 km.";
    }
else if($message == "3002-109"){
          $arrayPostData['messages'][0]['text'] = "UDN001094,(3002-109) บ้านแวง (กุมภวาปี) - (3002-142) หนองแวงน้อย=Optic 12 Core DW = 1.4 km.
UDN001142,(SJ) SJ หนองหาน-กุมภวาปี - (3002-109) บ้านแวง (กุมภวาปี)=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3002-111"){
          $arrayPostData['messages'][0]['text'] = "UDN000691,(3002-79) บ้านผาสุก - (3002-111) หนองนาคำ(กุมภวาปี)=Optic 12 Core DW = 1.94 km.
UDN001058,(3002-111) บ้านหนองนาคำ - (3002-112) ดงสามสิบ=Optic 12 Core DW = 2.7 km.
UDN001070,(3002-111) บ้านหนองนาคำ - (3002-79) ผาสุก=Optic 12 Core DW = 2.02 km.";
    }
else if($message == "3002-112"){
          $arrayPostData['messages'][0]['text'] = "UDN000693,(3002-112) ดงสามสิบ - (3002-113) เสอเพลอ=Optic 12 Core DW = 1.71 km.
UDN001058,(3002-111) บ้านหนองนาคำ - (3002-112) ดงสามสิบ=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3002-113"){
        $arrayPostData['messages'][0]['text'] = "UDN000693,(3002-112) ดงสามสิบ - (3002-113) เสอเพลอ=Optic 12 Core DW = 1.71 km.";
    }
else if($message == "3002-114"){
          $arrayPostData['messages'][0]['text'] = "UDN000656,(3002-114) ทองอินทร์ - (3033-328) บ้านทุ่งโพธ์=Optic 12 Core DW = 2.42 km.
UDN000735,(3002-115) วังหน้าผา - (3002-114) บ้านทองอินทร์=12 Core= 3.05 km.
UDN001075,(3002-114) บ้านทองอินทร์ - (3002-118) สวนมอญเสอเพลอ=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3002-115"){
          $arrayPostData['messages'][0]['text'] = "UDN000694,(3033-281) โนนเดื่อ - (3002-115) วังหน้าผา=12 Core= 3 km.
UDN000735,(3002-115) วังหน้าผา - (3002-114) บ้านทองอินทร์=12 Core= 3.05 km.
UDN001844,(3002-115) วังหน้าผา - (3016-84) ต.ทับกุง หนองหว้า=Optic 12 Core DW = 3.2 km.
UDN001845,(3002-115) วังหน้าผา - (3016-85) ต.ทับกุง บ้านหลบหวาย=12 Core= 6.45 km.";
    }
else if($message == "3002-116"){
          $arrayPostData['messages'][0]['text'] = "UDN001114,(3002-118) สวนมอญเสอเพลอ - (3002-116) เหล่ากล้วย=Optic 12 Core DW = 1.9 km.
UDN001449,(3002-116) บ้านเหล่ากล้วย - (3033-375) บ้านทอนกลาง=Optic 12 Core DW = 1.44 km.
UDN001679,(3002-116) เหล่ากล้วย - (3002-173) ต.เสอเพลอ โนนศรีสมพร=Optic 12 Core DW = 1.1 km.
UDN00560,(3002-118) บ้านสวนมอญ - (3002-116) บ้านเหล่ากล้วย=12 Core= 2.424 km.";
    }
else if($message == "3002-117"){
          $arrayPostData['messages'][0]['text'] = "UDN000695,(3002-85) บ้านตูมใต้ - (3002-117) บ้านไผ่=Optic 12 Core DW = 2.2 km.
UDN001074,(3002-53) แยกพันดอน - (3002-117) บ้านไผ่=Optic 12 Core DW = 4 km.
UDN001686,(3002-117) บ้านไผ่ - (3002-204) หมู่บ้านนภรัตน์=Optic 12 Core DW = 1.68 km.";
    }
else if($message == "3002-118"){
        $arrayPostData['messages'][0]['text'] = "UDN001075,(3002-114) บ้านทองอินทร์ - (3002-118) สวนมอญเสอเพลอ=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3002-119"){
          $arrayPostData['messages'][0]['text'] = "UDN001076,(3011-59) บะยาว - (3002-119) แสงสว่าง=Optic 12 Core DW = 3.2 km.
UDN001096,(3002-119) แสงสว่าง - (3002-145) ศรีสุข=Optic 12 Core DW = 4.144 km.
UDN001687,(3002-119) แสงสว่าง - (3002-205) ต.ท่าลี บ้านโนนงาม=Optic 12 Core DW = 1.83 km.";
    }
else if($message == "3002-121"){
          $arrayPostData['messages'][0]['text'] = "UDN000593,(3002-145) บ้านศรีสุข - (3002-121) บ้านนาเพ็ญ=Optic 12 Core DW = 2.08 km.
UDN001077,(3002-145) ศรีสุข - (3002-121) นาเพ็ญ=Optic 12 Core DW = 2 km.";
    }
else if($message == "3002-122"){
        $arrayPostData['messages'][0]['text'] = "UDN001078,(3002-101) บ้านม่วงหวาน - (3002-122) บ้านหนองเหี้ย=Optic 12 Core DW = 1.873 km.";
    }
else if($message == "3002-123"){
          $arrayPostData['messages'][0]['text'] = "UDN001079,(3002-58) ห้วยเกิ้ง2 - (3002-123) บ้านโสกคูณ=Optic 12 Core DW = 1.975 km.
UDN001080,(3002-123) บ้านโสกคูณ - (3002-124) กุดจิก=Optic 12 Core DW = 2.615 km.";
    }
else if($message == "3002-124"){
          $arrayPostData['messages'][0]['text'] = "UDN001080,(3002-123) บ้านโสกคูณ - (3002-124) กุดจิก=Optic 12 Core DW = 2.615 km.
UDN001081,(3002-124) กุดจิก - (3002-125) หนองหว้า=Optic 12 Core DW = 2.025 km.";
    }
else if($message == "3002-125"){
          $arrayPostData['messages'][0]['text'] = "UDN001081,(3002-124) กุดจิก - (3002-125) หนองหว้า=Optic 12 Core DW = 2.025 km.
UDN001083,(3002-125) หนองหว้า - (3002-127) ห้วยบง=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3002-126"){
        $arrayPostData['messages'][0]['text'] = "UDN001082,(3002-127) ห้วยบง - (3002-126) บ้านดงมะไฟ=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3002-127"){
          $arrayPostData['messages'][0]['text'] = "UDN001082,(3002-127) ห้วยบง - (3002-126) บ้านดงมะไฟ=Optic 12 Core DW = 1.9 km.
UDN001083,(3002-125) หนองหว้า - (3002-127) ห้วยบง=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3002-128"){
        $arrayPostData['messages'][0]['text'] = "UDN001084,(3002-129) บ้านหนองกวาง - (3002-128) โนนขวา ศรีสว่างพัฒนา โคกสว่าง=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3002-129"){
          $arrayPostData['messages'][0]['text'] = "UDN001084,(3002-129) บ้านหนองกวาง - (3002-128) โนนขวา ศรีสว่างพัฒนา โคกสว่าง=Optic 12 Core DW = 1.6 km.
UDN001085,(3002-131) บ้านหนองหอย - (3002-129) บ้านหนองกวาง=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3002-130"){
        $arrayPostData['messages'][0]['text'] = "UDN000602,(3002-130) บ้านแสงสว่าง - (3002-156) บ้านโนนสวรรค์=12 Core= 5.415 km.";
    }
else if($message == "3002-131"){
          $arrayPostData['messages'][0]['text'] = "UDN001085,(3002-131) บ้านหนองหอย - (3002-129) บ้านหนองกวาง=Optic 12 Core DW = 1.5 km.
UDN001086,(3002-132) บ้านหนองแดง - (3002-131) บ้านหนองหอย=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3002-132"){
          $arrayPostData['messages'][0]['text'] = "UDN001086,(3002-132) บ้านหนองแดง - (3002-131) บ้านหนองหอย=Optic 12 Core DW = 2.2 km.
UDN001087,(3002-133) บ้านท่าแสง - (3002-132) บ้านหนองแดง=Optic 12 Core DW = 2.1 km.
UDN001168,(3002-132) บ้านหนองแดง - (3011-57) บ้านกระเบื้อง=Optic 12 Core DW = 4.3 km.";
    }
else if($message == "3002-133"){
          $arrayPostData['messages'][0]['text'] = "UDN001087,(3002-133) บ้านท่าแสง - (3002-132) บ้านหนองแดง=Optic 12 Core DW = 2.1 km.
UDN001088,(3002-135) โนนมะข่า - (3002-133) ท่าแสง=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3002-134"){
          $arrayPostData['messages'][0]['text'] = "UDN001089,(3002-136) ท่าม่วงเวียงคำ - (3002-134) สวนมอญเวียงคำ=Optic 12 Core DW = 3.5 km.
UDN001438,(3002-134) บ้านสวนมอญ - (3017-82) บ้านวังโปร่ง=Optic 12 Core DW = 3 km.";
    }
else if($message == "3002-135"){
          $arrayPostData['messages'][0]['text'] = "UDN001088,(3002-135) โนนมะข่า - (3002-133) ท่าแสง=Optic 12 Core DW = 2.3 km.
UDN001090,(3002-90) บ้านปอ - (3002-135) โนนมะข่า=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3002-136"){
          $arrayPostData['messages'][0]['text'] = "UDN001089,(3002-136) ท่าม่วงเวียงคำ - (3002-134) สวนมอญเวียงคำ=Optic 12 Core DW = 3.5 km.
UDN001091,(3002-61) บ้านหนองนาเทา - (3002-136) ท่าม่วงเวียงคำ=Optic 12 Core DW = 4 km.";
    }
else if($message == "3002-137"){
        $arrayPostData['messages'][0]['text'] = "UDN001092,(SJ) SJ ธนพิทักษ์ - ME ศรีธาตุ - (3002-137) บ้านหินฮาว=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3002-138"){
        $arrayPostData['messages'][0]['text'] = "UDN001357,(3002-139) เหล่าโคกโพธิ์ - (3002-138) เหล่ากกโพธิ์=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3002-139"){
          $arrayPostData['messages'][0]['text'] = "UDN001357,(3002-139) เหล่าโคกโพธิ์ - (3002-138) เหล่ากกโพธิ์=Optic 12 Core DW = 2.16 km.
UDN001678,(3015-75) บ้านโนนสะอาด - (3002-139) เลาโคกโพธิ์=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3002-141"){
        $arrayPostData['messages'][0]['text'] = "UDN001093,(3002-166) เหล่าเชียงสม - (3002-141) บ้านเหล่าหมากบ้า=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3002-142"){
          $arrayPostData['messages'][0]['text'] = "UDN001094,(3002-109) บ้านแวง (กุมภวาปี) - (3002-142) หนองแวงน้อย=Optic 12 Core DW = 1.4 km.
UDN001095,(3002-142) หนองแวงน้อย - (3002-143) บ้านเมืองพรึก=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3002-143"){
        $arrayPostData['messages'][0]['text'] = "UDN001095,(3002-142) หนองแวงน้อย - (3002-143) บ้านเมืองพรึก=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3002-145"){
          $arrayPostData['messages'][0]['text'] = "UDN000593,(3002-145) บ้านศรีสุข - (3002-121) บ้านนาเพ็ญ=Optic 12 Core DW = 2.08 km.
UDN001077,(3002-145) ศรีสุข - (3002-121) นาเพ็ญ=Optic 12 Core DW = 2 km.
UDN001096,(3002-119) แสงสว่าง - (3002-145) ศรีสุข=Optic 12 Core DW = 4.144 km.
UDN001108,(3002-145) ศรีสุข - (3002-158) บ้านนาทัน=Optic 12 Core DW = 4.5 km.
UDN001849,(3002-145) ศรีสุข - (3017-74) ต.บ้านโปร่ง บ้านห้วยผึ้ง=Optic 12 Core DW = 3.33 km.";
    }
else if($message == "3002-146"){
          $arrayPostData['messages'][0]['text'] = "UDN000705,(3020-73) สวนมอญ - (3002-146) บ้านเดียม=Optic 12 Core DW = 2.66 km.
UDN001097,(3020-73) สวนมอญ - (3002-146) บ้านเดียม=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3002-147"){
          $arrayPostData['messages'][0]['text'] = "UDN001098,(3016-70) บ้านหนองแสง - (3002-147) คำเจริญ=Optic 12 Core DW = 5 km.
UDN001360,(3002-88) บ้านผือ - (3002-147) คำเจริญ=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3002-148"){
          $arrayPostData['messages'][0]['text'] = "UDN001099,(3033-111) บ้านหนองบัวเงิน - (3002-148) บ้านโนนสวรรค์=Optic 12 Core DW = 1.8 km.
UDN001100,(3002-148) บ้านโนนสวรรค์ - (3002-149) บ้านเสอเพลอ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3002-149"){
        $arrayPostData['messages'][0]['text'] = "UDN001100,(3002-148) บ้านโนนสวรรค์ - (3002-149) บ้านเสอเพลอ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3002-151"){
        $arrayPostData['messages'][0]['text'] = "UDN001101,(3002-37) โรงพยาบาลกุมภวาปี - (3002-151) หนองแวงหนองหว้า=12 Core= 5.1 km.";
    }
else if($message == "3002-152"){
          $arrayPostData['messages'][0]['text'] = "UDN000708,(3017-53) โนนสำราญ - (3002-152) คำเลา=Optic 12 Core DW = 2.36 km.
UDN001102,(3002-86) บ้านตาดทอง - (3002-152) บ้านคำเลา=Optic 12 Core DW = 4.7 km.
UDN001135,(3002-152) บ้านคำเลา - (3017-53) โนนสำราญ=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3002-153"){
          $arrayPostData['messages'][0]['text'] = "UDN000785,(3002-82) บ้านโนนเห็น - (3002-153) วังชัย=Optic 12 Core DW = 4.87 km.
UDN001103,(SJ) SJ ธนพิทักษ์ - ME ศรีธาตุ - (3002-153) วังชัย=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3002-154"){
        $arrayPostData['messages'][0]['text'] = "UDN001104,(3002-155) บ้านเหล่าหมากจันทร์ - (3002-154) บ้านคำล่อง=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3002-155"){
          $arrayPostData['messages'][0]['text'] = "UDN001104,(3002-155) บ้านเหล่าหมากจันทร์ - (3002-154) บ้านคำล่อง=Optic 12 Core DW = 1.5 km.
UDN001105,(3002-156) บ้านโนนสวรรค์ - (3002-155) บ้านเหล่าหมากจันทรื=Optic 12 Core DW = 2.7 km.
UDN001106,(3002-155) แสงสว่าง - (3002-156) บ้านโนนสวรรค์=12 Core= 5.415 km.";
    }
else if($message == "3002-156"){
          $arrayPostData['messages'][0]['text'] = "UDN000602,(3002-130) บ้านแสงสว่าง - (3002-156) บ้านโนนสวรรค์=12 Core= 5.415 km.
UDN001105,(3002-156) บ้านโนนสวรรค์ - (3002-155) บ้านเหล่าหมากจันทรื=Optic 12 Core DW = 2.7 km.
UDN001106,(3002-155) แสงสว่าง - (3002-156) บ้านโนนสวรรค์=12 Core= 5.415 km.
UDN001107,(3002-156) บ้านโนนสวรรค์ - (3002-157) บ้านราษฏรสมบูรณ์=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3002-157"){
        $arrayPostData['messages'][0]['text'] = "UDN001107,(3002-156) บ้านโนนสวรรค์ - (3002-157) บ้านราษฏรสมบูรณ์=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3002-158"){
        $arrayPostData['messages'][0]['text'] = "UDN001108,(3002-145) ศรีสุข - (3002-158) บ้านนาทัน=Optic 12 Core DW = 4.5 km.";
    }
else if($message == "3002-159"){
          $arrayPostData['messages'][0]['text'] = "UDN001109,(3002-105) เกิ้งน้อย2 - (3002-159) บ้านหนองหญ้ารังกา=Optic 12 Core DW = 5 km.
UDN001110,(3002-159) บ้านหนองหญ้ารังกา - (3002-161) บ้านห้วยขุมปูน=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3002-161"){
        $arrayPostData['messages'][0]['text'] = "UDN001110,(3002-159) บ้านหนองหญ้ารังกา - (3002-161) บ้านห้วยขุมปูน=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3002-162"){
        $arrayPostData['messages'][0]['text'] = "UDN001111,(3002-73) บ้านบุ่งหมากลาน - (3002-162) บ้านเหมือดแอ=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3002-166"){
          $arrayPostData['messages'][0]['text'] = "UDN001093,(3002-166) เหล่าเชียงสม - (3002-141) บ้านเหล่าหมากบ้า=Optic 12 Core DW = 1.5 km.
UDN001112,(3002-46) บ้านยางหล่อ - (3002-166) เหล่าเชียงสม=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3002-168"){
        $arrayPostData['messages'][0]['text'] = "UDN001113,(3002-40) ธ.กรุงไทย - (3002-168) หนองศรีเจริญ=Optic 12 Core DW = 3 km.";
    }
else if($message == "3002-171"){
        $arrayPostData['messages'][0]['text'] = "UDN001115,(3002-65) บ้านเชียงแหว - (3002-171) บ้านเชียวแหว2=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3002-172"){
        $arrayPostData['messages'][0]['text'] = "UDN001116,(3002-66) ห้วยกองสี - (3002-172) ห้วยกองสี2=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3002-173"){
        $arrayPostData['messages'][0]['text'] = "UDN001679,(3002-116) เหล่ากล้วย - (3002-173) ต.เสอเพลอ โนนศรีสมพร=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3002-174"){
        $arrayPostData['messages'][0]['text'] = "UDN001455,(3002-103) บ้านหมากบ้า - (3002-174) บ้านนกขะบา=Optic 12 Core DW = 1.61 km.";
    }
else if($message == "3002-175"){
        $arrayPostData['messages'][0]['text'] = "UDN001680,(3002-53) แยกพันดอน - (3002-175) ต.พันดอน กงพาน=Optic 12 Core DW = 1.95 km.";
    }
else if($message == "3002-177"){
        $arrayPostData['messages'][0]['text'] = "UDN001456,(3002-85) บ้านตูมใต้ - (3002-177) ต.ตูมใต้ บ้านน้ำฆ้อง=Optic 12 Core DW = 1.581 km.";
    }
else if($message == "3002-179"){
        $arrayPostData['messages'][0]['text'] = "UDN001461,(3002-182) บ้านโนนงาม - (3002-179) ต.เวียงคำ โนนหินลาด=Optic 12 Core DW = 3.255 km.";
    }
else if($message == "3002-182"){
          $arrayPostData['messages'][0]['text'] = "UDN001454,(3002-183) บ้านคำไผ่ - (3002-182) ตเวียงคำ โนนงาม=Optic 12 Core DW = 3.2 km.
UDN001461,(3002-182) บ้านโนนงาม - (3002-179) ต.เวียงคำ โนนหินลาด=Optic 12 Core DW = 3.255 km.";
    }
else if($message == "3002-183"){
        $arrayPostData['messages'][0]['text'] = "UDN001454,(3002-183) บ้านคำไผ่ - (3002-182) ตเวียงคำ โนนงาม=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3002-188"){
        $arrayPostData['messages'][0]['text'] = "UDN001681,(3002-40) ME ธนาคารกรุงไทย - (3002-188) ME ธนาคารกรุงไทย 2=Optic 12 Core DW = 0.69 km.";
    }
else if($message == "3002-189"){
        $arrayPostData['messages'][0]['text'] = "UDN001682,(3002-42) อุ่มจาน - (3002-189) อุ่มจาน 2=Optic 12 Core DW = 0.77 km.";
    }
else if($message == "3002-191"){
          $arrayPostData['messages'][0]['text'] = "UDN001683,(3002-39) พันดอน 2 - (3002-191) พันดอน 5=Optic 12 Core DW = 0.65 km.
UDN001690,(3002-191) พันดอน 5 - (3002-96) wirelessพันดอน=Optic 12 Core DW = 1.32 km.";
    }
else if($message == "3002-192"){
        $arrayPostData['messages'][0]['text'] = "UDN001684,(3002-46) บ้านยางหล่อ - (3002-192) ยางหล่อ2=Optic 12 Core DW = 0.989 km.";
    }
else if($message == "3002-193"){
        $arrayPostData['messages'][0]['text'] = "UDN001685,(3002-49) พันดอน3 - (3002-193) พันดอน 6=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3002-199"){
        $arrayPostData['messages'][0]['text'] = "UDN001611,(3002-67) บ้านดอนแก้ว - (3002-199) บ้านดอนแก้ว 2=Optic 12 Core DW = 0.835 km.";
    }
else if($message == "3002-204"){
        $arrayPostData['messages'][0]['text'] = "UDN001686,(3002-117) บ้านไผ่ - (3002-204) หมู่บ้านนภรัตน์=Optic 12 Core DW = 1.68 km.";
    }
else if($message == "3002-205"){
        $arrayPostData['messages'][0]['text'] = "UDN001687,(3002-119) แสงสว่าง - (3002-205) ต.ท่าลี บ้านโนนงาม=Optic 12 Core DW = 1.83 km.";
    }
else if($message == "3002-206"){
        $arrayPostData['messages'][0]['text'] = "UDN001688,(3002-94) บ้านเกิ้งน้อย - (3002-206) ต.ปะโค ทับล้อ=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3002-208"){
        $arrayPostData['messages'][0]['text'] = "UDN001689,(3002-61) หนองนาเทา - (3002-208) ท่าหนองเทาน้อย=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3002-31"){
          $arrayPostData['messages'][0]['text'] = "UDN000045,(SJ22) BJ Mainroot อุดร - ขอนแก่น Cable1 - (3002-31) บ้านปะโค=Optic 12 Core DW = 0.745 km.
UDN000436,(3002-31) บ้านปะโค - (3002-63) บ้านโนนจำปา=Optic 12 Core DW = 1.425 km.
UDN000553,(3002-31) บ้านปะโค - (3002-98) ปะโค2=Optic 12 Core DW = 0.724 km.
UDN001027,(3002-40) ME ธนาคารกรุงเทพ - (3002-31) บ้านปะโค=Optic 12 Core DW = 3 km.";
    }
else if($message == "3002-33"){
          $arrayPostData['messages'][0]['text'] = "UDN000046,(3002-42) อุ่มจาน - (3002-33) บ้านดอนเงิน=Optic 12 Core DW = 4.4 km.
UDN000056,(3002-33) ดอนเงิน - (3002-46) บ้านยางหล่อ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3002-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000047,(3002-42) อุ่มจาน - (3002-37) โรงพยาบาลกุมภวาปี=Optic 12 Core DW = 1.6 km.
UDN000366,(3002-37)  โรงพยาบาลกุมภวาปี - () โรงพยาบาลกุมภวาปี=Optic 12 Core DW = 0.6 km.
UDN001101,(3002-37) โรงพยาบาลกุมภวาปี - (3002-151) หนองแวงหนองหว้า=12 Core= 5.1 km.";
    }
else if($message == "3002-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000048,(3002-41) ธนาคารกรุงไทย - (3002-38) พันดอน=Optic 12 Core DW = 2.7 km.
UDN000049,(3002-38) พันดอน - (3002-39) พันดอน2=Optic 12 Core DW = 2.44 km.
UDN000053,(3002-38) พันดอน - (3002-43) ธนพิทักษ์=Optic 12 Core DW = 6.5 km.
UDN000057,(3002-38) พันดอน - (3002-49) พันดอน3=Optic 12 Core DW = 1.331 km.
UDN000787,(3002-42) อุ่มจาน - (3002-38) พันดอน 1=12 Core= 6.6 km.";
    }
else if($message == "3002-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000049,(3002-38) พันดอน - (3002-39) พันดอน2=Optic 12 Core DW = 2.44 km.
UDN001683,(3002-39) พันดอน 2 - (3002-191) พันดอน 5=Optic 12 Core DW = 0.65 km.";
    }
else if($message == "3002-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000003,(3032-33) meโนนสูง(SJ) - (3002-40) me กรุงไทย=Optic 12 Core DW = 1.1 km.
UDN000004,(SJ) me บ้านจิก(SJ) - (3002-40) me กรุงไทย=Optic 12 Core DW = 1.08 km.
UDN000059,(3002-40) me ธนาคารกรุงไทย - (3002-52) บ้านดอนแคน=Optic 12 Core DW = 2.647 km.
UDN000062,(3002-40) me กรุงไทย - (3002-62) วิทยาลัยการอาชีพกุมภวาปี=Optic 12 Core DW = 1.87 km.
UDN000475,(3002-40) me ธนาคารกรุงไทย - (3002-74) บ้านสี่แจ=Optic 12 Core DW = 5 km.
UDN000556,(3002-40) me ธนาคารกรุงไทย - (3002-91) ประปากุมภวาปี=Optic 12 Core DW = 0.931 km.
UDN000790,(3002-40) ธ.กรุงไทย - (3002-53) แยกพันดอน=Optic 12 Core DW = 1.641 km.
UDN000992,(3002-40) ME กุมภวาปี - (3016-63) ME หนองแสง=12 Core= 30.806 km.
UDN000993,(3002-40) ME กุมภวาปี - (3020-67) ME ประจักษ์ศิลปาคม=12 Core= 24.513 km.
UDN001027,(3002-40) ME ธนาคารกรุงเทพ - (3002-31) บ้านปะโค=Optic 12 Core DW = 3 km.
UDN001113,(3002-40) ธ.กรุงไทย - (3002-168) หนองศรีเจริญ=Optic 12 Core DW = 3 km.
UDN001127,(3002-40) ธนาคารกรุงไทย - (3002-108) บ้านหนองผึ้ง=Optic 12 Core DW = 3.17 km.
UDN001269,(3002-40) ME ธนาคารกรุงไทย - (3002-88) บ้านผือ(กุมภวาปี)=Optic 12 Core DW = 4 km.
UDN001681,(3002-40) ME ธนาคารกรุงไทย - (3002-188) ME ธนาคารกรุงไทย 2=Optic 12 Core DW = 0.69 km.";
    }
else if($message == "3002-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000048,(3002-41) ธนาคารกรุงไทย - (3002-38) พันดอน=Optic 12 Core DW = 2.7 km.
UDN000051,(3002-54) ธนพิทักษ์4 - (3002-41) โรงงานน้ำตาลกุมภวาปี=Optic 12 Core DW = 1.1 km.
UDN000437,(3002-41) ธนาคารกรุงไทย - (3002-64) บ้านดงเรือง=Optic 12 Core DW = 5.014 km.";
    }
else if($message == "3002-42"){
          $arrayPostData['messages'][0]['text'] = "UDN000046,(3002-42) อุ่มจาน - (3002-33) บ้านดอนเงิน=Optic 12 Core DW = 4.4 km.
UDN000047,(3002-42) อุ่มจาน - (3002-37) โรงพยาบาลกุมภวาปี=Optic 12 Core DW = 1.6 km.
UDN000052,(3002-43) ธนพิทักษ์ - (3002-42) อุ่มจาน=Optic 12 Core DW = 1.2 km.
UDN000787,(3002-42) อุ่มจาน - (3002-38) พันดอน 1=12 Core= 6.6 km.
UDN001682,(3002-42) อุ่มจาน - (3002-189) อุ่มจาน 2=Optic 12 Core DW = 0.77 km.";
    }
else if($message == "3002-43"){
          $arrayPostData['messages'][0]['text'] = "UDN000052,(3002-43) ธนพิทักษ์ - (3002-42) อุ่มจาน=Optic 12 Core DW = 1.2 km.
UDN000053,(3002-38) พันดอน - (3002-43) ธนพิทักษ์=Optic 12 Core DW = 6.5 km.
UDN000054,(3002-43) ธนพิทักษ์ - (3002-44) มูลนิธิ=Optic 12 Core DW = 1.4 km.
UDN000055,(3002-43) ธนพิทักษ์ - (3002-45) ธนพิทักษ์2=Optic 12 Core DW = 2.7 km.
UDN000058,(3002-43) ธนพิทักษ์ - (3002-50) ธนพิทักษ์3=Optic 12 Core DW = 1.195 km.
UDN000502,(3002-43) ME ธนพิทักษ์ - (3017-38) ME ศรีธาตุ=12 Core= 30 km.
UDN000791,(3002-43) ธนพิทักษ์ - (3002-56) โลตัสกุมภวาปี=Optic 12 Core DW = 0.843 km.
UDN000995,(3002-43) ME ธนพิทักษ์ - (3008-37) ME หนองหาน=12 Core= 36.217 km.
UDN000996,(3002-43) ME ธนพิทักษ์ - (3015-63) ME กู่แก้ว=12 Core= 22.488 km.
UDN001644,(3002-43) ME ธนพิทักษ์ - (3002-99) บ้านท่าเปือย=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3002-44"){
          $arrayPostData['messages'][0]['text'] = "UDN000054,(3002-43) ธนพิทักษ์ - (3002-44) มูลนิธิ=Optic 12 Core DW = 1.4 km.
UDN000441,(3002-44) มูลนิธิ - (3002-67) บ้านดอนแก้ว=Optic 12 Core DW = 3.979 km.
UDN001128,(3002-44) มูลนิธิ - (3002-104) มูลนิธิ2=Optic 12 Core DW = 1.11 km.";
    }
else if($message == "3002-45"){
        $arrayPostData['messages'][0]['text'] = "UDN000055,(3002-43) ธนพิทักษ์ - (3002-45) ธนพิทักษ์2=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3002-46"){
          $arrayPostData['messages'][0]['text'] = "UDN000056,(3002-33) ดอนเงิน - (3002-46) บ้านยางหล่อ=Optic 12 Core DW = 2.3 km.
UDN001112,(3002-46) บ้านยางหล่อ - (3002-166) เหล่าเชียงสม=Optic 12 Core DW = 1.3 km.
UDN001684,(3002-46) บ้านยางหล่อ - (3002-192) ยางหล่อ2=Optic 12 Core DW = 0.989 km.";
    }
else if($message == "3002-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000057,(3002-38) พันดอน - (3002-49) พันดอน3=Optic 12 Core DW = 1.331 km.
UDN000061,(3002-49) พันดอน3 - (3002-55) พันดอน4=Optic 12 Core DW = 0.558 km.
UDN001685,(3002-49) พันดอน3 - (3002-193) พันดอน 6=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3002-50"){
        $arrayPostData['messages'][0]['text'] = "UDN000058,(3002-43) ธนพิทักษ์ - (3002-50) ธนพิทักษ์3=Optic 12 Core DW = 1.195 km.";
    }
else if($message == "3002-52"){
        $arrayPostData['messages'][0]['text'] = "UDN000059,(3002-40) me ธนาคารกรุงไทย - (3002-52) บ้านดอนแคน=Optic 12 Core DW = 2.647 km.";
    }
else if($message == "3002-53"){
          $arrayPostData['messages'][0]['text'] = "UDN000790,(3002-40) ธ.กรุงไทย - (3002-53) แยกพันดอน=Optic 12 Core DW = 1.641 km.
UDN001074,(3002-53) แยกพันดอน - (3002-117) บ้านไผ่=Optic 12 Core DW = 4 km.
UDN001680,(3002-53) แยกพันดอน - (3002-175) ต.พันดอน กงพาน=Optic 12 Core DW = 1.95 km.";
    }
else if($message == "3002-54"){
          $arrayPostData['messages'][0]['text'] = "UDN000051,(3002-54) ธนพิทักษ์4 - (3002-41) โรงงานน้ำตาลกุมภวาปี=Optic 12 Core DW = 1.1 km.
UDN000060,(3002-45) ธนพิทักษ์2 - (3002-54) ธนพิทักษ์4=Optic 12 Core DW = 1.109 km.";
    }
else if($message == "3002-55"){
        $arrayPostData['messages'][0]['text'] = "UDN000061,(3002-49) พันดอน3 - (3002-55) พันดอน4=Optic 12 Core DW = 0.558 km.";
    }
else if($message == "3002-56"){
        $arrayPostData['messages'][0]['text'] = "UDN000791,(3002-43) ธนพิทักษ์ - (3002-56) โลตัสกุมภวาปี=Optic 12 Core DW = 0.843 km.";
    }
else if($message == "3002-57"){
          $arrayPostData['messages'][0]['text'] = "UDN000393,(SJ) SJ mainroute อุดร-ขอนแก่น - (3002-57) ห้วยเกิ้ง=Optic 12 Core DW = 0.8 km.
UDN000394,(3002-57) ห้วยเกิ้ง - (3002-58) ห้วยเกิ้ง2=Optic 12 Core DW = 1.6 km.
UDN000440,(3002-57) ห้วยเกิ้ง - (3002-66) ห้วยกองสี=Optic 12 Core DW = 3.303 km.
UDN000472,(3002-57) ห้วยเกิ้ง - (3002-73) บ้านบุ่งหมากลาน=Optic 12 Core DW = 4 km.";
    }
else if($message == "3002-58"){
          $arrayPostData['messages'][0]['text'] = "UDN000394,(3002-57) ห้วยเกิ้ง - (3002-58) ห้วยเกิ้ง2=Optic 12 Core DW = 1.6 km.
UDN000559,(3002-58) ห้วยเกิ้ง2 - (3002-101) ม่วงหวาน=Optic 12 Core DW = 3.117 km.
UDN001079,(3002-58) ห้วยเกิ้ง2 - (3002-123) บ้านโสกคูณ=Optic 12 Core DW = 1.975 km.
UDN001208,(3002-58) บ้านห้วยเกิ้ง2 - (3002-105) บ้านเกิ้งน้อย2=Optic 12 Core DW = 2.24 km.
UDN001643,(3002-58) บ้านห้วยเกิ้ง2 - (3002-94) บ้านเกิ้งน้อย=Optic 12 Core DW = 4.235 km.";
    }
else if($message == "3002-59"){
        $arrayPostData['messages'][0]['text'] = "UDN000403,(SJ) SJ mainroute อุดร-ขอนแก่น - (3002-59) บ้านดงน้อย=Optic 12 Core DW = 2.14 km.";
    }
else if($message == "3002-60"){
          $arrayPostData['messages'][0]['text'] = "UDN000404,(SJ) SJ Nodeอุ่มจาน - ดอนเงิน - (3002-60) บ้านนาแบก=Optic 12 Core DW = 0.5 km.
UDN000405,(3002-60) บ้านนาแบก - (3002-61) หนองนาเทา=Optic 12 Core DW = 2.3 km.
UDN001129,(3002-104) มูลนิธิ2 - (3002-60) บ้านนาแบก=Optic 12 Core DW = 1.09 km.";
    }
else if($message == "3002-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000405,(3002-60) บ้านนาแบก - (3002-61) หนองนาเทา=Optic 12 Core DW = 2.3 km.
UDN001091,(3002-61) บ้านหนองนาเทา - (3002-136) ท่าม่วงเวียงคำ=Optic 12 Core DW = 4 km.
UDN001689,(3002-61) หนองนาเทา - (3002-208) ท่าหนองเทาน้อย=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3002-62"){
        $arrayPostData['messages'][0]['text'] = "UDN000062,(3002-40) me กรุงไทย - (3002-62) วิทยาลัยการอาชีพกุมภวาปี=Optic 12 Core DW = 1.87 km.";
    }
else if($message == "3002-63"){
          $arrayPostData['messages'][0]['text'] = "UDN000436,(3002-31) บ้านปะโค - (3002-63) บ้านโนนจำปา=Optic 12 Core DW = 1.425 km.
UDN001028,(3002-63) บ้านโนนจำปา - (3002-66) ห้วยกองสี=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3002-64"){
          $arrayPostData['messages'][0]['text'] = "UDN000437,(3002-41) ธนาคารกรุงไทย - (3002-64) บ้านดงเรือง=Optic 12 Core DW = 5.014 km.
UDN000438,(3002-64) บ้านดงเรือง - (3002-65) บ้านเชียงแหว=Optic 12 Core DW = 5.543 km.";
    }
else if($message == "3002-65"){
          $arrayPostData['messages'][0]['text'] = "UDN000438,(3002-64) บ้านดงเรือง - (3002-65) บ้านเชียงแหว=Optic 12 Core DW = 5.543 km.
UDN001115,(3002-65) บ้านเชียงแหว - (3002-171) บ้านเชียวแหว2=Optic 12 Core DW = 0.5 km.
UDN001672,(3002-65) บ้านเชียงแหว - (3033-238) บ้านเซียม=Optic 12 Core DW = 3 km.";
    }
else if($message == "3002-66"){
          $arrayPostData['messages'][0]['text'] = "UDN000440,(3002-57) ห้วยเกิ้ง - (3002-66) ห้วยกองสี=Optic 12 Core DW = 3.303 km.
UDN000480,(3002-66) ห้วยกองสี - (3002-71) บ้านตูม(กุมภวาปี)=Optic 12 Core DW = 3 km.
UDN000795,(3002-66) ห้วยกองสี - (3002-93) โรงงานน้ำตาลเกษตรผล=12 Core= 1.848 km.
UDN001028,(3002-63) บ้านโนนจำปา - (3002-66) ห้วยกองสี=Optic 12 Core DW = 2.5 km.
UDN001116,(3002-66) ห้วยกองสี - (3002-172) ห้วยกองสี2=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3002-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000441,(3002-44) มูลนิธิ - (3002-67) บ้านดอนแก้ว=Optic 12 Core DW = 3.979 km.
UDN001611,(3002-67) บ้านดอนแก้ว - (3002-199) บ้านดอนแก้ว 2=Optic 12 Core DW = 0.835 km.";
    }
else if($message == "3002-71"){
        $arrayPostData['messages'][0]['text'] = "UDN000480,(3002-66) ห้วยกองสี - (3002-71) บ้านตูม(กุมภวาปี)=Optic 12 Core DW = 3 km.";
    }
else if($message == "3002-73"){
          $arrayPostData['messages'][0]['text'] = "UDN000472,(3002-57) ห้วยเกิ้ง - (3002-73) บ้านบุ่งหมากลาน=Optic 12 Core DW = 4 km.
UDN001071,(3002-73) บ้านบุ่งหมากลาน - (3016-71) บ้านนาฝาย=Optic 12 Core DW = 4.5 km.
UDN001111,(3002-73) บ้านบุ่งหมากลาน - (3002-162) บ้านเหมือดแอ=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3002-74"){
        $arrayPostData['messages'][0]['text'] = "UDN000475,(3002-40) me ธนาคารกรุงไทย - (3002-74) บ้านสี่แจ=Optic 12 Core DW = 5 km.";
    }
else if($message == "3002-79"){
          $arrayPostData['messages'][0]['text'] = "UDN000573,(3002-79) ผาสุก - (3002-106) บ้านแวง=Optic 12 Core DW = 2.378 km.
UDN000691,(3002-79) บ้านผาสุก - (3002-111) หนองนาคำ(กุมภวาปี)=Optic 12 Core DW = 1.94 km.
UDN001070,(3002-111) บ้านหนองนาคำ - (3002-79) ผาสุก=Optic 12 Core DW = 2.02 km.";
    }
else if($message == "3002-82"){
        $arrayPostData['messages'][0]['text'] = "UDN000785,(3002-82) บ้านโนนเห็น - (3002-153) วังชัย=Optic 12 Core DW = 4.87 km.";
    }
else if($message == "3002-85"){
          $arrayPostData['messages'][0]['text'] = "UDN000695,(3002-85) บ้านตูมใต้ - (3002-117) บ้านไผ่=Optic 12 Core DW = 2.2 km.
UDN000796,(3002-85) wireless บ้านตูมใต้ - (3002-97) บ้านดอนสวรรค์ตูมใต้=Optic 12 Core DW = 1.85 km.
UDN001456,(3002-85) บ้านตูมใต้ - (3002-177) ต.ตูมใต้ บ้านน้ำฆ้อง=Optic 12 Core DW = 1.581 km.";
    }
else if($message == "3002-86"){
          $arrayPostData['messages'][0]['text'] = "UDN000793,(SJ) กุมภวาปี-ศรีธาตุ - (3002-86) บ้านตาดทอง=12 Core= 9.4 km.
UDN001102,(3002-86) บ้านตาดทอง - (3002-152) บ้านคำเลา=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3002-87"){
          $arrayPostData['messages'][0]['text'] = "UDN000793,(SJ) กุมภวาปี-ศรีธาตุ - (3002-86) บ้านตาดทอง=12 Core= 9.4 km.
UDN001102,(3002-86) บ้านตาดทอง - (3002-152) บ้านคำเลา=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3002-88"){
          $arrayPostData['messages'][0]['text'] = "UDN001477,(3002-87) บ้านโคกกลาง - (3020-89) หนองแก=Optic 12 Core DW = 1.66 km.
UDN001642,(3002-89) บ้านนาดี - (3002-87) โคกกลาง=Optic 12 Core DW = 5.095 km.";
    }
else if($message == "3002-89"){
          $arrayPostData['messages'][0]['text'] = "UDN001269,(3002-40) ME ธนาคารกรุงไทย - (3002-88) บ้านผือ(กุมภวาปี)=Optic 12 Core DW = 4 km.
UDN001360,(3002-88) บ้านผือ - (3002-147) คำเจริญ=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3002-90"){
          $arrayPostData['messages'][0]['text'] = "UDN000568,(3002-89) บ้านนาดี - (3020-76) ห้วยสามพาด=Optic 12 Core DW = 2.29 km.
UDN001642,(3002-89) บ้านนาดี - (3002-87) โคกกลาง=Optic 12 Core DW = 5.095 km.";
    }
else if($message == "3002-91"){
          $arrayPostData['messages'][0]['text'] = "UDN001026,(3002-99) บ้านท่าเปือย - (3002-90) บ้านปอ=Optic 12 Core DW = 4 km.
UDN001090,(3002-90) บ้านปอ - (3002-135) โนนมะข่า=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3002-93"){
        $arrayPostData['messages'][0]['text'] = "UDN000556,(3002-40) me ธนาคารกรุงไทย - (3002-91) ประปากุมภวาปี=Optic 12 Core DW = 0.931 km.";
    }
else if($message == "3002-94"){
        $arrayPostData['messages'][0]['text'] = "UDN000795,(3002-66) ห้วยกองสี - (3002-93) โรงงานน้ำตาลเกษตรผล=12 Core= 1.848 km.";
    }
else if($message == "3002-96"){
          $arrayPostData['messages'][0]['text'] = "UDN000565,(3002-94) เกิ้งน้อย - (3002-105) เกิ้งน้อย2=Optic 12 Core DW = 2.076 km.
UDN001643,(3002-58) บ้านห้วยเกิ้ง2 - (3002-94) บ้านเกิ้งน้อย=Optic 12 Core DW = 4.235 km.
UDN001688,(3002-94) บ้านเกิ้งน้อย - (3002-206) ต.ปะโค ทับล้อ=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3002-97"){
        $arrayPostData['messages'][0]['text'] = "DN001690,(3002-191) พันดอน 5 - (3002-96) wirelessพันดอน=Optic 12 Core DW = 1.32 km.";
    }
else if($message == "3002-98"){
        $arrayPostData['messages'][0]['text'] = "UDN000796,(3002-85) wireless บ้านตูมใต้ - (3002-97) บ้านดอนสวรรค์ตูมใต้=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3002-99"){
        $arrayPostData['messages'][0]['text'] = "UDN000553,(3002-31) บ้านปะโค - (3002-98) ปะโค2=Optic 12 Core DW = 0.724 km.";
    }
else if($message == "3003-101"){
          $arrayPostData['messages'][0]['text'] = "UDN001026,(3002-99) บ้านท่าเปือย - (3002-90) บ้านปอ=Optic 12 Core DW = 4 km.
UDN001644,(3002-43) ME ธนพิทักษ์ - (3002-99) บ้านท่าเปือย=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3003-102"){
          $arrayPostData['messages'][0]['text'] = "UDN001245,(3003-99) บ้านจันทร์ - (3003-101) บ้านตูม=Optic 12 Core DW = 1.7 km.
UDN001246,(3003-101) บ้านตูม - (3003-102) โนนศึกษา=Optic 12 Core DW = 1.1 km.
UDN001247,(3003-101) บ้านตูม - (3003-103) บ่อศิลา=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3003-103"){
        $arrayPostData['messages'][0]['text'] = "UDN001246,(3003-101) บ้านตูม - (3003-102) โนนศึกษา=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3003-104"){
          $arrayPostData['messages'][0]['text'] = "UDN001247,(3003-101) บ้านตูม - (3003-103) บ่อศิลา=Optic 12 Core DW = 1.1 km.
UDN001248,(3003-103) บ่อศิลา - (3003-85) โนนสิมมา=Optic 12 Core DW = 5.7 km.";
    }
else if($message == "3003-105"){
          $arrayPostData['messages'][0]['text'] = "UDN001046,(3003-106) บ้านทุ่ง - (3003-105) บ้านกล้วย=Optic 12 Core DW = 3.5 km.
UDN001699,(3003-105) บ้านกล้วย - (3003-147) นาสีนวล=Optic 12 Core DW = 3.55 km.";
    }
else if($message == "3003-106"){
          $arrayPostData['messages'][0]['text'] = "UDN001046,(3003-106) บ้านทุ่ง - (3003-105) บ้านกล้วย=Optic 12 Core DW = 3.5 km.
UDN001047,(3003-106) บ้านทุ่ง - (3003-76) บ้านดงไพรวัลย์=Optic 12 Core DW = 1.6 km.
UDN001048,(3003-107) คำสง่า - (3003-106) บ้านทุ่ง=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3003-107"){
          $arrayPostData['messages'][0]['text'] = "UDN000743,(3003-107) คำสง่า - (3003-113) โนนอุดม=Optic 12 Core DW = 2.46 km.
UDN000808,(3003-107) คำสง่า - (3003-91) บ้านชัย=Optic 12 Core DW = 3.15 km.
UDN001048,(3003-107) คำสง่า - (3003-106) บ้านทุ่ง=Optic 12 Core DW = 2.9 km.
UDN001049,(3003-109) หนองไฮ - (3003-107) คำสง่า=Optic 12 Core DW = 2.7 km.
UDN001361,(3003-107) คำสง่า - (3003-181) บ้านนาดี=Optic 12 Core DW = 4.664 km.";
    }
else if($message == "3003-109"){
          $arrayPostData['messages'][0]['text'] = "UDN001049,(3003-109) หนองไฮ - (3003-107) คำสง่า=Optic 12 Core DW = 2.7 km.
UDN001051,(3003-111) โนนสำราญ - (3003-109) หนองไฮ=Optic 12 Core DW = 1.4 km.
UDN001333,(3003-109) บ้านหนองไฮ - (3003-179) บ้านปอพาน=Optic 12 Core DW = 4.84 km.";
    }
else if($message == "3003-111"){
          $arrayPostData['messages'][0]['text'] = "UDN001051,(3003-111) โนนสำราญ - (3003-109) หนองไฮ=Optic 12 Core DW = 1.4 km.
UDN001052,(3003-112) ดงศรีนวล - (3003-111) โนนสำราญ=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3003-112"){
          $arrayPostData['messages'][0]['text'] = "UDN001052,(3003-112) ดงศรีนวล - (3003-111) โนนสำราญ=Optic 12 Core DW = 3.2 km.
UDN001053,(3003-61) ME บ้านดุง - (3003-112) ดงศรีนวล=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3003-113"){
          $arrayPostData['messages'][0]['text'] = "UDN000743,(3003-107) คำสง่า - (3003-113) โนนอุดม=Optic 12 Core DW = 2.46 km.
UDN000807,(3003-113) โนนอุดม - (3003-90) บ้านโนนงาม=Optic 12 Core DW = 1.4 km.
UDN001054,(3003-91) บ้านชัย - (3003-113) โนนอุดม=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3003-114"){
          $arrayPostData['messages'][0]['text'] = "UDN000889,(3003-90) บ้านโนนงาม - (3003-114) โนนสมโภช=Optic 12 Core DW = 1.7 km.
UDN001290,(3003-114) โนนสมโภชน์ - (3018-66) ถ่อนนาเพลิน=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3003-115"){
        $arrayPostData['messages'][0]['text'] = "UDN000744,(3003-68) บ้านดุง4 - (3003-115) ศรีนพคุณ=Optic 12 Core DW = 1.61 km.";
    }
else if($message == "3003-116"){
        $arrayPostData['messages'][0]['text'] = "UDN000745,(3003-79) บ้านนาจาน - (3003-116) หนองแต้=Optic 12 Core DW = 1.52 km.";
    }
else if($message == "3003-117"){
          $arrayPostData['messages'][0]['text'] = "UDN001241,(3003-97) หัวฝาย - (3003-117) ดงยาง=Optic 12 Core DW = 3 km.
UDN001242,(3003-117) ดงยาง - (3003-89) เหล่าอุดม=Optic 12 Core DW = 2.4 km.
UDN001337,(3003-117) ดงยาง - (3003-184) บ้านดงหวาย=Optic 12 Core DW = 3.82 km.";
    }
else if($message == "3003-118"){
        $arrayPostData['messages'][0]['text'] = "UDN000710,(3003-121) หนองสว่าง - (3003-118) ศรีวัฒนา=Optic 12 Core DW = 3 km.";
    }
else if($message == "3003-119"){
          $arrayPostData['messages'][0]['text'] = "UDN000711,(3003-84) บ้านโพนสูง - (3003-119) ปากดง=Optic 12 Core DW = 4.04 km.
UDN000712,(3003-119) ปากดง - (3003-121) หนองสว่าง=Optic 12 Core DW = 4.3 km.";
    }
else if($message == "3003-121"){
          $arrayPostData['messages'][0]['text'] = "UDN000710,(3003-121) หนองสว่าง - (3003-118) ศรีวัฒนา=Optic 12 Core DW = 3 km.
UDN000712,(3003-119) ปากดง - (3003-121) หนองสว่าง=Optic 12 Core DW = 4.3 km.";
    }
else if($message == "3003-122"){
        $arrayPostData['messages'][0]['text'] = "UDN000713,(3003-122) สามัคคี - (3003-123) ศรีเมือง=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3003-123"){
        $arrayPostData['messages'][0]['text'] = "UDN000713,(3003-122) สามัคคี - (3003-123) ศรีเมือง=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3003-124"){
        $arrayPostData['messages'][0]['text'] = "UDN001346,(3003-125) ถ่อนนาลับ - (3003-124) โพธิ์ชัย=Optic 12 Core DW = 2.535 km.";
    }
else if($message == "3003-125"){
          $arrayPostData['messages'][0]['text'] = "UDN001341,(3003-125) ถ่อนนาลับ - (3003-138) บ้านนามั่ง=Optic 12 Core DW = 2.285 km.
UDN001345,(3003-126) หนองลาด - (3003-125) ถ่อนนาลับ=Optic 12 Core DW = 2.995 km.
UDN001346,(3003-125) ถ่อนนาลับ - (3003-124) โพธิ์ชัย=Optic 12 Core DW = 2.535 km.";
    }
else if($message == "3003-126"){
          $arrayPostData['messages'][0]['text'] = "UDN001345,(3003-126) หนองลาด - (3003-125) ถ่อนนาลับ=Optic 12 Core DW = 2.995 km.
UDN001691,(3003-127) หนองแวงถ่อนนาลับ - (3003-126) หนองลาด=Optic 12 Core DW = 1.585 km.";
    }
else if($message == "3003-127"){
          $arrayPostData['messages'][0]['text'] = "UDN001691,(3003-127) หนองแวงถ่อนนาลับ - (3003-126) หนองลาด=Optic 12 Core DW = 1.585 km.
UDN001692,(3003-128) ต.บ้านดุง หนองสองห้อง - (3003-127) หนองแวงถ่อนนาลับ=Optic 12 Core DW = 5.64 km.
UDN001695,(3003-127) หนองแวงถ่อนนาลับ - (3003-137) นาขี้นาค ต.นาไหม=Optic 12 Core DW = 3.489 km.";
    }
else if($message == "3003-128"){
          $arrayPostData['messages'][0]['text'] = "UDN001342,(3003-95) นาโฮง - (3003-128) หนองสองห้อง=Optic 12 Core DW = 4.06 km.
UDN001692,(3003-128) ต.บ้านดุง หนองสองห้อง - (3003-127) หนองแวงถ่อนนาลับ=Optic 12 Core DW = 5.64 km.";
    }
else if($message == "3003-129"){
          $arrayPostData['messages'][0]['text'] = "UDN000804,(3003-129) ถ่อนคำหวด - (3003-87) วังพระองค์=Optic 12 Core DW = 3.24 km.
UDN001693,(3003-95) นาโฮง - (3003-129) ถ่อนคำหวด=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3003-131"){
          $arrayPostData['messages'][0]['text'] = "UDN001336,(3003-132) คำเจริญ - (3003-131) บ้านวังชัย=Optic 12 Core DW = 4.09 km.
UDN001564,(3003-131) บ้านวังชัย - (3003-191) บ้านวังแสนสุข=Optic 12 Core DW = 0.86 km.
UDN001565,(3003-131) บ้านวังชัย - (3003-192) บ้านวังสมบัติ=Optic 12 Core DW = 4.172 km.
UDN001716,(3003-131) วังชัย - (3003-214) วังทองน้อย=Optic 12 Core DW = 1.759 km.";
    }
else if($message == "3003-132"){
          $arrayPostData['messages'][0]['text'] = "UDN001334,(3003-132) คำเจริญ - (3003-146) เหล่าหลวง=Optic 12 Core DW = 2.11 km.
UDN001335,(3003-133) บ้านกำแมด - (3003-132) คำเจริญ=Optic 12 Core DW = 1.94 km.
UDN001336,(3003-132) คำเจริญ - (3003-131) บ้านวังชัย=Optic 12 Core DW = 4.09 km.";
    }
else if($message == "3003-133"){
          $arrayPostData['messages'][0]['text'] = "UDN001335,(3003-133) บ้านกำแมด - (3003-132) คำเจริญ=Optic 12 Core DW = 1.94 km.
UDN001433,(3003-88) สันติสุข - (3003-133) บ้านกำแมด=Optic 12 Core DW = 2.22 km.";
    }
else if($message == "3003-134"){
          $arrayPostData['messages'][0]['text'] = "UDN001694,(SJ) MEสร้างคอม-MEบ้านดุง - (3003-134) บ้านผึ้ง=Optic 12 Core DW = 0.31 km.
UDN001731,(3003-134) บ้านผึ้ง - (3005-75) คำตระกร้า=Optic 12 Core DW = 4 km.";
    }
else if($message == "3003-135"){
        $arrayPostData['messages'][0]['text'] = "UDN001327,(3003-136) ศรีบุญทัน - (3003-135) นาไหม=Optic 12 Core DW = 1.581 km.";
    }
else if($message == "3003-136"){
          $arrayPostData['messages'][0]['text'] = "UDN001326,(3003-137) นาขี้นาค - (3003-136) ศรีบุญทัน=Optic 12 Core DW = 1.42 km.
UDN001327,(3003-136) ศรีบุญทัน - (3003-135) นาไหม=Optic 12 Core DW = 1.581 km.";
    }
else if($message == "3003-137"){
          $arrayPostData['messages'][0]['text'] = "UDN001326,(3003-137) นาขี้นาค - (3003-136) ศรีบุญทัน=Optic 12 Core DW = 1.42 km.
UDN001695,(3003-127) หนองแวงถ่อนนาลับ - (3003-137) นาขี้นาค ต.นาไหม=Optic 12 Core DW = 3.489 km.";
    }
else if($message == "3003-138"){
        $arrayPostData['messages'][0]['text'] = "UDN001341,(3003-125) ถ่อนนาลับ - (3003-138) บ้านนามั่ง=Optic 12 Core DW = 2.285 km.";
    }
else if($message == "3003-139"){
        $arrayPostData['messages'][0]['text'] = "UDN001696,(3003-182) กุดดู่ ต.นาไหม - (3003-139) โนนประเสริฐ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3003-141"){
        $arrayPostData['messages'][0]['text'] = "UDN001697,(3003-182) กุดดู่ ต.นาไหม - (3003-141) เมืองนาซำ=Optic 12 Core DW = 3.269 km.";
    }
else if($message == "3003-142"){
        $arrayPostData['messages'][0]['text'] = "UDN001340,(3003-142) ทุ่งกว้างพัฒนา - (3003-143) วังคางฮุง=Optic 12 Core DW = 2.44 km.";
    }
else if($message == "3003-143"){
          $arrayPostData['messages'][0]['text'] = "UDN001338,(3003-143) วังคางฮุง - (3003-145) นาคำวัง=Optic 12 Core DW = 2.82 km.
UDN001339,(3003-143) วังคางฮุง - (3003-144) ท่าบ่อยาง=Optic 12 Core DW = 1.882 km.
UDN001340,(3003-142) ทุ่งกว้างพัฒนา - (3003-143) วังคางฮุง=Optic 12 Core DW = 2.44 km.";
    }
else if($message == "3003-144"){
        $arrayPostData['messages'][0]['text'] = "UDN001339,(3003-143) วังคางฮุง - (3003-144) ท่าบ่อยาง=Optic 12 Core DW = 1.882 km.";
    }
else if($message == "3003-145"){
        $arrayPostData['messages'][0]['text'] = "UDN001338,(3003-143) วังคางฮุง - (3003-145) นาคำวัง=Optic 12 Core DW = 2.82 km.";
    }
else if($message == "3003-146"){
        $arrayPostData['messages'][0]['text'] = "UDN001334,(3003-132) คำเจริญ - (3003-146) เหล่าหลวง=Optic 12 Core DW = 2.11 km.";
    }
else if($message == "3003-147"){
        $arrayPostData['messages'][0]['text'] = "UDN001699,(3003-105) บ้านกล้วย - (3003-147) นาสีนวล=Optic 12 Core DW = 3.55 km.";
    }
else if($message == "3003-148"){
        $arrayPostData['messages'][0]['text'] = "UDN001321,(3003-149) บ้านนาคำ - (3003-148) ดงคำบอน=Optic 12 Core DW = 3 km.";
    }
else if($message == "3003-149"){
          $arrayPostData['messages'][0]['text'] = "UDN001321,(3003-149) บ้านนาคำ - (3003-148) ดงคำบอน=Optic 12 Core DW = 3 km.
UDN001487,(3003-149) บ้านนาคำ - (3003-189) บ้านพรสันติ=Optic 12 Core DW = 1.001 km.
UDN001700,(SJ) MEเพ็ญ-MEบ้านดุง - (3003-149) นาคำ (บ้านดุง)=Optic 12 Core DW = 1.89 km.";
    }
else if($message == "3003-151"){
        $arrayPostData['messages'][0]['text'] = "UDN001701,(SJ) บ้านชัย-ดอนขี้เหล็ก - (3003-151) หัวดงยาง=Optic 12 Core DW = 3.006 km.";
    }
else if($message == "3003-152"){
        $arrayPostData['messages'][0]['text'] = "UDN001702,(3003-91) บ้านชัย - (3003-152) ดอนขี้เหล็ก=Optic 12 Core DW = 5.35 km.";
    }
else if($message == "3003-153"){
        $arrayPostData['messages'][0]['text'] = "UDN001703,(3003-79) บ้านนาจาน - (3003-153) ค้อเขียว=Optic 12 Core DW = 1.86 km.";
    }
else if($message == "3003-154"){
        $arrayPostData['messages'][0]['text'] = "UDN001704,(3003-76) บ้านดงไพรวัลย์ - (3003-154) โนนศรีทอง=Optic 12 Core DW = 3.44 km.";
    }
else if($message == "3003-155"){
        $arrayPostData['messages'][0]['text'] = "UDN001392,(3003-156) โนนทองหลาง - (3003-155) โคกกลางใต้=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3003-156"){
          $arrayPostData['messages'][0]['text'] = "UDN001390,(3003-156) โนนทองหลาง - (3003-157) สมวิไล=Optic 12 Core DW = 3.06 km.
UDN001391,(3007-46) บ้านโพธิ์ - (3003-156) โนนทองหลาง=Optic 12 Core DW = 3.02 km.
UDN001392,(3003-156) โนนทองหลาง - (3003-155) โคกกลางใต้=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3003-157"){
          $arrayPostData['messages'][0]['text'] = "UDN001389,(3003-157) สมวิไล - (3003-158) โนนสวรรค์=Optic 12 Core DW = 2.62 km.
UDN001390,(3003-156) โนนทองหลาง - (3003-157) สมวิไล=Optic 12 Core DW = 3.06 km.";
    }
else if($message == "3003-158"){
        $arrayPostData['messages'][0]['text'] = "UDN001389,(3003-157) สมวิไล - (3003-158) โนนสวรรค์=Optic 12 Core DW = 2.62 km.";
    }
else if($message == "3003-159"){
          $arrayPostData['messages'][0]['text'] = "UDN001381,(3003-161) หนองหว้า - (3003-159) บ้านโนนเมือง=Optic 12 Core DW = 2.66 km.
UDN001645,(3003-159) โนนเมือง - (3003-211) โนนเมือง2=Optic 12 Core DW = 1.42 km.";
    }
else if($message == "3003-161"){
          $arrayPostData['messages'][0]['text'] = "UDN001380,(3003-162) บ้านม่วง หมู่1 - (3003-161) หนองหว้า=Optic 12 Core DW = 2.22 km.
UDN001381,(3003-161) หนองหว้า - (3003-159) บ้านโนนเมือง=Optic 12 Core DW = 2.66 km.";
    }
else if($message == "3003-162"){
          $arrayPostData['messages'][0]['text'] = "UDN001379,(3003-163) เมืองไพร - (3003-162) บ้านม่วง หมู่1=Optic 12 Core DW = 1.91 km.
UDN001380,(3003-162) บ้านม่วง หมู่1 - (3003-161) หนองหว้า=Optic 12 Core DW = 2.22 km.";
    }
else if($message == "3003-163"){
          $arrayPostData['messages'][0]['text'] = "UDN001378,(3003-164) ดงแสนสุข - (3003-163) เมืองไพร=Optic 12 Core DW = 3.703 km.
UDN001379,(3003-163) เมืองไพร - (3003-162) บ้านม่วง หมู่1=Optic 12 Core DW = 1.91 km.";
    }
else if($message == "3003-164"){
          $arrayPostData['messages'][0]['text'] = "UDN001377,(3003-165) โนนชัยศิลป์ - (3003-164) ดงแสนสุข=Optic 12 Core DW = 3.317 km.
UDN001378,(3003-164) ดงแสนสุข - (3003-163) เมืองไพร=Optic 12 Core DW = 3.703 km.";
    }
else if($message == "3003-165"){
          $arrayPostData['messages'][0]['text'] = "UDN001376,(3003-166) ป่าเป่า - (3003-165) โนนชัยศิลป์=Optic 12 Core DW = 1.896 km.
UDN001377,(3003-165) โนนชัยศิลป์ - (3003-164) ดงแสนสุข=Optic 12 Core DW = 3.317 km.";
    }
else if($message == "3003-166"){
          $arrayPostData['messages'][0]['text'] = "UDN001376,(3003-166) ป่าเป่า - (3003-165) โนนชัยศิลป์=Optic 12 Core DW = 1.896 km.
UDN001388,(3003-168) ดงดารา - (3003-166) ป่าเป่า=12 Core= 7.691 km.";
    }
else if($message == "3003-167"){
          $arrayPostData['messages'][0]['text'] = "UDN001386,(3003-168) ดงดารา - (3003-167) ดงสง่า=Optic 12 Core DW = 1.545 km.
UDN001709,(3003-167) ดงสง่า - (3003-188) ต.ดงเย็น ดงเย็น2=Optic 12 Core DW = 2.55 km.";
    }
else if($message == "3003-168"){
          $arrayPostData['messages'][0]['text'] = "UDN001385,(3003-169) โนนศรีทอง - (3003-168) ดงดารา=Optic 12 Core DW = 2.56 km.
UDN001386,(3003-168) ดงดารา - (3003-167) ดงสง่า=Optic 12 Core DW = 1.545 km.
UDN001388,(3003-168) ดงดารา - (3003-166) ป่าเป่า=12 Core= 7.691 km.";
    }
else if($message == "3003-169"){
          $arrayPostData['messages'][0]['text'] = "UDN001384,(3003-169) โนนศรีทอง - (3003-171) บ้านศรีเจริญ=Optic 12 Core DW = 1.87 km.
UDN001385,(3003-169) โนนศรีทอง - (3003-168) ดงดารา=Optic 12 Core DW = 2.56 km.
UDN001387,(3003-175) โนนสมบูรณ์ - (3003-169) โนนศรีทอง=Optic 12 Core DW = 5.42 km.";
    }
else if($message == "3003-171"){
          $arrayPostData['messages'][0]['text'] = "UDN001383,(3003-171) บ้านศรีเจริญ - (3003-172) ไผ่ล้อม=Optic 12 Core DW = 2.9 km.
UDN001384,(3003-169) โนนศรีทอง - (3003-171) บ้านศรีเจริญ=Optic 12 Core DW = 1.87 km.";
    }
else if($message == "3003-172"){
          $arrayPostData['messages'][0]['text'] = "UDN001382,(3003-172) ไผ่ล้อม - (3003-174) โนนหอม=Optic 12 Core DW = 3.06 km.
UDN001383,(3003-171) บ้านศรีเจริญ - (3003-172) ไผ่ล้อม=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3003-173"){
        $arrayPostData['messages'][0]['text'] = "UDN001705,(SJ) ศรีเจริญ-ไผ่ล้อม - (3003-173) โคกคำไหล=Optic 12 Core DW = 2.86 km.";
    }
else if($message == "3003-174"){
        $arrayPostData['messages'][0]['text'] = "UDN001382,(3003-172) ไผ่ล้อม - (3003-174) โนนหอม=Optic 12 Core DW = 3.06 km.";
    }
else if($message == "3003-175"){
          $arrayPostData['messages'][0]['text'] = "UDN001387,(3003-175) โนนสมบูรณ์ - (3003-169) โนนศรีทอง=Optic 12 Core DW = 5.42 km.
UDN001412,(3003-80) มีชัย - (3003-175) โนนสมบูรณ์=Optic 12 Core DW = 4.094 km.";
    }
else if($message == "3003-176"){
          $arrayPostData['messages'][0]['text'] = "UDN001400,(3003-176) บ้านหนองข่า - (3003-177) บ้านดงค้าพัฒนา=Optic 12 Core DW = 2.09 km.
UDN001401,(3003-77) บ้านทุ่งโพธิ์ทอง - (3003-176) บ้านหนองข่า=Optic 12 Core DW = 2.09 km.";
    }
else if($message == "3003-177"){
        $arrayPostData['messages'][0]['text'] = "UDN001400,(3003-176) บ้านหนองข่า - (3003-177) บ้านดงค้าพัฒนา=Optic 12 Core DW = 2.09 km.";
    }
else if($message == "3003-178"){
          $arrayPostData['messages'][0]['text'] = "UDN001399,(3003-77) บ้านทุ่งโพธิ์ทอง - (3003-178) บ้านฝาง.=Optic 12 Core DW = 1.36 km.
UDN001406,(3003-178) บ้านฝาง - (3003-186) บ้านสุขสบาย=Optic 12 Core DW = 4.65 km.";
    }
else if($message == "3003-179"){
          $arrayPostData['messages'][0]['text'] = "UDN001333,(3003-109) บ้านหนองไฮ - (3003-179) บ้านปอพาน=Optic 12 Core DW = 4.84 km.
UDN001712,(3003-179) ปอพาน - (3003-207) ปอพาน2=Optic 12 Core DW = 1.41 km.";
    }
else if($message == "3003-181"){
        $arrayPostData['messages'][0]['text'] = "UDN001361,(3003-107) คำสง่า - (3003-181) บ้านนาดี=Optic 12 Core DW = 4.664 km.";
    }
else if($message == "3003-182"){
          $arrayPostData['messages'][0]['text'] = "UDN001696,(3003-182) กุดดู่ ต.นาไหม - (3003-139) โนนประเสริฐ=Optic 12 Core DW = 2.3 km.
UDN001697,(3003-182) กุดดู่ ต.นาไหม - (3003-141) เมืองนาซำ=Optic 12 Core DW = 3.269 km.
UDN001706,(SJ) MEสร้างคอม-MEบ้านดุง - (3003-182) กุดดู่ ต.นาไหม=Optic 12 Core DW = 0.621 km.";
    }
else if($message == "3003-183"){
        $arrayPostData['messages'][0]['text'] = "UDN001707,(SJ) บ้านสามัคคี - (3003-183) กมลศิลป์=Optic 12 Core DW = 2.01 km.";
    }
else if($message == "3003-184"){
          $arrayPostData['messages'][0]['text'] = "UDN001337,(3003-117) ดงยาง - (3003-184) บ้านดงหวาย=Optic 12 Core DW = 3.82 km.
UDN001713,(3003-184) บ้านดงหวาย - (3003-208) สายน้ำผึ้ง=Optic 12 Core DW = 3.9 km.";
    }
else if($message == "3003-185"){
        $arrayPostData['messages'][0]['text'] = "UDN001708,(3003-79) บ้านนาจาน - (3003-185) คำภูเงิน=Optic 12 Core DW = 2.91 km.";
    }
else if($message == "3003-186"){
        $arrayPostData['messages'][0]['text'] = "UDN001406,(3003-178) บ้านฝาง - (3003-186) บ้านสุขสบาย=Optic 12 Core DW = 4.65 km.";
    }
else if($message == "3003-187"){
        $arrayPostData['messages'][0]['text'] = "UDN001407,(3003-84) บ้านโพนสูง - (3003-187) บ้านโพนสูงน้อย=Optic 12 Core DW = 1.55 km.";
    }
else if($message == "3003-188"){
        $arrayPostData['messages'][0]['text'] = "UDN001709,(3003-167) ดงสง่า - (3003-188) ต.ดงเย็น ดงเย็น2=Optic 12 Core DW = 2.55 km.";
    }
else if($message == "3003-189"){
        $arrayPostData['messages'][0]['text'] = "UDN001487,(3003-149) บ้านนาคำ - (3003-189) บ้านพรสันติ=Optic 12 Core DW = 1.001 km.";
    }
else if($message == "3003-191"){
        $arrayPostData['messages'][0]['text'] = "UDN001564,(3003-131) บ้านวังชัย - (3003-191) บ้านวังแสนสุข=Optic 12 Core DW = 0.86 km.";
    }
else if($message == "3003-192"){
        $arrayPostData['messages'][0]['text'] = "UDN001565,(3003-131) บ้านวังชัย - (3003-192) บ้านวังสมบัติ=Optic 12 Core DW = 4.172 km.";
    }
else if($message == "3003-193"){
        $arrayPostData['messages'][0]['text'] = "UDN001489,(3003-79) บ้านนาจาน - (3003-193) บ้านโนนผักหวาน=Optic 12 Core DW = 1.853 km.";
    }
else if($message == "3003-194"){
        $arrayPostData['messages'][0]['text'] = "UDN001490,(3003-84) บ้านโพนสูง - (3003-194) บ้านโพนสูงน้อย=Optic 12 Core DW = 1.27 km.";
    }
else if($message == "3003-197"){
        $arrayPostData['messages'][0]['text'] = "UDN001527,(3003-82) บ้านโนนสะอาด - (3003-197) โนนสะอาดบ้านดุง2=Optic 12 Core DW = 1.01 km.";
    }
else if($message == "3003-198"){
          $arrayPostData['messages'][0]['text'] = "UDN001528,(3003-61) ศรีสุทโธ1 - (3003-198) ศรีอุดม=Optic 12 Core DW = 0.83 km.
UDN001710,(3003-198) ศรีอุดม - (3003-203) บ้านดุง 5=Optic 12 Core DW = 1.82 km.";
    }
else if($message == "3003-203"){
        $arrayPostData['messages'][0]['text'] = "UDN001710,(3003-198) ศรีอุดม - (3003-203) บ้านดุง 5=Optic 12 Core DW = 1.82 km.";
    }
else if($message == "3003-206"){
        $arrayPostData['messages'][0]['text'] = "UDN001711,(3003-61) ME บ้านดุง - (3003-206) ศรีสุทโธ3=Optic 12 Core DW = 0.89 km.";
    }
else if($message == "3003-207"){
        $arrayPostData['messages'][0]['text'] = "UDN001712,(3003-179) ปอพาน - (3003-207) ปอพาน2=Optic 12 Core DW = 1.41 km.";
    }
else if($message == "3003-208"){
        $arrayPostData['messages'][0]['text'] = "UDN001713,(3003-184) บ้านดงหวาย - (3003-208) สายน้ำผึ้ง=Optic 12 Core DW = 3.9 km.";
    }
else if($message == "3003-211"){
        $arrayPostData['messages'][0]['text'] = "UDN001645,(3003-159) โนนเมือง - (3003-211) โนนเมือง2=Optic 12 Core DW = 1.42 km.";
    }
else if($message == "3003-212"){
        $arrayPostData['messages'][0]['text'] = "UDN001714,(3003-68) บ้านดุง4 - (3003-212) ทุ่งธนไพศาล=Optic 12 Core DW = 1.88 km.";
    }
else if($message == "3003-213"){
        $arrayPostData['messages'][0]['text'] = "UDN001715,(3003-85) โนนสิมมา - (3003-213) โนนสิมมา2=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3003-214"){
        $arrayPostData['messages'][0]['text'] = "UDN001716,(3003-131) วังชัย - (3003-214) วังทองน้อย=Optic 12 Core DW = 1.759 km.";
    }
else if($message == "3003-48"){
        $arrayPostData['messages'][0]['text'] = "DN001244,(3003-48) บ้านทรายมูล - (3003-99) บ้านจันทร์=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3003-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000509,(3007-39) ME ทุ่งฝน - (3003-61) ME บ้านดุง=12 Core= 33.6 km.
UDN000510,(3003-61) ME บ้านดุง - (3003-62) ศรีสุทโธ2=Optic 12 Core DW = 1.3 km.
UDN000798,(3003-61) ศรีสุทโธ1 - (3003-68) บ้านดุง4=Optic 12 Core DW = 0.904 km.
UDN001000,(3003-61) ME บ้านดุง - (3005-62) ME สร้างคอม=12 Core= 29.245 km.
UDN001042,(3003-61) ME บ้านดุง - (3019-37) เพ็ญ1=12 Core= 52 km.
UDN001053,(3003-61) ME บ้านดุง - (3003-112) ดงศรีนวล=Optic 12 Core DW = 2.4 km.
UDN001528,(3003-61) ศรีสุทโธ1 - (3003-198) ศรีอุดม=Optic 12 Core DW = 0.83 km.
UDN001711,(3003-61) ME บ้านดุง - (3003-206) ศรีสุทโธ3=Optic 12 Core DW = 0.89 km.";
    }
else if($message == "3003-62"){
          $arrayPostData['messages'][0]['text'] = "UDN000510,(3003-61) ME บ้านดุง - (3003-62) ศรีสุทโธ2=Optic 12 Core DW = 1.3 km.
UDN000511,(3003-62) ศรีสุทโธ2 - (3003-63) บ้านดุง1=Optic 12 Core DW = 0.73 km.";
    }
else if($message == "3003-63"){
          $arrayPostData['messages'][0]['text'] = "UDN000511,(3003-62) ศรีสุทโธ2 - (3003-63) บ้านดุง1=Optic 12 Core DW = 0.73 km.
UDN001646,(3003-63) บ้านดุง1 - (3003-64) บ้านดุง2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3003-64"){
          $arrayPostData['messages'][0]['text'] = "UDN000541,(3003-64) บ้านดุง2 - (3003-77) ทุ่งโพธิ์ทอง=Optic 12 Core DW = 2.354 km.
UDN000797,(3003-64) บ้านดุง2 - (3003-65) บ้านดุง3=Optic 12 Core DW = 1.05 km.
UDN001646,(3003-63) บ้านดุง1 - (3003-64) บ้านดุง2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3003-65"){
          $arrayPostData['messages'][0]['text'] = "UDN000797,(3003-64) บ้านดุง2 - (3003-65) บ้านดุง3=Optic 12 Core DW = 1.05 km.
UDN000809,(3003-65) บ้านดุง3 - (3003-94) โนนธงชัย=Optic 12 Core DW = 2.62 km.
UDN001236,(3003-65) บ้านดุง3 - (3003-94) โนนธงชัย=12 Core= 2.5 km.
UDN001251,(3003-65) บ้านดุง3 - (3003-104) โนนสวรรค์=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3003-68"){
          $arrayPostData['messages'][0]['text'] = "UDN000744,(3003-68) บ้านดุง4 - (3003-115) ศรีนพคุณ=Optic 12 Core DW = 1.61 km.
UDN000798,(3003-61) ศรีสุทโธ1 - (3003-68) บ้านดุง4=Optic 12 Core DW = 0.904 km.
UDN001714,(3003-68) บ้านดุง4 - (3003-212) ทุ่งธนไพศาล=Optic 12 Core DW = 1.88 km.";
    }
else if($message == "3003-76"){
          $arrayPostData['messages'][0]['text'] = "UDN001047,(3003-106) บ้านทุ่ง - (3003-76) บ้านดงไพรวัลย์=Optic 12 Core DW = 1.6 km.
UDN001704,(3003-76) บ้านดงไพรวัลย์ - (3003-154) โนนศรีทอง=Optic 12 Core DW = 3.44 km.";
    }
else if($message == "3003-77"){
          $arrayPostData['messages'][0]['text'] = "UDN000541,(3003-64) บ้านดุง2 - (3003-77) ทุ่งโพธิ์ทอง=Optic 12 Core DW = 2.354 km.
UDN001399,(3003-77) บ้านทุ่งโพธิ์ทอง - (3003-178) บ้านฝาง.=Optic 12 Core DW = 1.36 km.
UDN001401,(3003-77) บ้านทุ่งโพธิ์ทอง - (3003-176) บ้านหนองข่า=Optic 12 Core DW = 2.09 km.";
    }
else if($message == "3003-79"){
          $arrayPostData['messages'][0]['text'] = "UDN000745,(3003-79) บ้านนาจาน - (3003-116) หนองแต้=Optic 12 Core DW = 1.52 km.
UDN000799,(SJ) บ้านดุง-ทุ่งฝน - (3003-79) บ้านนาจาน=Optic 12 Core DW = 0.4 km.
UDN001489,(3003-79) บ้านนาจาน - (3003-193) บ้านโนนผักหวาน=Optic 12 Core DW = 1.853 km.
UDN001703,(3003-79) บ้านนาจาน - (3003-153) ค้อเขียว=Optic 12 Core DW = 1.86 km.
UDN001708,(3003-79) บ้านนาจาน - (3003-185) คำภูเงิน=Optic 12 Core DW = 2.91 km.";
    }
else if($message == "3003-80"){
          $arrayPostData['messages'][0]['text'] = "UDN000800,(SJ) บ้านดุง-ทุ่งฝน - (3003-80) บ้านมีชัย=Optic 12 Core DW = 0.47 km.
UDN001412,(3003-80) มีชัย - (3003-175) โนนสมบูรณ์=Optic 12 Core DW = 4.094 km.
UDN001647,(3003-80) บ้านมีชัย - (3003-81) บ้านงิ้ว=12 Core= 1.079 km.";
    }
else if($message == "3003-81"){
          $arrayPostData['messages'][0]['text'] = "UDN000746,(3003-81) บ้านงิ้ว - (3003-82) โนนสะอาดบ้านดุง=12 Core= 4.219 km.
UDN001647,(3003-80) บ้านมีชัย - (3003-81) บ้านงิ้ว=12 Core= 1.079 km.";
    }
else if($message == "3003-82"){
          $arrayPostData['messages'][0]['text'] = "UDN000746,(3003-81) บ้านงิ้ว - (3003-82) โนนสะอาดบ้านดุง=12 Core= 4.219 km.
UDN001527,(3003-82) บ้านโนนสะอาด - (3003-197) โนนสะอาดบ้านดุง2=Optic 12 Core DW = 1.01 km.";
    }
else if($message == "3003-83"){
          $arrayPostData['messages'][0]['text'] = "UDN000801,(3003-83) ศรีบูรพา - (3003-84) บ้านโพนสูง=Optic 12 Core DW = 3.46 km.
UDN001717,(SJ) MEบ้านดุง-บ้านโพนสูง - (3003-83) ศรีบูรพา=Optic 12 Core DW = 0.2 km.";
    }
else if($message == "3003-84"){
          $arrayPostData['messages'][0]['text'] = "UDN000711,(3003-84) บ้านโพนสูง - (3003-119) ปากดง=Optic 12 Core DW = 4.04 km.
UDN000801,(3003-83) ศรีบูรพา - (3003-84) บ้านโพนสูง=Optic 12 Core DW = 3.46 km.
UDN001407,(3003-84) บ้านโพนสูง - (3003-187) บ้านโพนสูงน้อย=Optic 12 Core DW = 1.55 km.
UDN001490,(3003-84) บ้านโพนสูง - (3003-194) บ้านโพนสูงน้อย=Optic 12 Core DW = 1.27 km.
UDN001494,(3003-84) บ้านโพนสูง - (3006-72) บ้านคำม่วง=Optic 12 Core DW = 3.16 km.";
    }
else if($message == "3003-85"){
          $arrayPostData['messages'][0]['text'] = "UDN001248,(3003-103) บ่อศิลา - (3003-85) โนนสิมมา=Optic 12 Core DW = 5.7 km.
UDN001249,(3003-85) โนนสิมมา - (3003-86) หนองกา=Optic 12 Core DW = 1.8 km.
UDN001715,(3003-85) โนนสิมมา - (3003-213) โนนสิมมา2=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3003-86"){
          $arrayPostData['messages'][0]['text'] = "NKI000334,(3003-86) บ้านหนองกา - (3214-102) บ้านคำโคนสว่าง=Optic 12 Core DW = 3 km.
UDN001249,(3003-85) โนนสิมมา - (3003-86) หนองกา=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3003-87"){
          $arrayPostData['messages'][0]['text'] = "UDN000804,(3003-129) ถ่อนคำหวด - (3003-87) วังพระองค์=Optic 12 Core DW = 3.24 km.
UDN001250,(3003-104) โนนสวรรค์ - (3003-87) วังพระองค์=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3003-88"){
          $arrayPostData['messages'][0]['text'] = "UDN001238,(3003-95) นาโฮง - (3003-88) สันติสุข=Optic 12 Core DW = 2.1 km.
UDN001239,(3003-88) สันติสุข - (3003-96) ห้วยปลาโด=Optic 12 Core DW = 2.8 km.
UDN001433,(3003-88) สันติสุข - (3003-133) บ้านกำแมด=Optic 12 Core DW = 2.22 km.";
    }
else if($message == "3003-89"){
          $arrayPostData['messages'][0]['text'] = "UDN000806,(3003-98) บ้านทรายมูล - (3003-89) เหล่าอุดม=Optic 12 Core DW = 2.44 km.
UDN001242,(3003-117) ดงยาง - (3003-89) เหล่าอุดม=Optic 12 Core DW = 2.4 km.
UDN001243,(3003-89) เหล่าอุดม - (3003-98) บ้านทรายมูล=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3003-90"){
          $arrayPostData['messages'][0]['text'] = "UDN000807,(3003-113) โนนอุดม - (3003-90) บ้านโนนงาม=Optic 12 Core DW = 1.4 km.
UDN000889,(3003-90) บ้านโนนงาม - (3003-114) โนนสมโภช=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3003-91"){
          $arrayPostData['messages'][0]['text'] = "UDN000808,(3003-107) คำสง่า - (3003-91) บ้านชัย=Optic 12 Core DW = 3.15 km.
UDN001054,(3003-91) บ้านชัย - (3003-113) โนนอุดม=Optic 12 Core DW = 2.2 km.
UDN001702,(3003-91) บ้านชัย - (3003-152) ดอนขี้เหล็ก=Optic 12 Core DW = 5.35 km.";
    }
else if($message == "3003-94"){
          $arrayPostData['messages'][0]['text'] = "UDN000809,(3003-65) บ้านดุง3 - (3003-94) โนนธงชัย=Optic 12 Core DW = 2.62 km.
UDN001236,(3003-65) บ้านดุง3 - (3003-94) โนนธงชัย=12 Core= 2.5 km.
UDN001237,(3003-94) โนนธงชัย - (3003-95) นาโฮง=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3003-95"){
          $arrayPostData['messages'][0]['text'] = "UDN001237,(3003-94) โนนธงชัย - (3003-95) นาโฮง=Optic 12 Core DW = 1.5 km.
UDN001238,(3003-95) นาโฮง - (3003-88) สันติสุข=Optic 12 Core DW = 2.1 km.
UDN001342,(3003-95) นาโฮง - (3003-128) หนองสองห้อง=Optic 12 Core DW = 4.06 km.
UDN001693,(3003-95) นาโฮง - (3003-129) ถ่อนคำหวด=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3003-96"){
          $arrayPostData['messages'][0]['text'] = "UDN001239,(3003-88) สันติสุข - (3003-96) ห้วยปลาโด=Optic 12 Core DW = 2.8 km.
UDN001240,(3003-96) ห้วยปลาโด - (3003-97) หัวฝาย=Optic 12 Core DW = 1 km.";
    }
else if($message == "3003-97"){
          $arrayPostData['messages'][0]['text'] = "UDN001240,(3003-96) ห้วยปลาโด - (3003-97) หัวฝาย=Optic 12 Core DW = 1 km.
UDN001241,(3003-97) หัวฝาย - (3003-117) ดงยาง=Optic 12 Core DW = 3 km.";
    }
else if($message == "3003-98"){
          $arrayPostData['messages'][0]['text'] = "UDN000806,(3003-98) บ้านทรายมูล - (3003-89) เหล่าอุดม=Optic 12 Core DW = 2.44 km.
UDN001243,(3003-89) เหล่าอุดม - (3003-98) บ้านทรายมูล=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3003-99"){
          $arrayPostData['messages'][0]['text'] = "UDN001244,(3003-48) บ้านทรายมูล - (3003-99) บ้านจันทร์=Optic 12 Core DW = 1.1 km.
UDN001245,(3003-99) บ้านจันทร์ - (3003-101) บ้านตูม=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3004-101"){
        $arrayPostData['messages'][0]['text'] = "UDN001481,(3004-61) บ้านหยวก - (3004-101) ต.บ้านหยวก หยวกน้อย=Optic 12 Core DW = 1.161 km.";
    }
else if($message == "3004-102"){
          $arrayPostData['messages'][0]['text'] = "UDN001420,(3004-102) ต.บ้านหยวก จำปาทองน้อย - (3004-97) ต.บ้านหยวก จำปาทอง=Optic 12 Core DW = 1.161 km.
UDN001421,(SJ) SJ น้ำโสม-สุวรรณคูหา - (3004-102) ต.บ้านหยวก จำปาทองน้อย=Optic 12 Core DW = 2.36 km.";
    }
else if($message == "3004-103"){
        $arrayPostData['messages'][0]['text'] = "UDN001478,(3004-85) ต.บ้านหยวก บ้านน้ำปู่ - (3004-103) ต.บ้านหยวก โนนทองคำ=Optic 12 Core DW = 2.36 km.";
    }
else if($message == "3004-104"){
          $arrayPostData['messages'][0]['text'] = "DN001472,(3004-105) ต.ศรีสำราญ นาจาน - (3004-104) ต.ศรีสำราญ ศรีสำราญ=Optic 12 Core DW = 1.36 km.
UDN001480,(3004-104) ศรีสำราญ - (3004-105) ต.ศรีสำราญ นาจาน=Optic 12 Core DW = 0.959 km.";
    }
else if($message == "3004-105"){
          $arrayPostData['messages'][0]['text'] = "UDN001472,(3004-105) ต.ศรีสำราญ นาจาน - (3004-104) ต.ศรีสำราญ ศรีสำราญ=Optic 12 Core DW = 1.36 km.
UDN001480,(3004-104) ศรีสำราญ - (3004-105) ต.ศรีสำราญ นาจาน=Optic 12 Core DW = 0.959 km.";
    }
else if($message == "3004-106"){
        $arrayPostData['messages'][0]['text'] = "UDN001718,(SJ) ผากลางนา-โชคอำนวย - (3004-106) ต.สามัคคี บ้านสวัสดี=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3004-108"){
        $arrayPostData['messages'][0]['text'] = "UDN001719,(3004-63) ME เทศบาลนางัว - (3004-108) เทศบาลนางัว2=Optic 12 Core DW = 1 km.";
    }
else if($message == "3004-112"){
        $arrayPostData['messages'][0]['text'] = "UDN001720,(3004-62) โรงเรียนน้ำโสม - (3004-112) โรงเรียนน้ำโสม 2=Optic 12 Core DW = 1.315 km.";
    }
else if($message == "3004-115"){
        $arrayPostData['messages'][0]['text'] = "UDN001721,(3004-64) กศน.นางัว - (3004-115) กศน.นางัว2=Optic 12 Core DW = 1.08 km.";
    }
else if($message == "3004-116"){
        $arrayPostData['messages'][0]['text'] = "UDN001722,(3004-61) บ้านหยวก - (3004-116) บ้านหยวก2=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3004-118"){
        $arrayPostData['messages'][0]['text'] = "UDN001723,(3004-72) น้ำซึม1 - (3004-118) น้ำซึม3=Optic 12 Core DW = 1.33 km.";
    }
else if($message == "3004-121"){
        $arrayPostData['messages'][0]['text'] = "UDN001724,(3004-63) ME เทศบาลนางัว - (3004-121) ต.ศรีสำราญ บ้านศรีเจริญ=Optic 12 Core DW = 2.67 km.";
    }
else if($message == "3004-122"){
        $arrayPostData['messages'][0]['text'] = "UDN001725,(3014-89) เทพประทาน - (3004-122) บ้านราชดำริ=12 Core= 1.6 km.";
    }
else if($message == "3004-123"){
        $arrayPostData['messages'][0]['text'] = "UDN001726,(3004-95) นาเมืองไทย - (3004-123) บ้านนาเมืองไทย2=12 Core= 3.115 km.";
    }
else if($message == "3004-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000535,(SJ) SJ สุวรรณคูหา-น้ำโสม - (3004-61) บ้านหยวก=Optic 12 Core DW = 1.83 km.
UDN001481,(3004-61) บ้านหยวก - (3004-101) ต.บ้านหยวก หยวกน้อย=Optic 12 Core DW = 1.161 km.
UDN001722,(3004-61) บ้านหยวก - (3004-116) บ้านหยวก2=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3004-62"){
          $arrayPostData['messages'][0]['text'] = "UDN000530,(3004-64) กศน.นางัว - (3004-62) โรงเรียนน้ำโสม=Optic 12 Core DW = 2.2 km.
UDN001720,(3004-62) โรงเรียนน้ำโสม - (3004-112) โรงเรียนน้ำโสม 2=Optic 12 Core DW = 1.315 km.";
    }
else if($message == "3004-63"){
          $arrayPostData['messages'][0]['text'] = "UDN000529,(3004-63) ME น้ำโสม - (3004-64) กศน.นางัว=Optic 12 Core DW = 1.8 km.
UDN000978,(3014-61) ME นายูง - (3004-63) น้ำโสม=12 Core= 29.21 km.
UDN000990,(3102-64) ME สุวรรณคูหา - (3004-63) ME น้ำโสม=12 Core= 32.664 km.
UDN001257,(SJ) SJ บ้านผือ - ศรีเชียงใหม่ - (3004-63) ME น้ำโสม=Optic 12 Core DW = 27 km.
UDN001719,(3004-63) ME เทศบาลนางัว - (3004-108) เทศบาลนางัว2=Optic 12 Core DW = 1 km.
UDN001724,(3004-63) ME เทศบาลนางัว - (3004-121) ต.ศรีสำราญ บ้านศรีเจริญ=Optic 12 Core DW = 2.67 km.";
    }
else if($message == "3004-64"){
          $arrayPostData['messages'][0]['text'] = "UDN000529,(3004-63) ME น้ำโสม - (3004-64) กศน.นางัว=Optic 12 Core DW = 1.8 km.
UDN000530,(3004-64) กศน.นางัว - (3004-62) โรงเรียนน้ำโสม=Optic 12 Core DW = 2.2 km.
UDN001473,(3004-64) กศน.นางัว - (3004-92) ต.นางัว นาโพธิ์=Optic 12 Core DW = 1.49 km.
UDN001721,(3004-64) กศน.นางัว - (3004-115) กศน.นางัว2=Optic 12 Core DW = 1.08 km.";
    }
else if($message == "3004-65"){
        $arrayPostData['messages'][0]['text'] = "UDN001369,(3004-67) หนองแวงน้อย - (3004-65) ต.หนองแวง บ้านเจริญสุข=Optic 12 Core DW = 2.122 km.";
    }
else if($message == "3004-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000549,(3004-67) บ้านหนองแวงน้ำโสม - (3004-73) น้ำซึม2=Optic 12 Core DW = 2.43 km.
UDN001255,(SJ) SJ ศรีเชียงใหม่ - น้ำโสม - (3004-67) บ้านแวงน้ำโสม=Optic 12 Core DW = 0.46 km.
UDN001288,(3004-67) บ้านหนองแวงน้ำโสม - (3004-75) หัวช้าง=12 Core= 10.71 km.
UDN001369,(3004-67) หนองแวงน้อย - (3004-65) ต.หนองแวง บ้านเจริญสุข=Optic 12 Core DW = 2.122 km.";
    }
else if($message == "3004-69"){
          $arrayPostData['messages'][0]['text'] = "UDN000813,(SJ) MEน้ำโสม-ศรีเชียงใหม่บ้านผือ - (3004-69) บ้านสามัคคี=12 Core= 3.7 km.
UDN001405,(3004-69) บ้านสามัคคี - (3004-90) บ้านผากลางนา=12 Core= 3.96 km.";
    }
else if($message == "3004-72"){
          $arrayPostData['messages'][0]['text'] = "UDN000584,(3004-73) น้ำซึม2 - (3004-72) น้ำซึม1=Optic 12 Core DW = 2.44 km.
UDN001723,(3004-72) น้ำซึม1 - (3004-118) น้ำซึม3=Optic 12 Core DW = 1.33 km.";
    }
else if($message == "3004-73"){
          $arrayPostData['messages'][0]['text'] = "UDN000549,(3004-67) บ้านหนองแวงน้ำโสม - (3004-73) น้ำซึม2=Optic 12 Core DW = 2.43 km.
UDN000584,(3004-73) น้ำซึม2 - (3004-72) น้ำซึม1=Optic 12 Core DW = 2.44 km.";
    }
else if($message == "3004-74"){
        $arrayPostData['messages'][0]['text'] = "UDN001289,(3004-75) หัวช้าง - (3004-74) โนนม่วง=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3004-75"){
          $arrayPostData['messages'][0]['text'] = "UDN000814,(3014-61) นายูง - (3004-75) บ้านหัวช้าง=12 Core= 10.71 km.
UDN001288,(3004-67) บ้านหนองแวงน้ำโสม - (3004-75) หัวช้าง=12 Core= 10.71 km.
UDN001289,(3004-75) หัวช้าง - (3004-74) โนนม่วง=Optic 12 Core DW = 1.4 km.
UDN001403,(3004-75) บ้านหัวช้าง - (3004-84) บ้านโนนสะอาด หมู่2=Optic 12 Core DW = 2.805 km.";
    }
else if($message == "3004-76"){
          $arrayPostData['messages'][0]['text'] = "UDN001324,(3004-82) บ้านโพน - (3004-76) บ้านม่วง=Optic 12 Core DW = 0.99 km.
UDN001513,(3004-76) บ้านม่วง ต.นำโสม - (3004-94) ต.น้ำโสม โนนบก=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3004-77"){
        $arrayPostData['messages'][0]['text'] = "UDN001395,(3004-78) บ้านน้ำทรง - (3004-77) บ้านโคกน้อย=Optic 12 Core DW = 2.38 km.";
    }
else if($message == "3004-78"){
          $arrayPostData['messages'][0]['text'] = "UDN001332,(3004-78) น้ำทรง - (3004-83) โนนสมบูรณ์=Optic 12 Core DW = 2.16 km.
UDN001395,(3004-78) บ้านน้ำทรง - (3004-77) บ้านโคกน้อย=Optic 12 Core DW = 2.38 km.
UDN001727,(SJ) MEน้ำโสม-MEนายูง - (3004-78) น้ำทรง=Optic 12 Core DW = 0.815 km.";
    }
else if($message == "3004-79"){
          $arrayPostData['messages'][0]['text'] = "UDN001394,(3004-79) บ้านนาเก็น - (3004-81) บ้านโคกสะอาด=Optic 12 Core DW = 4.643 km.
UDN001396,(3014-69) บ้านห้วยทราย - (3004-79) บ้านนาเก็น=Optic 12 Core DW = 2.87 km.";
    }
else if($message == "3004-81"){
        $arrayPostData['messages'][0]['text'] = "UDN001394,(3004-79) บ้านนาเก็น - (3004-81) บ้านโคกสะอาด=Optic 12 Core DW = 4.643 km.";
    }
else if($message == "3004-82"){
          $arrayPostData['messages'][0]['text'] = "UDN001324,(3004-82) บ้านโพน - (3004-76) บ้านม่วง=Optic 12 Core DW = 0.99 km.
UDN001408,(3014-63) บ้านห้วยไฮ - (3004-82) บ้านโพน=Optic 12 Core DW = 2.325 km.
UDN001728,(3004-82) บ้านโพน ต.น้ำโสม - (3004-96) ต.น้ำโสม กุดนาคำ=Optic 12 Core DW = 2.799 km.";
    }
else if($message == "3004-83"){
          $arrayPostData['messages'][0]['text'] = "UDN001324,(3004-82) บ้านโพน - (3004-76) บ้านม่วง=Optic 12 Core DW = 0.99 km.
UDN001408,(3014-63) บ้านห้วยไฮ - (3004-82) บ้านโพน=Optic 12 Core DW = 2.325 km.
UDN001728,(3004-82) บ้านโพน ต.น้ำโสม - (3004-96) ต.น้ำโสม กุดนาคำ=Optic 12 Core DW = 2.799 km.";
    }
else if($message == "3004-84"){
        $arrayPostData['messages'][0]['text'] = "UDN001403,(3004-75) บ้านหัวช้าง - (3004-84) บ้านโนนสะอาด หมู่2=Optic 12 Core DW = 2.805 km.";
    }
else if($message == "3004-85"){
          $arrayPostData['messages'][0]['text'] = "UDN001371,(3102-90) ต.นาสี โนนสมบูรณ์สุวรรณ - (3004-85) ต.บ้านหยวก บ้านน้ำปู่=12 Core= 16.851 km.
UDN001424,(3004-85) ต.บ้านหยวก น้ำปู่ - (3004-93) ต.นางัว บ้านดงต้อง=Optic 12 Core DW = 3.37 km.
UDN001478,(3004-85) ต.บ้านหยวก บ้านน้ำปู่ - (3004-103) ต.บ้านหยวก โนนทองคำ=Optic 12 Core DW = 2.36 km.";
    }
else if($message == "3004-86"){
        $arrayPostData['messages'][0]['text'] = "UDN001404,(3004-90) บ้านผากลางนา - (3004-86) บ้านโชคอำนวย=12 Core= 9.93 km.";
    }
else if($message == "3004-87"){
        $arrayPostData['messages'][0]['text'] = "UDN001372,(3004-88) ต.บ้านหยวก บ้านท่าลี่ - (3004-87) ต.บ้านหยวก บ้านแท่น=Optic 12 Core DW = 3.141 km.";
    }
else if($message == "3004-88"){
        $arrayPostData['messages'][0]['text'] = "UDN001372,(3004-88) ต.บ้านหยวก บ้านท่าลี่ - (3004-87) ต.บ้านหยวก บ้านแท่น=Optic 12 Core DW = 3.141 km.";
    }
else if($message == "3004-89"){
        $arrayPostData['messages'][0]['text'] = "UDN001414,(SJ) SJบ้านโสมเยี่ยม - (3004-89) บ้านโสมเยี่ยม=Optic 12 Core DW = 0.355 km.";
    }
else if($message == "3004-90"){
        $arrayPostData['messages'][0]['text'] = "UDN001404,(3004-90) บ้านผากลางนา - (3004-86) บ้านโชคอำนวย=12 Core= 9.93 km.";
    }
else if($message == "3004-91"){
        $arrayPostData['messages'][0]['text'] = "UDN001422,(3004-93) ต.นางัว บ้านดงต้อง - (3004-91) ต.นางัว นางัว=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3004-92"){
        $arrayPostData['messages'][0]['text'] = "UDN001473,(3004-64) กศน.นางัว - (3004-92) ต.นางัว นาโพธิ์=Optic 12 Core DW = 1.49 km.";
    }
else if($message == "3004-93"){
          $arrayPostData['messages'][0]['text'] = "UDN001422,(3004-93) ต.นางัว บ้านดงต้อง - (3004-91) ต.นางัว นางัว=Optic 12 Core DW = 3.96 km.
UDN001424,(3004-85) ต.บ้านหยวก น้ำปู่ - (3004-93) ต.นางัว บ้านดงต้อง=Optic 12 Core DW = 3.37 km.";
    }
else if($message == "3004-94"){
          $arrayPostData['messages'][0]['text'] = "NPL000224,(3004-94) โนนบก - (3004-95) ต.น้ำโสม บ้านนาเมืองไทย=12 Core= 5.42 km.
UDN001513,(3004-76) บ้านม่วง ต.นำโสม - (3004-94) ต.น้ำโสม โนนบก=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3004-95"){
          $arrayPostData['messages'][0]['text'] = "NPL000224,(3004-94) โนนบก - (3004-95) ต.น้ำโสม บ้านนาเมืองไทย=12 Core= 5.42 km.
UDN001726,(3004-95) นาเมืองไทย - (3004-123) บ้านนาเมืองไทย2=12 Core= 3.115 km.";
    }
else if($message == "3004-96"){
        $arrayPostData['messages'][0]['text'] = "UDN001728,(3004-82) บ้านโพน ต.น้ำโสม - (3004-96) ต.น้ำโสม กุดนาคำ=Optic 12 Core DW = 2.799 km.";
    }
else if($message == "3004-97"){
        $arrayPostData['messages'][0]['text'] = "UDN001420,(3004-102) ต.บ้านหยวก จำปาทองน้อย - (3004-97) ต.บ้านหยวก จำปาทอง=Optic 12 Core DW = 1.161 km.";
    }
else if($message == "3004-98"){
        $arrayPostData['messages'][0]['text'] = "UDN001423,(3004-98) ต.บ้านหยวก โนนผางาม - (3004-99) ต.บ้านหยวก หนองน้ำขุ่น=Optic 12 Core DW = 1.81 km.";
    }
else if($message == "3004-99"){
        $arrayPostData['messages'][0]['text'] = "UDN001423,(3004-98) ต.บ้านหยวก โนนผางาม - (3004-99) ต.บ้านหยวก หนองน้ำขุ่น=Optic 12 Core DW = 1.81 km.";
    }
else if($message == "3005-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000892,(3005-61) สร้างคอม 1 - (3005-62) สร้างคอม 2=Optic 12 Core DW = 1.36 km.
UDN001556,(3005-61) สร้างคอม1 - (3005-82) บ้านโนนนกหอ=Optic 12 Core DW = 2.31 km.
UDN001735,(3005-61) สร้างคอม1 - (3005-91) สร้างคอม3=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3005-62"){
          $arrayPostData['messages'][0]['text'] = "NKI000264,(3005-62) ME สร้างคอม - (3204-37) ME โพนพิสัย=12 Core= 30.714 km.
UDN000816,(3005-62) สร้างคอม 2 - (3005-64) บ้านดงผักเทียม=Optic 12 Core DW = 2.4 km.
UDN000892,(3005-61) สร้างคอม 1 - (3005-62) สร้างคอม 2=Optic 12 Core DW = 1.36 km.
UDN001000,(3003-61) ME บ้านดุง - (3005-62) ME สร้างคอม=12 Core= 29.245 km.
UDN001001,(3005-62) ME สร้างคอม - (3019-37) ME เพ็ญ=12 Core= 28.34 km.";
    }
else if($message == "3005-63"){
          $arrayPostData['messages'][0]['text'] = "UDN000747,(SJ) SJ เพ็ญ-สร้างคอม - (3005-63) บ้านโคกโพธิ์=Optic 12 Core DW = 0.2 km.
UDN001034,(3005-63) บ้านโคกโพธิ์ - (3005-66) ดอนเดื่อ=Optic 12 Core DW = 3.4 km.";
    }
else if($message == "3005-64"){
          $arrayPostData['messages'][0]['text'] = "UDN000816,(3005-62) สร้างคอม 2 - (3005-64) บ้านดงผักเทียม=Optic 12 Core DW = 2.4 km.
UDN000953,(3005-64) ดงผักเทียม - (3005-69) นาหว้า=Optic 12 Core DW = 3.65 km.";
    }
else if($message == "3005-65"){
          $arrayPostData['messages'][0]['text'] = "UDN000817,(3005-66) ดอนเดื่อ - (3005-65) บ้านยวด=12 Core= 6.9 km.
UDN000954,(3005-65) บ้านยวด - (3005-70) ชาติ=12 Core= 5.3 km.
UDN001733,(3005-65) บ้านยวด - (3005-77) น้ำเที่ยง=Optic 12 Core DW = 2.75 km.";
    }
else if($message == "3005-66"){
          $arrayPostData['messages'][0]['text'] = "UDN000817,(3005-66) ดอนเดื่อ - (3005-65) บ้านยวด=12 Core= 6.9 km.
UDN001034,(3005-63) บ้านโคกโพธิ์ - (3005-66) ดอนเดื่อ=Optic 12 Core DW = 3.4 km.
UDN001483,(3005-66) บ้านดอนเดื่อ - (3005-84) บ้านโนนสังวาลย์=Optic 12 Core DW = 1.26 km.
UDN001484,(3005-66) บ้านดอนเดื่อ - (3005-83) บ้านดอนบาก=Optic 12 Core DW = 2.66 km.
UDN001485,(3005-66) บ้านดอนเดื่อ - (3005-86) บ้านหยองม่วง=Optic 12 Core DW = 3.16 km.";
    }
else if($message == "3005-67"){
          $arrayPostData['messages'][0]['text'] = "UDN001035,(SJ) ME สร้างคอม-ME โพนพิสัย - (3005-67) โนนสำราญ=Optic 12 Core DW = 0.9 km.
UDN001307,(3005-67) โนนสำราญ - (3005-81) บ้านเชียงดา=Optic 12 Core DW = 2.18 km.";
    }
else if($message == "3005-68"){
        $arrayPostData['messages'][0]['text'] = "UDN000894,(SJ) SJ ME สร้างคอม - ME โพนพิสัย - (3005-68) นาสะอาด=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3005-69"){
        $arrayPostData['messages'][0]['text'] = "UDN000953,(3005-64) ดงผักเทียม - (3005-69) นาหว้า=Optic 12 Core DW = 3.65 km.";
    }
else if($message == "3005-70"){
          $arrayPostData['messages'][0]['text'] = "UDN000954,(3005-65) บ้านยวด - (3005-70) ชาติ=12 Core= 5.3 km.
UDN001302,(3005-70) ชาติ - (3019-64) บ้านดอนจันทร์=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3005-71"){
          $arrayPostData['messages'][0]['text'] = "UDN001036,(3019-55) บ้านหนองไชยวาน - (3005-71) นามั่ง=Optic 12 Core DW = 1.7 km.
UDN001037,(3005-71) นามั่ง - (3005-72) ศรีชมชื่น=Optic 12 Core DW = 4.145 km.
UDN001306,(3005-71) บ้านนามั่ง - (3005-78) บ้านตลิ่งชัน=12 Core= 6.32 km.";
    }
else if($message == "3005-72"){
        $arrayPostData['messages'][0]['text'] = "UDN001037,(3005-71) นามั่ง - (3005-72) ศรีชมชื่น=Optic 12 Core DW = 4.145 km.";
    }
else if($message == "3005-73"){
        $arrayPostData['messages'][0]['text'] = "UDN001729,(3005-75) คำตระกล้า - (3005-73) โนนสาวเอ้=Optic 12 Core DW = 3.265 km.";
    }
else if($message == "3005-74"){
        $arrayPostData['messages'][0]['text'] = "UDN001730,(SJ) MEสร้างคอม-MEเพ็ญ - (3005-74) โคกสว่างสร้างคอม=Optic 12 Core DW = 1.42 km.";
    }
else if($message == "3005-75"){
          $arrayPostData['messages'][0]['text'] = "UDN001729,(3005-75) คำตระกล้า - (3005-73) โนนสาวเอ้=Optic 12 Core DW = 3.265 km.
UDN001731,(3003-134) บ้านผึ้ง - (3005-75) คำตระกร้า=Optic 12 Core DW = 4 km.
UDN001732,(3005-75) คำตระกร้า - (3005-76) หินโงม=Optic 12 Core DW = 4.62 km.";
    }
else if($message == "3005-76"){
        $arrayPostData['messages'][0]['text'] = "UDN001732,(3005-75) คำตระกร้า - (3005-76) หินโงม=Optic 12 Core DW = 4.62 km.";
    }
else if($message == "3005-77"){
        $arrayPostData['messages'][0]['text'] = "UDN001733,(3005-65) บ้านยวด - (3005-77) น้ำเที่ยง=Optic 12 Core DW = 2.75 km.";
    }
else if($message == "3005-78"){
        $arrayPostData['messages'][0]['text'] = "UDN001306,(3005-71) บ้านนามั่ง - (3005-78) บ้านตลิ่งชัน=12 Core= 6.32 km.";
    }
else if($message == "3005-79"){
          $arrayPostData['messages'][0]['text'] = "UDN001305,(3005-79) นาน้ำชุ่ม - (3019-107) นาศรีนวล=Optic 12 Core DW = 3.555 km.
UDN001515,(3005-79) บ้านนาน้ำชุ่ม - (3019-115) บ้านดอนแคน=Optic 12 Core DW = 2.357 km.
UDN001516,(3005-79) บ้านนาน้ำชุ่ม - (3019-112) บ้านนาจันทร์=Optic 12 Core DW = 2.16 km.
UDN001734,(SJ) MEสร้างคอม-MEเพ็ญ - (3005-79) ต.บ้านโคก บ้านนาน้ำชุ่ม=Optic 12 Core DW = 0.665 km.";
    }
else if($message == "3005-80"){
        $arrayPostData['messages'][0]['text'] = "UDN001308,(3005-81) บ้านเชียงดา - (3005-80) บ้านโคกคอย=Optic 12 Core DW = 1.29 km.";
    }
else if($message == "3005-81"){
          $arrayPostData['messages'][0]['text'] = "UDN001307,(3005-67) โนนสำราญ - (3005-81) บ้านเชียงดา=Optic 12 Core DW = 2.18 km.
UDN001308,(3005-81) บ้านเชียงดา - (3005-80) บ้านโคกคอย=Optic 12 Core DW = 1.29 km.
UDN001552,(3005-81) บ้านเชียงดา - (3005-88) บ้านบึงสำราญ=Optic 12 Core DW = 4.72 km.";
    }
else if($message == "3005-82"){
        $arrayPostData['messages'][0]['text'] = "UDN001556,(3005-61) สร้างคอม1 - (3005-82) บ้านโนนนกหอ=Optic 12 Core DW = 2.31 km.";
    }
else if($message == "3005-83"){
        $arrayPostData['messages'][0]['text'] = "UDN001484,(3005-66) บ้านดอนเดื่อ - (3005-83) บ้านดอนบาก=Optic 12 Core DW = 2.66 km.";
    }
else if($message == "3005-84"){
        $arrayPostData['messages'][0]['text'] = "UDN001483,(3005-66) บ้านดอนเดื่อ - (3005-84) บ้านโนนสังวาลย์=Optic 12 Core DW = 1.26 km.";
    }
else if($message == "3005-85"){
        $arrayPostData['messages'][0]['text'] = "UDN001555,(3005-86) บ้านหยองม่วง - (3005-85) บ้านนาชัยฟอง=Optic 12 Core DW = 1.61 km.";
    }
else if($message == "3005-86"){
          $arrayPostData['messages'][0]['text'] = "UDN001485,(3005-66) บ้านดอนเดื่อ - (3005-86) บ้านหยองม่วง=Optic 12 Core DW = 3.16 km.
UDN001554,(3005-86) บ้านหยองม่วง - (3005-87) บ้านโปร่งสวรรค์=Optic 12 Core DW = 2.07 km.
UDN001555,(3005-86) บ้านหยองม่วง - (3005-85) บ้านนาชัยฟอง=Optic 12 Core DW = 1.61 km.";
    }
else if($message == "3005-87"){
        $arrayPostData['messages'][0]['text'] = "UDN001554,(3005-86) บ้านหยองม่วง - (3005-87) บ้านโปร่งสวรรค์=Optic 12 Core DW = 2.07 km.";
    }
else if($message == "3005-88"){
          $arrayPostData['messages'][0]['text'] = "UDN001552,(3005-81) บ้านเชียงดา - (3005-88) บ้านบึงสำราญ=Optic 12 Core DW = 4.72 km.
UDN001553,(3005-88) บ้านบึงสำราญ - (3005-89) บ้านแมด=Optic 12 Core DW = 1.91 km.";
    }
else if($message == "3005-89"){
        $arrayPostData['messages'][0]['text'] = "UDN001553,(3005-88) บ้านบึงสำราญ - (3005-89) บ้านแมด=Optic 12 Core DW = 1.91 km.";
    }
else if($message == "3005-91"){
        $arrayPostData['messages'][0]['text'] = "UDN001735,(3005-61) สร้างคอม1 - (3005-91) สร้างคอม3=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3006-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000459,(3008-49) บ้านยา - (3006-37) บ้านดงบัง (ไชยวาน)=Optic 12 Core DW = 4.503 km.
UDN000460,(3006-37) บ้านดงบัง (ไชยวาน) - (3006-38) อนุบาลไชยวาน=Optic 12 Core DW = 3.99 km.
UDN000614,(3006-37) ดงบัง - (3008-125) หนองบัวน้อย=12 Core= 3.16 km.
UDN001751,(3006-37) บ้านดงบัง (ไชยวาน) - (3008-142) หนองบัวน้อย=Optic 12 Core DW = 3.775 km.";
    }
else if($message == "3006-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000460,(3006-37) บ้านดงบัง (ไชยวาน) - (3006-38) อนุบาลไชยวาน=Optic 12 Core DW = 3.99 km.
UDN000461,(3006-38) อนุบาลไชยวาน - (3006-39) ตลาดไชยวาน=Optic 12 Core DW = 0.912 km.
UDN000462,(3006-38) อนุบาลไชยวาน - (3006-40) สภอ.ไชยวาน=Optic 12 Core DW = 2.746 km.
UDN000576,(3006-38) อนุบาลไชยวาน - (3006-47) หนองตูม=Optic 12 Core DW = 1.704 km.
UDN000819,(3006-38) ME ไชยวาน - (3006-41) บ้านหนองแวงไชยวาน=Optic 12 Core DW = 5 km.
UDN000997,(3006-38) ME ไชยวาน - (3017-38) ME ศรีธาตุ=12 Core= 56.681 km.
UDN001056,(3006-38) อนุบาลไชยวาน - (3006-54) เพียปู่=Optic 12 Core DW = 3 km.
UDN001495,(3006-38) ME ไชยวาน - (3006-76) อนุบาลไชยวาน2=Optic 12 Core DW = 0.96 km.";
    }
else if($message == "3006-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000461,(3006-38) อนุบาลไชยวาน - (3006-39) ตลาดไชยวาน=Optic 12 Core DW = 0.912 km.
UDN001649,(3006-39) ตลาดไชยวาน - (3006-46) หนองแซง=Optic 12 Core DW = 7.031 km.";
    }
else if($message == "3006-40"){
        $arrayPostData['messages'][0]['text'] = "UDN000462,(3006-38) อนุบาลไชยวาน - (3006-40) สภอ.ไชยวาน=Optic 12 Core DW = 2.746 km.";
    }
else if($message == "3006-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000818,(3006-48) บ้านสนาย - (3006-41) บ้านหนองแวง(ไชยวาน)=Optic 12 Core DW = 5 km.
UDN000819,(3006-38) ME ไชยวาน - (3006-41) บ้านหนองแวงไชยวาน=Optic 12 Core DW = 5 km.";
    }
else if($message == "3006-45"){
          $arrayPostData['messages'][0]['text'] = "UDN000716,(3006-45) บ้านหนองหลัก - (3006-48) บ้านสนาย=Optic 12 Core DW = 2 km.
UDN001547,(3006-45) หบ้านหนองหลัก - (3006-77) บ้านหนองอิอุ=Optic 12 Core DW = 2.8 km.
UDN001648,(SJ) ไชยวาน-ศรีธาตุ - (3006-45) หนองหลัก(ไชยวาน)=Optic 12 Core DW = 0.123 km.
UDN001741,(3006-45) หนองหลัก(ไชยวาน) - (3006-84) หนองหลักไชยวาน2=Optic 12 Core DW = 0.82 km.";
    }
else if($message == "3006-46"){
          $arrayPostData['messages'][0]['text'] = "UDN001492,(3006-46) บ้านหนองแซง - (3006-71) บ้านหนองแวงตาด=Optic 12 Core DW = 4.56 km.
UDN001649,(3006-39) ตลาดไชยวาน - (3006-46) หนองแซง=Optic 12 Core DW = 7.031 km.";
    }
else if($message == "3006-47"){
        $arrayPostData['messages'][0]['text'] = "UDN000576,(3006-38) อนุบาลไชยวาน - (3006-47) หนองตูม=Optic 12 Core DW = 1.704 km.";
    }
else if($message == "3006-48"){
          $arrayPostData['messages'][0]['text'] = "UDN000716,(3006-45) บ้านหนองหลัก - (3006-48) บ้านสนาย=Optic 12 Core DW = 2 km.
UDN000818,(3006-48) บ้านสนาย - (3006-41) บ้านหนองแวง(ไชยวาน)=Optic 12 Core DW = 5 km.
UDN001057,(3006-48) บ้านสนาย - (3006-51) หัวหนองยาง=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3006-51"){
          $arrayPostData['messages'][0]['text'] = "UDN001002,(3006-51) หัวหนองยาง - (3006-53) บ้านนาปู=Optic 12 Core DW = 1.7 km.
UDN001057,(3006-48) บ้านสนาย - (3006-51) หัวหนองยาง=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3006-52"){
        $arrayPostData['messages'][0]['text'] = "UDN001493,(3006-52) หัวหนองยาง - (3006-53) บ้านนาปู=Optic 12 Core DW = 1.66 km.";
    }
else if($message == "3006-53"){
          $arrayPostData['messages'][0]['text'] = "UDN001002,(3006-51) หัวหนองยาง - (3006-53) บ้านนาปู=Optic 12 Core DW = 1.7 km.
UDN001493,(3006-52) หัวหนองยาง - (3006-53) บ้านนาปู=Optic 12 Core DW = 1.66 km.";
    }
else if($message == "3006-54"){
          $arrayPostData['messages'][0]['text'] = "UDN001055,(3006-54) เพียปู่ - (3006-67) น้ำทิพย์=12 Core= 6.6 km.
UDN001056,(3006-38) อนุบาลไชยวาน - (3006-54) เพียปู่=Optic 12 Core DW = 3 km.";
    }
else if($message == "3006-57"){
          $arrayPostData['messages'][0]['text'] = "UDN000896,(3006-57) คำเลาะ - (3006-59) วังชมภู=Optic 12 Core DW = 5.997 km.
UDN000955,(3006-67) น้ำทิพย์ - (3006-57) คำเลาะ=12 Core= 6.1 km.
UDN001548,(3006-57) บ้านคำเลาะ - (3006-82) บ้านคำมี=Optic 12 Core DW = 5.24 km.
UDN001740,(3006-57) คำเลาะ - (3006-81) ต.คำเลาะ บ้านคำบอน=Optic 12 Core DW = 4 km.";
    }
else if($message == "3006-59"){
          $arrayPostData['messages'][0]['text'] = "UDN000896,(3006-57) คำเลาะ - (3006-59) วังชมภู=Optic 12 Core DW = 5.997 km.
UDN001738,(3006-59) วังชมภู - (3006-78) ต.คำเลาะ บ้านดงพัฒนา=12 Core= 6.274 km.";
    }
else if($message == "3006-65"){
        $arrayPostData['messages'][0]['text'] = "UDN001496,(3006-74) บ้านห้วยยาง - (3006-65) บ้านโนนสมบูรณ์=Optic 12 Core DW = 1.83 km.";
    }
else if($message == "3006-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000955,(3006-67) น้ำทิพย์ - (3006-57) คำเลาะ=12 Core= 6.1 km.
UDN001055,(3006-54) เพียปู่ - (3006-67) น้ำทิพย์=12 Core= 6.6 km.";
    }
else if($message == "3006-68"){
        $arrayPostData['messages'][0]['text'] = "UDN001736,(SJ) MEไชยวาน-MEศรีธาตุ - (3006-68) โพนสูง หมู่1=Optic 12 Core DW = 1.53 km.";
    }
else if($message == "3006-71"){
        $arrayPostData['messages'][0]['text'] = "UDN001492,(3006-46) บ้านหนองแซง - (3006-71) บ้านหนองแวงตาด=Optic 12 Core DW = 4.56 km.";
    }
else if($message == "3006-72"){
        $arrayPostData['messages'][0]['text'] = "UDN001494,(3003-84) บ้านโพนสูง - (3006-72) บ้านคำม่วง=Optic 12 Core DW = 3.16 km.";
    }
else if($message == "3006-73"){
          $arrayPostData['messages'][0]['text'] = "UDN001567,(3006-73) บ้านป่าก้าว - (3006-74) บ้านห้วยยาง=Optic 12 Core DW = 1.64 km.
UDN001737,(SJ) MEไชยวาน-MEศรีธาตุ - (3006-73) ป่าก้าว ต.โพนสูง=Optic 12 Core DW = 0.81 km.";
    }
else if($message == "3006-74"){
          $arrayPostData['messages'][0]['text'] = "UDN001496,(3006-74) บ้านห้วยยาง - (3006-65) บ้านโนนสมบูรณ์=Optic 12 Core DW = 1.83 km.
UDN001567,(3006-73) บ้านป่าก้าว - (3006-74) บ้านห้วยยาง=Optic 12 Core DW = 1.64 km.";
    }
else if($message == "3006-76"){
        $arrayPostData['messages'][0]['text'] = "UDN001495,(3006-38) ME ไชยวาน - (3006-76) อนุบาลไชยวาน2=Optic 12 Core DW = 0.96 km.";
    }
else if($message == "3006-77"){
        $arrayPostData['messages'][0]['text'] = "UDN001547,(3006-45) หบ้านหนองหลัก - (3006-77) บ้านหนองอิอุ=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3006-78"){
        $arrayPostData['messages'][0]['text'] = "UDN001738,(3006-59) วังชมภู - (3006-78) ต.คำเลาะ บ้านดงพัฒนา=12 Core= 6.274 km.";
    }
else if($message == "3006-79"){
        $arrayPostData['messages'][0]['text'] = "UDN001739,(3006-81) บ้านคำบอน - (3006-79) ต.คำเลาะ บ้านโนนม่วงหวาน=12 Core= 5.91 km.";
    }
else if($message == "3006-81"){
          $arrayPostData['messages'][0]['text'] = "UDN001739,(3006-81) บ้านคำบอน - (3006-79) ต.คำเลาะ บ้านโนนม่วงหวาน=12 Core= 5.91 km.
UDN001740,(3006-57) คำเลาะ - (3006-81) ต.คำเลาะ บ้านคำบอน=Optic 12 Core DW = 4 km.";
    }
else if($message == "3006-82"){
        $arrayPostData['messages'][0]['text'] = "UDN001548,(3006-57) บ้านคำเลาะ - (3006-82) บ้านคำมี=Optic 12 Core DW = 5.24 km.";
    }
else if($message == "3006-84"){
        $arrayPostData['messages'][0]['text'] = "UDN001741,(3006-45) หนองหลัก(ไชยวาน) - (3006-84) หนองหลักไชยวาน2=Optic 12 Core DW = 0.82 km.";
    }
else if($message == "3007-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000821,(3007-39) รพ.ทุ่งฝน - (3007-37) บ.โนนสะอาดทุ่งฝน3=Optic 12 Core DW = 2.576 km.
UDN000898,(3007-37) บ.โนนสะอาดทุ่งฝน3 - (3007-64) ธาตุน้อย=Optic 12 Core DW = 2.24 km.
UDN001746,(3007-37) บ้านโนนสะอาดทุ่งฝน3 - (3007-65) โพนสูง ต.ทุ่งฝน=12 Core= 5.69 km.";
    }
else if($message == "3007-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000513,(3007-39) ME ทุ่งฝน - (3007-38) ซอยทุ่งฝนสามัคคี=Optic 12 Core DW = 0.36 km.
UDN001402,(3007-38) ซอยทุ่งฝนสามัคคี - (3007-43) บ้านท่าช่วง=Optic 12 Core DW = 4.65 km.
UDN001748,(3007-38) ซอยทุ่งฝนสามัคคี - (3007-71) บ้านทุ่งฝน ต.ทุ่งฝน=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3007-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000509,(3007-39) ME ทุ่งฝน - (3003-61) ME บ้านดุง=12 Core= 33.6 km.
UDN000512,(3008-40) บ้านเชียง - (3007-39) ME ทุ่งฝน=12 Core= 9.7 km.
UDN000513,(3007-39) ME ทุ่งฝน - (3007-38) ซอยทุ่งฝนสามัคคี=Optic 12 Core DW = 0.36 km.
UDN000586,(3007-39) MEทุ่งฝน - (3008-57) หนองกุง=12 Core= 12 km.
UDN000821,(3007-39) รพ.ทุ่งฝน - (3007-37) บ.โนนสะอาดทุ่งฝน3=Optic 12 Core DW = 2.576 km.
UDN001398,(3007-39) รพ. ทุ่งฝน - (3007-61) ทุ่งพัฒนา=Optic 12 Core DW = 2.54 km.";
    }
else if($message == "3007-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000823,(3007-40) ทุ่งใหญ่ - (3007-47) เหล่าวิชา=Optic 12 Core DW = 1.614 km.
UDN001294,(3007-40) ทุ่งใหญ่ - (3007-60) ช้างน้อย=Optic 12 Core DW = 2.1 km.
UDN001650,(SJ) ทุ่งฝน-บ้านดุง - (3007-40) ทุ่งใหญ่=Optic 12 Core DW = 0.556 km.";
    }
else if($message == "3007-41"){
        $arrayPostData['messages'][0]['text'] = "UDN001397,(3008-57) หนองกุง - (3007-41) บ้านคำเจริญ ต.ทุ่งใหญ่=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3007-42"){
        $arrayPostData['messages'][0]['text'] = "UDN000897,(3007-64) ธาตุน้อย - (3007-42) บ้านก่อสำราญ=Optic 12 Core DW = 1.76 km.";
    }
else if($message == "3007-43"){
          $arrayPostData['messages'][0]['text'] = "UDN001362,(3007-43) ท่าช่วง - (3007-44) บ้านกุดค้า=12 Core= 5.37 km.
UDN001402,(3007-38) ซอยทุ่งฝนสามัคคี - (3007-43) บ้านท่าช่วง=Optic 12 Core DW = 4.65 km.";
    }
else if($message == "3007-44"){
        $arrayPostData['messages'][0]['text'] = "UDN001362,(3007-43) ท่าช่วง - (3007-44) บ้านกุดค้า=12 Core= 5.37 km.";
    }
else if($message == "3007-46"){
          $arrayPostData['messages'][0]['text'] = "UDN000822,(3007-47) เหล่าวิชา - (3007-46) บ้านโพธิ์=Optic 12 Core DW = 1.568 km.
UDN000956,(3007-46) โพธิ์ - (3007-48) นาชุมแสง=Optic 12 Core DW = 4.818 km.
UDN001391,(3007-46) บ้านโพธิ์ - (3003-156) โนนทองหลาง=Optic 12 Core DW = 3.02 km.";
    }
else if($message == "3007-47"){
          $arrayPostData['messages'][0]['text'] = "UDN000822,(3007-47) เหล่าวิชา - (3007-46) บ้านโพธิ์=Optic 12 Core DW = 1.568 km.
UDN000823,(3007-40) ทุ่งใหญ่ - (3007-47) เหล่าวิชา=Optic 12 Core DW = 1.614 km.
UDN000824,(3007-47) เหล่าวิชา - (3007-60) ช้างน้อย=Optic 12 Core DW = 2.359 km.";
    }
else if($message == "3007-48"){
          $arrayPostData['messages'][0]['text'] = "UDN000956,(3007-46) โพธิ์ - (3007-48) นาชุมแสง=Optic 12 Core DW = 4.818 km.
UDN001742,(3007-48) นาชุมแสง - (3007-51) โนนสมบูรณ์ ต.นาชุมแสง=Optic 12 Core DW = 4 km.";
    }
else if($message == "3007-51"){
          $arrayPostData['messages'][0]['text'] = "UDN001742,(3007-48) นาชุมแสง - (3007-51) โนนสมบูรณ์ ต.นาชุมแสง=Optic 12 Core DW = 4 km.
UDN001743,(3007-51) โนนสมบูรณ์ ต.นาชุมแสง - (3007-52) นาทม=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3007-52"){
          $arrayPostData['messages'][0]['text'] = "UDN001488,(3007-52) บ้านนาทม - (3007-66) บ้านโนนหนามแท่ง=Optic 12 Core DW = 2.307 km.
UDN001743,(3007-51) โนนสมบูรณ์ ต.นาชุมแสง - (3007-52) นาทม=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3007-54"){
        $arrayPostData['messages'][0]['text'] = "UDN001744,(3007-59) ศรีสว่าง - (3007-54) บุญมี=Optic 12 Core DW = 2.95 km.";
    }
else if($message == "3007-58"){
          $arrayPostData['messages'][0]['text'] = "UDN001486,(3007-58) ช้างใหญ่ - (3007-67) บ้านโนนสวรรค์=Optic 12 Core DW = 2.89 km.
UDN001651,(3007-58) ช้างใหญ่ - (3007-59) ศรีสว่าง=Optic 12 Core DW = 2 km.
UDN001745,(3007-60) ช้างน้อย - (3007-58) ช้างใหญ่=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3007-59"){
          $arrayPostData['messages'][0]['text'] = "UDN001651,(3007-58) ช้างใหญ่ - (3007-59) ศรีสว่าง=Optic 12 Core DW = 2 km.
UDN001744,(3007-59) ศรีสว่าง - (3007-54) บุญมี=Optic 12 Core DW = 2.95 km.";
    }
else if($message == "3007-60"){
          $arrayPostData['messages'][0]['text'] = "UDN000824,(3007-47) เหล่าวิชา - (3007-60) ช้างน้อย=Optic 12 Core DW = 2.359 km.
UDN001294,(3007-40) ทุ่งใหญ่ - (3007-60) ช้างน้อย=Optic 12 Core DW = 2.1 km.
UDN001745,(3007-60) ช้างน้อย - (3007-58) ช้างใหญ่=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3007-61"){
          $arrayPostData['messages'][0]['text'] = "UDN001398,(3007-39) รพ. ทุ่งฝน - (3007-61) ทุ่งพัฒนา=Optic 12 Core DW = 2.54 km.
UDN001747,(3007-61) ทุ่งพัฒนา - (3007-68) บ้านทุ่งพัฒนา=Optic 12 Core DW = 1.4 km.
UDN001749,(3007-61) ทุ่งพัฒนา - (3007-72) ทุ่งพัฒนา2 ต.ทุ่งฝน=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3007-64"){
          $arrayPostData['messages'][0]['text'] = "UDN000897,(3007-64) ธาตุน้อย - (3007-42) บ้านก่อสำราญ=Optic 12 Core DW = 1.76 km.
UDN000898,(3007-37) บ.โนนสะอาดทุ่งฝน3 - (3007-64) ธาตุน้อย=Optic 12 Core DW = 2.24 km.";
    }
else if($message == "3007-65"){
        $arrayPostData['messages'][0]['text'] = "UDN001746,(3007-37) บ้านโนนสะอาดทุ่งฝน3 - (3007-65) โพนสูง ต.ทุ่งฝน=12 Core= 5.69 km.";
    }
else if($message == "3007-66"){
        $arrayPostData['messages'][0]['text'] = "UDN001488,(3007-52) บ้านนาทม - (3007-66) บ้านโนนหนามแท่ง=Optic 12 Core DW = 2.307 km.";
    }
else if($message == "3007-67"){
        $arrayPostData['messages'][0]['text'] = "UDN001486,(3007-58) ช้างใหญ่ - (3007-67) บ้านโนนสวรรค์=Optic 12 Core DW = 2.89 km.";
    }
else if($message == "3007-68"){
        $arrayPostData['messages'][0]['text'] = "UDN001747,(3007-61) ทุ่งพัฒนา - (3007-68) บ้านทุ่งพัฒนา=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3007-71"){
        $arrayPostData['messages'][0]['text'] = "UDN001748,(3007-38) ซอยทุ่งฝนสามัคคี - (3007-71) บ้านทุ่งฝน ต.ทุ่งฝน=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3007-72"){
        $arrayPostData['messages'][0]['text'] = "UDN001749,(3007-61) ทุ่งพัฒนา - (3007-72) ทุ่งพัฒนา2 ต.ทุ่งฝน=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3008-101"){
        $arrayPostData['messages'][0]['text'] = "UDN000717,(3008-90) หนองเม็ก3 - (3008-101) บ้านดูน=Optic 12 Core DW = 3.068 km.";
    }
else if($message == "3008-102"){
          $arrayPostData['messages'][0]['text'] = "UDN000825,(3008-60) หนองเม็ก2 - (3008-102) โคกสูง=Optic 12 Core DW = 4 km.
UDN000899,(3008-102) โคกสูง - (3008-102) โคกสูง=Optic 12 Core DW = 4 km.
UDN001544,(3008-102) โพนสูง - (3008-178) ปตท.หนองหาน=Optic 12 Core DW = 2.07 km.
UDN001632,(3008-102) โคกสูง - (3008-103) โสกหมู=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3008-103"){
        $arrayPostData['messages'][0]['text'] = "UDN001632,(3008-102) โคกสูง - (3008-103) โสกหมู=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3008-104"){
        $arrayPostData['messages'][0]['text'] = "UDN000900,(3008-48) บ้านดงคำ - (3008-104) โคกสว่างหนองหาน=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3008-106"){
          $arrayPostData['messages'][0]['text'] = "UDN000631,(3008-106) บ้านสะแบง - (3008-153) บ้านนาสร้าง=Optic 12 Core DW = 2.954 km.
UDN001457,(3008-106) บ้านสะแบง - (3008-179) บ้านโนนแสงจันทร์=Optic 12 Core DW = 2.51 km.
UDN001633,(SJ) MEหนองหาน-MEพิบูลรักษ์ - (3008-106) บ้านสะแบง=Optic 12 Core DW = 1.4 km.
UDN001752,(3008-106) บ้านสะแบง - (3008-174) ไร่พัฒนา=Optic 12 Core DW = 2 km.";
    }
else if($message == "3008-107"){
        $arrayPostData['messages'][0]['text'] = "UDN000901,(3008-70) บ้านนาฮัง - (3008-107) wireless บ้านนาฮัง=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3008-108"){
        $arrayPostData['messages'][0]['text'] = "UDN001750,(3008-80) พังงู2 - (3008-108) พังงู3=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3008-111"){
          $arrayPostData['messages'][0]['text'] = "UDN000609,(3008-112) บ้านหนองตะไก้ - (3008-111) บ้านต้ายสวรรค์=Optic 12 Core DW = 3.96 km.
UDN000748,(3008-111) ต้ายสวรรค์ - (3008-163) ดงหวาน=Optic 12 Core DW = 2.53 km.
UDN000829,(3008-111) ต้ายสวรรค์ - (3008-117) ดงเรือง=Optic 12 Core DW = 2.528 km.
UDN001041,(3008-111) ต้ายสวรรค์ - (3008-155) เม็กใหญ่=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3008-112"){
          $arrayPostData['messages'][0]['text'] = "UDN000609,(3008-112) บ้านหนองตะไก้ - (3008-111) บ้านต้ายสวรรค์=Optic 12 Core DW = 3.96 km.
UDN000610,(3008-12) บ้านโคกสูง - (3008-112) บ้านหนองตะไก้=Optic 12 Core DW = 3.06 km.";
    }
else if($message == "3008-113"){
          $arrayPostData['messages'][0]['text'] = "UDN000611,(3008-80) บ้านพังงู - (3008-113) บ้านดอนกลาง=Optic 12 Core DW = 1.824 km.
UDN000774,(3008-113) บ้านดอนกลาง(หมู่3) - (3008-115) บ้านตาลเดี่ยว=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3008-114"){
        $arrayPostData['messages'][0]['text'] = "UDN000612,(3008-89) บ้านเชียง 3 - (3008-114) บ้านเชียงหมู่2=Optic 12 Core DW = 1.746 km.";
    }
else if($message == "3008-115"){
          $arrayPostData['messages'][0]['text'] = "UDN000638,(3008-115) ตาลเดียว - (3008-168) หนองหญ้ารังกา=Optic 12 Core DW = 2.01 km.
UDN000774,(3008-113) บ้านดอนกลาง(หมู่3) - (3008-115) บ้านตาลเดี่ยว=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3008-116"){
        $arrayPostData['messages'][0]['text'] = "UDN000775,(3008-91) บ้านนาดี - (3008-116) บ้านม่วง=Optic 12 Core DW = 2.421 km.";
    }
else if($message == "3008-117"){
          $arrayPostData['messages'][0]['text'] = "UDN000632,(3008-155) บ้านเม็กใหญ่ - (3008-117) บ้านดงเรือง=Optic 12 Core DW = 1.006 km.
UDN000829,(3008-111) ต้ายสวรรค์ - (3008-117) ดงเรือง=Optic 12 Core DW = 2.528 km.";
    }
else if($message == "3008-119"){
        $arrayPostData['messages'][0]['text'] = "UDN001003,(3008-74) หนองสองห้อง(หนองหาน) - (3008-119) ศรีพัฒนา=Optic 12 Core DW = 0.85 km.";
    }
else if($message == "3008-12"){
        $arrayPostData['messages'][0]['text'] = "UDN000610,(3008-12) บ้านโคกสูง - (3008-112) บ้านหนองตะไก้=Optic 12 Core DW = 3.06 km.";
    }
else if($message == "3008-121"){
        $arrayPostData['messages'][0]['text'] = "UDN000776,(3008-86) โคกถาวร - (3008-121) บ้านเรืองชัย=Optic 12 Core DW = 3.663 km.";
    }
else if($message == "3008-122"){
        $arrayPostData['messages'][0]['text'] = "UDN000777,(3008-83) บ้านเพ็ก - (3008-122) ดงบาก=Optic 12 Core DW = 3.8 km.";
    }
else if($message == "3008-123"){
        $arrayPostData['messages'][0]['text'] = "UDN000613,(3008-83) บ้านเพ็ก - (3008-123) บ้านหายโศก=Optic 12 Core DW = 2.46 km.";
    }
else if($message == "3008-125"){
          $arrayPostData['messages'][0]['text'] = "UDN000614,(3006-37) ดงบัง - (3008-125) หนองบัวน้อย=12 Core= 3.16 km.
UDN001022,(3020-69) หนองลุมพุก - (3008-125) หนองบัวน้อย=Optic 12 Core DW = 3.6 km.
UDN001204,(3008-68) ผักตบ - (3008-125) หนองบัวน้อย=Optic 12 Core DW = 4.9 km.";
    }
else if($message == "3008-126"){
        $arrayPostData['messages'][0]['text'] = "UDN000615,(3008-159) บ้านมุ่น - (3008-126) บ้านเหล่าหว้า=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3008-127"){
          $arrayPostData['messages'][0]['text'] = "UDN000616,(3008-128) หงษ์สาวดี - (3008-127) บ้านวังฮาง=12 Core= 2.42 km.
UDN000634,(3008-127) บ้านวังฮาง - (3008-157) บ้านนาเยีย=Optic 12 Core DW = 2.501 km.";
    }
else if($message == "3008-128"){
          $arrayPostData['messages'][0]['text'] = "UDN000616,(3008-128) หงษ์สาวดี - (3008-127) บ้านวังฮาง=12 Core= 2.42 km.
UDN000617,(3008-129) บ้านสร้อยพร้าว - (3008-128) หงษ์สาวดี=12 Core= 2.61 km.
UDN000636,(3008-128) หงษ์สาวดี - (3008-159) บ้านมุ่น=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3008-129"){
          $arrayPostData['messages'][0]['text'] = "UDN000617,(3008-129) บ้านสร้อยพร้าว - (3008-128) หงษ์สาวดี=12 Core= 2.61 km.
UDN000618,(3008-167) หนองตาไกล้ - (3008-129) บ้านสร้อยพร้าว=12 Core= 3.48 km.
UDN000619,(3008-129) บ้านสร้อยพร้าว - (3008-131) บ้านกั้ง=Optic 12 Core DW = 3.11 km.";
    }
else if($message == "3008-131"){
          $arrayPostData['messages'][0]['text'] = "UDN000619,(3008-129) บ้านสร้อยพร้าว - (3008-131) บ้านกั้ง=Optic 12 Core DW = 3.11 km.
UDN000620,(3008-131) บ้านกั้ง - (3008-132) โนนสะอาด=12 Core= 0.81 km.
UDN000622,(3008-131) บ้านกั้ง - (3008-134) บ้านโคกสำราญ=12 Core= 3.05 km.";
    }
else if($message == "3008-132"){
          $arrayPostData['messages'][0]['text'] = "UDN000620,(3008-131) บ้านกั้ง - (3008-132) โนนสะอาด=12 Core= 0.81 km.
UDN000633,(3008-132) บ้านโนนสะอาด - (3008-156) บ้านบ่อคำ=Optic 12 Core DW = 1.43 km.";
    }
else if($message == "3008-133"){
          $arrayPostData['messages'][0]['text'] = "UDN000621,(3008-134) บ้านโคกสำราญ - (3008-133) บ้านหนองกล้า=Optic 12 Core DW = 2.44 km.
UDN000623,(3008-133) บ้านหนองกล้า - (3008-135) บ้านดอนหายโศก=12 Core= 2.46 km.";
    }
else if($message == "3008-134"){
          $arrayPostData['messages'][0]['text'] = "UDN000621,(3008-134) บ้านโคกสำราญ - (3008-133) บ้านหนองกล้า=Optic 12 Core DW = 2.44 km.
UDN000622,(3008-131) บ้านกั้ง - (3008-134) บ้านโคกสำราญ=12 Core= 3.05 km.";
    }
else if($message == "3008-135"){
          $arrayPostData['messages'][0]['text'] = "UDN000623,(3008-133) บ้านหนองกล้า - (3008-135) บ้านดอนหายโศก=12 Core= 2.46 km.
UDN001004,(3008-135) ดอนหายโศก - (3008-136) นาอุดม=Optic 12 Core DW = 3.92 km.
UDN001040,(3008-135) ดอนหายโศก - (3008-164) หนองค้อพัฒนา=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3008-136"){
          $arrayPostData['messages'][0]['text'] = "UDN000749,(3008-136) บ้านนาอุดม - (3008-164) บ้านค้อพัฒนา=Optic 12 Core DW = 3.105 km.
UDN001004,(3008-135) ดอนหายโศก - (3008-136) นาอุดม=Optic 12 Core DW = 3.92 km.";
    }
else if($message == "3008-137"){
        $arrayPostData['messages'][0]['text'] = "UDN000778,(3008-138) บ้านศาลา - (3008-137) นางิ้ว=Optic 12 Core DW = 1.829 km.";
    }
else if($message == "3008-138"){
          $arrayPostData['messages'][0]['text'] = "UDN000778,(3008-138) บ้านศาลา - (3008-137) นางิ้ว=Optic 12 Core DW = 1.829 km.
UDN000779,(3008-139) ดอนบาก - (3008-138) บ้านศาลา=Optic 12 Core DW = 1.22 km.";
    }
else if($message == "3008-139"){
          $arrayPostData['messages'][0]['text'] = "UDN000779,(3008-139) ดอนบาก - (3008-138) บ้านศาลา=Optic 12 Core DW = 1.22 km.
UDN000780,(3008-97) หนองกุง(หนองหาน) - (3008-139) ดอนบาก=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3008-141"){
          $arrayPostData['messages'][0]['text'] = "UDN000781,(3008-141) โพนงาม - (3008-143) หนองดินจี่=Optic 12 Core DW = 2.9 km.
UDN001005,(3008-171) นิคมหนองตาล2 - (3008-141) โพนงาม=Optic 12 Core DW = 2.74 km.";
    }
else if($message == "3008-142"){
        $arrayPostData['messages'][0]['text'] = "UDN001751,(3006-37) บ้านดงบัง (ไชยวาน) - (3008-142) หนองบัวน้อย=Optic 12 Core DW = 3.775 km.";
    }
else if($message == "3008-143"){
        $arrayPostData['messages'][0]['text'] = "UDN000781,(3008-141) โพนงาม - (3008-143) หนองดินจี่=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3008-144"){
        $arrayPostData['messages'][0]['text'] = "UDN000624,(3008-47) นิคมหนองตาล - (3008-144) สระคาม=Optic 12 Core DW = 2.11 km.";
    }
else if($message == "3008-145"){
          $arrayPostData['messages'][0]['text'] = "UDN000625,(3008-54) บ้านโคก - (3008-145) บ้านดงยางเดียว=Optic 12 Core DW = 1.66 km.
UDN001759,(3008-145) ดอนยางเดี่ยว - (3008-198) ดอนยางเดี่ยว2=Optic 12 Core DW = 1.32 km.";
    }
else if($message == "3008-146"){
        $arrayPostData['messages'][0]['text'] = "UDN000626,(3008-68) บ้านผักตบ - (3008-146) บ้านดอนแคน=Optic 12 Core DW = 1.34 km.";
    }
else if($message == "3008-147"){
        $arrayPostData['messages'][0]['text'] = "UDN000627,(3008-74) หนองสองห้อง(หนองหาน) - (3008-147) บ้านหนองแห้ว=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3008-149"){
          $arrayPostData['messages'][0]['text'] = "UDN000628,(3008-152) บ้านบ่อปัด - (3008-149) บ้านดงวังพัง=Optic 12 Core DW = 2.58 km.
UDN001311,(3008-149) ดงวังพัง - (3018-68) ไชยวานน้อย=Optic 12 Core DW = 2.81 km.";
    }
else if($message == "3008-151"){
        $arrayPostData['messages'][0]['text'] = "UDN000629,(3008-152) บ้านบ่อปัด - (3008-151) บ้านดอนนางคำ=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3008-152"){
          $arrayPostData['messages'][0]['text'] = "UDN000628,(3008-152) บ้านบ่อปัด - (3008-149) บ้านดงวังพัง=Optic 12 Core DW = 2.58 km.
UDN000629,(3008-152) บ้านบ่อปัด - (3008-151) บ้านดอนนางคำ=Optic 12 Core DW = 2.56 km.
UDN000630,(3008-153) บ้านนาสร้าง - (3008-152) บ้านบ่อปัด=Optic 12 Core DW = 1.36 km.";
    }
else if($message == "3008-153"){
          $arrayPostData['messages'][0]['text'] = "UDN000630,(3008-153) บ้านนาสร้าง - (3008-152) บ้านบ่อปัด=Optic 12 Core DW = 1.36 km.
UDN000631,(3008-106) บ้านสะแบง - (3008-153) บ้านนาสร้าง=Optic 12 Core DW = 2.954 km.";
    }
else if($message == "3008-155"){
          $arrayPostData['messages'][0]['text'] = "UDN000632,(3008-155) บ้านเม็กใหญ่ - (3008-117) บ้านดงเรือง=Optic 12 Core DW = 1.006 km.
UDN001041,(3008-111) ต้ายสวรรค์ - (3008-155) เม็กใหญ่=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3008-156"){
        $arrayPostData['messages'][0]['text'] = "UDN000633,(3008-132) บ้านโนนสะอาด - (3008-156) บ้านบ่อคำ=Optic 12 Core DW = 1.43 km.";
    }
else if($message == "3008-157"){
        $arrayPostData['messages'][0]['text'] = "UDN000634,(3008-127) บ้านวังฮาง - (3008-157) บ้านนาเยีย=Optic 12 Core DW = 2.501 km.";
    }
else if($message == "3008-158"){
          $arrayPostData['messages'][0]['text'] = "UDN000635,(3008-43) บ้านเชียงงาม - (3008-158) บ้านหนองงิ้ว=Optic 12 Core DW = 4.71 km.
UDN000637,(3008-158) บ้านหนองงิ้ว - (3008-167) หนองตาไกล้=Optic 12 Core DW = 4.335 km.";
    }
else if($message == "3008-159"){
          $arrayPostData['messages'][0]['text'] = "UDN000615,(3008-159) บ้านมุ่น - (3008-126) บ้านเหล่าหว้า=Optic 12 Core DW = 1.16 km.
UDN000636,(3008-128) หงษ์สาวดี - (3008-159) บ้านมุ่น=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3008-161"){
        $arrayPostData['messages'][0]['text'] = "UDN000782,(3008-56) บ้านหนองลาด - (3008-161) คำผักกูด=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3008-162"){
        $arrayPostData['messages'][0]['text'] = "UDN000783,(3008-86) โคกถาวร - (3008-162) ค้อน้อยทรายงาม=Optic 12 Core DW = 3.57 km.";
    }
else if($message == "3008-163"){
        $arrayPostData['messages'][0]['text'] = "UDN000748,(3008-111) ต้ายสวรรค์ - (3008-163) ดงหวาน=Optic 12 Core DW = 2.53 km.";
    }
else if($message == "3008-164"){
          $arrayPostData['messages'][0]['text'] = "UDN000749,(3008-136) บ้านนาอุดม - (3008-164) บ้านค้อพัฒนา=Optic 12 Core DW = 3.105 km.
UDN001040,(3008-135) ดอนหายโศก - (3008-164) หนองค้อพัฒนา=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3008-165"){
        $arrayPostData['messages'][0]['text'] = "UDN000750,(3008-81) ป่าก้าว หนองหาน - (3008-165) กระพี้=Optic 12 Core DW = 2.43 km.";
    }
else if($message == "3008-167"){
          $arrayPostData['messages'][0]['text'] = "UDN000618,(3008-167) หนองตาไกล้ - (3008-129) บ้านสร้อยพร้าว=12 Core= 3.48 km.
UDN000637,(3008-158) บ้านหนองงิ้ว - (3008-167) หนองตาไกล้=Optic 12 Core DW = 4.335 km.";
    }
else if($message == "3008-168"){
        $arrayPostData['messages'][0]['text'] = "UDN000638,(3008-115) ตาลเดียว - (3008-168) หนองหญ้ารังกา=Optic 12 Core DW = 2.01 km.";
    }
else if($message == "3008-169"){
        $arrayPostData['messages'][0]['text'] = "UDN000639,(3008-40) ME บ้านเชียง - (3008-169) เทศบาลบ้านเชียง=12 Core= 1.36 km.";
    }
else if($message == "3008-171"){
          $arrayPostData['messages'][0]['text'] = "UDN000640,(3008-47) นิคมหนองตาล - (3008-171) นิคมหนองตาล 2=Optic 12 Core DW = 1.21 km.
UDN001005,(3008-171) นิคมหนองตาล2 - (3008-141) โพนงาม=Optic 12 Core DW = 2.74 km.";
    }
else if($message == "3008-172"){
        $arrayPostData['messages'][0]['text'] = "UDN000641,(3008-40) ME บ้านเชียง - (3008-172) บ้านอ้อมแก้ว=12 Core= 1.76 km.";
    }
else if($message == "3008-174"){
        $arrayPostData['messages'][0]['text'] = "UDN001752,(3008-106) บ้านสะแบง - (3008-174) ไร่พัฒนา=Optic 12 Core DW = 2 km.";
    }
else if($message == "3008-176"){
        $arrayPostData['messages'][0]['text'] = "UDN001368,(3008-38) ปั้มบางจาก - (3008-176) หนองหาน หมู่6=Optic 12 Core DW = 2.66 km.";
    }
else if($message == "3008-177"){
        $arrayPostData['messages'][0]['text'] = "UDN001366,(3008-43) เชียงงาม - (3008-177) เชียงงาม2=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3008-178"){
        $arrayPostData['messages'][0]['text'] = "UDN001544,(3008-102) โพนสูง - (3008-178) ปตท.หนองหาน=Optic 12 Core DW = 2.07 km.";
    }
else if($message == "3008-179"){
        $arrayPostData['messages'][0]['text'] = "UDN001457,(3008-106) บ้านสะแบง - (3008-179) บ้านโนนแสงจันทร์=Optic 12 Core DW = 2.51 km.";
    }
else if($message == "3008-181"){
        $arrayPostData['messages'][0]['text'] = "UDN001753,(3008-39) โรงเรียนหนองหาน - (3008-181) โรงเรียนหนองหาน2=Optic 12 Core DW = 0.845 km.";
    }
else if($message == "3008-182"){
        $arrayPostData['messages'][0]['text'] = "UDN001754,(3008-41) บ้านหนองบ่อ - (3008-182) บ้านหนองบ่อ 2=Optic 12 Core DW = 1.045 km.";
    }
else if($message == "3008-183"){
        $arrayPostData['messages'][0]['text'] = "UDN001755,(3008-38) ปั้มบางจาก - (3008-183) ปั้มบางจาก 2=Optic 12 Core DW = 0.72 km.";
    }
else if($message == "3008-186"){
        $arrayPostData['messages'][0]['text'] = "UDN001446,(3008-78) บ้านดงบาก - (3008-186) บ้านดงบาก2=Optic 12 Core DW = 0.86 km.";
    }
else if($message == "3008-187"){
        $arrayPostData['messages'][0]['text'] = "UDN001756,(3008-88) บ้านม่วงหนองหาน2 - (3008-187) บ้านม่วงหนองหาน3=Optic 12 Core DW = 1 km.";
    }
else if($message == "3008-188"){
          $arrayPostData['messages'][0]['text'] = "UDN001757,(3008-56) หนองลาด - (3008-188) หนองลาด 2=Optic 12 Core DW = 1.092 km.
UDN001758,(3008-188) หนองลาด 2 - (3008-196) บ้านหนองแป้น=Optic 12 Core DW = 1.638 km.";
    }
else if($message == "3008-192"){
        $arrayPostData['messages'][0]['text'] = "UDN001442,(3008-37) ME หนองหาน - (3008-192) โลตัสหนองหาน=Optic 12 Core DW = 1.36 km.";
    }
else if($message == "3008-196"){
        $arrayPostData['messages'][0]['text'] = "UDN001758,(3008-188) หนองลาด 2 - (3008-196) บ้านหนองแป้น=Optic 12 Core DW = 1.638 km.";
    }
else if($message == "3008-198"){
        $arrayPostData['messages'][0]['text'] = "UDN001759,(3008-145) ดอนยางเดี่ยว - (3008-198) ดอนยางเดี่ยว2=Optic 12 Core DW = 1.32 km.";
    }
else if($message == "3008-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000063,() การไฟฟ้าอำเภอหนองหาน - (3008-37) โรงพยาบาลหนองหาน=Optic 12 Core DW = 2.85 km.
UDN000064,(3008-37) โรงพยาบาลหนองหาน - (3008-38) ปั๊มบางจาก=Optic 12 Core DW = 0.637 km.
UDN000065,(3008-37) โรงพยาบาลหนองหาน - (3008-39) โรงเรียนหนองหาน=Optic 12 Core DW = 0.556 km.
UDN000067,(3008-37) โรงพยาบาลหนองหาน - (3008-41) บ้านหนองบ่อ=Optic 12 Core DW = 3.7 km.
UDN000413,(3032-36) ชุมสาย อุดรคอนโดเทล - (3008-37) ME หนองหาน=12 Core= 40 km.
UDN000414,(3008-37) ME หนองหาน - (3503-34) dwdm พรหมศิริ=12 Core= 45.882 km.
UDN000466,(3008-37) ME หนองหาน - (3008-51) บ้านหนองบัวแดง=Optic 12 Core DW = 5.556 km.
UDN000994,(3020-67) ME ประจักษ์ศิลปาคม - (3008-37) ME หนองหาน=12 Core= 25.01 km.
UDN000995,(3002-43) ME ธนพิทักษ์ - (3008-37) ME หนองหาน=12 Core= 36.217 km.
UDN000998,(3008-37) ME หนองหาน - (3018-61) ME พิบูลรักษ์ =12 Core= 31.155 km.
UDN001442,(3008-37) ME หนองหาน - (3008-192) โลตัสหนองหาน=Optic 12 Core DW = 1.36 km.";
    }
else if($message == "3008-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000064,(3008-37) โรงพยาบาลหนองหาน - (3008-38) ปั๊มบางจาก=Optic 12 Core DW = 0.637 km.
UDN000069,(3008-38) ปั๊มบางจาก - (3008-43) บ้านเชียงงาม=Optic 12 Core DW = 1.04 km.
UDN001368,(3008-38) ปั้มบางจาก - (3008-176) หนองหาน หมู่6=Optic 12 Core DW = 2.66 km.
UDN001755,(3008-38) ปั้มบางจาก - (3008-183) ปั้มบางจาก 2=Optic 12 Core DW = 0.72 km.";
    }
else if($message == "3008-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000065,(3008-37) โรงพยาบาลหนองหาน - (3008-39) โรงเรียนหนองหาน=Optic 12 Core DW = 0.556 km.
UDN001753,(3008-39) โรงเรียนหนองหาน - (3008-181) โรงเรียนหนองหาน2=Optic 12 Core DW = 0.845 km.";
    }
else if($message == "3008-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000066,(3008-45) บ้านปูลู - (3008-40) บ้านเชียง=12 Core= 4.9 km.
UDN000070,(3008-40) บ้านเชียง - (3008-44) บ้านเชียง2=Optic 12 Core DW = 0.7 km.
UDN000512,(3008-40) บ้านเชียง - (3007-39) ME ทุ่งฝน=12 Core= 9.7 km.
UDN000582,(3008-40) บ้านเชียง - (3008-92) บ้านเชียง4=Optic 12 Core DW = 0.866 km.
UDN000639,(3008-40) ME บ้านเชียง - (3008-169) เทศบาลบ้านเชียง=12 Core= 1.36 km.
UDN000641,(3008-40) ME บ้านเชียง - (3008-172) บ้านอ้อมแก้ว=12 Core= 1.76 km.
UDN000836,(3008-40) บ้านเชียง - (3008-89) บ้านเชียง3=Optic 12 Core DW = 1.23 km.
UDN001209,(3008-40) บ้านเชียง - (3008-77) บ้านดงเย็น=Optic 12 Core DW = 3.7 km.
UDN001260,(3008-42) ME หนองเม็ก - (3008-40) ME บ้านเชียง=Optic 12 Core DW = 11.82 km.";
    }
else if($message == "3008-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000067,(3008-37) โรงพยาบาลหนองหาน - (3008-41) บ้านหนองบ่อ=Optic 12 Core DW = 3.7 km.
UDN000562,(3008-41) หนองบ่อ - (3008-82) บ้านไผ่น้อย=Optic 12 Core DW = 4.075 km.
UDN000563,(3008-41) หนองบ่อ - (3008-85) โพนยอ=Optic 12 Core DW = 4.062 km.
UDN001038,(3008-41) บ้านหนองบ่อ - (3008-78) บ้านดงบาก=12 Core= 6.8 km.
UDN001754,(3008-41) บ้านหนองบ่อ - (3008-182) บ้านหนองบ่อ 2=Optic 12 Core DW = 1.045 km.";
    }
else if($message == "3008-42"){
          $arrayPostData['messages'][0]['text'] = "UDN000068,(BJ) BJ Mainroot อุดรคอนโดเทล-สว่างแดนดิน - (3008-42) หนองเม็ก=12 Core= 0.433 km.
UDN000514,(3008-42) หนองเม็ก - (3008-56) หนองลาด=Optic 12 Core DW = 4.9 km.
UDN000516,(3008-42) หนองเม็ก - (3008-60) หนองเม็ก2=Optic 12 Core DW = 0.3 km.
UDN000903,(3008-42) หนองเม็ก - (3008-69) บ้านหนองนกทา=Optic 12 Core DW = 4 km.
UDN001260,(3008-42) ME หนองเม็ก - (3008-40) ME บ้านเชียง=Optic 12 Core DW = 11.82 km.";
    }
else if($message == "3008-43"){
          $arrayPostData['messages'][0]['text'] = "UDN000069,(3008-38) ปั๊มบางจาก - (3008-43) บ้านเชียงงาม=Optic 12 Core DW = 1.04 km.
UDN000635,(3008-43) บ้านเชียงงาม - (3008-158) บ้านหนองงิ้ว=Optic 12 Core DW = 4.71 km.
UDN001366,(3008-43) เชียงงาม - (3008-177) เชียงงาม2=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3008-44"){
        $arrayPostData['messages'][0]['text'] = "UDN000070,(3008-40) บ้านเชียง - (3008-44) บ้านเชียง2=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3008-45"){
          $arrayPostData['messages'][0]['text'] = "UDN000066,(3008-45) บ้านปูลู - (3008-40) บ้านเชียง=12 Core= 4.9 km.
UDN000395,(BJ) BJ Mainroot อุดรคอนโดเทล-สว่างแดนดิน - (3008-45) บ้านปูลู=Optic 12 Core DW = 1 km.
UDN000446,(3008-45) บ้านปูลู - (3008-50) บ้านยา2=Optic 12 Core DW = 2.704 km.";
    }
else if($message == "3008-46"){
          $arrayPostData['messages'][0]['text'] = "UDN000415,(SJ) หัวต่อ meหนองหาน - (3008-46) บ้านม่วง=Optic 12 Core DW = 1.8 km.
UDN000555,(3008-46) บ้านม่วง - (3008-81) ป่าก้าวหนองหาน=12 Core= 5.465 km.
UDN001118,(3008-46) บ้านม่วง - (3008-88) บ้านม่วงหนองหาน2=Optic 12 Core DW = 0.829 km.";
    }
else if($message == "3008-47"){
          $arrayPostData['messages'][0]['text'] = "UDN000412,(SJ) SJ mainroute อุดรคอนโดเทล-สว่างแดนดิน - (3008-47) บ้านหนองตาล=Optic 12 Core DW = 0.71 km.
UDN000439,(3008-47) บ้านหนองตาล - (3008-48) บ้านดงคำ=Optic 12 Core DW = 2.632 km.
UDN000486,(3008-47) บ้านหนองตาล - (3008-54) บ้านโคกพัฒนา=Optic 12 Core DW = 4.1 km.
UDN000624,(3008-47) นิคมหนองตาล - (3008-144) สระคาม=Optic 12 Core DW = 2.11 km.
UDN000640,(3008-47) นิคมหนองตาล - (3008-171) นิคมหนองตาล 2=Optic 12 Core DW = 1.21 km.
UDN001195,(3008-47) นิคมหนองตาล - (3033-296) บ้านหนองแก=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3008-48"){
          $arrayPostData['messages'][0]['text'] = "UDN000439,(3008-47) บ้านหนองตาล - (3008-48) บ้านดงคำ=Optic 12 Core DW = 2.632 km.
UDN000900,(3008-48) บ้านดงคำ - (3008-104) โคกสว่างหนองหาน=Optic 12 Core DW = 3.1 km.
UDN001905,(3008-48) บ้านดงคำ - (3033-362) บ้านหนองไผ่คำ หมู่12=Optic 12 Core DW = 2.62 km.";
    }
else if($message == "3008-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000445,(3008-50) บ้านยา2 - (3008-49) บ้านยา=Optic 12 Core DW = 2.121 km.
UDN000459,(3008-49) บ้านยา - (3006-37) บ้านดงบัง (ไชยวาน)=Optic 12 Core DW = 4.503 km.
UDN000485,(3008-49) บ้านยา - (3008-53) บ้านหนองสระปลา=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3008-50"){
          $arrayPostData['messages'][0]['text'] = "UDN000445,(3008-50) บ้านยา2 - (3008-49) บ้านยา=Optic 12 Core DW = 2.121 km.
UDN000446,(3008-45) บ้านปูลู - (3008-50) บ้านยา2=Optic 12 Core DW = 2.704 km.
UDN000489,(3008-50) บ้านยา2 - (3008-55) บ้านธาตุ (หนองหาน)=Optic 12 Core DW = 3.4 km.
UDN001185,(BJ) อุดรคอนโดเทล - สว่างแดนดิน - (3008-50) บ้านยา 2=Optic 12 Core DW = 1.41 km.";
    }
else if($message == "3008-51"){
          $arrayPostData['messages'][0]['text'] = "UDN000466,(3008-37) ME หนองหาน - (3008-51) บ้านหนองบัวแดง=Optic 12 Core DW = 5.556 km.
UDN000467,(3008-51) บ้านหนองบัวแดง - (3008-52) บ้านหนองไผ่=Optic 12 Core DW = 3.5 km.
UDN000517,(3008-51) บ้านหนองบัวแดง - (3008-59) หนองสระหนาย=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3008-52"){
        $arrayPostData['messages'][0]['text'] = "UDN000467,(3008-51) บ้านหนองบัวแดง - (3008-52) บ้านหนองไผ่=Optic 12 Core DW = 3.5 km.";
    }
else if($message == "3008-53"){
        $arrayPostData['messages'][0]['text'] = "UDN000485,(3008-49) บ้านยา - (3008-53) บ้านหนองสระปลา=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3008-54"){
          $arrayPostData['messages'][0]['text'] = "UDN000486,(3008-47) บ้านหนองตาล - (3008-54) บ้านโคกพัฒนา=Optic 12 Core DW = 4.1 km.
UDN000625,(3008-54) บ้านโคก - (3008-145) บ้านดงยางเดียว=Optic 12 Core DW = 1.66 km.
UDN000958,(3008-54) บ้านโคกพัฒนา - (3008-76) บ้านทุ่งยั้ง=Optic 12 Core DW = 1.15 km.
UDN001033,(3008-54) บ้านโคกพัฒนา - (3008-74) หนองสองห้อง(หนองหาน)=Optic 12 Core DW = 2.2 km.
UDN001122,(3008-54) บ้านโคกพัฒนา - (3008-76) บ้านทุ่งยั่ง=Optic 12 Core DW = 1.11 km.";
    }
else if($message == "3008-55"){
          $arrayPostData['messages'][0]['text'] = "UDN000489,(3008-50) บ้านยา2 - (3008-55) บ้านธาตุ (หนองหาน)=Optic 12 Core DW = 3.4 km.
UDN000499,(3008-55) บ้านธาตุ (หนองหาน) - (3008-58) บ้านดอน=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3008-56"){
          $arrayPostData['messages'][0]['text'] = "UDN000514,(3008-42) หนองเม็ก - (3008-56) หนองลาด=Optic 12 Core DW = 4.9 km.
UDN000515,(3008-56) หนองลาด - (3008-57) หนองกุง=Optic 12 Core DW = 6.1 km.
UDN000782,(3008-56) บ้านหนองลาด - (3008-161) คำผักกูด=Optic 12 Core DW = 2.7 km.
UDN001757,(3008-56) หนองลาด - (3008-188) หนองลาด 2=Optic 12 Core DW = 1.092 km.";
    }
else if($message == "3008-57"){
          $arrayPostData['messages'][0]['text'] = "UDN000515,(3008-56) หนองลาด - (3008-57) หนองกุง=Optic 12 Core DW = 6.1 km.
UDN000586,(3007-39) MEทุ่งฝน - (3008-57) หนองกุง=12 Core= 12 km.
UDN001397,(3008-57) หนองกุง - (3007-41) บ้านคำเจริญ ต.ทุ่งใหญ่=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3008-58"){
          $arrayPostData['messages'][0]['text'] = "UDN000499,(3008-55) บ้านธาตุ (หนองหาน) - (3008-58) บ้านดอน=Optic 12 Core DW = 1.8 km.
UDN000837,(3008-58) บ้านดอน - (3008-93) บ้านธาตุหนองหาน2=Optic 12 Core DW = 0.945 km.";
    }
else if($message == "3008-59"){
        $arrayPostData['messages'][0]['text'] = "UDN000517,(3008-51) บ้านหนองบัวแดง - (3008-59) หนองสระหนาย=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3008-60"){
          $arrayPostData['messages'][0]['text'] = "UDN000516,(3008-42) หนองเม็ก - (3008-60) หนองเม็ก2=Optic 12 Core DW = 0.3 km.
UDN000574,(3008-60) หนองเม็ก2 - (3008-90) หนองเม็ก3=Optic 12 Core DW = 2.36 km.
UDN000825,(3008-60) หนองเม็ก2 - (3008-102) โคกสูง=Optic 12 Core DW = 4 km.
UDN001032,(3008-60) หนองเม็ก2 - (3008-69) บ้านหนองนกทา=Optic 12 Core DW = 4 km.";
    }
else if($message == "3008-68"){
          $arrayPostData['messages'][0]['text'] = "UDN000626,(3008-68) บ้านผักตบ - (3008-146) บ้านดอนแคน=Optic 12 Core DW = 1.34 km.
UDN000957,(3008-68) บ้านผักตบ - (3008-70) บ้านนาฮัง=Optic 12 Core DW = 3.65 km.
UDN001204,(3008-68) ผักตบ - (3008-125) หนองบัวน้อย=Optic 12 Core DW = 4.9 km.
UDN001254,(SJ) SJ ประจักษ์ศิลปาคม - หนองหาน - (3008-68) ผักตบ=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3008-69"){
          $arrayPostData['messages'][0]['text'] = "UDN000903,(3008-42) หนองเม็ก - (3008-69) บ้านหนองนกทา=Optic 12 Core DW = 4 km.
UDN001032,(3008-60) หนองเม็ก2 - (3008-69) บ้านหนองนกทา=Optic 12 Core DW = 4 km.";
    }
else if($message == "3008-70"){
          $arrayPostData['messages'][0]['text'] = "UDN000833,(3008-70) บ้านนาฮัง - (3008-79) บ้านหนองกอบง=Optic 12 Core DW = 2.525 km.
UDN000901,(3008-70) บ้านนาฮัง - (3008-107) wireless บ้านนาฮัง=Optic 12 Core DW = 1.6 km.
UDN000957,(3008-68) บ้านผักตบ - (3008-70) บ้านนาฮัง=Optic 12 Core DW = 3.65 km.
UDN001031,(3008-79) บ้านหนองกอบง - (3008-70) บ้านนาฮัง=Optic 12 Core DW = 2.525 km.";
    }
else if($message == "3008-72"){
          $arrayPostData['messages'][0]['text'] = "UDN000545,(3008-72) บ้านพังงู - (3008-80) บ้านพังงู2=Optic 12 Core DW = 2.212 km.
UDN000578,(3008-72) พังงู - (3008-91) บ้านนาดี=Optic 12 Core DW = 1.848 km.
UDN001030,(3008-72) บ้านพังงู - (3008-87) บ้านพังซ่อน=Optic 12 Core DW = 3.017 km.
UDN001123,(SJ) SJ Meกุมภวาปี-Meหนองหาน - (3008-72) บ้านพังงู=Optic 12 Core DW = 2 km.";
    }
else if($message == "3008-74"){
          $arrayPostData['messages'][0]['text'] = "UDN000627,(3008-74) หนองสองห้อง(หนองหาน) - (3008-147) บ้านหนองแห้ว=Optic 12 Core DW = 2.06 km.
UDN001003,(3008-74) หนองสองห้อง(หนองหาน) - (3008-119) ศรีพัฒนา=Optic 12 Core DW = 0.85 km.
UDN001033,(3008-54) บ้านโคกพัฒนา - (3008-74) หนองสองห้อง(หนองหาน)=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3008-76"){
          $arrayPostData['messages'][0]['text'] = "UDN000958,(3008-54) บ้านโคกพัฒนา - (3008-76) บ้านทุ่งยั้ง=Optic 12 Core DW = 1.15 km.
UDN001122,(3008-54) บ้านโคกพัฒนา - (3008-76) บ้านทุ่งยั่ง=Optic 12 Core DW = 1.11 km.";
    }
else if($message == "3008-77"){
        $arrayPostData['messages'][0]['text'] = "UDN001209,(3008-40) บ้านเชียง - (3008-77) บ้านดงเย็น=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3008-78"){
          $arrayPostData['messages'][0]['text'] = "UDN000558,(3008-78) บ้านดงบาก - (3008-83) บ้านเพ็ก=Optic 12 Core DW = 2.763 km.
UDN001038,(3008-41) บ้านหนองบ่อ - (3008-78) บ้านดงบาก=12 Core= 6.8 km.
UDN001446,(3008-78) บ้านดงบาก - (3008-186) บ้านดงบาก2=Optic 12 Core DW = 0.86 km.";
    }
else if($message == "3008-79"){
          $arrayPostData['messages'][0]['text'] = "UDN000833,(3008-70) บ้านนาฮัง - (3008-79) บ้านหนองกอบง=Optic 12 Core DW = 2.525 km.
UDN001031,(3008-79) บ้านหนองกอบง - (3008-70) บ้านนาฮัง=Optic 12 Core DW = 2.525 km.";
    }
else if($message == "3008-80"){
          $arrayPostData['messages'][0]['text'] = "UDN000545,(3008-72) บ้านพังงู - (3008-80) บ้านพังงู2=Optic 12 Core DW = 2.212 km.
UDN000611,(3008-80) บ้านพังงู - (3008-113) บ้านดอนกลาง=Optic 12 Core DW = 1.824 km.
UDN001750,(3008-80) พังงู2 - (3008-108) พังงู3=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3008-81"){
          $arrayPostData['messages'][0]['text'] = "UDN000555,(3008-46) บ้านม่วง - (3008-81) ป่าก้าวหนองหาน=12 Core= 5.465 km.
UDN000750,(3008-81) ป่าก้าว หนองหาน - (3008-165) กระพี้=Optic 12 Core DW = 2.43 km.
UDN001120,(3008-81) ป่าก้าวหนองหาน - (3008-97) หนองกุงหนองหาน=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3008-82"){
        $arrayPostData['messages'][0]['text'] = "UDN000562,(3008-41) หนองบ่อ - (3008-82) บ้านไผ่น้อย=Optic 12 Core DW = 4.075 km.";
    }
else if($message == "3008-83"){
          $arrayPostData['messages'][0]['text'] = "UDN000558,(3008-78) บ้านดงบาก - (3008-83) บ้านเพ็ก=Optic 12 Core DW = 2.763 km.
UDN000613,(3008-83) บ้านเพ็ก - (3008-123) บ้านหายโศก=Optic 12 Core DW = 2.46 km.
UDN000777,(3008-83) บ้านเพ็ก - (3008-122) ดงบาก=Optic 12 Core DW = 3.8 km.";
    }
else if($message == "3008-85"){
        $arrayPostData['messages'][0]['text'] = "UDN000563,(3008-41) หนองบ่อ - (3008-85) โพนยอ=Optic 12 Core DW = 4.062 km.";
    }
else if($message == "3008-86"){
          $arrayPostData['messages'][0]['text'] = "UDN000776,(3008-86) โคกถาวร - (3008-121) บ้านเรืองชัย=Optic 12 Core DW = 3.663 km.
UDN000783,(3008-86) โคกถาวร - (3008-162) ค้อน้อยทรายงาม=Optic 12 Core DW = 3.57 km.
UDN000834,(3008-86) โคกถาวร - (3008-87) บ้านพังซ่อน=Optic 12 Core DW = 3.017 km.
UDN001652,(SJ) MEกุมภวาปี-Meหนองหาน - (3008-86) โคกถาวร=Optic 12 Core DW = 2.303 km.";
    }
else if($message == "3008-87"){
          $arrayPostData['messages'][0]['text'] = "UDN000834,(3008-86) โคกถาวร - (3008-87) บ้านพังซ่อน=Optic 12 Core DW = 3.017 km.
UDN001030,(3008-72) บ้านพังงู - (3008-87) บ้านพังซ่อน=Optic 12 Core DW = 3.017 km.";
    }
else if($message == "3008-88"){
          $arrayPostData['messages'][0]['text'] = "UDN001118,(3008-46) บ้านม่วง - (3008-88) บ้านม่วงหนองหาน2=Optic 12 Core DW = 0.829 km.
UDN001756,(3008-88) บ้านม่วงหนองหาน2 - (3008-187) บ้านม่วงหนองหาน3=Optic 12 Core DW = 1 km.";
    }
else if($message == "3008-89"){
          $arrayPostData['messages'][0]['text'] = "UDN000612,(3008-89) บ้านเชียง 3 - (3008-114) บ้านเชียงหมู่2=Optic 12 Core DW = 1.746 km.
UDN000836,(3008-40) บ้านเชียง - (3008-89) บ้านเชียง3=Optic 12 Core DW = 1.23 km.";
    }
else if($message == "3008-90"){
          $arrayPostData['messages'][0]['text'] = "UDN000574,(3008-60) หนองเม็ก2 - (3008-90) หนองเม็ก3=Optic 12 Core DW = 2.36 km.
UDN000717,(3008-90) หนองเม็ก3 - (3008-101) บ้านดูน=Optic 12 Core DW = 3.068 km.";
    }
else if($message == "3008-91"){
          $arrayPostData['messages'][0]['text'] = "UDN000578,(3008-72) พังงู - (3008-91) บ้านนาดี=Optic 12 Core DW = 1.848 km.
UDN000775,(3008-91) บ้านนาดี - (3008-116) บ้านม่วง=Optic 12 Core DW = 2.421 km.";
    }
else if($message == "3008-92"){
        $arrayPostData['messages'][0]['text'] = "UDN000582,(3008-40) บ้านเชียง - (3008-92) บ้านเชียง4=Optic 12 Core DW = 0.866 km.";
    }
else if($message == "3008-93"){
          $arrayPostData['messages'][0]['text'] = "UDN000837,(3008-58) บ้านดอน - (3008-93) บ้านธาตุหนองหาน2=Optic 12 Core DW = 0.945 km.
UDN001184,(3008-93) บ้านธาตุ - (3008-94) บ้านยา=Optic 12 Core DW = 1.98 km.";
    }
else if($message == "3008-94"){
        $arrayPostData['messages'][0]['text'] = "UDN001184,(3008-93) บ้านธาตุ - (3008-94) บ้านยา=Optic 12 Core DW = 1.98 km.";
    }
else if($message == "3008-97"){
          $arrayPostData['messages'][0]['text'] = "UDN000780,(3008-97) หนองกุง(หนองหาน) - (3008-139) ดอนบาก=Optic 12 Core DW = 1.85 km.
UDN001120,(3008-81) ป่าก้าวหนองหาน - (3008-97) หนองกุงหนองหาน=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3009-102"){
        $arrayPostData['messages'][0]['text'] = "UDN001610,(3009-44) ศูนย์ราชการหนองวัวซอ - (3009-102) ศูนย์ราชการหนองวัวซอ2=Optic 12 Core DW = 0.98 km.";
    }
else if($message == "3009-103"){
        $arrayPostData['messages'][0]['text'] = "UDN001760,(3009-37) บ้านหมากหญ้า - (3009-103) บ้านหมากหญ้า3=Optic 12 Core DW = 0.91 km.";
    }
else if($message == "3009-105"){
        $arrayPostData['messages'][0]['text'] = "UDN001761,(3009-62) กุดหมากไฟ - (3009-105) กุดหมากไฟ2=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3009-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000019,(3009-37) บ้านหมากหญ้า - (3009-42) หนองอ้อ=Optic 12 Core DW = 8.895 km.
UDN000071,(3001-48) หนองวัวซอ - (3009-37) บ้านหมากหญ้า=Optic 12 Core DW = 5.096 km.
UDN001760,(3009-37) บ้านหมากหญ้า - (3009-103) บ้านหมากหญ้า3=Optic 12 Core DW = 0.91 km.
UDN001763,(3009-37) บ้านหมากหญ้า - (3009-90) ต.หมากหญ้า บ้านผาสิงห์=12 Core= 10.694 km.
UDN001765,(3009-37) บ้านหมากหญ้า - (3009-93) บ้านหมากหญ้า2=Optic 12 Core DW = 0.86 km.";
    }
else if($message == "3009-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000072,(3032-50) หนองวัวซอ2 - (3009-38) หนองวัวซอ3=Optic 12 Core DW = 0.718 km.
UDN000468,(3009-38) หนองวัวซอ3 - (3009-47) บ้านโนนสมบุรณ์(หนองวัวซอ)=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3009-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000073,(3032-50) หนองวัวซอ2 - (3009-39) บ้านโคกก่อง=Optic 12 Core DW = 2.699 km.
UDN000074,(3009-39) บ้านโคกก่อง - (3009-40) หนองแวงยาว=Optic 12 Core DW = 1.43 km.";
    }
else if($message == "3009-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000074,(3009-39) บ้านโคกก่อง - (3009-40) หนองแวงยาว=Optic 12 Core DW = 1.43 km.
UDN000548,(3009-40) หนองแวงยาว - (3009-60) หนองบัวบาน=12 Core= 6.3 km.";
    }
else if($message == "3009-41"){
        $arrayPostData['messages'][0]['text'] = "UDN000075,(3001-48) หนองวัวซอ - (3009-41) ตลาดหนองวัวซอ=Optic 12 Core DW = 0.666 km.";
    }
else if($message == "3009-42"){
          $arrayPostData['messages'][0]['text'] = "UDN000019,(3009-37) บ้านหมากหญ้า - (3009-42) หนองอ้อ=Optic 12 Core DW = 8.895 km.
UDN000431,(3009-42) หนองอ้อ - (3009-43) หนองอ้อ 2=Optic 12 Core DW = 0.575 km.
UDN000527,(3009-42) หนองอ้อ - (3009-49) หนองอ้อ3=Optic 12 Core DW = 2.44 km.
UDN000561,(3009-42) หนองอ้อ - (3009-63) บ้านโนนสำราญ=Optic 12 Core DW = 2.463 km.
UDN001767,(3009-42) หนองอ้อ - (3009-95) หนองอ้อ3=Optic 12 Core DW = 0.81 km.";
    }
else if($message == "3009-43"){
          $arrayPostData['messages'][0]['text'] = "UDN000426,(3009-43) หนองอ้อ 2 - (3009-44) ศูนย์ราชการ อำเภอหนองวัวซอ=Optic 12 Core DW = 1.989 km.
UDN000431,(3009-42) หนองอ้อ - (3009-43) หนองอ้อ 2=Optic 12 Core DW = 0.575 km.";
    }
else if($message == "3009-44"){
          $arrayPostData['messages'][0]['text'] = "UDN000426,(3009-43) หนองอ้อ 2 - (3009-44) ศูนย์ราชการ อำเภอหนองวัวซอ=Optic 12 Core DW = 1.989 km.
UDN000432,(3009-44) ศูนย์ราชการ อำเภอหนองวัวซอ - (3009-45) บ้านโนนหวาย=Optic 12 Core DW = 1.012 km.
UDN001610,(3009-44) ศูนย์ราชการหนองวัวซอ - (3009-102) ศูนย์ราชการหนองวัวซอ2=Optic 12 Core DW = 0.98 km.";
    }
else if($message == "3009-45"){
          $arrayPostData['messages'][0]['text'] = "UDN000432,(3009-44) ศูนย์ราชการ อำเภอหนองวัวซอ - (3009-45) บ้านโนนหวาย=Optic 12 Core DW = 1.012 km.
UDN000642,(3009-45) โนนหวาย - (3009-81) หนองเม็กหนองวัวชอ=Optic 12 Core DW = 3.88 km.
UDN001039,(3009-45) โนนหวาย - (3009-55) อูบมุง=Optic 12 Core DW = 5 km.
UDN001189,(3009-45) บ้านโนนหวาย - (3009-68) โคกหนองแซง=Optic 12 Core DW = 3.63 km.
UDN001762,(3009-45) บ้านโนนหวาย - (3009-89) ศรีสว่างอารมณ์=12 Core= 1.465 km.";
    }
else if($message == "3009-47"){
          $arrayPostData['messages'][0]['text'] = "UDN000468,(3009-38) หนองวัวซอ3 - (3009-47) บ้านโนนสมบุรณ์(หนองวัวซอ)=Optic 12 Core DW = 1.6 km.
UDN001766,(3009-47) บ้านโนนสมบุรณ์(หนองวัวซอ) - (3009-94) บ้านโนนสมบุรณ์(หนองวัวซอ) 2=Optic 12 Core DW = 0.87 km.";
    }
else if($message == "3009-48"){
          $arrayPostData['messages'][0]['text'] = "UDN000469,() SJ บ้านหมากหญ้า- โนนหวาย - (3009-48) บ้านหนองแสง(หนองวัวซอ)=Optic 12 Core DW = 3.5 km.
UDN000572,(3009-48) บ้านหนองแสง(หนองวัวซอ) - (3009-67) คำหมากคูณ=Optic 12 Core DW = 1.941 km.
UDN001653,(3009-48) บ้านหนองแสง(หนองวัวซอ) - (3009-69) โนนสมบูรณ์=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3009-49"){
        $arrayPostData['messages'][0]['text'] = "UDN000527,(3009-42) หนองอ้อ - (3009-49) หนองอ้อ3=Optic 12 Core DW = 2.44 km.";
    }
else if($message == "3009-55"){
          $arrayPostData['messages'][0]['text'] = "UDN000546,(3009-55) อูบมุง - (3009-61) ห้วยไร่=Optic 12 Core DW = 2.143 km.
UDN000720,(3009-55) อูบมุง - (3009-72) เสาเล้า=Optic 12 Core DW = 2.06 km.
UDN001039,(3009-45) โนนหวาย - (3009-55) อูบมุง=Optic 12 Core DW = 5 km.
UDN001068,(3009-72) บ้านเสาเล้า - (3009-55) อูบมุง=Optic 12 Core DW = 2.1 km.
UDN001125,(3009-55) อูบมุง - (3009-65) โคกผักหอม=Optic 12 Core DW = 4.881 km.
UDN001276,(3009-55) อูบมุง - (3009-84) โนนชัยศรี=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3009-59"){
          $arrayPostData['messages'][0]['text'] = "UDN000959,(3009-78) บ้านเลา - (3009-59) หนองแซงสร้อย=Optic 12 Core DW = 5.32 km.
UDN001186,(SJ) SJ หนองวัวซอ - กุดจับ - (3009-59) หนองแซงสร้อย=Optic 12 Core DW = 5.16 km.";
    }
else if($message == "3009-60"){
        $arrayPostData['messages'][0]['text'] = "UDN000548,(3009-40) หนองแวงยาว - (3009-60) หนองบัวบาน=12 Core= 6.3 km.";
    }
else if($message == "3009-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000546,(3009-55) อูบมุง - (3009-61) ห้วยไร่=Optic 12 Core DW = 2.143 km.
UDN000550,(3009-61) ห้วยไร่ - (3009-62) กุดหมากไฟ=Optic 12 Core DW = 3.111 km.";
    }
else if($message == "3009-62"){
          $arrayPostData['messages'][0]['text'] = "UDN000550,(3009-61) ห้วยไร่ - (3009-62) กุดหมากไฟ=Optic 12 Core DW = 3.111 km.
UDN000663,(3009-62) บ้านกุดหมากไฟ - (3009-79) บ้านโคกล่าม=Optic 12 Core DW = 3.36 km.
UDN001761,(3009-62) กุดหมากไฟ - (3009-105) กุดหมากไฟ2=Optic 12 Core DW = 3.2 km.
UDN001764,(3009-62) กุดหมากไฟ - (3009-91) โนนโพธิ์=12 Core= 1.065 km.";
    }
else if($message == "3009-63"){
        $arrayPostData['messages'][0]['text'] = "UDN000561,(3009-42) หนองอ้อ - (3009-63) บ้านโนนสำราญ=Optic 12 Core DW = 2.463 km.";
    }
else if($message == "3009-65"){
          $arrayPostData['messages'][0]['text'] = "UDN000643,(3009-65) บ้านโคกผักหอม - (3009-82) บ้านหนองบัวเงิน=Optic 12 Core DW = 3.09 km.
UDN001125,(3009-55) อูบมุง - (3009-65) โคกผักหอม=Optic 12 Core DW = 4.881 km.
UDN001279,(3009-65) โคกผักหอม - (3009-83) นาล้อม=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3009-66"){
          $arrayPostData['messages'][0]['text'] = "UDN000840,(3009-78) บ้านเลา - (3009-66) บ้านหนองแวงเดิด=Optic 12 Core DW = 2.359 km.
UDN000843,(3009-66) บ้านหนองแวงเดิด - (3009-78) บ้านเลา=Optic 12 Core DW = 3.17 km.";
    }
else if($message == "3009-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000572,(3009-48) บ้านหนองแสง(หนองวัวซอ) - (3009-67) คำหมากคูณ=Optic 12 Core DW = 1.941 km.
UDN000719,(3009-67) คำหมากคุณ - (3009-71) โคกสีแก้ว=Optic 12 Core DW = 1.895 km.";
    }
else if($message == "3009-68"){
          $arrayPostData['messages'][0]['text'] = "UDN000907,(3009-68) โคกหนองแซง - (3009-76) wireless เสาเล้า=Optic 12 Core DW = 1.7 km.
UDN001189,(3009-45) บ้านโนนหวาย - (3009-68) โคกหนองแซง=Optic 12 Core DW = 3.63 km.";
    }
else if($message == "3009-69"){
        $arrayPostData['messages'][0]['text'] = "UDN001653,(3009-48) บ้านหนองแสง(หนองวัวซอ) - (3009-69) โนนสมบูรณ์=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3009-71"){
        $arrayPostData['messages'][0]['text'] = "UDN000719,(3009-67) คำหมากคุณ - (3009-71) โคกสีแก้ว=Optic 12 Core DW = 1.895 km.";
    }
else if($message == "3009-72"){
          $arrayPostData['messages'][0]['text'] = "UDN000720,(3009-55) อูบมุง - (3009-72) เสาเล้า=Optic 12 Core DW = 2.06 km.
UDN001068,(3009-72) บ้านเสาเล้า - (3009-55) อูบมุง=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3009-73"){
        $arrayPostData['messages'][0]['text'] = "UDN000661,(SJ) SJ หนองวัวซอ-กุดจับ - (3009-73) บ้านน้ำพ่น=Optic 12 Core DW = 3.19 km.";
    }
else if($message == "3009-74"){
          $arrayPostData['messages'][0]['text'] = "UDN000662,(3009-74) บ้านหนองแซง - (3009-75) บ้านสามขา=Optic 12 Core DW = 1.67 km.
UDN001634,(3033-272) หลัก 18 - (3009-74) หนองแซงหนองวัวซอ=Optic 12 Core DW = 2.25 km.";
    }
else if($message == "3009-75"){
        $arrayPostData['messages'][0]['text'] = "UDN000662,(3009-74) บ้านหนองแซง - (3009-75) บ้านสามขา=Optic 12 Core DW = 1.67 km.";
    }
else if($message == "3009-76"){
        $arrayPostData['messages'][0]['text'] = "UDN000907,(3009-68) โคกหนองแซง - (3009-76) wireless เสาเล้า=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3009-78"){
          $arrayPostData['messages'][0]['text'] = "UDN000840,(3009-78) บ้านเลา - (3009-66) บ้านหนองแวงเดิด=Optic 12 Core DW = 2.359 km.
UDN000843,(3009-66) บ้านหนองแวงเดิด - (3009-78) บ้านเลา=Optic 12 Core DW = 3.17 km.
UDN000959,(3009-78) บ้านเลา - (3009-59) หนองแซงสร้อย=Optic 12 Core DW = 5.32 km.";
    }
else if($message == "3009-79"){
          $arrayPostData['messages'][0]['text'] = "UDN000663,(3009-62) บ้านกุดหมากไฟ - (3009-79) บ้านโคกล่าม=Optic 12 Core DW = 3.36 km.
UDN000664,(3009-79) บ้านโคกล่าม - (3009-80) บ้านหนองแวงจุมพล=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3009-80"){
          $arrayPostData['messages'][0]['text'] = "UDN000664,(3009-79) บ้านโคกล่าม - (3009-80) บ้านหนองแวงจุมพล=Optic 12 Core DW = 3.96 km.
UDN001277,(3009-80) หนองแวงจุมพล - (3009-85) หนองนาคำ2=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3009-81"){
          $arrayPostData['messages'][0]['text'] = "UDN000642,(3009-45) โนนหวาย - (3009-81) หนองเม็กหนองวัวชอ=Optic 12 Core DW = 3.88 km.
UDN001280,(3009-81) หนองเม็ก - (3009-87) ทุ่งห้วยทราย=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3009-82"){
        $arrayPostData['messages'][0]['text'] = "UDN000643,(3009-65) บ้านโคกผักหอม - (3009-82) บ้านหนองบัวเงิน=Optic 12 Core DW = 3.09 km.";
    }
else if($message == "3009-83"){
        $arrayPostData['messages'][0]['text'] = "UDN001279,(3009-65) โคกผักหอม - (3009-83) นาล้อม=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3009-84"){
          $arrayPostData['messages'][0]['text'] = "UDN001276,(3009-55) อูบมุง - (3009-84) โนนชัยศรี=Optic 12 Core DW = 3.7 km.
UDN001278,(3009-84) โนนชัยศรี - (3009-86) ดงบัง=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3009-85"){
        $arrayPostData['messages'][0]['text'] = "UDN001277,(3009-80) หนองแวงจุมพล - (3009-85) หนองนาคำ2=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3009-86"){
        $arrayPostData['messages'][0]['text'] = "UDN001278,(3009-84) โนนชัยศรี - (3009-86) ดงบัง=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3009-87"){
        $arrayPostData['messages'][0]['text'] = "UDN001280,(3009-81) หนองเม็ก - (3009-87) ทุ่งห้วยทราย=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3009-89"){
        $arrayPostData['messages'][0]['text'] = "UDN001762,(3009-45) บ้านโนนหวาย - (3009-89) ศรีสว่างอารมณ์=12 Core= 1.465 km.";
    }
else if($message == "3009-90"){
        $arrayPostData['messages'][0]['text'] = "UDN001763,(3009-37) บ้านหมากหญ้า - (3009-90) ต.หมากหญ้า บ้านผาสิงห์=12 Core= 10.694 km.";
    }
else if($message == "3009-91"){
        $arrayPostData['messages'][0]['text'] = "UDN001764,(3009-62) กุดหมากไฟ - (3009-91) โนนโพธิ์=12 Core= 1.065 km.";
    }
else if($message == "3009-92"){
        $arrayPostData['messages'][0]['text'] = "UDN001445,(3033-319) บ้านดงเจริญ - (3009-92) บ้านหนองอ้อน้อย=Optic 12 Core DW = 5.62 km.";
    }
else if($message == "3009-93"){
        $arrayPostData['messages'][0]['text'] = "UDN001765,(3009-37) บ้านหมากหญ้า - (3009-93) บ้านหมากหญ้า2=Optic 12 Core DW = 0.86 km.";
    }
else if($message == "3009-94"){
        $arrayPostData['messages'][0]['text'] = "UDN001766,(3009-47) บ้านโนนสมบุรณ์(หนองวัวซอ) - (3009-94) บ้านโนนสมบุรณ์(หนองวัวซอ) 2=Optic 12 Core DW = 0.87 km.";
    }
else if($message == "3009-95"){
        $arrayPostData['messages'][0]['text'] = "UDN001767,(3009-42) หนองอ้อ - (3009-95) หนองอ้อ3=Optic 12 Core DW = 0.81 km.";
    }
else if($message == "3010-101"){
          $arrayPostData['messages'][0]['text'] = "UDN001152,(3010-96) ผาสุก - (3010-101) บ้านตาลเลียนทุ่งป่าแพง=Optic 12 Core DW = 3.7 km.
UDN001153,(3010-101) บ้านตาลเลียนทุ่งป่าแพง - (3010-102) ตาลเลียนน้อย=Optic 12 Core DW = 1 km.
UDN001533,(3010-101) บ้านตาลเลียนป่าทุ่งแพง - (3012-123) บ้านคำบอนเวียงชัย=12 Core= 5.358 km.";
    }
else if($message == "3010-102"){
        $arrayPostData['messages'][0]['text'] = "UDN001153,(3010-101) บ้านตาลเลียนทุ่งป่าแพง - (3010-102) ตาลเลียนน้อย=Optic 12 Core DW = 1 km.";
    }
else if($message == "3010-103"){
          $arrayPostData['messages'][0]['text'] = "UDN001622,(3010-103) โนนธาตุ ต.สร้างก่อ - (3010-118) ผังสี่ใหม่=Optic 12 Core DW = 2.9 km.
UDN001623,(3010-103) โนนธาตุ ต.สร้างก่อ - (3010-108) นาอ้ายใหญ่=Optic 12 Core DW = 1.2 km.
UDN001768,(3010-118) ผังสี่ใหม่ - (3010-103) โนนธาตุ=Optic 12 Core DW = 3.11 km.";
    }
else if($message == "3010-104"){
          $arrayPostData['messages'][0]['text'] = "UDN001570,(3010-104) บ้านดงธาตุ - (3010-71) บ้านน้อยลำภู=Optic 12 Core DW = 4.5 km.
UDN001621,(3010-88) ดงหวาย - (3010-104) ดงธาตุ=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3010-108"){
        $arrayPostData['messages'][0]['text'] = "UDN001623,(3010-103) โนนธาตุ ต.สร้างก่อ - (3010-108) นาอ้ายใหญ่=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3010-109"){
          $arrayPostData['messages'][0]['text'] = "UDN001155,(3010-109) บ้านถ้ำเต่า - (3010-97) ผัง 5=Optic 12 Core DW = 3.2 km.
UDN001156,(3010-109) บ้านถ้ำเต่า - (3010-113) ผัง 1=Optic 12 Core DW = 2 km.
UDN001162,(3010-83) บ้านผัง 4 เก่า - (3010-109) บ้านถ้ำเต่า=Optic 12 Core DW = 4.3 km.
UDN001770,(3010-109) ถ้ำเต่า - (3010-121) ต.ขอนยูง บ้านผัง 2 ใหม่=Optic 12 Core DW = 2.93 km.";
    }
else if($message == "3010-113"){
          $arrayPostData['messages'][0]['text'] = "UDN001156,(3010-109) บ้านถ้ำเต่า - (3010-113) ผัง 1=Optic 12 Core DW = 2 km.
UDN001157,(3010-113) ผัง 1 - (3010-98) เหล่าตำแย=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3010-118"){
          $arrayPostData['messages'][0]['text'] = "UDN001622,(3010-103) โนนธาตุ ต.สร้างก่อ - (3010-118) ผังสี่ใหม่=Optic 12 Core DW = 2.9 km.
UDN001768,(3010-118) ผังสี่ใหม่ - (3010-103) โนนธาตุ=Optic 12 Core DW = 3.11 km.";
    }
else if($message == "3010-119"){
        $arrayPostData['messages'][0]['text'] = "UDN001769,(3033-201) บ้านหนองแปน - (3010-119) ต.เชียงเพ็ง บ้านตาลโกน=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3010-121"){
        $arrayPostData['messages'][0]['text'] = "UDN001770,(3010-109) ถ้ำเต่า - (3010-121) ต.ขอนยูง บ้านผัง 2 ใหม่=Optic 12 Core DW = 2.93 km.";
    }
else if($message == "3010-122"){
        $arrayPostData['messages'][0]['text'] = "UDN001771,(3010-85) ขอนยูง - (3010-122) ขอนยูง2=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3010-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000076,(3033-40) บ้านหนองโอน - (3010-37) หัวขัว=12 Core= 9.765 km.
UDN000077,(3010-37) หัวขัว - (3010-38) กุดจับ1=Optic 12 Core DW = 4.407 km.
UDN001624,(3010-37) บ้านหัวขัว - (3010-51) บ้านข่า=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3010-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000077,(3010-37) หัวขัว - (3010-38) กุดจับ1=Optic 12 Core DW = 4.407 km.
UDN000078,(3010-38) กุดจับ1 - (3010-39) กุดจับ2=Optic 12 Core DW = 1.346 km.
UDN000382,(3010-38) กุดจับ1  - (3010-41) โรงพยาบาลกุดจับ=Optic 12 Core DW = 2 km.
UDN000667,(3010-38) กุดจับ1 - (3010-49) บ้านโนนสูง=12 Core= 7.22 km.
UDN000985,(3001-48) ME หนองวัวซอ - (3010-38) ME กุดจับ=12 Core= 26.419 km.
UDN001117,(3010-38) กุดจับ1 - (3010-47) การไฟฟ้ากุดจับ=Optic 12 Core DW = 0.9 km.
UDN001192,() ME กุดจับ - (3010-38) กุดจับ 1=Optic 12 Core DW = 0.44 km.";
    }
else if($message == "3010-39"){
        $arrayPostData['messages'][0]['text'] = "UDN000078,(3010-38) กุดจับ1 - (3010-39) กุดจับ2=Optic 12 Core DW = 1.346 km.";
    }
else if($message == "3010-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000381,(3010-41) โรงพยาบาลกุดจับ - (3010-40) บ้านหนองโน=Optic 12 Core DW = 2 km.
UDN000536,(3010-40) บ้านหนองโน - (3010-48) บ้านดงบัง(กุดจับ)=Optic 12 Core DW = 3.1 km.
UDN000846,(3010-40) บ้านหนองโน - (3010-53) wireless บ้านหนองโน=Optic 12 Core DW = 1.55 km.";
    }
else if($message == "3010-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000381,(3010-41) โรงพยาบาลกุดจับ - (3010-40) บ้านหนองโน=Optic 12 Core DW = 2 km.
UDN000382,(3010-38) กุดจับ1  - (3010-41) โรงพยาบาลกุดจับ=Optic 12 Core DW = 2 km.";
    }
else if($message == "3010-47"){
          $arrayPostData['messages'][0]['text'] = "UDN001117,(3010-38) กุดจับ1 - (3010-47) การไฟฟ้ากุดจับ=Optic 12 Core DW = 0.9 km.
UDN001160,(3010-47) การไฟฟ้ากุดจับ - (3010-84) บ้านโคกวิชัย=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3010-48"){
        $arrayPostData['messages'][0]['text'] = "UDN000536,(3010-40) บ้านหนองโน - (3010-48) บ้านดงบัง(กุดจับ)=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3010-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000667,(3010-38) กุดจับ1 - (3010-49) บ้านโนนสูง=12 Core= 7.22 km.
UDN000668,(3010-49) บ้านโนนสูง - (3010-50) บ้านโคกสว่าง=12 Core= 5.27 km.
UDN000909,(3010-49) โนนสูง - (3010-52) wireless หันเทา=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3010-50"){
          $arrayPostData['messages'][0]['text'] = "UDN000668,(3010-49) บ้านโนนสูง - (3010-50) บ้านโคกสว่าง=12 Core= 5.27 km.
UDN000968,(3010-50) บ้านโคกสว่าง - (3012-58) โนนสะอาด=Optic 12 Core DW = 2.82 km.
UDN001580,(3010-50) โคกสว่าง - (3010-68) บ้านดอนพิลา=Optic 12 Core DW = 2 km.";
    }
else if($message == "3010-51"){
        $arrayPostData['messages'][0]['text'] = "UDN001624,(3010-37) บ้านหัวขัว - (3010-51) บ้านข่า=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3010-52"){
          $arrayPostData['messages'][0]['text'] = "UDN000909,(3010-49) โนนสูง - (3010-52) wireless หันเทา=Optic 12 Core DW = 2.2 km.
UDN001617,(3010-52) wireless หันเทา - (3010-69) โคกเกษตร=Optic 12 Core DW = 2.4 km.
UDN001630,(3010-52) หันเทา - (3010-70) ผักกาดย่า=Optic 12 Core DW = 2.229 km.";
    }
else if($message == "3010-53"){
        $arrayPostData['messages'][0]['text'] = "UDN000846,(3010-40) บ้านหนองโน - (3010-53) wireless บ้านหนองโน=Optic 12 Core DW = 1.55 km.";
    }
else if($message == "3010-54"){
          $arrayPostData['messages'][0]['text'] = "UDN001158,(3010-54) สร้างก่อ - (3010-81) บ่อเงิน=Optic 12 Core DW = 1.1 km.
UDN001159,(3010-75) บ้านนาหนองทุ่ม - (3010-54) สร้างก่อ=12 Core= 7.3 km.
UDN001618,(3010-54) สร้างก่อ - (3010-78) โนนม่วง ต.ปะโค=Optic 12 Core DW = 4.8 km.";
    }
else if($message == "3010-55"){
        $arrayPostData['messages'][0]['text'] = "UDN001625,(3033-257) ห้วยหลวง - (3010-55) บ้านดงน้อย ต.เมืองเพีย=Optic 12 Core DW = 5.7 km.";
    }
else if($message == "3010-66"){
        $arrayPostData['messages'][0]['text'] = "UDN001498,(3010-67) บ้านหนองสร้างไพร - (3010-66) บ้านปะโค(กุดจับ)=Optic 12 Core DW = 2.024 km.";
    }
else if($message == "3010-67"){
          $arrayPostData['messages'][0]['text'] = "UDN001011,(SJ) SJ หัวต่อ โคกสว่าง ดอนพิลา - (3010-67) หนองสร้างไทร=Optic 12 Core DW = 1.2 km.
UDN001498,(3010-67) บ้านหนองสร้างไพร - (3010-66) บ้านปะโค(กุดจับ)=Optic 12 Core DW = 2.024 km.";
    }
else if($message == "3010-68"){
          $arrayPostData['messages'][0]['text'] = "UDN001012,(SJ) SJ - (3010-68) ดอนพิลา=Optic 12 Core DW = 0.85 km.
UDN001580,(3010-50) โคกสว่าง - (3010-68) บ้านดอนพิลา=Optic 12 Core DW = 2 km.";
    }
else if($message == "3010-69"){
        $arrayPostData['messages'][0]['text'] = "UDN001617,(3010-52) wireless หันเทา - (3010-69) โคกเกษตร=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3010-70"){
        $arrayPostData['messages'][0]['text'] = "UDN001630,(3010-52) หันเทา - (3010-70) ผักกาดย่า=Optic 12 Core DW = 2.229 km.";
    }
else if($message == "3010-71"){
          $arrayPostData['messages'][0]['text'] = "UDN001014,(3010-71) น้อยลำภู - (3010-90) ห้วยเชียง=Optic 12 Core DW = 4.5 km.
UDN001570,(3010-104) บ้านดงธาตุ - (3010-71) บ้านน้อยลำภู=Optic 12 Core DW = 4.5 km.";
    }
else if($message == "3010-73"){
          $arrayPostData['messages'][0]['text'] = "UDN001050,(3010-85) ขอนยูง - (3010-73) หนองฆ้องนาสีนวล=Optic 12 Core DW = 4.5 km.
UDN001150,(3010-85) ขอนยูง - (3010-73) หนองฆ้องนาสีนวล=Optic 12 Core DW = 4.5 km.
UDN001151,(3010-73) หนองฆ้องนาสีนวล - (3010-96) ผาสุก=Optic 12 Core DW = 2.1 km.
UDN001154,(3010-73) หนองฆ้องนาสีนวล - (3010-92) หนองเจริญ=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3010-74"){
        $arrayPostData['messages'][0]['text'] = "UDN001146,(3010-75) บ้านนาหนองทุ่ม - (3010-74) ดงหัน=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3010-75"){
          $arrayPostData['messages'][0]['text'] = "UDN001146,(3010-75) บ้านนาหนองทุ่ม - (3010-74) ดงหัน=Optic 12 Core DW = 1.6 km.
UDN001147,(3010-82) นิคมผัง 2 เก่า - (3010-75) บ้านนาหนองทุ่ม=Optic 12 Core DW = 2.6 km.
UDN001159,(3010-75) บ้านนาหนองทุ่ม - (3010-54) สร้างก่อ=12 Core= 7.3 km.
UDN001629,(3010-75) นาหนองทุ่ม - (3010-76) หนองคน=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3010-76"){
        $arrayPostData['messages'][0]['text'] = "UDN001629,(3010-75) นาหนองทุ่ม - (3010-76) หนองคน=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3010-77"){
        $arrayPostData['messages'][0]['text'] = "UDN001616,(SJ) SJ หัวต่อ สร้างก่อ โนนม่วง - (3010-77) โนนฐานะ=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3010-78"){
        $arrayPostData['messages'][0]['text'] = "UDN001618,(3010-54) สร้างก่อ - (3010-78) โนนม่วง ต.ปะโค=Optic 12 Core DW = 4.8 km.";
    }
else if($message == "3010-81"){
        $arrayPostData['messages'][0]['text'] = "UDN001158,(3010-54) สร้างก่อ - (3010-81) บ่อเงิน=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3010-82"){
          $arrayPostData['messages'][0]['text'] = "UDN001147,(3010-82) นิคมผัง 2 เก่า - (3010-75) บ้านนาหนองทุ่ม=Optic 12 Core DW = 2.6 km.
UDN001148,(3010-84) บ้านโคกวิชัย - (3010-82) นิคมผัง 2 เก่า=12 Core= 5.3 km.
UDN001161,(3010-82) นิคมผัง 2 เก่า - (3010-83) บ้านผัง 4 เก่า=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3010-83"){
          $arrayPostData['messages'][0]['text'] = "UDN001161,(3010-82) นิคมผัง 2 เก่า - (3010-83) บ้านผัง 4 เก่า=Optic 12 Core DW = 2.5 km.
UDN001162,(3010-83) บ้านผัง 4 เก่า - (3010-109) บ้านถ้ำเต่า=Optic 12 Core DW = 4.3 km.";
    }
else if($message == "3010-84"){
          $arrayPostData['messages'][0]['text'] = "UDN001148,(3010-84) บ้านโคกวิชัย - (3010-82) นิคมผัง 2 เก่า=12 Core= 5.3 km.
UDN001149,(3010-84) บ้านโคกวิชัย - (3010-85) ขอนยูง=Optic 12 Core DW = 1.4 km.
UDN001160,(3010-47) การไฟฟ้ากุดจับ - (3010-84) บ้านโคกวิชัย=Optic 12 Core DW = 4.7 km.
UDN001619,(3010-84) โคกวิชัย - (3010-87) กุดจับ หมู่ 12=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3010-85"){
          $arrayPostData['messages'][0]['text'] = "UDN001050,(3010-85) ขอนยูง - (3010-73) หนองฆ้องนาสีนวล=Optic 12 Core DW = 4.5 km.
UDN001149,(3010-84) บ้านโคกวิชัย - (3010-85) ขอนยูง=Optic 12 Core DW = 1.4 km.
UDN001150,(3010-85) ขอนยูง - (3010-73) หนองฆ้องนาสีนวล=Optic 12 Core DW = 4.5 km.
UDN001771,(3010-85) ขอนยูง - (3010-122) ขอนยูง2=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3010-87"){
          $arrayPostData['messages'][0]['text'] = "UDN001619,(3010-84) โคกวิชัย - (3010-87) กุดจับ หมู่ 12=Optic 12 Core DW = 2.2 km.
UDN001620,(3010-87) กุดจับ หมู่ 12 - (3010-88) ดงหวาย=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3010-88"){
          $arrayPostData['messages'][0]['text'] = "UDN001620,(3010-87) กุดจับ หมู่ 12 - (3010-88) ดงหวาย=Optic 12 Core DW = 1.9 km.
UDN001621,(3010-88) ดงหวาย - (3010-104) ดงธาตุ=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3010-89"){
        $arrayPostData['messages'][0]['text'] = "UDN001479,(3010-90) บ้านห้วยเชียง - (3010-89) หนองอิเบ้า=Optic 12 Core DW = 1.241 km.";
    }
else if($message == "3010-90"){
          $arrayPostData['messages'][0]['text'] = "UDN001014,(3010-71) น้อยลำภู - (3010-90) ห้วยเชียง=Optic 12 Core DW = 4.5 km.
UDN001479,(3010-90) บ้านห้วยเชียง - (3010-89) หนองอิเบ้า=Optic 12 Core DW = 1.241 km.";
    }
else if($message == "3010-92"){
        $arrayPostData['messages'][0]['text'] = "UDN001154,(3010-73) หนองฆ้องนาสีนวล - (3010-92) หนองเจริญ=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3010-96"){
          $arrayPostData['messages'][0]['text'] = "UDN001151,(3010-73) หนองฆ้องนาสีนวล - (3010-96) ผาสุก=Optic 12 Core DW = 2.1 km.
UDN001152,(3010-96) ผาสุก - (3010-101) บ้านตาลเลียนทุ่งป่าแพง=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3010-97"){
        $arrayPostData['messages'][0]['text'] = "UDN001155,(3010-109) บ้านถ้ำเต่า - (3010-97) ผัง 5=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3010-98"){
        $arrayPostData['messages'][0]['text'] = "UDN001157,(3010-113) ผัง 1 - (3010-98) เหล่าตำแย=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3011-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000020,(3023-48) me ศรีพินิจ - (3011-37) โนนสะอาด=12 Core= 54.739 km.
UDN000080,(3011-37) โนนสะอาด - (3011-38) ประปาโนนสะอาด=Optic 12 Core DW = 0.528 km.
UDN000081,(3011-37) โนนสะอาด - (3011-39) โนนสะอาด2=Optic 12 Core DW = 1.126 km.
UDN000447,(BJ) BJ Mainroot อุดร - ขอนแก่น Cable1 - (3011-37) โนนสะอาด=Optic 12 Core DW = 0.167 km.
UDN001059,(3011-37) โนนสะอาด 1 - (3011-42) หัวฝาย=Optic 12 Core DW = 3.45 km.
UDN001164,(3011-37) โนนสะอาด 1 - (3011-52) โนนหยาด=12 Core= 5.7 km.
UDN001171,(3011-37) ME โนนสะอาด - (3011-63) แสงอรุณ=12 Core= 9.772 km.
UDN001181,(3011-37) โนนสะอาด 1 - (3011-68) ม่วงเฒ่า=Optic 12 Core DW = 3.8 km.
UDN001613,(3011-37) ME โนนสะอาด - (3011-83) ประปาโนนสะอาด 3=Optic 12 Core DW = 1.04 km.
UDN001654,(3011-37) โนนสะอาด 1 - (3011-41) บ้านโคกกลางโนนสะอาด=Optic 12 Core DW = 4 km.
UDN001774,(3011-37) โนนสะอาด1 - (3011-76) ต.โนนสะอาด โนนสะอาด4=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3011-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000080,(3011-37) โนนสะอาด - (3011-38) ประปาโนนสะอาด=Optic 12 Core DW = 0.528 km.
UDN001182,(3011-38) ประปาโนนสะอาด - (3011-71) บ้านเสาเล้า=12 Core= 7.2 km.
UDN001262,(3011-38) ประปาโนนสะอาด - (3011-40) ประปาโนนสะอาด2=Optic 12 Core DW = 1.19 km.";
    }
else if($message == "3011-39"){
        $arrayPostData['messages'][0]['text'] = "UDN000081,(3011-37) โนนสะอาด - (3011-39) โนนสะอาด2=Optic 12 Core DW = 1.126 km.";
    }
else if($message == "3011-40"){
          $arrayPostData['messages'][0]['text'] = "UDN001180,(3011-40) ประปาโนนสะอาด 2 - (3011-67) โพธิ์ศรีสำราญ=Optic 12 Core DW = 3.8 km.
UDN001262,(3011-38) ประปาโนนสะอาด - (3011-40) ประปาโนนสะอาด2=Optic 12 Core DW = 1.19 km.
UDN001775,(3011-40) ประปาโนนสะอาด2 - (3011-77) ต.โนนสะอาด โสกรัง=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3011-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000912,(3011-41) บ้านโคกกลางโนนสะอาด - (3011-47) บ้านม่วงดง=Optic 12 Core DW = 4.2 km.
UDN001654,(3011-37) โนนสะอาด 1 - (3011-41) บ้านโคกกลางโนนสะอาด=Optic 12 Core DW = 4 km.";
    }
else if($message == "3011-42"){
          $arrayPostData['messages'][0]['text'] = "UDN000575,(3011-42) หัวฝาย - (3011-43) บ้านบุ่งแก้ว=Optic 12 Core DW = 4.312 km.
UDN001059,(3011-37) โนนสะอาด 1 - (3011-42) หัวฝาย=Optic 12 Core DW = 3.45 km.";
    }
else if($message == "3011-43"){
          $arrayPostData['messages'][0]['text'] = "UDN000575,(3011-42) หัวฝาย - (3011-43) บ้านบุ่งแก้ว=Optic 12 Core DW = 4.312 km.
UDN000721,(3011-43) บุ่งแก้ว - (3011-44) โนนสำราญ(ประจักษ์)=Optic 12 Core DW = 2.48 km.
UDN001060,(3011-44) บ้านโนนสำราญ - (3011-43) บ้านบุ่งแก้ว=Optic 12 Core DW = 2.52 km.";
    }
else if($message == "3011-44"){
          $arrayPostData['messages'][0]['text'] = "UDN000721,(3011-43) บุ่งแก้ว - (3011-44) โนนสำราญ(ประจักษ์)=Optic 12 Core DW = 2.48 km.
UDN000722,(3011-44) โนนสำราญ(ประจักษ์) - (3011-45) หนองโก=Optic 12 Core DW = 3.96 km.
UDN001060,(3011-44) บ้านโนนสำราญ - (3011-43) บ้านบุ่งแก้ว=Optic 12 Core DW = 2.52 km.
UDN001061,(3011-45) บ้านหนองโก - (3011-44) บ้านโนนสำราญ=Optic 12 Core DW = 4 km.
UDN001174,(3011-44) โนนสำราญ(ประจักษ์) - (3011-56) โคกล่าม=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3011-45"){
          $arrayPostData['messages'][0]['text'] = "UDN000722,(3011-44) โนนสำราญ(ประจักษ์) - (3011-45) หนองโก=Optic 12 Core DW = 3.96 km.
UDN001023,(3011-45) หนองโก - (3011-46) ทมป่าข่า=12 Core= 5.891 km.
UDN001061,(3011-45) บ้านหนองโก - (3011-44) บ้านโนนสำราญ=Optic 12 Core DW = 4 km.
UDN001170,(3011-45) หนองโก - (3011-59) บะยาว=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3011-46"){
          $arrayPostData['messages'][0]['text'] = "UDN000751,(3011-46) ทมป่าข่า - (3011-49) หาดสถาพร=12 Core= 3.59 km.
UDN001023,(3011-45) หนองโก - (3011-46) ทมป่าข่า=12 Core= 5.891 km.";
    }
else if($message == "3011-47"){
        $arrayPostData['messages'][0]['text'] = "UDN000912,(3011-41) บ้านโคกกลางโนนสะอาด - (3011-47) บ้านม่วงดง=Optic 12 Core DW = 4.2 km.";
    }
else if($message == "3011-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000751,(3011-46) ทมป่าข่า - (3011-49) หาดสถาพร=12 Core= 3.59 km.
UDN000913,(3011-49) หาดสถาพร - (3011-50) บ้านทมนางาม=12 Core= 4 km.";
    }
else if($message == "3011-50"){
          $arrayPostData['messages'][0]['text'] = "UDN000913,(3011-49) หาดสถาพร - (3011-50) บ้านทมนางาม=12 Core= 4 km.
UDN001183,(3011-50) ทมนางาม - (3011-72) ค้อน้อย=Optic 12 Core DW = 4.5 km.";
    }
else if($message == "3011-51"){
          $arrayPostData['messages'][0]['text'] = "UDN001163,(3011-52) โนนหยาด - (3011-51) บ้านโนนน้ำเกลี้ยง=Optic 12 Core DW = 1.5 km.
UDN001166,(3011-51) บ้านโนนน้ำเกลี้ยง - (3011-54) บ้านคำเต้าแก้ว=Optic 12 Core DW = 3 km.
UDN001773,(3011-51) โนนน้ำเกลี้ยง - (3011-74) ต.โคกกลาง บ้านตาดโตน=Optic 12 Core DW = 3.48 km.";
    }
else if($message == "3011-52"){
          $arrayPostData['messages'][0]['text'] = "UDN001163,(3011-52) โนนหยาด - (3011-51) บ้านโนนน้ำเกลี้ยง=Optic 12 Core DW = 1.5 km.
UDN001164,(3011-37) โนนสะอาด 1 - (3011-52) โนนหยาด=12 Core= 5.7 km.";
    }
else if($message == "3011-53"){
        $arrayPostData['messages'][0]['text'] = "UDN001165,(3011-54) บ้านคำเต้าแก้ว - (3011-53) บ้านหินลาด=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3011-54"){
          $arrayPostData['messages'][0]['text'] = "UDN001165,(3011-54) บ้านคำเต้าแก้ว - (3011-53) บ้านหินลาด=Optic 12 Core DW = 1.7 km.
UDN001166,(3011-51) บ้านโนนน้ำเกลี้ยง - (3011-54) บ้านคำเต้าแก้ว=Optic 12 Core DW = 3 km.";
    }
else if($message == "3011-55"){
          $arrayPostData['messages'][0]['text'] = "UDN001139,(3011-55) โนนจำปา - (3016-77) โคกศรี=Optic 12 Core DW = 3.4 km.
UDN001167,(3011-64) หนองกรุงศรี - (3011-55) โนนจำปา=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3011-56"){
        $arrayPostData['messages'][0]['text'] = "UDN001174,(3011-44) โนนสำราญ(ประจักษ์) - (3011-56) โคกล่าม=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3011-57"){
          $arrayPostData['messages'][0]['text'] = "UDN001168,(3002-132) บ้านหนองแดง - (3011-57) บ้านกระเบื้อง=Optic 12 Core DW = 4.3 km.
UDN001169,(3011-57) บ้านกระเบื้อง - (3011-58) ท่าลุมพู=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3011-58"){
        $arrayPostData['messages'][0]['text'] = "UDN001169,(3011-57) บ้านกระเบื้อง - (3011-58) ท่าลุมพู=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3011-59"){
          $arrayPostData['messages'][0]['text'] = "UDN001076,(3011-59) บะยาว - (3002-119) แสงสว่าง=Optic 12 Core DW = 3.2 km.
UDN001170,(3011-45) หนองโก - (3011-59) บะยาว=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3011-60"){
        $arrayPostData['messages'][0]['text'] = "UDN001175,(3011-72) ค้อน้อย - (3011-60) โคกสง่า=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3011-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000673,(3011-61) บ้านนาเหล่า - (3011-63) บ้านแสงอรุณ=12 Core= 9.772 km.
UDN001176,(3011-64) หนองกรุงศรี - (3011-61) นาเหล่า=12 Core= 5.9 km.
UDN001177,(3011-61) นาเหล่า - (3011-62) โนนคำเจริญ=Optic 12 Core DW = 3.6 km.
UDN001777,(3011-61) นาเหล่า - (3011-80) ต.หนองกุงศรี โนนสวรรค์=12 Core= 5.612 km.";
    }
else if($message == "3011-62"){
          $arrayPostData['messages'][0]['text'] = "UDN001177,(3011-61) นาเหล่า - (3011-62) โนนคำเจริญ=Optic 12 Core DW = 3.6 km.
UDN001776,(3011-62) โนนคำเจริญ - (3011-79) ต.หนองกุงศรี บ้านป่าไม้=Optic 12 Core DW = 3.256 km.";
    }
else if($message == "3011-63"){
          $arrayPostData['messages'][0]['text'] = "UDN000673,(3011-61) บ้านนาเหล่า - (3011-63) บ้านแสงอรุณ=12 Core= 9.772 km.
UDN001171,(3011-37) ME โนนสะอาด - (3011-63) แสงอรุณ=12 Core= 9.772 km.";
    }
else if($message == "3011-64"){
          $arrayPostData['messages'][0]['text'] = "UDN001167,(3011-64) หนองกรุงศรี - (3011-55) โนนจำปา=Optic 12 Core DW = 3.3 km.
UDN001172,(3011-65) โพธิ์ชัย - (3011-64) หนองกรุงศรี=Optic 12 Core DW = 4.5 km.
UDN001176,(3011-64) หนองกรุงศรี - (3011-61) นาเหล่า=12 Core= 5.9 km.";
    }
else if($message == "3011-65"){
          $arrayPostData['messages'][0]['text'] = "UDN001172,(3011-65) โพธิ์ชัย - (3011-64) หนองกรุงศรี=Optic 12 Core DW = 4.5 km.
UDN001178,(3011-66) กุดดอกคำ - (3011-65) โพธิ์ชัย=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3011-66"){
          $arrayPostData['messages'][0]['text'] = "UDN001178,(3011-66) กุดดอกคำ - (3011-65) โพธิ์ชัย=Optic 12 Core DW = 1.3 km.
UDN001179,(3011-67) โพธิ์ศรีสำราญ - (3011-66) กุดดอกคำ=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3011-67"){
          $arrayPostData['messages'][0]['text'] = "UDN001179,(3011-67) โพธิ์ศรีสำราญ - (3011-66) กุดดอกคำ=Optic 12 Core DW = 2.7 km.
UDN001180,(3011-40) ประปาโนนสะอาด 2 - (3011-67) โพธิ์ศรีสำราญ=Optic 12 Core DW = 3.8 km.";
    }
else if($message == "3011-68"){
        $arrayPostData['messages'][0]['text'] = "UDN001181,(3011-37) โนนสะอาด 1 - (3011-68) ม่วงเฒ่า=Optic 12 Core DW = 3.8 km.";
    }
else if($message == "3011-70"){
          $arrayPostData['messages'][0]['text'] = "UDN000918,(3011-71) บ้านเสาเล้า - (3011-70) โคดผักชี=Optic 12 Core DW = 1.9 km.
UDN001173,(3011-71) บ้านเสาเล้า - (3011-70) โคกผักชี=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3011-71"){
          $arrayPostData['messages'][0]['text'] = "UDN000918,(3011-71) บ้านเสาเล้า - (3011-70) โคดผักชี=Optic 12 Core DW = 1.9 km.
UDN001173,(3011-71) บ้านเสาเล้า - (3011-70) โคกผักชี=Optic 12 Core DW = 1.9 km.
UDN001182,(3011-38) ประปาโนนสะอาด - (3011-71) บ้านเสาเล้า=12 Core= 7.2 km.";
    }
else if($message == "3011-72"){
          $arrayPostData['messages'][0]['text'] = "UDN001175,(3011-72) ค้อน้อย - (3011-60) โคกสง่า=Optic 12 Core DW = 2.7 km.
UDN001183,(3011-50) ทมนางาม - (3011-72) ค้อน้อย=Optic 12 Core DW = 4.5 km.";
    }
else if($message == "3011-73"){
        $arrayPostData['messages'][0]['text'] = "UDN001772,(2517-66) เขาสวนกวางบ้านหนองสองห้อง - (3011-73) ต.โคกกลาง แสงแก้ว=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3011-74"){
        $arrayPostData['messages'][0]['text'] = "UDN001773,(3011-51) โนนน้ำเกลี้ยง - (3011-74) ต.โคกกลาง บ้านตาดโตน=Optic 12 Core DW = 3.48 km.";
    }
else if($message == "3011-76"){
        $arrayPostData['messages'][0]['text'] = "UDN001774,(3011-37) โนนสะอาด1 - (3011-76) ต.โนนสะอาด โนนสะอาด4=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3011-77"){
        $arrayPostData['messages'][0]['text'] = "UDN001775,(3011-40) ประปาโนนสะอาด2 - (3011-77) ต.โนนสะอาด โสกรัง=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3011-79"){
        $arrayPostData['messages'][0]['text'] = "UDN001776,(3011-62) โนนคำเจริญ - (3011-79) ต.หนองกุงศรี บ้านป่าไม้=Optic 12 Core DW = 3.256 km.";
    }
else if($message == "3011-80"){
        $arrayPostData['messages'][0]['text'] = "UDN001777,(3011-61) นาเหล่า - (3011-80) ต.หนองกุงศรี โนนสวรรค์=12 Core= 5.612 km.";
    }
else if($message == "3011-83"){
        $arrayPostData['messages'][0]['text'] = "UDN001613,(3011-37) ME โนนสะอาด - (3011-83) ประปาโนนสะอาด 3=Optic 12 Core DW = 1.04 km.";
    }
else if($message == "3012-102"){
        $arrayPostData['messages'][0]['text'] = "UDN001374,(3012-114) บ้านม่วง - (3012-102) นาอ่าง=Optic 12 Core DW = 3.22 km.";
    }
else if($message == "3012-103"){
          $arrayPostData['messages'][0]['text'] = "UDN001365,(3012-103) ขัวล้อ - (3012-114) บ้านม่วง=Optic 12 Core DW = 3.12 km.
UDN001409,(3012-104) บ้านนาเจริญ - (3012-103) บ้านขั้วล้อ=Optic 12 Core DW = 1.36 km.";
    }
else if($message == "3012-104"){
          $arrayPostData['messages'][0]['text'] = "UDN001409,(3012-104) บ้านนาเจริญ - (3012-103) บ้านขั้วล้อ=Optic 12 Core DW = 1.36 km.
UDN001531,(3012-104) บ้านนาเจริญ - (3012-105) บ้านจำปาดง=Optic 12 Core DW = 1.663 km.
UDN001778,(3012-105) ต.จำปาโมง บ้านจำปาดง - (3012-104) ต.จำปาโมง บ้านนาเจริญ=Optic 12 Core DW = 1.743 km.";
    }
else if($message == "3012-105"){
          $arrayPostData['messages'][0]['text'] = "UDN001375,(3012-105) จำปาดง - (3012-106) จำปาโมง=Optic 12 Core DW = 1.21 km.
UDN001413,(3012-107) โนนสว่าง - (3012-105) บ้านจำปาดง=Optic 12 Core DW = 1.41 km.
UDN001531,(3012-104) บ้านนาเจริญ - (3012-105) บ้านจำปาดง=Optic 12 Core DW = 1.663 km.
UDN001778,(3012-105) ต.จำปาโมง บ้านจำปาดง - (3012-104) ต.จำปาโมง บ้านนาเจริญ=Optic 12 Core DW = 1.743 km.";
    }
else if($message == "3012-106"){
        $arrayPostData['messages'][0]['text'] = "UDN001375,(3012-105) จำปาดง - (3012-106) จำปาโมง=Optic 12 Core DW = 1.21 km.";
    }
else if($message == "3012-107"){
        $arrayPostData['messages'][0]['text'] = "UDN001364,(3012-108) เหล่าคราม - (3012-107) โนนสว่าง=Optic 12 Core DW = 1.21 km.";
    }
else if($message == "3012-108"){
          $arrayPostData['messages'][0]['text'] = "UDN001364,(3012-108) เหล่าคราม - (3012-107) โนนสว่าง=Optic 12 Core DW = 1.21 km.
UDN001530,(3012-109) บ้านเหล่ามะแงว - (3012-108) บ้านเหล่าคราม=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3012-109"){
          $arrayPostData['messages'][0]['text'] = "UDN001373,(3012-156) บ้านภูดิน - (3012-109) เหล่ามะแงว=Optic 12 Core DW = 3 km.
UDN001530,(3012-109) บ้านเหล่ามะแงว - (3012-108) บ้านเหล่าคราม=Optic 12 Core DW = 3.46 km.
UDN001781,(3012-109) ต.จำปาโมง บ้านเหล่ามะแงว - (3012-126) ต.จำปาโมง วังสวย=Optic 12 Core DW = 3 km.";
    }
else if($message == "3012-111"){
        $arrayPostData['messages'][0]['text'] = "UDN001411,(3012-112) หนองแวงน้อย หมู่10 - (3012-111) หนองแวง=Optic 12 Core DW = 1.26 km.";
    }
else if($message == "3012-112"){
          $arrayPostData['messages'][0]['text'] = "UDN001411,(3012-112) หนองแวงน้อย หมู่10 - (3012-111) หนองแวง=Optic 12 Core DW = 1.26 km.
UDN001532,(3012-123) บ้านคำบอนเวียงชัย - (3012-112) บ้านหนองแวงน้อย ม.10=12 Core= 5.82 km.";
    }
else if($message == "3012-113"){
          $arrayPostData['messages'][0]['text'] = "UDN001230,(3012-49) wireless บ้านภูดิน - (3012-113) บ้านเม็ก=Optic 12 Core DW = 4 km.
UDN001235,(3012-113) บ้านเม็ก - (3012-75) ดอนขวาง=Optic 12 Core DW = 1.5 km.
UDN001562,(3012-113) บ้านแม็ก - (3012-93) บ้านข้าวสาร ต.ข้าวสาร=12 Core= 7.77 km.";
    }
else if($message == "3012-114"){
          $arrayPostData['messages'][0]['text'] = "UDN001365,(3012-103) ขัวล้อ - (3012-114) บ้านม่วง=Optic 12 Core DW = 3.12 km.
UDN001374,(3012-114) บ้านม่วง - (3012-102) นาอ่าง=Optic 12 Core DW = 3.22 km.
UDN001410,(3012-114) บ้านม่วง - (3012-115) บ้านลาน=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3012-115"){
        $arrayPostData['messages'][0]['text'] = "UDN001410,(3012-114) บ้านม่วง - (3012-115) บ้านลาน=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3012-116"){
          $arrayPostData['messages'][0]['text'] = "UDN001561,(3012-116) โนนสง่า - (3012-99) บ้านนางาม=Optic 12 Core DW = 1.96 km.
UDN001563,(3012-93) บ้านข้าวสาร - (3012-116) บ้านโนนสง่า=Optic 12 Core DW = 5.657 km.
UDN001786,(3012-116) ต.หนองแวง บ้านโนนสง่า - (3012-149) ต.หนองแวง บ้านเท่อเล่อ=Optic 12 Core DW = 2 km.
UDN001789,(3012-116) ต.หนองแวง บ้านโนนสง่า - (3012-161) ต.ข้าวสาร หินตั้ง=Optic 12 Core DW = 3.21 km.";
    }
else if($message == "3012-117"){
          $arrayPostData['messages'][0]['text'] = "UDN001460,(3012-117) บ้านค้อ - (3012-133) บ้านหนอกอง=Optic 12 Core DW = 5.58 km.
UDN001560,(3012-32) บ้านผือ2 - (3012-117) บ้านค้อ=12 Core= 7.02 km.
UDN001586,(3012-117) บ้านค้อ - (3012-134) บ้านนารายณ์=Optic 12 Core DW = 2.49 km.";
    }
else if($message == "3012-118"){
          $arrayPostData['messages'][0]['text'] = "UDN001443,(3012-80) สระคลองพัฒนา - (3012-118) บ้านนาหลวง=12 Core= 8.542 km.
UDN001779,(3012-80) สระคลองพัฒนา - (3012-118) ต.คำด้วง บ้านนาหลวง=12 Core= 8.662 km.";
    }
else if($message == "3012-122"){
        $arrayPostData['messages'][0]['text'] = "UDN001559,(3012-63) บ้านโนนสมบูรณ์ - (3012-122) บ้านโนนสมบูรณ์น้อย=Optic 12 Core DW = 1.69 km.";
    }
else if($message == "3012-123"){
          $arrayPostData['messages'][0]['text'] = "UDN001532,(3012-123) บ้านคำบอนเวียงชัย - (3012-112) บ้านหนองแวงน้อย ม.10=12 Core= 5.82 km.
UDN001533,(3010-101) บ้านตาลเลียนป่าทุ่งแพง - (3012-123) บ้านคำบอนเวียงชัย=12 Core= 5.358 km.";
    }
else if($message == "3012-124"){
        $arrayPostData['messages'][0]['text'] = "UDN001538,(3012-125) บ้านตาดน้ำพุ - (3012-124) บ้านลาดหอคำ=12 Core= 8.863 km.";
    }
else if($message == "3012-125"){
          $arrayPostData['messages'][0]['text'] = "UDN001538,(3012-125) บ้านตาดน้ำพุ - (3012-124) บ้านลาดหอคำ=12 Core= 8.863 km.
UDN001780,(3012-76) ห้วยศิลาผาสุข - (3012-125) ต.คำด้วง ตาดน้ำพุ=Optic 12 Core DW = 4.65 km.";
    }
else if($message == "3012-126"){
        $arrayPostData['messages'][0]['text'] = "UDN001781,(3012-109) ต.จำปาโมง บ้านเหล่ามะแงว - (3012-126) ต.จำปาโมง วังสวย=Optic 12 Core DW = 3 km.";
    }
else if($message == "3012-127"){
        $arrayPostData['messages'][0]['text'] = "UDN001549,(3012-145) บ้านกดอนขี้เหล็ก - (3012-127) บ้านแดง=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3012-128"){
          $arrayPostData['messages'][0]['text'] = "UDN001585,(3012-128) บ้านดงบัง - (3012-129) บ้านนาเตย=Optic 12 Core DW = 3.96 km.
UDN001782,(3012-82) บ้านโนนทองบ้านผือ - (3012-128) ต.โนนทอง บ้านดงบัง=12 Core= 7.576 km.
UDN001790,(3012-128) บ้านดงบัง - (3012-162) จอมตาล=Optic 12 Core DW = 1.77 km.";
    }
else if($message == "3012-129"){
        $arrayPostData['messages'][0]['text'] = "UDN001585,(3012-128) บ้านดงบัง - (3012-129) บ้านนาเตย=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3012-131"){
        $arrayPostData['messages'][0]['text'] = "UDN001522,(3012-82) โนนทอง หมู่7 - (3012-131) โนนแดง=Optic 12 Core DW = 2.19 km.";
    }
else if($message == "3012-132"){
        $arrayPostData['messages'][0]['text'] = "UDN001783,(SJ) MEบ้านผือ-บ้านค้อ - (3012-132) ต.บ้านค้อ นาคูณ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3012-133"){
        $arrayPostData['messages'][0]['text'] = "UDN001460,(3012-117) บ้านค้อ - (3012-133) บ้านหนอกอง=Optic 12 Core DW = 5.58 km.";
    }
else if($message == "3012-134"){
        $arrayPostData['messages'][0]['text'] = "UDN001586,(3012-117) บ้านค้อ - (3012-134) บ้านนารายณ์=Optic 12 Core DW = 2.49 km.";
    }
else if($message == "3012-135"){
        $arrayPostData['messages'][0]['text'] = "UDN001551,(3012-32) ร.พ.บ้านผือ - (3012-135) บ้านโนนวารี=Optic 12 Core DW = 3.66 km.";
    }
else if($message == "3012-136"){
          $arrayPostData['messages'][0]['text'] = "UDN001534,(3012-136) บ้านติ้ว - (3012-138) เมืองพาน=Optic 12 Core DW = 4.73 km.
UDN001604,(3012-44) บ้านผักบุ้ง - (3012-136) บ้านติ้ว=Optic 12 Core DW = 3.66 km.";
    }
else if($message == "3012-137"){
        $arrayPostData['messages'][0]['text'] = "UDN001536,(3012-138) เมืองพาน - (3012-137) บ้านใหม่=Optic 12 Core DW = 1.96 km.";
    }
else if($message == "3012-138"){
          $arrayPostData['messages'][0]['text'] = "UDN001534,(3012-136) บ้านติ้ว - (3012-138) เมืองพาน=Optic 12 Core DW = 4.73 km.
UDN001535,(3012-138) เมืองพาน - (3012-147) บ้านหนองกบ=Optic 12 Core DW = 2.935 km.
UDN001536,(3012-138) เมืองพาน - (3012-137) บ้านใหม่=Optic 12 Core DW = 1.96 km.
UDN001546,(3012-138) เมืองพาน - (3012-141) บ้านจอมศรี=Optic 12 Core DW = 2.12 km.";
    }
else if($message == "3012-139"){
        $arrayPostData['messages'][0]['text'] = "UDN001784,(SJ) บ้านเมืองพาน-บ้านหนองกบ - (3012-139) ต.เมืองพาน โก่ม=Optic 12 Core DW = 1.55 km.";
    }
else if($message == "3012-141"){
          $arrayPostData['messages'][0]['text'] = "UDN001546,(3012-138) เมืองพาน - (3012-141) บ้านจอมศรี=Optic 12 Core DW = 2.12 km.
UDN001626,(3012-141) บ้านจอมศรี - (3012-143) บ้านกาลืม=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3012-142"){
        $arrayPostData['messages'][0]['text'] = "UDN001785,(SJ) บ้านจอมศรี-บ้านหนองกาลืม - (3012-142) ต.เมืองพาน โคกก่อง=Optic 12 Core DW = 2 km.";
    }
else if($message == "3012-143"){
          $arrayPostData['messages'][0]['text'] = "UDN001459,(3012-143) บ้านกาลืม - (3012-144) บ้านหนองกาลืม=Optic 12 Core DW = 1.11 km.
UDN001626,(3012-141) บ้านจอมศรี - (3012-143) บ้านกาลืม=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3012-144"){
          $arrayPostData['messages'][0]['text'] = "UDN001459,(3012-143) บ้านกาลืม - (3012-144) บ้านหนองกาลืม=Optic 12 Core DW = 1.11 km.
UDN001550,(3012-144) บ้านหนองกาลืม - (3012-145) บ้านดอนขี้เหล็ก=Optic 12 Core DW = 1.31 km.";
    }
else if($message == "3012-145"){
          $arrayPostData['messages'][0]['text'] = "UDN001549,(3012-145) บ้านกดอนขี้เหล็ก - (3012-127) บ้านแดง=Optic 12 Core DW = 2.56 km.
UDN001550,(3012-144) บ้านหนองกาลืม - (3012-145) บ้านดอนขี้เหล็ก=Optic 12 Core DW = 1.31 km.";
    }
else if($message == "3012-146"){
        $arrayPostData['messages'][0]['text'] = "UDN001537,(3012-147) บ้านหนองกบ - (3012-146) บ้านนาแมน=Optic 12 Core DW = 0.945 km.";
    }
else if($message == "3012-147"){
          $arrayPostData['messages'][0]['text'] = "UDN001535,(3012-138) เมืองพาน - (3012-147) บ้านหนองกบ=Optic 12 Core DW = 2.935 km.
UDN001537,(3012-147) บ้านหนองกบ - (3012-146) บ้านนาแมน=Optic 12 Core DW = 0.945 km.";
    }
else if($message == "3012-148"){
        $arrayPostData['messages'][0]['text'] = "UDN001447,(3104-70) บ้านโนนสง่า - (3012-148) บ้านแหลมทองพัฒนา=Optic 12 Core DW = 7.47 km";
    }
else if($message == "3012-149"){
        $arrayPostData['messages'][0]['text'] = "UDN001786,(3012-116) ต.หนองแวง บ้านโนนสง่า - (3012-149) ต.หนองแวง บ้านเท่อเล่อ=Optic 12 Core DW = 2 km.";
    }
else if($message == "3012-151"){
        $arrayPostData['messages'][0]['text'] = "UDN001605,(3012-67) โนนทัน - (3012-151) บ้านโนนอุดม=Optic 12 Core DW = 3.11 km.";
    }
else if($message == "3012-152"){
        $arrayPostData['messages'][0]['text'] = "UDN001523,(3012-42) บ้านหายโศก2 - (3012-152) นาคำ=Optic 12 Core DW = 2.61 km.";
    }
else if($message == "3012-156"){
        $arrayPostData['messages'][0]['text'] = "UDN001373,(3012-156) บ้านภูดิน - (3012-109) เหล่ามะแงว=Optic 12 Core DW = 3 km.";
    }
else if($message == "3012-157"){
        $arrayPostData['messages'][0]['text'] = "UDN001787,(3033-162) บ้านเทื่อม - (3012-157) บ้านเทื่อม2=Optic 12 Core DW = 1.042 km.";
    }
else if($message == "3012-159"){
        $arrayPostData['messages'][0]['text'] = "UDN001788,(3012-39) บ้านกลางใหญ่ 1 - (3012-159) กลางใหญ่3=Optic 12 Core DW = 0.61 km.";
    }
else if($message == "3012-161"){
        $arrayPostData['messages'][0]['text'] = "UDN001789,(3012-116) ต.หนองแวง บ้านโนนสง่า - (3012-161) ต.ข้าวสาร หินตั้ง=Optic 12 Core DW = 3.21 km.";
    }
else if($message == "3012-162"){
        $arrayPostData['messages'][0]['text'] = "UDN001790,(3012-128) บ้านดงบัง - (3012-162) จอมตาล=Optic 12 Core DW = 1.77 km.";
    }
else if($message == "3012-163"){
        $arrayPostData['messages'][0]['text'] = "UDN001791,(3012-37) บ้านหายโศก - (3012-163) หายโศก3=Optic 12 Core DW = 1.593 km.";
    }
else if($message == "3012-31"){
          $arrayPostData['messages'][0]['text'] = "UDN000406,(3203-50) นาช้างน้ำ - (3012-31) บ้านผือ1=12 Core= 20 km.
UDN000407,(3012-31) บ้านผือ1 - (3012-32) บ้านผือ2=Optic 12 Core DW = 2.4 km.
UDN000474,(3012-31) บ้านผือ1 - (3202-41) บ้านหม้อ=12 Core= 60.375 km.
UDN000981,(3033-36) ME คอนโดเทล - (3012-31) ME บ้านผือ=12 Core= 53.803 km.
UDN001226,(3012-31) บ้านผือ1 - (3012-70) หนองนกเขียน=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3012-32"){
          $arrayPostData['messages'][0]['text'] = "UDN000406,(3203-50) นาช้างน้ำ - (3012-31) บ้านผือ1=12 Core= 20 km.
UDN000407,(3012-31) บ้านผือ1 - (3012-32) บ้านผือ2=Optic 12 Core DW = 2.4 km.
UDN000474,(3012-31) บ้านผือ1 - (3202-41) บ้านหม้อ=12 Core= 60.375 km.
UDN000981,(3033-36) ME คอนโดเทล - (3012-31) ME บ้านผือ=12 Core= 53.803 km.
UDN001226,(3012-31) บ้านผือ1 - (3012-70) หนองนกเขียน=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3012-33"){
          $arrayPostData['messages'][0]['text'] = "UDN000408,(3012-32) บ้านผือ2 - (3012-33) บ้านผือ3=Optic 12 Core DW = 1.5 km.
UDN000465,(3012-33) บ้านผือ3 - (3012-38) วิทยาลัยการอาชีพบ้านผือ=Optic 12 Core DW = 0.738 km.
UDN000753,(3012-33) บ้านผือ3 - (3012-50) บ้านภูดิน=Optic 12 Core DW = 2.6 km.
UDN000965,(3012-33) บ้านผือ3 - (3012-49) wireless บ้านภูดิน=Optic 12 Core DW = 2.65 km.";
    }
else if($message == "3012-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000419,(SJ) SJ บ้านผือ - นาช้างน้ำ - (3012-37) บ้านหายโศก=Optic 12 Core DW = 0.2 km.
UDN000964,(3012-37) บ้านหายโศก - (3012-42) บ้านหายโศก2=Optic 12 Core DW = 4.285 km.
UDN000966,(3012-37) บ้านหายโศก - (3012-52) บ้านดงขวาง=Optic 12 Core DW = 2.466 km.
UDN001225,(3012-37) บ้านหายโศก - (3012-74) หลวงคำ=Optic 12 Core DW = 4.2 km.
UDN001791,(3012-37) บ้านหายโศก - (3012-163) หายโศก3=Optic 12 Core DW = 1.593 km.";
    }
else if($message == "3012-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000465,(3012-33) บ้านผือ3 - (3012-38) วิทยาลัยการอาชีพบ้านผือ=Optic 12 Core DW = 0.738 km.
UDN001793,(3012-38) วิทยาลัยการอาชีพบ้านผือ - (3012-84) บ้านคู=Optic 12 Core DW = 4.379 km.";
    }
else if($message == "3012-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000470,() SJ บ้านผือ-ศรีเชียงใหม่ - (3012-39) บ้านกลางใหญ่ 1=Optic 12 Core DW = 1.7 km.
UDN000481,(3012-39) บ้านกลางใหญ่ 1 - (3012-40) บ้านกลางใหญ่ 2=Optic 12 Core DW = 0.8 km.
UDN000970,(3012-39) บ้านกลางใหญ่ 1 - (3012-81) บ้านกลางใหญ่ หมู่10=Optic 12 Core DW = 1.459 km.
UDN001788,(3012-39) บ้านกลางใหญ่ 1 - (3012-159) กลางใหญ่3=Optic 12 Core DW = 0.61 km.";
    }
else if($message == "3012-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000481,(3012-39) บ้านกลางใหญ่ 1 - (3012-40) บ้านกลางใหญ่ 2=Optic 12 Core DW = 0.8 km.
UDN000490,(3012-40) บ้านกลางใหญ่ 2 - (3012-41) บ้านนาสีดา=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3012-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000490,(3012-40) บ้านกลางใหญ่ 2 - (3012-41) บ้านนาสีดา=Optic 12 Core DW = 1.8 km.
UDN001231,(3012-41) บ้านนาสีดา - (3012-78) นางิ้ว=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3012-42"){
          $arrayPostData['messages'][0]['text'] = "UDN000964,(3012-37) บ้านหายโศก - (3012-42) บ้านหายโศก2=Optic 12 Core DW = 4.285 km.
UDN001523,(3012-42) บ้านหายโศก2 - (3012-152) นาคำ=Optic 12 Core DW = 2.61 km.";
    }
else if($message == "3012-43"){
        $arrayPostData['messages'][0]['text'] = "UDN000557,(3033-162) บ้านเทื่อม - (3012-43) บ้านนาสี=Optic 12 Core DW = 3.138 km.";
    }
else if($message == "3012-44"){
          $arrayPostData['messages'][0]['text'] = "UDN001121,(SJ) SJ บ้านผือ1-บ้านหม้อ - (3012-44) บ้านผักบุ้ง=Optic 12 Core DW = 1.2 km.
UDN001604,(3012-44) บ้านผักบุ้ง - (3012-136) บ้านติ้ว=Optic 12 Core DW = 3.66 km.";
    }
else if($message == "3012-45"){
          $arrayPostData['messages'][0]['text'] = "UDN001627,(3012-45) หนองหัวคู - (3012-61) กุดเม็ก=Optic 12 Core DW = 3 km.
UDN001635,(SJ) อุดรคอนโดเทล-บ้านผือ - (3012-45) หนองหัวคู=Optic 12 Core DW = 0.73 km.";
    }
else if($message == "3012-46"){
          $arrayPostData['messages'][0]['text'] = "UDN000679,(3012-46) คำบง - (3012-62) เจริญสุข=Optic 12 Core DW = 1.46 km.
UDN000723,(3012-46) คำบง - (3012-47) บ้านดงหมู=Optic 12 Core DW = 2.66 km.
UDN001067,(3012-47) ดงหมู - (3012-46) คำบง=Optic 12 Core DW = 2.7 km.
UDN001188,(SJ) อุดรคอนโดเทล - บ้านผือ - (3012-46) คำบง=Optic 12 Core DW = 2.04 km.";
    }
else if($message == "3012-47"){
          $arrayPostData['messages'][0]['text'] = "UDN000723,(3012-46) คำบง - (3012-47) บ้านดงหมู=Optic 12 Core DW = 2.66 km.
UDN001067,(3012-47) ดงหมู - (3012-46) คำบง=Optic 12 Core DW = 2.7 km.
UDN001228,(3012-47) ดงหมู - (3012-72) นาล้อม=Optic 12 Core DW = 4.2 km.";
    }
else if($message == "3012-48"){
        $arrayPostData['messages'][0]['text'] = "UDN000752,(SJ) SJ บ้านผือ - (3012-48) บ้านแวง บ้านผือ=Optic 12 Core DW = 4.41 km.";
    }
else if($message == "3012-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000965,(3012-33) บ้านผือ3 - (3012-49) wireless บ้านภูดิน=Optic 12 Core DW = 2.65 km.
UDN001230,(3012-49) wireless บ้านภูดิน - (3012-113) บ้านเม็ก=Optic 12 Core DW = 4 km.";
    }
else if($message == "3012-50"){
          $arrayPostData['messages'][0]['text'] = "UDN000753,(3012-33) บ้านผือ3 - (3012-50) บ้านภูดิน=Optic 12 Core DW = 2.6 km.
UDN001227,(3012-50) wireless หนองกุง - (3012-71) โคกสีแก้ว=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3012-52"){
        $arrayPostData['messages'][0]['text'] = "UDN000966,(3012-37) บ้านหายโศก - (3012-52) บ้านดงขวาง=Optic 12 Core DW = 2.466 km.";
    }
else if($message == "3012-53"){
        $arrayPostData['messages'][0]['text'] = "UDN001219,(3012-62) เจริญสุข - (3012-53) บ้านโพธิ์=Optic 12 Core DW = 3 km.";
    }
else if($message == "3012-54"){
          $arrayPostData['messages'][0]['text'] = "UDN001213,(3012-55) โคกลาน - (3012-54) หลุมข้าว=Optic 12 Core DW = 0.16 km.
UDN001229,(3012-54) หลุมข้าว - (3012-73) หนองปลาซิว=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3012-55"){
          $arrayPostData['messages'][0]['text'] = "UDN001213,(3012-55) โคกลาน - (3012-54) หลุมข้าว=Optic 12 Core DW = 0.16 km.
UDN001214,(3033-162) บ้านเทื่อม - (3012-55) โคกลาน=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3012-56"){
        $arrayPostData['messages'][0]['text'] = "UDN001045,(3012-59) ยางโกน - (3012-56) ดงเย็นพัฒนา=Optic 12 Core DW = 8 km.";
    }
else if($message == "3012-57"){
          $arrayPostData['messages'][0]['text'] = "UDN001017,(SJ) SJ - (3012-57) คำแหน=Optic 12 Core DW = 0.7 km.
UDN001215,(3012-59) ยางโกน - (3012-57) คำแหน=Optic 12 Core DW = 4.5 km.";
    }
else if($message == "3012-58"){
        $arrayPostData['messages'][0]['text'] = "UDN000968,(3010-50) บ้านโคกสว่าง - (3012-58) โนนสะอาด=Optic 12 Core DW = 2.82 km.";
    }
else if($message == "3012-59"){
          $arrayPostData['messages'][0]['text'] = "UDN000969,(3012-59) ยางโกน - (3012-72) นาล้อม=Optic 12 Core DW = 4.3 km.
UDN001045,(3012-59) ยางโกน - (3012-56) ดงเย็นพัฒนา=Optic 12 Core DW = 8 km.
UDN001215,(3012-59) ยางโกน - (3012-57) คำแหน=Optic 12 Core DW = 4.5 km.
UDN001216,(3012-62) เจริญสุข - (3012-59) ยางโกน=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3012-60"){
          $arrayPostData['messages'][0]['text'] = "UDN001217,(3033-162) บ้านเทื่อม - (3012-60) ค้อ=12 Core= 5.54 km.
UDN001418,(3033-162) บ้านเทื่อม - (3012-60) บ้านค้อ=12 Core= 5.46 km.";
    }
else if($message == "3012-61"){
        $arrayPostData['messages'][0]['text'] = "UDN001627,(3012-45) หนองหัวคู - (3012-61) กุดเม็ก=Optic 12 Core DW = 3 km.";
    }
else if($message == "3012-62"){
          $arrayPostData['messages'][0]['text'] = "UDN000679,(3012-46) คำบง - (3012-62) เจริญสุข=Optic 12 Core DW = 1.46 km.
UDN001216,(3012-62) เจริญสุข - (3012-59) ยางโกน=Optic 12 Core DW = 3.1 km.
UDN001219,(3012-62) เจริญสุข - (3012-53) บ้านโพธิ์=Optic 12 Core DW = 3 km.
UDN001222,(3012-62) เจริญสุข - (3012-65) สระคูน้อย=Optic 12 Core DW = 5 km.";
    }
else if($message == "3012-63"){
          $arrayPostData['messages'][0]['text'] = "UDN001220,(3012-65) สระคูน้อย - (3012-63) โนนสมบูรณ์=Optic 12 Core DW = 4 km.
UDN001559,(3012-63) บ้านโนนสมบูรณ์ - (3012-122) บ้านโนนสมบูรณ์น้อย=Optic 12 Core DW = 1.69 km.";
    }
else if($message == "3012-64"){
        $arrayPostData['messages'][0]['text'] = "UDN001221,(3012-65) สระคูน้อย - (3012-64) สระคู=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3012-65"){
          $arrayPostData['messages'][0]['text'] = "UDN001220,(3012-65) สระคูน้อย - (3012-63) โนนสมบูรณ์=Optic 12 Core DW = 4 km.
UDN001221,(3012-65) สระคูน้อย - (3012-64) สระคู=Optic 12 Core DW = 1.2 km.
UDN001222,(3012-62) เจริญสุข - (3012-65) สระคูน้อย=Optic 12 Core DW = 5 km.";
    }
else if($message == "3012-67"){
          $arrayPostData['messages'][0]['text'] = "UDN001223,(3012-68) ธาตุ - (3012-67) โนนทัน=Optic 12 Core DW = 1.4 km.
UDN001605,(3012-67) โนนทัน - (3012-151) บ้านโนนอุดม=Optic 12 Core DW = 3.11 km.";
    }
else if($message == "3012-68"){
          $arrayPostData['messages'][0]['text'] = "UDN001223,(3012-68) ธาตุ - (3012-67) โนนทัน=Optic 12 Core DW = 1.4 km.
UDN001224,(3012-74) หลวงคำ - (3012-68) ธาตุ=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3012-70"){
        $arrayPostData['messages'][0]['text'] = "UDN001226,(3012-31) บ้านผือ1 - (3012-70) หนองนกเขียน=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3012-71"){
        $arrayPostData['messages'][0]['text'] = "UDN001227,(3012-50) wireless หนองกุง - (3012-71) โคกสีแก้ว=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3012-72"){
          $arrayPostData['messages'][0]['text'] = "UDN000969,(3012-59) ยางโกน - (3012-72) นาล้อม=Optic 12 Core DW = 4.3 km.
UDN001228,(3012-47) ดงหมู - (3012-72) นาล้อม=Optic 12 Core DW = 4.2 km.";
    }
else if($message == "3012-73"){
        $arrayPostData['messages'][0]['text'] = "UDN001229,(3012-54) หลุมข้าว - (3012-73) หนองปลาซิว=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3012-74"){
          $arrayPostData['messages'][0]['text'] = "UDN001224,(3012-74) หลวงคำ - (3012-68) ธาตุ=Optic 12 Core DW = 1.5 km.
UDN001225,(3012-37) บ้านหายโศก - (3012-74) หลวงคำ=Optic 12 Core DW = 4.2 km.";
    }
else if($message == "3012-75"){
        $arrayPostData['messages'][0]['text'] = "UDN001235,(3012-113) บ้านเม็ก - (3012-75) ดอนขวาง=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3012-76"){
          $arrayPostData['messages'][0]['text'] = "UDN001234,(3012-80) สระคลองพัฒนา - (3012-76) ห้วยศิลาผาสุข=Optic 12 Core DW = 3 km.
UDN001780,(3012-76) ห้วยศิลาผาสุข - (3012-125) ต.คำด้วง ตาดน้ำพุ=Optic 12 Core DW = 4.65 km.";
    }
else if($message == "3012-78"){
          $arrayPostData['messages'][0]['text'] = "UDN001231,(3012-41) บ้านนาสีดา - (3012-78) นางิ้ว=Optic 12 Core DW = 2.8 km.
UDN001232,(3012-78) นางิ้ว - (3012-79) คำด้วง=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3012-79"){
          $arrayPostData['messages'][0]['text'] = "UDN001232,(3012-78) นางิ้ว - (3012-79) คำด้วง=Optic 12 Core DW = 3.7 km.
UDN001233,(3012-79) คำด้วง - (3012-80) สระคลองพัฒนา=12 Core= 8.19 km.";
    }
else if($message == "3012-80"){
          $arrayPostData['messages'][0]['text'] = "UDN001233,(3012-79) คำด้วง - (3012-80) สระคลองพัฒนา=12 Core= 8.19 km.
UDN001234,(3012-80) สระคลองพัฒนา - (3012-76) ห้วยศิลาผาสุข=Optic 12 Core DW = 3 km.
UDN001443,(3012-80) สระคลองพัฒนา - (3012-118) บ้านนาหลวง=12 Core= 8.542 km.
UDN001779,(3012-80) สระคลองพัฒนา - (3012-118) ต.คำด้วง บ้านนาหลวง=12 Core= 8.662 km.";
    }
else if($message == "3012-81"){
        $arrayPostData['messages'][0]['text'] = "UDN000970,(3012-39) บ้านกลางใหญ่ 1 - (3012-81) บ้านกลางใหญ่ หมู่10=Optic 12 Core DW = 1.459 km.";
    }
else if($message == "3012-82"){
          $arrayPostData['messages'][0]['text'] = "UDN000923,(3012-83) บ้านโพน ต.โพนทอง - (3012-82) บ้านโนนทองบ้านผือ=Optic 12 Core DW = 4 km.
UDN001522,(3012-82) โนนทอง หมู่7 - (3012-131) โนนแดง=Optic 12 Core DW = 2.19 km.
UDN001782,(3012-82) บ้านโนนทองบ้านผือ - (3012-128) ต.โนนทอง บ้านดงบัง=12 Core= 7.576 km.";
    }
else if($message == "3012-83"){
          $arrayPostData['messages'][0]['text'] = "UDN000923,(3012-83) บ้านโพน ต.โพนทอง - (3012-82) บ้านโนนทองบ้านผือ=Optic 12 Core DW = 4 km.
UDN001792,(3012-84) บ้านคู - (3012-83) บ้านโพน ต.โพนทอง=Optic 12 Core DW = 2.679 km.";
    }
else if($message == "3012-84"){
          $arrayPostData['messages'][0]['text'] = "UDN001792,(3012-84) บ้านคู - (3012-83) บ้านโพน ต.โพนทอง=Optic 12 Core DW = 2.679 km.
UDN001793,(3012-38) วิทยาลัยการอาชีพบ้านผือ - (3012-84) บ้านคู=Optic 12 Core DW = 4.379 km.";
    }
else if($message == "3012-93"){
          $arrayPostData['messages'][0]['text'] = "UDN001562,(3012-113) บ้านแม็ก - (3012-93) บ้านข้าวสาร ต.ข้าวสาร=12 Core= 7.77 km.
UDN001563,(3012-93) บ้านข้าวสาร - (3012-116) บ้านโนนสง่า=Optic 12 Core DW = 5.657 km.";
    }
else if($message == "3012-97"){
        $arrayPostData['messages'][0]['text'] = "UDN001794,(SJ) บ้านโนนสง่า-บ้านหินตั้ง - (3012-97) ต.โนนทอง นาไฮ=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3012-99"){
        $arrayPostData['messages'][0]['text'] = "UDN001561,(3012-116) โนนสง่า - (3012-99) บ้านนางาม=Optic 12 Core DW = 1.96 km.";
    }
else if($message == "3013-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000503,(3017-38) ME ศรีธาตุ - (3013-37) ME วังสามหมอ=12 Core= 26 km.
UDN000504,(3013-37) ME วังสามหมอ - (3013-40) ตลาดวังสามหมอ=Optic 12 Core DW = 0.77 km.
UDN000551,(3013-37) ME วังสามหมอ - (3013-50) สุขาภิบาล1 วังสามหมอ=Optic 12 Core DW = 1.1 km.
UDN000754,(ME) ME วังสามหมอ - (3013-52) สามหมอพัฒนา(หมู่ 13)=Optic 12 Core DW = 2.2 km.
UDN001190,(3013-37) ME วังสามหมอ - (3013-46) เทศบาลวังสามหมอ=Optic 12 Core DW = 1.561 km.
UDN001656,(3013-37) ME วังสามหมอ - (3013-45) บ้านสมนริณร์=12 Core= 5.803 km.";
    }
else if($message == "3013-38"){
        $arrayPostData['messages'][0]['text'] = "UDN000505,(3013-40) ตลาดวังสามหมอ - (3013-38) ธกส.วังสามหมอ=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3013-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000518,(-) SJ ศรีธาตุ - วังสามหมอ - (3013-39) หนองหญ้าไซ=Optic 12 Core DW = 3 km.
UDN000519,(3013-39) หนองหญ้าไซ - (3013-41) บ้านเลิงถ่อนโนนสมบูรณ์=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3013-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000504,(3013-37) ME วังสามหมอ - (3013-40) ตลาดวังสามหมอ=Optic 12 Core DW = 0.77 km.
UDN000505,(3013-40) ตลาดวังสามหมอ - (3013-38) ธกส.วังสามหมอ=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3013-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000519,(3013-39) หนองหญ้าไซ - (3013-41) บ้านเลิงถ่อนโนนสมบูรณ์=Optic 12 Core DW = 1.8 km.
UDN001821,(3013-41) บ้านเลิงถ่อนโนนสมบูรณ์ - (3013-92) บ้านเลิงถ่อนโนนสมบูรณ์ 2=Optic 12 Core DW = 1.13 km.
UDN001847,(3013-41) บ้านเลิงถ่อนโนนสมบูรณ์ - (3017-71) ต.หนองนกเขียน คำม่วง=12 Core= 8 km.";
    }
else if($message == "3013-42"){
          $arrayPostData['messages'][0]['text'] = "UDN001655,(SJ) MEวังสามหมอ-ผาสุก - (3013-42) ผาสุก(วังสามหมอ)=12 Core= 1.755 km.
UDN001815,(3013-42) ผาสุก(วังสามหมอ) - (3013-84) ต.ผาสุก คำยาง=Optic 12 Core DW = 1.46 km.";
    }
else if($message == "3013-43"){
          $arrayPostData['messages'][0]['text'] = "UDN001796,(3013-43) บ้านดงกลาง - (3013-60) ดงสวรรค์=Optic 12 Core DW = 2.5 km.
UDN001807,(3013-43) บ้านดงกลาง - (SJ) บ้านดงเศรษฐี=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3013-44"){
          $arrayPostData['messages'][0]['text'] = "UDN000581,(3013-44) บ้านหนองไผ่พรเจริญ - (3013-51) ดงง่าม=Optic 12 Core DW = 3.573 km.
UDN001256,(SJ) SJ ศรีธาตุ - วังสามหมอ - (3013-44) หนองไผ่พรเจริญ=Optic 12 Core DW = 1.74 km.";
    }
else if($message == "3013-45"){
          $arrayPostData['messages'][0]['text'] = "UDN001656,(3013-37) ME วังสามหมอ - (3013-45) บ้านสมนริณร์=12 Core= 5.803 km.
UDN001818,(3013-45) บ้านสมนริณร์ - (3013-89) ต.หนองกุงทับม้า ไทยสมพร=12 Core= 7 km.";
    }
else if($message == "3013-46"){
          $arrayPostData['messages'][0]['text'] = "UDN000547,(3013-46) เทศบาลวังสามหมอ - (3013-48) หนองลุมพุก=12 Core= 5.648 km.
UDN001190,(3013-37) ME วังสามหมอ - (3013-46) เทศบาลวังสามหมอ=Optic 12 Core DW = 1.561 km.";
    }
else if($message == "3013-47"){
        $arrayPostData['messages'][0]['text'] = "UDN001800,(3013-47) โนนสว่าง - (3013-65) ต.หนองกุงทับม้า บ้านหนองกุงทับม้า=12 Core= 5.1 km.";
    }
else if($message == "3013-48"){
          $arrayPostData['messages'][0]['text'] = "UDN000547,(3013-46) เทศบาลวังสามหมอ - (3013-48) หนองลุมพุก=12 Core= 5.648 km.
UDN000972,(3013-48) หนองลุมพุกวังสามหมอ - (3013-53) โนนสะอาด=Optic 12 Core DW = 1.145 km.";
    }
else if($message == "3013-50"){
          $arrayPostData['messages'][0]['text'] = "UDN000551,(3013-37) ME วังสามหมอ - (3013-50) สุขาภิบาล1 วังสามหมอ=Optic 12 Core DW = 1.1 km.
UDN001799,(3013-50) สุขาภิบาล1วังสามหมอ - (3013-64) ต.คำโคกสูง บ้านคำโคกสูง=12 Core= 7.1 km.";
    }
else if($message == "3013-51"){
        $arrayPostData['messages'][0]['text'] = "UDN000581,(3013-44) บ้านหนองไผ่พรเจริญ - (3013-51) ดงง่าม=Optic 12 Core DW = 3.573 km.";
    }
else if($message == "3013-52"){
          $arrayPostData['messages'][0]['text'] = "UDN000754,(ME) ME วังสามหมอ - (3013-52) สามหมอพัฒนา(หมู่ 13)=Optic 12 Core DW = 2.2 km.
UDN001816,(3013-52) สามหมอพัฒนา(หมู่13) - (3013-87) ต.หนองกุงทับม้า น้อยหาญใจ=Optic 12 Core DW = 4.35 km.";
    }
else if($message == "3013-53"){
          $arrayPostData['messages'][0]['text'] = "UDN000972,(3013-48) หนองลุมพุกวังสามหมอ - (3013-53) โนนสะอาด=Optic 12 Core DW = 1.145 km.
UDN000973,(3013-53) โนนสะอาด - (3013-54) โนนผักหอม=Optic 12 Core DW = 1.789 km.";
    }
else if($message == "3013-54"){
        $arrayPostData['messages'][0]['text'] = "UDN000973,(3013-53) โนนสะอาด - (3013-54) โนนผักหอม=Optic 12 Core DW = 1.789 km.";
    }
else if($message == "3013-55"){
          $arrayPostData['messages'][0]['text'] = "UDN001349,(3013-55) นกชุม - (3013-59) บะยาว(วังสามหมอ)=12 Core= 6.862 km.
UDN001351,(3013-55) นานกชุม - (3013-66) นาตาด=Optic 12 Core DW = 2.6 km.
UDN001355,(3017-58) คำบอน - (3013-55) นานกชุม=12 Core= 9.18 km.
UDN001795,(3013-55) นกชุม - (3013-57) นาตาด=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3013-56"){
        $arrayPostData['messages'][0]['text'] = "UDN001348,(3013-60) ดงสวรรค์ - (3013-56) ภูเงิน=Optic 12 Core DW = 2.435 km.";
    }
else if($message == "3013-57"){
          $arrayPostData['messages'][0]['text'] = "UDN001350,(3013-57) นาตาด - (3013-58) บ้านโปร่ง=Optic 12 Core DW = 1.6 km.
UDN001795,(3013-55) นกชุม - (3013-57) นาตาด=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3013-58"){
        $arrayPostData['messages'][0]['text'] = "UDN001350,(3013-57) นาตาด - (3013-58) บ้านโปร่ง=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3013-59"){
        $arrayPostData['messages'][0]['text'] = "UDN001349,(3013-55) นกชุม - (3013-59) บะยาว(วังสามหมอ)=12 Core= 6.862 km.";
    }
else if($message == "3013-60"){
          $arrayPostData['messages'][0]['text'] = "UDN001348,(3013-60) ดงสวรรค์ - (3013-56) ภูเงิน=Optic 12 Core DW = 2.435 km.
UDN001796,(3013-43) บ้านดงกลาง - (3013-60) ดงสวรรค์=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3013-61"){
          $arrayPostData['messages'][0]['text'] = "UDN001356,(3013-62) สมสวัสดิ์ - (3013-61) วังทอง=12 Core= 9.805 km.
UDN001797,(3013-62) สมสวัสดิ์ - (3013-61) วังทอง=12 Core= 9.805 km.";
    }
else if($message == "3013-62"){
          $arrayPostData['messages'][0]['text'] = "UDN001347,(3013-84) ต.ผาสุก คำยาง - (3013-62) สมสวัสดิ์=12 Core= 8.211 km.
UDN001356,(3013-62) สมสวัสดิ์ - (3013-61) วังทอง=12 Core= 9.805 km.
UDN001797,(3013-62) สมสวัสดิ์ - (3013-61) วังทอง=12 Core= 9.805 km.
UDN001809,(3013-62) สมสวัสดิ์ - (3013-78) บ้านคำไฮ=12 Core= 4.605 km.
UDN001810,(3013-62) สมสวัสดิ์ - (3013-79) ต.ผาสุก คำน้อย คำน้อยใหม่ไทยเจริญ=12 Core= 7.287 km.";
    }
else if($message == "3013-63"){
        $arrayPostData['messages'][0]['text'] = "UDN001798,(3013-65) บ้านหนองกุงทับม้า - (3013-63) ต.บะยาว บ้านนาแก=12 Core= 5.13 km.";
    }
else if($message == "3013-64"){
          $arrayPostData['messages'][0]['text'] = "UDN001799,(3013-50) สุขาภิบาล1วังสามหมอ - (3013-64) ต.คำโคกสูง บ้านคำโคกสูง=12 Core= 7.1 km.
UDN001803,(3013-64) ต.คำโคกสูง บ้านคำโคกสูง - (3013-71) ต.คำโคกสูง ท่าลาด=Optic 12 Core DW = 4 km.";
    }
else if($message == "3013-65"){
          $arrayPostData['messages'][0]['text'] = "UDN001798,(3013-65) บ้านหนองกุงทับม้า - (3013-63) ต.บะยาว บ้านนาแก=12 Core= 5.13 km.
UDN001800,(3013-47) โนนสว่าง - (3013-65) ต.หนองกุงทับม้า บ้านหนองกุงทับม้า=12 Core= 5.1 km.";
    }
else if($message == "3013-66"){
          $arrayPostData['messages'][0]['text'] = "UDN001351,(3013-55) นานกชุม - (3013-66) นาตาด=Optic 12 Core DW = 2.6 km.
UDN001805,(3013-66) ต.ผาสุก บ้านคำยางน้อย - (3013-75) ต.ผาสุก ผาทอง=12 Core= 6.4 km.";
    }
else if($message == "3013-69"){
          $arrayPostData['messages'][0]['text'] = "UDN001801,(SJ) บ้านคำบอน-บ้านนกชุม - (3013-69) ต.บะยาว บ้านโคกสว่าง=Optic 12 Core DW = 4.6 km.
UDN001802,(3013-69) ต.บะยาว บ้านโคกสว่าง - (3013-70) ต.บะยาว บ้านโคกเล้า=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3013-70"){
        $arrayPostData['messages'][0]['text'] = "UDN001802,(3013-69) ต.บะยาว บ้านโคกสว่าง - (3013-70) ต.บะยาว บ้านโคกเล้า=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3013-71"){
          $arrayPostData['messages'][0]['text'] = "UDN001803,(3013-64) ต.คำโคกสูง บ้านคำโคกสูง - (3013-71) ต.คำโคกสูง ท่าลาด=Optic 12 Core DW = 4 km.
UDN001804,(3013-71) ต.คำโคกสูง ท่าลาด - (3013-73) ต.คำโคกสูง วังไชย=Optic 12 Core DW = 1.475 km";
    }
else if($message == "3013-73"){
        $arrayPostData['messages'][0]['text'] = "UDN001804,(3013-71) ต.คำโคกสูง ท่าลาด - (3013-73) ต.คำโคกสูง วังไชย=Optic 12 Core DW = 1.475 km.";
    }
else if($message == "3013-75"){
        $arrayPostData['messages'][0]['text'] = "UDN001805,(3013-66) ต.ผาสุก บ้านคำยางน้อย - (3013-75) ต.ผาสุก ผาทอง=12 Core= 6.4 km.";
    }
else if($message == "3013-76"){
        $arrayPostData['messages'][0]['text'] = "UDN001806,(SJ) บ้านดงเศรษฐี - (3013-76) ต.ผาสุก ดานใหญ่=Optic 12 Core DW = 4.55 km.";
    }
else if($message == "3013-77"){
        $arrayPostData['messages'][0]['text'] = "UDN001808,(SJ) บ้านคำไฮ - (3013-77) ต.ผาสุก คำไฮน้อย=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3013-78"){
        $arrayPostData['messages'][0]['text'] = "UDN001809,(3013-62) สมสวัสดิ์ - (3013-78) บ้านคำไฮ=12 Core= 4.605 km.";
    }
else if($message == "3013-79"){
          $arrayPostData['messages'][0]['text'] = "UDN001810,(3013-62) สมสวัสดิ์ - (3013-79) ต.ผาสุก คำน้อย คำน้อยใหม่ไทยเจริญ=12 Core= 7.287 km.
UDN001811,(3013-79) ต.ผาสุก คำน้อยใหม่ไทยเจริญ - (3013-80) ต.ผาสุก คำจวง=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3013-80"){
          $arrayPostData['messages'][0]['text'] = "UDN001811,(3013-79) ต.ผาสุก คำน้อยใหม่ไทยเจริญ - (3013-80) ต.ผาสุก คำจวง=Optic 12 Core DW = 3.1 km.
UDN001812,(3013-80) คำจวง - (3013-81) ต.ผาสุก น้อยมาลีสถาพร=Optic 12 Core DW = 2.66 km.";
    }
else if($message == "3013-81"){
          $arrayPostData['messages'][0]['text'] = "UDN001812,(3013-80) คำจวง - (3013-81) ต.ผาสุก น้อยมาลีสถาพร=Optic 12 Core DW = 2.66 km.
UDN001814,(3013-81) ต.ผาสุก น้อยมาลีสถาพร - (3013-83) ต.ผาสุก ผาสุก=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3013-82"){
        $arrayPostData['messages'][0]['text'] = "UDN001813,(3013-83) ต.ผาสุก ผาสุก - (3013-82) ต.ผาสุก สุมณฑา=12 Core= 5.6 km.";
    }
else if($message == "3013-83"){
          $arrayPostData['messages'][0]['text'] = "UDN001813,(3013-83) ต.ผาสุก ผาสุก - (3013-82) ต.ผาสุก สุมณฑา=12 Core= 5.6 km.
UDN001814,(3013-81) ต.ผาสุก น้อยมาลีสถาพร - (3013-83) ต.ผาสุก ผาสุก=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3013-84"){
          $arrayPostData['messages'][0]['text'] = "UDN001347,(3013-84) ต.ผาสุก คำยาง - (3013-62) สมสวัสดิ์=12 Core= 8.211 km.
UDN001815,(3013-42) ผาสุก(วังสามหมอ) - (3013-84) ต.ผาสุก คำยาง=Optic 12 Core DW = 1.46 km.";
    }
else if($message == "3013-87"){
        $arrayPostData['messages'][0]['text'] = "UDN001816,(3013-52) สามหมอพัฒนา(หมู่13) - (3013-87) ต.หนองกุงทับม้า น้อยหาญใจ=Optic 12 Core DW = 4.35 km.";
    }
else if($message == "3013-88"){
        $arrayPostData['messages'][0]['text'] = "UDN001817,(3013-89) ต.หนองกุงทับม้า ไทยสมพร - (3013-88) ต.หนองกุงทับม้า วังใหญ่=Optic 12 Core DW = 3.535 km.";
    }
else if($message == "3013-89"){
          $arrayPostData['messages'][0]['text'] = "UDN001817,(3013-89) ต.หนองกุงทับม้า ไทยสมพร - (3013-88) ต.หนองกุงทับม้า วังใหญ่=Optic 12 Core DW = 3.535 km.
UDN001818,(3013-45) บ้านสมนริณร์ - (3013-89) ต.หนองกุงทับม้า ไทยสมพร=12 Core= 7 km.";
    }
else if($message == "3013-91"){
        $arrayPostData['messages'][0]['text'] = "UDN001820,(SJ) MEศรีธาตุ-MEวังสามหมอ - (3013-91) ต.หนองหญ้าไซ โคกสะอาด=12 Core= 6.09 km.";
    }
else if($message == "3013-92"){
        $arrayPostData['messages'][0]['text'] = "UDN001821,(3013-41) บ้านเลิงถ่อนโนนสมบูรณ์ - (3013-92) บ้านเลิงถ่อนโนนสมบูรณ์ 2=Optic 12 Core DW = 1.13 km.";
    }
else if($message == "3014-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000814,(3014-61) นายูง - (3004-75) บ้านหัวช้าง=12 Core= 10.71 km.
UDN000977,(3208-61) ME สังคม - (3014-61) ME นายูง=12 Core= 31.48 km.
UDN000978,(3014-61) ME นายูง - (3004-63) น้ำโสม=12 Core= 29.21 km.
UDN001575,(3014-61) บ้านนายูง - (3014-74) นาคำ=Optic 12 Core DW = 2.26 km.";
    }
else if($message == "3014-62"){
          $arrayPostData['messages'][0]['text'] = "UDN001325,(3014-63) ห้วยไฮ - (3014-62) บ้านก้อง=Optic 12 Core DW = 1.408 km.
UDN001331,(3014-62) บ้านก้อง - (3014-71) ทุ่งศรีทอง=Optic 12 Core DW = 1.403 km.
UDN001514,(3014-62) บ้านก้อง - (3014-84) ต.บ้านก้อง นาชมพู=Optic 12 Core DW = 4.821 km.";
    }
else if($message == "3014-63"){
          $arrayPostData['messages'][0]['text'] = "UDN001325,(3014-63) ห้วยไฮ - (3014-62) บ้านก้อง=Optic 12 Core DW = 1.408 km.
UDN001408,(3014-63) บ้านห้วยไฮ - (3004-82) บ้านโพน=Optic 12 Core DW = 2.325 km.
UDN001822,(SJ) MEน้ำโสม-MEนายูง - (3014-63) ห้วยไฮ=Optic 12 Core DW = 0.86 km.";
    }
else if($message == "3014-64"){
        $arrayPostData['messages'][0]['text'] = "UDN001330,(3014-65) บ้านชุมพล - (3014-64) บ้านนาคลัง=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3014-65"){
          $arrayPostData['messages'][0]['text'] = "UDN001330,(3014-65) บ้านชุมพล - (3014-64) บ้านนาคลัง=Optic 12 Core DW = 2.06 km.
UDN001370,(3014-65) ชุมพล - (3014-73) ต.โนนทอง บ้านสมประสงค์=12 Core= 6.72 km.
UDN001823,(SJ) MEนายูง-MEสังคม - (3014-65) ชุมพล=Optic 12 Core DW = 1.85 km.
UDN001836,(3014-65) ชุมพล - (3014-92) ชุมพล 2=12 Core= 2.2 km.";
    }
else if($message == "3014-66"){
          $arrayPostData['messages'][0]['text'] = "UDN001329,(3014-67) ปากราง - (3014-66) ยูงทอง=Optic 12 Core DW = 3.006 km.
UDN001827,(3014-66) ยูงทอง - (3014-72) ยูงทอง2=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3014-67"){
          $arrayPostData['messages'][0]['text'] = "UDN001329,(3014-67) ปากราง - (3014-66) ยูงทอง=Optic 12 Core DW = 3.006 km.
UDN001824,(SJ) MEนายูง-MEสังคม - (3014-67) ปากราง=Optic 12 Core DW = 0.253 km.
UDN001825,(3014-67) ปากราง - (3014-68) บ้านสว่าง=Optic 12 Core DW = 2.31 km.";
    }
else if($message == "3014-68"){
          $arrayPostData['messages'][0]['text'] = "UDN001328,(3014-68) บ้านสว่าง - (3014-69) ห้วยทราย=Optic 12 Core DW = 3.444 km.
UDN001825,(3014-67) ปากราง - (3014-68) บ้านสว่าง=Optic 12 Core DW = 2.31 km.";
    }
else if($message == "3014-69"){
          $arrayPostData['messages'][0]['text'] = "UDN001328,(3014-68) บ้านสว่าง - (3014-69) ห้วยทราย=Optic 12 Core DW = 3.444 km.
UDN001396,(3014-69) บ้านห้วยทราย - (3004-79) บ้านนาเก็น=Optic 12 Core DW = 2.87 km.
UDN001833,(3014-69) ต.นายูง ห้วยทราย - (3014-85) ต.นายูง ห้วยเวียงงาม=Optic 12 Core DW = 6.75 km.";
    }
else if($message == "3014-70"){
          $arrayPostData['messages'][0]['text'] = "UDN001826,(SJ) MEนายูง-MEสังคม - (3014-70) นาต้อง=Optic 12 Core DW = 0.542 km.
UDN001831,(3014-70) นาต้อง - (3014-82) ต.โนนทอง วังเลา=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3014-71"){
        $arrayPostData['messages'][0]['text'] = "UDN001331,(3014-62) บ้านก้อง - (3014-71) ทุ่งศรีทอง=Optic 12 Core DW = 1.403 km.";
    }
else if($message == "3014-72"){
        $arrayPostData['messages'][0]['text'] = "UDN001827,(3014-66) ยูงทอง - (3014-72) ยูงทอง2=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3014-73"){
        $arrayPostData['messages'][0]['text'] = "UDN001370,(3014-65) ชุมพล - (3014-73) ต.โนนทอง บ้านสมประสงค์=12 Core= 6.72 km.";
    }
else if($message == "3014-74"){
        $arrayPostData['messages'][0]['text'] = "UDN001575,(3014-61) บ้านนายูง - (3014-74) นาคำ=Optic 12 Core DW = 2.26 km.";
    }
else if($message == "3014-75"){
          $arrayPostData['messages'][0]['text'] = "UDN001574,(3014-75) นาแค - (3014-88) วังแข้=Optic 12 Core DW = 4.335 km.
UDN001578,(3014-76) วังบง - (3014-75) นาแค=Optic 12 Core DW = 3.06 km.";
    }
else if($message == "3014-76"){
          $arrayPostData['messages'][0]['text'] = "UDN001576,(3014-83) นาตูม - (3014-76) วังบง=Optic 12 Core DW = 2.22 km.
UDN001578,(3014-76) วังบง - (3014-75) นาแค=Optic 12 Core DW = 3.06 km.";
    }
else if($message == "3014-77"){
          $arrayPostData['messages'][0]['text'] = "UDN001573,(3014-77) ปากเจียง - (3014-78) โนนทอง=Optic 12 Core DW = 0.96 km.
UDN001577,(3014-80) โป่งทอง - (3014-77) ปากเจียง=Optic 12 Core DW = 3.6 km.";
    }
else if($message == "3014-78"){
          $arrayPostData['messages'][0]['text'] = "UDN001573,(3014-77) ปากเจียง - (3014-78) โนนทอง=Optic 12 Core DW = 0.96 km.
UDN001834,(3014-78) โนนทอง - (3014-90) ต.โนนทอง เมืองทอง=12 Core= 5.555 km.";
    }
else if($message == "3014-79"){
          $arrayPostData['messages'][0]['text'] = "UDN001828,(3014-81) ต.โนนทอง เชียงดี - (3014-79) ต.โนนทอง กุดเชื่อม=Optic 12 Core DW = 1.4 km.
UDN001829,(3014-79) ต.โนนทอง กุดเชื่อม - (3014-80) ต.โนนทอง โป่งทอง=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3014-80"){
          $arrayPostData['messages'][0]['text'] = "UDN001577,(3014-80) โป่งทอง - (3014-77) ปากเจียง=Optic 12 Core DW = 3.6 km.
UDN001829,(3014-79) ต.โนนทอง กุดเชื่อม - (3014-80) ต.โนนทอง โป่งทอง=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3014-81"){
          $arrayPostData['messages'][0]['text'] = "UDN001828,(3014-81) ต.โนนทอง เชียงดี - (3014-79) ต.โนนทอง กุดเชื่อม=Optic 12 Core DW = 1.4 km.
UDN001830,(SJ) MEนายูง-MEสังคม - (3014-81) ต.โนนทอง เชียงดี=Optic 12 Core DW = 1.45 km.
UDN001835,(3014-81) ต.โนนทอง เชียงดี - (3014-91) โนนป่าแดง=12 Core= 1.705 km.";
    }
else if($message == "3014-82"){
        $arrayPostData['messages'][0]['text'] = "UDN001831,(3014-70) นาต้อง - (3014-82) ต.โนนทอง วังเลา=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3014-83"){
          $arrayPostData['messages'][0]['text'] = "UDN001576,(3014-83) นาตูม - (3014-76) วังบง=Optic 12 Core DW = 2.22 km.
UDN001832,(SJ) MEน้ำโสม-MEนายูง - (3014-83) ต.บ้านก้อง นาตูม=Optic 12 Core DW = 1.315 km.";
    }
else if($message == "3014-84"){
        $arrayPostData['messages'][0]['text'] = "UDN001514,(3014-62) บ้านก้อง - (3014-84) ต.บ้านก้อง นาชมพู=Optic 12 Core DW = 4.821 km.";
    }
else if($message == "3014-85"){
        $arrayPostData['messages'][0]['text'] = "UDN001833,(3014-69) ต.นายูง ห้วยทราย - (3014-85) ต.นายูง ห้วยเวียงงาม=Optic 12 Core DW = 6.75 km.";
    }
else if($message == "3014-87"){
        $arrayPostData['messages'][0]['text'] = "UDN001440,(3014-88) บ้านวังแข้ - (3014-87) บ้านเพิ่ม=12 Core= 6.62 km.";
    }
else if($message == "3014-88"){
          $arrayPostData['messages'][0]['text'] = "UDN001440,(3014-88) บ้านวังแข้ - (3014-87) บ้านเพิ่ม=12 Core= 6.62 km.
UDN001574,(3014-75) นาแค - (3014-88) วังแข้=Optic 12 Core DW = 4.335 km.";
    }
else if($message == "3014-89"){
          $arrayPostData['messages'][0]['text'] = "UDN001482,(3004-83) บ้านโนนสมบูรณ์ - (3014-89) ต.นาแค เทพประทาน=Optic 12 Core DW = 7.92 km.
UDN001725,(3014-89) เทพประทาน - (3004-122) บ้านราชดำริ=12 Core= 1.6 km.";
    }
else if($message == "3014-90"){
        $arrayPostData['messages'][0]['text'] = "UDN001834,(3014-78) โนนทอง - (3014-90) ต.โนนทอง เมืองทอง=12 Core= 5.555 km.";
    }
else if($message == "3014-91"){
        $arrayPostData['messages'][0]['text'] = "UDN001835,(3014-81) ต.โนนทอง เชียงดี - (3014-91) โนนป่าแดง=12 Core= 1.705 km.";
    }
else if($message == "3014-92"){
        $arrayPostData['messages'][0]['text'] = "UDN001836,(3014-65) ชุมพล - (3014-92) ชุมพล 2=12 Core= 2.2 km.";
    }
else if($message == "3015-61"){
        $arrayPostData['messages'][0]['text'] = "UDN001838,(3015-61) ค้อใหญ่ - (3015-87) ค้อใหญ่ 2=Optic 12 Core DW = 1.036 km.";
    }
else if($message == "3015-62"){
          $arrayPostData['messages'][0]['text'] = "UDN000768,(3015-62) กู่แก้ว1 - (3015-78) บ้านซำป่าหัน=Optic 12 Core DW = 1.6 km.
UDN000924,(3015-62) กู่แก้ว1 - (3015-77) บ้านโนนถั่วดิน=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3015-63"){
          $arrayPostData['messages'][0]['text'] = "UDN000579,(3015-63) กู่แก้ว2 - (3015-70) หัวหนอง=Optic 12 Core DW = 1.93 km.
UDN000765,(3015-63) กู่แก้ว2 - (3015-74) บ้านดอนสวรรค์=Optic 12 Core DW = 2.8 km.
UDN000996,(3002-43) ME ธนพิทักษ์ - (3015-63) ME กู่แก้ว=12 Core= 22.488 km.
UDN001124,(3015-63) กู่แก้ว2 - (3015-65) บ้านเหล่าสวนกล้วย=Optic 12 Core DW = 3.68 km.";
    }
else if($message == "3015-65"){
          $arrayPostData['messages'][0]['text'] = "UDN000771,(3015-65) เหล่าสวนกล้วย - (3015-83) บ้านโยธา=Optic 12 Core DW = 2.6 km.
UDN000974,(3015-65) เหล่าสวนกล้วย - (3015-81) บ้านยาง=Optic 12 Core DW = 1.459 km.
UDN001124,(3015-63) กู่แก้ว2 - (3015-65) บ้านเหล่าสวนกล้วย=Optic 12 Core DW = 3.68 km.";
    }
else if($message == "3015-66"){
        $arrayPostData['messages'][0]['text'] = "UDN001143,(SJ) SJ หนองหาน-กุมภวาปี - (3015-66) ไพรจาน=Optic 12 Core DW = 1.19 km.";
    }
else if($message == "3015-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000764,(3015-67) บ้านม่วง(คอนสาย) - (3015-73) บ้านค้อน้อย=Optic 12 Core DW = 4 km.
UDN001636,(3015-68) คอนสาย - (3015-67) บ้านม่วง(คอนสาย)=Optic 12 Core DW = 1.27 km.";
    }
else if($message == "3015-68"){
          $arrayPostData['messages'][0]['text'] = "UDN001636,(3015-68) คอนสาย - (3015-67) บ้านม่วง(คอนสาย)=Optic 12 Core DW = 1.27 km.
UDN001657,(SJ) MEกุมภวาปี-MEหนองหาน - (3015-68) คอนสาย=Optic 12 Core DW = 3.362 km.";
    }
else if($message == "3015-69"){
        $arrayPostData['messages'][0]['text'] = "UDN001658,(SJ) MEไชยวาน-MEศรีธาตุ - (3015-69) บ้านวังแข้=Optic 12 Core DW = 4 km.";
    }
else if($message == "3015-70"){
          $arrayPostData['messages'][0]['text'] = "UDN000579,(3015-63) กู่แก้ว2 - (3015-70) หัวหนอง=Optic 12 Core DW = 1.93 km.
UDN000769,(3015-70) บ้านหัวหนอง - (3015-80) บ้านโนนทองอินทร์=Optic 12 Core DW = 2.249 km.";
    }
else if($message == "3015-73"){
        $arrayPostData['messages'][0]['text'] = "UDN000764,(3015-67) บ้านม่วง(คอนสาย) - (3015-73) บ้านค้อน้อย=Optic 12 Core DW = 4 km.";
    }
else if($message == "3015-74"){
        $arrayPostData['messages'][0]['text'] = "UDN000765,(3015-63) กู่แก้ว2 - (3015-74) บ้านดอนสวรรค์=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3015-75"){
          $arrayPostData['messages'][0]['text'] = "UDN000766,(3015-76) บ้านหนองช้างคาว - (3015-75) บ้านโนนสะอาด=Optic 12 Core DW = 2 km.
UDN001678,(3015-75) บ้านโนนสะอาด - (3002-139) เลาโคกโพธิ์=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3015-76"){
          $arrayPostData['messages'][0]['text'] = "UDN000766,(3015-76) บ้านหนองช้างคาว - (3015-75) บ้านโนนสะอาด=Optic 12 Core DW = 2 km.
UDN000767,(3015-82) บ้านหนองบง - (3015-76) บ้านหนองช้างคาว=Optic 12 Core DW = 1.3 km.
UDN000772,(3015-76) บ้านหนองช้างคาว - (3015-84) บ้านคำแคน=12 Core= 6.398 km.";
    }
else if($message == "3015-77"){
          $arrayPostData['messages'][0]['text'] = "UDN000770,(3015-77) โนนถั่วดิน - (3015-82) บ้านหนองบง=Optic 12 Core DW = 1.4 km.
UDN000924,(3015-62) กู่แก้ว1 - (3015-77) บ้านโนนถั่วดิน=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3015-78"){
          $arrayPostData['messages'][0]['text'] = "UDN000683,(3015-78) บ้านซำป่าหัน - (3015-79) บ้านซำป่ารัง=Optic 12 Core DW = 4.242 km.
UDN000768,(3015-62) กู่แก้ว1 - (3015-78) บ้านซำป่าหัน=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3015-79"){
        $arrayPostData['messages'][0]['text'] = "UDN000683,(3015-78) บ้านซำป่าหัน - (3015-79) บ้านซำป่ารัง=Optic 12 Core DW = 4.242 km.";
    }
else if($message == "3015-80"){
        $arrayPostData['messages'][0]['text'] = "UDN000769,(3015-70) บ้านหัวหนอง - (3015-80) บ้านโนนทองอินทร์=Optic 12 Core DW = 2.249 km.";
    }
else if($message == "3015-81"){
        $arrayPostData['messages'][0]['text'] = "UDN000974,(3015-65) เหล่าสวนกล้วย - (3015-81) บ้านยาง=Optic 12 Core DW = 1.459 km.";
    }
else if($message == "3015-82"){
          $arrayPostData['messages'][0]['text'] = "UDN000767,(3015-82) บ้านหนองบง - (3015-76) บ้านหนองช้างคาว=Optic 12 Core DW = 1.3 km.
UDN000770,(3015-77) โนนถั่วดิน - (3015-82) บ้านหนองบง=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3015-83"){
        $arrayPostData['messages'][0]['text'] = "UDN000771,(3015-65) เหล่าสวนกล้วย - (3015-83) บ้านโยธา=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3015-84"){
          $arrayPostData['messages'][0]['text'] = "UDN000772,(3015-76) บ้านหนองช้างคาว - (3015-84) บ้านคำแคน=12 Core= 6.398 km.
UDN001453,(3015-84) คำแคน - (3015-86) ต.คอนสาย คำแก่นคูณ=Optic 12 Core DW = 4.474 km.";
    }
else if($message == "3015-85"){
        $arrayPostData['messages'][0]['text'] = "UDN001837,(3017-79) ต.จำปี โนนม่วงโคกใหญ่ - (3015-85) ต.บ้านจีต ดูลเลา=Optic 12 Core DW = 4.55 km.";
    }
else if($message == "3015-86"){
        $arrayPostData['messages'][0]['text'] = "UDN001453,(3015-84) คำแคน - (3015-86) ต.คอนสาย คำแก่นคูณ=Optic 12 Core DW = 4.474 km.";
    }
else if($message == "3015-87"){
        $arrayPostData['messages'][0]['text'] = "UDN001838,(3015-61) ค้อใหญ่ - (3015-87) ค้อใหญ่ 2=Optic 12 Core DW = 1.036 km.";
    }
else if($message == "3016-61"){
          $arrayPostData['messages'][0]['text'] = "UDN001839,(3016-79) ต.ทับกุง บ้านคำหว้าทอง - (3016-61) ต.แสงสว่าง บ้านท่ายม=Optic 12 Core DW = 2.391 km.
UDN001841,(3016-61) ต.แสงสว่าง บ้านท่ายม - (3016-78) บ้านทับไฮ ต.แสงสว่าง=Optic 12 Core DW = 4.418 km.
UDN001843,(3016-61) ต.แสงสว่าง บ้านท่ายม - (3016-83) ต.แสงสว่าง ท่าสี=Optic 12 Core DW = 2.257 km.";
    }
else if($message == "3016-63"){
          $arrayPostData['messages'][0]['text'] = "UDN000975,(3016-63) หนองแสง1 - (3016-67) แสงสว่าง=12 Core= 9.015 km.
UDN000991,(3023-65) ME หนองหิน - (3016-63) ME หนองแสง=12 Core= 36 km.
UDN000992,(3002-40) ME กุมภวาปี - (3016-63) ME หนองแสง=12 Core= 30.806 km.
UDN001631,(3016-63) ME หนองแสง - (3016-68) บ้านสามเหลี่ยม=Optic 12 Core DW = 2.44 km.
UDN001659,(3016-63) ME หนองแสง - (3016-64) หนองแสง2=Optic 12 Core DW = 1.55 km.
UDN001842,(3016-63) MEหนองแสง - (3016-79) ต.ทับกุง บ้านคำหว้าทอง=Optic 12 Core DW = 2.257 km.";
    }
else if($message == "3016-64"){
          $arrayPostData['messages'][0]['text'] = "UDN001659,(3016-63) ME หนองแสง - (3016-64) หนองแสง2=Optic 12 Core DW = 1.55 km.
UDN001840,(3016-64) หนองแสง2 - (3016-75) หนองแสงภูฝอยลม=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3016-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000975,(3016-63) หนองแสง1 - (3016-67) แสงสว่าง=12 Core= 9.015 km.
UDN001072,(3016-71) บ้านนาฝาย - (3016-67) แสงสว่าง=Optic 12 Core DW = 6.2 km.";
    }
else if($message == "3016-68"){
          $arrayPostData['messages'][0]['text'] = "UDN000925,(3016-68) บ้านสามเหลี่ยม - (3016-69) บ้านดงสำราญชัย=Optic 12 Core DW = 3.6 km.
UDN001631,(3016-63) ME หนองแสง - (3016-68) บ้านสามเหลี่ยม=Optic 12 Core DW = 2.44 km.";
    }
else if($message == "3016-69"){
          $arrayPostData['messages'][0]['text'] = "UDN000925,(3016-68) บ้านสามเหลี่ยม - (3016-69) บ้านดงสำราญชัย=Optic 12 Core DW = 3.6 km.
UDN001268,(3016-69) บ้านดงสำราญชัย - (3016-70) บ้านหนองแสง=Optic 12 Core DW = 3.05 km.";
    }
else if($message == "3016-70"){
          $arrayPostData['messages'][0]['text'] = "UDN001098,(3016-70) บ้านหนองแสง - (3002-147) คำเจริญ=Optic 12 Core DW = 5 km.
UDN001268,(3016-69) บ้านดงสำราญชัย - (3016-70) บ้านหนองแสง=Optic 12 Core DW = 3.05 km.
UDN001458,(3016-70) บ้านหนองแสง - (3016-81) บ้านคำบอน=Optic 12 Core DW = 2.134 km.
UDN001545,(3016-70) บ้านหนองแสง - (3016-82) บ้านโคกสว่าง=12 Core= 6.004 km.";
    }
else if($message == "3016-71"){
          $arrayPostData['messages'][0]['text'] = "UDN000564,(3016-71) บ้านนาฝาย - (3016-73) บ้านนาดีหนองแสง=Optic 12 Core DW = 2.57 km.
UDN001071,(3002-73) บ้านบุ่งหมากลาน - (3016-71) บ้านนาฝาย=Optic 12 Core DW = 4.5 km.
UDN001072,(3016-71) บ้านนาฝาย - (3016-67) แสงสว่าง=Optic 12 Core DW = 6.2 km.";
    }
else if($message == "3016-72"){
        $arrayPostData['messages'][0]['text'] = "UDN001660,(3033-231) บ้านหลุบหวายป่าขาม - (3016-72) บ้านโนนเชียงคำ=Optic 12 Core DW = 2.701 km.";
    }
else if($message == "3016-73"){
          $arrayPostData['messages'][0]['text'] = "UDN000564,(3016-71) บ้านนาฝาย - (3016-73) บ้านนาดีหนองแสง=Optic 12 Core DW = 2.57 km.
UDN001607,(3016-73) นาดีหนองแสง - (3016-93) บ้านาดีหนองแสง 2=Optic 12 Core DW = 1.105 km.";
    }
else if($message == "3016-75"){
        $arrayPostData['messages'][0]['text'] = "UDN001840,(3016-64) หนองแสง2 - (3016-75) หนองแสงภูฝอยลม=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3016-76"){
        $arrayPostData['messages'][0]['text'] = "UDN000684,(3016-77) บ้านโคกศรี - (3016-76) บ้านห้วยยาง=Optic 12 Core DW = 1.18 km.";
    }
else if($message == "3016-77"){
          $arrayPostData['messages'][0]['text'] = "UDN000684,(3016-77) บ้านโคกศรี - (3016-76) บ้านห้วยยาง=Optic 12 Core DW = 1.18 km.
UDN001139,(3011-55) โนนจำปา - (3016-77) โคกศรี=Optic 12 Core DW = 3.4 km.";
    }
else if($message == "3016-78"){
        $arrayPostData['messages'][0]['text'] = "UDN001841,(3016-61) ต.แสงสว่าง บ้านท่ายม - (3016-78) บ้านทับไฮ ต.แสงสว่าง=Optic 12 Core DW = 4.418 km.";
    }
else if($message == "3016-79"){
          $arrayPostData['messages'][0]['text'] = "UDN001839,(3016-79) ต.ทับกุง บ้านคำหว้าทอง - (3016-61) ต.แสงสว่าง บ้านท่ายม=Optic 12 Core DW = 2.391 km.
UDN001842,(3016-63) MEหนองแสง - (3016-79) ต.ทับกุง บ้านคำหว้าทอง=Optic 12 Core DW = 2.257 km.";
    }
else if($message == "3016-81"){
        $arrayPostData['messages'][0]['text'] = "UDN001458,(3016-70) บ้านหนองแสง - (3016-81) บ้านคำบอน=Optic 12 Core DW = 2.134 km.";
    }
else if($message == "3016-82"){
        $arrayPostData['messages'][0]['text'] = "UDN001545,(3016-70) บ้านหนองแสง - (3016-82) บ้านโคกสว่าง=12 Core= 6.004 km.";
    }
else if($message == "3016-83"){
        $arrayPostData['messages'][0]['text'] = "UDN001843,(3016-61) ต.แสงสว่าง บ้านท่ายม - (3016-83) ต.แสงสว่าง ท่าสี=Optic 12 Core DW = 2.257 km.";
    }
else if($message == "3016-84"){
        $arrayPostData['messages'][0]['text'] = "UDN001844,(3002-115) วังหน้าผา - (3016-84) ต.ทับกุง หนองหว้า=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3016-85"){
        $arrayPostData['messages'][0]['text'] = "UDN001845,(3002-115) วังหน้าผา - (3016-85) ต.ทับกุง บ้านหลบหวาย=12 Core= 6.45 km.";
    }
else if($message == "3016-93"){
        $arrayPostData['messages'][0]['text'] = "UDN001607,(3016-73) นาดีหนองแสง - (3016-93) บ้านาดีหนองแสง 2=Optic 12 Core DW = 1.105 km.";
    }
else if($message == "3017-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000521,(3017-37) บ้านโคกศรี - (3017-41) บ้านโนนสูง ศรีธาตุ=Optic 12 Core DW = 3.7 km.
UDN000522,(3017-38) ME ศรีธาตุ - (3017-37) บ้านโคกศรี=Optic 12 Core DW = 1.17 km.
UDN001315,(3017-37) บ้านโคกศรี - (3017-63) หนองแวงจำปี ต.จำปี=Optic 12 Core DW = 3.96 km.
UDN001439,(3017-37) บ้านโคกศรี - (3017-76) บ้านพรประจักษ์=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3017-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000502,(3002-43) ME ธนพิทักษ์ - (3017-38) ME ศรีธาตุ=12 Core= 30 km.
UDN000503,(3017-38) ME ศรีธาตุ - (3013-37) ME วังสามหมอ=12 Core= 26 km.
UDN000520,(3017-38) ME ศรีธาตุ - (3017-39) ตลาดศรีธาตุ=Optic 12 Core DW = 1.38 km.
UDN000522,(3017-38) ME ศรีธาตุ - (3017-37) บ้านโคกศรี=Optic 12 Core DW = 1.17 km.
UDN000580,(3017-38) ME ศรีธาตุ - (3017-47) ่สหกรณ์การเกษตรศรีธาตุ=Optic 12 Core DW = 1.351 km.
UDN000997,(3006-38) ME ไชยวาน - (3017-38) ME ศรีธาตุ=12 Core= 56.681 km.";
    }
else if($message == "3017-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000520,(3017-38) ME ศรีธาตุ - (3017-39) ตลาดศรีธาตุ=Optic 12 Core DW = 1.38 km.
UDN001314,(3017-39) ตลาดศรีธาตุ - (3017-67) บ้านกอก ต.ศรีธาตุ=Optic 12 Core DW = 2.96 km.
UDN001510,(3017-39) ตลาดศรีธาตุ - (3017-89) บ้านกุดน้ำใส=Optic 12 Core DW = 1.62 km.";
    }
else if($message == "3017-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000521,(3017-37) บ้านโคกศรี - (3017-41) บ้านโนนสูง ศรีธาตุ=Optic 12 Core DW = 3.7 km.
UDN000926,(3017-41) บ้านโนนสูงศรีธาตุ - (3017-51) wirelesบ้านโนนสวรรค์=Optic 12 Core DW = 2 km.
UDN001526,(3017-41) บ้านโนนสูงศรีธาตุ - (3017-80) บ้านโคกผักชี=Optic 12 Core DW = 2.358 km.";
    }
else if($message == "3017-42"){
          $arrayPostData['messages'][0]['text'] = "UDN000531,(SJ) SJ ศรีธาตุ - วังสามหมอ - (3017-42) บ้านโคกหนองแวง=Optic 12 Core DW = 1.01 km.
UDN001317,(3017-42) โคกหนองแวง - (3017-65) บ้านนายูง ต.นายูง=Optic 12 Core DW = 2.157 km.
UDN001851,(3017-42) บ้านโคกหนองแวง - (3017-84) ต.นายูง นาม่วง=Optic 12 Core DW = 2.78 km.";
    }
else if($message == "3017-44"){
          $arrayPostData['messages'][0]['text'] = "UDN001138,(3017-44) บ้านโปร่ง - (3017-57) โคกข่า=Optic 12 Core DW = 1.5 km.
UDN001436,(3017-44) บ้านโปร่ง - (3017-88) บ้านตะเคียนทอง=Optic 12 Core DW = 1.97 km.
UDN001437,(3017-44) บ้านโปร่ง - (3017-85) บ้านโนนพัฒนา=Optic 12 Core DW = 3.34 km.
UDN001661,(SJ) MEกุมภวาปี-MEศรีธาตุ - (3017-44) บ้านโปร่ง=Optic 12 Core DW = 3.653 km.";
    }
else if($message == "3017-45"){
          $arrayPostData['messages'][0]['text'] = "UDN000544,(3017-45) บ้านนาเรียง - (3017-46) บ้านนาค้อ=Optic 12 Core DW = 1.21 km.
UDN001210,(SJ) SJ หัวต่อ กุมภวาปี-ศรีธาตุ - (3017-45) บ้านนาเรียง=Optic 12 Core DW = 5.3 km.
UDN001850,(3017-45) บ้านนาเรียง - (3017-81) ต.ตาดทอง ป่าหวาย=Optic 12 Core DW = 2.62 km.";
    }
else if($message == "3017-46"){
        $arrayPostData['messages'][0]['text'] = "UDN000544,(3017-45) บ้านนาเรียง - (3017-46) บ้านนาค้อ=Optic 12 Core DW = 1.21 km.";
    }
else if($message == "3017-47"){
          $arrayPostData['messages'][0]['text'] = "UDN000580,(3017-38) ME ศรีธาตุ - (3017-47) ่สหกรณ์การเกษตรศรีธาตุ=Optic 12 Core DW = 1.351 km.
UDN001191,(SJ) SJ หัวต่อ - (3017-47) โนนสว่าง=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3017-51"){
        $arrayPostData['messages'][0]['text'] = "UDN000926,(3017-41) บ้านโนนสูงศรีธาตุ - (3017-51) wirelesบ้านโนนสวรรค์=Optic 12 Core DW = 2 km.";
    }
else if($message == "3017-52"){
          $arrayPostData['messages'][0]['text'] = "UDN001024,(SJ) SJ ไชยวาน-ศรีธาตุ - (3017-52) หัวนาคำ=Optic 12 Core DW = 0.9 km.
UDN001137,(3017-52) หัวนาคำ - (3017-55) กุดอีเฆ่า=Optic 12 Core DW = 1.4 km.
UDN001854,(3017-52) หัวนาคำ - (3017-94) ต.หัวนาคำ ป่าหวาย=Optic 12 Core DW = 2.03 km.";
    }
else if($message == "3017-53"){
          $arrayPostData['messages'][0]['text'] = "UDN000708,(3017-53) โนนสำราญ - (3002-152) คำเลา=Optic 12 Core DW = 2.36 km.
UDN001135,(3002-152) บ้านคำเลา - (3017-53) โนนสำราญ=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3017-54"){
        $arrayPostData['messages'][0]['text'] = "UDN001136,(3017-55) กุดอีเฆ่า - (3017-54) ห้วยวังปลา=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3017-55"){
          $arrayPostData['messages'][0]['text'] = "UDN000927,(3017-55) กุดอีเฆ่า - (3017-56) โนนอำนวย=Optic 12 Core DW = 3.3 km.
UDN001136,(3017-55) กุดอีเฆ่า - (3017-54) ห้วยวังปลา=Optic 12 Core DW = 2.7 km.
UDN001137,(3017-52) หัวนาคำ - (3017-55) กุดอีเฆ่า=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3017-56"){
        $arrayPostData['messages'][0]['text'] = "UDN000927,(3017-55) กุดอีเฆ่า - (3017-56) โนนอำนวย=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3017-57"){
        $arrayPostData['messages'][0]['text'] = "UDN001138,(3017-44) บ้านโปร่ง - (3017-57) โคกข่า=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3017-58"){
          $arrayPostData['messages'][0]['text'] = "UDN001354,(3017-59) โคกกลาง ต.หัวนาคำ - (3017-58) คำบอน=Optic 12 Core DW = 3.885 km.
UDN001355,(3017-58) คำบอน - (3013-55) นานกชุม=12 Core= 9.18 km.";
    }
else if($message == "3017-59"){
          $arrayPostData['messages'][0]['text'] = "UDN001352,(3017-60) บ้านคำเมย - (3017-59) โคกกลาง=Optic 12 Core DW = 4.963 km.
UDN001354,(3017-59) โคกกลาง ต.หัวนาคำ - (3017-58) คำบอน=Optic 12 Core DW = 3.885 km.";
    }
else if($message == "3017-60"){
          $arrayPostData['messages'][0]['text'] = "UDN001352,(3017-60) บ้านคำเมย - (3017-59) โคกกลาง=Optic 12 Core DW = 4.963 km.
UDN001353,(3017-61) คำกุง - (3017-60) คำเมย=Optic 12 Core DW = 4.75 km.
UDN001848,(3017-60) คำเมย - (3017-72) ต.หัวนาคำ บ้านคำค้อ=12 Core= 8.35 km.";
    }
else if($message == "3017-61"){
        $arrayPostData['messages'][0]['text'] = "UDN001353,(3017-61) คำกุง - (3017-60) คำเมย=Optic 12 Core DW = 4.75 km.";
    }
else if($message == "3017-62"){
        $arrayPostData['messages'][0]['text'] = "UDN001319,(3017-65) บ้านนายูง ต.นายูง - (3017-62) บ้านบ่อแก้ว ต.หนองนกเขียน=12 Core= 8.9 km.";
    }
else if($message == "3017-63"){
          $arrayPostData['messages'][0]['text'] = "UDN001315,(3017-37) บ้านโคกศรี - (3017-63) หนองแวงจำปี ต.จำปี=Optic 12 Core DW = 3.96 km.
UDN001316,(3017-63) หนองแวงจำปี ต.จำปี - (3017-66) ท่าไฮใหม่ ต.จำปี=Optic 12 Core DW = 3.01 km.";
    }
else if($message == "3017-64"){
          $arrayPostData['messages'][0]['text'] = "UDN001318,(3017-65) บ้านนายูง ต.นายูง - (3017-64) บ้านนาฮี ต.นายูง=Optic 12 Core DW = 1.303 km.
UDN001855,(3017-64) ต.นายูง บ้านนาฮี - (3017-96) ต.หัวนาคำ คำดอกไม้=Optic 12 Core DW = 2.77 km.";
    }
else if($message == "3017-65"){
          $arrayPostData['messages'][0]['text'] = "UDN001317,(3017-42) โคกหนองแวง - (3017-65) บ้านนายูง ต.นายูง=Optic 12 Core DW = 2.157 km.
UDN001318,(3017-65) บ้านนายูง ต.นายูง - (3017-64) บ้านนาฮี ต.นายูง=Optic 12 Core DW = 1.303 km.
UDN001319,(3017-65) บ้านนายูง ต.นายูง - (3017-62) บ้านบ่อแก้ว ต.หนองนกเขียน=12 Core= 8.9 km.
UDN001853,(3017-65) ต.นายูง บ้านนายูง - (3017-90) ต.หนองนกเขียน ป่าไร่=Optic 12 Core DW = 4 km.";
    }
else if($message == "3017-66"){
        $arrayPostData['messages'][0]['text'] = "UDN001316,(3017-63) หนองแวงจำปี ต.จำปี - (3017-66) ท่าไฮใหม่ ต.จำปี=Optic 12 Core DW = 3.01 km.";
    }
else if($message == "3017-67"){
        $arrayPostData['messages'][0]['text'] = "UDN001314,(3017-39) ตลาดศรีธาตุ - (3017-67) บ้านกอก ต.ศรีธาตุ=Optic 12 Core DW = 2.96 km.";
    }
else if($message == "3017-68"){
        $arrayPostData['messages'][0]['text'] = "UDN001846,(SJ) MEศรีธาตุ-MEวังสามหมอ - (3017-68) ต.นายูง หนองกุงปาว=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3017-71"){
        $arrayPostData['messages'][0]['text'] = "UDN001847,(3013-41) บ้านเลิงถ่อนโนนสมบูรณ์ - (3017-71) ต.หนองนกเขียน คำม่วง=12 Core= 8 km.";
    }
else if($message == "3017-72"){
        $arrayPostData['messages'][0]['text'] = "UDN001848,(3017-60) คำเมย - (3017-72) ต.หัวนาคำ บ้านคำค้อ=12 Core= 8.35 km.";
    }
else if($message == "3017-74"){
          $arrayPostData['messages'][0]['text'] = "UDN001509,(3017-74) บ้านห้วยผึ้ง - (3017-87) บ้านสมดี=Optic 12 Core DW = 1.918 km.
UDN001849,(3002-145) ศรีสุข - (3017-74) ต.บ้านโปร่ง บ้านห้วยผึ้ง=Optic 12 Core DW = 3.33 km.";
    }
else if($message == "3017-75"){
        $arrayPostData['messages'][0]['text'] = "UDN001313,(SJ) SJ - (3017-75) บ้านราษสมบูรณ์=Optic 12 Core DW = 2.544 km.";
    }
else if($message == "3017-76"){
        $arrayPostData['messages'][0]['text'] = "UDN001439,(3017-37) บ้านโคกศรี - (3017-76) บ้านพรประจักษ์=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3017-77"){
        $arrayPostData['messages'][0]['text'] = "UDN001524,(3017-78) บ้านสงเปลือย - (3017-77) บ้านโคกเจริญ โคกน้อย=Optic 12 Core DW = 1.562 km.";
    }
else if($message == "3017-78"){
        $arrayPostData['messages'][0]['text'] = "UDN001524,(3017-78) บ้านสงเปลือย - (3017-77) บ้านโคกเจริญ โคกน้อย=Optic 12 Core DW = 1.562 km.";
    }
else if($message == "3017-79"){
        $arrayPostData['messages'][0]['text'] = "UDN001837,(3017-79) ต.จำปี โนนม่วงโคกใหญ่ - (3015-85) ต.บ้านจีต ดูลเลา=Optic 12 Core DW = 4.55 km.";
    }
else if($message == "3017-80"){
        $arrayPostData['messages'][0]['text'] = "UDN001526,(3017-41) บ้านโนนสูงศรีธาตุ - (3017-80) บ้านโคกผักชี=Optic 12 Core DW = 2.358 km.";
    }
else if($message == "3017-81"){
        $arrayPostData['messages'][0]['text'] = "UDN001850,(3017-45) บ้านนาเรียง - (3017-81) ต.ตาดทอง ป่าหวาย=Optic 12 Core DW = 2.62 km.";
    }
else if($message == "3017-82"){
        $arrayPostData['messages'][0]['text'] = "UDN001438,(3002-134) บ้านสวนมอญ - (3017-82) บ้านวังโปร่ง=Optic 12 Core DW = 3 km.";
    }
else if($message == "3017-84"){
        $arrayPostData['messages'][0]['text'] = "UDN001851,(3017-42) บ้านโคกหนองแวง - (3017-84) ต.นายูง นาม่วง=Optic 12 Core DW = 2.78 km.";
    }
else if($message == "3017-85"){
        $arrayPostData['messages'][0]['text'] = "UDN001437,(3017-44) บ้านโปร่ง - (3017-85) บ้านโนนพัฒนา=Optic 12 Core DW = 3.34 km.";
    }
else if($message == "3017-86"){
        $arrayPostData['messages'][0]['text'] = "UDN001852,(SJ) บ้านโปร่ง-บ้านโนนพัฒนา - (3017-86) ค.บ้านโปร่ง สามขา=Optic 12 Core DW = 2.33 km.";
    }
else if($message == "3017-87"){
        $arrayPostData['messages'][0]['text'] = "UDN001509,(3017-74) บ้านห้วยผึ้ง - (3017-87) บ้านสมดี=Optic 12 Core DW = 1.918 km.";
    }
else if($message == "3017-88"){
          $arrayPostData['messages'][0]['text'] = "UDN001436,(3017-44) บ้านโปร่ง - (3017-88) บ้านตะเคียนทอง=Optic 12 Core DW = 1.97 km.
UDN001856,(3017-88) ตะเคียนทอง - (3017-98) ป่าหวายน้อย=Optic 12 Core DW = 3 km.";
    }
else if($message == "3017-89"){
        $arrayPostData['messages'][0]['text'] = "UDN001510,(3017-39) ตลาดศรีธาตุ - (3017-89) บ้านกุดน้ำใส=Optic 12 Core DW = 1.62 km.";
    }
else if($message == "3017-90"){
        $arrayPostData['messages'][0]['text'] = "UDN001853,(3017-65) ต.นายูง บ้านนายูง - (3017-90) ต.หนองนกเขียน ป่าไร่=Optic 12 Core DW = 4 km.";
    }
else if($message == "3017-92"){
          $arrayPostData['messages'][0]['text'] = "UDN001511,(3017-92) บ้านนายูง - (3017-92) บ้านหนองทุ่ม=12 Core= 6.07 km.
UDN001512,(3017-92) บ้านหนองทุ่ม - (3017-93) บ้านคำเจริญ=Optic 12 Core DW = 1.38 km.";
    }
else if($message == "3017-93"){
        $arrayPostData['messages'][0]['text'] = "UDN001512,(3017-92) บ้านหนองทุ่ม - (3017-93) บ้านคำเจริญ=Optic 12 Core DW = 1.38 km.";
    }
else if($message == "3017-94"){
        $arrayPostData['messages'][0]['text'] = "UDN001854,(3017-52) หัวนาคำ - (3017-94) ต.หัวนาคำ ป่าหวาย=Optic 12 Core DW = 2.03 km.";
    }
else if($message == "3017-96"){
        $arrayPostData['messages'][0]['text'] = "UDN001855,(3017-64) ต.นายูง บ้านนาฮี - (3017-96) ต.หัวนาคำ คำดอกไม้=Optic 12 Core DW = 2.77 km.";
    }
else if($message == "3017-98"){
        $arrayPostData['messages'][0]['text'] = "UDN001856,(3017-88) ตะเคียนทอง - (3017-98) ป่าหวายน้อย=Optic 12 Core DW = 3 km.";
    }
else if($message == "3018-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000998,(3008-37) ME หนองหาน - (3018-61) ME พิบูลรักษ์ =12 Core= 31.155 km.
UDN001858,(3018-61) MEพิบูลรักษ์ - (3018-71) บ้านดอนเขือง=Optic 12 Core DW = 2.1 km.
UDN001862,(3018-61) MEพิบูลรักษ์ - (3018-82) บ้านแดงพิบูลย์รักษ์ 2=Optic 12 Core DW = 1.05 km.
UDN001863,(3018-61) MEพิบูลรักษ์ - (3018-83) บ้านแดง ต.บ้านแดง อ.พิบูลย์รักษ์ อุดรธานี=Optic 12 Core DW = 2.63 km.
UDN001864,(3018-61) MEพิบูลรักษ์ - (3018-84) บ้านแดง3=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3018-62"){
          $arrayPostData['messages'][0]['text'] = "UDN001293,(3018-62) บ้านดงยางพรพิบูลย์ - (3018-67) นายม=Optic 12 Core DW = 2.8 km.
UDN001662,(SJ) MEเพ็ญMEบ้านดุง-MEพิบูลรักษ์ - (3018-62) บ้านดงยางพรพิบูลย์=Optic 12 Core DW = 0.37 km.";
    }
else if($message == "3018-64"){
          $arrayPostData['messages'][0]['text'] = "UDN001291,(3018-67) นายม - (3018-64) ดอนกลอย=Optic 12 Core DW = 4.1 km.
UDN001292,(3018-64) ดอนกลอย - (3018-65) บ้านไท=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3018-65"){
          $arrayPostData['messages'][0]['text'] = "UDN001292,(3018-64) ดอนกลอย - (3018-65) บ้านไท=Optic 12 Core DW = 1.8 km.
UDN001861,(3018-65) บ้านไท - (3018-76) บ้านหว้าน=Optic 12 Core DW = 3 km.";
    }
else if($message == "3018-66"){
        $arrayPostData['messages'][0]['text'] = "UDN001290,(3003-114) โนนสมโภชน์ - (3018-66) ถ่อนนาเพลิน=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3018-67"){
          $arrayPostData['messages'][0]['text'] = "UDN001291,(3018-67) นายม - (3018-64) ดอนกลอย=Optic 12 Core DW = 4.1 km.
UDN001293,(3018-62) บ้านดงยางพรพิบูลย์ - (3018-67) นายม=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3018-68"){
          $arrayPostData['messages'][0]['text'] = "UDN001310,(3018-68) ไชยวานน้อย - (3018-69) ดงยางน้อย=Optic 12 Core DW = 3.21 km.
UDN001311,(3008-149) ดงวังพัง - (3018-68) ไชยวานน้อย=Optic 12 Core DW = 2.81 km.
UDN001593,(3018-68) บ้านไชยวานน้อย - (3018-78) บ้านหนองสะอาด ต.ดอนกลอย=Optic 12 Core DW = 2.87 km.
UDN001595,(3018-68) บ้านไชยวานน้อย - (3018-80) บ้านโนนลือชัย=Optic 12 Core DW = 2.21 km.";
    }
else if($message == "3018-69"){
        $arrayPostData['messages'][0]['text'] = "UDN001310,(3018-68) ไชยวานน้อย - (3018-69) ดงยางน้อย=Optic 12 Core DW = 3.21 km.";
    }
else if($message == "3018-70"){
        $arrayPostData['messages'][0]['text'] = "UDN001857,(3018-73) ดอนม่วง - (3018-70) นกหงษ์=Optic 12 Core DW = 1.75 km.";
    }
else if($message == "3018-71"){
        $arrayPostData['messages'][0]['text'] = "UDN001858,(3018-61) MEพิบูลรักษ์ - (3018-71) บ้านดอนเขือง=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3018-72"){
        $arrayPostData['messages'][0]['text'] = "UDN001859,(3018-73) ดอนม่วง - (3018-72) มีชัยพัฒนา=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3018-73"){
          $arrayPostData['messages'][0]['text'] = "UDN001857,(3018-73) ดอนม่วง - (3018-70) นกหงษ์=Optic 12 Core DW = 1.75 km.
UDN001859,(3018-73) ดอนม่วง - (3018-72) มีชัยพัฒนา=Optic 12 Core DW = 3.1 km.
UDN001860,(SJ) MEหนองหาน-MEพิบูลรักษ์ - (3018-73) ดอนม่วง=Optic 12 Core DW = 0.794 km.";
    }
else if($message == "3018-74"){
        $arrayPostData['messages'][0]['text'] = "UDN001568,(3018-75) บ้านนาทรายศรีวิลัย - (3018-74) บ้านหนองไผ่=Optic 12 Core DW = 3.22 km.";
    }
else if($message == "3018-75"){
        $arrayPostData['messages'][0]['text'] = "UDN001568,(3018-75) บ้านนาทรายศรีวิลัย - (3018-74) บ้านหนองไผ่=Optic 12 Core DW = 3.22 km.";
    }
else if($message == "3018-76"){
        $arrayPostData['messages'][0]['text'] = "UDN001861,(3018-65) บ้านไท - (3018-76) บ้านหว้าน=Optic 12 Core DW = 3 km.";
    }
else if($message == "3018-77"){
          $arrayPostData['messages'][0]['text'] = "UDN001594,(3018-78) บ้านหนองสะอาด ต.ดอนกลอย - (3018-77) บ้านหนองโพธิ์คำ ต.ดอนกลอย=Optic 12 Core DW = 1.96 km.
UDN001600,(3018-77) หนองโพธิ์คำ - (3018-81) บ้านดงไร่ ต.บ้านแดง=Optic 12 Core DW = 1.42 km.";
    }
else if($message == "3018-78"){
          $arrayPostData['messages'][0]['text'] = "UDN001593,(3018-68) บ้านไชยวานน้อย - (3018-78) บ้านหนองสะอาด ต.ดอนกลอย=Optic 12 Core DW = 2.87 km.
UDN001594,(3018-78) บ้านหนองสะอาด ต.ดอนกลอย - (3018-77) บ้านหนองโพธิ์คำ ต.ดอนกลอย=Optic 12 Core DW = 1.96 km.";
    }
else if($message == "3018-79"){
        $arrayPostData['messages'][0]['text'] = "UDN001597,(sj) sj - (3018-79) บ้านโพธิ์ ต.บ้านแดง=Optic 12 Core DW = 3.16 km.";
    }
else if($message == "3018-80"){
        $arrayPostData['messages'][0]['text'] = "UDN001595,(3018-68) บ้านไชยวานน้อย - (3018-80) บ้านโนนลือชัย=Optic 12 Core DW = 2.21 km.";
    }
else if($message == "3018-81"){
        $arrayPostData['messages'][0]['text'] = "UDN001600,(3018-77) หนองโพธิ์คำ - (3018-81) บ้านดงไร่ ต.บ้านแดง=Optic 12 Core DW = 1.42 km.";
    }
else if($message == "3018-82"){
        $arrayPostData['messages'][0]['text'] = "UDN001862,(3018-61) MEพิบูลรักษ์ - (3018-82) บ้านแดงพิบูลย์รักษ์ 2=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3018-83"){
        $arrayPostData['messages'][0]['text'] = "UDN001863,(3018-61) MEพิบูลรักษ์ - (3018-83) บ้านแดง ต.บ้านแดง อ.พิบูลย์รักษ์ อุดรธานี=Optic 12 Core DW = 2.63 km.";
    }
else if($message == "3018-84"){
        $arrayPostData['messages'][0]['text'] = "UDN001864,(3018-61) MEพิบูลรักษ์ - (3018-84) บ้านแดง3=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3019-107"){
        $arrayPostData['messages'][0]['text'] = "UDN001305,(3005-79) นาน้ำชุ่ม - (3019-107) นาศรีนวล=Optic 12 Core DW = 3.555 km.";
    }
else if($message == "3019-108"){
          $arrayPostData['messages'][0]['text'] = "UDN001427,(3033-87) บ้านหนองบั่ว - (3019-108) ต.สร้างแป้น บ้านหนองแด่น=Optic 12 Core DW = 3.46 km.
UDN001450,(3019-108) บ้านหนองแด่น - (3019-157) บ้านสร้างแป้น=Optic 12 Core DW = 2.61 km.";
    }
else if($message == "3019-109"){
        $arrayPostData['messages'][0]['text'] = "UDN001363,(3019-58) บ้านหนองกุง - (3019-109) ต.บ้านเหล่า บ้านดอนแดง=Optic 12 Core DW = 2.95 km.";
    }
else if($message == "3019-111"){
        $arrayPostData['messages'][0]['text'] = "UDN001432,(3019-111) บ้านโนนสะอาด - (3019-99) ต.บ้านธาตุ บ้านโพน=Optic 12 Core DW = 2.51 km.";
    }
else if($message == "3019-112"){
        $arrayPostData['messages'][0]['text'] = "UDN001516,(3005-79) บ้านนาน้ำชุ่ม - (3019-112) บ้านนาจันทร์=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3019-113"){
        $arrayPostData['messages'][0]['text'] = "UDN001466,(3019-114) คำเจริญ - (3019-113) บ้านโพนสวรรค์=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3019-114"){
          $arrayPostData['messages'][0]['text'] = "UDN001463,(3019-64) บ้านดอนจันทร์ - (3019-114) บ้านคำเจริญ=Optic 12 Core DW = 1.66 km.
UDN001466,(3019-114) คำเจริญ - (3019-113) บ้านโพนสวรรค์=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3019-115"){
        $arrayPostData['messages'][0]['text'] = "UDN001515,(3005-79) บ้านนาน้ำชุ่ม - (3019-115) บ้านดอนแคน=Optic 12 Core DW = 2.357 km.";
    }
else if($message == "3019-116"){
          $arrayPostData['messages'][0]['text'] = "UDN001566,(3019-116) บ้านดงยาง - (3019-117) บ้านนารายณ์ทุ่งสว่าง=Optic 12 Core DW = 1.02 km.
UDN001865,(3019-118) บ้านโนนแสงจันทร์ - (3019-116) ต.จอมศรี บ้านดงยาง=Optic 12 Core DW = 1.935 km.";
    }
else if($message == "3019-117"){
        $arrayPostData['messages'][0]['text'] = "UDN001566,(3019-116) บ้านดงยาง - (3019-117) บ้านนารายณ์ทุ่งสว่าง=Optic 12 Core DW = 1.02 km.";
    }
else if($message == "3019-118"){
          $arrayPostData['messages'][0]['text'] = "UDN001583,(3019-121) บ้านนาสะอาด - (3019-118) บ้านโนนแสงจันทร์=Optic 12 Core DW = 0.83 km.
UDN001865,(3019-118) บ้านโนนแสงจันทร์ - (3019-116) ต.จอมศรี บ้านดงยาง=Optic 12 Core DW = 1.935 km.";
    }
else if($message == "3019-119"){
          $arrayPostData['messages'][0]['text'] = "UDN001558,(3019-119) บ้านนาพัง - (3019-121) บ้านนาสะอาด=Optic 12 Core DW = 1.22 km.
UDN001581,(3019-119) บ้านนาพัง - (3019-122) บ้านศรีเจริญ=Optic 12 Core DW = 1.325 km.
UDN001582,(3019-98) บ้านจอมศรี - (3019-119) บ้านนาพัง=Optic 12 Core DW = 1.88 km.";
    }
else if($message == "3019-121"){
          $arrayPostData['messages'][0]['text'] = "UDN001558,(3019-119) บ้านนาพัง - (3019-121) บ้านนาสะอาด=Optic 12 Core DW = 1.22 km.
UDN001583,(3019-121) บ้านนาสะอาด - (3019-118) บ้านโนนแสงจันทร์=Optic 12 Core DW = 0.83 km.";
    }
else if($message == "3019-122"){
        $arrayPostData['messages'][0]['text'] = "UDN001581,(3019-119) บ้านนาพัง - (3019-122) บ้านศรีเจริญ=Optic 12 Core DW = 1.325 km.";
    }
else if($message == "3019-123"){
          $arrayPostData['messages'][0]['text'] = "UDN001541,(3019-125) บ้านโนนศรีสำราญ - (3019-123) บ้านข่า=Optic 12 Core DW = 1.99 km.
UDN001543,(3019-123) บ้านข่า - (3019-124) บ้านศรีสมบูรณ์=Optic 12 Core DW = 1.296 km.";
    }
else if($message == "3019-124"){
        $arrayPostData['messages'][0]['text'] = "UDN001543,(3019-123) บ้านข่า - (3019-124) บ้านศรีสมบูรณ์=Optic 12 Core DW = 1.296 km.";
    }
else if($message == "3019-125"){
          $arrayPostData['messages'][0]['text'] = "UDN001541,(3019-125) บ้านโนนศรีสำราญ - (3019-123) บ้านข่า=Optic 12 Core DW = 1.99 km.
UDN001542,(3019-93) บ้านจอมตาลใต้ - (3019-125) บ้านโนนศรีสำราญ=Optic 12 Core DW = 1.795 km.";
    }
else if($message == "3019-126"){
        $arrayPostData['messages'][0]['text'] = "UDN001540,(3019-82) บ้านดงยาง - (3019-126) บ้านหนองบ่อ=Optic 12 Core DW = 3.47 km.";
    }
else if($message == "3019-127"){
        $arrayPostData['messages'][0]['text'] = "UDN001866,(3019-84) ต.เชียงหวาง บ้านโพนทัน - (3019-127) ต.เชียงหวาง บ้านโคกน้อย=Optic 12 Core DW = 2.95 km.";
    }
else if($message == "3019-128"){
        $arrayPostData['messages'][0]['text'] = "UDN001467,(3019-86) ต.เชียงหวาง บ้านเชียงหวาง - (3019-128) บ้านนาดี=Optic 12 Core DW = 2.12 km.";
    }
else if($message == "3019-129"){
        $arrayPostData['messages'][0]['text'] = "UDN001867,(SJ) บ้านโพนทอง-บ้านคำผักหนาม - (3019-129) ต.เชียงหวาง บ้านดอนข่า=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3019-131"){
        $arrayPostData['messages'][0]['text'] = "UDN001598,(3019-162) บ้านบุญทันพัฒนา - (3019-131) บ้านสงเปลือย ต.นาบัว=Optic 12 Core DW = 2.995 km.";
    }
else if($message == "3019-132"){
          $arrayPostData['messages'][0]['text'] = "UDN001521,(3019-71) บ้านยางซอง - (3019-132) บ้านนาทราย=Optic 12 Core DW = 1.83 km.
UDN001873,(3019-132) บ้านนาทราย - (3019-166) หนองผือ=Optic 12 Core DW = 3.8 km.";
    }
else if($message == "3019-133"){
          $arrayPostData['messages'][0]['text'] = "UDN001520,(3019-67) บ้านนาบัว - (3019-133) บ้านไผ่ ต.นาบัว=Optic 12 Core DW = 1.66 km.
UDN001603,(3019-133) บ้านไผ่ - (3019-135) บ้านหนาด ต.นาบัว=Optic 12 Core DW = 1.535 km.";
    }
else if($message == "3019-134"){
        $arrayPostData['messages'][0]['text'] = "UDN001599,(3019-135) บ้านหนาด - (3019-134) บ้านท่าหลังดิน ต.นาบัว=Optic 12 Core DW = 1.22 km.";
    }
else if($message == "3019-135"){
          $arrayPostData['messages'][0]['text'] = "UDN001599,(3019-135) บ้านหนาด - (3019-134) บ้านท่าหลังดิน ต.นาบัว=Optic 12 Core DW = 1.22 km.
UDN001603,(3019-133) บ้านไผ่ - (3019-135) บ้านหนาด ต.นาบัว=Optic 12 Core DW = 1.535 km.";
    }
else if($message == "3019-136"){
        $arrayPostData['messages'][0]['text'] = "UDN001868,(3019-63) ดงมะไฟตำบลนาพู่ - (3019-136) ต.นาพู่ ศรีบุญเรือง=Optic 12 Core DW = 3.78 km.";
    }
else if($message == "3019-137"){
        $arrayPostData['messages'][0]['text'] = "UDN001589,(3019-138) ดอนหมากแก้ว - (3019-137) ดอนยาง ต.นาพู่=Optic 12 Core DW = 1.66 km.";
    }
else if($message == "3019-138"){
        $arrayPostData['messages'][0]['text'] = "UDN001589,(3019-138) ดอนหมากแก้ว - (3019-137) ดอนยาง ต.นาพู่=Optic 12 Core DW = 1.66 km.";
    }
else if($message == "3019-139"){
        $arrayPostData['messages'][0]['text'] = "UDN001587,(3019-63) บ้านดงมะไฟ - (3019-139) บ้านกิ่ว=Optic 12 Core DW = 1.31 km.";
    }
else if($message == "3019-141"){
        $arrayPostData['messages'][0]['text'] = "UDN001588,(3033-212) บ้านนาพู่ - (3019-141) บ้านดงสว่าง=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3019-142"){
          $arrayPostData['messages'][0]['text'] = "UDN001519,(3019-90) บ้านหลวง - (3019-142) บ้านม่วง=Optic 12 Core DW = 3.5 km.
UDN001939,(3019-142) บ้านม่วง - (3033-508) บ้านม่วง2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3019-143"){
          $arrayPostData['messages'][0]['text'] = "UDN001590,(3019-145) บ้านนิคม - (3019-143) บ้านถิ่น ต.บ้านธาตุ=Optic 12 Core DW = 1.95 km.
UDN001596,(3019-143) บ้านถิ่น - (3019-147) บ้านสุขา ต.บ้านธาตุ=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3019-144"){
        $arrayPostData['messages'][0]['text'] = "UDN001869,(SJ) MEหนองคาย-MEเพ็ญ - (3019-144) ต.บ้านธาตุ บ้านโนนสมบูรณ์=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3019-145"){
          $arrayPostData['messages'][0]['text'] = "UDN001590,(3019-145) บ้านนิคม - (3019-143) บ้านถิ่น ต.บ้านธาตุ=Optic 12 Core DW = 1.95 km.
UDN001591,(3019-99) บ้านโพน - (3019-145) บ้านนิคม ต.บ้านธาตุ=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3019-146"){
        $arrayPostData['messages'][0]['text'] = "UDN001592,(3019-39) บ้านธาตุ - (3019-146) บ้านนาพูลทรัพย์ ต.บ้านธาตุ=Optic 12 Core DW = 3.195 km.";
    }
else if($message == "3019-147"){
        $arrayPostData['messages'][0]['text'] = "UDN001596,(3019-143) บ้านถิ่น - (3019-147) บ้านสุขา ต.บ้านธาตุ=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3019-149"){
        $arrayPostData['messages'][0]['text'] = "UDN001518,(3019-61) บ้านเตาไห - (3019-149) บ้านโคกสว่าง=12 Core= 7.23 km.";
    }
else if($message == "3019-151"){
        $arrayPostData['messages'][0]['text'] = "UDN001557,(3019-82) บ้านยาง - (3019-151) บ้านนาพระ=Optic 12 Core DW = 1.775 km.";
    }
else if($message == "3019-152"){
          $arrayPostData['messages'][0]['text'] = "UDN001462,(3019-152) บ้านศรีสุวรรณ - (3019-153) บ้านโพนสว่าง=Optic 12 Core DW = 2.06 km.
UDN001465,(3019-82) ต.บ้านเหล่า บ้านยาง - (3019-152) บ้านศรีสุวรรณ=Optic 12 Core DW = 4.13 km.";
    }
else if($message == "3019-153"){
        $arrayPostData['messages'][0]['text'] = "UDN001462,(3019-152) บ้านศรีสุวรรณ - (3019-153) บ้านโพนสว่าง=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3019-154"){
        $arrayPostData['messages'][0]['text'] = "UDN001464,(3019-95) บ้านหนองตุ - (3019-154) บ้านหนองลุมพุก=Optic 12 Core DW = 4.41 km.";
    }
else if($message == "3019-155"){
        $arrayPostData['messages'][0]['text'] = "UDN001444,(3019-72) บ้านดอนกลอย - (3019-155) บ้านทอน,ดอนยาว=12 Core= 5.62 km.";
    }
else if($message == "3019-156"){
        $arrayPostData['messages'][0]['text'] = "UDN001539,(3019-157) บ้านสร้างแป้น - (3019-156) บ้านดอนเค็ง=Optic 12 Core DW = 4.72 km.";
    }
else if($message == "3019-157"){
          $arrayPostData['messages'][0]['text'] = "UDN001450,(3019-108) บ้านหนองแด่น - (3019-157) บ้านสร้างแป้น=Optic 12 Core DW = 2.61 km.
UDN001539,(3019-157) บ้านสร้างแป้น - (3019-156) บ้านดอนเค็ง=Optic 12 Core DW = 4.72 km.";
    }
else if($message == "3019-158"){
          $arrayPostData['messages'][0]['text'] = "UDN001601,(3019-158) บ้านโนนหนามแท่ง - (3019-159) บ้านดงบ่อ ต.สุมเส้า=Optic 12 Core DW = 1.28 km.
UDN001870,(SJ) MEเพ็ญ-MEบ้านดุง - (3019-158) ต.สุ้มเส้า บ้านโนนหนามแท่ง=Optic 12 Core DW = 1.52 km.";
    }
else if($message == "3019-159"){
        $arrayPostData['messages'][0]['text'] = "UDN001601,(3019-158) บ้านโนนหนามแท่ง - (3019-159) บ้านดงบ่อ ต.สุมเส้า=Optic 12 Core DW = 1.28 km.";
    }
else if($message == "3019-161"){
        $arrayPostData['messages'][0]['text'] = "UDN001871,(SJ) MEเพ็ญ-MEบ้านดุง - (3019-161) ต.สุ้มเส้า ห้วยวังโตน=Optic 12 Core DW = 0.435 km.";
    }
else if($message == "3019-162"){
          $arrayPostData['messages'][0]['text'] = "UDN001598,(3019-162) บ้านบุญทันพัฒนา - (3019-131) บ้านสงเปลือย ต.นาบัว=Optic 12 Core DW = 2.995 km.
UDN001602,(3019-52) บ้านหนองผือน้อย - (3019-162) บ้านบุญทันพัฒนา ต.สุมเส้า=Optic 12 Core DW = 2.26 km.";
    }
else if($message == "3019-163"){
        $arrayPostData['messages'][0]['text'] = "UDN001872,(SJ) MEเพ็ญ-MEบ้านดุง - (3019-163) ต.สุ้มเส้า บ้านแพงศรี=Optic 12 Core DW = 0.78 km.";
    }
else if($message == "3019-166"){
          $arrayPostData['messages'][0]['text'] = "UDN001873,(3019-132) บ้านนาทราย - (3019-166) หนองผือ=Optic 12 Core DW = 3.8 km.
UDN001880,(3019-166) หนองผือ - (3019-179) คำไหล=Optic 12 Core DW = 2.14 km.";
    }
else if($message == "3019-168"){
        $arrayPostData['messages'][0]['text'] = "UDN001874,(3019-38) เพ็ญ2 - (3019-168) เพ็ญ 3=Optic 12 Core DW = 0.95 km.";
    }
else if($message == "3019-171"){
        $arrayPostData['messages'][0]['text'] = "UDN001875,(3019-37) ME เพ็ญ - (3019-171) เพ็ญ 4=Optic 12 Core DW = 1.75 km.";
    }
else if($message == "3019-173"){
        $arrayPostData['messages'][0]['text'] = "UDN001876,(3019-66) สร้างหลวงสร้างคำ - (3019-173) บ้านโนนอ่าง=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3019-175"){
          $arrayPostData['messages'][0]['text'] = "UDN001877,(3019-178) ต.บ้านธาตุ บ้านโนนทอง - (3019-175) หว้านน้อย=Optic 12 Core DW = 2.58 km.
UDN001878,(3019-175) หว้านน้อย - (3019-177) ต.สร้างแป้น หนองซองแมว=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3019-177"){
        $arrayPostData['messages'][0]['text'] = "UDN001878,(3019-175) หว้านน้อย - (3019-177) ต.สร้างแป้น หนองซองแมว=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3019-178"){
          $arrayPostData['messages'][0]['text'] = "UDN001877,(3019-178) ต.บ้านธาตุ บ้านโนนทอง - (3019-175) หว้านน้อย=Optic 12 Core DW = 2.58 km.
UDN001879,(3019-65) บ้านยามกาน้อย - (3019-178) ต.บ้านธาตุ บ้านโนนทอง=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3019-179"){
        $arrayPostData['messages'][0]['text'] = "UDN001880,(3019-166) หนองผือ - (3019-179) คำไหล=Optic 12 Core DW = 2.14 km.";
    }
else if($message == "3019-181"){
        $arrayPostData['messages'][0]['text'] = "UDN001663,(3019-92) ต.สุมเส้า บ้านโนนสะอาด - (3019-181) ต.สุมเส้า บ้านพบสุข=Optic 12 Core DW = 2.165 km.";
    }
else if($message == "3019-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000455,() SJ บ้านจิก-หนองสองห้อง - (3019-37) เพ็ญ1=12 Core= 14.473 km.
UDN000456,(3019-37) เพ็ญ1 - (3019-38) เพ็ญ2=Optic 12 Core DW = 1.568 km.
UDN001001,(3005-62) ME สร้างคอม - (3019-37) ME เพ็ญ=12 Core= 28.34 km.
UDN001042,(3003-61) ME บ้านดุง - (3019-37) เพ็ญ1=12 Core= 52 km.
UDN001875,(3019-37) ME เพ็ญ - (3019-171) เพ็ญ 4=Optic 12 Core DW = 1.75 km.";
    }
else if($message == "3019-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000456,(3019-37) เพ็ญ1 - (3019-38) เพ็ญ2=Optic 12 Core DW = 1.568 km.
UDN000479,(3019-38) เพ็ญ2 - (3019-40) บ้านโคกกลาง (อ.เพ็ญ)=Optic 12 Core DW = 2.9 km.
UDN001874,(3019-38) เพ็ญ2 - (3019-168) เพ็ญ 3=Optic 12 Core DW = 0.95 km.";
    }
else if($message == "3019-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000457,() SJ Route อ.เพ็ญ - (3019-39) บ้านธาต(อำเภอเพ็ญ)=Optic 12 Core DW = 2.598 km.
UDN001592,(3019-39) บ้านธาตุ - (3019-146) บ้านนาพูลทรัพย์ ต.บ้านธาตุ=Optic 12 Core DW = 3.195 km.";
    }
else if($message == "3019-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000479,(3019-38) เพ็ญ2 - (3019-40) บ้านโคกกลาง (อ.เพ็ญ)=Optic 12 Core DW = 2.9 km.
UDN001884,(3019-40) บ้านโคกกลาง(อ.เพ็ญ) - (3019-68) โคกก่อง=Optic 12 Core DW = 1.97 km.";
    }
else if($message == "3019-42"){
          $arrayPostData['messages'][0]['text'] = "UDN000539,(3019-42) ป่าก้าว - (3019-43) ดอนแดง=Optic 12 Core DW = 1.49 km.
UDN001431,(3019-42) ป่าก้าว - (3019-85) ต.นาพู่ บ้านหนองนกเขียน=Optic 12 Core DW = 2.89 km.
UDN001664,(SJ) อุดรคอนโดเทล-หนองคาย - (3019-42) บ้านป่าก้าว=Optic 12 Core DW = 2.83 km.";
    }
else if($message == "3019-43"){
          $arrayPostData['messages'][0]['text'] = "UDN000539,(3019-42) ป่าก้าว - (3019-43) ดอนแดง=Optic 12 Core DW = 1.49 km.
UDN001431,(3019-42) ป่าก้าว - (3019-85) ต.นาพู่ บ้านหนองนกเขียน=Optic 12 Core DW = 2.89 km.
UDN001664,(SJ) อุดรคอนโดเทล-หนองคาย - (3019-42) บ้านป่าก้าว=Optic 12 Core DW = 2.83 km.";
    }
else if($message == "3019-44"){
        $arrayPostData['messages'][0]['text'] = "UDN000543,(3033-212) บ้านนาพู่ - (3019-44) บ้านนาพู่2=Optic 12 Core DW = 3.517 km.";
    }
else if($message == "3019-45"){
          $arrayPostData['messages'][0]['text'] = "UDN001637,(3031-99) ME ตลาดไทยศิรินาข่า - (3019-45) บ้านด่าน=12 Core= 5.93 km.
UDN001665,(3019-45) บ้านด่าน - (3019-46) บ้านโพนเล่า=Optic 12 Core DW = 2.65 km.";
    }
else if($message == "3019-46"){
          $arrayPostData['messages'][0]['text'] = "UDN001638,(3019-46) บ้านโพนเล่า - (3019-47) บ้านดงใหญ่=Optic 12 Core DW = 1.685 km.
UDN001665,(3019-45) บ้านด่าน - (3019-46) บ้านโพนเล่า=Optic 12 Core DW = 2.65 km.
UDN001885,(3019-46) บ้านโพนเล่า - (3019-69) บ้านโพนทอง ต.เชียงหวาง=Optic 12 Core DW = 1.25 km.";
    }
else if($message == "3019-47"){
        $arrayPostData['messages'][0]['text'] = "UDN001638,(3019-46) บ้านโพนเล่า - (3019-47) บ้านดงใหญ่=Optic 12 Core DW = 1.685 km.";
    }
else if($message == "3019-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000928,(3019-49) สุมเส้า - (3019-50) บ้านดงยางใหญ่=Optic 12 Core DW = 2.7 km.
UDN000929,(3019-49) สุมเส้า - (3019-52) wireless หนองผือน้อย=Optic 12 Core DW = 2.2 km.
UDN001043,(SJ) SJ เพ็ญ-บ้านดุง - (3019-49) สุมเส้า=Optic 12 Core DW = 0.65 km.
UDN001883,(3019-49) สุมเส้า - (3019-67) นาบัว=Optic 12 Core DW = 3.135 km.
UDN001893,(3019-49) สุมเส้า - (3019-92) ต.สุมเส้า บ้านโนนสะอาด=12 Core= 10.5 km.";
    }
else if($message == "3019-50"){
        $arrayPostData['messages'][0]['text'] = "UDN000928,(3019-49) สุมเส้า - (3019-50) บ้านดงยางใหญ่=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3019-52"){
          $arrayPostData['messages'][0]['text'] = "UDN000929,(3019-49) สุมเส้า - (3019-52) wireless หนองผือน้อย=Optic 12 Core DW = 2.2 km.
UDN001602,(3019-52) บ้านหนองผือน้อย - (3019-162) บ้านบุญทันพัฒนา ต.สุมเส้า=Optic 12 Core DW = 2.26 km.";
    }
else if($message == "3019-53"){
        $arrayPostData['messages'][0]['text'] = "UDN001517,(3019-53) บ้านสังซา - (3019-88) บ้านดอกไม้=12 Core= 6.52 km.";
    }
else if($message == "3019-54"){
          $arrayPostData['messages'][0]['text'] = "UDN001295,(SJ) SJ หัวต่อ - (3019-54) บ้านนาพัง=Optic 12 Core DW = 2.7 km.
UDN001300,(3019-54) บ้านนาพัง - (3019-61) เตาไห=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3019-55"){
          $arrayPostData['messages'][0]['text'] = "UDN000930,(3019-57) ดอนเงิน - (3019-55) หนองไชยวาน=Optic 12 Core DW = 2.5 km.
UDN001036,(3019-55) บ้านหนองไชยวาน - (3005-71) นามั่ง=Optic 12 Core DW = 1.7 km.
UDN001296,(3019-57) บ้านดอนเงิน - (3019-55) หนองไชยวาน=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3019-56"){
          $arrayPostData['messages'][0]['text'] = "UDN000685,(3019-61) บ้านเตาไห - (3019-56) บ้านหม้อ=Optic 12 Core DW = 3.43 km.
UDN001298,(3019-56) บ้านหม้อ - (3019-58) บ้านหนองกุง=Optic 12 Core DW = 3.7 km.
UDN001299,(3019-56) บ้านหม้อ - (3019-60) หนองผง=12 Core= 5.63 km.
UDN001322,(3019-56) บ้านหม้อ - (3019-77) ดอนสวรรค์=Optic 12 Core DW = 2.26 km.";
    }
else if($message == "3019-57"){
          $arrayPostData['messages'][0]['text'] = "UDN000930,(3019-57) ดอนเงิน - (3019-55) หนองไชยวาน=Optic 12 Core DW = 2.5 km.
UDN001296,(3019-57) บ้านดอนเงิน - (3019-55) หนองไชยวาน=Optic 12 Core DW = 2.5 km.
UDN001297,(3019-60) บ้านหนองผง - (3019-57) ดอนเงิน=Optic 12 Core DW = 1.2 km.
UDN001367,(3019-57) บ้านดอนเงิน - (3019-82) ต.บ้านเหล่า บ้านยาง=Optic 12 Core DW = 5.3 km.";
    }
else if($message == "3019-58"){
          $arrayPostData['messages'][0]['text'] = "UDN000930,(3019-57) ดอนเงิน - (3019-55) หนองไชยวาน=Optic 12 Core DW = 2.5 km.
UDN001296,(3019-57) บ้านดอนเงิน - (3019-55) หนองไชยวาน=Optic 12 Core DW = 2.5 km.
UDN001297,(3019-60) บ้านหนองผง - (3019-57) ดอนเงิน=Optic 12 Core DW = 1.2 km.
UDN001367,(3019-57) บ้านดอนเงิน - (3019-82) ต.บ้านเหล่า บ้านยาง=Optic 12 Core DW = 5.3 km.";
    }
else if($message == "3019-59"){
        $arrayPostData['messages'][0]['text'] = "UDN000931,(3019-58) บ้านหนองกุง - (3019-59) บ้านศรีสำราญ=Optic 12 Core DW = 4 km.";
    }
else if($message == "3019-60"){
          $arrayPostData['messages'][0]['text'] = "UDN001297,(3019-60) บ้านหนองผง - (3019-57) ดอนเงิน=Optic 12 Core DW = 1.2 km.
UDN001299,(3019-56) บ้านหม้อ - (3019-60) หนองผง=12 Core= 5.63 km.";
    }
else if($message == "3019-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000685,(3019-61) บ้านเตาไห - (3019-56) บ้านหม้อ=Optic 12 Core DW = 3.43 km.
UDN001300,(3019-54) บ้านนาพัง - (3019-61) เตาไห=Optic 12 Core DW = 1.4 km.
UDN001518,(3019-61) บ้านเตาไห - (3019-149) บ้านโคกสว่าง=12 Core= 7.23 km.";
    }
else if($message == "3019-62"){
        $arrayPostData['messages'][0]['text'] = "UDN000932,(3019-58) บ้านหนองกุง - (3019-62) หนองผงน้อย=Optic 12 Core DW = 1.76 km.";
    }
else if($message == "3019-63"){
          $arrayPostData['messages'][0]['text'] = "UDN001301,(3033-304) บ้านดงนาม่วง - (3019-63) ดงมะไฟ=Optic 12 Core DW = 2 km.
UDN001587,(3019-63) บ้านดงมะไฟ - (3019-139) บ้านกิ่ว=Optic 12 Core DW = 1.31 km.
UDN001868,(3019-63) ดงมะไฟตำบลนาพู่ - (3019-136) ต.นาพู่ ศรีบุญเรือง=Optic 12 Core DW = 3.78 km.";
    }
else if($message == "3019-64"){
          $arrayPostData['messages'][0]['text'] = "UDN001302,(3005-70) ชาติ - (3019-64) บ้านดอนจันทร์=Optic 12 Core DW = 1.3 km.
UDN001463,(3019-64) บ้านดอนจันทร์ - (3019-114) บ้านคำเจริญ=Optic 12 Core DW = 1.66 km.";
    }
else if($message == "3019-65"){
          $arrayPostData['messages'][0]['text'] = "UDN001434,(3019-65) ยามกาน้อย - (3019-93) จอมตาลใต้=12 Core= 7.48 km.
UDN001606,(3019-65) บ้านยามกาน้อย - (3019-78) บ้านยามกาใหญ่=Optic 12 Core DW = 1.381 km.
UDN001879,(3019-65) บ้านยามกาน้อย - (3019-178) ต.บ้านธาตุ บ้านโนนทอง=Optic 12 Core DW = 2.5 km.
UDN001881,(3019-68) โคกก่อง - (3019-65) ยามกาน้อย=12 Core= 6.41 km.";
    }
else if($message == "3019-66"){
          $arrayPostData['messages'][0]['text'] = "UDN001430,(3019-66) สร้างหลวงสร้างคำ - (3019-86) ต.เชียงหวาง บ้านเชียงหวาง=Optic 12 Core DW = 2.76 km.
UDN001876,(3019-66) สร้างหลวงสร้างคำ - (3019-173) บ้านโนนอ่าง=Optic 12 Core DW = 1.7 km.
UDN001882,(3019-69) บ้านโพนทอง ต.เชียงหวาง - (3019-66) สร้างหลวงสร้างคำ=Optic 12 Core DW = 2.75 km.";
    }
else if($message == "3019-67"){
          $arrayPostData['messages'][0]['text'] = "UDN001520,(3019-67) บ้านนาบัว - (3019-133) บ้านไผ่ ต.นาบัว=Optic 12 Core DW = 1.66 km.
UDN001883,(3019-49) สุมเส้า - (3019-67) นาบัว=Optic 12 Core DW = 3.135 km.
UDN001886,(3019-67) นาบัว - (3019-71) ยางซอง=Optic 12 Core DW = 2.9 km.
UDN001887,(3019-67) นาบัว - (3019-72) ดอนกลอย=Optic 12 Core DW = 5.965 km.";
    }
else if($message == "3019-68"){
          $arrayPostData['messages'][0]['text'] = "UDN001881,(3019-68) โคกก่อง - (3019-65) ยามกาน้อย=12 Core= 6.41 km.
UDN001884,(3019-40) บ้านโคกกลาง(อ.เพ็ญ) - (3019-68) โคกก่อง=Optic 12 Core DW = 1.97 km.";
    }
else if($message == "3019-69"){
          $arrayPostData['messages'][0]['text'] = "UDN001425,(3019-69) บ้านโพนทอง - (3019-87) ต.เชียงหวาง บ้านคำผักหนาม=12 Core= 8.23 km.
UDN001882,(3019-69) บ้านโพนทอง ต.เชียงหวาง - (3019-66) สร้างหลวงสร้างคำ=Optic 12 Core DW = 2.75 km.
UDN001885,(3019-46) บ้านโพนเล่า - (3019-69) บ้านโพนทอง ต.เชียงหวาง=Optic 12 Core DW = 1.25 km.";
    }
else if($message == "3019-71"){
          $arrayPostData['messages'][0]['text'] = "UDN001521,(3019-71) บ้านยางซอง - (3019-132) บ้านนาทราย=Optic 12 Core DW = 1.83 km.
UDN001886,(3019-67) นาบัว - (3019-71) ยางซอง=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3019-72"){
          $arrayPostData['messages'][0]['text'] = "UDN001444,(3019-72) บ้านดอนกลอย - (3019-155) บ้านทอน,ดอนยาว=12 Core= 5.62 km.
UDN001887,(3019-67) นาบัว - (3019-72) ดอนกลอย=Optic 12 Core DW = 5.965 km.";
    }
else if($message == "3019-73"){
          $arrayPostData['messages'][0]['text'] = "UDN001529,(SJ) ME เพ็ญ-ME บ้านดุง - (3019-73) บ้านสินเจริญ=Optic 12 Core DW = 0.2 km.
UDN001888,(3019-73) สินเจริญ - (3019-74) คอนเลียบ=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3019-74"){
        $arrayPostData['messages'][0]['text'] = "UDN001888,(3019-73) สินเจริญ - (3019-74) คอนเลียบ=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3019-75"){
        $arrayPostData['messages'][0]['text'] = "UDN001889,(SJ) MEเพ็ญ-MEบ้านดุง - (3019-75) หนองบัวบาน=Optic 12 Core DW = 3.47 km.";
    }
else if($message == "3019-76"){
        $arrayPostData['messages'][0]['text'] = "UDN001890,(SJ) MEเพ็ญ-MEบ้านดุง - (3019-76) บ้านโนนสว่าง ต.เตาไห=Optic 12 Core DW = 2.142 km.";
    }
else if($message == "3019-77"){
        $arrayPostData['messages'][0]['text'] = "UDN001322,(3019-56) บ้านหม้อ - (3019-77) ดอนสวรรค์=Optic 12 Core DW = 2.26 km.";
    }
else if($message == "3019-78"){
        $arrayPostData['messages'][0]['text'] = "UDN001606,(3019-65) บ้านยามกาน้อย - (3019-78) บ้านยามกาใหญ่=Optic 12 Core DW = 1.381 km.";
    }
else if($message == "3019-80"){
        $arrayPostData['messages'][0]['text'] = "UDN001891,(SJ) บ้านดอนเงิน-บ้านยาง - (3019-80) ต.บ้านเหล่า บ้านดงขันทอง=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3019-82"){
          $arrayPostData['messages'][0]['text'] = "UDN001367,(3019-57) บ้านดอนเงิน - (3019-82) ต.บ้านเหล่า บ้านยาง=Optic 12 Core DW = 5.3 km.
UDN001465,(3019-82) ต.บ้านเหล่า บ้านยาง - (3019-152) บ้านศรีสุวรรณ=Optic 12 Core DW = 4.13 km.
UDN001540,(3019-82) บ้านดงยาง - (3019-126) บ้านหนองบ่อ=Optic 12 Core DW = 3.47 km.
UDN001557,(3019-82) บ้านยาง - (3019-151) บ้านนาพระ=Optic 12 Core DW = 1.775 km.";
    }
else if($message == "3019-83"){
        $arrayPostData['messages'][0]['text'] = "UDN001309,(3019-94) โพนทันนาสอน - (3019-83) หนองแสนตอ=12 Core= 5.57 km.";
    }
else if($message == "3019-84"){
          $arrayPostData['messages'][0]['text'] = "UDN001429,(3019-85) หนองนกเขียน - (3019-84) ต.เชียงหวาง บ้านโพนทัน=Optic 12 Core DW = 1.61 km.
UDN001866,(3019-84) ต.เชียงหวาง บ้านโพนทัน - (3019-127) ต.เชียงหวาง บ้านโคกน้อย=Optic 12 Core DW = 2.95 km.";
    }
else if($message == "3019-85"){
          $arrayPostData['messages'][0]['text'] = "UDN001429,(3019-85) หนองนกเขียน - (3019-84) ต.เชียงหวาง บ้านโพนทัน=Optic 12 Core DW = 1.61 km.
UDN001431,(3019-42) ป่าก้าว - (3019-85) ต.นาพู่ บ้านหนองนกเขียน=Optic 12 Core DW = 2.89 km.";
    }
else if($message == "3019-86"){
          $arrayPostData['messages'][0]['text'] = "UDN001430,(3019-66) สร้างหลวงสร้างคำ - (3019-86) ต.เชียงหวาง บ้านเชียงหวาง=Optic 12 Core DW = 2.76 km.
UDN001467,(3019-86) ต.เชียงหวาง บ้านเชียงหวาง - (3019-128) บ้านนาดี=Optic 12 Core DW = 2.12 km.";
    }
else if($message == "3019-87"){
        $arrayPostData['messages'][0]['text'] = "UDN001425,(3019-69) บ้านโพนทอง - (3019-87) ต.เชียงหวาง บ้านคำผักหนาม=12 Core= 8.23 km.";
    }
else if($message == "3019-88"){
          $arrayPostData['messages'][0]['text'] = "UDN001435,(3019-88) บ้านดอกไม้ - (3019-89) บ้านนาคอม=Optic 12 Core DW = 1.21 km.
UDN001517,(3019-53) บ้านสังซา - (3019-88) บ้านดอกไม้=12 Core= 6.52 km.";
    }
else if($message == "3019-89"){
        $arrayPostData['messages'][0]['text'] = "UDN001435,(3019-88) บ้านดอกไม้ - (3019-89) บ้านนาคอม=Optic 12 Core DW = 1.21 km.";
    }
else if($message == "3019-90"){
          $arrayPostData['messages'][0]['text'] = "UDN001426,(3019-90) บ้านหลวง - (3019-91) ต.นาพู่ บ้านหัวสาย=Optic 12 Core DW = 1.19 km.
UDN001519,(3019-90) บ้านหลวง - (3019-142) บ้านม่วง=Optic 12 Core DW = 3.5 km.
UDN001892,(3033-212) บ้านนาพู่ - (3019-90) ต.นาพู่ บ้านหลวง=Optic 12 Core DW = 4.2 km.";
    }
else if($message == "3019-91"){
          $arrayPostData['messages'][0]['text'] = "NKI000385,(3019-91) บ้านหัวสาย - (3230-63) บ้านดงมุข=Optic 12 Core DW = 2.57 km.
NKI000555,(3019-91) ต.นาพู่ บ้านหัวสาย - (3230-62) ต.คอกช้าง สมสะอาด=Optic 12 Core DW = 1.1 km.
UDN001426,(3019-90) บ้านหลวง - (3019-91) ต.นาพู่ บ้านหัวสาย=Optic 12 Core DW = 1.19 km.";
    }
else if($message == "3019-92"){
          $arrayPostData['messages'][0]['text'] = "UDN001663,(3019-92) ต.สุมเส้า บ้านโนนสะอาด - (3019-181) ต.สุมเส้า บ้านพบสุข=Optic 12 Core DW = 2.165 km.
UDN001893,(3019-49) สุมเส้า - (3019-92) ต.สุมเส้า บ้านโนนสะอาด=12 Core= 10.5 km.";
    }
else if($message == "3019-93"){
          $arrayPostData['messages'][0]['text'] = "UDN001434,(3019-65) ยามกาน้อย - (3019-93) จอมตาลใต้=12 Core= 7.48 km.
UDN001542,(3019-93) บ้านจอมตาลใต้ - (3019-125) บ้านโนนศรีสำราญ=Optic 12 Core DW = 1.795 km.
UDN001896,(3019-93) ต.จอมศรี บ้านจอมตาลใต้ - (3019-98) ต.จอมศรี บ้านจอมศรี=12 Core= 8.46 km.";
    }
else if($message == "3019-94"){
          $arrayPostData['messages'][0]['text'] = "UDN001309,(3019-94) โพนทันนาสอน - (3019-83) หนองแสนตอ=12 Core= 5.57 km.
UDN001894,(SJ) MEเพ็ญ-MEบ้านดุง - (3019-94) ต.เพ็ญ บ้านโพนทันนาส่อน=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3019-95"){
          $arrayPostData['messages'][0]['text'] = "UDN001464,(3019-95) บ้านหนองตุ - (3019-154) บ้านหนองลุมพุก=Optic 12 Core DW = 4.41 km.
UDN001584,(3019-96) บ้านโพนงาม - (3019-95) บ้านหนองตุ=Optic 12 Core DW = 2 km.";
    }
else if($message == "3019-96"){
          $arrayPostData['messages'][0]['text'] = "UDN001584,(3019-96) บ้านโพนงาม - (3019-95) บ้านหนองตุ=Optic 12 Core DW = 2 km.
UDN001895,(SJ) MEเพ็ญ-MEบ้านดุง - (3019-96) ต.เพ็ญ บ้านโพนงาม=Optic 12 Core DW = 0.709 km.";
    }
else if($message == "3019-98"){
          $arrayPostData['messages'][0]['text'] = "UDN001582,(3019-98) บ้านจอมศรี - (3019-119) บ้านนาพัง=Optic 12 Core DW = 1.88 km.
UDN001896,(3019-93) ต.จอมศรี บ้านจอมตาลใต้ - (3019-98) ต.จอมศรี บ้านจอมศรี=12 Core= 8.46 km.";
    }
else if($message == "3019-99"){
          $arrayPostData['messages'][0]['text'] = "UDN001432,(3019-111) บ้านโนนสะอาด - (3019-99) ต.บ้านธาตุ บ้านโพน=Optic 12 Core DW = 2.51 km.
UDN001591,(3019-99) บ้านโพน - (3019-145) บ้านนิคม ต.บ้านธาตุ=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3020-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000933,(3020-67) ประจักษ์ 1 - (3020-68) ประจักษ์ 2=Optic 12 Core DW = 2 km.
UDN000993,(3002-40) ME กุมภวาปี - (3020-67) ME ประจักษ์ศิลปาคม=12 Core= 24.513 km.
UDN000994,(3020-67) ME ประจักษ์ศิลปาคม - (3008-37) ME หนองหาน=12 Core= 25.01 km.
UDN001639,(3020-67) ME ประจักษ์ - (3020-69) หนองลุมพุก=Optic 12 Core DW = 3.145 km.";
    }
else if($message == "3020-68"){
          $arrayPostData['messages'][0]['text'] = "UDN000933,(3020-67) ประจักษ์ 1 - (3020-68) ประจักษ์ 2=Optic 12 Core DW = 2 km.
UDN001899,(3020-68) ประจักษ์ 2 - (3020-90) ต.นาม่วง บ้านนาม่วง=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3020-69"){
          $arrayPostData['messages'][0]['text'] = "UDN000934,(3020-69) หนองลุมพุก - (3020-70) บ้านเชียงกรม=Optic 12 Core DW = 2.7 km.
UDN001022,(3020-69) หนองลุมพุก - (3008-125) หนองบัวน้อย=Optic 12 Core DW = 3.6 km.
UDN001639,(3020-67) ME ประจักษ์ - (3020-69) หนองลุมพุก=Optic 12 Core DW = 3.145 km.";
    }
else if($message == "3020-70"){
          $arrayPostData['messages'][0]['text'] = "UDN000934,(3020-69) หนองลุมพุก - (3020-70) บ้านเชียงกรม=Optic 12 Core DW = 2.7 km.
UDN001145,(3020-70) บ้านเชียงกลม - (3020-79) บ้านโนนทรายฟอง=Optic 12 Core DW = 3.17 km.";
    }
else if($message == "3020-73"){
          $arrayPostData['messages'][0]['text'] = "UDN000569,(3020-73) สวนมอญ - (3020-74) อุ่มจาน=Optic 12 Core DW = 2.504 km.
UDN000705,(3020-73) สวนมอญ - (3002-146) บ้านเดียม=Optic 12 Core DW = 2.66 km.
UDN001097,(3020-73) สวนมอญ - (3002-146) บ้านเดียม=Optic 12 Core DW = 2.9 km.
UDN001144,(SJ) SJ หัวต่อ - (3020-73) สวนมอญ=Optic 12 Core DW = 2 km.";
    }
else if($message == "3020-74"){
          $arrayPostData['messages'][0]['text'] = "UDN000569,(3020-73) สวนมอญ - (3020-74) อุ่มจาน=Optic 12 Core DW = 2.504 km.
UDN001126,(3020-74) อุ่มจาน - (3020-84) บ้านโพนทอง=Optic 12 Core DW = 3.42 km.
UDN001898,(3020-74) อุ่มจาน - (3020-88) ต.อุ่มจาน บ้านลานเต=Optic 12 Core DW = 4.6 km.";
    }
else if($message == "3020-75"){
          $arrayPostData['messages'][0]['text'] = "UDN000567,(3020-76) ห้วยสามพาด - (3020-75) อนามัยไทยเจริญ=Optic 12 Core DW = 2.157 km.
UDN001065,(3020-75) อนามัยไทยเจริญ - (3020-81) บ้านโคกสีวังแสง=Optic 12 Core DW = 3.05 km.
UDN001901,(3020-75) อนามัยไทยเจริญ - (3020-97) ไทยเจริญ=Optic 12 Core DW = 1.76 km.";
    }
else if($message == "3020-76"){
          $arrayPostData['messages'][0]['text'] = "UDN000567,(3020-76) ห้วยสามพาด - (3020-75) อนามัยไทยเจริญ=Optic 12 Core DW = 2.157 km.
UDN000568,(3002-89) บ้านนาดี - (3020-76) ห้วยสามพาด=Optic 12 Core DW = 2.29 km.";
    }
else if($message == "3020-79"){
        $arrayPostData['messages'][0]['text'] = "UDN001145,(3020-70) บ้านเชียงกลม - (3020-79) บ้านโนนทรายฟอง=Optic 12 Core DW = 3.17 km.";
    }
else if($message == "3020-80"){
        $arrayPostData['messages'][0]['text'] = "UDN000935,(3020-80) หนองลุมพุก - (3020-80) บ้านหนองหญ้าม้า=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3020-81"){
          $arrayPostData['messages'][0]['text'] = "UDN001065,(3020-75) อนามัยไทยเจริญ - (3020-81) บ้านโคกสีวังแสง=Optic 12 Core DW = 3.05 km.
UDN001897,(3020-81) บ้านโคกสีวังแสง - (3020-87) โนนแสวง=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3020-82"){
          $arrayPostData['messages'][0]['text'] = "UDN000724,(3033-50) บ้านแม่นนท์ - (3020-82) บ้านป่าก้าวอีทุย=Optic 12 Core DW = 2.72 km.
UDN000725,(3020-82) บ้านป่าก้าวอีทุย - (3020-83) โนนสมบูรณ์(ประจักษ์)=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3020-83"){
          $arrayPostData['messages'][0]['text'] = "UDN000725,(3020-82) บ้านป่าก้าวอีทุย - (3020-83) โนนสมบูรณ์(ประจักษ์)=Optic 12 Core DW = 1.7 km.
UDN000773,(3020-83) โนนสมบูรณ์(ประจักษ์) - (3020-85) บ้านวังขอนกว้าง=Optic 12 Core DW = 1.6 km.
UDN001609,(3020-83) โนนสมบูรณ์(ประจักษ์) - (3020-95) โนนสมบูรณ์(ประจักษ์) 2=Optic 12 Core DW = 0.86 km.";
    }
else if($message == "3020-84"){
          $arrayPostData['messages'][0]['text'] = "UDN001126,(3020-74) อุ่มจาน - (3020-84) บ้านโพนทอง=Optic 12 Core DW = 3.42 km.
UDN001134,(3020-84) โพนทอง - (3020-86) เมืองปังดอนกลางดอนคง=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3020-85"){
        $arrayPostData['messages'][0]['text'] = "UDN000773,(3020-83) โนนสมบูรณ์(ประจักษ์) - (3020-85) บ้านวังขอนกว้าง=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3020-86"){
          $arrayPostData['messages'][0]['text'] = "UDN001134,(3020-84) โพนทอง - (3020-86) เมืองปังดอนกลางดอนคง=Optic 12 Core DW = 3.1 km.
UDN001900,(3020-86) เมืองปังดอนกลางดอนคง - (3020-93) เมืองปังดอนกลางดอนคง2=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3020-87"){
          $arrayPostData['messages'][0]['text'] = "UDN001475,(3020-88) ลานเต - (3020-92) หนองเม็ก=Optic 12 Core DW = 1.66 km.
UDN001476,(3020-88) ลานเต - (3020-91) บ้านน้ำเที่ยง=Optic 12 Core DW = 1.596 km.
UDN001898,(3020-74) อุ่มจาน - (3020-88) ต.อุ่มจาน บ้านลานเต=Optic 12 Core DW = 4.6 km.";
    }
else if($message == "3020-88"){
          $arrayPostData['messages'][0]['text'] = "UDN001475,(3020-88) ลานเต - (3020-92) หนองเม็ก=Optic 12 Core DW = 1.66 km.
UDN001476,(3020-88) ลานเต - (3020-91) บ้านน้ำเที่ยง=Optic 12 Core DW = 1.596 km.
UDN001898,(3020-74) อุ่มจาน - (3020-88) ต.อุ่มจาน บ้านลานเต=Optic 12 Core DW = 4.6 km.";
    }
else if($message == "3020-89"){
        $arrayPostData['messages'][0]['text'] = "UDN001477,(3002-87) บ้านโคกกลาง - (3020-89) หนองแก=Optic 12 Core DW = 1.66 km.";
    }
else if($message == "3020-90"){
        $arrayPostData['messages'][0]['text'] = "UDN001899,(3020-68) ประจักษ์ 2 - (3020-90) ต.นาม่วง บ้านนาม่วง=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3020-91"){
        $arrayPostData['messages'][0]['text'] = "UDN001476,(3020-88) ลานเต - (3020-91) บ้านน้ำเที่ยง=Optic 12 Core DW = 1.596 km.";
    }
else if($message == "3020-92"){
        $arrayPostData['messages'][0]['text'] = "UDN001475,(3020-88) ลานเต - (3020-92) หนองเม็ก=Optic 12 Core DW = 1.66 km.";
    }
else if($message == "3020-93"){
        $arrayPostData['messages'][0]['text'] = "UDN001900,(3020-86) เมืองปังดอนกลางดอนคง - (3020-93) เมืองปังดอนกลางดอนคง2=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3020-95"){
        $arrayPostData['messages'][0]['text'] = "UDN001609,(3020-83) โนนสมบูรณ์(ประจักษ์) - (3020-95) โนนสมบูรณ์(ประจักษ์) 2=Optic 12 Core DW = 0.86 km.";
    }
else if($message == "3020-97"){
        $arrayPostData['messages'][0]['text'] = "UDN001901,(3020-75) อนามัยไทยเจริญ - (3020-97) ไทยเจริญ=Optic 12 Core DW = 1.76 km.";
    }
else if($message == "3023-31"){
          $arrayPostData['messages'][0]['text'] = "UDN000082,(BJ) หัวต่อทางเข้าบ้านหนองตะไก้ - (3023-31) หนองตะไก้=Optic 12 Core DW = 2.041 km.
UDN000552,(3023-31) หนองตะไก้ - (3033-246) หนองตะไก้น้อย=Optic 12 Core DW = 0.942 km.";
    }
else if($message == "3023-33"){
          $arrayPostData['messages'][0]['text'] = "UDN000083,(3031-93) ธนาดร - (3023-33) บ้านหนองตูม=Optic 12 Core DW = 2.811 km.
UDN000250,(3023-33) บ้านหนองตูม - (3032-92) หนองใหญ่=Optic 12 Core DW = 1.295 km.
UDN000258,(3023-33) บ้านหนองตูม - (3033-39) บ้านเลี่ยมพิลึก=Optic 12 Core DW = 3.624 km.
UDN001912,(3023-33) บ้านหนองตูม - (3033-396) บ้านหนองตูม2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3023-34"){
          $arrayPostData['messages'][0]['text'] = "UDN000037,(3023-34) ค่ายเสนีย์รณยุทธ - (3001-57) หมู่บ้าน ณัฐการ=Optic 12 Core DW = 1.9 km.
UDN000084,() BJ (หัวต่อโหนดหน้า รรหนองขามเดิม) - (3023-34) ค่ายเสนีย์รณยุทธ=Optic 12 Core DW = 0.527 km.";
    }
else if($message == "3023-35"){
          $arrayPostData['messages'][0]['text'] = "UDN000085,(3031-58) ซอยแก้วอุดม - (3023-35) หนองสำโรง=Optic 12 Core DW = 3.391 km.
UDN000491,(3023-35) หนองสำโรง - (3033-149) เรียบกลมหนองสำโรง=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3023-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000086,(3001-59) หมู่บ้าน เฟิร์สโฮม - (3023-37) หมู่บ้านอุดรแลนด์=Optic 12 Core DW = 1.81 km.
UDN000443,(3023-37) หมู่บ้านอุดรแลนด์ - (3033-116) ม.อุดรแลนด์2=Optic 12 Core DW = 0.807 km.";
    }
else if($message == "3023-38"){
        $arrayPostData['messages'][0]['text'] = "UDN000087,(3001-45) ME พนาริน - (3023-38) จงมี CAB 10=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3023-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000088,(3023-88) me ตลาดโพศรี - (3023-39) แยกบ้านเลื่อม=Optic 12 Core DW = 1.159 km.
UDN000380,(3023-39) แยกบ้านเลื่อม  - () สนง. การค้าภายในจังหวัดอุดรธานี=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3023-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000089,(3032-68) บ้านม่วง - (3023-41) หนองบัว CAB2=Optic 12 Core DW = 1.275 km.
UDN000115,(3023-41) หนองบัว CAB2 - (3023-69) ประชาสันติ=Optic 12 Core DW = 0.662 km.
UDN000241,(3023-41) หนองบัว CAB2 - (3032-82) มโนรมย์=Optic 12 Core DW = 0.893 km.";
    }
else if($message == "3023-42"){
          $arrayPostData['messages'][0]['text'] = "UDN000090,(3023-43) ซอยเวียงพิงค์ - (3023-42) จงมี CAB 12=Optic 12 Core DW = 1.5 km.
UDN001930,(3023-42) จงมี CAB 12 - (3033-468) จงมี CAB12 (2)=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3023-43"){
          $arrayPostData['messages'][0]['text'] = "UDN000090,(3023-43) ซอยเวียงพิงค์ - (3023-42) จงมี CAB 12=Optic 12 Core DW = 1.5 km.
UDN000091,(ME3001-32) จงมี - (3023-43) ซอยเวียงพิงค์=Optic 12 Core DW = 1.062 km.";
    }
else if($message == "3023-44"){
        $arrayPostData['messages'][0]['text'] = "UDN000092,(ME3001-32B) จงมี Node B - (3023-44) ซอยพิบูลย์=Optic 12 Core DW = 0.686 km.";
    }
else if($message == "3023-45"){
          $arrayPostData['messages'][0]['text'] = "UDN000093,(3001-40) พีเค 4 - (3023-45) บ้านกุดสระ=Optic 12 Core DW = 2.899 km.
UDN000206,(3023-45) บ้านกุดสระ - (3032-45) นาข่า=Optic 12 Core DW = 3.904 km.
UDN000249,(3023-45) บ้านกุดสระ - (3032-91) กุดสระ2=Optic 12 Core DW = 2.034 km.
UDN000878,(3023-45) บ้านกุดสระ - (3033-315) บ้านโนนสมบูรณ์=Optic 12 Core DW = 2 km.
UDN000879,(3023-45) บ้านกุดสระ - (3033-316) บ้านยางบึง=Optic 12 Core DW = 2.55 km.
UDN000950,(3023-45) บ้านกุดสระ - (3033-315) บ้านโนนสมบูรณ์=Optic 12 Core DW = 2 km.
UDN001614,(3023-45) บ้านกุดสระ - (3023-485) บ้านกุดสระ 3=Optic 12 Core DW = 1.335 km.
UDN001910,(3023-45) บ้านกุดสระ - (3033-379) กุดสระ2=Optic 12 Core DW = 0.55 km.
UDN001931,(3023-45) บ้านกุดสระ - (3033-485) กุดสระ 3=Optic 12 Core DW = 1.375 km.";
    }
else if($message == "3023-47"){
          $arrayPostData['messages'][0]['text'] = "UDN000094,(3032-45) นาข่า - (3023-47) บ้านงอย=Optic 12 Core DW = 4.252 km.
UDN000252,(3023-47) บ้านงอย - (3032-94) ดงยวด=Optic 12 Core DW = 1.758 km.
UDN001196,(3023-47) บ้านงอย - (3033-301) ดอนหญ้านาง=Optic 12 Core DW = 2.5 km.
UDN001934,(3023-47) บ้านงอย - (3033-503) บ้านงอย2=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3023-48"){
          $arrayPostData['messages'][0]['text'] = "UDN000020,(3023-48) me ศรีพินิจ - (3011-37) โนนสะอาด=12 Core= 54.739 km.
UDN000043,(3023-48) ศรีพินิจB - (3001-65) ซอยทองคำอุทิศ=Optic 12 Core DW = 1.4 km.
UDN000153,(3023-48) ศรีพินิจB - (3031-51) วัดโพธิ=Optic 12 Core DW = 1.5 km.
UDN000181,(3023-48) ศรีพินิจB - (3031-82) กองบินประตู1=Optic 12 Core DW = 1.752 km.
UDN000193,(3023-48) ศรีพินิจB - (3031-94) เทพบุรี=Optic 12 Core DW = 0.744 km.
UDN000422,(3023-59) me บ้านจิก - (3023-48) ศรีพินิจ=24 Core= 3.55 km.
UDN000423,(3032-36) ชุมสาย อุดรคอนโดเทล - (3023-48) ศรีพินิจ=24 Core= 7.649 km.
UDN000430,(3023-48) me ศรีพินิจ - (3001-32) me จงมี=12 Core= 5.492 km.
UDN000434,(3023-48) me ศรีพินิจ - (3033-112) ศาลเยาวชน=Optic 12 Core DW = 0.977 km.";
    }
else if($message == "3023-485"){
        $arrayPostData['messages'][0]['text'] = "UDN001614,(3023-45) บ้านกุดสระ - (3023-485) บ้านกุดสระ 3=Optic 12 Core DW = 1.335 km.";
    }
else if($message == "3023-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000096,(3031-51) วัดโพธิ - (3023-49) UD town=Optic 12 Core DW = 0.5 km.
UDN000097,(3023-49) UD town - (3023-50) สัมพันธมิตร=Optic 12 Core DW = 0.977 km.";
    }
else if($message == "3023-50"){
          $arrayPostData['messages'][0]['text'] = "UDN000097,(3023-49) UD town - (3023-50) สัมพันธมิตร=Optic 12 Core DW = 0.977 km.
UDN000098,(3023-50) สัมพันธมิตร - (3023-51) ตะวันแดง=Optic 12 Core DW = 0.618 km.";
    }
else if($message == "3023-51"){
          $arrayPostData['messages'][0]['text'] = "UDN000098,(3023-50) สัมพันธมิตร - (3023-51) ตะวันแดง=Optic 12 Core DW = 0.618 km.
UDN000099,(3023-51) ตะวันแดง - (3023-52) แจ่มนุสรณ์=Optic 12 Core DW = 0.88 km.";
    }
else if($message == "3023-52"){
          $arrayPostData['messages'][0]['text'] = "UDN000022,(3023-52) แจ่มนุสรณ์ - (3001-35) วัฒนานุวงศ์=Optic 12 Core DW = 0.878 km.
UDN000099,(3023-51) ตะวันแดง - (3023-52) แจ่มนุสรณ์=Optic 12 Core DW = 0.88 km.";
    }
else if($message == "3023-53"){
          $arrayPostData['messages'][0]['text'] = "UDN000100,(3023-59) บ้านจิกโหนดB - (3023-53) สินชัยธานี=Optic 12 Core DW = 1.327 km.
UDN000104,(3023-53) สินชัยธานี - (3023-58) ชุมชนหนองเตาเหล็ก=Optic 12 Core DW = 1.054 km.";
    }
else if($message == "3023-55"){
          $arrayPostData['messages'][0]['text'] = "UDN000101,(3023-56) อาพาภัชร node 2 - (3023-55) พลสนิท=Optic 12 Core DW = 0.438 km.
UDN000587,(3023-55) พลสนิท - (3023-73) หลังอุดรพิท=Optic 12 Core DW = 1.376 km.";
    }
else if($message == "3023-56"){
          $arrayPostData['messages'][0]['text'] = "UDN000101,(3023-56) อาพาภัชร node 2 - (3023-55) พลสนิท=Optic 12 Core DW = 0.438 km.
UDN000102,(3023-57) อาพาภัชร node 1 - (3023-56) อาพาภัชร node 2=Optic 12 Core DW = 0.273 km.";
    }
else if($message == "3023-57"){
          $arrayPostData['messages'][0]['text'] = "UDN000102,(3023-57) อาพาภัชร node 1 - (3023-56) อาพาภัชร node 2=Optic 12 Core DW = 0.273 km.
UDN000103,(3023-58) ชุมชนหนองเตาเหล็ก - (3023-57) อาพาภัชร node 1=Optic 12 Core DW = 0.738 km.
UDN001666,(3023-57) อาพาภัชร node 1 - (3033-169) อาพาภัชร node 3=Optic 12 Core DW = 1.02 km.";
    }
else if($message == "3023-58"){
          $arrayPostData['messages'][0]['text'] = "UDN000103,(3023-58) ชุมชนหนองเตาเหล็ก - (3023-57) อาพาภัชร node 1=Optic 12 Core DW = 0.738 km.
UDN000104,(3023-53) สินชัยธานี - (3023-58) ชุมชนหนองเตาเหล็ก=Optic 12 Core DW = 1.054 km.
UDN000247,(3023-58) ชุมชนหนองเตาเหล็ก - (3032-89) หนองเตาเหล็ก 2=Optic 12 Core DW = 0.477 km.
UDN001911,(3023-58) ชุมชนหนองเตาเหล็ก - (3033-383) ชุมชนหนองเตาเหล็ก 2=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3023-59"){
          $arrayPostData['messages'][0]['text'] = "UDN000079,(3023-59) me บ้านจิก - () BJ Main route อุดร - ขอนแก่น Cable1=12 Core= 59.313 km.
UDN000100,(3023-59) บ้านจิกโหนดB - (3023-53) สินชัยธานี=Optic 12 Core DW = 1.327 km.
UDN000106,(3023-59) บ้านจิกโหนดB - (3023-60) มัสยิดอุดร=Optic 12 Core DW = 0.347 km.
UDN000164,(3023-59) บ้านจิกโหนดB - (3031-65) ธนาคารกรุงเทพ=Optic 12 Core DW = 0.758 km.
UDN000165,(3023-59) Metronet บ้านจิก - (3031-66) ปศุสัตว์=Optic 12 Core DW = 1.13 km.
UDN000191,(3023-59) Metronet บ้านจิก - (3031-92) เงาไม้=Optic 12 Core DW = 1.105 km.
UDN000232,(3023-59) บ้านจิกโหนดB - (3032-73) หลังอุดรพิท=Optic 12 Core DW = 0.948 km.
UDN000377,(3023-59) meบ้านจิก - () กรมบังคับคดี=Optic 12 Core DW = 1 km.
UDN000420,(3032-36) ชุมสาย อุดรคอนโดเทล - (3023-59) บ้านจิก=24 Core= 6.257 km.
UDN000422,(3023-59) me บ้านจิก - (3023-48) ศรีพินิจ=24 Core= 3.55 km.
UDN000428,(3023-59) me บ้านจิก - (3001-32) me จงมี=12 Core= 3.592 km.
UDN000429,(3023-59) me บ้านจิก - (3001-34) me ศรีพินิจ=12 Core= 4.032 km.";
    }
else if($message == "3023-60"){
          $arrayPostData['messages'][0]['text'] = "UDN000106,(3023-59) บ้านจิกโหนดB - (3023-60) มัสยิดอุดร=Optic 12 Core DW = 0.347 km.
UDN000107,(3023-60) มัสยิดอุดร - (3023-61) node ซอยจินตคาม=Optic 12 Core DW = 0.746 km.";
    }
else if($message == "3023-61"){
          $arrayPostData['messages'][0]['text'] = "UDN000107,(3023-60) มัสยิดอุดร - (3023-61) node ซอยจินตคาม=Optic 12 Core DW = 0.746 km.
UDN000108,(3023-61) node ซอยจินตคาม - (3023-62) ชุมชนโนนยาง2=Optic 12 Core DW = 1.9 km.
UDN000585,(3023-61) ซอยจินตคาม - (3033-147) ชุมชนดอนอุดม=Optic 12 Core DW = 1 km.";
    }
else if($message == "3023-62"){
          $arrayPostData['messages'][0]['text'] = "UDN000108,(3023-61) node ซอยจินตคาม - (3023-62) ชุมชนโนนยาง2=Optic 12 Core DW = 1.9 km.
UDN000498,(3023-62B) โนนยาง - (3033-147) ชุมชนดอนอุดม=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3023-63"){
        $arrayPostData['messages'][0]['text'] = "UDN000109,(3032-37) สามพร้าว - (3023-63) วัดสามพร้าว=Optic 12 Core DW = 0.881 km.";
    }
else if($message == "3023-64"){
          $arrayPostData['messages'][0]['text'] = "UDN000110,(3031-58) ซอยแก้วอุดม - (3023-64) ซอยสามกษัตริย์=Optic 12 Core DW = 0.495 km.
UDN000242,(3023-64) ซอยสามกษัตริย์ - (3032-83) วัดสระบัวบาน2=Optic 12 Core DW = 1.088 km.
UDN000496,(3023-64) ซอยสามกษัตริย์ - (3033-148) หมู่บ้านพลินวิล=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3023-65"){
          $arrayPostData['messages'][0]['text'] = "UDN000005,(3023-88) me ตลาดโพศรี - (3023-65) me หนองหิน=12 Core= 4.262 km.
UDN000006,(BJ) หัวต่อofc ระหว่างmeบ้านจิก-ไฟฟ้า - (3023-65) me หนองหิน=Optic 12 Core DW = 1.173 km.
UDN000030,(3023-65) หนองหิน - (3001-48) หนองวัวซอ=12 Core= 22 km.
UDN000032,(ME3023-65) Metronet หนองหิน - (3001-50) คุณธรรมธานี=Optic 12 Core DW = 1.55 km.
UDN000174,(ME3023-65) Metronet หนองหิน - (3031-75) อุดรพิชัยรักษ์=Optic 12 Core DW = 0.921 km.
UDN000220,(ME3023-65) Metronet บ้านหนองหิน - (3032-61) โพนบก=Optic 12 Core DW = 0.781 km.
UDN000271,(ME3023-65) Metronet หนองหิน - (3033-52) ดอนอีไข=Optic 12 Core DW = 1.543 km.
UDN000275,(ME3023-65) Metronet บ้านหนองหิน - (3033-58) รุ่งเรืองหนองหิน=Optic 12 Core DW = 0.891 km.
UDN000424,(3032-36) ชุมสาย อุดรคอนโดเทล - (3023-65) หนองหิน=12 Core= 11.072 km.
UDN000425,(3023-65) หนองหิน - (3101-31) dwdm หนองบัวลำภู=12 Core= 45.719 km.
UDN000991,(3023-65) ME หนองหิน - (3016-63) ME หนองแสง=12 Core= 36 km.
UDN001283,(3023-65) บ้านหนองหิน - (3033-345) บ้านหนองหิน2=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3023-66"){
          $arrayPostData['messages'][0]['text'] = "UDN000112,(3031-82) กองบินประตู1 - (3023-66) ตลาด มทบ.24=Optic 12 Core DW = 0.461 km.
UDN000155,(3023-66) ตลาด มทบ.24 - (3031-53) ซอยศรีสวรรค์=Optic 12 Core DW = 0.846 km.";
    }
else if($message == "3023-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000113,(ME3001-32) จงมี - (3023-67) บ้านห้วย=Optic 12 Core DW = 1.867 km.
UDN000244,(3023-67) บ้านห้วย - (3032-85) บ้านห้วย 2=Optic 12 Core DW = 0.764 km.";
    }
else if($message == "3023-68"){
          $arrayPostData['messages'][0]['text'] = "UDN000114,(ME3001-32B) จงมี Node B - (3023-68) หนองประจักษ์1=Optic 12 Core DW = 1.916 km.
UDN000184,(3023-68) หนองประจักษ์1 - (3031-85) บ้านทรายทอง=Optic 12 Core DW = 0.368 km.";
    }
else if($message == "3023-69"){
          $arrayPostData['messages'][0]['text'] = "UDN000115,(3023-41) หนองบัว CAB2 - (3023-69) ประชาสันติ=Optic 12 Core DW = 0.662 km.
UDN001274,(3031-32) เจริญสุข Big C แยกสันตพล - (3023-69) ประชาสันติ=Optic 12 Core DW = 2.799 km.";
    }
else if($message == "3023-70"){
        $arrayPostData['messages'][0]['text'] = "UDN000116,(BJ) หัวต่อโหนดโบ้เบ้เดิม - (3023-70) โบ้เบ้=Optic 12 Core DW = 0.744 km.";
    }
else if($message == "3023-72"){
        $arrayPostData['messages'][0]['text'] = "UDN000117,(3023-77) สากล - (3023-72) หลังตลาดรถไฟ=Optic 12 Core DW = 0.52 km.";
    }
else if($message == "3023-73"){
          $arrayPostData['messages'][0]['text'] = "UDN000118,(SJ) SJ node ทองคำอุทิศ - ud ทาวน์ - (3023-73) หอพักเปรี่ยมสุข=Optic 12 Core DW = 0.764 km.
UDN000121,(3023-73) หอพักเปรี่ยมสุข - (3023-76) บ้านสำลีเงิน=Optic 12 Core DW = 0.812 km.
UDN000122,(3023-73) หอพักเปรี่ยมสุข - (3023-77) สากล=Optic 12 Core DW = 0.489 km.
UDN000587,(3023-55) พลสนิท - (3023-73) หลังอุดรพิท=Optic 12 Core DW = 1.376 km.";
    }
else if($message == "3023-74"){
          $arrayPostData['messages'][0]['text'] = "UDN000119,(3023-75) หนองบัว1 - (3023-74) หนองบัว3=Optic 12 Core DW = 0.97 km.
UDN000124,(3023-74) หนองบัว3 - (3023-79) หนองเหล็ก 2=Optic 12 Core DW = 1.93 km.
UDN001641,(3023-74) หนองบัว3 - (3033-268) ซอยร่มเย็นพัฒนา=Optic 12 Core DW = 0.873 km.";
    }
else if($message == "3023-75"){
          $arrayPostData['messages'][0]['text'] = "UDN000119,(3023-75) หนองบัว1 - (3023-74) หนองบัว3=Optic 12 Core DW = 0.97 km.
UDN000120,(3023-76) บ้านสำลีเงิน - (3023-75) หนองบัว1=Optic 12 Core DW = 1.177 km.";
    }
else if($message == "3023-76"){
          $arrayPostData['messages'][0]['text'] = "UDN000120,(3023-76) บ้านสำลีเงิน - (3023-75) หนองบัว1=Optic 12 Core DW = 1.177 km.
UDN000121,(3023-73) หอพักเปรี่ยมสุข - (3023-76) บ้านสำลีเงิน=Optic 12 Core DW = 0.812 km.
UDN000409,(3023-76) บ้านสำลีเงิน - () บริษัท ทุนทองมาวิน จำกัด=Optic 12 Core DW = 0.45 km.";
    }
else if($message == "3023-77"){
          $arrayPostData['messages'][0]['text'] = "UDN000117,(3023-77) สากล - (3023-72) หลังตลาดรถไฟ=Optic 12 Core DW = 0.52 km.
UDN000122,(3023-73) หอพักเปรี่ยมสุข - (3023-77) สากล=Optic 12 Core DW = 0.489 km.
UDN000145,(3023-77) สากล - (3031-43) ประชาสันติ2=Optic 12 Core DW = 0.969 km.
UDN000375,(3023-77) สากล - () บริษัท สมายล์ฮาร์ฟู้ดส์=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3023-78"){
          $arrayPostData['messages'][0]['text'] = "UDN000123,(3023-83) หนองตุ - (3023-78) วัดหนองขาม=Optic 12 Core DW = 1.52 km.
UDN000130,(3023-78) วัดหนองขาม - (3023-86) โนนขมิ้น=Optic 12 Core DW = 2.49 km.
UDN000161,(3023-78) วัดหนองขาม - (3031-62) ม.ปราณีแลนด์=Optic 12 Core DW = 1.53 km.
UDN000433,(3023-78) วัดหนองขาม - (3033-107) หมู่บ้านสิรินสกล=Optic 12 Core DW = 0.495 km.";
    }
else if($message == "3023-79"){
          $arrayPostData['messages'][0]['text'] = "UDN000024,(3023-79) หนองเหล็ก 2 - (3001-39) เคหะชุมชนอุดรธานี CAB10 R4=Optic 12 Core DW = 0.845 km.
UDN000124,(3023-74) หนองบัว3 - (3023-79) หนองเหล็ก 2=Optic 12 Core DW = 1.93 km.";
    }
else if($message == "3023-80"){
        $arrayPostData['messages'][0]['text'] = "UDN000125,(3031-83) ซอยสามัคคี - (3023-80) PK3=Optic 12 Core DW = 1.32 km.";
    }
else if($message == "3023-82"){
          $arrayPostData['messages'][0]['text'] = "UDN000010,(3023-82) me เจริญสุข - (3031-33) me บ้านจั่น=Optic 12 Core DW = 3.767 km.
UDN000011,(3023-82) me เจริญสุข - (3032-34) me bigc=Optic 12 Core DW = 1.9 km.
UDN000127,(3023-82) me เจริญสุข - (3023-83) หนองตุ=Optic 12 Core DW = 0.912 km.
UDN000197,(3023-82) me เจริญสุข - (3031-98) ศาลเจ้าปู่ย่า=Optic 12 Core DW = 2.461 km.
UDN000279,(3023-82) me เจริญสุข - (3033-62) ตลาดเมืองทอง=Optic 12 Core DW = 0.995 km.
UDN000280,(3023-82) me เจริญสุข - (3033-64) ไทวัสดุอุดรธานี=Optic 12 Core DW = 1.919 km.
UDN000532,(3023-82) ME เจริญสุข - (3033-154) ลุมพินี1=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3023-83"){
          $arrayPostData['messages'][0]['text'] = "UDN000123,(3023-83) หนองตุ - (3023-78) วัดหนองขาม=Optic 12 Core DW = 1.52 km.
UDN000127,(3023-82) me เจริญสุข - (3023-83) หนองตุ=Optic 12 Core DW = 0.912 km.
UDN000180,(3023-83) หนองตุ - (3031-81) หนองตุ2=Optic 12 Core DW = 0.803 km.";
    }
else if($message == "3023-84"){
          $arrayPostData['messages'][0]['text'] = "UDN000128,(ME3031-33) Metronet บ้านจั่น - (3023-84) สัมพันธ์สุข=Optic 12 Core DW = 1.163 km.
UDN000233,(3023-84) สัมพันธ์สุข - (3032-74) สัมพันธสุข2=Optic 12 Core DW = 0.645 km.";
    }
else if($message == "3023-85"){
          $arrayPostData['messages'][0]['text'] = "UDN000488,(3033-137) ซอยคนหล่อ - (3023-85) สุขเกษม=Optic 12 Core DW = 1.6 km.
UDN001902,(3023-85) สุขเกษม - (3033-184) สุขเกษม2=Optic 12 Core DW = 0.79 km.";
    }
else if($message == "3023-86"){
          $arrayPostData['messages'][0]['text'] = "UDN000130,(3023-78) วัดหนองขาม - (3023-86) โนนขมิ้น=Optic 12 Core DW = 2.49 km.
UDN000152,(3023-86) โนนขมิ้น - (3031-50) ม.นันทวัน=Optic 12 Core DW = 0.555 km.
UDN001258,(3023-86) โนนขมิ้น - (3033-206) บ้านโก่ย=Optic 12 Core DW = 5.92 km.";
    }
else if($message == "3023-87"){
          $arrayPostData['messages'][0]['text'] = "UDN000131,(ME3001-32B) จงมี Node B - (3023-87) โกเมนซิตี้=Optic 12 Core DW = 1.271 km.
UDN000136,(3023-87) โกเมนซิตี้ - (3023-92) บ้านเดื่อ=Optic 12 Core DW = 1.03 km.";
    }
else if($message == "3023-88"){
          $arrayPostData['messages'][0]['text'] = "UDN000005,(3023-88) me ตลาดโพศรี - (3023-65) me หนองหิน=12 Core= 4.262 km.
UDN000007,(BJ) หัวต่อofc ระหว่างmeบ้านจิก-ธนาคารกรุงเทพ - (3023-88) me ตลาดโพศรี=Optic 12 Core DW = 1.524 km.
UDN000008,(3023-88) me ตลาดโพศรี - (3031-57) กระจ่างวิทย์=Optic 12 Core DW = 1.115 km.
UDN000088,(3023-88) me ตลาดโพศรี - (3023-39) แยกบ้านเลื่อม=Optic 12 Core DW = 1.159 km.
UDN000137,(3023-88) me ตลาดโพศรี - (3023-93) คลองเจริญ=Optic 12 Core DW = 1.29 km.
UDN000144,(3023-88) me ตลาดโพศรี - (3031-42) พลอยวิลล่าหลังประมง=Optic 12 Core DW = 1.123 km.
UDN000169,(3023-88) me ตลาดโพศรี - (3031-70) นภาลัย=Optic 12 Core DW = 0.938 km.
UDN000177,(3023-88) me ตลาดโพศรี - (3031-78) บ้านพักธนพร=Optic 12 Core DW = 0.739 km.
UDN000222,(3023-88) me ตลาดโพศรี - (3032-63) โรงเรียนกวดวิชาดาวองค์=Optic 12 Core DW = 0.674 km.
UDN000228,(3023-88) me ตลาดโพศรี - (3032-69) แยกตลาดเทศบาล=Optic 12 Core DW = 1.139 km.
UDN000234,(3023-88) me ตลาดโพศรี - (3032-75) โรงพยาบาลศูนย์อุดร=Optic 12 Core DW = 0.493 km.";
    }
else if($message == "3023-89"){
        $arrayPostData['messages'][0]['text'] = "UDN000133,(3023-95) ศรีสุขอพาร์ทเม้นท์ - (3023-89) ประชานิมิตร=Optic 12 Core DW = 1.68 km.";
    }
else if($message == "3023-89 "){
        $arrayPostData['messages'][0]['text'] = "UDN000386,(3023-89 ) ประชานิมิตร  - (3033-80) ประชานิมิตร2=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3023-90"){
          $arrayPostData['messages'][0]['text'] = "UDN000134,(3031-78) บ้านพักธนพร - (3023-90) ซอยร่วมมิตร=Optic 12 Core DW = 0.362 km.
UDN000166,(3023-90) ซอยร่วมมิตร - (3031-67) ซอยทุ่งสวรรค์=Optic 12 Core DW = 1.44 km.";
    }
else if($message == "3023-91"){
          $arrayPostData['messages'][0]['text'] = "UDN000135,(3031-44) ดอนบอส - (3023-91) รวยสุข=Optic 12 Core DW = 0.975 km.
UDN000168,(3023-91) รวยสุข - (3031-69) ทุ่งสว่าง=Optic 12 Core DW = 0.682 km.";
    }
else if($message == "3023-92"){
          $arrayPostData['messages'][0]['text'] = "UDN000015,(3023-92) บ้านเดื่อ - (3001-37) me แยกสามพร้าว=Optic 12 Core DW = 0.943 km.
UDN000136,(3023-87) โกเมนซิตี้ - (3023-92) บ้านเดื่อ=Optic 12 Core DW = 1.03 km.
UDN000147,(3023-92) บ้านเดื่อ - (3031-45) บ้านเหล่า=Optic 12 Core DW = 0.681 km.";
    }
else if($message == "3023-93"){
          $arrayPostData['messages'][0]['text'] = "UDN000137,(3023-88) me ตลาดโพศรี - (3023-93) คลองเจริญ=Optic 12 Core DW = 1.29 km.
UDN000138,(3023-93) คลองเจริญ - (3023-95) ศรีสุขอพาร์ทเม้นท์=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3023-95"){
          $arrayPostData['messages'][0]['text'] = "UDN000133,(3023-95) ศรีสุขอพาร์ทเม้นท์ - (3023-89) ประชานิมิตร=Optic 12 Core DW = 1.68 km.
UDN000138,(3023-93) คลองเจริญ - (3023-95) ศรีสุขอพาร์ทเม้นท์=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3031-31"){
          $arrayPostData['messages'][0]['text'] = "UDN001212,(3031-31) ME โพธิ์ศรี - (3033-144) ME คอนโดเทล=12 Core= 4.94 km.
UDN001669,(3031-31) ME ตลาดโพศรี - (3033-223) Aspire Condo=Optic 12 Core DW = 0.2 km.";
    }
else if($message == "3031-32"){
        $arrayPostData['messages'][0]['text'] = "UDN001274,(3031-32) เจริญสุข Big C แยกสันตพล - (3023-69) ประชาสันติ=Optic 12 Core DW = 2.799 km.";
    }
else if($message == "3031-33"){
          $arrayPostData['messages'][0]['text'] = "UDN000001,(SJ) BJ Backbone สี่แยกบ้านจั่น - (3031-33) me บ้านจั่น=Optic 12 Core DW = 0.43 km.
UDN000010,(3023-82) me เจริญสุข - (3031-33) me บ้านจั่น=Optic 12 Core DW = 3.767 km.
UDN000128,(ME3031-33) Metronet บ้านจั่น - (3023-84) สัมพันธ์สุข=Optic 12 Core DW = 1.163 km.";
    }
else if($message == "3031-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000014,(3032-31) me รังษฺณา - (3031-37) พลอยวิลล่า1=Optic 12 Core DW = 1.11 km.
UDN000139,(3031-38) me รังษิณา - (3031-37) พลอยวิลล่า1=Optic 12 Core DW = 1.11 km.
UDN000148,(3031-37) พลอยวิลล่า1 - (3031-46) พลอยวิลล่า2=Optic 12 Core DW = 1.298 km.";
    }
else if($message == "3031-38"){
          $arrayPostData['messages'][0]['text'] = "UDN000013,(3001-32) me จงมี - (3031-38) me รังษิณา=Optic 12 Core DW = 1.03 km.
UDN000139,(3031-38) me รังษิณา - (3031-37) พลอยวิลล่า1=Optic 12 Core DW = 1.11 km.
UDN000379,(3031-38) meรังษิณา - () สนง. สาขาชั่งตวงวัดอุดรธานี=Optic 12 Core DW = 0.55 km.
UDN001668,(3031-38) MEรังษิณา - (3033-211) ซอยมธุรส=Optic 12 Core DW = 0.65 km.";
    }
else if($message == "3031-39"){
        $arrayPostData['messages'][0]['text'] = "UDN000141,(3001-65) ซอยทองคำอุทิศ - (3031-39) ซอยมาวิน=Optic 12 Core DW = 0.588 km.";
    }
else if($message == "3031-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000142,(3031-67) ซอยทุ่งสวรรค์ - (3031-40) ปั้มคาลเทคซ์บ้านเลื่อม=Optic 12 Core DW = 1.24 km.
UDN000289,(3031-40) ปั้มคาลเทคซ์บ้านเลื่อม - (3033-73) ซอยสุวรรณเกสร=Optic 12 Core DW = 0.5 km.
UDN000463,(3031-40) ปั้มคาลเทคซ์บ้านเลื่อม - (3033-128) ซอยชื่นจิตร=Optic 12 Core DW = 0.786 km.
UDN001285,(3031-40) ปั้มคาลเทคซ์บ้านเลื่อม - (3033-352) ปั๊มคาลเท็กซ์บ้านเลื่อม2=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3031-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000143,(3031-75) อุดรพิชัยรักษ์ - (3031-41) บ้านช้าง=Optic 12 Core DW = 1.673 km.
UDN000207,(3031-41) บ้านช้าง - (3032-47) บ้านพักกองบิน23=Optic 12 Core DW = 1.669 km.";
    }
else if($message == "3031-42"){
        $arrayPostData['messages'][0]['text'] = "UDN000144,(3023-88) me ตลาดโพศรี - (3031-42) พลอยวิลล่าหลังประมง=Optic 12 Core DW = 1.123 km.";
    }
else if($message == "3031-43"){
          $arrayPostData['messages'][0]['text'] = "UDN000145,(3023-77) สากล - (3031-43) ประชาสันติ2=Optic 12 Core DW = 0.969 km.
UDN000230,(3031-43) ประชาสันติ2 - (3032-71) ประชาสันติ3=Optic 12 Core DW = 0.41 km.";
    }
else if($message == "3031-44"){
          $arrayPostData['messages'][0]['text'] = "UDN000135,(3031-44) ดอนบอส - (3023-91) รวยสุข=Optic 12 Core DW = 0.975 km.
UDN000146,(3031-45) บ้านเหล่า - (3031-44) ดอนบอส=Optic 12 Core DW = 1.033 km.";
    }
else if($message == "3031-45"){
          $arrayPostData['messages'][0]['text'] = "UDN000146,(3031-45) บ้านเหล่า - (3031-44) ดอนบอส=Optic 12 Core DW = 1.033 km.
UDN000147,(3023-92) บ้านเดื่อ - (3031-45) บ้านเหล่า=Optic 12 Core DW = 0.681 km.";
    }
else if($message == "3031-46"){
          $arrayPostData['messages'][0]['text'] = "UDN000035,(3031-46) พลอยวิลล่า2 - (3001-54) หมู่บ้าน มิตรภาพ เก่า=Optic 12 Core DW = 0.769 km.
UDN000148,(3031-37) พลอยวิลล่า1 - (3031-46) พลอยวิลล่า2=Optic 12 Core DW = 1.298 km.";
    }
else if($message == "3031-47"){
          $arrayPostData['messages'][0]['text'] = "UDN000149,(3031-56) วัดสระบัวบาน - (3031-47) ซอยพินิจเจริญ=Optic 12 Core DW = 1.05 km.
UDN000150,(3031-47) ซอยพินิจเจริญ - (3031-48) บ้านหนองบ่อ=Optic 12 Core DW = 1.66 km.";
    }
else if($message == "3031-48"){
          $arrayPostData['messages'][0]['text'] = "UDN000027,(3031-48) บ้านหนองบ่อ - (3001-44) กฤษณา หนองสำโรง=Optic 12 Core DW = 1.996 km.
UDN000150,(3031-47) ซอยพินิจเจริญ - (3031-48) บ้านหนองบ่อ=Optic 12 Core DW = 1.66 km.
UDN000266,(3031-48) บ้านหนองบ่อ - (3033-47) หมูม่น=Optic 12 Core DW = 2.183 km.";
    }
else if($message == "3031-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000041,(3031-49) ปั้มวีรกิจ - (3001-61) หมู่บ้านกฤษณา-บ้านเลื่อม=Optic 12 Core DW = 0.826 km.
UDN000151,(3033-73) ซอยสุวรรณเกสร - (3031-49) ปั้มวีรกิจ=Optic 12 Core DW = 0.632 km.
UDN001187,(3001-31) บ้านจิก โหนด B - (3031-49) ปั้มวีรกิจ=12 Core= 5.7 km.";
    }
else if($message == "3031-50"){
          $arrayPostData['messages'][0]['text'] = "UDN000152,(3023-86) โนนขมิ้น - (3031-50) ม.นันทวัน=Optic 12 Core DW = 0.555 km.
UDN000182,(3031-50) ม.นันทวัน - (3031-83) ซอยสามัคคี=Optic 12 Core DW = 1.39 km.
UDN000225,(3031-50) ม.นันทวัน - (3032-66) ดอนหัน=Optic 12 Core DW = 1.994 km.";
    }
else if($message == "3031-51"){
          $arrayPostData['messages'][0]['text'] = "UDN000096,(3031-51) วัดโพธิ - (3023-49) UD town=Optic 12 Core DW = 0.5 km.
UDN000153,(3023-48) ศรีพินิจB - (3031-51) วัดโพธิ=Optic 12 Core DW = 1.5 km.
UDN000246,(3031-51) วัดโพธิ - (3032-88) เซ็นทรัล=Optic 12 Core DW = 1.106 km.";
    }
else if($message == "3031-52"){
          $arrayPostData['messages'][0]['text'] = "UDN000154,(BJ) หัวต่อเฮียบงวนมิลเลอร์ - (3031-52) บ้านคำกลิ้ง=Optic 12 Core DW = 3.177 km.
UDN000265,(3031-52) บ้านคำกลิ้ง - (3033-46) บ้าน ตาด=Optic 12 Core DW = 5.931 km.
UDN000410,(3031-52) บ้านคำกลิ้ง - () กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3031-53"){
          $arrayPostData['messages'][0]['text'] = "UDN000034,(3031-53) ซอยศรีสวรรค์ - (3001-53) ศรีพินิจ CAB 3=Optic 12 Core DW = 0.65 km.
UDN000155,(3023-66) ตลาด มทบ.24 - (3031-53) ซอยศรีสวรรค์=Optic 12 Core DW = 0.846 km.";
    }
else if($message == "3031-54"){
        $arrayPostData['messages'][0]['text'] = "UDN000156,(3031-63) me ซอยยานเกราะ - (3031-54) ซอยร่วมใจ=Optic 12 Core DW = 1.84 km.";
    }
else if($message == "3031-56"){
          $arrayPostData['messages'][0]['text'] = "UDN000149,(3031-56) วัดสระบัวบาน - (3031-47) ซอยพินิจเจริญ=Optic 12 Core DW = 1.05 km.
UDN000157,(3031-58) ซอยแก้วอุดม - (3031-56) วัดสระบัวบาน=Optic 12 Core DW = 1.5 km.
UDN000524,(3031-56) วัดสระบัวบาน - (3033-159) วัดสระบัวบาน3=Optic 12 Core DW = 0.25 km.";
    }
else if($message == "3031-57"){
          $arrayPostData['messages'][0]['text'] = "UDN000008,(3023-88) me ตลาดโพศรี - (3031-57) กระจ่างวิทย์=Optic 12 Core DW = 1.115 km.
UDN000012,(3031-57) me กระจ่างวิทย์ - (3001-45) me พนาริน=12 Core= 5 km.
UDN000159,(3031-57) me กระจ่างวิทย์ - (3031-58) ซอยแก้วอุดม=Optic 12 Core DW = 0.533 km.";
    }
else if($message == "3031-58"){
          $arrayPostData['messages'][0]['text'] = "UDN000042,(3031-58) ซอยแก้วอุดม - (3001-64) บ้านบ่อสร้าง=Optic 12 Core DW = 0.789 km.
UDN000085,(3031-58) ซอยแก้วอุดม - (3023-35) หนองสำโรง=Optic 12 Core DW = 3.391 km.
UDN000110,(3031-58) ซอยแก้วอุดม - (3023-64) ซอยสามกษัตริย์=Optic 12 Core DW = 0.495 km.
UDN000157,(3031-58) ซอยแก้วอุดม - (3031-56) วัดสระบัวบาน=Optic 12 Core DW = 1.5 km.
UDN000159,(3031-57) me กระจ่างวิทย์ - (3031-58) ซอยแก้วอุดม=Optic 12 Core DW = 0.533 km.";
    }
else if($message == "3031-60"){
        $arrayPostData['messages'][0]['text'] = "UDN000160,(BJ) หัวต่อโหนดโบ้เบ้เดิม - (3031-60) การเคหะ=Optic 12 Core DW = 0.924 km.";
    }
else if($message == "3031-62"){
          $arrayPostData['messages'][0]['text'] = "UDN000161,(3023-78) วัดหนองขาม - (3031-62) ม.ปราณีแลนด์=Optic 12 Core DW = 1.53 km.
UDN000282,(3031-62) ม.ปราณีแลนด์ - (3033-66) หมู่บ้านไพรเวท=Optic 12 Core DW = 0.736 km.";
    }
else if($message == "3031-63"){
          $arrayPostData['messages'][0]['text'] = "UDN000033,(3031-63) me ซอยยานเกราะ - (3001-51) บ้านเซ=Optic 12 Core DW = 1.4 km.
UDN000038,(3031-63) me ซอยยานเกราะ - (3001-58) บ้านสวนพฤกษา=Optic 12 Core DW = 1.2 km.
UDN000156,(3031-63) me ซอยยานเกราะ - (3031-54) ซอยร่วมใจ=Optic 12 Core DW = 1.84 km.
UDN000219,(3031-63) me ซอยยานเกราะ - (3032-60) เอื้ออาทร5=Optic 12 Core DW = 1.548 km.
UDN000224,(3031-63) me ซอยยานเกราะ - (3032-65) โยธานิมิต=Optic 12 Core DW = 1.203 km.
UDN000367,(3031-63) me ซอยยานเกราะ - () ศูนย์พัฒนาฝีมือแรงงานจังหวัดอุดรธานี=Optic 12 Core DW = 0.5 km.
UDN000374,(3031-63) me ซอยยานเกราะ - () บริษัท เฮียบหงวนอีซูซุเซลส์ จำกัด=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3031-64"){
          $arrayPostData['messages'][0]['text'] = "UDN000163,(BJ) หัวต่อเฮียบงวนมิลเลอร์ - (3031-64) บ้านจั่นศรีวิไล=Optic 12 Core DW = 2.41 km.
UDN000267,(3031-64) บ้านจั่นศรีวิไล - (3033-48) บ้านจั่นศรีวิไล2=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3031-65"){
          $arrayPostData['messages'][0]['text'] = "UDN000164,(3023-59) บ้านจิกโหนดB - (3031-65) ธนาคารกรุงเทพ=Optic 12 Core DW = 0.758 km.
UDN000172,(3031-65) ธนาคารกรุงเทพ - (3031-73) เบสไฮเทค=Optic 12 Core DW = 0.547 km.";
    }
else if($message == "3031-66"){
          $arrayPostData['messages'][0]['text'] = "UDN000165,(3023-59) Metronet บ้านจิก - (3031-66) ปศุสัตว์=Optic 12 Core DW = 1.13 km.
UDN000183,(3031-66) ปศุสัตว์ - (3031-84) ทุ่งศรีเมือง=Optic 12 Core DW = 1.024 km.";
    }
else if($message == "3031-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000142,(3031-67) ซอยทุ่งสวรรค์ - (3031-40) ปั้มคาลเทคซ์บ้านเลื่อม=Optic 12 Core DW = 1.24 km.
UDN000166,(3023-90) ซอยร่วมมิตร - (3031-67) ซอยทุ่งสวรรค์=Optic 12 Core DW = 1.44 km.";
    }
else if($message == "3031-68"){
          $arrayPostData['messages'][0]['text'] = "UDN000167,(BJ) หัวต่อพรสวรรค์เดิม - (3031-68) บ้านนาทราย=Optic 12 Core DW = 1.22 km.
UDN000471,(3031-68) บ้านนาทราย - (3033-134) บ้านอีเลี่ยน=Optic 12 Core DW = 5.5 km.
UDN001253,(3031-68) นาทราย - (3033-167) นาทราย2=Optic 12 Core DW = 0.565 km.";
    }
else if($message == "3031-69"){
        $arrayPostData['messages'][0]['text'] = "UDN000168,(3023-91) รวยสุข - (3031-69) ทุ่งสว่าง=Optic 12 Core DW = 0.682 km.";
    }
else if($message == "3031-70"){
          $arrayPostData['messages'][0]['text'] = "UDN000169,(3023-88) me ตลาดโพศรี - (3031-70) นภาลัย=Optic 12 Core DW = 0.938 km.
UDN000195,(3031-70) นภาลัย - (3031-96) บขส.=Optic 12 Core DW = 1.682 km.
UDN000370,(3031-70) นภาลัย  - () บริษัท ดีทรีอินวัน จำกัด=Optic 12 Core DW = 0.5 km.
UDN000372,(3031-70) นภาลัย - () มหาวิทยาลัยมหาสารคาม=Optic 12 Core DW = 1 km.";
    }
else if($message == "3031-71"){
          $arrayPostData['messages'][0]['text'] = "UDN000170,(ME3001-32B) จงมี Node B - (3031-71) ไปรษณีย์=Optic 12 Core DW = 1.485 km.
UDN000171,(3031-71) ไปรษณีย์ - (3031-72) ต้นคูณ=Optic 12 Core DW = 0.699 km.";
    }
else if($message == "3031-72"){
          $arrayPostData['messages'][0]['text'] = "UDN000171,(3031-71) ไปรษณีย์ - (3031-72) ต้นคูณ=Optic 12 Core DW = 0.699 km.
UDN000173,(3031-72) ต้นคูณ - (3031-74) สรรพสามิตร=Optic 12 Core DW = 0.602 km.";
    }
else if($message == "3031-73"){
          $arrayPostData['messages'][0]['text'] = "UDN000172,(3031-65) ธนาคารกรุงเทพ - (3031-73) เบสไฮเทค=Optic 12 Core DW = 0.547 km.
UDN000189,(3031-73) เบสไฮเทค - (3031-90) แม่หยา=Optic 12 Core DW = 0.398 km.
UDN000378,(3031-73 ) เบสไฮเทค  - () สนง. พาณิชย์จังหวัดอุดรธานี=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3031-73 "){
        $arrayPostData['messages'][0]['text'] = "0";
    }
else if($message == "3031-74"){
        $arrayPostData['messages'][0]['text'] = "UDN000173,(3031-72) ต้นคูณ - (3031-74) สรรพสามิตร=Optic 12 Core DW = 0.602 km.";
    }
else if($message == "3031-75"){
          $arrayPostData['messages'][0]['text'] = "UDN000143,(3031-75) อุดรพิชัยรักษ์ - (3031-41) บ้านช้าง=Optic 12 Core DW = 1.673 km.
UDN000174,(ME3023-65) Metronet หนองหิน - (3031-75) อุดรพิชัยรักษ์=Optic 12 Core DW = 0.921 km.
UDN000397,(3031-75) อุดรพิชัยรักษ์ - (3033-89) บ้านช้าง2=Optic 12 Core DW = 1.1 km.
UDN001286,(3031-75) อุดรพิชัยรักษ์ - (3033-353) อุดรพิชัยรักษ์2=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3031-76"){
          $arrayPostData['messages'][0]['text'] = "UDN000175,(ME3001-32B) จงมี Node B - (3031-76) ซอยเบญจาง=Optic 12 Core DW = 0.882 km.
UDN000176,(3031-76) ซอยเบญจาง - (3031-77) ธ.ก.ส=Optic 12 Core DW = 1.104 km.
UDN000187,(3031-76) ซอยเบญจาง - (3031-88) วิจารณรงค์1=Optic 12 Core DW = 0.468 km.";
    }
else if($message == "3031-77"){
        $arrayPostData['messages'][0]['text'] = "UDN000176,(3031-76) ซอยเบญจาง - (3031-77) ธ.ก.ส=Optic 12 Core DW = 1.104 km.";
    }
else if($message == "3031-78"){
          $arrayPostData['messages'][0]['text'] = "UDN000134,(3031-78) บ้านพักธนพร - (3023-90) ซอยร่วมมิตร=Optic 12 Core DW = 0.362 km.
UDN000177,(3023-88) me ตลาดโพศรี - (3031-78) บ้านพักธนพร=Optic 12 Core DW = 0.739 km.";
    }
else if($message == "3031-79"){
          $arrayPostData['messages'][0]['text'] = "UDN000031,(3031-79) ชัชวาลการบัญชี - (3001-49) หมู่บ้านหรรษา=Optic 12 Core DW = 1.9 km.
UDN000178,(BJ) หัวต่อofc ระหว่างnodeศรีสุข-ประชานิมิตร - (3031-79) ชัชวาลการบัญชี=Optic 12 Core DW = 0.672 km.
UDN001928,(3031-79) ชัชวาลการบัญชี - (3033-436) หรรษา3=Optic 12 Core DW = 1 km.";
    }
else if($message == "3031-80"){
        $arrayPostData['messages'][0]['text'] = "UDN000179,(3031-81) หนองตุ2 - (3031-80) หนองตุ3=Optic 12 Core DW = 0.291 km.";
    }
else if($message == "3031-81"){
          $arrayPostData['messages'][0]['text'] = "UDN000036,(3031-81) หนองตุ2 - (3001-56) หมู่บ้าน ร่มเย็น 3=Optic 12 Core DW = 2.14 km.
UDN000179,(3031-81) หนองตุ2 - (3031-80) หนองตุ3=Optic 12 Core DW = 0.291 km.
UDN000180,(3023-83) หนองตุ - (3031-81) หนองตุ2=Optic 12 Core DW = 0.803 km.";
    }
else if($message == "3031-82"){
          $arrayPostData['messages'][0]['text'] = "UDN000112,(3031-82) กองบินประตู1 - (3023-66) ตลาด มทบ.24=Optic 12 Core DW = 0.461 km.
UDN000181,(3023-48) ศรีพินิจB - (3031-82) กองบินประตู1=Optic 12 Core DW = 1.752 km.";
    }
else if($message == "3031-83"){
          $arrayPostData['messages'][0]['text'] = "UDN000125,(3031-83) ซอยสามัคคี - (3023-80) PK3=Optic 12 Core DW = 1.32 km.
UDN000182,(3031-50) ม.นันทวัน - (3031-83) ซอยสามัคคี=Optic 12 Core DW = 1.39 km.
UDN000285,(3031-83) ซอยสามัคคี - (3033-69) สามัคคีนาทราย=Optic 12 Core DW = 1.161 km.";
    }
else if($message == "3031-84"){
        $arrayPostData['messages'][0]['text'] = "UDN000183,(3031-66) ปศุสัตว์ - (3031-84) ทุ่งศรีเมือง=Optic 12 Core DW = 1.024 km.";
    }
else if($message == "3031-85"){
          $arrayPostData['messages'][0]['text'] = "UDN000184,(3023-68) หนองประจักษ์1 - (3031-85) บ้านทรายทอง=Optic 12 Core DW = 0.368 km.
UDN000188,(3031-85) บ้านทรายทอง - (3031-89) สวรรยา=Optic 12 Core DW = 1.246 km.";
    }
else if($message == "3031-86"){
        $arrayPostData['messages'][0]['text'] = "UDN000185,(3031-92) เงาไม้ - (3031-86) วัดทิพย์=Optic 12 Core DW = 1.374 km.";
    }
else if($message == "3031-87"){
          $arrayPostData['messages'][0]['text'] = "UDN000186,(BJ) หัวต่อหน้าหมู่บ้านอุดรแลนด์ - (3031-87) แยกหนองใส=Optic 12 Core DW = 1.845 km.
UDN000417,(3031-87) แยกหนองใส - (3033-106) โนนมะเขือ=Optic 12 Core DW = 0.9 km.
UDN000589,(3031-87) แยกหนองใส - (3032-97) ซอยแสงเจริญ=Optic 12 Core DW = 0.98 km.
UDN001927,(3031-87) แยกหนองใส - (3033-434) แยกหนองใส2=Optic 12 Core DW = 0.413 km.";
    }
else if($message == "3031-88"){
        $arrayPostData['messages'][0]['text'] = "UDN000187,(3031-76) ซอยเบญจาง - (3031-88) วิจารณรงค์1=Optic 12 Core DW = 0.468 km.";
    }
else if($message == "3031-89"){
          $arrayPostData['messages'][0]['text'] = "UDN000188,(3031-85) บ้านทรายทอง - (3031-89) สวรรยา=Optic 12 Core DW = 1.246 km.
UDN000856,(3031-89) สวรรยา - (3033-267) สวรรยา2=Optic 12 Core DW = 1.18 km.
UDN001933,(3031-89) สวรรยา - (3033-501) สวรรยา3=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3031-90"){
          $arrayPostData['messages'][0]['text'] = "UDN000189,(3031-73) เบสไฮเทค - (3031-90) แม่หยา=Optic 12 Core DW = 0.398 km.
UDN000190,(3031-90) แม่หยา - (3031-91) ตลาดไทยอิสาน=Optic 12 Core DW = 1.157 km.";
    }
else if($message == "3031-91"){
        $arrayPostData['messages'][0]['text'] = "UDN000190,(3031-90) แม่หยา - (3031-91) ตลาดไทยอิสาน=Optic 12 Core DW = 1.157 km.";
    }
else if($message == "3031-92"){
          $arrayPostData['messages'][0]['text'] = "UDN000185,(3031-92) เงาไม้ - (3031-86) วัดทิพย์=Optic 12 Core DW = 1.374 km.
UDN000191,(3023-59) Metronet บ้านจิก - (3031-92) เงาไม้=Optic 12 Core DW = 1.105 km.";
    }
else if($message == "3031-93"){
          $arrayPostData['messages'][0]['text'] = "UDN000083,(3031-93) ธนาดร - (3023-33) บ้านหนองตูม=Optic 12 Core DW = 2.811 km.
UDN000192,(BJ) หัวต่อข้างอุดรทวีทรัพย์ - (3031-93) ธนาดร=Optic 12 Core DW = 1.646 km.";
    }
else if($message == "3031-94"){
          $arrayPostData['messages'][0]['text'] = "UDN000193,(3023-48) ศรีพินิจB - (3031-94) เทพบุรี=Optic 12 Core DW = 0.744 km.
UDN000196,(3031-94) เทพบุรี - (3031-97) มหามิตร=Optic 12 Core DW = 1.165 km.";
    }
else if($message == "3031-95"){
          $arrayPostData['messages'][0]['text'] = "UDN000194,(3001-49) หมู่บ้านหรรษา - (3031-95) หรรษา 2=Optic 12 Core DW = 1.065 km.
UDN000385,(3031-95 ) หรรษา 2  - (3033-79) พฤษชาติ=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3031-95 "){
        $arrayPostData['messages'][0]['text'] = "0";
    }
else if($message == "3031-96"){
          $arrayPostData['messages'][0]['text'] = "UDN000195,(3031-70) นภาลัย - (3031-96) บขส.=Optic 12 Core DW = 1.682 km.
UDN000229,(3031-96) บขส. - (3032-70) หรรษา 3=Optic 12 Core DW = 2.981 km.";
    }
else if($message == "3031-97"){
        $arrayPostData['messages'][0]['text'] = "UDN000196,(3031-94) เทพบุรี - (3031-97) มหามิตร=Optic 12 Core DW = 1.165 km.";
    }
else if($message == "3031-98"){
          $arrayPostData['messages'][0]['text'] = "UDN000197,(3023-82) me เจริญสุข - (3031-98) ศาลเจ้าปู่ย่า=Optic 12 Core DW = 2.461 km.
UDN000231,(3031-98) ศาลเจ้าปู่ย่า - (3032-72) ซอยกำนัน=Optic 12 Core DW = 1.724 km.";
    }
else if($message == "3031-99"){
          $arrayPostData['messages'][0]['text'] = "UDN000198,(3032-45) นาข่า - (3031-99) ตลาดไทยศิรินาข่า=Optic 12 Core DW = 2.365 km.
UDN000239,(3031-99) ตลาดไทยศิรินาข่า - (3032-80) บ้านถ่อนน้อย=Optic 12 Core DW = 3.05 km.
UDN000245,(3031-99) ตลาดไทยศิรินาข่า - (3032-86) บ้านเม่นนาข่า=Optic 12 Core DW = 2.129 km.
UDN000540,(3031-99) ME นาข่า - (3033-233) ตลาดไทยศิรินาข่า2=Optic 12 Core DW = 0.542 km.
UDN001637,(3031-99) ME ตลาดไทยศิรินาข่า - (3019-45) บ้านด่าน=12 Core= 5.93 km.";
    }
else if($message == "3032-31"){
        $arrayPostData['messages'][0]['text'] = "UDN000014,(3032-31) me รังษฺณา - (3031-37) พลอยวิลล่า1=Optic 12 Core DW = 1.11 km.";
    }
else if($message == "3032-33"){
        $arrayPostData['messages'][0]['text'] = "UDN000003,(3032-33) meโนนสูง(SJ) - (3002-40) me กรุงไทย=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3032-34"){
          $arrayPostData['messages'][0]['text'] = "UDN000011,(3023-82) me เจริญสุข - (3032-34) me bigc=Optic 12 Core DW = 1.9 km.
UDN000016,(3032-34) me bigc - (3001-37) me แยกสามพร้าว=12 Core= 6 km.
UDN000240,(ME3032-34) Metronet big C - (3032-81) ร่มเย็น4=Optic 12 Core DW = 1.7 km.
UDN000368,(3032-34) me bigc - () วิทยาลัยสันตพล=Optic 12 Core DW = 0.7 km.
UDN000376,(3032-34) me bigc - () บริษัท ศรีไทยใหม่วัสดุภัณฑ์ จำกัด=Optic 12 Core DW = 1.5 km.
UDN000427,(3032-34) me bigc - () การประปาเขต7=Optic 12 Core DW = 1.475 km.
UDN000494,(3032-34) me bigc - (3033-145) แยกสันตพล=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3032-36"){
          $arrayPostData['messages'][0]['text'] = "UDN000002,(3032-36) ชุมสาย อุดรคอนโดเทล - () EGAT หนองคาย=12 Core= 48.334 km.
UDN000017,(3032-36) ชุมสาย อุดรคอนโดเทล - (3201-63) หนองสองห้อง=12 Core= 40.886 km.
UDN000413,(3032-36) ชุมสาย อุดรคอนโดเทล - (3008-37) ME หนองหาน=12 Core= 40 km.
UDN000420,(3032-36) ชุมสาย อุดรคอนโดเทล - (3023-59) บ้านจิก=24 Core= 6.257 km.
UDN000421,(3032-36) ชุมสาย อุดรคอนโดเทล - (3001-32) me จงมี=24 Core= 3.225 km.
UDN000423,(3032-36) ชุมสาย อุดรคอนโดเทล - (3023-48) ศรีพินิจ=24 Core= 7.649 km.
UDN000424,(3032-36) ชุมสาย อุดรคอนโดเทล - (3023-65) หนองหิน=12 Core= 11.072 km.";
    }
else if($message == "3032-37"){
          $arrayPostData['messages'][0]['text'] = "UDN000109,(3032-37) สามพร้าว - (3023-63) วัดสามพร้าว=Optic 12 Core DW = 0.881 km.
UDN000199,(3033-70) วัดสว่างสามัคคีสามพร้าว - (3032-37) สามพร้าว=Optic 12 Core DW = 0.65 km.
UDN000211,(3032-37) สามพร้าว - (3032-51) บ้านดอนหาด=Optic 12 Core DW = 3.167 km.
UDN000270,(3032-37) สามพร้าว - (3033-51) สามพร้าว4=Optic 12 Core DW = 1.182 km.
UDN000286,(3032-37) สามพร้าว - (3033-70) วัดสว่างสามัคคีสามพร้าว=Optic 12 Core DW = 0.899 km.
UDN000583,(3032-37) สาวพร้าว - (3033-245) วัดสามพร้าว2=Optic 12 Core DW = 0.504 km.";
    }
else if($message == "3032-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000040,(3032-39) โนนสูง-ป่าหวาย - (3001-60) บ้านชัยพร=Optic 12 Core DW = 3.038 km.
UDN000200,(3032-40) ME โนนสูงน้ำคำ - (3032-39) โนนสูง-ป่าหวาย=Optic 12 Core DW = 1.011 km.
UDN001916,(3032-39) โนนสูง-ป่าหวาย - (3033-402) โนนสูง-ป่าหวาย 3=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3032-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000200,(3032-40) ME โนนสูงน้ำคำ - (3032-39) โนนสูง-ป่าหวาย=Optic 12 Core DW = 1.011 km.
UDN000208,(3032-40) ME โนนสูงน้ำคำ - (3032-48) หนองไผ่=Optic 12 Core DW = 3.899 km.
UDN000236,(3032-40) ME โนนสูงน้ำคำ - (3032-77) ค่ายรามสูร=Optic 12 Core DW = 1.11 km.
UDN000276,(3032-40) ME โนนสูงน้ำคำ - (3033-59) วัดสุวรรณุทการาม=Optic 12 Core DW = 0.71 km.
UDN000281,(3032-40) ME โนนสูงน้ำคำ - (3033-65) โนนสูงน้ำคำ2=Optic 12 Core DW = 0.77 km.
UDN000365,(3032-40) ME โนนสูงน้ำคำ - () วิทยาลัยพยาบาลบรมราชชนนี อุดรธานี=Optic 12 Core DW = 2.5 km.
UDN000369,(3032-40) ME โนนสูงน้ำคำ - () บริษัท ราชสีมา เอส.ดี.ซี.จำกัด=Optic 12 Core DW = 0.6 km.
UDN000401,(3032-40) ME โนนสูงน้ำคำ - (3033-93) ค่ายปืนใหญ่=Optic 12 Core DW = 1.7 km.
UDN000506,(3032-40) ME โนนสูงน้ำคำ - (3033-157) วัดสุุวรรณทการาม2=Optic 12 Core DW = 0.77 km.";
    }
else if($message == "3032-41"){
          $arrayPostData['messages'][0]['text'] = "UDN000202,(3032-42) หนองขุ่น - (3032-41) ปากดง=Optic 12 Core DW = 2.677 km.
UDN000487,(3032-41) ปากดง - (3033-136) บ้านโนนบุญมี=Optic 12 Core DW = 3 km.";
    }
else if($message == "3032-42"){
          $arrayPostData['messages'][0]['text'] = "UDN000202,(3032-42) หนองขุ่น - (3032-41) ปากดง=Optic 12 Core DW = 2.677 km.
UDN000203,(BJ) หัวต่อofcระหว่างMe-หนองหิน-Node 3001-48 - (3032-42) หนองขุ่น=Optic 12 Core DW = 1.501 km.
UDN000216,(3032-42) หนองขุ่น - (3032-56) กุดลิงง้อ=Optic 12 Core DW = 6.015 km.";
    }
else if($message == "3032-43"){
          $arrayPostData['messages'][0]['text'] = "UDN000204,(BJ) หัวต่อofcระหว่างMe-หนองหิน-Node 3001-48 - (3032-43) งี่สุน=Optic 12 Core DW = 0.108 km.
UDN000866,(3032-43) งี่สุน - (3033-287) บ้านนาคลอง=Optic 12 Core DW = 2.888 km.";
    }
else if($message == "3032-44"){
          $arrayPostData['messages'][0]['text'] = "UDN000205,(3001-66) บ้านหนองบุ - (3032-44) สามพร้าว2=Optic 12 Core DW = 2.498 km.
UDN001282,(3032-44) สามพร้าว2 - (3033-365) บ้านหนองลีหู2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3032-45"){
          $arrayPostData['messages'][0]['text'] = "UDN000094,(3032-45) นาข่า - (3023-47) บ้านงอย=Optic 12 Core DW = 4.252 km.
UDN000198,(3032-45) นาข่า - (3031-99) ตลาดไทยศิรินาข่า=Optic 12 Core DW = 2.365 km.
UDN000206,(3023-45) บ้านกุดสระ - (3032-45) นาข่า=Optic 12 Core DW = 3.904 km.
UDN000476,(3032-45) นาข่า - (3033-132) บ้านพรานเหมือน=Optic 12 Core DW = 3.9 km.
UDN000525,(3032-45) นาข่า - (3033-161) นาข่า 2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3032-47"){
          $arrayPostData['messages'][0]['text'] = "UDN000207,(3031-41) บ้านช้าง - (3032-47) บ้านพักกองบิน23=Optic 12 Core DW = 1.669 km.
UDN000238,(3032-47) บ้านพักกองบิน23 - (3032-79) กองบิน23=Optic 12 Core DW = 2.264 km.";
    }
else if($message == "3032-48"){
          $arrayPostData['messages'][0]['text'] = "UDN000208,(3032-40) ME โนนสูงน้ำคำ - (3032-48) หนองไผ่=Optic 12 Core DW = 3.899 km.
UDN000269,(3032-48) หนองไผ่ - (3033-50) บ้านแม่นนท์=Optic 12 Core DW = 2.44 km.";
    }
else if($message == "3032-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000209,() 3033-37 หลังหมู่บ้าน ชนาการต์ - (3032-49) หมู่บ้าน ปราณทอง=Optic 12 Core DW = 1.211 km.
UDN001667,(3032-49) ME หมู่บ้านปราณทอง - (3033-178) มะลิวัลย์=Optic 12 Core DW = 0.221 km.";
    }
else if($message == "3032-50"){
          $arrayPostData['messages'][0]['text'] = "UDN000072,(3032-50) หนองวัวซอ2 - (3009-38) หนองวัวซอ3=Optic 12 Core DW = 0.718 km.
UDN000073,(3032-50) หนองวัวซอ2 - (3009-39) บ้านโคกก่อง=Optic 12 Core DW = 2.699 km.
UDN000210,(3001-48) หนองวัวซอ - (3032-50) หนองวัวซอ2=Optic 12 Core DW = 1.133 km.";
    }
else if($message == "3032-51"){
          $arrayPostData['messages'][0]['text'] = "UDN000211,(3032-37) สามพร้าว - (3032-51) บ้านดอนหาด=Optic 12 Core DW = 3.167 km.
UDN000454,(3032-51) บ้านดอนหาด - (3033-119) บ้านดงเหล่าต้อง=Optic 12 Core DW = 1.469 km.
UDN000861,(3032-51) บ้านดอนหาด - (3033-279) บ้านนาหยาด=Optic 12 Core DW = 2.935 km.";
    }
else if($message == "3032-52"){
          $arrayPostData['messages'][0]['text'] = "UDN000212,(3033-137) ซอยคนหล่อ - (3032-52) หนองนาคำ=Optic 12 Core DW = 0.755 km.
UDN001194,(3032-52) หนองนาคำ - (3033-295) บ้านถ่อนน้อย=Optic 12 Core DW = 2.4 km.
UDN001203,(3032-52) หนองนาคำ - (3033-342) หนองนาคำ 3=Optic 12 Core DW = 0.9 km.
UDN001275,(3032-52) หนองนาคำ - (3033-219) หนองนาคำ2=Optic 12 Core DW = 1.581 km.
UDN001929,(3032-52) หนองนาคำ - (3033-459) หนองนาคำ 2=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3032-53"){
          $arrayPostData['messages'][0]['text'] = "UDN000212,(3033-137) ซอยคนหล่อ - (3032-52) หนองนาคำ=Optic 12 Core DW = 0.755 km.
UDN001194,(3032-52) หนองนาคำ - (3033-295) บ้านถ่อนน้อย=Optic 12 Core DW = 2.4 km.
UDN001203,(3032-52) หนองนาคำ - (3033-342) หนองนาคำ 3=Optic 12 Core DW = 0.9 km.
UDN001275,(3032-52) หนองนาคำ - (3033-219) หนองนาคำ2=Optic 12 Core DW = 1.581 km.
UDN001929,(3032-52) หนองนาคำ - (3033-459) หนองนาคำ 2=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3032-55"){
          $arrayPostData['messages'][0]['text'] = "UDN000215,(3001-46) วัวข้อง - (3032-55) เชียงพิณ=Optic 12 Core DW = 1.642 km.
UDN000259,(3032-55) เชียงพิณ - (3033-40) บ้านหนองโอน=Optic 12 Core DW = 4.224 km.";
    }
else if($message == "3032-55 "){
        $arrayPostData['messages'][0]['text'] = "UDN000389,(3032-55 ) เชียงพิณ  - (3033-84) เชียงพิณ2=Optic 12 Core DW = 0.45 km.";
    }
else if($message == "3032-56"){
          $arrayPostData['messages'][0]['text'] = "UDN000216,(3032-42) หนองขุ่น - (3032-56) กุดลิงง้อ=Optic 12 Core DW = 6.015 km.
UDN000264,(3032-56) กุดลิงง้อ - (3033-45) บ้านศรีเชียงใหม่=Optic 12 Core DW = 3.184 km.
UDN001674,(3032-56) กุดลิงง้อ - (3033-255) บ้านโสกน้ำขาว=Optic 12 Core DW = 3.1 km.
UDN001941,(3032-56) กุดลิงง้อ - (3033-515) กุดลิงง้อ2=Optic 12 Core DW = 0.675 km.";
    }
else if($message == "3032-56 "){
        $arrayPostData['messages'][0]['text'] = "UDN000392,(3032-56 ) กุดลิงง้อ  - (3033-88) ศรีบุญเรือง=Optic 12 Core DW = 3 km.";
    }
else if($message == "3032-58"){
        $arrayPostData['messages'][0]['text'] = "UDN000217,(3001-53) ศรีพินิจ CAB 3 - (3032-58) บ้านพักมทบ.24=Optic 12 Core DW = 2.062 km.";
    }
else if($message == "3032-59"){
        $arrayPostData['messages'][0]['text'] = "UDN000218,(ME3001-32B) จงมี Node B - (3032-59) จันทร์สว่างซอย3=Optic 12 Core DW = 0.729 km.";
    }
else if($message == "3032-60"){
        $arrayPostData['messages'][0]['text'] = "UDN000219,(3031-63) me ซอยยานเกราะ - (3032-60) เอื้ออาทร5=Optic 12 Core DW = 1.548 km.";
    }
else if($message == "3032-61"){
        $arrayPostData['messages'][0]['text'] = "UDN000220,(ME3023-65) Metronet บ้านหนองหิน - (3032-61) โพนบก=Optic 12 Core DW = 0.781 km.";
    }
else if($message == "3032-62"){
          $arrayPostData['messages'][0]['text'] = "UDN000221,(BJ) หัวต่อโหนดโบ้เบ้เดิม - (3032-62) หนองนาหล่ำ=Optic 12 Core DW = 1.004 km.
UDN000387,(3032-62) หนองนาหล่ำ  - (3033-81) หนองนาหล่ำ2=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3032-63"){
        $arrayPostData['messages'][0]['text'] = "UDN000222,(3023-88) me ตลาดโพศรี - (3032-63) โรงเรียนกวดวิชาดาวองค์=Optic 12 Core DW = 0.674 km.";
    }
else if($message == "3032-64"){
          $arrayPostData['messages'][0]['text'] = "UDN000223,(3001-47) ฟลอร่าวิลล์ - (3032-64) หมู่บ้านเสริมสุข=Optic 12 Core DW = 0.512 km.
UDN000253,(3032-64) หมู่บ้านเสริมสุข - (3032-95) บ้านข้าวสาร=Optic 12 Core DW = 1.004 km.";
    }
else if($message == "3032-65"){
          $arrayPostData['messages'][0]['text'] = "UDN000224,(3031-63) me ซอยยานเกราะ - (3032-65) โยธานิมิต=Optic 12 Core DW = 1.203 km.
UDN001281,(3032-65) โยธานิมิต - (3033-355) โยธานิมิตร2=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3032-66"){
        $arrayPostData['messages'][0]['text'] = "UDN000225,(3031-50) ม.นันทวัน - (3032-66) ดอนหัน=Optic 12 Core DW = 1.994 km.";
    }
else if($message == "3032-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000226,(BJ) หัวต่อ Link backbone Link - (3032-67) โนนภู่ทอง=Optic 12 Core DW = 1.147 km.
UDN000477,(3032-67) โนนภู่ทอง - (3033-124) โชคทวีคูณ(โนนภู่ทอง)=Optic 12 Core DW = 0.69 km.
UDN001284,(3032-67) โนนภู่ทอง - (3033-351) โนนภู่ทอง2=Optic 12 Core DW = 0.5 km.
UDN001304,(3001-47) ฟลอร่าวิวล์ - (3032-67) โนนภู่ทอง=Optic 12 Core DW = 2.32 km.";
    }
else if($message == "3032-68"){
          $arrayPostData['messages'][0]['text'] = "UDN000089,(3032-68) บ้านม่วง - (3023-41) หนองบัว CAB2=Optic 12 Core DW = 1.275 km.
UDN000227,(3001-43) หมู่บ้าน PK 5 - (3032-68) บ้านม่วง=Optic 12 Core DW = 1.289 km.
UDN001211,(3032-68) บ้านม่วง - (3032-82) มโนรมย์=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3032-69"){
          $arrayPostData['messages'][0]['text'] = "UDN000228,(3023-88) me ตลาดโพศรี - (3032-69) แยกตลาดเทศบาล=Optic 12 Core DW = 1.139 km.
UDN000411,(3032-69) แยกตลาดเทศบาล - () กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3032-70"){
        $arrayPostData['messages'][0]['text'] = "UDN000229,(3031-96) บขส. - (3032-70) หรรษา 3=Optic 12 Core DW = 2.981 km.";
    }
else if($message == "3032-71"){
        $arrayPostData['messages'][0]['text'] = "UDN000230,(3031-43) ประชาสันติ2 - (3032-71) ประชาสันติ3=Optic 12 Core DW = 0.41 km.";
    }
else if($message == "3032-72"){
          $arrayPostData['messages'][0]['text'] = "UDN000231,(3031-98) ศาลเจ้าปู่ย่า - (3032-72) ซอยกำนัน=Optic 12 Core DW = 1.724 km.
UDN000255,(3032-72) ซอยกำนัน - (3032-97) ซอยแสงเจริญ=Optic 12 Core DW = 1.624 km.";
    }
else if($message == "3032-73"){
        $arrayPostData['messages'][0]['text'] = "UDN000232,(3023-59) บ้านจิกโหนดB - (3032-73) หลังอุดรพิท=Optic 12 Core DW = 0.948 km.";
    }
else if($message == "3032-74"){
        $arrayPostData['messages'][0]['text'] = "UDN000233,(3023-84) สัมพันธ์สุข - (3032-74) สัมพันธสุข2=Optic 12 Core DW = 0.645 km.";
    }
else if($message == "3032-75"){
        $arrayPostData['messages'][0]['text'] = "UDN000234,(3023-88) me ตลาดโพศรี - (3032-75) โรงพยาบาลศูนย์อุดร=Optic 12 Core DW = 0.493 km.";
    }
else if($message == "3032-76"){
        $arrayPostData['messages'][0]['text'] = "UDN000235,(3033-67) โรงเรียนหนองขุ่น - (3032-76) นาแอง=Optic 12 Core DW = 3.046 km.";
    }
else if($message == "3032-77"){
          $arrayPostData['messages'][0]['text'] = "UDN000236,(3032-40) ME โนนสูงน้ำคำ - (3032-77) ค่ายรามสูร=Optic 12 Core DW = 1.11 km.
UDN000483,(3032-77) ค่ายรามสูร - (3033-125) ค่ายรามสูร2=Optic 12 Core DW = 0.9 km.
UDN001502,(3032-77) ค่ายรามสูร - (3033-466) ค่ายรามสูร3=Optic 12 Core DW = 0.76 km.";
    }
else if($message == "3032-78"){
          $arrayPostData['messages'][0]['text'] = "UDN000237,(3001-60) บ้านชัยพร - (3032-78) หนองหมื่นท้าว=Optic 12 Core DW = 1.664 km.
UDN000435,(3032-78) หนองหมื่นท้าว - (3033-113) บ้านหนองโศกดาว=Optic 12 Core DW = 2.736 km.
UDN000857,(3032-78) หนองหมื่นท้าว - (3033-269) หนองหมื่นท้าว2=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3032-79"){
          $arrayPostData['messages'][0]['text'] = "UDN000238,(3032-47) บ้านพักกองบิน23 - (3032-79) กองบิน23=Optic 12 Core DW = 2.264 km.
UDN000287,(3032-79) กองบิน23 - (3033-71) โรงพยาบาลกองบิน23=Optic 12 Core DW = 0.606 km.";
    }
else if($message == "3032-80"){
          $arrayPostData['messages'][0]['text'] = "UDN000239,(3031-99) ตลาดไทยศิรินาข่า - (3032-80) บ้านถ่อนน้อย=Optic 12 Core DW = 3.05 km.
UDN000284,(3032-80) บ้านถ่อนน้อย - (3033-68) บ้านดอนแตง=Optic 12 Core DW = 0.776 km.
UDN000473,(3032-80) บ้านถ่อนน้อย - (3033-131) บ้านถ่อนน้อย2=Optic 12 Core DW = 0.6 km.
UDN001197,(3032-80) บ้านถ่อนน้อย - (3033-302) บ้านนาคำหลวง=12 Core= 7.6 km.";
    }
else if($message == "3032-81"){
        $arrayPostData['messages'][0]['text'] = "UDN000240,(ME3032-34) Metronet big C - (3032-81) ร่มเย็น4=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3032-82"){
          $arrayPostData['messages'][0]['text'] = "UDN000241,(3023-41) หนองบัว CAB2 - (3032-82) มโนรมย์=Optic 12 Core DW = 0.893 km.
UDN001211,(3032-68) บ้านม่วง - (3032-82) มโนรมย์=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3032-83"){
        $arrayPostData['messages'][0]['text'] = "UDN000242,(3023-64) ซอยสามกษัตริย์ - (3032-83) วัดสระบัวบาน2=Optic 12 Core DW = 1.088 km.";
    }
else if($message == "3032-84"){
          $arrayPostData['messages'][0]['text'] = "UDN000243,(BJ) หัวต่อโหนดโบ้เบ้เดิม - (3032-84) โบ้เบ้2=Optic 12 Core DW = 0.227 km.
UDN000588,(3032-84) โบ้เบ้2 - (3033-106) โนนมะเขือ=Optic 12 Core DW = 1.944 km.";
    }
else if($message == "3032-85"){
        $arrayPostData['messages'][0]['text'] = "UDN000244,(3023-67) บ้านห้วย - (3032-85) บ้านห้วย 2=Optic 12 Core DW = 0.764 km.";
    }
else if($message == "3032-86"){
          $arrayPostData['messages'][0]['text'] = "UDN000245,(3031-99) ตลาดไทยศิรินาข่า - (3032-86) บ้านเม่นนาข่า=Optic 12 Core DW = 2.129 km.
UDN000478,(3032-86) บ้านเม่นนาข่า - (3033-133) โรงเรียนบ้านเม่น=Optic 12 Core DW = 0.78 km.
UDN001909,(3032-86) บ้านเม่นนาข่า - (3033-378) บ้านเม่นนาข่า2=Optic 12 Core DW = 0.95 km.";
    }
else if($message == "3032-88"){
        $arrayPostData['messages'][0]['text'] = "UDN000246,(3031-51) วัดโพธิ - (3032-88) เซ็นทรัล=Optic 12 Core DW = 1.106 km.";
    }
else if($message == "3032-89"){
        $arrayPostData['messages'][0]['text'] = "UDN000247,(3023-58) ชุมชนหนองเตาเหล็ก - (3032-89) หนองเตาเหล็ก 2=Optic 12 Core DW = 0.477 km.";
    }
else if($message == "3032-90"){
        $arrayPostData['messages'][0]['text'] = "UDN000248,(ME3001-37) Metronet สามพร้าว - (3032-90) การเคหะ2=Optic 12 Core DW = 3.267 km.";
    }
else if($message == "3032-91"){
        $arrayPostData['messages'][0]['text'] = "UDN000249,(3023-45) บ้านกุดสระ - (3032-91) กุดสระ2=Optic 12 Core DW = 2.034 km.";
    }
else if($message == "3032-92"){
          $arrayPostData['messages'][0]['text'] = "UDN000250,(3023-33) บ้านหนองตูม - (3032-92) หนองใหญ่=Optic 12 Core DW = 1.295 km.
UDN000257,(3032-92) หนองใหญ่ - (3033-38) บ้าน พักสวัสดิการ ทหารบก=Optic 12 Core DW = 1.141 km.";
    }
else if($message == "3032-93"){
          $arrayPostData['messages'][0]['text'] = "UDN000251,(3001-50) คุณธรรมธานี - (3032-93) คุณธรรมธานี 2=Optic 12 Core DW = 0.973 km.
UDN001205,(3032-93) คุณธรรมธานี 2 - (3033-79) พฤษชาติ=Optic 12 Core DW = 1.06 km.";
    }
else if($message == "3032-94"){
          $arrayPostData['messages'][0]['text'] = "UDN000252,(3023-47) บ้านงอย - (3032-94) ดงยวด=Optic 12 Core DW = 1.758 km.
UDN001252,(3032-94) ดงยวด - (3033-174) ดงยวด2=Optic 12 Core DW = 1.004 km.";
    }
else if($message == "3032-95"){
        $arrayPostData['messages'][0]['text'] = "UDN000253,(3032-64) หมู่บ้านเสริมสุข - (3032-95) บ้านข้าวสาร=Optic 12 Core DW = 1.004 km.";
    }
else if($message == "3032-96"){
        $arrayPostData['messages'][0]['text'] = "UDN000254,(3001-57) หมู่บ้าน ณัฐการ - (3032-96) ซอยรุ่งเรือง=Optic 12 Core DW = 0.945 km.";
    }
else if($message == "3032-97"){
          $arrayPostData['messages'][0]['text'] = "UDN000255,(3032-72) ซอยกำนัน - (3032-97) ซอยแสงเจริญ=Optic 12 Core DW = 1.624 km.
UDN000589,(3031-87) แยกหนองใส - (3032-97) ซอยแสงเจริญ=Optic 12 Core DW = 0.98 km.";
    }
else if($message == "3033-103"){
        $arrayPostData['messages'][0]['text'] = "UDN000418,(3033-54) ซอยเสนีย์พิทักษ์ชน - (3033-103) ซอยค่ายเสนีย์พิทักษ์ชน=Optic 12 Core DW = 0.947 km.";
    }
else if($message == "3033-104"){
          $arrayPostData['messages'][0]['text'] = "UDN000416,(3032-53) บ้านหนองใส - ( 3033-104) หนองใส4=Optic 12 Core DW = 0.6 km.
UDN001673,(3033-104) หนองใส4 - (3033-244) บ้านนาหวาน=Optic 12 Core DW = 1.479 km.";
    }
else if($message == "3033-106"){
          $arrayPostData['messages'][0]['text'] = "UDN000417,(3031-87) แยกหนองใส - (3033-106) โนนมะเขือ=Optic 12 Core DW = 0.9 km.
UDN000588,(3032-84) โบ้เบ้2 - (3033-106) โนนมะเขือ=Optic 12 Core DW = 1.944 km.";
    }
else if($message == "3033-107"){
        $arrayPostData['messages'][0]['text'] = "UDN000433,(3023-78) วัดหนองขาม - (3033-107) หมู่บ้านสิรินสกล=Optic 12 Core DW = 0.495 km.";
    }
else if($message == "3033-111"){
          $arrayPostData['messages'][0]['text'] = "UDN000009,(SJ) SJ mainroute อุดร-ขอนแก่น - (3033-111) บ้านหนองบัวเงิน=Optic 12 Core DW = 3.32 km.
UDN001099,(3033-111) บ้านหนองบัวเงิน - (3002-148) บ้านโนนสวรรค์=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3033-112"){
        $arrayPostData['messages'][0]['text'] = "UDN000434,(3023-48) me ศรีพินิจ - (3033-112) ศาลเยาวชน=Optic 12 Core DW = 0.977 km.";
    }
else if($message == "3033-113"){
        $arrayPostData['messages'][0]['text'] = "UDN000435,(3032-78) หนองหมื่นท้าว - (3033-113) บ้านหนองโศกดาว=Optic 12 Core DW = 2.736 km.";
    }
else if($message == "3033-115"){
        $arrayPostData['messages'][0]['text'] = "UDN000442,(3033-60) ศรีธานี - (3033-115) ตลาดแม่ยุพิน=Optic 12 Core DW = 1.299 km.";
    }
else if($message == "3033-116"){
        $arrayPostData['messages'][0]['text'] = "UDN000443,(3023-37) หมู่บ้านอุดรแลนด์ - (3033-116) ม.อุดรแลนด์2=Optic 12 Core DW = 0.807 km.";
    }
else if($message == "3033-117"){
        $arrayPostData['messages'][0]['text'] = "UDN000444,(3033-40) บ้านหนองโอน - (3033-117) บ้านหนองโอน 2=Optic 12 Core DW = 0.934 km.";
    }
else if($message == "3033-118"){
        $arrayPostData['messages'][0]['text'] = "UDN000018,(3001-44) กฤษณา หนองสำโรง - (3033-118) เอื้ออาทรหนองสำโรง=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-119"){
          $arrayPostData['messages'][0]['text'] = "UDN000214,(3033-119) บ้านดงเหล่าต้อง - (3033-87) บ้านหนองบั่ว=Optic 12 Core DW = 1.729 km.
UDN000454,(3032-51) บ้านดอนหาด - (3033-119) บ้านดงเหล่าต้อง=Optic 12 Core DW = 1.469 km.";
    }
else if($message == "3033-124"){
        $arrayPostData['messages'][0]['text'] = "UDN000477,(3032-67) โนนภู่ทอง - (3033-124) โชคทวีคูณ(โนนภู่ทอง)=Optic 12 Core DW = 0.69 km.";
    }
else if($message == "3033-125"){
          $arrayPostData['messages'][0]['text'] = "UDN000482,(3033-125) ค่ายรามสูร2 - (3033-138) ราชบูรณะซอย2=Optic 12 Core DW = 1 km.
UDN000483,(3032-77) ค่ายรามสูร - (3033-125) ค่ายรามสูร2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3033-126"){
        $arrayPostData['messages'][0]['text'] = "UDN000453,(3033-60) ศรีธานี - (3033-126) กุดสระ2=Optic 12 Core DW = 1.233 km.";
    }
else if($message == "3033-128"){
          $arrayPostData['messages'][0]['text'] = "UDN000463,(3031-40) ปั้มคาลเทคซ์บ้านเลื่อม - (3033-128) ซอยชื่นจิตร=Optic 12 Core DW = 0.786 km.
UDN000495,(3033-128) ซอยชื่นจิตร - (3033-139) ธันวาทาวน์=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3033-129"){
        $arrayPostData['messages'][0]['text'] = "UDN000464,(3032-53) บ้านหนองใส - (3033-129) หนองใส 5=Optic 12 Core DW = 1.409 km.";
    }
else if($message == "3033-130"){
        $arrayPostData['messages'][0]['text'] = "UDN000484,(3033-130) บ้านอีเลี่ยน - (3033-135) บ้านหนองแวง=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3033-131"){
        $arrayPostData['messages'][0]['text'] = "UDN000473,(3032-80) บ้านถ่อนน้อย - (3033-131) บ้านถ่อนน้อย2=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3033-132"){
          $arrayPostData['messages'][0]['text'] = "UDN000476,(3032-45) นาข่า - (3033-132) บ้านพรานเหมือน=Optic 12 Core DW = 3.9 km.
UDN000500,(3033-132) บ้านพรานเหมือน - (3033-151) บ้านดู่=Optic 12 Core DW = 6.4 km.
UDN000686,(3033-132) บ้านพรานเหมือน - (3033-264) บ้านนาบัว=Optic 12 Core DW = 5.68 km.
UDN001924,(3033-132) บ้านพรานเหมือน - (3033-421) พรานเหมือน2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3033-133"){
        $arrayPostData['messages'][0]['text'] = "UDN000478,(3032-86) บ้านเม่นนาข่า - (3033-133) โรงเรียนบ้านเม่น=Optic 12 Core DW = 0.78 km.";
    }
else if($message == "3033-134"){
          $arrayPostData['messages'][0]['text'] = "UDN000471,(3031-68) บ้านนาทราย - (3033-134) บ้านอีเลี่ยน=Optic 12 Core DW = 5.5 km.
UDN001201,(3033-134) บ้านอีเลี่ยน - (3033-333) บ้านโพนทอง=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3033-135"){
          $arrayPostData['messages'][0]['text'] = "UDN000484,(3033-130) บ้านอีเลี่ยน - (3033-135) บ้านหนองแวง=Optic 12 Core DW = 2.7 km.
UDN001917,(3033-135) บ้านหนองแวง - (3033-407) บ้านหนองแวง2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-136"){
        $arrayPostData['messages'][0]['text'] = "UDN000487,(3032-41) ปากดง - (3033-136) บ้านโนนบุญมี=Optic 12 Core DW = 3 km.";
    }
else if($message == "3033-137"){
          $arrayPostData['messages'][0]['text'] = "UDN000129,(BJ) หัวต่อ โหนดพรสวรรค์เดิม - (3033-137) ซอยคนหล่อ=Optic 12 Core DW = 4.5 km.
UDN000212,(3033-137) ซอยคนหล่อ - (3032-52) หนองนาคำ=Optic 12 Core DW = 0.755 km.
UDN000488,(3033-137) ซอยคนหล่อ - (3023-85) สุขเกษม=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3033-138"){
        $arrayPostData['messages'][0]['text'] = "UDN000482,(3033-125) ค่ายรามสูร2 - (3033-138) ราชบูรณะซอย2=Optic 12 Core DW = 1 km.";
    }
else if($message == "3033-139"){
        $arrayPostData['messages'][0]['text'] = "UDN000495,(3033-128) ซอยชื่นจิตร - (3033-139) ธันวาทาวน์=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3033-141"){
          $arrayPostData['messages'][0]['text'] = "UDN000492,(3033-149) เรียบกลมหนองสำโรง - (3033-141) นาทรายหนองสำโรง=Optic 12 Core DW = 1.6 km.
UDN001448,(3033-141) บ้านนาทรายหนองสำโรง - (3033-372) บ้านแสนสุข=Optic 12 Core DW = 1.78 km.
UDN001926,(3033-141) นาทรายหนองสำโรง - (3033-432) นาทรายหนองสำโรง 2=Optic 12 Core DW = 1.336 km.";
    }
else if($message == "3033-142"){
          $arrayPostData['messages'][0]['text'] = "UDN000493,(3033-90) วัวข้อง2 - (3033-142) บ้านหนองสวรรค์=Optic 12 Core DW = 1.2 km.
UDN001263,(3033-142) บ้านหนองสวรรค์ - (3033-176) บ้านดอกเกียด=Optic 12 Core DW = 1.76 km.";
    }
else if($message == "3033-144"){
        $arrayPostData['messages'][0]['text'] = "UDN001212,(3031-31) ME โพธิ์ศรี - (3033-144) ME คอนโดเทล=12 Core= 4.94 km.";
    }
else if($message == "3033-145"){
        $arrayPostData['messages'][0]['text'] = "UDN000494,(3032-34) me bigc - (3033-145) แยกสันตพล=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3033-146"){
        $arrayPostData['messages'][0]['text'] = "UDN000497,(3033-147) ชุมชนดอนอุดม - (3033-146) อุดรคัลทรีวิลล์=Optic 12 Core DW = 0.3 km.";
    }
else if($message == "3033-147"){
          $arrayPostData['messages'][0]['text'] = "UDN000497,(3033-147) ชุมชนดอนอุดม - (3033-146) อุดรคัลทรีวิลล์=Optic 12 Core DW = 0.3 km.
UDN000498,(3023-62B) โนนยาง - (3033-147) ชุมชนดอนอุดม=Optic 12 Core DW = 1.2 km.
UDN000585,(3023-61) ซอยจินตคาม - (3033-147) ชุมชนดอนอุดม=Optic 12 Core DW = 1 km.";
    }
else if($message == "3033-148"){
        $arrayPostData['messages'][0]['text'] = "UDN000496,(3023-64) ซอยสามกษัตริย์ - (3033-148) หมู่บ้านพลินวิล=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3033-149"){
          $arrayPostData['messages'][0]['text'] = "UDN000491,(3023-35) หนองสำโรง - (3033-149) เรียบกลมหนองสำโรง=Optic 12 Core DW = 0.7 km.
UDN000492,(3033-149) เรียบกลมหนองสำโรง - (3033-141) นาทรายหนองสำโรง=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3033-151"){
          $arrayPostData['messages'][0]['text'] = "UDN000500,(3033-132) บ้านพรานเหมือน - (3033-151) บ้านดู่=Optic 12 Core DW = 6.4 km.
UDN000507,(3033-151) บ้านดู่ - (3033-162) บ้านเทื่อม=12 Core= 5.8 km.
UDN000650,(3033-151) บ้านดู่ - (3033-304) บ้านดงนาม่วง=Optic 12 Core DW = 3.04 km.
UDN000945,(3033-151) บ้านดู่ - (3033-305) บ้านดู่เหนือ=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3033-152"){
          $arrayPostData['messages'][0]['text'] = "UDN000501,(3033-91) จามจุรี - (3033-152) บ้านหนองตอ=Optic 12 Core DW = 4 km.
UDN001025,(3033-152) บ้านหนองตอ - (3033-207) บ้านบ่อน้อย=Optic 12 Core DW = 4 km.
UDN001947,(3033-152) บ้านหนองตอ - (3033-366) บ้านหนองตอ=Optic 12 Core DW = 2 km.";
    }
else if($message == "3033-153"){
        $arrayPostData['messages'][0]['text'] = "UDN000508,(3001-45) Me พนาริน - (3033-153) บ้านดอนหวาย=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3033-154"){
          $arrayPostData['messages'][0]['text'] = "UDN000532,(3023-82) ME เจริญสุข - (3033-154) ลุมพินี1=Optic 12 Core DW = 2.8 km.
UDN000533,(3033-154) ลุมพินี1 - (3033-155) ลุมพินี2=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3033-155"){
        $arrayPostData['messages'][0]['text'] = "UDN000533,(3033-154) ลุมพินี1 - (3033-155) ลุมพินี2=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3033-156"){
        $arrayPostData['messages'][0]['text'] = "UDN000534,(ME3001-34B) ศรีพินิจB - (3033-156) ลุมพินี3=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3033-157"){
        $arrayPostData['messages'][0]['text'] = "UDN000506,(3032-40) ME โนนสูงน้ำคำ - (3033-157) วัดสุุวรรณทการาม2=Optic 12 Core DW = 0.77 km.";
    }
else if($message == "3033-158"){
          $arrayPostData['messages'][0]['text'] = "UDN000523,(3001-50) คุณธรรมธานี - (3033-158) คุณธรรมธานี3=Optic 12 Core DW = 0.625 km.
UDN001908,(3033-158) คุณธรรมธานี3 - (3033-377) บุญถาวร=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3033-159"){
        $arrayPostData['messages'][0]['text'] = "UDN000524,(3031-56) วัดสระบัวบาน - (3033-159) วัดสระบัวบาน3=Optic 12 Core DW = 0.25 km.";
    }
else if($message == "3033-161"){
        $arrayPostData['messages'][0]['text'] = "UDN000525,(3032-45) นาข่า - (3033-161) นาข่า 2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-162"){
          $arrayPostData['messages'][0]['text'] = "UDN000507,(3033-151) บ้านดู่ - (3033-162) บ้านเทื่อม=12 Core= 5.8 km.
UDN000557,(3033-162) บ้านเทื่อม - (3012-43) บ้านนาสี=Optic 12 Core DW = 3.138 km.
UDN001214,(3033-162) บ้านเทื่อม - (3012-55) โคกลาน=Optic 12 Core DW = 2.3 km.
UDN001217,(3033-162) บ้านเทื่อม - (3012-60) ค้อ=12 Core= 5.54 km.
UDN001418,(3033-162) บ้านเทื่อม - (3012-60) บ้านค้อ=12 Core= 5.46 km.
UDN001787,(3033-162) บ้านเทื่อม - (3012-157) บ้านเทื่อม2=Optic 12 Core DW = 1.042 km.";
    }
else if($message == "3033-166"){
          $arrayPostData['messages'][0]['text'] = "UDN000528,(3033-47) หมูม่น - (3033-166) บ้านแวง=Optic 12 Core DW = 2 km.
UDN001320,(3033-166) บ้านแวง - (3033-364) ดงเจริญหมู่12=Optic 12 Core DW = 1.4 km.
UDN001428,(3033-166) บ้านแวง - (3033-367) ต.หมูม่น บ้านแวงชลประทาน=Optic 12 Core DW = 1.46 km.";
    }
else if($message == "3033-167"){
          $arrayPostData['messages'][0]['text'] = "UDN000537,(3033-167) บ้านดอกเกียด - (3033-237) บ้านจำปา=Optic 12 Core DW = 1.606 km.
UDN001253,(3031-68) นาทราย - (3033-167) นาทราย2=Optic 12 Core DW = 0.565 km.
UDN001914,(3033-167) นาทราย2 - (SJ) นาทราย4=Optic 12 Core DW = 0.765 km.";
    }
else if($message == "3033-169"){
        $arrayPostData['messages'][0]['text'] = "UDN001666,(3023-57) อาพาภัชร node 1 - (3033-169) อาพาภัชร node 3=Optic 12 Core DW = 1.02 km.";
    }
else if($message == "3033-174"){
          $arrayPostData['messages'][0]['text'] = "UDN001198,(3033-174) ดงยวด 2 - (3033-308) นาเหล่า=Optic 12 Core DW = 2.4 km.
UDN001252,(3032-94) ดงยวด - (3033-174) ดงยวด2=Optic 12 Core DW = 1.004 km.";
    }
else if($message == "3033-175"){
          $arrayPostData['messages'][0]['text'] = "UDN000526,(3033-94) บ้านหนองหลอด - (3033-175) เชียงเพ็ง=12 Core= 5.817 km.
UDN001119,(3033-175) เชียงเพ็ง - (3033-214) เชียงเพ็ง2=Optic 12 Core DW = 2.2 km.
UDN001921,(3033-175) เชียงเพ็ง - (3033-415) เชียงเพ็ง 3=Optic 12 Core DW = 1 km.";
    }
else if($message == "3033-176"){
          $arrayPostData['messages'][0]['text'] = "UDN000655,(3033-176) ดอกเกียด - (3033-327) โนนคราม=Optic 12 Core DW = 1.54 km.
UDN001263,(3033-142) บ้านหนองสวรรค์ - (3033-176) บ้านดอกเกียด=Optic 12 Core DW = 1.76 km.";
    }
else if($message == "3033-178"){
        $arrayPostData['messages'][0]['text'] = "UDN001667,(3032-49) ME หมู่บ้านปราณทอง - (3033-178) มะลิวัลย์=Optic 12 Core DW = 0.221 km.";
    }
else if($message == "3033-184"){
        $arrayPostData['messages'][0]['text'] = "UDN001902,(3023-85) สุขเกษม - (3033-184) สุขเกษม2=Optic 12 Core DW = 0.79 km.";
    }
else if($message == "3033-201"){
        $arrayPostData['messages'][0]['text'] = "UDN001769,(3033-201) บ้านหนองแปน - (3010-119) ต.เชียงเพ็ง บ้านตาลโกน=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3033-203"){
        $arrayPostData['messages'][0]['text'] = "UDN001261,(3033-203) บ้านโนนยาง - (3033-213) บ้านโนนตูม=12 Core= 6.05 km.";
    }
else if($message == "3033-204"){
          $arrayPostData['messages'][0]['text'] = "UDN000847,(3033-204) บ้านยางชุม - (3033-234) โนนทอง=Optic 12 Core DW = 2.58 km.
UDN001923,(3033-204) บ้านยางชุม - (3033-417) บ้านยางชุม2=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3033-205"){
          $arrayPostData['messages'][0]['text'] = "UDN000936,(3033-92) เชียงยืน - (3033-205) บ้านอีหลุง=Optic 12 Core DW = 2.6 km.
UDN001131,(3033-205) บ้านอีหลุง - (3033-332) เชียงยืน 2=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3033-206"){
          $arrayPostData['messages'][0]['text'] = "UDN000858,(3033-206) บ้านโก่ย - (3033-271) บ้านจำปา(บ้านโก่ย)=Optic 12 Core DW = 1.624 km.
UDN001258,(3023-86) โนนขมิ้น - (3033-206) บ้านโก่ย=Optic 12 Core DW = 5.92 km.";
    }
else if($message == "3033-207"){
          $arrayPostData['messages'][0]['text'] = "UDN001025,(3033-152) บ้านหนองตอ - (3033-207) บ้านบ่อน้อย=Optic 12 Core DW = 4 km.
UDN001270,(3033-207) บ้านบ่อน้อย - (3033-215) บ้านสูงแคน=Optic 12 Core DW = 2.6 km.
UDN001918,(3033-207) บ้านบ่อน้อย - (3033-408) บ้านบ่อน้อย 2=Optic 12 Core DW = 1.479 km.";
    }
else if($message == "3033-208"){
          $arrayPostData['messages'][0]['text'] = "UDN000937,(3033-88) ศรีบุญเรือง - (3033-208) บ้านผ่านศึกหมู่1=Optic 12 Core DW = 2.4 km.
UDN000947,(3033-208) บ้านผ่านศึกหมู่1 - (3033-311) นิคมทหารผ่านศึก 2=Optic 12 Core DW = 2.1 km.
UDN001273,(3033-208) ผ่านศึกหมู่ 1 - (3033-229) บ้านผ่านศึก4=Optic 12 Core DW = 4 km.";
    }
else if($message == "3033-211"){
        $arrayPostData['messages'][0]['text'] = "UDN001668,(3031-38) MEรังษิณา - (3033-211) ซอยมธุรส=Optic 12 Core DW = 0.65 km.";
    }
else if($message == "3033-212"){
          $arrayPostData['messages'][0]['text'] = "UDN000543,(3033-212) บ้านนาพู่ - (3019-44) บ้านนาพู่2=Optic 12 Core DW = 3.517 km.
UDN000940,(3033-212) บ้านนาพู่ - (3033-262) wireless โพธิ์ตาก=Optic 12 Core DW = 2.9 km.
UDN001588,(3033-212) บ้านนาพู่ - (3019-141) บ้านดงสว่าง=Optic 12 Core DW = 1.5 km.
UDN001640,(SJ) อุดรคอนโดเทล-หนองคาย - (3033-212) บ้านนาพู่=Optic 12 Core DW = 5.895 km.
UDN001892,(3033-212) บ้านนาพู่ - (3019-90) ต.นาพู่ บ้านหลวง=Optic 12 Core DW = 4.2 km.";
    }
else if($message == "3033-213"){
          $arrayPostData['messages'][0]['text'] = "UDN000542,(3033-213) โนนตูม - (3033-243) บ้านขมิ้น=Optic 12 Core DW = 3.292 km.
UDN001261,(3033-203) บ้านโนนยาง - (3033-213) บ้านโนนตูม=12 Core= 6.05 km.";
    }
else if($message == "3033-214"){
          $arrayPostData['messages'][0]['text'] = "UDN001119,(3033-175) เชียงเพ็ง - (3033-214) เชียงเพ็ง2=Optic 12 Core DW = 2.2 km.
UDN001922,(3033-214) เชียงเพ็ง2 - (3033-416) เชียงเพ็ง 4=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3033-215"){
        $arrayPostData['messages'][0]['text'] = "UDN001270,(3033-207) บ้านบ่อน้อย - (3033-215) บ้านสูงแคน=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3033-217"){
        $arrayPostData['messages'][0]['text'] = "UDN001266,(3033-67) รร.หนองขุ่น - (3033-217) บ้านหนองหลัก=Optic 12 Core DW = 1.67 km.";
    }
else if($message == "3033-219"){
        $arrayPostData['messages'][0]['text'] = "UDN001275,(3032-52) หนองนาคำ - (3033-219) หนองนาคำ2=Optic 12 Core DW = 1.581 km.";
    }
else if($message == "3033-221"){
          $arrayPostData['messages'][0]['text'] = "UDN000941,(3033-221) คริสตัลโฮม - (3033-263) wireless บ้านเมืองใหม่=Optic 12 Core DW = 1.22 km.
UDN001259,(3033-43) บ้านท่าตูม - (3033-221) คริสตัลโฮม=Optic 12 Core DW = 0.62 km.";
    }
else if($message == "3033-223"){
        $arrayPostData['messages'][0]['text'] = "UDN001669,(3031-31) ME ตลาดโพศรี - (3033-223) Aspire Condo=Optic 12 Core DW = 0.2 km.";
    }
else if($message == "3033-224"){
        $arrayPostData['messages'][0]['text'] = "UDN000756,(3001-60) บ้านชัยพร - (3033-224) FTTx โนนสูง=12 Core= 2.76 km.";
    }
else if($message == "3033-226"){
        $arrayPostData['messages'][0]['text'] = "UDN001670,(3033-79) พฤษชาติ - (3033-226) หมู่บ้านลิฟเวลโล่=Optic 12 Core DW = 0.57 km.";
    }
else if($message == "3033-227"){
          $arrayPostData['messages'][0]['text'] = "UDN000570,(3033-227) บ้านดงมะกรูด - (3033-254) บ้านห้วยสำราญ=Optic 12 Core DW = 3.056 km.
UDN001906,(3033-227) บ้านดงมะกรูด - (3033-371) ต.หนองไฮ บ้านดงมะกรูดน้อย=Optic 12 Core DW = 1.434 km.";
    }
else if($message == "3033-228"){
          $arrayPostData['messages'][0]['text'] = "UDN000849,(3033-228) โนนสะอาด ผาสุข - (3033-242) บ้านหนองไฮ=Optic 12 Core DW = 1.95 km.
UDN001271,(3033-228) โนนสะอาดผาสุข - (3033-277) บ้านดงมะกรูด=Optic 12 Core DW = 2.57 km.
UDN001272,(SJ) SJ อุดร -หนองแสง - (3033-228) โนนสะอาดผาสุข=Optic 12 Core DW = 0.73 km.";
    }
else if($message == "3033-229"){
          $arrayPostData['messages'][0]['text'] = "UDN000761,(3033-229) ผ่านศึก 4 - (3033-299) นิคมทหารผ่านศึก 3=Optic 12 Core DW = 3.78 km.
UDN001273,(3033-208) ผ่านศึกหมู่ 1 - (3033-229) บ้านผ่านศึก4=Optic 12 Core DW = 4 km.";
    }
else if($message == "3033-231"){
          $arrayPostData['messages'][0]['text'] = "UDN000855,(3033-231) บ้านหลุบหวายป่าขาม - (3033-266) โคกลาด=Optic 12 Core DW = 3.27 km.
UDN001660,(3033-231) บ้านหลุบหวายป่าขาม - (3016-72) บ้านโนนเชียงคำ=Optic 12 Core DW = 2.701 km.
UDN001671,(SJ) ME หนองหิน-หนองแสง - (3033-231) บ้านหลุบหวายป่าขาม=Optic 12 Core DW = 1.78 km.
UDN001904,(3033-231) บ้านหลุบหวายป่าขาม - (3033-297) บ้านสุขสมบูรณ์=Optic 12 Core DW = 6.8 km.
UDN001925,(3033-231) บ้านหลุบหวายป่าขาม - (3033-427) บ้านหลุบหวายป่าขาม 2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-232"){
        $arrayPostData['messages'][0]['text'] = "UDN000538,(3033-31) ME สามพร้าว - (3033-232) หนองบุ2=Optic 12 Core DW = 0.877 km.";
    }
else if($message == "3033-233"){
        $arrayPostData['messages'][0]['text'] = "UDN000540,(3031-99) ME นาข่า - (3033-233) ตลาดไทยศิรินาข่า2=Optic 12 Core DW = 0.542 km.";
    }
else if($message == "3033-234"){
        $arrayPostData['messages'][0]['text'] = "UDN000847,(3033-204) บ้านยางชุม - (3033-234) โนนทอง=Optic 12 Core DW = 2.58 km.";
    }
else if($message == "3033-236"){
        $arrayPostData['messages'][0]['text'] = "UDN000848,(3033-236) บ้านอีเลี่ยน - (3033-236) บ้านหนองแหลม=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3033-237"){
        $arrayPostData['messages'][0]['text'] = "UDN000537,(3033-167) บ้านดอกเกียด - (3033-237) บ้านจำปา=Optic 12 Core DW = 1.606 km.";
    }
else if($message == "3033-238"){
        $arrayPostData['messages'][0]['text'] = "UDN001672,(3002-65) บ้านเชียงแหว - (3033-238) บ้านเซียม=Optic 12 Core DW = 3 km.";
    }
else if($message == "3033-241"){
          $arrayPostData['messages'][0]['text'] = "UDN001073,(3033-241) ปันน้ำใจ - (3033-247) โนนสง่า=Optic 12 Core DW = 2.549 km.
UDN001675,(3033-241) ปันน้ำใจ - (3033-256) บ้านปอแดง=Optic 12 Core DW = 4 km.";
    }
else if($message == "3033-242"){
        $arrayPostData['messages'][0]['text'] = "UDN000849,(3033-228) โนนสะอาด ผาสุข - (3033-242) บ้านหนองไฮ=Optic 12 Core DW = 1.95 km.";
    }
else if($message == "3033-243"){
        $arrayPostData['messages'][0]['text'] = "UDN000542,(3033-213) โนนตูม - (3033-243) บ้านขมิ้น=Optic 12 Core DW = 3.292 km.";
    }
else if($message == "3033-244"){
        $arrayPostData['messages'][0]['text'] = "UDN001673,(3033-104) หนองใส4 - (3033-244) บ้านนาหวาน=Optic 12 Core DW = 1.479 km.";
    }
else if($message == "3033-245"){
        $arrayPostData['messages'][0]['text'] = "UDN000583,(3032-37) สาวพร้าว - (3033-245) วัดสามพร้าว2=Optic 12 Core DW = 0.504 km.";
    }
else if($message == "3033-246"){
          $arrayPostData['messages'][0]['text'] = "UDN000552,(3023-31) หนองตะไก้ - (3033-246) หนองตะไก้น้อย=Optic 12 Core DW = 0.942 km.
UDN001608,(3033-246) หนองตะไก้น้อย - (3033-517) คุ้มกลาโหม=Optic 12 Core DW = 1.07 km.";
    }
else if($message == "3033-247"){
          $arrayPostData['messages'][0]['text'] = "UDN000657,(3033-247) โนนสง่า - (3033-331) นิคม1=Optic 12 Core DW = 1.76 km.
UDN001073,(3033-241) ปันน้ำใจ - (3033-247) โนนสง่า=Optic 12 Core DW = 2.549 km.
UDN001612,(3033-247) โนนสง่า - (3033-489) ปันน้ำใจ 2=Optic 12 Core DW = 1.585 km.";
    }
else if($message == "3033-249"){
        $arrayPostData['messages'][0]['text'] = "UDN001044,(3033-249) โคกนาคลอง - (3033-337) ห้วยเจ้าหัว=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3033-251"){
        $arrayPostData['messages'][0]['text'] = "UDN000566,(3033-47) หมูม่น - (3033-251) หมูม่น2=Optic 12 Core DW = 1.114 km.";
    }
else if($message == "3033-254"){
          $arrayPostData['messages'][0]['text'] = "UDN000570,(3033-227) บ้านดงมะกรูด - (3033-254) บ้านห้วยสำราญ=Optic 12 Core DW = 3.056 km.
UDN001677,(3033-254) บ้านห้วยสำราญ - (3033-272) หลัก18=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3033-255"){
          $arrayPostData['messages'][0]['text'] = "UDN000653,(3033-255) โสกน้ำขาว - (3033-309) บ้านหัวคู=12 Core= 1.392 km.
UDN001674,(3032-56) กุดลิงง้อ - (3033-255) บ้านโสกน้ำขาว=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3033-256"){
          $arrayPostData['messages'][0]['text'] = "UDN000651,(3033-256) บ้านปอแดง - (3033-306) บ้านนิคมพัฒนา=12 Core= 1.665 km.
UDN000728,(3033-256) บ้านปอแดง - (3033-318) บ้านนาแอง=12 Core= 2.18 km.
UDN000729,(3033-256) บ้านปอ - (3033-319) บ้านดงเจริญ=12 Core= 2.41 km.
UDN001132,(3033-256) บ้านปอแดง - (3033-334) ห้วยหินลาด=Optic 12 Core DW = 1.8 km.
UDN001675,(3033-241) ปันน้ำใจ - (3033-256) บ้านปอแดง=Optic 12 Core DW = 4 km.
UDN001676,(3033-256) บ้านปอแดง - (3033-257) ห้วยหลวง=12 Core= 8.324 km.";
    }
else if($message == "3033-257"){
          $arrayPostData['messages'][0]['text'] = "UDN001625,(3033-257) ห้วยหลวง - (3010-55) บ้านดงน้อย ต.เมืองเพีย=Optic 12 Core DW = 5.7 km.
UDN001676,(3033-256) บ้านปอแดง - (3033-257) ห้วยหลวง=12 Core= 8.324 km.";
    }
else if($message == "3033-259"){
        $arrayPostData['messages'][0]['text'] = "UDN000851,(3033-69) สามัคคีนาทราย - (3033-259) สามัคคีนาทราย 2=Optic 12 Core DW = 0.57 km.";
    }
else if($message == "3033-261"){
        $arrayPostData['messages'][0]['text'] = "UDN001903,(3033-39) บ้านเลี่ยมพิลึก - (3033-261) เลี่ยมพิลึก2=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3033-262"){
        $arrayPostData['messages'][0]['text'] = "UDN000940,(3033-212) บ้านนาพู่ - (3033-262) wireless โพธิ์ตาก=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3033-263"){
        $arrayPostData['messages'][0]['text'] = "UDN000941,(3033-221) คริสตัลโฮม - (3033-263) wireless บ้านเมืองใหม่=Optic 12 Core DW = 1.22 km.";
    }
else if($message == "3033-264"){
          $arrayPostData['messages'][0]['text'] = "UDN000686,(3033-132) บ้านพรานเหมือน - (3033-264) บ้านนาบัว=Optic 12 Core DW = 5.68 km.
UDN000757,(3033-264) นาบัว - (3033-274) หัวบึง=Optic 12 Core DW = 1.91 km.";
    }
else if($message == "3033-265"){
          $arrayPostData['messages'][0]['text'] = "UDN000577,(3033-72) บ้านทุ่งแร่ - (3033-265) ดงยาง=Optic 12 Core DW = 3.155 km.
UDN000658,(3033-265) ดงยาง - (3033-336) นาทาม=Optic 12 Core DW = 1.95 km.";
    }
else if($message == "3033-266"){
        $arrayPostData['messages'][0]['text'] = "UDN000855,(3033-231) บ้านหลุบหวายป่าขาม - (3033-266) โคกลาด=Optic 12 Core DW = 3.27 km.";
    }
else if($message == "3033-267"){
        $arrayPostData['messages'][0]['text'] = "UDN000856,(3031-89) สวรรยา - (3033-267) สวรรยา2=Optic 12 Core DW = 1.18 km.";
    }
else if($message == "3033-268"){
        $arrayPostData['messages'][0]['text'] = "UDN001641,(3023-74) หนองบัว3 - (3033-268) ซอยร่มเย็นพัฒนา=Optic 12 Core DW = 0.873 km.";
    }
else if($message == "3033-269"){
        $arrayPostData['messages'][0]['text'] = "UDN000857,(3032-78) หนองหมื่นท้าว - (3033-269) หนองหมื่นท้าว2=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3033-271"){
          $arrayPostData['messages'][0]['text'] = "UDN000858,(3033-206) บ้านโก่ย - (3033-271) บ้านจำปา(บ้านโก่ย)=Optic 12 Core DW = 1.624 km.
UDN000863,(3033-271) บ้านจำปา(บ้านโก่ย) - (3033-282) บ้านหนองไผ่=Optic 12 Core DW = 3.55 km.
UDN001940,(3033-271) บ้านจำปา(บ้านโก่ย) - (3033-513) บ้านดูน=Optic 12 Core DW = 3.17 km.";
    }
else if($message == "3033-272"){
          $arrayPostData['messages'][0]['text'] = "UDN000732,(3033-272) หลัก18 - (3033-334) ห้วยหินลาด=Optic 12 Core DW = 3.34 km.
UDN001634,(3033-272) หลัก 18 - (3009-74) หนองแซงหนองวัวซอ=Optic 12 Core DW = 2.25 km.
UDN001677,(3033-254) บ้านห้วยสำราญ - (3033-272) หลัก18=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3033-274"){
          $arrayPostData['messages'][0]['text'] = "UDN000649,(3033-274) บ้านหัวบึง - (3033-303) บ้านคำมากผาง=Optic 12 Core DW = 1.01 km.
UDN000757,(3033-264) นาบัว - (3033-274) หัวบึง=Optic 12 Core DW = 1.91 km.";
    }
else if($message == "3033-275"){
          $arrayPostData['messages'][0]['text'] = "UDN000687,(3033-275) บ้านนากว้าง - (3033-278) บ้าน ดอนแสบง=Optic 12 Core DW = 0.9 km.
UDN000727,(3033-72) ทุ่งแร่ - (3033-275) บ้านนากว้าง=Optic 12 Core DW = 3.26 km.
UDN000734,(3033-275) บ้านนากว้าง - (3033-343) บ้านนากว้าง 2=Optic 12 Core DW = 1.499 km.
UDN000758,(3033-275) นากว้าง - (3033-276) เชียงพัง=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3033-276"){
        $arrayPostData['messages'][0]['text'] = "UDN000758,(3033-275) นากว้าง - (3033-276) เชียงพัง=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3033-277"){
          $arrayPostData['messages'][0]['text'] = "UDN000943,(3001-61) หมู่บ้านกฤษณา-บ้านเลื่อม - (3033-277) wireless บ้านเลื่อม=Optic 12 Core DW = 1.36 km.
UDN001271,(3033-228) โนนสะอาดผาสุข - (3033-277) บ้านดงมะกรูด=Optic 12 Core DW = 2.57 km.";
    }
else if($message == "3033-278"){
        $arrayPostData['messages'][0]['text'] = "UDN000654,(3033-278) บ้านผกดอนแสบง - (3033-317) บ้านดงสร้างควาย=Optic 12 Core DW = 2.26 km.";
    }
else if($message == "3033-279"){
        $arrayPostData['messages'][0]['text'] = "UDN000861,(3032-51) บ้านดอนหาด - (3033-279) บ้านนาหยาด=Optic 12 Core DW = 2.935 km.";
    }
else if($message == "3033-281"){
          $arrayPostData['messages'][0]['text'] = "UDN000694,(3033-281) โนนเดื่อ - (3002-115) วังหน้าผา=12 Core= 3 km.
UDN000862,(3033-46) บ้าน ตาด - (3033-281) โนนเดื่อ=12 Core= 5.71 km.
UDN000876,(3033-281) โนนเดื่อ - (3033-312) บ้านกกสะท้อน=Optic 12 Core DW = 2 km.";
    }
else if($message == "3033-282"){
          $arrayPostData['messages'][0]['text'] = "UDN000688,(3033-282) บ้านหนองไผ่ - (3033-285) บ้านหนองหว้า=Optic 12 Core DW = 3.31 km.
UDN000863,(3033-271) บ้านจำปา(บ้านโก่ย) - (3033-282) บ้านหนองไผ่=Optic 12 Core DW = 3.55 km.
UDN000864,(3033-282) บ้านหนองไผ่ - (3033-283) wirelessบ้านหนองไผ่2=Optic 12 Core DW = 1.532 km.";
    }
else if($message == "3033-283"){
        $arrayPostData['messages'][0]['text'] = "UDN000864,(3033-282) บ้านหนองไผ่ - (3033-283) wirelessบ้านหนองไผ่2=Optic 12 Core DW = 1.532 km.";
    }
else if($message == "3033-284"){
          $arrayPostData['messages'][0]['text'] = "UDN000944,(3001-51) บ้านเซ - (3033-284) บ้านเซ 2=Optic 12 Core DW = 1.3 km.
UDN001935,(3033-284) บ้านเซ2 - (3033-504) บ้านเซ3(บ้านอุดมพัฒนา)=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3033-285"){
          $arrayPostData['messages'][0]['text'] = "UDN000688,(3033-282) บ้านหนองไผ่ - (3033-285) บ้านหนองหว้า=Optic 12 Core DW = 3.31 km.
UDN000689,(3033-285) บ้านหนองหว้า - (3033-286) บ้านหนองนาเจริญ=Optic 12 Core DW = 4.1 km.";
    }
else if($message == "3033-286"){
        $arrayPostData['messages'][0]['text'] = "UDN000689,(3033-285) บ้านหนองหว้า - (3033-286) บ้านหนองนาเจริญ=Optic 12 Core DW = 4.1 km.";
    }
else if($message == "3033-287"){
          $arrayPostData['messages'][0]['text'] = "UDN000866,(3032-43) งี่สุน - (3033-287) บ้านนาคลอง=Optic 12 Core DW = 2.888 km.
UDN001943,(3033-287) บ้านนาคลอง - (3033-544) ต.เชียงพิณ ศรีดอนภู่=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-288"){
        $arrayPostData['messages'][0]['text'] = "UDN000867,(3033-40) บ้านหนองโอน - (3033-288) บ้านโนนสวรรค์=Optic 12 Core DW = 4.97 km.";
    }
else if($message == "3033-289"){
        $arrayPostData['messages'][0]['text'] = "UDN000759,(SJ) SJ บ้านข่า - (3033-289) บ้านจำปา=12 Core= 5.67 km.";
    }
else if($message == "3033-291"){
          $arrayPostData['messages'][0]['text'] = "UDN000868,(3033-40) บ้านหนองโอน - (3033-291) บ้านหนองน้ำเค็ม=Optic 12 Core DW = 2.74 km.
UDN001474,(3033-291) หนองน้ำเค็ม - (3033-368) บ้านโพธิ์ชัย=Optic 12 Core DW = 1.46 km.";
    }
else if($message == "3033-292"){
        $arrayPostData['messages'][0]['text'] = "UDN000869,(3033-91) จามจุรี - (3033-292) บ้านดงหนองโพธิ์=Optic 12 Core DW = 1.603 km.";
    }
else if($message == "3033-294"){
        $arrayPostData['messages'][0]['text'] = "UDN000870,(3033-44) บ้านดงเจริญ - (3033-294) บ้านโคกก่อง=Optic 12 Core DW = 3.4 km.";
    }
else if($message == "3033-295"){
        $arrayPostData['messages'][0]['text'] = "UDN001194,(3032-52) หนองนาคำ - (3033-295) บ้านถ่อนน้อย=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3033-296"){
        $arrayPostData['messages'][0]['text'] = "UDN001195,(3008-47) นิคมหนองตาล - (3033-296) บ้านหนองแก=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3033-297"){
        $arrayPostData['messages'][0]['text'] = "UDN001904,(3033-231) บ้านหลุบหวายป่าขาม - (3033-297) บ้านสุขสมบูรณ์=Optic 12 Core DW = 6.8 km.";
    }
else if($message == "3033-298"){
        $arrayPostData['messages'][0]['text'] = "UDN000647,(3033-299) นิคมทหารผ่านศึก 3 - (3033-298) บ้านอินทร์แปลง=Optic 12 Core DW = 3 km.";
    }
else if($message == "3033-299"){
          $arrayPostData['messages'][0]['text'] = "UDN000647,(3033-299) นิคมทหารผ่านศึก 3 - (3033-298) บ้านอินทร์แปลง=Optic 12 Core DW = 3 km.
UDN000761,(3033-229) ผ่านศึก 4 - (3033-299) นิคมทหารผ่านศึก 3=Optic 12 Core DW = 3.78 km.";
    }
else if($message == "3033-301"){
        $arrayPostData['messages'][0]['text'] = "UDN001196,(3023-47) บ้านงอย - (3033-301) ดอนหญ้านาง=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3033-302"){
          $arrayPostData['messages'][0]['text'] = "UDN000885,(3033-302) บ้านนาคำหลวง - (3033-361) บ้านนาคำแก้ว=Optic 12 Core DW = 1.079 km.
UDN001197,(3032-80) บ้านถ่อนน้อย - (3033-302) บ้านนาคำหลวง=12 Core= 7.6 km.";
    }
else if($message == "3033-303"){
        $arrayPostData['messages'][0]['text'] = "UDN000649,(3033-274) บ้านหัวบึง - (3033-303) บ้านคำมากผาง=Optic 12 Core DW = 1.01 km.";
    }
else if($message == "3033-304"){
          $arrayPostData['messages'][0]['text'] = "UDN000650,(3033-151) บ้านดู่ - (3033-304) บ้านดงนาม่วง=Optic 12 Core DW = 3.04 km.
UDN001301,(3033-304) บ้านดงนาม่วง - (3019-63) ดงมะไฟ=Optic 12 Core DW = 2 km.
UDN001938,(3033-304) บ้านดงนาม่วง - (3033-507) ดงนาม่วง2=Optic 12 Core DW = 1.479 km.";
    }
else if($message == "3033-305"){
        $arrayPostData['messages'][0]['text'] = "UDN000945,(3033-151) บ้านดู่ - (3033-305) บ้านดู่เหนือ=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3033-306"){
        $arrayPostData['messages'][0]['text'] = "UDN000651,(3033-256) บ้านปอแดง - (3033-306) บ้านนิคมพัฒนา=12 Core= 1.665 km.";
    }
else if($message == "3033-307"){
          $arrayPostData['messages'][0]['text'] = "UDN000652,(3033-338) หลัก14 - (3033-307) ส่งเสริมธรรมพัฒนา=12 Core= 1.335 km.
UDN001130,(3033-341) ปันน้ำใจ - (3033-307) ส่งเสริมธรรมพัฒนา=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3033-308"){
        $arrayPostData['messages'][0]['text'] = "UDN001198,(3033-174) ดงยวด 2 - (3033-308) นาเหล่า=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3033-309"){
        $arrayPostData['messages'][0]['text'] = "UDN000653,(3033-255) โสกน้ำขาว - (3033-309) บ้านหัวคู=12 Core= 1.392 km.";
    }
else if($message == "3033-31"){
        $arrayPostData['messages'][0]['text'] = "UDN000538,(3033-31) ME สามพร้าว - (3033-232) หนองบุ2=Optic 12 Core DW = 0.877 km.";
    }
else if($message == "3033-311"){
        $arrayPostData['messages'][0]['text'] = "UDN000947,(3033-208) บ้านผ่านศึกหมู่1 - (3033-311) นิคมทหารผ่านศึก 2=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3033-312"){
          $arrayPostData['messages'][0]['text'] = "UDN000876,(3033-281) โนนเดื่อ - (3033-312) บ้านกกสะท้อน=Optic 12 Core DW = 2 km.
UDN000951,(3033-312) บ้านกกสะท้อน - (3033-321) บ้านเครือหวานดิน=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3033-313"){
          $arrayPostData['messages'][0]['text'] = "UDN000877,(3033-46) บ้าน ตาด - (3033-313) กลิ้งคำ=Optic 12 Core DW = 2.3 km.
UDN000949,(3033-46) บ้าน ตาด - (3033-313) กลิ้งคำ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3033-315"){
          $arrayPostData['messages'][0]['text'] = "UDN000878,(3023-45) บ้านกุดสระ - (3033-315) บ้านโนนสมบูรณ์=Optic 12 Core DW = 2 km.
UDN000950,(3023-45) บ้านกุดสระ - (3033-315) บ้านโนนสมบูรณ์=Optic 12 Core DW = 2 km.";
    }
else if($message == "3033-316"){
        $arrayPostData['messages'][0]['text'] = "UDN000879,(3023-45) บ้านกุดสระ - (3033-316) บ้านยางบึง=Optic 12 Core DW = 2.55 km.";
    }
else if($message == "3033-317"){
        $arrayPostData['messages'][0]['text'] = "UDN000654,(3033-278) บ้านผกดอนแสบง - (3033-317) บ้านดงสร้างควาย=Optic 12 Core DW = 2.26 km.";
    }
else if($message == "3033-318"){
        $arrayPostData['messages'][0]['text'] = "UDN000728,(3033-256) บ้านปอแดง - (3033-318) บ้านนาแอง=12 Core= 2.18 km.";
    }
else if($message == "3033-319"){
          $arrayPostData['messages'][0]['text'] = "UDN000729,(3033-256) บ้านปอ - (3033-319) บ้านดงเจริญ=12 Core= 2.41 km.
UDN001445,(3033-319) บ้านดงเจริญ - (3009-92) บ้านหนองอ้อน้อย=Optic 12 Core DW = 5.62 km.";
    }
else if($message == "3033-321"){
        $arrayPostData['messages'][0]['text'] = "UDN000951,(3033-312) บ้านกกสะท้อน - (3033-321) บ้านเครือหวานดิน=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3033-323"){
          $arrayPostData['messages'][0]['text'] = "UDN001200,(3033-56) ลีลาวดีสามพร้าว - (3033-323) บ้านหนองคลอง=Optic 12 Core DW = 1.3 km.
UDN001287,(3033-323) บ้านหนองคลอง1 - (3033-359) บ้านหนองคลอง2=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3033-324"){
        $arrayPostData['messages'][0]['text'] = "UDN000882,(3033-92) เชียงยืน - (3033-324) บ้านหนองเป็ด=Optic 12 Core DW = 1.218 km.";
    }
else if($message == "3033-326"){
        $arrayPostData['messages'][0]['text'] = "UDN001193,(3033-49) หนองใส 2 - (3033-326) บ้านดอนภู่=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3033-327"){
        $arrayPostData['messages'][0]['text'] = "UDN000655,(3033-176) ดอกเกียด - (3033-327) โนนคราม=Optic 12 Core DW = 1.54 km.";
    }
else if($message == "3033-328"){
        $arrayPostData['messages'][0]['text'] = "UDN000656,(3002-114) ทองอินทร์ - (3033-328) บ้านทุ่งโพธ์=Optic 12 Core DW = 2.42 km.";
    }
else if($message == "3033-331"){
          $arrayPostData['messages'][0]['text'] = "UDN000657,(3033-247) โนนสง่า - (3033-331) นิคม1=Optic 12 Core DW = 1.76 km.
UDN000659,(3033-331) นิคม1 - (3033-338) หลัก14=Optic 12 Core DW = 2.68 km.
UDN001937,(3033-331) นิคม 1 - (3033-506) ศรีสว่าง=Optic 12 Core DW = 3.1 km.
UDN001946,(3033-331) นิคม 1 - (3033-573) ต.โคกสะอาด ห้วยหินลาด=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3033-332"){
          $arrayPostData['messages'][0]['text'] = "UDN000763,(3033-92) เชียงยืน - (3033-332) เชียงยืน2=Optic 12 Core DW = 1.4 km.
UDN001131,(3033-205) บ้านอีหลุง - (3033-332) เชียงยืน 2=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3033-333"){
        $arrayPostData['messages'][0]['text'] = "UDN001201,(3033-134) บ้านอีเลี่ยน - (3033-333) บ้านโพนทอง=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3033-334"){
          $arrayPostData['messages'][0]['text'] = "UDN000732,(3033-272) หลัก18 - (3033-334) ห้วยหินลาด=Optic 12 Core DW = 3.34 km.
UDN001132,(3033-256) บ้านปอแดง - (3033-334) ห้วยหินลาด=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3033-336"){
        $arrayPostData['messages'][0]['text'] = "UDN000658,(3033-265) ดงยาง - (3033-336) นาทาม=Optic 12 Core DW = 1.95 km.";
    }
else if($message == "3033-337"){
          $arrayPostData['messages'][0]['text'] = "UDN000733,(3033-78) บ้านหนองบ่อ 2 - (3033-337) บ้านนาคลอง=12 Core= 2.83 km.
UDN001044,(3033-249) โคกนาคลอง - (3033-337) ห้วยเจ้าหัว=Optic 12 Core DW = 1.4 km.
UDN001199,(3001-60) บ้านชัยพร - (3033-337) นาคลอง=Optic 12 Core DW = 4.3 km.";
    }
else if($message == "3033-338"){
          $arrayPostData['messages'][0]['text'] = "UDN000652,(3033-338) หลัก14 - (3033-307) ส่งเสริมธรรมพัฒนา=12 Core= 1.335 km.
UDN000659,(3033-331) นิคม1 - (3033-338) หลัก14=Optic 12 Core DW = 2.68 km.";
    }
else if($message == "3033-341"){
        $arrayPostData['messages'][0]['text'] = "UDN001130,(3033-341) ปันน้ำใจ - (3033-307) ส่งเสริมธรรมพัฒนา=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3033-342"){
          $arrayPostData['messages'][0]['text'] = "UDN001203,(3032-52) หนองนาคำ - (3033-342) หนองนาคำ 3=Optic 12 Core DW = 0.9 km.
UDN001945,(3033-342) หนองนาคำ3 - (3033-546) บ้านโนนกอก=12 Core= 1.8 km.";
    }
else if($message == "3033-343"){
          $arrayPostData['messages'][0]['text'] = "UDN000734,(3033-275) บ้านนากว้าง - (3033-343) บ้านนากว้าง 2=Optic 12 Core DW = 1.499 km.
UDN001133,(3033-278) บ้านผกดอนแสบง - (3033-343) นากว้าง 2=Optic 12 Core DW = 2 km.";
    }
else if($message == "3033-345"){
        $arrayPostData['messages'][0]['text'] = "UDN001283,(3023-65) บ้านหนองหิน - (3033-345) บ้านหนองหิน2=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3033-348"){
        $arrayPostData['messages'][0]['text'] = "UDN001441,(3033-67) บ้านหนองขุ่น - (3033-348) งี่สุ่น2=Optic 12 Core DW = 2.61 km.";
    }
else if($message == "3033-351"){
        $arrayPostData['messages'][0]['text'] = "UDN001284,(3032-67) โนนภู่ทอง - (3033-351) โนนภู่ทอง2=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3033-352"){
        $arrayPostData['messages'][0]['text'] = "UDN001285,(3031-40) ปั้มคาลเทคซ์บ้านเลื่อม - (3033-352) ปั๊มคาลเท็กซ์บ้านเลื่อม2=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3033-353"){
        $arrayPostData['messages'][0]['text'] = "UDN001286,(3031-75) อุดรพิชัยรักษ์ - (3033-353) อุดรพิชัยรักษ์2=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3033-355"){
        $arrayPostData['messages'][0]['text'] = "UDN001281,(3032-65) โยธานิมิต - (3033-355) โยธานิมิตร2=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3033-357"){
        $arrayPostData['messages'][0]['text'] = "UDN001419,(3033-93) ค่ายปืนใหญ่ - (3033-357) บ้านพักสำนักงานพัฒนาภาค2=Optic 12 Core DW = 2.17 km.";
    }
else if($message == "3033-359"){
        $arrayPostData['messages'][0]['text'] = "UDN001287,(3033-323) บ้านหนองคลอง1 - (3033-359) บ้านหนองคลอง2=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3033-36"){
        $arrayPostData['messages'][0]['text'] = "UDN000981,(3033-36) ME คอนโดเทล - (3012-31) ME บ้านผือ=12 Core= 53.803 km.";
    }
else if($message == "3033-361"){
        $arrayPostData['messages'][0]['text'] = "UDN000885,(3033-302) บ้านนาคำหลวง - (3033-361) บ้านนาคำแก้ว=Optic 12 Core DW = 1.079 km.";
    }
else if($message == "3033-362"){
          $arrayPostData['messages'][0]['text'] = "UDN001905,(3008-48) บ้านดงคำ - (3033-362) บ้านหนองไผ่คำ หมู่12=Optic 12 Core DW = 2.62 km.
UDN001944,(3033-362) หนองไผ่คำ - (3033-545) บ้านหนองไผ่คำน้อย=Optic 12 Core DW = 2.498 km.";
    }
else if($message == "3033-363"){
        $arrayPostData['messages'][0]['text'] = "UDN001323,(3033-363) ซ.สามกษัตริย์ - (3033-363) ซอยสามกษัตริย์ 2=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3033-364"){
        $arrayPostData['messages'][0]['text'] = "UDN001320,(3033-166) บ้านแวง - (3033-364) ดงเจริญหมู่12=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3033-365"){
        $arrayPostData['messages'][0]['text'] = "UDN001282,(3032-44) สามพร้าว2 - (3033-365) บ้านหนองลีหู2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-366"){
        $arrayPostData['messages'][0]['text'] = "UDN001947,(3033-152) บ้านหนองตอ - (3033-366) บ้านหนองตอ=Optic 12 Core DW = 2 km.";
    }
else if($message == "3033-367"){
        $arrayPostData['messages'][0]['text'] = "UDN001428,(3033-166) บ้านแวง - (3033-367) ต.หมูม่น บ้านแวงชลประทาน=Optic 12 Core DW = 1.46 km.";
    }
else if($message == "3033-368"){
        $arrayPostData['messages'][0]['text'] = "UDN001474,(3033-291) หนองน้ำเค็ม - (3033-368) บ้านโพธิ์ชัย=Optic 12 Core DW = 1.46 km.";
    }
else if($message == "3033-37"){
        $arrayPostData['messages'][0]['text'] = "UDN000256,(3033-37) บ้านช้าง - (3033-37) หลังหมู่บ้าน ชนาการต์=Optic 12 Core DW = 2.068 km.";
    }
else if($message == "3033-37 "){
        $arrayPostData['messages'][0]['text'] = "UDN000383,(3033-37 ) หลังหมู่บ้าน ชนาการต์  - (3033-77) หมู่บ้านธนาโฮม=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3033-371"){
        $arrayPostData['messages'][0]['text'] = "UDN001906,(3033-227) บ้านดงมะกรูด - (3033-371) ต.หนองไฮ บ้านดงมะกรูดน้อย=Optic 12 Core DW = 1.434 km.";
    }
else if($message == "3033-372"){
        $arrayPostData['messages'][0]['text'] = "UDN001448,(3033-141) บ้านนาทรายหนองสำโรง - (3033-372) บ้านแสนสุข=Optic 12 Core DW = 1.78 km.";
    }
else if($message == "3033-373"){
        $arrayPostData['messages'][0]['text'] = "UDN001907,(SJ) ปอแดง-ห้วยหลวง - (3033-373) ต.โคกสะอาด โคกสะอาด=Optic 12 Core DW = 1.11 km.";
    }
else if($message == "3033-375"){
        $arrayPostData['messages'][0]['text'] = "UDN001449,(3002-116) บ้านเหล่ากล้วย - (3033-375) บ้านทอนกลาง=Optic 12 Core DW = 1.44 km.";
    }
else if($message == "3033-377"){
        $arrayPostData['messages'][0]['text'] = "UDN001908,(3033-158) คุณธรรมธานี3 - (3033-377) บุญถาวร=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3033-378"){
        $arrayPostData['messages'][0]['text'] = "UDN001909,(3032-86) บ้านเม่นนาข่า - (3033-378) บ้านเม่นนาข่า2=Optic 12 Core DW = 0.95 km.";
    }
else if($message == "3033-379"){
        $arrayPostData['messages'][0]['text'] = "UDN001910,(3023-45) บ้านกุดสระ - (3033-379) กุดสระ2=Optic 12 Core DW = 0.55 km.";
    }
else if($message == "3033-38"){
        $arrayPostData['messages'][0]['text'] = "UDN000257,(3032-92) หนองใหญ่ - (3033-38) บ้าน พักสวัสดิการ ทหารบก=Optic 12 Core DW = 1.141 km.";
    }
else if($message == "3033-383"){
        $arrayPostData['messages'][0]['text'] = "UDN001911,(3023-58) ชุมชนหนองเตาเหล็ก - (3033-383) ชุมชนหนองเตาเหล็ก 2=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3033-39"){
          $arrayPostData['messages'][0]['text'] = "UDN000258,(3023-33) บ้านหนองตูม - (3033-39) บ้านเลี่ยมพิลึก=Optic 12 Core DW = 3.624 km.
UDN001903,(3033-39) บ้านเลี่ยมพิลึก - (3033-261) เลี่ยมพิลึก2=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3033-396"){
        $arrayPostData['messages'][0]['text'] = "UDN001912,(3023-33) บ้านหนองตูม - (3033-396) บ้านหนองตูม2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3033-399"){
        $arrayPostData['messages'][0]['text'] = "UDN001913,(SJ) นาทราย4 - (3033-399) บ้านนาทราย3=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3033-40"){
          $arrayPostData['messages'][0]['text'] = "UDN000076,(3033-40) บ้านหนองโอน - (3010-37) หัวขัว=12 Core= 9.765 km.
UDN000259,(3032-55) เชียงพิณ - (3033-40) บ้านหนองโอน=Optic 12 Core DW = 4.224 km.
UDN000444,(3033-40) บ้านหนองโอน - (3033-117) บ้านหนองโอน 2=Optic 12 Core DW = 0.934 km.
UDN000867,(3033-40) บ้านหนองโอน - (3033-288) บ้านโนนสวรรค์=Optic 12 Core DW = 4.97 km.
UDN000868,(3033-40) บ้านหนองโอน - (3033-291) บ้านหนองน้ำเค็ม=Optic 12 Core DW = 2.74 km.
UDN001264,(3001-31) บ้านจิก โหนด B - (3033-40) บ้านหนองโอน=Optic 12 Core DW = 12.47 km.
UDN001920,(3033-40) บ้านหนองโอน - (3033-414) บ้านหนองโอน 2=Optic 12 Core DW = 1.15 km.";
    }
else if($message == "3033-401"){
        $arrayPostData['messages'][0]['text'] = "UDN001915,(3033-402) โนนสูง-ป่าหวาย 3 - (3033-401) โนนสูง-ป่าหวาย 2=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3033-402"){
          $arrayPostData['messages'][0]['text'] = "UDN001915,(3033-402) โนนสูง-ป่าหวาย 3 - (3033-401) โนนสูง-ป่าหวาย 2=Optic 12 Core DW = 1.3 km.
UDN001916,(3032-39) โนนสูง-ป่าหวาย - (3033-402) โนนสูง-ป่าหวาย 3=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3033-407"){
        $arrayPostData['messages'][0]['text'] = "UDN001917,(3033-135) บ้านหนองแวง - (3033-407) บ้านหนองแวง2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-408"){
        $arrayPostData['messages'][0]['text'] = "UDN001918,(3033-207) บ้านบ่อน้อย - (3033-408) บ้านบ่อน้อย 2=Optic 12 Core DW = 1.479 km.";
    }
else if($message == "3033-409"){
        $arrayPostData['messages'][0]['text'] = "UDN001918,(3033-207) บ้านบ่อน้อย - (3033-408) บ้านบ่อน้อย 2=Optic 12 Core DW = 1.479 km.";
    }
else if($message == "3033-41"){
        $arrayPostData['messages'][0]['text'] = "UDN000260,(3001-60) บ้านชัยพร - (3033-41) หมู่บ้าน ชัยพรเล็ควิลล์=Optic 12 Core DW = 1.472 km.";
    }
else if($message == "3033-414"){
        $arrayPostData['messages'][0]['text'] = "UDN001920,(3033-40) บ้านหนองโอน - (3033-414) บ้านหนองโอน 2=Optic 12 Core DW = 1.15 km.";
    }
else if($message == "3033-415"){
        $arrayPostData['messages'][0]['text'] = "UDN001921,(3033-175) เชียงเพ็ง - (3033-415) เชียงเพ็ง 3=Optic 12 Core DW = 1 km.";
    }
else if($message == "3033-416"){
        $arrayPostData['messages'][0]['text'] = "UDN001922,(3033-214) เชียงเพ็ง2 - (3033-416) เชียงเพ็ง 4=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3033-417"){
        $arrayPostData['messages'][0]['text'] = "UDN001923,(3033-204) บ้านยางชุม - (3033-417) บ้านยางชุม2=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3033-42"){
        $arrayPostData['messages'][0]['text'] = "UDN000261,(BJ) หัวต่อ โหนดพรสวรรค์เดิม - (3033-42) ร่มเกล้า=Optic 12 Core DW = 0.833 km.";
    }
else if($message == "3033-421"){
        $arrayPostData['messages'][0]['text'] = "UDN001924,(3033-132) บ้านพรานเหมือน - (3033-421) พรานเหมือน2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3033-427"){
        $arrayPostData['messages'][0]['text'] = "UDN001925,(3033-231) บ้านหลุบหวายป่าขาม - (3033-427) บ้านหลุบหวายป่าขาม 2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-43"){
          $arrayPostData['messages'][0]['text'] = "UDN000262,(3001-40) พีเค 4 - (3033-43) บ้านท่าตูม=Optic 12 Core DW = 0.851 km.
UDN001259,(3033-43) บ้านท่าตูม - (3033-221) คริสตัลโฮม=Optic 12 Core DW = 0.62 km.";
    }
else if($message == "3033-432"){
        $arrayPostData['messages'][0]['text'] = "UDN001926,(3033-141) นาทรายหนองสำโรง - (3033-432) นาทรายหนองสำโรง 2=Optic 12 Core DW = 1.336 km.";
    }
else if($message == "3033-434"){
        $arrayPostData['messages'][0]['text'] = "UDN001927,(3031-87) แยกหนองใส - (3033-434) แยกหนองใส2=Optic 12 Core DW = 0.413 km.";
    }
else if($message == "3033-436"){
        $arrayPostData['messages'][0]['text'] = "UDN001928,(3031-79) ชัชวาลการบัญชี - (3033-436) หรรษา3=Optic 12 Core DW = 1 km.";
    }
else if($message == "3033-44"){
          $arrayPostData['messages'][0]['text'] = "UDN000263,(BJ) หัวต่อ จงมี-ท่าเสด็จ - (3033-44) บ้านดงเจริญ=Optic 12 Core DW = 1.381 km.
UDN000870,(3033-44) บ้านดงเจริญ - (3033-294) บ้านโคกก่อง=Optic 12 Core DW = 3.4 km.";
    }
else if($message == "3033-44 "){
        $arrayPostData['messages'][0]['text'] = "UDN000391,(3033-44 ) บ้านดงเจริญ  - (3033-86) ดงสระพัง=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3033-45"){
        $arrayPostData['messages'][0]['text'] = "UDN000264,(3032-56) กุดลิงง้อ - (3033-45) บ้านศรีเชียงใหม่=Optic 12 Core DW = 3.184 km.";
    }
else if($message == "3033-459"){
        $arrayPostData['messages'][0]['text'] = "UDN001929,(3032-52) หนองนาคำ - (3033-459) หนองนาคำ 2=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3033-46"){
          $arrayPostData['messages'][0]['text'] = "UDN000265,(3031-52) บ้านคำกลิ้ง - (3033-46) บ้าน ตาด=Optic 12 Core DW = 5.931 km.
UDN000862,(3033-46) บ้าน ตาด - (3033-281) โนนเดื่อ=12 Core= 5.71 km.
UDN000877,(3033-46) บ้าน ตาด - (3033-313) กลิ้งคำ=Optic 12 Core DW = 2.3 km.
UDN000949,(3033-46) บ้าน ตาด - (3033-313) กลิ้งคำ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3033-466"){
        $arrayPostData['messages'][0]['text'] = "UDN001502,(3032-77) ค่ายรามสูร - (3033-466) ค่ายรามสูร3=Optic 12 Core DW = 0.76 km.";
    }
else if($message == "3033-468"){
        $arrayPostData['messages'][0]['text'] = "UDN001930,(3023-42) จงมี CAB 12 - (3033-468) จงมี CAB12 (2)=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3033-47"){
          $arrayPostData['messages'][0]['text'] = "UDN000266,(3031-48) บ้านหนองบ่อ - (3033-47) หมูม่น=Optic 12 Core DW = 2.183 km.
UDN000288,(3033-47) หมูม่น - (3033-72) บ้านทุ่งแร่=Optic 12 Core DW = 1.517 km.
UDN000528,(3033-47) หมูม่น - (3033-166) บ้านแวง=Optic 12 Core DW = 2 km.
UDN000566,(3033-47) หมูม่น - (3033-251) หมูม่น2=Optic 12 Core DW = 1.114 km.";
    }
else if($message == "3033-47 "){
        $arrayPostData['messages'][0]['text'] = "UDN000384,(3033-47 ) หมูม่น  - (3033-78) หนองบ่อ2=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3033-48"){
        $arrayPostData['messages'][0]['text'] = "UDN000267,(3031-64) บ้านจั่นศรีวิไล - (3033-48) บ้านจั่นศรีวิไล2=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3033-484"){
        $arrayPostData['messages'][0]['text'] = "UDN001615,(3001-45) พนาริน - (3033-484) พนาริน 2=Optic 12 Core DW = 1.175 km.";
    }
else if($message == "3033-485"){
        $arrayPostData['messages'][0]['text'] = "UDN001931,(3023-45) บ้านกุดสระ - (3033-485) กุดสระ 3=Optic 12 Core DW = 1.375 km.";
    }
else if($message == "3033-489"){
        $arrayPostData['messages'][0]['text'] = "UDN001612,(3033-247) โนนสง่า - (3033-489) ปันน้ำใจ 2=Optic 12 Core DW = 1.585 km.";
    }
else if($message == "3033-49"){
          $arrayPostData['messages'][0]['text'] = "UDN000268,(3032-53) บ้านหนองใส - (3033-49) หนองใส2=Optic 12 Core DW = 1.45 km.
UDN001193,(3033-49) หนองใส 2 - (3033-326) บ้านดอนภู่=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3033-499"){
        $arrayPostData['messages'][0]['text'] = "UDN001932,(3033-278) บ้านผกดอนแสบง - (3033-499) บ้านผกดอนแสบง2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-50"){
          $arrayPostData['messages'][0]['text'] = "UDN000269,(3032-48) หนองไผ่ - (3033-50) บ้านแม่นนท์=Optic 12 Core DW = 2.44 km.
UDN000724,(3033-50) บ้านแม่นนท์ - (3020-82) บ้านป่าก้าวอีทุย=Optic 12 Core DW = 2.72 km.";
    }
else if($message == "3033-501"){
        $arrayPostData['messages'][0]['text'] = "UDN001933,(3031-89) สวรรยา - (3033-501) สวรรยา3=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3033-503"){
        $arrayPostData['messages'][0]['text'] = "UDN001934,(3023-47) บ้านงอย - (3033-503) บ้านงอย2=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3033-504"){
        $arrayPostData['messages'][0]['text'] = "UDN001935,(3033-284) บ้านเซ2 - (3033-504) บ้านเซ3(บ้านอุดมพัฒนา)=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3033-505"){
        $arrayPostData['messages'][0]['text'] = "UDN001936,(3001-51) บ้านเซ - (3033-505) บ้านเซ4=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3033-506"){
        $arrayPostData['messages'][0]['text'] = "UDN001937,(3033-331) นิคม 1 - (3033-506) ศรีสว่าง=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3033-507"){
        $arrayPostData['messages'][0]['text'] = "UDN001938,(3033-304) บ้านดงนาม่วง - (3033-507) ดงนาม่วง2=Optic 12 Core DW = 1.479 km.";
    }
else if($message == "3033-508"){
        $arrayPostData['messages'][0]['text'] = "UDN001939,(3019-142) บ้านม่วง - (3033-508) บ้านม่วง2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-51"){
        $arrayPostData['messages'][0]['text'] = "UDN000270,(3032-37) สามพร้าว - (3033-51) สามพร้าว4=Optic 12 Core DW = 1.182 km.";
    }
else if($message == "3033-513"){
        $arrayPostData['messages'][0]['text'] = "UDN001940,(3033-271) บ้านจำปา(บ้านโก่ย) - (3033-513) บ้านดูน=Optic 12 Core DW = 3.17 km.";
    }
else if($message == "3033-515"){
        $arrayPostData['messages'][0]['text'] = "UDN001941,(3032-56) กุดลิงง้อ - (3033-515) กุดลิงง้อ2=Optic 12 Core DW = 0.675 km.";
    }
else if($message == "3033-516"){
        $arrayPostData['messages'][0]['text'] = "UDN001942,(3033-89) บ้านช้าง2 - (3033-516) หมู่บ้านรชยาบ้านช้าง=Optic 12 Core DW = 0.52 km.";
    }
else if($message == "3033-517"){
        $arrayPostData['messages'][0]['text'] = "UDN001608,(3033-246) หนองตะไก้น้อย - (3033-517) คุ้มกลาโหม=Optic 12 Core DW = 1.07 km.";
    }
else if($message == "3033-52"){
        $arrayPostData['messages'][0]['text'] = "UDN000271,(ME3023-65) Metronet หนองหิน - (3033-52) ดอนอีไข=Optic 12 Core DW = 1.543 km.";
    }
else if($message == "3033-54"){
          $arrayPostData['messages'][0]['text'] = "UDN000272,(BJ) หัวต่อโหนดหน้า รรหนองขามเดิม - (3033-54) ซอยเสนีย์พิทักษ์ชน=Optic 12 Core DW = 1.415 km.
UDN000418,(3033-54) ซอยเสนีย์พิทักษ์ชน - (3033-103) ซอยค่ายเสนีย์พิทักษ์ชน=Optic 12 Core DW = 0.947 km.";
    }
else if($message == "3033-544"){
        $arrayPostData['messages'][0]['text'] = "UDN001943,(3033-287) บ้านนาคลอง - (3033-544) ต.เชียงพิณ ศรีดอนภู่=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3033-545"){
        $arrayPostData['messages'][0]['text'] = "UDN001944,(3033-362) หนองไผ่คำ - (3033-545) บ้านหนองไผ่คำน้อย=Optic 12 Core DW = 2.498 km.";
    }
else if($message == "3033-546"){
        $arrayPostData['messages'][0]['text'] = "UDN001945,(3033-342) หนองนาคำ3 - (3033-546) บ้านโนนกอก=12 Core= 1.8 km.";
    }
else if($message == "3033-55"){
        $arrayPostData['messages'][0]['text'] = "UDN000273,(BJ) หัวต่อofcระหว่างNode3032-44-Node3033-70 - (3033-55) บ้านแมด=Optic 12 Core DW = 0.3 km.";
    }
else if($message == "3033-56"){
          $arrayPostData['messages'][0]['text'] = "UDN000274,(BJ) หัวต่อofcระหว่างNode3001-66-Node3032-44 - (3033-56) ลีลาวดีสามพร้าว=Optic 12 Core DW = 0.151 km.
UDN001200,(3033-56) ลีลาวดีสามพร้าว - (3033-323) บ้านหนองคลอง=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3033-573"){
        $arrayPostData['messages'][0]['text'] = "UDN001946,(3033-331) นิคม 1 - (3033-573) ต.โคกสะอาด ห้วยหินลาด=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3033-58"){
          $arrayPostData['messages'][0]['text'] = "UDN000275,(ME3023-65) Metronet บ้านหนองหิน - (3033-58) รุ่งเรืองหนองหิน=Optic 12 Core DW = 0.891 km.
UDN000388,(3033-58 ) รุ่งเรืองหนองหิน  - (3033-83) คชาหนองหิน=Optic 12 Core DW = 1.385 km.
UDN000396,(3033-58 ) รุ่งเรืองหนองหิน  - (3033-82) รุ่งเรือง5=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3033-58 "){
        $arrayPostData['messages'][0]['text'] = "0";
    }
else if($message == "3033-59"){
        $arrayPostData['messages'][0]['text'] = "UDN000276,(3032-40) ME โนนสูงน้ำคำ - (3033-59) วัดสุวรรณุทการาม=Optic 12 Core DW = 0.71 km.";
    }
else if($message == "3033-60"){
          $arrayPostData['messages'][0]['text'] = "UDN000277,(3001-40) PKC - (3033-60) ศรีธานี=Optic 12 Core DW = 0.992 km.
UDN000442,(3033-60) ศรีธานี - (3033-115) ตลาดแม่ยุพิน=Optic 12 Core DW = 1.299 km.
UDN000453,(3033-60) ศรีธานี - (3033-126) กุดสระ2=Optic 12 Core DW = 1.233 km.";
    }
else if($message == "3033-61"){
        $arrayPostData['messages'][0]['text'] = "UDN000278,(ME3001-37) Metronet สามพร้าว - (3033-61) หมู่บ้านสิริน=Optic 12 Core DW = 0.548 km.";
    }
else if($message == "3033-62"){
        $arrayPostData['messages'][0]['text'] = "UDN000279,(3023-82) me เจริญสุข - (3033-62) ตลาดเมืองทอง=Optic 12 Core DW = 0.995 km.";
    }
else if($message == "3033-63"){
          $arrayPostData['messages'][0]['text'] = "UDN000448,(3033-63) OLT บ้านจิก - () ODF จินตคาม=12 Core= 1.2 km.
UDN000449,(3033-63) OLT บ้านจิก - () ODF ปศุสัตว์=12 Core= 0.85 km.
UDN000450,(3033-63) OLT บ้านจิก - () ODF ไทยอีสาน=12 Core= 1.6 km.
UDN000458,(3033-63) ODF สินชัยธานี - (3033-63) ODF อุดรพิชัยรักษ์=12 Core= 2.3 km.";
    }
else if($message == "3033-64"){
        $arrayPostData['messages'][0]['text'] = "UDN000280,(3023-82) me เจริญสุข - (3033-64) ไทวัสดุอุดรธานี=Optic 12 Core DW = 1.919 km.";
    }
else if($message == "3033-65"){
        $arrayPostData['messages'][0]['text'] = "UDN000281,(3032-40) ME โนนสูงน้ำคำ - (3033-65) โนนสูงน้ำคำ2=Optic 12 Core DW = 0.77 km.";
    }
else if($message == "3033-66"){
        $arrayPostData['messages'][0]['text'] = "UDN000282,(3031-62) ม.ปราณีแลนด์ - (3033-66) หมู่บ้านไพรเวท=Optic 12 Core DW = 0.736 km.";
    }
else if($message == "3033-67"){
          $arrayPostData['messages'][0]['text'] = "UDN000235,(3033-67) โรงเรียนหนองขุ่น - (3032-76) นาแอง=Optic 12 Core DW = 3.046 km.
UDN000283,(BJ) หัวต่อofcระหว่างMe-หนองหิน-Node 3001-48 - (3033-67) โรงเรียนหนองขุ่น=Optic 12 Core DW = 1.025 km.
UDN001266,(3033-67) รร.หนองขุ่น - (3033-217) บ้านหนองหลัก=Optic 12 Core DW = 1.67 km.
UDN001441,(3033-67) บ้านหนองขุ่น - (3033-348) งี่สุ่น2=Optic 12 Core DW = 2.61 km.";
    }
else if($message == "3033-68"){
        $arrayPostData['messages'][0]['text'] = "UDN000284,(3032-80) บ้านถ่อนน้อย - (3033-68) บ้านดอนแตง=Optic 12 Core DW = 0.776 km.";
    }
else if($message == "3033-69"){
          $arrayPostData['messages'][0]['text'] = "UDN000285,(3031-83) ซอยสามัคคี - (3033-69) สามัคคีนาทราย=Optic 12 Core DW = 1.161 km.
UDN000851,(3033-69) สามัคคีนาทราย - (3033-259) สามัคคีนาทราย 2=Optic 12 Core DW = 0.57 km.";
    }
else if($message == "3033-70"){
          $arrayPostData['messages'][0]['text'] = "UDN000199,(3033-70) วัดสว่างสามัคคีสามพร้าว - (3032-37) สามพร้าว=Optic 12 Core DW = 0.65 km.
UDN000286,(3032-37) สามพร้าว - (3033-70) วัดสว่างสามัคคีสามพร้าว=Optic 12 Core DW = 0.899 km.";
    }
else if($message == "3033-71"){
        $arrayPostData['messages'][0]['text'] = "UDN000287,(3032-79) กองบิน23 - (3033-71) โรงพยาบาลกองบิน23=Optic 12 Core DW = 0.606 km.";
    }
else if($message == "3033-72"){
          $arrayPostData['messages'][0]['text'] = "UDN000288,(3033-47) หมูม่น - (3033-72) บ้านทุ่งแร่=Optic 12 Core DW = 1.517 km.
UDN000577,(3033-72) บ้านทุ่งแร่ - (3033-265) ดงยาง=Optic 12 Core DW = 3.155 km.
UDN000727,(3033-72) ทุ่งแร่ - (3033-275) บ้านนากว้าง=Optic 12 Core DW = 3.26 km.";
    }
else if($message == "3033-73"){
          $arrayPostData['messages'][0]['text'] = "UDN000151,(3033-73) ซอยสุวรรณเกสร - (3031-49) ปั้มวีรกิจ=Optic 12 Core DW = 0.632 km.
UDN000289,(3031-40) ปั้มคาลเทคซ์บ้านเลื่อม - (3033-73) ซอยสุวรรณเกสร=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3033-74"){
          $arrayPostData['messages'][0]['text'] = "UDN000290,(3001-61) หมู่บ้านกฤษณา-บ้านเลื่อม - (3033-74) หมู่บ้านเงินทองธานี=Optic 12 Core DW = 1.1 km.
UDN000399,(3033-74) หมู่บ้านเงินทองธานี  - (3033-91) จามจุรี=Optic 12 Core DW = 2.35 km.";
    }
else if($message == "3033-75"){
        $arrayPostData['messages'][0]['text'] = "UDN000291,(3032-53) บ้านหนองใส - (3033-75) หนองใส3=Optic 12 Core DW = 0.612 km.";
    }
else if($message == "3033-77"){
          $arrayPostData['messages'][0]['text'] = "UDN000383,(3033-37 ) หลังหมู่บ้าน ชนาการต์  - (3033-77) หมู่บ้านธนาโฮม=Optic 12 Core DW = 1.3 km.
UDN000390,(3033-77) หมู่บ้านธนาโฮม - (3033-85) บ้านหนองเคียน=Optic 12 Core DW = 1 km.";
    }
else if($message == "3033-78"){
          $arrayPostData['messages'][0]['text'] = "UDN000384,(3033-47 ) หมูม่น  - (3033-78) หนองบ่อ2=Optic 12 Core DW = 1.5 km.
UDN000733,(3033-78) บ้านหนองบ่อ 2 - (3033-337) บ้านนาคลอง=12 Core= 2.83 km.";
    }
else if($message == "3033-79"){
          $arrayPostData['messages'][0]['text'] = "UDN000385,(3031-95 ) หรรษา 2  - (3033-79) พฤษชาติ=Optic 12 Core DW = 0.8 km.
UDN001205,(3032-93) คุณธรรมธานี 2 - (3033-79) พฤษชาติ=Optic 12 Core DW = 1.06 km.
UDN001265,(3033-79) พฤกษาชาติ - (3033-80) ประชานิมิต2=Optic 12 Core DW = 2.2 km.
UDN001670,(3033-79) พฤษชาติ - (3033-226) หมู่บ้านลิฟเวลโล่=Optic 12 Core DW = 0.57 km.";
    }
else if($message == "3033-80"){
          $arrayPostData['messages'][0]['text'] = "UDN000386,(3023-89 ) ประชานิมิตร  - (3033-80) ประชานิมิตร2=Optic 12 Core DW = 0.6 km.
UDN001265,(3033-79) พฤกษาชาติ - (3033-80) ประชานิมิต2=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3033-81"){
        $arrayPostData['messages'][0]['text'] = "UDN000387,(3032-62) หนองนาหล่ำ  - (3033-81) หนองนาหล่ำ2=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3033-82"){
        $arrayPostData['messages'][0]['text'] = "UDN000396,(3033-58 ) รุ่งเรืองหนองหิน  - (3033-82) รุ่งเรือง5=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3033-83"){
        $arrayPostData['messages'][0]['text'] = "UDN000388,(3033-58 ) รุ่งเรืองหนองหิน  - (3033-83) คชาหนองหิน=Optic 12 Core DW = 1.385 km.";
    }
else if($message == "3033-84"){
        $arrayPostData['messages'][0]['text'] = "UDN000389,(3032-55 ) เชียงพิณ  - (3033-84) เชียงพิณ2=Optic 12 Core DW = 0.45 km.";
    }
else if($message == "3033-85"){
        $arrayPostData['messages'][0]['text'] = "UDN000390,(3033-77) หมู่บ้านธนาโฮม - (3033-85) บ้านหนองเคียน=Optic 12 Core DW = 1 km.";
    }
else if($message == "3033-86"){
        $arrayPostData['messages'][0]['text'] = "UDN000391,(3033-44 ) บ้านดงเจริญ  - (3033-86) ดงสระพัง=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3033-87"){
          $arrayPostData['messages'][0]['text'] = "UDN000214,(3033-119) บ้านดงเหล่าต้อง - (3033-87) บ้านหนองบั่ว=Optic 12 Core DW = 1.729 km.
UDN001427,(3033-87) บ้านหนองบั่ว - (3019-108) ต.สร้างแป้น บ้านหนองแด่น=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3033-88"){
          $arrayPostData['messages'][0]['text'] = "UDN000392,(3032-56 ) กุดลิงง้อ  - (3033-88) ศรีบุญเรือง=Optic 12 Core DW = 3 km.
UDN000937,(3033-88) ศรีบุญเรือง - (3033-208) บ้านผ่านศึกหมู่1=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3033-89"){
          $arrayPostData['messages'][0]['text'] = "UDN000397,(3031-75) อุดรพิชัยรักษ์ - (3033-89) บ้านช้าง2=Optic 12 Core DW = 1.1 km.
UDN001942,(3033-89) บ้านช้าง2 - (3033-516) หมู่บ้านรชยาบ้านช้าง=Optic 12 Core DW = 0.52 km.";
    }
else if($message == "3033-90"){
          $arrayPostData['messages'][0]['text'] = "UDN000398,(3001-46 ) วัวข้อง  - (3033-90) วัวข้อง2=Optic 12 Core DW = 0.5 km.
UDN000493,(3033-90) วัวข้อง2 - (3033-142) บ้านหนองสวรรค์=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3033-91"){
          $arrayPostData['messages'][0]['text'] = "UDN000399,(3033-74) หมู่บ้านเงินทองธานี  - (3033-91) จามจุรี=Optic 12 Core DW = 2.35 km.
UDN000400,(3033-91) จามจุรี - (3033-92) เชียงยืน=Optic 12 Core DW = 5.5 km.
UDN000501,(3033-91) จามจุรี - (3033-152) บ้านหนองตอ=Optic 12 Core DW = 4 km.
UDN000869,(3033-91) จามจุรี - (3033-292) บ้านดงหนองโพธิ์=Optic 12 Core DW = 1.603 km.";
    }
else if($message == "3033-92"){
          $arrayPostData['messages'][0]['text'] = "UDN000400,(3033-91) จามจุรี - (3033-92) เชียงยืน=Optic 12 Core DW = 5.5 km.
UDN000402,(3033-92) เชียงยืน - (3033-94) บ้านหนองหลอด=Optic 12 Core DW = 2.4 km.
UDN000763,(3033-92) เชียงยืน - (3033-332) เชียงยืน2=Optic 12 Core DW = 1.4 km.
UDN000882,(3033-92) เชียงยืน - (3033-324) บ้านหนองเป็ด=Optic 12 Core DW = 1.218 km.
UDN000936,(3033-92) เชียงยืน - (3033-205) บ้านอีหลุง=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3033-93"){
          $arrayPostData['messages'][0]['text'] = "UDN000401,(3032-40) ME โนนสูงน้ำคำ - (3033-93) ค่ายปืนใหญ่=Optic 12 Core DW = 1.7 km.
UDN001419,(3033-93) ค่ายปืนใหญ่ - (3033-357) บ้านพักสำนักงานพัฒนาภาค2=Optic 12 Core DW = 2.17 km.";
    }
else if($message == "3033-94"){
          $arrayPostData['messages'][0]['text'] = "UDN000402,(3033-92) เชียงยืน - (3033-94) บ้านหนองหลอด=Optic 12 Core DW = 2.4 km.
UDN000526,(3033-94) บ้านหนองหลอด - (3033-175) เชียงเพ็ง=12 Core= 5.817 km.";
    }
else if($message == "3084-98"){
        $arrayPostData['messages'][0]['text'] = "BUN000185,(3084-98) ต.โซ่ ห้วยทราย - (3804-97) ต.โซ่ ท่าลี่=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3101-101"){
        $arrayPostData['messages'][0]['text'] = "NLP000299,(3101-102) โนนสวรรค์หนองแก - (3101-101) โนนม่วง-หัวนา=Optic 12 Core DW = 2.733 km.";
    }
else if($message == "3101-102"){
          $arrayPostData['messages'][0]['text'] = "NLP000299,(3101-102) โนนสวรรค์หนองแก - (3101-101) โนนม่วง-หัวนา=Optic 12 Core DW = 2.733 km.
NLP000300,(3101-86) หัวนา - (3101-102) โนนสวรรค์-หนองแก=Optic 12 Core DW = 3.02 km";
    }
else if($message == "3101-103"){
        $arrayPostData['messages'][0]['text'] = "NLP000301,(3101-106) นาอ่าง - (3101-103) ทรายงาม=Optic 12 Core DW = 4.329 km.";
    }
else if($message == "3101-104"){
        $arrayPostData['messages'][0]['text'] = "NPL000184,(3101-105) บ้านดอนเข็ม - (3101-104) บ้านข่า=Optic 12 Core DW = 1.055 km.";
    }
else if($message == "3101-105"){
        $arrayPostData['messages'][0]['text'] = "NPL000184,(3101-105) บ้านดอนเข็ม - (3101-104) บ้านข่า=Optic 12 Core DW = 1.055 km.";
    }
else if($message == "3101-106"){
          $arrayPostData['messages'][0]['text'] = "NLP000301,(3101-106) นาอ่าง - (3101-103) ทรายงาม=Optic 12 Core DW = 4.329 km.
NLP000302,(3103-59) นามะเฟือง - (3101-106) นาอ่าง=12 Core= 3.448 km.";
    }
else if($message == "3101-107"){
        $arrayPostData['messages'][0]['text'] = "NPL000185,(3101-112) บ้านโนนหวาย - (3101-107) บ้านดอนนาดี=Optic 12 Core DW = 3.76 km.";
    }
else if($message == "3101-108"){
        $arrayPostData['messages'][0]['text'] = "NPL000186,(3101-109) บ้านโนนคูณ - (3101-108) บ้านโคกกุง=Optic 12 Core DW = 2.45 km.";
    }
else if($message == "3101-109"){
          $arrayPostData['messages'][0]['text'] = "NPL000186,(3101-109) บ้านโนนคูณ - (3101-108) บ้านโคกกุง=Optic 12 Core DW = 2.45 km.
NPL000187,(3101-60) บ้านขามธาตุ - (3101-109) บ้านโนนคูณ=Optic 12 Core DW = 1.74 km.
NPL000188,(3101-109) บ้านโนนคูณ - (3101-111) บ้านหิน=Optic 12 Core DW = 1.31 km.";
    }
else if($message == "3101-111"){
        $arrayPostData['messages'][0]['text'] = "NPL000188,(3101-109) บ้านโนนคูณ - (3101-111) บ้านหิน=Optic 12 Core DW = 1.31 km.";
    }
else if($message == "3101-112"){
          $arrayPostData['messages'][0]['text'] = "NPL000185,(3101-112) บ้านโนนหวาย - (3101-107) บ้านดอนนาดี=Optic 12 Core DW = 3.76 km.
NPL000189,(3103-59) บ้านนามะเฟือง - (3101-112) บ้านโนนหวาย=Optic 12 Core DW = 2.429 km.
NPL000190,(3101-112) บ้านโนนหวาย - (3101-113) บ้านข้องโป้=Optic 12 Core DW = 2.185 km.";
    }
else if($message == "3101-113"){
        $arrayPostData['messages'][0]['text'] = "NPL000190,(3101-112) บ้านโนนหวาย - (3101-113) บ้านข้องโป้=Optic 12 Core DW = 2.185 km.";
    }
else if($message == "3101-114"){
          $arrayPostData['messages'][0]['text'] = "NLP000312,(3101-114) ท่าโพธิ์ชัย - (3101-136) ต.บ้านพร้าว โคกม่วย=Optic 12 Core DW = 1.7 km.
NPL000180,(3101-115) บ้านพร้าว - (3101-114) บ้านท่าโพธิ์ชัย=Optic 12 Core DW = 1.002 km.";
    }
else if($message == "3101-115"){
          $arrayPostData['messages'][0]['text'] = "NPL000180,(3101-115) บ้านพร้าว - (3101-114) บ้านท่าโพธิ์ชัย=Optic 12 Core DW = 1.002 km.
NPL000181,(3101-60) บ้านขามธาตุ - (3101-115) บ้านพร้าว=12 Core= 6.11 km.";
    }
else if($message == "3101-116"){
        $arrayPostData['messages'][0]['text'] = "NPL000182,(3101-56) บ้านบกโนนเรียง - (3101-116) บ้านห้วยค้อ=Optic 12 Core DW = 3.14 km.";
    }
else if($message == "3101-117"){
        $arrayPostData['messages'][0]['text'] = "NPL000216,(3101-47) บ้านหนองภัยศูนย์ - (3101-117) บ้านหว้าทอง=Optic 12 Core DW = 1.98 km.";
    }
else if($message == "3101-118"){
        $arrayPostData['messages'][0]['text'] = "NLP000303,(3101-80) ทุ่งโปร่งพัฒนา - (3101-118) ต.กุดจิก โนนสว่าง=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3101-119"){
        $arrayPostData['messages'][0]['text'] = "NLP000304,(SJ) บ้านทุ่งโปร่งพัฒนา-โพธิ์ศรีสะอาด - (3101-119) ต.กุดจิก โพธิ์ศรีพัฒนา=Optic 12 Core DW = 1.367 km.";
    }
else if($message == "3101-122"){
          $arrayPostData['messages'][0]['text'] = "NLP000305,(3101-70) โนนสมบูรณ์ - (3101-122) ต.นาคำไฮ กุดฉิม=12 Core= 6.18 km.
NPL000254,(3101-122) บ้านกุดฉิม - (3101-152) บ้านศิลามงคล=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3101-123"){
        $arrayPostData['messages'][0]['text'] = "NLP000306,(3101-125) โนนสว่าง - (3101-123) ต.นามะเฟือง กุดเต่า=Optic 12 Core DW = 4.6 km.";
    }
else if($message == "3101-124"){
        $arrayPostData['messages'][0]['text'] = "NLP000307,(3103-59) นามะเฟือง - (3101-124) ต.นามะเฟือง โนนสมบูรณ์=Optic 12 Core DW = 4 km.";
    }
else if($message == "3101-125"){
          $arrayPostData['messages'][0]['text'] = "NLP000306,(3101-125) โนนสว่าง - (3101-123) ต.นามะเฟือง กุดเต่า=Optic 12 Core DW = 4.6 km.
NLP000308,(SJ) ME หนองบัวลำภู-ME โนนสัง - (3101-125) ต.นามะเฟือง โนนสว่าง=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3101-127"){
          $arrayPostData['messages'][0]['text'] = "NLP000309,(3101-131) โนนสำราญ - (3101-127) ต.โนนขมิ้น โนนคูณ=Optic 12 Core DW = 3.55 km.
NLP000310,(3101-127) โนนคูณ - (3101-128) ต.โนนขมิ้น ห้วยโจด=Optic 12 Core DW = 4.65 km.";
    }
else if($message == "3101-128"){
          $arrayPostData['messages'][0]['text'] = "NLP000310,(3101-127) โนนคูณ - (3101-128) ต.โนนขมิ้น ห้วยโจด=Optic 12 Core DW = 4.65 km.
NLP000322,(3101-128) ห้วยโจด - (3101-191) บ้านห้วยไร่=Optic 12 Core DW = 4.6 km.";
    }
else if($message == "3101-129"){
        $arrayPostData['messages'][0]['text'] = "NPL000253,(3101-131) บ้านโนนสำราญ - (3101-129) บ้านทุ่งสว่าง=Optic 12 Core DW = 2.92 km.";
    }
else if($message == "3101-131"){
          $arrayPostData['messages'][0]['text'] = "NLP000309,(3101-131) โนนสำราญ - (3101-127) ต.โนนขมิ้น โนนคูณ=Optic 12 Core DW = 3.55 km.
NPL000252,(3101-153) บ้านห้วยเตย - (3101-131) บ้านโนนสำราญ=Optic 12 Core DW = 2.62 km.
NPL000253,(3101-131) บ้านโนนสำราญ - (3101-129) บ้านทุ่งสว่าง=Optic 12 Core DW = 2.92 km.";
    }
else if($message == "3101-132"){
        $arrayPostData['messages'][0]['text'] = "NPL000245,(3101-61) บ้านโนนทัน - (3101-132) บ้านโค้งสวรรค์=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3101-133"){
        $arrayPostData['messages'][0]['text'] = "NPL000247,(3101-64) ตลาดห้วยเดื่อ - (3101-133) บ้านวัดถ้ำกองเพล=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3101-134"){
          $arrayPostData['messages'][0]['text'] = "NLP000311,(3101-64) ตลาดห้วยเดื่อ - (3101-134) ต.โนนทัน อ่างบูรพา=Optic 12 Core DW = 3.56 km.
NPL000248,(3101-134) บ้านอ่างบูรพา - (3101-135) บ้านภูพานคำ=12 Core= 5.32 km.
NPL000249,(3101-134) บ้านอ่างบูรพา - (3101-64) ตลาดห้วยเดื่อ=Optic 12 Core DW = 3.52 km.";
    }
else if($message == "3101-135"){
        $arrayPostData['messages'][0]['text'] = "NPL000248,(3101-134) บ้านอ่างบูรพา - (3101-135) บ้านภูพานคำ=12 Core= 5.32 km.";
    }
else if($message == "3101-136"){
        $arrayPostData['messages'][0]['text'] = "NLP000312,(3101-114) ท่าโพธิ์ชัย - (3101-136) ต.บ้านพร้าว โคกม่วย=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3101-137"){
        $arrayPostData['messages'][0]['text'] = "NLP000313,(3101-89) ศรีสุข - (3101-137) ต.บ้านพร้าว นาล้อม=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3101-138"){
        $arrayPostData['messages'][0]['text'] = "NPL000242,(3101-57) ศูนย์ราชการ - (3101-138) บ้านสว่างพัฒนา=Optic 12 Core DW = 3.11 km.";
    }
else if($message == "3101-139"){
        $arrayPostData['messages'][0]['text'] = "NPL000244,(3101-45) ไทยวัสดุหนองบัวลำภู - (3101-139) บ้านโนนสงเปลือย=Optic 12 Core DW = 0.979 km.";
    }
else if($message == "3101-141"){
        $arrayPostData['messages'][0]['text'] = "NPL000255,(3101-141) บ้านภูพานทอง - (3101-142) บ้านห้วยทราย=Optic 12 Core DW = 4.97 km.";
    }
else if($message == "3101-142"){
        $arrayPostData['messages'][0]['text'] = "NPL000255,(3101-141) บ้านภูพานทอง - (3101-142) บ้านห้วยทราย=Optic 12 Core DW = 4.97 km.";
    }
else if($message == "3101-143"){
        $arrayPostData['messages'][0]['text'] = "NPL000241,(3101-62) บ้านโคกแก่นช้าง - (3101-143) บ้านเสาเล้า=Optic 12 Core DW = 3.04 km.";
    }
else if($message == "3101-144"){
        $arrayPostData['messages'][0]['text'] = "NPL000243,(3101-47) บ้านหนองภัยศูนย์ - (3101-144) บ้านนาลาดควาย=Optic 12 Core DW = 2.213 km.";
    }
else if($message == "3101-145"){
        $arrayPostData['messages'][0]['text'] = "NPL000246,(3101-57) ศูนย์ราชการ - (3101-145) บ้านดอนส้มโฮง=Optic 12 Core DW = 2.593 km.";
    }
else if($message == "3101-147"){
        $arrayPostData['messages'][0]['text'] = "NLP000314,(3101-151) ต.หนองสวรรค์ หนองบัวโซม - (3101-147) ต.หนองสวรรค์ โนนงาม=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3101-148"){
          $arrayPostData['messages'][0]['text'] = "NLP000315,(3101-148) หนองสวรรค์ - (3101-149) ต.หนองสวรรค์ หนองปลาขาว=Optic 12 Core DW = 1.6 km.
NLP000316,(3101-148) หนองสวรรค์ - (3101-151) ต.หนองสวรรค์ หนองบัวโซม=Optic 12 Core DW = 4.35 km.
NPL000250,(3101-70) โนนสมบูรณ์ - (3101-148) บ้านกุดฉิม=12 Core= 6.18 km.";
    }
else if($message == "3101-149"){
        $arrayPostData['messages'][0]['text'] = "NLP000315,(3101-148) หนองสวรรค์ - (3101-149) ต.หนองสวรรค์ หนองปลาขาว=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3101-151"){
          $arrayPostData['messages'][0]['text'] = "NLP000314,(3101-151) ต.หนองสวรรค์ หนองบัวโซม - (3101-147) ต.หนองสวรรค์ โนนงาม=Optic 12 Core DW = 1.8 km.
NLP000316,(3101-148) หนองสวรรค์ - (3101-151) ต.หนองสวรรค์ หนองบัวโซม=Optic 12 Core DW = 4.35 km.";
    }
else if($message == "3101-152"){
        $arrayPostData['messages'][0]['text'] = "NPL000254,(3101-122) บ้านกุดฉิม - (3101-152) บ้านศิลามงคล=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3101-153"){
          $arrayPostData['messages'][0]['text'] = "NLP000317,(3101-155) หนองผำ - (3101-153) ต.หนองหว้า ห้วยเตย=Optic 12 Core DW = 4.7 km.
NPL000252,(3101-153) บ้านห้วยเตย - (3101-131) บ้านโนนสำราญ=Optic 12 Core DW = 2.62 km.";
    }
else if($message == "3101-154"){
          $arrayPostData['messages'][0]['text'] = "NPL000251,(3101-156) บ้านหนองหว้าใหญ่ - (3101-154) บ้านโนนสง่า=Optic 12 Core DW = 0.899 km.
NPL000256,(3101-154) บ้านโนนสง่า - (3101-155) บ้านหนองผำ=Optic 12 Core DW = 1.92 km.";
    }
else if($message == "3101-155"){
          $arrayPostData['messages'][0]['text'] = "NLP000317,(3101-155) หนองผำ - (3101-153) ต.หนองหว้า ห้วยเตย=Optic 12 Core DW = 4.7 km.
NPL000256,(3101-154) บ้านโนนสง่า - (3101-155) บ้านหนองผำ=Optic 12 Core DW = 1.92 km.";
    }
else if($message == "3101-156"){
          $arrayPostData['messages'][0]['text'] = "NLP000318,(SJ) บ้านเหล่าใต้-บ้านสุขเกษม - (3101-156) ต.หนองหว้า หนองหว้าใหญ่=Optic 12 Core DW = 0.44 km.
NPL000251,(3101-156) บ้านหนองหว้าใหญ่ - (3101-154) บ้านโนนสง่า=Optic 12 Core DW = 0.899 km.";
    }
else if($message == "3101-157"){
        $arrayPostData['messages'][0]['text'] = "NLP000319,(3101-40) บ้านเหนือ - (3101-157) บ้านเหนือ2=Optic 12 Core DW = 0.609 km.";
    }
else if($message == "3101-182"){
        $arrayPostData['messages'][0]['text'] = "NLP000320,(3101-72) สว่างอำนวย - (3101-182) นาคำไฮ2=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3101-185"){
        $arrayPostData['messages'][0]['text'] = "NLP000321,(3101-79) ยางหลวงพัฒนา - (3101-185) ยางหลวงพัฒนา2=Optic 12 Core DW = 0.78 km.";
    }
else if($message == "3101-191"){
        $arrayPostData['messages'][0]['text'] = "NLP000322,(3101-128) ห้วยโจด - (3101-191) บ้านห้วยไร่=Optic 12 Core DW = 4.6 km.";
    }
else if($message == "3101-31"){
          $arrayPostData['messages'][0]['text'] = "NLP000020,(3101-31) me-หนองบัวลำภู - () หจก. ณัฐพงษ์มอเตอร์ (1989)=Optic 12 Core DW = 1.5 km.
NLP000035,(3101-31) dwdm หนองบัวลำภู - (3401-31) เอกธานี=12 Core= 104 km.
UDN000425,(3023-65) หนองหิน - (3101-31) dwdm หนองบัวลำภู=12 Core= 45.719 km.";
    }
else if($message == "3101-32"){
          $arrayPostData['messages'][0]['text'] = "NLP000003,(3101-54) 3BBหนองบัวลำภู - (3101-32) บ้านเอื้ออาทรณ์=Optic 12 Core DW = 3.1 km.
NLP000011,(3101-32) บ้านเอื้ออาทรณ์ - (3101-44) บ้านวังหมื่น=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3101-33"){
        $arrayPostData['messages'][0]['text'] = "NLP000004,(3101-33) 3BBShop - (3101-36) 3BBหนองบัวลำภู=Optic 12 Core DW = 2 km.";
    }
else if($message == "3101-36"){
          $arrayPostData['messages'][0]['text'] = "NLP000004,(3101-33) 3BBShop - (3101-36) 3BBหนองบัวลำภู=Optic 12 Core DW = 2 km.
NLP000031,(3101-36) 3BBหนองบัวลำภู - (3101-51) การไฟฟ้าหนองบัวลำภู=Optic 12 Core DW = 1.28 km.
UDN000988,(3101-36) หนองบัวลำภู - (3103-65) โนนสัง=12 Core= 45.536 km.";
    }
else if($message == "3101-37"){
          $arrayPostData['messages'][0]['text'] = "NLP000005,(3101-54) 3BBหนองบัวลำภู - (3101-37) วัดจีน=Optic 12 Core DW = 1.5 km.
NLP000006,(3101-37) วัดจีน - (3101-38) บ้านดอนหาด=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3101-38"){
          $arrayPostData['messages'][0]['text'] = "NLP000006,(3101-37) วัดจีน - (3101-38) บ้านดอนหาด=Optic 12 Core DW = 0.8 km.
NLP000010,(3101-38) บ้านดอนหาด - (3101-43) โรงพยาบาล หนองบัวลำภู=Optic 12 Core DW = 2 km.";
    }
else if($message == "3101-39"){
          $arrayPostData['messages'][0]['text'] = "NLP000001,(3101-39) ศูนย์ราชการ  - (3109-37) โรงเรียนหนองบัวคำเเสน นากลาง =12 Core= 24.7 km.
NLP000007,(3101-40) บ้านเหนือ - (3101-39) ศูนย์ราชการ=Optic 12 Core DW = 2.5 km.
NLP000012,(3101-39) ศูนย์ราชการ - (3101-45) ไทวัสดุหนองบัวลำภู=Optic 12 Core DW = 2 km.
NLP000026,(3101-39) ศูนย์ราชการ - () กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม=Optic 12 Core DW = 1.8 km.
NLP000027,(3101-39) ศูนย์ราชการ - () กรมที่ดิน (T)=Optic 12 Core DW = 1.8 km.
NPL000132,(3101-54) Shop 3bb หนองบัวลำภู - (3101-39) ศูนย์ราชการ=12 Core= 8 km.
NLP000022,(3101-39 ) ศูนย์ราชการ  - () สนง. การค้าภายในจังหวัดหนองบัวลำภู=Optic 12 Core DW = 0.7 km.
NLP000023,(3101-39 ) ศูนย์ราชการ  - () สนง. พัฒนาธุรกิจการค้าจังหวัดหนองบัวลำภู=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3101-39 "){
        $arrayPostData['messages'][0]['text'] = "0";
    }
else if($message == "3101-40"){
          $arrayPostData['messages'][0]['text'] = "NLP000007,(3101-40) บ้านเหนือ - (3101-39) ศูนย์ราชการ=Optic 12 Core DW = 2.5 km.
NLP000008,(3101-54) 3BBหนองบัวลำภู - (3101-40) บ้านเหนือ=Optic 12 Core DW = 3.22 km.
NLP000036,(3101-40) บ้านเหนือ - (3101-52) บ้านเหนือ2=Optic 12 Core DW = 2 km.
NLP000319,(3101-40) บ้านเหนือ - (3101-157) บ้านเหนือ2=Optic 12 Core DW = 0.609 km.";
    }
else if($message == "3101-41"){
          $arrayPostData['messages'][0]['text'] = "NLP000009,(3101-54) 3BBหนองบัวลำภู - (3101-41) บ้าน ลำภู=Optic 12 Core DW = 2.37 km.
NLP000030,(3101-41) บ้าน ลำภู - (3101-48) บ้านเหล่าใต้=Optic 12 Core DW = 1.45 km.
NPL000061,(3101-41) บ้าน ลำภู - (3101-67) ห้วยลึก=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3101-43"){
          $arrayPostData['messages'][0]['text'] = "NLP000010,(3101-38) บ้านดอนหาด - (3101-43) โรงพยาบาล หนองบัวลำภู=Optic 12 Core DW = 2 km.
NLP000029,(3101-43) โรงพยาบาล หนองบัวลำภู - (3101-49) โรงพยาบาลหนองบัวลำภู2=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3101-44"){
          $arrayPostData['messages'][0]['text'] = "NLP000011,(3101-32) บ้านเอื้ออาทรณ์ - (3101-44) บ้านวังหมื่น=Optic 12 Core DW = 2.6 km.
NPL000085,(3101-44) บ้านวังหมื่น - (3101-69) วังหมื่น2=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3101-45"){
          $arrayPostData['messages'][0]['text'] = "NLP000012,(3101-39) ศูนย์ราชการ - (3101-45) ไทวัสดุหนองบัวลำภู=Optic 12 Core DW = 2 km.
NLP000021,(3101-45) ไทวัสดุหนองบัวลำภู - () บริษัท ซีอาร์ซี ไทวัสดุ จำกัด (สาขาหนองบัวลำภู)=Optic 12 Core DW = 0.5 km.
NLP000028,(3101-45) ไทวัสดุหนองบัวลำภู - (3101-47) บ้านหนองภัยศูนย์=Optic 12 Core DW = 2.8 km.
NPL000080,(3101-45) ไทวัสดุหนองบัวลำภู - (3101-57) ศูนย์ราชการ2=Optic 12 Core DW = 1.499 km.
NPL000244,(3101-45) ไทยวัสดุหนองบัวลำภู - (3101-139) บ้านโนนสงเปลือย=Optic 12 Core DW = 0.979 km.";
    }
else if($message == "3101-46"){
          $arrayPostData['messages'][0]['text'] = "NLP000025,(SJ) SJ (3101-39) ศูนย์ราชการ - (3109-37) โรงเรียนหนองบัวคำเเสน นากลาง - (3101-46) นาคำไฮ=Optic 12 Core DW = 0.7 km.
NLP000047,(3101-46) นาคำไฮ - (3109-45) กุดดินจี่ 1=12 Core= 10.2 km.
NPL000077,(3101-46) นาคำไฮ - (3101-72) สว่างอำนวย=Optic 12 Core DW = 2 km.";
    }
else if($message == "3101-47"){
          $arrayPostData['messages'][0]['text'] = "NLP000028,(3101-45) ไทวัสดุหนองบัวลำภู - (3101-47) บ้านหนองภัยศูนย์=Optic 12 Core DW = 2.8 km.
NPL000078,(3101-47) บ้านหนองภัยศูนย์ - (3101-70) บ้านโนนสมบูรณ์=Optic 12 Core DW = 0.66 km.
NPL000160,(3101-47) บ้านหนองภันศูนย์ - (3101-73) ดอนย่านาง=Optic 12 Core DW = 5 km.
NPL000169,(3101-47) บ้านหนองภันศูนย์ - (3101-82) ฮ่องข่า=Optic 12 Core DW = 2.6 km.
NPL000216,(3101-47) บ้านหนองภัยศูนย์ - (3101-117) บ้านหว้าทอง=Optic 12 Core DW = 1.98 km.
NPL000243,(3101-47) บ้านหนองภัยศูนย์ - (3101-144) บ้านนาลาดควาย=Optic 12 Core DW = 2.213 km.";
    }
else if($message == "3101-48"){
          $arrayPostData['messages'][0]['text'] = "NLP000030,(3101-41) บ้าน ลำภู - (3101-48) บ้านเหล่าใต้=Optic 12 Core DW = 1.45 km.
NLP000325,(3101-48) บ้านเหล่าใต้ - (3101-88) สุขเกษม=12 Core= 9.6 km.";
    }
else if($message == "3101-49"){
          $arrayPostData['messages'][0]['text'] = "NLP000029,(3101-43) โรงพยาบาล หนองบัวลำภู - (3101-49) โรงพยาบาลหนองบัวลำภู2=Optic 12 Core DW = 0.4 km.
NLP000042,(3101-49) โรงพยาบาลหนองบัวลำภู2 - (3101-55) ลดาวัลย์=Optic 12 Core DW = 2.7 km.
NPL000083,(3101-49) โรงพยาบาลหนองบัวลำภู2 - (3101-62) โคกแก่นช้าง=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3101-51"){
          $arrayPostData['messages'][0]['text'] = "NLP000031,(3101-36) 3BBหนองบัวลำภู - (3101-51) การไฟฟ้าหนองบัวลำภู=Optic 12 Core DW = 1.28 km.
NLP000034,(3101-51) การไฟฟ้าหนองบัวลำภู - (3101-53) สี่แยกโชว์รูม=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3101-52"){
        $arrayPostData['messages'][0]['text'] = "NLP000036,(3101-40) บ้านเหนือ - (3101-52) บ้านเหนือ2=Optic 12 Core DW = 2 km.";
    }
else if($message == "3101-53"){
        $arrayPostData['messages'][0]['text'] = "NLP000034,(3101-51) การไฟฟ้าหนองบัวลำภู - (3101-53) สี่แยกโชว์รูม=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3101-54"){
          $arrayPostData['messages'][0]['text'] = "NLP000003,(3101-54) 3BBหนองบัวลำภู - (3101-32) บ้านเอื้ออาทรณ์=Optic 12 Core DW = 3.1 km.
NLP000005,(3101-54) 3BBหนองบัวลำภู - (3101-37) วัดจีน=Optic 12 Core DW = 1.5 km.
NLP000008,(3101-54) 3BBหนองบัวลำภู - (3101-40) บ้านเหนือ=Optic 12 Core DW = 3.22 km.
NLP000009,(3101-54) 3BBหนองบัวลำภู - (3101-41) บ้าน ลำภู=Optic 12 Core DW = 2.37 km.
NLP000038,(3101-54) Shop 3bb หนองบัวลำภู - (3104-37) ศรีบุญเรือง 1=12 Core= 33 km.
NPL000132,(3101-54) Shop 3bb หนองบัวลำภู - (3101-39) ศูนย์ราชการ=12 Core= 8 km.
NPL000134,(3103-31) ME โนนสัง - (3101-54) ME หนองบัวลำภู=12 Core= 43.6 km.";
    }
else if($message == "3101-55"){
        $arrayPostData['messages'][0]['text'] = "NLP000042,(3101-49) โรงพยาบาลหนองบัวลำภู2 - (3101-55) ลดาวัลย์=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3101-56"){
          $arrayPostData['messages'][0]['text'] = "NLP000044,(0) SJ หนองบัวลำภู - ศรีบุญเรือง - (3101-56) บ้านบกโนนเรียง=Optic 12 Core DW = 1.89 km.
NLP000285,(3101-56) บ้านบกโนนเรียง - (3101-63) บกโนนเรียง2=Optic 12 Core DW = 1.2 km.
NLP000326,(3101-56) บ้านบกโนนเรียง - (3101-90) พันดอน=Optic 12 Core DW = 2.702 km.
NPL000182,(3101-56) บ้านบกโนนเรียง - (3101-116) บ้านห้วยค้อ=Optic 12 Core DW = 3.14 km.";
    }
else if($message == "3101-57"){
          $arrayPostData['messages'][0]['text'] = "NPL000080,(3101-45) ไทวัสดุหนองบัวลำภู - (3101-57) ศูนย์ราชการ2=Optic 12 Core DW = 1.499 km.
NPL000138,(3101-57) ศูนย์ราชการ2 - (3101-58) บ้านเหนือ3=Optic 12 Core DW = 1.4 km.
NPL000242,(3101-57) ศูนย์ราชการ - (3101-138) บ้านสว่างพัฒนา=Optic 12 Core DW = 3.11 km.
NPL000246,(3101-57) ศูนย์ราชการ - (3101-145) บ้านดอนส้มโฮง=Optic 12 Core DW = 2.593 km.";
    }
else if($message == "3101-58"){
          $arrayPostData['messages'][0]['text'] = "NPL000081,(3101-58) บ้านเหนือ3 - (3101-58) บ้านเหนือ3=Optic 12 Core DW = 1.371 km.
NPL000138,(3101-57) ศูนย์ราชการ2 - (3101-58) บ้านเหนือ3=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3101-60"){
          $arrayPostData['messages'][0]['text'] = "NLP000286,(3101-60) บ้านขามธาตุ - (3101-66) วังน้ำขาว=Optic 12 Core DW = 2.05 km.
NPL000082,(3101-66) วังน้ำขาว - (3101-60) บ้านขามธาตุ=Optic 12 Core DW = 2.9 km.
NPL000181,(3101-60) บ้านขามธาตุ - (3101-115) บ้านพร้าว=12 Core= 6.11 km.
NPL000187,(3101-60) บ้านขามธาตุ - (3101-109) บ้านโนนคูณ=Optic 12 Core DW = 1.74 km.";
    }
else if($message == "3101-61"){
        $arrayPostData['messages'][0]['text'] = "NPL000245,(3101-61) บ้านโนนทัน - (3101-132) บ้านโค้งสวรรค์=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3101-62"){
          $arrayPostData['messages'][0]['text'] = "NPL000083,(3101-49) โรงพยาบาลหนองบัวลำภู2 - (3101-62) โคกแก่นช้าง=Optic 12 Core DW = 1.2 km.
NPL000241,(3101-62) บ้านโคกแก่นช้าง - (3101-143) บ้านเสาเล้า=Optic 12 Core DW = 3.04 km.";
    }
else if($message == "3101-63"){
          $arrayPostData['messages'][0]['text'] = "NLP000285,(3101-56) บ้านบกโนนเรียง - (3101-63) บกโนนเรียง2=Optic 12 Core DW = 1.2 km.
NLP000324,(3101-63) บกโนนเรียง2 - (3101-87) โนนสูง=12 Core= 4.377 km.
NPL000183,(3101-63) บกโนนเรียง2 - (3101-89) บ้านศรีสุข=Optic 12 Core DW = 3.443 km.";
    }
else if($message == "3101-64"){
          $arrayPostData['messages'][0]['text'] = "NLP000311,(3101-64) ตลาดห้วยเดื่อ - (3101-134) ต.โนนทัน อ่างบูรพา=Optic 12 Core DW = 3.56 km.
NPL000247,(3101-64) ตลาดห้วยเดื่อ - (3101-133) บ้านวัดถ้ำกองเพล=Optic 12 Core DW = 2.56 km.
NPL000249,(3101-134) บ้านอ่างบูรพา - (3101-64) ตลาดห้วยเดื่อ=Optic 12 Core DW = 3.52 km.";
    }
else if($message == "3101-65"){
        $arrayPostData['messages'][0]['text'] = "NLP000329,(3101-65) กุดผึ้ง - (3102-101) ต.กุดผึ้ง หินยกยูง=Optic 12 Core DW = 2.32 km.";
    }
else if($message == "3101-66"){
          $arrayPostData['messages'][0]['text'] = "NLP000286,(3101-60) บ้านขามธาตุ - (3101-66) วังน้ำขาว=Optic 12 Core DW = 2.05 km.
NPL000082,(3101-66) วังน้ำขาว - (3101-60) บ้านขามธาตุ=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3101-67"){
        $arrayPostData['messages'][0]['text'] = "NPL000061,(3101-41) บ้าน ลำภู - (3101-67) ห้วยลึก=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3101-68"){
          $arrayPostData['messages'][0]['text'] = "NPL000084,(SJ) SJ - (3101-68) บ้านดินทรายอ่อน=Optic 12 Core DW = 1.228 km.
NPL000212,(3101-68) บ้านดินทรายอ่อน - (3104-70) บ้านโนนสง่า=Optic 12 Core DW = 1.74 km.
NPL000213,(3101-68) บ้านดินทรายอ่อน - (3101-91) บ้านหนองแสงเหนือ=12 Core= 3.22 km.";
    }
else if($message == "3101-69"){
        $arrayPostData['messages'][0]['text'] = "NPL000085,(3101-44) บ้านวังหมื่น - (3101-69) วังหมื่น2=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3101-70"){
          $arrayPostData['messages'][0]['text'] = "NLP000305,(3101-70) โนนสมบูรณ์ - (3101-122) ต.นาคำไฮ กุดฉิม=12 Core= 6.18 km.
NPL000078,(3101-47) บ้านหนองภัยศูนย์ - (3101-70) บ้านโนนสมบูรณ์=Optic 12 Core DW = 0.66 km.
NPL000250,(3101-70) โนนสมบูรณ์ - (3101-148) บ้านกุดฉิม=12 Core= 6.18 km.";
    }
else if($message == "3101-72"){
          $arrayPostData['messages'][0]['text'] = "NLP000320,(3101-72) สว่างอำนวย - (3101-182) นาคำไฮ2=Optic 12 Core DW = 1.3 km.
NPL000077,(3101-46) นาคำไฮ - (3101-72) สว่างอำนวย=Optic 12 Core DW = 2 km.
NPL000168,(3101-72) สว่างอำนวย - (3101-81) หนองกุง=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3101-73"){
          $arrayPostData['messages'][0]['text'] = "NPL000054,(ME) ME โนนสัง - (3101-73) บ้านโสกจาน=Optic 12 Core DW = 0.28 km.
NPL000160,(3101-47) บ้านหนองภันศูนย์ - (3101-73) ดอนย่านาง=Optic 12 Core DW = 5 km.
NPL000161,(3101-73) ดอนย่านาง - (3101-74) โนนหวาย=Optic 12 Core DW = 1 km.";
    }
else if($message == "3101-74"){
        $arrayPostData['messages'][0]['text'] = "NPL000161,(3101-73) ดอนย่านาง - (3101-74) โนนหวาย=Optic 12 Core DW = 1 km.";
    }
else if($message == "3101-75"){
          $arrayPostData['messages'][0]['text'] = "NPL000162,(3101-80) ทุ่งโปร่งพัฒนา - (3101-75) กุดจิก=Optic 12 Core DW = 3 km.
NPL000166,(3101-75) กุดจิก - (3101-79) ยางหลวงพัฒนา=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3101-76"){
          $arrayPostData['messages'][0]['text'] = "NPL000163,(3109-67) หนองแสง - (3101-76) ทุ่งโปร่งเหนือ=Optic 12 Core DW = 5.5 km.
NPL000167,(3101-76) ทุ่งโปร่งเหนือ - (3101-80) ทุ่งโปร่งพัฒนา=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3101-77"){
        $arrayPostData['messages'][0]['text'] = "NPL000164,(3101-80) ทุ่งโปร่งพัฒนา - (3101-77) โพธิ์ศรีสะอาด=Optic 12 Core DW = 6 km.";
    }
else if($message == "3101-78"){
        $arrayPostData['messages'][0]['text'] = "NPL000165,(3101-82) ฮ่องข่า - (3101-78) โนนอุดม=Optic 12 Core DW = 6 km.";
    }
else if($message == "3101-79"){
          $arrayPostData['messages'][0]['text'] = "NLP000321,(3101-79) ยางหลวงพัฒนา - (3101-185) ยางหลวงพัฒนา2=Optic 12 Core DW = 0.78 km.
NPL000166,(3101-75) กุดจิก - (3101-79) ยางหลวงพัฒนา=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3101-80"){
          $arrayPostData['messages'][0]['text'] = "NLP000303,(3101-80) ทุ่งโปร่งพัฒนา - (3101-118) ต.กุดจิก โนนสว่าง=Optic 12 Core DW = 2.2 km.
NPL000162,(3101-80) ทุ่งโปร่งพัฒนา - (3101-75) กุดจิก=Optic 12 Core DW = 3 km.
NPL000164,(3101-80) ทุ่งโปร่งพัฒนา - (3101-77) โพธิ์ศรีสะอาด=Optic 12 Core DW = 6 km.
NPL000167,(3101-76) ทุ่งโปร่งเหนือ - (3101-80) ทุ่งโปร่งพัฒนา=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3101-81"){
        $arrayPostData['messages'][0]['text'] = "NPL000168,(3101-72) สว่างอำนวย - (3101-81) หนองกุง=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3101-82"){
          $arrayPostData['messages'][0]['text'] = "NPL000165,(3101-82) ฮ่องข่า - (3101-78) โนนอุดม=Optic 12 Core DW = 6 km.
NPL000169,(3101-47) บ้านหนองภันศูนย์ - (3101-82) ฮ่องข่า=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3101-84"){
          $arrayPostData['messages'][0]['text'] = "NLP000426,(3101-84) โคกกลาง - (3104-68) หนองโน=Optic 12 Core DW = 1.67 km.
NPL000227,(3104-45) บ้านดอนปอ - (3101-84) บ้านโคกกลาง=Optic 12 Core DW = 3.44 km.
NPL000267,(3101-84) บ้านโคกกลาง - (3101-94) บ้านห้วยหามต่าง=Optic 12 Core DW = 2.83 km.
NPL000270,(3101-84) บ้านโคกกลาง - (3101-93) บ้านบุ่งบก=Optic 12 Core DW = 2.299 km.";
    }
else if($message == "3101-85"){
          $arrayPostData['messages'][0]['text'] = "NLP000323,(3101-94) ห้วยหามต่าง - (3101-85) บ้านลาด=Optic 12 Core DW = 2.72 km.
NLP000327,(3101-85) บ้านลาด - (3101-98) ป่าไม้งาม=Optic 12 Core DW = 3.895 km.
NPL000272,(3101-85) บ้านลาด - (3101-86) บ้านหัวนา=Optic 12 Core DW = 4.06 km.";
    }
else if($message == "3101-86"){
          $arrayPostData['messages'][0]['text'] = "NLP000300,(3101-86) หัวนา - (3101-102) โนนสวรรค์-หนองแก=Optic 12 Core DW = 3.02 km.
NLP000328,(3101-86) หัวนา - (3101-99) ดอนหัน=Optic 12 Core DW = 4 km.
NPL000272,(3101-85) บ้านลาด - (3101-86) บ้านหัวนา=Optic 12 Core DW = 4.06 km.";
    }
else if($message == "3101-87"){
        $arrayPostData['messages'][0]['text'] = "NLP000324,(3101-63) บกโนนเรียง2 - (3101-87) โนนสูง=12 Core= 4.377 km.";
    }
else if($message == "3101-88"){
        $arrayPostData['messages'][0]['text'] = "NLP000325,(3101-48) บ้านเหล่าใต้ - (3101-88) สุขเกษม=12 Core= 9.6 km.";
    }
else if($message == "3101-89"){
          $arrayPostData['messages'][0]['text'] = "NLP000313,(3101-89) ศรีสุข - (3101-137) ต.บ้านพร้าว นาล้อม=Optic 12 Core DW = 1.05 km.
NPL000183,(3101-63) บกโนนเรียง2 - (3101-89) บ้านศรีสุข=Optic 12 Core DW = 3.443 km.";
    }
else if($message == "3101-90"){
        $arrayPostData['messages'][0]['text'] = "NLP000326,(3101-56) บ้านบกโนนเรียง - (3101-90) พันดอน=Optic 12 Core DW = 2.702 km.";
    }
else if($message == "3101-91"){
          $arrayPostData['messages'][0]['text'] = "NPL000213,(3101-68) บ้านดินทรายอ่อน - (3101-91) บ้านหนองแสงเหนือ=12 Core= 3.22 km.
NPL000258,(3101-91) บ้านหนองแสงเหนือ - (3101-92) บ้านนาล้อม=Optic 12 Core DW = 0.977 km.
NPL000280,(3101-91) บ้านหนองแสงเหนือ - (3101-92) บ้านนาล้อม=Optic 12 Core DW = 0.977 km.";
    }
else if($message == "3101-92"){
          $arrayPostData['messages'][0]['text'] = "NPL000258,(3101-91) บ้านหนองแสงเหนือ - (3101-92) บ้านนาล้อม=Optic 12 Core DW = 0.977 km.
NPL000280,(3101-91) บ้านหนองแสงเหนือ - (3101-92) บ้านนาล้อม=Optic 12 Core DW = 0.977 km.";
    }
else if($message == "3101-93"){
        $arrayPostData['messages'][0]['text'] = "NPL000270,(3101-84) บ้านโคกกลาง - (3101-93) บ้านบุ่งบก=Optic 12 Core DW = 2.299 km.";
    }
else if($message == "3101-94"){
          $arrayPostData['messages'][0]['text'] = "NLP000323,(3101-94) ห้วยหามต่าง - (3101-85) บ้านลาด=Optic 12 Core DW = 2.72 km.
NPL000267,(3101-84) บ้านโคกกลาง - (3101-94) บ้านห้วยหามต่าง=Optic 12 Core DW = 2.83 km.";
    }
else if($message == "3101-95"){
          $arrayPostData['messages'][0]['text'] = "NPL000268,(3101-95) บ้านโคกป่ากุง - (3101-97) บ้านโนนนาดี=Optic 12 Core DW = 2.802 km.
NPL000271,(3101-96) บ้านโคกน้ำเกลี้ยง - (3101-95) บ้านโคกป่ากุง=Optic 12 Core DW = 1.472 km.";
    }
else if($message == "3101-96"){
          $arrayPostData['messages'][0]['text'] = "NPL000269,(3104-69) บ้านหนองทุ่งมน - (3101-96) บ้านโคกน้ำเกลี้ยง=Optic 12 Core DW = 4.39 km.
NPL000271,(3101-96) บ้านโคกน้ำเกลี้ยง - (3101-95) บ้านโคกป่ากุง=Optic 12 Core DW = 1.472 km.";
    }
else if($message == "3101-97"){
        $arrayPostData['messages'][0]['text'] = "NPL000268,(3101-95) บ้านโคกป่ากุง - (3101-97) บ้านโนนนาดี=Optic 12 Core DW = 2.802 km.";
    }
else if($message == "3101-98"){
        $arrayPostData['messages'][0]['text'] = "NLP000327,(3101-85) บ้านลาด - (3101-98) ป่าไม้งาม=Optic 12 Core DW = 3.895 km.";
    }
else if($message == "3101-99"){
        $arrayPostData['messages'][0]['text'] = "NLP000328,(3101-86) หัวนา - (3101-99) ดอนหัน=Optic 12 Core DW = 4 km.";
    }
else if($message == "3102-101"){
          $arrayPostData['messages'][0]['text'] = "NLP000329,(3101-65) กุดผึ้ง - (3102-101) ต.กุดผึ้ง หินยกยูง=Optic 12 Core DW = 2.32 km.
NLP000330,(3102-101) หินยกยูง - (3102-102) ต.กุดผึ้ง นาคำน้อย=Optic 12 Core DW = 2.685 km.";
    }
else if($message == "3102-102"){
          $arrayPostData['messages'][0]['text'] = "NLP000330,(3102-101) หินยกยูง - (3102-102) ต.กุดผึ้ง นาคำน้อย=Optic 12 Core DW = 2.685 km.
NLP000355,(3102-102) ต.กุดผึ้ง นาคำน้อย - (3102-143) ต.สุวรรณคูหา ทรายทอง=Optic 12 Core DW = 2.14 km.";
    }
else if($message == "3102-104"){
        $arrayPostData['messages'][0]['text'] = "NPL000279,(3102-80) บ้านโนนป่าหว้าน - (3102-104) บ้านเชียงฮาย=Optic 12 Core DW = 2 km.";
    }
else if($message == "3102-105"){
          $arrayPostData['messages'][0]['text'] = "NLP000331,(SJ) ME สุวรรณคูหา-ME น้ำโสม - (3102-105) ต.ดงมะไฟ โนนมีชัย=Optic 12 Core DW = 0.3 km.
NLP000332,(3102-105) ต.ดงมะไฟ โนนมีชัย - (3102-106) ต.ดงมะไฟ นาเจริญ=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3102-106"){
        $arrayPostData['messages'][0]['text'] = "NLP000332,(3102-105) ต.ดงมะไฟ โนนมีชัย - (3102-106) ต.ดงมะไฟ นาเจริญ=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3102-109"){
        $arrayPostData['messages'][0]['text'] = "NLP000333,(3102-111) ต.ดงมะไฟ โชคชัย - (3102-109) ต.ดงมะไฟ ผาซ่อน=Optic 12 Core DW = 1.264 km.";
    }
else if($message == "3102-111"){
          $arrayPostData['messages'][0]['text'] = "NLP000333,(3102-111) ต.ดงมะไฟ โชคชัย - (3102-109) ต.ดงมะไฟ ผาซ่อน=Optic 12 Core DW = 1.264 km.
NLP000334,(3102-87) ต.บ้านโคก บ้านโคก - (3102-111) ต.ดงมะไฟ โชคชัย=12 Core= 6.873 km.";
    }
else if($message == "3102-112"){
        $arrayPostData['messages'][0]['text'] = "NLP000335,(SJ) ME สุวรรณคูหา-ME นากลาง - (3102-112) ต.นาด่าน นาด่าน=Optic 12 Core DW = 1.538 km.";
    }
else if($message == "3102-113"){
        $arrayPostData['messages'][0]['text'] = "NLP000336,(3109-53) กุดกระสู้1 - (3102-113) ต.นาด่าน กุดฮู=Optic 12 Core DW = 5.28 km.";
    }
else if($message == "3102-114"){
        $arrayPostData['messages'][0]['text'] = "NLP000337,(3102-73) บ้านค่ายสว่าง - (3102-114) ต.นาดี วิจิตรพัฒนา=Optic 12 Core DW = 5.1 km.";
    }
else if($message == "3102-115"){
        $arrayPostData['messages'][0]['text'] = "NLP000338,(3102-99) ต.นาดี บ้านโนนงาม - (3102-115) ต.นาดี เซิน=Optic 12 Core DW = 3.27 km.";
    }
else if($message == "3102-117"){
        $arrayPostData['messages'][0]['text'] = "NLP000339,(3102-143) ทรายทอง - (3102-117) ต.นาดี โนนสำราญ=Optic 12 Core DW = 3.9 km.";
    }
else if($message == "3102-118"){
          $arrayPostData['messages'][0]['text'] = "NLP000340,(3102-90) ต.นาสี บ้านโนนสมบูรณ์สุวรรณ - (3102-118) ต.นาสี ขาม=Optic 12 Core DW = 3.49 km.
NLP000341,(3102-118) ต.นาสี ขาม - (3102-119) ต.นาสี นานิคม=Optic 12 Core DW = 2.052 km.";
    }
else if($message == "3102-119"){
          $arrayPostData['messages'][0]['text'] = "NLP000341,(3102-118) ต.นาสี ขาม - (3102-119) ต.นาสี นานิคม=Optic 12 Core DW = 2.052 km.
NLP000342,(3102-119) ต.นาสี นานิคม - (3102-121) ต.นาสี นาสี=Optic 12 Core DW = 1.281 km.";
    }
else if($message == "3102-121"){
        $arrayPostData['messages'][0]['text'] = "NLP000342,(3102-119) ต.นาสี นานิคม - (3102-121) ต.นาสี นาสี=Optic 12 Core DW = 1.281 km.";
    }
else if($message == "3102-122"){
          $arrayPostData['messages'][0]['text'] = "NLP000343,(3102-90) ต.นาสี บ้านโนนสมบูรณ์สุวรรณ - (3102-122) ต.นาสี คูหาพัฒนา=Optic 12 Core DW = 1.35 km.
NPL000193,(3102-122) ต.นาสี คูหาพัฒนา - (3102-123) ต.นาสี พิทักษ์พัฒนา=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3102-123"){
        $arrayPostData['messages'][0]['text'] = "NPL000193,(3102-122) ต.นาสี คูหาพัฒนา - (3102-123) ต.นาสี พิทักษ์พัฒนา=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3102-124"){
        $arrayPostData['messages'][0]['text'] = "NPL000231,(SJ) SJ สุวรรณคูหา - น้ำปู่ - (3102-124) ต.นาสี ซำภูทอง=Optic 12 Core DW = 1.96 km.";
    }
else if($message == "3102-125"){
          $arrayPostData['messages'][0]['text'] = "NPL000192,(3102-125) ต.นาสี น้ำกง - (3102-126) ต.นาสี หินฮาว=Optic 12 Core DW = 1.137 km.
NPL000230,(SJ) SJ สุวรรณคูหา - น้ำปู่ - (3102-125) ต.นาสี น้ำกง=Optic 12 Core DW = 0.783 km.";
    }
else if($message == "3102-126"){
        $arrayPostData['messages'][0]['text'] = "NPL000192,(3102-125) ต.นาสี น้ำกง - (3102-126) ต.นาสี หินฮาว=Optic 12 Core DW = 1.137 km.";
    }
else if($message == "3102-128"){
          $arrayPostData['messages'][0]['text'] = "NLP000344,(3102-132) ทุ่งน้อย - (3102-128) ต.บ้านโคก กกต้อง=Optic 12 Core DW = 1.282 km.
NLP000346,(3102-128) ต.บ้านโคก กกต้อง - (3102-131) ต.บ้านโคก ดงบัง=Optic 12 Core DW = 4 km.
NLP000349,(3102-128) ต.บ้านโคก กกต้อง - (3102-134) ต.บ้านโคก โนนกกข่า=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3102-129"){
        $arrayPostData['messages'][0]['text'] = "NLP000345,(3102-87) ต.บ้านโคก บ้านโคก - (3102-129) ต.บ้านโคก โนนอุดม=Optic 12 Core DW = 3.65 km.";
    }
else if($message == "3102-131"){
          $arrayPostData['messages'][0]['text'] = "NLP000346,(3102-128) ต.บ้านโคก กกต้อง - (3102-131) ต.บ้านโคก ดงบัง=Optic 12 Core DW = 4 km.
NLP000354,(3102-131) ต.บ้านโคก ดงบัง - (3102-142) ต.สุวรรณคูหา ภูวงศ์=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3102-132"){
          $arrayPostData['messages'][0]['text'] = "NLP000344,(3102-132) ทุ่งน้อย - (3102-128) ต.บ้านโคก กกต้อง=Optic 12 Core DW = 1.282 km.
NLP000347,(3102-87) ต.บ้านโคก บ้านโคก - (3102-132) ต.บ้านโคก ทุ่งน้อย=Optic 12 Core DW = 1.71 km.";
    }
else if($message == "3102-133"){
        $arrayPostData['messages'][0]['text'] = "NLP000348,(SJ) บ้านกกต้อง-บ้านดงบัง - (3102-133) ต.บ้านโคก นาโมง=Optic 12 Core DW = 1.74 km.";
    }
else if($message == "3102-134"){
        $arrayPostData['messages'][0]['text'] = "NLP000349,(3102-128) ต.บ้านโคก กกต้อง - (3102-134) ต.บ้านโคก โนนกกข่า=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3102-135"){
        $arrayPostData['messages'][0]['text'] = "NLP000350,(SJ) บ้านโนนปอแดง-บ้านแสงอรุณ - (3102-135) ต.บ้านโคก ต่างแดน=Optic 12 Core DW = 2.339 km.";
    }
else if($message == "3102-136"){
          $arrayPostData['messages'][0]['text'] = "NLP000351,(3102-139) ต.บุญทัน น้ำโมง - (3102-136) ต.บุญทัน คลองสาริกา=Optic 12 Core DW = 5.09 km.
NLP000352,(3102-136) ต.บุญทัน คลองสาริกา - (3102-137) ต.บุญทัน โคกสาริกา=Optic 12 Core DW = 4.445 km.";
    }
else if($message == "3102-137"){
        $arrayPostData['messages'][0]['text'] = "NLP000352,(3102-136) ต.บุญทัน คลองสาริกา - (3102-137) ต.บุญทัน โคกสาริกา=Optic 12 Core DW = 4.445 km.";
    }
else if($message == "3102-139"){
          $arrayPostData['messages'][0]['text'] = "NLP000351,(3102-139) ต.บุญทัน น้ำโมง - (3102-136) ต.บุญทัน คลองสาริกา=Optic 12 Core DW = 5.09 km.
NLP000353,(3102-141) แสงอรุณ - (3102-139) ต.บุญทัน น้ำโมง=Optic 12 Core DW = 1.444 km.";
    }
else if($message == "3102-141"){
          $arrayPostData['messages'][0]['text'] = "NLP000291,(3102-86) ต.บ้านโคก บ้านโนนปอแดง - (3102-141) ต.บุญทัน แสงอรุณ=12 Core= 5.127 km.
NLP000353,(3102-141) แสงอรุณ - (3102-139) ต.บุญทัน น้ำโมง=Optic 12 Core DW = 1.444 km.";
    }
else if($message == "3102-142"){
        $arrayPostData['messages'][0]['text'] = "NLP000354,(3102-131) ต.บ้านโคก ดงบัง - (3102-142) ต.สุวรรณคูหา ภูวงศ์=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3102-143"){
          $arrayPostData['messages'][0]['text'] = "NLP000339,(3102-143) ทรายทอง - (3102-117) ต.นาดี โนนสำราญ=Optic 12 Core DW = 3.9 km.
NLP000355,(3102-102) ต.กุดผึ้ง นาคำน้อย - (3102-143) ต.สุวรรณคูหา ทรายทอง=Optic 12 Core DW = 2.14 km.";
    }
else if($message == "3102-145"){
        $arrayPostData['messages'][0]['text'] = "NLP000292,(SJ) ME สุวรรณคูหา-ME นากลาง - (3102-145) ต.กุดผึ้ง บ้านหนองเหลือง=Optic 12 Core DW = 1.17 km.";
    }
else if($message == "3102-146"){
        $arrayPostData['messages'][0]['text'] = "NLP000356,(3102-89) ต.นาสี บ้านดงยาง - (3102-146) ต.นาสี บ้านตาแหลว=Optic 12 Core DW = 0.94 km.";
    }
else if($message == "3102-64"){
          $arrayPostData['messages'][0]['text'] = "NPL000156,(3102-64) สุวรรณคูหา1 - (3102-65) สุวรรณคูหา2=Optic 12 Core DW = 1 km.
UDN000989,(3109-37) นากลาง - (3102-64) สุวรรณคูหา=12 Core= 44.556 km.
UDN000990,(3102-64) ME สุวรรณคูหา - (3004-63) ME น้ำโสม=12 Core= 32.664 km.";
    }
else if($message == "3102-65"){
        $arrayPostData['messages'][0]['text'] = "NPL000156,(3102-64) สุวรรณคูหา1 - (3102-65) สุวรรณคูหา2=Optic 12 Core DW = 1 km.";
    }
else if($message == "3102-67"){
          $arrayPostData['messages'][0]['text'] = "NLP000287,(SJ) ME สุวรรณคูหา-ME นากลาง - (3102-67) โนนชาด=Optic 12 Core DW = 1.417 km.
NPL000091,(3102-67) โนนชาด - (3102-68) หนองบัวน้อย=Optic 12 Core DW = 1.389 km.";
    }
else if($message == "3102-68"){
          $arrayPostData['messages'][0]['text'] = "NPL000091,(3102-67) โนนชาด - (3102-68) หนองบัวน้อย=Optic 12 Core DW = 1.389 km.
NPL000214,(3102-68) หนองบัวน้อย - (3102-71) บ้านนาดี=Optic 12 Core DW = 3.98 km.";
    }
else if($message == "3102-71"){
          $arrayPostData['messages'][0]['text'] = "NPL000214,(3102-68) หนองบัวน้อย - (3102-71) บ้านนาดี=Optic 12 Core DW = 3.98 km.
NPL000259,(3102-71) บ้านนาดี - (3102-73) บ้านฝายสว่าง=Optic 12 Core DW = 1.166 km.";
    }
else if($message == "3102-73"){
          $arrayPostData['messages'][0]['text'] = "NLP000337,(3102-73) บ้านค่ายสว่าง - (3102-114) ต.นาดี วิจิตรพัฒนา=Optic 12 Core DW = 5.1 km.
NPL000259,(3102-71) บ้านนาดี - (3102-73) บ้านฝายสว่าง=Optic 12 Core DW = 1.166 km.";
    }
else if($message == "3102-75"){
        $arrayPostData['messages'][0]['text'] = "NPL000215,(3109-53) กุดกระสู้1 - (3102-75) บ้านส้มป่อย=Optic 12 Core DW = 3.98 km.";
    }
else if($message == "3102-80"){
          $arrayPostData['messages'][0]['text'] = "NLP000357,(SJ) ME สุวรรณคูหา-ME นากลาง - (3102-80) ต.กุดผึ้ง บ้านโนนป่าหว้าน=Optic 12 Core DW = 2 km.
NPL000279,(3102-80) บ้านโนนป่าหว้าน - (3102-104) บ้านเชียงฮาย=Optic 12 Core DW = 2 km.";
    }
else if($message == "3102-86"){
          $arrayPostData['messages'][0]['text'] = "NLP000291,(3102-86) ต.บ้านโคก บ้านโนนปอแดง - (3102-141) ต.บุญทัน แสงอรุณ=12 Core= 5.127 km.
NPL000283,(3102-86) บ้านปอแดง - (3102-87) บ้านโคก=Optic 12 Core DW = 1.883 km.
NPL000284,(3102-86) บ้านโนนปอแดง - (3109-81) บ้านดงสวรรค์=Optic 12 Core DW = 10.97 km.";
    }
else if($message == "3102-87"){
          $arrayPostData['messages'][0]['text'] = "NLP000334,(3102-87) ต.บ้านโคก บ้านโคก - (3102-111) ต.ดงมะไฟ โชคชัย=12 Core= 6.873 km.
NLP000345,(3102-87) ต.บ้านโคก บ้านโคก - (3102-129) ต.บ้านโคก โนนอุดม=Optic 12 Core DW = 3.65 km.
NLP000347,(3102-87) ต.บ้านโคก บ้านโคก - (3102-132) ต.บ้านโคก ทุ่งน้อย=Optic 12 Core DW = 1.71 km.
NPL000283,(3102-86) บ้านปอแดง - (3102-87) บ้านโคก=Optic 12 Core DW = 1.883 km.";
    }
else if($message == "3102-89"){
          $arrayPostData['messages'][0]['text'] = "NLP000356,(3102-89) ต.นาสี บ้านดงยาง - (3102-146) ต.นาสี บ้านตาแหลว=Optic 12 Core DW = 0.94 km.
NLP000358,(SJ) ME สุวรรณคูหา-ME น้ำโสม - (3102-89) ต.นาสี บ้านดงยาง=Optic 12 Core DW = 0.634 km.
NPL000282,(3102-89) บ้านดงยาง - (3102-90) บ้านโนนสมบูรณ์=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3102-90"){
          $arrayPostData['messages'][0]['text'] = "NLP000340,(3102-90) ต.นาสี บ้านโนนสมบูรณ์สุวรรณ - (3102-118) ต.นาสี ขาม=Optic 12 Core DW = 3.49 km.
NLP000343,(3102-90) ต.นาสี บ้านโนนสมบูรณ์สุวรรณ - (3102-122) ต.นาสี คูหาพัฒนา=Optic 12 Core DW = 1.35 km.
NPL000282,(3102-89) บ้านดงยาง - (3102-90) บ้านโนนสมบูรณ์=Optic 12 Core DW = 2.56 km.
UDN001371,(3102-90) ต.นาสี โนนสมบูรณ์สุวรรณ - (3004-85) ต.บ้านหยวก บ้านน้ำปู่=12 Core= 16.851 km.";
    }
else if($message == "3102-91"){
        $arrayPostData['messages'][0]['text'] = "NLP000359,(SJ) ME สุวรรณคูหา-ME น้ำโสม - (3102-91) ต.ดงมะไฟ วังหินซา=Optic 12 Core DW = 0.247 km.";
    }
else if($message == "3102-93"){
        $arrayPostData['messages'][0]['text'] = "NLP000360,(SJ) ME สุวรรณคูหา-ME น้ำโสม - (3102-93) ต.ดงมะไฟ บ้านดงมะไฟ=Optic 12 Core DW = 0.212 km.";
    }
else if($message == "3102-99"){
        $arrayPostData['messages'][0]['text'] = "NLP000338,(3102-99) ต.นาดี บ้านโนนงาม - (3102-115) ต.นาดี เซิน=Optic 12 Core DW = 3.27 km.";
    }
else if($message == "3103-101"){
        $arrayPostData['messages'][0]['text'] = "NLP000361,(SJ) โนนสัง1-หนองหัววัว - (3103-101) ต.นิคมพัฒนา นิคมทองหลาง=Optic 12 Core DW = 1.22 km.";
    }
else if($message == "3103-102"){
        $arrayPostData['messages'][0]['text'] = "NPL000210,(3103-115) หนองแวงงิ้วตาก - (3103-102) บ้านโสกม่วง=Optic 12 Core DW = 2.101 km.";
    }
else if($message == "3103-103"){
        $arrayPostData['messages'][0]['text'] = "NPL000206,(3103-115) หนองแวงงิ้วตาก - (3103-103) บ้างโสกแดง=Optic 12 Core DW = 3.41 km.";
    }
else if($message == "3103-106"){
        $arrayPostData['messages'][0]['text'] = "NLP000362,(3103-107) โคกม่วงชุม - (3103-106) ต.โนนเมือง โนนสว่าง=Optic 12 Core DW = 2.84 km.";
    }
else if($message == "3103-107"){
        $arrayPostData['messages'][0]['text'] = "NLP000362,(3103-107) โคกม่วงชุม - (3103-106) ต.โนนเมือง โนนสว่าง=Optic 12 Core DW = 2.84 km.";
    }
else if($message == "3103-108"){
        $arrayPostData['messages'][0]['text'] = "NLP000363,(3103-109) ภูศรีทอง - (3103-108) ต.โนนเมือง ห้วยบง=Optic 12 Core DW = 1.245 km.";
    }
else if($message == "3103-109"){
          $arrayPostData['messages'][0]['text'] = "NLP000363,(3103-109) ภูศรีทอง - (3103-108) ต.โนนเมือง ห้วยบง=Optic 12 Core DW = 1.245 km.
NLP000364,(3103-84) ข่าน้อย - (3103-109) ต.โนนเมือง ภูศรีทอง=Optic 12 Core DW = 2.01 km.";
    }
else if($message == "3103-112"){
        $arrayPostData['messages'][0]['text'] = "NPL000207,(3103-65) ME โนนสัง - (3103-112) บ้านศรีสำโรง=Optic 12 Core DW = 1.63 km.";
    }
else if($message == "3103-113"){
          $arrayPostData['messages'][0]['text'] = "NPL000205,(3103-113) ต.โนนสัง หนองแวงพัฒนา - (3103-115) หนองแวงงิ้วตาก=Optic 12 Core DW = 1.56 km.
NPL000209,(3103-113) ต.โนนสัง หนองแวงพัฒนา - (3103-114) ต.โนนสัง ฝายหิน=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3103-114"){
          $arrayPostData['messages'][0]['text'] = "NKI000397,(3103-114) บ้านฝายหิน - (3103-144) บ้านโคกป่ากุง=Optic 12 Core DW = 2.96 km.
NPL000209,(3103-113) ต.โนนสัง หนองแวงพัฒนา - (3103-114) ต.โนนสัง ฝายหิน=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3103-115"){
          $arrayPostData['messages'][0]['text'] = "NPL000205,(3103-113) ต.โนนสัง หนองแวงพัฒนา - (3103-115) หนองแวงงิ้วตาก=Optic 12 Core DW = 1.56 km.
NPL000206,(3103-115) หนองแวงงิ้วตาก - (3103-103) บ้างโสกแดง=Optic 12 Core DW = 3.41 km.
NPL000210,(3103-115) หนองแวงงิ้วตาก - (3103-102) บ้านโสกม่วง=Optic 12 Core DW = 2.101 km.";
    }
else if($message == "3103-116"){
          $arrayPostData['messages'][0]['text'] = "NLP000365,(3103-118) ค้อ - (3103-116) ต.บ้านค้อ หนองทุ่ม=Optic 12 Core DW = 2.95 km.
NLP000366,(3103-116) หนองทุ่ม - (3103-117) ต.บ้านค้อ กุดฉิม=Optic 12 Core DW = 1.875 km.";
    }
else if($message == "3103-117"){
        $arrayPostData['messages'][0]['text'] = "NLP000366,(3103-116) หนองทุ่ม - (3103-117) ต.บ้านค้อ กุดฉิม=Optic 12 Core DW = 1.875 km.";
    }
else if($message == "3103-118"){
          $arrayPostData['messages'][0]['text'] = "NLP000365,(3103-118) ค้อ - (3103-116) ต.บ้านค้อ หนองทุ่ม=Optic 12 Core DW = 2.95 km.
NPL000208,(3103-119) ต.บ้านค้อ หนองงูเหลือม - (3103-118) ต.บ้านค้อ ค้อ=Optic 12 Core DW = 1.91 km.";
    }
else if($message == "3103-119"){
          $arrayPostData['messages'][0]['text'] = "NLP000367,(3103-121) กุดแห่ - (3103-119) ต.บ้านค้อ หนองงูเหลือม=Optic 12 Core DW = 2.4 km.
NPL000208,(3103-119) ต.บ้านค้อ หนองงูเหลือม - (3103-118) ต.บ้านค้อ ค้อ=Optic 12 Core DW = 1.91 km.";
    }
else if($message == "3103-121"){
          $arrayPostData['messages'][0]['text'] = "NLP000367,(3103-121) กุดแห่ - (3103-119) ต.บ้านค้อ หนองงูเหลือม=Optic 12 Core DW = 2.4 km.
NPL000204,(3103-77) ต.กุดดู่ หัวขัว - (3103-121) ต.บ้านค้อ กุดแห่=Optic 12 Core DW = 2.01 km.";
    }
else if($message == "3103-124"){
          $arrayPostData['messages'][0]['text'] = "NLP000368,(3103-70) กุดดู่ - (3103-124) ต.บ้านถิ่น กุดกวางสร้อย=Optic 12 Core DW = 5.47 km.
NLP000369,(3103-124) ต.บ้านถิ่น กุดกวางสร้อย - (3103-125) ต.บ้านถิ่น ถิ่น=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3103-125"){
          $arrayPostData['messages'][0]['text'] = "NLP000369,(3103-124) ต.บ้านถิ่น กุดกวางสร้อย - (3103-125) ต.บ้านถิ่น ถิ่น=Optic 12 Core DW = 2.06 km.
NLP000370,(3103-125) ต.บ้านถิ่น ถิ่น - (3103-127) ต.บ้านถิ่น หนองเล้าข้าว=Optic 12 Core DW = 2.15 km.";
    }
else if($message == "3103-127"){
        $arrayPostData['messages'][0]['text'] = "NLP000370,(3103-125) ต.บ้านถิ่น ถิ่น - (3103-127) ต.บ้านถิ่น หนองเล้าข้าว=Optic 12 Core DW = 2.15 km.";
    }
else if($message == "3103-128"){
          $arrayPostData['messages'][0]['text'] = "NLP000371,(SJ) ME หนองบัวลำภู-ME โนนสัง - (3103-128) ต.บ้านถิ่น โสกก้านเหลือง=Optic 12 Core DW = 1.35 km.
NLP000372,(3103-128) ต.บ้านถิ่น โสกก้านเหลือง - (3103-129) ต.บ้านถิ่น โนนสูง=Optic 12 Core DW = 3.25 km.";
    }
else if($message == "3103-129"){
          $arrayPostData['messages'][0]['text'] = "NLP000372,(3103-128) ต.บ้านถิ่น โสกก้านเหลือง - (3103-129) ต.บ้านถิ่น โนนสูง=Optic 12 Core DW = 3.25 km.
NLP000377,(3103-129) ต.บ้านถิ่น โนนสูง - (3103-143) ต.ปางกู่ โป่งสัง=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3103-132"){
        $arrayPostData['messages'][0]['text'] = "NLP000374,(3103-132) หินสิ่ว - (3103-135) ต.ปางกู่ โสกแคน=Optic 12 Core DW = 3.47 km.";
    }
else if($message == "3103-133"){
          $arrayPostData['messages'][0]['text'] = "NLP000373,(3103-143) โป่งสัง - (3103-133) ต.ปางกู่ หนองจาน=Optic 12 Core DW = 2.28 km.
NLP000376,(3103-133) ต.ปางกู่ หนองจาน - (3103-142) ต.ปางกู่ หนองบัวเงิน=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3103-135"){
        $arrayPostData['messages'][0]['text'] = "NLP000374,(3103-132) หินสิ่ว - (3103-135) ต.ปางกู่ โสกแคน=Optic 12 Core DW = 3.47 km.";
    }
else if($message == "3103-138"){
        $arrayPostData['messages'][0]['text'] = "NLP000375,(3103-142) หนองบัวเงิน - (3103-138) ต.ปางกู่ ศรีวิไล=Optic 12 Core DW = 4.65 km.";
    }
else if($message == "3103-142"){
          $arrayPostData['messages'][0]['text'] = "NLP000375,(3103-142) หนองบัวเงิน - (3103-138) ต.ปางกู่ ศรีวิไล=Optic 12 Core DW = 4.65 km.
NLP000376,(3103-133) ต.ปางกู่ หนองจาน - (3103-142) ต.ปางกู่ หนองบัวเงิน=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3103-143"){
          $arrayPostData['messages'][0]['text'] = "NLP000373,(3103-143) โป่งสัง - (3103-133) ต.ปางกู่ หนองจาน=Optic 12 Core DW = 2.28 km.
NLP000377,(3103-129) ต.บ้านถิ่น โนนสูง - (3103-143) ต.ปางกู่ โป่งสัง=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3103-144"){
          $arrayPostData['messages'][0]['text'] = "NKI000397,(3103-114) บ้านฝายหิน - (3103-144) บ้านโคกป่ากุง=Optic 12 Core DW = 2.96 km.
NLP000378,(3103-144) โคกป่ากุง - (3103-147) ต.หนองเรือ หนองโน=Optic 12 Core DW = 1.341 km.";
    }
else if($message == "3103-147"){
        $arrayPostData['messages'][0]['text'] = "NLP000378,(3103-144) โคกป่ากุง - (3103-147) ต.หนองเรือ หนองโน=Optic 12 Core DW = 1.341 km.";
    }
else if($message == "3103-148"){
        $arrayPostData['messages'][0]['text'] = "NLP000379,(SJ) ME ศรีบุญเรือง-ME โนนสัง - (3103-148) ต.หนองเรือ หนองกุงคำไฮ=Optic 12 Core DW = 1.73 km.";
    }
else if($message == "3103-152"){
        $arrayPostData['messages'][0]['text'] = "NLP000380,(3103-69) บ้านหนองแวง - (3103-152) บ้านหนองแวง 2=Optic 12 Core DW = 0.891 km.";
    }
else if($message == "3103-31"){
          $arrayPostData['messages'][0]['text'] = "NLP000051,(3103-31) ME โนนสัง - (3103-66) โนนสัง2=Optic 12 Core DW = 2.08 km.
NPL000054,(ME) ME โนนสัง - (3101-73) บ้านโสกจาน=Optic 12 Core DW = 0.28 km.
NPL000097,(ME) ME โนนสัง - (3103-73) โสกจาน=Optic 12 Core DW = 0.3 km.
NPL000130,(3104-37) ME ศรีบุญเรือง - (3103-31) ME โนนสัง=12 Core= 45 km.
NPL000134,(3103-31) ME โนนสัง - (3101-54) ME หนองบัวลำภู=12 Core= 43.6 km.";
    }
else if($message == "3103-33"){
          $arrayPostData['messages'][0]['text'] = "NLP000422,(3103-33) บ้านสร้างเสี้ยน - (3104-146) ต.หนองบัวใต้ บุ่งแก้ว=Optic 12 Core DW = 2.25 km.
NLP000423,(3103-33) บ้านสร้างเสี้ยน - (3104-147) ต.หนองบัวใต้ ซัมเบ็ญ=Optic 12 Core DW = 1.185 km.
NPL000063,(3103-33) สร้างเสี้ยน - (3104-44) หนองบัวใต้=Optic 12 Core DW = 2.46 km.
NPL000127,(3103-61) ตำบลโคกม่วง - (3103-33) บ้านสร้างเสี้ยน=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3103-54"){
        $arrayPostData['messages'][0]['text'] = "NPL000075,(3103-54) โนนม่วง - (3103-62) โนนเมือง=12 Core= 5.466 km.";
    }
else if($message == "3103-59"){
          $arrayPostData['messages'][0]['text'] = "NLP000302,(3103-59) นามะเฟือง - (3101-106) นาอ่าง=12 Core= 3.448 km.
NLP000307,(3103-59) นามะเฟือง - (3101-124) ต.นามะเฟือง โนนสมบูรณ์=Optic 12 Core DW = 4 km.
NPL000093,(SJ) SJ หนองบัวลำภู-โนนสัง - (3103-59) นามะเฟือง=Optic 12 Core DW = 2 km.
NPL000189,(3103-59) บ้านนามะเฟือง - (3101-112) บ้านโนนหวาย=Optic 12 Core DW = 2.429 km.";
    }
else if($message == "3103-61"){
          $arrayPostData['messages'][0]['text'] = "NPL000127,(3103-61) ตำบลโคกม่วง - (3103-33) บ้านสร้างเสี้ยน=Optic 12 Core DW = 2.6 km.
NPL000137,(SJ) SJ ศรีบุญเรือง-โนนสัง - (3103-61) ตำบลโคกม่วง=Optic 12 Core DW = 1.605 km.";
    }
else if($message == "3103-62"){
          $arrayPostData['messages'][0]['text'] = "NPL000075,(3103-54) โนนม่วง - (3103-62) โนนเมือง=12 Core= 5.466 km.
NPL000131,(3103-63) บ้านหนองกุงจารย์ผาง - (3103-62) โนนเมือง=Optic 12 Core DW = 5.4 km.";
    }
else if($message == "3103-63"){
          $arrayPostData['messages'][0]['text'] = "NPL000095,(3103-64) บ้านท่าลาด(เหมือดแอ่) - (3103-63) บ้านหนองกุงจารย์ผาง=Optic 12 Core DW = 2.99 km.
NPL000131,(3103-63) บ้านหนองกุงจารย์ผาง - (3103-62) โนนเมือง=Optic 12 Core DW = 5.4 km.";
    }
else if($message == "3103-64"){
          $arrayPostData['messages'][0]['text'] = "NLP000052,(SJ) SJ ศรีบุญเรือง-โนนสัง - (3103-64) ท่าลาด(เหมือดแอ่)=Optic 12 Core DW = 1.56 km.
NPL000095,(3103-64) บ้านท่าลาด(เหมือดแอ่) - (3103-63) บ้านหนองกุงจารย์ผาง=Optic 12 Core DW = 2.99 km.
NPL000125,(3103-64) บ้านท่าลาด(เหมือดแอ่) - (3103-68) ท่าลาด=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3103-65"){
          $arrayPostData['messages'][0]['text'] = "NLP000050,(3103-66) โนนสัง2 - (3103-65) โนนสัง1=Optic 12 Core DW = 2.15 km.
NLP000053,(3103-65) โนนสัง1 - (3103-71) โคกกลางโนนสัง=Optic 12 Core DW = 3.522 km.
NPL000207,(3103-65) ME โนนสัง - (3103-112) บ้านศรีสำโรง=Optic 12 Core DW = 1.63 km.
UDN000988,(3101-36) หนองบัวลำภู - (3103-65) โนนสัง=12 Core= 45.536 km.";
    }
else if($message == "3103-66"){
          $arrayPostData['messages'][0]['text'] = "NLP000050,(3103-66) โนนสัง2 - (3103-65) โนนสัง1=Optic 12 Core DW = 2.15 km.
NLP000051,(3103-31) ME โนนสัง - (3103-66) โนนสัง2=Optic 12 Core DW = 2.08 km.";
    }
else if($message == "3103-68"){
        $arrayPostData['messages'][0]['text'] = "NPL000125,(3103-64) บ้านท่าลาด(เหมือดแอ่) - (3103-68) ท่าลาด=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3103-69"){
          $arrayPostData['messages'][0]['text'] = "NLP000380,(3103-69) บ้านหนองแวง - (3103-152) บ้านหนองแวง 2=Optic 12 Core DW = 0.891 km.
NLP000382,(3103-69) บ้านหนองแวง - (3103-76) ต.กุดดู่ หนองเม็ก=Optic 12 Core DW = 2.65 km.
NPL000133,(3103-70) กุดดู่ - (3103-69) บ้านหนองแวง=Optic 12 Core DW = 4.9 km.";
    }
else if($message == "3103-70"){
          $arrayPostData['messages'][0]['text'] = "NLP000288,(SJ) ME หนองบัวลำภู-ME โนนสัง - (3103-70) กุดดู่=Optic 12 Core DW = 1.4 km.
NLP000368,(3103-70) กุดดู่ - (3103-124) ต.บ้านถิ่น กุดกวางสร้อย=Optic 12 Core DW = 5.47 km.
NPL000133,(3103-70) กุดดู่ - (3103-69) บ้านหนองแวง=Optic 12 Core DW = 4.9 km.";
    }
else if($message == "3103-71"){
          $arrayPostData['messages'][0]['text'] = "NLP000053,(3103-65) โนนสัง1 - (3103-71) โคกกลางโนนสัง=Optic 12 Core DW = 3.522 km.
NLP000389,(3103-71) โคกกลางโนนสัง - (3103-92) ต.โคกใหญ่ โนนปอแดง=Optic 12 Core DW = 4 km.";
    }
else if($message == "3103-73"){
        $arrayPostData['messages'][0]['text'] = "NPL000097,(ME) ME โนนสัง - (3103-73) โสกจาน=Optic 12 Core DW = 0.3 km.";
    }
else if($message == "3103-74"){
        $arrayPostData['messages'][0]['text'] = "NLP000381,(3103-74) ตาดไฮ - (3103-75) หนองปิง=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3103-75"){
          $arrayPostData['messages'][0]['text'] = "NLP000381,(3103-74) ตาดไฮ - (3103-75) หนองปิง=Optic 12 Core DW = 2.5 km.
NLP000385,(3103-75) หนองปิง - (3103-85) ต.โคกม่วง บุ่งบก=Optic 12 Core DW = 1.45 km.";
    }
else if($message == "3103-76"){
        $arrayPostData['messages'][0]['text'] = "NLP000382,(3103-69) บ้านหนองแวง - (3103-76) ต.กุดดู่ หนองเม็ก=Optic 12 Core DW = 2.65 km.";
    }
else if($message == "3103-77"){
          $arrayPostData['messages'][0]['text'] = "NLP000383,(SJ) ME หนองบัวลำภู-ME โนนสัง - (3103-77) ต.กุดดู่ หัวขัว=Optic 12 Core DW = 0.518 km.
NPL000204,(3103-77) ต.กุดดู่ หัวขัว - (3103-121) ต.บ้านค้อ กุดแห่=Optic 12 Core DW = 2.01 km.";
    }
else if($message == "3103-79"){
        $arrayPostData['messages'][0]['text'] = "NLP000384,(SJ) ME หนองบัวลำภู-ME โนนสัง - (3103-79) ต.กุดดู่ หนองโดน=Optic 12 Core DW = 3.45 km.";
    }
else if($message == "3103-84"){
        $arrayPostData['messages'][0]['text'] = "NLP000364,(3103-84) ข่าน้อย - (3103-109) ต.โนนเมือง ภูศรีทอง=Optic 12 Core DW = 2.01 km.";
    }
else if($message == "3103-85"){
        $arrayPostData['messages'][0]['text'] = "NLP000385,(3103-75) หนองปิง - (3103-85) ต.โคกม่วง บุ่งบก=Optic 12 Core DW = 1.45 km.";
    }
else if($message == "3103-86"){
        $arrayPostData['messages'][0]['text'] = "NLP000386,(3103-87) โคกใหญ่ - (3103-86) ต.โคกใหญ่ โนนยาว=Optic 12 Core DW = 3.22 km.";
    }
else if($message == "3103-87"){
        $arrayPostData['messages'][0]['text'] = "NLP000386,(3103-87) โคกใหญ่ - (3103-86) ต.โคกใหญ่ โนนยาว=Optic 12 Core DW = 3.22 km.";
    }
else if($message == "3103-90"){
          $arrayPostData['messages'][0]['text'] = "NLP000387,(3103-92) โนนปอแดง - (3103-90) หนองตานา=Optic 12 Core DW = 1.45 km.
NLP000388,(3103-90) หนองตานา - (3103-91) ต.โคกใหญ่ หนองแสบง=Optic 12 Core DW = 1.59 km.";
    }
else if($message == "3103-91"){
        $arrayPostData['messages'][0]['text'] = "NLP000388,(3103-90) หนองตานา - (3103-91) ต.โคกใหญ่ หนองแสบง=Optic 12 Core DW = 1.59 km.";
    }
else if($message == "3103-92"){
          $arrayPostData['messages'][0]['text'] = "NLP000387,(3103-92) โนนปอแดง - (3103-90) หนองตานา=Optic 12 Core DW = 1.45 km.
NLP000389,(3103-71) โคกกลางโนนสัง - (3103-92) ต.โคกใหญ่ โนนปอแดง=Optic 12 Core DW = 4 km.";
    }
else if($message == "3103-93"){
        $arrayPostData['messages'][0]['text'] = "NLP000390,(3103-96) โคกสะอาด - (3103-93) ต.นิคมพัฒนา โคกเจริญ=Optic 12 Core DW = 2.45 km.";
    }
else if($message == "3103-96"){
          $arrayPostData['messages'][0]['text'] = "NLP000390,(3103-96) โคกสะอาด - (3103-93) ต.นิคมพัฒนา โคกเจริญ=Optic 12 Core DW = 2.45 km.
NLP000391,(3103-98) หนองหัววัว - (3103-96) ต.นิคมพัฒนา โคกสะอาด=Optic 12 Core DW = 2.55 km.";
    }
else if($message == "3103-98"){
        $arrayPostData['messages'][0]['text'] = "NLP000391,(3103-98) หนองหัววัว - (3103-96) ต.นิคมพัฒนา โคกสะอาด=Optic 12 Core DW = 2.55 km.";
    }
else if($message == "3104-101"){
          $arrayPostData['messages'][0]['text'] = "NLP000397,(3104-101) คึมน้ำเกลี้ยง - (3104-108) ต.โนนสะอาด ศรีสง่า=Optic 12 Core DW = 4.1 km.
NPL000217,(3104-101) บ้านคึมน้ำเกลี้ยง - (3104-99) บ้านวังโพน=Optic 12 Core DW = 2.58 km.
NPL000219,(3104-97) บ้านวังคูณ - (3104-101) บ้านคึมน้ำเกลี้ยง=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3104-102"){
        $arrayPostData['messages'][0]['text'] = "NLP000392,(3104-108) ศรีสง่า - (3104-102) ต.โนนสะอาด ศรีภูทอง=12 Core= 6.25 km.";
    }
else if($message == "3104-103"){
        $arrayPostData['messages'][0]['text'] = "NLP000393,(3104-104) โนนนาใหม่ - (3104-103) ต.โนนสะอาด บ้านโนนสะอาด=Optic 12 Core DW = 4.27 km.";
    }
else if($message == "3104-104"){
          $arrayPostData['messages'][0]['text'] = "NLP000393,(3104-104) โนนนาใหม่ - (3104-103) ต.โนนสะอาด บ้านโนนสะอาด=Optic 12 Core DW = 4.27 km.
NLP000394,(3104-105) โนนคูณ - (3104-104) ต.โนนสะอาด โนนนาใหม่=Optic 12 Core DW = 1.54 km.";
    }
else if($message == "3104-105"){
          $arrayPostData['messages'][0]['text'] = "NLP000394,(3104-105) โนนคูณ - (3104-104) ต.โนนสะอาด โนนนาใหม่=Optic 12 Core DW = 1.54 km.
NLP000395,(3104-106) โต่งโต้น - (3104-105) ต.โนนสะอาด โนนคูณ=Optic 12 Core DW = 2.955 km.";
    }
else if($message == "3104-106"){
          $arrayPostData['messages'][0]['text'] = "NLP000395,(3104-106) โต่งโต้น - (3104-105) ต.โนนสะอาด โนนคูณ=Optic 12 Core DW = 2.955 km.
NLP000396,(3104-66) ม่วงทอง - (3104-106) ต.โนนสะอาด โต่งโต้น=Optic 12 Core DW = 2.575 km.";
    }
else if($message == "3104-108"){
          $arrayPostData['messages'][0]['text'] = "NLP000392,(3104-108) ศรีสง่า - (3104-102) ต.โนนสะอาด ศรีภูทอง=12 Core= 6.25 km.
NLP000397,(3104-101) คึมน้ำเกลี้ยง - (3104-108) ต.โนนสะอาด ศรีสง่า=Optic 12 Core DW = 4.1 km.";
    }
else if($message == "3104-109"){
        $arrayPostData['messages'][0]['text'] = "NLP000398,(3104-48) โนนสงวน - (3104-109) ต.โนนม่วง โนนหว้าทอง=Optic 12 Core DW = 5.665 km.";
    }
else if($message == "3104-113"){
        $arrayPostData['messages'][0]['text'] = "NLP000399,(3104-46) รร.ศรีบุญเรืองวิทยาคาร - (3104-113) ต.เมืองใหม่ มอใต้=Optic 12 Core DW = 2.552 km.";
    }
else if($message == "3104-114"){
        $arrayPostData['messages'][0]['text'] = "NLP000400,(3104-50) ชมพูทอง - (3104-114) ต.เมืองใหม่ ห้วยไผ่=Optic 12 Core DW = 4.225 km.";
    }
else if($message == "3104-115"){
        $arrayPostData['messages'][0]['text'] = "NLP000401,(3104-56) ป่าคา - (3104-115) บ้านดอนเล้า=Optic 12 Core DW = 1.75 km.";
    }
else if($message == "3104-119"){
        $arrayPostData['messages'][0]['text'] = "NLP000402,(3104-123) นาฝาย - (3104-119) หนองแตง=Optic 12 Core DW = 3.34 km.";
    }
else if($message == "3104-121"){
        $arrayPostData['messages'][0]['text'] = "NLP000403,(3104-123) นาฝาย - (3104-121) ต.ศรีบุญเรือง จอมทอง=Optic 12 Core DW = 1.73 km.";
    }
else if($message == "3104-123"){
          $arrayPostData['messages'][0]['text'] = "NLP000402,(3104-123) นาฝาย - (3104-119) หนองแตง=Optic 12 Core DW = 3.34 km.
NLP000403,(3104-123) นาฝาย - (3104-121) ต.ศรีบุญเรือง จอมทอง=Optic 12 Core DW = 1.73 km.
NLP000404,(3104-41) บ้านศรีวิชัย - (3104-123) ต.ศรีบุญเรือง นาฝาย=Optic 12 Core DW = 3.9 km.";
    }
else if($message == "3104-124"){
          $arrayPostData['messages'][0]['text'] = "NLP000405,(SJ) ME ศรีบุญเรือง-ME โนนสัง - (3104-124) ต.ศรีบุญเรือง ห้วยหว้า=Optic 12 Core DW = 0.87 km.
NLP000406,(3104-124) ต.ศรีบุญเรือง ห้วยหว้า - (3104-125) ต.ศรีบุญเรือง นาแพง=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3104-125"){
        $arrayPostData['messages'][0]['text'] = "NLP000406,(3104-124) ต.ศรีบุญเรือง ห้วยหว้า - (3104-125) ต.ศรีบุญเรือง นาแพง=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3104-126"){
        $arrayPostData['messages'][0]['text'] = "NLP000407,(SJ) บ้านศรีวิชัย-บ้านโคกล่าม - (3104-126) ต.ศรีบุญเรือง หนองบัวน้อย=Optic 12 Core DW = 1.94 km.";
    }
else if($message == "3104-127"){
        $arrayPostData['messages'][0]['text'] = "NLP000408,(3104-39) ศรีบุญเรือง3 - (3104-127) ต.ศรีบุญเรือง ศรีโพธิ์ทอง=Optic 12 Core DW = 3.13 km.";
    }
else if($message == "3104-128"){
        $arrayPostData['messages'][0]['text'] = "NLP000293,(3104-129) ต.หนองกุงแก้ว โนนสะอาด - (3104-128) ต.หนองกุงแก้ว หนองคังคา=Optic 12 Core DW = 1.309 km.";
    }
else if($message == "3104-129"){
          $arrayPostData['messages'][0]['text'] = "NLP000293,(3104-129) ต.หนองกุงแก้ว โนนสะอาด - (3104-128) ต.หนองกุงแก้ว หนองคังคา=Optic 12 Core DW = 1.309 km.
NLP000409,(3104-131) คอกวัว - (3104-129) ต.หนองกุงแก้ว โนนสะอาด=Optic 12 Core DW = 2.22 km.";
    }
else if($message == "3104-131"){
          $arrayPostData['messages'][0]['text'] = "NLP000409,(3104-131) คอกวัว - (3104-129) ต.หนองกุงแก้ว โนนสะอาด=Optic 12 Core DW = 2.22 km.
NLP000410,(3410-106) ห้วยยาง - (3104-131) ต.หนองกุงแก้ว คอกวัว=Optic 12 Core DW = 1.488 km.
NLP000411,(3104-131) คอกวัว - (3104-132) ต.หนองกุงแก้ว วังไชย=Optic 12 Core DW = 2.104 km.";
    }
else if($message == "3104-132"){
        $arrayPostData['messages'][0]['text'] = "NLP000411,(3104-131) คอกวัว - (3104-132) ต.หนองกุงแก้ว วังไชย=Optic 12 Core DW = 2.104 km.";
    }
else if($message == "3104-133"){
        $arrayPostData['messages'][0]['text'] = "NLP000412,(SJ) บ้านห้วยยาง-บ้านโนนป่าซาง - (3104-133) ต.หนองกุงแก้ว หนองกุงแก้ว=Optic 12 Core DW = 4.9 km.";
    }
else if($message == "3104-134"){
          $arrayPostData['messages'][0]['text'] = "NLP000413,(3109-97) โนนผักหวาน - (3104-134) ต.หนองกุงแก้ว นาสำราญ=Optic 12 Core DW = 3.79 km.
NLP000414,(3104-134) ต.หนองกุงแก้ว นาสำราญ - (3104-135) ต.หนองกุงแก้ว นารุ่งเรือง=Optic 12 Core DW = 1.04 km.";
    }
else if($message == "3104-135"){
        $arrayPostData['messages'][0]['text'] = "NLP000414,(3104-134) ต.หนองกุงแก้ว นาสำราญ - (3104-135) ต.หนองกุงแก้ว นารุ่งเรือง=Optic 12 Core DW = 1.04 km.";
    }
else if($message == "3104-138"){
        $arrayPostData['messages'][0]['text'] = "NLP000415,(3104-139) ต.หนองแก หนองผือ - (3104-138) ต.หนองแก ทุ่งกกทัน=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3104-139"){
          $arrayPostData['messages'][0]['text'] = "NLP000415,(3104-139) ต.หนองแก หนองผือ - (3104-138) ต.หนองแก ทุ่งกกทัน=Optic 12 Core DW = 1.7 km.
NLP000416,(SJ) บ้านหนองแก-บ้านโนนสง่า - (3104-139) ต.หนองแก หนองผือ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3104-141"){
          $arrayPostData['messages'][0]['text'] = "NLP000417,(3104-70) โนนสง่า - (3104-141) ต.หนองแก หนองแก=12 Core= 6.747 km.
NLP000418,(3104-141) ต.หนองแก หนองแก - (3104-142) ต.หนองแก พุทไธสงค์=Optic 12 Core DW = 1.05 km.
NLP000428,(3104-141) ต.หนองแก หนองแก - (3104-73) ต.กุดสะเทียน โนนเสถียร=Optic 12 Core DW = 4.952 km.";
    }
else if($message == "3104-142"){
        $arrayPostData['messages'][0]['text'] = "NLP000418,(3104-141) ต.หนองแก หนองแก - (3104-142) ต.หนองแก พุทไธสงค์=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3104-143"){
          $arrayPostData['messages'][0]['text'] = "NLP000419,(SJ) บ้านหนองแก-บ้านโนนสเถียร์ - (3104-143) ต.หนองแก โนนประดู่=Optic 12 Core DW = 2.615 km.
NLP000420,(3104-143) ต.หนองแก โนนประดู่ - (3104-144) ต.หนองแก หนองโก=Optic 12 Core DW = 2.426 km.";
    }
else if($message == "3104-144"){
          $arrayPostData['messages'][0]['text'] = "NLP000420,(3104-143) ต.หนองแก โนนประดู่ - (3104-144) ต.หนองแก หนองโก=Optic 12 Core DW = 2.426 km.
NLP000421,(3104-144) ต.หนองแก หนองโก - (3104-145) ต.หนองแก สำราญสุข=Optic 12 Core DW = 3.048 km.";
    }
else if($message == "3104-145"){
        $arrayPostData['messages'][0]['text'] = "NLP000421,(3104-144) ต.หนองแก หนองโก - (3104-145) ต.หนองแก สำราญสุข=Optic 12 Core DW = 3.048 km.";
    }
else if($message == "3104-146"){
          $arrayPostData['messages'][0]['text'] = "NLP000422,(3103-33) บ้านสร้างเสี้ยน - (3104-146) ต.หนองบัวใต้ บุ่งแก้ว=Optic 12 Core DW = 2.25 km.
NLP000429,(3104-146) บุ่งแก้ว - (3104-74) ต.ทรายทอง ทรายมูล=Optic 12 Core DW = 5.42 km.";
    }
else if($message == "3104-147"){
          $arrayPostData['messages'][0]['text'] = "NLP000423,(3103-33) บ้านสร้างเสี้ยน - (3104-147) ต.หนองบัวใต้ ซัมเบ็ญ=Optic 12 Core DW = 1.185 km.
NLP000433,(3104-147) ซัมเบ็ญ - (3104-78) ต.ทรายทอง ดอนข่า=Optic 12 Core DW = 2.61 km.";
    }
else if($message == "3104-152"){
        $arrayPostData['messages'][0]['text'] = "NLP000424,(3104-38) ศรีบุญเรือง2 - (3104-152) ศรีบุญเรือง4=Optic 12 Core DW = 0.881 km.";
    }
else if($message == "3104-154"){
        $arrayPostData['messages'][0]['text'] = "NLP000425,(3104-64) นาอุดม - (3104-154) บ้านห้วยกวางทอง=Optic 12 Core DW = 2 km.";
    }
else if($message == "3104-37"){
          $arrayPostData['messages'][0]['text'] = "NLP000038,(3101-54) Shop 3bb หนองบัวลำภู - (3104-37) ศรีบุญเรือง 1=12 Core= 33 km.
NLP000039,(3104-37) ศรีบุญเรือง 1 - (3104-38) ศรีบุญเรือง 2=Optic 12 Core DW = 0.8 km.
NPL000065,(ME) ศรีบุญเรือง - (3104-46) รร.ศรีบุญเรืองวิทยาคาร=Optic 12 Core DW = 0.555 km.
NPL000079,(ME) ME ศรีบุญเรือง - (3104-50) บ้านชมพูทอง=Optic 12 Core DW = 6.23 km.
NPL000121,(3109-37) ME นากลาง - (3104-37) ME ศรีบุญเรือง=12 Core= 46.215 km.
NPL000129,(3104-37) ศรีบุญเรือง1 - (3140-50) ชมพูทอง=Optic 12 Core DW = 3.3 km.
NPL000130,(3104-37) ME ศรีบุญเรือง - (3103-31) ME โนนสัง=12 Core= 45 km.
NPL000139,(3104-37) ศรีบุญเรือง1 - (3140-38) บ้านเทพคีรี=12 Core= 62 km.
NPL000146,(3104-37) ศรีบุญเรือง1 - (3104-63) ศรีประเสริฐ=Optic 12 Core DW = 2.7 km.
NPL000151,(3109-37) นากลาง - (3104-37) ศรีบุญเรือง=12 Core= 46.215 km.
NPL000211,(3104-37) ME ศรีบุญเรือง - (3104-69) หนองทุ่งมนต์พัฒนา=Optic 12 Core DW = 3.764 km.
NPL000226,(3104-37) ME ศรีบุญเรือง - (3104-71) บ้านนาทับควาย=12 Core= 6.98 km.";
    }
else if($message == "3104-38"){
          $arrayPostData['messages'][0]['text'] = "NLP000039,(3104-37) ศรีบุญเรือง 1 - (3104-38) ศรีบุญเรือง 2=Optic 12 Core DW = 0.8 km.
NLP000041,(3104-38) ศรีบุญเรือง 2 - (3104-39) ศรีบุญเรือง3=Optic 12 Core DW = 1.4 km.
NLP000424,(3104-38) ศรีบุญเรือง2 - (3104-152) ศรีบุญเรือง4=Optic 12 Core DW = 0.881 km.";
    }
else if($message == "3104-39"){
          $arrayPostData['messages'][0]['text'] = "NLP000041,(3104-38) ศรีบุญเรือง 2 - (3104-39) ศรีบุญเรือง3=Optic 12 Core DW = 1.4 km.
NLP000043,(3104-39) ศรีบุญเรือง3 - (3104-43) บ้านสวนสวรรค์=Optic 12 Core DW = 1.6 km.
NLP000408,(3104-39) ศรีบุญเรือง3 - (3104-127) ต.ศรีบุญเรือง ศรีโพธิ์ทอง=Optic 12 Core DW = 3.13 km.";
    }
else if($message == "3104-41"){
          $arrayPostData['messages'][0]['text'] = "NLP000046,(3104-43) บ้านสวนสวรรค์ - (3104-41) บ้านศรีวิชัย=Optic 12 Core DW = 2 km.
NLP000404,(3104-41) บ้านศรีวิชัย - (3104-123) ต.ศรีบุญเรือง นาฝาย=Optic 12 Core DW = 3.9 km.
NLP000435,(3104-41) บ้านศรีวิชัย - (3104-82) ต.นากอก โคกล่าม=12 Core= 5.33 km.
NPL000150,(3104-41) บ้านศรีวิชัย - (3104-67) โคกสูง=Optic 12 Core DW = 4.1 km.";
    }
else if($message == "3104-43"){
          $arrayPostData['messages'][0]['text'] = "NLP000043,(3104-39) ศรีบุญเรือง3 - (3104-43) บ้านสวนสวรรค์=Optic 12 Core DW = 1.6 km.
NLP000046,(3104-43) บ้านสวนสวรรค์ - (3104-41) บ้านศรีวิชัย=Optic 12 Core DW = 2 km.";
    }
else if($message == "3104-44"){
          $arrayPostData['messages'][0]['text'] = "NPL000063,(3103-33) สร้างเสี้ยน - (3104-44) หนองบัวใต้=Optic 12 Core DW = 2.46 km.
NPL000064,(3104-44) หนองบัวใต้ - (3104-45) ดอนปอ=Optic 12 Core DW = 0.985 km.";
    }
else if($message == "3104-45"){
          $arrayPostData['messages'][0]['text'] = "NPL000064,(3104-44) หนองบัวใต้ - (3104-45) ดอนปอ=Optic 12 Core DW = 0.985 km.
NPL000227,(3104-45) บ้านดอนปอ - (3101-84) บ้านโคกกลาง=Optic 12 Core DW = 3.44 km.";
    }
else if($message == "3104-46"){
          $arrayPostData['messages'][0]['text'] = "NLP000399,(3104-46) รร.ศรีบุญเรืองวิทยาคาร - (3104-113) ต.เมืองใหม่ มอใต้=Optic 12 Core DW = 2.552 km.
NPL000065,(ME) ศรีบุญเรือง - (3104-46) รร.ศรีบุญเรืองวิทยาคาร=Optic 12 Core DW = 0.555 km.";
    }
else if($message == "3104-48"){
          $arrayPostData['messages'][0]['text'] = "NLP000398,(3104-48) โนนสงวน - (3104-109) ต.โนนม่วง โนนหว้าทอง=Optic 12 Core DW = 5.665 km.
NPL000066,(SJ) SJ นากลาง-ศรีบุญเรือง - (3104-48) บ้านโนนสงวน=12 Core= 0.745 km.
NPL000069,(3104-48) บ้านโนนสงวน - (3104-52) บ้านม่อเหนือ=12 Core= 2.75 km.
NPL000128,(3104-54) โนนม่วง - (3104-48) โนนสงวน=Optic 12 Core DW = 6.1 km.
NPL000158,(3104-48) บ้านโนนสงวน - (3104-49) บ้านหนองแวง=12 Core= 7.255 km.";
    }
else if($message == "3104-49"){
        $arrayPostData['messages'][0]['text'] = "NPL000158,(3104-48) บ้านโนนสงวน - (3104-49) บ้านหนองแวง=12 Core= 7.255 km.";
    }
else if($message == "3104-50"){
          $arrayPostData['messages'][0]['text'] = "NLP000400,(3104-50) ชมพูทอง - (3104-114) ต.เมืองใหม่ ห้วยไผ่=Optic 12 Core DW = 4.225 km.
NPL000079,(ME) ME ศรีบุญเรือง - (3104-50) บ้านชมพูทอง=Optic 12 Core DW = 6.23 km.";
    }
else if($message == "3104-51"){
          $arrayPostData['messages'][0]['text'] = "NLP000427,(3104-51) กุดสะเทียน - (3104-72) ต.กุดสะเทียน วังคูณ=Optic 12 Core DW = 4 km.
NPL000068,(SJ) SJ นากลาง-ศรีบุญเรือง - (3104-51) บ้านกุดสะเทียน=12 Core= 8 km.
NPL000141,(3104-51) บ้านกุดสะเทียน - (3104-58) นาทม=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3104-52"){
        $arrayPostData['messages'][0]['text'] = "NPL000069,(3104-48) บ้านโนนสงวน - (3104-52) บ้านม่อเหนือ=12 Core= 2.75 km.";
    }
else if($message == "3104-53"){
          $arrayPostData['messages'][0]['text'] = "NPL000055,(3104-54) โนนม่วง - (3104-53) ดอนเกล็ด=12 Core= 0.36 km.
NPL000056,(3104-53) ดอนเกล็ด - (3104-55) ยางหล่อ=12 Core= 2.62 km.";
    }
else if($message == "3104-54"){
          $arrayPostData['messages'][0]['text'] = "NPL000055,(3104-54) โนนม่วง - (3104-53) ดอนเกล็ด=12 Core= 0.36 km.
NPL000070,(SJ) sj หนองเป็ด-ดอนเกล็ด - (3104-54) โนนม่วง=12 Core= 2.7 km.
NPL000128,(3104-54) โนนม่วง - (3104-48) โนนสงวน=Optic 12 Core DW = 6.1 km.";
    }
else if($message == "3104-55"){
          $arrayPostData['messages'][0]['text'] = "NPL000056,(3104-53) ดอนเกล็ด - (3104-55) ยางหล่อ=12 Core= 2.62 km.
NPL000076,(3104-55) ยางหล่อ - (3104-56) ป่าคา=Optic 12 Core DW = 3.401 km.";
    }
else if($message == "3104-56"){
          $arrayPostData['messages'][0]['text'] = "NLP000401,(3104-56) ป่าคา - (3104-115) บ้านดอนเล้า=Optic 12 Core DW = 1.75 km.
NPL000076,(3104-55) ยางหล่อ - (3104-56) ป่าคา=Optic 12 Core DW = 3.401 km.
NPL000140,(3104-56) ป่าคา - (3104-57) วังโปร่ง=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3104-57"){
        $arrayPostData['messages'][0]['text'] = "NPL000140,(3104-56) ป่าคา - (3104-57) วังโปร่ง=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3104-58"){
          $arrayPostData['messages'][0]['text'] = "NPL000141,(3104-51) บ้านกุดสะเทียน - (3104-58) นาทม=Optic 12 Core DW = 2.1 km.
NPL000148,(3104-58) นาทม - (3104-65) นาชุมแสง=Optic 12 Core DW = 1.2 km.
NPL000171,(3104-58) บ้านนาทม - (3104-65) บ้านนาชุมแสง=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3104-59"){
        $arrayPostData['messages'][0]['text'] = "NPL000142,(3104-60) เหล่าใหญ่ - (3104-59) โนนกุดแท่น=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3104-60"){
          $arrayPostData['messages'][0]['text'] = "NPL000142,(3104-60) เหล่าใหญ่ - (3104-59) โนนกุดแท่น=Optic 12 Core DW = 1.6 km.
NPL000143,(3104-62) หันนางาม - (3104-60) เหล่าใหญ่=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3104-61"){
        $arrayPostData['messages'][0]['text'] = "NPL000144,(3104-62) หันนางาม - (3104-61) ห้วยวังทอง=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3104-62"){
          $arrayPostData['messages'][0]['text'] = "NPL000143,(3104-62) หันนางาม - (3104-60) เหล่าใหญ่=Optic 12 Core DW = 1.9 km.
NPL000144,(3104-62) หันนางาม - (3104-61) ห้วยวังทอง=Optic 12 Core DW = 2.8 km.
NPL000145,(3104-63) ศรีประเสริฐ - (3104-62) หันนางาม=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3104-63"){
          $arrayPostData['messages'][0]['text'] = "NPL000145,(3104-63) ศรีประเสริฐ - (3104-62) หันนางาม=Optic 12 Core DW = 1.9 km.
NPL000146,(3104-37) ศรีบุญเรือง1 - (3104-63) ศรีประเสริฐ=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3104-64"){
          $arrayPostData['messages'][0]['text'] = "NLP000425,(3104-64) นาอุดม - (3104-154) บ้านห้วยกวางทอง=Optic 12 Core DW = 2 km.
NPL000147,(3104-66) ม่วงทอง - (3104-64) นาอุดม=Optic 12 Core DW = 3.6 km.";
    }
else if($message == "3104-65"){
          $arrayPostData['messages'][0]['text'] = "NPL000148,(3104-58) นาทม - (3104-65) นาชุมแสง=Optic 12 Core DW = 1.2 km.
NPL000171,(3104-58) บ้านนาทม - (3104-65) บ้านนาชุมแสง=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3104-66"){
          $arrayPostData['messages'][0]['text'] = "NLP000396,(3104-66) ม่วงทอง - (3104-106) ต.โนนสะอาด โต่งโต้น=Optic 12 Core DW = 2.575 km.
NLP000437,(3104-66) ม่วงทอง - (3104-91) ต.นากอก กุดดุก=Optic 12 Core DW = 2.66 km.
NPL000147,(3104-66) ม่วงทอง - (3104-64) นาอุดม=Optic 12 Core DW = 3.6 km.
NPL000149,(3104-67) โคกสูง - (3104-66) ม่วงทอง=Optic 12 Core DW = 2 km.
NPL000170,(3104-67) บ้านโคกสูง - (3104-66) บ้านม่วงทอง=Optic 12 Core DW = 2.51 km.";
    }
else if($message == "3104-67"){
          $arrayPostData['messages'][0]['text'] = "NPL000149,(3104-67) โคกสูง - (3104-66) ม่วงทอง=Optic 12 Core DW = 2 km.
NPL000150,(3104-41) บ้านศรีวิชัย - (3104-67) โคกสูง=Optic 12 Core DW = 4.1 km.
NPL000170,(3104-67) บ้านโคกสูง - (3104-66) บ้านม่วงทอง=Optic 12 Core DW = 2.51 km.";
    }
else if($message == "3104-68"){
        $arrayPostData['messages'][0]['text'] = "NLP000426,(3101-84) โคกกลาง - (3104-68) หนองโน=Optic 12 Core DW = 1.67 km.";
    }
else if($message == "3104-69"){
          $arrayPostData['messages'][0]['text'] = "NPL000211,(3104-37) ME ศรีบุญเรือง - (3104-69) หนองทุ่งมนต์พัฒนา=Optic 12 Core DW = 3.764 km.
NPL000269,(3104-69) บ้านหนองทุ่งมน - (3101-96) บ้านโคกน้ำเกลี้ยง=Optic 12 Core DW = 4.39 km.";
    }
else if($message == "3104-70"){
          $arrayPostData['messages'][0]['text'] = "NLP000417,(3104-70) โนนสง่า - (3104-141) ต.หนองแก หนองแก=12 Core= 6.747 km.
NPL000212,(3101-68) บ้านดินทรายอ่อน - (3104-70) บ้านโนนสง่า=Optic 12 Core DW = 1.74 km.
UDN001447,(3104-70) บ้านโนนสง่า - (3012-148) บ้านแหลมทองพัฒนา=Optic 12 Core DW = 7.47 km.";
    }
else if($message == "3104-71"){
        $arrayPostData['messages'][0]['text'] = "NPL000226,(3104-37) ME ศรีบุญเรือง - (3104-71) บ้านนาทับควาย=12 Core= 6.98 km.";
    }
else if($message == "3104-72"){
        $arrayPostData['messages'][0]['text'] = "NLP000427,(3104-51) กุดสะเทียน - (3104-72) ต.กุดสะเทียน วังคูณ=Optic 12 Core DW = 4 km.";
    }
else if($message == "3104-73"){
        $arrayPostData['messages'][0]['text'] = "NLP000428,(3104-141) ต.หนองแก หนองแก - (3104-73) ต.กุดสะเทียน โนนเสถียร=Optic 12 Core DW = 4.952 km.";
    }
else if($message == "3104-74"){
          $arrayPostData['messages'][0]['text'] = "NLP000429,(3104-146) บุ่งแก้ว - (3104-74) ต.ทรายทอง ทรายมูล=Optic 12 Core DW = 5.42 km.
NLP000430,(3104-74) ต.ทรายทอง ทรายมูล - (3104-75) ต.ทรายทอง หนองขาม=Optic 12 Core DW = 5.045 km.";
    }
else if($message == "3104-75"){
        $arrayPostData['messages'][0]['text'] = "NLP000430,(3104-74) ต.ทรายทอง ทรายมูล - (3104-75) ต.ทรายทอง หนองขาม=Optic 12 Core DW = 5.045 km.";
    }
else if($message == "3104-76"){
        $arrayPostData['messages'][0]['text'] = "NLP000431,(SJ) บ้านบุ่งแก้ว-บ้านทรายมูล - (3104-76) ต.ทรายทอง กุดหัวแฮด=Optic 12 Core DW = 2.355 km.";
    }
else if($message == "3104-77"){
        $arrayPostData['messages'][0]['text'] = "NLP000432,(SJ) บ้านบุ่งแก้ว-บ้านทรายมูล - (3104-77) น้ำลัด=Optic 12 Core DW = 1.34 km.";
    }
else if($message == "3104-78"){
          $arrayPostData['messages'][0]['text'] = "NLP000433,(3104-147) ซัมเบ็ญ - (3104-78) ต.ทรายทอง ดอนข่า=Optic 12 Core DW = 2.61 km.
NLP000434,(3104-78) ต.ทรายทอง ดอนข่า - (3104-80) ต.ทรายทอง เหล่านาดี=Optic 12 Core DW = 2.235 km.";
    }
else if($message == "3104-80"){
        $arrayPostData['messages'][0]['text'] = "NLP000434,(3104-78) ต.ทรายทอง ดอนข่า - (3104-80) ต.ทรายทอง เหล่านาดี=Optic 12 Core DW = 2.235 km.";
    }
else if($message == "3104-81"){
        $arrayPostData['messages'][0]['text'] = "NPL000228,(3104-94) บ้านนาหนองทุ่ม - (3104-81) บ้านสระแก้ว=Optic 12 Core DW = 1.47 km.";
    }
else if($message == "3104-82"){
          $arrayPostData['messages'][0]['text'] = "NLP000435,(3104-41) บ้านศรีวิชัย - (3104-82) ต.นากอก โคกล่าม=12 Core= 5.33 km.
NLP000436,(3104-82) ต.นากอก โคกล่าม - (3104-86) ต.นากอก โนนงาม=Optic 12 Core DW = 2.24 km.";
    }
else if($message == "3104-83"){
        $arrayPostData['messages'][0]['text'] = "NPL000273,(SJ) SJ - (3104-83) บ้านโนนข่า=Optic 12 Core DW = 2.485 km.";
    }
else if($message == "3104-84"){
        $arrayPostData['messages'][0]['text'] = "NPL000229,(3104-85) บ้านแก - (3104-84) บ้านท่าวารี=Optic 12 Core DW = 0.69 km.";
    }
else if($message == "3104-85"){
          $arrayPostData['messages'][0]['text'] = "NPL000229,(3104-85) บ้านแก - (3104-84) บ้านท่าวารี=Optic 12 Core DW = 0.69 km.
NPL000276,(3104-86) โนนงาม - (3104-85) บ้านแก=Optic 12 Core DW = 4.72 km.";
    }
else if($message == "3104-86"){
          $arrayPostData['messages'][0]['text'] = "NLP000436,(3104-82) ต.นากอก โคกล่าม - (3104-86) ต.นากอก โนนงาม=Optic 12 Core DW = 2.24 km.
NPL000275,(3104-86) โนนงาม - (3104-87) บ้านโนนเกษม=Optic 12 Core DW = 1.78 km.
NPL000276,(3104-86) โนนงาม - (3104-85) บ้านแก=Optic 12 Core DW = 4.72 km.
NPL000277,(3104-86) โนนงาม - (3104-88) บ้านหนองผือ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3104-87"){
          $arrayPostData['messages'][0]['text'] = "NPL000222,(3104-87) บ้านโนนเกษม - (3104-93) บ้านวังไฮ=Optic 12 Core DW = 3.23 km.
NPL000275,(3104-86) โนนงาม - (3104-87) บ้านโนนเกษม=Optic 12 Core DW = 1.78 km.";
    }
else if($message == "3104-88"){
        $arrayPostData['messages'][0]['text'] = "NPL000277,(3104-86) โนนงาม - (3104-88) บ้านหนองผือ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3104-89"){
          $arrayPostData['messages'][0]['text'] = "NPL000238,(3104-89) บ้านนากอก - (3104-90) บ้านโคกสนั่น=Optic 12 Core DW = 2.78 km.
NPL000239,(3104-91) บ้านกุดดุก - (3104-89) บ้านนากอก=Optic 12 Core DW = 3.66 km.";
    }
else if($message == "3104-90"){
        $arrayPostData['messages'][0]['text'] = "NPL000238,(3104-89) บ้านนากอก - (3104-90) บ้านโคกสนั่น=Optic 12 Core DW = 2.78 km.";
    }
else if($message == "3104-91"){
          $arrayPostData['messages'][0]['text'] = "NLP000437,(3104-66) ม่วงทอง - (3104-91) ต.นากอก กุดดุก=Optic 12 Core DW = 2.66 km.
NPL000239,(3104-91) บ้านกุดดุก - (3104-89) บ้านนากอก=Optic 12 Core DW = 3.66 km.";
    }
else if($message == "3104-92"){
          $arrayPostData['messages'][0]['text'] = "NPL000237,(3104-93) บ้านวังไฮ - (3104-92) โนนสำราญ=Optic 12 Core DW = 2.62 km.
NPL000240,(3104-92) โนนสำราญ - (3104-94) บ้านหนองทุ่ม=12 Core= 5.87 km.";
    }
else if($message == "3104-93"){
          $arrayPostData['messages'][0]['text'] = "NPL000218,(3104-93) บ้านวังไฮ - (3104-97) บ้านวังคูณ=Optic 12 Core DW = 4.47 km.
NPL000222,(3104-87) บ้านโนนเกษม - (3104-93) บ้านวังไฮ=Optic 12 Core DW = 3.23 km.
NPL000237,(3104-93) บ้านวังไฮ - (3104-92) โนนสำราญ=Optic 12 Core DW = 2.62 km.";
    }
else if($message == "3104-94"){
          $arrayPostData['messages'][0]['text'] = "NPL000223,(3104-94) บ้านนาหนองทุ่ม - (3104-95) บ้านตาลเดี่ยว=Optic 12 Core DW = 1.14 km.
NPL000228,(3104-94) บ้านนาหนองทุ่ม - (3104-81) บ้านสระแก้ว=Optic 12 Core DW = 1.47 km.
NPL000240,(3104-92) โนนสำราญ - (3104-94) บ้านหนองทุ่ม=12 Core= 5.87 km.";
    }
else if($message == "3104-95"){
          $arrayPostData['messages'][0]['text'] = "NPL000221,(3104-95) บ้านตาลเดี่ยว - (3104-96) บ้านห้วยบ่อทอง=Optic 12 Core DW = 2.96 km.
NPL000223,(3104-94) บ้านนาหนองทุ่ม - (3104-95) บ้านตาลเดี่ยว=Optic 12 Core DW = 1.14 km.";
    }
else if($message == "3104-96"){
        $arrayPostData['messages'][0]['text'] = "NPL000221,(3104-95) บ้านตาลเดี่ยว - (3104-96) บ้านห้วยบ่อทอง=Optic 12 Core DW = 2.96 km.";
    }
else if($message == "3104-97"){
          $arrayPostData['messages'][0]['text'] = "NPL000218,(3104-93) บ้านวังไฮ - (3104-97) บ้านวังคูณ=Optic 12 Core DW = 4.47 km.
NPL000219,(3104-97) บ้านวังคูณ - (3104-101) บ้านคึมน้ำเกลี้ยง=Optic 12 Core DW = 3.96 km.
NPL000220,(3104-97) บ้านวังคูณ - (3104-98) บ้านห้วยบง=Optic 12 Core DW = 1.23 km.";
    }
else if($message == "3104-98"){
        $arrayPostData['messages'][0]['text'] = "NPL000220,(3104-97) บ้านวังคูณ - (3104-98) บ้านห้วยบง=Optic 12 Core DW = 1.23 km.";
    }
else if($message == "3104-99"){
        $arrayPostData['messages'][0]['text'] = "NPL000217,(3104-101) บ้านคึมน้ำเกลี้ยง - (3104-99) บ้านวังโพน=Optic 12 Core DW = 2.58 km.";
    }
else if($message == "3109-101"){
        $arrayPostData['messages'][0]['text'] = "NPL000200,(3109-65) บ้านเอื้อง - (3109-101) บ้านโนนสา=Optic 12 Core DW = 2.54 km.";
    }
else if($message == "3109-102"){
        $arrayPostData['messages'][0]['text'] = "NPL000197,(3109-42) บ้านฝั่งแดง - (3109-102) บ้านนาหนองทุ่ม=Optic 12 Core DW = 4.08 km.";
    }
else if($message == "3109-103"){
        $arrayPostData['messages'][0]['text'] = "NPL000198,(3109-64) บ้านซำเสี้ยว - (3109-103) บ้านโนนงาม=Optic 12 Core DW = 3.88 km.";
    }
else if($message == "3109-104"){
        $arrayPostData['messages'][0]['text'] = "NLP000438,(SJ) บ้านใหม่สามพลัง - (3109-104) ต.อุทัยสวรรค์ ซำขอนแก่น=Optic 12 Core DW = 2.09 km.";
    }
else if($message == "3109-105"){
          $arrayPostData['messages'][0]['text'] = "NPL000194,(3109-112) บ้านท่าอุทัย - (3109-105) บ้านโนนสวาท=Optic 12 Core DW = 4 km.
NPL000196,(3109-105) บ้านโนนสวาท - (3109-106) บ้านหนองไพบูลย์=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3109-106"){
        $arrayPostData['messages'][0]['text'] = "NPL000196,(3109-105) บ้านโนนสวาท - (3109-106) บ้านหนองไพบูลย์=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3109-107"){
          $arrayPostData['messages'][0]['text'] = "NLP000440,(3109-112) ท่าอุทัย - (3109-107) ต.อุทัยสวรรค์ ห้วยนาหลวง=Optic 12 Core DW = 3.391 km.
NLP000443,(3109-107) ต.อุทัยสวรรค์ ห้วยนาหลวง - (3109-111) ต.อุทัยสวรรค์ หนองกุงศรี=Optic 12 Core DW = 3.61 km.";
    }
else if($message == "3109-108"){
        $arrayPostData['messages'][0]['text'] = "NLP000441,(3109-111) หนองกุงศรี - (3109-108) ต.อุทัยสวรรค์ วังประทุม=Optic 12 Core DW = 5.34 km.";
    }
else if($message == "3109-109"){
          $arrayPostData['messages'][0]['text'] = "NLP000442,(3109-111) หนองกุงศรี - (3109-109) ต.อุทัยสวรรค์ โนนสวรรค์=Optic 12 Core DW = 2.379 km.
NLP000453,(3109-109) โนนสวรรค์ - (3109-96) ต.โนนเมือง ภูพระ=Optic 12 Core DW = 3.84 km.";
    }
else if($message == "3109-111"){
          $arrayPostData['messages'][0]['text'] = "NLP000441,(3109-111) หนองกุงศรี - (3109-108) ต.อุทัยสวรรค์ วังประทุม=Optic 12 Core DW = 5.34 km.
NLP000442,(3109-111) หนองกุงศรี - (3109-109) ต.อุทัยสวรรค์ โนนสวรรค์=Optic 12 Core DW = 2.379 km.
NLP000443,(3109-107) ต.อุทัยสวรรค์ ห้วยนาหลวง - (3109-111) ต.อุทัยสวรรค์ หนองกุงศรี=Optic 12 Core DW = 3.61 km.";
    }
else if($message == "3109-112"){
          $arrayPostData['messages'][0]['text'] = "NLP000440,(3109-112) ท่าอุทัย - (3109-107) ต.อุทัยสวรรค์ ห้วยนาหลวง=Optic 12 Core DW = 3.391 km.
NPL000194,(3109-112) บ้านท่าอุทัย - (3109-105) บ้านโนนสวาท=Optic 12 Core DW = 4 km.
NPL000195,(3109-41) บ้านหนองด่าน2 - (3109-112) บ้านท่าอุทัย=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3109-114"){
        $arrayPostData['messages'][0]['text'] = "NLP000444,(3109-41) หนองด่าน2 - (3109-114) หนองด่าน3=Optic 12 Core DW = 0.97 km.";
    }
else if($message == "3109-115"){
        $arrayPostData['messages'][0]['text'] = "NLP000445,(3109-40) หนองบัวคำแสน2 - (3109-115) หนองบัวคำแสน4=Optic 12 Core DW = 0.928 km.";
    }
else if($message == "3109-118"){
        $arrayPostData['messages'][0]['text'] = "NLP000446,(3109-51) บ้านสุขสำราญ - (3109-118) สุขสำราญ2=Optic 12 Core DW = 0.95 km.";
    }
else if($message == "3109-31"){
          $arrayPostData['messages'][0]['text'] = "NLP000013,(3109-38) สหกรณ์การเกษตร นากลาง - (3109-31) บ้านหนองด่าน จ.หนองบัวลำภู=Optic 12 Core DW = 3.5 km.
NPL000099,(3109-31) บ้านหนองด่าน จ.หนองบัวลำพู - (3109-41) หนองด่าน2=Optic 12 Core DW = 0.705 km.";
    }
else if($message == "3109-37"){
          $arrayPostData['messages'][0]['text'] = "NLP000001,(3101-39) ศูนย์ราชการ  - (3109-37) โรงเรียนหนองบัวคำเเสน นากลาง =12 Core= 24.7 km.
NLP000014,(3109-37) โรงเรียนหนองบัวคำเเสน นากลาง - (3109-42) บ้านฝั่งแดง=Optic 12 Core DW = 4.5 km.
NLP000015,(3109-37) โรงเรียนหนองบัวคำเเสน นากลาง - (3109-38) สหกรณ์การเกษตร นากลาง=Optic 12 Core DW = 3.6 km.
NLP000016,(3109-37) โรงเรียนหนองบัวคำเเสน นากลาง - (3109-39) ตลาดนากลาง=Optic 12 Core DW = 1.35 km.
NPL000121,(3109-37) ME นากลาง - (3104-37) ME ศรีบุญเรือง=12 Core= 46.215 km.
NPL000151,(3109-37) นากลาง - (3104-37) ศรีบุญเรือง=12 Core= 46.215 km.
UDN000989,(3109-37) นากลาง - (3102-64) สุวรรณคูหา=12 Core= 44.556 km.";
    }
else if($message == "3109-38"){
          $arrayPostData['messages'][0]['text'] = "NLP000013,(3109-38) สหกรณ์การเกษตร นากลาง - (3109-31) บ้านหนองด่าน จ.หนองบัวลำภู=Optic 12 Core DW = 3.5 km.
NLP000015,(3109-37) โรงเรียนหนองบัวคำเเสน นากลาง - (3109-38) สหกรณ์การเกษตร นากลาง=Optic 12 Core DW = 3.6 km.
NLP000037,(3109-38) สหกรณ์การเกษตร นากลาง - (3109-44) สหกรณ์การเกษตร นากลาง2=Optic 12 Core DW = 0.5 km.
NLP000049,(3109-38) สหกรณ์การเกษตร นากลาง - (3109-47) สหกรณ์การเกษตร นากลาง 3=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3109-39"){
          $arrayPostData['messages'][0]['text'] = "NLP000002,(3109-39) ตลาดนากลาง - (3109-43) เทศบาลนากลาง=Optic 12 Core DW = 1 km.
NLP000016,(3109-37) โรงเรียนหนองบัวคำเเสน นากลาง - (3109-39) ตลาดนากลาง=Optic 12 Core DW = 1.35 km.
NPL000098,(3109-39) ตลาดนากลาง - (3109-40) หนองบัวคำแสน2=Optic 12 Core DW = 0.435 km.";
    }
else if($message == "3109-40"){
          $arrayPostData['messages'][0]['text'] = "NLP000445,(3109-40) หนองบัวคำแสน2 - (3109-115) หนองบัวคำแสน4=Optic 12 Core DW = 0.928 km.
NPL000098,(3109-39) ตลาดนากลาง - (3109-40) หนองบัวคำแสน2=Optic 12 Core DW = 0.435 km.
NPL000157,(3109-40) หนองบัวคำแสน2 - (3109-48) หนองบัวคำแสน3=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3109-41"){
          $arrayPostData['messages'][0]['text'] = "NLP000444,(3109-41) หนองด่าน2 - (3109-114) หนองด่าน3=Optic 12 Core DW = 0.97 km.
NPL000099,(3109-31) บ้านหนองด่าน จ.หนองบัวลำพู - (3109-41) หนองด่าน2=Optic 12 Core DW = 0.705 km.
NPL000159,(3140-40) บ้านโป่งแค - (3109-41) หนองด่าน2=12 Core= 8.9 km.
NPL000195,(3109-41) บ้านหนองด่าน2 - (3109-112) บ้านท่าอุทัย=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3109-42"){
          $arrayPostData['messages'][0]['text'] = "NLP000014,(3109-37) โรงเรียนหนองบัวคำเเสน นากลาง - (3109-42) บ้านฝั่งแดง=Optic 12 Core DW = 4.5 km.
NLP000449,(3109-42) บ้านฝั่งแดง - (3109-79) วังเซียม=Optic 12 Core DW = 1.09 km.
NPL000197,(3109-42) บ้านฝั่งแดง - (3109-102) บ้านนาหนองทุ่ม=Optic 12 Core DW = 4.08 km.";
    }
else if($message == "3109-43"){
        $arrayPostData['messages'][0]['text'] = "NLP000002,(3109-39) ตลาดนากลาง - (3109-43) เทศบาลนากลาง=Optic 12 Core DW = 1 km.";
    }
else if($message == "3109-44"){
        $arrayPostData['messages'][0]['text'] = "NLP000037,(3109-38) สหกรณ์การเกษตร นากลาง - (3109-44) สหกรณ์การเกษตร นากลาง2=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3109-45"){
          $arrayPostData['messages'][0]['text'] = "NLP000047,(3101-46) นาคำไฮ - (3109-45) กุดดินจี่ 1=12 Core= 10.2 km.
NLP000048,(3109-45) กุดดินจี่ 1 - (3109-46) กุดดินจี่ 2=Optic 12 Core DW = 0.96 km.";
    }
else if($message == "3109-46"){
          $arrayPostData['messages'][0]['text'] = "NLP000048,(3109-45) กุดดินจี่ 1 - (3109-46) กุดดินจี่ 2=Optic 12 Core DW = 0.96 km.
NLP000450,(3109-46) กุดดินจี่2 - (3109-84) ต.กุดดินจี่ ภูดินทอง=Optic 12 Core DW = 4.494 km.";
    }
else if($message == "3109-47"){
          $arrayPostData['messages'][0]['text'] = "NLP000049,(3109-38) สหกรณ์การเกษตร นากลาง - (3109-47) สหกรณ์การเกษตร นากลาง 3=Optic 12 Core DW = 1.1 km.
NPL000104,(3109-47) ส.การเกษตรนากลาง3 - (3109-56) กุดแห่=12 Core= 4 km.";
    }
else if($message == "3109-48"){
        $arrayPostData['messages'][0]['text'] = "NPL000157,(3109-40) หนองบัวคำแสน2 - (3109-48) หนองบัวคำแสน3=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3109-51"){
          $arrayPostData['messages'][0]['text'] = "NLP000446,(3109-51) บ้านสุขสำราญ - (3109-118) สุขสำราญ2=Optic 12 Core DW = 0.95 km.
NPL000060,(3109-51) โนนสำราญ - (3109-65) บ้านเอื้อง=Optic 12 Core DW = 1.41 km.
NPL000101,(SJ) ศรีบุญเรือง1 -บ้านเทพคีรี - (3109-51) บ้านสุขสำราญ=Optic 12 Core DW = 2 km.";
    }
else if($message == "3109-52"){
          $arrayPostData['messages'][0]['text'] = "NPL000057,(3109-52) แสงดาว - (3109-62) โนนธาตุ=Optic 12 Core DW = 2.16 km.
NPL000102,(SJ) ศรีบุญเรือง1 -บ้านเทพคีรี - (3109-52) บ้านแสงดาว=Optic 12 Core DW = 1.34 km.";
    }
else if($message == "3109-53"){
          $arrayPostData['messages'][0]['text'] = "NLP000294,(SJ) ME สุวรรณคูหา-ME นากลาง - (3109-53) กุดกระสู้1=Optic 12 Core DW = 1.116 km.
NLP000336,(3109-53) กุดกระสู้1 - (3102-113) ต.นาด่าน กุดฮู=Optic 12 Core DW = 5.28 km.
NPL000103,(3109-53) กุดกระสู้1 - (3109-54) กุดกระสู้2=Optic 12 Core DW = 1.18 km.
NPL000215,(3109-53) กุดกระสู้1 - (3102-75) บ้านส้มป่อย=Optic 12 Core DW = 3.98 km.";
    }
else if($message == "3109-54"){
          $arrayPostData['messages'][0]['text'] = "NPL000103,(3109-53) กุดกระสู้1 - (3109-54) กุดกระสู้2=Optic 12 Core DW = 1.18 km.
NPL000109,(3109-54) กุดกระสู้2 - (3109-67) หนองแสง=Optic 12 Core DW = 4 km.
NPL000191,(3109-54) กุดกระสู้ 2 - (3109-70) หนองแวงคำ=12 Core= 5.06 km.";
    }
else if($message == "3109-55"){
          $arrayPostData['messages'][0]['text'] = "NLP000295,(SJ) ME สุวรรณคูหา-ME นากลาง - (3109-55) นาหนองทุ่ง=Optic 12 Core DW = 2 km.
NPL000108,(3109-55) นาหนองทุ่ง - (3109-66) หม่าน=Optic 12 Core DW = 1.8 km.
NPL000203,(3109-55) บ้านหนองนาทุ่ง - (3109-88) บ้านหนองแต้=Optic 12 Core DW = 2 km.";
    }
else if($message == "3109-56"){
          $arrayPostData['messages'][0]['text'] = "NLP000296,(3109-56) กุดแห่ - (3109-57) กุดแห่2=Optic 12 Core DW = 1.024 km.
NPL000104,(3109-47) ส.การเกษตรนากลาง3 - (3109-56) กุดแห่=12 Core= 4 km.
NPL000106,(3109-56) กุดแห่ - (3109-58) ป่าแดงงาม=12 Core= 7.036 km.";
    }
else if($message == "3109-57"){
        $arrayPostData['messages'][0]['text'] = "NLP000296,(3109-56) กุดแห่ - (3109-57) กุดแห่2=Optic 12 Core DW = 1.024 km.";
    }
else if($message == "3109-58"){
          $arrayPostData['messages'][0]['text'] = "NPL000106,(3109-56) กุดแห่ - (3109-58) ป่าแดงงาม=12 Core= 7.036 km.
NPL000107,(3109-58) ป่าแดงงาม - (3109-59) ป่าแดงงาม 2=Optic 12 Core DW = 1.58 km.
NPL000202,(3109-58) บ้านป่าแดงงาม - (3109-89) บ้านสนามชัย=Optic 12 Core DW = 2.98 km.";
    }
else if($message == "3109-59"){
        $arrayPostData['messages'][0]['text'] = "NPL000107,(3109-58) ป่าแดงงาม - (3109-59) ป่าแดงงาม 2=Optic 12 Core DW = 1.58 km.";
    }
else if($message == "3109-60"){
          $arrayPostData['messages'][0]['text'] = "NLP000447,(3109-60) โนนม่วง - (3109-61) โนนเมือง=Optic 12 Core DW = 4.599 km.
NPL000058,(3109-60) บ้านโนนม่วง - (3109-63) โนนศิลา=Optic 12 Core DW = 2.86 km.
NPL000071,(SJ) SJ นากลาง-ศรีบุญเรือง - (3109-60) บ้านโนนม่วง=Optic 12 Core DW = 2 km.
NPL000135,(3109-60) บ้านแสงดาว - (3109-60) โนนม่วง=12 Core= 8.7 km.";
    }
else if($message == "3109-61"){
          $arrayPostData['messages'][0]['text'] = "NLP000447,(3109-60) โนนม่วง - (3109-61) โนนเมือง=Optic 12 Core DW = 4.599 km.
NPL000199,(3109-61) บ้านโนนเมือง - (3109-95) บ้านต้างคำ=Optic 12 Core DW = 1.66 km.";
    }
else if($message == "3109-62"){
          $arrayPostData['messages'][0]['text'] = "NLP000448,(3109-62) โนนธาตุ - (3109-77) โนนเมืองพิณ=Optic 12 Core DW = 2.12 km.
NPL000057,(3109-52) แสงดาว - (3109-62) โนนธาตุ=Optic 12 Core DW = 2.16 km.
NPL000059,(3109-62) โนนธาตุ - (3109-64) บ้านซำเสียว=Optic 12 Core DW = 2.51 km.";
    }
else if($message == "3109-63"){
        $arrayPostData['messages'][0]['text'] = "NPL000058,(3109-60) บ้านโนนม่วง - (3109-63) โนนศิลา=Optic 12 Core DW = 2.86 km.";
    }
else if($message == "3109-64"){
          $arrayPostData['messages'][0]['text'] = "NPL000059,(3109-62) โนนธาตุ - (3109-64) บ้านซำเสียว=Optic 12 Core DW = 2.51 km.
NPL000198,(3109-64) บ้านซำเสี้ยว - (3109-103) บ้านโนนงาม=Optic 12 Core DW = 3.88 km.";
    }
else if($message == "3109-65"){
          $arrayPostData['messages'][0]['text'] = "NPL000060,(3109-51) โนนสำราญ - (3109-65) บ้านเอื้อง=Optic 12 Core DW = 1.41 km.
NPL000200,(3109-65) บ้านเอื้อง - (3109-101) บ้านโนนสา=Optic 12 Core DW = 2.54 km.";
    }
else if($message == "3109-66"){
        $arrayPostData['messages'][0]['text'] = "NPL000108,(3109-55) นาหนองทุ่ง - (3109-66) หม่าน=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3109-67"){
          $arrayPostData['messages'][0]['text'] = "NPL000109,(3109-54) กุดกระสู้2 - (3109-67) หนองแสง=Optic 12 Core DW = 4 km.
NPL000110,(3109-67) หนองแสง - (3109-68) ยางชุม=Optic 12 Core DW = 1.4 km.
NPL000163,(3109-67) หนองแสง - (3101-76) ทุ่งโปร่งเหนือ=Optic 12 Core DW = 5.5 km.";
    }
else if($message == "3109-68"){
          $arrayPostData['messages'][0]['text'] = "NPL000110,(3109-67) หนองแสง - (3109-68) ยางชุม=Optic 12 Core DW = 1.4 km.
NPL000111,(3109-68) ยางชุม - (3109-69) ขอบเหล็ก=Optic 12 Core DW = 4 km.";
    }
else if($message == "3109-69"){
          $arrayPostData['messages'][0]['text'] = "NPL000111,(3109-68) ยางชุม - (3109-69) ขอบเหล็ก=Optic 12 Core DW = 4 km.
NPL000112,(3109-69) ขอบเหล็ก - (3109-71) โนนสะอาด=Optic 12 Core DW = 2.942 km.
NPL000201,(3109-69) บ้านขอบเหล็ก - (3109-90) บ้านภูหลาว=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3109-70"){
        $arrayPostData['messages'][0]['text'] = "NPL000191,(3109-54) กุดกระสู้ 2 - (3109-70) หนองแวงคำ=12 Core= 5.06 km.";
    }
else if($message == "3109-71"){
        $arrayPostData['messages'][0]['text'] = "NPL000112,(3109-69) ขอบเหล็ก - (3109-71) โนนสะอาด=Optic 12 Core DW = 2.942 km.";
    }
else if($message == "3109-77"){
        $arrayPostData['messages'][0]['text'] = "NLP000448,(3109-62) โนนธาตุ - (3109-77) โนนเมืองพิณ=Optic 12 Core DW = 2.12 km.";
    }
else if($message == "3109-79"){
        $arrayPostData['messages'][0]['text'] = "NLP000449,(3109-42) บ้านฝั่งแดง - (3109-79) วังเซียม=Optic 12 Core DW = 1.09 km.";
    }
else if($message == "3109-81"){
        $arrayPostData['messages'][0]['text'] = "NPL000284,(3102-86) บ้านโนนปอแดง - (3109-81) บ้านดงสวรรค์=Optic 12 Core DW = 10.97 km.";
    }
else if($message == "3109-84"){
        $arrayPostData['messages'][0]['text'] = "NLP000450,(3109-46) กุดดินจี่2 - (3109-84) ต.กุดดินจี่ ภูดินทอง=Optic 12 Core DW = 4.494 km.";
    }
else if($message == "3109-85"){
        $arrayPostData['messages'][0]['text'] = "NLP000451,(SJ) ME สุวรรณคูหา-ME นากลาง - (3109-85) ต.กุดดินจี่ โนนสว่าง=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3109-86"){
        $arrayPostData['messages'][0]['text'] = "NLP000452,(SJ) ME สุวรรณคูหา-ME นากลาง - (3109-86) ต.กุดดินจี่ อาบช้าง=Optic 12 Core DW = 4 km.";
    }
else if($message == "3109-88"){
        $arrayPostData['messages'][0]['text'] = "NPL000203,(3109-55) บ้านหนองนาทุ่ง - (3109-88) บ้านหนองแต้=Optic 12 Core DW = 2 km.";
    }
else if($message == "3109-89"){
        $arrayPostData['messages'][0]['text'] = "NPL000202,(3109-58) บ้านป่าแดงงาม - (3109-89) บ้านสนามชัย=Optic 12 Core DW = 2.98 km.";
    }
else if($message == "3109-90"){
        $arrayPostData['messages'][0]['text'] = "NPL000201,(3109-69) บ้านขอบเหล็ก - (3109-90) บ้านภูหลาว=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3109-95"){
        $arrayPostData['messages'][0]['text'] = "NPL000199,(3109-61) บ้านโนนเมือง - (3109-95) บ้านต้างคำ=Optic 12 Core DW = 1.66 km.";
    }
else if($message == "3109-96"){
          $arrayPostData['messages'][0]['text'] = "NLP000453,(3109-109) โนนสวรรค์ - (3109-96) ต.โนนเมือง ภูพระ=Optic 12 Core DW = 3.84 km.
NLP000454,(3109-96) ต.โนนเมือง ภูพระ - (3109-97) ต.โนนเมือง โนนผักหวาน=Optic 12 Core DW = 1.54 km.
NLP000455,(3109-96) ต.โนนเมือง ภูพระ - (3109-98) ต.โนนเมือง ม้อเลี้ยว=Optic 12 Core DW = 3.51 km.";
    }
else if($message == "3109-97"){
          $arrayPostData['messages'][0]['text'] = "NLP000413,(3109-97) โนนผักหวาน - (3104-134) ต.หนองกุงแก้ว นาสำราญ=Optic 12 Core DW = 3.79 km.
NLP000454,(3109-96) ต.โนนเมือง ภูพระ - (3109-97) ต.โนนเมือง โนนผักหวาน=Optic 12 Core DW = 1.54 km.";
    }
else if($message == "3109-98"){
        $arrayPostData['messages'][0]['text'] = "NLP000455,(3109-96) ต.โนนเมือง ภูพระ - (3109-98) ต.โนนเมือง ม้อเลี้ยว=Optic 12 Core DW = 3.51 km.";
    }
else if($message == "3109-99"){
        $arrayPostData['messages'][0]['text'] = "NLP000456,(SJ) บ้านฝั่งแดง-บ้านหนองทุ่ม - (3109-99) ต.ฝั่งแดง โนนตาล=Optic 12 Core DW = 2.18 km.";
    }
else if($message == "3140-37"){
          $arrayPostData['messages'][0]['text'] = "NLP000017,(3140-39) บ้านไทยนิยม - (3140-37) เเยกนาเหล่า=Optic 12 Core DW = 2.4 km.
NLP000018,(3140-37) เเยกนาเหล่า - (3140-38) บ้านเทพคีรี=Optic 12 Core DW = 3 km.
NLP000033,(3140-37) เเยกนาเหล่า - (3140-42) โคกนาเหล่า=Optic 12 Core DW = 1.904 km.
NPL000119,(3140-37) เเยกนาเหล่า - (3140-57) แยกนาเหล่า2=Optic 12 Core DW = 1.058 km.";
    }
else if($message == "3140-38"){
          $arrayPostData['messages'][0]['text'] = "NLP000018,(3140-37) เเยกนาเหล่า - (3140-38) บ้านเทพคีรี=Optic 12 Core DW = 3 km.
NLP000032,(3140-38) บ้านเทพคีรี - (3140-41) บ้านเทพคีรี2=Optic 12 Core DW = 1.2 km.
NLP000040,(3140-38) บ้านเทพคีรี - (3140-43) บ้านนาโปร่ง=Optic 12 Core DW = 2.3 km.
NLP000045,(3140-38) บ้านเทพคีรี - (3140-44) นาซำจวง=12 Core= 4.9 km.
NLP000468,(3140-38) บ้านเทพคีรี - (3140-75) เทพคีรี 3=Optic 12 Core DW = 1.42 km.
NPL000074,(3140-38) บ้านเทพคีรี - (3140-58) บ้านผาเจาะ=Optic 12 Core DW = 1.512 km.
NPL000120,(3408-61) ME นาด้วง - (3140-38) ME นาวัง=12 Core= 28.024 km.
NPL000139,(3104-37) ศรีบุญเรือง1 - (3140-38) บ้านเทพคีรี=12 Core= 62 km.";
    }
else if($message == "3140-38 "){
        $arrayPostData['messages'][0]['text'] = "NLP000024,(3140-38 ) บ้านเทพคีรี  - (3140-40) บ้านโป่งแค=Optic 12 Core DW = 4 km.";
    }
else if($message == "3140-39"){
          $arrayPostData['messages'][0]['text'] = "NLP000017,(3140-39) บ้านไทยนิยม - (3140-37) เเยกนาเหล่า=Optic 12 Core DW = 2.4 km.
NLP000019,(3407-37 ) เอราวัณ1  - (3140-39) บ้านไทยนิยม=12 Core= 13.9 km.
NPL000117,(3140-39) บ้านไทยนิยม - (3140-52) โนนภู่ทอง=Optic 12 Core DW = 3.2 km.
NPL000136,(3140-39) ไทยนิยม - (3140-45) แยกนาเหล่า2=Optic 12 Core DW = 1.505 km.";
    }
else if($message == "3140-40"){
          $arrayPostData['messages'][0]['text'] = "NLP000024,(3140-38 ) บ้านเทพคีรี  - (3140-40) บ้านโป่งแค=Optic 12 Core DW = 4 km.
NPL000155,(3140-40) บ้านโป่งแค - (3140-46) ศรีสังวาลย์=Optic 12 Core DW = 1.39 km.
NPL000159,(3140-40) บ้านโป่งแค - (3109-41) หนองด่าน2=12 Core= 8.9 km.";
    }
else if($message == "3140-41"){
        $arrayPostData['messages'][0]['text'] = "NLP000032,(3140-38) บ้านเทพคีรี - (3140-41) บ้านเทพคีรี2=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3140-42"){
          $arrayPostData['messages'][0]['text'] = "NLP000033,(3140-37) เเยกนาเหล่า - (3140-42) โคกนาเหล่า=Optic 12 Core DW = 1.904 km.
NPL000118,(3140-42) โคกนาเหล่า - (3140-55) บ้านนาสมหวัง=Optic 12 Core DW = 2.03 km.";
    }
else if($message == "3140-43"){
        $arrayPostData['messages'][0]['text'] = "NLP000040,(3140-38) บ้านเทพคีรี - (3140-43) บ้านนาโปร่ง=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3140-44"){
          $arrayPostData['messages'][0]['text'] = "NLP000045,(3140-38) บ้านเทพคีรี - (3140-44) นาซำจวง=12 Core= 4.9 km.
NPL000126,(3140-44) นาซำจวง - (3140-47) บ้านนาส้มฮง=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3140-45"){
          $arrayPostData['messages'][0]['text'] = "NLP000298,(3140-45) แยกนาเหล่า2 - (3140-56) หนองสวรรค์=Optic 12 Core DW = 1.95 km.
NLP000461,(3140-45) แยกนาเหล่า2 - (3140-66) ต.นาเหล่า โคกกระทอ=Optic 12 Core DW = 1.94 km.
NPL000136,(3140-39) ไทยนิยม - (3140-45) แยกนาเหล่า2=Optic 12 Core DW = 1.505 km.";
    }
else if($message == "3140-46"){
        $arrayPostData['messages'][0]['text'] = "NPL000155,(3140-40) บ้านโป่งแค - (3140-46) ศรีสังวาลย์=Optic 12 Core DW = 1.39 km.";
    }
else if($message == "3140-47"){
        $arrayPostData['messages'][0]['text'] = "NPL000126,(3140-44) นาซำจวง - (3140-47) บ้านนาส้มฮง=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3140-48"){
          $arrayPostData['messages'][0]['text'] = "NLP000289,(SJ) ME นาด้วง-ME นาวัง - (3140-48) บ้านนาแก=Optic 12 Core DW = 0.55 km.
NLP000457,(3140-48) บ้านนาแก - (3140-59) นาแก2=Optic 12 Core DW = 1.15 km.
NLP000465,(3140-48) บ้านนาแก - (3140-70) ต.วังทอง แสงทองพัฒนา=Optic 12 Core DW = 4 km.
NLP000467,(3140-48) บ้านนาแก - (3140-74) นาแก2=Optic 12 Core DW = 1.28 km.";
    }
else if($message == "3140-49"){
          $arrayPostData['messages'][0]['text'] = "NLP000290,(SJ) ME นาด้วง-ME นาวัง - (3140-49) บ้านโคกสะอาดหัวช้าง=Optic 12 Core DW = 0.86 km.
NLP000466,(3140-49) บ้านโคกสะอาดหัวช้าง - (3140-71) ต.วังปลาป้อม หนองหัวช้าง=Optic 12 Core DW = 2.13 km.
NPL000116,(3140-49) บ้านโคกสะอาดหัวช้าง - (3140-50) วังปลาป้อม=Optic 12 Core DW = 3 km.";
    }
else if($message == "3140-50"){
          $arrayPostData['messages'][0]['text'] = "NLP000469,(3140-50) วังปลาป้อม - (3140-78) วังปลาป้อม2=Optic 12 Core DW = 0.97 km.
NPL000073,(3140-50) วังปลาป้อม - (3140-54) วังปลาป้อม2=Optic 12 Core DW = 1.06 km.
NPL000116,(3140-49) บ้านโคกสะอาดหัวช้าง - (3140-50) วังปลาป้อม=Optic 12 Core DW = 3 km.
NPL000129,(3104-37) ศรีบุญเรือง1 - (3140-50) ชมพูทอง=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3140-52"){
          $arrayPostData['messages'][0]['text'] = "NLP000463,(3140-52) โนนภู่ทอง - (3140-68) ต.วังทอง โคกสง่า=Optic 12 Core DW = 4.9 km.
NLP000464,(3140-52) โนนภู่ทอง - (3140-69) ต.วังทอง ผาอินทร์แปลง=Optic 12 Core DW = 2.6 km.
NPL000117,(3140-39) บ้านไทยนิยม - (3140-52) โนนภู่ทอง=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3140-53"){
        $arrayPostData['messages'][0]['text'] = "NLP000297,(SJ) ME นาด้วง-ME นาวัง - (3140-53) บ้านโคกหนองบัว=Optic 12 Core DW = 1.42 km.";
    }
else if($message == "3140-54"){
        $arrayPostData['messages'][0]['text'] = "NPL000073,(3140-50) วังปลาป้อม - (3140-54) วังปลาป้อม2=Optic 12 Core DW = 1.06 km.";
    }
else if($message == "3140-55"){
        $arrayPostData['messages'][0]['text'] = "NPL000118,(3140-42) โคกนาเหล่า - (3140-55) บ้านนาสมหวัง=Optic 12 Core DW = 2.03 km.";
    }
else if($message == "3140-56"){
        $arrayPostData['messages'][0]['text'] = "NLP000298,(3140-45) แยกนาเหล่า2 - (3140-56) หนองสวรรค์=Optic 12 Core DW = 1.95 km.";
    }
else if($message == "3140-57"){
        $arrayPostData['messages'][0]['text'] = "NPL000119,(3140-37) เเยกนาเหล่า - (3140-57) แยกนาเหล่า2=Optic 12 Core DW = 1.058 km.";
    }
else if($message == "3140-58"){
        $arrayPostData['messages'][0]['text'] = "NPL000074,(3140-38) บ้านเทพคีรี - (3140-58) บ้านผาเจาะ=Optic 12 Core DW = 1.512 km.";
    }
else if($message == "3140-59"){
          $arrayPostData['messages'][0]['text'] = "NLP000457,(3140-48) บ้านนาแก - (3140-59) นาแก2=Optic 12 Core DW = 1.15 km.
NLP000458,(3140-59) นาแก2 - (3140-60) ต.นาแก นาดินดำ=Optic 12 Core DW = 1.51 km.";
    }
else if($message == "3140-60"){
          $arrayPostData['messages'][0]['text'] = "NLP000458,(3140-59) นาแก2 - (3140-60) ต.นาแก นาดินดำ=Optic 12 Core DW = 1.51 km.
NLP000459,(3140-60) ต.นาแก นาดินดำ - (3140-61) ต.นาแก ผาเวียง=12 Core= 5.79 km.";
    }
else if($message == "3140-61"){
        $arrayPostData['messages'][0]['text'] = "NLP000459,(3140-60) ต.นาแก นาดินดำ - (3140-61) ต.นาแก ผาเวียง=12 Core= 5.79 km.";
    }
else if($message == "3140-62"){
        $arrayPostData['messages'][0]['text'] = "NLP000460,(3411-45) บ้านหนองตูม - (3140-62) ต.นาเหล่า นาสมนึก=Optic 12 Core DW = 1.415 km.";
    }
else if($message == "3140-65"){
        $arrayPostData['messages'][0]['text'] = "NLP000439,(3140-65) หนองหินตั้ง - (SJ) บ้านใหม่สามพลัง=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3140-66"){
        $arrayPostData['messages'][0]['text'] = "NLP000461,(3140-45) แยกนาเหล่า2 - (3140-66) ต.นาเหล่า โคกกระทอ=Optic 12 Core DW = 1.94 km.";
    }
else if($message == "3140-67"){
        $arrayPostData['messages'][0]['text'] = "NLP000462,(3140-68) โคกสง่า - (3140-67) ต.วังทอง นาสุรินทร์=Optic 12 Core DW = 2.585 km.";
    }
else if($message == "3140-68"){
          $arrayPostData['messages'][0]['text'] = "NLP000462,(3140-68) โคกสง่า - (3140-67) ต.วังทอง นาสุรินทร์=Optic 12 Core DW = 2.585 km.
NLP000463,(3140-52) โนนภู่ทอง - (3140-68) ต.วังทอง โคกสง่า=Optic 12 Core DW = 4.9 km.";
    }
else if($message == "3140-69"){
        $arrayPostData['messages'][0]['text'] = "NLP000464,(3140-52) โนนภู่ทอง - (3140-69) ต.วังทอง ผาอินทร์แปลง=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3140-70"){
        $arrayPostData['messages'][0]['text'] = "NLP000465,(3140-48) บ้านนาแก - (3140-70) ต.วังทอง แสงทองพัฒนา=Optic 12 Core DW = 4 km.";
    }
else if($message == "3140-71"){
        $arrayPostData['messages'][0]['text'] = "NLP000466,(3140-49) บ้านโคกสะอาดหัวช้าง - (3140-71) ต.วังปลาป้อม หนองหัวช้าง=Optic 12 Core DW = 2.13 km.";
    }
else if($message == "3140-74"){
        $arrayPostData['messages'][0]['text'] = "NLP000467,(3140-48) บ้านนาแก - (3140-74) นาแก2=Optic 12 Core DW = 1.28 km.";
    }
else if($message == "3140-75"){
        $arrayPostData['messages'][0]['text'] = "NLP000468,(3140-38) บ้านเทพคีรี - (3140-75) เทพคีรี 3=Optic 12 Core DW = 1.42 km.";
    }
else if($message == "3140-78"){
        $arrayPostData['messages'][0]['text'] = "NLP000469,(3140-50) วังปลาป้อม - (3140-78) วังปลาป้อม2=Optic 12 Core DW = 0.97 km.";
    }
else if($message == "3201-101"){
          $arrayPostData['messages'][0]['text'] = "NKI000110,(3201-99) บ้านเดื่อ - (3201-101) บ้านหัวหาด=Optic 12 Core DW = 3.5 km.
NKI000111,(3201-101) บ้านหัวหาด - (3201-102) บ้านพวก=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3201-102"){
          $arrayPostData['messages'][0]['text'] = "NKI000111,(3201-101) บ้านหัวหาด - (3201-102) บ้านพวก=Optic 12 Core DW = 2.4 km.
NKI000113,(3201-102) บ้านพวก - (3201-103) บ้านปากสวย=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3201-103"){
          $arrayPostData['messages'][0]['text'] = "NKI000113,(3201-102) บ้านพวก - (3201-103) บ้านปากสวย=Optic 12 Core DW = 2.6 km.
NKI000515,(3201-103) บ้านปากสวย - (3204-99) โนนศิลา=Optic 12 Core DW = 1.785 km.";
    }
else if($message == "3201-104"){
        $arrayPostData['messages'][0]['text'] = "NKI000115,(3201-83) บ้านหนองแดง - (3201-104) บ้านสร้างประทาย=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3201-105"){
          $arrayPostData['messages'][0]['text'] = "NKI000116,(3201-88) แมคโครหนองคาย - (3201-105) บ้านคำแค=Optic 12 Core DW = 1.5 km.
NKI000311,(3201-105) บ้านคำแค - (3201-157) บ้านหนาด=Optic 12 Core DW = 1.625 km.";
    }
else if($message == "3201-106"){
        $arrayPostData['messages'][0]['text'] = "NKI000118,(3201-88) แมคโครหนองคาย - (3201-106) บ้านเอื้ออาทรหนองคาย=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3201-107"){
          $arrayPostData['messages'][0]['text'] = "NKI000119,(3201-35) บ้านปะโค - (3201-107) ปะโค2=Optic 12 Core DW = 0.65 km.
NKI000314,(3201-107) ปะโค2 - (3201-155) บ้านโคกป่าฝาง=Optic 12 Core DW = 1.385 km.";
    }
else if($message == "3201-108"){
          $arrayPostData['messages'][0]['text'] = "NKI000120,(3201-81) ท่าดอกคำ - (3201-108) ศรีชมชื่น=Optic 12 Core DW = 1.3 km.
NKI000473,(3201-108) บ้านศรีชมชื่น - (3201-228) อบต.เมืองหมี=Optic 12 Core DW = 0.85 km.";
    }
else if($message == "3201-109"){
        $arrayPostData['messages'][0]['text'] = "NKI000122,(3203-42) บ้านสามัคคี - (3201-109) บ้านโคกดวงดี=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3201-111"){
        $arrayPostData['messages'][0]['text'] = "NKI000121,(3201-72) บิ๊กเจียง - (3201-111) วิทยาลัยเทคนิคหนองคาย=Optic 12 Core DW = 0.2 km.";
    }
else if($message == "3201-112"){
          $arrayPostData['messages'][0]['text'] = "NKI000220,(3201-127) บ้านเบิด - (3201-112) บ้านเมืองบาง=Optic 12 Core DW = 4 km.
NKI000330,(3201-112) เมืองบาง - (3201-183) บ้านเดื่อ=Optic 12 Core DW = 1.79 km.
NKI000387,(3201-112) บ้านเมืองบาง - (3201-184) บ้านหนองนาเมือง=Optic 12 Core DW = 3.29 km.
NKI000457,(3201-112) บ้านเมืองบาง - (3201-175) วังยางใต้=Optic 12 Core DW = 3.01 km.";
    }
else if($message == "3201-113"){
          $arrayPostData['messages'][0]['text'] = "NKI000125,(SJ) SJ หนองคาย-โพนพิสัย - (3201-113) บ้านหินโงม=Optic 12 Core DW = 4 km.
NKI000215,(3201-113) บ้านหินโงม - (3201-136) บ้านดงเจริญ=Optic 12 Core DW = 2.58 km.
NKI000216,(3201-113) บ้านหินโงม - (3201-138) บ้านพร้าว=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3201-114"){
          $arrayPostData['messages'][0]['text'] = "NKI000226,(3201-114) บ้านสีกาย - (3201-145) บ้านจอมแจ้ง=Optic 12 Core DW = 2.32 km.
NKI000431,(SJ) ME หนองคาย-ME โพนพิสัย - (3201-114) บ้านสีกาย=Optic 12 Core DW = 2.905 km.";
    }
else if($message == "3201-116"){
        $arrayPostData['messages'][0]['text'] = "NKI000432,(3201-78) โคกแมงเงา - (3201-116) บ้านหนองแจ้ง=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3201-121"){
          $arrayPostData['messages'][0]['text'] = "NKI000221,(3201-93) วิทยาลัยเทคนิค2 - (3201-121) บ้านเหล่าฝ้าย=Optic 12 Core DW = 6.045 km.
NKI000306,(3201-121) บ้านเหล่าฝ้าย - (3201-173) บ้านดอนซูด=Optic 12 Core DW = 2.64 km.
NKI000391,(3201-121) บ้านเหล่าฝ้าย - (3201-187) บ้านยูงทอง=Optic 12 Core DW = 2.57 km.";
    }
else if($message == "3201-122"){
        $arrayPostData['messages'][0]['text'] = "NKI000222,(3201-95) บังพวน - (3201-122) บ้านโคกคำทุ่งสว่าง=Optic 12 Core DW = 2.15 km.";
    }
else if($message == "3201-123"){
          $arrayPostData['messages'][0]['text'] = "NKI000139,(3201-123) ดอนหมู - (3201-133) บ้านม่วย=Optic 12 Core DW = 3.3 km.
NKI000223,(3201-95) บังพวน - (3201-123) บ้านมะเขือดอนหมู=Optic 12 Core DW = 2.26 km.
NKI000486,(3201-123) มะเขือดอนหมู - (3203-109) วังเทียม=Optic 12 Core DW = 2.155 km.
NKI000556,(3201-123) มะเขือดอนหมู - (3230-67) บ้านโพธิ์ทอง=Optic 12 Core DW = 1.17 km.";
    }
else if($message == "3201-125"){
        $arrayPostData['messages'][0]['text'] = "NKI000224,(3201-61) บ้านดอนดู่ - (3201-125) บ้านหนองขาม=Optic 12 Core DW = 1.53 km.";
    }
else if($message == "3201-126"){
          $arrayPostData['messages'][0]['text'] = "NKI000135,(3201-77) สถานีตำรวจหนองคาย - (3201-126) บ้านจอมเสด็จ=Optic 12 Core DW = 1.278 km.
NKI000433,(3201-126) บ้านจอมเสด็จ - (3201-127) บ้านเบิด=12 Core= 4 km.";
    }
else if($message == "3201-127"){
          $arrayPostData['messages'][0]['text'] = "NKI000220,(3201-127) บ้านเบิด - (3201-112) บ้านเมืองบาง=Optic 12 Core DW = 4 km.
NKI000433,(3201-126) บ้านจอมเสด็จ - (3201-127) บ้านเบิด=12 Core= 4 km.
NKI000475,(3201-127) บ้านเบิด - (3201-231) บ้านภู่=Optic 12 Core DW = 1.35 km.";
    }
else if($message == "3201-128"){
        $arrayPostData['messages'][0]['text'] = "NKI000136,(3201-36) ชุมชนหลังโรงเรียนปทุมเทพ - (3201-128) บ้านเคียงเมือง=Optic 12 Core DW = 0.798 km.";
    }
else if($message == "3201-129"){
          $arrayPostData['messages'][0]['text'] = "NKI000126,(3201-88) แมคโคร - (3201-129) บ้านม่วงคำ=Optic 12 Core DW = 2.75 km.
NKI000318,(3201-129) บ้านม่วงคำ - (3201-158) บ้านนาจันทร์=Optic 12 Core DW = 1.29 km.
NKI000451,(3201-129) ม่วงคำ - (3201-152) คำโป้งเป้ง=Optic 12 Core DW = 3.425 km.";
    }
else if($message == "3201-131"){
          $arrayPostData['messages'][0]['text'] = "NKI000137,(3201-133) บ้านม่วย - (3201-131) บ้านเชือก=Optic 12 Core DW = 1.41 km.
NKI000140,(3201-131) บ้านเชือก - (3201-134) บ้านโคกก่อง=Optic 12 Core DW = 2.96 km.";
    }
else if($message == "3201-132"){
        $arrayPostData['messages'][0]['text'] = "NKI000138,(3201-133) บ้านม่วย - (3201-132) บ้านหนองผือ=Optic 12 Core DW = 2.55 km.";
    }
else if($message == "3201-133"){
          $arrayPostData['messages'][0]['text'] = "NKI000137,(3201-133) บ้านม่วย - (3201-131) บ้านเชือก=Optic 12 Core DW = 1.41 km.
NKI000138,(3201-133) บ้านม่วย - (3201-132) บ้านหนองผือ=Optic 12 Core DW = 2.55 km.
NKI000139,(3201-123) ดอนหมู - (3201-133) บ้านม่วย=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3201-134"){
        $arrayPostData['messages'][0]['text'] = "NKI000140,(3201-131) บ้านเชือก - (3201-134) บ้านโคกก่อง=Optic 12 Core DW = 2.96 km.";
    }
else if($message == "3201-135"){
        $arrayPostData['messages'][0]['text'] = "NKI000214,(3201-93) เทคนิคหนองคาย 2 - (3201-135) บ้านบอน=Optic 12 Core DW = 4.5 km.";
    }
else if($message == "3201-136"){
          $arrayPostData['messages'][0]['text'] = "NKI000215,(3201-113) บ้านหินโงม - (3201-136) บ้านดงเจริญ=Optic 12 Core DW = 2.58 km.
NKI000427,(3201-136) ดงเจริญ - (3201-137) ศาลาคำ=Optic 12 Core DW = 2.04 km.";
    }
else if($message == "3201-137"){
          $arrayPostData['messages'][0]['text'] = "NKI000143,(3201-137) บ้านศาลาคำ - (3201-146) บ้านบง=Optic 12 Core DW = 3.85 km.
NKI000427,(3201-136) ดงเจริญ - (3201-137) ศาลาคำ=Optic 12 Core DW = 2.04 km.";
    }
else if($message == "3201-138"){
        $arrayPostData['messages'][0]['text'] = "NKI000216,(3201-113) บ้านหินโงม - (3201-138) บ้านพร้าว=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3201-139"){
          $arrayPostData['messages'][0]['text'] = "NKI000142,(3201-99) บ้านเดื่อ - (3201-139) บ้านหมากก่อง=Optic 12 Core DW = 2.92 km.
NKI000307,(3201-139) บ้านหมากก่อง - (3201-147) บ้านสันติสุข=Optic 12 Core DW = 2.535 km.
NKI000434,(3201-139) บ้านหมากก่อง - (3201-232) หมากก่อง2=Optic 12 Core DW = 1.55 km.";
    }
else if($message == "3201-141"){
        $arrayPostData['messages'][0]['text'] = "NKI000217,(3201-97) บ้านนาฮี - (3201-141) บ้านหนองหมื่น=Optic 12 Core DW = 3.05 km.";
    }
else if($message == "3201-142"){
        $arrayPostData['messages'][0]['text'] = "NKI000218,(3201-64) บ้านหนองสองห้อง - (3201-142) บ้านค่ายนคร=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3201-143"){
          $arrayPostData['messages'][0]['text'] = "NKI000219,(3201-64) บ้านหนองสองห้อง - (3201-143) บ้านสร้างพอก=Optic 12 Core DW = 4.7 km.
NKI000316,(3201-143) บ้านสร้างพอก - (3201-163) บ้านดงเว้น=Optic 12 Core DW = 3.59 km.";
    }
else if($message == "3201-144"){
          $arrayPostData['messages'][0]['text'] = "NKI000144,(3201-144) บ้านคุยนาขาว - (3201-148) บ้านเหล่านาทอง=Optic 12 Core DW = 1.42 km.
NKI000225,(3201-85) บ้านแจ้งสว่าง - (3201-144) บ้านคุยนางขาว=Optic 12 Core DW = 1.86 km.";
    }
else if($message == "3201-145"){
        $arrayPostData['messages'][0]['text'] = "NKI000226,(3201-114) บ้านสีกาย - (3201-145) บ้านจอมแจ้ง=Optic 12 Core DW = 2.32 km.";
    }
else if($message == "3201-146"){
          $arrayPostData['messages'][0]['text'] = "NKI000143,(3201-137) บ้านศาลาคำ - (3201-146) บ้านบง=Optic 12 Core DW = 3.85 km.
NKI000145,(3201-146) บ้านบง - (3201-174) บ้านท่าจาน=Optic 12 Core DW = 2.34 km.";
    }
else if($message == "3201-147"){
          $arrayPostData['messages'][0]['text'] = "NKI000307,(3201-139) บ้านหมากก่อง - (3201-147) บ้านสันติสุข=Optic 12 Core DW = 2.535 km.
NKI000460,(3201-147) สันติสุข - (3201-197) บ้านสังคมพัฒนา=Optic 12 Core DW = 1.31 km.";
    }
else if($message == "3201-148"){
        $arrayPostData['messages'][0]['text'] = "NKI000144,(3201-144) บ้านคุยนาขาว - (3201-148) บ้านเหล่านาทอง=Optic 12 Core DW = 1.42 km.";
    }
else if($message == "3201-149"){
        $arrayPostData['messages'][0]['text'] = "NKI000227,(3201-77) สถานีตำรวจหนองคาย - (3201-149) ชุมชนสวนอ้อย=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3201-151"){
        $arrayPostData['messages'][0]['text'] = "NKI000450,(3201-90) ค่าบกหวาน - (3201-151) โคกสำราญ=Optic 12 Core DW = 1.74 km.";
    }
else if($message == "3201-152"){
        $arrayPostData['messages'][0]['text'] = "NKI000451,(3201-129) ม่วงคำ - (3201-152) คำโป้งเป้ง=Optic 12 Core DW = 3.425 km.";
    }
else if($message == "3201-153"){
        $arrayPostData['messages'][0]['text'] = "NKI000319,(3201-97) บ้านนาฮี - (3201-153) บ้านดอนกอก=Optic 12 Core DW = 3.69 km.";
    }
else if($message == "3201-154"){
          $arrayPostData['messages'][0]['text'] = "NKI000452,(3201-63) หนองสองห้องME - (3201-154) หนองสองห้อง3=Optic 12 Core DW = 0.76 km.
NKI000474,(3201-154) หนองสองห้อง3 - (3201-229) โพธิ์เงิน=Optic 12 Core DW = 4 km.";
    }
else if($message == "3201-155"){
          $arrayPostData['messages'][0]['text'] = "NKI000314,(3201-107) ปะโค2 - (3201-155) บ้านโคกป่าฝาง=Optic 12 Core DW = 1.385 km.
NKI000392,(3201-155) บ้านโคกป่าฝาง - (3201-195) บ้านหนองบ่อ=Optic 12 Core DW = 1.985 km.";
    }
else if($message == "3201-156"){
        $arrayPostData['messages'][0]['text'] = "NKI000313,(3201-35) บ้านท่าดอกคำ - (3201-156) บ้านนาพิพาน=Optic 12 Core DW = 2.39 km.";
    }
else if($message == "3201-157"){
        $arrayPostData['messages'][0]['text'] = "NKI000311,(3201-105) บ้านคำแค - (3201-157) บ้านหนาด=Optic 12 Core DW = 1.625 km.";
    }
else if($message == "3201-158"){
        $arrayPostData['messages'][0]['text'] = "NKI000318,(3201-129) บ้านม่วงคำ - (3201-158) บ้านนาจันทร์=Optic 12 Core DW = 1.29 km.";
    }
else if($message == "3201-161"){
          $arrayPostData['messages'][0]['text'] = "NKI000317,(3230-40) บ้านน้ำสวย - (3201-161) บ้านนาอ่าง=Optic 12 Core DW = 2.96 km.
NKI000388,(3201-161) บ้านนาอ่าง - (3201-191) บ้านสร้างอ่าง=Optic 12 Core DW = 1.81 km.";
    }
else if($message == "3201-162"){
        $arrayPostData['messages'][0]['text'] = "NKI000453,(3201-165) ป่าตอง - (3201-162) โพนสว่าง=Optic 12 Core DW = 1.915 km.";
    }
else if($message == "3201-163"){
        $arrayPostData['messages'][0]['text'] = "NKI000316,(3201-143) บ้านสร้างพอก - (3201-163) บ้านดงเว้น=Optic 12 Core DW = 3.59 km.";
    }
else if($message == "3201-164"){
        $arrayPostData['messages'][0]['text'] = "NKI000315,(3201-165) บ้านป่าตอง - (3201-164) บ้านดาวเรือง.=Optic 12 Core DW = 2.22 km.";
    }
else if($message == "3201-165"){
          $arrayPostData['messages'][0]['text'] = "NKI000315,(3201-165) บ้านป่าตอง - (3201-164) บ้านดาวเรือง.=Optic 12 Core DW = 2.22 km.
NKI000389,(3201-165) บ้านป่าตอง - (3201-189) บ้านสวนหลง=Optic 12 Core DW = 1.73 km.
NKI000453,(3201-165) ป่าตอง - (3201-162) โพนสว่าง=Optic 12 Core DW = 1.915 km.
NKI000454,(3201-98) น้ำสวย2 - (3201-165) ป่าตอง=12 Core= 5.259 km.";
    }
else if($message == "3201-166"){
        $arrayPostData['messages'][0]['text'] = "NKI000310,(3201-35) บ้านปะโคเหนือ - (3201-166) บ้านไร่ ต. เมืองหมี=Optic 12 Core DW = 1.25 km.";
    }
else if($message == "3201-167"){
        $arrayPostData['messages'][0]['text'] = "NKI000455,(3201-175) วังยางใต้ - (3201-167) วังยางเหนือ=Optic 12 Core DW = 1.495 km.";
    }
else if($message == "3201-168"){
        $arrayPostData['messages'][0]['text'] = "NKI000309,(3201-86) บ้านเวียงคุก - (3201-168) บ้านเวียงคุกใต้=Optic 12 Core DW = 1.12 km.";
    }
else if($message == "3201-169"){
        $arrayPostData['messages'][0]['text'] = "NKI000308,(3201-86) บ้านเวียงคุก - (3201-169) บ้านเวียงคุกกลาง=Optic 12 Core DW = 1.03 km.";
    }
else if($message == "3201-171"){
        $arrayPostData['messages'][0]['text'] = "NKI000456,(3201-85) แจ้งสว่าง - (3201-171) วัดแจ้งสว่าง=Optic 12 Core DW = 1.352 km.";
    }
else if($message == "3201-173"){
        $arrayPostData['messages'][0]['text'] = "NKI000306,(3201-121) บ้านเหล่าฝ้าย - (3201-173) บ้านดอนซูด=Optic 12 Core DW = 2.64 km.";
    }
else if($message == "3201-174"){
          $arrayPostData['messages'][0]['text'] = "NKI000145,(3201-146) บ้านบง - (3201-174) บ้านท่าจาน=Optic 12 Core DW = 2.34 km.
NKI000394,(3201-174) บ้านท่าจาน - (3201-196) บ้านดงเวร=Optic 12 Core DW = 2.11 km.";
    }
else if($message == "3201-175"){
          $arrayPostData['messages'][0]['text'] = "NKI000455,(3201-175) วังยางใต้ - (3201-167) วังยางเหนือ=Optic 12 Core DW = 1.495 km.
NKI000457,(3201-112) บ้านเมืองบาง - (3201-175) วังยางใต้=Optic 12 Core DW = 3.01 km.";
    }
else if($message == "3201-176"){
        $arrayPostData['messages'][0]['text'] = "NKI000305,(3203-49) กวนวัน - (3201-176) บ้านกวนวันน้อย=Optic 12 Core DW = 0.985 km.";
    }
else if($message == "3201-179"){
        $arrayPostData['messages'][0]['text'] = "NKI000458,(3203-41) เนินพระเนาย์ - (3201-179) ต.โพธิ์ชัย เนินพระเนาว์=Optic 12 Core DW = 0.815 km.";
    }
else if($message == "3201-181"){
        $arrayPostData['messages'][0]['text'] = "NKI000459,(3201-78) โคกแมงเงา - (3201-181) ต.กวนวัน หนองบัวทอง=Optic 12 Core DW = 1 km.";
    }
else if($message == "3201-182"){
        $arrayPostData['messages'][0]['text'] = "NKI000386,(3201-195) บ้านหนองบ่อ - (3201-182) บ้านไผ่สีทอง=Optic 12 Core DW = 2.935 km.";
    }
else if($message == "3201-183"){
        $arrayPostData['messages'][0]['text'] = "NKI000330,(3201-112) เมืองบาง - (3201-183) บ้านเดื่อ=Optic 12 Core DW = 1.79 km.";
    }
else if($message == "3201-184"){
        $arrayPostData['messages'][0]['text'] = "NKI000387,(3201-112) บ้านเมืองบาง - (3201-184) บ้านหนองนาเมือง=Optic 12 Core DW = 3.29 km.";
    }
else if($message == "3201-186"){
        $arrayPostData['messages'][0]['text'] = "NKI000331,(3201-77) สถานีตำรวจหนองคาย - (3201-186) บ้านหนองไผ่=Optic 12 Core DW = 1.75 km.";
    }
else if($message == "3201-187"){
        $arrayPostData['messages'][0]['text'] = "NKI000391,(3201-121) บ้านเหล่าฝ้าย - (3201-187) บ้านยูงทอง=Optic 12 Core DW = 2.57 km.";
    }
else if($message == "3201-188"){
        $arrayPostData['messages'][0]['text'] = "NKI000390,(3201-99) บ้านเดื่อ - (3201-188) บ้านเสริมสุข=Optic 12 Core DW = 1.62 km.";
    }
else if($message == "3201-189"){
        $arrayPostData['messages'][0]['text'] = "NKI000389,(3201-165) บ้านป่าตอง - (3201-189) บ้านสวนหลง=Optic 12 Core DW = 1.73 km.";
    }
else if($message == "3201-191"){
        $arrayPostData['messages'][0]['text'] = "NKI000388,(3201-161) บ้านนาอ่าง - (3201-191) บ้านสร้างอ่าง=Optic 12 Core DW = 1.81 km.";
    }
else if($message == "3201-192"){
        $arrayPostData['messages'][0]['text'] = "NKI000393,(3201-193) บ้านหนองหญ้าม้า - (3201-192) บ้านบ่อแปบ=Optic 12 Core DW = 1.13 km.";
    }
else if($message == "3201-193"){
          $arrayPostData['messages'][0]['text'] = "NKI000393,(3201-193) บ้านหนองหญ้าม้า - (3201-192) บ้านบ่อแปบ=Optic 12 Core DW = 1.13 km.
NKI000414,(sj) sj - (3201-193) หนองหญ้าม้า=Optic 12 Core DW = 1.19 km.";
    }
else if($message == "3201-194"){
        $arrayPostData['messages'][0]['text'] = "NKI000395,(3201-61) ดอนดู่ - (3201-194) หนองขาม=Optic 12 Core DW = 1.595 km.";
    }
else if($message == "3201-195"){
          $arrayPostData['messages'][0]['text'] = "NKI000386,(3201-195) บ้านหนองบ่อ - (3201-182) บ้านไผ่สีทอง=Optic 12 Core DW = 2.935 km.
NKI000392,(3201-155) บ้านโคกป่าฝาง - (3201-195) บ้านหนองบ่อ=Optic 12 Core DW = 1.985 km.";
    }
else if($message == "3201-196"){
        $arrayPostData['messages'][0]['text'] = "NKI000394,(3201-174) บ้านท่าจาน - (3201-196) บ้านดงเวร=Optic 12 Core DW = 2.11 km.";
    }
else if($message == "3201-197"){
        $arrayPostData['messages'][0]['text'] = "NKI000460,(3201-147) สันติสุข - (3201-197) บ้านสังคมพัฒนา=Optic 12 Core DW = 1.31 km.";
    }
else if($message == "3201-198"){
        $arrayPostData['messages'][0]['text'] = "NKI000461,(3203-49) กวนวัน - (3201-198) บ้านหนองบัว2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3201-199"){
        $arrayPostData['messages'][0]['text'] = "NKI000462,(3201-39) โครงการบ้านหาดคำ - (3201-199) โครงการบ้านหาดคำ2=Optic 12 Core DW = 0.85 km.";
    }
else if($message == "3201-201"){
        $arrayPostData['messages'][0]['text'] = "NKI000463,(3201-51) บ้านนฤมล - (3201-201) ครัวสวนปาล์ม=Optic 12 Core DW = 0.92 km.";
    }
else if($message == "3201-202"){
        $arrayPostData['messages'][0]['text'] = "NKI000464,(3201-85) แจ้งสว่าง - (3201-202) คุยนางขาว=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3201-203"){
        $arrayPostData['messages'][0]['text'] = "NKI000465,(3201-68) ศูนย์ราชการหนองคาย - (3201-203) ดอนดู่=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3201-205"){
        $arrayPostData['messages'][0]['text'] = "NKI000466,(3201-88) แมคโครหนองคาย - (3201-205) ม่วงคำ2=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3201-206"){
        $arrayPostData['messages'][0]['text'] = "NKI000467,(3201-70) ปทุมเทพ2 - (3201-206) บ้านบ่อหิน=Optic 12 Core DW = 1.33 km.";
    }
else if($message == "3201-208"){
        $arrayPostData['messages'][0]['text'] = "NKI000468,(3201-227) ดอนแดงใต้ - (3201-208) ดอนแดงเหนือ=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3201-216"){
        $arrayPostData['messages'][0]['text'] = "NKI000469,(3201-78) โคกแมงเงา - (3201-216) โคกแมงเงา2=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3201-224"){
        $arrayPostData['messages'][0]['text'] = "NKI000470,(3201-61) บ้านดอนดู่ - (3201-224) บ้านนาไก่=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3201-225"){
        $arrayPostData['messages'][0]['text'] = "NKI000471,(3201-81) ท่าดอกคำ - (3201-225) บ้านบุงเล=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3201-227"){
          $arrayPostData['messages'][0]['text'] = "NKI000468,(3201-227) ดอนแดงใต้ - (3201-208) ดอนแดงเหนือ=Optic 12 Core DW = 1.4 km.
NKI000472,(3201-33) ME officeหนองคาย - (3201-227) ดอนแดงใต้=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3201-228"){
        $arrayPostData['messages'][0]['text'] = "NKI000473,(3201-108) บ้านศรีชมชื่น - (3201-228) อบต.เมืองหมี=Optic 12 Core DW = 0.85 km.";
    }
else if($message == "3201-229"){
        $arrayPostData['messages'][0]['text'] = "NKI000474,(3201-154) หนองสองห้อง3 - (3201-229) โพธิ์เงิน=Optic 12 Core DW = 4 km.";
    }
else if($message == "3201-231"){
        $arrayPostData['messages'][0]['text'] = "NKI000475,(3201-127) บ้านเบิด - (3201-231) บ้านภู่=Optic 12 Core DW = 1.35 km.";
    }
else if($message == "3201-232"){
        $arrayPostData['messages'][0]['text'] = "NKI000434,(3201-139) บ้านหมากก่อง - (3201-232) หมากก่อง2=Optic 12 Core DW = 1.55 km.";
    }
else if($message == "3201-31"){
          $arrayPostData['messages'][0]['text'] = "NKI000015,(3201-31) ME ท่าเสด็จ - (3201-50) วัดอรุณรังษี=Optic 12 Core DW = 1.9 km.
NKI000020,(3201-31) ME ท่าเสด็จ - (3201-56) วัดโพธิ์ชัย=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3201-32"){
          $arrayPostData['messages'][0]['text'] = "NKI000003,(3201-32) me ท่าเสด็จ - (3231-31) ME สวท.หนองคาย=12 Core= 3.3 km.
NKI000004,(3201-32) me ท่าเสด็จ - (3201-48) me officeหนองคาย=Optic 12 Core DW = 3 km.
NKI000112,(3201-32) me ท่าเสด็จ - (3201-91) me วัดศรีสะเกษ=Optic 12 Core DW = 0.17 km.";
    }
else if($message == "3201-33"){
          $arrayPostData['messages'][0]['text'] = "NKI000007,(3201-49) คลองถม - (3201-33) Node WIFI=Optic 12 Core DW = 1 km.
NKI000263,(3201-33) ME หนองคาย - (3202-41) ME ศรีเชียงใหม่=12 Core= 42.263 km.
NKI000279,(3201-33) หนองคาย - (3202-41) ศรีเชียงใหม่=12 Core= 42.263 km.
NKI000472,(3201-33) ME officeหนองคาย - (3201-227) ดอนแดงใต้=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3201-34"){
          $arrayPostData['messages'][0]['text'] = "NKI000008,(3201-61) บ้านดอนดู่ - (3201-34) บ้านหนองเดิ่น=Optic 12 Core DW = 4 km.
NKI000030,(3201-34) บ้านหนองเดิ่น - (3201-69) หนองเดิ่น 2=Optic 12 Core DW = 0.55 km.";
    }
else if($message == "3201-35"){
          $arrayPostData['messages'][0]['text'] = "NKI000009,(3201-37) โครงการบ้านเสงียว - (3201-35) บ้านปะโค=Optic 12 Core DW = 3.85 km.
NKI000041,(3201-35) บ้านปะโค - (3201-81) ท่าดอกคำ=Optic 12 Core DW = 1.7 km.
NKI000083,(3201-35) บ้านปะโค - (3201-86) เวียงคุก=Optic 12 Core DW = 5 km.
NKI000119,(3201-35) บ้านปะโค - (3201-107) ปะโค2=Optic 12 Core DW = 0.65 km.
NKI000310,(3201-35) บ้านปะโคเหนือ - (3201-166) บ้านไร่ ต. เมืองหมี=Optic 12 Core DW = 1.25 km.
NKI000313,(3201-35) บ้านท่าดอกคำ - (3201-156) บ้านนาพิพาน=Optic 12 Core DW = 2.39 km.";
    }
else if($message == "3201-36"){
          $arrayPostData['messages'][0]['text'] = "NKI000010,(3201-50) วัดอรุณรังษี - (3201-36) ชุมชนหลังโรงเรียนปทุมเทพ=Optic 12 Core DW = 1.2 km.
NKI000018,(3201-36) ชุมชนหลังโรงเรียนปทุมเทพ - (3201-53) อาชีวหนองคาย=Optic 12 Core DW = 0.6 km.
NKI000031,(3201-36) ชุมชนหลังโรงเรียนปทุมเทพ - (3201-70) ปทุมเทพ2=Optic 12 Core DW = 0.75 km.
NKI000136,(3201-36) ชุมชนหลังโรงเรียนปทุมเทพ - (3201-128) บ้านเคียงเมือง=Optic 12 Core DW = 0.798 km.";
    }
else if($message == "3201-37"){
        $arrayPostData['messages'][0]['text'] = "NKI000009,(3201-37) โครงการบ้านเสงียว - (3201-35) บ้านปะโค=Optic 12 Core DW = 3.85 km.";
    }
else if($message == "3201-39"){
          $arrayPostData['messages'][0]['text'] = "NKI000012,(3231-31) ME สวท.หนองคาย - (3201-39) โครงการบ้านหาดคำ=Optic 12 Core DW = 5.7 km.
NKI000089,(3201-39) โครงการบ้านหาดคำ - (3201-89) บ้านหาดคำ2=Optic 12 Core DW = 1 km.
NKI000462,(3201-39) โครงการบ้านหาดคำ - (3201-199) โครงการบ้านหาดคำ2=Optic 12 Core DW = 0.85 km.";
    }
else if($message == "3201-41"){
          $arrayPostData['messages'][0]['text'] = "NKI000013,(3231-31) ME สวท.หนองคาย - (3201-41) โครงการบ้านนาคลอง=Optic 12 Core DW = 2.7 km.
NKI000114,(3201-41) โครงการบ้านนาคลอง - (3201-83) บ้านหนองแดง=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3201-48"){
          $arrayPostData['messages'][0]['text'] = "NKI000002,(3201-48) officeหนองคาย - (3201-63) me หนองสองห้อง=12 Core= 15.308 km.
NKI000004,(3201-32) me ท่าเสด็จ - (3201-48) me officeหนองคาย=Optic 12 Core DW = 3 km.
NKI000014,(3201-48) ME officeหนองคาย - (3201-49) คลองถม=Optic 12 Core DW = 1.35 km.
NKI000017,(3201-48) officeหนองคาย - (3201-52) บ้านหนองบัว=Optic 12 Core DW = 3.3 km.
NKI000023,(3201-48) ME officeหนองคาย - (3201-59) ตลาดท่าอุดม=Optic 12 Core DW = 1.25 km.
NKI000029,(3201-48) ME officeหนองคาย - (3201-68) ศูนย์ราชการหนองคาย=Optic 12 Core DW = 1.8 km.
NKI000069,(3201-48) Shop3bbหนองคาย - () OLT คลองถม=12 Core= 1.2 km.
NKI000105,(3201-48) officeหนองคาย - (3204-37) me โพนพิสัย=12 Core= 47.733 km.
NKI000271,(3201-48) 3BB หนองคาย - (3203-34) ME ท่าบ่อ=12 Core= 28 km.";
    }
else if($message == "3201-49"){
          $arrayPostData['messages'][0]['text'] = "NKI000007,(3201-49) คลองถม - (3201-33) Node WIFI=Optic 12 Core DW = 1 km.
NKI000014,(3201-48) ME officeหนองคาย - (3201-49) คลองถม=Optic 12 Core DW = 1.35 km.
NKI000033,(3201-49) คลองถม - (3201-72) บิ๊กเจียง=Optic 12 Core DW = 1.1 km.
NKI000057,(3201-49) คลองถม - (3204-40) ตลาดชัยพร=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3201-50"){
          $arrayPostData['messages'][0]['text'] = "NKI000010,(3201-50) วัดอรุณรังษี - (3201-36) ชุมชนหลังโรงเรียนปทุมเทพ=Optic 12 Core DW = 1.2 km.
NKI000015,(3201-31) ME ท่าเสด็จ - (3201-50) วัดอรุณรังษี=Optic 12 Core DW = 1.9 km.
NKI000019,(3201-50) วัดอรุณรังษี - (3201-55) เซ็นเตอร์พอยท์=Optic 12 Core DW = 0.5 km.
NKI000036,(3201-50) วัดอรุณรังษี - (3201-75) โรงแรมแกรนด์=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3201-51"){
          $arrayPostData['messages'][0]['text'] = "NKI000016,(3201-53) อาชีวหนองคาย - (3201-51) บ้านนฤมล=Optic 12 Core DW = 1.7 km.
NKI000037,(3201-51) บ้านนฤมล - (3201-76) บ้านมิตรภาพ=Optic 12 Core DW = 0.4 km.
NKI000086,(3201-51) บ้านนฤมล - (3201-88) แมคโครหนองคาย=Optic 12 Core DW = 1.9 km.
NKI000463,(3201-51) บ้านนฤมล - (3201-201) ครัวสวนปาล์ม=Optic 12 Core DW = 0.92 km.";
    }
else if($message == "3201-52"){
          $arrayPostData['messages'][0]['text'] = "NKI000011,(3201-52) บ้านหนองบัว - (3201-37) โครงการบ้านเสงียว=Optic 12 Core DW = 3.8 km.
NKI000017,(3201-48) officeหนองคาย - (3201-52) บ้านหนองบัว=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3201-53"){
          $arrayPostData['messages'][0]['text'] = "NKI000016,(3201-53) อาชีวหนองคาย - (3201-51) บ้านนฤมล=Optic 12 Core DW = 1.7 km.
NKI000018,(3201-36) ชุมชนหลังโรงเรียนปทุมเทพ - (3201-53) อาชีวหนองคาย=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3201-55"){
        $arrayPostData['messages'][0]['text'] = "NKI000019,(3201-50) วัดอรุณรังษี - (3201-55) เซ็นเตอร์พอยท์=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3201-56"){
          $arrayPostData['messages'][0]['text'] = "NKI000020,(3201-31) ME ท่าเสด็จ - (3201-56) วัดโพธิ์ชัย=Optic 12 Core DW = 1.2 km.
NKI000022,(3201-56) วัดโพธิ์ชัย - (3201-58) วัดสระแก้ว=Optic 12 Core DW = 0.95 km.
NKI000027,(3201-56) วัดโพธิ์ชัย - (3201-66) วัดโพธิชัย2=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3201-57"){
          $arrayPostData['messages'][0]['text'] = "NKI000021,(3201-58) วัดสระแก้ว - (3201-57) วัดธาตุ=Optic 12 Core DW = 1 km.
NKI000035,(3201-57) วัดธาตุ - (3201-74) คุ้มโพธิ์ศรี=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3201-58"){
          $arrayPostData['messages'][0]['text'] = "NKI000021,(3201-58) วัดสระแก้ว - (3201-57) วัดธาตุ=Optic 12 Core DW = 1 km.
NKI000022,(3201-56) วัดโพธิ์ชัย - (3201-58) วัดสระแก้ว=Optic 12 Core DW = 0.95 km.";
    }
else if($message == "3201-59"){
          $arrayPostData['messages'][0]['text'] = "NKI000023,(3201-48) ME officeหนองคาย - (3201-59) ตลาดท่าอุดม=Optic 12 Core DW = 1.25 km.
NKI000025,(3201-59) ตลาดท่าอุดม - (3201-61) บ้านดอนดู่=Optic 12 Core DW = 2 km.
NKI000032,(3201-59) ตลาดท่าอุดม - (3201-71) สะพานมิตรภาพ=Optic 12 Core DW = 1.5 km.
NKI000039,(3201-59) ตลาดท่าอุดม - (3201-78) โคกแมงเงา=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3201-60"){
        $arrayPostData['messages'][0]['text'] = "NKI000024,(3204-40) ตลาดชัยพร - (3201-60) อู่ต่อเรือ=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3201-61"){
          $arrayPostData['messages'][0]['text'] = "NKI000008,(3201-61) บ้านดอนดู่ - (3201-34) บ้านหนองเดิ่น=Optic 12 Core DW = 4 km.
NKI000025,(3201-59) ตลาดท่าอุดม - (3201-61) บ้านดอนดู่=Optic 12 Core DW = 2 km.
NKI000082,(3201-61) บ้านดอนดู่ - (3201-85) แจ้งสว่าง=Optic 12 Core DW = 1.65 km.
NKI000224,(3201-61) บ้านดอนดู่ - (3201-125) บ้านหนองขาม=Optic 12 Core DW = 1.53 km.
NKI000395,(3201-61) ดอนดู่ - (3201-194) หนองขาม=Optic 12 Core DW = 1.595 km.
NKI000470,(3201-61) บ้านดอนดู่ - (3201-224) บ้านนาไก่=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3201-62"){
        $arrayPostData['messages'][0]['text'] = "NKI000026,(3231-31) ME สวท.หนองคาย - (3201-62) พัดชา=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3201-63"){
          $arrayPostData['messages'][0]['text'] = "NKI000001,(3001-32) me จงมี - (3201-63) me หนองสองห้อง=12 Core= 39.82 km.
NKI000002,(3201-48) officeหนองคาย - (3201-63) me หนองสองห้อง=12 Core= 15.308 km.
NKI000095,(3201-63) me หนองสองห้อง - (3201-90) ค่ายบกหวาน=Optic 12 Core DW = 3 km.
NKI000100,(3201-63) me หนองสองห้อง - (3203-38) ME ท่าบ่อ2=12 Core= 29.974 km.
NKI000104,(3201-63) me หนองสองห้อง - (3201-64) หนองสองห้อง=Optic 12 Core DW = 0.35 km.
NKI000452,(3201-63) หนองสองห้องME - (3201-154) หนองสองห้อง3=Optic 12 Core DW = 0.76 km.
UDN000017,(3032-36) ชุมสาย อุดรคอนโดเทล - (3201-63) หนองสองห้อง=12 Core= 40.886 km.";
    }
else if($message == "3201-64"){
          $arrayPostData['messages'][0]['text'] = "NKI000103,(3201-64) หนองสองห้อง - (3201-96) หนองสองห้อง2=Optic 12 Core DW = 1.2 km.
NKI000104,(3201-63) me หนองสองห้อง - (3201-64) หนองสองห้อง=Optic 12 Core DW = 0.35 km.
NKI000218,(3201-64) บ้านหนองสองห้อง - (3201-142) บ้านค่ายนคร=Optic 12 Core DW = 1.7 km.
NKI000219,(3201-64) บ้านหนองสองห้อง - (3201-143) บ้านสร้างพอก=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3201-66"){
        $arrayPostData['messages'][0]['text'] = "NKI000027,(3201-56) วัดโพธิ์ชัย - (3201-66) วัดโพธิชัย2=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3201-67"){
        $arrayPostData['messages'][0]['text'] = "NKI000028,(3204-40) ตลาดชัยพร - (3201-67) ตลาดชัยพร2=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3201-68"){
          $arrayPostData['messages'][0]['text'] = "NKI000029,(3201-48) ME officeหนองคาย - (3201-68) ศูนย์ราชการหนองคาย=Optic 12 Core DW = 1.8 km.
NKI000068,(3201-68) ศูนย์ราชการหนองคาย - () กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม=Optic 12 Core DW = 1.1 km.
NKI000465,(3201-68) ศูนย์ราชการหนองคาย - (3201-203) ดอนดู่=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3201-69"){
        $arrayPostData['messages'][0]['text'] = "NKI000030,(3201-34) บ้านหนองเดิ่น - (3201-69) หนองเดิ่น 2=Optic 12 Core DW = 0.55 km.";
    }
else if($message == "3201-70"){
          $arrayPostData['messages'][0]['text'] = "NKI000031,(3201-36) ชุมชนหลังโรงเรียนปทุมเทพ - (3201-70) ปทุมเทพ2=Optic 12 Core DW = 0.75 km.
NKI000467,(3201-70) ปทุมเทพ2 - (3201-206) บ้านบ่อหิน=Optic 12 Core DW = 1.33 km.";
    }
else if($message == "3201-71"){
        $arrayPostData['messages'][0]['text'] = "NKI000032,(3201-59) ตลาดท่าอุดม - (3201-71) สะพานมิตรภาพ=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3201-72"){
          $arrayPostData['messages'][0]['text'] = "NKI000033,(3201-49) คลองถม - (3201-72) บิ๊กเจียง=Optic 12 Core DW = 1.1 km.
NKI000121,(3201-72) บิ๊กเจียง - (3201-111) วิทยาลัยเทคนิคหนองคาย=Optic 12 Core DW = 0.2 km.";
    }
else if($message == "3201-73"){
        $arrayPostData['messages'][0]['text'] = "NKI000034,(3203-41) เนินพระเนาย์ - (3201-73) นาโพธิ์=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3201-74"){
        $arrayPostData['messages'][0]['text'] = "NKI000035,(3201-57) วัดธาตุ - (3201-74) คุ้มโพธิ์ศรี=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3201-75"){
        $arrayPostData['messages'][0]['text'] = "NKI000036,(3201-50) วัดอรุณรังษี - (3201-75) โรงแรมแกรนด์=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3201-76"){
        $arrayPostData['messages'][0]['text'] = "NKI000037,(3201-51) บ้านนฤมล - (3201-76) บ้านมิตรภาพ=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3201-77"){
          $arrayPostData['messages'][0]['text'] = "NKI000038,(3201-80) การเคหะหนองคาย - (3201-77) สถานีตำรวจหนองคาย=Optic 12 Core DW = 0.9 km.
NKI000090,(3201-77) สถานีตำรวจหนองคาย - (3201-93) วิทยาลัยเทคนิค2=Optic 12 Core DW = 1.2 km.
NKI000135,(3201-77) สถานีตำรวจหนองคาย - (3201-126) บ้านจอมเสด็จ=Optic 12 Core DW = 1.278 km.
NKI000227,(3201-77) สถานีตำรวจหนองคาย - (3201-149) ชุมชนสวนอ้อย=Optic 12 Core DW = 1.9 km.
NKI000331,(3201-77) สถานีตำรวจหนองคาย - (3201-186) บ้านหนองไผ่=Optic 12 Core DW = 1.75 km.";
    }
else if($message == "3201-78"){
          $arrayPostData['messages'][0]['text'] = "NKI000039,(3201-59) ตลาดท่าอุดม - (3201-78) โคกแมงเงา=Optic 12 Core DW = 0.8 km.
NKI000432,(3201-78) โคกแมงเงา - (3201-116) บ้านหนองแจ้ง=Optic 12 Core DW = 2.3 km.
NKI000459,(3201-78) โคกแมงเงา - (3201-181) ต.กวนวัน หนองบัวทอง=Optic 12 Core DW = 1 km.
NKI000469,(3201-78) โคกแมงเงา - (3201-216) โคกแมงเงา2=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3201-80"){
          $arrayPostData['messages'][0]['text'] = "NKI000038,(3201-80) การเคหะหนองคาย - (3201-77) สถานีตำรวจหนองคาย=Optic 12 Core DW = 0.9 km.
NKI000040,(3203-42) บ้านสามัคคี - (3201-80) การเคหะหนองคาย=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3201-81"){
          $arrayPostData['messages'][0]['text'] = "NKI000041,(3201-35) บ้านปะโค - (3201-81) ท่าดอกคำ=Optic 12 Core DW = 1.7 km.
NKI000120,(3201-81) ท่าดอกคำ - (3201-108) ศรีชมชื่น=Optic 12 Core DW = 1.3 km.
NKI000471,(3201-81) ท่าดอกคำ - (3201-225) บ้านบุงเล=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3201-83"){
          $arrayPostData['messages'][0]['text'] = "NKI000114,(3201-41) โครงการบ้านนาคลอง - (3201-83) บ้านหนองแดง=Optic 12 Core DW = 1.1 km.
NKI000115,(3201-83) บ้านหนองแดง - (3201-104) บ้านสร้างประทาย=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3201-84"){
          $arrayPostData['messages'][0]['text'] = "NKI000070,(3201-84) OLT คลองถม - () ODF ศูนย์ราชการ=12 Core= 1.8 km.
NKI000073,(3201-84) OLT คลองถม - () ODFตลาดชัยพร=12 Core= 1.5 km.";
    }
else if($message == "3201-85"){
          $arrayPostData['messages'][0]['text'] = "NKI000082,(3201-61) บ้านดอนดู่ - (3201-85) แจ้งสว่าง=Optic 12 Core DW = 1.65 km.
NKI000225,(3201-85) บ้านแจ้งสว่าง - (3201-144) บ้านคุยนางขาว=Optic 12 Core DW = 1.86 km.
NKI000456,(3201-85) แจ้งสว่าง - (3201-171) วัดแจ้งสว่าง=Optic 12 Core DW = 1.352 km.
NKI000464,(3201-85) แจ้งสว่าง - (3201-202) คุยนางขาว=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3201-86"){
          $arrayPostData['messages'][0]['text'] = "NKI000049,(3201-86) บ้านเวียงคุก - (3203-40) โพนสา=Optic 12 Core DW = 7.5 km.
NKI000083,(3201-35) บ้านปะโค - (3201-86) เวียงคุก=Optic 12 Core DW = 5 km.
NKI000087,(3201-86) เวียงคุก - (3203-52) บ้านท่ามะเฟือง=Optic 12 Core DW = 3.2 km.
NKI000308,(3201-86) บ้านเวียงคุก - (3201-169) บ้านเวียงคุกกลาง=Optic 12 Core DW = 1.03 km.
NKI000309,(3201-86) บ้านเวียงคุก - (3201-168) บ้านเวียงคุกใต้=Optic 12 Core DW = 1.12 km.
NKI000485,(3201-86) เวียงคุก - (3203-108) ศิลาเลข=Optic 12 Core DW = 1.21 km.";
    }
else if($message == "3201-87"){
          $arrayPostData['messages'][0]['text'] = "NKI000228,(3230-37) น้ำสวย - (3201-87) สระใคร=Optic 12 Core DW = 5.341 km.
NKI000261,(3201-98) SJ อุดร-หนองคาย - (3201-87) ME สระใคร=12 Core= 5.186 km.
NKI000262,(3201-87) ME สระใคร - (SJ) SJ ท่าบ่อ-หนองสองห้อง=12 Core= 15.527 km.
NKI000277,(3201-98) SJ อุดร-หนองคาย - (3201-87) สระใคร=12 Core= 5.186 km.
NKI000278,(3201-87) สระใคร - (SJ) SJ ท่าบ่อ-หนองสองห้อง=12 Core= 15.527 km.
NKI000341,(3201-87) สระใคร - (3230-57) บ้านไชยา=Optic 12 Core DW = 1.07 km.
NKI000449,(3201-87) สระใคร - (3230-38) บ้านคอกช้าง=Optic 12 Core DW = 2.358 km.";
    }
else if($message == "3201-88"){
          $arrayPostData['messages'][0]['text'] = "NKI000086,(3201-51) บ้านนฤมล - (3201-88) แมคโครหนองคาย=Optic 12 Core DW = 1.9 km.
NKI000116,(3201-88) แมคโครหนองคาย - (3201-105) บ้านคำแค=Optic 12 Core DW = 1.5 km.
NKI000118,(3201-88) แมคโครหนองคาย - (3201-106) บ้านเอื้ออาทรหนองคาย=Optic 12 Core DW = 3.2 km.
NKI000126,(3201-88) แมคโคร - (3201-129) บ้านม่วงคำ=Optic 12 Core DW = 2.75 km.
NKI000466,(3201-88) แมคโครหนองคาย - (3201-205) ม่วงคำ2=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3201-89"){
        $arrayPostData['messages'][0]['text'] = "NKI000089,(3201-39) โครงการบ้านหาดคำ - (3201-89) บ้านหาดคำ2=Optic 12 Core DW = 1 km.";
    }
else if($message == "3201-90"){
          $arrayPostData['messages'][0]['text'] = "NKI000095,(3201-63) me หนองสองห้อง - (3201-90) ค่ายบกหวาน=Optic 12 Core DW = 3 km.
NKI000106,(3201-90) ค่ายบกหวาน - (3201-97) บ้านนาฮี=Optic 12 Core DW = 1.8 km.
NKI000450,(3201-90) ค่าบกหวาน - (3201-151) โคกสำราญ=Optic 12 Core DW = 1.74 km.";
    }
else if($message == "3201-91"){
          $arrayPostData['messages'][0]['text'] = "NKI000096,(3201-91) me วัดศรีสะเกษ - (3201-92) โรงเรียนจีน=Optic 12 Core DW = 0.2 km.
NKI000112,(3201-32) me ท่าเสด็จ - (3201-91) me วัดศรีสะเกษ=Optic 12 Core DW = 0.17 km.";
    }
else if($message == "3201-92"){
        $arrayPostData['messages'][0]['text'] = "NKI000096,(3201-91) me วัดศรีสะเกษ - (3201-92) โรงเรียนจีน=Optic 12 Core DW = 0.2 km.";
    }
else if($message == "3201-93"){
          $arrayPostData['messages'][0]['text'] = "NKI000090,(3201-77) สถานีตำรวจหนองคาย - (3201-93) วิทยาลัยเทคนิค2=Optic 12 Core DW = 1.2 km.
NKI000214,(3201-93) เทคนิคหนองคาย 2 - (3201-135) บ้านบอน=Optic 12 Core DW = 4.5 km.
NKI000221,(3201-93) วิทยาลัยเทคนิค2 - (3201-121) บ้านเหล่าฝ้าย=Optic 12 Core DW = 6.045 km.";
    }
else if($message == "3201-94"){
          $arrayPostData['messages'][0]['text'] = "NKI000097,() SJ ท่าบ่อ-หนองสองห้อง - (3201-94) บ้านถ่อน=Optic 12 Core DW = 0.5 km.
NKI000098,(3201-94) บ้านถ่อน - (3201-95) พระธาตุบังพวน=Optic 12 Core DW = 3.965 km.
NKI000237,(3201-94) บ้านถ่อน - (3203-69) บ้านโนนศิลา=Optic 12 Core DW = 3.25 km.
NKI000289,(3201-94) บ้านถ่อน - (3203-93) หนองกก ต.บ้านถ่อน=Optic 12 Core DW = 1.74 km.";
    }
else if($message == "3201-95"){
          $arrayPostData['messages'][0]['text'] = "NKI000098,(3201-94) บ้านถ่อน - (3201-95) พระธาตุบังพวน=Optic 12 Core DW = 3.965 km.
NKI000222,(3201-95) บังพวน - (3201-122) บ้านโคกคำทุ่งสว่าง=Optic 12 Core DW = 2.15 km.
NKI000223,(3201-95) บังพวน - (3201-123) บ้านมะเขือดอนหมู=Optic 12 Core DW = 2.26 km.";
    }
else if($message == "3201-96"){
        $arrayPostData['messages'][0]['text'] = "NKI000103,(3201-64) หนองสองห้อง - (3201-96) หนองสองห้อง2=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3201-97"){
          $arrayPostData['messages'][0]['text'] = "NKI000106,(3201-90) ค่ายบกหวาน - (3201-97) บ้านนาฮี=Optic 12 Core DW = 1.8 km.
NKI000217,(3201-97) บ้านนาฮี - (3201-141) บ้านหนองหมื่น=Optic 12 Core DW = 3.05 km.
NKI000319,(3201-97) บ้านนาฮี - (3201-153) บ้านดอนกอก=Optic 12 Core DW = 3.69 km.";
    }
else if($message == "3201-98"){
          $arrayPostData['messages'][0]['text'] = "NKI000107,(3230-37) น้ำสวย - (3201-98) น้ำสวย2=Optic 12 Core DW = 1.4 km.
NKI000261,(3201-98) SJ อุดร-หนองคาย - (3201-87) ME สระใคร=12 Core= 5.186 km.
NKI000277,(3201-98) SJ อุดร-หนองคาย - (3201-87) สระใคร=12 Core= 5.186 km.
NKI000454,(3201-98) น้ำสวย2 - (3201-165) ป่าตอง=12 Core= 5.259 km.";
    }
else if($message == "3201-99"){
          $arrayPostData['messages'][0]['text'] = "NKI000109,(SJ) SJ หนองคาย-โพนพิสัย - (3201-99) บ้านเดื่อ=Optic 12 Core DW = 2 km.
NKI000110,(3201-99) บ้านเดื่อ - (3201-101) บ้านหัวหาด=Optic 12 Core DW = 3.5 km.
NKI000142,(3201-99) บ้านเดื่อ - (3201-139) บ้านหมากก่อง=Optic 12 Core DW = 2.92 km.
NKI000390,(3201-99) บ้านเดื่อ - (3201-188) บ้านเสริมสุข=Optic 12 Core DW = 1.62 km.";
    }
else if($message == "3202-37"){
          $arrayPostData['messages'][0]['text'] = "NKI000005,(3202-37) สถานีตำรวจ - (3202-42) โนนสง่า 2=Optic 12 Core DW = 2.2 km.
NKI000042,(3203-31) โครงการ บ้านนำโมง อำเภอท่าบ่อ - (3202-37) สถานีตำรวจ=12 Core= 12.4 km.
NKI000060,(3202-37) สถานีตำรวจ - () คุณธนพงษ์ ภัทรวรเมธ=Optic 12 Core DW = 0.4 km.
NKI000230,(3202-37) สถานีตำรวจ - (3202-47) ปตท.ศรีเชียงใหม่=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3202-38"){
          $arrayPostData['messages'][0]['text'] = "NKI000044,(3202-38) โนนสง่า - (3202-39) โลตัสศรีเชียงใหม่=Optic 12 Core DW = 2 km.
NKI000117,(3202-38) โนนสง่า - (3202-43) ศรีเชียงใหม่ซอย8=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3202-38 "){
        $arrayPostData['messages'][0]['text'] = "NKI000062,(3202-38 ) โนนสง่า  - (3202-40) บ้านป่าสัก=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3202-39"){
        $arrayPostData['messages'][0]['text'] = "NKI000044,(3202-38) โนนสง่า - (3202-39) โลตัสศรีเชียงใหม่=Optic 12 Core DW = 2 km.";
    }
else if($message == "3202-40"){
          $arrayPostData['messages'][0]['text'] = "NKI000062,(3202-38 ) โนนสง่า  - (3202-40) บ้านป่าสัก=Optic 12 Core DW = 1.9 km.
NKI000063,(3202-40) บ้านป่าสัก - (3202-41) บ้านหม้อ=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3202-41"){
          $arrayPostData['messages'][0]['text'] = "NKI000063,(3202-40) บ้านป่าสัก - (3202-41) บ้านหม้อ=Optic 12 Core DW = 2.5 km.
NKI000260,(3208-61) ME สังคม - (3202-41) ME ศรีเชียงใหม่=12 Core= 38.438 km.
NKI000263,(3201-33) ME หนองคาย - (3202-41) ME ศรีเชียงใหม่=12 Core= 42.263 km.
NKI000272,(3202-41) ME บ้านหม้อ - (3208-61) ME สังคม=12 Core= 37 km.
NKI000273,(3203-38) ME ท่าบ่อ - (3202-41) ME บ้านหม้อ=12 Core= 2.3 km.
NKI000276,(3208-61) สังคม - (3202-41) ศรีเชียงใหม่=12 Core= 38.438 km.
NKI000279,(3201-33) หนองคาย - (3202-41) ศรีเชียงใหม่=12 Core= 42.263 km.
NKI000285,(3202-41) บ้านหม้อ - (3202-54) บ้านหม้อ3 ต.ปากหมัน=Optic 12 Core DW = 0.5 km.
NKI000348,(3202-41) บ้านหม้อ - (3202-67) บ้านขุมคำ=Optic 12 Core DW = 2.12 km.
UDN000474,(3012-31) บ้านผือ1 - (3202-41) บ้านหม้อ=12 Core= 60.375 km.";
    }
else if($message == "3202-42"){
          $arrayPostData['messages'][0]['text'] = "NKI000005,(3202-37) สถานีตำรวจ - (3202-42) โนนสง่า 2=Optic 12 Core DW = 2.2 km.
NKI000123,(3202-42) โนนสง่า2 - (3202-45) บ้านไทยสามัคคี=Optic 12 Core DW = 4.412 km.
NKI000333,(3202-42) บ้านโนนสง่า 2 - (3202-61) บ้านโนนสง่า(ใต้)=Optic 12 Core DW = 1.83 km.";
    }
else if($message == "3202-43"){
        $arrayPostData['messages'][0]['text'] = "NKI000117,(3202-38) โนนสง่า - (3202-43) ศรีเชียงใหม่ซอย8=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3202-44"){
          $arrayPostData['messages'][0]['text'] = "NKI000229,(SJ) SJ ศรีเชียงใหม่ -สังคม - (3202-44) บ้านไทรงาม=Optic 12 Core DW = 1.155 km.
NKI000332,(3202-44) บ้านไทรงาม - (3202-63) บ้านพระบาท=Optic 12 Core DW = 1.54 km.
NKI000351,(3202-44) บ้านไทรงาม - (3202-64) บ้านโคกซวก=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3202-45"){
          $arrayPostData['messages'][0]['text'] = "NKI000123,(3202-42) โนนสง่า2 - (3202-45) บ้านไทยสามัคคี=Optic 12 Core DW = 4.412 km.
NKI000124,(3202-45) บ้านไทยสามัคคี - (3202-46) บ้านดอนก่อ=Optic 12 Core DW = 4 km.
NKI000421,(3202-45) บ้านไทยสามัคคี - (3202-59) บ้านไทยสามัคคี=Optic 12 Core DW = 1.79 km.";
    }
else if($message == "3202-46"){
          $arrayPostData['messages'][0]['text'] = "NKI000124,(3202-45) บ้านไทยสามัคคี - (3202-46) บ้านดอนก่อ=Optic 12 Core DW = 4 km.
NKI000280,(SJ) SJ ศรีเชียงใหม่ - โพธิ์ตาก - (3202-46) บ้านดอนก่อ=Optic 12 Core DW = 0.1 km.
NKI000281,(3202-46) บ้านดอนก่อ - (3202-58) หนองปลาปาก ต.หนองปลาปาก=Optic 12 Core DW = 1.49 km.
NKI000284,(3202-46) บ้านดอนก่อ - (3202-55) ดอนก่อ2 ต.หนองปลาปาก=Optic 12 Core DW = 0.46 km.";
    }
else if($message == "3202-47"){
        $arrayPostData['messages'][0]['text'] = "NKI000230,(3202-37) สถานีตำรวจ - (3202-47) ปตท.ศรีเชียงใหม่=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3202-48"){
        $arrayPostData['messages'][0]['text'] = "NKI000283,(3202-57) จำปาทอง ต. หนองปลาปาก - (3202-48) บ้านนาโพธิ์ ต.หนองปลาปาก=Optic 12 Core DW = 1.97 km.";
    }
else if($message == "3202-49"){
        $arrayPostData['messages'][0]['text'] = "NKI000435,(SJ) ME บ้านหม้อ-ME บ้านผือ - (3202-49) ดงบัง(ศรีเชียงใหม่)=Optic 12 Core DW = 3.9 km.";
    }
else if($message == "3202-51"){
          $arrayPostData['messages'][0]['text'] = "NKI000476,(3203-53) บ้านหัวทราย - (3202-51) พานพร้าว=Optic 12 Core DW = 1.99 km.
NKI000477,(3202-51) พานพร้าว - (SJ) โรงแรมพรหมลิขิต=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3202-53"){
        $arrayPostData['messages'][0]['text'] = "NKI000286,(3202-54) บ้านหม้อ3 ต.ปากหมัน - (3202-53) บ้านหม้อ2 ต.ปากหมัน=Optic 12 Core DW = 0.785 km.";
    }
else if($message == "3202-54"){
          $arrayPostData['messages'][0]['text'] = "NKI000285,(3202-41) บ้านหม้อ - (3202-54) บ้านหม้อ3 ต.ปากหมัน=Optic 12 Core DW = 0.5 km.
NKI000286,(3202-54) บ้านหม้อ3 ต.ปากหมัน - (3202-53) บ้านหม้อ2 ต.ปากหมัน=Optic 12 Core DW = 0.785 km.";
    }
else if($message == "3202-55"){
        $arrayPostData['messages'][0]['text'] = "NKI000284,(3202-46) บ้านดอนก่อ - (3202-55) ดอนก่อ2 ต.หนองปลาปาก=Optic 12 Core DW = 0.46 km.";
    }
else if($message == "3202-56"){
          $arrayPostData['messages'][0]['text'] = "NKI000478,(SJ) ME บ้านผือ-ME บ้านหม้อ - (3202-56) ต.หนองปลาปาก บ้านเสียว=Optic 12 Core DW = 0.73 km.
NKI000554,(3202-56) บ้านเสียว - (3217-50) ต.โพนทอง บ้านโคกบุญสนอง=Optic 12 Core DW = 3.72 km.";
    }
else if($message == "3202-57"){
          $arrayPostData['messages'][0]['text'] = "NKI000282,(3202-58) หนองปลาปาก ต.หนองปลาปาก - (3202-57) จำปาทอง ต. หนองปลาปาก=Optic 12 Core DW = 1.46 km.
NKI000283,(3202-57) จำปาทอง ต. หนองปลาปาก - (3202-48) บ้านนาโพธิ์ ต.หนองปลาปาก=Optic 12 Core DW = 1.97 km.";
    }
else if($message == "3202-58"){
          $arrayPostData['messages'][0]['text'] = "NKI000281,(3202-46) บ้านดอนก่อ - (3202-58) หนองปลาปาก ต.หนองปลาปาก=Optic 12 Core DW = 1.49 km.
NKI000282,(3202-58) หนองปลาปาก ต.หนองปลาปาก - (3202-57) จำปาทอง ต. หนองปลาปาก=Optic 12 Core DW = 1.46 km.";
    }
else if($message == "3202-59"){
        $arrayPostData['messages'][0]['text'] = "NKI000421,(3202-45) บ้านไทยสามัคคี - (3202-59) บ้านไทยสามัคคี=Optic 12 Core DW = 1.79 km.";
    }
else if($message == "3202-61"){
        $arrayPostData['messages'][0]['text'] = "NKI000333,(3202-42) บ้านโนนสง่า 2 - (3202-61) บ้านโนนสง่า(ใต้)=Optic 12 Core DW = 1.83 km.";
    }
else if($message == "3202-62"){
        $arrayPostData['messages'][0]['text'] = "NKI000479,(SJ) ME สังคม -ME บ้านหม้อ - (3202-62) ต.บ้านหม้อ ท่ากฐิน=Optic 12 Core DW = 2.45 km.";
    }
else if($message == "3202-63"){
        $arrayPostData['messages'][0]['text'] = "NKI000332,(3202-44) บ้านไทรงาม - (3202-63) บ้านพระบาท=Optic 12 Core DW = 1.54 km.";
    }
else if($message == "3202-64"){
          $arrayPostData['messages'][0]['text'] = "NKI000351,(3202-44) บ้านไทรงาม - (3202-64) บ้านโคกซวก=Optic 12 Core DW = 1.85 km.
NKI000422,(3202-64) บ้านโคกซวก - (3202-65) บ้านไทยเจริญ=Optic 12 Core DW = 2.28 km.";
    }
else if($message == "3202-65"){
          $arrayPostData['messages'][0]['text'] = "NKI000422,(3202-64) บ้านโคกซวก - (3202-65) บ้านไทยเจริญ=Optic 12 Core DW = 2.28 km.
NKI000480,(3202-65) ต.พระพุทธบาท ไทยเจริญ - (3202-66) ต.พระพุทธบาท วังน้ำมอก=12 Core= 5.75 km.";
    }
else if($message == "3202-66"){
        $arrayPostData['messages'][0]['text'] = "NKI000480,(3202-65) ต.พระพุทธบาท ไทยเจริญ - (3202-66) ต.พระพุทธบาท วังน้ำมอก=12 Core= 5.75 km.";
    }
else if($message == "3202-67"){
        $arrayPostData['messages'][0]['text'] = "NKI000348,(3202-41) บ้านหม้อ - (3202-67) บ้านขุมคำ=Optic 12 Core DW = 2.12 km.";
    }
else if($message == "3203-103"){
        $arrayPostData['messages'][0]['text'] = "NKI000481,(3203-52) บ้านท่ามะเฟือง - (3203-103) บ้านท่ามะเฟือง2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3203-104"){
        $arrayPostData['messages'][0]['text'] = "NKI000482,(3203-45) แยกน้ำโมง - (3203-104) แยกน้ำโมง2=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3203-105"){
        $arrayPostData['messages'][0]['text'] = "NKI000483,(3203-57) ป่าสักใต้ - (3203-105) บ้านป่าสักใต้2=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3203-106"){
        $arrayPostData['messages'][0]['text'] = "NKI000484,(3203-60) บ้านหงษ์ทองสามขา - (3203-106) บ้านหงษ์ทองสามขา2=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3203-108"){
        $arrayPostData['messages'][0]['text'] = "NKI000485,(3201-86) เวียงคุก - (3203-108) ศิลาเลข=Optic 12 Core DW = 1.21 km.";
    }
else if($message == "3203-109"){
        $arrayPostData['messages'][0]['text'] = "NKI000486,(3201-123) มะเขือดอนหมู - (3203-109) วังเทียม=Optic 12 Core DW = 2.155 km.";
    }
else if($message == "3203-111"){
        $arrayPostData['messages'][0]['text'] = "NKI000487,(3203-46) การไฟฟ้าท่าบ่อ - (3203-111) โลตัสท่าบ่อ2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3203-112"){
        $arrayPostData['messages'][0]['text'] = "NKI000488,(3203-47) ที่ดินท่าบ่อ - (3203-112) มิตรประสิทธิ์=Optic 12 Core DW = 1 km.";
    }
else if($message == "3203-113"){
        $arrayPostData['messages'][0]['text'] = "NKI000489,(3203-43) โรงพยาบาลท่าบ่อ - (3203-113) ต.ท่าบ่อ บ้านนาโพธิ์=Optic 12 Core DW = 3.4 km.";
    }
else if($message == "3203-114"){
        $arrayPostData['messages'][0]['text'] = "NKI000436,(SJ) ME หนองสองห้อง-ME ท่าบ่อ - (3203-114) โพนสาฮิลส์=Optic 12 Core DW = 0.575 km.";
    }
else if($message == "3203-115"){
        $arrayPostData['messages'][0]['text'] = "NKI000490,(3203-50) นาช้างน้ำ - (3203-115) เกษตรผล=Optic 12 Core DW = 1.285 km.";
    }
else if($message == "3203-116"){
        $arrayPostData['messages'][0]['text'] = "NKI000437,(3203-58) บ้านเดื่อ - (3203-116) บ้านเดื่อ2=Optic 12 Core DW = 1.535 km.";
    }
else if($message == "3203-117"){
        $arrayPostData['messages'][0]['text'] = "NKI000491,(3203-64) ท่าสำราญ - (3203-117) ท่าแดง=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3203-31"){
          $arrayPostData['messages'][0]['text'] = "NKI000042,(3203-31) โครงการ บ้านนำโมง อำเภอท่าบ่อ - (3202-37) สถานีตำรวจ=12 Core= 12.4 km.
NKI000045,(3203-37) ท่าบ่อ1 - (3203-31) โครงการ บ้านนำโมง อำเภอท่าบ่อ=Optic 12 Core DW = 3.3 km.
NKI000233,(3203-31) โครงการ บ้านนำโมง อำเภอท่าบ่อ - (3203-59) บ้านทุ่ม=Optic 12 Core DW = 3.25 km.
NKI000234,(3203-31) โครงการ บ้านนำโมง อำเภอท่าบ่อ - (3203-60) บ้านหงษ์ทองสามขา=Optic 12 Core DW = 2.45 km.";
    }
else if($message == "3203-34"){
        $arrayPostData['messages'][0]['text'] = "NKI000271,(3201-48) 3BB หนองคาย - (3203-34) ME ท่าบ่อ=12 Core= 28 km.";
    }
else if($message == "3203-37"){
          $arrayPostData['messages'][0]['text'] = "NKI000045,(3203-37) ท่าบ่อ1 - (3203-31) โครงการ บ้านนำโมง อำเภอท่าบ่อ=Optic 12 Core DW = 3.3 km.
NKI000046,(3203-38) ท่าบ่อ2 - (3203-37) ท่าบ่อ1=Optic 12 Core DW = 0.65 km.
NKI000052,(3203-37) ท่าบ่อ1 - (3203-43) โรงพยาบาลท่าบ่อ=Optic 12 Core DW = 0.95 km.
NKI000054,(3203-37) ท่าบ่อ1 - (3203-45) แยกน้ำโมง=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3203-38"){
          $arrayPostData['messages'][0]['text'] = "NKI000046,(3203-38) ท่าบ่อ2 - (3203-37) ท่าบ่อ1=Optic 12 Core DW = 0.65 km.
NKI000047,(3203-40) โพนสา - (3203-38) ท่าบ่อ2=Optic 12 Core DW = 3.85 km.
NKI000048,(3203-38) ท่าบ่อ2 - (3203-39) ท่าบ่อ3=Optic 12 Core DW = 1 km.
NKI000053,(3203-38) ท่าบ่อ2 - (3203-44) วัดแก้วพิจิตร=Optic 12 Core DW = 0.8 km.
NKI000100,(3201-63) me หนองสองห้อง - (3203-38) ME ท่าบ่อ2=12 Core= 29.974 km.
NKI000231,(3203-38) ท่าบ่อ2 - (3203-46) การไฟฟ้าท่าบ่อ=Optic 12 Core DW = 1.115 km.
NKI000273,(3203-38) ME ท่าบ่อ - (3202-41) ME บ้านหม้อ=12 Core= 2.3 km.
NKI000294,(3203-38) ME ท่าบ่อ - (3203-40) บ้านโพนสา=Optic 12 Core DW = 3.86 km.";
    }
else if($message == "3203-39"){
        $arrayPostData['messages'][0]['text'] = "NKI000048,(3203-38) ท่าบ่อ2 - (3203-39) ท่าบ่อ3=Optic 12 Core DW = 1 km.";
    }
else if($message == "3203-39 "){
        $arrayPostData['messages'][0]['text'] = "NKI000061,(3203-39 ) ท่าบ่อ3  - (3203-47) ที่ดินท่าบ่อ=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3203-40"){
          $arrayPostData['messages'][0]['text'] = "NKI000047,(3203-40) โพนสา - (3203-38) ท่าบ่อ2=Optic 12 Core DW = 3.85 km.
NKI000049,(3201-86) บ้านเวียงคุก - (3203-40) โพนสา=Optic 12 Core DW = 7.5 km.
NKI000294,(3203-38) ME ท่าบ่อ - (3203-40) บ้านโพนสา=Optic 12 Core DW = 3.86 km.";
    }
else if($message == "3203-41"){
          $arrayPostData['messages'][0]['text'] = "NKI000034,(3203-41) เนินพระเนาย์ - (3201-73) นาโพธิ์=Optic 12 Core DW = 0.5 km.
NKI000050,(3231-31) ME สวท.หนองคาย - (3203-41) เนินพระเนาย์=Optic 12 Core DW = 0.75 km.
NKI000458,(3203-41) เนินพระเนาย์ - (3201-179) ต.โพธิ์ชัย เนินพระเนาว์=Optic 12 Core DW = 0.815 km.";
    }
else if($message == "3203-42"){
          $arrayPostData['messages'][0]['text'] = "NKI000040,(3203-42) บ้านสามัคคี - (3201-80) การเคหะหนองคาย=Optic 12 Core DW = 1.1 km.
NKI000051,(3231-31) ME สวท.หนองคาย - (3203-42) บ้านสามัคคี=Optic 12 Core DW = 1.2 km.
NKI000122,(3203-42) บ้านสามัคคี - (3201-109) บ้านโคกดวงดี=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3203-43"){
          $arrayPostData['messages'][0]['text'] = "NKI000052,(3203-37) ท่าบ่อ1 - (3203-43) โรงพยาบาลท่าบ่อ=Optic 12 Core DW = 0.95 km.
NKI000489,(3203-43) โรงพยาบาลท่าบ่อ - (3203-113) ต.ท่าบ่อ บ้านนาโพธิ์=Optic 12 Core DW = 3.4 km.";
    }
else if($message == "3203-44"){
        $arrayPostData['messages'][0]['text'] = "NKI000053,(3203-38) ท่าบ่อ2 - (3203-44) วัดแก้วพิจิตร=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3203-45"){
          $arrayPostData['messages'][0]['text'] = "NKI000054,(3203-37) ท่าบ่อ1 - (3203-45) แยกน้ำโมง=Optic 12 Core DW = 1.6 km.
NKI000482,(3203-45) แยกน้ำโมง - (3203-104) แยกน้ำโมง2=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3203-46"){
          $arrayPostData['messages'][0]['text'] = "NKI000231,(3203-38) ท่าบ่อ2 - (3203-46) การไฟฟ้าท่าบ่อ=Optic 12 Core DW = 1.115 km.
NKI000487,(3203-46) การไฟฟ้าท่าบ่อ - (3203-111) โลตัสท่าบ่อ2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3203-47"){
          $arrayPostData['messages'][0]['text'] = "NKI000061,(3203-39 ) ท่าบ่อ3  - (3203-47) ที่ดินท่าบ่อ=Optic 12 Core DW = 1.3 km.
NKI000067,(3203-47) ที่ดินท่าบ่อ - (3203-50) นาช้างน้ำ=Optic 12 Core DW = 2.2 km.
NKI000488,(3203-47) ที่ดินท่าบ่อ - (3203-112) มิตรประสิทธิ์=Optic 12 Core DW = 1 km.
NKI000500,(3203-47) ที่ดินท่าบ่อ - (3203-90) ชุมชนป่าตาล1=Optic 12 Core DW = 1 km.";
    }
else if($message == "3203-48"){
          $arrayPostData['messages'][0]['text'] = "NKI000064,() SJ น้ำโมง-สถานีตำรวจ ศรีเชียงใหม่ - (3203-48) กองนาง=Optic 12 Core DW = 0.8 km.
NKI000088,(3203-48) กองนาง - (3203-53) บ้านหัวทราย=Optic 12 Core DW = 3.2 km.
NKI000108,(3203-48) กองนาง - (3203-54) กองนาง2=Optic 12 Core DW = 1.4 km.
NKI000232,(3203-48) กองนาง - (3203-57) บ้านป่าสักใต้=Optic 12 Core DW = 4.6 km.
NKI000499,(3203-48) กองนาง - (3203-89) ปากมาง=Optic 12 Core DW = 2 km.";
    }
else if($message == "3203-49"){
          $arrayPostData['messages'][0]['text'] = "NKI000065,() SJ บ้านหนองบัว-บ้านเสงียว - (3203-49) กวนวัน=Optic 12 Core DW = 0.06 km.
NKI000305,(3203-49) กวนวัน - (3201-176) บ้านกวนวันน้อย=Optic 12 Core DW = 0.985 km.
NKI000461,(3203-49) กวนวัน - (3201-198) บ้านหนองบัว2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3203-50"){
          $arrayPostData['messages'][0]['text'] = "NKI000067,(3203-47) ที่ดินท่าบ่อ - (3203-50) นาช้างน้ำ=Optic 12 Core DW = 2.2 km.
NKI000490,(3203-50) นาช้างน้ำ - (3203-115) เกษตรผล=Optic 12 Core DW = 1.285 km.
NKI000502,(3203-50) นาช้างน้ำ - (3203-92) ไทรทอง ต.ท่าบ่อ=Optic 12 Core DW = 1.11 km.
UDN000406,(3203-50) นาช้างน้ำ - (3012-31) บ้านผือ1=12 Core= 20 km.";
    }
else if($message == "3203-51"){
          $arrayPostData['messages'][0]['text'] = "NKI000081,() SJ บ้านผือ - (3203-51) บ้านว่าน=Optic 12 Core DW = 0.7 km.
NKI000193,(3203-51) บ้านว่าน - (3203-73) บ้านเทวี=Optic 12 Core DW = 2.505 km.
NKI000235,(3203-51) บ้านว่าน - (3203-62) บ้านโคกคอน=12 Core= 5.969 km.
NKI000268,(3203-51) บ้านว่าน - (3203-87) ลำดวน=Optic 12 Core DW = 1.31 km.
NKI000359,(3203-51) บ้านว่าน - (3203-88) บ้านผำไผ่=Optic 12 Core DW = 1.255 km.";
    }
else if($message == "3203-52"){
          $arrayPostData['messages'][0]['text'] = "NKI000087,(3201-86) เวียงคุก - (3203-52) บ้านท่ามะเฟือง=Optic 12 Core DW = 3.2 km.
NKI000481,(3203-52) บ้านท่ามะเฟือง - (3203-103) บ้านท่ามะเฟือง2=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3203-53"){
          $arrayPostData['messages'][0]['text'] = "NKI000088,(3203-48) กองนาง - (3203-53) บ้านหัวทราย=Optic 12 Core DW = 3.2 km.
NKI000476,(3203-53) บ้านหัวทราย - (3202-51) พานพร้าว=Optic 12 Core DW = 1.99 km.";
    }
else if($message == "3203-54"){
        $arrayPostData['messages'][0]['text'] = "NKI000108,(3203-48) กองนาง - (3203-54) กองนาง2=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3203-57"){
          $arrayPostData['messages'][0]['text'] = "NKI000232,(3203-48) กองนาง - (3203-57) บ้านป่าสักใต้=Optic 12 Core DW = 4.6 km.
NKI000483,(3203-57) ป่าสักใต้ - (3203-105) บ้านป่าสักใต้2=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3203-58"){
          $arrayPostData['messages'][0]['text'] = "NKI000192,(3203-58) บ้านเดื่อ - (3203-72) บ้านน้อย=Optic 12 Core DW = 2.181 km.
NKI000350,(3203-58) บ้านเดื่อ - (3203-98) บ้านกุดบง=Optic 12 Core DW = 2.62 km.
NKI000428,(SJ) ME หนองสองห้อง-ME ท่าบ่อ - (3203-58) บ้านเดื่อ=Optic 12 Core DW = 3.76 km.
NKI000437,(3203-58) บ้านเดื่อ - (3203-116) บ้านเดื่อ2=Optic 12 Core DW = 1.535 km.";
    }
else if($message == "3203-59"){
          $arrayPostData['messages'][0]['text'] = "NKI000233,(3203-31) โครงการ บ้านนำโมง อำเภอท่าบ่อ - (3203-59) บ้านทุ่ม=Optic 12 Core DW = 3.25 km.
NKI000236,(3203-59) บ้านทุ่ม - (3203-64) ท่าสำราญ=Optic 12 Core DW = 4.497 km.
NKI000288,(3203-59) บ้านทุ่ม - (3203-94) อุ่มเย็น ต.น้ำโมง=Optic 12 Core DW = 2.67 km.
NKI000347,(3203-59) บ้านทุ่ม - (3203-97) บ้านฝาง=Optic 12 Core DW = 1.34 km.";
    }
else if($message == "3203-60"){
          $arrayPostData['messages'][0]['text'] = "NKI000234,(3203-31) โครงการ บ้านนำโมง อำเภอท่าบ่อ - (3203-60) บ้านหงษ์ทองสามขา=Optic 12 Core DW = 2.45 km.
NKI000287,(3203-60) บ้านหงษ์ทองสามขา - (3203-95) บ้านนาบง ต.กองนาง=Optic 12 Core DW = 2.79 km.
NKI000484,(3203-60) บ้านหงษ์ทองสามขา - (3203-106) บ้านหงษ์ทองสามขา2=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3203-62"){
          $arrayPostData['messages'][0]['text'] = "NKI000146,(3203-62) บ้านโคกคอน - (3203-67) บ้านนาข่า=Optic 12 Core DW = 6.419 km.
NKI000235,(3203-51) บ้านว่าน - (3203-62) บ้านโคกคอน=12 Core= 5.969 km.
NKI000494,(3203-62) โคกคอน - (3203-82) หนองผือ ต.โคกคอน=Optic 12 Core DW = 3.46 km.
NKI000495,(3203-62) โคกคอน - (3203-83) ดอนเมือง=Optic 12 Core DW = 1.44 km.";
    }
else if($message == "3203-64"){
          $arrayPostData['messages'][0]['text'] = "NKI000148,(3203-64) บ้านท่าสำราญ - (3203-71) บ้านหนองแวง=Optic 12 Core DW = 4.42 km.
NKI000236,(3203-59) บ้านทุ่ม - (3203-64) ท่าสำราญ=Optic 12 Core DW = 4.497 km.
NKI000491,(3203-64) ท่าสำราญ - (3203-117) ท่าแดง=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3203-65"){
          $arrayPostData['messages'][0]['text'] = "NKI000269,(3203-65) บ้านกลางน้อย - (3203-88) ผำไผ=Optic 12 Core DW = 1.3 km.
NKI000429,(SJ) บ้านว่าน-โคกคอน - (3203-65) บ้านกลางน้อย=Optic 12 Core DW = 1 km.
NKI000493,(3203-65) กลางน้อย - (3203-76) บ้านเป้า=Optic 12 Core DW = 2.648 km.";
    }
else if($message == "3203-66"){
        $arrayPostData['messages'][0]['text'] = "NKI000127,(SJ) SJโคกคอน - (3203-66) โพนพระ=Optic 12 Core DW = 0.56 km.";
    }
else if($message == "3203-67"){
          $arrayPostData['messages'][0]['text'] = "NKI000146,(3203-62) บ้านโคกคอน - (3203-67) บ้านนาข่า=Optic 12 Core DW = 6.419 km.
NKI000498,(3203-67) บ้านนาข่า - (3203-86) ส้มโฮง=Optic 12 Core DW = 2.092 km.";
    }
else if($message == "3203-69"){
          $arrayPostData['messages'][0]['text'] = "NKI000147,(3203-69) บ้านโนนศิลา - (3203-70) บ้านโพนงาม=Optic 12 Core DW = 3.81 km.
NKI000237,(3201-94) บ้านถ่อน - (3203-69) บ้านโนนศิลา=Optic 12 Core DW = 3.25 km.";
    }
else if($message == "3203-70"){
        $arrayPostData['messages'][0]['text'] = "NKI000147,(3203-69) บ้านโนนศิลา - (3203-70) บ้านโพนงาม=Optic 12 Core DW = 3.81 km.";
    }
else if($message == "3203-71"){
        $arrayPostData['messages'][0]['text'] = "NKI000148,(3203-64) บ้านท่าสำราญ - (3203-71) บ้านหนองแวง=Optic 12 Core DW = 4.42 km.";
    }
else if($message == "3203-72"){
        $arrayPostData['messages'][0]['text'] = "NKI000192,(3203-58) บ้านเดื่อ - (3203-72) บ้านน้อย=Optic 12 Core DW = 2.181 km.";
    }
else if($message == "3203-73"){
          $arrayPostData['messages'][0]['text'] = "NKI000193,(3203-51) บ้านว่าน - (3203-73) บ้านเทวี=Optic 12 Core DW = 2.505 km.
NKI000354,(3203-73) บ้านเทวี - (3203-74) บ้านดอนขม=Optic 12 Core DW = 1.483 km.";
    }
else if($message == "3203-74"){
        $arrayPostData['messages'][0]['text'] = "NKI000354,(3203-73) บ้านเทวี - (3203-74) บ้านดอนขม=Optic 12 Core DW = 1.483 km.";
    }
else if($message == "3203-75"){
        $arrayPostData['messages'][0]['text'] = "NKI000492,(SJ) ME ท่าบ่อ-ME บ้านผือ - (3203-75) แสนสุข ต.บ้านว่าน=Optic 12 Core DW = 4.83 km.";
    }
else if($message == "3203-76"){
        $arrayPostData['messages'][0]['text'] = "NKI000493,(3203-65) กลางน้อย - (3203-76) บ้านเป้า=Optic 12 Core DW = 2.648 km.";
    }
else if($message == "3203-77"){
          $arrayPostData['messages'][0]['text'] = "NKI000267,(3203-77) นาน้ำพาย - (3203-78) นาดง=Optic 12 Core DW = 3.344 km.
NKI000344,(3204-99) บ้านโนนศิลา - (3203-77) บ้านนาน้ำพราย=Optic 12 Core DW = 3.96 km.
NKI000353,(3203-77) บ้านนาน้ำพาย - (3203-79) บ้านหนองนาง=Optic 12 Core DW = 3.96 km.
NKI000382,(3203-77) บ้านนาน้ำพราย - (3203-78) บ้านนาดง=Optic 12 Core DW = 3.344 km.";
    }
else if($message == "3203-78"){
          $arrayPostData['messages'][0]['text'] = "NKI000267,(3203-77) นาน้ำพาย - (3203-78) นาดง=Optic 12 Core DW = 3.344 km.
NKI000352,(3203-78) บ้านนาดง - (3203-81) บ้านดงนาคำ=Optic 12 Core DW = 2.68 km.
NKI000382,(3203-77) บ้านนาน้ำพราย - (3203-78) บ้านนาดง=Optic 12 Core DW = 3.344 km.";
    }
else if($message == "3203-79"){
          $arrayPostData['messages'][0]['text'] = "NKI000267,(3203-77) นาน้ำพาย - (3203-78) นาดง=Optic 12 Core DW = 3.344 km.
NKI000352,(3203-78) บ้านนาดง - (3203-81) บ้านดงนาคำ=Optic 12 Core DW = 2.68 km.
NKI000382,(3203-77) บ้านนาน้ำพราย - (3203-78) บ้านนาดง=Optic 12 Core DW = 3.344 km.";
    }
else if($message == "3203-80"){
        $arrayPostData['messages'][0]['text'] = "NKI000343,(3203-79) บ้านหนองนาง - (3203-80) บ้านนาตุ=Optic 12 Core DW = 1.62 km.";
    }
else if($message == "3203-81"){
          $arrayPostData['messages'][0]['text'] = "NKI000349,(3203-81) บ้านดงนาคำ - (3203-96) บ้านราษฏร์สามมัคคี=Optic 12 Core DW = 3.23 km.
NKI000352,(3203-78) บ้านนาดง - (3203-81) บ้านดงนาคำ=Optic 12 Core DW = 2.68 km.";
    }
else if($message == "3203-82"){
        $arrayPostData['messages'][0]['text'] = "NKI000494,(3203-62) โคกคอน - (3203-82) หนองผือ ต.โคกคอน=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3203-83"){
        $arrayPostData['messages'][0]['text'] = "NKI000495,(3203-62) โคกคอน - (3203-83) ดอนเมือง=Optic 12 Core DW = 1.44 km.";
    }
else if($message == "3203-84"){
        $arrayPostData['messages'][0]['text'] = "NKI000496,(3203-85) โพนตาล - (3203-84) บ้านกวด=Optic 12 Core DW = 2.24 km.";
    }
else if($message == "3203-85"){
          $arrayPostData['messages'][0]['text'] = "NKI000496,(3203-85) โพนตาล - (3203-84) บ้านกวด=Optic 12 Core DW = 2.24 km.
NKI000497,(3203-86) ส้มโฮง - (3203-85) โพนตาล=Optic 12 Core DW = 1.76 km.";
    }
else if($message == "3203-86"){
          $arrayPostData['messages'][0]['text'] = "NKI000497,(3203-86) ส้มโฮง - (3203-85) โพนตาล=Optic 12 Core DW = 1.76 km.
NKI000498,(3203-67) บ้านนาข่า - (3203-86) ส้มโฮง=Optic 12 Core DW = 2.092 km.";
    }
else if($message == "3203-87"){
        $arrayPostData['messages'][0]['text'] = "NKI000268,(3203-51) บ้านว่าน - (3203-87) ลำดวน=Optic 12 Core DW = 1.31 km.";
    }
else if($message == "3203-88"){
          $arrayPostData['messages'][0]['text'] = "NKI000269,(3203-65) บ้านกลางน้อย - (3203-88) ผำไผ=Optic 12 Core DW = 1.3 km.
NKI000359,(3203-51) บ้านว่าน - (3203-88) บ้านผำไผ่=Optic 12 Core DW = 1.255 km.";
    }
else if($message == "3203-89"){
        $arrayPostData['messages'][0]['text'] = "NKI000499,(3203-48) กองนาง - (3203-89) ปากมาง=Optic 12 Core DW = 2 km.";
    }
else if($message == "3203-90"){
          $arrayPostData['messages'][0]['text'] = "NKI000500,(3203-47) ที่ดินท่าบ่อ - (3203-90) ชุมชนป่าตาล1=Optic 12 Core DW = 1 km.
NKI000501,(3203-90) ชุมชนป่าตาล1 - (3203-91) ชุมชนป่าตาล2=Optic 12 Core DW = 1 km.";
    }
else if($message == "3203-91"){
        $arrayPostData['messages'][0]['text'] = "NKI000501,(3203-90) ชุมชนป่าตาล1 - (3203-91) ชุมชนป่าตาล2=Optic 12 Core DW = 1 km.";
    }
else if($message == "3203-92"){
        $arrayPostData['messages'][0]['text'] = "NKI000502,(3203-50) นาช้างน้ำ - (3203-92) ไทรทอง ต.ท่าบ่อ=Optic 12 Core DW = 1.11 km.";
    }
else if($message == "3203-93"){
        $arrayPostData['messages'][0]['text'] = "NKI000289,(3201-94) บ้านถ่อน - (3203-93) หนองกก ต.บ้านถ่อน=Optic 12 Core DW = 1.74 km.";
    }
else if($message == "3203-94"){
        $arrayPostData['messages'][0]['text'] = "NKI000288,(3203-59) บ้านทุ่ม - (3203-94) อุ่มเย็น ต.น้ำโมง=Optic 12 Core DW = 2.67 km.";
    }
else if($message == "3203-95"){
        $arrayPostData['messages'][0]['text'] = "NKI000287,(3203-60) บ้านหงษ์ทองสามขา - (3203-95) บ้านนาบง ต.กองนาง=Optic 12 Core DW = 2.79 km.";
    }
else if($message == "3203-96"){
        $arrayPostData['messages'][0]['text'] = "NKI000349,(3203-81) บ้านดงนาคำ - (3203-96) บ้านราษฏร์สามมัคคี=Optic 12 Core DW = 3.23 km.";
    }
else if($message == "3203-97"){
        $arrayPostData['messages'][0]['text'] = "NKI000347,(3203-59) บ้านทุ่ม - (3203-97) บ้านฝาง=Optic 12 Core DW = 1.34 km.";
    }
else if($message == "3203-98"){
        $arrayPostData['messages'][0]['text'] = "NKI000350,(3203-58) บ้านเดื่อ - (3203-98) บ้านกุดบง=Optic 12 Core DW = 2.62 km.";
    }
else if($message == "3204-101"){
        $arrayPostData['messages'][0]['text'] = "NKI000194,(3204-53) บ้านกุดบง - (3204-101) บ้านใหม่=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3204-105"){
        $arrayPostData['messages'][0]['text'] = "NKI000149,(3204-123) บ้านสุขสำราญ - (3204-105) บ้านเชียงอาด=Optic 12 Core DW = 0.815 km.";
    }
else if($message == "3204-106"){
          $arrayPostData['messages'][0]['text'] = "NKI000150,(3204-81) โพธิ์ศรี - (3204-106) บ้านดงสระพัง=Optic 12 Core DW = 6.1 km.
NKI000507,(3204-106) ดงสระพัง - (3204-125) ต้อนเหนือ=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3204-107"){
        $arrayPostData['messages'][0]['text'] = "NKI000151,(3204-113) บ้านหนองแอก - (3204-107) บ้านหนองหอย=Optic 12 Core DW = 4.27 km.";
    }
else if($message == "3204-109"){
          $arrayPostData['messages'][0]['text'] = "NKI000152,(3204-117) บ้านโนนสีทอง - (3204-109) บ้านโพธ์=Optic 12 Core DW = 1.33 km.
NKI000153,(3204-109) บ้านโพธ์ - (3204-112) บ้านไทรทอง=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3204-111"){
        $arrayPostData['messages'][0]['text'] = "NKI000275,(3204-114) บ้านปัก - (3204-111) คำเจริญ=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3204-112"){
          $arrayPostData['messages'][0]['text'] = "NKI000153,(3204-109) บ้านโพธ์ - (3204-112) บ้านไทรทอง=Optic 12 Core DW = 1.65 km.
NKI000154,(3204-112) บ้านไทรทอง - (3204-113) บ้านหนองแอก=Optic 12 Core DW = 3.11 km.";
    }
else if($message == "3204-113"){
          $arrayPostData['messages'][0]['text'] = "NKI000151,(3204-113) บ้านหนองแอก - (3204-107) บ้านหนองหอย=Optic 12 Core DW = 4.27 km.
NKI000154,(3204-112) บ้านไทรทอง - (3204-113) บ้านหนองแอก=Optic 12 Core DW = 3.11 km.";
    }
else if($message == "3204-114"){
          $arrayPostData['messages'][0]['text'] = "NKI000155,(3204-64) บ้านคำแสนสุข - (3204-114) บ้านปัก=12 Core= 5.452 km.
NKI000156,(3204-114) บ้านปัก - (3204-116) บ้านคำจำปา=Optic 12 Core DW = 2.97 km.
NKI000275,(3204-114) บ้านปัก - (3204-111) คำเจริญ=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3204-115"){
        $arrayPostData['messages'][0]['text'] = "NKI000195,(3204-41) ไปรษณีย์โพนพิสัย - (3204-115) บิ๊กซีโพนพิสัย=Optic 12 Core DW = 0.62 km.";
    }
else if($message == "3204-116"){
        $arrayPostData['messages'][0]['text'] = "NKI000156,(3204-114) บ้านปัก - (3204-116) บ้านคำจำปา=Optic 12 Core DW = 2.97 km.";
    }
else if($message == "3204-117"){
          $arrayPostData['messages'][0]['text'] = "NKI000152,(3204-117) บ้านโนนสีทอง - (3204-109) บ้านโพธ์=Optic 12 Core DW = 1.33 km.
NKI000196,(3204-62) บ้านเซิม - (3204-117) บ้านโนนสีทอง=12 Core= 8 km.";
    }
else if($message == "3204-118"){
        $arrayPostData['messages'][0]['text'] = "NKI000503,(3204-49) บ้านนาเพียงใหญ่ - (3204-118) นาเพียงน้อย=Optic 12 Core DW = 5.97 km.";
    }
else if($message == "3204-119"){
        $arrayPostData['messages'][0]['text'] = "NKI000504,(3204-86) นาตาล - (3204-119) ปักหมู=Optic 12 Core DW = 2.68 km.";
    }
else if($message == "3204-121"){
        $arrayPostData['messages'][0]['text'] = "NKI000197,(3204-46) ราชครู - (3204-121) บ้านหนองปลาไหล=Optic 12 Core DW = 1.13 km.";
    }
else if($message == "3204-122"){
        $arrayPostData['messages'][0]['text'] = "NKI000505,(3204-95) กลุ่มพัฒนา - (3204-122) โนนสวรรค์=Optic 12 Core DW = 1.63 km.";
    }
else if($message == "3204-123"){
          $arrayPostData['messages'][0]['text'] = "NKI000149,(3204-123) บ้านสุขสำราญ - (3204-105) บ้านเชียงอาด=Optic 12 Core DW = 0.815 km.
NKI000198,(3204-124) โนนภูทอง ต.เหล่าต่างคำ - (3204-123) บ้านสุขสำราญ=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3204-124"){
          $arrayPostData['messages'][0]['text'] = "NKI000198,(3204-124) โนนภูทอง ต.เหล่าต่างคำ - (3204-123) บ้านสุขสำราญ=Optic 12 Core DW = 1.4 km.
NKI000506,(3204-73) บ้านเหล่าต่างคำ - (3204-124) โนนภูทอง ต.เหล่าต่างคำ=Optic 12 Core DW = 4.22 km.";
    }
else if($message == "3204-125"){
        $arrayPostData['messages'][0]['text'] = "NKI000507,(3204-106) ดงสระพัง - (3204-125) ต้อนเหนือ=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3204-126"){
        $arrayPostData['messages'][0]['text'] = "NKI000312,(3204-75) บ้านนาหนัง - (3204-126) บ้านนาหนัง2=Optic 12 Core DW = 0.68 km.";
    }
else if($message == "3204-128"){
        $arrayPostData['messages'][0]['text'] = "NKI000296,(3204-99) โนนศิลา - (3204-128) บ้านนาตาลเหนือ=Optic 12 Core DW = 3.52 km.";
    }
else if($message == "3204-129"){
        $arrayPostData['messages'][0]['text'] = "NKI000423,(sj) sj - (3204-129) บ้านไผ่=Optic 12 Core DW = 2.22 km.";
    }
else if($message == "3204-131"){
        $arrayPostData['messages'][0]['text'] = "NKI000424,(sj) sj - (3204-131) บ้านดงม่วย=Optic 12 Core DW = 2.685 km.";
    }
else if($message == "3204-133"){
        $arrayPostData['messages'][0]['text'] = "NKI000412,(3204-138) บ้านห้วยน้ำเย็น - (3204-133) บ้านหนองแหวน=Optic 12 Core DW = 3.63 km.";
    }
else if($message == "3204-134"){
        $arrayPostData['messages'][0]['text'] = "NKI000363,(3204-59) บ้านสร้างนางขาว - (3204-134) บ้านหนองอั้ว=12 Core= 7.47 km.";
    }
else if($message == "3204-135"){
          $arrayPostData['messages'][0]['text'] = "NKI000362,(3204-138) บ้านห้วยน้ำเย็น - (3204-135) บ้านหนองแหวน=Optic 12 Core DW = 3.67 km.
NKI000364,(3204-135) บ้านร่องโน - (3204-136) บ้านร่องแกม=Optic 12 Core DW = 1.125 km.
NKI000413,(3204-136) บ้านร่องแกม - (3204-135) บ้านร่องโน=Optic 12 Core DW = 1.085 km.";
    }
else if($message == "3204-136"){
          $arrayPostData['messages'][0]['text'] = "NKI000326,(3204-70) บ้านทุ่งหลวง - (3204-136) บ้านร่องแกม=Optic 12 Core DW = 1.545 km.
NKI000364,(3204-135) บ้านร่องโน - (3204-136) บ้านร่องแกม=Optic 12 Core DW = 1.125 km.
NKI000365,(3204-136) บ้านร่องแกม - (3204-70) บ้านทุ่งหลวง=Optic 12 Core DW = 1.625 km.
NKI000413,(3204-136) บ้านร่องแกม - (3204-135) บ้านร่องโน=Optic 12 Core DW = 1.085 km.";
    }
else if($message == "3204-137"){
        $arrayPostData['messages'][0]['text'] = "NKI000508,(3204-70) บ้านทุ่งหลวง - (3204-137) ต.ทุ่งหลวง ขาม=Optic 12 Core DW = 1.245 km.";
    }
else if($message == "3204-138"){
          $arrayPostData['messages'][0]['text'] = "NKI000327,(3204-72) บ้านต่างคำ - (3204-138) บ้านห้วยน้ำเย็น=Optic 12 Core DW = 1.86 km.
NKI000362,(3204-138) บ้านห้วยน้ำเย็น - (3204-135) บ้านหนองแหวน=Optic 12 Core DW = 3.67 km.
NKI000367,(3204-138) บ้านห้วยน้ำเย็น - (3204-72) บ้านต่างคำ=Optic 12 Core DW = 1.9 km.
NKI000412,(3204-138) บ้านห้วยน้ำเย็น - (3204-133) บ้านหนองแหวน=Optic 12 Core DW = 3.63 km.";
    }
else if($message == "3204-139"){
        $arrayPostData['messages'][0]['text'] = "NKI000368,(3204-141) บ้านโคกหัวภู - (3204-139) บ้านนาเมย=Optic 12 Core DW = 2.455 km.";
    }
else if($message == "3204-141"){
          $arrayPostData['messages'][0]['text'] = "NKI000368,(3204-141) บ้านโคกหัวภู - (3204-139) บ้านนาเมย=Optic 12 Core DW = 2.455 km.
NKI000369,(3204-141) บ้านโคกหัวภู - (3204-73) บ้านเหล่าต่างคำ=Optic 12 Core DW = 5.25 km.
NKI000509,(3204-73) บ้านเหล่าต่างคำ - (3204-141) ต.เหล่าต่างคำ โคกหัวภู=Optic 12 Core DW = 5.25 km.";
    }
else if($message == "3204-142"){
          $arrayPostData['messages'][0]['text'] = "NKI000322,(3204-77) บ้านแป้น - (3204-142) บ้านดงบัง=Optic 12 Core DW = 2.865 km.
NKI000370,(3204-142) บ้านดงบัง - (3204-77) บ้านแป้น=Optic 12 Core DW = 2.905 km.";
    }
else if($message == "3204-143"){
        $arrayPostData['messages'][0]['text'] = "NKI000411,(sj) sj - (3204-143) บ้านนาหว้า=Optic 12 Core DW = 1.565 km.";
    }
else if($message == "3204-144"){
        $arrayPostData['messages'][0]['text'] = "NKI000371,(3204-62) บ้านเซิม - (3204-144) บ้านโนนสง่า=Optic 12 Core DW = 1.975 km.";
    }
else if($message == "3204-145"){
        $arrayPostData['messages'][0]['text'] = "NKI000510,(3204-62) สุขสำราญ - (3204-145) ต.เซิม คำตอยูง=Optic 12 Core DW = 2.75 km.";
    }
else if($message == "3204-146"){
          $arrayPostData['messages'][0]['text'] = "NKI000321,(3204-64) บ้านแสนคำสุข - (3204-146) บ้านดงอ่าง=Optic 12 Core DW = 4.82 km.
NKI000374,(3204-146) บ้านดงอ่าง - (3204-64) บ้านคำแสนสุข=Optic 12 Core DW = 4.9 km.";
    }
else if($message == "3204-147"){
          $arrayPostData['messages'][0]['text'] = "NKI000328,(3204-46) ซอยราชครู - (3204-147) บ้านดอนโพธิ์=Optic 12 Core DW = 0.94 km.
NKI000356,(3204-147) บ้านดอนโพธิ์ - (3204-46) ซอยราชครู=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3204-148"){
        $arrayPostData['messages'][0]['text'] = "NKI000360,(3204-49) บ้านนาเพียงใหญ่ - (3204-148) บ้านโปร่งเย็น=Optic 12 Core DW = 2.426 km.";
    }
else if($message == "3204-149"){
        $arrayPostData['messages'][0]['text'] = "NKI000373,(3204-62) บ้านเซิม - (3204-149) บ้านสุขสำราญ=Optic 12 Core DW = 0.845 km.";
    }
else if($message == "3204-151"){
        $arrayPostData['messages'][0]['text'] = "NKI000511,(3204-42) บ้านพระธาตุ - (3204-151) บ้านทุ่งธาตุ2=Optic 12 Core DW = 1.15 km.";
    }
else if($message == "3204-153"){
        $arrayPostData['messages'][0]['text'] = "NKI000512,(3204-99) โนนศิลา - (3204-153) บ้านโนนสวาท=Optic 12 Core DW = 1.77 km.";
    }
else if($message == "3204-154"){
        $arrayPostData['messages'][0]['text'] = "NKI000513,(3204-48) วัดหลวง - (3204-154) หนองเรือคำ=Optic 12 Core DW = 1.15 km.";
    }
else if($message == "3204-37"){
          $arrayPostData['messages'][0]['text'] = "NKI000006,(3204-37) me โพนพิสัย - (3806-37) บขส.ปากคาด =12 Core= 47.903 km.
NKI000055,(3204-37) me โพนพิสัย - (3204-38) โพนพิสัย 2=Optic 12 Core DW = 2.13 km.
NKI000085,(3204-37) me โพนพิสัย - (3204-44) บ้านแดนเมือง=Optic 12 Core DW = 0.95 km.
NKI000093,(3204-37) me โพนพิสัย - (3204-48) วัดหลวง=Optic 12 Core DW = 1.185 km.
NKI000105,(3201-48) officeหนองคาย - (3204-37) me โพนพิสัย=12 Core= 47.733 km.
NKI000264,(3005-62) ME สร้างคอม - (3204-37) ME โพนพิสัย=12 Core= 30.714 km.
NKI000265,(3204-37) ME โพนพิสัย - (3214-62) ME เฝ้าไร่=12 Core= 31.52 km.";
    }
else if($message == "3204-38"){
          $arrayPostData['messages'][0]['text'] = "NKI000055,(3204-37) me โพนพิสัย - (3204-38) โพนพิสัย 2=Optic 12 Core DW = 2.13 km.
NKI000056,(3204-38) โพนพิสัย 2 - (3204-39) โพนพิสัย 3=Optic 12 Core DW = 1.1 km.
NKI000058,(3204-38) โพนพิสัย 2 - (3204-41) ไปรษณีย์โพนพิสัย=Optic 12 Core DW = 1.5 km.
NKI000094,(3204-38) โพนพิสัย 2 - (3204-42) บ้านพระธาตุ=Optic 12 Core DW = 1.32 km.";
    }
else if($message == "3204-39"){
          $arrayPostData['messages'][0]['text'] = "NKI000056,(3204-38) โพนพิสัย 2 - (3204-39) โพนพิสัย 3=Optic 12 Core DW = 1.1 km.
NKI000092,(3204-39) โพนพิสัย 3 - (3204-46) ซอยราชครู=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3204-40"){
          $arrayPostData['messages'][0]['text'] = "NKI000024,(3204-40) ตลาดชัยพร - (3201-60) อู่ต่อเรือ=Optic 12 Core DW = 2.3 km.
NKI000028,(3204-40) ตลาดชัยพร - (3201-67) ตลาดชัยพร2=Optic 12 Core DW = 0.4 km.
NKI000057,(3201-49) คลองถม - (3204-40) ตลาดชัยพร=Optic 12 Core DW = 0.6 km.";
    }
else if($message == "3204-41"){
          $arrayPostData['messages'][0]['text'] = "NKI000058,(3204-38) โพนพิสัย 2 - (3204-41) ไปรษณีย์โพนพิสัย=Optic 12 Core DW = 1.5 km.
NKI000084,(3204-41) ไปรษณีย์โพนพิสัย - (3204-43) โรงพยาบาลโพนพิสัย=Optic 12 Core DW = 1.9 km.
NKI000099,(3204-41) ไปรษณีย์โพนพิสัย - (3204-45) วัดยอดแก้ว=Optic 12 Core DW = 0.7 km.
NKI000195,(3204-41) ไปรษณีย์โพนพิสัย - (3204-115) บิ๊กซีโพนพิสัย=Optic 12 Core DW = 0.62 km.";
    }
else if($message == "3204-42"){
          $arrayPostData['messages'][0]['text'] = "NKI000091,(3204-42) บ้านพระธาตุ - (3204-47) บ้านทุ่งธาตุ=Optic 12 Core DW = 1.9 km.
NKI000094,(3204-38) โพนพิสัย 2 - (3204-42) บ้านพระธาตุ=Optic 12 Core DW = 1.32 km.
NKI000511,(3204-42) บ้านพระธาตุ - (3204-151) บ้านทุ่งธาตุ2=Optic 12 Core DW = 1.15 km.";
    }
else if($message == "3204-43"){
          $arrayPostData['messages'][0]['text'] = "NKI000084,(3204-41) ไปรษณีย์โพนพิสัย - (3204-43) โรงพยาบาลโพนพิสัย=Optic 12 Core DW = 1.9 km.
NKI000206,(3204-43) โรงพยาบาลโพนพิสัย - (3204-85) บ้านร่องถ่อน=Optic 12 Core DW = 2.58 km.
NKI000514,(3204-43) โรงพยาบาลโพนพิสัย - (3204-97) บ้านเดื่อ ต.จุมพล=Optic 12 Core DW = 4 km.";
    }
else if($message == "3204-44"){
        $arrayPostData['messages'][0]['text'] = "NKI000085,(3204-37) me โพนพิสัย - (3204-44) บ้านแดนเมือง=Optic 12 Core DW = 0.95 km.";
    }
else if($message == "3204-45"){
        $arrayPostData['messages'][0]['text'] = "NKI000099,(3204-41) ไปรษณีย์โพนพิสัย - (3204-45) วัดยอดแก้ว=Optic 12 Core DW = 0.7 km.";
    }
else if($message == "3204-46"){
          $arrayPostData['messages'][0]['text'] = "NKI000092,(3204-39) โพนพิสัย 3 - (3204-46) ซอยราชครู=Optic 12 Core DW = 0.6 km.
NKI000197,(3204-46) ราชครู - (3204-121) บ้านหนองปลาไหล=Optic 12 Core DW = 1.13 km.
NKI000328,(3204-46) ซอยราชครู - (3204-147) บ้านดอนโพธิ์=Optic 12 Core DW = 0.94 km.
NKI000356,(3204-147) บ้านดอนโพธิ์ - (3204-46) ซอยราชครู=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3204-47"){
          $arrayPostData['messages'][0]['text'] = "NKI000091,(3204-42) บ้านพระธาตุ - (3204-47) บ้านทุ่งธาตุ=Optic 12 Core DW = 1.9 km.
NKI000239,(3204-47) บ้านทุ่งธาตุ - (3204-50) บ้านชุมช้าง=Optic 12 Core DW = 1.768 km.";
    }
else if($message == "3204-48"){
          $arrayPostData['messages'][0]['text'] = "NKI000093,(3204-37) me โพนพิสัย - (3204-48) วัดหลวง=Optic 12 Core DW = 1.185 km.
NKI000513,(3204-48) วัดหลวง - (3204-154) หนองเรือคำ=Optic 12 Core DW = 1.15 km.";
    }
else if($message == "3204-49"){
          $arrayPostData['messages'][0]['text'] = "NKI000238,(SJ) SJ โพนพิสัย-เฝ้าไร่ - (3204-49) บ้านนาเพียงใหญ่=Optic 12 Core DW = 0.86 km.
NKI000360,(3204-49) บ้านนาเพียงใหญ่ - (3204-148) บ้านโปร่งเย็น=Optic 12 Core DW = 2.426 km.
NKI000503,(3204-49) บ้านนาเพียงใหญ่ - (3204-118) นาเพียงน้อย=Optic 12 Core DW = 5.97 km.";
    }
else if($message == "3204-50"){
          $arrayPostData['messages'][0]['text'] = "NKI000201,(3204-50) บ้านชุมช้าง - (3204-65) บ้านโนนหนามแท่ง=Optic 12 Core DW = 4.51 km.
NKI000239,(3204-47) บ้านทุ่งธาตุ - (3204-50) บ้านชุมช้าง=Optic 12 Core DW = 1.768 km.";
    }
else if($message == "3204-52"){
          $arrayPostData['messages'][0]['text'] = "NKI000174,(3204-52) บ้านดงบัง - (3204-93) บ้านโนน=Optic 12 Core DW = 3.22 km.
NKI000205,(3204-52) บ้านดงบัง - (3204-84) นาไม้เฮียว=Optic 12 Core DW = 3.34 km.
NKI000240,(SJ) SJ หนองคาย-บึงกาฬ - (3204-52) บ้านดงบัง=Optic 12 Core DW = 0.494 km.
NKI000241,(3204-52) บ้านดงบัง - (3204-53) กุดบง=Optic 12 Core DW = 1.581 km.";
    }
else if($message == "3204-53"){
          $arrayPostData['messages'][0]['text'] = "NKI000194,(3204-53) บ้านกุดบง - (3204-101) บ้านใหม่=Optic 12 Core DW = 2.7 km.
NKI000241,(3204-52) บ้านดงบัง - (3204-53) กุดบง=Optic 12 Core DW = 1.581 km.";
    }
else if($message == "3204-59"){
          $arrayPostData['messages'][0]['text'] = "NKI000194,(3204-53) บ้านกุดบง - (3204-101) บ้านใหม่=Optic 12 Core DW = 2.7 km.
NKI000241,(3204-52) บ้านดงบัง - (3204-53) กุดบง=Optic 12 Core DW = 1.581 km.";
    }
else if($message == "3204-60"){
        $arrayPostData['messages'][0]['text'] = "NKI000438,(3204-61) บ้านคำอินแปลง - (3204-60) บ้านผือ(โพนพิสัย)=12 Core= 4.46 km.";
    }
else if($message == "3204-61"){
          $arrayPostData['messages'][0]['text'] = "NKI000430,(3204-62) บ้านเซิม - (3204-61) บ้านคำอินแปลง=12 Core= 7.45 km.
NKI000438,(3204-61) บ้านคำอินแปลง - (3204-60) บ้านผือ(โพนพิสัย)=12 Core= 4.46 km.";
    }
else if($message == "3204-62"){
          $arrayPostData['messages'][0]['text'] = "NKI000182,(ME) ME บ้านเซิม - (3214-78) บ้านคำแก้ว=Optic 12 Core DW = 6.175 km.
NKI000196,(3204-62) บ้านเซิม - (3204-117) บ้านโนนสีทอง=12 Core= 8 km.
NKI000199,(3204-62) บ้านเซิม - (3204-63) บ้านหนองพันทา=Optic 12 Core DW = 3.65 km.
NKI000200,(3204-62) บ้านเซิม - (3204-64) บ้านคำแสนสุข=12 Core= 7.55 km.
NKI000204,(3204-62) บ้านเซิม - (3204-83) บ้านโคกเสือดาว=Optic 12 Core DW = 0.68 km.
NKI000371,(3204-62) บ้านเซิม - (3204-144) บ้านโนนสง่า=Optic 12 Core DW = 1.975 km.
NKI000373,(3204-62) บ้านเซิม - (3204-149) บ้านสุขสำราญ=Optic 12 Core DW = 0.845 km.
NKI000430,(3204-62) บ้านเซิม - (3204-61) บ้านคำอินแปลง=12 Core= 7.45 km.
NKI000439,(3214-71) บ้านนาฮำ - (3204-62) บ้านเซิม=12 Core= 6.735 km.
NKI000510,(3204-62) สุขสำราญ - (3204-145) ต.เซิม คำตอยูง=Optic 12 Core DW = 2.75 km.";
    }
else if($message == "3204-63"){
          $arrayPostData['messages'][0]['text'] = "NKI000180,(3204-63) บ้านท่าหนองพันทา - (3214-76) บ้านอุดมพร=Optic 12 Core DW = 4.59 km.
NKI000199,(3204-62) บ้านเซิม - (3204-63) บ้านหนองพันทา=Optic 12 Core DW = 3.65 km.";
    }
else if($message == "3204-64"){
          $arrayPostData['messages'][0]['text'] = "NKI000155,(3204-64) บ้านคำแสนสุข - (3204-114) บ้านปัก=12 Core= 5.452 km.
NKI000200,(3204-62) บ้านเซิม - (3204-64) บ้านคำแสนสุข=12 Core= 7.55 km.
NKI000321,(3204-64) บ้านแสนคำสุข - (3204-146) บ้านดงอ่าง=Optic 12 Core DW = 4.82 km.
NKI000374,(3204-146) บ้านดงอ่าง - (3204-64) บ้านคำแสนสุข=Optic 12 Core DW = 4.9 km.";
    }
else if($message == "3204-65"){
          $arrayPostData['messages'][0]['text'] = "NKI000157,(3204-65) บ้านโนนหนามแท่ง - (3204-66) บ้านโพนสว่าง=Optic 12 Core DW = 2.66 km.
NKI000201,(3204-50) บ้านชุมช้าง - (3204-65) บ้านโนนหนามแท่ง=Optic 12 Core DW = 4.51 km.";
    }
else if($message == "3204-66"){
          $arrayPostData['messages'][0]['text'] = "NKI000157,(3204-65) บ้านโนนหนามแท่ง - (3204-66) บ้านโพนสว่าง=Optic 12 Core DW = 2.66 km.
NKI000161,(3204-66) บ้านโพนสว่าง - (3204-74) บ้านน้ำโล้=12 Core= 3.88 km.
NKI000164,(3204-66) บ้านโพนส่วาง - (3204-77) บ้านแป้น=Optic 12 Core DW = 4.14 km.";
    }
else if($message == "3204-67"){
        $arrayPostData['messages'][0]['text'] = "NKI000202,(3204-76) บ้านหนองกุง - (3204-67) บ้านบัว=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3204-68"){
          $arrayPostData['messages'][0]['text'] = "NKI000158,(3204-68) บ้านเหล่า - (3204-70) บ้านทุ่งหลวง=Optic 12 Core DW = 2.095 km.
NKI000203,(3204-59) บ้านสร้างนางขาว - (3204-68) บ้านเหล่า=Optic 12 Core DW = 2.605 km.";
    }
else if($message == "3204-70"){
          $arrayPostData['messages'][0]['text'] = "NKI000158,(3204-68) บ้านเหล่า - (3204-70) บ้านทุ่งหลวง=Optic 12 Core DW = 2.095 km.
NKI000159,(3204-70) บ้านทุ่งหลวง - (3204-72) บ้านต่างคำ=12 Core= 4.65 km.
NKI000326,(3204-70) บ้านทุ่งหลวง - (3204-136) บ้านร่องแกม=Optic 12 Core DW = 1.545 km.
NKI000365,(3204-136) บ้านร่องแกม - (3204-70) บ้านทุ่งหลวง=Optic 12 Core DW = 1.625 km.
NKI000508,(3204-70) บ้านทุ่งหลวง - (3204-137) ต.ทุ่งหลวง ขาม=Optic 12 Core DW = 1.245 km.";
    }
else if($message == "3204-72"){
          $arrayPostData['messages'][0]['text'] = "NKI000159,(3204-70) บ้านทุ่งหลวง - (3204-72) บ้านต่างคำ=12 Core= 4.65 km.
NKI000160,(3204-72) บ้านต่างคำ - (3204-73) บ้านเหล่าต่างคำ=12 Core= 1.63 km.
NKI000327,(3204-72) บ้านต่างคำ - (3204-138) บ้านห้วยน้ำเย็น=Optic 12 Core DW = 1.86 km.
NKI000367,(3204-138) บ้านห้วยน้ำเย็น - (3204-72) บ้านต่างคำ=Optic 12 Core DW = 1.9 km.";
    }
else if($message == "3204-73"){
          $arrayPostData['messages'][0]['text'] = "NKI000160,(3204-72) บ้านต่างคำ - (3204-73) บ้านเหล่าต่างคำ=12 Core= 1.63 km.
NKI000369,(3204-141) บ้านโคกหัวภู - (3204-73) บ้านเหล่าต่างคำ=Optic 12 Core DW = 5.25 km.
NKI000506,(3204-73) บ้านเหล่าต่างคำ - (3204-124) โนนภูทอง ต.เหล่าต่างคำ=Optic 12 Core DW = 4.22 km.
NKI000509,(3204-73) บ้านเหล่าต่างคำ - (3204-141) ต.เหล่าต่างคำ โคกหัวภู=Optic 12 Core DW = 5.25 km.";
    }
else if($message == "3204-74"){
          $arrayPostData['messages'][0]['text'] = "NKI000161,(3204-66) บ้านโพนสว่าง - (3204-74) บ้านน้ำโล้=12 Core= 3.88 km.
NKI000165,(3204-74) บ้านน้ำโล้ - (3204-78) บ้านคำแสน=Optic 12 Core DW = 3.6 km.";
    }
else if($message == "3204-75"){
          $arrayPostData['messages'][0]['text'] = "NKI000162,(3204-77) บ้านแป้น - (3204-75) บ้านนาหนัง=12 Core= 6.175 km.
NKI000312,(3204-75) บ้านนาหนัง - (3204-126) บ้านนาหนัง2=Optic 12 Core DW = 0.68 km.";
    }
else if($message == "3204-76"){
          $arrayPostData['messages'][0]['text'] = "NKI000163,(3204-78) บ้านคำแสน - (3204-76) บ้านหนองกุง=Optic 12 Core DW = 1.6 km.
NKI000202,(3204-76) บ้านหนองกุง - (3204-67) บ้านบัว=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3204-77"){
          $arrayPostData['messages'][0]['text'] = "NKI000162,(3204-77) บ้านแป้น - (3204-75) บ้านนาหนัง=12 Core= 6.175 km.
NKI000164,(3204-66) บ้านโพนส่วาง - (3204-77) บ้านแป้น=Optic 12 Core DW = 4.14 km.
NKI000166,(3204-77) บ้านแป้น - (3204-79) บ้านกุดแกลบ=12 Core= 2.94 km.
NKI000322,(3204-77) บ้านแป้น - (3204-142) บ้านดงบัง=Optic 12 Core DW = 2.865 km.
NKI000370,(3204-142) บ้านดงบัง - (3204-77) บ้านแป้น=Optic 12 Core DW = 2.905 km.";
    }
else if($message == "3204-78"){
          $arrayPostData['messages'][0]['text'] = "NKI000163,(3204-78) บ้านคำแสน - (3204-76) บ้านหนองกุง=Optic 12 Core DW = 1.6 km.
NKI000165,(3204-74) บ้านน้ำโล้ - (3204-78) บ้านคำแสน=Optic 12 Core DW = 3.6 km.";
    }
else if($message == "3204-79"){
          $arrayPostData['messages'][0]['text'] = "NKI000166,(3204-77) บ้านแป้น - (3204-79) บ้านกุดแกลบ=12 Core= 2.94 km.
NKI000167,(3204-79) บ้านกุดแกลบ - (3204-80) บ้านโคกพัฒนา=12 Core= 3.35 km.";
    }
else if($message == "3204-80"){
          $arrayPostData['messages'][0]['text'] = "NKI000167,(3204-79) บ้านกุดแกลบ - (3204-80) บ้านโคกพัฒนา=12 Core= 3.35 km.
NKI000168,(3204-80) บ้านโคกพัฒนา - (3204-81) บ้านโพธิ์ศรี=12 Core= 2.325 km.";
    }
else if($message == "3204-81"){
          $arrayPostData['messages'][0]['text'] = "NKI000150,(3204-81) โพธิ์ศรี - (3204-106) บ้านดงสระพัง=Optic 12 Core DW = 6.1 km.
NKI000168,(3204-80) บ้านโคกพัฒนา - (3204-81) บ้านโพธิ์ศรี=12 Core= 2.325 km.";
    }
else if($message == "3204-83"){
        $arrayPostData['messages'][0]['text'] = "NKI000204,(3204-62) บ้านเซิม - (3204-83) บ้านโคกเสือดาว=Optic 12 Core DW = 0.68 km.";
    }
else if($message == "3204-84"){
        $arrayPostData['messages'][0]['text'] = "NKI000205,(3204-52) บ้านดงบัง - (3204-84) นาไม้เฮียว=Optic 12 Core DW = 3.34 km.";
    }
else if($message == "3204-85"){
          $arrayPostData['messages'][0]['text'] = "NKI000169,(3204-85) บ้านร่องถ่อน - (3204-87) บ้านอ่างเก็บน้ำ=Optic 12 Core DW = 4.35 km.
NKI000206,(3204-43) โรงพยาบาลโพนพิสัย - (3204-85) บ้านร่องถ่อน=Optic 12 Core DW = 2.58 km.";
    }
else if($message == "3204-86"){
        $arrayPostData['messages'][0]['text'] = "NKI000207,(3204-88) อยู่ดีมีสุข - (3204-86) บ้านนาตาล=Optic 12 Core DW = 3.23 km.";
    }
else if($message == "3204-87"){
          $arrayPostData['messages'][0]['text'] = "NKI000169,(3204-85) บ้านร่องถ่อน - (3204-87) บ้านอ่างเก็บน้ำ=Optic 12 Core DW = 4.35 km.
NKI000208,(3204-87) บ้านอ่างเก็บน้ำ - (3204-88) บ้านอยู่ดีมีสุข=Optic 12 Core DW = 3.53 km.";
    }
else if($message == "3204-88"){
          $arrayPostData['messages'][0]['text'] = "NKI000207,(3204-88) อยู่ดีมีสุข - (3204-86) บ้านนาตาล=Optic 12 Core DW = 3.23 km.
NKI000208,(3204-87) บ้านอ่างเก็บน้ำ - (3204-88) บ้านอยู่ดีมีสุข=Optic 12 Core DW = 3.53 km.";
    }
else if($message == "3204-89"){
          $arrayPostData['messages'][0]['text'] = "NKI000170,(3204-90) บ้านถ่อน - (3204-89) บ้านดงกำพี้=Optic 12 Core DW = 2.56 km.
NKI000177,(3204-89) บ้านดงกำพี้ - (3204-96) บ้านหาดทรายทอง=Optic 12 Core DW = 3.87 km.";
    }
else if($message == "3204-90"){
          $arrayPostData['messages'][0]['text'] = "NKI000170,(3204-90) บ้านถ่อน - (3204-89) บ้านดงกำพี้=Optic 12 Core DW = 2.56 km.
NKI000171,(3204-91) บ้านโคก - (3204-90) บ้านถ่อน=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3204-91"){
          $arrayPostData['messages'][0]['text'] = "NKI000171,(3204-91) บ้านโคก - (3204-90) บ้านถ่อน=Optic 12 Core DW = 1.5 km.
NKI000172,(SJ) SJ โพนพิสัย -สร้างคอม - (3204-91) บ้านโคก=Optic 12 Core DW = 4 km.";
    }
else if($message == "3204-92"){
        $arrayPostData['messages'][0]['text'] = "NKI000173,(3204-93) บ้านโนน - (3204-92) บ้านหนองกุ้ง=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3204-93"){
          $arrayPostData['messages'][0]['text'] = "NKI000173,(3204-93) บ้านโนน - (3204-92) บ้านหนองกุ้ง=Optic 12 Core DW = 4.7 km.
NKI000174,(3204-52) บ้านดงบัง - (3204-93) บ้านโนน=Optic 12 Core DW = 3.22 km.
NKI000175,(3204-93) บ้านโนน - (3204-94) บ้านโนนฤาษี=Optic 12 Core DW = 4.99 km.
NKI000176,(3204-93) บ้านโนน - (3204-95) บ้านกลุ่มพัฒนา=Optic 12 Core DW = 4 km.";
    }
else if($message == "3204-94"){
        $arrayPostData['messages'][0]['text'] = "NKI000175,(3204-93) บ้านโนน - (3204-94) บ้านโนนฤาษี=Optic 12 Core DW = 4.99 km.";
    }
else if($message == "3204-95"){
          $arrayPostData['messages'][0]['text'] = "NKI000176,(3204-93) บ้านโนน - (3204-95) บ้านกลุ่มพัฒนา=Optic 12 Core DW = 4 km.
NKI000505,(3204-95) กลุ่มพัฒนา - (3204-122) โนนสวรรค์=Optic 12 Core DW = 1.63 km.";
    }
else if($message == "3204-96"){
          $arrayPostData['messages'][0]['text'] = "NKI000177,(3204-89) บ้านดงกำพี้ - (3204-96) บ้านหาดทรายทอง=Optic 12 Core DW = 3.87 km.
NKI000178,(3204-96) บ้านหาดทรายทอง - (3204-98) บ้านเตาถ่าน=Optic 12 Core DW = 2.53 km.";
    }
else if($message == "3204-97"){
        $arrayPostData['messages'][0]['text'] = "NKI000514,(3204-43) โรงพยาบาลโพนพิสัย - (3204-97) บ้านเดื่อ ต.จุมพล=Optic 12 Core DW = 4 km.";
    }
else if($message == "3204-98"){
        $arrayPostData['messages'][0]['text'] = "NKI000178,(3204-96) บ้านหาดทรายทอง - (3204-98) บ้านเตาถ่าน=Optic 12 Core DW = 2.53 km.";
    }
else if($message == "3204-99"){
          $arrayPostData['messages'][0]['text'] = "NKI000296,(3204-99) โนนศิลา - (3204-128) บ้านนาตาลเหนือ=Optic 12 Core DW = 3.52 km.
NKI000344,(3204-99) บ้านโนนศิลา - (3203-77) บ้านนาน้ำพราย=Optic 12 Core DW = 3.96 km.
NKI000512,(3204-99) โนนศิลา - (3204-153) บ้านโนนสวาท=Optic 12 Core DW = 1.77 km.
NKI000515,(3201-103) บ้านปากสวย - (3204-99) โนนศิลา=Optic 12 Core DW = 1.785 km.";
    }
else if($message == "3208-61"){
          $arrayPostData['messages'][0]['text'] = "NKI000243,(3208-61) ME สังคม1 - (3208-62) สังคม 2=Optic 12 Core DW = 1 km.
NKI000244,(3208-61) ME สังคม1 - (3208-63) สังคม3=Optic 12 Core DW = 1.8 km.
NKI000245,(3208-61) ME สังคม1 - (3208-64) บ้านปากโสม=Optic 12 Core DW = 2.2 km.
NKI000259,(3405-61) ME ปากชม - (3208-61) ME สังคม=12 Core= 62.383 km.
NKI000260,(3208-61) ME สังคม - (3202-41) ME ศรีเชียงใหม่=12 Core= 38.438 km.
NKI000270,(3208-61) ME สังคม - (3208-61) 3BB สังคม=12 Core= 2.22 km.
NKI000272,(3202-41) ME บ้านหม้อ - (3208-61) ME สังคม=12 Core= 37 km.
NKI000276,(3208-61) สังคม - (3202-41) ศรีเชียงใหม่=12 Core= 38.438 km.
UDN000977,(3208-61) ME สังคม - (3014-61) ME นายูง=12 Core= 31.48 km.";
    }
else if($message == "3208-62"){
          $arrayPostData['messages'][0]['text'] = "NKI000243,(3208-61) ME สังคม1 - (3208-62) สังคม 2=Optic 12 Core DW = 1 km.
NKI000440,(3208-62) สังคม2 - (3208-63) สังคม3=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3208-63"){
          $arrayPostData['messages'][0]['text'] = "NKI000244,(3208-61) ME สังคม1 - (3208-63) สังคม3=Optic 12 Core DW = 1.8 km.
NKI000440,(3208-62) สังคม2 - (3208-63) สังคม3=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3208-64"){
        $arrayPostData['messages'][0]['text'] = "NKI000245,(3208-61) ME สังคม1 - (3208-64) บ้านปากโสม=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3208-66"){
          $arrayPostData['messages'][0]['text'] = "NKI000246,(SJ) หนองคาย - สังคม - (3208-66) บ้านห้วยไทรงิ้ว=Optic 12 Core DW = 0.68 km.
NKI000401,(3208-66) บ้านห้วยไทรงิ้ว - (3208-75) บ้านไทยพัฒนา=Optic 12 Core DW = 5.98 km.";
    }
else if($message == "3208-69"){
        $arrayPostData['messages'][0]['text'] = "NKI000247,(SJ) สังคม-บ้านผือ - (3208-69) บ้านสังกาลีนาขาม=Optic 12 Core DW = 0.565 km.";
    }
else if($message == "3208-70"){
          $arrayPostData['messages'][0]['text'] = "NKI000403,(3208-70) บ้านม่วง - (3208-79) บ้านวังมน=Optic 12 Core DW = 3.38 km.
NKI000441,(SJ) ME สังคม-ME ปากชม - (3208-70) บ้านม่วง(สังคม)=Optic 12 Core DW = 2 km.";
    }
else if($message == "3208-71"){
          $arrayPostData['messages'][0]['text'] = "NKI000398,(3208-71) โสกกล้า - (3208-72) บ้านนาโคก=Optic 12 Core DW = 2.4 km.
NKI000516,(SJ) ME สังคม-ME นายูง - (3208-71) ต.แก้งไก่ โสกกล้า=Optic 12 Core DW = 0.315 km.";
    }
else if($message == "3208-72"){
        $arrayPostData['messages'][0]['text'] = "NKI000398,(3208-71) โสกกล้า - (3208-72) บ้านนาโคก=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3208-73"){
          $arrayPostData['messages'][0]['text'] = "NKI000399,(3208-75) บ้ายไทยพัฒนา - (3208-73) บ้านไซงัว=Optic 12 Core DW = 2.945 km.
NKI000400,(3208-73) บ้านไซงัว - (3208-74) บ้านดงต้อง=Optic 12 Core DW = 4.62 km.";
    }
else if($message == "3208-74"){
          $arrayPostData['messages'][0]['text'] = "NKI000400,(3208-73) บ้านไซงัว - (3208-74) บ้านดงต้อง=Optic 12 Core DW = 4.62 km.
NKI000523,(3208-74) ต.ผาตั้ง ดงต้อง - (3208-91) ต.ผาตั้ง บ้านดงต้อง 2=Optic 12 Core DW = 1.275 km.";
    }
else if($message == "3208-75"){
          $arrayPostData['messages'][0]['text'] = "NKI000399,(3208-75) บ้ายไทยพัฒนา - (3208-73) บ้านไซงัว=Optic 12 Core DW = 2.945 km.
NKI000401,(3208-66) บ้านห้วยไทรงิ้ว - (3208-75) บ้านไทยพัฒนา=Optic 12 Core DW = 5.98 km.";
    }
else if($message == "3208-76"){
        $arrayPostData['messages'][0]['text'] = "NKI000517,(SJ) ME สังคม-ME ปากชม - (3208-76) ต.บ้านม่วง ตาดเสริม=Optic 12 Core DW = 1.56 km.";
    }
else if($message == "3208-77"){
          $arrayPostData['messages'][0]['text'] = "NKI000402,(3208-78) บ้านห้วยค้อ - (3208-77) บ้านหนอง=Optic 12 Core DW = 1.01 km.
NKI000522,(3208-77) ต.บ้านม่วง บ้านหนอง - (3208-90) ต.บ้านม่วง ภูเขาทอง=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3208-78"){
          $arrayPostData['messages'][0]['text'] = "NKI000402,(3208-78) บ้านห้วยค้อ - (3208-77) บ้านหนอง=Optic 12 Core DW = 1.01 km.
NKI000518,(SJ) ME สังคม-ME ปากชม - (3208-78) ต.บ้านม่วง ห้วยค้อ=Optic 12 Core DW = 0.15 km.";
    }
else if($message == "3208-79"){
          $arrayPostData['messages'][0]['text'] = "NKI000403,(3208-70) บ้านม่วง - (3208-79) บ้านวังมน=Optic 12 Core DW = 3.38 km.
NKI000519,(3208-79) บ้านวังมน - (3208-80) ต.นางิ้ว นางิ้ว=Optic 12 Core DW = 4.78 km.";
    }
else if($message == "3208-80"){
          $arrayPostData['messages'][0]['text'] = "NKI000407,(3208-80) บ้านนางิ้ว1 - (3208-85) บ้านนางิ้ว2=Optic 12 Core DW = 1.42 km.
NKI000519,(3208-79) บ้านวังมน - (3208-80) ต.นางิ้ว นางิ้ว=Optic 12 Core DW = 4.78 km.";
    }
else if($message == "3208-81"){
          $arrayPostData['messages'][0]['text'] = "NKI000406,(3208-85) บ้านนางิ้ว2 - (3208-81) บ้านซำเจียง=Optic 12 Core DW = 2.08 km.
NKI000408,(3208-81) บ้านซำเจียง - (3208-84) บ้านดงป่าเปลือย=Optic 12 Core DW = 2.47 km.";
    }
else if($message == "3208-82"){
          $arrayPostData['messages'][0]['text'] = "NKI000404,(3208-82) บ้านเทากลาง - (3208-83) บ้านนาบอน=Optic 12 Core DW = 2.23 km.
NKI000405,(3208-84) บ้านดงเปลือย - (3208-82) บ้านเทากลาง=Optic 12 Core DW = 1.71 km.";
    }
else if($message == "3208-83"){
          $arrayPostData['messages'][0]['text'] = "NKI000404,(3208-82) บ้านเทากลาง - (3208-83) บ้านนาบอน=Optic 12 Core DW = 2.23 km.
NKI000409,(3208-83) บ้านนาบอน - (3208-86) บ้านเทพประทับ=Optic 12 Core DW = 5.65 km.";
    }
else if($message == "3208-84"){
          $arrayPostData['messages'][0]['text'] = "NKI000405,(3208-84) บ้านดงเปลือย - (3208-82) บ้านเทากลาง=Optic 12 Core DW = 1.71 km.
NKI000408,(3208-81) บ้านซำเจียง - (3208-84) บ้านดงป่าเปลือย=Optic 12 Core DW = 2.47 km.";
    }
else if($message == "3208-85"){
          $arrayPostData['messages'][0]['text'] = "NKI000406,(3208-85) บ้านนางิ้ว2 - (3208-81) บ้านซำเจียง=Optic 12 Core DW = 2.08 km.
NKI000407,(3208-80) บ้านนางิ้ว1 - (3208-85) บ้านนางิ้ว2=Optic 12 Core DW = 1.42 km.";
    }
else if($message == "3208-86"){
        $arrayPostData['messages'][0]['text'] = "NKI000409,(3208-83) บ้านนาบอน - (3208-86) บ้านเทพประทับ=Optic 12 Core DW = 5.65 km.";
    }
else if($message == "3208-87"){
        $arrayPostData['messages'][0]['text'] = "NKI000520,(SJ) บ้านนาบอน-บ้านเทพประทับ - (3208-87) ต.สังคม ฟ้าประทาน=Optic 12 Core DW = 4 km.";
    }
else if($message == "3208-89"){
        $arrayPostData['messages'][0]['text'] = "NKI000521,(SJ) ME สังคม-ME ปากชม - (3208-89) แก้งใหม่=Optic 12 Core DW = 1 km.";
    }
else if($message == "3208-90"){
        $arrayPostData['messages'][0]['text'] = "NKI000522,(3208-77) ต.บ้านม่วง บ้านหนอง - (3208-90) ต.บ้านม่วง ภูเขาทอง=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3208-91"){
        $arrayPostData['messages'][0]['text'] = "NKI000523,(3208-74) ต.ผาตั้ง ดงต้อง - (3208-91) ต.ผาตั้ง บ้านดงต้อง 2=Optic 12 Core DW = 1.275 km.";
    }
else if($message == "3214-101"){
        $arrayPostData['messages'][0]['text'] = "NKI000524,(SJ) ME โพนพิสัย-ME เฝ้าไร่ - (3214-101) ต.นาดี โนนต้อง=Optic 12 Core DW = 1.89 km.";
    }
else if($message == "3214-102"){
        $arrayPostData['messages'][0]['text'] = "NKI000334,(3003-86) บ้านหนองกา - (3214-102) บ้านคำโคนสว่าง=Optic 12 Core DW = 3 km.";
    }
else if($message == "3214-105"){
          $arrayPostData['messages'][0]['text'] = "NKI000337,(3214-105) บ้านจับไม้ - (3214-86) บ้านท่าหายโศก=Optic 12 Core DW = 1.57 km.
NKI000339,(3214-62) เฝ้าไร่ - (3214-105) บ้านจับไม้=Optic 12 Core DW = 3.63 km.";
    }
else if($message == "3214-106"){
        $arrayPostData['messages'][0]['text'] = "NKI000526,(3214-62) ME เฝ้าไร่ - (3214-106) เฝ้าไร่4=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3214-107"){
        $arrayPostData['messages'][0]['text'] = "NKI000335,(3214-84) บ้านคำบุญมี - (3214-107) บ้านหนองบัวเงิน=Optic 12 Core DW = 2.08 km.";
    }
else if($message == "3214-113"){
        $arrayPostData['messages'][0]['text'] = "NKI000527,(3214-97) บ้านหนองยาง - (3214-113) เกษตรเจริญศรี=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3214-114"){
        $arrayPostData['messages'][0]['text'] = "NKI000528,(3214-64) บ้านกุดแคน - (3214-114) ต.หนองหลวง โนนมันปลา=Optic 12 Core DW = 2.13 km.";
    }
else if($message == "3214-61"){
        $arrayPostData['messages'][0]['text'] = "NKI000442,(3214-62) ME เฝ้าไร่ - (3214-61) เฝ้าไร่1=Optic 12 Core DW = 1.955 km.";
    }
else if($message == "3214-62"){
          $arrayPostData['messages'][0]['text'] = "BUN000095,(3214-62) ME เฝ้าไร่ - (3804-63) ME โซ่พิสัย=12 Core= 22.851 km.
NKI000251,(3214-62) เฝ้าไร่2 - (3214-71) บ้านนาฮำ=Optic 12 Core DW = 4.344 km.
NKI000265,(3204-37) ME โพนพิสัย - (3214-62) ME เฝ้าไร่=12 Core= 31.52 km.
NKI000339,(3214-62) เฝ้าไร่ - (3214-105) บ้านจับไม้=Optic 12 Core DW = 3.63 km.
NKI000442,(3214-62) ME เฝ้าไร่ - (3214-61) เฝ้าไร่1=Optic 12 Core DW = 1.955 km.
NKI000526,(3214-62) ME เฝ้าไร่ - (3214-106) เฝ้าไร่4=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3214-63"){
        $arrayPostData['messages'][0]['text'] = "NKI000248,(3214-65) บ้านโนนสมบูรณ์ - (3214-63) บ้านหนองจอก=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3214-64"){
          $arrayPostData['messages'][0]['text'] = "NKI000443,(SJ) ME โพนพิสัย-ME เฝ้าไร่ - (3214-64) บ้านกุดแคน=Optic 12 Core DW = 1.4 km.
NKI000444,(3214-64) บ้านกุดแคน - (3214-65) บ้านโนนสมบูรณ์=Optic 12 Core DW = 2.35 km.
NKI000528,(3214-64) บ้านกุดแคน - (3214-114) ต.หนองหลวง โนนมันปลา=Optic 12 Core DW = 2.13 km.";
    }
else if($message == "3214-65"){
          $arrayPostData['messages'][0]['text'] = "NKI000248,(3214-65) บ้านโนนสมบูรณ์ - (3214-63) บ้านหนองจอก=Optic 12 Core DW = 1.4 km.
NKI000250,(3214-65) บ้านโนนสมบูรณ์ - (3214-67) หนองบัวเงิน=Optic 12 Core DW = 2.8 km.
NKI000444,(3214-64) บ้านกุดแคน - (3214-65) บ้านโนนสมบูรณ์=Optic 12 Core DW = 2.35 km.";
    }
else if($message == "3214-66"){
          $arrayPostData['messages'][0]['text'] = "NKI000128,(3214-66) หนองหลวง - (3214-80) บ้านแบง=Optic 12 Core DW = 5.29 km.
NKI000249,(3214-66) หนองหลวง - (3214-79) โนนมีชัย=Optic 12 Core DW = 1.65 km.
NKI000445,(SJ) ME โพนพิสัย-ME เฝ้าไร่ - (3214-66) บ้านหนองหลวง=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3214-67"){
          $arrayPostData['messages'][0]['text'] = "NKI000179,(3214-67) หนองบัวเงิน - (3214-75) บ้านไชยพัฒนา=12 Core= 8.48 km.
NKI000250,(3214-65) บ้านโนนสมบูรณ์ - (3214-67) หนองบัวเงิน=Optic 12 Core DW = 2.8 km.
NKI000531,(3214-67) หนองบัวเงิน - (3214-91) ต.วัดหลวง โพนทอง=Optic 12 Core DW = 3.17 km.";
    }
else if($message == "3214-71"){
          $arrayPostData['messages'][0]['text'] = "NKI000251,(3214-62) เฝ้าไร่2 - (3214-71) บ้านนาฮำ=Optic 12 Core DW = 4.344 km.
NKI000338,(3214-71) บ้านนาฮำ - (3214-97) บ้านหนองยาง=Optic 12 Core DW = 3.48 km.
NKI000439,(3214-71) บ้านนาฮำ - (3204-62) บ้านเซิม=12 Core= 6.735 km.
NKI000532,(3214-71) บ้านนาฮำ - (3214-98) ต.เฝ้าไร่ ทรัพย์เจริญ=Optic 12 Core DW = 3.75 km.";
    }
else if($message == "3214-72"){
          $arrayPostData['messages'][0]['text'] = "NKI000252,(3214-73) บ้านโนนยาง - (3214-72) บ้านนาดี=Optic 12 Core DW = 1.439 km.
NKI000525,(3214-72) บ้านนาดี - (3214-73) บ้านโนนยาง=Optic 12 Core DW = 2 km.";
    }
else if($message == "3214-73"){
          $arrayPostData['messages'][0]['text'] = "NKI000252,(3214-73) บ้านโนนยาง - (3214-72) บ้านนาดี=Optic 12 Core DW = 1.439 km.
NKI000336,(3214-73) บ้านโนนยาง - (3214-99) บ้านเหล่าเจริญ=Optic 12 Core DW = 1.24 km.
NKI000525,(3214-72) บ้านนาดี - (3214-73) บ้านโนนยาง=Optic 12 Core DW = 2 km.
NKI000529,(3214-73) บ้านแบง - (3214-89) โนนห้วยทราย=Optic 12 Core DW = 5.18 km.
NKI000530,(3214-73) บ้านแบง - (3214-90) เลิศไมตรี=Optic 12 Core DW = 2.31 km.";
    }
else if($message == "3214-74"){
          $arrayPostData['messages'][0]['text'] = "NKI000129,(3214-79) โนนมีชัย - (3214-74) หนองแวงคำภู=Optic 12 Core DW = 3.73 km.
NKI000131,(3214-74) หนองแวงคำภู - (3214-81) บ้านท่าหลวง=Optic 12 Core DW = 2.27 km.";
    }
else if($message == "3214-75"){
          $arrayPostData['messages'][0]['text'] = "NKI000179,(3214-67) หนองบัวเงิน - (3214-75) บ้านไชยพัฒนา=12 Core= 8.48 km.
NKI000184,(3214-75) บ้านไชยพัฒนา - (3214-82) บ้านพรประเสร็ฐ=Optic 12 Core DW = 1.3 km.
NKI000185,(3214-75) บ้านไชยพัฒนา - (3214-83) บ้านหนองบัวคำ=Optic 12 Core DW = 3.4 km.
NKI000253,(3214-75) บ้านไชยพัฒนา - (3214-92) หนองวัวชุม=Optic 12 Core DW = 5.455 km.";
    }
else if($message == "3214-76"){
          $arrayPostData['messages'][0]['text'] = "NKI000180,(3204-63) บ้านท่าหนองพันทา - (3214-76) บ้านอุดมพร=Optic 12 Core DW = 4.59 km.
NKI000181,(3214-76) บ้านอุดมพร - (3214-77) บ้านคำชิ=Optic 12 Core DW = 2.205 km.";
    }
else if($message == "3214-77"){
          $arrayPostData['messages'][0]['text'] = "NKI000132,(3214-77) บ้านคำชิ - (3214-84) บ้านคำบุญมี=Optic 12 Core DW = 1.3 km.
NKI000181,(3214-76) บ้านอุดมพร - (3214-77) บ้านคำชิ=Optic 12 Core DW = 2.205 km.";
    }
else if($message == "3214-78"){
        $arrayPostData['messages'][0]['text'] = "NKI000182,(ME) ME บ้านเซิม - (3214-78) บ้านคำแก้ว=Optic 12 Core DW = 6.175 km.";
    }
else if($message == "3214-79"){
          $arrayPostData['messages'][0]['text'] = "NKI000129,(3214-79) โนนมีชัย - (3214-74) หนองแวงคำภู=Optic 12 Core DW = 3.73 km.
NKI000130,(3214-81) บ้านท่าหลวง - (3214-79) โนนมีชัย=Optic 12 Core DW = 1.79 km.
NKI000249,(3214-66) หนองหลวง - (3214-79) โนนมีชัย=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3214-80"){
        $arrayPostData['messages'][0]['text'] = "NKI000128,(3214-66) หนองหลวง - (3214-80) บ้านแบง=Optic 12 Core DW = 5.29 km.";
    }
else if($message == "3214-81"){
          $arrayPostData['messages'][0]['text'] = "NKI000130,(3214-81) บ้านท่าหลวง - (3214-79) โนนมีชัย=Optic 12 Core DW = 1.79 km.
NKI000131,(3214-74) หนองแวงคำภู - (3214-81) บ้านท่าหลวง=Optic 12 Core DW = 2.27 km.";
    }
else if($message == "3214-82"){
        $arrayPostData['messages'][0]['text'] = "NKI000184,(3214-75) บ้านไชยพัฒนา - (3214-82) บ้านพรประเสร็ฐ=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3214-83"){
          $arrayPostData['messages'][0]['text'] = "NKI000183,(3214-83) บ้านหนองบัวคำ - (3214-85) บ้านท่าคำบง=Optic 12 Core DW = 1.44 km.
NKI000185,(3214-75) บ้านไชยพัฒนา - (3214-83) บ้านหนองบัวคำ=Optic 12 Core DW = 3.4 km.";
    }
else if($message == "3214-84"){
          $arrayPostData['messages'][0]['text'] = "NKI000132,(3214-77) บ้านคำชิ - (3214-84) บ้านคำบุญมี=Optic 12 Core DW = 1.3 km.
NKI000335,(3214-84) บ้านคำบุญมี - (3214-107) บ้านหนองบัวเงิน=Optic 12 Core DW = 2.08 km.";
    }
else if($message == "3214-85"){
        $arrayPostData['messages'][0]['text'] = "NKI000183,(3214-83) บ้านหนองบัวคำ - (3214-85) บ้านท่าคำบง=Optic 12 Core DW = 1.44 km.";
    }
else if($message == "3214-86"){
        $arrayPostData['messages'][0]['text'] = "NKI000337,(3214-105) บ้านจับไม้ - (3214-86) บ้านท่าหายโศก=Optic 12 Core DW = 1.57 km.";
    }
else if($message == "3214-89"){
        $arrayPostData['messages'][0]['text'] = "NKI000529,(3214-73) บ้านแบง - (3214-89) โนนห้วยทราย=Optic 12 Core DW = 5.18 km.";
    }
else if($message == "3214-90"){
        $arrayPostData['messages'][0]['text'] = "NKI000530,(3214-73) บ้านแบง - (3214-90) เลิศไมตรี=Optic 12 Core DW = 2.31 km.";
    }
else if($message == "3214-91"){
        $arrayPostData['messages'][0]['text'] = "NKI000531,(3214-67) หนองบัวเงิน - (3214-91) ต.วัดหลวง โพนทอง=Optic 12 Core DW = 3.17 km.";
    }
else if($message == "3214-92"){
        $arrayPostData['messages'][0]['text'] = "NKI000253,(3214-75) บ้านไชยพัฒนา - (3214-92) หนองวัวชุม=Optic 12 Core DW = 5.455 km.";
    }
else if($message == "3214-97"){
          $arrayPostData['messages'][0]['text'] = "NKI000338,(3214-71) บ้านนาฮำ - (3214-97) บ้านหนองยาง=Optic 12 Core DW = 3.48 km.
NKI000527,(3214-97) บ้านหนองยาง - (3214-113) เกษตรเจริญศรี=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3214-98"){
        $arrayPostData['messages'][0]['text'] = "NKI000532,(3214-71) บ้านนาฮำ - (3214-98) ต.เฝ้าไร่ ทรัพย์เจริญ=Optic 12 Core DW = 3.75 km.";
    }
else if($message == "3214-99"){
        $arrayPostData['messages'][0]['text'] = "NKI000336,(3214-73) บ้านโนนยาง - (3214-99) บ้านเหล่าเจริญ=Optic 12 Core DW = 1.24 km.";
    }
else if($message == "3216-101"){
          $arrayPostData['messages'][0]['text'] = "NKI000533,(3216-94) ต.โพนแพง ดงตาล - (3216-101) บ้านดงมดแดง=Optic 12 Core DW = 2.37 km.
NKI000534,(3216-101) บ้านดงมดแดง - (3216-102) บ้านดงหอ=Optic 12 Core DW = 1.873 km.";
    }
else if($message == "3216-102"){
          $arrayPostData['messages'][0]['text'] = "NKI000534,(3216-101) บ้านดงมดแดง - (3216-102) บ้านดงหอ=Optic 12 Core DW = 1.873 km.
NKI000535,(3216-102) บ้านดงหอ - (3216-103) บ้านดอนเหมือด=Optic 12 Core DW = 2.58 km.";
    }
else if($message == "3216-103"){
        $arrayPostData['messages'][0]['text'] = "NKI000535,(3216-102) บ้านดงหอ - (3216-103) บ้านดอนเหมือด=Optic 12 Core DW = 2.58 km.";
    }
else if($message == "3216-104"){
        $arrayPostData['messages'][0]['text'] = "NKI000536,(3216-69) โนนสำราญ - (3216-104) ต.พระบาทนาสิงห์ คลองสาร=Optic 12 Core DW = 1.054 km.";
    }
else if($message == "3216-31"){
          $arrayPostData['messages'][0]['text'] = "NKI000066,() SJ โพนพิสัย-ปากคาด - (3216-31) รัตนวาปี=Optic 12 Core DW = 1.7 km.
NKI000209,(3216-31) รัตนวาปี - (3216-66) นาชุมช้าง=Optic 12 Core DW = 2.275 km.
NKI000255,(3216-31) รัตนวาปี - (3216-64) บ้านดอนบก=Optic 12 Core DW = 2.4 km.
NKI000290,(3216-31) รัตนวาปี - (3216-81) บ้านหนองไผ่=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3216-61"){
          $arrayPostData['messages'][0]['text'] = "NKI000211,(3216-61) น้ำเป - (3216-69) โนนสำราญ=Optic 12 Core DW = 4.9 km.
NKI000446,(SJ) ME โพนพิสัย-ME ปากคาด - (3216-61) น้ำเป=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3216-62"){
        $arrayPostData['messages'][0]['text'] = "NKI000447,(SJ) ME โพนพิสัย-ME ปากคาด - (3216-62) โปร่งสำราญ=Optic 12 Core DW = 1.62 km.";
    }
else if($message == "3216-63"){
          $arrayPostData['messages'][0]['text'] = "NKI000254,(SJ) SJ หนองคาย-บึงกาฬ - (3216-63) บ้านต้อน=Optic 12 Core DW = 0.3 km.
NKI000545,(3216-63) บ้านต้อน - (3216-91) ต.บ้านต้อน เปงจานนคร=Optic 12 Core DW = 2.52 km.";
    }
else if($message == "3216-64"){
          $arrayPostData['messages'][0]['text'] = "NKI000255,(3216-31) รัตนวาปี - (3216-64) บ้านดอนบก=Optic 12 Core DW = 2.4 km.
NKI000293,(3216-64) บ้านดอนบก - (3216-78) บ้านตาลชุม=Optic 12 Core DW = 1.49 km.";
    }
else if($message == "3216-65"){
          $arrayPostData['messages'][0]['text'] = "NKI000297,(3216-65) บ้านเปงจาน - (3216-88) บ้านผักขะ=Optic 12 Core DW = 1.9 km.
NKI000448,(SJ) ME โพนพิสัย-ME ปากคาด - (3216-65) บ้านเปงจาน=Optic 12 Core DW = 1.525 km.
NKI000546,(3216-65) บ้านเปงจาน - (3216-94) ต.โพนแพง ดงตาล=12 Core= 8.3 km.
NKI000548,(3216-65) บ้านเปงจาน - (3216-98) เปงจานนคร2=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3216-66"){
          $arrayPostData['messages'][0]['text'] = "NKI000209,(3216-31) รัตนวาปี - (3216-66) นาชุมช้าง=Optic 12 Core DW = 2.275 km.
NKI000210,(3216-66) นาชุมช้าง - (3216-68) บ้านสามัคคีชัย=Optic 12 Core DW = 2.61 km.";
    }
else if($message == "3216-67"){
          $arrayPostData['messages'][0]['text'] = "NKI000186,(3216-68) บ้านสามัคคีชัย - (3216-67) บ้านนาสิงห์=Optic 12 Core DW = 4.98 km.
NKI000212,(3216-67) นาสิงห์ - (3216-70) บ้านนาหงษ์คำ=Optic 12 Core DW = 2.585 km.";
    }
else if($message == "3216-68"){
          $arrayPostData['messages'][0]['text'] = "NKI000186,(3216-68) บ้านสามัคคีชัย - (3216-67) บ้านนาสิงห์=Optic 12 Core DW = 4.98 km.
NKI000210,(3216-66) นาชุมช้าง - (3216-68) บ้านสามัคคีชัย=Optic 12 Core DW = 2.61 km.";
    }
else if($message == "3216-69"){
          $arrayPostData['messages'][0]['text'] = "NKI000211,(3216-61) น้ำเป - (3216-69) โนนสำราญ=Optic 12 Core DW = 4.9 km.
NKI000213,(3216-69) โนนสำราญ - (3216-71) บ้านเตชะไพบูลย์=Optic 12 Core DW = 4.17 km.
NKI000536,(3216-69) โนนสำราญ - (3216-104) ต.พระบาทนาสิงห์ คลองสาร=Optic 12 Core DW = 1.054 km.";
    }
else if($message == "3216-70"){
          $arrayPostData['messages'][0]['text'] = "NKI000212,(3216-67) นาสิงห์ - (3216-70) บ้านนาหงษ์คำ=Optic 12 Core DW = 2.585 km.
NKI000381,(3216-70) บ้านนาหงษ์คำ - (3216-93) บ้านโนนหงษ์ทอง=Optic 12 Core DW = 0.91 km.
NKI000541,(3216-70) นาหงษ์คำ - (3216-76) โนนภูทอง ต.นาทับไฮ=Optic 12 Core DW = 2.935 km.";
    }
else if($message == "3216-71"){
        $arrayPostData['messages'][0]['text'] = "NKI000213,(3216-69) โนนสำราญ - (3216-71) บ้านเตชะไพบูลย์=Optic 12 Core DW = 4.17 km.";
    }
else if($message == "3216-72"){
        $arrayPostData['messages'][0]['text'] = "NKI000537,(SJ) บ้านหนองเค็ม - (3216-72) นาทับไฮ=Optic 12 Core DW = 1.99 km.";
    }
else if($message == "3216-74"){
          $arrayPostData['messages'][0]['text'] = "NKI000539,(3216-84) โนนดู่เหนือ - (3216-74) โนนดู่ ต.นาทับไฮ=Optic 12 Core DW = 1.06 km.
NKI000540,(3216-74) โนนดู่ - (3216-75) ยางชุม=Optic 12 Core DW = 3.14 km.";
    }
else if($message == "3216-75"){
          $arrayPostData['messages'][0]['text'] = "NKI000346,(3216-75) บ้ายยางชุม - (3216-95) บ้านทับไฮบ้านน้อย=Optic 12 Core DW = 1.005 km.
NKI000540,(3216-74) โนนดู่ - (3216-75) ยางชุม=Optic 12 Core DW = 3.14 km.
NKI000543,(3216-75) ยางชุม - (3216-83) นาคำมูล=Optic 12 Core DW = 3.19 km.";
    }
else if($message == "3216-76"){
        $arrayPostData['messages'][0]['text'] = "NKI000541,(3216-70) นาหงษ์คำ - (3216-76) โนนภูทอง ต.นาทับไฮ=Optic 12 Core DW = 2.935 km.";
    }
else if($message == "3216-77"){
          $arrayPostData['messages'][0]['text'] = "NKI000295,(3216-77) ต.โพนแพง บ้านโพนสว่าง - (3216-89) บ้านหนองคอน ต.โพนแพง=Optic 12 Core DW = 0.85 km.
NKI000542,(SJ) ME โพนพิสัย-ME ปากคาด - (3216-77) ต.โพนแพง บ้านโพนสว่าง=Optic 12 Core DW = 0.73 km.";
    }
else if($message == "3216-78"){
        $arrayPostData['messages'][0]['text'] = "NKI000293,(3216-64) บ้านดอนบก - (3216-78) บ้านตาลชุม=Optic 12 Core DW = 1.49 km.";
    }
else if($message == "3216-79"){
          $arrayPostData['messages'][0]['text'] = "NKI000292,(3216-81) บ้านหนองไผ่ - (3216-79) บ้านหนองแก้ว=Optic 12 Core DW = 1.86 km.
NKI000299,(3216-79) บ้านหนองแก้ว - (3216-82) บ้านหนองแก้วเหนือ=Optic 12 Core DW = 0.76 km.";
    }
else if($message == "3216-80"){
        $arrayPostData['messages'][0]['text'] = "NKI000291,(3216-81) บ้านหนองไผ่ - (3216-80) เจริญชัย=Optic 12 Core DW = 1.46 km.";
    }
else if($message == "3216-81"){
          $arrayPostData['messages'][0]['text'] = "NKI000290,(3216-31) รัตนวาปี - (3216-81) บ้านหนองไผ่=Optic 12 Core DW = 2.5 km.
NKI000291,(3216-81) บ้านหนองไผ่ - (3216-80) เจริญชัย=Optic 12 Core DW = 1.46 km.
NKI000292,(3216-81) บ้านหนองไผ่ - (3216-79) บ้านหนองแก้ว=Optic 12 Core DW = 1.86 km.";
    }
else if($message == "3216-82"){
        $arrayPostData['messages'][0]['text'] = "NKI000299,(3216-79) บ้านหนองแก้ว - (3216-82) บ้านหนองแก้วเหนือ=Optic 12 Core DW = 0.76 km.";
    }
else if($message == "3216-83"){
        $arrayPostData['messages'][0]['text'] = "NKI000543,(3216-75) ยางชุม - (3216-83) นาคำมูล=Optic 12 Core DW = 3.19 km.";
    }
else if($message == "3216-84"){
          $arrayPostData['messages'][0]['text'] = "NKI000538,(3216-84) โนนดู่เหนือ - (SJ) บ้านหนองเค็ม=Optic 12 Core DW = 2.81 km.
NKI000539,(3216-84) โนนดู่เหนือ - (3216-74) โนนดู่ ต.นาทับไฮ=Optic 12 Core DW = 1.06 km.
NKI000544,(SJ) ME ปากคาด-ME โซ่พิสัย - (3216-84) โนนดู่เหนือ=12 Core= 3.89 km.";
    }
else if($message == "3216-86"){
        $arrayPostData['messages'][0]['text'] = "NKI000298,(3216-88) บ้านผักขะ - (3216-86) บ้านโพนแพง=Optic 12 Core DW = 2.46 km.";
    }
else if($message == "3216-88"){
          $arrayPostData['messages'][0]['text'] = "NKI000297,(3216-65) บ้านเปงจาน - (3216-88) บ้านผักขะ=Optic 12 Core DW = 1.9 km.
NKI000298,(3216-88) บ้านผักขะ - (3216-86) บ้านโพนแพง=Optic 12 Core DW = 2.46 km.";
    }
else if($message == "3216-89"){
        $arrayPostData['messages'][0]['text'] = "NKI000295,(3216-77) ต.โพนแพง บ้านโพนสว่าง - (3216-89) บ้านหนองคอน ต.โพนแพง=Optic 12 Core DW = 0.85 km.";
    }
else if($message == "3216-90"){
        $arrayPostData['messages'][0]['text'] = "NKI000380,(3216-91) บ้านเปงจานนคร - (3216-90) บ้านต้อนน้อย=Optic 12 Core DW = 2 km.";
    }
else if($message == "3216-91"){
          $arrayPostData['messages'][0]['text'] = "NKI000380,(3216-91) บ้านเปงจานนคร - (3216-90) บ้านต้อนน้อย=Optic 12 Core DW = 2 km.
NKI000545,(3216-63) บ้านต้อน - (3216-91) ต.บ้านต้อน เปงจานนคร=Optic 12 Core DW = 2.52 km.";
    }
else if($message == "3216-93"){
          $arrayPostData['messages'][0]['text'] = "NKI000381,(3216-70) บ้านนาหงษ์คำ - (3216-93) บ้านโนนหงษ์ทอง=Optic 12 Core DW = 0.91 km.
NKI000549,(3216-93) โนนหงษ์ทอง - (3216-99) บ้านตาดทอง=Optic 12 Core DW = 1.75 km.";
    }
else if($message == "3216-94"){
          $arrayPostData['messages'][0]['text'] = "NKI000381,(3216-70) บ้านนาหงษ์คำ - (3216-93) บ้านโนนหงษ์ทอง=Optic 12 Core DW = 0.91 km.
NKI000549,(3216-93) โนนหงษ์ทอง - (3216-99) บ้านตาดทอง=Optic 12 Core DW = 1.75 km.";
    }
else if($message == "3216-95"){
        $arrayPostData['messages'][0]['text'] = "NKI000346,(3216-75) บ้ายยางชุม - (3216-95) บ้านทับไฮบ้านน้อย=Optic 12 Core DW = 1.005 km.";
    }
else if($message == "3216-97"){
        $arrayPostData['messages'][0]['text'] = "NKI000547,(3216-98) เปงจานนคร2 - (3216-97) บ้านดงเล้า=Optic 12 Core DW = 2.627 km.";
    }
else if($message == "3216-98"){
          $arrayPostData['messages'][0]['text'] = "NKI000547,(3216-98) เปงจานนคร2 - (3216-97) บ้านดงเล้า=Optic 12 Core DW = 2.627 km.
NKI000548,(3216-65) บ้านเปงจาน - (3216-98) เปงจานนคร2=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3216-99"){
        $arrayPostData['messages'][0]['text'] = "NKI000549,(3216-93) โนนหงษ์ทอง - (3216-99) บ้านตาดทอง=Optic 12 Core DW = 1.75 km.";
    }
else if($message == "3217-37"){
          $arrayPostData['messages'][0]['text'] = "NKI000101,() SJ บ้านผือ-ศรีเชียงใหม่ - (3217-37) โพธิ์ตาก 1=Optic 12 Core DW = 2.206 km.
NKI000102,(3217-37) โพธิ์ตาก - (3217-38) บ้านโพนทอง=Optic 12 Core DW = 1.785 km.
NKI000257,(3217-37) โพธิ์ตาก1 - (3217-40) บ้านสาวแล=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3217-38"){
          $arrayPostData['messages'][0]['text'] = "NKI000102,(3217-37) โพธิ์ตาก - (3217-38) บ้านโพนทอง=Optic 12 Core DW = 1.785 km.
NKI000256,(3217-38) บ้านโพนทอง - (3217-39) บ้านไร่=Optic 12 Core DW = 3 km.
NKI000550,(3217-38) บ้านโพนทอง - (3217-41) ต.โพนทอง กาหม=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3217-39"){
          $arrayPostData['messages'][0]['text'] = "NKI000256,(3217-38) บ้านโพนทอง - (3217-39) บ้านไร่=Optic 12 Core DW = 3 km.
NKI000418,(3217-39) บ้านไร่ - (3217-42) ต.โพนทอง ไร่=Optic 12 Core DW = 0.79 km.";
    }
else if($message == "3217-40"){
        $arrayPostData['messages'][0]['text'] = "NKI000257,(3217-37) โพธิ์ตาก1 - (3217-40) บ้านสาวแล=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3217-41"){
        $arrayPostData['messages'][0]['text'] = "NKI000550,(3217-38) บ้านโพนทอง - (3217-41) ต.โพนทอง กาหม=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3217-42"){
          $arrayPostData['messages'][0]['text'] = "NKI000376,(3217-42) บ้านไร่ - (3217-42) บ้านไร่=Optic 12 Core DW = 0.87 km.
NKI000418,(3217-39) บ้านไร่ - (3217-42) ต.โพนทอง ไร่=Optic 12 Core DW = 0.79 km.
NKI000551,(3217-42) ต.โพนทอง บ้านไร่ - (3217-43) ต.โพนทอง นาฝาก=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3217-43"){
        $arrayPostData['messages'][0]['text'] = "NKI000551,(3217-42) ต.โพนทอง บ้านไร่ - (3217-43) ต.โพนทอง นาฝาก=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3217-44"){
          $arrayPostData['messages'][0]['text'] = "NKI000416,(3217-44) บ้านดงเหล่า - (3217-47) บ้านศุนย์กลาง=Optic 12 Core DW = 4.22 km.
NPL000225,(3217-47) บ้านศูนย์กลาง - (3217-44) บ้านดงเหล่า=Optic 12 Core DW = 4.3 km.";
    }
else if($message == "3217-45"){
          $arrayPostData['messages'][0]['text'] = "NKI000415,(3217-46) บ้านน้ำทอน - (3217-45) บ้านด่านศรีสุข=Optic 12 Core DW = 3.2 km.
NKI000552,(3217-45) บ้านด่านศรีสุข - (3217-48) น้ำทอนใต้ หมู่2=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3217-46"){
          $arrayPostData['messages'][0]['text'] = "NKI000379,(SJ) บ้านไทยเจริญ-บ้านน้ำทอน - (3217-46) บ้านน้ำทอน=Optic 12 Core DW = 2.42 km.
NKI000415,(3217-46) บ้านน้ำทอน - (3217-45) บ้านด่านศรีสุข=Optic 12 Core DW = 3.2 km.
NKI000553,(3217-46) น้ำทอน - (3217-49) ต.ด่านศรีสุข ดอนขนุน=Optic 12 Core DW = 4.55 km.";
    }
else if($message == "3217-47"){
          $arrayPostData['messages'][0]['text'] = "NKI000416,(3217-44) บ้านดงเหล่า - (3217-47) บ้านศุนย์กลาง=Optic 12 Core DW = 4.22 km.
NPL000225,(3217-47) บ้านศูนย์กลาง - (3217-44) บ้านดงเหล่า=Optic 12 Core DW = 4.3 km.";
    }
else if($message == "3217-48"){
        $arrayPostData['messages'][0]['text'] = "NKI000552,(3217-45) บ้านด่านศรีสุข - (3217-48) น้ำทอนใต้ หมู่2=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3217-49"){
        $arrayPostData['messages'][0]['text'] = "NKI000553,(3217-46) น้ำทอน - (3217-49) ต.ด่านศรีสุข ดอนขนุน=Optic 12 Core DW = 4.55 km.";
    }
else if($message == "3217-50"){
        $arrayPostData['messages'][0]['text'] = "NKI000554,(3202-56) บ้านเสียว - (3217-50) ต.โพนทอง บ้านโคกบุญสนอง=Optic 12 Core DW = 3.72 km.";
    }
else if($message == "3230-37"){
          $arrayPostData['messages'][0]['text'] = "NKI000059,(SJ) SJ บ้านจิก-หนองสองห้อง - (3230-37) น้ำสวย=Optic 12 Core DW = 1.8 km.
NKI000107,(3230-37) น้ำสวย - (3201-98) น้ำสวย2=Optic 12 Core DW = 1.4 km.
NKI000134,(3230-37) น้ำสวย - (3230-40) บ้านน้ำสวย=Optic 12 Core DW = 1.42 km.
NKI000228,(3230-37) น้ำสวย - (3201-87) สระใคร=Optic 12 Core DW = 5.341 km.
NKI000302,(3230-37) น้ำสวย - (3230-48) บ้านยางคำ=Optic 12 Core DW = 0.86 km.";
    }
else if($message == "3230-38"){
          $arrayPostData['messages'][0]['text'] = "NKI000304,(3230-38) บ้านคอกช้าง - (3230-49) บ้านเหมือดแอ่=Optic 12 Core DW = 3.55 km.
NKI000396,(3230-38) บ้านคอกช้าง - (3230-61) บ้านนาทราย=Optic 12 Core DW = 2.76 km.
NKI000425,(3230-38) บ้านคอกช้าง - (3230-60) ต.คอกช้าง ดงลี้=Optic 12 Core DW = 3 km.
NKI000449,(3201-87) สระใคร - (3230-38) บ้านคอกช้าง=Optic 12 Core DW = 2.358 km.
NKI000557,(3230-38) คอกช้าง - (3230-68) ต.คอกช้าง บ้านดงแสนแผง=Optic 12 Core DW = 4.47 km.";
    }
else if($message == "3230-39"){
          $arrayPostData['messages'][0]['text'] = "NKI000133,(3230-40) บ้านน้ำสวย - (3230-39) โพนสว่าง=Optic 12 Core DW = 6.12 km.
NKI000303,(3230-39) บ้านโพนสวรรค์ - (3230-47) บ้านโนนสง่า=Optic 12 Core DW = 1.385 km.";
    }
else if($message == "3230-40"){
          $arrayPostData['messages'][0]['text'] = "NKI000133,(3230-40) บ้านน้ำสวย - (3230-39) โพนสว่าง=Optic 12 Core DW = 6.12 km.
NKI000134,(3230-37) น้ำสวย - (3230-40) บ้านน้ำสวย=Optic 12 Core DW = 1.42 km.
NKI000317,(3230-40) บ้านน้ำสวย - (3201-161) บ้านนาอ่าง=Optic 12 Core DW = 2.96 km.";
    }
else if($message == "3230-41"){
          $arrayPostData['messages'][0]['text'] = "NKI000187,(3230-42) บ้านเดื่อ - (3230-41) บ้านฝาง=Optic 12 Core DW = 1.55 km.
NKI000300,(3230-41) บ้านฝาง - (3230-51) บ้านสมสนุก=Optic 12 Core DW = 2.53 km.
NKI000383,(3230-41) บ้านฝาง - (3230-64) บ้านหนองบัว=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3230-42"){
          $arrayPostData['messages'][0]['text'] = "NKI000187,(3230-42) บ้านเดื่อ - (3230-41) บ้านฝาง=Optic 12 Core DW = 1.55 km.
NKI000188,(3230-43) บ้านตอแก - (3230-42) บ้านเดื่อ=Optic 12 Core DW = 1.92 km.";
    }
else if($message == "3230-43"){
          $arrayPostData['messages'][0]['text'] = "NKI000188,(3230-43) บ้านตอแก - (3230-42) บ้านเดื่อ=Optic 12 Core DW = 1.92 km.
NKI000189,(3230-44) บ้านโนนแดง - (3230-43) บ้านตอแก=Optic 12 Core DW = 2.45 km.
NKI000258,(SJ) SJ - (3230-43) บ้านตอแก=Optic 12 Core DW = 0.66 km.
NKI000426,(3230-43) ตอแก - (3230-46) หมากหุ่ง=Optic 12 Core DW = 1.72 km.";
    }
else if($message == "3230-44"){
          $arrayPostData['messages'][0]['text'] = "NKI000189,(3230-44) บ้านโนนแดง - (3230-43) บ้านตอแก=Optic 12 Core DW = 2.45 km.
NKI000274,(3230-45) บ้านโนนดู่ - (3230-44) บ้านโนนแดง=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3230-45"){
          $arrayPostData['messages'][0]['text'] = "NKI000190,(SJ) SJ สระใคร-พระธาตุบังพวน - (3230-45) บ้านโนนดู่=Optic 12 Core DW = 0.98 km.
NKI000274,(3230-45) บ้านโนนดู่ - (3230-44) บ้านโนนแดง=Optic 12 Core DW = 2.2 km.
NKI000340,(3230-45) บ้านโนนดู่ - (3230-58) บ้านโพนหวาย=Optic 12 Core DW = 1.39 km.";
    }
else if($message == "3230-46"){
          $arrayPostData['messages'][0]['text'] = "NKI000384,(3230-46) บานหมากหุ่ง - (3230-65) บ้านห้วยทราย=12 Core= 5.82 km.
NKI000426,(3230-43) ตอแก - (3230-46) หมากหุ่ง=Optic 12 Core DW = 1.72 km";
    }
else if($message == "3230-47"){
        $arrayPostData['messages'][0]['text'] = "NKI000303,(3230-39) บ้านโพนสวรรค์ - (3230-47) บ้านโนนสง่า=Optic 12 Core DW = 1.385 km.";
    }
else if($message == "3230-48"){
        $arrayPostData['messages'][0]['text'] = "NKI000302,(3230-37) น้ำสวย - (3230-48) บ้านยางคำ=Optic 12 Core DW = 0.86 km.";
    }
else if($message == "3230-49"){
          $arrayPostData['messages'][0]['text'] = "NKI000301,(3230-49) บ้านเหมือดแอ่ - (3230-50) บ้านนากอ=Optic 12 Core DW = 1.925 km.
NKI000304,(3230-38) บ้านคอกช้าง - (3230-49) บ้านเหมือดแอ่=Optic 12 Core DW = 3.55 km.";
    }
else if($message == "3230-50"){
        $arrayPostData['messages'][0]['text'] = "NKI000301,(3230-49) บ้านเหมือดแอ่ - (3230-50) บ้านนากอ=Optic 12 Core DW = 1.925 km.";
    }
else if($message == "3230-51"){
        $arrayPostData['messages'][0]['text'] = "NKI000300,(3230-41) บ้านฝาง - (3230-51) บ้านสมสนุก=Optic 12 Core DW = 2.53 km.";
    }
else if($message == "3230-57"){
        $arrayPostData['messages'][0]['text'] = "NKI000341,(3201-87) สระใคร - (3230-57) บ้านไชยา=Optic 12 Core DW = 1.07 km.";
    }
else if($message == "3230-58"){
        $arrayPostData['messages'][0]['text'] = "NKI000340,(3230-45) บ้านโนนดู่ - (3230-58) บ้านโพนหวาย=Optic 12 Core DW = 1.39 km.";
    }
else if($message == "3230-60"){
        $arrayPostData['messages'][0]['text'] = "NKI000425,(3230-38) บ้านคอกช้าง - (3230-60) ต.คอกช้าง ดงลี้=Optic 12 Core DW = 3 km.";
    }
else if($message == "3230-61"){
        $arrayPostData['messages'][0]['text'] = "NKI000396,(3230-38) บ้านคอกช้าง - (3230-61) บ้านนาทราย=Optic 12 Core DW = 2.76 km.";
    }
else if($message == "3230-62"){
        $arrayPostData['messages'][0]['text'] = "NKI000555,(3019-91) ต.นาพู่ บ้านหัวสาย - (3230-62) ต.คอกช้าง สมสะอาด=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3230-63"){
        $arrayPostData['messages'][0]['text'] = "NKI000385,(3019-91) บ้านหัวสาย - (3230-63) บ้านดงมุข=Optic 12 Core DW = 2.57 km.";
    }
else if($message == "3230-64"){
        $arrayPostData['messages'][0]['text'] = "NKI000383,(3230-41) บ้านฝาง - (3230-64) บ้านหนองบัว=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3230-65"){
        $arrayPostData['messages'][0]['text'] = "NKI000384,(3230-46) บานหมากหุ่ง - (3230-65) บ้านห้วยทราย=12 Core= 5.82 km.";
    }
else if($message == "3230-67"){
        $arrayPostData['messages'][0]['text'] = "NKI000556,(3201-123) มะเขือดอนหมู - (3230-67) บ้านโพธิ์ทอง=Optic 12 Core DW = 1.17 km.";
    }
else if($message == "3230-68"){
        $arrayPostData['messages'][0]['text'] = "NKI000557,(3230-38) คอกช้าง - (3230-68) ต.คอกช้าง บ้านดงแสนแผง=Optic 12 Core DW = 4.47 km.";
    }
else if($message == "3231-31"){
          $arrayPostData['messages'][0]['text'] = "NKI000003,(3201-32) me ท่าเสด็จ - (3231-31) ME สวท.หนองคาย=12 Core= 3.3 km.
NKI000012,(3231-31) ME สวท.หนองคาย - (3201-39) โครงการบ้านหาดคำ=Optic 12 Core DW = 5.7 km.
NKI000013,(3231-31) ME สวท.หนองคาย - (3201-41) โครงการบ้านนาคลอง=Optic 12 Core DW = 2.7 km.
NKI000026,(3231-31) ME สวท.หนองคาย - (3201-62) พัดชา=Optic 12 Core DW = 1.3 km.
NKI000050,(3231-31) ME สวท.หนองคาย - (3203-41) เนินพระเนาย์=Optic 12 Core DW = 0.75 km.
NKI000051,(3231-31) ME สวท.หนองคาย - (3203-42) บ้านสามัคคี=Optic 12 Core DW = 1.2 km.";
    }
else if($message == "3401-101"){
        $arrayPostData['messages'][0]['text'] = "LEI000121,(3401-102) นาโป่ง - (3401-101) หัวนา=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3401-102"){
          $arrayPostData['messages'][0]['text'] = "LEI000121,(3401-102) นาโป่ง - (3401-101) หัวนา=Optic 12 Core DW = 1.85 km.
LEI000122,(3401-64) โลตัสเลย - (3401-102) นาโป่ง=Optic 12 Core DW = 4 km.
LEI000128,(3401-102) นาโป่ง - (3401-111) บ้านถิ่น=Optic 12 Core DW = 1.34 km.
LEI000181,(3401-102) นาโป่ง - (3401-168) หนองบอน=Optic 12 Core DW = 1.172 km.";
    }
else if($message == "3401-104"){
        $arrayPostData['messages'][0]['text'] = "LEI000124,(3401-34) บุญสนอง - (3401-104) บุญสนอง 2=Optic 12 Core DW = 0.88 km.";
    }
else if($message == "3401-106"){
          $arrayPostData['messages'][0]['text'] = "LEI000140,(3401-106) นาดินดำ - (3401-157) เจริญสุข=Optic 12 Core DW = 1.563 km.
LEI000162,(3401-106) นาดินดำ - (3401-107) บ้านห้วยม่วง=Optic 12 Core DW = 3.23 km.
LEI000174,(3401-106) นาดินดำ - (3401-132) หนองหญ้าไซ=12 Core= 6.55 km.
LEI000271,(SJ) SJ นาดินดำ - (3401-106) นาดินดำ=Optic 12 Core DW = 1.4 km.
LEI000335,(3401-106) นาดินดำ - (3401-157) เจริญสุข=Optic 12 Core DW = 1.563 km.";
    }
else if($message == "3401-107"){
        $arrayPostData['messages'][0]['text'] = "LEI000162,(3401-106) นาดินดำ - (3401-107) บ้านห้วยม่วง=Optic 12 Core DW = 3.23 km.";
    }
else if($message == "3401-109"){
          $arrayPostData['messages'][0]['text'] = "LEI000163,(3401-83) นาอ้อ3 - (3401-109) ท่ามะนาว=Optic 12 Core DW = 1.6 km.
LEI000167,(3401-109) ท่ามะนาว - (3401-119) ท่าวังแคน=Optic 12 Core DW = 2.57 km.";
    }
else if($message == "3401-111"){
          $arrayPostData['messages'][0]['text'] = "LEI000128,(3401-102) นาโป่ง - (3401-111) บ้านถิ่น=Optic 12 Core DW = 1.34 km.
LEI000166,(3401-111) บ้านถิ่น - (3401-118) บ้านติ้วน้อย=Optic 12 Core DW = 4 km.
LEI000183,(3401-111) บ้านถิ่น - (3401-171) กกชุมแสง=12 Core= 7.537 km.";
    }
else if($message == "3401-116"){
          $arrayPostData['messages'][0]['text'] = "LEI000164,(3401-86) ค่ายศรีสองรัก - (3401-116) ท่าบุ่ง=Optic 12 Core DW = 2 km.
LEI000461,(3401-116) ท่าบุ่ง - (3401-123) บ้านปากหมาก=Optic 12 Core DW = 3.5 km.";
    }
else if($message == "3401-117"){
          $arrayPostData['messages'][0]['text'] = "LEI000138,(3401-117) บ้านห้วยลวงไซ - (3401-155) ห้วยสีเสียด=Optic 12 Core DW = 6.413 km.
LEI000165,(3401-89) ไร่ม่วง - (3401-117) บ้านห้วยลวงไซ=Optic 12 Core DW = 4 km.
LEI000168,(3401-117) บ้านห้วยลวงไซ - (3401-121) โป่งเบี้ย=Optic 12 Core DW = 4 km.";
    }
else if($message == "3401-118"){
          $arrayPostData['messages'][0]['text'] = "LEI000166,(3401-111) บ้านถิ่น - (3401-118) บ้านติ้วน้อย=Optic 12 Core DW = 4 km.
LEI000182,(3401-118) บ้านติ้วน้อย - (3401-169) น้ำฮวย=Optic 12 Core DW = 1.508 km.";
    }
else if($message == "3401-119"){
        $arrayPostData['messages'][0]['text'] = "LEI000167,(3401-109) ท่ามะนาว - (3401-119) ท่าวังแคน=Optic 12 Core DW = 2.57 km.";
    }
else if($message == "3401-121"){
        $arrayPostData['messages'][0]['text'] = "LEI000168,(3401-117) บ้านห้วยลวงไซ - (3401-121) โป่งเบี้ย=Optic 12 Core DW = 4 km.";
    }
else if($message == "3401-123"){
        $arrayPostData['messages'][0]['text'] = "LEI000461,(3401-116) ท่าบุ่ง - (3401-123) บ้านปากหมาก=Optic 12 Core DW = 3.5 km.";
    }
else if($message == "3401-124"){
        $arrayPostData['messages'][0]['text'] = "LEI000169,(3401-50) บ้านก้างปลา - (3401-124) โพนกุดแพ=Optic 12 Core DW = 1.571 km.";
    }
else if($message == "3401-125"){
        $arrayPostData['messages'][0]['text'] = "LEI000170,(3401-86) ค่ายศรีสองรัก - (3401-125) ค่ายศรีสองรัก 2=Optic 12 Core DW = 0.879 km.";
    }
else if($message == "3401-126"){
        $arrayPostData['messages'][0]['text'] = "LEI000171,(3401-33) ซอยรัชนี - (3401-126) แฟลตตำรวจ=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3401-129"){
        $arrayPostData['messages'][0]['text'] = "LEI000172,(3401-42) ราชภัฏเลย - (3401-129) น้ำพาว=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3401-131"){
        $arrayPostData['messages'][0]['text'] = "LEI000173,(3401-74) นาบอน - (3401-131) โรงเรียนนาบอน=Optic 12 Core DW = 1.087 km.";
    }
else if($message == "3401-132"){
          $arrayPostData['messages'][0]['text'] = "LEI000174,(3401-106) นาดินดำ - (3401-132) หนองหญ้าไซ=12 Core= 6.55 km.
LEI000176,(3401-132) หนองหญ้าไซ - (3401-134) หนองผำ=Optic 12 Core DW = 4 km.";
    }
else if($message == "3401-133"){
          $arrayPostData['messages'][0]['text'] = "LEI000175,(3401-35) บ้านนาโคก - (3401-133) ห้วยนาม่วง=Optic 12 Core DW = 2.8 km.
LEI000487,(3401-133) ห้วยนาม่วง - (3401-212) ห้วยนาม่วง2=Optic 12 Core DW = 1.458 km.";
    }
else if($message == "3401-134"){
          $arrayPostData['messages'][0]['text'] = "LEI000176,(3401-132) หนองหญ้าไซ - (3401-134) หนองผำ=Optic 12 Core DW = 4 km.
LEI000539,(3401-134) หนองผำ - (3403-162) ต.โคกขมิ้น โรงเรียนผาน้อย=Optic 12 Core DW = 1.612 km.";
    }
else if($message == "3401-136"){
        $arrayPostData['messages'][0]['text'] = "LEI000462,(SJ) เลย-ปากชม - (3401-136) บ้านเพีย=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3401-137"){
          $arrayPostData['messages'][0]['text'] = "LEI000141,(3401-137) ไร่ทาม - (3401-158) หนองนาทราย=12 Core= 5.68 km.
LEI000463,(SJ) เลย-นาด้วง - (3401-137) บ้านไร่ทาม=Optic 12 Core DW = 0.192 km.";
    }
else if($message == "3401-139"){
          $arrayPostData['messages'][0]['text'] = "LEI000178,(3401-139) เสี้ยวเหนือ - (3401-164) น้ำคิว=12 Core= 5.949 km.
LEI000259,(3401-139) เสี้ยวเหนือ - (3401-162) โนนป่าแดง=Optic 12 Core DW = 2.68 km.
LEI000400,(3401-139) เสี้ยวเหนือ - (3401-162) โพนป่าแดง=Optic 12 Core DW = 3.226 km.
LEI000446,(3401-139) บ้านเสี้ยวเหนือ - (3401-184) บ้านเสี้ยวใต้=Optic 12 Core DW = 1.6 km.
LEI000449,(3401-139) บ้านเสี้ยวเหนือ - (3401-182) บ้านห้วยกระทิง=Optic 12 Core DW = 4.925 km.
LEI000477,(SJ) เอกธานี-ภูเรือ - (3401-139) บ้านเสี้ยวเหนือ=Optic 12 Core DW = 0.679 km.";
    }
else if($message == "3401-141"){
          $arrayPostData['messages'][0]['text'] = "LEI000131,(3401-146) ตูบโกบ - (3401-141) กกดู่=Optic 12 Core DW = 5.236 km.
LEI000132,(3401-141) กกดู่ - (3401-144) ห้วยเหล็ก=Optic 12 Core DW = 4.136 km.
LEI000155,(3401-141) บ้านกกดู่ - (3413-71) บ้านปากยาง=12 Core= 14.3 km.
LEI000257,(3401-141) กกดู่ - (3401-154) ห้วยทรายคำ=Optic 12 Core DW = 5.7 km.
LEI000262,(3401-141) กกดู่ - (3401-176) ห้วยหวาย=Optic 12 Core DW = 2.374 km.";
    }
else if($message == "3401-144"){
        $arrayPostData['messages'][0]['text'] = "LEI000132,(3401-141) กกดู่ - (3401-144) ห้วยเหล็ก=Optic 12 Core DW = 4.136 km.";
    }
else if($message == "3401-145"){
          $arrayPostData['messages'][0]['text'] = "LEI000133,(3401-146) ตูบโกบ - (3401-145) ท่าเปิบ=Optic 12 Core DW = 4.284 km.
LEI000136,(3401-145) ท่าเปิบ - (3401-148) โป่งป่าติ้ว=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3401-146"){
          $arrayPostData['messages'][0]['text'] = "LEI000131,(3401-146) ตูบโกบ - (3401-141) กกดู่=Optic 12 Core DW = 5.236 km.
LEI000133,(3401-146) ตูบโกบ - (3401-145) ท่าเปิบ=Optic 12 Core DW = 4.284 km.
LEI000134,(3401-76) บ้านปากภู - (3401-146) ตูบโกบ=12 Core= 9.091 km.";
    }
else if($message == "3401-147"){
          $arrayPostData['messages'][0]['text'] = "LEI000135,(3401-148) โป่งป่าติ้ว - (3401-147) ลาดค้อ=Optic 12 Core DW = 2.96 km.
LEI000447,(3401-147) บ้านลาดค้อ - (3401-183) บ้านกำพี้=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3401-148"){
          $arrayPostData['messages'][0]['text'] = "LEI000135,(3401-148) โป่งป่าติ้ว - (3401-147) ลาดค้อ=Optic 12 Core DW = 2.96 km.
LEI000136,(3401-145) ท่าเปิบ - (3401-148) โป่งป่าติ้ว=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3401-151"){
        $arrayPostData['messages'][0]['text'] = "LEI000177,(3401-151) ห้วยทราย - (3401-154) ห้วยทรายคำ=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3401-152"){
        $arrayPostData['messages'][0]['text'] = "LEI000650,(3401-154) ห้วยทรายคำ - (3401-152) วังยาว=12 Core= 4.8 km.";
    }
else if($message == "3401-153"){
        $arrayPostData['messages'][0]['text'] = "LEI000137,(3404-38) บ้านโป่ง - (3401-153) บ้านนาแขม=12 Core= 6.398 km.";
    }
else if($message == "3401-154"){
          $arrayPostData['messages'][0]['text'] = "LEI000177,(3401-151) ห้วยทราย - (3401-154) ห้วยทรายคำ=Optic 12 Core DW = 0.9 km.
LEI000257,(3401-141) กกดู่ - (3401-154) ห้วยทรายคำ=Optic 12 Core DW = 5.7 km.
LEI000650,(3401-154) ห้วยทรายคำ - (3401-152) วังยาว=12 Core= 4.8 km.";
    }
else if($message == "3401-155"){
        $arrayPostData['messages'][0]['text'] = "LEI000138,(3401-117) บ้านห้วยลวงไซ - (3401-155) ห้วยสีเสียด=Optic 12 Core DW = 6.413 km.";
    }
else if($message == "3401-156"){
        $arrayPostData['messages'][0]['text'] = "LEI000139,(SJ) me ราชภัฏเลย - me ท่าลี่ - (3401-156) ส้าน=Optic 12 Core DW = 4.556 km.";
    }
else if($message == "3401-157"){
          $arrayPostData['messages'][0]['text'] = "LEI000140,(3401-106) นาดินดำ - (3401-157) เจริญสุข=Optic 12 Core DW = 1.563 km.
LEI000335,(3401-106) นาดินดำ - (3401-157) เจริญสุข=Optic 12 Core DW = 1.563 km.";
    }
else if($message == "3401-158"){
        $arrayPostData['messages'][0]['text'] = "LEI000141,(3401-137) ไร่ทาม - (3401-158) หนองนาทราย=12 Core= 5.68 km.";
    }
else if($message == "3401-159"){
        $arrayPostData['messages'][0]['text'] = "LEI000144,(3408-66) ท่าสวรรค์ - (3401-159) บ้านทรัพย์มงคล=Optic 12 Core DW = 5.34 km.";
    }
else if($message == "3401-162"){
          $arrayPostData['messages'][0]['text'] = "LEI000259,(3401-139) เสี้ยวเหนือ - (3401-162) โนนป่าแดง=Optic 12 Core DW = 2.68 km.
LEI000400,(3401-139) เสี้ยวเหนือ - (3401-162) โพนป่าแดง=Optic 12 Core DW = 3.226 km.";
    }
else if($message == "3401-163"){
        $arrayPostData['messages'][0]['text'] = "LEI000260,(SJ) SJ เลย-ภูเรือ - (3401-163) ภูสวรรค์=Optic 12 Core DW = 1.551 km.";
    }
else if($message == "3401-164"){
        $arrayPostData['messages'][0]['text'] = "LEI000178,(3401-139) เสี้ยวเหนือ - (3401-164) น้ำคิว=12 Core= 5.949 km.";
    }
else if($message == "3401-165"){
          $arrayPostData['messages'][0]['text'] = "LEI000179,(3401-166) ขอนแก่น - (3401-165) ห้วยโตก=Optic 12 Core DW = 2.3 km.
LEI000435,(3401-165) บ้านห้วยโตก - (3401-172) บ้านบง=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3401-166"){
          $arrayPostData['messages'][0]['text'] = "LEI000179,(3401-166) ขอนแก่น - (3401-165) ห้วยโตก=Optic 12 Core DW = 2.3 km.
LEI000258,(3401-64) โลตัสเลย - (3401-166) ขอนแก่น=Optic 12 Core DW = 2.17 km.";
    }
else if($message == "3401-167"){
        $arrayPostData['messages'][0]['text'] = "LEI000180,(3401-171) กกชุมแสง - (3401-167) ป่าข้าวหลาม=12 Core= 4.863 km.";
    }
else if($message == "3401-168"){
        $arrayPostData['messages'][0]['text'] = "LEI000181,(3401-102) นาโป่ง - (3401-168) หนองบอน=Optic 12 Core DW = 1.172 km.";
    }
else if($message == "3401-169"){
        $arrayPostData['messages'][0]['text'] = "LEI000182,(3401-118) บ้านติ้วน้อย - (3401-169) น้ำฮวย=Optic 12 Core DW = 1.508 km.";
    }
else if($message == "3401-171"){
          $arrayPostData['messages'][0]['text'] = "LEI000180,(3401-171) กกชุมแสง - (3401-167) ป่าข้าวหลาม=12 Core= 4.863 km.
LEI000183,(3401-111) บ้านถิ่น - (3401-171) กกชุมแสง=12 Core= 7.537 km.";
    }
else if($message == "3401-172"){
        $arrayPostData['messages'][0]['text'] = "LEI000435,(3401-165) บ้านห้วยโตก - (3401-172) บ้านบง=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3401-174"){
          $arrayPostData['messages'][0]['text'] = "LEI000261,(3401-64) โลตัสเลย - (3401-174) โนนกุดจับ=Optic 12 Core DW = 1.328 km.
LEI000674,(3401-192) วังแคน - (3401-174) หนองดอกบัว=Optic 12 Core DW = 2.52 km.";
    }
else if($message == "3401-176"){
        $arrayPostData['messages'][0]['text'] = "LEI000262,(3401-141) กกดู่ - (3401-176) ห้วยหวาย=Optic 12 Core DW = 2.374 km.";
    }
else if($message == "3401-177"){
        $arrayPostData['messages'][0]['text'] = "LEI000478,(3401-97) บ้านแหล่งควาย - (3401-177) บ้านผู้การ=Optic 12 Core DW = 2.397 km.";
    }
else if($message == "3401-178"){
        $arrayPostData['messages'][0]['text'] = "LEI000442,(3401-178) บ้านโนนกุดจับ - (3401-189) บ้านโนนกุดจับ2=Optic 12 Core DW = 1.034 km.";
    }
else if($message == "3401-179"){
        $arrayPostData['messages'][0]['text'] = "LEI000445,(3401-182) บ้านห้วยกระทิง - (3401-179) บ้านกกทองใหญ่=Optic 12 Core DW = 7.39 km.";
    }
else if($message == "3401-182"){
          $arrayPostData['messages'][0]['text'] = "LEI000445,(3401-182) บ้านห้วยกระทิง - (3401-179) บ้านกกทองใหญ่=Optic 12 Core DW = 7.39 km.
LEI000449,(3401-139) บ้านเสี้ยวเหนือ - (3401-182) บ้านห้วยกระทิง=Optic 12 Core DW = 4.925 km.";
    }
else if($message == "3401-183"){
        $arrayPostData['messages'][0]['text'] = "LEI000447,(3401-147) บ้านลาดค้อ - (3401-183) บ้านกำพี้=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3401-184"){
        $arrayPostData['messages'][0]['text'] = "LEI000446,(3401-139) บ้านเสี้ยวเหนือ - (3401-184) บ้านเสี้ยวใต้=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3401-185"){
        $arrayPostData['messages'][0]['text'] = "LEI000444,(3401-186) บ้านสะอาด - (3401-185) บ้านลายเหนือ=Optic 12 Core DW = 0.76 km.";
    }
else if($message == "3401-186"){
          $arrayPostData['messages'][0]['text'] = "LEI000444,(3401-186) บ้านสะอาด - (3401-185) บ้านลายเหนือ=Optic 12 Core DW = 0.76 km.
LEI000479,(SJ) ปากชม-เลย - (3401-186) ต.น้ำสวย สะอาด=12 Core= 0.9 km.";
    }
else if($message == "3401-187"){
          $arrayPostData['messages'][0]['text'] = "LEI000480,(SJ) เลย-ปากชม - (3401-187) ต.น้ำสวย นาน้ำมัน=12 Core= 0.92 km.
LEI000481,(3401-187) ต.น้ำสวย นาน้ำมัน - (3401-192) วังแคน=Optic 12 Core DW = 2.325 km.";
    }
else if($message == "3401-188"){
        $arrayPostData['messages'][0]['text'] = "LEI000441,(SJ) SJ - (3401-188) บ้านน้ำภู=Optic 12 Core DW = 0.91 km.";
    }
else if($message == "3401-189"){
        $arrayPostData['messages'][0]['text'] = "LEI000442,(3401-178) บ้านโนนกุดจับ - (3401-189) บ้านโนนกุดจับ2=Optic 12 Core DW = 1.034 km.";
    }
else if($message == "3401-192"){
          $arrayPostData['messages'][0]['text'] = "LEI000481,(3401-187) ต.น้ำสวย นาน้ำมัน - (3401-192) วังแคน=Optic 12 Core DW = 2.325 km.
LEI000674,(3401-192) วังแคน - (3401-174) หนองดอกบัว=Optic 12 Core DW = 2.52 km.";
    }
else if($message == "3401-196"){
        $arrayPostData['messages'][0]['text'] = "LEI000482,(3401-49) ฟากเลย - (3401-196) ฟากเลย2=Optic 12 Core DW = 0.795 km.";
    }
else if($message == "3401-197"){
        $arrayPostData['messages'][0]['text'] = "LEI000483,(3401-46) ม.ราชภัฏ2 - (3401-197) ม.ราชภัฎ3=Optic 12 Core DW = 0.99 km.";
    }
else if($message == "3401-199"){
        $arrayPostData['messages'][0]['text'] = "LEI000484,(3401-65) นาซำ - (3401-199) นาซำ2=Optic 12 Core DW = 0.695 km.";
    }
else if($message == "3401-201"){
        $arrayPostData['messages'][0]['text'] = "LEI000485,(3401-44) บ้านน้อยสนามบิน - (3401-201) บ้านน้อยสนามบิน3=Optic 12 Core DW = 1.138 km.";
    }
else if($message == "3401-202"){
        $arrayPostData['messages'][0]['text'] = "LEI000486,(3401-66) ฟากนา - (3401-202) ฟากนา2=Optic 12 Core DW = 1 km.";
    }
else if($message == "3401-212"){
        $arrayPostData['messages'][0]['text'] = "LEI000487,(3401-133) ห้วยนาม่วง - (3401-212) ห้วยนาม่วง2=Optic 12 Core DW = 1.458 km.";
    }
else if($message == "3401-213"){
        $arrayPostData['messages'][0]['text'] = "LEI000488,(3401-35) บ้านนาโคก - (3401-213) นาโคก3=Optic 12 Core DW = 0.955 km.";
    }
else if($message == "3401-214"){
        $arrayPostData['messages'][0]['text'] = "LEI000489,(3401-89) ไร่ม่วง - (3401-214) ไร่ม่วง2=Optic 12 Core DW = 1.048 km.";
    }
else if($message == "3401-31"){
          $arrayPostData['messages'][0]['text'] = "LEI000051,(3401-31) ME วังสะพุง - (3403-34) ศาลเจ้า=Optic 12 Core DW = 0.675 km.
LEI000054,(3401-31) ME วังสะพุง - (3403-37) นาหลัก=Optic 12 Core DW = 0.866 km.
LEI000059,(3401-31) ME วังสะพุง - (3407-37) เอราวัณ1=12 Core= 26 km.
LEI000068,(3401-31) ME วังสะพุง - (3403-44) วังน้ำเย็น=Optic 12 Core DW = 1.66 km.
LEI000125,(3401-31) เอกธานี - (ME3406-61) ME ภูเรือ=12 Core= 52.1 km.
LEI000675,(3401-31) ME เอกธานี - (3412-37) หนองหิน=12 Core= 46.5 km.
NLP000035,(3101-31) dwdm หนองบัวลำภู - (3401-31) เอกธานี=12 Core= 104 km.";
    }
else if($message == "3401-33"){
          $arrayPostData['messages'][0]['text'] = "LEI000005,() SJสามแยกทองคำ - (3401-33) ซอยรัชนี=Optic 12 Core DW = 1.65 km.
LEI000006,(3401-33) ซอยรัชนี - (3401-34) บ้านบุญสนอง=Optic 12 Core DW = 1.483 km.
LEI000036,(3401-33) ซอยรัชนี - (3401-69) แขวงการทางเลย=Optic 12 Core DW = 1.127 km.
LEI000045,(3401-33) ซอยรัชนี - (3401-79) ท่าแพ=Optic 12 Core DW = 0.687 km.
LEI000171,(3401-33) ซอยรัชนี - (3401-126) แฟลตตำรวจ=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3401-34"){
          $arrayPostData['messages'][0]['text'] = "LEI000006,(3401-33) ซอยรัชนี - (3401-34) บ้านบุญสนอง=Optic 12 Core DW = 1.483 km.
LEI000030,(3401-34) บ้านบุญสนอง - (3401-63) วัดศรีวิชัย=Optic 12 Core DW = 1.556 km.
LEI000124,(3401-34) บุญสนอง - (3401-104) บุญสนอง 2=Optic 12 Core DW = 0.88 km.";
    }
else if($message == "3401-35"){
          $arrayPostData['messages'][0]['text'] = "LEI000007,(3401-55) นาอ้อ 2 - (3401-35) บ้านนาโคก=Optic 12 Core DW = 2.258 km.
LEI000086,(3401-35) บ้านนาโคก - (3401-87) นาโคก2=Optic 12 Core DW = 1.11 km.
LEI000103,(3401-35) บ้านนาโคก - (3404-38) บ้านนาโป่ง=12 Core= 14.167 km.
LEI000175,(3401-35) บ้านนาโคก - (3401-133) ห้วยนาม่วง=Optic 12 Core DW = 2.8 km.
LEI000269,(3401-35) นาโคก - (3401-38) นาอ้อ=Optic 12 Core DW = 3.6 km.
LEI000278,(3401-35) ME นาโคก - (3401-42) ME ราชภัฏเลย=12 Core= 6.98 km.
LEI000488,(3401-35) บ้านนาโคก - (3401-213) นาโคก3=Optic 12 Core DW = 0.955 km.";
    }
else if($message == "3401-35 "){
        $arrayPostData['messages'][0]['text'] = "LEI000065,(3401-35 ) บ้านนาโคก  - (3401-86) ค่ายศรีสองรัก=Optic 12 Core DW = 1.781 km.";
    }
else if($message == "3401-36"){
          $arrayPostData['messages'][0]['text'] = "LEI000008,() SJสามแยกทองคำ - (3401-36) หนองผักก้าม1=Optic 12 Core DW = 0.842 km.
LEI000046,(3401-36) หนองผักก้าม1 - (3401-80) หนองผักก้าม2=Optic 12 Core DW = 0.858 km.";
    }
else if($message == "3401-38"){
          $arrayPostData['messages'][0]['text'] = "LEI000009,(3401-76) ปากภู - (3401-38) นาอ้อ=Optic 12 Core DW = 1.658 km.
LEI000024,(3401-38) นาอ้อ - (3401-55) นาอ้อ 2=Optic 12 Core DW = 2.258 km.
LEI000269,(3401-35) นาโคก - (3401-38) นาอ้อ=Optic 12 Core DW = 3.6 km.";
    }
else if($message == "3401-38 "){
        $arrayPostData['messages'][0]['text'] = "LEI000066,(3401-38 ) นาอ้อ  - (3401-87) บ้านโพน=Optic 12 Core DW = 1.382 km.";
    }
else if($message == "3401-40"){
          $arrayPostData['messages'][0]['text'] = "LEI000010,(3401-56) นกแก้ว - (3401-40) หน้าสถานีตำรวจ=Optic 12 Core DW = 0.851 km.
LEI000021,(3401-40) หน้าสถานีตำรวจ - (3401-52) บ้านแฮ่=Optic 12 Core DW = 0.888 km.
LEI000022,(3401-40) หน้าสถานีตำรวจ - (3401-53) บ้านใหม่=Optic 12 Core DW = 0.906 km.
LEI000038,(3401-40) หน้าสถานีตำรวจ - (3401-71) ตลาดเช้า=Optic 12 Core DW = 0.467 km.";
    }
else if($message == "3401-41"){
          $arrayPostData['messages'][0]['text'] = "LEI000001,(3403-31) me วังสะพุง - (3401-41) me officeเลย=12 Core= 22.034 km.
LEI000016,(3401-41) ME Office เลย - (3401-47) บ้านติดต่อ=Optic 12 Core DW = 1.376 km.
LEI000025,(3401-41) ME Office เลย - (3401-56) นกแก้ว=Optic 12 Core DW = 1.83 km.
LEI000026,(3401-41) ME Office เลย - (3401-57) มะลิวัลย์=Optic 12 Core DW = 0.886 km.
LEI000039,(3401-41) ME Office เลย - (3401-72) ตลาดเย็น=Optic 12 Core DW = 0.699 km.
LEI000070,(3401-41) Shop3bbเลย - (3401-85) OLT หนองผักก้าม=12 Core= 4.3 km.
LEI000252,(3401-41) เลย - (3405-61) ปากชม=12 Core= 81.573 km.
LEI000253,(3401-41) เลย - (3408-61) นาด้วง=12 Core= 35.113 km.
LEI000277,(3401-42) ME ราชภัฏเลย - (3401-41) 3BB เลย=12 Core= 7.54 km.";
    }
else if($message == "3401-42"){
          $arrayPostData['messages'][0]['text'] = "LEI000011,() SJ สี่แยกกำเนิดเพชร - (3401-42) ราชภัฏเลย=Optic 12 Core DW = 1 km.
LEI000015,(3401-42) ราชภัฏเลย - (3401-46) ม.ราชภัฏ2=Optic 12 Core DW = 0.518 km.
LEI000042,(3401-42) ราชภัฏเลย - (3401-76) ปากภู=Optic 12 Core DW = 1.719 km.
LEI000044,(3401-42) ราชภัฏเลย - (3401-78) หลัง ม.ราชภัฏ=Optic 12 Core DW = 1.629 km.
LEI000172,(3401-42) ราชภัฏเลย - (3401-129) น้ำพาว=Optic 12 Core DW = 2.5 km.
LEI000245,(3401-42) ราชภัฎเลย - (3413-61) ท่าลี่=12 Core= 40.58 km.
LEI000277,(3401-42) ME ราชภัฏเลย - (3401-41) 3BB เลย=12 Core= 7.54 km.
LEI000278,(3401-35) ME นาโคก - (3401-42) ME ราชภัฏเลย=12 Core= 6.98 km.";
    }
else if($message == "3401-43"){
          $arrayPostData['messages'][0]['text'] = "LEI000012,(3401-56) นกแก้ว - (3401-43) โรงพยาบาลเลย=Optic 12 Core DW = 0.88 km.
LEI000013,(3401-43) โรงพยาบาลเลย - (3401-44) บ้านน้อยสนามบิน=Optic 12 Core DW = 0.918 km.
LEI000027,(3401-43) โรงพยาบาลเลย - (3401-59) ร่วมใจ=Optic 12 Core DW = 0.379 km.
LEI000069,(3401-43) โรงพยาบาลเลย - () กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม=12 Core= 0.158 km.";
    }
else if($message == "3401-44"){
          $arrayPostData['messages'][0]['text'] = "LEI000013,(3401-43) โรงพยาบาลเลย - (3401-44) บ้านน้อยสนามบิน=Optic 12 Core DW = 0.918 km.
LEI000028,(3401-44) บ้านน้อยสนามบิน - (3401-60) เลยพิทยาคม=Optic 12 Core DW = 0.651 km.
LEI000041,(3401-44) บ้านน้อยสนามบิน - (3401-75) บ้านเอื้ออาทร=Optic 12 Core DW = 0.983 km.
LEI000485,(3401-44) บ้านน้อยสนามบิน - (3401-201) บ้านน้อยสนามบิน3=Optic 12 Core DW = 1.138 km.";
    }
else if($message == "3401-45"){
          $arrayPostData['messages'][0]['text'] = "LEI000013,(3401-43) โรงพยาบาลเลย - (3401-44) บ้านน้อยสนามบิน=Optic 12 Core DW = 0.918 km.
LEI000028,(3401-44) บ้านน้อยสนามบิน - (3401-60) เลยพิทยาคม=Optic 12 Core DW = 0.651 km.
LEI000041,(3401-44) บ้านน้อยสนามบิน - (3401-75) บ้านเอื้ออาทร=Optic 12 Core DW = 0.983 km.
LEI000485,(3401-44) บ้านน้อยสนามบิน - (3401-201) บ้านน้อยสนามบิน3=Optic 12 Core DW = 1.138 km.";
    }
else if($message == "3401-46"){
          $arrayPostData['messages'][0]['text'] = "LEI000015,(3401-42) ราชภัฏเลย - (3401-46) ม.ราชภัฏ2=Optic 12 Core DW = 0.518 km.
LEI000483,(3401-46) ม.ราชภัฏ2 - (3401-197) ม.ราชภัฎ3=Optic 12 Core DW = 0.99 km.";
    }
else if($message == "3401-47"){
          $arrayPostData['messages'][0]['text'] = "LEI000016,(3401-41) ME Office เลย - (3401-47) บ้านติดต่อ=Optic 12 Core DW = 1.376 km.
LEI000023,(3401-47) บ้านติดต่อ - (3401-54) ขอนแดง=Optic 12 Core DW = 1.38 km.
LEI000111,(3401-47) บ้านติดต่อ - (3401-97) บ้านแหล่งควาย=Optic 12 Core DW = 2.425 km.";
    }
else if($message == "3401-48"){
          $arrayPostData['messages'][0]['text'] = "LEI000017,(3401-57) มะลิวัลย์ - (3401-48) คลองถม=Optic 12 Core DW = 1.042 km.
LEI000043,(3401-48) คลองถม - (3401-77) บ้านน้อยสนามบิน2=Optic 12 Core DW = 0.582 km.
LEI000063,(3401-48) คลองถม - () องค์การบริหารการพัฒนาพื้นที่พิเศษเพื่อการท่องเที่ยวอย่างยั่งยืน (องค์การมหาชน)=Optic 12 Core DW = 0.432 km.";
    }
else if($message == "3401-49"){
          $arrayPostData['messages'][0]['text'] = "LEI000018,(3401-53) บ้านใหม่ - (3401-49) ฟากเลย=Optic 12 Core DW = 0.897 km.
LEI000047,(3401-49) ฟากเลย - (3401-81) ภูบ่อบิด=Optic 12 Core DW = 2.003 km.
LEI000482,(3401-49) ฟากเลย - (3401-196) ฟากเลย2=Optic 12 Core DW = 0.795 km.";
    }
else if($message == "3401-50"){
          $arrayPostData['messages'][0]['text'] = "LEI000019,(3401-45) กำเนิดเพชร - (3401-50) บ้านก้างปลา=Optic 12 Core DW = 1.019 km.
LEI000123,(3401-50) บ้านก้างปลา - (3401-99) บ้านโนนสว่าง=Optic 12 Core DW = 2.3 km.
LEI000169,(3401-50) บ้านก้างปลา - (3401-124) โพนกุดแพ=Optic 12 Core DW = 1.571 km.
LEI000184,(3401-50) บ้านก้างปลา - (3401-84) บ้านหัวฝาย=Optic 12 Core DW = 1.81 km.";
    }
else if($message == "3401-51"){
          $arrayPostData['messages'][0]['text'] = "LEI000020,(3401-54) ขอนแดง - (3401-51) เลยราม=Optic 12 Core DW = 1.208 km.
LEI000031,(3401-51) เลยราม - (3401-64) โลตัสเลย=Optic 12 Core DW = 1.922 km.
LEI000035,(3401-51) เลยราม - (3401-68) เชฟโรเล็ท=Optic 12 Core DW = 1.87 km.";
    }
else if($message == "3401-52"){
        $arrayPostData['messages'][0]['text'] = "LEI000021,(3401-40) หน้าสถานีตำรวจ - (3401-52) บ้านแฮ่=Optic 12 Core DW = 0.888 km.";
    }
else if($message == "3401-53"){
          $arrayPostData['messages'][0]['text'] = "LEI000018,(3401-53) บ้านใหม่ - (3401-49) ฟากเลย=Optic 12 Core DW = 0.897 km.
LEI000022,(3401-40) หน้าสถานีตำรวจ - (3401-53) บ้านใหม่=Optic 12 Core DW = 0.906 km.
LEI000034,(3401-53) บ้านใหม่ - (3401-67) กกม่วงชี=Optic 12 Core DW = 1.619 km.
LEI000107,(3401-53) บ้านใหม่ - (3401-94) ศรีจันทร์=Optic 12 Core DW = 0.442 km.";
    }
else if($message == "3401-54"){
          $arrayPostData['messages'][0]['text'] = "LEI000020,(3401-54) ขอนแดง - (3401-51) เลยราม=Optic 12 Core DW = 1.208 km.
LEI000023,(3401-47) บ้านติดต่อ - (3401-54) ขอนแดง=Optic 12 Core DW = 1.38 km.
LEI000094,(3401-54) ขอนแดง - (3401-91) ขอนแดง2=Optic 12 Core DW = 0.617 km.";
    }
else if($message == "3401-55"){
          $arrayPostData['messages'][0]['text'] = "LEI000007,(3401-55) นาอ้อ 2 - (3401-35) บ้านนาโคก=Optic 12 Core DW = 2.258 km.
LEI000024,(3401-38) นาอ้อ - (3401-55) นาอ้อ 2=Optic 12 Core DW = 2.258 km.
LEI000048,(3401-55) นาอ้อ 2 - (3401-83) นาอ้อ3=Optic 12 Core DW = 1.055 km.";
    }
else if($message == "3401-56"){
          $arrayPostData['messages'][0]['text'] = "LEI000010,(3401-56) นกแก้ว - (3401-40) หน้าสถานีตำรวจ=Optic 12 Core DW = 0.851 km.
LEI000012,(3401-56) นกแก้ว - (3401-43) โรงพยาบาลเลย=Optic 12 Core DW = 0.88 km.
LEI000025,(3401-41) ME Office เลย - (3401-56) นกแก้ว=Optic 12 Core DW = 1.83 km.";
    }
else if($message == "3401-57"){
          $arrayPostData['messages'][0]['text'] = "LEI000017,(3401-57) มะลิวัลย์ - (3401-48) คลองถม=Optic 12 Core DW = 1.042 km.
LEI000026,(3401-41) ME Office เลย - (3401-57) มะลิวัลย์=Optic 12 Core DW = 0.886 km.
LEI000032,(3401-57) มะลิวัลย์ - (3401-65) นาซำ=Optic 12 Core DW = 1.384 km.";
    }
else if($message == "3401-59"){
          $arrayPostData['messages'][0]['text'] = "LEI000027,(3401-43) โรงพยาบาลเลย - (3401-59) ร่วมใจ=Optic 12 Core DW = 0.379 km.
LEI000029,(3401-59) ร่วมใจ - (3401-62) อนุบาลเลย=Optic 12 Core DW = 0.561 km.";
    }
else if($message == "3401-60"){
          $arrayPostData['messages'][0]['text'] = "LEI000028,(3401-44) บ้านน้อยสนามบิน - (3401-60) เลยพิทยาคม=Optic 12 Core DW = 0.651 km.
LEI000097,(3401-60) เลยพิทยาคม - (3401-92) เลยพิทยาคม 2=Optic 12 Core DW = 0.721 km.";
    }
else if($message == "3401-62"){
        $arrayPostData['messages'][0]['text'] = "LEI000029,(3401-59) ร่วมใจ - (3401-62) อนุบาลเลย=Optic 12 Core DW = 0.561 km.";
    }
else if($message == "3401-63"){
          $arrayPostData['messages'][0]['text'] = "LEI000030,(3401-34) บ้านบุญสนอง - (3401-63) วัดศรีวิชัย=Optic 12 Core DW = 1.556 km.
LEI000108,(3401-63) วัดศรีวิชัย - (3401-95) สามเหลี่ยมทองคำ=Optic 12 Core DW = 0.609 km.";
    }
else if($message == "3401-64"){
          $arrayPostData['messages'][0]['text'] = "LEI000031,(3401-51) เลยราม - (3401-64) โลตัสเลย=Optic 12 Core DW = 1.922 km.
LEI000122,(3401-64) โลตัสเลย - (3401-102) นาโป่ง=Optic 12 Core DW = 4 km.
LEI000258,(3401-64) โลตัสเลย - (3401-166) ขอนแก่น=Optic 12 Core DW = 2.17 km.
LEI000261,(3401-64) โลตัสเลย - (3401-174) โนนกุดจับ=Optic 12 Core DW = 1.328 km.";
    }
else if($message == "3401-65"){
          $arrayPostData['messages'][0]['text'] = "LEI000032,(3401-57) มะลิวัลย์ - (3401-65) นาซำ=Optic 12 Core DW = 1.384 km.
LEI000457,(3401-65) นาซำ - (3401-90) นาซำ 2=12 Core= 1 km.
LEI000484,(3401-65) นาซำ - (3401-199) นาซำ2=Optic 12 Core DW = 0.695 km.";
    }
else if($message == "3401-66"){
          $arrayPostData['messages'][0]['text'] = "LEI000033,(3401-68) เชฟโรเล็ท - (3401-66) ฟากนา=Optic 12 Core DW = 2.161 km.
LEI000486,(3401-66) ฟากนา - (3401-202) ฟากนา2=Optic 12 Core DW = 1 km.";
    }
else if($message == "3401-67"){
          $arrayPostData['messages'][0]['text'] = "LEI000034,(3401-53) บ้านใหม่ - (3401-67) กกม่วงชี=Optic 12 Core DW = 1.619 km.
LEI000040,(3401-67) กกม่วงชี - (3401-74) นาบอน=Optic 12 Core DW = 1.168 km.
LEI000109,(3401-67) กกม่วงชี - (3401-96) ทุ่งนาเมี่ยง=Optic 12 Core DW = 0.934 km.";
    }
else if($message == "3401-68"){
          $arrayPostData['messages'][0]['text'] = "LEI000033,(3401-68) เชฟโรเล็ท - (3401-66) ฟากนา=Optic 12 Core DW = 2.161 km.
LEI000035,(3401-51) เลยราม - (3401-68) เชฟโรเล็ท=Optic 12 Core DW = 1.87 km.";
    }
else if($message == "3401-69"){
        $arrayPostData['messages'][0]['text'] = "LEI000036,(3401-33) ซอยรัชนี - (3401-69) แขวงการทางเลย=Optic 12 Core DW = 1.127 km.";
    }
else if($message == "3401-70"){
        $arrayPostData['messages'][0]['text'] = "LEI000037,(3401-45) กำเนิดเพชร - (3401-70) กำเนิดเพชร3=Optic 12 Core DW = 1.32 km.";
    }
else if($message == "3401-71"){
        $arrayPostData['messages'][0]['text'] = "LEI000038,(3401-40) หน้าสถานีตำรวจ - (3401-71) ตลาดเช้า=Optic 12 Core DW = 0.467 km.";
    }
else if($message == "3401-72"){
        $arrayPostData['messages'][0]['text'] = "LEI000039,(3401-41) ME Office เลย - (3401-72) ตลาดเย็น=Optic 12 Core DW = 0.699 km.";
    }
else if($message == "3401-74"){
          $arrayPostData['messages'][0]['text'] = "LEI000040,(3401-67) กกม่วงชี - (3401-74) นาบอน=Optic 12 Core DW = 1.168 km.
LEI000173,(3401-74) นาบอน - (3401-131) โรงเรียนนาบอน=Optic 12 Core DW = 1.087 km.";
    }
else if($message == "3401-75"){
        $arrayPostData['messages'][0]['text'] = "LEI000041,(3401-44) บ้านน้อยสนามบิน - (3401-75) บ้านเอื้ออาทร=Optic 12 Core DW = 0.983 km.";
    }
else if($message == "3401-76"){
          $arrayPostData['messages'][0]['text'] = "LEI000009,(3401-76) ปากภู - (3401-38) นาอ้อ=Optic 12 Core DW = 1.658 km.
LEI000042,(3401-42) ราชภัฏเลย - (3401-76) ปากภู=Optic 12 Core DW = 1.719 km.
LEI000134,(3401-76) บ้านปากภู - (3401-146) ตูบโกบ=12 Core= 9.091 km.";
    }
else if($message == "3401-77"){
        $arrayPostData['messages'][0]['text'] = "LEI000043,(3401-48) คลองถม - (3401-77) บ้านน้อยสนามบิน2=Optic 12 Core DW = 0.582 km.";
    }
else if($message == "3401-78"){
        $arrayPostData['messages'][0]['text'] = "LEI000044,(3401-42) ราชภัฏเลย - (3401-78) หลัง ม.ราชภัฏ=Optic 12 Core DW = 1.629 km.";
    }
else if($message == "3401-79"){
          $arrayPostData['messages'][0]['text'] = "LEI000045,(3401-33) ซอยรัชนี - (3401-79) ท่าแพ=Optic 12 Core DW = 0.687 km.
LEI000087,(3401-79) ท่าแพ - (3401-88) ไร่ม่วง=Optic 12 Core DW = 2.781 km.
LEI000185,(3401-79) ท่าแพ - (3401-89) ไร่ม่วง=Optic 12 Core DW = 2 km.";
    }
else if($message == "3401-80"){
          $arrayPostData['messages'][0]['text'] = "LEI000046,(3401-36) หนองผักก้าม1 - (3401-80) หนองผักก้าม2=Optic 12 Core DW = 0.858 km.
LEI000064,(3401-80) หนองผักก้าม2 - () บริษัท ศรีไทยใหม่วัสดุภัณฑ์ จำกัด=Optic 12 Core DW = 0.663 km.";
    }
else if($message == "3401-81"){
        $arrayPostData['messages'][0]['text'] = "LEI000047,(3401-49) ฟากเลย - (3401-81) ภูบ่อบิด=Optic 12 Core DW = 2.003 km.";
    }
else if($message == "3401-83"){
          $arrayPostData['messages'][0]['text'] = "LEI000048,(3401-55) นาอ้อ 2 - (3401-83) นาอ้อ3=Optic 12 Core DW = 1.055 km.
LEI000098,(3401-83) นาอ้อ3 - (3401-93) หนองมะผาง=Optic 12 Core DW = 0.736 km.
LEI000163,(3401-83) นาอ้อ3 - (3401-109) ท่ามะนาว=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3401-84"){
        $arrayPostData['messages'][0]['text'] = "LEI000184,(3401-50) บ้านก้างปลา - (3401-84) บ้านหัวฝาย=Optic 12 Core DW = 1.81 km.";
    }
else if($message == "3401-85"){
          $arrayPostData['messages'][0]['text'] = "LEI000070,(3401-41) Shop3bbเลย - (3401-85) OLT หนองผักก้าม=12 Core= 4.3 km.
LEI000071,(3401-85) OLT หนองผักก้าม - () ODF โรงพยาบาล=12 Core= 2.8 km.
LEI000072,(3401-85) OLT หนองผักก้าม - () ODF กำเนิดเพชร=12 Core= 2 km.";
    }
else if($message == "3401-86"){
          $arrayPostData['messages'][0]['text'] = "LEI000065,(3401-35 ) บ้านนาโคก  - (3401-86) ค่ายศรีสองรัก=Optic 12 Core DW = 1.781 km.
LEI000164,(3401-86) ค่ายศรีสองรัก - (3401-116) ท่าบุ่ง=Optic 12 Core DW = 2 km.
LEI000170,(3401-86) ค่ายศรีสองรัก - (3401-125) ค่ายศรีสองรัก 2=Optic 12 Core DW = 0.879 km.";
    }
else if($message == "3401-87"){
          $arrayPostData['messages'][0]['text'] = "LEI000066,(3401-38 ) นาอ้อ  - (3401-87) บ้านโพน=Optic 12 Core DW = 1.382 km.
LEI000086,(3401-35) บ้านนาโคก - (3401-87) นาโคก2=Optic 12 Core DW = 1.11 km.";
    }
else if($message == "3401-88"){
          $arrayPostData['messages'][0]['text'] = "LEI000087,(3401-79) ท่าแพ - (3401-88) ไร่ม่วง=Optic 12 Core DW = 2.781 km.
LEI000116,(3401-88) ไร่ม่วง - (3401-98) บ้านกอไร่ใหญ่=Optic 12 Core DW = 3.895 km.";
    }
else if($message == "3401-89"){
          $arrayPostData['messages'][0]['text'] = "LEI000165,(3401-89) ไร่ม่วง - (3401-117) บ้านห้วยลวงไซ=Optic 12 Core DW = 4 km.
LEI000185,(3401-79) ท่าแพ - (3401-89) ไร่ม่วง=Optic 12 Core DW = 2 km.
LEI000489,(3401-89) ไร่ม่วง - (3401-214) ไร่ม่วง2=Optic 12 Core DW = 1.048 km.";
    }
else if($message == "3401-90"){
        $arrayPostData['messages'][0]['text'] = "LEI000457,(3401-65) นาซำ - (3401-90) นาซำ 2=12 Core= 1 km.";
    }
else if($message == "3401-91"){
        $arrayPostData['messages'][0]['text'] = "LEI000094,(3401-54) ขอนแดง - (3401-91) ขอนแดง2=Optic 12 Core DW = 0.617 km.";
    }
else if($message == "3401-92"){
        $arrayPostData['messages'][0]['text'] = "LEI000097,(3401-60) เลยพิทยาคม - (3401-92) เลยพิทยาคม 2=Optic 12 Core DW = 0.721 km.";
    }
else if($message == "3401-93"){
        $arrayPostData['messages'][0]['text'] = "LEI000098,(3401-83) นาอ้อ3 - (3401-93) หนองมะผาง=Optic 12 Core DW = 0.736 km.";
    }
else if($message == "3401-94"){
        $arrayPostData['messages'][0]['text'] = "LEI000107,(3401-53) บ้านใหม่ - (3401-94) ศรีจันทร์=Optic 12 Core DW = 0.442 km.";
    }
else if($message == "3401-95"){
        $arrayPostData['messages'][0]['text'] = "LEI000108,(3401-63) วัดศรีวิชัย - (3401-95) สามเหลี่ยมทองคำ=Optic 12 Core DW = 0.609 km.";
    }
else if($message == "3401-96"){
        $arrayPostData['messages'][0]['text'] = "LEI000109,(3401-67) กกม่วงชี - (3401-96) ทุ่งนาเมี่ยง=Optic 12 Core DW = 0.934 km.";
    }
else if($message == "3401-97"){
          $arrayPostData['messages'][0]['text'] = "LEI000111,(3401-47) บ้านติดต่อ - (3401-97) บ้านแหล่งควาย=Optic 12 Core DW = 2.425 km.
LEI000478,(3401-97) บ้านแหล่งควาย - (3401-177) บ้านผู้การ=Optic 12 Core DW = 2.397 km.";
    }
else if($message == "3401-98"){
        $arrayPostData['messages'][0]['text'] = "LEI000116,(3401-88) ไร่ม่วง - (3401-98) บ้านกอไร่ใหญ่=Optic 12 Core DW = 3.895 km.";
    }
else if($message == "3401-99"){
        $arrayPostData['messages'][0]['text'] = "LEI000123,(3401-50) บ้านก้างปลา - (3401-99) บ้านโนนสว่าง=Optic 12 Core DW = 2.3 km.";
    }
else if($message == "3402-105"){
        $arrayPostData['messages'][0]['text'] = "LEI000490,(SJ) ด่านซ้าย-หล่มสัก - (3402-105) ต.โป่ง กกจำปา=Optic 12 Core DW = 0.35 km.";
    }
else if($message == "3402-106"){
        $arrayPostData['messages'][0]['text'] = "LEI000491,(SJ) ด่านซ้าย-หล่มสัก - (3402-106) ต.โป่ง โป่ง=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3402-107"){
        $arrayPostData['messages'][0]['text'] = "LEI000492,(SJ) ด่านซ้าย-หล่มสัก - (3402-107) ต.โป่ง โป่งชี=Optic 12 Core DW = 0.35 km.";
    }
else if($message == "3402-109"){
        $arrayPostData['messages'][0]['text'] = "LEI000493,(SJ) บ้านผึ้ง - (3402-109) ต.วังยาว วังยาว=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3402-114"){
          $arrayPostData['messages'][0]['text'] = "LEI000494,(3402-66) บุ่งกุ่ม - (3402-114) ต.นาหอ นาหอ=Optic 12 Core DW = 1.757 km.
LEI000495,(3402-114) ต.นาหอ นาหอ - (3402-115) ต.นาหอ หนองผือ=Optic 12 Core DW = 1.788 km.
LEI000497,(3402-114) ต.นาหอ นาหอ - (3402-118) ต.นาหอ นาน้ำท่วม=Optic 12 Core DW = 1.43 km.";
    }
else if($message == "3402-115"){
        $arrayPostData['messages'][0]['text'] = "LEI000495,(3402-114) ต.นาหอ นาหอ - (3402-115) ต.นาหอ หนองผือ=Optic 12 Core DW = 1.788 km.";
    }
else if($message == "3402-117"){
          $arrayPostData['messages'][0]['text'] = "LEI000496,(SJ) บ้านเก่า - (3402-117) ต.นาหอ นาฮี=Optic 12 Core DW = 1.104 km.
LEI000513,(3402-117) ต.นาหอ นาฮี - (3402-80) ต.นาดี นาหมูม่น=Optic 12 Core DW = 1.254 km.";
    }
else if($message == "3402-118"){
          $arrayPostData['messages'][0]['text'] = "LEI000497,(3402-114) ต.นาหอ นาหอ - (3402-118) ต.นาหอ นาน้ำท่วม=Optic 12 Core DW = 1.43 km.
LEI000498,(3402-118) ต.นาหอ นาน้ำท่วม - (3402-121) ต.นาหอ นาเบี้ย=Optic 12 Core DW = 2.446 km.";
    }
else if($message == "3402-121"){
        $arrayPostData['messages'][0]['text'] = "LEI000498,(3402-118) ต.นาหอ นาน้ำท่วม - (3402-121) ต.นาหอ นาเบี้ย=Optic 12 Core DW = 2.446 km.";
    }
else if($message == "3402-136"){
        $arrayPostData['messages'][0]['text'] = "LEI000499,(SJ) ด่านซ้าย-นาแห้ว - (3402-136) ต.ด่านซ้าย น้ำทุ่ม=Optic 12 Core DW = 1.905 km.";
    }
else if($message == "3402-148"){
        $arrayPostData['messages'][0]['text'] = "LEI000500,(3402-99) ต.โป่ง น้ำพุ่ง - (3402-148) ต.โป่ง ทุ่งเทิง=Optic 12 Core DW = 3.9 km.";
    }
else if($message == "3402-61"){
          $arrayPostData['messages'][0]['text'] = "LEI000186,(3402-61) ด่านซ้าย - (3402-62) ด่านซ้าย2=Optic 12 Core DW = 1.65 km.
LEI000187,(3402-61) ด่านซ้าย - (3402-64) โรงพยาบาลด่านซ้าย=Optic 12 Core DW = 1.5 km.
LEI000242,(3406-61) ภูเรือ - (3402-61) ด่านซ้าย=12 Core= 34.45 km.
LEI000243,(3402-61) ด่านซ้าย - () จุดต่อ หล่มสัก=12 Core= 53.616 km.
LEI000244,(3402-61) ด่านซ้าย - (3411-63) นาแห้ว=12 Core= 33.508 km.";
    }
else if($message == "3402-62"){
          $arrayPostData['messages'][0]['text'] = "LEI000186,(3402-61) ด่านซ้าย - (3402-62) ด่านซ้าย2=Optic 12 Core DW = 1.65 km.
LEI000188,(3402-62) ด่านซ้าย2 - (3402-66) บุ่งกุ่ม=Optic 12 Core DW = 3.423 km.";
    }
else if($message == "3402-63"){
          $arrayPostData['messages'][0]['text'] = "LEI000330,(3402-63) โคกงาม - (3406-72) บ้านท่ามะนาว=Optic 12 Core DW = 8.891 km.
LEI000515,(3402-63) โคกงาม - (3402-85) ต.โคกงาม หนองแซง=Optic 12 Core DW = 2.25 km.
LEI000517,(3402-63) โคกงาม - (3402-87) ต.โคกงาม นาเจียง=Optic 12 Core DW = 3.65 km.";
    }
else if($message == "3402-64"){
        $arrayPostData['messages'][0]['text'] = "LEI000187,(3402-61) ด่านซ้าย - (3402-64) โรงพยาบาลด่านซ้าย=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3402-66"){
          $arrayPostData['messages'][0]['text'] = "LEI000188,(3402-62) ด่านซ้าย2 - (3402-66) บุ่งกุ่ม=Optic 12 Core DW = 3.423 km.
LEI000494,(3402-66) บุ่งกุ่ม - (3402-114) ต.นาหอ นาหอ=Optic 12 Core DW = 1.757 km.";
    }
else if($message == "3402-67"){
        $arrayPostData['messages'][0]['text'] = "LEI000501,(SJ) นาแห้ว-ท่าลี่ - (3402-67) ต.ปากหมัน นาข่า=Optic 12 Core DW = 1.04 km.";
    }
else if($message == "3402-68"){
        $arrayPostData['messages'][0]['text'] = "LEI000502,(3402-73) ต.ปากหมัน ห้วยน้ำเมย - (3402-68) ต.ปากหมัน ปากโป่ง=Optic 12 Core DW = 6.42 km.";
    }
else if($message == "3402-69"){
          $arrayPostData['messages'][0]['text'] = "LEI000503,(SJ) นาแห้ว-ท่าลี่ - (3402-69) ต.ปากหมัน ปากหมัน=Optic 12 Core DW = 0.82 km.
LEI000504,(3402-69) ต.ปากหมัน ปากหมัน - (3402-70) ต.ปากหมัน ห้วยน้ำมี=Optic 12 Core DW = 2.14 km.";
    }
else if($message == "3402-70"){
          $arrayPostData['messages'][0]['text'] = "LEI000504,(3402-69) ต.ปากหมัน ปากหมัน - (3402-70) ต.ปากหมัน ห้วยน้ำมี=Optic 12 Core DW = 2.14 km.
LEI000505,(3402-70) ต.ปากหมัน ห้วยน้ำมี - (3402-72) ต.ปากหมัน เครือคู้=Optic 12 Core DW = 1.391 km.";
    }
else if($message == "3402-72"){
          $arrayPostData['messages'][0]['text'] = "LEI000505,(3402-70) ต.ปากหมัน ห้วยน้ำมี - (3402-72) ต.ปากหมัน เครือคู้=Optic 12 Core DW = 1.391 km.
LEI000511,(3402-72) ต.ปากหมัน เครือคู้ - (3402-77) ต.นาดี กกแหนใหม่=Optic 12 Core DW = 3.003 km.";
    }
else if($message == "3402-73"){
          $arrayPostData['messages'][0]['text'] = "LEI000502,(3402-73) ต.ปากหมัน ห้วยน้ำเมย - (3402-68) ต.ปากหมัน ปากโป่ง=Optic 12 Core DW = 6.42 km.
LEI000506,(SJ) บ้านชั่งสี่ - (3402-73) ต.ปากหมัน ห้วยน้ำเมย=Optic 12 Core DW = 5.65 km.";
    }
else if($message == "3402-74"){
          $arrayPostData['messages'][0]['text'] = "LEI000508,(3402-77) ต.นาดี กกแหนใหม่ - (3402-74) ต.ปากหมัน นาทอง=Optic 12 Core DW = 1.32 km.
LEI000510,(3402-74) ต.ปากหมัน นาทอง - (3402-76) ต.นาดี หนองทุ่ม=Optic 12 Core DW = 1.289 km.";
    }
else if($message == "3402-75"){
        $arrayPostData['messages'][0]['text'] = "LEI000509,(3402-79) ต.นาดี นาดี - (3402-75) ต.นาดี ห้วยปลาฝา=Optic 12 Core DW = 3.348 km.";
    }
else if($message == "3402-76"){
        $arrayPostData['messages'][0]['text'] = "LEI000510,(3402-74) ต.ปากหมัน นาทอง - (3402-76) ต.นาดี หนองทุ่ม=Optic 12 Core DW = 1.289 km.";
    }
else if($message == "3402-77"){
          $arrayPostData['messages'][0]['text'] = "LEI000508,(3402-77) ต.นาดี กกแหนใหม่ - (3402-74) ต.ปากหมัน นาทอง=Optic 12 Core DW = 1.32 km.
LEI000511,(3402-72) ต.ปากหมัน เครือคู้ - (3402-77) ต.นาดี กกแหนใหม่=Optic 12 Core DW = 3.003 km.";
    }
else if($message == "3402-79"){
          $arrayPostData['messages'][0]['text'] = "LEI000509,(3402-79) ต.นาดี นาดี - (3402-75) ต.นาดี ห้วยปลาฝา=Optic 12 Core DW = 3.348 km.
LEI000512,(3402-80) ต.นาดี นาหมูม่น - (3402-79) ต.นาดี นาดี=Optic 12 Core DW = 2.243 km.";
    }
else if($message == "3402-80"){
          $arrayPostData['messages'][0]['text'] = "LEI000512,(3402-80) ต.นาดี นาหมูม่น - (3402-79) ต.นาดี นาดี=Optic 12 Core DW = 2.243 km.
LEI000513,(3402-117) ต.นาหอ นาฮี - (3402-80) ต.นาดี นาหมูม่น=Optic 12 Core DW = 1.254 km.";
    }
else if($message == "3402-84"){
          $arrayPostData['messages'][0]['text'] = "LEI000514,(3402-85) หนองแซง - (3402-84) ต.โคกงาม หนองสนุน=Optic 12 Core DW = 3.3 km.
LEI000523,(3402-84) ต.โคกงาม หนองสนุน - (3402-96) ต.โพนสูง หนองอุ้มลัว=Optic 12 Core DW = 4.4 km.";
    }
else if($message == "3402-85"){
          $arrayPostData['messages'][0]['text'] = "LEI000514,(3402-85) หนองแซง - (3402-84) ต.โคกงาม หนองสนุน=Optic 12 Core DW = 3.3 km.
LEI000515,(3402-63) โคกงาม - (3402-85) ต.โคกงาม หนองแซง=Optic 12 Core DW = 2.25 km.";
    }
else if($message == "3402-86"){
        $arrayPostData['messages'][0]['text'] = "LEI000516,(SJ) ภูเรือ-ด่านซ้าย - (3402-86) ต.โคกงาม ห้วยตาด=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3402-87"){
          $arrayPostData['messages'][0]['text'] = "LEI000517,(3402-63) โคกงาม - (3402-87) ต.โคกงาม นาเจียง=Optic 12 Core DW = 3.65 km.
LEI000518,(3402-87) ต.โคกงาม นาเจียง - (3402-88) ต.โคกงาม หนองหลวง=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3402-88"){
          $arrayPostData['messages'][0]['text'] = "LEI000507,(3402-88) ต.โคกน้ำ หนองหลวง - (SJ) บ้านชั่งสี่=Optic 12 Core DW = 5.2 km.
LEI000518,(3402-87) ต.โคกงาม นาเจียง - (3402-88) ต.โคกงาม หนองหลวง=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3402-90"){
        $arrayPostData['messages'][0]['text'] = "LEI000519,(3402-91) ต.โพนสูง หางนา - (3402-90) ต.โคกงาม โพนสูง=Optic 12 Core DW = 2 km.";
    }
else if($message == "3402-91"){
          $arrayPostData['messages'][0]['text'] = "LEI000519,(3402-91) ต.โพนสูง หางนา - (3402-90) ต.โคกงาม โพนสูง=Optic 12 Core DW = 2 km.
LEI000520,(3402-96) ต.โพนสูง หนองอุมลัว - (3402-91) ต.โพนสูง หางนา=Optic 12 Core DW = 5.3 km.
LEI000521,(3402-91) ต.โพนสูง หางนา - (3402-92) ต.โพนสูง นาหิน=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3402-92"){
          $arrayPostData['messages'][0]['text'] = "LEI000521,(3402-91) ต.โพนสูง หางนา - (3402-92) ต.โพนสูง นาหิน=Optic 12 Core DW = 1.8 km.
LEI000522,(3402-92) ต.โพนสูง นาหิน - (3402-93) ต.โพนสูง ห้วยทอง=Optic 12 Core DW = 6.5 km.";
    }
else if($message == "3402-93"){
        $arrayPostData['messages'][0]['text'] = "LEI000522,(3402-92) ต.โพนสูง นาหิน - (3402-93) ต.โพนสูง ห้วยทอง=Optic 12 Core DW = 6.5 km.";
    }
else if($message == "3402-96"){
          $arrayPostData['messages'][0]['text'] = "LEI000520,(3402-96) ต.โพนสูง หนองอุมลัว - (3402-91) ต.โพนสูง หางนา=Optic 12 Core DW = 5.3 km.
LEI000523,(3402-84) ต.โคกงาม หนองสนุน - (3402-96) ต.โพนสูง หนองอุ้มลัว=Optic 12 Core DW = 4.4 km.
LEI000524,(3402-96) ต.โพนสูง หนองอุมลัว - (3402-97) ต.โพนสูง หัวฝาย=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3402-97"){
        $arrayPostData['messages'][0]['text'] = "LEI000524,(3402-96) ต.โพนสูง หนองอุมลัว - (3402-97) ต.โพนสูง หัวฝาย=Optic 12 Core DW = 4.7 km.";
    }
else if($message == "3402-99"){
          $arrayPostData['messages'][0]['text'] = "LEI000500,(3402-99) ต.โป่ง น้ำพุ่ง - (3402-148) ต.โป่ง ทุ่งเทิง=Optic 12 Core DW = 3.9 km.
LEI000525,(SJ) ด่านซ้าย-หล่มสัก - (3402-99) ต.โป่ง น้ำพุ่ง=Optic 12 Core DW = 1.15 km.";
    }
else if($message == "3403-101"){
        $arrayPostData['messages'][0]['text'] = "LEI000189,(3403-51) บ้านนาวัว - (3403-101) บ้านนาวัว2=Optic 12 Core DW = 1.628 km.";
    }
else if($message == "3403-102"){
        $arrayPostData['messages'][0]['text'] = "LEI000190,(3403-51) บ้านนาวัว - (3403-102) ฟากห้วย=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3403-103"){
        $arrayPostData['messages'][0]['text'] = "LEI000191,(3403-32) บ้านปากปวน - (3403-103) บุ่งตาข่าย=Optic 12 Core DW = 4 km.";
    }
else if($message == "3403-105"){
        $arrayPostData['messages'][0]['text'] = "LEI000526,(3403-114) บ้านขอนแก่น - (3403-105) ยางเดี่ยว=Optic 12 Core DW = 3.831 km.";
    }
else if($message == "3403-106"){
          $arrayPostData['messages'][0]['text'] = "LEI000311,(3403-106) เหล่าแปน - (3403-115) ต.หนองงิ้ว บ้านเหล่าแปน2=Optic 12 Core DW = 0.775 km.
LEI000319,(3403-106) เหล่าแปน - (3403-109) บ้านเล้า=Optic 12 Core DW = 1.577 km.
LEI000327,(3403-74) นาซำแซง - (3403-106) เหล่าแปน=Optic 12 Core DW = 2.231 km.
LEI000529,(3403-106) เหล่าแปน - (3403-128) ต.หนองงิ้ว ตากแดด=Optic 12 Core DW = 0.88 km.";
    }
else if($message == "3403-108"){
        $arrayPostData['messages'][0]['text'] = "LEI000527,(3403-40) บ้านฟากเลย(วังสะพุง) - (3403-108) ต.ศรีสงคราม โนนสว่าง=Optic 12 Core DW = 0.85 km.";
    }
else if($message == "3403-109"){
          $arrayPostData['messages'][0]['text'] = "LEI000318,(3403-109) บ้านเล้า - (3403-61) หนองหญ้าปล้อง=Optic 12 Core DW = 2.628 km.
LEI000319,(3403-106) เหล่าแปน - (3403-109) บ้านเล้า=Optic 12 Core DW = 1.577 km.";
    }
else if($message == "3403-111"){
          $arrayPostData['messages'][0]['text'] = "LEI000316,(3403-61) หนองหญ้าปล้อง - (3403-111) กกบก=Optic 12 Core DW = 5.324 km.
LEI000540,(3403-111) กกบก - (3403-163) ต.วังสะพุง บ้านกกกอก=Optic 12 Core DW = 5.784 km.
LEI000543,(3403-111) กกบก - (3403-167) บ้านหมากแข้ง=Optic 12 Core DW = 4.479 km.";
    }
else if($message == "3403-114"){
          $arrayPostData['messages'][0]['text'] = "LEI000526,(3403-114) บ้านขอนแก่น - (3403-105) ยางเดี่ยว=Optic 12 Core DW = 3.831 km.
LEI000528,(3403-74) นาซำแซง - (3403-114) บ้านขอนแก่น=Optic 12 Core DW = 5 km.
LEI000545,(3403-114) บ้านขอนแก่น - (3403-80) น้ำทบ=Optic 12 Core DW = 3.47 km.";
    }
else if($message == "3403-115"){
        $arrayPostData['messages'][0]['text'] = "LEI000311,(3403-106) เหล่าแปน - (3403-115) ต.หนองงิ้ว บ้านเหล่าแปน2=Optic 12 Core DW = 0.775 km.";
    }
else if($message == "3403-117"){
        $arrayPostData['messages'][0]['text'] = "LEI000339,(3403-46) ทรายขาว - (3403-117) ฟากเลย=Optic 12 Core DW = 0.992 km.";
    }
else if($message == "3403-118"){
        $arrayPostData['messages'][0]['text'] = "LEI000310,(3403-46) ทรายขาว - (3403-118) บ้านโนน=Optic 12 Core DW = 0.775 km.";
    }
else if($message == "3403-119"){
        $arrayPostData['messages'][0]['text'] = "LEI000338,(3403-51) นาวัว1 - (3403-119) บ้านน้ำค้อ=Optic 12 Core DW = 0.834 km.";
    }
else if($message == "3403-122"){
        $arrayPostData['messages'][0]['text'] = "LEI000308,(3403-32) ปากปวน - (3403-122) กุดโง้ง=Optic 12 Core DW = 2.402 km.";
    }
else if($message == "3403-127"){
        $arrayPostData['messages'][0]['text'] = "LEI000307,(3403-48) ห้วยทรายคำ - (3403-127) กกเกลี้ยง=Optic 12 Core DW = 2.271 km.";
    }
else if($message == "3403-128"){
        $arrayPostData['messages'][0]['text'] = "LEI000529,(3403-106) เหล่าแปน - (3403-128) ต.หนองงิ้ว ตากแดด=Optic 12 Core DW = 0.88 km.";
    }
else if($message == "3403-129"){
          $arrayPostData['messages'][0]['text'] = "LEI000342,(3403-129) บ้านโนนสมบูรณ์ - (3403-131) บ้านวังไห=Optic 12 Core DW = 2.2 km.
LEI000530,(SJ) วังสะพุง-เอราวัณ - (3403-129) ต.หนองหญ้าปล้อง โนนสมบูรณ์=Optic 12 Core DW = 1.45 km.";
    }
else if($message == "3403-131"){
          $arrayPostData['messages'][0]['text'] = "LEI000342,(3403-129) บ้านโนนสมบูรณ์ - (3403-131) บ้านวังไห=Optic 12 Core DW = 2.2 km.
LEI000537,(3403-131) บ้านวังไห - (3403-159) โรงงานน้ำตาลเลย=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3403-132"){
        $arrayPostData['messages'][0]['text'] = "LEI000332,(3403-64) บ้านเหมืองแบ่ง - (3403-132) บ้านหนองปาดฟาน=Optic 12 Core DW = 2.367 km.";
    }
else if($message == "3403-133"){
        $arrayPostData['messages'][0]['text'] = "LEI000344,(3403-71) บ้านศรีอุบล - (3403-133) บ้านบึงสวรรค์=12 Core= 6.5 km.";
    }
else if($message == "3403-134"){
        $arrayPostData['messages'][0]['text'] = "LEI000531,(3403-61) หนองหญ้าปล้อง - (3403-134) ต.หนองงิ้ว น้ำจันทร์=Optic 12 Core DW = 4 km.";
    }
else if($message == "3403-135"){
        $arrayPostData['messages'][0]['text'] = "LEI000532,(3403-136) ต.โคกขมิ้น โคกหนองแก - (3403-135) ต.โคกขมิ้น ดงน้อย=Optic 12 Core DW = 2.281 km.";
    }
else if($message == "3403-136"){
          $arrayPostData['messages'][0]['text'] = "LEI000532,(3403-136) ต.โคกขมิ้น โคกหนองแก - (3403-135) ต.โคกขมิ้น ดงน้อย=Optic 12 Core DW = 2.281 km.
LEI000533,(SJ) หนองหิน-วังสะพุง - (3403-136) ต.โคกขมิ้น โคกหนองแก=Optic 12 Core DW = 0.51 km.";
    }
else if($message == "3403-143"){
        $arrayPostData['messages'][0]['text'] = "LEI000534,(3403-70) บ้านโคกมน - (3403-143) ผาน้อย กกเต็น=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3403-147"){
        $arrayPostData['messages'][0]['text'] = "LEI000535,(3403-52) ท่าทิศเฮือง - (3403-147) ท่าทิศเฮือง2=Optic 12 Core DW = 2.05 km.";
    }
else if($message == "3403-158"){
        $arrayPostData['messages'][0]['text'] = "LEI000536,(3403-65) บ้านนาแก - (3403-158) บ้านนาแก2=Optic 12 Core DW = 0.995 km.";
    }
else if($message == "3403-159"){
        $arrayPostData['messages'][0]['text'] = "LEI000537,(3403-131) บ้านวังไห - (3403-159) โรงงานน้ำตาลเลย=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3403-161"){
        $arrayPostData['messages'][0]['text'] = "LEI000538,(3403-49) บุ่งกกตาล - (3403-161) บุ่งกกตาล2=Optic 12 Core DW = 1.091 km.";
    }
else if($message == "3403-162"){
        $arrayPostData['messages'][0]['text'] = "LEI000539,(3401-134) หนองผำ - (3403-162) ต.โคกขมิ้น โรงเรียนผาน้อย=Optic 12 Core DW = 1.612 km.";
    }
else if($message == "3403-163"){
        $arrayPostData['messages'][0]['text'] = "LEI000540,(3403-111) กกบก - (3403-163) ต.วังสะพุง บ้านกกกอก=Optic 12 Core DW = 5.784 km.";
    }
else if($message == "3403-165"){
        $arrayPostData['messages'][0]['text'] = "LEI000541,(3404-70) บ้านโคกมน - (3403-165) ต.วังสะพุง โคกมน=Optic 12 Core DW = 0.89 km.";
    }
else if($message == "3403-166"){
        $arrayPostData['messages'][0]['text'] = "LEI000542,(3403-81) กกซ้อ - (3403-166) ต.ทรายขาว กกซ้อ2=Optic 12 Core DW = 0.94 km.";
    }
else if($message == "3403-167"){
        $arrayPostData['messages'][0]['text'] = "LEI000543,(3403-111) กกบก - (3403-167) บ้านหมากแข้ง=Optic 12 Core DW = 4.479 km.";
    }
else if($message == "3403-181"){
        $arrayPostData['messages'][0]['text'] = "LEI000544,(3403-79) นาหนองบง - (3403-181) บ้านนาหนองบง ต.เขาหลวง=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3403-31"){
          $arrayPostData['messages'][0]['text'] = "LEI000001,(3403-31) me วังสะพุง - (3401-41) me officeเลย=12 Core= 22.034 km.
LEI000002,(3403-31) me วังสะพุง - (3412-37) me หนองหิน=12 Core= 27.047 km.";
    }
else if($message == "3403-32"){
          $arrayPostData['messages'][0]['text'] = "LEI000049,() SJ การไฟฟ้าวังสะพุง - (3403-32) บ้านปากปวน=Optic 12 Core DW = 4.313 km.
LEI000129,(3403-32) บ้านปากปวน - (3403-57) ป่าเป้า=Optic 12 Core DW = 2.4 km.
LEI000191,(3403-32) บ้านปากปวน - (3403-103) บุ่งตาข่าย=Optic 12 Core DW = 4 km.
LEI000196,(3403-32) บ้านปากปวน - (3403-66) วิทยาลัยการอาชีพ=Optic 12 Core DW = 1.6 km.
LEI000308,(3403-32) ปากปวน - (3403-122) กุดโง้ง=Optic 12 Core DW = 2.402 km.";
    }
else if($message == "3403-33"){
          $arrayPostData['messages'][0]['text'] = "LEI000050,(3403-34) ศาลเจ้า - (3403-33) วังสะพุง=Optic 12 Core DW = 1.595 km.
LEI000052,(3403-33) วังสะพุง - (3403-35) บ.ข.ส.วังสะพุง=Optic 12 Core DW = 0.976 km.
LEI000055,(3403-33) วังสะพุง - (3403-38) เทศบาลวังสะพุง=Optic 12 Core DW = 0.88 km.
LEI000247,(3403-33) วังสะพุง - (3409-68) ภูหลวง=12 Core= 26.599 km.";
    }
else if($message == "3403-34"){
          $arrayPostData['messages'][0]['text'] = "LEI000050,(3403-34) ศาลเจ้า - (3403-33) วังสะพุง=Optic 12 Core DW = 1.595 km.
LEI000051,(3401-31) ME วังสะพุง - (3403-34) ศาลเจ้า=Optic 12 Core DW = 0.675 km.
LEI000056,(3403-34) ศาลเจ้า - (3403-39) บ้านเลิง=Optic 12 Core DW = 0.79 km.";
    }
else if($message == "3403-35"){
          $arrayPostData['messages'][0]['text'] = "LEI000052,(3403-33) วังสะพุง - (3403-35) บ.ข.ส.วังสะพุง=Optic 12 Core DW = 0.976 km.
LEI000057,(3403-35) บ.ข.ส.วังสะพุง - (3403-40) บ้านฟากเลย(วังสะพุง)=Optic 12 Core DW = 0.954 km.
LEI000058,(3403-35) บ.ข.ส.วังสะพุง - (3403-41) ศรีสงคราม=Optic 12 Core DW = 1.572 km.";
    }
else if($message == "3403-36"){
          $arrayPostData['messages'][0]['text'] = "LEI000004,(3403-36) บุ่งผักก้าม - (3403-47) บ้านน้ำอ้อม=Optic 12 Core DW = 5.308 km.
LEI000053,(3403-38) เทศบาลวังสะพุง - (3403-36) บุ่งผักก้าม=Optic 12 Core DW = 1.2 km.
LEI000197,(3403-36) บุ่งผักก้าม - (3403-67) โรงพยาบาลวังสะพุง=Optic 12 Core DW = 1.06 km.";
    }
else if($message == "3403-37"){
        $arrayPostData['messages'][0]['text'] = "LEI000054,(3401-31) ME วังสะพุง - (3403-37) นาหลัก=Optic 12 Core DW = 0.866 km.";
    }
else if($message == "3403-37 "){
        $arrayPostData['messages'][0]['text'] = "0";
    }
else if($message == "3403-38"){
          $arrayPostData['messages'][0]['text'] = "LEI000053,(3403-38) เทศบาลวังสะพุง - (3403-36) บุ่งผักก้าม=Optic 12 Core DW = 1.2 km.
LEI000055,(3403-33) วังสะพุง - (3403-38) เทศบาลวังสะพุง=Optic 12 Core DW = 0.88 km.
LEI000110,(3403-38) เทศบาลวังสะพุง - (3403-55) บ้านนาอีเลิศ=Optic 12 Core DW = 2.835 km.";
    }
else if($message == "3403-39"){
        $arrayPostData['messages'][0]['text'] = "LEI000056,(3403-34) ศาลเจ้า - (3403-39) บ้านเลิง=Optic 12 Core DW = 0.79 km.";
    }
else if($message == "3403-40"){
          $arrayPostData['messages'][0]['text'] = "LEI000057,(3403-35) บ.ข.ส.วังสะพุง - (3403-40) บ้านฟากเลย(วังสะพุง)=Optic 12 Core DW = 0.954 km.
LEI000089,(3403-40) บ้านฟากเลย(วังสะพุง) - (3403-49) บุ่งกกตาล=Optic 12 Core DW = 1.85 km.
LEI000394,(3403-40) บ้านฟากเลย - (3403-94) บ้านโนนสว่าง ต.ศรีสงคราม=Optic 12 Core DW = 0.81 km.
LEI000527,(3403-40) บ้านฟากเลย(วังสะพุง) - (3403-108) ต.ศรีสงคราม โนนสว่าง=Optic 12 Core DW = 0.85 km.";
    }
else if($message == "3403-41"){
        $arrayPostData['messages'][0]['text'] = "LEI000058,(3403-35) บ.ข.ส.วังสะพุง - (3403-41) ศรีสงคราม=Optic 12 Core DW = 1.572 km.";
    }
else if($message == "3403-42"){
          $arrayPostData['messages'][0]['text'] = "LEI000092,(3403-42) กกเกลือ - (3403-53) ท่าทิศเฮือง=Optic 12 Core DW = 2.666 km.
LEI000268,(SJ) SJ การไฟฟ้าวังสะพุง - (3403-42) บ้านกกเกลือ=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3403-43"){
        $arrayPostData['messages'][0]['text'] = "LEI000067,(3403-37 ) นาหลัก  - (3403-43) บ้านน้อยนา=Optic 12 Core DW = 1.132 km.";
    }
else if($message == "3403-44"){
          $arrayPostData['messages'][0]['text'] = "LEI000068,(3401-31) ME วังสะพุง - (3403-44) วังน้ำเย็น=Optic 12 Core DW = 1.66 km.
LEI000201,(3403-44) บ้านวังน้ำเย็น - (3403-76) บ้านผาพุงพัฒนา=12 Core= 11.45 km.";
    }
else if($message == "3403-45"){
        $arrayPostData['messages'][0]['text'] = "LEI000085,() SJ MEวังสะพุง-เอราวัณ - (3403-45) บ้านนาดอกไม้=Optic 12 Core DW = 1 km.";
    }
else if($message == "3403-46"){
          $arrayPostData['messages'][0]['text'] = "LEI000003,(3403-47) บ้านน้ำอ้อม - (3403-46) บ้านทรายขาว=Optic 12 Core DW = 5.5 km.
LEI000090,(3403-46) บ้านทรายขาว - (3403-50) บ้านโพนงาม=Optic 12 Core DW = 2.2 km.
LEI000310,(3403-46) ทรายขาว - (3403-118) บ้านโนน=Optic 12 Core DW = 0.775 km.
LEI000339,(3403-46) ทรายขาว - (3403-117) ฟากเลย=Optic 12 Core DW = 0.992 km.";
    }
else if($message == "3403-47"){
          $arrayPostData['messages'][0]['text'] = "LEI000003,(3403-47) บ้านน้ำอ้อม - (3403-46) บ้านทรายขาว=Optic 12 Core DW = 5.5 km.
LEI000004,(3403-36) บุ่งผักก้าม - (3403-47) บ้านน้ำอ้อม=Optic 12 Core DW = 5.308 km.";
    }
else if($message == "3403-48"){
          $arrayPostData['messages'][0]['text'] = "LEI000088,(3403-49) บุ่งกกตาล - (3403-48) ห้วยทรายคำ=Optic 12 Core DW = 2.5 km.
LEI000195,(3403-48) ห้วยทรายคำ - (3403-65) บ้านนาแก=Optic 12 Core DW = 8 km.
LEI000307,(3403-48) ห้วยทรายคำ - (3403-127) กกเกลี้ยง=Optic 12 Core DW = 2.271 km.";
    }
else if($message == "3403-49"){
          $arrayPostData['messages'][0]['text'] = "LEI000088,(3403-49) บุ่งกกตาล - (3403-48) ห้วยทรายคำ=Optic 12 Core DW = 2.5 km.
LEI000089,(3403-40) บ้านฟากเลย(วังสะพุง) - (3403-49) บุ่งกกตาล=Optic 12 Core DW = 1.85 km.
LEI000538,(3403-49) บุ่งกกตาล - (3403-161) บุ่งกกตาล2=Optic 12 Core DW = 1.091 km.";
    }
else if($message == "3403-50"){
          $arrayPostData['messages'][0]['text'] = "LEI000090,(3403-46) บ้านทรายขาว - (3403-50) บ้านโพนงาม=Optic 12 Core DW = 2.2 km.
LEI000091,(3403-50) บ้านโพนงาม - (3403-51) บ้านนาวัว=Optic 12 Core DW = 3.109 km.
LEI000200,(3403-50) บ้านโพนงาม - (3403-72) บ้านโพนทอง=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3403-51"){
          $arrayPostData['messages'][0]['text'] = "LEI000091,(3403-50) บ้านโพนงาม - (3403-51) บ้านนาวัว=Optic 12 Core DW = 3.109 km.
LEI000189,(3403-51) บ้านนาวัว - (3403-101) บ้านนาวัว2=Optic 12 Core DW = 1.628 km.
LEI000190,(3403-51) บ้านนาวัว - (3403-102) ฟากห้วย=Optic 12 Core DW = 2.1 km.
LEI000338,(3403-51) นาวัว1 - (3403-119) บ้านน้ำค้อ=Optic 12 Core DW = 0.834 km.";
    }
else if($message == "3403-52"){
          $arrayPostData['messages'][0]['text'] = "LEI000192,(3403-53) วังแท่น - (3403-52) ท่าทิศเฮือง=Optic 12 Core DW = 2 km.
LEI000535,(3403-52) ท่าทิศเฮือง - (3403-147) ท่าทิศเฮือง2=Optic 12 Core DW = 2.05 km.";
    }
else if($message == "3403-53"){
          $arrayPostData['messages'][0]['text'] = "LEI000092,(3403-42) กกเกลือ - (3403-53) ท่าทิศเฮือง=Optic 12 Core DW = 2.666 km.
LEI000093,(3403-53) ท่าทิศเฮือง - (3403-53) วังแท่น=Optic 12 Core DW = 1.7 km.
LEI000192,(3403-53) วังแท่น - (3403-52) ท่าทิศเฮือง=Optic 12 Core DW = 2 km.
LEI000203,(3403-53) วังแท่น - (3403-82) ผาน้อย=12 Core= 5.482 km.";
    }
else if($message == "3403-54"){
        $arrayPostData['messages'][0]['text'] = "LEI000276,(SJ) SJ บ้านน้ำอ้อน-บ้านทรายขาว - (3403-54) บ้านบุ่งค้อ=Optic 12 Core DW = 1 km.";
    }
else if($message == "3403-55"){
        $arrayPostData['messages'][0]['text'] = "LEI000110,(3403-38) เทศบาลวังสะพุง - (3403-55) บ้านนาอีเลิศ=Optic 12 Core DW = 2.835 km.";
    }
else if($message == "3403-57"){
        $arrayPostData['messages'][0]['text'] = "LEI000129,(3403-32) บ้านปากปวน - (3403-57) ป่าเป้า=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3403-59"){
          $arrayPostData['messages'][0]['text'] = "LEI000193,(SJ) วังสะพุง-หนองหิน - (3403-59) โคกขมิ้น=Optic 12 Core DW = 2.5 km.
LEI000194,(3403-59) โคกขมิ้น - (3403-60) นิกรสุข=Optic 12 Core DW = 1.3 km.
LEI000209,(3403-59) โคกขมิ้น - (3403-97) ศรีประทุม=Optic 12 Core DW = 4.8 km.";
    }
else if($message == "3403-60"){
          $arrayPostData['messages'][0]['text'] = "LEI000194,(3403-59) โคกขมิ้น - (3403-60) นิกรสุข=Optic 12 Core DW = 1.3 km.
LEI000210,(3403-60) นิกรสุข - (3403-98) น้อยคีรี=Optic 12 Core DW = 1.778 km.
LEI000270,(SJ) SJ วังสะพุง-หนองหิน - (3403-60) นิกรสุ่ม=Optic 12 Core DW = 0.28 km.
LEI000334,(3403-60) บ้านนิกรสุข - (3412-56) บ้านห้วยเป้า=Optic 12 Core DW = 7.17 km.";
    }
else if($message == "3403-61"){
          $arrayPostData['messages'][0]['text'] = "LEI000316,(3403-61) หนองหญ้าปล้อง - (3403-111) กกบก=Optic 12 Core DW = 5.324 km.
LEI000318,(3403-109) บ้านเล้า - (3403-61) หนองหญ้าปล้อง=Optic 12 Core DW = 2.628 km.
LEI000531,(3403-61) หนองหญ้าปล้อง - (3403-134) ต.หนองงิ้ว น้ำจันทร์=Optic 12 Core DW = 4 km.";
    }
else if($message == "3403-64"){
          $arrayPostData['messages'][0]['text'] = "LEI000130,(3403-64) เหมืองแบ่ง - (3403-68) วังกกเดื่อ=Optic 12 Core DW = 2.93 km.
LEI000199,(3403-64) บ้านเหมืองแบ่ง - (3403-71) ศรีอุบล=Optic 12 Core DW = 4 km.
LEI000332,(3403-64) บ้านเหมืองแบ่ง - (3403-132) บ้านหนองปาดฟาน=Optic 12 Core DW = 2.367 km.
LEI000464,(3411-64) โนนดินแดง - (3403-64) บ้านเหมืองแบ่ง=12 Core= 12 km.";
    }
else if($message == "3403-65"){
          $arrayPostData['messages'][0]['text'] = "LEI000195,(3403-48) ห้วยทรายคำ - (3403-65) บ้านนาแก=Optic 12 Core DW = 8 km.
LEI000536,(3403-65) บ้านนาแก - (3403-158) บ้านนาแก2=Optic 12 Core DW = 0.995 km.";
    }
else if($message == "3403-66"){
        $arrayPostData['messages'][0]['text'] = "LEI000196,(3403-32) บ้านปากปวน - (3403-66) วิทยาลัยการอาชีพ=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3403-67"){
        $arrayPostData['messages'][0]['text'] = "LEI000197,(3403-36) บุ่งผักก้าม - (3403-67) โรงพยาบาลวังสะพุง=Optic 12 Core DW = 1.06 km.";
    }
else if($message == "3403-68"){
        $arrayPostData['messages'][0]['text'] = "LEI000130,(3403-64) เหมืองแบ่ง - (3403-68) วังกกเดื่อ=Optic 12 Core DW = 2.93 km.";
    }
else if($message == "3403-70"){
          $arrayPostData['messages'][0]['text'] = "LEI000198,(SJ) SJ วังสะพุง-เอราวัณ - (3403-70) บ้านโคกมน=Optic 12 Core DW = 7.499 km.
LEI000204,(3403-70) บ้านโคกมน - (3403-84) โคกแฝก=Optic 12 Core DW = 2.55 km.
LEI000534,(3403-70) บ้านโคกมน - (3403-143) ผาน้อย กกเต็น=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3403-71"){
          $arrayPostData['messages'][0]['text'] = "LEI000199,(3403-64) บ้านเหมืองแบ่ง - (3403-71) ศรีอุบล=Optic 12 Core DW = 4 km.
LEI000312,(3403-71) ศรีอุบล - (3411-59) ผาสะนา=12 Core= 7.989 km.
LEI000344,(3403-71) บ้านศรีอุบล - (3403-133) บ้านบึงสวรรค์=12 Core= 6.5 km.";
    }
else if($message == "3403-72"){
          $arrayPostData['messages'][0]['text'] = "LEI000200,(3403-50) บ้านโพนงาม - (3403-72) บ้านโพนทอง=Optic 12 Core DW = 3.7 km.
LEI000202,(3403-72) บ้านโพนทอง - (3403-81) บ้านกกซ้อ=Optic 12 Core DW = 3.15 km.";
    }
else if($message == "3403-74"){
          $arrayPostData['messages'][0]['text'] = "LEI000265,(3403-75) แก่งหิน - (3403-74) นาซำแซง=Optic 12 Core DW = 3.3 km.
LEI000327,(3403-74) นาซำแซง - (3403-106) เหล่าแปน=Optic 12 Core DW = 2.231 km.
LEI000528,(3403-74) นาซำแซง - (3403-114) บ้านขอนแก่น=Optic 12 Core DW = 5 km.";
    }
else if($message == "3403-75"){
          $arrayPostData['messages'][0]['text'] = "LEI000156,(3403-76) บ้านผาพุงพัฒนา - (3403-75) บ้านแก่งหิน=Optic 12 Core DW = 1.8 km.
LEI000265,(3403-75) แก่งหิน - (3403-74) นาซำแซง=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3403-76"){
          $arrayPostData['messages'][0]['text'] = "LEI000145,(3403-76) บ้านผาพุงพัฒนา - (3403-77) บ้านกกสะท้อน=Optic 12 Core DW = 1 km.
LEI000156,(3403-76) บ้านผาพุงพัฒนา - (3403-75) บ้านแก่งหิน=Optic 12 Core DW = 1.8 km.
LEI000201,(3403-44) บ้านวังน้ำเย็น - (3403-76) บ้านผาพุงพัฒนา=12 Core= 11.45 km.";
    }
else if($message == "3403-77"){
          $arrayPostData['messages'][0]['text'] = "LEI000145,(3403-76) บ้านผาพุงพัฒนา - (3403-77) บ้านกกสะท้อน=Optic 12 Core DW = 1 km.
LEI000146,(3403-77) บ้านกกสะท้อน - (3403-78) บ้านห้วยผูก=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3403-78"){
          $arrayPostData['messages'][0]['text'] = "LEI000146,(3403-77) บ้านกกสะท้อน - (3403-78) บ้านห้วยผูก=Optic 12 Core DW = 1.4 km.
LEI000266,(3403-78) ห้วยผูก - (3403-79) นาหนองบง=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3403-79"){
          $arrayPostData['messages'][0]['text'] = "LEI000266,(3403-78) ห้วยผูก - (3403-79) นาหนองบง=Optic 12 Core DW = 2.5 km.
LEI000544,(3403-79) นาหนองบง - (3403-181) บ้านนาหนองบง ต.เขาหลวง=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3403-80"){
        $arrayPostData['messages'][0]['text'] = "LEI000545,(3403-114) บ้านขอนแก่น - (3403-80) น้ำทบ=Optic 12 Core DW = 3.47 km.";
    }
else if($message == "3403-81"){
          $arrayPostData['messages'][0]['text'] = "LEI000202,(3403-72) บ้านโพนทอง - (3403-81) บ้านกกซ้อ=Optic 12 Core DW = 3.15 km.
LEI000542,(3403-81) กกซ้อ - (3403-166) ต.ทรายขาว กกซ้อ2=Optic 12 Core DW = 0.94 km.";
    }
else if($message == "3403-82"){
          $arrayPostData['messages'][0]['text'] = "LEI000203,(3403-53) วังแท่น - (3403-82) ผาน้อย=12 Core= 5.482 km.
LEI000205,(3403-82) ผาน้อย - (3403-85) โนนกกจาน=Optic 12 Core DW = 1.216 km.";
    }
else if($message == "3403-83"){
          $arrayPostData['messages'][0]['text'] = "LEI000263,(SJ) SJ วังแท่น-ผาน้อย - (3403-83) กุดแก=Optic 12 Core DW = 1.12 km.
LEI000264,(3403-83) กุดแก - (3403-86) ศรีสงคราม=Optic 12 Core DW = 1.249 km.
LEI000328,(3403-83) กุดแก - (3403-86) ศรีสงคราม=Optic 12 Core DW = 1.221 km.";
    }
else if($message == "3403-84"){
          $arrayPostData['messages'][0]['text'] = "LEI000204,(3403-70) บ้านโคกมน - (3403-84) โคกแฝก=Optic 12 Core DW = 2.55 km.
LEI000206,(3403-84) โคกแฝก - (3403-88) โนนงาม=Optic 12 Core DW = 1.864 km.";
    }
else if($message == "3403-85"){
          $arrayPostData['messages'][0]['text'] = "LEI000205,(3403-82) ผาน้อย - (3403-85) โนนกกจาน=Optic 12 Core DW = 1.216 km.
LEI000404,(3403-85) โนนกกจาน - (3403-87) ปทุมวัน=Optic 12 Core DW = 1.235 km.";
    }
else if($message == "3403-86"){
          $arrayPostData['messages'][0]['text'] = "LEI000264,(3403-83) กุดแก - (3403-86) ศรีสงคราม=Optic 12 Core DW = 1.249 km.
LEI000328,(3403-83) กุดแก - (3403-86) ศรีสงคราม=Optic 12 Core DW = 1.221 km.";
    }
else if($message == "3403-87"){
        $arrayPostData['messages'][0]['text'] = "LEI000404,(3403-85) โนนกกจาน - (3403-87) ปทุมวัน=Optic 12 Core DW = 1.235 km.";
    }
else if($message == "3403-88"){
          $arrayPostData['messages'][0]['text'] = "LEI000206,(3403-84) โคกแฝก - (3403-88) โนนงาม=Optic 12 Core DW = 1.864 km.
LEI000403,(3403-89) หนองนอ - (3403-88) โนนงาม=Optic 12 Core DW = 2.145 km.
LEI000546,(3403-88) โนนงาม - (3403-89) หนองนอ=Optic 12 Core DW = 2.185 km.";
    }
else if($message == "3403-89"){
          $arrayPostData['messages'][0]['text'] = "LEI000403,(3403-89) หนองนอ - (3403-88) โนนงาม=Optic 12 Core DW = 2.145 km.
LEI000546,(3403-88) โนนงาม - (3403-89) หนองนอ=Optic 12 Core DW = 2.185 km.";
    }
else if($message == "3403-91"){
          $arrayPostData['messages'][0]['text'] = "LEI000254,(SJ) SJ - (3403-91) หินเกิ้ง=Optic 12 Core DW = 0.53 km.
LEI000255,(3403-91) หินเกิ้ง - (3403-92) โคกสว่าง=Optic 12 Core DW = 4 km.";
    }
else if($message == "3403-92"){
        $arrayPostData['messages'][0]['text'] = "LEI000255,(3403-91) หินเกิ้ง - (3403-92) โคกสว่าง=Optic 12 Core DW = 4 km.";
    }
else if($message == "3403-93"){
          $arrayPostData['messages'][0]['text'] = "LEI000329,(3403-93) บ้านลาด - (3403-99) บ้านลาดเหนือ=Optic 12 Core DW = 1.87 km.
LEI000432,(3403-99) บ้านลาดเหนือ - (3403-93) บ้านลาด=Optic 12 Core DW = 1.91 km.";
    }
else if($message == "3403-94"){
        $arrayPostData['messages'][0]['text'] = "LEI000394,(3403-40) บ้านฟากเลย - (3403-94) บ้านโนนสว่าง ต.ศรีสงคราม=Optic 12 Core DW = 0.81 km.";
    }
else if($message == "3403-95"){
        $arrayPostData['messages'][0]['text'] = "LEI000207,(3403-96) ป่าบง - (3403-95) ขอนยาง=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3403-96"){
          $arrayPostData['messages'][0]['text'] = "LEI000207,(3403-96) ป่าบง - (3403-95) ขอนยาง=Optic 12 Core DW = 1.1 km.
LEI000208,(3403-97) ศรีประทุม - (3403-96) ป่าบง=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3403-97"){
          $arrayPostData['messages'][0]['text'] = "LEI000208,(3403-97) ศรีประทุม - (3403-96) ป่าบง=Optic 12 Core DW = 1.5 km.
LEI000209,(3403-59) โคกขมิ้น - (3403-97) ศรีประทุม=Optic 12 Core DW = 4.8 km.";
    }
else if($message == "3403-98"){
        $arrayPostData['messages'][0]['text'] = "LEI000210,(3403-60) นิกรสุข - (3403-98) น้อยคีรี=Optic 12 Core DW = 1.778 km.";
    }
else if($message == "3403-99"){
          $arrayPostData['messages'][0]['text'] = "LEI000329,(3403-93) บ้านลาด - (3403-99) บ้านลาดเหนือ=Optic 12 Core DW = 1.87 km.
LEI000432,(3403-99) บ้านลาดเหนือ - (3403-93) บ้านลาด=Optic 12 Core DW = 1.91 km.";
    }
else if($message == "3404-109"){
        $arrayPostData['messages'][0]['text'] = "LEI000547,(3404-39) บ้านธาตุ - (3404-109) บ้านธาตุ3=Optic 12 Core DW = 0.679 km.";
    }
else if($message == "3404-111"){
          $arrayPostData['messages'][0]['text'] = "LEI000548,(3404-46) เชียงคาน4 - (3404-111) เชียงคาน4=Optic 12 Core DW = 1.176 km.
LEI000554,(3404-111) เชียงคาน4 - (3404-118) ต.เชียงคาน ประมง=Optic 12 Core DW = 1.215 km.";
    }
else if($message == "3404-113"){
        $arrayPostData['messages'][0]['text'] = "LEI000549,(3404-49) พรหมมานุสรณ์ - (3404-113) พรหมานุสรณ์2=Optic 12 Core DW = 1.183 km.";
    }
else if($message == "3404-114"){
        $arrayPostData['messages'][0]['text'] = "LEI000550,(3404-52) ผาแบ่น - (3404-114) ต.บุฮม อุมง=Optic 12 Core DW = 5.366 km.";
    }
else if($message == "3404-115"){
        $arrayPostData['messages'][0]['text'] = "LEI000551,(3404-40) บ้านธาตุ2 - (3404-115) ธาตุ4=Optic 12 Core DW = 0.749 km.";
    }
else if($message == "3404-116"){
        $arrayPostData['messages'][0]['text'] = "LEI000552,(3404-43) เชียงคาน1 - (3404-116) ต.เชียงคาน ท่านาจันทร์=Optic 12 Core DW = 1.414 km.";
    }
else if($message == "3404-117"){
        $arrayPostData['messages'][0]['text'] = "LEI000553,(3404-46) เชียงคาน4 - (3404-117) ต.เชียงคาน หนองเต่า=Optic 12 Core DW = 1.895 km.";
    }
else if($message == "3404-118"){
        $arrayPostData['messages'][0]['text'] = "LEI000554,(3404-111) เชียงคาน4 - (3404-118) ต.เชียงคาน ประมง=Optic 12 Core DW = 1.215 km.";
    }
else if($message == "3404-124"){
        $arrayPostData['messages'][0]['text'] = "LEI000555,(3404-44) เชียงคาน2 - (3404-124) บ้านภูหงษ์=12 Core= 1.429 km.";
    }
else if($message == "3404-32"){
          $arrayPostData['messages'][0]['text'] = "LEI000325,(3404-32) โสกเก่า - (3404-33) โสกไหม่=Optic 12 Core DW = 1.746 km.
LEI000326,(3404-50) โพนนาซ่าว - (3404-32) โสกเก่า=Optic 12 Core DW = 4 km.";
    }
else if($message == "3404-33"){
        $arrayPostData['messages'][0]['text'] = "LEI000325,(3404-32) โสกเก่า - (3404-33) โสกไหม่=Optic 12 Core DW = 1.746 km.";
    }
else if($message == "3404-34"){
        $arrayPostData['messages'][0]['text'] = "LEI000324,(3404-35) นาป่าหนาด - (3404-34) นาเบน=Optic 12 Core DW = 2.106 km.";
    }
else if($message == "3404-35"){
          $arrayPostData['messages'][0]['text'] = "LEI000321,(3404-35) นาป่าหนาด - (3404-59) ตาดซ้อ=Optic 12 Core DW = 4 km.
LEI000322,(3404-35) นาป่าหนาด - (3404-36) วังอาบช้าง=Optic 12 Core DW = 2.134 km.
LEI000323,(3404-49) พรหมานุสรณ์ - (3404-35) นาป่าหนาด=12 Core= 9.902 km.
LEI000324,(3404-35) นาป่าหนาด - (3404-34) นาเบน=Optic 12 Core DW = 2.106 km.";
    }
else if($message == "3404-36"){
        $arrayPostData['messages'][0]['text'] = "LEI000322,(3404-35) นาป่าหนาด - (3404-36) วังอาบช้าง=Optic 12 Core DW = 2.134 km.";
    }
else if($message == "3404-37"){
          $arrayPostData['messages'][0]['text'] = "LEI000106,(3404-40) บ้านธาตุ2 - (3404-37) บ้านห้วยพอด=Optic 12 Core DW = 2.45 km.
LEI000213,(3404-37) บ้านห้วยพอด - (3404-58) ผาพอด=Optic 12 Core DW = 4.703 km.";
    }
else if($message == "3404-38"){
          $arrayPostData['messages'][0]['text'] = "LEI000103,(3401-35) บ้านนาโคก - (3404-38) บ้านนาโป่ง=12 Core= 14.167 km.
LEI000104,(3404-38) บ้านนาโป่ง - (3404-39) บ้านธาต=Optic 12 Core DW = 1.5 km.
LEI000137,(3404-38) บ้านโป่ง - (3401-153) บ้านนาแขม=12 Core= 6.398 km.";
    }
else if($message == "3404-39"){
          $arrayPostData['messages'][0]['text'] = "LEI000104,(3404-38) บ้านนาโป่ง - (3404-39) บ้านธาต=Optic 12 Core DW = 1.5 km.
LEI000105,(3404-39) บ้านธาต - (3404-40) บ้านธาตุ2=Optic 12 Core DW = 1.6 km.
LEI000547,(3404-39) บ้านธาตุ - (3404-109) บ้านธาตุ3=Optic 12 Core DW = 0.679 km.";
    }
else if($message == "3404-40"){
          $arrayPostData['messages'][0]['text'] = "LEI000105,(3404-39) บ้านธาต - (3404-40) บ้านธาตุ2=Optic 12 Core DW = 1.6 km.
LEI000106,(3404-40) บ้านธาตุ2 - (3404-37) บ้านห้วยพอด=Optic 12 Core DW = 2.45 km.
LEI000112,(3404-40) บ้านธาตุ2 - (3404-43) เชียงคาน1=12 Core= 19.959 km.
LEI000211,(3404-40) บ้านธาตุ 2 - (3404-49) พรหมมานุสรณ์=Optic 12 Core DW = 2.755 km.
LEI000551,(3404-40) บ้านธาตุ2 - (3404-115) ธาตุ4=Optic 12 Core DW = 0.749 km.";
    }
else if($message == "3404-41"){
          $arrayPostData['messages'][0]['text'] = "LEI000120,(3404-42) นาซ่าว - (3404-41) นาบอน(อ.เชียงคาน)=Optic 12 Core DW = 3.1 km.
LEI000212,(3404-41) บ้านนาบอน - (3404-50) โพนนาซ่าว=Optic 12 Core DW = 3.35 km.
LEI000370,(3404-41) เชียงคาน - (3404-96) บ้านคกมาด=12 Core= 9.007 km.
LEI000374,(3404-41) บ้านนาบอน - (3404-85) บ้านกลาง=12 Core= 8.716 km.";
    }
else if($message == "3404-42"){
          $arrayPostData['messages'][0]['text'] = "LEI000118,() SJ เลย - เชียงคาน - (3404-42) นาซ่าว=Optic 12 Core DW = 1.207 km.
LEI000120,(3404-42) นาซ่าว - (3404-41) นาบอน(อ.เชียงคาน)=Optic 12 Core DW = 3.1 km.
LEI000415,(3404-42) บ้านนาซ่าว - (3404-80) บ้านใหม่ตาแสง=Optic 12 Core DW = 3.558 km.";
    }
else if($message == "3404-43"){
          $arrayPostData['messages'][0]['text'] = "LEI000112,(3404-40) บ้านธาตุ2 - (3404-43) เชียงคาน1=12 Core= 19.959 km.
LEI000113,(3404-43) เชียงคาน1 - (3404-44) เชียงคาน2=Optic 12 Core DW = 1.269 km.
LEI000552,(3404-43) เชียงคาน1 - (3404-116) ต.เชียงคาน ท่านาจันทร์=Optic 12 Core DW = 1.414 km.";
    }
else if($message == "3404-44"){
          $arrayPostData['messages'][0]['text'] = "LEI000113,(3404-43) เชียงคาน1 - (3404-44) เชียงคาน2=Optic 12 Core DW = 1.269 km.
LEI000114,(3404-44) เชียงคาน2 - (3404-45) เชียงคาน3=Optic 12 Core DW = 0.831 km.
LEI000555,(3404-44) เชียงคาน2 - (3404-124) บ้านภูหงษ์=12 Core= 1.429 km.";
    }
else if($message == "3404-45"){
          $arrayPostData['messages'][0]['text'] = "LEI000114,(3404-44) เชียงคาน2 - (3404-45) เชียงคาน3=Optic 12 Core DW = 0.831 km.
LEI000115,(3404-45) เชียงคาน3 - (3404-46) เชียงคาน4=Optic 12 Core DW = 1.207 km.";
    }
else if($message == "3404-46"){
          $arrayPostData['messages'][0]['text'] = "LEI000115,(3404-45) เชียงคาน3 - (3404-46) เชียงคาน4=Optic 12 Core DW = 1.207 km.
LEI000119,(3404-46) เชียงคาน4 - (3404-48) แก่งคุดคู้=Optic 12 Core DW = 4.697 km.
LEI000548,(3404-46) เชียงคาน4 - (3404-111) เชียงคาน4=Optic 12 Core DW = 1.176 km.
LEI000553,(3404-46) เชียงคาน4 - (3404-117) ต.เชียงคาน หนองเต่า=Optic 12 Core DW = 1.895 km.";
    }
else if($message == "3404-48"){
        $arrayPostData['messages'][0]['text'] = "LEI000119,(3404-46) เชียงคาน4 - (3404-48) แก่งคุดคู้=Optic 12 Core DW = 4.697 km.";
    }
else if($message == "3404-49"){
          $arrayPostData['messages'][0]['text'] = "LEI000211,(3404-40) บ้านธาตุ 2 - (3404-49) พรหมมานุสรณ์=Optic 12 Core DW = 2.755 km.
LEI000323,(3404-49) พรหมานุสรณ์ - (3404-35) นาป่าหนาด=12 Core= 9.902 km.
LEI000416,(3404-49) พรหมมานุสรณ์ - (3404-78) บ้านน้ำอ้อม=Optic 12 Core DW = 1.879 km.
LEI000549,(3404-49) พรหมมานุสรณ์ - (3404-113) พรหมานุสรณ์2=Optic 12 Core DW = 1.183 km.";
    }
else if($message == "3404-50"){
          $arrayPostData['messages'][0]['text'] = "LEI000212,(3404-41) บ้านนาบอน - (3404-50) โพนนาซ่าว=Optic 12 Core DW = 3.35 km.
LEI000326,(3404-50) โพนนาซ่าว - (3404-32) โสกเก่า=Optic 12 Core DW = 4 km.";
    }
else if($message == "3404-52"){
          $arrayPostData['messages'][0]['text'] = "LEI000465,(SJ) เชียงคาน-ปากชม - (3404-52) ผาแบ่น=Optic 12 Core DW = 2.18 km.
LEI000550,(3404-52) ผาแบ่น - (3404-114) ต.บุฮม อุมง=Optic 12 Core DW = 5.366 km.";
    }
else if($message == "3404-53"){
          $arrayPostData['messages'][0]['text'] = "LEI000280,(SJ) SJ หัวต่อ เลย - เชียงคาน - (3404-53) บ้านใหม่ศาลาเฟือง=Optic 12 Core DW = 1.12 km.
LEI000282,(3404-53) บ้านใหม่ศาลาเฟือง - (3404-56) ศาลาเฟือง=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3404-54"){
        $arrayPostData['messages'][0]['text'] = "LEI000281,(3404-56) ศาลาเฟือง - (3404-54) แก่งมี้=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3404-56"){
          $arrayPostData['messages'][0]['text'] = "LEI000281,(3404-56) ศาลาเฟือง - (3404-54) แก่งมี้=Optic 12 Core DW = 2.4 km.
LEI000282,(3404-53) บ้านใหม่ศาลาเฟือง - (3404-56) ศาลาเฟือง=Optic 12 Core DW = 1.1 km.
LEI000414,(3404-56) บ้านศาลาเฟือง - (3404-92) บ้านหาดทรายขาว=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3404-57"){
        $arrayPostData['messages'][0]['text'] = "LEI000283,(3404-58) ผาพอด - (3404-57) สงเปือย=Optic 12 Core DW = 4.1 km.";
    }
else if($message == "3404-58"){
          $arrayPostData['messages'][0]['text'] = "LEI000213,(3404-37) บ้านห้วยพอด - (3404-58) ผาพอด=Optic 12 Core DW = 4.703 km.
LEI000283,(3404-58) ผาพอด - (3404-57) สงเปือย=Optic 12 Core DW = 4.1 km.";
    }
else if($message == "3404-59"){
          $arrayPostData['messages'][0]['text'] = "LEI000320,(3404-59) ตาดซ้อ - (3404-61) ท่าบม=Optic 12 Core DW = 1.5 km.
LEI000321,(3404-35) นาป่าหนาด - (3404-59) ตาดซ้อ=Optic 12 Core DW = 4 km.";
    }
else if($message == "3404-61"){
        $arrayPostData['messages'][0]['text'] = "LEI000320,(3404-59) ตาดซ้อ - (3404-61) ท่าบม=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3404-62"){
        $arrayPostData['messages'][0]['text'] = "LEI000556,(SJ) เชียงคาน-ปากชม - (3404-62) ต.บุฮม บ้านบุฮม=Optic 12 Core DW = 1.297 km.";
    }
else if($message == "3404-66"){
        $arrayPostData['messages'][0]['text'] = "LEI000421,(3404-66) บ.ห้วยปากคาน - (3404-95) บ.ปากคาน2=Optic 12 Core DW = 1.244 km.";
    }
else if($message == "3404-70"){
        $arrayPostData['messages'][0]['text'] = "LEI000541,(3404-70) บ้านโคกมน - (3403-165) ต.วังสะพุง โคกมน=Optic 12 Core DW = 0.89 km.";
    }
else if($message == "3404-75"){
        $arrayPostData['messages'][0]['text'] = "LEI000422,(3413-61) อ.ท่าลี - (3404-75) บ.สวัสดิ์พัฒนา=Optic 12 Core DW = 3.634 km.";
    }
else if($message == "3404-78"){
          $arrayPostData['messages'][0]['text'] = "LEI000412,(3404-78) บ้านน้ำอ้อม - (3404-94) บ้านหัวแก่ง=Optic 12 Core DW = 3.96 km.
LEI000416,(3404-49) พรหมมานุสรณ์ - (3404-78) บ้านน้ำอ้อม=Optic 12 Core DW = 1.879 km.";
    }
else if($message == "3404-80"){
        $arrayPostData['messages'][0]['text'] = "LEI000415,(3404-42) บ้านนาซ่าว - (3404-80) บ้านใหม่ตาแสง=Optic 12 Core DW = 3.558 km.";
    }
else if($message == "3404-81"){
          $arrayPostData['messages'][0]['text'] = "LEI000373,(3404-81) บ้านน้ำพร - (3404-93) บ้านห้วยสีดา=12 Core= 5.286 km.
LEI000456,(3404-82) ต.ปากตม นาจาน - (3404-81) ต.ปากตม น้ำพร=Optic 12 Core DW = 3.104 km.
LEI000557,(3404-82) ต.ปากตม นาจาน - (3404-81) ต.ปากตม น้ำพร=Optic 12 Core DW = 3.104 km.";
    }
else if($message == "3404-82"){
          $arrayPostData['messages'][0]['text'] = "LEI000456,(3404-82) ต.ปากตม นาจาน - (3404-81) ต.ปากตม น้ำพร=Optic 12 Core DW = 3.104 km.
LEI000557,(3404-82) ต.ปากตม นาจาน - (3404-81) ต.ปากตม น้ำพร=Optic 12 Core DW = 3.104 km.
LEI000558,(3404-83) ต.ปากตม ท่าดีหมี - (3404-82) ต.ปากตม นาจาน=Optic 12 Core DW = 4.526 km.";
    }
else if($message == "3404-83"){
          $arrayPostData['messages'][0]['text'] = "LEI000377,(3405-84) บ้านคกงิ้ว - (3404-83) บ้านท่าดีหมี=12 Core= 5.577 km.
LEI000379,(3404-83) บ้านท่าดีหมี - (3405-82) บ้านนาจาน=Optic 12 Core DW = 4.446 km.
LEI000558,(3404-83) ต.ปากตม ท่าดีหมี - (3404-82) ต.ปากตม นาจาน=Optic 12 Core DW = 4.526 km.";
    }
else if($message == "3404-84"){
        $arrayPostData['messages'][0]['text'] = "LEI000376,(3404-96) บ้านคกมาด - (3404-84) บ้านคกงิ้ว=12 Core= 7.053 km.";
    }
else if($message == "3404-85"){
        $arrayPostData['messages'][0]['text'] = "LEI000374,(3404-41) บ้านนาบอน - (3404-85) บ้านกลาง=12 Core= 8.716 km.";
    }
else if($message == "3404-86"){
          $arrayPostData['messages'][0]['text'] = "LEI000378,(3404-86) บ้านคกเลาเหนือ - (3404-87) บ้านคกเลาใต้=Optic 12 Core DW = 1.93 km.
LEI000559,(SJ) เชียงคาน-ปากชม - (3404-86) ต.บุฮม คกเลาใต้=Optic 12 Core DW = 0.705 km.";
    }
else if($message == "3404-87"){
        $arrayPostData['messages'][0]['text'] = "LEI000378,(3404-86) บ้านคกเลาเหนือ - (3404-87) บ้านคกเลาใต้=Optic 12 Core DW = 1.93 km.";
    }
else if($message == "3404-90"){
        $arrayPostData['messages'][0]['text'] = "LEI000560,(SJ) นาป่าหนาด-พรหมมานุสรณ์ - (3404-90) ต.จอมศรี จอมศรี=Optic 12 Core DW = 1.368 km.";
    }
else if($message == "3404-91"){
        $arrayPostData['messages'][0]['text'] = "LEI000561,(SJ) นาป่าหนาด-พรหมมานุสรณ์ - (3404-91) ต.จอมศรี หินตั้ง=Optic 12 Core DW = 0.874 km.";
    }
else if($message == "3404-92"){
          $arrayPostData['messages'][0]['text'] = "LEI000413,(3404-92) บ้านทรายขาว - (3404-95) บ้านสาระเพ=Optic 12 Core DW = 3.96 km.
LEI000414,(3404-56) บ้านศาลาเฟือง - (3404-92) บ้านหาดทรายขาว=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3404-93"){
        $arrayPostData['messages'][0]['text'] = "LEI000373,(3404-81) บ้านน้ำพร - (3404-93) บ้านห้วยสีดา=12 Core= 5.286 km.";
    }
else if($message == "3404-94"){
        $arrayPostData['messages'][0]['text'] = "LEI000412,(3404-78) บ้านน้ำอ้อม - (3404-94) บ้านหัวแก่ง=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3404-95"){
          $arrayPostData['messages'][0]['text'] = "LEI000413,(3404-92) บ้านทรายขาว - (3404-95) บ้านสาระเพ=Optic 12 Core DW = 3.96 km.
LEI000421,(3404-66) บ.ห้วยปากคาน - (3404-95) บ.ปากคาน2=Optic 12 Core DW = 1.244 km.";
    }
else if($message == "3404-96"){
          $arrayPostData['messages'][0]['text'] = "LEI000370,(3404-41) เชียงคาน - (3404-96) บ้านคกมาด=12 Core= 9.007 km.
LEI000376,(3404-96) บ้านคกมาด - (3404-84) บ้านคกงิ้ว=12 Core= 7.053 km.";
    }
else if($message == "3405-105"){
        $arrayPostData['messages'][0]['text'] = "LEI000562,(3405-62) ปากชม2 - (3405-105) ปากชม3=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3405-106"){
        $arrayPostData['messages'][0]['text'] = "LEI000563,(3405-67) เชียงกลม2 - (3405-106) เชียงกลม3=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3405-107"){
        $arrayPostData['messages'][0]['text'] = "LEI000564,(3405-81) ห้วยบ่อซืน - (3405-107) ต.ห้วยบ่อซืน บ้านเลิง=Optic 12 Core DW = 5.59 km.";
    }
else if($message == "3405-61"){
          $arrayPostData['messages'][0]['text'] = "LEI000214,(3405-64) บ้านคกไผ่ - (3405-61) ปากชม1=Optic 12 Core DW = 4.505 km.
LEI000215,(3405-61) ปากชม1 - (3405-62) ปากชม2=Optic 12 Core DW = 2.2 km.
LEI000251,(3410-43) เชียงคาน - (3405-61) ปากชม=12 Core= 44 km.
LEI000252,(3401-41) เลย - (3405-61) ปากชม=12 Core= 81.573 km.
NKI000259,(3405-61) ME ปากชม - (3208-61) ME สังคม=12 Core= 62.383 km.";
    }
else if($message == "3405-62"){
          $arrayPostData['messages'][0]['text'] = "LEI000215,(3405-61) ปากชม1 - (3405-62) ปากชม2=Optic 12 Core DW = 2.2 km.
LEI000562,(3405-62) ปากชม2 - (3405-105) ปากชม3=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3405-64"){
        $arrayPostData['messages'][0]['text'] = "LEI000214,(3405-64) บ้านคกไผ่ - (3405-61) ปากชม1=Optic 12 Core DW = 4.505 km.";
    }
else if($message == "3405-65"){
        $arrayPostData['messages'][0]['text'] = "LEI000466,(SJ) เลย-ปากชม - (3405-65) บ้านสูบ=Optic 12 Core DW = 4 km.";
    }
else if($message == "3405-66"){
          $arrayPostData['messages'][0]['text'] = "LEI000157,(3405-66) เชียงกลม1 - (3405-72) บ้านโพนทอง=12 Core= 5.356 km.
LEI000216,(3405-66) บ้านเชียงกลม 1 - (3405-67) บ้านเชียงกลม2=Optic 12 Core DW = 0.98 km.
LEI000467,(SJ) เลย-ปากชม - (3405-66) เชียงกลม1=Optic 12 Core DW = 0.96 km.";
    }
else if($message == "3405-67"){
          $arrayPostData['messages'][0]['text'] = "LEI000216,(3405-66) บ้านเชียงกลม 1 - (3405-67) บ้านเชียงกลม2=Optic 12 Core DW = 0.98 km.
LEI000218,(3405-67) บ้านเชียงกลม2 - (3405-82) วังผา=Optic 12 Core DW = 4.505 km.
LEI000563,(3405-67) เชียงกลม2 - (3405-106) เชียงกลม3=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3405-68"){
        $arrayPostData['messages'][0]['text'] = "LEI000468,(SJ) เลย-ปากชม - (3405-68) บ้านนาค้อ=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3405-69"){
          $arrayPostData['messages'][0]['text'] = "LEI000217,(3405-69) บ้านห้วยเป้า - (3405-70) ห้วยเป้าเล็ก=Optic 12 Core DW = 1.981 km.
LEI000336,(3405-69) บ้านห้วยเป้า - (3405-99) บ้านห้วยเทียน=Optic 12 Core DW = 3.531 km.
LEI000469,(SJ) เลย-ปากชม - (3405-69) บ้านห้วยเป้า=Optic 12 Core DW = 2.186 km.";
    }
else if($message == "3405-70"){
          $arrayPostData['messages'][0]['text'] = "LEI000217,(3405-69) บ้านห้วยเป้า - (3405-70) ห้วยเป้าเล็ก=Optic 12 Core DW = 1.981 km.
UDN001525,(3405-70) ห้วยเป้าเล็ก - (3405-84) ซำไฮ=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3405-72"){
          $arrayPostData['messages'][0]['text'] = "LEI000147,(3405-72) บ้านโพนทอง - (3405-73) บ้านคอนสา=12 Core= 5.138 km.
LEI000157,(3405-66) เชียงกลม1 - (3405-72) บ้านโพนทอง=12 Core= 5.356 km.";
    }
else if($message == "3405-73"){
        $arrayPostData['messages'][0]['text'] = "LEI000147,(3405-72) บ้านโพนทอง - (3405-73) บ้านคอนสา=12 Core= 5.138 km.";
    }
else if($message == "3405-75"){
        $arrayPostData['messages'][0]['text'] = "LEI000148,(3405-83) บ้านห้วยนา - (3405-75) บ้านเหมืองทอง=Optic 12 Core DW = 4 km.";
    }
else if($message == "3405-76"){
          $arrayPostData['messages'][0]['text'] = "LEI000292,(3405-77) ห้วยหินขาว - (3405-76) ห้วยพิชัย=Optic 12 Core DW = 4.8 km.
LEI000293,(3405-76) ห้วยพิชัย - (3405-79) โนนสว่าง=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3405-77"){
          $arrayPostData['messages'][0]['text'] = "LEI000291,(3405-83) บ้านห้วยนา - (3405-77) ห้วยหินขาว=Optic 12 Core DW = 5.2 km.
LEI000292,(3405-77) ห้วยหินขาว - (3405-76) ห้วยพิชัย=Optic 12 Core DW = 4.8 km.";
    }
else if($message == "3405-78"){
          $arrayPostData['messages'][0]['text'] = "LEI000294,(SJ) ปากชม-สังคม - (3405-78) สงาว=Optic 12 Core DW = 0.9 km.
LEI000337,(3405-78) บ้านสงาว - (3405-92) บ้านปากปัด=12 Core= 7.08 km.";
    }
else if($message == "3405-79"){
        $arrayPostData['messages'][0]['text'] = "LEI000293,(3405-76) ห้วยพิชัย - (3405-79) โนนสว่าง=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3405-80"){
          $arrayPostData['messages'][0]['text'] = "LEI000149,(3405-81) ห้วยบ่อชื่น - (3405-80) บ้านนานกปีด=12 Core= 6.062 km.
LEI000602,(3405-80) นานกปีด - (3408-77) ภูแผงม้า=12 Core= 11.78 km.";
    }
else if($message == "3405-81"){
          $arrayPostData['messages'][0]['text'] = "LEI000149,(3405-81) ห้วยบ่อชื่น - (3405-80) บ้านนานกปีด=12 Core= 6.062 km.
LEI000150,(3405-82) บ้านวังผา - (3405-81) ห้วยบ่อชื่น=Optic 12 Core DW = 3.495 km.
LEI000564,(3405-81) ห้วยบ่อซืน - (3405-107) ต.ห้วยบ่อซืน บ้านเลิง=Optic 12 Core DW = 5.59 km.";
    }
else if($message == "3405-82"){
          $arrayPostData['messages'][0]['text'] = "LEI000150,(3405-82) บ้านวังผา - (3405-81) ห้วยบ่อชื่น=Optic 12 Core DW = 3.495 km.
LEI000218,(3405-67) บ้านเชียงกลม2 - (3405-82) วังผา=Optic 12 Core DW = 4.505 km.
LEI000379,(3404-83) บ้านท่าดีหมี - (3405-82) บ้านนาจาน=Optic 12 Core DW = 4.446 km.";
    }
else if($message == "3405-83"){
          $arrayPostData['messages'][0]['text'] = "LEI000148,(3405-83) บ้านห้วยนา - (3405-75) บ้านเหมืองทอง=Optic 12 Core DW = 4 km.
LEI000291,(3405-83) บ้านห้วยนา - (3405-77) ห้วยหินขาว=Optic 12 Core DW = 5.2 km.";
    }
else if($message == "3405-84"){
          $arrayPostData['messages'][0]['text'] = "LEI000377,(3405-84) บ้านคกงิ้ว - (3404-83) บ้านท่าดีหมี=12 Core= 5.577 km.
UDN001525,(3405-70) ห้วยเป้าเล็ก - (3405-84) ซำไฮ=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3405-85"){
        $arrayPostData['messages'][0]['text'] = "LEI000438,(3405-85) หาดคัมภีร์ - (3405-87) ปากมั่ง=Optic 12 Core DW = 1.761 km.";
    }
else if($message == "3405-86"){
        $arrayPostData['messages'][0]['text'] = "LEI000439,(3405-87) ปากมั่ง - (3405-86) นาโม้=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3405-87"){
          $arrayPostData['messages'][0]['text'] = "LEI000419,(3405-87) บ้านปากมั่ง - (3405-93) บ้านห้วยทับช้าง=Optic 12 Core DW = 2.041 km.
LEI000438,(3405-85) หาดคัมภีร์ - (3405-87) ปากมั่ง=Optic 12 Core DW = 1.761 km.
LEI000439,(3405-87) ปากมั่ง - (3405-86) นาโม้=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3405-88"){
        $arrayPostData['messages'][0]['text'] = "LEI000565,(SJ) ปากชม-สังคม - (3405-88) ต.หาดคัมภีร์ คกเว้า=Optic 12 Core DW = 1.762 km.";
    }
else if($message == "3405-89"){
        $arrayPostData['messages'][0]['text'] = "LEI000566,(SJ) ปากชม-สังคม - (3405-89) ต.หาดคัมภีร์ ห้วยขอบ=Optic 12 Core DW = 1.156 km.";
    }
else if($message == "3405-90"){
        $arrayPostData['messages'][0]['text'] = "LEI000567,(SJ) ปากชม-สังคม - (3405-90) ต.หาดคัมภีร์ ห้วยเนียม=Optic 12 Core DW = 1.082 km.";
    }
else if($message == "3405-91"){
        $arrayPostData['messages'][0]['text'] = "LEI000568,(SJ) ปากชม-สังคม - (3405-91) ต.ห้วยบ่อซืน ปากเนียม=Optic 12 Core DW = 0.625 km.";
    }
else if($message == "3405-92"){
        $arrayPostData['messages'][0]['text'] = "LEI000337,(3405-78) บ้านสงาว - (3405-92) บ้านปากปัด=12 Core= 7.08 km.";
    }
else if($message == "3405-93"){
        $arrayPostData['messages'][0]['text'] = "LEI000419,(3405-87) บ้านปากมั่ง - (3405-93) บ้านห้วยทับช้าง=Optic 12 Core DW = 2.041 km.";
    }
else if($message == "3405-94"){
        $arrayPostData['messages'][0]['text'] = "LEI000569,(3405-95) ห้วยอาลัย - (3405-94) ต.ชมเจริญ แก่งปลาปก=12 Core= 8.043 km.";
    }
else if($message == "3405-95"){
          $arrayPostData['messages'][0]['text'] = "LEI000418,(3405-96) บ้านชมน้อย - (3405-95) บ้านห้วยอาลัย=12 Core= 6.22 km.
LEI000569,(3405-95) ห้วยอาลัย - (3405-94) ต.ชมเจริญ แก่งปลาปก=12 Core= 8.043 km.";
    }
else if($message == "3405-96"){
          $arrayPostData['messages'][0]['text'] = "LEI000418,(3405-96) บ้านชมน้อย - (3405-95) บ้านห้วยอาลัย=12 Core= 6.22 km.
LEI000570,(SJ) เลย-ปากชม - (3405-96) ต.ชมเจริญ ชมน้อย=Optic 12 Core DW = 0.304 km.";
    }
else if($message == "3405-97"){
        $arrayPostData['messages'][0]['text'] = "LEI000417,(3405-97) บ้านชมเจริญ - (3405-97) บ้านชมเจริญ=Optic 12 Core DW = 2.926 km.";
    }
else if($message == "3405-98"){
        $arrayPostData['messages'][0]['text'] = "LEI000571,(SJ) เชียงคาน-ปากชม - (3405-98) ต.ปากชม หาดเบี้ย=Optic 12 Core DW = 0.701 km.";
    }
else if($message == "3405-99"){
        $arrayPostData['messages'][0]['text'] = "LEI000336,(3405-69) บ้านห้วยเป้า - (3405-99) บ้านห้วยเทียน=Optic 12 Core DW = 3.531 km.";
    }
else if($message == "3406-101"){
        $arrayPostData['messages'][0]['text'] = "LEI000572,(3406-67) กกโพธิ์แสนเอี้ยม - (3406-101) กกโพธิ์ริมน้ำสาน=Optic 12 Core DW = 1.358 km.";
    }
else if($message == "3406-105"){
        $arrayPostData['messages'][0]['text'] = "LEI000573,(3406-69) บ้านแก่ง - (3406-105) ปลาบ่า=12 Core= 5.78 km.";
    }
else if($message == "3406-61"){
          $arrayPostData['messages'][0]['text'] = "LEI000125,(3401-31) เอกธานี - (ME3406-61) ME ภูเรือ=12 Core= 52.1 km.
LEI000242,(3406-61) ภูเรือ - (3402-61) ด่านซ้าย=12 Core= 34.45 km.
LEI000470,(3406-61) ME ภูเรือ - (3406-64) บ้านหนองบง=Optic 12 Core DW = 4.577 km.";
    }
else if($message == "3406-62"){
          $arrayPostData['messages'][0]['text'] = "LEI000126,(3806-61) ME ภูเรือ - (3406-62) ภูเรือ 2 (รพ)=Optic 12 Core DW = 0.67 km.
LEI000256,(3406-62) ภูเรือ2 - (3406-67) กกโพธิ์แสนเอี่ยม=12 Core= 8.2 km.
LEI000581,(3406-62) ภูเรือ 2 (รพ) - (3406-79) ต.หนองบัว ป่าจันตม=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3406-63"){
        $arrayPostData['messages'][0]['text'] = "LEI000127,(3806-61) ME ภูเรือ - (3406-63) ภูเรือ 3=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3406-64"){
        $arrayPostData['messages'][0]['text'] = "LEI000470,(3406-61) ME ภูเรือ - (3406-64) บ้านหนองบง=Optic 12 Core DW = 4.577 km.";
    }
else if($message == "3406-65"){
        $arrayPostData['messages'][0]['text'] = "LEI000151,(SJ) เลย-ภูเรือ - (3406-65) หนองแซง=Optic 12 Core DW = 2.353 km.";
    }
else if($message == "3406-66"){
        $arrayPostData['messages'][0]['text'] = "LEI000574,(3413-61) ท่าลี่1 - (3406-66) วัดโพธิ์ศรี=Optic 12 Core DW = 0.725 km.";
    }
else if($message == "3406-67"){
          $arrayPostData['messages'][0]['text'] = "LEI000256,(3406-62) ภูเรือ2 - (3406-67) กกโพธิ์แสนเอี่ยม=12 Core= 8.2 km.
LEI000572,(3406-67) กกโพธิ์แสนเอี้ยม - (3406-101) กกโพธิ์ริมน้ำสาน=Optic 12 Core DW = 1.358 km";
    }
else if($message == "3406-68"){
          $arrayPostData['messages'][0]['text'] = "LEI000575,(SJ) เอกธานี-ภูเรือ - (3406-68) โคนผง=Optic 12 Core DW = 4 km.
LEI000589,(3406-68) โคนผง - (3406-93) ต.สานตม ม่วงไข่=Optic 12 Core DW = 2.409 km.";
    }
else if($message == "3406-69"){
          $arrayPostData['messages'][0]['text'] = "LEI000455,(3406-69) บ้านแก่ง - (SJ) SJ=Optic 12 Core DW = 1.76 km.
LEI000573,(3406-69) บ้านแก่ง - (3406-105) ปลาบ่า=12 Core= 5.78 km.";
    }
else if($message == "3406-72"){
        $arrayPostData['messages'][0]['text'] = "LEI000330,(3402-63) โคกงาม - (3406-72) บ้านท่ามะนาว=Optic 12 Core DW = 8.891 km.";
    }
else if($message == "3406-73"){
        $arrayPostData['messages'][0]['text'] = "LEI000576,(3406-75) ต.ท่าศาลา สำราญ - (3406-73) ต.ท่าศาลา โนนสว่าง=Optic 12 Core DW = 3.194 km.";
    }
else if($message == "3406-75"){
          $arrayPostData['messages'][0]['text'] = "LEI000576,(3406-75) ต.ท่าศาลา สำราญ - (3406-73) ต.ท่าศาลา โนนสว่าง=Optic 12 Core DW = 3.194 km.
LEI000577,(3406-76) ต.ท่าศาลา ท่าศาลา - (3406-75) ต.ท่าศาลา สำราญ=Optic 12 Core DW = 1.421 km.";
    }
else if($message == "3406-76"){
          $arrayPostData['messages'][0]['text'] = "LEI000577,(3406-76) ต.ท่าศาลา ท่าศาลา - (3406-75) ต.ท่าศาลา สำราญ=Optic 12 Core DW = 1.421 km.
LEI000578,(SJ) เอกธานี-ภูเรือ - (3406-76) ต.ท่าศาลา ท่าศาลา=Optic 12 Core DW = 3.554 km.
LEI000579,(3406-76) ต.ท่าศาลา ท่าศาลา - (3406-77) ต.ท่าศาลา แก่งม่วง=12 Core= 7.028 km.";
    }
else if($message == "3406-77"){
          $arrayPostData['messages'][0]['text'] = "LEI000579,(3406-76) ต.ท่าศาลา ท่าศาลา - (3406-77) ต.ท่าศาลา แก่งม่วง=12 Core= 7.028 km.
LEI000580,(3406-77) ต.ท่าศาลา แก่งม่วง - (3406-78) ต.ท่าศาลา นาน้อย=Optic 12 Core DW = 1.196 km.";
    }
else if($message == "3406-78"){
        $arrayPostData['messages'][0]['text'] = "LEI000580,(3406-77) ต.ท่าศาลา แก่งม่วง - (3406-78) ต.ท่าศาลา นาน้อย=Optic 12 Core DW = 1.196 km.";
    }
else if($message == "3406-79"){
          $arrayPostData['messages'][0]['text'] = "LEI000581,(3406-62) ภูเรือ 2 (รพ) - (3406-79) ต.หนองบัว ป่าจันตม=Optic 12 Core DW = 1.8 km.
LEI000582,(3406-79) ต.หนองบัว ป่าจันตม - (3406-80) ต.หนองบัว สันติสุข=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3406-80"){
          $arrayPostData['messages'][0]['text'] = "LEI000582,(3406-79) ต.หนองบัว ป่าจันตม - (3406-80) ต.หนองบัว สันติสุข=Optic 12 Core DW = 2.2 km.
LEI000586,(3406-80) ต.หนองบัว สันติสุข - (SJ) บ้านแก่งเกลี้ยง=Optic 12 Core DW = 6.572 km.";
    }
else if($message == "3406-85"){
        $arrayPostData['messages'][0]['text'] = "LEI000583,(SJ) บ้านห้วยผักเน่า - (3406-85) ต.ปลาบ่า ลาดค่าง=Optic 12 Core DW = 4 km.";
    }
else if($message == "3406-90"){
        $arrayPostData['messages'][0]['text'] = "LEI000587,(SJ) เอกธานี-ภูเรือ - (3406-90) ต.สานตม สานตม=Optic 12 Core DW = 1.742 km.";
    }
else if($message == "3406-92"){
        $arrayPostData['messages'][0]['text'] = "LEI000588,(SJ) เอกธานี-ภูเรือ - (3406-92) ต.สานตม โนนสมบูรณ์=Optic 12 Core DW = 1.591 km.";
    }
else if($message == "3406-93"){
        $arrayPostData['messages'][0]['text'] = "LEI000589,(3406-68) โคนผง - (3406-93) ต.สานตม ม่วงไข่=Optic 12 Core DW = 2.409 km.";
    }
else if($message == "3406-94"){
        $arrayPostData['messages'][0]['text'] = "LEI000590,(SJ) เอกธานี-ภูเรือ - (3406-94) ต.สานตม ห้วยลาด=Optic 12 Core DW = 2.213 km.";
    }
else if($message == "3406-98"){
          $arrayPostData['messages'][0]['text'] = "LEI000591,(SJ) ภูเรือ-ด่านซ้าย - (3406-98) ต.ร่องจิก โนนแสงแก้ว=Optic 12 Core DW = 0.558 km.
LEI000592,(3406-98) ต.ร่องจิก โนนแสงแก้ว - (SJ) ต.ร่องจิก บ้านแก่งแล่น=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3407-37"){
          $arrayPostData['messages'][0]['text'] = "LEI000059,(3401-31) ME วังสะพุง - (3407-37) เอราวัณ1=12 Core= 26 km.
LEI000060,(3407-37) เอราวัณ1 - (3407-38) เอราวัณ2=Optic 12 Core DW = 0.398 km.
LEI000061,(3407-37) เอราวัณ1 - (3411-37) เอรวัณ3=Optic 12 Core DW = 1.514 km.
LEI000275,(3407-37) เอราวัณ1 - (3411-38) เอราวัณ4=Optic 12 Core DW = 0.875 km.
LEI000472,(SJ) ท่าสวรรค์ - (3407-37) เอราวัณ 1=12 Core= 14.031 km.
LEI000599,(3407-37) เอราวัณ1 - (3407-70) ต.เอราวัณ เอราวัณ6=Optic 12 Core DW = 1.289 km.
LEI000600,(3407-37) เอราวัณ1 - (3407-71) เอราวัณ 7=Optic 12 Core DW = 1.09 km.";
    }
else if($message == "3407-37 "){
        $arrayPostData['messages'][0]['text'] = "NLP000019,(3407-37 ) เอราวัณ1  - (3140-39) บ้านไทยนิยม=12 Core= 13.9 km.";
    }
else if($message == "3407-38"){
        $arrayPostData['messages'][0]['text'] = "NLP000019,(3407-37 ) เอราวัณ1  - (3140-39) บ้านไทยนิยม=12 Core= 13.9 km.";
    }
else if($message == "3407-42"){
          $arrayPostData['messages'][0]['text'] = "LEI000448,(3407-38) เอราวัณ 2 - (3407-42) บ้านซำทอง=Optic 12 Core DW = 6.52 km.
LEI000593,(3411-82) ต.นามาลา นาปูน - (3407-42) ต.ผาอินทร์แปลง ซำทอง=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3407-43"){
        $arrayPostData['messages'][0]['text'] = "LEI000594,(SJ) เอราวัณ2-ห้วยป่าน - (3407-43) ต.ผาอินทร์แปลง ผาซำบอน=12 Core= 1.02 km.";
    }
else if($message == "3407-66"){
        $arrayPostData['messages'][0]['text'] = "LEI000595,(3411-41) โป่งศรีโทน - (3407-66) โป่งศรีโทน2=Optic 12 Core DW = 1.14 km.";
    }
else if($message == "3407-67"){
        $arrayPostData['messages'][0]['text'] = "LEI000596,(3411-54) ทรัพย์เจริญ - (3407-67) ต.ผาอินทร์แปลง ดงนกกก=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3407-68"){
        $arrayPostData['messages'][0]['text'] = "LEI000597,(3411-44) ห้วยป่าน - (3407-68) ต.ผาสามยอด โคกอีโต้น=Optic 12 Core DW = 2.003 km.";
    }
else if($message == "3407-69"){
        $arrayPostData['messages'][0]['text'] = "LEI000598,(3407-38) เอราวัณ2 - (3407-69) ต.เอราวัณ เอราวัณ5=Optic 12 Core DW = 1.001 km.";
    }
else if($message == "3407-70"){
        $arrayPostData['messages'][0]['text'] = "LEI000599,(3407-37) เอราวัณ1 - (3407-70) ต.เอราวัณ เอราวัณ6=Optic 12 Core DW = 1.289 km.";
    }
else if($message == "3407-71"){
        $arrayPostData['messages'][0]['text'] = "LEI000600,(3407-37) เอราวัณ1 - (3407-71) เอราวัณ 7=Optic 12 Core DW = 1.09 km.";
    }
else if($message == "3408-61"){
          $arrayPostData['messages'][0]['text'] = "LEI000158,(3408-61) นาด้วง1 - (3408-67) บ้านนาดอกคำ=12 Core= 7.254 km.
LEI000219,(3408-61) นาด้วง1 - (3408-62) นาด้วง2=Optic 12 Core DW = 1.27 km.
LEI000220,(3408-61) นาด้วง1 - (3408-64) นาด้วง3 (ไปรณีย์)=Optic 12 Core DW = 1.7 km.
LEI000253,(3401-41) เลย - (3408-61) นาด้วง=12 Core= 35.113 km.
LEI000331,(3408-61) นาด้วง - (3408-81) บ้านโพนเขาแก้ว=Optic 12 Core DW = 1.16 km.
LEI000604,(3408-61) นาด้วง1 - (SJ) แก้วเมธี=Optic 12 Core DW = 1.93 km.
NPL000120,(3408-61) ME นาด้วง - (3140-38) ME นาวัง=12 Core= 28.024 km.";
    }
else if($message == "3408-62"){
        $arrayPostData['messages'][0]['text'] = "LEI000219,(3408-61) นาด้วง1 - (3408-62) นาด้วง2=Optic 12 Core DW = 1.27 km.";
    }
else if($message == "3408-63"){
          $arrayPostData['messages'][0]['text'] = "LEI000272,(SJ) SJ บ้านท่าสะอาด - (3408-63) บ้านท่าสะอาด=Optic 12 Core DW = 0.613 km.
LEI000341,(3408-63) บ้านท่าสะอาด - (3408-84) บ้านซำป่าซาง=Optic 12 Core DW = 1.26 km.
LEI000355,(3408-63) บ้านท่าสะอาด - (3408-70) บ้านโพนสว่าง=12 Core= 6.36 km.";
    }
else if($message == "3408-64"){
        $arrayPostData['messages'][0]['text'] = "LEI000220,(3408-61) นาด้วง1 - (3408-64) นาด้วง3 (ไปรณีย์)=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3408-66"){
          $arrayPostData['messages'][0]['text'] = "LEI000144,(3408-66) ท่าสวรรค์ - (3401-159) บ้านทรัพย์มงคล=Optic 12 Core DW = 5.34 km.
LEI000159,(3408-66) ท่าสวรรค์ - (3408-68) ท่าสวรรค์2=Optic 12 Core DW = 1.163 km.
LEI000221,(3408-66) ท่าสวรรค์ - (3409-69) หนองเขียด=Optic 12 Core DW = 2 km.
LEI000471,(SJ) ท่าสวรรค์-เอราวัณ - (3408-66) ท่าสวรรค์=12 Core= 5.897 km.";
    }
else if($message == "3408-67"){
          $arrayPostData['messages'][0]['text'] = "LEI000158,(3408-61) นาด้วง1 - (3408-67) บ้านนาดอกคำ=12 Core= 7.254 km.
LEI000606,(3408-67) นาดอกคำ - (3408-82) ต.นาดอกคำ เขาแก้วพัฒนา=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3408-68"){
        $arrayPostData['messages'][0]['text'] = "LEI000159,(3408-66) ท่าสวรรค์ - (3408-68) ท่าสวรรค์2=Optic 12 Core DW = 1.163 km.";
    }
else if($message == "3408-69"){
        $arrayPostData['messages'][0]['text'] = "LEI000267,(SJ) SJ ปากชม-เชียงกลม - (3408-69) ปางคอม=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3408-70"){
          $arrayPostData['messages'][0]['text'] = "LEI000351,(3408-70) บ้านโพนสว่าง - (3408-71) บ้านห้วยตาด=12 Core= 6.6 km.
LEI000355,(3408-63) บ้านท่าสะอาด - (3408-70) บ้านโพนสว่าง=12 Core= 6.36 km.";
    }
else if($message == "3408-71"){
        $arrayPostData['messages'][0]['text'] = "LEI000351,(3408-70) บ้านโพนสว่าง - (3408-71) บ้านห้วยตาด=12 Core= 6.6 km.";
    }
else if($message == "3408-73"){
          $arrayPostData['messages'][0]['text'] = "LEI000352,(3408-73) บ้านร่มเย็น - (3411-53) บ้านเหล่าใหญ่=Optic 12 Core DW = 2.33 km.
LEI000601,(3408-77) ภูแผงม้า - (3408-73) ร่มเย็น=Optic 12 Core DW = 2.37 km.";
    }
else if($message == "3408-77"){
          $arrayPostData['messages'][0]['text'] = "LEI000601,(3408-77) ภูแผงม้า - (3408-73) ร่มเย็น=Optic 12 Core DW = 2.37 km.
LEI000602,(3405-80) นานกปีด - (3408-77) ภูแผงม้า=12 Core= 11.78 km.";
    }
else if($message == "3408-78"){
        $arrayPostData['messages'][0]['text'] = "LEI000603,(SJ) แก้วเมธี - (3408-78) หนองแคน=12 Core= 9.4 km.";
    }
else if($message == "3408-81"){
        $arrayPostData['messages'][0]['text'] = "LEI000331,(3408-61) นาด้วง - (3408-81) บ้านโพนเขาแก้ว=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3408-82"){
        $arrayPostData['messages'][0]['text'] = "LEI000606,(3408-67) นาดอกคำ - (3408-82) ต.นาดอกคำ เขาแก้วพัฒนา=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3408-84"){
        $arrayPostData['messages'][0]['text'] = "LEI000341,(3408-63) บ้านท่าสะอาด - (3408-84) บ้านซำป่าซาง=Optic 12 Core DW = 1.26 km.";
    }
else if($message == "3408-86"){
        $arrayPostData['messages'][0]['text'] = "LEI000607,(SJ) โพนสว่าง-ท่าสะอาด - (3408-86) ต.ท่าสะอาด น้ำสวยภักดี=Optic 12 Core DW = 1.22 km.";
    }
else if($message == "3409-101"){
        $arrayPostData['messages'][0]['text'] = "LEI000608,(3409-72) ต.แก่งศรีภูมิ บ้านแก่งศรีภูมิ - (3409-101) ต.ภูหอ บ้านแก่งศรีภูมิ2=Optic 12 Core DW = 1.05 km.";
    }
else if($message == "3409-66"){
        $arrayPostData['messages'][0]['text'] = "LEI000273,(3409-68) ที่ว่าการอำเภอภูหลวง - (3409-66) บ้านหนองเก้ง=Optic 12 Core DW = 2.36 km.";
    }
else if($message == "3409-67"){
          $arrayPostData['messages'][0]['text'] = "LEI000274,(SJ) SJ บ้านหนองคัน - (3409-67) บ้านหนองคัน=Optic 12 Core DW = 0.57 km.
LEI000390,(3409-67) บ้านหนองคัน - (3409-77) บ้านดอนหอ=Optic 12 Core DW = 1.226 km.
LEI000391,(3409-67) บ้านหนองคัน - (3409-74) บ้านแก่งบง=Optic 12 Core DW = 0.915 km.
LEI000612,(3409-67) หนองคัน - (3409-78) ต.หนองคัน ห้วยหอม=Optic 12 Core DW = 1.385 km.";
    }
else if($message == "3409-68"){
          $arrayPostData['messages'][0]['text'] = "LEI000247,(3403-33) วังสะพุง - (3409-68) ภูหลวง=12 Core= 26.599 km.
LEI000248,(3409-68) ภูหลวง - (3412-37) หนองหิน=12 Core= 28.26 km.
LEI000273,(3409-68) ที่ว่าการอำเภอภูหลวง - (3409-66) บ้านหนองเก้ง=Optic 12 Core DW = 2.36 km.
LEI000333,(3409-68) อ.ภูหลวง - (3409-75) บ้านอุ่มมะนาว=Optic 12 Core DW = 1.075 km.";
    }
else if($message == "3409-69"){
          $arrayPostData['messages'][0]['text'] = "LEI000221,(3408-66) ท่าสวรรค์ - (3409-69) หนองเขียด=Optic 12 Core DW = 2 km.
LEI000222,(3409-69) หนองเขียด - (3409-70) บ้านหนองบัว=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3409-70"){
          $arrayPostData['messages'][0]['text'] = "LEI000222,(3409-69) หนองเขียด - (3409-70) บ้านหนองบัว=Optic 12 Core DW = 2.9 km.
LEI000382,(3409-70) บ้านหนองบัว - (3409-91) บ้านน้ำคู่=Optic 12 Core DW = 2.503 km.
LEI000615,(3409-70) บ้านหนองบัว - (3409-99) บ้านหนองบัว2=Optic 12 Core DW = 0.945 km.";
    }
else if($message == "3409-71"){
          $arrayPostData['messages'][0]['text'] = "LEI000306,(3409-71) ห้วยสีเสียด - (3409-73) นามูลตุ่น=Optic 12 Core DW = 5.232 km.
LEI000387,(3409-71) บ้านห้วยสีเสียด - (3409-79) บ้านทรัพย์เจริญ=Optic 12 Core DW = 4.8 km.
LEI000609,(SJ) ภูหลวง-หนองหิน - (3409-71) ต.ห้วยสีเสียด บ้านห้วยสีเสียด=Optic 12 Core DW = 0.785 km.";
    }
else if($message == "3409-72"){
          $arrayPostData['messages'][0]['text'] = "LEI000386,(3409-72) บ้านแก่งศรีภูมิ - (3409-85) บ้านสวนปอ=Optic 12 Core DW = 5.878 km.
LEI000608,(3409-72) ต.แก่งศรีภูมิ บ้านแก่งศรีภูมิ - (3409-101) ต.ภูหอ บ้านแก่งศรีภูมิ2=Optic 12 Core DW = 1.05 km.
LEI000610,(SJ) ภูหลวง-หนองหิน - (3409-72) ต.แก่งศรีภูมิ บ้านแก่งศรีภูมิ=12 Core= 8 km.";
    }
else if($message == "3409-73"){
        $arrayPostData['messages'][0]['text'] = "LEI000306,(3409-71) ห้วยสีเสียด - (3409-73) นามูลตุ่น=Optic 12 Core DW = 5.232 km.";
    }
else if($message == "3409-74"){
        $arrayPostData['messages'][0]['text'] = "LEI000391,(3409-67) บ้านหนองคัน - (3409-74) บ้านแก่งบง=Optic 12 Core DW = 0.915 km.";
    }
else if($message == "3409-75"){
        $arrayPostData['messages'][0]['text'] = "LEI000333,(3409-68) อ.ภูหลวง - (3409-75) บ้านอุ่มมะนาว=Optic 12 Core DW = 1.075 km.";
    }
else if($message == "3409-76"){
          $arrayPostData['messages'][0]['text'] = "LEI000389,(3409-76) บ้านหนองเอี่ยน - (3409-86) บ้านนาโพธิ์=Optic 12 Core DW = 3.488 km.
LEI000611,(3409-77) บ้านดอนหอ - (3409-76) ต.หนองคัน หนองเอี่ยน=Optic 12 Core DW = 1.616 km.
LEI000614,(3409-76) ต.หนองคัน หนองเอี่ยน - (3409-89) ต.ภูหอ บ้านนาโพธิ์=Optic 12 Core DW = 3.528 km.";
    }
else if($message == "3409-77"){
          $arrayPostData['messages'][0]['text'] = "LEI000390,(3409-67) บ้านหนองคัน - (3409-77) บ้านดอนหอ=Optic 12 Core DW = 1.226 km.
LEI000611,(3409-77) บ้านดอนหอ - (3409-76) ต.หนองคัน หนองเอี่ยน=Optic 12 Core DW = 1.616 km.";
    }
else if($message == "3409-78"){
        $arrayPostData['messages'][0]['text'] = "LEI000612,(3409-67) หนองคัน - (3409-78) ต.หนองคัน ห้วยหอม=Optic 12 Core DW = 1.385 km.";
    }
else if($message == "3409-79"){
        $arrayPostData['messages'][0]['text'] = "LEI000387,(3409-71) บ้านห้วยสีเสียด - (3409-79) บ้านทรัพย์เจริญ=Optic 12 Core DW = 4.8 km.";
    }
else if($message == "3409-81"){
          $arrayPostData['messages'][0]['text'] = "LEI000380,(3409-84) บ้านเลยวงไสย์ - (3409-81) บ้านเลยตาดดาว=Optic 12 Core DW = 5.755 km.
LEI000384,(3409-81) บ้านเลยตาดดาว - (3409-82) บ้านโนนพัฒนา=Optic 12 Core DW = 1.061 km.";
    }
else if($message == "3409-82"){
        $arrayPostData['messages'][0]['text'] = "LEI000384,(3409-81) บ้านเลยตาดดาว - (3409-82) บ้านโนนพัฒนา=Optic 12 Core DW = 1.061 km.";
    }
else if($message == "3409-83"){
          $arrayPostData['messages'][0]['text'] = "LEI000383,(3409-91) บ้านน้ำคู่ - (3409-83) บ้านโคกหนองแห้ว=12 Core= 13.141 km.
LEI000385,(3409-83) บ้านโคกหนองแห้ว - (3409-84) บ้านเลยวังไสย์=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3409-84"){
          $arrayPostData['messages'][0]['text'] = "LEI000380,(3409-84) บ้านเลยวงไสย์ - (3409-81) บ้านเลยตาดดาว=Optic 12 Core DW = 5.755 km.
LEI000385,(3409-83) บ้านโคกหนองแห้ว - (3409-84) บ้านเลยวังไสย์=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3409-85"){
        $arrayPostData['messages'][0]['text'] = "LEI000386,(3409-72) บ้านแก่งศรีภูมิ - (3409-85) บ้านสวนปอ=Optic 12 Core DW = 5.878 km.";
    }
else if($message == "3409-86"){
        $arrayPostData['messages'][0]['text'] = "LEI000389,(3409-76) บ้านหนองเอี่ยน - (3409-86) บ้านนาโพธิ์=Optic 12 Core DW = 3.488 km.";
    }
else if($message == "3409-87"){
        $arrayPostData['messages'][0]['text'] = "LEI000388,(3409-88) บ้านฟากเลย - (3409-87) บ้านเทพนิมิตร=Optic 12 Core DW = 1.965 km.";
    }
else if($message == "3409-88"){
          $arrayPostData['messages'][0]['text'] = "LEI000388,(3409-88) บ้านฟากเลย - (3409-87) บ้านเทพนิมิตร=Optic 12 Core DW = 1.965 km.
LEI000613,(SJ) ภูหลวงหนองหิน-แก่งศรีภูมิ - (3409-88) ต.แก่งศรีภูมิ ฟากเลย=Optic 12 Core DW = 0.554 km.";
    }
else if($message == "3409-89"){
          $arrayPostData['messages'][0]['text'] = "LEI000381,(3409-89) บ้านนาโพธิ์ - (3409-90) บ้านนาฝาย=Optic 12 Core DW = 1.648 km.
LEI000614,(3409-76) ต.หนองคัน หนองเอี่ยน - (3409-89) ต.ภูหอ บ้านนาโพธิ์=Optic 12 Core DW = 3.528 km.";
    }
else if($message == "3409-90"){
        $arrayPostData['messages'][0]['text'] = "LEI000381,(3409-89) บ้านนาโพธิ์ - (3409-90) บ้านนาฝาย=Optic 12 Core DW = 1.648 km.";
    }
else if($message == "3409-91"){
          $arrayPostData['messages'][0]['text'] = "LEI000382,(3409-70) บ้านหนองบัว - (3409-91) บ้านน้ำคู่=Optic 12 Core DW = 2.503 km.
LEI000383,(3409-91) บ้านน้ำคู่ - (3409-83) บ้านโคกหนองแห้ว=12 Core= 13.141 km.";
    }
else if($message == "3409-99"){
        $arrayPostData['messages'][0]['text'] = "LEI000615,(3409-70) บ้านหนองบัว - (3409-99) บ้านหนองบัว2=Optic 12 Core DW = 0.945 km.";
    }
else if($message == "3410-101"){
        $arrayPostData['messages'][0]['text'] = "LEI000429,(3410-102) บ้านสันติภาพ - (3410-101) บ้านโนนสว่าง=Optic 12 Core DW = 1.89 km.";
    }
else if($message == "3410-102"){
          $arrayPostData['messages'][0]['text'] = "LEI000427,(3410-103) บ้านโนนป่าซาง - (3410-102) บ้านสันติภาพ=Optic 12 Core DW = 1.3 km.
LEI000429,(3410-102) บ้านสันติภาพ - (3410-101) บ้านโนนสว่าง=Optic 12 Core DW = 1.89 km.";
    }
else if($message == "3410-103"){
          $arrayPostData['messages'][0]['text'] = "LEI000426,(3410-106) ห้วยยาง - (3410-103) บ้านโนนป่าซาง=12 Core= 5.05 km.
LEI000427,(3410-103) บ้านโนนป่าซาง - (3410-102) บ้านสันติภาพ=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3410-104"){
        $arrayPostData['messages'][0]['text'] = "LEI000425,(3411-57) ผาสามยอด - (3410-104) บ้านห้วยไฮ=Optic 12 Core DW = 3.45 km.";
    }
else if($message == "3410-105"){
        $arrayPostData['messages'][0]['text'] = "LEI000424,(3410-62) โนนปอแดง - (3410-105) บ้านห้วยเดื่อเหนือ=Optic 12 Core DW = 3 km.";
    }
else if($message == "3410-106"){
          $arrayPostData['messages'][0]['text'] = "LEI000423,(3410-87) ทวยเด้ง - (3410-106) บ้านห้วยยาง=Optic 12 Core DW = 5.12 km.
LEI000426,(3410-106) ห้วยยาง - (3410-103) บ้านโนนป่าซาง=12 Core= 5.05 km.
NLP000410,(3410-106) ห้วยยาง - (3104-131) ต.หนองกุงแก้ว คอกวัว=Optic 12 Core DW = 1.488 km.";
    }
else if($message == "3410-115"){
        $arrayPostData['messages'][0]['text'] = "LEI000616,(3410-61) ผาขาว - (3410-115) ต.ผาขาว ผาขาว 2=Optic 12 Core DW = 1.675 km.";
    }
else if($message == "3410-117"){
        $arrayPostData['messages'][0]['text'] = "LEI000617,(3410-98) ต.ท่าช้างคล้อง หนองแต้ - (3410-117) บ้านหนองโก=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3410-43"){
        $arrayPostData['messages'][0]['text'] = "LEI000251,(3410-43) เชียงคาน - (3405-61) ปากชม=12 Core= 44 km.";
    }
else if($message == "3410-61"){
          $arrayPostData['messages'][0]['text'] = "LEI000223,(3410-61) ผาขาว - (3410-62) โนนปอแดง=Optic 12 Core DW = 1.525 km.
LEI000225,(3410-61) ผาขาว - (3410-64) นาล้อม=Optic 12 Core DW = 1.406 km.
LEI000249,(3412-37) หนองหิน - (3410-61) ผาขาว=12 Core= 31.41 km.
LEI000250,(3410-61) ผาขาว - (3412-37) หนองหิน=12 Core= 21.256 km.
LEI000295,(3410-61) ผาขาว - (3410-65) ท่าสวนยา=Optic 12 Core DW = 1.1 km.
LEI000616,(3410-61) ผาขาว - (3410-115) ต.ผาขาว ผาขาว 2=Optic 12 Core DW = 1.675 km.";
    }
else if($message == "3410-62"){
          $arrayPostData['messages'][0]['text'] = "LEI000223,(3410-61) ผาขาว - (3410-62) โนนปอแดง=Optic 12 Core DW = 1.525 km.
LEI000224,(3410-62) โนนปอแดง - (3410-63) หนองอีเปี้ย=Optic 12 Core DW = 4 km.
LEI000424,(3410-62) โนนปอแดง - (3410-105) บ้านห้วยเดื่อเหนือ=Optic 12 Core DW = 3 km.";
    }
else if($message == "3410-63"){
          $arrayPostData['messages'][0]['text'] = "LEI000224,(3410-62) โนนปอแดง - (3410-63) หนองอีเปี้ย=Optic 12 Core DW = 4 km.
LEI000356,(3410-63) บ้านหนองอีเปี้ย - (3410-90) ต.ท่าช้างคล้อง หนองตานา=Optic 12 Core DW = 1.31 km.";
    }
else if($message == "3410-64"){
        $arrayPostData['messages'][0]['text'] = "LEI000225,(3410-61) ผาขาว - (3410-64) นาล้อม=Optic 12 Core DW = 1.406 km.";
    }
else if($message == "3410-65"){
          $arrayPostData['messages'][0]['text'] = "LEI000295,(3410-61) ผาขาว - (3410-65) ท่าสวนยา=Optic 12 Core DW = 1.1 km.
LEI000296,(3410-65) ท่าสวนยา - (3410-67) ห้วยไคร้=Optic 12 Core DW = 7.93 km.
LEI000300,(3410-65) ท่าสวนยา - (3410-66) โนนกกข่า=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3410-66"){
          $arrayPostData['messages'][0]['text'] = "LEI000300,(3410-65) ท่าสวนยา - (3410-66) โนนกกข่า=Optic 12 Core DW = 1.6 km.
LEI000367,(3410-66) บ้านโนนกกข่า - (3410-85) ต.ผาขาว หัวฝาย=Optic 12 Core DW = 2.45 km.";
    }
else if($message == "3410-67"){
          $arrayPostData['messages'][0]['text'] = "LEI000296,(3410-65) ท่าสวนยา - (3410-67) ห้วยไคร้=Optic 12 Core DW = 7.93 km.
LEI000297,(3410-67) ห้วยไคร้ - (3410-70) ซำน้อย=Optic 12 Core DW = 4.17 km.";
    }
else if($message == "3410-68"){
        $arrayPostData['messages'][0]['text'] = "LEI000411,(3410-68) ซำกกค้อ - (3410-73) ผาสวรรค์=Optic 12 Core DW = 1.363 km.";
    }
else if($message == "3410-69"){
        $arrayPostData['messages'][0]['text'] = "LEI000298,(3410-70) ซำน้อย - (3410-69) ซำไคร้=Optic 12 Core DW = 2.39 km.";
    }
else if($message == "3410-70"){
          $arrayPostData['messages'][0]['text'] = "LEI000297,(3410-67) ห้วยไคร้ - (3410-70) ซำน้อย=Optic 12 Core DW = 4.17 km.
LEI000298,(3410-70) ซำน้อย - (3410-69) ซำไคร้=Optic 12 Core DW = 2.39 km.";
    }
else if($message == "3410-71"){
          $arrayPostData['messages'][0]['text'] = "LEI000237,(SJ) SJ - (3410-71) บ้านเพิ่ม=Optic 12 Core DW = 0.847 km.
LEI000238,(3410-71) บ้านเพิ่ม - (3410-75) โนนสว่าง=Optic 12 Core DW = 1.67 km.
LEI000239,(3410-71) บ้านเพิ่ม - (3410-73) ผาสวรรค์=Optic 12 Core DW = 1.363 km.
LEI000407,(3410-71) บ้านเพิ่ม - (3410-75) โนนสว่าง=Optic 12 Core DW = 1.67 km.";
    }
else if($message == "3410-72"){
        $arrayPostData['messages'][0]['text'] = "LEI000410,(3410-74) มอดินแดง - (3410-72) ซำพร้าว=Optic 12 Core DW = 3.528 km.";
    }
else if($message == "3410-73"){
          $arrayPostData['messages'][0]['text'] = "LEI000239,(3410-71) บ้านเพิ่ม - (3410-73) ผาสวรรค์=Optic 12 Core DW = 1.363 km.
LEI000411,(3410-68) ซำกกค้อ - (3410-73) ผาสวรรค์=Optic 12 Core DW = 1.363 km.";
    }
else if($message == "3410-74"){
          $arrayPostData['messages'][0]['text'] = "LEI000240,(SJ) SJ - (3410-74) มอดินแดง=Optic 12 Core DW = 1.339 km.
LEI000409,(sj) sj - (3410-74) มอดินแดง=Optic 12 Core DW = 1.339 km.
LEI000410,(3410-74) มอดินแดง - (3410-72) ซำพร้าว=Optic 12 Core DW = 3.528 km.";
    }
else if($message == "3410-75"){
          $arrayPostData['messages'][0]['text'] = "LEI000238,(3410-71) บ้านเพิ่ม - (3410-75) โนนสว่าง=Optic 12 Core DW = 1.67 km.
LEI000407,(3410-71) บ้านเพิ่ม - (3410-75) โนนสว่าง=Optic 12 Core DW = 1.67 km.";
    }
else if($message == "3410-77"){
        $arrayPostData['messages'][0]['text'] = "LEI000369,(sj) sj - (3410-77) ต.ผาขาว แสนสุข=Optic 12 Core DW = 0.96 km.";
    }
else if($message == "3410-78"){
        $arrayPostData['messages'][0]['text'] = "LEI000433,(3410-80) บ.ผาขาว - (3410-78) บ.ห้วยลาดเหนือ=Optic 12 Core DW = 1.8 km.";
    }
else if($message == "3410-79"){
        $arrayPostData['messages'][0]['text'] = "LEI000434,(3410-80) บ.ผาขาว - (3410-79) บ้านห้วยลาดใต้=Optic 12 Core DW = 1.15 km.";
    }
else if($message == "3410-80"){
          $arrayPostData['messages'][0]['text'] = "LEI000368,(3410-81) บ้านสมศักดิ์พัฒนา - (3410-80) ต.ผาขาว ผาขาว=Optic 12 Core DW = 1.14 km.
LEI000433,(3410-80) บ.ผาขาว - (3410-78) บ.ห้วยลาดเหนือ=Optic 12 Core DW = 1.8 km.
LEI000434,(3410-80) บ.ผาขาว - (3410-79) บ้านห้วยลาดใต้=Optic 12 Core DW = 1.15 km.";
    }
else if($message == "3410-81"){
          $arrayPostData['messages'][0]['text'] = "LEI000365,(3410-81) บ้านสมศักดิ์พัฒนา - (3410-82) ต.ผาขาว ดงน้อย=Optic 12 Core DW = 1.21 km.
LEI000368,(3410-81) บ้านสมศักดิ์พัฒนา - (3410-80) ต.ผาขาว ผาขาว=Optic 12 Core DW = 1.14 km.
LEI000618,(3410-83) ต.ผาขาว โนนยาง - (3410-81) ต.ผาขาว สมศักดิ์พัฒนา=Optic 12 Core DW = 1.35 km.";
    }
else if($message == "3410-82"){
        $arrayPostData['messages'][0]['text'] = "LEI000365,(3410-81) บ้านสมศักดิ์พัฒนา - (3410-82) ต.ผาขาว ดงน้อย=Optic 12 Core DW = 1.21 km.";
    }
else if($message == "3410-83"){
          $arrayPostData['messages'][0]['text'] = "LEI000364,(3410-84) บ้านซำเจริญ - (3410-83) ต.ผาขาว โนนยาง=Optic 12 Core DW = 0.82 km.
LEI000618,(3410-83) ต.ผาขาว โนนยาง - (3410-81) ต.ผาขาว สมศักดิ์พัฒนา=Optic 12 Core DW = 1.35 km.";
    }
else if($message == "3410-84"){
          $arrayPostData['messages'][0]['text'] = "LEI000363,(3410-85) บ้านหัวฝาย - (3410-84) ต.ผาขาว ซำเจริญ=Optic 12 Core DW = 1.71 km.
LEI000364,(3410-84) บ้านซำเจริญ - (3410-83) ต.ผาขาว โนนยาง=Optic 12 Core DW = 0.82 km.";
    }
else if($message == "3410-85"){
          $arrayPostData['messages'][0]['text'] = "LEI000363,(3410-85) บ้านหัวฝาย - (3410-84) ต.ผาขาว ซำเจริญ=Optic 12 Core DW = 1.71 km.
LEI000366,(3410-85) บ้านหัวฝาย - (3410-86) ต.ผาขาว ซำใหญ่=Optic 12 Core DW = 2.75 km.
LEI000367,(3410-66) บ้านโนนกกข่า - (3410-85) ต.ผาขาว หัวฝาย=Optic 12 Core DW = 2.45 km.";
    }
else if($message == "3410-86"){
        $arrayPostData['messages'][0]['text'] = "LEI000366,(3410-85) บ้านหัวฝาย - (3410-86) ต.ผาขาว ซำใหญ่=Optic 12 Core DW = 2.75 km.";
    }
else if($message == "3410-87"){
          $arrayPostData['messages'][0]['text'] = "LEI000361,(3410-87) ต.ท่าช้างคล้อง พวยเด้ง - (3410-88) ต.ท่าช้างคล้อง นาเหมือดแอ่=Optic 12 Core DW = 2.11 km.
LEI000362,(3410-90) บ้านท่าช้างคล้อง - (3410-87) ต.ท่าช้างคล้อง พวยเด้ง=Optic 12 Core DW = 3.46 km.
LEI000423,(3410-87) ทวยเด้ง - (3410-106) บ้านห้วยยาง=Optic 12 Core DW = 5.12 km.
LEI000430,(3410-87) บ้านพวยเด้ง - (3410-97) บ้านหัวขัว=Optic 12 Core DW = 3.75 km.";
    }
else if($message == "3410-88"){
          $arrayPostData['messages'][0]['text'] = "LEI000359,(3410-88) บ้านนาเหมือดแอ่ - (3410-93) ต.ท่าช้างคล้อง หนองตานาเหนือ=Optic 12 Core DW = 2.2 km.
LEI000361,(3410-87) ต.ท่าช้างคล้อง พวยเด้ง - (3410-88) ต.ท่าช้างคล้อง นาเหมือดแอ่=Optic 12 Core DW = 2.11 km.";
    }
else if($message == "3410-89"){
        $arrayPostData['messages'][0]['text'] = "LEI000360,(3410-90) บ้านท่าช้างคล้อง - (3410-89) ต.ท่าช้างคล้อง โนนภูทอง=Optic 12 Core DW = 2.21 km.";
    }
else if($message == "3410-90"){
          $arrayPostData['messages'][0]['text'] = "LEI000356,(3410-63) บ้านหนองอีเปี้ย - (3410-90) ต.ท่าช้างคล้อง หนองตานา=Optic 12 Core DW = 1.31 km.
LEI000360,(3410-90) บ้านท่าช้างคล้อง - (3410-89) ต.ท่าช้างคล้อง โนนภูทอง=Optic 12 Core DW = 2.21 km.
LEI000362,(3410-90) บ้านท่าช้างคล้อง - (3410-87) ต.ท่าช้างคล้อง พวยเด้ง=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3410-91"){
          $arrayPostData['messages'][0]['text'] = "LEI000357,(3410-91) บ้านหนองนาตา - (3410-98) ต.ท่าช้างคล้อง หนองแต้=Optic 12 Core DW = 2.76 km.
LEI000428,(3410-91) บ้านหนองตานา - (3410-94) บ้านโนนสมบูรณ์=Optic 12 Core DW = 4.9 km.
LEI000619,(3410-93) ต.ท่าช้างคล้อง หนองตานาเหนือ - (3410-91) ต.ท่าช้างคล้อง หนองตานา=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3410-93"){
          $arrayPostData['messages'][0]['text'] = "LEI000359,(3410-88) บ้านนาเหมือดแอ่ - (3410-93) ต.ท่าช้างคล้อง หนองตานาเหนือ=Optic 12 Core DW = 2.2 km.
LEI000619,(3410-93) ต.ท่าช้างคล้อง หนองตานาเหนือ - (3410-91) ต.ท่าช้างคล้อง หนองตานา=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3410-94"){
          $arrayPostData['messages'][0]['text'] = "LEI000428,(3410-91) บ้านหนองตานา - (3410-94) บ้านโนนสมบูรณ์=Optic 12 Core DW = 4.9 km.
LEI000431,(3410-94) โนนสมบูรณ์ - (3410-96) บ้านสมสะอาด=Optic 12 Core DW = 3.75 km.";
    }
else if($message == "3410-96"){
        $arrayPostData['messages'][0]['text'] = "LEI000431,(3410-94) โนนสมบูรณ์ - (3410-96) บ้านสมสะอาด=Optic 12 Core DW = 3.75 km.";
    }
else if($message == "3410-97"){
        $arrayPostData['messages'][0]['text'] = "LEI000430,(3410-87) บ้านพวยเด้ง - (3410-97) บ้านหัวขัว=Optic 12 Core DW = 3.75 km.";
    }
else if($message == "3410-98"){
          $arrayPostData['messages'][0]['text'] = "LEI000357,(3410-91) บ้านหนองนาตา - (3410-98) ต.ท่าช้างคล้อง หนองแต้=Optic 12 Core DW = 2.76 km.
LEI000617,(3410-98) ต.ท่าช้างคล้อง หนองแต้ - (3410-117) บ้านหนองโก=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3411-37"){
        $arrayPostData['messages'][0]['text'] = "LEI000061,(3407-37) เอราวัณ1 - (3411-37) เอรวัณ3=Optic 12 Core DW = 1.514 km.";
    }
else if($message == "3411-38"){
        $arrayPostData['messages'][0]['text'] = "LEI000275,(3407-37) เอราวัณ1 - (3411-38) เอราวัณ4=Optic 12 Core DW = 0.875 km.";
    }
else if($message == "3411-40"){
          $arrayPostData['messages'][0]['text'] = "LEI000142,(3411-40) หนองใหญ่ - (3411-43) ขัวไม้แดง=Optic 12 Core DW = 2.268 km.
LEI000451,(3411-40) บ้านหนองใหญ่ - (3411-68) บ้านผานาง=Optic 12 Core DW = 4.4 km.
LEI000473,(SJ) ท่าสวรรค์-เอราวัณ - (3411-40) หนองใหญ่=Optic 12 Core DW = 1.431 km.";
    }
else if($message == "3411-41"){
          $arrayPostData['messages'][0]['text'] = "LEI000152,(SJ) ท่าสวรรค์-เอราวัณ - (3411-41) โป่งศรีโทน=Optic 12 Core DW = 4.51 km.
LEI000450,(3411-41) บ้านโป่งศรีทน - (3411-66) บ้านโนนถาวร=Optic 12 Core DW = 1.58 km.
LEI000595,(3411-41) โป่งศรีโทน - (3407-66) โป่งศรีโทน2=Optic 12 Core DW = 1.14 km.
LEI000621,(3411-41) โป่งศรีโทน - (3411-50) โคกรัง=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3411-42"){
          $arrayPostData['messages'][0]['text'] = "LEI000153,(SJ) ท่าสวรรค์-เอราวัณ - (3411-42) รร.บ้านเหล่าหัวฝาย=Optic 12 Core DW = 1.423 km.
LEI000471,(SJ) ท่าสวรรค์-เอราวัณ - (3408-66) ท่าสวรรค์=12 Core= 5.897 km.
LEI000472,(SJ) ท่าสวรรค์ - (3407-37) เอราวัณ 1=12 Core= 14.031 km.";
    }
else if($message == "3411-43"){
          $arrayPostData['messages'][0]['text'] = "LEI000142,(3411-40) หนองใหญ่ - (3411-43) ขัวไม้แดง=Optic 12 Core DW = 2.268 km.
LEI000396,(3411-43) บ้านขัวไม้แดง - (3411-54) บ้านทรัพเจริญ=Optic 12 Core DW = 2.932 km.";
    }
else if($message == "3411-44"){
          $arrayPostData['messages'][0]['text'] = "LEI000226,(3407-38) เอราวัณ2 - (3411-44) ห้วยป่าน=12 Core= 10.21 km.
LEI000303,(3411-44) ห้วยป่าน - (3411-47) นาอุดม=Optic 12 Core DW = 4.1 km.
LEI000597,(3411-44) ห้วยป่าน - (3407-68) ต.ผาสามยอด โคกอีโต้น=Optic 12 Core DW = 2.003 km.";
    }
else if($message == "3411-45"){
          $arrayPostData['messages'][0]['text'] = "LEI000302,(SJ) ห้วยป่าน - นาอุดม - (3411-45) หนองตูม=Optic 12 Core DW = 4.5 km.
LEI000304,(3411-45) หนองตูม - (3411-46) โนนสวรรค์=Optic 12 Core DW = 4.5 km.
NLP000460,(3411-45) บ้านหนองตูม - (3140-62) ต.นาเหล่า นาสมนึก=Optic 12 Core DW = 1.415 km.";
    }
else if($message == "3411-46"){
          $arrayPostData['messages'][0]['text'] = "LEI000304,(3411-45) หนองตูม - (3411-46) โนนสวรรค์=Optic 12 Core DW = 4.5 km.
LEI000305,(3411-46) โนนสวรรค์ - (3411-48) ซำม่วง=Optic 12 Core DW = 4.5 km.";
    }
else if($message == "3411-47"){
        $arrayPostData['messages'][0]['text'] = "LEI000303,(3411-44) ห้วยป่าน - (3411-47) นาอุดม=Optic 12 Core DW = 4.1 km.";
    }
else if($message == "3411-48"){
        $arrayPostData['messages'][0]['text'] = "LEI000305,(3411-46) โนนสวรรค์ - (3411-48) ซำม่วง=Optic 12 Core DW = 4.5 km.";
    }
else if($message == "3411-49"){
          $arrayPostData['messages'][0]['text'] = "LEI000395,(3411-49) บ้านวังม่วง - (3411-53) บ้านเหล่าใหญ่=Optic 12 Core DW = 4.214 km.
LEI000620,(3411-50) โคกรัง - (3411-49) วังม่วง=Optic 12 Core DW = 1.6 km.
LEI000622,(3411-49) วังม่วง - (3411-51) พรประเสริฐ=Optic 12 Core DW = 1 km.";
    }
else if($message == "3411-50"){
          $arrayPostData['messages'][0]['text'] = "LEI000620,(3411-50) โคกรัง - (3411-49) วังม่วง=Optic 12 Core DW = 1.6 km.
LEI000621,(3411-41) โป่งศรีโทน - (3411-50) โคกรัง=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3411-51"){
        $arrayPostData['messages'][0]['text'] = "LEI000622,(3411-49) วังม่วง - (3411-51) พรประเสริฐ=Optic 12 Core DW = 1 km.";
    }
else if($message == "3411-53"){
          $arrayPostData['messages'][0]['text'] = "LEI000352,(3408-73) บ้านร่มเย็น - (3411-53) บ้านเหล่าใหญ่=Optic 12 Core DW = 2.33 km.
LEI000395,(3411-49) บ้านวังม่วง - (3411-53) บ้านเหล่าใหญ่=Optic 12 Core DW = 4.214 km.";
    }
else if($message == "3411-54"){
          $arrayPostData['messages'][0]['text'] = "LEI000396,(3411-43) บ้านขัวไม้แดง - (3411-54) บ้านทรัพเจริญ=Optic 12 Core DW = 2.932 km.
LEI000596,(3411-54) ทรัพย์เจริญ - (3407-67) ต.ผาอินทร์แปลง ดงนกกก=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3411-56"){
          $arrayPostData['messages'][0]['text'] = "LEI000315,(3411-59) ผาสะนา - (3411-56) ซำบุ่น=12 Core= 6.035 km.
LEI000317,(3411-56) ซำบุ่น - (3411-57) ผาสามยอด=Optic 12 Core DW = 2.145 km.";
    }
else if($message == "3411-57"){
          $arrayPostData['messages'][0]['text'] = "LEI000317,(3411-56) ซำบุ่น - (3411-57) ผาสามยอด=Optic 12 Core DW = 2.145 km.
LEI000425,(3411-57) ผาสามยอด - (3410-104) บ้านห้วยไฮ=Optic 12 Core DW = 3.45 km.";
    }
else if($message == "3411-58"){
          $arrayPostData['messages'][0]['text'] = "LEI000309,(3411-58) นาอ่างคำ - (3411-64) โนนดินแดง=Optic 12 Core DW = 1.942 km.
LEI000313,(3411-58) นาอ่างคำ - (3411-60) วังชมภู=Optic 12 Core DW = 2.849 km.
LEI000314,(SJ) SJ - (3411-58) นาอ่างคำ=Optic 12 Core DW = 4 km.";
    }
else if($message == "3411-59"){
          $arrayPostData['messages'][0]['text'] = "LEI000312,(3403-71) ศรีอุบล - (3411-59) ผาสะนา=12 Core= 7.989 km.
LEI000315,(3411-59) ผาสะนา - (3411-56) ซำบุ่น=12 Core= 6.035 km.";
    }
else if($message == "3411-60"){
        $arrayPostData['messages'][0]['text'] = "LEI000313,(3411-58) นาอ่างคำ - (3411-60) วังชมภู=Optic 12 Core DW = 2.849 km.";
    }
else if($message == "3411-61"){
          $arrayPostData['messages'][0]['text'] = "LEI000628,(3411-61) นาพึง - (3411-77) ต.นาพึง นาพระ=Optic 12 Core DW = 1.17 km.
LEI000629,(SJ) ด่านซ้าย-นาแห้ว - (3411-61) นาพึง=Optic 12 Core DW = 1 km.
LEI000630,(3411-61) นาพึง - (3411-78) ต.นาพึง นาจาน=Optic 12 Core DW = 1.243 km.";
    }
else if($message == "3411-62"){
          $arrayPostData['messages'][0]['text'] = "LEI000458,(3411-63) นาแห้ว - (3411-62) เหมืองแพร่=Optic 12 Core DW = 2.6 km.
LEI000623,(3411-62) เหมืองแพร่ - (3411-65) ต.นาแห้ว โป่งกูด=Optic 12 Core DW = 5.86 km.";
    }
else if($message == "3411-63"){
          $arrayPostData['messages'][0]['text'] = "LEI000244,(3402-61) ด่านซ้าย - (3411-63) นาแห้ว=12 Core= 33.508 km.
LEI000246,(3413-61) ท่าลี่ - (3411-63) นาแห้ว=12 Core= 64.288 km.
LEI000458,(3411-63) นาแห้ว - (3411-62) เหมืองแพร่=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3411-64"){
          $arrayPostData['messages'][0]['text'] = "LEI000309,(3411-58) นาอ่างคำ - (3411-64) โนนดินแดง=Optic 12 Core DW = 1.942 km.
LEI000464,(3411-64) โนนดินแดง - (3403-64) บ้านเหมืองแบ่ง=12 Core= 12 km.";
    }
else if($message == "3411-65"){
          $arrayPostData['messages'][0]['text'] = "LEI000623,(3411-62) เหมืองแพร่ - (3411-65) ต.นาแห้ว โป่งกูด=Optic 12 Core DW = 5.86 km.
LEI000624,(3411-65) ต.นาแห้ว โป่งกูด - (3411-67) ต.แสงภา หัวนา=Optic 12 Core DW = 4.5 km.";
    }
else if($message == "3411-66"){
        $arrayPostData['messages'][0]['text'] = "LEI000450,(3411-41) บ้านโป่งศรีทน - (3411-66) บ้านโนนถาวร=Optic 12 Core DW = 1.58 km.";
    }
else if($message == "3411-67"){
          $arrayPostData['messages'][0]['text'] = "LEI000624,(3411-65) ต.นาแห้ว โป่งกูด - (3411-67) ต.แสงภา หัวนา=Optic 12 Core DW = 4.5 km.
LEI000639,(3411-67) ต.แสงภา หัวนา - (3411-69) ต.แสงภา นาปอ=Optic 12 Core DW = 11.1 km.";
    }
else if($message == "3411-68"){
        $arrayPostData['messages'][0]['text'] = "LEI000451,(3411-40) บ้านหนองใหญ่ - (3411-68) บ้านผานาง=Optic 12 Core DW = 4.4 km.";
    }
else if($message == "3411-69"){
          $arrayPostData['messages'][0]['text'] = "LEI000638,(3411-69) ต.แสงภา นาปอ - (3411-90) ต.เหล่ากอหก เหล่ากอหก=12 Core= 7.8 km.
LEI000639,(3411-67) ต.แสงภา หัวนา - (3411-69) ต.แสงภา นาปอ=Optic 12 Core DW = 11.1 km.";
    }
else if($message == "3411-73"){
        $arrayPostData['messages'][0]['text'] = "LEI000625,(3411-74) ต.นาพึง กลาง - (3411-73) ต.นาพึง บ้านนาท่อน=Optic 12 Core DW = 1.587 km.";
    }
else if($message == "3411-74"){
          $arrayPostData['messages'][0]['text'] = "LEI000625,(3411-74) ต.นาพึง กลาง - (3411-73) ต.นาพึง บ้านนาท่อน=Optic 12 Core DW = 1.587 km.
LEI000626,(3411-76) ต.นาพึง ลาด - (3411-74) ต.นาพึง กลาง=Optic 12 Core DW = 1.28 km.";
    }
else if($message == "3411-76"){
          $arrayPostData['messages'][0]['text'] = "LEI000626,(3411-76) ต.นาพึง ลาด - (3411-74) ต.นาพึง กลาง=Optic 12 Core DW = 1.28 km.
LEI000627,(SJ) ด่านซ้าย-นาแห้ว - (3411-76) ต.นาพึง ลาด=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3411-77"){
        $arrayPostData['messages'][0]['text'] = "LEI000628,(3411-61) นาพึง - (3411-77) ต.นาพึง นาพระ=Optic 12 Core DW = 1.17 km.";
    }
else if($message == "3411-78"){
        $arrayPostData['messages'][0]['text'] = "LEI000630,(3411-61) นาพึง - (3411-78) ต.นาพึง นาจาน=Optic 12 Core DW = 1.243 km.";
    }
else if($message == "3411-81"){
        $arrayPostData['messages'][0]['text'] = "LEI000631,(SJ) ด่านซ้าย-นาแห้ว - (3411-81) ต.นามาลา นามาลา=Optic 12 Core DW = 2.63 km.";
    }
else if($message == "3411-82"){
          $arrayPostData['messages'][0]['text'] = "LEI000593,(3411-82) ต.นามาลา นาปูน - (3407-42) ต.ผาอินทร์แปลง ซำทอง=Optic 12 Core DW = 2.4 km.
LEI000632,(3411-81) ต.นามาลา นามาลา - (3411-82) ต.นามาลา นาปูน=Optic 12 Core DW = 2.325 km.
LEI000633,(3411-82) ต.นามาลา นาปูน - (3411-83) ต.นามาลา ซำทอง=Optic 12 Core DW = 2.577 km.";
    }
else if($message == "3411-83"){
        $arrayPostData['messages'][0]['text'] = "LEI000633,(3411-82) ต.นามาลา นาปูน - (3411-83) ต.นามาลา ซำทอง=Optic 12 Core DW = 2.577 km.";
    }
else if($message == "3411-84"){
          $arrayPostData['messages'][0]['text'] = "LEI000634,(SJ) ด่านซ้าย-นาแห้ว - (3411-84) ต.นามาลา หนองหวาย=Optic 12 Core DW = 1 km.
LEI000635,(3411-84) ต.นามาลา หนองหวาย - (3411-85) ต.นามาลา โคก=Optic 12 Core DW = 6.86 km.";
    }
else if($message == "3411-85"){
        $arrayPostData['messages'][0]['text'] = "LEI000635,(3411-84) ต.นามาลา หนองหวาย - (3411-85) ต.นามาลา โคก=Optic 12 Core DW = 6.86 km.";
    }
else if($message == "3411-87"){
        $arrayPostData['messages'][0]['text'] = "LEI000636,(3411-81) ต.นามาลา นามาลา - (3411-87) ต.นามาลา โนนสว่าง=Optic 12 Core DW = 1.37 km.";
    }
else if($message == "3411-88"){
        $arrayPostData['messages'][0]['text'] = "LEI000637,(3411-90) ต.เหล่ากอหก เหล่ากอหก - (3411-88) ต.เหล่ากอหก นาเชื่อม=Optic 12 Core DW = 3.229 km.";
    }
else if($message == "3411-90"){
          $arrayPostData['messages'][0]['text'] = "LEI000637,(3411-90) ต.เหล่ากอหก เหล่ากอหก - (3411-88) ต.เหล่ากอหก นาเชื่อม=Optic 12 Core DW = 3.229 km.
LEI000638,(3411-69) ต.แสงภา นาปอ - (3411-90) ต.เหล่ากอหก เหล่ากอหก=12 Core= 7.8 km.
LEI000641,(3411-90) ต.เหล่ากอหก เหล่ากอหก - (3411-92) ต.เหล่ากอหก นาซาก=Optic 12 Core DW = 1.667 km.";
    }
else if($message == "3411-91"){
        $arrayPostData['messages'][0]['text'] = "LEI000640,(3411-92) ต.เหล่ากอหก นาซาก - (3411-91) ต.เหล่ากอหก นาผักก้าม=Optic 12 Core DW = 2.154 km.";
    }
else if($message == "3411-92"){
          $arrayPostData['messages'][0]['text'] = "LEI000640,(3411-92) ต.เหล่ากอหก นาซาก - (3411-91) ต.เหล่ากอหก นาผักก้าม=Optic 12 Core DW = 2.154 km.
LEI000641,(3411-90) ต.เหล่ากอหก เหล่ากอหก - (3411-92) ต.เหล่ากอหก นาซาก=Optic 12 Core DW = 1.667 km.";
    }
else if($message == "3412-37"){
          $arrayPostData['messages'][0]['text'] = "LEI000002,(3403-31) me วังสะพุง - (3412-37) me หนองหิน=12 Core= 27.047 km.
LEI000062,(3412-37) หนองหิน - (3412-38) หนองหิน2=Optic 12 Core DW = 0.788 km.
LEI000096,(3412-37) me หนองหิน - (3412-40) หนองหิน4=Optic 12 Core DW = 0.815 km.
LEI000227,(3412-37) หนองหิน - (3412-45) หนองหิน5=Optic 12 Core DW = 0.78 km.
LEI000248,(3409-68) ภูหลวง - (3412-37) หนองหิน=12 Core= 28.26 km.
LEI000249,(3412-37) หนองหิน - (3410-61) ผาขาว=12 Core= 31.41 km.
LEI000250,(3410-61) ผาขาว - (3412-37) หนองหิน=12 Core= 21.256 km.
LEI000675,(3401-31) ME เอกธานี - (3412-37) หนองหิน=12 Core= 46.5 km.";
    }
else if($message == "3412-38"){
          $arrayPostData['messages'][0]['text'] = "LEI000062,(3412-37) หนองหิน - (3412-38) หนองหิน2=Optic 12 Core DW = 0.788 km.
LEI000095,(3412-38) หนองหิน2 - (3412-39) หนองหิน3=Optic 12 Core DW = 1.306 km.
LEI000154,(3412-38) หนองหิน2 - (3412-46) โรงพยาบาลหนองหิน=Optic 12 Core DW = 1 km.";
    }
else if($message == "3412-39"){
          $arrayPostData['messages'][0]['text'] = "LEI000095,(3412-38) หนองหิน2 - (3412-39) หนองหิน3=Optic 12 Core DW = 1.306 km.
LEI000646,(3412-39) หนองหิน3 - (3412-69) ต.หนองหิน ร่องป่าไผ่=Optic 12 Core DW = 1.28 km.";
    }
else if($message == "3412-40"){
          $arrayPostData['messages'][0]['text'] = "LEI000096,(3412-37) me หนองหิน - (3412-40) หนองหิน4=Optic 12 Core DW = 0.815 km.
LEI000117,(3412-40) หนองหิน4 - (3412-41) บ้านหลักร้อยหกสิบ=Optic 12 Core DW = 3.5 km.";
    }
else if($message == "3412-41"){
          $arrayPostData['messages'][0]['text'] = "LEI000117,(3412-40) หนองหิน4 - (3412-41) บ้านหลักร้อยหกสิบ=Optic 12 Core DW = 3.5 km.
LEI000228,(3412-41) บ้านหลักร้อยหกสิบ - (3412-48) ห้วยเดื่อ=Optic 12 Core DW = 4 km.";
    }
else if($message == "3412-45"){
        $arrayPostData['messages'][0]['text'] = "LEI000227,(3412-37) หนองหิน - (3412-45) หนองหิน5=Optic 12 Core DW = 0.78 km.";
    }
else if($message == "3412-46"){
        $arrayPostData['messages'][0]['text'] = "LEI000154,(3412-38) หนองหิน2 - (3412-46) โรงพยาบาลหนองหิน=Optic 12 Core DW = 1 km.";
    }
else if($message == "3412-47"){
          $arrayPostData['messages'][0]['text'] = "LEI000340,(3412-47) หนองหมากแก้ว - (3412-58) หนองจิก=Optic 12 Core DW = 1.125 km.
LEI000443,(3412-47) บ้านหนองหมากแก้ว - (3412-50) บ้านนาเหล่าน้อย=Optic 12 Core DW = 1.34 km.
LEI000642,(SJ) ภูหลวง-หนองหิน - (3412-47) หนองหมากแก้ว=Optic 12 Core DW = 1.111 km.";
    }
else if($message == "3412-48"){
        $arrayPostData['messages'][0]['text'] = "LEI000228,(3412-41) บ้านหลักร้อยหกสิบ - (3412-48) ห้วยเดื่อ=Optic 12 Core DW = 4 km.";
    }
else if($message == "3412-50"){
        $arrayPostData['messages'][0]['text'] = "LEI000443,(3412-47) บ้านหนองหมากแก้ว - (3412-50) บ้านนาเหล่าน้อย=Optic 12 Core DW = 1.34 km.";
    }
else if($message == "3412-51"){
          $arrayPostData['messages'][0]['text'] = "LEI000398,(3412-51) บ้านตาดข่า - (3412-52) บ้านน้อยสามัคคี=Optic 12 Core DW = 1.305 km.
LEI000399,(3412-53) บ้านโคกใหญ่ - (3412-51) บ้านตาดข่า=Optic 12 Core DW = 3.16 km.";
    }
else if($message == "3412-52"){
        $arrayPostData['messages'][0]['text'] = "LEI000398,(3412-51) บ้านตาดข่า - (3412-52) บ้านน้อยสามัคคี=Optic 12 Core DW = 1.305 km.";
    }
else if($message == "3412-53"){
          $arrayPostData['messages'][0]['text'] = "LEI000392,(sj) sj - (3412-53) บ้านโคกใหญ่=Optic 12 Core DW = 0.61 km.
LEI000399,(3412-53) บ้านโคกใหญ่ - (3412-51) บ้านตาดข่า=Optic 12 Core DW = 3.16 km.";
    }
else if($message == "3412-54"){
          $arrayPostData['messages'][0]['text'] = "LEI000393,(3412-54) บ้านไร่พวย - (3412-55) บ้านซำทอง=Optic 12 Core DW = 1.68 km.
LEI000643,(SJ) หนองหิน-ผาขาว - (3412-54) ต.ตาดข่า บ้านไร่พวย=Optic 12 Core DW = 0.715 km.";
    }
else if($message == "3412-55"){
          $arrayPostData['messages'][0]['text'] = "LEI000350,(3412-55) บ้านซำทอง - (3412-68) บ้านห้วยเดือน้อย=12 Core= 7.06 km.
LEI000393,(3412-54) บ้านไร่พวย - (3412-55) บ้านซำทอง=Optic 12 Core DW = 1.68 km.";
    }
else if($message == "3412-56"){
          $arrayPostData['messages'][0]['text'] = "LEI000334,(3403-60) บ้านนิกรสุข - (3412-56) บ้านห้วยเป้า=Optic 12 Core DW = 7.17 km.
LEI000436,(3412-56) บ้านผางาม - (3412-66) บ้านผาหวาย=12 Core= 5.83 km.";
    }
else if($message == "3412-57"){
        $arrayPostData['messages'][0]['text'] = "LEI000397,(3412-59) บ้านจอมทอง - (3412-57) บ้านห้วยไผ่เหนือ=Optic 12 Core DW = 5.612 km.";
    }
else if($message == "3412-58"){
        $arrayPostData['messages'][0]['text'] = "LEI000340,(3412-47) หนองหมากแก้ว - (3412-58) หนองจิก=Optic 12 Core DW = 1.125 km.";
    }
else if($message == "3412-59"){
          $arrayPostData['messages'][0]['text'] = "LEI000397,(3412-59) บ้านจอมทอง - (3412-57) บ้านห้วยไผ่เหนือ=Optic 12 Core DW = 5.612 km.
LEI000644,(SJ) ภูหลวง-หนองหิน - (3412-59) ต.ปวนพุ บ้านจอมทอง=Optic 12 Core DW = 0.977 km.";
    }
else if($message == "3412-61"){
          $arrayPostData['messages'][0]['text'] = "LEI000353,(3412-61) บ้านปวนพุ - (3412-62) บ้านเหล่าใหญ่=Optic 12 Core DW = 1.305 km.
LEI000354,(sj) sj - (3412-61) บ้านปวนพุ=Optic 12 Core DW = 0.975 km.
LEI000437,(3412-61) บ้านปวนพุ - (3412-63) บ้านสวนห้อม=12 Core= 5.428 km.";
    }
else if($message == "3412-62"){
        $arrayPostData['messages'][0]['text'] = "LEI000353,(3412-61) บ้านปวนพุ - (3412-62) บ้านเหล่าใหญ่=Optic 12 Core DW = 1.305 km.";
    }
else if($message == "3412-63"){
          $arrayPostData['messages'][0]['text'] = "LEI000437,(3412-61) บ้านปวนพุ - (3412-63) บ้านสวนห้อม=12 Core= 5.428 km.
LEI000645,(3412-63) บ้านสวนห้อม - (3412-64) ต.ปวนพุ ผางาม=Optic 12 Core DW = 2.47 km.";
    }
else if($message == "3412-64"){
        $arrayPostData['messages'][0]['text'] = "LEI000645,(3412-63) บ้านสวนห้อม - (3412-64) ต.ปวนพุ ผางาม=Optic 12 Core DW = 2.47 km.";
    }
else if($message == "3412-66"){
        $arrayPostData['messages'][0]['text'] = "LEI000436,(3412-56) บ้านผางาม - (3412-66) บ้านผาหวาย=12 Core= 5.83 km.";
    }
else if($message == "3412-68"){
        $arrayPostData['messages'][0]['text'] = "LEI000350,(3412-55) บ้านซำทอง - (3412-68) บ้านห้วยเดือน้อย=12 Core= 7.06 km.";
    }
else if($message == "3412-69"){
        $arrayPostData['messages'][0]['text'] = "LEI000646,(3412-39) หนองหิน3 - (3412-69) ต.หนองหิน ร่องป่าไผ่=Optic 12 Core DW = 1.28 km.";
    }
else if($message == "3412-70"){
        $arrayPostData['messages'][0]['text'] = "LEI000647,(SJ) นิกรสุข-บ้านห้วยเป้า - (3412-70) ต.หนองหิน ห้วยไผ่ใต้=Optic 12 Core DW = 1.29 km.";
    }
else if($message == "3412-71"){
        $arrayPostData['messages'][0]['text'] = "LEI000648,(SJ) หนองหิน-ผาขาว - (3412-71) ต.หนองหิน ไร่ศรีอุบล=Optic 12 Core DW = 1.066 km.";
    }
else if($message == "3413-61"){
          $arrayPostData['messages'][0]['text'] = "LEI000229,(3413-61) ท่าลี่1 - (3413-62) ท่าลี่2=Optic 12 Core DW = 1.3 km.
LEI000230,(3413-61) ท่าลี่1 - (3413-63) ท่าลี่3=Optic 12 Core DW = 2.7 km.
LEI000245,(3401-42) ราชภัฎเลย - (3413-61) ท่าลี่=12 Core= 40.58 km.
LEI000246,(3413-61) ท่าลี่ - (3411-63) นาแห้ว=12 Core= 64.288 km.
LEI000422,(3413-61) อ.ท่าลี - (3404-75) บ.สวัสดิ์พัฒนา=Optic 12 Core DW = 3.634 km.
LEI000574,(3413-61) ท่าลี่1 - (3406-66) วัดโพธิ์ศรี=Optic 12 Core DW = 0.725 km.
LEI000653,(3413-61) ME ท่าลี่ - (3413-75) ต.ท่าลี่ สวัสดิ์พัฒนา=Optic 12 Core DW = 1.548 km.
LEI000659,(3413-61) ME ท่าลี่ - (3413-93) ท่าลี่3=Optic 12 Core DW = 1.041 km.";
    }
else if($message == "3413-62"){
          $arrayPostData['messages'][0]['text'] = "LEI000229,(3413-61) ท่าลี่1 - (3413-62) ท่าลี่2=Optic 12 Core DW = 1.3 km.
LEI000661,(3413-62) ท่าลี่2 - (3413-97) ต.ท่าลี่ ด่านตำรวจ=Optic 12 Core DW = 1.536 km.";
    }
else if($message == "3413-63"){
          $arrayPostData['messages'][0]['text'] = "LEI000230,(3413-61) ท่าลี่1 - (3413-63) ท่าลี่3=Optic 12 Core DW = 2.7 km.
LEI000231,(3413-63) ท่าลี่3 - (3413-66) ห้วยปากคาน=12 Core= 7.35 km.";
    }
else if($message == "3413-65"){
          $arrayPostData['messages'][0]['text'] = "LEI000459,(SJ) นาแห้ว-ท่าลี่ - (3413-65) บ้านอาฮี=Optic 12 Core DW = 1.41 km.
LEI000655,(3413-65) บ้านอาฮี - (3413-79) ต.ท่าลี่ น้ำพาน=Optic 12 Core DW = 3.435 km.";
    }
else if($message == "3413-66"){
          $arrayPostData['messages'][0]['text'] = "LEI000143,(3413-66) ห้วยปากคาด - (3413-69) เพชรโสภณ=Optic 12 Core DW = 3.447 km.
LEI000231,(3413-63) ท่าลี่3 - (3413-66) ห้วยปากคาน=12 Core= 7.35 km.
LEI000232,(3413-66) ห้วยปากคาน - (3413-67) บ้านหนองผือ=12 Core= 7.33 km.
LEI000233,(3413-66) ห้วยปากคาน - (3413-68) นากระเซ็ง=Optic 12 Core DW = 2.17 km.
LEI000660,(3413-66) ห้วยปากคาน - (3413-95) ต.หนองผือ ปากคาน2=Optic 12 Core DW = 1.284 km.";
    }
else if($message == "3413-67"){
        $arrayPostData['messages'][0]['text'] = "LEI000232,(3413-66) ห้วยปากคาน - (3413-67) บ้านหนองผือ=12 Core= 7.33 km.";
    }
else if($message == "3413-68"){
        $arrayPostData['messages'][0]['text'] = "LEI000233,(3413-66) ห้วยปากคาน - (3413-68) นากระเซ็ง=Optic 12 Core DW = 2.17 km.";
    }
else if($message == "3413-69"){
        $arrayPostData['messages'][0]['text'] = "LEI000143,(3413-66) ห้วยปากคาด - (3413-69) เพชรโสภณ=Optic 12 Core DW = 3.447 km.";
    }
else if($message == "3413-70"){
        $arrayPostData['messages'][0]['text'] = "LEI000649,(3413-71) ปากยาง - (3413-70) น้ำแคม=Optic 12 Core DW = 4 km.";
    }
else if($message == "3413-71"){
          $arrayPostData['messages'][0]['text'] = "LEI000155,(3401-141) บ้านกกดู่ - (3413-71) บ้านปากยาง=12 Core= 14.3 km.
LEI000649,(3413-71) ปากยาง - (3413-70) น้ำแคม=Optic 12 Core DW = 4 km.";
    }
else if($message == "3413-72"){
        $arrayPostData['messages'][0]['text'] = "LEI000651,(SJ) ท่าลี่-ภูเรือ - (3413-72) ต.ท่าลี่ ยาง=Optic 12 Core DW = 2.452 km.";
    }
else if($message == "3413-74"){
        $arrayPostData['messages'][0]['text'] = "LEI000652,(SJ) ท่าลี่-ภูเรือ - (3413-74) ต.ท่าลี่ วังขาม=Optic 12 Core DW = 1.716 km.";
    }
else if($message == "3413-75"){
        $arrayPostData['messages'][0]['text'] = "LEI000653,(3413-61) ME ท่าลี่ - (3413-75) ต.ท่าลี่ สวัสดิ์พัฒนา=Optic 12 Core DW = 1.548 km.";
    }
else if($message == "3413-78"){
          $arrayPostData['messages'][0]['text'] = "LEI000654,(SJ) นาแห้ว-ท่าลี่ - (3413-78) ต.ท่าลี่ หนองปกติ=Optic 12 Core DW = 0.354 km.
LEI000656,(3413-78) ต.ท่าลี่ หนองปกติ - (3413-80) ต.ท่าลี่ ห้วยคัง=Optic 12 Core DW = 1.758 km.";
    }
else if($message == "3413-79"){
        $arrayPostData['messages'][0]['text'] = "LEI000655,(3413-65) บ้านอาฮี - (3413-79) ต.ท่าลี่ น้ำพาน=Optic 12 Core DW = 3.435 km.";
    }
else if($message == "3413-80"){
        $arrayPostData['messages'][0]['text'] = "LEI000656,(3413-78) ต.ท่าลี่ หนองปกติ - (3413-80) ต.ท่าลี่ ห้วยคัง=Optic 12 Core DW = 1.758 km.";
    }
else if($message == "3413-81"){
          $arrayPostData['messages'][0]['text'] = "LEI000371,(3413-81) บ้านโคกใหญ่ - (3413-82) บ้านร่องไผ่=Optic 12 Core DW = 3.524 km.
LEI000375,(3413-81) บ้านโคกใหญ่ - (3413-83) บ้านบวกอ่าง=Optic 12 Core DW = 4.816 km.
LEI000657,(SJ) เลย-ท่าลี่ - (3413-81) ต.โคกใหญ่ โคกใหญ่=Optic 12 Core DW = 1.325 km.";
    }
else if($message == "3413-82"){
        $arrayPostData['messages'][0]['text'] = "LEI000371,(3413-81) บ้านโคกใหญ่ - (3413-82) บ้านร่องไผ่=Optic 12 Core DW = 3.524 km.";
    }
else if($message == "3413-83"){
          $arrayPostData['messages'][0]['text'] = "LEI000372,(3413-83) บ้านบวกอ่าง - (3413-84) บ้านห้วยไค้=Optic 12 Core DW = 3.96 km.
LEI000375,(3413-81) บ้านโคกใหญ่ - (3413-83) บ้านบวกอ่าง=Optic 12 Core DW = 4.816 km.";
    }
else if($message == "3413-84"){
        $arrayPostData['messages'][0]['text'] = "LEI000372,(3413-83) บ้านบวกอ่าง - (3413-84) บ้านห้วยไค้=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3413-85"){
        $arrayPostData['messages'][0]['text'] = "LEI000420,(3413-86) บ้านห้วยเดื่อ - (3413-85) บ้านหนองบง=Optic 12 Core DW = 6.036 km.";
    }
else if($message == "3413-86"){
        $arrayPostData['messages'][0]['text'] = "LEI000420,(3413-86) บ้านห้วยเดื่อ - (3413-85) บ้านหนองบง=Optic 12 Core DW = 6.036 km.";
    }
else if($message == "3413-88"){
        $arrayPostData['messages'][0]['text'] = "LEI000658,(SJ) นาแห้ว-ท่าลี่ - (3413-88) ต.น้ำทูน แก่งม่วง=Optic 12 Core DW = 0.565 km.";
    }
else if($message == "3413-93"){
        $arrayPostData['messages'][0]['text'] = "LEI000659,(3413-61) ME ท่าลี่ - (3413-93) ท่าลี่3=Optic 12 Core DW = 1.041 km.";
    }
else if($message == "3413-95"){
        $arrayPostData['messages'][0]['text'] = "LEI000660,(3413-66) ห้วยปากคาน - (3413-95) ต.หนองผือ ปากคาน2=Optic 12 Core DW = 1.284 km.";
    }
else if($message == "3413-97"){
        $arrayPostData['messages'][0]['text'] = "LEI000661,(3413-62) ท่าลี่2 - (3413-97) ต.ท่าลี่ ด่านตำรวจ=Optic 12 Core DW = 1.536 km.";
    }
else if($message == "3440-37"){
          $arrayPostData['messages'][0]['text'] = "LEI000234,(3440-44) วังไผ่ - (3440-37) ผานกเค้า=Optic 12 Core DW = 1.5 km.
LEI000475,(3440-37) ผานกเค้า - (3440-44) วังไผ่=Optic 12 Core DW = 1.389 km.
LEI000667,(3440-37) ผานกเค้า - (3440-58) ต.ผานกเค้า ผาสามยอด=Optic 12 Core DW = 1.896 km.";
    }
else if($message == "3440-39"){
          $arrayPostData['messages'][0]['text'] = "LEI000235,(3440-39) ภูกกระดึง1 - (3440-40) ภูกระดึง2=Optic 12 Core DW = 2.5 km.
LEI000236,(3440-39) ภูกกระดึง1 - (3440-42) ศรีฐาน=Optic 12 Core DW = 2.913 km.
LEI000474,(SJ) หนองหิน-ชุมแพ  - (3440-39) ภูกระดึง1=12 Core= 5 km.
LEI000673,(3440-39) ME ภูกระดึง - (3440-83) วงเวียน=Optic 12 Core DW = 1.07 km.";
    }
else if($message == "3440-40"){
          $arrayPostData['messages'][0]['text'] = "LEI000235,(3440-39) ภูกกระดึง1 - (3440-40) ภูกระดึง2=Optic 12 Core DW = 2.5 km.
LEI000349,(3440-40) บ้านภูกระดึง2 - (3440-69) บ้านนายาง=Optic 12 Core DW = 4.88 km.
LEI000672,(3440-40) ภูกระดึง2 - (3440-82) ภูกระดึง3=Optic 12 Core DW = 1.232 km.";
    }
else if($message == "3440-42"){
          $arrayPostData['messages'][0]['text'] = "LEI000236,(3440-39) ภูกกระดึง1 - (3440-42) ศรีฐาน=Optic 12 Core DW = 2.913 km.
LEI000476,(3440-42) ศรีฐาน - (3440-45) หนองอีเลิง=Optic 12 Core DW = 1.146 km.
LEI000662,(3440-42) ศรีฐาน - (3440-46) นาแปน=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3440-43"){
          $arrayPostData['messages'][0]['text'] = "LEI000347,(3440-43) ร.ร.บ้านห้วยส้ม - (3440-63) บ้านน้อยมีชัย=Optic 12 Core DW = 1.52 km.
LEI000460,(SJ) หนองหิน-ชุมแพ  - (3440-43) โรงเรียนบ้านห้วยส้ม=Optic 12 Core DW = 1.383 km.";
    }
else if($message == "3440-44"){
          $arrayPostData['messages'][0]['text'] = "LEI000234,(3440-44) วังไผ่ - (3440-37) ผานกเค้า=Optic 12 Core DW = 1.5 km.
LEI000346,(3440-44) บ้างวังไผ่ - (3440-64) บ้านห้วยคะมะ=Optic 12 Core DW = 3.19 km.
LEI000440,(3440-44) บ้านวังไฝ่ - (3440-72) บ้านห้วยส้มใต้=Optic 12 Core DW = 8.75 km.
LEI000475,(3440-37) ผานกเค้า - (3440-44) วังไผ่=Optic 12 Core DW = 1.389 km.";
    }
else if($message == "3440-45"){
          $arrayPostData['messages'][0]['text'] = "LEI000476,(3440-42) ศรีฐาน - (3440-45) หนองอีเลิง=Optic 12 Core DW = 1.146 km.
LEI000664,(3440-45) หนองอีเลิง - (3440-49) ต.ศรีฐาน ห้วยเดื่อ=12 Core= 4.72 km.";
    }
else if($message == "3440-46"){
          $arrayPostData['messages'][0]['text'] = "LEI000452,(3440-46) บ้านนาแปน - (3440-47) บ้านอีเลิศ=12 Core= 7.236 km.
LEI000662,(3440-42) ศรีฐาน - (3440-46) นาแปน=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3440-47"){
          $arrayPostData['messages'][0]['text'] = "LEI000452,(3440-46) บ้านนาแปน - (3440-47) บ้านอีเลิศ=12 Core= 7.236 km.
LEI000663,(3440-47) อีเลิศ - (3440-48) ต.ศรีฐาน วังยาง=12 Core= 6.16 km.";
    }
else if($message == "3440-48"){
        $arrayPostData['messages'][0]['text'] = "LEI000663,(3440-47) อีเลิศ - (3440-48) ต.ศรีฐาน วังยาง=12 Core= 6.16 km.";
    }
else if($message == "3440-49"){
          $arrayPostData['messages'][0]['text'] = "LEI000664,(3440-45) หนองอีเลิง - (3440-49) ต.ศรีฐาน ห้วยเดื่อ=12 Core= 4.72 km.
LEI000665,(3440-49) ต.ศรีฐาน ห้วยเดื่อ - (3440-51) ต.ศรีฐาน ทานตะวัน=Optic 12 Core DW = 1.593 km.";
    }
else if($message == "3440-51"){
          $arrayPostData['messages'][0]['text'] = "LEI000343,(3440-51) บ้านทานตะวัน - (3440-52) บ้านนาน้อย=Optic 12 Core DW = 3.96 km.
LEI000665,(3440-49) ต.ศรีฐาน ห้วยเดื่อ - (3440-51) ต.ศรีฐาน ทานตะวัน=Optic 12 Core DW = 1.593 km.";
    }
else if($message == "3440-52"){
        $arrayPostData['messages'][0]['text'] = "LEI000343,(3440-51) บ้านทานตะวัน - (3440-52) บ้านนาน้อย=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3440-53"){
        $arrayPostData['messages'][0]['text'] = "LEI000666,(SJ) ชุมแพ-หนองหิน - (3440-53) ต.ผานกเค้า พลทอง=Optic 12 Core DW = 1.02 km.";
    }
else if($message == "3440-57"){
        $arrayPostData['messages'][0]['text'] = "LEI000453,(SJ) SJ วังไผ่-ห้วยส้มใต้ - (3440-57) บ้านศรีรักษา=Optic 12 Core DW = 3.12 km.";
    }
else if($message == "3440-58"){
        $arrayPostData['messages'][0]['text'] = "LEI000667,(3440-37) ผานกเค้า - (3440-58) ต.ผานกเค้า ผาสามยอด=Optic 12 Core DW = 1.896 km.";
    }
else if($message == "3440-59"){
        $arrayPostData['messages'][0]['text'] = "LEI000668,(SJ) ชุมแพ-หนองหิน - (3440-59) ต.ห้วยส้ม ห้วยไผ่=Optic 12 Core DW = 0.92 km.";
    }
else if($message == "3440-60"){
          $arrayPostData['messages'][0]['text'] = "LEI000345,(3440-60) บ้านซำบ่าง - (3440-61) บ้านหนองตูม=Optic 12 Core DW = 2.56 km.
LEI000669,(SJ) ชุมแพ-หนองหิน - (3440-60) ต.ห้วยส้ม ซำบ่าง=Optic 12 Core DW = 2.1 km.";
    }
else if($message == "3440-61"){
        $arrayPostData['messages'][0]['text'] = "LEI000345,(3440-60) บ้านซำบ่าง - (3440-61) บ้านหนองตูม=Optic 12 Core DW = 2.56 km.";
    }
else if($message == "3440-63"){
        $arrayPostData['messages'][0]['text'] = "LEI000347,(3440-43) ร.ร.บ้านห้วยส้ม - (3440-63) บ้านน้อยมีชัย=Optic 12 Core DW = 1.52 km.";
    }
else if($message == "3440-64"){
        $arrayPostData['messages'][0]['text'] = "LEI000346,(3440-44) บ้างวังไผ่ - (3440-64) บ้านห้วยคะมะ=Optic 12 Core DW = 3.19 km.";
    }
else if($message == "3440-65"){
        $arrayPostData['messages'][0]['text'] = "LEI000454,(SJ) SJ บ้านหนองตม-ซำบ่าง - (3440-65) บ้านท่ายาง=Optic 12 Core DW = 0.75 km.";
    }
else if($message == "3440-67"){
        $arrayPostData['messages'][0]['text'] = "LEI000348,(3440-69) บ้านนายาง - (3440-67) บ้านสงป่าเปือย=Optic 12 Core DW = 0.95 km.";
    }
else if($message == "3440-68"){
        $arrayPostData['messages'][0]['text'] = "LEI000670,(3440-69) ต.ภูกระดึง นายาง - (3440-68) ต.ภูกระดึง นายางเหนือ=Optic 12 Core DW = 1.82 km.";
    }
else if($message == "3440-69"){
          $arrayPostData['messages'][0]['text'] = "LEI000348,(3440-69) บ้านนายาง - (3440-67) บ้านสงป่าเปือย=Optic 12 Core DW = 0.95 km.
LEI000349,(3440-40) บ้านภูกระดึง2 - (3440-69) บ้านนายาง=Optic 12 Core DW = 4.88 km.
LEI000670,(3440-69) ต.ภูกระดึง นายาง - (3440-68) ต.ภูกระดึง นายางเหนือ=Optic 12 Core DW = 1.82 km.
LEI000671,(3440-69) ต.ภูกระดึง นายาง - (3440-70) ต.ภูกระดึง หนองขอน=Optic 12 Core DW = 1.554 km.";
    }
else if($message == "3440-70"){
        $arrayPostData['messages'][0]['text'] = "LEI000671,(3440-69) ต.ภูกระดึง นายาง - (3440-70) ต.ภูกระดึง หนองขอน=Optic 12 Core DW = 1.554 km.";
    }
else if($message == "3440-72"){
        $arrayPostData['messages'][0]['text'] = "LEI000440,(3440-44) บ้านวังไฝ่ - (3440-72) บ้านห้วยส้มใต้=Optic 12 Core DW = 8.75 km.";
    }
else if($message == "3440-82"){
        $arrayPostData['messages'][0]['text'] = "LEI000672,(3440-40) ภูกระดึง2 - (3440-82) ภูกระดึง3=Optic 12 Core DW = 1.232 km.";
    }
else if($message == "3440-83"){
        $arrayPostData['messages'][0]['text'] = "LEI000673,(3440-39) ME ภูกระดึง - (3440-83) วงเวียน=Optic 12 Core DW = 1.07 km.";
    }
else if($message == "3503-34"){
        $arrayPostData['messages'][0]['text'] = "UDN000414,(3008-37) ME หนองหาน - (3503-34) dwdm พรหมศิริ=12 Core= 45.882 km.";
    }
else if($message == "3801-37"){
          $arrayPostData['messages'][0]['text'] = "BUN000002,(3807-38) ตลาดบึงกาฬ - (3801-37) บึงกาฬ วิศิษฐ์=Optic 12 Core DW = 0.771 km.
BUN000004,(3801-37) บึงกาฬ วิศิษฐ์ - (3801-40) ประปา บึงกาฬ=Optic 12 Core DW = 1.527 km.
BUN000059,(3801-37) วิศิษย์ - (3807-65) จักรทิพย์สามัคคี=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3801-38"){
          $arrayPostData['messages'][0]['text'] = "BUN000003,(3807-37) me บึงกาฬ - (3801-38) ปตท.บึงกาฬ=Optic 12 Core DW = 1.078 km.
BUN000016,(3801-38) ปตท.บึงกาฬ - (3807-44) วัดภูกระแต=Optic 12 Core DW = 0.872 km.";
    }
else if($message == "3801-40"){
          $arrayPostData['messages'][0]['text'] = "BUN000004,(3801-37) บึงกาฬ วิศิษฐ์ - (3801-40) ประปา บึงกาฬ=Optic 12 Core DW = 1.527 km.
BUN000128,(3801-40) ประปาบึงกาฬ - (3807-95) พันลำ=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3802-31"){
          $arrayPostData['messages'][0]['text'] = "BUN000032,(3802-31) ME พรเจริญ - (3802-37) ตลาดพรเจริญ=Optic 12 Core DW = 2.156 km.
BUN000061,(3802-31) Metronet พรเจริญ - (3802-49) บ้านโคกนิยม=Optic 12 Core DW = 2.2 km.
BUN000097,(3802-31) ME พรเจริญ - (3804-63) ME โซ่พิสัย=12 Core= 38.851 km.";
    }
else if($message == "3802-37"){
          $arrayPostData['messages'][0]['text'] = "BUN000032,(3802-31) ME พรเจริญ - (3802-37) ตลาดพรเจริญ=Optic 12 Core DW = 2.156 km.
BUN000033,(3802-37) ตลาดพรเจริญ - (3802-39) บ้านโคกอุดม=Optic 12 Core DW = 2.11 km.
BUN000040,(3802-37) ตลาดพรเจริญ - (3802-50) บ้านเอือด=Optic 12 Core DW = 0.81 km.
BUN000106,(3802-37) ตลาดพรเจริญ - (3802-55) โนน=Optic 12 Core DW = 2.4 km.
BUN000286,(3802-37) ตลาดพรเจริญ - (3802-78) ต.พรเจริญ โหนดไปรษณีย์=Optic 12 Core DW = 1.136 km.
BUN000325,(3802-37) ME ตลาดพรเจริญ - (3805-158) ต.ท่าสะอาด ใหม่สามัคคี=Optic 12 Core DW = 4 km.";
    }
else if($message == "3802-39"){
        $arrayPostData['messages'][0]['text'] = "BUN000033,(3802-37) ตลาดพรเจริญ - (3802-39) บ้านโคกอุดม=Optic 12 Core DW = 2.11 km.";
    }
else if($message == "3802-40"){
        $arrayPostData['messages'][0]['text'] = "BUN000234,(3802-40) โรงพยาบาลพรดจริญ - (3802-62) ต.วังชมภู เกษตรรุ่งเรือง=Optic 12 Core DW = 2.847 km.";
    }
else if($message == "3802-42"){
          $arrayPostData['messages'][0]['text'] = "BUN000104,(3802-42) ดงเสียด - (3802-57) สร้างคำ=Optic 12 Core DW = 3 km.
BUN000105,(3802-55) โนน - (3802-42) ดงเสียด=Optic 12 Core DW = 3.1 km.";
    }
else if($message == "3802-43"){
          $arrayPostData['messages'][0]['text'] = "BUN000122,(SJ) SJ หัวต่อ - (3802-43) บ้านศรีชมชื่น=Optic 12 Core DW = 1.1 km.
BUN000304,(3802-43) บ้านท่าศรีชมชื่น - (3804-134) ศรีประมวล=Optic 12 Core DW = 0.985 km.";
    }
else if($message == "3802-45"){
          $arrayPostData['messages'][0]['text'] = "BUN000154,(3802-45) หนองหัวช้าง - (3802-69) ต.ศรีสำราญ โนนสะอาด=Optic 12 Core DW = 2.994 km.
BUN000271,(SJ) ME โซ่พิสัย-ME พรเจริญ - (3802-45) หนองหัวช้าง=Optic 12 Core DW = 0.25 km.";
    }
else if($message == "3802-46"){
          $arrayPostData['messages'][0]['text'] = "BUN000043,(3802-46) ดอนหญ้านาง - (3802-53) บ้านดอนน้อย=Optic 12 Core DW = 3 km.
BUN000125,(3802-46) ดอนหญ้านาง - (3802-58) สันติสุข=Optic 12 Core DW = 2.413 km.
BUN000272,(SJ) ME โซ่พิสัย-ME พรเจริญ - (3802-46) ดอนหญ้านาง=Optic 12 Core DW = 2.14 km.";
    }
else if($message == "3802-48"){
          $arrayPostData['messages'][0]['text'] = "BUN000127,(3802-48) ท่าสะอาด - (3805-99) ท่าดอกคูณ=Optic 12 Core DW = 3.792 km.
BUN000153,(3802-48) บ้านท่าสะอาด - (3805-125) บ้านยางชุม=Optic 12 Core DW = 3.155 km.
BUN000273,(SJ) ME บึงกาฬ- SJ บึงกาฬคำตากล้า - (3802-48) บ้านท่าสะอาด=Optic 12 Core DW = 0.821 km.
BUN000311,(3802-48) ท่าสะอาด - (3805-127) ต.ท่าสะอาด โนนสวาท=Optic 12 Core DW = 1.195 km.";
    }
else if($message == "3802-49"){
        $arrayPostData['messages'][0]['text'] = "BUN000061,(3802-31) Metronet พรเจริญ - (3802-49) บ้านโคกนิยม=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3802-50"){
          $arrayPostData['messages'][0]['text'] = "BUN000040,(3802-37) ตลาดพรเจริญ - (3802-50) บ้านเอือด=Optic 12 Core DW = 0.81 km.
BUN000062,(3802-50) เอือด - (3802-55) โนน=Optic 12 Core DW = 1.9 km.
BUN000126,(3802-50) เอือด - (3802-59) เอราวัณ=Optic 12 Core DW = 1.212 km.";
    }
else if($message == "3802-51"){
          $arrayPostData['messages'][0]['text'] = "BUN000041,(3802-59) โคกอุดม - (3802-51) ปรารถนาดี=Optic 12 Core DW = 3.03 km.
BUN000042,(3802-51) บ้านปราถนาดี - (3802-52) บ้านใหม่ศรีชมภู=Optic 12 Core DW = 3.91 km.";
    }
else if($message == "3802-52"){
          $arrayPostData['messages'][0]['text'] = "BUN000042,(3802-51) บ้านปราถนาดี - (3802-52) บ้านใหม่ศรีชมภู=Optic 12 Core DW = 3.91 km.
BUN000238,(3802-52) ใหม่ศรีชมภู - (3802-61) ต.ป่าแฝก น้อยพัฒนา=Optic 12 Core DW = 1.836 km.";
    }
else if($message == "3802-53"){
        $arrayPostData['messages'][0]['text'] = "BUN000043,(3802-46) ดอนหญ้านาง - (3802-53) บ้านดอนน้อย=Optic 12 Core DW = 3 km.";
    }
else if($message == "3802-54"){
        $arrayPostData['messages'][0]['text'] = "BUN000260,(3802-54) ดงเสียด - (3802-65) หนองบัวน้อย ต.วังชมภู=Optic 12 Core DW = 5.277 km.";
    }
else if($message == "3802-55"){
        $arrayPostData['messages'][0]['text'] = "BUN000260,(3802-54) ดงเสียด - (3802-65) หนองบัวน้อย ต.วังชมภู=Optic 12 Core DW = 5.277 km.";
    }
else if($message == "3802-56"){
        $arrayPostData['messages'][0]['text'] = "BUN000107,(3802-55) โนน - (3802-56) หนองผักแว่น=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3802-57"){
          $arrayPostData['messages'][0]['text'] = "BUN000104,(3802-42) ดงเสียด - (3802-57) สร้างคำ=Optic 12 Core DW = 3 km.
BUN000236,(3802-57) สร้างคำ - (3802-64) ต.วังชมภู บุ่งกล้า=Optic 12 Core DW = 4.887 km.";
    }
else if($message == "3802-58"){
        $arrayPostData['messages'][0]['text'] = "BUN000125,(3802-46) ดอนหญ้านาง - (3802-58) สันติสุข=Optic 12 Core DW = 2.413 km.";
    }
else if($message == "3802-59"){
          $arrayPostData['messages'][0]['text'] = "BUN000041,(3802-59) โคกอุดม - (3802-51) ปรารถนาดี=Optic 12 Core DW = 3.03 km.
BUN000126,(3802-50) เอือด - (3802-59) เอราวัณ=Optic 12 Core DW = 1.212 km.";
    }
else if($message == "3802-61"){
        $arrayPostData['messages'][0]['text'] = "BUN000238,(3802-52) ใหม่ศรีชมภู - (3802-61) ต.ป่าแฝก น้อยพัฒนา=Optic 12 Core DW = 1.836 km.";
    }
else if($message == "3802-62"){
          $arrayPostData['messages'][0]['text'] = "BUN000234,(3802-40) โรงพยาบาลพรดจริญ - (3802-62) ต.วังชมภู เกษตรรุ่งเรือง=Optic 12 Core DW = 2.847 km.
BUN000235,(3802-62) ต.วังชมภู เกษตรรุ่งเรือง - (3802-63) ต.วังชมภู วังยาว=Optic 12 Core DW = 3.742 km.";
    }
else if($message == "3802-63"){
        $arrayPostData['messages'][0]['text'] = "BUN000235,(3802-62) ต.วังชมภู เกษตรรุ่งเรือง - (3802-63) ต.วังชมภู วังยาว=Optic 12 Core DW = 3.742 km.";
    }
else if($message == "3802-64"){
        $arrayPostData['messages'][0]['text'] = "BUN000236,(3802-57) สร้างคำ - (3802-64) ต.วังชมภู บุ่งกล้า=Optic 12 Core DW = 4.887 km.";
    }
else if($message == "3802-65"){
        $arrayPostData['messages'][0]['text'] = "BUN000260,(3802-54) ดงเสียด - (3802-65) หนองบัวน้อย ต.วังชมภู=Optic 12 Core DW = 5.277 km.";
    }
else if($message == "3802-66"){
          $arrayPostData['messages'][0]['text'] = "BUN000141,(3807-99) ต.คำนาดี นาเจริญ - (3802-66) ต.หนองหัวช้าง โนนสง่า=Optic 12 Core DW = 3.96 km.
BUN000287,(3802-66) ต.หนองหัวช้าง โนนสง่า - (3802-82) ต.หนองหัวช้าง โนนสวรรค์=Optic 12 Core DW = 6.998 km.";
    }
else if($message == "3802-68"){
        $arrayPostData['messages'][0]['text'] = "BUN000233,(sj) sj - (3802-68) ต.ศรีสำราญ นาคำ=Optic 12 Core DW = 1.53 km.";
    }
else if($message == "3802-69"){
          $arrayPostData['messages'][0]['text'] = "BUN000154,(3802-45) หนองหัวช้าง - (3802-69) ต.ศรีสำราญ โนนสะอาด=Optic 12 Core DW = 2.994 km.
BUN000187,(3802-69) ต.ศรีสำราญ โนนสะอาด - (3802-71) ต.ศรีสำราญ โนนสว่าง=Optic 12 Core DW = 1.46 km.";
    }
else if($message == "3802-70"){
        $arrayPostData['messages'][0]['text'] = "BUN000189,(3802-71) ต.ศรีสำราญ โนนสว่าง - (3802-70) ต.ศรีสำราญ โชคชัย=Optic 12 Core DW = 3.985 km.";
    }
else if($message == "3802-71"){
          $arrayPostData['messages'][0]['text'] = "BUN000187,(3802-69) ต.ศรีสำราญ โนนสะอาด - (3802-71) ต.ศรีสำราญ โนนสว่าง=Optic 12 Core DW = 1.46 km.
BUN000189,(3802-71) ต.ศรีสำราญ โนนสว่าง - (3802-70) ต.ศรีสำราญ โชคชัย=Optic 12 Core DW = 3.985 km.";
    }
else if($message == "3802-78"){
        $arrayPostData['messages'][0]['text'] = "BUN000286,(3802-37) ตลาดพรเจริญ - (3802-78) ต.พรเจริญ โหนดไปรษณีย์=Optic 12 Core DW = 1.136 km.";
    }
else if($message == "3802-82"){
        $arrayPostData['messages'][0]['text'] = "BUN000287,(3802-66) ต.หนองหัวช้าง โนนสง่า - (3802-82) ต.หนองหัวช้าง โนนสวรรค์=Optic 12 Core DW = 6.998 km.";
    }
else if($message == "3803-102"){
        $arrayPostData['messages'][0]['text'] = "BUN000288,(3803-66) บึงโขงหลง4 - (3803-102) บ้านทรายทอง=Optic 12 Core DW = 1.555 km.";
    }
else if($message == "3803-103"){
        $arrayPostData['messages'][0]['text'] = "BUN000289,(3803-84) โสกพอก2 - (3803-103) โสกพอก2=Optic 12 Core DW = 1.835 km.";
    }
else if($message == "3803-61"){
          $arrayPostData['messages'][0]['text'] = "BUN000034,(3803-61) ME บึงโขงหลง - (3805-61) ME เซกา=12 Core= 13.091 km.
BUN000035,(3807-37) ME บึงกาฬ - (3803-61) ME บึงโขงหลง=12 Core= 93.186 km.
BUN000036,(3803-61) ME บึงโขงหลง - (3803-62) บึงโขงหลง2=Optic 12 Core DW = 1.563 km.
BUN000065,(SJ) SJ - (3803-61) บึงโขงหลง1=Optic 12 Core DW = 0.97 km.
BUN000068,(3803-61) บึงโขงหลง1 - (3803-67) โพธิ์หมากแข้ง=Optic 12 Core DW = 1.48 km.";
    }
else if($message == "3803-62"){
          $arrayPostData['messages'][0]['text'] = "BUN000036,(3803-61) ME บึงโขงหลง - (3803-62) บึงโขงหลง2=Optic 12 Core DW = 1.563 km.
BUN000037,(3803-62) บึงโขงหลง2 - (3803-65) บึงโขงหลง3=Optic 12 Core DW = 0.643 km.
BUN000274,(3803-62) บึงโขงหลง2 - (3803-66) บึงโขงหลง4=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3803-63"){
          $arrayPostData['messages'][0]['text'] = "BUN000066,(SJ) me บึงกาฬ - me บึงโขงหลง - (3803-63) ดงบัง1=Optic 12 Core DW = 0.448 km.
BUN000067,(3803-63) ดงบัง1 - (3803-64) ดงบัง2=Optic 12 Core DW = 2.052 km.
BUN000295,(3803-63) ดงบัง1 - (3803-90) ต.ดงบัง โนนสวาท=Optic 12 Core DW = 2.75 km.";
    }
else if($message == "3803-64"){
          $arrayPostData['messages'][0]['text'] = "BUN000067,(3803-63) ดงบัง1 - (3803-64) ดงบัง2=Optic 12 Core DW = 2.052 km.
BUN000069,(3803-64) ดงบัง2 - (3803-68) ท่าสีไค=Optic 12 Core DW = 3.6 km.
BUN000293,(3803-64) ดงบัง2 - (3803-87) ดงโทน=Optic 12 Core DW = 2.2 km.
BUN000294,(3803-64) ดงบัง2 - (3803-88) ต.ดงบัง บ้านเหล่าหลวง=Optic 12 Core DW = 1.55 km.";
    }
else if($message == "3803-65"){
        $arrayPostData['messages'][0]['text'] = "BUN000037,(3803-62) บึงโขงหลง2 - (3803-65) บึงโขงหลง3=Optic 12 Core DW = 0.643 km.";
    }
else if($message == "3803-66"){
          $arrayPostData['messages'][0]['text'] = "BUN000274,(3803-62) บึงโขงหลง2 - (3803-66) บึงโขงหลง4=Optic 12 Core DW = 1.5 km.
BUN000275,(3803-66) ME บึงกาฬ- SJ บึงกาฬคำตากล้า - (3803-93) ต.บึงโขงหลง โนนสวรรค์=Optic 12 Core DW = 3.189 km.
BUN000288,(3803-66) บึงโขงหลง4 - (3803-102) บ้านทรายทอง=Optic 12 Core DW = 1.555 km.";
    }
else if($message == "3803-67"){
          $arrayPostData['messages'][0]['text'] = "BUN000068,(3803-61) บึงโขงหลง1 - (3803-67) โพธิ์หมากแข้ง=Optic 12 Core DW = 1.48 km.
BUN000300,(3803-67) โพธิ์หมากแข้ง - (3803-97) ต.โพธิ์หมากแข้ง โนนสวรรค์=Optic 12 Core DW = 1.48 km.";
    }
else if($message == "3803-68"){
        $arrayPostData['messages'][0]['text'] = "BUN000069,(3803-64) ดงบัง2 - (3803-68) ท่าสีไค=Optic 12 Core DW = 3.6 km.";
    }
else if($message == "3803-69"){
          $arrayPostData['messages'][0]['text'] = "BUN000055,(3803-69) ดงชมภู - (3803-77) ดงชมภูน้อย=Optic 12 Core DW = 2.69 km.
BUN000268,(SJ) ME บึงกาฬ-ME บึงโขงหลง - (3803-69) ดงชมภู=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3803-71"){
          $arrayPostData['messages'][0]['text'] = "BUN000070,(3803-71) ท่าดอกคำ - (3803-73) บ้านท่าไร่=Optic 12 Core DW = 2.9 km.
BUN000269,(SJ) ME บึงกาฬ-ME บึงโขงหลง - (3803-71) ท่าดอกคำ=Optic 12 Core DW = 2.1 km.
BUN000291,(3803-71) บ้านท่าดอกคำ - (3803-85) หนองแสง=Optic 12 Core DW = 2.02 km.";
    }
else if($message == "3803-73"){
          $arrayPostData['messages'][0]['text'] = "BUN000054,(3803-73) บ้านท่าไร่ ไทยเจริญ - (3803-76) บ้านโชคอำนวย=Optic 12 Core DW = 4.7 km.
BUN000070,(3803-71) ท่าดอกคำ - (3803-73) บ้านท่าไร่=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3803-74"){
        $arrayPostData['messages'][0]['text'] = "BUN000071,(SJ) บึงกาฬ-ดงบัง - (3803-74) เหล่าหมากผาง=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3803-75"){
        $arrayPostData['messages'][0]['text'] = "BUN000290,(SJ) ME บึงกาฬ-ME บึงโขงหลง - (3803-75) บ้านโนนสา=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3803-76"){
          $arrayPostData['messages'][0]['text'] = "BUN000054,(3803-73) บ้านท่าไร่ ไทยเจริญ - (3803-76) บ้านโชคอำนวย=Optic 12 Core DW = 4.7 km.
BUN000292,(3803-76) โชคอำนวย - (3803-86) หนองฮูฝอยลม=Optic 12 Core DW = 3.11 km.
BUN000296,(3803-76) โชคอำนวย - (3803-91) ต.ดงบัง โนนสมบูรณ์=Optic 12 Core DW = 2.915 km.";
    }
else if($message == "3803-77"){
        $arrayPostData['messages'][0]['text'] = "BUN000055,(3803-69) ดงชมภู - (3803-77) ดงชมภูน้อย=Optic 12 Core DW = 2.69 km.";
    }
else if($message == "3803-78"){
          $arrayPostData['messages'][0]['text'] = "BUN000072,(3803-81) โนนจำปาทอง - (3803-78) บ้านคำสมบูรณ์=Optic 12 Core DW = 4.56 km.
BUN000102,(3805-93) ดอนสวรรค์ - (3803-78) คำสมบูรณ์=Optic 12 Core DW = 3.8 km.";
    }
else if($message == "3803-81"){
        $arrayPostData['messages'][0]['text'] = "BUN000072,(3803-81) โนนจำปาทอง - (3803-78) บ้านคำสมบูรณ์=Optic 12 Core DW = 4.56 km.";
    }
else if($message == "3803-83"){
        $arrayPostData['messages'][0]['text'] = "BUN000138,(3803-83) บ้านเหล่า - (3805-77) สันกำแพง=Optic 12 Core DW = 3.37 km.";
    }
else if($message == "3803-84"){
          $arrayPostData['messages'][0]['text'] = "BUN000101,(3805-95) โสกก่าม - (3803-84) โสกพอง=Optic 12 Core DW = 3.5 km.
BUN000289,(3803-84) โสกพอก2 - (3803-103) โสกพอก2=Optic 12 Core DW = 1.835 km.
BUN000297,(3803-84) โสกพอก2 - (3803-94) ต.บึงโขงหลง โนนสวนปอ=Optic 12 Core DW = 2.901 km.";
    }
else if($message == "3803-85"){
        $arrayPostData['messages'][0]['text'] = "BUN000291,(3803-71) บ้านท่าดอกคำ - (3803-85) หนองแสง=Optic 12 Core DW = 2.02 km.";
    }
else if($message == "3803-86"){
        $arrayPostData['messages'][0]['text'] = "BUN000292,(3803-76) โชคอำนวย - (3803-86) หนองฮูฝอยลม=Optic 12 Core DW = 3.11 km.";
    }
else if($message == "3803-87"){
        $arrayPostData['messages'][0]['text'] = "BUN000293,(3803-64) ดงบัง2 - (3803-87) ดงโทน=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3803-88"){
        $arrayPostData['messages'][0]['text'] = "BUN000294,(3803-64) ดงบัง2 - (3803-88) ต.ดงบัง บ้านเหล่าหลวง=Optic 12 Core DW = 1.55 km.";
    }
else if($message == "3803-90"){
        $arrayPostData['messages'][0]['text'] = "BUN000295,(3803-63) ดงบัง1 - (3803-90) ต.ดงบัง โนนสวาท=Optic 12 Core DW = 2.75 km.";
    }
else if($message == "3803-91"){
        $arrayPostData['messages'][0]['text'] = "BUN000296,(3803-76) โชคอำนวย - (3803-91) ต.ดงบัง โนนสมบูรณ์=Optic 12 Core DW = 2.915 km.";
    }
else if($message == "3803-93"){
        $arrayPostData['messages'][0]['text'] = "BUN000275,(3803-66) ME บึงกาฬ- SJ บึงกาฬคำตากล้า - (3803-93) ต.บึงโขงหลง โนนสวรรค์=Optic 12 Core DW = 3.189 km.";
    }
else if($message == "3803-94"){
          $arrayPostData['messages'][0]['text'] = "BUN000297,(3803-84) โสกพอก2 - (3803-94) ต.บึงโขงหลง โนนสวนปอ=Optic 12 Core DW = 2.901 km.
BUN000298,(3803-94) ต.บึงโขงหลง โนนสวนปอ - (3803-95) ต.บึงโขงหลง เทพบันดาล=Optic 12 Core DW = 1.935 km.";
    }
else if($message == "3803-95"){
        $arrayPostData['messages'][0]['text'] = "BUN000298,(3803-94) ต.บึงโขงหลง โนนสวนปอ - (3803-95) ต.บึงโขงหลง เทพบันดาล=Optic 12 Core DW = 1.935 km.";
    }
else if($message == "3803-96"){
        $arrayPostData['messages'][0]['text'] = "BUN000299,(3805-144) ต.โสกก่าม บ่อพนา - (3803-96) ต.บึงโขงหลง ห้วยหินลาด=Optic 12 Core DW = 2.87 km.";
    }
else if($message == "3803-97"){
          $arrayPostData['messages'][0]['text'] = "BUN000300,(3803-67) โพธิ์หมากแข้ง - (3803-97) ต.โพธิ์หมากแข้ง โนนสวรรค์=Optic 12 Core DW = 1.48 km.
BUN000301,(3803-97) ต.โพธิ์หมากแข้ง โนนสวรรค์ - (3803-98) ต.โพธิ์หมากแข้ง บัวโคก=Optic 12 Core DW = 3.515 km.";
    }
else if($message == "3803-98"){
          $arrayPostData['messages'][0]['text'] = "BUN000301,(3803-97) ต.โพธิ์หมากแข้ง โนนสวรรค์ - (3803-98) ต.โพธิ์หมากแข้ง บัวโคก=Optic 12 Core DW = 3.515 km.
BUN000302,(3803-98) ต.โพธิ์หมากแข้ง บัวโคก - (3803-99) ต.โพธิ์หมากแข้ง นาอ่าง=12 Core= 6.651 km.";
    }
else if($message == "3803-99"){
        $arrayPostData['messages'][0]['text'] = "BUN000302,(3803-98) ต.โพธิ์หมากแข้ง บัวโคก - (3803-99) ต.โพธิ์หมากแข้ง นาอ่าง=12 Core= 6.651 km.";
    }
else if($message == "3804-102"){
          $arrayPostData['messages'][0]['text'] = "BUN000226,(sj) sj - (3804-102) ต.ถ้ำเจริญ หนองแวง=Optic 12 Core DW = 2.79 km.
BUN000227,(3804-102) ต.ถ้ำเจริญ หนองแวง - (3804-99) ต.ถ้ำเจริญ โนนสว่าง=Optic 12 Core DW = 3.28 km.";
    }
else if($message == "3804-103"){
          $arrayPostData['messages'][0]['text'] = "BUN000223,(3804-106) ต.ถ้ำเจริญ ห้วยสะอาด - (3804-103) ต.ถ้ำเจริญ ถ้ำเจริญ=Optic 12 Core DW = 3.76 km.
BUN000254,(3804-103) ต.ถ้ำเจริญ ถ้าเจริญ - (3804-131) ต.ศรีชมภู สามแยกศรีชมภู=Optic 12 Core DW = 2.42 km.";
    }
else if($message == "3804-104"){
          $arrayPostData['messages'][0]['text'] = "BUN000148,(3804-106) บ้านห้วยสะอาด - (3804-104) บ้านขี้เหล็กน้อย=Optic 12 Core DW = 3.4 km.
BUN000224,(3804-104) ต.ถ้ำเจริญ ขี้เหล็กน้อย - (3804-105) ต.ถ้ำเจริญ โคกกระแซ=Optic 12 Core DW = 2.07 km.";
    }
else if($message == "3804-105"){
        $arrayPostData['messages'][0]['text'] = "BUN000224,(3804-104) ต.ถ้ำเจริญ ขี้เหล็กน้อย - (3804-105) ต.ถ้ำเจริญ โคกกระแซ=Optic 12 Core DW = 2.07 km.";
    }
else if($message == "3804-106"){
          $arrayPostData['messages'][0]['text'] = "BUN000148,(3804-106) บ้านห้วยสะอาด - (3804-104) บ้านขี้เหล็กน้อย=Optic 12 Core DW = 3.4 km.
BUN000150,(3804-106) บ้านห้วยสะอาด - (3804-107) บ้านศรีนาวา=Optic 12 Core DW = 4.47 km.
BUN000151,(3804-85) บ้านโนนเค็ง - (3804-106) บ้านห้วยสะอาด=12 Core= 6.2 km.
BUN000223,(3804-106) ต.ถ้ำเจริญ ห้วยสะอาด - (3804-103) ต.ถ้ำเจริญ ถ้ำเจริญ=Optic 12 Core DW = 3.76 km.";
    }
else if($message == "3804-107"){
        $arrayPostData['messages'][0]['text'] = "BUN000150,(3804-106) บ้านห้วยสะอาด - (3804-107) บ้านศรีนาวา=Optic 12 Core DW = 4.47 km.";
    }
else if($message == "3804-108"){
          $arrayPostData['messages'][0]['text'] = "BUN000143,(3804-122) บ้านโนนแก้ว - (3804-108) บ้านโนนป่าบาก=Optic 12 Core DW = 3.03 km.
BUN000144,(3804-108) บ้านโนนป่าบาก - (3804-109) บ้านตูม=Optic 12 Core DW = 2.54 km.";
    }
else if($message == "3804-109"){
          $arrayPostData['messages'][0]['text'] = "BUN000144,(3804-108) บ้านโนนป่าบาก - (3804-109) บ้านตูม=Optic 12 Core DW = 2.54 km.
BUN000145,(3804-109) บ้านตูม - (3804-111) บ้านท่าคำรวม=Optic 12 Core DW = 2.595 km.";
    }
else if($message == "3804-111"){
        $arrayPostData['messages'][0]['text'] = "BUN000145,(3804-109) บ้านตูม - (3804-111) บ้านท่าคำรวม=Optic 12 Core DW = 2.595 km.";
    }
else if($message == "3804-112"){
        $arrayPostData['messages'][0]['text'] = "BUN000182,(3804-111) ต.บัวตูม ท่าคำราม - (3804-112) ต.บัวตูม สามหนอง=Optic 12 Core DW = 4.32 km.";
    }
else if($message == "3804-113"){
          $arrayPostData['messages'][0]['text'] = "BUN000181,(3804-73) ต.หนองพันทา โนนม่วง - (3804-113) ต.บัวตูม โนนอุดม=12 Core= 6.635 km.
BUN000183,(3804-113) ต.บัวตูม โนนอุดม - (3804-114) ต.บัวตูม หนองนาดี=Optic 12 Core DW = 1.98 km.";
    }
else if($message == "3804-114"){
        $arrayPostData['messages'][0]['text'] = "BUN000183,(3804-113) ต.บัวตูม โนนอุดม - (3804-114) ต.บัวตูม หนองนาดี=Optic 12 Core DW = 1.98 km.";
    }
else if($message == "3804-115"){
          $arrayPostData['messages'][0]['text'] = "BUN000152,(3804-115) บ้านนาขาม - (3807-117) บ้านคลองเค็ม=Optic 12 Core DW = 1.94 km.
BUN000220,(3804-121) ต.ศรีชมภู ชมภูพร - (3804-115) ต.ศรีชมภู นาขาม=Optic 12 Core DW = 3.96 km.
BUN000222,(3804-115) ต.ศรีชมภู นาขาม - (3804-116) ต.ศรีชมภู แสงอรุณ=Optic 12 Core DW = 2.86 km.
BUN000242,(3804-115) ต.ศรีชมภู นาขาม - (3806-60) ต.โนนศิลา พรสวรรค์=Optic 12 Core DW = 4.52 km.";
    }
else if($message == "3804-116"){
        $arrayPostData['messages'][0]['text'] = "BUN000222,(3804-115) ต.ศรีชมภู นาขาม - (3804-116) ต.ศรีชมภู แสงอรุณ=Optic 12 Core DW = 2.86 km.";
    }
else if($message == "3804-117"){
        $arrayPostData['messages'][0]['text'] = "BUN000219,(3804-118) ต.ศรีชมภู คำไผ่ - (3804-117) ต.ศรีชมภู หนองแวงประชาสรรค์=Optic 12 Core DW = 4.98 km.";
    }
else if($message == "3804-118"){
          $arrayPostData['messages'][0]['text'] = "BUN000112,(3804-118) ต.ศรีชมภู คำไผ่ - (3807-78) ห้วยกกต้อง=Optic 12 Core DW = 2.9 km.
BUN000219,(3804-118) ต.ศรีชมภู คำไผ่ - (3804-117) ต.ศรีชมภู หนองแวงประชาสรรค์=Optic 12 Core DW = 4.98 km.
BUN000221,(3807-78) ห้วยกกต้อง - (3804-118) ต.ศรีชมภู คำไผ่=Optic 12 Core DW = 3.06 km.";
    }
else if($message == "3804-119"){
        $arrayPostData['messages'][0]['text'] = "BUN000245,(3804-131) ต.ศรีชมภู สามแยกศรีชมภู - (3804-119) ต.ศรีชมภู โคกกลาง=Optic 12 Core DW = 3.49 km.";
    }
else if($message == "3804-121"){
          $arrayPostData['messages'][0]['text'] = "BUN000220,(3804-121) ต.ศรีชมภู ชมภูพร - (3804-115) ต.ศรีชมภู นาขาม=Optic 12 Core DW = 3.96 km.
BUN000243,(3804-132) ต.ศรีชมภู โพธิ์ - (3804-121) ต.ศรีชมภู ชมภูพร=Optic 12 Core DW = 2.993 km.";
    }
else if($message == "3804-122"){
          $arrayPostData['messages'][0]['text'] = "BUN000143,(3804-122) บ้านโนนแก้ว - (3804-108) บ้านโนนป่าบาก=Optic 12 Core DW = 3.03 km.
BUN000303,(3804-71) บ้านโนนโพธิ์ศรี - (3804-122) ต.หนองพันทา โนนแก้ว=Optic 12 Core DW = 2.43 km.";
    }
else if($message == "3804-124"){
          $arrayPostData['messages'][0]['text'] = "BUN000142,(3804-124) ต.เหล่าทอง เหล่าทอง - (3804-126) ต.เหล่าทอง ศรีอุบล=12 Core= 6.07 km.
BUN000237,(3804-124) ต.เหลาทอง เหล่าทอง - (3804-128) ต.เหล่าทอง ซำบอน=Optic 12 Core DW = 4.835 km.
BUN000244,(3804-72) หนองพันทา - (3804-124) ต.เหล่าทอง บ้านเหล่าทอง=Optic 12 Core DW = 3.18 km.";
    }
else if($message == "3804-125"){
        $arrayPostData['messages'][0]['text'] = "BUN000147,(3804-126) บ้านศรีอุบล - (3804-125) บ้านคลองทิพย์=Optic 12 Core DW = 1.985 km.";
    }
else if($message == "3804-126"){
          $arrayPostData['messages'][0]['text'] = "BUN000142,(3804-124) ต.เหล่าทอง เหล่าทอง - (3804-126) ต.เหล่าทอง ศรีอุบล=12 Core= 6.07 km.
BUN000147,(3804-126) บ้านศรีอุบล - (3804-125) บ้านคลองทิพย์=Optic 12 Core DW = 1.985 km.";
    }
else if($message == "3804-128"){
        $arrayPostData['messages'][0]['text'] = "BUN000237,(3804-124) ต.เหลาทอง เหล่าทอง - (3804-128) ต.เหล่าทอง ซำบอน=Optic 12 Core DW = 4.835 km.";
    }
else if($message == "3804-129"){
        $arrayPostData['messages'][0]['text'] = "BUN000252,(3804-84) ต.คำแก้ว หนองโด - (3804-129) ต.คำแก้ว บ้านดอนโพธิ์ทอง=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3804-131"){
          $arrayPostData['messages'][0]['text'] = "BUN000245,(3804-131) ต.ศรีชมภู สามแยกศรีชมภู - (3804-119) ต.ศรีชมภู โคกกลาง=Optic 12 Core DW = 3.49 km.
BUN000250,(3804-131) ต.ศรีชมภู สามแยกศรีชมภู - (3804-132) ต.ศรีชมภู โพธิ์=Optic 12 Core DW = 2.22 km.
BUN000254,(3804-103) ต.ถ้ำเจริญ ถ้าเจริญ - (3804-131) ต.ศรีชมภู สามแยกศรีชมภู=Optic 12 Core DW = 2.42 km.";
    }
else if($message == "3804-132"){
          $arrayPostData['messages'][0]['text'] = "BUN000243,(3804-132) ต.ศรีชมภู โพธิ์ - (3804-121) ต.ศรีชมภู ชมภูพร=Optic 12 Core DW = 2.993 km.
BUN000250,(3804-131) ต.ศรีชมภู สามแยกศรีชมภู - (3804-132) ต.ศรีชมภู โพธิ์=Optic 12 Core DW = 2.22 km.";
    }
else if($message == "3804-134"){
        $arrayPostData['messages'][0]['text'] = "BUN000304,(3802-43) บ้านท่าศรีชมชื่น - (3804-134) ศรีประมวล=Optic 12 Core DW = 0.985 km.";
    }
else if($message == "3804-49"){
        $arrayPostData['messages'][0]['text'] = "BUN000149,(3804-49) บ้านดงน้อย - (3806-76) บ้านชัยเจริญ=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3804-63"){
          $arrayPostData['messages'][0]['text'] = "BUN000056,(3804-63) ME โซ่พิสัย - (3804-65) โซ่พิสัย3=Optic 12 Core DW = 1.4 km.
BUN000057,(3804-63) ME โซ่พิสัย - (3804-66) โซ่พิสัย4=Optic 12 Core DW = 1.72 km.
BUN000095,(3214-62) ME เฝ้าไร่ - (3804-63) ME โซ่พิสัย=12 Core= 22.851 km.
BUN000096,(3804-63) ME โซ่พิสัย - (3806-38) ME ปากคาด=12 Core= 35.381 km.
BUN000097,(3802-31) ME พรเจริญ - (3804-63) ME โซ่พิสัย=12 Core= 38.851 km.
BUN000123,(3804-63) โซ่พิสัย 1 - (3804-64) โซ่พิสัย 2=Optic 12 Core DW = 2.2 km.";
    }
else if($message == "3804-64"){
          $arrayPostData['messages'][0]['text'] = "BUN000123,(3804-63) โซ่พิสัย 1 - (3804-64) โซ่พิสัย 2=Optic 12 Core DW = 2.2 km.
BUN000184,(3804-64) โซ่พิสัย 2 - (3804-94) ต.โซ่ อ่างทอง=Optic 12 Core DW = 1.365 km.";
    }
else if($message == "3804-65"){
        $arrayPostData['messages'][0]['text'] = "BUN000056,(3804-63) ME โซ่พิสัย - (3804-65) โซ่พิสัย3=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3804-66"){
        $arrayPostData['messages'][0]['text'] = "BUN000057,(3804-63) ME โซ่พิสัย - (3804-66) โซ่พิสัย4=Optic 12 Core DW = 1.72 km.";
    }
else if($message == "3804-69"){
        $arrayPostData['messages'][0]['text'] = "BUN000132,(3806-52) บะยาว - (3804-69) ห้วยลึก=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3804-70"){
        $arrayPostData['messages'][0]['text'] = "BUN000131,(3804-70) โพนทอง - (3804-71) โนนโพธิ์ศรี=Optic 12 Core DW = 1.95 km.";
    }
else if($message == "3804-71"){
          $arrayPostData['messages'][0]['text'] = "BUN000131,(3804-70) โพนทอง - (3804-71) โนนโพธิ์ศรี=Optic 12 Core DW = 1.95 km.
BUN000303,(3804-71) บ้านโนนโพธิ์ศรี - (3804-122) ต.หนองพันทา โนนแก้ว=Optic 12 Core DW = 2.43 km.";
    }
else if($message == "3804-72"){
          $arrayPostData['messages'][0]['text'] = "BUN000130,(3804-72) หนองพันทา - (3804-73) โนนม่วง=Optic 12 Core DW = 1.72 km.
BUN000244,(3804-72) หนองพันทา - (3804-124) ต.เหล่าทอง บ้านเหล่าทอง=Optic 12 Core DW = 3.18 km.
BUN000305,(SJ) ME ปากคาด-ME โซ่พิสัย - (3804-72) บ้านหนองพันทา=Optic 12 Core DW = 0.32 km.";
    }
else if($message == "3804-73"){
          $arrayPostData['messages'][0]['text'] = "BUN000130,(3804-72) หนองพันทา - (3804-73) โนนม่วง=Optic 12 Core DW = 1.72 km.
BUN000181,(3804-73) ต.หนองพันทา โนนม่วง - (3804-113) ต.บัวตูม โนนอุดม=12 Core= 6.635 km.";
    }
else if($message == "3804-83"){
          $arrayPostData['messages'][0]['text'] = "BUN000247,(sj) sj - (3804-83) ต.คำแก้ว บ้านคำแก้ว=Optic 12 Core DW = 0.735 km.
BUN000248,(3804-83) ต.คำแก้ว บ้านคำแก้ว - (3804-84) ต.คำแก้ว หนองโด=Optic 12 Core DW = 2.94 km.";
    }
else if($message == "3804-84"){
          $arrayPostData['messages'][0]['text'] = "BUN000228,(3804-84) ต.คำแก้ว โนนเค็ง - (3804-87) ต.คำแก้ว นางวงสุ่ม=Optic 12 Core DW = 2.03 km.
BUN000248,(3804-83) ต.คำแก้ว บ้านคำแก้ว - (3804-84) ต.คำแก้ว หนองโด=Optic 12 Core DW = 2.94 km.
BUN000252,(3804-84) ต.คำแก้ว หนองโด - (3804-129) ต.คำแก้ว บ้านดอนโพธิ์ทอง=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3804-85"){
          $arrayPostData['messages'][0]['text'] = "BUN000151,(3804-85) บ้านโนนเค็ง - (3804-106) บ้านห้วยสะอาด=12 Core= 6.2 km.
BUN000230,(3804-86) ต.คำแก้ว โนนสะแบง - (3804-85) ต.คำแก้ว โนนเค็ง=Optic 12 Core DW = 3.04 km.";
    }
else if($message == "3804-86"){
        $arrayPostData['messages'][0]['text'] = "BUN000230,(3804-86) ต.คำแก้ว โนนสะแบง - (3804-85) ต.คำแก้ว โนนเค็ง=Optic 12 Core DW = 3.04 km.";
    }
else if($message == "3804-87"){
          $arrayPostData['messages'][0]['text'] = "BUN000228,(3804-84) ต.คำแก้ว โนนเค็ง - (3804-87) ต.คำแก้ว นางวงสุ่ม=Optic 12 Core DW = 2.03 km.
BUN000229,(3804-87) ต.คำแก้ว นางวงสุ่ม - (3804-88) ต.คำแก้ว ห้วยเนียม=Optic 12 Core DW = 2.675 km.";
    }
else if($message == "3804-88"){
        $arrayPostData['messages'][0]['text'] = "BUN000229,(3804-87) ต.คำแก้ว นางวงสุ่ม - (3804-88) ต.คำแก้ว ห้วยเนียม=Optic 12 Core DW = 2.675 km.";
    }
else if($message == "3804-89"){
        $arrayPostData['messages'][0]['text'] = "BUN000306,(SJ) ME โซ่พิสัย-ME พรเจริญ - (3804-89) ต.คำแก้ว ท่าเรือ=Optic 12 Core DW = 0.645 km.";
    }
else if($message == "3804-90"){
          $arrayPostData['messages'][0]['text'] = "BUN000188,(3804-90) ต.โซ่ โนนภูดิน - (3804-92) ต.โซ่ ทรายงาม=Optic 12 Core DW = 1.3 km.
BUN000190,(3804-90) ต.โซ่ โนนภูดิน - (3804-93) ต.โซ่ โคกสะอาด=Optic 12 Core DW = 3.285 km.
BUN000225,(3804-90) ต.โซ่ บ้านโนนภูดืน - (3804-91) ต.โซ่ บ้านโนนมันปลา=Optic 12 Core DW = 4.97 km.
BUN000307,(SJ) ME เฝ้าไร่-ME โซ่พิสัย - (3804-90) ต.โซ่ โนนภูดิน=Optic 12 Core DW = 0.5 km.";
    }
else if($message == "3804-91"){
          $arrayPostData['messages'][0]['text'] = "BUN000186,(3804-91) ต.โซ่ โนนมันปลา - (3804-95) ต.โซ่ ห้วงสงคราม=Optic 12 Core DW = 1.13 km.
BUN000225,(3804-90) ต.โซ่ บ้านโนนภูดืน - (3804-91) ต.โซ่ บ้านโนนมันปลา=Optic 12 Core DW = 4.97 km.";
    }
else if($message == "3804-92"){
        $arrayPostData['messages'][0]['text'] = "BUN000188,(3804-90) ต.โซ่ โนนภูดิน - (3804-92) ต.โซ่ ทรายงาม=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3804-93"){
        $arrayPostData['messages'][0]['text'] = "BUN000190,(3804-90) ต.โซ่ โนนภูดิน - (3804-93) ต.โซ่ โคกสะอาด=Optic 12 Core DW = 3.285 km.";
    }
else if($message == "3804-94"){
        $arrayPostData['messages'][0]['text'] = "BUN000184,(3804-64) โซ่พิสัย 2 - (3804-94) ต.โซ่ อ่างทอง=Optic 12 Core DW = 1.365 km.";
    }
else if($message == "3804-95"){
        $arrayPostData['messages'][0]['text'] = "BUN000186,(3804-91) ต.โซ่ โนนมันปลา - (3804-95) ต.โซ่ ห้วงสงคราม=Optic 12 Core DW = 1.13 km.";
    }
else if($message == "3804-97"){
        $arrayPostData['messages'][0]['text'] = "BUN000185,(3084-98) ต.โซ่ ห้วยทราย - (3804-97) ต.โซ่ ท่าลี่=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3804-98"){
        $arrayPostData['messages'][0]['text'] = "BUN000308,(SJ) ME เฝ้าไร่-ME โซ่พิสัย - (3804-98) ต.โซ่ ห้วยทราย=Optic 12 Core DW = 1.365 km.";
    }
else if($message == "3804-99"){
        $arrayPostData['messages'][0]['text'] = "BUN000227,(3804-102) ต.ถ้ำเจริญ หนองแวง - (3804-99) ต.ถ้ำเจริญ โนนสว่าง=Optic 12 Core DW = 3.28 km.";
    }
else if($message == "3805-103"){
          $arrayPostData['messages'][0]['text'] = "BUN000155,(3805-105) บ้านดงสาร - (3805-103) บ้านท่าสำราญ=Optic 12 Core DW = 4.236 km.
BUN000156,(3805-103) บ้านท่าสำราญ - (3805-104) บ้านท่าเรือ=Optic 12 Core DW = 1.01 km.";
    }
else if($message == "3805-104"){
        $arrayPostData['messages'][0]['text'] = "BUN000156,(3805-103) บ้านท่าสำราญ - (3805-104) บ้านท่าเรือ=Optic 12 Core DW = 1.01 km.";
    }
else if($message == "3805-105"){
          $arrayPostData['messages'][0]['text'] = "BUN000155,(3805-105) บ้านดงสาร - (3805-103) บ้านท่าสำราญ=Optic 12 Core DW = 4.236 km.
BUN000159,(3805-97) บ้านโนนสง่า - (3805-105) บ้านดงสาร=Optic 12 Core DW = 4.375 km.";
    }
else if($message == "3805-106"){
          $arrayPostData['messages'][0]['text'] = "BUN000158,(3805-83) บ้านเหล่า - (3805-106) บ้านหนองยาง=Optic 12 Core DW = 1.165 km.
BUN000165,(3805-106) บ้านหนองยาง - (3805-118) บ้านดงไร่=Optic 12 Core DW = 1.553 km.";
    }
else if($message == "3805-107"){
          $arrayPostData['messages'][0]['text'] = "BUN000246,(3805-107) ต.เซกา บ้านสุขสมบูรณ์ - (3805-108) ต.เซกา บ้านโนนสูง=Optic 12 Core DW = 1.362 km.
BUN000249,(3805-63) เซกา 3 - (3805-107) ต.เซกา บ้านสุขสมบูรณ์=Optic 12 Core DW = 2.037 km.";
    }
else if($message == "3805-108"){
          $arrayPostData['messages'][0]['text'] = "BUN000164,(3805-108) บ้านโนนสูง - (3805-114) บ้านห้วยผักขะ=Optic 12 Core DW = 3.03 km.
BUN000246,(3805-107) ต.เซกา บ้านสุขสมบูรณ์ - (3805-108) ต.เซกา บ้านโนนสูง=Optic 12 Core DW = 1.362 km.";
    }
else if($message == "3805-109"){
        $arrayPostData['messages'][0]['text'] = "BUN000157,(3805-61) อ.เซกา - (3805-109) บ้านห้วยคอม=12 Core= 5.99 km.";
    }
else if($message == "3805-111"){
        $arrayPostData['messages'][0]['text'] = "BUN000160,(3805-112) บ้านเทพมงคล - (3805-111) บ้านห้วยเรือ=12 Core= 6.43 km.";
    }
else if($message == "3805-112"){
          $arrayPostData['messages'][0]['text'] = "BUN000160,(3805-112) บ้านเทพมงคล - (3805-111) บ้านห้วยเรือ=12 Core= 6.43 km.
BUN000309,(SJ) ME เซกา-ME บึงโขงหลง - (3805-112) ต.เซกา เทพมงคล=Optic 12 Core DW = 0.89 km.";
    }
else if($message == "3805-113"){
        $arrayPostData['messages'][0]['text'] = "BUN000310,(SJ) ME เซกา-ME บึงโขงหลง - (3805-113) ต.เซกา ทรัพย์วังทอง=Optic 12 Core DW = 4.759 km.";
    }
else if($message == "3805-114"){
          $arrayPostData['messages'][0]['text'] = "BUN000163,(3805-114) บ้านห้วยผักขะ - (3805-115) บ้านนางัว=Optic 12 Core DW = 3.435 km.
BUN000164,(3805-108) บ้านโนนสูง - (3805-114) บ้านห้วยผักขะ=Optic 12 Core DW = 3.03 km.
BUN000171,(3805-114) บ้านห้วยผักขะ - (3805-119) บ้านไทยเสรี=Optic 12 Core DW = 5.32 km.";
    }
else if($message == "3805-115"){
          $arrayPostData['messages'][0]['text'] = "BUN000161,(3805-115) บ้านนางัว - (3805-116) บ้านสายปัญญา=Optic 12 Core DW = 0.89 km.
BUN000162,(3805-115) บ้านนางัว - (3805-117) บ้านโนนเหมือนแอ=Optic 12 Core DW = 1.647 km.
BUN000163,(3805-114) บ้านห้วยผักขะ - (3805-115) บ้านนางัว=Optic 12 Core DW = 3.435 km.";
    }
else if($message == "3805-116"){
        $arrayPostData['messages'][0]['text'] = "BUN000161,(3805-115) บ้านนางัว - (3805-116) บ้านสายปัญญา=Optic 12 Core DW = 0.89 km.";
    }
else if($message == "3805-117"){
          $arrayPostData['messages'][0]['text'] = "BUN000162,(3805-115) บ้านนางัว - (3805-117) บ้านโนนเหมือนแอ=Optic 12 Core DW = 1.647 km.
BUN000166,(3805-117) บ้านโนนเหมือนแอ - (3805-129) บ้านน้ำจั้น=Optic 12 Core DW = 3.16 km.";
    }
else if($message == "3805-118"){
        $arrayPostData['messages'][0]['text'] = "BUN000165,(3805-106) บ้านหนองยาง - (3805-118) บ้านดงไร่=Optic 12 Core DW = 1.553 km.";
    }
else if($message == "3805-119"){
        $arrayPostData['messages'][0]['text'] = "BUN000171,(3805-114) บ้านห้วยผักขะ - (3805-119) บ้านไทยเสรี=Optic 12 Core DW = 5.32 km.";
    }
else if($message == "3805-121"){
        $arrayPostData['messages'][0]['text'] = "BUN000173,(3805-121) บ้านโพธิ์น้อย - (3805-122) บ้านหนองบัวแดง=Optic 12 Core DW = 1.72 km.";
    }
else if($message == "3805-122"){
        $arrayPostData['messages'][0]['text'] = "BUN000173,(3805-121) บ้านโพธิ์น้อย - (3805-122) บ้านหนองบัวแดง=Optic 12 Core DW = 1.72 km.";
    }
else if($message == "3805-123"){
          $arrayPostData['messages'][0]['text'] = "BUN000172,(3805-123) บ้านม่วงคัน - (3805-124) บ้านทรายทอง=Optic 12 Core DW = 1.06 km.
BUN000267,(3805-127) บ้านโนนสวาท - (3805-123) ต.ท่าสะอาด ม่วงคัน=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3805-124"){
        $arrayPostData['messages'][0]['text'] = "BUN000172,(3805-123) บ้านม่วงคัน - (3805-124) บ้านทรายทอง=Optic 12 Core DW = 1.06 km.";
    }
else if($message == "3805-125"){
        $arrayPostData['messages'][0]['text'] = "BUN000153,(3802-48) บ้านท่าสะอาด - (3805-125) บ้านยางชุม=Optic 12 Core DW = 3.155 km.";
    }
else if($message == "3805-126"){
        $arrayPostData['messages'][0]['text'] = "BUN000266,(3805-80) บ้านป่ากอ - (3805-126) บ้านตาลเดี่ยว=Optic 12 Core DW = 7.92 km.";
    }
else if($message == "3805-127"){
          $arrayPostData['messages'][0]['text'] = "BUN000267,(3805-127) บ้านโนนสวาท - (3805-123) ต.ท่าสะอาด ม่วงคัน=Optic 12 Core DW = 2.5 km.
BUN000311,(3802-48) ท่าสะอาด - (3805-127) ต.ท่าสะอาด โนนสวาท=Optic 12 Core DW = 1.195 km.";
    }
else if($message == "3805-128"){
        $arrayPostData['messages'][0]['text'] = "BUN000167,(3805-129) บ้านน้ำจั้น - (3805-128) บ้านท่าม่วง=Optic 12 Core DW = 2.01 km.";
    }
else if($message == "3805-129"){
          $arrayPostData['messages'][0]['text'] = "BUN000166,(3805-117) บ้านโนนเหมือนแอ - (3805-129) บ้านน้ำจั้น=Optic 12 Core DW = 3.16 km.
BUN000167,(3805-129) บ้านน้ำจั้น - (3805-128) บ้านท่าม่วง=Optic 12 Core DW = 2.01 km.
BUN000170,(3805-129) บ้านน้ำจั้น - (3805-131) บ้านหนองคล่า=Optic 12 Core DW = 3.32 km.
BUN000175,(3805-129) บ้านน้ำจั้น - (3805-134) บ้านดงกระพุง=Optic 12 Core DW = 2.27 km.";
    }
else if($message == "3805-131"){
          $arrayPostData['messages'][0]['text'] = "BUN000169,(3805-131) บ้านหนองคล่า - (3805-132) บ้านคำบอน=Optic 12 Core DW = 1.91 km.
BUN000170,(3805-129) บ้านน้ำจั้น - (3805-131) บ้านหนองคล่า=Optic 12 Core DW = 3.32 km.";
    }
else if($message == "3805-132"){
        $arrayPostData['messages'][0]['text'] = "BUN000169,(3805-131) บ้านหนองคล่า - (3805-132) บ้านคำบอน=Optic 12 Core DW = 1.91 km.";
    }
else if($message == "3805-133"){
        $arrayPostData['messages'][0]['text'] = "BUN000168,(3805-134) บ้านดงกระพุง - (3805-133) บ้านหนองนาแซง=Optic 12 Core DW = 1.31 km.";
    }
else if($message == "3805-134"){
          $arrayPostData['messages'][0]['text'] = "BUN000168,(3805-134) บ้านดงกระพุง - (3805-133) บ้านหนองนาแซง=Optic 12 Core DW = 1.31 km.
BUN000175,(3805-129) บ้านน้ำจั้น - (3805-134) บ้านดงกระพุง=Optic 12 Core DW = 2.27 km.";
    }
else if($message == "3805-135"){
          $arrayPostData['messages'][0]['text'] = "BUN000174,(3805-135) บ้านหนองตันเผือก - (3805-136) บ้านหนองปลาโด=Optic 12 Core DW = 2.61 km.
BUN000177,(3805-72) บ้านป่งไฮ - (3805-135) บ้านหนองตันเผือก=Optic 12 Core DW = 1.65 km.";
    }
else if($message == "3805-136"){
        $arrayPostData['messages'][0]['text'] = "BUN000174,(3805-135) บ้านหนองตันเผือก - (3805-136) บ้านหนองปลาโด=Optic 12 Core DW = 2.61 km.";
    }
else if($message == "3805-137"){
        $arrayPostData['messages'][0]['text'] = "BUN000312,(3805-92) โคกกระแซ - (3805-137) ต.บ้านต้อง โนนยางคำ=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3805-139"){
        $arrayPostData['messages'][0]['text'] = "BUN000176,(3805-156) บ้านดอนก่อ - (3805-139) บ้านหนองชัยวาน=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3805-141"){
        $arrayPostData['messages'][0]['text'] = "BUN000313,(3805-79) หนองแก่งทราย - (3805-141) ต.ป่งไฮ โนนหนามแท่ง=Optic 12 Core DW = 2.83 km.";
    }
else if($message == "3805-142"){
        $arrayPostData['messages'][0]['text'] = "BUN000314,(3805-79) หนองแก่งทราย - (3805-142) ต.ป่งไฮ สังคมพัฒนา=Optic 12 Core DW = 1.96 km.";
    }
else if($message == "3805-143"){
        $arrayPostData['messages'][0]['text'] = "BUN000315,(SJ) ต.ป่งไฮ บ้านโนนตาผา - (3805-143) ต.ป่งไฮ ท่าเชียงเครือ=Optic 12 Core DW = 1.6 km.";
    }
else if($message == "3805-144"){
          $arrayPostData['messages'][0]['text'] = "BUN000299,(3805-144) ต.โสกก่าม บ่อพนา - (3803-96) ต.บึงโขงหลง ห้วยหินลาด=Optic 12 Core DW = 2.87 km.
BUN000317,(3805-146) ต.โสกก่าม ดงสว่าง - (3805-144) ต.โสกก่าม บ่อพนา=Optic 12 Core DW = 4 km.";
    }
else if($message == "3805-145"){
          $arrayPostData['messages'][0]['text'] = "BUN000318,(3805-95) โสกก่าม - (3805-145) ต.โสกก่าม นาตาไก้=Optic 12 Core DW = 1.96 km.
BUN000320,(3805-145) ต.โสกก่าม นาตาไก้ - (3805-148) ต.โสกก่าม ยางเรียน=Optic 12 Core DW = 3.31 km.";
    }
else if($message == "3805-146"){
          $arrayPostData['messages'][0]['text'] = "BUN000317,(3805-146) ต.โสกก่าม ดงสว่าง - (3805-144) ต.โสกก่าม บ่อพนา=Optic 12 Core DW = 4 km.
BUN000319,(3805-148) ต.โสกก่าม ยางเรียน - (3805-146) ต.โสกก่าม ดงสว่าง=Optic 12 Core DW = 2.04 km.";
    }
else if($message == "3805-148"){
          $arrayPostData['messages'][0]['text'] = "BUN000319,(3805-148) ต.โสกก่าม ยางเรียน - (3805-146) ต.โสกก่าม ดงสว่าง=Optic 12 Core DW = 2.04 km.
BUN000320,(3805-145) ต.โสกก่าม นาตาไก้ - (3805-148) ต.โสกก่าม ยางเรียน=Optic 12 Core DW = 3.31 km.
BUN000321,(3805-148) ต.โสกก่าม ยางเรียน - (3805-149) โต.โสกก่าม โนนสำราญ=Optic 12 Core DW = 2.45 km.";
    }
else if($message == "3805-149"){
        $arrayPostData['messages'][0]['text'] = "BUN000321,(3805-148) ต.โสกก่าม ยางเรียน - (3805-149) โต.โสกก่าม โนนสำราญ=Optic 12 Core DW = 2.45 km.";
    }
else if($message == "3805-151"){
        $arrayPostData['messages'][0]['text'] = "BUN000322,(3805-83) บ้านเหล่า - (3805-151) ต.หนองทุ่ม ท่าแคนงาม=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3805-152"){
        $arrayPostData['messages'][0]['text'] = "BUN000323,(3805-71) บ้านทุ่ม - (3805-152) ต.หนองทุ่ม เหล่าสวนกล้วย=Optic 12 Core DW = 1.09 km.";
    }
else if($message == "3805-154"){
        $arrayPostData['messages'][0]['text'] = "BUN000324,(3805-71) บ้านทุ่ม - (3805-154) ต.หนองทุ่ม โคกก่อง=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3805-155"){
        $arrayPostData['messages'][0]['text'] = "BUN000251,(3805-99) ท่าดอกคูณ - (3805-155) ต.ท่ากกแดง บ้านโนนสวรรค์=Optic 12 Core DW = 1.407 km.";
    }
else if($message == "3805-156"){
        $arrayPostData['messages'][0]['text'] = "BUN000176,(3805-156) บ้านดอนก่อ - (3805-139) บ้านหนองชัยวาน=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3805-158"){
          $arrayPostData['messages'][0]['text'] = "BUN000316,(3805-158) ต.ท่าสะอาด ใหม่สามัคคี - (SJ) ต.ป่งไฮ บ้านโนนตาผา=Optic 12 Core DW = 4.7 km.
BUN000325,(3802-37) ME ตลาดพรเจริญ - (3805-158) ต.ท่าสะอาด ใหม่สามัคคี=Optic 12 Core DW = 4 km.";
    }
else if($message == "3805-159"){
        $arrayPostData['messages'][0]['text'] = "BUN000326,(3805-88) ทุ่งทรายจก - (3805-159) บ้านภูเงิน=Optic 12 Core DW = 0.821 km.";
    }
else if($message == "3805-162"){
        $arrayPostData['messages'][0]['text'] = "BUN000327,(3805-61) ME เซกา - (3805-162) ศรีพันนา=Optic 12 Core DW = 1.145 km.";
    }
else if($message == "3805-61"){
          $arrayPostData['messages'][0]['text'] = "BUN000034,(3803-61) ME บึงโขงหลง - (3805-61) ME เซกา=12 Core= 13.091 km.
BUN000038,(3805-61) ME เซกา - (3805-62) เซกา2=Optic 12 Core DW = 1.154 km.
BUN000039,(3805-61) ME เซกา - (3805-63) เซกา3=Optic 12 Core DW = 1.931 km.
BUN000098,(3805-64) ME ท่ากกแดง - (3805-61) ME เซกา=12 Core= 44.83 km.
BUN000157,(3805-61) อ.เซกา - (3805-109) บ้านห้วยคอม=12 Core= 5.99 km.
BUN000327,(3805-61) ME เซกา - (3805-162) ศรีพันนา=Optic 12 Core DW = 1.145 km.";
    }
else if($message == "3805-62"){
        $arrayPostData['messages'][0]['text'] = "BUN000038,(3805-61) ME เซกา - (3805-62) เซกา2=Optic 12 Core DW = 1.154 km.";
    }
else if($message == "3805-63"){
          $arrayPostData['messages'][0]['text'] = "BUN000039,(3805-61) ME เซกา - (3805-63) เซกา3=Optic 12 Core DW = 1.931 km.
BUN000249,(3805-63) เซกา 3 - (3805-107) ต.เซกา บ้านสุขสมบูรณ์=Optic 12 Core DW = 2.037 km.";
    }
else if($message == "3805-64"){
          $arrayPostData['messages'][0]['text'] = "BUN000058,(3805-64) ท่ากกแดง - (3805-70) บ้านหนองหิ้ง=Optic 12 Core DW = 1.5 km.
BUN000098,(3805-64) ME ท่ากกแดง - (3805-61) ME เซกา=12 Core= 44.83 km.
BUN000276,(SJ) ME เซกา-ME ท่ากกแดง - (3805-64) ท่ากกแดง=Optic 12 Core DW = 2.05 km.";
    }
else if($message == "3805-70"){
        $arrayPostData['messages'][0]['text'] = "BUN000058,(3805-64) ท่ากกแดง - (3805-70) บ้านหนองหิ้ง=Optic 12 Core DW = 1.5 km.";
    }
else if($message == "3805-71"){
          $arrayPostData['messages'][0]['text'] = "BUN000277,(SJ) ME เซกา-ME ท่ากกแดง - (3805-71) บ้านทุ่ม=Optic 12 Core DW = 1.2 km.
BUN000323,(3805-71) บ้านทุ่ม - (3805-152) ต.หนองทุ่ม เหล่าสวนกล้วย=Optic 12 Core DW = 1.09 km.
BUN000324,(3805-71) บ้านทุ่ม - (3805-154) ต.หนองทุ่ม โคกก่อง=Optic 12 Core DW = 2.06 km.";
    }
else if($message == "3805-72"){
          $arrayPostData['messages'][0]['text'] = "BUN000177,(3805-72) บ้านป่งไฮ - (3805-135) บ้านหนองตันเผือก=Optic 12 Core DW = 1.65 km.
BUN000328,(SJ) ME บึงกาฬ- SJ บึงกาฬคำตากล้า - (3805-72) ป่งไฮ=12 Core= 10.493 km.";
    }
else if($message == "3805-74"){
        $arrayPostData['messages'][0]['text'] = "BUN000329,(3805-97) โนนสง่า - (3805-74) ซาง=Optic 12 Core DW = 1.44 km.";
    }
else if($message == "3805-75"){
        $arrayPostData['messages'][0]['text'] = "BUN000330,(SJ) บ้านสันกำแพง-บ้านโนนสง่า - (3805-75) ซ่อมกอก=Optic 12 Core DW = 1.94 km.";
    }
else if($message == "3805-76"){
        $arrayPostData['messages'][0]['text'] = "BUN000137,(3805-77) สันกำแพง - (3805-76) โคกบริการ=Optic 12 Core DW = 2.02 km.";
    }
else if($message == "3805-77"){
          $arrayPostData['messages'][0]['text'] = "BUN000136,(3805-77) สันกำแพง - (3805-97) โนนสง่า=Optic 12 Core DW = 4.47 km.
BUN000137,(3805-77) สันกำแพง - (3805-76) โคกบริการ=Optic 12 Core DW = 2.02 km.
BUN000138,(3803-83) บ้านเหล่า - (3805-77) สันกำแพง=Optic 12 Core DW = 3.37 km.";
    }
else if($message == "3805-78"){
        $arrayPostData['messages'][0]['text'] = "BUN000257,(sj) หนองหิ้ง - (3805-78) ท่ากกแดง2=Optic 12 Core DW = 2.52 km.";
    }
else if($message == "3805-79"){
          $arrayPostData['messages'][0]['text'] = "BUN000073,(3805-81) หนองจิก - (3805-79) หนองแก่งทราย=Optic 12 Core DW = 3 km.
BUN000313,(3805-79) หนองแก่งทราย - (3805-141) ต.ป่งไฮ โนนหนามแท่ง=Optic 12 Core DW = 2.83 km.
BUN000314,(3805-79) หนองแก่งทราย - (3805-142) ต.ป่งไฮ สังคมพัฒนา=Optic 12 Core DW = 1.96 km.";
    }
else if($message == "3805-80"){
          $arrayPostData['messages'][0]['text'] = "BUN000266,(3805-80) บ้านป่ากอ - (3805-126) บ้านตาลเดี่ยว=Optic 12 Core DW = 7.92 km.
BUN000331,(SJ) ME บึงกาฬ- SJ บึงกาฬคำตากล้า - (3805-80) ป่าก่อ=Optic 12 Core DW = 1.547 km.";
    }
else if($message == "3805-81"){
          $arrayPostData['messages'][0]['text'] = "BUN000073,(3805-81) หนองจิก - (3805-79) หนองแก่งทราย=Optic 12 Core DW = 3 km.
BUN000139,(3805-82) กุดสิม - (3805-81) หนองจิก=Optic 12 Core DW = 4.92 km.";
    }
else if($message == "3805-82"){
          $arrayPostData['messages'][0]['text'] = "BUN000074,(3805-82) กุดสิม - (3805-83) บ้านเหล่า=Optic 12 Core DW = 1.98 km.
BUN000139,(3805-82) กุดสิม - (3805-81) หนองจิก=Optic 12 Core DW = 4.92 km.
BUN000332,(SJ) ME เซกา-ME ท่ากกแดง - (3805-82) กุดสิม=Optic 12 Core DW = 0.43 km.";
    }
else if($message == "3805-83"){
          $arrayPostData['messages'][0]['text'] = "BUN000074,(3805-82) กุดสิม - (3805-83) บ้านเหล่า=Optic 12 Core DW = 1.98 km.
BUN000158,(3805-83) บ้านเหล่า - (3805-106) บ้านหนองยาง=Optic 12 Core DW = 1.165 km.
BUN000322,(3805-83) บ้านเหล่า - (3805-151) ต.หนองทุ่ม ท่าแคนงาม=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3805-88"){
          $arrayPostData['messages'][0]['text'] = "BUN000116,(3805-88) ทุ่งทรายจก - (3807-83) นาต้อง=Optic 12 Core DW = 3.4 km.
BUN000326,(3805-88) ทุ่งทรายจก - (3805-159) บ้านภูเงิน=Optic 12 Core DW = 0.821 km.
BUN000333,(3807-82) คำภู - (3805-88) ทุ่งทรายจก=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3805-89"){
        $arrayPostData['messages'][0]['text'] = "BUN000075,(3805-89) บ้านดอนเสียด - (3805-90) ศิริพัฒน์=Optic 12 Core DW = 5.2 km.";
    }
else if($message == "3805-90"){
          $arrayPostData['messages'][0]['text'] = "BUN000075,(3805-89) บ้านดอนเสียด - (3805-90) ศิริพัฒน์=Optic 12 Core DW = 5.2 km.
BUN000076,(3805-90) ศิริพัฒน์ - (3805-91) โนนสวนหม่อน=Optic 12 Core DW = 3.45 km.";
    }
else if($message == "3805-91"){
          $arrayPostData['messages'][0]['text'] = "BUN000076,(3805-90) ศิริพัฒน์ - (3805-91) โนนสวนหม่อน=Optic 12 Core DW = 3.45 km.
BUN000077,(3805-91) โนนสวนหม่อน - (3805-92) โคกกระแซ=Optic 12 Core DW = 1.63 km.
BUN000079,(3805-91) โนนสวนหม่อน - (3805-94) บ้านคำชภู=Optic 12 Core DW = 3.7 km.
BUN000080,(3805-91) โนนสวนหม่อน - (3805-95) โสกก่าม=12 Core= 6.8 km.";
    }
else if($message == "3805-92"){
          $arrayPostData['messages'][0]['text'] = "BUN000077,(3805-91) โนนสวนหม่อน - (3805-92) โคกกระแซ=Optic 12 Core DW = 1.63 km.
BUN000078,(3805-92) โคกกระแซ - (3805-93) ดอนสวรรค์=12 Core= 5.56 km.
BUN000312,(3805-92) โคกกระแซ - (3805-137) ต.บ้านต้อง โนนยางคำ=Optic 12 Core DW = 1.7 km.";
    }
else if($message == "3805-93"){
          $arrayPostData['messages'][0]['text'] = "BUN000078,(3805-92) โคกกระแซ - (3805-93) ดอนสวรรค์=12 Core= 5.56 km.
BUN000102,(3805-93) ดอนสวรรค์ - (3803-78) คำสมบูรณ์=Optic 12 Core DW = 3.8 km.";
    }
else if($message == "3805-94"){
        $arrayPostData['messages'][0]['text'] = "BUN000079,(3805-91) โนนสวนหม่อน - (3805-94) บ้านคำชภู=Optic 12 Core DW = 3.7 km.";
    }
else if($message == "3805-95"){
          $arrayPostData['messages'][0]['text'] = "BUN000080,(3805-91) โนนสวนหม่อน - (3805-95) โสกก่าม=12 Core= 6.8 km.
BUN000101,(3805-95) โสกก่าม - (3803-84) โสกพอง=Optic 12 Core DW = 3.5 km.
BUN000318,(3805-95) โสกก่าม - (3805-145) ต.โสกก่าม นาตาไก้=Optic 12 Core DW = 1.96 km.";
    }
else if($message == "3805-97"){
          $arrayPostData['messages'][0]['text'] = "BUN000136,(3805-77) สันกำแพง - (3805-97) โนนสง่า=Optic 12 Core DW = 4.47 km.
BUN000159,(3805-97) บ้านโนนสง่า - (3805-105) บ้านดงสาร=Optic 12 Core DW = 4.375 km.
BUN000329,(3805-97) โนนสง่า - (3805-74) ซาง=Optic 12 Core DW = 1.44 km.";
    }
else if($message == "3805-99"){
          $arrayPostData['messages'][0]['text'] = "BUN000127,(3802-48) ท่าสะอาด - (3805-99) ท่าดอกคูณ=Optic 12 Core DW = 3.792 km.
BUN000251,(3805-99) ท่าดอกคูณ - (3805-155) ต.ท่ากกแดง บ้านโนนสวรรค์=Optic 12 Core DW = 1.407 km.";
    }
else if($message == "3806-37"){
          $arrayPostData['messages'][0]['text'] = "BUN000001,(3806-37) บขส.ปากคาด  - (3807-37) me บึงกาฬ=12 Core= 48.543 km.
BUN000006,(3806-37) บขส.ปากคาด - (3806-38) ไปรษณีย์ ปากคาด=Optic 12 Core DW = 0.684 km.
NKI000006,(3204-37) me โพนพิสัย - (3806-37) บขส.ปากคาด =12 Core= 47.903 km.";
    }
else if($message == "3806-38"){
          $arrayPostData['messages'][0]['text'] = "BUN000006,(3806-37) บขส.ปากคาด - (3806-38) ไปรษณีย์ ปากคาด=Optic 12 Core DW = 0.684 km.
BUN000007,(3806-38) ไปรษณีย์ ปากคาด - (3806-39) ที่ว่าการอำเภอ ปากคาด=Optic 12 Core DW = 1.254 km.
BUN000017,(3806-38) ไปรษณีย์ ปากคาด - (3806-41) บ้านท่าสวรรค์=Optic 12 Core DW = 0.835 km.
BUN000022,(3806-38) ไปรษณีย์ ปากคาด - (3806-43) ห้วยไม้ซอด=Optic 12 Core DW = 2.821 km.
BUN000096,(3804-63) ME โซ่พิสัย - (3806-38) ME ปากคาด=12 Core= 35.381 km.
BUN000278,(3806-38) ME ปากคาด - (3806-82) โนนเสเถียร2=Optic 12 Core DW = 5.487 km.";
    }
else if($message == "3806-39"){
          $arrayPostData['messages'][0]['text'] = "BUN000007,(3806-38) ไปรษณีย์ ปากคาด - (3806-39) ที่ว่าการอำเภอ ปากคาด=Optic 12 Core DW = 1.254 km.
BUN000008,(3806-39) ที่ว่าการอำเภอ ปากคาด - (3806-40) บขส.ปากคาด2=Optic 12 Core DW = 0.901 km.
BUN000018,(3806-39) ที่ว่าการอำเภอ ปากคาด - (3806-42) โรงพยาบาลปากคาด=Optic 12 Core DW = 1.095 km.
BUN000081,(3806-39) ที่ว่าการอำเภอ ปากคาด - (3806-47) บ้านไร่=Optic 12 Core DW = 2.255 km.";
    }
else if($message == "3806-40"){
        $arrayPostData['messages'][0]['text'] = "BUN000008,(3806-39) ที่ว่าการอำเภอ ปากคาด - (3806-40) บขส.ปากคาด2=Optic 12 Core DW = 0.901 km.";
    }
else if($message == "3806-41"){
          $arrayPostData['messages'][0]['text'] = "BUN000017,(3806-38) ไปรษณีย์ ปากคาด - (3806-41) บ้านท่าสวรรค์=Optic 12 Core DW = 0.835 km.
BUN000026,(3806-41) บ้านท่าสวรรค์ - (3806-45) ตลาดปากคาด=Optic 12 Core DW = 1.086 km.
BUN000202,(3806-41) บ้านท่าสวรรค์ - (3806-66) ต.ปากคาด เวินโดน=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3806-42"){
        $arrayPostData['messages'][0]['text'] = "BUN000018,(3806-39) ที่ว่าการอำเภอ ปากคาด - (3806-42) โรงพยาบาลปากคาด=Optic 12 Core DW = 1.095 km.";
    }
else if($message == "3806-43"){
          $arrayPostData['messages'][0]['text'] = "BUN000022,(3806-38) ไปรษณีย์ ปากคาด - (3806-43) ห้วยไม้ซอด=Optic 12 Core DW = 2.821 km.
BUN000031,(3806-43) ห้วยไม้ซอด - (3806-44) บ้านห้วยก้านเหลือง=Optic 12 Core DW = 5.066 km.
BUN000179,(3806-43) ห้วยไม้ซอด - (3806-65) ต.ปากคาด ห้วยน้ำคำ=12 Core= 5.465 km.";
    }
else if($message == "3806-44"){
          $arrayPostData['messages'][0]['text'] = "BUN000031,(3806-43) ห้วยไม้ซอด - (3806-44) บ้านห้วยก้านเหลือง=Optic 12 Core DW = 5.066 km.
BUN000336,(3806-44) ห้วยก้านเหลือง - (3806-78) ต.ปากคาด ห้วยก้านเหลืองน้อย=Optic 12 Core DW = 0.855 km.
BUN000338,(3806-44) ห้วยก้านเหลือง - (3806-86) ศรีรุ่งเรือง=Optic 12 Core DW = 1.085 km.";
    }
else if($message == "3806-45"){
        $arrayPostData['messages'][0]['text'] = "BUN000026,(3806-41) บ้านท่าสวรรค์ - (3806-45) ตลาดปากคาด=Optic 12 Core DW = 1.086 km.";
    }
else if($message == "3806-46"){
          $arrayPostData['messages'][0]['text'] = "BUN000030,() SJ ปากคาด-บึงกาฬ - (3806-46) บ้านโคกสะอาด=Optic 12 Core DW = 1.25 km.
BUN000193,(3806-46) บ้านโคกสะอาด - (3807-126) ต.หอคำ วังด่าน=Optic 12 Core DW = 3.315 km.
BUN000194,(3806-46) บ้านโคกสะอาด - (3807-124) ต.หอคำ หนองเข็ง=Optic 12 Core DW = 5.23 km.";
    }
else if($message == "3806-47"){
          $arrayPostData['messages'][0]['text'] = "BUN000081,(3806-39) ที่ว่าการอำเภอ ปากคาด - (3806-47) บ้านไร่=Optic 12 Core DW = 2.255 km.
BUN000133,(3806-47) บ้านไร่ - (3806-49) ดงน้อย=Optic 12 Core DW = 3.46 km.";
    }
else if($message == "3806-49"){
          $arrayPostData['messages'][0]['text'] = "BUN000133,(3806-47) บ้านไร่ - (3806-49) ดงน้อย=Optic 12 Core DW = 3.46 km.
BUN000337,(3806-49) บ้านดงน้อย - (3806-84) ต.นาดง โสกบง=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3806-52"){
          $arrayPostData['messages'][0]['text'] = "BUN000132,(3806-52) บะยาว - (3804-69) ห้วยลึก=Optic 12 Core DW = 1.85 km.
BUN000334,(SJ) ME บึงกาฬ- SJ บึงกาฬคำตากล้า - (3806-52) บ้านบะยาว=Optic 12 Core DW = 0.91 km.";
    }
else if($message == "3806-54"){
          $arrayPostData['messages'][0]['text'] = "BUN000208,(3806-54) ต.นากั้ง สุขประเสริฐ - (3806-55) ต.นากั้ง นากั้งพัฒนา=Optic 12 Core DW = 4.19 km.
BUN000335,(3806-65) ห้วยน้ำคำ - (3806-54) ต.นากั้ง สุขประเสริฐ=Optic 12 Core DW = 1.29 km.";
    }
else if($message == "3806-55"){
          $arrayPostData['messages'][0]['text'] = "BUN000207,(3806-55) ต.นากั้ง นากั้งพัฒนา - (3806-56) ต.นากั้ง นากลิ้ง=Optic 12 Core DW = 1.935 km.
BUN000208,(3806-54) ต.นากั้ง สุขประเสริฐ - (3806-55) ต.นากั้ง นากั้งพัฒนา=Optic 12 Core DW = 4.19 km.";
    }
else if($message == "3806-56"){
          $arrayPostData['messages'][0]['text'] = "BUN000191,(3806-56) ต.นากั้ง นากลิ้ง - (3806-77) ต.นากั้ง หนองบัว=Optic 12 Core DW = 1.81 km.
BUN000207,(3806-55) ต.นากั้ง นากั้งพัฒนา - (3806-56) ต.นากั้ง นากลิ้ง=Optic 12 Core DW = 1.935 km.";
    }
else if($message == "3806-57"){
        $arrayPostData['messages'][0]['text'] = "BUN000206,(3806-66) ต.ปากคาด เวินโดน - (3806-57) ต.นากั้ง ต้าย=Optic 12 Core DW = 4.38 km.";
    }
else if($message == "3806-58"){
        $arrayPostData['messages'][0]['text'] = "BUN000218,(3806-64) ต.โนนศิลา โนนเสถียร - (3806-58) ต.โนนศิลา ดาลบังบด=Optic 12 Core DW = 1.74 km.";
    }
else if($message == "3806-60"){
          $arrayPostData['messages'][0]['text'] = "BUN000240,(3806-60) ต.โนนศิลา พรสวรรค์ - (3806-61) ต.โนนศิลา ทุ่งรวยทอง=Optic 12 Core DW = 2.18 km.
BUN000241,(3806-60) ต.โนนศิลา พรสวรรค์ - (3806-62) ต.โนนศิลา ชัยพร=Optic 12 Core DW = 3.16 km.
BUN000242,(3804-115) ต.ศรีชมภู นาขาม - (3806-60) ต.โนนศิลา พรสวรรค์=Optic 12 Core DW = 4.52 km.";
    }
else if($message == "3806-61"){
          $arrayPostData['messages'][0]['text'] = "BUN000240,(3806-60) ต.โนนศิลา พรสวรรค์ - (3806-61) ต.โนนศิลา ทุ่งรวยทอง=Optic 12 Core DW = 2.18 km.
LEI000126,(3806-61) ME ภูเรือ - (3406-62) ภูเรือ 2 (รพ)=Optic 12 Core DW = 0.67 km.
LEI000127,(3806-61) ME ภูเรือ - (3406-63) ภูเรือ 3=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3806-62"){
          $arrayPostData['messages'][0]['text'] = "BUN000239,(3806-62) ต.โนนศิลา ชัยพร - (3806-63) ต.โนนศิลา โนนทรายทอง=Optic 12 Core DW = 4.12 km.
BUN000241,(3806-60) ต.โนนศิลา พรสวรรค์ - (3806-62) ต.โนนศิลา ชัยพร=Optic 12 Core DW = 3.16 km.";
    }
else if($message == "3806-63"){
        $arrayPostData['messages'][0]['text'] = "BUN000239,(3806-62) ต.โนนศิลา ชัยพร - (3806-63) ต.โนนศิลา โนนทรายทอง=Optic 12 Core DW = 4.12 km.";
    }
else if($message == "3806-64"){
          $arrayPostData['messages'][0]['text'] = "BUN000146,(sj) sj - (3806-64) บ้านโนนเสถียร=Optic 12 Core DW = 3 km.
BUN000218,(3806-64) ต.โนนศิลา โนนเสถียร - (3806-58) ต.โนนศิลา ดาลบังบด=Optic 12 Core DW = 1.74 km.";
    }
else if($message == "3806-65"){
          $arrayPostData['messages'][0]['text'] = "BUN000179,(3806-43) ห้วยไม้ซอด - (3806-65) ต.ปากคาด ห้วยน้ำคำ=12 Core= 5.465 km.
BUN000335,(3806-65) ห้วยน้ำคำ - (3806-54) ต.นากั้ง สุขประเสริฐ=Optic 12 Core DW = 1.29 km.";
    }
else if($message == "3806-66"){
          $arrayPostData['messages'][0]['text'] = "BUN000202,(3806-41) บ้านท่าสวรรค์ - (3806-66) ต.ปากคาด เวินโดน=Optic 12 Core DW = 3.96 km.
BUN000206,(3806-66) ต.ปากคาด เวินโดน - (3806-57) ต.นากั้ง ต้าย=Optic 12 Core DW = 4.38 km.";
    }
else if($message == "3806-67"){
        $arrayPostData['messages'][0]['text'] = "BUN000211,(3806-75) ต.สมสนุก บ้านโนนถวัลย์ - (3806-67) ต.สมสนุก บ้านสมสนุก=Optic 12 Core DW = 1.57 km.";
    }
else if($message == "3806-68"){
        $arrayPostData['messages'][0]['text'] = "BUN000210,(3806-71) ต.หนองยอง บ้านโคกก่อง - (3806-68) ต.สมสนุก หนองแวงใน=Optic 12 Core DW = 6.54 km.";
    }
else if($message == "3806-69"){
          $arrayPostData['messages'][0]['text'] = "BUN000209,(3806-74) ต.หนองยอง เจริญสว่าง - (3806-69) ต.สมสนุก ศรีสว่างพัฒนา=Optic 12 Core DW = 2.16 km.
BUN000253,(3806-69) ต.สมสนุก ศรีสว่างพัฒนา - (3806-75) ต.สมสนุก บ้านโนนถวัลย์=Optic 12 Core DW = 2.64 km.";
    }
else if($message == "3806-71"){
          $arrayPostData['messages'][0]['text'] = "BUN000210,(3806-71) ต.หนองยอง บ้านโคกก่อง - (3806-68) ต.สมสนุก หนองแวงใน=Optic 12 Core DW = 6.54 km.
BUN000255,(3806-71) ต.หนองยอง บ้านโคกก่อง - (3806-72) ต.หนองยอง โคกสว่าง=Optic 12 Core DW = 1.365 km.
BUN000261,(sj) sj - (3806-71) บ้านโคกก่อง ต.หนองยอง=Optic 12 Core DW = 0.225 km.";
    }
else if($message == "3806-72"){
          $arrayPostData['messages'][0]['text'] = "BUN000255,(3806-71) ต.หนองยอง บ้านโคกก่อง - (3806-72) ต.หนองยอง โคกสว่าง=Optic 12 Core DW = 1.365 km.
BUN000258,(3806-72) ต.หนองยอง โคกสว่าง - (3806-73) ต.หนองยอง บ้านโสกแวง=Optic 12 Core DW = 1.53 km.";
    }
else if($message == "3806-73"){
          $arrayPostData['messages'][0]['text'] = "BUN000180,(3806-73) ต.หนองยอง บ้านโสกแวง - (3806-74) ต.หนองยอง เจริญสว่าง=Optic 12 Core DW = 1.35 km.
BUN000258,(3806-72) ต.หนองยอง โคกสว่าง - (3806-73) ต.หนองยอง บ้านโสกแวง=Optic 12 Core DW = 1.53 km.";
    }
else if($message == "3806-74"){
          $arrayPostData['messages'][0]['text'] = "BUN000180,(3806-73) ต.หนองยอง บ้านโสกแวง - (3806-74) ต.หนองยอง เจริญสว่าง=Optic 12 Core DW = 1.35 km.
BUN000209,(3806-74) ต.หนองยอง เจริญสว่าง - (3806-69) ต.สมสนุก ศรีสว่างพัฒนา=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3806-75"){
          $arrayPostData['messages'][0]['text'] = "BUN000211,(3806-75) ต.สมสนุก บ้านโนนถวัลย์ - (3806-67) ต.สมสนุก บ้านสมสนุก=Optic 12 Core DW = 1.57 km.
BUN000253,(3806-69) ต.สมสนุก ศรีสว่างพัฒนา - (3806-75) ต.สมสนุก บ้านโนนถวัลย์=Optic 12 Core DW = 2.64 km.";
    }
else if($message == "3806-76"){
        $arrayPostData['messages'][0]['text'] = "BUN000149,(3804-49) บ้านดงน้อย - (3806-76) บ้านชัยเจริญ=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3806-77"){
        $arrayPostData['messages'][0]['text'] = "BUN000191,(3806-56) ต.นากั้ง นากลิ้ง - (3806-77) ต.นากั้ง หนองบัว=Optic 12 Core DW = 1.81 km.";
    }
else if($message == "3806-78"){
        $arrayPostData['messages'][0]['text'] = "BUN000336,(3806-44) ห้วยก้านเหลือง - (3806-78) ต.ปากคาด ห้วยก้านเหลืองน้อย=Optic 12 Core DW = 0.855 km.";
    }
else if($message == "3806-82"){
        $arrayPostData['messages'][0]['text'] = "BUN000278,(3806-38) ME ปากคาด - (3806-82) โนนเสเถียร2=Optic 12 Core DW = 5.487 km.";
    }
else if($message == "3806-84"){
        $arrayPostData['messages'][0]['text'] = "BUN000337,(3806-49) บ้านดงน้อย - (3806-84) ต.นาดง โสกบง=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3806-86"){
        $arrayPostData['messages'][0]['text'] = "BUN000338,(3806-44) ห้วยก้านเหลือง - (3806-86) ศรีรุ่งเรือง=Optic 12 Core DW = 1.085 km.";
    }
else if($message == "3807-101"){
        $arrayPostData['messages'][0]['text'] = "BUN000212,(3807-53) โคกก่อง - (3807-101) ต.โคกก่อง บ้านไร่สุขสันต์=12 Core= 0.672 km.";
    }
else if($message == "3807-103"){
          $arrayPostData['messages'][0]['text'] = "BUN000178,(3807-103) บ้านท่าอินทร์แปลง - (3807-128) ต.โคกก่อง โนนสา=12 Core= 5.201 km.
BUN000203,(sj) sj - (3807-103) ต.โคกก่อง ท่าอินแปลง=Optic 12 Core DW = 0.66 km.";
    }
else if($message == "3807-104"){
          $arrayPostData['messages'][0]['text'] = "BUN000199,(3807-104) ต.โคกก่อง นาคำ - (3807-105) ต.โคกก่อง โนนวังเยี่ยม=Optic 12 Core DW = 4.22 km.
BUN000204,(3807-128) ต.โคกก่อง โนนสา - (3807-104) ต.โคกก่อง นาคำ=Optic 12 Core DW = 3.33 km.";
    }
else if($message == "3807-105"){
        $arrayPostData['messages'][0]['text'] = "BUN000199,(3807-104) ต.โคกก่อง นาคำ - (3807-105) ต.โคกก่อง โนนวังเยี่ยม=Optic 12 Core DW = 4.22 km.";
    }
else if($message == "3807-106"){
        $arrayPostData['messages'][0]['text'] = "BUN000205,(sj) sj - (3807-106) ต.ชัยพร บังบาตร=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3807-107"){
        $arrayPostData['messages'][0]['text'] = "BUN000198,(3807-69) บ้านห้วยเซือมใต้ - (3807-107) ต.ชัยพร โนนสง่า=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3807-108"){
        $arrayPostData['messages'][0]['text'] = "BUN000231,(3807-89) หนองตอ - (3807-108) ต.นาสวรรค์ นาแวง=Optic 12 Core DW = 2.88 km.";
    }
else if($message == "3807-109"){
        $arrayPostData['messages'][0]['text'] = "BUN000256,(3807-58) บ้านทรายสาย - (3807-109) ต.โนนสมบูรณ์ บ้านโคกงาม=Optic 12 Core DW = 2.21 km.";
    }
else if($message == "3807-111"){
          $arrayPostData['messages'][0]['text'] = "BUN000263,(3807-111) โนนจำปา ต.โนนสมบูรณ์ - (3807-98) ชมภูทอง ต.คำนาดี=12 Core= 5.9 km.
BUN000264,(3807-84) กำแพงเพชร - (3807-111) โนนจำปา ต.โนนสมบูรณ์=Optic 12 Core DW = 4.523 km.";
    }
else if($message == "3807-112"){
        $arrayPostData['messages'][0]['text'] = "BUN000200,(sj) sj - (3807-112) ต.โนนสมบูรณ์ ดอนแก้ว=Optic 12 Core DW = 1.552 km.";
    }
else if($message == "3807-114"){
        $arrayPostData['messages'][0]['text'] = "BUN000201,(3807-79) บ้านหนองบัวบาน - (3807-114) ต.โป่งเปือย หนองตาไก้=Optic 12 Core DW = 2.895 km.";
    }
else if($message == "3807-115"){
        $arrayPostData['messages'][0]['text'] = "BUN000195,(3807-60) บ้านท่าโพธิ์ - (3807-115) ต.เมืองบึ่งกาฬ ดงหมากยาง=Optic 12 Core DW = 2.04 km.";
    }
else if($message == "3807-117"){
          $arrayPostData['messages'][0]['text'] = "BUN000152,(3804-115) บ้านนาขาม - (3807-117) บ้านคลองเค็ม=Optic 12 Core DW = 1.94 km.
BUN000349,(3807-117) คลองเค็ม - (3807-162) คลองเค็ม2=Optic 12 Core DW = 1.21 km.";
    }
else if($message == "3807-119"){
        $arrayPostData['messages'][0]['text'] = "BUN000197,(3807-121) ต.หอคำ นาโซ่ - (3807-119) ต.หอคำ สมประสงค์=Optic 12 Core DW = 2.77 km.";
    }
else if($message == "3807-121"){
          $arrayPostData['messages'][0]['text'] = "BUN000197,(3807-121) ต.หอคำ นาโซ่ - (3807-119) ต.หอคำ สมประสงค์=Optic 12 Core DW = 2.77 km.
BUN000265,(3807-87) บ้านหนองบัวทอง - (3807-121) ต.หอคำ นาโซ่=Optic 12 Core DW = 3.28 km.";
    }
else if($message == "3807-122"){
        $arrayPostData['messages'][0]['text'] = "BUN000196,(3807-87) บ้านหนองบัวทอง - (3807-122) ต.หอคำ โนนยาง=Optic 12 Core DW = 2.59 km.";
    }
else if($message == "3807-123"){
        $arrayPostData['messages'][0]['text'] = "BUN000192,(3807-63) บ้านไทยเจริญ - (3807-123) ต.หอคำ สะง้อ=Optic 12 Core DW = 2.175 km.";
    }
else if($message == "3807-124"){
        $arrayPostData['messages'][0]['text'] = "BUN000194,(3806-46) บ้านโคกสะอาด - (3807-124) ต.หอคำ หนองเข็ง=Optic 12 Core DW = 5.23 km.";
    }
else if($message == "3807-126"){
        $arrayPostData['messages'][0]['text'] = "BUN000193,(3806-46) บ้านโคกสะอาด - (3807-126) ต.หอคำ วังด่าน=Optic 12 Core DW = 3.315 km.";
    }
else if($message == "3807-128"){
          $arrayPostData['messages'][0]['text'] = "BUN000178,(3807-103) บ้านท่าอินทร์แปลง - (3807-128) ต.โคกก่อง โนนสา=12 Core= 5.201 km.
BUN000204,(3807-128) ต.โคกก่อง โนนสา - (3807-104) ต.โคกก่อง นาคำ=Optic 12 Core DW = 3.33 km.";
    }
else if($message == "3807-139"){
        $arrayPostData['messages'][0]['text'] = "BUN000339,(3807-43) ตชด.บึงกาฬ2 - (3807-139) ต.บึงกาฬ บ้านสวน=Optic 12 Core DW = 1.235 km.";
    }
else if($message == "3807-141"){
        $arrayPostData['messages'][0]['text'] = "BUN000340,(3807-40) ตชด. บึงกาฬ - (3807-141) ต.วิศิษฐ์ ดอนเจริญ=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3807-142"){
        $arrayPostData['messages'][0]['text'] = "BUN000341,(3807-46) โนนสมบูรณ์2 - (3807-142) ต.โนนสมบูรณ์ ตลาดโนนสมบูรณ์=Optic 12 Core DW = 0.575 km.";
    }
else if($message == "3807-143"){
        $arrayPostData['messages'][0]['text'] = "BUN000342,(3807-44) วัดภูกระแต - (3807-143) ต.วิศิษฐ์ แมคโคร=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3807-144"){
        $arrayPostData['messages'][0]['text'] = "BUN000343,(3807-43) ตชด.บึงกาฬ2 - (3807-144) ต.วิศิษฐ์ เทคนิค=Optic 12 Core DW = 1.77 km.";
    }
else if($message == "3807-145"){
        $arrayPostData['messages'][0]['text'] = "BUN000344,(3807-52) ชัยพร - (3807-145) ต.ชัยพร ตลาดชัยพร=Optic 12 Core DW = 0.8 km.";
    }
else if($message == "3807-154"){
        $arrayPostData['messages'][0]['text'] = "BUN000345,(3807-83) นาต้อง - (3807-154) บ้านผาสวรรค์น้อย=Optic 12 Core DW = 2.085 km.";
    }
else if($message == "3807-157"){
        $arrayPostData['messages'][0]['text'] = "BUN000346,(3807-72) นาเจริญ - (3807-157) นาเจริญ 2=Optic 12 Core DW = 0.678 km.";
    }
else if($message == "3807-159"){
        $arrayPostData['messages'][0]['text'] = "BUN000347,(3807-74) หนองหมู - (3807-159) ต.หนองเลิง หนองแวง=Optic 12 Core DW = 1.72 km.";
    }
else if($message == "3807-161"){
        $arrayPostData['messages'][0]['text'] = "BUN000348,(3807-52) ชัยพร - (3807-161) โนนสุพรรณ=Optic 12 Core DW = 1.485 km.";
    }
else if($message == "3807-162"){
        $arrayPostData['messages'][0]['text'] = "BUN000349,(3807-117) คลองเค็ม - (3807-162) คลองเค็ม2=Optic 12 Core DW = 1.21 km.";
    }
else if($message == "3807-37"){
          $arrayPostData['messages'][0]['text'] = "BUN000001,(3806-37) บขส.ปากคาด  - (3807-37) me บึงกาฬ=12 Core= 48.543 km.
BUN000003,(3807-37) me บึงกาฬ - (3801-38) ปตท.บึงกาฬ=Optic 12 Core DW = 1.078 km.
BUN000010,(3807-37) me บึงกาฬ - (3807-38) ตลาดบึงกาฬ=Optic 12 Core DW = 0.58 km.
BUN000012,(3807-37) ME บึงกาฬ - (3807-43) ตชด.บึงกาฬ2=Optic 12 Core DW = 2.606 km.
BUN000013,(3807-37) me บึงกาฬ - (3807-41) หอนาฬิกา=Optic 12 Core DW = 0.504 km.
BUN000014,(3807-37) me บึงกาฬ - (3807-42) สวนสาธารณะ=Optic 12 Core DW = 1.443 km.
BUN000023,(3807-37) me บึงกาฬ - () SJ บึงกาฬ-คำตากล้า=12 Core= 73.743 km.
BUN000028,(3807-37) me บึงกาฬ - (3807-51) บ้านท่าใคร้=Optic 12 Core DW = 6.208 km.
BUN000035,(3807-37) ME บึงกาฬ - (3803-61) ME บึงโขงหลง=12 Core= 93.186 km.";
    }
else if($message == "3807-38"){
          $arrayPostData['messages'][0]['text'] = "BUN000002,(3807-38) ตลาดบึงกาฬ - (3801-37) บึงกาฬ วิศิษฐ์=Optic 12 Core DW = 0.771 km.
BUN000010,(3807-37) me บึงกาฬ - (3807-38) ตลาดบึงกาฬ=Optic 12 Core DW = 0.58 km.
BUN000011,(3807-38) ตลาดบึงกาฬ - (3807-39) บ้านบึงสวรรค์=Optic 12 Core DW = 1.69 km.";
    }
else if($message == "3807-39"){
        $arrayPostData['messages'][0]['text'] = "BUN000011,(3807-38) ตลาดบึงกาฬ - (3807-39) บ้านบึงสวรรค์=Optic 12 Core DW = 1.69 km.";
    }
else if($message == "3807-40"){
          $arrayPostData['messages'][0]['text'] = "BUN000005,(3807-40) ตชด. บึงกาฬ - (3807-45) โนนสมบูรณ์=Optic 12 Core DW = 5.59 km.
BUN000015,(3807-43) ตชด.บึงกาฬ2 - (3807-40) ตชด.บึงกาฬ=Optic 12 Core DW = 1.483 km.
BUN000083,(3807-40) ตชด. บึงกาฬ - (3807-56) บ้านหนองนาแซง=Optic 12 Core DW = 3.1 km.
BUN000340,(3807-40) ตชด. บึงกาฬ - (3807-141) ต.วิศิษฐ์ ดอนเจริญ=Optic 12 Core DW = 1.4 km.
BUN000353,(3807-40) ตชด. บึงกาฬ - (3807-86) แสนสุข=Optic 12 Core DW = 1.25 km.";
    }
else if($message == "3807-41"){
        $arrayPostData['messages'][0]['text'] = "BUN000013,(3807-37) me บึงกาฬ - (3807-41) หอนาฬิกา=Optic 12 Core DW = 0.504 km.";
    }
else if($message == "3807-42"){
        $arrayPostData['messages'][0]['text'] = "BUN000014,(3807-37) me บึงกาฬ - (3807-42) สวนสาธารณะ=Optic 12 Core DW = 1.443 km.";
    }
else if($message == "3807-43"){
        $arrayPostData['messages'][0]['text'] = "BUN000014,(3807-37) me บึงกาฬ - (3807-42) สวนสาธารณะ=Optic 12 Core DW = 1.443 km.";
    }
else if($message == "3807-44"){
          $arrayPostData['messages'][0]['text'] = "BUN000016,(3801-38) ปตท.บึงกาฬ - (3807-44) วัดภูกระแต=Optic 12 Core DW = 0.872 km.
BUN000342,(3807-44) วัดภูกระแต - (3807-143) ต.วิศิษฐ์ แมคโคร=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3807-45"){
          $arrayPostData['messages'][0]['text'] = "BUN000005,(3807-40) ตชด. บึงกาฬ - (3807-45) โนนสมบูรณ์=Optic 12 Core DW = 5.59 km.
BUN000019,(3807-45) โนนสมบูรณ์ - (3807-46) โนนสมบูรณ์2=Optic 12 Core DW = 1.124 km.";
    }
else if($message == "3807-46"){
          $arrayPostData['messages'][0]['text'] = "BUN000019,(3807-45) โนนสมบูรณ์ - (3807-46) โนนสมบูรณ์2=Optic 12 Core DW = 1.124 km.
BUN000044,(3807-46) โนนสมบูรณ์2 - (3807-67) โคกสว่าง=Optic 12 Core DW = 6.15 km.
BUN000341,(3807-46) โนนสมบูรณ์2 - (3807-142) ต.โนนสมบูรณ์ ตลาดโนนสมบูรณ์=Optic 12 Core DW = 0.575 km.";
    }
else if($message == "3807-47"){
          $arrayPostData['messages'][0]['text'] = "BUN000019,(3807-45) โนนสมบูรณ์ - (3807-46) โนนสมบูรณ์2=Optic 12 Core DW = 1.124 km.
BUN000044,(3807-46) โนนสมบูรณ์2 - (3807-67) โคกสว่าง=Optic 12 Core DW = 6.15 km.
BUN000341,(3807-46) โนนสมบูรณ์2 - (3807-142) ต.โนนสมบูรณ์ ตลาดโนนสมบูรณ์=Optic 12 Core DW = 0.575 km.";
    }
else if($message == "3807-48"){
          $arrayPostData['messages'][0]['text'] = "BUN000021,(SJ) SJ ปากคาด-บึงกาฬ - (3807-48) บ้านอาฮง=Optic 12 Core DW = 0.608 km.
BUN000084,(3807-48) บ้านอาฮง - (3807-57) ไคสี=Optic 12 Core DW = 3 km.";
    }
else if($message == "3807-51"){
          $arrayPostData['messages'][0]['text'] = "BUN000028,(3807-37) me บึงกาฬ - (3807-51) บ้านท่าใคร้=Optic 12 Core DW = 6.208 km.
BUN000082,(3807-51) บ้านท่าใคร่ - (3807-55) บ้านนาโนน=Optic 12 Core DW = 2.5 km.
BUN000086,(3807-51) บ้านท่าใคร่ - (3807-60) บ้านท่าโพธิ์=Optic 12 Core DW = 3.65 km.";
    }
else if($message == "3807-52"){
          $arrayPostData['messages'][0]['text'] = "BUN000046,(3807-52) ชัยพร - (3807-69) ห้วยเซื้อมใต้=Optic 12 Core DW = 2.42 km.
BUN000047,(3807-52) ชัยพร - (3807-70) ห้วยเซื่อมกลาง=Optic 12 Core DW = 2.15 km.
BUN000114,(3807-52) ชัยพร - (3807-81) หนองยาว=Optic 12 Core DW = 5.8 km.
BUN000124,(SJ) SJ บึงกาฬ - บึงโขงหลง - (3807-52) ชัยพร=Optic 12 Core DW = 0.445 km.
BUN000344,(3807-52) ชัยพร - (3807-145) ต.ชัยพร ตลาดชัยพร=Optic 12 Core DW = 0.8 km.
BUN000348,(3807-52) ชัยพร - (3807-161) โนนสุพรรณ=Optic 12 Core DW = 1.485 km.
BUN000371,(3807-52) ชัยพร - (3808-82) ต.หนองเดิ่น เทพมีชัย=Optic 12 Core DW = 3.425 km.";
    }
else if($message == "3807-53"){
          $arrayPostData['messages'][0]['text'] = "BUN000212,(3807-53) โคกก่อง - (3807-101) ต.โคกก่อง บ้านไร่สุขสันต์=12 Core= 0.672 km.
BUN000279,(SJ) ME บึงกาฬ-ME บึงโขงหลง - (3807-53) โคกก่อง=Optic 12 Core DW = 0.65 km.
BUN000357,(3807-53) โคกก่อง - (3807-93) ต.โคกก่อง บ้านห้วยดอกไม้=12 Core= 5.337 km.";
    }
else if($message == "3807-55"){
        $arrayPostData['messages'][0]['text'] = "BUN000082,(3807-51) บ้านท่าใคร่ - (3807-55) บ้านนาโนน=Optic 12 Core DW = 2.5 km.";
    }
else if($message == "3807-56"){
          $arrayPostData['messages'][0]['text'] = "BUN000083,(3807-40) ตชด. บึงกาฬ - (3807-56) บ้านหนองนาแซง=Optic 12 Core DW = 3.1 km.
BUN000087,(3807-56) บ้านหนองนาแซง - (3807-61) บ้านเหล่าถาวร=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3807-57"){
          $arrayPostData['messages'][0]['text'] = "BUN000084,(3807-48) บ้านอาฮง - (3807-57) ไคสี=Optic 12 Core DW = 3 km.
BUN000085,(3807-57) ไคสี - (3807-59) บ้านคำหมื่น=Optic 12 Core DW = 5.26 km.
BUN000088,(3807-57) ไคสี - (3807-62) บ้านท่าสะอาด=Optic 12 Core DW = 2.46 km.
BUN000109,(3807-57) ไคสี - (3807-75) โนนสว่าง=Optic 12 Core DW = 7 km.";
    }
else if($message == "3807-58"){
          $arrayPostData['messages'][0]['text'] = "BUN000213,(3807-58) บ้านทองสาย - (3807-84) กำแพงเพชร=Optic 12 Core DW = 2.76 km.
BUN000256,(3807-58) บ้านทรายสาย - (3807-109) ต.โนนสมบูรณ์ บ้านโคกงาม=Optic 12 Core DW = 2.21 km.
BUN000280,(SJ) ME บึงกาฬ- SJ บึงกาฬคำตากล้า - (3807-58) บ้านทองสาย=Optic 12 Core DW = 1.805 km.";
    }
else if($message == "3807-59"){
          $arrayPostData['messages'][0]['text'] = "BUN000085,(3807-57) ไคสี - (3807-59) บ้านคำหมื่น=Optic 12 Core DW = 5.26 km.
BUN000352,(3807-59) บ้านคำหมื่น - (3807-85) ห้วยเซือมเหนือ=Optic 12 Core DW = 2.12 km.
BUN000356,(3807-59) บ้านคำหมื่น - (3807-92) ดอนยม=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3807-60"){
          $arrayPostData['messages'][0]['text'] = "BUN000086,(3807-51) บ้านท่าใคร่ - (3807-60) บ้านท่าโพธิ์=Optic 12 Core DW = 3.65 km.
BUN000195,(3807-60) บ้านท่าโพธิ์ - (3807-115) ต.เมืองบึ่งกาฬ ดงหมากยาง=Optic 12 Core DW = 2.04 km.";
    }
else if($message == "3807-61"){
        $arrayPostData['messages'][0]['text'] = "BUN000087,(3807-56) บ้านหนองนาแซง - (3807-61) บ้านเหล่าถาวร=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3807-62"){
        $arrayPostData['messages'][0]['text'] = "BUN000088,(3807-57) ไคสี - (3807-62) บ้านท่าสะอาด=Optic 12 Core DW = 2.46 km.";
    }
else if($message == "3807-63"){
          $arrayPostData['messages'][0]['text'] = "BUN000089,(3807-47) บ้านหอคำ - (3807-63) บ้านไทยเจริญ=Optic 12 Core DW = 2.86 km.
BUN000192,(3807-63) บ้านไทยเจริญ - (3807-123) ต.หอคำ สะง้อ=Optic 12 Core DW = 2.175 km.
BUN000351,(3807-63) บ้านไทยเจริญ - (3807-74) หนองหมู=12 Core= 8.15 km.";
    }
else if($message == "3807-65"){
        $arrayPostData['messages'][0]['text'] = "BUN000059,(3801-37) วิศิษย์ - (3807-65) จักรทิพย์สามัคคี=Optic 12 Core DW = 2.4 km.";
    }
else if($message == "3807-67"){
          $arrayPostData['messages'][0]['text'] = "BUN000044,(3807-46) โนนสมบูรณ์2 - (3807-67) โคกสว่าง=Optic 12 Core DW = 6.15 km.
BUN000045,(3807-67) โคกสว่าง - (3807-68) นาสวรรค์=Optic 12 Core DW = 1.85 km.";
    }
else if($message == "3807-68"){
          $arrayPostData['messages'][0]['text'] = "BUN000045,(3807-67) โคกสว่าง - (3807-68) นาสวรรค์=Optic 12 Core DW = 1.85 km.
BUN000140,(3807-68) นาสวรรค์ - (3807-89) หนองตอ=12 Core= 0.607 km.
BUN000262,(3807-68) นาสวรรค์ - (3807-99) นาเจริญ ต.คำนาดี=12 Core= 5.61 km.
BUN000354,(3807-68) นาสวรรค์ - (3807-89) หนองตอ=12 Core= 6.19 km.";
    }
else if($message == "3807-69"){
          $arrayPostData['messages'][0]['text'] = "BUN000046,(3807-52) ชัยพร - (3807-69) ห้วยเซื้อมใต้=Optic 12 Core DW = 2.42 km.
BUN000198,(3807-69) บ้านห้วยเซือมใต้ - (3807-107) ต.ชัยพร โนนสง่า=Optic 12 Core DW = 2.16 km.";
    }
else if($message == "3807-70"){
        $arrayPostData['messages'][0]['text'] = "BUN000047,(3807-52) ชัยพร - (3807-70) ห้วยเซื่อมกลาง=Optic 12 Core DW = 2.15 km.";
    }
else if($message == "3807-71"){
        $arrayPostData['messages'][0]['text'] = "BUN000350,(SJ) บ้านไทยเจริญ-บ้านหนองหมู - (3807-71) ชัยบาดาล=Optic 12 Core DW = 4.45 km.";
    }
else if($message == "3807-72"){
          $arrayPostData['messages'][0]['text'] = "BUN000134,(3807-74) บ้านหนองหมู - (3807-72) นาเจริญ=Optic 12 Core DW = 3.3 km.
BUN000215,(3807-72) นาเจริญ - (3807-91) สรรเจริญ=Optic 12 Core DW = 4.47 km.
BUN000346,(3807-72) นาเจริญ - (3807-157) นาเจริญ 2=Optic 12 Core DW = 0.678 km.";
    }
else if($message == "3807-73"){
        $arrayPostData['messages'][0]['text'] = "BUN000135,(3807-74) บ้านหนองหมู - (3807-73) สุขสำราญ=Optic 12 Core DW = 2.39 km.";
    }
else if($message == "3807-74"){
          $arrayPostData['messages'][0]['text'] = "BUN000134,(3807-74) บ้านหนองหมู - (3807-72) นาเจริญ=Optic 12 Core DW = 3.3 km.
BUN000135,(3807-74) บ้านหนองหมู - (3807-73) สุขสำราญ=Optic 12 Core DW = 2.39 km.
BUN000347,(3807-74) หนองหมู - (3807-159) ต.หนองเลิง หนองแวง=Optic 12 Core DW = 1.72 km.
BUN000351,(3807-63) บ้านไทยเจริญ - (3807-74) หนองหมู=12 Core= 8.15 km.";
    }
else if($message == "3807-75"){
          $arrayPostData['messages'][0]['text'] = "BUN000108,(3807-75) โนนสว่าง - (3807-76) โนนงาม=Optic 12 Core DW = 0.9 km.
BUN000109,(3807-57) ไคสี - (3807-75) โนนสว่าง=Optic 12 Core DW = 7 km.";
    }
else if($message == "3807-76"){
        $arrayPostData['messages'][0]['text'] = "BUN000108,(3807-75) โนนสว่าง - (3807-76) โนนงาม=Optic 12 Core DW = 0.9 km.";
    }
else if($message == "3807-77"){
        $arrayPostData['messages'][0]['text'] = "BUN000110,(3807-80) ห้วยสามยอดเทวกุล - (3807-77) นาป่าน=Optic 12 Core DW = 6.6 km.";
    }
else if($message == "3807-78"){
          $arrayPostData['messages'][0]['text'] = "BUN000111,(3807-78) ห้วยกกต้อง - (3807-80) ห้วยสามยอทเทวกุล=Optic 12 Core DW = 4.9 km.
BUN000112,(3804-118) ต.ศรีชมภู คำไผ่ - (3807-78) ห้วยกกต้อง=Optic 12 Core DW = 2.9 km.
BUN000113,(3807-78) ห้วยกกต้อง - (3807-79) หนองบัวบาน=Optic 12 Core DW = 2.1 km.
BUN000214,(3807-80) ห้วยสามยอดเทวกุล - (3807-78) ห้วยกกต้อง=Optic 12 Core DW = 5.12 km.
BUN000221,(3807-78) ห้วยกกต้อง - (3804-118) ต.ศรีชมภู คำไผ่=Optic 12 Core DW = 3.06 km.";
    }
else if($message == "3807-79"){
          $arrayPostData['messages'][0]['text'] = "BUN000113,(3807-78) ห้วยกกต้อง - (3807-79) หนองบัวบาน=Optic 12 Core DW = 2.1 km.
BUN000201,(3807-79) บ้านหนองบัวบาน - (3807-114) ต.โป่งเปือย หนองตาไก้=Optic 12 Core DW = 2.895 km.";
    }
else if($message == "3807-80"){
          $arrayPostData['messages'][0]['text'] = "BUN000110,(3807-80) ห้วยสามยอดเทวกุล - (3807-77) นาป่าน=Optic 12 Core DW = 6.6 km.
BUN000111,(3807-78) ห้วยกกต้อง - (3807-80) ห้วยสามยอทเทวกุล=Optic 12 Core DW = 4.9 km.
BUN000214,(3807-80) ห้วยสามยอดเทวกุล - (3807-78) ห้วยกกต้อง=Optic 12 Core DW = 5.12 km.";
    }
else if($message == "3807-81"){
          $arrayPostData['messages'][0]['text'] = "BUN000114,(3807-52) ชัยพร - (3807-81) หนองยาว=Optic 12 Core DW = 5.8 km.
BUN000115,(3807-81) หนองยาว - (3807-82) คำภู=Optic 12 Core DW = 5.5 km.";
    }
else if($message == "3807-82"){
          $arrayPostData['messages'][0]['text'] = "BUN000099,(3807-82) คำภู - (3807-88) ทุ่งทรายจก=Optic 12 Core DW = 3.1 km.
BUN000115,(3807-81) หนองยาว - (3807-82) คำภู=Optic 12 Core DW = 5.5 km.
BUN000333,(3807-82) คำภู - (3805-88) ทุ่งทรายจก=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3807-83"){
          $arrayPostData['messages'][0]['text'] = "BUN000100,(3807-83) นาต้อง - (3807-89) ดอนเสียด=Optic 12 Core DW = 5 km.
BUN000116,(3805-88) ทุ่งทรายจก - (3807-83) นาต้อง=Optic 12 Core DW = 3.4 km.
BUN000345,(3807-83) นาต้อง - (3807-154) บ้านผาสวรรค์น้อย=Optic 12 Core DW = 2.085 km.";
    }
else if($message == "3807-84"){
          $arrayPostData['messages'][0]['text'] = "BUN000213,(3807-58) บ้านทองสาย - (3807-84) กำแพงเพชร=Optic 12 Core DW = 2.76 km.
BUN000264,(3807-84) กำแพงเพชร - (3807-111) โนนจำปา ต.โนนสมบูรณ์=Optic 12 Core DW = 4.523 km.";
    }
else if($message == "3807-85"){
        $arrayPostData['messages'][0]['text'] = "BUN000352,(3807-59) บ้านคำหมื่น - (3807-85) ห้วยเซือมเหนือ=Optic 12 Core DW = 2.12 km.";
    }
else if($message == "3807-86"){
        $arrayPostData['messages'][0]['text'] = "BUN000353,(3807-40) ตชด. บึงกาฬ - (3807-86) แสนสุข=Optic 12 Core DW = 1.25 km.";
    }
else if($message == "3807-87"){
          $arrayPostData['messages'][0]['text'] = "BUN000196,(3807-87) บ้านหนองบัวทอง - (3807-122) ต.หอคำ โนนยาง=Optic 12 Core DW = 2.59 km.
BUN000217,(3807-90) ม่วงมีชัย - (3807-87) หนองบัวทอง=Optic 12 Core DW = 1.06 km.
BUN000265,(3807-87) บ้านหนองบัวทอง - (3807-121) ต.หอคำ นาโซ่=Optic 12 Core DW = 3.28 km.";
    }
else if($message == "3807-88"){
          $arrayPostData['messages'][0]['text'] = "BUN000099,(3807-82) คำภู - (3807-88) ทุ่งทรายจก=Optic 12 Core DW = 3.1 km.
BUN000216,(3807-92) ดอนยม - (3807-88) แสนเจริญ=Optic 12 Core DW = 3.51 km.";
    }
else if($message == "3807-89"){
          $arrayPostData['messages'][0]['text'] = "BUN000100,(3807-83) นาต้อง - (3807-89) ดอนเสียด=Optic 12 Core DW = 5 km.
BUN000140,(3807-68) นาสวรรค์ - (3807-89) หนองตอ=12 Core= 0.607 km.
BUN000231,(3807-89) หนองตอ - (3807-108) ต.นาสวรรค์ นาแวง=Optic 12 Core DW = 2.88 km.
BUN000354,(3807-68) นาสวรรค์ - (3807-89) หนองตอ=12 Core= 6.19 km.";
    }
else if($message == "3807-90"){
          $arrayPostData['messages'][0]['text'] = "BUN000217,(3807-90) ม่วงมีชัย - (3807-87) หนองบัวทอง=Optic 12 Core DW = 1.06 km.
BUN000355,(SJ) ME บึงกาฬ-ME ปากคาด - (3807-90) ม่วงมีชัย=Optic 12 Core DW = 0.45 km.";
    }
else if($message == "3807-91"){
        $arrayPostData['messages'][0]['text'] = "BUN000215,(3807-72) นาเจริญ - (3807-91) สรรเจริญ=Optic 12 Core DW = 4.47 km.";
    }
else if($message == "3807-92"){
          $arrayPostData['messages'][0]['text'] = "BUN000216,(3807-92) ดอนยม - (3807-88) แสนเจริญ=Optic 12 Core DW = 3.51 km.
BUN000356,(3807-59) บ้านคำหมื่น - (3807-92) ดอนยม=Optic 12 Core DW = 3.2 km.";
    }
else if($message == "3807-93"){
        $arrayPostData['messages'][0]['text'] = "BUN000357,(3807-53) โคกก่อง - (3807-93) ต.โคกก่อง บ้านห้วยดอกไม้=12 Core= 5.337 km.";
    }
else if($message == "3807-95"){
        $arrayPostData['messages'][0]['text'] = "BUN000128,(3801-40) ประปาบึงกาฬ - (3807-95) พันลำ=Optic 12 Core DW = 3.96 km.";
    }
else if($message == "3807-97"){
        $arrayPostData['messages'][0]['text'] = "BUN000232,(3807-99) ต.คำนาดี คำนาเจริญ - (3807-97) ต.คำนาดี คำนาดี=Optic 12 Core DW = 2.635 km.";
    }
else if($message == "3807-98"){
        $arrayPostData['messages'][0]['text'] = "BUN000263,(3807-111) โนนจำปา ต.โนนสมบูรณ์ - (3807-98) ชมภูทอง ต.คำนาดี=12 Core= 5.9 km.";
    }
else if($message == "3807-99"){
          $arrayPostData['messages'][0]['text'] = "BUN000141,(3807-99) ต.คำนาดี นาเจริญ - (3802-66) ต.หนองหัวช้าง โนนสง่า=Optic 12 Core DW = 3.96 km.
BUN000232,(3807-99) ต.คำนาดี คำนาเจริญ - (3807-97) ต.คำนาดี คำนาดี=Optic 12 Core DW = 2.635 km.
BUN000262,(3807-68) นาสวรรค์ - (3807-99) นาเจริญ ต.คำนาดี=12 Core= 5.61 km.";
    }
else if($message == "3808-61"){
          $arrayPostData['messages'][0]['text'] = "BUN000090,(3808-61) หนองเดิ่น - (3808-68) หนองเดิ่นท่า=Optic 12 Core DW = 2.6 km.
BUN000281,(3808-62) บุ่งคล้า1 - (3808-61) หนองเดิ่น=Optic 12 Core DW = 3.35 km.";
    }
else if($message == "3808-62"){
          $arrayPostData['messages'][0]['text'] = "BUN000281,(3808-62) บุ่งคล้า1 - (3808-61) หนองเดิ่น=Optic 12 Core DW = 3.35 km.
BUN000282,(3808-62) บุ่งคล้า1 - (3808-63) บุ่งคล้า2=Optic 12 Core DW = 1.5 km.
BUN000358,(3808-62) บุ่งคล้า1 - (3808-65) บ้านดอนจิก=Optic 12 Core DW = 2.744 km.
BUN000367,(3808-62) บุ่งคล้า1 - (3808-76) ต.บุ่งคล้า นาจาน=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3808-63"){
          $arrayPostData['messages'][0]['text'] = "BUN000282,(3808-62) บุ่งคล้า1 - (3808-63) บุ่งคล้า2=Optic 12 Core DW = 1.5 km.
BUN000366,(3808-63) บุ่งคล้า2 - (3808-75) ต.บุ่งคล้า บุ่งคล้าเหนือ=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3808-64"){
          $arrayPostData['messages'][0]['text'] = "BUN000060,(3808-64) บ้านโคกกว้าง - (3808-66) บ้านหาดแฮ้=Optic 12 Core DW = 3.3 km.
BUN000283,(SJ) ME บึงกาฬ-ME บึงโขงหลง - (3808-64) โคกกว้าง=Optic 12 Core DW = 1.3 km.
BUN000362,(3808-64) โคกกว้าง - (3808-71) ต.โคกกว้าง ดอนใหญ่=Optic 12 Core DW = 2.46 km.";
    }
else if($message == "3808-65"){
        $arrayPostData['messages'][0]['text'] = "BUN000358,(3808-62) บุ่งคล้า1 - (3808-65) บ้านดอนจิก=Optic 12 Core DW = 2.744 km.";
    }
else if($message == "3808-66"){
        $arrayPostData['messages'][0]['text'] = "BUN000060,(3808-64) บ้านโคกกว้าง - (3808-66) บ้านหาดแฮ้=Optic 12 Core DW = 3.3 km.";
    }
else if($message == "3808-67"){
          $arrayPostData['messages'][0]['text'] = "BUN000359,(SJ) ME บึงกาฬ-ME บึงโขงหลง - (3808-67) โนนไพศาล=Optic 12 Core DW = 1.55 km.
BUN000360,(3808-67) โนนไพศาล - (3808-69) ต.โคกกว้าง ท่าส้มโฮง=Optic 12 Core DW = 2.445 km.";
    }
else if($message == "3808-68"){
        $arrayPostData['messages'][0]['text'] = "BUN000090,(3808-61) หนองเดิ่น - (3808-68) หนองเดิ่นท่า=Optic 12 Core DW = 2.6 km.";
    }
else if($message == "3808-69"){
        $arrayPostData['messages'][0]['text'] = "BUN000360,(3808-67) โนนไพศาล - (3808-69) ต.โคกกว้าง ท่าส้มโฮง=Optic 12 Core DW = 2.445 km.";
    }
else if($message == "3808-70"){
        $arrayPostData['messages'][0]['text'] = "BUN000361,(SJ) ME บึงกาฬ-ME บึงโขงหลง - (3808-70) ต.โคกกว้าง สมพร=Optic 12 Core DW = 1.4 km.";
    }
else if($message == "3808-71"){
          $arrayPostData['messages'][0]['text'] = "BUN000362,(3808-64) โคกกว้าง - (3808-71) ต.โคกกว้าง ดอนใหญ่=Optic 12 Core DW = 2.46 km.
BUN000363,(3808-71) ต.โคกกว้าง ดอนใหญ่ - (3808-72) ต.โคกกว้าง หนองบ่อทุ่ง=Optic 12 Core DW = 1.58 km.
BUN000364,(3808-71) ต.โคกกว้าง ดอนใหญ่ - (3808-73) ต.โคกกว้าง ท่าศิริขันธ์=Optic 12 Core DW = 2.75 km.";
    }
else if($message == "3808-72"){
        $arrayPostData['messages'][0]['text'] = "BUN000363,(3808-71) ต.โคกกว้าง ดอนใหญ่ - (3808-72) ต.โคกกว้าง หนองบ่อทุ่ง=Optic 12 Core DW = 1.58 km.";
    }
else if($message == "3808-73"){
        $arrayPostData['messages'][0]['text'] = "BUN000364,(3808-71) ต.โคกกว้าง ดอนใหญ่ - (3808-73) ต.โคกกว้าง ท่าศิริขันธ์=Optic 12 Core DW = 2.75 km.";
    }
else if($message == "3808-74"){
          $arrayPostData['messages'][0]['text'] = "BUN000284,(3808-74) ต.บุ่งคล้า โนนสะอาด - (3808-78) ต.บุ่งคล้า ขามเปี้ย=Optic 12 Core DW = 4.315 km.
BUN000365,(SJ) ME บึงกาฬ-ME บึงโขงหลง - (3808-74) ต.บุ่งคล้า โนนสะอาด=Optic 12 Core DW = 0.4 km.";
    }
else if($message == "3808-75"){
        $arrayPostData['messages'][0]['text'] = "BUN000366,(3808-63) บุ่งคล้า2 - (3808-75) ต.บุ่งคล้า บุ่งคล้าเหนือ=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3808-76"){
        $arrayPostData['messages'][0]['text'] = "BUN000367,(3808-62) บุ่งคล้า1 - (3808-76) ต.บุ่งคล้า นาจาน=Optic 12 Core DW = 2.9 km.";
    }
else if($message == "3808-78"){
          $arrayPostData['messages'][0]['text'] = "BUN000284,(3808-74) ต.บุ่งคล้า โนนสะอาด - (3808-78) ต.บุ่งคล้า ขามเปี้ย=Optic 12 Core DW = 4.315 km.
BUN000368,(3808-78) ขามเปี้ย - (3808-79) ต.บุ่งคล้า ซำบอน=Optic 12 Core DW = 1.585 km.";
    }
else if($message == "3808-79"){
        $arrayPostData['messages'][0]['text'] = "BUN000368,(3808-78) ขามเปี้ย - (3808-79) ต.บุ่งคล้า ซำบอน=Optic 12 Core DW = 1.585 km.";
    }
else if($message == "3808-80"){
        $arrayPostData['messages'][0]['text'] = "BUN000369,(3808-81) ต.หนองเดิ่น ภูสวาท - (3808-80) ต.หนองเดิ่น ห้วยเล็บมือ=Optic 12 Core DW = 2.799 km.";
    }
else if($message == "3808-81"){
          $arrayPostData['messages'][0]['text'] = "BUN000369,(3808-81) ต.หนองเดิ่น ภูสวาท - (3808-80) ต.หนองเดิ่น ห้วยเล็บมือ=Optic 12 Core DW = 2.799 km.
BUN000370,(SJ) ME บึงกาฬ-ME บึงโขงหลง - (3808-81) ต.หนองเดิ่น ภูสวาท=Optic 12 Core DW = 1.621 km.";
    }
else if($message == "3808-82"){
        $arrayPostData['messages'][0]['text'] = "BUN000371,(3807-52) ชัยพร - (3808-82) ต.หนองเดิ่น เทพมีชัย=Optic 12 Core DW = 3.425 km.";
    }
else if($message == "3809-37"){
          $arrayPostData['messages'][0]['text'] = "BUN000024,(3809-37) อนุบาลศรีวิไล - (3809-38) ตลาดศรีวิไล=Optic 12 Core DW = 1.545 km.
BUN000025,() SJ บึงกาฬ-คำตากล้า - (3809-37) อนุบาลศรีวิไล=Optic 12 Core DW = 1.483 km.
BUN000027,(3809-37) อนุบาลศรีวิไล - (3809-44) 7-11 ศรีวิไล=Optic 12 Core DW = 0.662 km.
BUN000029,(3809-37) อนุบาลศรีวิไล - (3809-41) บ้านหนองจันทร์ (ศรีวิไล)=Optic 12 Core DW = 3.46 km.
BUN000091,(3809-37) อนุบาลศรีวิไล - (3809-43) เซเว่นศรีวิไล=Optic 12 Core DW = 0.63 km.";
    }
else if($message == "3809-38"){
          $arrayPostData['messages'][0]['text'] = "BUN000024,(3809-37) อนุบาลศรีวิไล - (3809-38) ตลาดศรีวิไล=Optic 12 Core DW = 1.545 km.
BUN000049,(3809-38) ตลาดศรีวิไล - (3809-48) นาสิงห์=12 Core= 5.85 km.
BUN000118,(3809-38) ตลาดศรีวิไล - (3809-58) อู่คำ=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3809-41"){
          $arrayPostData['messages'][0]['text'] = "BUN000029,(3809-37) อนุบาลศรีวิไล - (3809-41) บ้านหนองจันทร์ (ศรีวิไล)=Optic 12 Core DW = 3.46 km.
BUN000092,(3809-41) บ้านหนองจันทร์ - (3809-44) บ้านใหม่พัฒนาศรีวิไล=Optic 12 Core DW = 1.372 km.";
    }
else if($message == "3809-43"){
        $arrayPostData['messages'][0]['text'] = "BUN000091,(3809-37) อนุบาลศรีวิไล - (3809-43) เซเว่นศรีวิไล=Optic 12 Core DW = 0.63 km.";
    }
else if($message == "3809-44"){
          $arrayPostData['messages'][0]['text'] = "BUN000027,(3809-37) อนุบาลศรีวิไล - (3809-44) 7-11 ศรีวิไล=Optic 12 Core DW = 0.662 km.
BUN000092,(3809-41) บ้านหนองจันทร์ - (3809-44) บ้านใหม่พัฒนาศรีวิไล=Optic 12 Core DW = 1.372 km.
BUN000093,(3809-44) บ้านใหม่พัฒนาศรีวิไล - (3809-53) นาทราย=12 Core= 4.6 km.
BUN000117,(3809-44) บ้านใหม่พัฒนาศรีวิไล - (3809-57) นาทรายสามัคคี=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3809-45"){
        $arrayPostData['messages'][0]['text'] = "BUN000270,(SJ) ME บึงกาฬ- SJ บึงกาฬคำตากล้า - (3809-45) ห้วยลึก=Optic 12 Core DW = 0.615 km.";
    }
else if($message == "3809-46"){
          $arrayPostData['messages'][0]['text'] = "BUN000129,(3809-46) โคกสำราญ - (3809-61) พรมงคล=Optic 12 Core DW = 1.385 km.
BUN000285,(SJ) ME บึงกาฬ- SJ บึงกาฬคำตากล้า - (3809-46) บ้านโคกสำราญ=Optic 12 Core DW = 1.3 km.";
    }
else if($message == "3809-47"){
          $arrayPostData['messages'][0]['text'] = "BUN000048,(3809-49) สันทรายงาม - (3809-47) นาแสง=Optic 12 Core DW = 6.42 km.
BUN000052,(3809-47) นาแสง - (3809-51) ดงเกษม=12 Core= 4.9 km.
BUN000374,(3809-47) นาแสง - (3809-65) นาแสง2=Optic 12 Core DW = 1.1 km.";
    }
else if($message == "3809-48"){
          $arrayPostData['messages'][0]['text'] = "BUN000049,(3809-38) ตลาดศรีวิไล - (3809-48) นาสิงห์=12 Core= 5.85 km.
BUN000051,(3809-48) นาสิงห์ - (3809-49) สันทรายงาม=Optic 12 Core DW = 5.1 km.
BUN000094,(3809-48) นาสิงห์ - (3809-59) ทรายทอง=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3809-49"){
          $arrayPostData['messages'][0]['text'] = "BUN000048,(3809-49) สันทรายงาม - (3809-47) นาแสง=Optic 12 Core DW = 6.42 km.
BUN000050,(3809-49) สันทรายงาม - (3809-50) นาสะแบง=Optic 12 Core DW = 1.65 km.
BUN000051,(3809-48) นาสิงห์ - (3809-49) สันทรายงาม=Optic 12 Core DW = 5.1 km.
BUN000120,(3809-49) สันทรายงาม - (3809-54) นาคำแคน=Optic 12 Core DW = 6.9 km.";
    }
else if($message == "3809-50"){
          $arrayPostData['messages'][0]['text'] = "BUN000050,(3809-49) สันทรายงาม - (3809-50) นาสะแบง=Optic 12 Core DW = 1.65 km.
BUN000053,(3809-50) นาสะแบง - (3809-52) หนองจิก=Optic 12 Core DW = 2.7 km.
BUN000119,(3809-50) นาสะแบง - (3809-60) หนองบัวเงิน=Optic 12 Core DW = 4.1 km.";
    }
else if($message == "3809-51"){
        $arrayPostData['messages'][0]['text'] = "BUN000052,(3809-47) นาแสง - (3809-51) ดงเกษม=12 Core= 4.9 km.";
    }
else if($message == "3809-52"){
        $arrayPostData['messages'][0]['text'] = "BUN000052,(3809-47) นาแสง - (3809-51) ดงเกษม=12 Core= 4.9 km.";
    }
else if($message == "3809-53"){
        $arrayPostData['messages'][0]['text'] = "BUN000093,(3809-44) บ้านใหม่พัฒนาศรีวิไล - (3809-53) นาทราย=12 Core= 4.6 km.";
    }
else if($message == "3809-54"){
          $arrayPostData['messages'][0]['text'] = "BUN000120,(3809-49) สันทรายงาม - (3809-54) นาคำแคน=Optic 12 Core DW = 6.9 km.
BUN000121,(3809-54) นำคำแคน - (3809-55) คำแคนพัฒนา=Optic 12 Core DW = 1 km.";
    }
else if($message == "3809-55"){
        $arrayPostData['messages'][0]['text'] = "BUN000121,(3809-54) นำคำแคน - (3809-55) คำแคนพัฒนา=Optic 12 Core DW = 1 km.";
    }
else if($message == "3809-57"){
        $arrayPostData['messages'][0]['text'] = "BUN000117,(3809-44) บ้านใหม่พัฒนาศรีวิไล - (3809-57) นาทรายสามัคคี=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3809-58"){
        $arrayPostData['messages'][0]['text'] = "BUN000118,(3809-38) ตลาดศรีวิไล - (3809-58) อู่คำ=Optic 12 Core DW = 2.8 km.";
    }
else if($message == "3809-59"){
        $arrayPostData['messages'][0]['text'] = "BUN000094,(3809-48) นาสิงห์ - (3809-59) ทรายทอง=Optic 12 Core DW = 1.16 km.";
    }
else if($message == "3809-60"){
        $arrayPostData['messages'][0]['text'] = "BUN000119,(3809-50) นาสะแบง - (3809-60) หนองบัวเงิน=Optic 12 Core DW = 4.1 km.";
    }
else if($message == "3809-61"){
        $arrayPostData['messages'][0]['text'] = "BUN000129,(3809-46) โคกสำราญ - (3809-61) พรมงคล=Optic 12 Core DW = 1.385 km.";
    }
else if($message == "3809-62"){
        $arrayPostData['messages'][0]['text'] = "BUN000373,(3809-65) นาแสง2 - (3809-62) คำไชยวาน=Optic 12 Core DW = 2.7 km.";
    }
else if($message == "3809-63"){
        $arrayPostData['messages'][0]['text'] = "BUN000372,(3809-45) บ้านห้วยลึก - (3809-63) ต.ชมภูพร ทุ่งสว่าง=Optic 12 Core DW = 1.138 km.";
    }
else if($message == "3809-65"){
          $arrayPostData['messages'][0]['text'] = "BUN000373,(3809-65) นาแสง2 - (3809-62) คำไชยวาน=Optic 12 Core DW = 2.7 km.
BUN000374,(3809-47) นาแสง - (3809-65) นาแสง2=Optic 12 Core DW = 1.1 km.";
    }

replyMsg($arrayHeader,$arrayPostData);
function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
   exit;
?>
