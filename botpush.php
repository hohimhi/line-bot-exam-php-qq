﻿<?php
    $accessToken = "cTnKGPoV5We1pHUXDXJpRQGySzdPehWnp1DYJQwueVzwtOXONHFaKAs185kcpWV8T1Jivxv5xKrfWcGRyf9b1ARnLBYlMa4vuqntDdt4HC6pbgJgQ9XqzP52zyXefNnWbkdb0PJ1d7U2td3+qXivxwdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
   $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
    $arrayPostData['messages'][0]['type'] = "text";
    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดี"){
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
       }
else if($message == "UDN001187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001187";
    }
else if($message == "UDN001264"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001264";
    }
else if($message == "UDN000013"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000013";
    }
else if($message == "UDN001206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001206";
    }
else if($message == "NKI000001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000001";
    }
else if($message == "UDN000421"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000421";
    }
else if($message == "UDN000428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000428";
    }
else if($message == "UDN000430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000430";
    }
else if($message == "UDN000091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000091";
    }
else if($message == "UDN000113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000113";
    }
else if($message == "UDN000092"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000092";
    }
else if($message == "UDN000114"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000114";
    }
else if($message == "UDN000131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000131";
    }
else if($message == "UDN000170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000170";
    }
else if($message == "UDN000175"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000175";
    }
else if($message == "UDN000218"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000218";
    }
else if($message == "UDN000039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000039";
    }
else if($message == "UDN000021"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000021";
    }
else if($message == "UDN001207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001207";
    }
else if($message == "UDN000429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000429";
    }
else if($message == "UDN000534"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000534";
    }
else if($message == "UDN000371"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000371";
    }
else if($message == "UDN000022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000022";
    }
else if($message == "UDN001206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001206";
    }
else if($message == "UDN001207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001207";
    }
else if($message == "UDN000015"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000015";
    }
else if($message == "UDN000016"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000016";
    }
else if($message == "UDN000044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000044";
    }
else if($message == "UDN000248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000248";
    }
else if($message == "UDN000278"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000278";
    }
else if($message == "UDN000024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000024";
    }
else if($message == "UDN000093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000093";
    }
else if($message == "UDN000262"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000262";
    }
else if($message == "UDN000277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000277";
    }
else if($message == "UDN000373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000373";
    }
else if($message == "UDN000025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000025";
    }
else if($message == "UDN000227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000227";
    }
else if($message == "UDN000026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000026";
    }
else if($message == "UDN000018"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000018";
    }
else if($message == "UDN000027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000027";
    }
else if($message == "UDN000087"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000087";
    }
else if($message == "UDN000508"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000508";
    }
else if($message == "UDN001615"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001615";
    }
else if($message == "UDN000012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000012";
    }
else if($message == "UDN000025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000025";
    }
else if($message == "UDN000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000215";
    }
else if($message == "UDN000028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000028";
    }
else if($message == "UDN000398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000398";
    }
else if($message == "UDN000223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000223";
    }
else if($message == "UDN001304"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001304";
    }
else if($message == "UDN000029"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000029";
    }
else if($message == "UDN001303"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001303";
    }
else if($message == "UDN000071"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000071";
    }
else if($message == "UDN000075"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000075";
    }
else if($message == "UDN000210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000210";
    }
else if($message == "UDN000985"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000985";
    }
else if($message == "UDN000030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000030";
    }
else if($message == "UDN000028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000028";
    }
else if($message == "UDN000194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000194";
    }
else if($message == "UDN000031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000031";
    }
else if($message == "UDN000251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000251";
    }
else if($message == "UDN000523"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000523";
    }
else if($message == "UDN000032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000032";
    }
else if($message == "UDN000944"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000944";
    }
else if($message == "UDN001936"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001936";
    }
else if($message == "UDN000033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000033";
    }
else if($message == "UDN000217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000217";
    }
else if($message == "UDN000034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000034";
    }
else if($message == "UDN000035"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000035";
    }
else if($message == "UDN000021"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000021";
    }
else if($message == "UDN000036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000036";
    }
else if($message == "UDN000254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000254";
    }
else if($message == "UDN000037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000037";
    }
else if($message == "UDN000026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000026";
    }
else if($message == "UDN000038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000038";
    }
else if($message == "UDN000086"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000086";
    }
else if($message == "UDN000039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000039";
    }
else if($message == "UDN000237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000237";
    }
else if($message == "UDN000260"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000260";
    }
else if($message == "UDN000756"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000756";
    }
else if($message == "UDN001199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001199";
    }
else if($message == "UDN000040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000040";
    }
else if($message == "UDN000290"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000290";
    }
else if($message == "UDN000943"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000943";
    }
else if($message == "UDN001919"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001919";
    }
else if($message == "UDN000041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000041";
    }
else if($message == "UDN000042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000042";
    }
else if($message == "UDN000141"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000141";
    }
else if($message == "UDN000043"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000043";
    }
else if($message == "UDN000205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000205";
    }
else if($message == "UDN000044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000044";
    }
else if($message == "UDN001078"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001078";
    }
else if($message == "UDN000559"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000559";
    }
else if($message == "UDN000560"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000560";
    }
else if($message == "UDN000560"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000560";
    }
else if($message == "UDN001455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001455";
    }
else if($message == "UDN001129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001129";
    }
else if($message == "UDN001128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001128";
    }
else if($message == "UDN001109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001109";
    }
else if($message == "UDN000565"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000565";
    }
else if($message == "UDN001208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001208";
    }
else if($message == "UDN000573"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000573";
    }
else if($message == "UDN001127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001127";
    }
else if($message == "UDN001094"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001094";
    }
else if($message == "UDN001142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001142";
    }
else if($message == "UDN001058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001058";
    }
else if($message == "UDN001070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001070";
    }
else if($message == "UDN000691"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000691";
    }
else if($message == "UDN000693"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000693";
    }
else if($message == "UDN001058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001058";
    }
else if($message == "UDN000693"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000693";
    }
else if($message == "UDN000656"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000656";
    }
else if($message == "UDN001075"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001075";
    }
else if($message == "UDN000735"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000735";
    }
else if($message == "UDN000735"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000735";
    }
else if($message == "UDN001844"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001844";
    }
else if($message == "UDN001845"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001845";
    }
else if($message == "UDN000694"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000694";
    }
else if($message == "UDN001449"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001449";
    }
else if($message == "UDN001679"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001679";
    }
else if($message == "UDN00560"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN00560";
    }
else if($message == "UDN001114"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001114";
    }
else if($message == "UDN001686"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001686";
    }
else if($message == "UDN000695"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000695";
    }
else if($message == "UDN001074"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001074";
    }
else if($message == "UDN00560"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN00560";
    }
else if($message == "UDN001114"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001114";
    }
else if($message == "UDN001075"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001075";
    }
else if($message == "UDN001096"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001096";
    }
else if($message == "UDN001687"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001687";
    }
else if($message == "UDN001076"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001076";
    }
else if($message == "UDN000593"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000593";
    }
else if($message == "UDN001077"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001077";
    }
else if($message == "UDN001078"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001078";
    }
else if($message == "UDN001080"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001080";
    }
else if($message == "UDN001079"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001079";
    }
else if($message == "UDN001081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001081";
    }
else if($message == "UDN001080"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001080";
    }
else if($message == "UDN001083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001083";
    }
else if($message == "UDN001081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001081";
    }
else if($message == "UDN001082"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001082";
    }
else if($message == "UDN001082"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001082";
    }
else if($message == "UDN001083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001083";
    }
else if($message == "UDN001084"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001084";
    }
else if($message == "UDN001084"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001084";
    }
else if($message == "UDN001085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001085";
    }
else if($message == "UDN000602"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000602";
    }
else if($message == "UDN001085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001085";
    }
else if($message == "UDN001086"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001086";
    }
else if($message == "UDN001086"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001086";
    }
else if($message == "UDN001168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001168";
    }
else if($message == "UDN001087"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001087";
    }
else if($message == "UDN001087"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001087";
    }
else if($message == "UDN001088"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001088";
    }
else if($message == "UDN001438"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001438";
    }
else if($message == "UDN001089"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001089";
    }
else if($message == "UDN001088"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001088";
    }
else if($message == "UDN001090"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001090";
    }
else if($message == "UDN001089"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001089";
    }
else if($message == "UDN001091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001091";
    }
else if($message == "UDN001092"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001092";
    }
else if($message == "UDN001357"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001357";
    }
else if($message == "UDN001357"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001357";
    }
else if($message == "UDN001678"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001678";
    }
else if($message == "UDN001093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001093";
    }
else if($message == "UDN001095"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001095";
    }
else if($message == "UDN001094"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001094";
    }
else if($message == "UDN001095"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001095";
    }
else if($message == "UDN000593"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000593";
    }
else if($message == "UDN001077"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001077";
    }
else if($message == "UDN001108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001108";
    }
else if($message == "UDN001849"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001849";
    }
else if($message == "UDN001096"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001096";
    }
else if($message == "UDN000705"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000705";
    }
else if($message == "UDN001097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001097";
    }
else if($message == "UDN001098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001098";
    }
else if($message == "UDN001360"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001360";
    }
else if($message == "UDN001100"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001100";
    }
else if($message == "UDN001099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001099";
    }
else if($message == "UDN001100"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001100";
    }
else if($message == "UDN001101"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001101";
    }
else if($message == "UDN001135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001135";
    }
else if($message == "UDN000708"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000708";
    }
else if($message == "UDN001102"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001102";
    }
else if($message == "UDN000785"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000785";
    }
else if($message == "UDN001103"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001103";
    }
else if($message == "UDN001104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001104";
    }
else if($message == "UDN001104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001104";
    }
else if($message == "UDN001106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001106";
    }
else if($message == "UDN001105"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001105";
    }
else if($message == "UDN001105"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001105";
    }
else if($message == "UDN001107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001107";
    }
else if($message == "UDN000602"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000602";
    }
else if($message == "UDN001106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001106";
    }
else if($message == "UDN001107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001107";
    }
else if($message == "UDN001108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001108";
    }
else if($message == "UDN001110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001110";
    }
else if($message == "UDN001109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001109";
    }
else if($message == "UDN001110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001110";
    }
else if($message == "UDN001111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001111";
    }
else if($message == "UDN001093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001093";
    }
else if($message == "UDN001112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001112";
    }
else if($message == "UDN001113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001113";
    }
else if($message == "UDN001115"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001115";
    }
else if($message == "UDN001116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001116";
    }
else if($message == "UDN001679"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001679";
    }
else if($message == "UDN001455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001455";
    }
else if($message == "UDN001680"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001680";
    }
else if($message == "UDN001456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001456";
    }
else if($message == "UDN001461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001461";
    }
else if($message == "UDN001461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001461";
    }
else if($message == "UDN001454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001454";
    }
else if($message == "UDN001454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001454";
    }
else if($message == "UDN001681"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001681";
    }
else if($message == "UDN001682"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001682";
    }
else if($message == "UDN001690"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001690";
    }
else if($message == "UDN001683"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001683";
    }
else if($message == "UDN001684"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001684";
    }
else if($message == "UDN001685"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001685";
    }
else if($message == "UDN001611"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001611";
    }
else if($message == "UDN001686"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001686";
    }
else if($message == "UDN001687"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001687";
    }
else if($message == "UDN001688"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001688";
    }
else if($message == "UDN001689"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001689";
    }
else if($message == "UDN000436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000436";
    }
else if($message == "UDN000553"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000553";
    }
else if($message == "UDN000045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000045";
    }
else if($message == "UDN001027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001027";
    }
else if($message == "UDN000056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000056";
    }
else if($message == "UDN000046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000046";
    }
else if($message == "UDN000366"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000366";
    }
else if($message == "UDN001101"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001101";
    }
else if($message == "UDN000047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000047";
    }
else if($message == "UDN000049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000049";
    }
else if($message == "UDN000053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000053";
    }
else if($message == "UDN000057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000057";
    }
else if($message == "UDN000048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000048";
    }
else if($message == "UDN000787"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000787";
    }
else if($message == "UDN001683"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001683";
    }
else if($message == "UDN000049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000049";
    }
else if($message == "UDN000059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000059";
    }
else if($message == "UDN000062"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000062";
    }
else if($message == "UDN000475"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000475";
    }
else if($message == "UDN000556"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000556";
    }
else if($message == "UDN000790"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000790";
    }
else if($message == "UDN000992"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000992";
    }
else if($message == "UDN000993"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000993";
    }
else if($message == "UDN001027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001027";
    }
else if($message == "UDN001113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001113";
    }
else if($message == "UDN001127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001127";
    }
else if($message == "UDN001269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001269";
    }
else if($message == "UDN001681"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001681";
    }
else if($message == "UDN000003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000003";
    }
else if($message == "UDN000004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000004";
    }
else if($message == "UDN000048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000048";
    }
else if($message == "UDN000437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000437";
    }
else if($message == "UDN000051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000051";
    }
else if($message == "UDN000046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000046";
    }
else if($message == "UDN000047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000047";
    }
else if($message == "UDN000787"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000787";
    }
else if($message == "UDN001682"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001682";
    }
else if($message == "UDN000052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000052";
    }
else if($message == "UDN000052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000052";
    }
else if($message == "UDN000054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000054";
    }
else if($message == "UDN000055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000055";
    }
else if($message == "UDN000058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000058";
    }
else if($message == "UDN000502"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000502";
    }
else if($message == "UDN000791"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000791";
    }
else if($message == "UDN000995"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000995";
    }
else if($message == "UDN000996"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000996";
    }
else if($message == "UDN001644"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001644";
    }
else if($message == "UDN000053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000053";
    }
else if($message == "UDN000441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000441";
    }
else if($message == "UDN001128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001128";
    }
else if($message == "UDN000054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000054";
    }
else if($message == "UDN000060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000060";
    }
else if($message == "UDN000055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000055";
    }
else if($message == "UDN001112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001112";
    }
else if($message == "UDN001684"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001684";
    }
else if($message == "UDN000056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000056";
    }
else if($message == "UDN000061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000061";
    }
else if($message == "UDN001685"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001685";
    }
else if($message == "UDN000057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000057";
    }
else if($message == "UDN000058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000058";
    }
else if($message == "UDN000059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000059";
    }
else if($message == "UDN001074"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001074";
    }
else if($message == "UDN001680"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001680";
    }
else if($message == "UDN000790"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000790";
    }
else if($message == "UDN000051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000051";
    }
else if($message == "UDN000060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000060";
    }
else if($message == "UDN000061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000061";
    }
else if($message == "UDN000791"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000791";
    }
else if($message == "UDN000394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000394";
    }
else if($message == "UDN000440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000440";
    }
else if($message == "UDN000472"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000472";
    }
else if($message == "UDN000393"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000393";
    }
else if($message == "UDN000559"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000559";
    }
else if($message == "UDN001079"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001079";
    }
else if($message == "UDN001208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001208";
    }
else if($message == "UDN001643"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001643";
    }
else if($message == "UDN000394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000394";
    }
else if($message == "UDN000403"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000403";
    }
else if($message == "UDN000405"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000405";
    }
else if($message == "UDN000404"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000404";
    }
else if($message == "UDN001129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001129";
    }
else if($message == "UDN001091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001091";
    }
else if($message == "UDN001689"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001689";
    }
else if($message == "UDN000405"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000405";
    }
else if($message == "UDN000062"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000062";
    }
else if($message == "UDN001028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001028";
    }
else if($message == "UDN000436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000436";
    }
else if($message == "UDN000438"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000438";
    }
else if($message == "UDN000437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000437";
    }
else if($message == "UDN001115"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001115";
    }
else if($message == "UDN001672"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001672";
    }
else if($message == "UDN000438"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000438";
    }
else if($message == "UDN000480"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000480";
    }
else if($message == "UDN000795"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000795";
    }
else if($message == "UDN001116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001116";
    }
else if($message == "UDN000440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000440";
    }
else if($message == "UDN001028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001028";
    }
else if($message == "UDN001611"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001611";
    }
else if($message == "UDN000441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000441";
    }
else if($message == "UDN000480"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000480";
    }
else if($message == "UDN001071"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001071";
    }
else if($message == "UDN001111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001111";
    }
else if($message == "UDN000472"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000472";
    }
else if($message == "UDN000475"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000475";
    }
else if($message == "UDN000573"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000573";
    }
else if($message == "UDN000691"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000691";
    }
else if($message == "UDN001070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001070";
    }
else if($message == "UDN000785"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000785";
    }
else if($message == "UDN000695"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000695";
    }
else if($message == "UDN000796"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000796";
    }
else if($message == "UDN001456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001456";
    }
else if($message == "UDN001102"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001102";
    }
else if($message == "UDN000793"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000793";
    }
else if($message == "UDN001477"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001477";
    }
else if($message == "UDN001642"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001642";
    }
else if($message == "UDN001360"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001360";
    }
else if($message == "UDN001269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001269";
    }
else if($message == "UDN000568"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000568";
    }
else if($message == "UDN001642"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001642";
    }
else if($message == "UDN001090"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001090";
    }
else if($message == "UDN001026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001026";
    }
else if($message == "UDN000556"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000556";
    }
else if($message == "UDN000795"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000795";
    }
else if($message == "UDN000565"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000565";
    }
else if($message == "UDN001688"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001688";
    }
else if($message == "UDN001643"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001643";
    }
else if($message == "UDN001690"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001690";
    }
else if($message == "UDN000796"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000796";
    }
else if($message == "UDN000553"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000553";
    }
else if($message == "UDN001026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001026";
    }
else if($message == "UDN001644"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001644";
    }
else if($message == "UDN001246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001246";
    }
else if($message == "UDN001247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001247";
    }
else if($message == "UDN001245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001245";
    }
else if($message == "UDN001246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001246";
    }
else if($message == "UDN001248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001248";
    }
else if($message == "UDN001247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001247";
    }
else if($message == "UDN001250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001250";
    }
else if($message == "UDN001251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001251";
    }
else if($message == "UDN001699"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001699";
    }
else if($message == "UDN001046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001046";
    }
else if($message == "UDN001046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001046";
    }
else if($message == "UDN001047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001047";
    }
else if($message == "UDN001048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001048";
    }
else if($message == "UDN000743"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000743";
    }
else if($message == "UDN000808"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000808";
    }
else if($message == "UDN001048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001048";
    }
else if($message == "UDN001361"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001361";
    }
else if($message == "UDN001049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001049";
    }
else if($message == "UDN001049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001049";
    }
else if($message == "UDN001333"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001333";
    }
else if($message == "UDN001051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001051";
    }
else if($message == "UDN001051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001051";
    }
else if($message == "UDN001052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001052";
    }
else if($message == "UDN001052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001052";
    }
else if($message == "UDN001053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001053";
    }
else if($message == "UDN000807"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000807";
    }
else if($message == "UDN000743"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000743";
    }
else if($message == "UDN001054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001054";
    }
else if($message == "UDN001290"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001290";
    }
else if($message == "UDN000889"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000889";
    }
else if($message == "UDN000744"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000744";
    }
else if($message == "UDN000745"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000745";
    }
else if($message == "UDN001242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001242";
    }
else if($message == "UDN001337"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001337";
    }
else if($message == "UDN001241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001241";
    }
else if($message == "UDN000710"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000710";
    }
else if($message == "UDN000712"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000712";
    }
else if($message == "UDN000711"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000711";
    }
else if($message == "UDN000710"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000710";
    }
else if($message == "UDN000712"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000712";
    }
else if($message == "UDN000713"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000713";
    }
else if($message == "UDN000713"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000713";
    }
else if($message == "UDN001346"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001346";
    }
else if($message == "UDN001341"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001341";
    }
else if($message == "UDN001346"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001346";
    }
else if($message == "UDN001345"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001345";
    }
else if($message == "UDN001345"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001345";
    }
else if($message == "UDN001691"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001691";
    }
else if($message == "UDN001691"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001691";
    }
else if($message == "UDN001695"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001695";
    }
else if($message == "UDN001692"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001692";
    }
else if($message == "UDN001692"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001692";
    }
else if($message == "UDN001342"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001342";
    }
else if($message == "UDN000804"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000804";
    }
else if($message == "UDN001693"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001693";
    }
else if($message == "UDN001564"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001564";
    }
else if($message == "UDN001565"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001565";
    }
else if($message == "UDN001716"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001716";
    }
else if($message == "UDN001336"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001336";
    }
else if($message == "UDN001334"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001334";
    }
else if($message == "UDN001336"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001336";
    }
else if($message == "UDN001335"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001335";
    }
else if($message == "UDN001335"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001335";
    }
else if($message == "UDN001433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001433";
    }
else if($message == "UDN001731"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001731";
    }
else if($message == "UDN001694"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001694";
    }
else if($message == "UDN001327"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001327";
    }
else if($message == "UDN001327"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001327";
    }
else if($message == "UDN001326"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001326";
    }
else if($message == "UDN001326"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001326";
    }
else if($message == "UDN001695"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001695";
    }
else if($message == "UDN001341"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001341";
    }
else if($message == "UDN001696"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001696";
    }
else if($message == "UDN001697"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001697";
    }
else if($message == "UDN001340"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001340";
    }
else if($message == "UDN001698"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001698";
    }
else if($message == "UDN001338"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001338";
    }
else if($message == "UDN001339"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001339";
    }
else if($message == "UDN001340"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001340";
    }
else if($message == "UDN001339"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001339";
    }
else if($message == "UDN001338"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001338";
    }
else if($message == "UDN001334"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001334";
    }
else if($message == "UDN001699"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001699";
    }
else if($message == "UDN001321"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001321";
    }
else if($message == "UDN001321"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001321";
    }
else if($message == "UDN001487"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001487";
    }
else if($message == "UDN001700"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001700";
    }
else if($message == "UDN001701"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001701";
    }
else if($message == "UDN001702"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001702";
    }
else if($message == "UDN001703"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001703";
    }
else if($message == "UDN001704"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001704";
    }
else if($message == "UDN001392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001392";
    }
else if($message == "UDN001390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001390";
    }
else if($message == "UDN001392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001392";
    }
else if($message == "UDN001391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001391";
    }
else if($message == "UDN001389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001389";
    }
else if($message == "UDN001390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001390";
    }
else if($message == "UDN001389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001389";
    }
else if($message == "UDN001645"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001645";
    }
else if($message == "UDN001381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001381";
    }
else if($message == "UDN001381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001381";
    }
else if($message == "UDN001380"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001380";
    }
else if($message == "UDN001380"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001380";
    }
else if($message == "UDN001379"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001379";
    }
else if($message == "UDN001379"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001379";
    }
else if($message == "UDN001378"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001378";
    }
else if($message == "UDN001378"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001378";
    }
else if($message == "UDN001377"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001377";
    }
else if($message == "UDN001377"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001377";
    }
else if($message == "UDN001376"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001376";
    }
else if($message == "UDN001376"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001376";
    }
else if($message == "UDN001388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001388";
    }
else if($message == "UDN001709"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001709";
    }
else if($message == "UDN001386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001386";
    }
else if($message == "UDN001386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001386";
    }
else if($message == "UDN001388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001388";
    }
else if($message == "UDN001385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001385";
    }
else if($message == "UDN001384"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001384";
    }
else if($message == "UDN001385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001385";
    }
else if($message == "UDN001387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001387";
    }
else if($message == "UDN001383"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001383";
    }
else if($message == "UDN001384"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001384";
    }
else if($message == "UDN001382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001382";
    }
else if($message == "UDN001383"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001383";
    }
else if($message == "UDN001705"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001705";
    }
else if($message == "UDN001382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001382";
    }
else if($message == "UDN001387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001387";
    }
else if($message == "UDN001412"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001412";
    }
else if($message == "UDN001400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001400";
    }
else if($message == "UDN001401"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001401";
    }
else if($message == "UDN001400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001400";
    }
else if($message == "UDN001406"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001406";
    }
else if($message == "UDN001399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001399";
    }
else if($message == "UDN001712"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001712";
    }
else if($message == "UDN001333"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001333";
    }
else if($message == "UDN001361"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001361";
    }
else if($message == "UDN001696"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001696";
    }
else if($message == "UDN001697"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001697";
    }
else if($message == "UDN001706"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001706";
    }
else if($message == "UDN001707"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001707";
    }
else if($message == "UDN001713"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001713";
    }
else if($message == "UDN001337"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001337";
    }
else if($message == "UDN001708"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001708";
    }
else if($message == "UDN001406"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001406";
    }
else if($message == "UDN001407"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001407";
    }
else if($message == "UDN001709"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001709";
    }
else if($message == "UDN001487"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001487";
    }
else if($message == "UDN001564"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001564";
    }
else if($message == "UDN001565"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001565";
    }
else if($message == "UDN001489"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001489";
    }
else if($message == "UDN001490"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001490";
    }
else if($message == "UDN001527"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001527";
    }
else if($message == "UDN001710"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001710";
    }
else if($message == "UDN001528"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001528";
    }
else if($message == "UDN001710"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001710";
    }
else if($message == "UDN001711"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001711";
    }
else if($message == "UDN001712"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001712";
    }
else if($message == "UDN001713"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001713";
    }
else if($message == "UDN001645"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001645";
    }
else if($message == "UDN001714"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001714";
    }
else if($message == "UDN001715"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001715";
    }
else if($message == "UDN001716"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001716";
    }
else if($message == "UDN001244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001244";
    }
else if($message == "UDN000510"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000510";
    }
else if($message == "UDN000798"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000798";
    }
else if($message == "UDN001000"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001000";
    }
else if($message == "UDN001042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001042";
    }
else if($message == "UDN001053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001053";
    }
else if($message == "UDN001528"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001528";
    }
else if($message == "UDN001711"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001711";
    }
else if($message == "UDN000509"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000509";
    }
else if($message == "UDN000511"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000511";
    }
else if($message == "UDN000510"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000510";
    }
else if($message == "UDN001646"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001646";
    }
else if($message == "UDN000511"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000511";
    }
else if($message == "UDN000541"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000541";
    }
else if($message == "UDN000797"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000797";
    }
else if($message == "UDN001646"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001646";
    }
else if($message == "UDN000809"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000809";
    }
else if($message == "UDN001236"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001236";
    }
else if($message == "UDN001251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001251";
    }
else if($message == "UDN000797"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000797";
    }
else if($message == "UDN000744"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000744";
    }
else if($message == "UDN001714"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001714";
    }
else if($message == "UDN000798"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000798";
    }
else if($message == "UDN001704"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001704";
    }
else if($message == "UDN001047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001047";
    }
else if($message == "UDN001399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001399";
    }
else if($message == "UDN001401"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001401";
    }
else if($message == "UDN000541"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000541";
    }
else if($message == "UDN000745"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000745";
    }
else if($message == "UDN001489"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001489";
    }
else if($message == "UDN001703"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001703";
    }
else if($message == "UDN001708"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001708";
    }
else if($message == "UDN000799"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000799";
    }
else if($message == "UDN001412"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001412";
    }
else if($message == "UDN001647"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001647";
    }
else if($message == "UDN000800"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000800";
    }
else if($message == "UDN000746"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000746";
    }
else if($message == "UDN001647"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001647";
    }
else if($message == "UDN001527"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001527";
    }
else if($message == "UDN000746"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000746";
    }
else if($message == "UDN000801"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000801";
    }
else if($message == "UDN001717"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001717";
    }
else if($message == "UDN000711"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000711";
    }
else if($message == "UDN001407"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001407";
    }
else if($message == "UDN001490"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001490";
    }
else if($message == "UDN001494"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001494";
    }
else if($message == "UDN000801"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000801";
    }
else if($message == "UDN001249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001249";
    }
else if($message == "UDN001715"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001715";
    }
else if($message == "UDN001248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001248";
    }
else if($message == "NKI000334"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000334";
    }
else if($message == "UDN001249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001249";
    }
else if($message == "UDN000804"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000804";
    }
else if($message == "UDN001250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001250";
    }
else if($message == "UDN001239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001239";
    }
else if($message == "UDN001433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001433";
    }
else if($message == "UDN001238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001238";
    }
else if($message == "UDN001243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001243";
    }
else if($message == "UDN000806"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000806";
    }
else if($message == "UDN001242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001242";
    }
else if($message == "UDN000889"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000889";
    }
else if($message == "UDN000807"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000807";
    }
else if($message == "UDN001054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001054";
    }
else if($message == "UDN001702"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001702";
    }
else if($message == "UDN000808"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000808";
    }
else if($message == "UDN001237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001237";
    }
else if($message == "UDN000809"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000809";
    }
else if($message == "UDN001236"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001236";
    }
else if($message == "UDN001238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001238";
    }
else if($message == "UDN001342"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001342";
    }
else if($message == "UDN001693"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001693";
    }
else if($message == "UDN001237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001237";
    }
else if($message == "UDN001240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001240";
    }
else if($message == "UDN001239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001239";
    }
else if($message == "UDN001241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001241";
    }
else if($message == "UDN001240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001240";
    }
else if($message == "UDN000806"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000806";
    }
else if($message == "UDN001243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001243";
    }
else if($message == "UDN001245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001245";
    }
else if($message == "UDN001244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001244";
    }
else if($message == "UDN001481"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001481";
    }
else if($message == "UDN001420"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001420";
    }
else if($message == "UDN001421"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001421";
    }
else if($message == "UDN001478"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001478";
    }
else if($message == "UDN001480"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001480";
    }
else if($message == "UDN001472"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001472";
    }
else if($message == "UDN001472"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001472";
    }
else if($message == "UDN001480"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001480";
    }
else if($message == "UDN001718"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001718";
    }
else if($message == "UDN001719"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001719";
    }
else if($message == "UDN001720"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001720";
    }
else if($message == "UDN001721"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001721";
    }
else if($message == "UDN001722"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001722";
    }
else if($message == "UDN001723"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001723";
    }
else if($message == "UDN001724"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001724";
    }
else if($message == "UDN001725"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001725";
    }
else if($message == "UDN001726"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001726";
    }
else if($message == "UDN001481"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001481";
    }
else if($message == "UDN001722"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001722";
    }
else if($message == "UDN000535"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000535";
    }
else if($message == "UDN001720"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001720";
    }
else if($message == "UDN000530"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000530";
    }
else if($message == "UDN000529"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000529";
    }
else if($message == "UDN001719"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001719";
    }
else if($message == "UDN001724"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001724";
    }
else if($message == "UDN000978"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000978";
    }
else if($message == "UDN000990"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000990";
    }
else if($message == "UDN001257"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001257";
    }
else if($message == "UDN000530"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000530";
    }
else if($message == "UDN001473"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001473";
    }
else if($message == "UDN001721"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001721";
    }
else if($message == "UDN000529"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000529";
    }
else if($message == "UDN001369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001369";
    }
else if($message == "UDN000549"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000549";
    }
else if($message == "UDN001288"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001288";
    }
else if($message == "UDN001369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001369";
    }
else if($message == "UDN001255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001255";
    }
else if($message == "UDN001405"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001405";
    }
else if($message == "UDN000813"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000813";
    }
else if($message == "UDN001723"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001723";
    }
else if($message == "UDN000584"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000584";
    }
else if($message == "UDN000584"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000584";
    }
else if($message == "UDN000549"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000549";
    }
else if($message == "UDN001289"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001289";
    }
else if($message == "UDN001289"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001289";
    }
else if($message == "UDN001403"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001403";
    }
else if($message == "UDN000814"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000814";
    }
else if($message == "UDN001288"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001288";
    }
else if($message == "UDN001513"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001513";
    }
else if($message == "UDN001324"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001324";
    }
else if($message == "UDN001395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001395";
    }
else if($message == "UDN001332"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001332";
    }
else if($message == "UDN001395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001395";
    }
else if($message == "UDN001727"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001727";
    }
else if($message == "UDN001394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001394";
    }
else if($message == "UDN001396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001396";
    }
else if($message == "UDN001394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001394";
    }
else if($message == "UDN001324"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001324";
    }
else if($message == "UDN001728"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001728";
    }
else if($message == "UDN001408"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001408";
    }
else if($message == "UDN001482"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001482";
    }
else if($message == "UDN001332"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001332";
    }
else if($message == "UDN001403"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001403";
    }
else if($message == "UDN001424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001424";
    }
else if($message == "UDN001478"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001478";
    }
else if($message == "UDN001371"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001371";
    }
else if($message == "UDN001404"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001404";
    }
else if($message == "UDN001372"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001372";
    }
else if($message == "UDN001372"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001372";
    }
else if($message == "UDN001414"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001414";
    }
else if($message == "UDN001404"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001404";
    }
else if($message == "UDN001405"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001405";
    }
else if($message == "UDN001422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001422";
    }
else if($message == "UDN001473"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001473";
    }
else if($message == "UDN001422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001422";
    }
else if($message == "UDN001424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001424";
    }
else if($message == "NPL000224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000224";
    }
else if($message == "UDN001513"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001513";
    }
else if($message == "UDN001726"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001726";
    }
else if($message == "NPL000224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000224";
    }
else if($message == "UDN001728"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001728";
    }
else if($message == "UDN001420"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001420";
    }
else if($message == "UDN001423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001423";
    }
else if($message == "UDN001423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001423";
    }
else if($message == "UDN000892"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000892";
    }
else if($message == "UDN001556"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001556";
    }
else if($message == "UDN001735"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001735";
    }
else if($message == "UDN000816"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000816";
    }
else if($message == "UDN001001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001001";
    }
else if($message == "NKI000264"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000264";
    }
else if($message == "UDN000892"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000892";
    }
else if($message == "UDN001000"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001000";
    }
else if($message == "UDN001034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001034";
    }
else if($message == "UDN000747"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000747";
    }
else if($message == "UDN000953"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000953";
    }
else if($message == "UDN000816"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000816";
    }
else if($message == "UDN000954"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000954";
    }
else if($message == "UDN001733"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001733";
    }
else if($message == "UDN000817"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000817";
    }
else if($message == "UDN000817"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000817";
    }
else if($message == "UDN001483"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001483";
    }
else if($message == "UDN001484"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001484";
    }
else if($message == "UDN001485"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001485";
    }
else if($message == "UDN001034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001034";
    }
else if($message == "UDN001307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001307";
    }
else if($message == "UDN001035"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001035";
    }
else if($message == "UDN000894"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000894";
    }
else if($message == "UDN000953"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000953";
    }
else if($message == "UDN001302"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001302";
    }
else if($message == "UDN000954"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000954";
    }
else if($message == "UDN001037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001037";
    }
else if($message == "UDN001306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001306";
    }
else if($message == "UDN001036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001036";
    }
else if($message == "UDN001037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001037";
    }
else if($message == "UDN001729"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001729";
    }
else if($message == "UDN001730"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001730";
    }
else if($message == "UDN001729"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001729";
    }
else if($message == "UDN001732"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001732";
    }
else if($message == "UDN001731"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001731";
    }
else if($message == "UDN001732"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001732";
    }
else if($message == "UDN001733"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001733";
    }
else if($message == "UDN001306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001306";
    }
else if($message == "UDN001305"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001305";
    }
else if($message == "UDN001515"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001515";
    }
else if($message == "UDN001516"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001516";
    }
else if($message == "UDN001734"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001734";
    }
else if($message == "UDN001308"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001308";
    }
else if($message == "UDN001308"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001308";
    }
else if($message == "UDN001552"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001552";
    }
else if($message == "UDN001307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001307";
    }
else if($message == "UDN001556"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001556";
    }
else if($message == "UDN001484"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001484";
    }
else if($message == "UDN001483"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001483";
    }
else if($message == "UDN001555"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001555";
    }
else if($message == "UDN001554"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001554";
    }
else if($message == "UDN001555"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001555";
    }
else if($message == "UDN001485"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001485";
    }
else if($message == "UDN001554"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001554";
    }
else if($message == "UDN001553"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001553";
    }
else if($message == "UDN001552"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001552";
    }
else if($message == "UDN001553"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001553";
    }
else if($message == "UDN001735"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001735";
    }
else if($message == "UDN000460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000460";
    }
else if($message == "UDN000614"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000614";
    }
else if($message == "UDN001751"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001751";
    }
else if($message == "UDN000459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000459";
    }
else if($message == "UDN000461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000461";
    }
else if($message == "UDN000462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000462";
    }
else if($message == "UDN000576"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000576";
    }
else if($message == "UDN000819"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000819";
    }
else if($message == "UDN000997"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000997";
    }
else if($message == "UDN001056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001056";
    }
else if($message == "UDN001495"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001495";
    }
else if($message == "UDN000460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000460";
    }
else if($message == "UDN001649"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001649";
    }
else if($message == "UDN000461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000461";
    }
else if($message == "UDN000462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000462";
    }
else if($message == "UDN000818"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000818";
    }
else if($message == "UDN000819"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000819";
    }
else if($message == "UDN000716"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000716";
    }
else if($message == "UDN001547"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001547";
    }
else if($message == "UDN001741"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001741";
    }
else if($message == "UDN001648"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001648";
    }
else if($message == "UDN001492"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001492";
    }
else if($message == "UDN001649"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001649";
    }
else if($message == "UDN000576"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000576";
    }
else if($message == "UDN000818"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000818";
    }
else if($message == "UDN001057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001057";
    }
else if($message == "UDN000716"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000716";
    }
else if($message == "UDN001002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001002";
    }
else if($message == "UDN001057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001057";
    }
else if($message == "UDN001493"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001493";
    }
else if($message == "UDN001002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001002";
    }
else if($message == "UDN001493"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001493";
    }
else if($message == "UDN001055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001055";
    }
else if($message == "UDN001056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001056";
    }
else if($message == "UDN000896"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000896";
    }
else if($message == "UDN001548"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001548";
    }
else if($message == "UDN001740"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001740";
    }
else if($message == "UDN000955"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000955";
    }
else if($message == "UDN001738"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001738";
    }
else if($message == "UDN000896"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000896";
    }
else if($message == "UDN001496"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001496";
    }
else if($message == "UDN000955"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000955";
    }
else if($message == "UDN001055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001055";
    }
else if($message == "UDN001736"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001736";
    }
else if($message == "UDN001492"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001492";
    }
else if($message == "UDN001494"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001494";
    }
else if($message == "UDN001567"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001567";
    }
else if($message == "UDN001737"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001737";
    }
else if($message == "UDN001496"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001496";
    }
else if($message == "UDN001567"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001567";
    }
else if($message == "UDN001495"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001495";
    }
else if($message == "UDN001547"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001547";
    }
else if($message == "UDN001738"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001738";
    }
else if($message == "UDN001739"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001739";
    }
else if($message == "UDN001739"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001739";
    }
else if($message == "UDN001740"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001740";
    }
else if($message == "UDN001548"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001548";
    }
else if($message == "UDN001741"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001741";
    }
else if($message == "UDN000898"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000898";
    }
else if($message == "UDN001746"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001746";
    }
else if($message == "UDN000821"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000821";
    }
else if($message == "UDN001402"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001402";
    }
else if($message == "UDN001748"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001748";
    }
else if($message == "UDN000513"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000513";
    }
else if($message == "UDN000509"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000509";
    }
else if($message == "UDN000513"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000513";
    }
else if($message == "UDN000586"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000586";
    }
else if($message == "UDN000821"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000821";
    }
else if($message == "UDN001398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001398";
    }
else if($message == "UDN000512"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000512";
    }
else if($message == "UDN000823"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000823";
    }
else if($message == "UDN001294"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001294";
    }
else if($message == "UDN001650"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001650";
    }
else if($message == "UDN001397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001397";
    }
else if($message == "UDN000897"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000897";
    }
else if($message == "UDN001362"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001362";
    }
else if($message == "UDN001402"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001402";
    }
else if($message == "UDN001362"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001362";
    }
else if($message == "UDN000956"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000956";
    }
else if($message == "UDN001391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001391";
    }
else if($message == "UDN000822"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000822";
    }
else if($message == "UDN000822"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000822";
    }
else if($message == "UDN000824"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000824";
    }
else if($message == "UDN000823"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000823";
    }
else if($message == "UDN001742"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001742";
    }
else if($message == "UDN000956"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000956";
    }
else if($message == "UDN001743"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001743";
    }
else if($message == "UDN001742"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001742";
    }
else if($message == "UDN001488"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001488";
    }
else if($message == "UDN001743"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001743";
    }
else if($message == "UDN001744"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001744";
    }
else if($message == "UDN001486"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001486";
    }
else if($message == "UDN001651"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001651";
    }
else if($message == "UDN001745"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001745";
    }
else if($message == "UDN001744"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001744";
    }
else if($message == "UDN001651"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001651";
    }
else if($message == "UDN001745"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001745";
    }
else if($message == "UDN000824"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000824";
    }
else if($message == "UDN001294"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001294";
    }
else if($message == "UDN001747"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001747";
    }
else if($message == "UDN001749"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001749";
    }
else if($message == "UDN001398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001398";
    }
else if($message == "UDN000897"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000897";
    }
else if($message == "UDN000898"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000898";
    }
else if($message == "UDN001746"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001746";
    }
else if($message == "UDN001488"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001488";
    }
else if($message == "UDN001486"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001486";
    }
else if($message == "UDN001747"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001747";
    }
else if($message == "UDN001748"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001748";
    }
else if($message == "UDN001749"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001749";
    }
else if($message == "UDN000717"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000717";
    }
else if($message == "UDN000899"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000899";
    }
else if($message == "UDN001544"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001544";
    }
else if($message == "UDN001632"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001632";
    }
else if($message == "UDN000825"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000825";
    }
else if($message == "UDN000899"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000899";
    }
else if($message == "UDN001632"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001632";
    }
else if($message == "UDN000900"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000900";
    }
else if($message == "UDN000631"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000631";
    }
else if($message == "UDN001457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001457";
    }
else if($message == "UDN001752"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001752";
    }
else if($message == "UDN001633"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001633";
    }
else if($message == "UDN000901"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000901";
    }
else if($message == "UDN001750"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001750";
    }
else if($message == "UDN000748"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000748";
    }
else if($message == "UDN000829"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000829";
    }
else if($message == "UDN001041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001041";
    }
else if($message == "UDN000609"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000609";
    }
else if($message == "UDN000609"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000609";
    }
else if($message == "UDN000610"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000610";
    }
else if($message == "UDN000774"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000774";
    }
else if($message == "UDN000611"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000611";
    }
else if($message == "UDN000612"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000612";
    }
else if($message == "UDN000638"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000638";
    }
else if($message == "UDN000774"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000774";
    }
else if($message == "UDN000775"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000775";
    }
else if($message == "UDN000632"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000632";
    }
else if($message == "UDN000829"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000829";
    }
else if($message == "UDN001003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001003";
    }
else if($message == "UDN000610"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000610";
    }
else if($message == "UDN000776"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000776";
    }
else if($message == "UDN000777"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000777";
    }
else if($message == "UDN000613"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000613";
    }
else if($message == "UDN000614"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000614";
    }
else if($message == "UDN001022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001022";
    }
else if($message == "UDN001204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001204";
    }
else if($message == "UDN000615"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000615";
    }
else if($message == "UDN000634"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000634";
    }
else if($message == "UDN000616"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000616";
    }
else if($message == "UDN000616"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000616";
    }
else if($message == "UDN000636"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000636";
    }
else if($message == "UDN000617"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000617";
    }
else if($message == "UDN000617"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000617";
    }
else if($message == "UDN000619"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000619";
    }
else if($message == "UDN000618"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000618";
    }
else if($message == "UDN000620"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000620";
    }
else if($message == "UDN000622"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000622";
    }
else if($message == "UDN000619"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000619";
    }
else if($message == "UDN000633"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000633";
    }
else if($message == "UDN000620"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000620";
    }
else if($message == "UDN000623"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000623";
    }
else if($message == "UDN000621"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000621";
    }
else if($message == "UDN000621"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000621";
    }
else if($message == "UDN000622"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000622";
    }
else if($message == "UDN001004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001004";
    }
else if($message == "UDN001040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001040";
    }
else if($message == "UDN000623"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000623";
    }
else if($message == "UDN000749"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000749";
    }
else if($message == "UDN001004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001004";
    }
else if($message == "UDN000778"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000778";
    }
else if($message == "UDN000778"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000778";
    }
else if($message == "UDN000779"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000779";
    }
else if($message == "UDN000779"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000779";
    }
else if($message == "UDN000780"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000780";
    }
else if($message == "UDN000781"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000781";
    }
else if($message == "UDN001005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001005";
    }
else if($message == "UDN001751"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001751";
    }
else if($message == "UDN000781"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000781";
    }
else if($message == "UDN000624"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000624";
    }
else if($message == "UDN001759"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001759";
    }
else if($message == "UDN000625"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000625";
    }
else if($message == "UDN000626"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000626";
    }
else if($message == "UDN000627"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000627";
    }
else if($message == "UDN001311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001311";
    }
else if($message == "UDN000628"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000628";
    }
else if($message == "UDN000629"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000629";
    }
else if($message == "UDN000628"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000628";
    }
else if($message == "UDN000629"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000629";
    }
else if($message == "UDN000630"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000630";
    }
else if($message == "UDN000630"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000630";
    }
else if($message == "UDN000631"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000631";
    }
else if($message == "UDN000632"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000632";
    }
else if($message == "UDN001041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001041";
    }
else if($message == "UDN000633"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000633";
    }
else if($message == "UDN000634"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000634";
    }
else if($message == "UDN000637"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000637";
    }
else if($message == "UDN000635"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000635";
    }
else if($message == "UDN000615"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000615";
    }
else if($message == "UDN000636"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000636";
    }
else if($message == "UDN000782"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000782";
    }
else if($message == "UDN000783"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000783";
    }
else if($message == "UDN000748"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000748";
    }
else if($message == "UDN000749"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000749";
    }
else if($message == "UDN001040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001040";
    }
else if($message == "UDN000750"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000750";
    }
else if($message == "UDN000618"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000618";
    }
else if($message == "UDN000637"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000637";
    }
else if($message == "UDN000638"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000638";
    }
else if($message == "UDN000639"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000639";
    }
else if($message == "UDN001005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001005";
    }
else if($message == "UDN000640"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000640";
    }
else if($message == "UDN000641"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000641";
    }
else if($message == "UDN001752"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001752";
    }
else if($message == "UDN001368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001368";
    }
else if($message == "UDN001366"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001366";
    }
else if($message == "UDN001544"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001544";
    }
else if($message == "UDN001457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001457";
    }
else if($message == "UDN001753"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001753";
    }
else if($message == "UDN001754"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001754";
    }
else if($message == "UDN001755"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001755";
    }
else if($message == "UDN001446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001446";
    }
else if($message == "UDN001756"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001756";
    }
else if($message == "UDN001758"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001758";
    }
else if($message == "UDN001757"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001757";
    }
else if($message == "UDN001442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001442";
    }
else if($message == "UDN001758"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001758";
    }
else if($message == "UDN001759"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001759";
    }
else if($message == "UDN000064"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000064";
    }
else if($message == "UDN000065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000065";
    }
else if($message == "UDN000067"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000067";
    }
else if($message == "UDN000414"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000414";
    }
else if($message == "UDN000466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000466";
    }
else if($message == "UDN000998"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000998";
    }
else if($message == "UDN001442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001442";
    }
else if($message == "UDN000063"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000063";
    }
else if($message == "UDN000413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000413";
    }
else if($message == "UDN000994"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000994";
    }
else if($message == "UDN000995"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000995";
    }
else if($message == "UDN000069"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000069";
    }
else if($message == "UDN001368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001368";
    }
else if($message == "UDN001755"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001755";
    }
else if($message == "UDN000064"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000064";
    }
else if($message == "UDN001753"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001753";
    }
else if($message == "UDN000065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000065";
    }
else if($message == "UDN000070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000070";
    }
else if($message == "UDN000512"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000512";
    }
else if($message == "UDN000582"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000582";
    }
else if($message == "UDN000639"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000639";
    }
else if($message == "UDN000641"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000641";
    }
else if($message == "UDN000836"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000836";
    }
else if($message == "UDN001209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001209";
    }
else if($message == "UDN000066"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000066";
    }
else if($message == "UDN001260"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001260";
    }
else if($message == "UDN000562"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000562";
    }
else if($message == "UDN000563"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000563";
    }
else if($message == "UDN001038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001038";
    }
else if($message == "UDN001754"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001754";
    }
else if($message == "UDN000067"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000067";
    }
else if($message == "UDN000514"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000514";
    }
else if($message == "UDN000516"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000516";
    }
else if($message == "UDN000903"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000903";
    }
else if($message == "UDN001260"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001260";
    }
else if($message == "UDN000068"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000068";
    }
else if($message == "UDN000635"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000635";
    }
else if($message == "UDN001366"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001366";
    }
else if($message == "UDN000069"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000069";
    }
else if($message == "UDN000070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000070";
    }
else if($message == "UDN000066"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000066";
    }
else if($message == "UDN000446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000446";
    }
else if($message == "UDN000395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000395";
    }
else if($message == "UDN000555"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000555";
    }
else if($message == "UDN001118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001118";
    }
else if($message == "UDN000415"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000415";
    }
else if($message == "UDN000439"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000439";
    }
else if($message == "UDN000486"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000486";
    }
else if($message == "UDN000624"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000624";
    }
else if($message == "UDN000640"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000640";
    }
else if($message == "UDN001195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001195";
    }
else if($message == "UDN000412"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000412";
    }
else if($message == "UDN000900"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000900";
    }
else if($message == "UDN001905"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001905";
    }
else if($message == "UDN000439"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000439";
    }
else if($message == "UDN000459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000459";
    }
else if($message == "UDN000485"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000485";
    }
else if($message == "UDN000445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000445";
    }
else if($message == "UDN000445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000445";
    }
else if($message == "UDN000489"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000489";
    }
else if($message == "UDN000446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000446";
    }
else if($message == "UDN001185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001185";
    }
else if($message == "UDN000467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000467";
    }
else if($message == "UDN000517"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000517";
    }
else if($message == "UDN000466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000466";
    }
else if($message == "UDN000467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000467";
    }
else if($message == "UDN000485"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000485";
    }
else if($message == "UDN000625"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000625";
    }
else if($message == "UDN000958"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000958";
    }
else if($message == "UDN001033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001033";
    }
else if($message == "UDN001122"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001122";
    }
else if($message == "UDN000486"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000486";
    }
else if($message == "UDN000499"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000499";
    }
else if($message == "UDN000489"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000489";
    }
else if($message == "UDN000515"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000515";
    }
else if($message == "UDN000782"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000782";
    }
else if($message == "UDN001757"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001757";
    }
else if($message == "UDN000514"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000514";
    }
else if($message == "UDN001397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001397";
    }
else if($message == "UDN000515"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000515";
    }
else if($message == "UDN000586"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000586";
    }
else if($message == "UDN000837"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000837";
    }
else if($message == "UDN000499"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000499";
    }
else if($message == "UDN000517"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000517";
    }
else if($message == "UDN000574"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000574";
    }
else if($message == "UDN000825"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000825";
    }
else if($message == "UDN001032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001032";
    }
else if($message == "UDN000516"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000516";
    }
else if($message == "UDN000626"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000626";
    }
else if($message == "UDN000957"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000957";
    }
else if($message == "UDN001204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001204";
    }
else if($message == "UDN001254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001254";
    }
else if($message == "UDN000903"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000903";
    }
else if($message == "UDN001032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001032";
    }
else if($message == "UDN000833"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000833";
    }
else if($message == "UDN000901"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000901";
    }
else if($message == "UDN000957"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000957";
    }
else if($message == "UDN001031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001031";
    }
else if($message == "UDN000545"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000545";
    }
else if($message == "UDN000578"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000578";
    }
else if($message == "UDN001030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001030";
    }
else if($message == "UDN001123"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001123";
    }
else if($message == "UDN000627"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000627";
    }
else if($message == "UDN001003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001003";
    }
else if($message == "UDN001033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001033";
    }
else if($message == "UDN000958"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000958";
    }
else if($message == "UDN001122"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001122";
    }
else if($message == "UDN001209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001209";
    }
else if($message == "UDN000558"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000558";
    }
else if($message == "UDN001446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001446";
    }
else if($message == "UDN001038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001038";
    }
else if($message == "UDN001031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001031";
    }
else if($message == "UDN000833"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000833";
    }
else if($message == "UDN000611"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000611";
    }
else if($message == "UDN001750"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001750";
    }
else if($message == "UDN000545"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000545";
    }
else if($message == "UDN000750"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000750";
    }
else if($message == "UDN001120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001120";
    }
else if($message == "UDN000555"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000555";
    }
else if($message == "UDN000562"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000562";
    }
else if($message == "UDN000613"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000613";
    }
else if($message == "UDN000777"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000777";
    }
else if($message == "UDN000558"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000558";
    }
else if($message == "UDN000563"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000563";
    }
else if($message == "UDN000776"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000776";
    }
else if($message == "UDN000783"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000783";
    }
else if($message == "UDN000834"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000834";
    }
else if($message == "UDN001652"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001652";
    }
else if($message == "UDN000834"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000834";
    }
else if($message == "UDN001030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001030";
    }
else if($message == "UDN001756"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001756";
    }
else if($message == "UDN001118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001118";
    }
else if($message == "UDN000612"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000612";
    }
else if($message == "UDN000836"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000836";
    }
else if($message == "UDN000717"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000717";
    }
else if($message == "UDN000574"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000574";
    }
else if($message == "UDN000775"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000775";
    }
else if($message == "UDN000578"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000578";
    }
else if($message == "UDN000582"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000582";
    }
else if($message == "UDN001184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001184";
    }
else if($message == "UDN000837"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000837";
    }
else if($message == "UDN001184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001184";
    }
else if($message == "UDN000780"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000780";
    }
else if($message == "UDN001120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001120";
    }
else if($message == "UDN001610"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001610";
    }
else if($message == "UDN001760"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001760";
    }
else if($message == "UDN001761"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001761";
    }
else if($message == "UDN000019"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000019";
    }
else if($message == "UDN001760"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001760";
    }
else if($message == "UDN001763"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001763";
    }
else if($message == "UDN001765"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001765";
    }
else if($message == "UDN000071"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000071";
    }
else if($message == "UDN000468"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000468";
    }
else if($message == "UDN000072"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000072";
    }
else if($message == "UDN000074"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000074";
    }
else if($message == "UDN000073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000073";
    }
else if($message == "UDN000548"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000548";
    }
else if($message == "UDN000074"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000074";
    }
else if($message == "UDN000075"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000075";
    }
else if($message == "UDN000431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000431";
    }
else if($message == "UDN000527"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000527";
    }
else if($message == "UDN000561"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000561";
    }
else if($message == "UDN001767"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001767";
    }
else if($message == "UDN000019"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000019";
    }
else if($message == "UDN000426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000426";
    }
else if($message == "UDN000431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000431";
    }
else if($message == "UDN000432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000432";
    }
else if($message == "UDN001610"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001610";
    }
else if($message == "UDN000426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000426";
    }
else if($message == "UDN000642"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000642";
    }
else if($message == "UDN001039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001039";
    }
else if($message == "UDN001189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001189";
    }
else if($message == "UDN001762"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001762";
    }
else if($message == "UDN000432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000432";
    }
else if($message == "UDN001766"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001766";
    }
else if($message == "UDN000468"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000468";
    }
else if($message == "UDN000572"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000572";
    }
else if($message == "UDN001653"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001653";
    }
else if($message == "UDN000469"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000469";
    }
else if($message == "UDN000527"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000527";
    }
else if($message == "UDN000546"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000546";
    }
else if($message == "UDN000720"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000720";
    }
else if($message == "UDN001125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001125";
    }
else if($message == "UDN001276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001276";
    }
else if($message == "UDN001039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001039";
    }
else if($message == "UDN001068"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001068";
    }
else if($message == "UDN000959"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000959";
    }
else if($message == "UDN001186"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001186";
    }
else if($message == "UDN000548"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000548";
    }
else if($message == "UDN000550"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000550";
    }
else if($message == "UDN000546"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000546";
    }
else if($message == "UDN000663"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000663";
    }
else if($message == "UDN001761"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001761";
    }
else if($message == "UDN001764"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001764";
    }
else if($message == "UDN000550"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000550";
    }
else if($message == "UDN000561"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000561";
    }
else if($message == "UDN000643"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000643";
    }
else if($message == "UDN001279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001279";
    }
else if($message == "UDN001125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001125";
    }
else if($message == "UDN000843"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000843";
    }
else if($message == "UDN000840"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000840";
    }
else if($message == "UDN000719"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000719";
    }
else if($message == "UDN000572"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000572";
    }
else if($message == "UDN000907"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000907";
    }
else if($message == "UDN001189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001189";
    }
else if($message == "UDN001653"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001653";
    }
else if($message == "UDN000719"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000719";
    }
else if($message == "UDN001068"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001068";
    }
else if($message == "UDN000720"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000720";
    }
else if($message == "UDN000661"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000661";
    }
else if($message == "UDN000662"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000662";
    }
else if($message == "UDN001634"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001634";
    }
else if($message == "UDN000662"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000662";
    }
else if($message == "UDN000907"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000907";
    }
else if($message == "UDN000840"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000840";
    }
else if($message == "UDN000959"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000959";
    }
else if($message == "UDN000843"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000843";
    }
else if($message == "UDN000664"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000664";
    }
else if($message == "UDN000663"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000663";
    }
else if($message == "UDN001277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001277";
    }
else if($message == "UDN000664"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000664";
    }
else if($message == "UDN001280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001280";
    }
else if($message == "UDN000642"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000642";
    }
else if($message == "UDN000643"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000643";
    }
else if($message == "UDN001279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001279";
    }
else if($message == "UDN001278"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001278";
    }
else if($message == "UDN001276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001276";
    }
else if($message == "UDN001277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001277";
    }
else if($message == "UDN001278"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001278";
    }
else if($message == "UDN001280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001280";
    }
else if($message == "UDN001762"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001762";
    }
else if($message == "UDN001763"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001763";
    }
else if($message == "UDN001764"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001764";
    }
else if($message == "UDN001445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001445";
    }
else if($message == "UDN001765"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001765";
    }
else if($message == "UDN001766"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001766";
    }
else if($message == "UDN001767"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001767";
    }
else if($message == "UDN001153"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001153";
    }
else if($message == "UDN001533"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001533";
    }
else if($message == "UDN001152"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001152";
    }
else if($message == "UDN001153"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001153";
    }
else if($message == "UDN001622"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001622";
    }
else if($message == "UDN001623"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001623";
    }
else if($message == "UDN001768"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001768";
    }
else if($message == "UDN001570"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001570";
    }
else if($message == "UDN001621"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001621";
    }
else if($message == "UDN001623"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001623";
    }
else if($message == "UDN001155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001155";
    }
else if($message == "UDN001156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001156";
    }
else if($message == "UDN001770"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001770";
    }
else if($message == "UDN001162"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001162";
    }
else if($message == "UDN001157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001157";
    }
else if($message == "UDN001156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001156";
    }
else if($message == "UDN001768"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001768";
    }
else if($message == "UDN001622"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001622";
    }
else if($message == "UDN001769"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001769";
    }
else if($message == "UDN001770"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001770";
    }
else if($message == "UDN001771"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001771";
    }
else if($message == "UDN000077"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000077";
    }
else if($message == "UDN001624"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001624";
    }
else if($message == "UDN000076"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000076";
    }
else if($message == "UDN000078"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000078";
    }
else if($message == "UDN000382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000382";
    }
else if($message == "UDN000667"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000667";
    }
else if($message == "UDN001117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001117";
    }
else if($message == "UDN000077"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000077";
    }
else if($message == "UDN000985"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000985";
    }
else if($message == "UDN001192"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001192";
    }
else if($message == "UDN000078"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000078";
    }
else if($message == "UDN000536"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000536";
    }
else if($message == "UDN000846"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000846";
    }
else if($message == "UDN000381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000381";
    }
else if($message == "UDN000381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000381";
    }
else if($message == "UDN000382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000382";
    }
else if($message == "UDN001160"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001160";
    }
else if($message == "UDN001117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001117";
    }
else if($message == "UDN000536"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000536";
    }
else if($message == "UDN000668"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000668";
    }
else if($message == "UDN000909"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000909";
    }
else if($message == "UDN000667"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000667";
    }
else if($message == "UDN000968"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000968";
    }
else if($message == "UDN001580"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001580";
    }
else if($message == "UDN000668"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000668";
    }
else if($message == "UDN001624"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001624";
    }
else if($message == "UDN001617"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001617";
    }
else if($message == "UDN001630"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001630";
    }
else if($message == "UDN000909"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000909";
    }
else if($message == "UDN000846"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000846";
    }
else if($message == "UDN001158"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001158";
    }
else if($message == "UDN001618"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001618";
    }
else if($message == "UDN001159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001159";
    }
else if($message == "UDN001625"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001625";
    }
else if($message == "UDN001498"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001498";
    }
else if($message == "UDN001498"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001498";
    }
else if($message == "UDN001011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001011";
    }
else if($message == "UDN001012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001012";
    }
else if($message == "UDN001580"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001580";
    }
else if($message == "UDN001617"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001617";
    }
else if($message == "UDN001630"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001630";
    }
else if($message == "UDN001014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001014";
    }
else if($message == "UDN001570"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001570";
    }
else if($message == "UDN001151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001151";
    }
else if($message == "UDN001154"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001154";
    }
else if($message == "UDN001050"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001050";
    }
else if($message == "UDN001150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001150";
    }
else if($message == "UDN001146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001146";
    }
else if($message == "UDN001146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001146";
    }
else if($message == "UDN001159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001159";
    }
else if($message == "UDN001629"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001629";
    }
else if($message == "UDN001147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001147";
    }
else if($message == "UDN001629"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001629";
    }
else if($message == "UDN001616"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001616";
    }
else if($message == "UDN001618"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001618";
    }
else if($message == "UDN001158"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001158";
    }
else if($message == "UDN001147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001147";
    }
else if($message == "UDN001161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001161";
    }
else if($message == "UDN001148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001148";
    }
else if($message == "UDN001162"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001162";
    }
else if($message == "UDN001161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001161";
    }
else if($message == "UDN001148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001148";
    }
else if($message == "UDN001149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001149";
    }
else if($message == "UDN001619"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001619";
    }
else if($message == "UDN001160"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001160";
    }
else if($message == "UDN001050"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001050";
    }
else if($message == "UDN001150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001150";
    }
else if($message == "UDN001771"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001771";
    }
else if($message == "UDN001149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001149";
    }
else if($message == "UDN001620"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001620";
    }
else if($message == "UDN001619"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001619";
    }
else if($message == "UDN001621"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001621";
    }
else if($message == "UDN001620"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001620";
    }
else if($message == "UDN001479"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001479";
    }
else if($message == "UDN001479"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001479";
    }
else if($message == "UDN001014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001014";
    }
else if($message == "UDN001154"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001154";
    }
else if($message == "UDN001152"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001152";
    }
else if($message == "UDN001151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001151";
    }
else if($message == "UDN001155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001155";
    }
else if($message == "UDN001157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001157";
    }
else if($message == "UDN000080"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000080";
    }
else if($message == "UDN000081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000081";
    }
else if($message == "UDN001059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001059";
    }
else if($message == "UDN001164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001164";
    }
else if($message == "UDN001171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001171";
    }
else if($message == "UDN001181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001181";
    }
else if($message == "UDN001613"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001613";
    }
else if($message == "UDN001654"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001654";
    }
else if($message == "UDN001774"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001774";
    }
else if($message == "UDN000020"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000020";
    }
else if($message == "UDN000447"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000447";
    }
else if($message == "UDN001182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001182";
    }
else if($message == "UDN001262"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001262";
    }
else if($message == "UDN000080"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000080";
    }
else if($message == "UDN000081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000081";
    }
else if($message == "UDN001180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001180";
    }
else if($message == "UDN001775"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001775";
    }
else if($message == "UDN001262"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001262";
    }
else if($message == "UDN000912"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000912";
    }
else if($message == "UDN001654"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001654";
    }
else if($message == "UDN000575"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000575";
    }
else if($message == "UDN001059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001059";
    }
else if($message == "UDN000721"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000721";
    }
else if($message == "UDN000575"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000575";
    }
else if($message == "UDN001060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001060";
    }
else if($message == "UDN000722"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000722";
    }
else if($message == "UDN001060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001060";
    }
else if($message == "UDN001174"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001174";
    }
else if($message == "UDN000721"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000721";
    }
else if($message == "UDN001061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001061";
    }
else if($message == "UDN001023"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001023";
    }
else if($message == "UDN001061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001061";
    }
else if($message == "UDN001170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001170";
    }
else if($message == "UDN000722"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000722";
    }
else if($message == "UDN000751"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000751";
    }
else if($message == "UDN001023"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001023";
    }
else if($message == "UDN000912"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000912";
    }
else if($message == "UDN000913"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000913";
    }
else if($message == "UDN000751"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000751";
    }
else if($message == "UDN001183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001183";
    }
else if($message == "UDN000913"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000913";
    }
else if($message == "UDN001166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001166";
    }
else if($message == "UDN001773"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001773";
    }
else if($message == "UDN001163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001163";
    }
else if($message == "UDN001163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001163";
    }
else if($message == "UDN001164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001164";
    }
else if($message == "UDN001165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001165";
    }
else if($message == "UDN001165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001165";
    }
else if($message == "UDN001166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001166";
    }
else if($message == "UDN001139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001139";
    }
else if($message == "UDN001167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001167";
    }
else if($message == "UDN001174"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001174";
    }
else if($message == "UDN001169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001169";
    }
else if($message == "UDN001168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001168";
    }
else if($message == "UDN001169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001169";
    }
else if($message == "UDN001076"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001076";
    }
else if($message == "UDN001170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001170";
    }
else if($message == "UDN001175"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001175";
    }
else if($message == "UDN000673"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000673";
    }
else if($message == "UDN001177"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001177";
    }
else if($message == "UDN001777"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001777";
    }
else if($message == "UDN001176"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001176";
    }
else if($message == "UDN001776"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001776";
    }
else if($message == "UDN001177"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001177";
    }
else if($message == "UDN000673"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000673";
    }
else if($message == "UDN001171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001171";
    }
else if($message == "UDN001167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001167";
    }
else if($message == "UDN001176"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001176";
    }
else if($message == "UDN001172"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001172";
    }
else if($message == "UDN001172"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001172";
    }
else if($message == "UDN001178"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001178";
    }
else if($message == "UDN001178"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001178";
    }
else if($message == "UDN001179"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001179";
    }
else if($message == "UDN001179"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001179";
    }
else if($message == "UDN001180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001180";
    }
else if($message == "UDN001181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001181";
    }
else if($message == "UDN000918"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000918";
    }
else if($message == "UDN001173"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001173";
    }
else if($message == "UDN000918"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000918";
    }
else if($message == "UDN001173"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001173";
    }
else if($message == "UDN001182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001182";
    }
else if($message == "UDN001175"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001175";
    }
else if($message == "UDN001183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001183";
    }
else if($message == "UDN001772"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001772";
    }
else if($message == "UDN001773"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001773";
    }
else if($message == "UDN001774"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001774";
    }
else if($message == "UDN001775"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001775";
    }
else if($message == "UDN001776"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001776";
    }
else if($message == "UDN001777"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001777";
    }
else if($message == "UDN001613"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001613";
    }
else if($message == "UDN001374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001374";
    }
else if($message == "UDN001365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001365";
    }
else if($message == "UDN001409"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001409";
    }
else if($message == "UDN001409"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001409";
    }
else if($message == "UDN001531"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001531";
    }
else if($message == "UDN001778"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001778";
    }
else if($message == "UDN001375"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001375";
    }
else if($message == "UDN001778"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001778";
    }
else if($message == "UDN001413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001413";
    }
else if($message == "UDN001531"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001531";
    }
else if($message == "UDN001375"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001375";
    }
else if($message == "UDN001413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001413";
    }
else if($message == "UDN001364"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001364";
    }
else if($message == "UDN001364"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001364";
    }
else if($message == "UDN001530"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001530";
    }
else if($message == "UDN001530"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001530";
    }
else if($message == "UDN001781"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001781";
    }
else if($message == "UDN001373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001373";
    }
else if($message == "UDN001411"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001411";
    }
else if($message == "UDN001411"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001411";
    }
else if($message == "UDN001532"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001532";
    }
else if($message == "UDN001235"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001235";
    }
else if($message == "UDN001562"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001562";
    }
else if($message == "UDN001230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001230";
    }
else if($message == "UDN001374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001374";
    }
else if($message == "UDN001410"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001410";
    }
else if($message == "UDN001365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001365";
    }
else if($message == "UDN001410"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001410";
    }
else if($message == "UDN001561"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001561";
    }
else if($message == "UDN001786"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001786";
    }
else if($message == "UDN001789"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001789";
    }
else if($message == "UDN001563"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001563";
    }
else if($message == "UDN001460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001460";
    }
else if($message == "UDN001586"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001586";
    }
else if($message == "UDN001560"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001560";
    }
else if($message == "UDN001443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001443";
    }
else if($message == "UDN001779"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001779";
    }
else if($message == "UDN001559"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001559";
    }
else if($message == "UDN001532"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001532";
    }
else if($message == "UDN001533"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001533";
    }
else if($message == "UDN001538"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001538";
    }
else if($message == "UDN001538"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001538";
    }
else if($message == "UDN001780"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001780";
    }
else if($message == "UDN001781"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001781";
    }
else if($message == "UDN001549"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001549";
    }
else if($message == "UDN001585"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001585";
    }
else if($message == "UDN001790"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001790";
    }
else if($message == "UDN001782"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001782";
    }
else if($message == "UDN001585"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001585";
    }
else if($message == "UDN001522"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001522";
    }
else if($message == "UDN001783"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001783";
    }
else if($message == "UDN001460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001460";
    }
else if($message == "UDN001586"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001586";
    }
else if($message == "UDN001551"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001551";
    }
else if($message == "UDN001534"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001534";
    }
else if($message == "UDN001604"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001604";
    }
else if($message == "UDN001536"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001536";
    }
else if($message == "UDN001535"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001535";
    }
else if($message == "UDN001536"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001536";
    }
else if($message == "UDN001546"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001546";
    }
else if($message == "UDN001534"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001534";
    }
else if($message == "UDN001784"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001784";
    }
else if($message == "UDN001626"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001626";
    }
else if($message == "UDN001546"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001546";
    }
else if($message == "UDN001785"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001785";
    }
else if($message == "UDN001459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001459";
    }
else if($message == "UDN001626"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001626";
    }
else if($message == "UDN001550"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001550";
    }
else if($message == "UDN001459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001459";
    }
else if($message == "UDN001549"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001549";
    }
else if($message == "UDN001550"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001550";
    }
else if($message == "UDN001537"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001537";
    }
else if($message == "UDN001537"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001537";
    }
else if($message == "UDN001535"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001535";
    }
else if($message == "UDN001447"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001447";
    }
else if($message == "UDN001786"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001786";
    }
else if($message == "UDN001605"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001605";
    }
else if($message == "UDN001523"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001523";
    }
else if($message == "UDN001373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001373";
    }
else if($message == "UDN001787"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001787";
    }
else if($message == "UDN001788"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001788";
    }
else if($message == "UDN001789"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001789";
    }
else if($message == "UDN001790"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001790";
    }
else if($message == "UDN001791"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001791";
    }
else if($message == "UDN000407"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000407";
    }
else if($message == "UDN000474"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000474";
    }
else if($message == "UDN001226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001226";
    }
else if($message == "UDN000406"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000406";
    }
else if($message == "UDN000981"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000981";
    }
else if($message == "UDN000408"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000408";
    }
else if($message == "UDN001551"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001551";
    }
else if($message == "UDN001560"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001560";
    }
else if($message == "UDN000407"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000407";
    }
else if($message == "UDN000465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000465";
    }
else if($message == "UDN000753"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000753";
    }
else if($message == "UDN000965"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000965";
    }
else if($message == "UDN000408"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000408";
    }
else if($message == "UDN000964"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000964";
    }
else if($message == "UDN000966"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000966";
    }
else if($message == "UDN001225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001225";
    }
else if($message == "UDN001791"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001791";
    }
else if($message == "UDN000419"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000419";
    }
else if($message == "UDN001793"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001793";
    }
else if($message == "UDN000465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000465";
    }
else if($message == "UDN000481"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000481";
    }
else if($message == "UDN000970"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000970";
    }
else if($message == "UDN001788"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001788";
    }
else if($message == "UDN000470"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000470";
    }
else if($message == "UDN000490"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000490";
    }
else if($message == "UDN000481"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000481";
    }
else if($message == "UDN001231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001231";
    }
else if($message == "UDN000490"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000490";
    }
else if($message == "UDN001523"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001523";
    }
else if($message == "UDN000964"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000964";
    }
else if($message == "UDN000557"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000557";
    }
else if($message == "UDN001604"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001604";
    }
else if($message == "UDN001121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001121";
    }
else if($message == "UDN001627"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001627";
    }
else if($message == "UDN001635"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001635";
    }
else if($message == "UDN000679"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000679";
    }
else if($message == "UDN000723"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000723";
    }
else if($message == "UDN001067"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001067";
    }
else if($message == "UDN001188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001188";
    }
else if($message == "UDN001067"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001067";
    }
else if($message == "UDN001228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001228";
    }
else if($message == "UDN000723"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000723";
    }
else if($message == "UDN000752"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000752";
    }
else if($message == "UDN001230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001230";
    }
else if($message == "UDN000965"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000965";
    }
else if($message == "UDN001227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001227";
    }
else if($message == "UDN000753"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000753";
    }
else if($message == "UDN000966"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000966";
    }
else if($message == "UDN001219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001219";
    }
else if($message == "UDN001229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001229";
    }
else if($message == "UDN001213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001213";
    }
else if($message == "UDN001213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001213";
    }
else if($message == "UDN001214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001214";
    }
else if($message == "UDN001045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001045";
    }
else if($message == "UDN001017"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001017";
    }
else if($message == "UDN001215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001215";
    }
else if($message == "UDN000968"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000968";
    }
else if($message == "UDN000969"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000969";
    }
else if($message == "UDN001045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001045";
    }
else if($message == "UDN001215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001215";
    }
else if($message == "UDN001216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001216";
    }
else if($message == "UDN001217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001217";
    }
else if($message == "UDN001418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001418";
    }
else if($message == "UDN001627"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001627";
    }
else if($message == "UDN001216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001216";
    }
else if($message == "UDN001219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001219";
    }
else if($message == "UDN001222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001222";
    }
else if($message == "UDN000679"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000679";
    }
else if($message == "UDN001559"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001559";
    }
else if($message == "UDN001220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001220";
    }
else if($message == "UDN001221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001221";
    }
else if($message == "UDN001220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001220";
    }
else if($message == "UDN001221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001221";
    }
else if($message == "UDN001222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001222";
    }
else if($message == "UDN001605"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001605";
    }
else if($message == "UDN001223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001223";
    }
else if($message == "UDN001223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001223";
    }
else if($message == "UDN001224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001224";
    }
else if($message == "UDN001226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001226";
    }
else if($message == "UDN001227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001227";
    }
else if($message == "UDN000969"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000969";
    }
else if($message == "UDN001228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001228";
    }
else if($message == "UDN001229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001229";
    }
else if($message == "UDN001224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001224";
    }
else if($message == "UDN001225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001225";
    }
else if($message == "UDN001235"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001235";
    }
else if($message == "UDN001780"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001780";
    }
else if($message == "UDN001234"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001234";
    }
else if($message == "UDN001232"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001232";
    }
else if($message == "UDN001231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001231";
    }
else if($message == "UDN001233"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001233";
    }
else if($message == "UDN001232"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001232";
    }
else if($message == "UDN001234"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001234";
    }
else if($message == "UDN001443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001443";
    }
else if($message == "UDN001779"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001779";
    }
else if($message == "UDN001233"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001233";
    }
else if($message == "UDN000970"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000970";
    }
else if($message == "UDN001522"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001522";
    }
else if($message == "UDN001782"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001782";
    }
else if($message == "UDN000923"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000923";
    }
else if($message == "UDN000923"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000923";
    }
else if($message == "UDN001792"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001792";
    }
else if($message == "UDN001792"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001792";
    }
else if($message == "UDN001793"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001793";
    }
else if($message == "UDN001563"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001563";
    }
else if($message == "UDN001562"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001562";
    }
else if($message == "UDN001794"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001794";
    }
else if($message == "UDN001561"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001561";
    }
else if($message == "UDN000504"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000504";
    }
else if($message == "UDN000551"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000551";
    }
else if($message == "UDN001190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001190";
    }
else if($message == "UDN001656"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001656";
    }
else if($message == "UDN000503"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000503";
    }
else if($message == "UDN000754"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000754";
    }
else if($message == "UDN000505"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000505";
    }
else if($message == "UDN000519"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000519";
    }
else if($message == "UDN000518"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000518";
    }
else if($message == "UDN000505"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000505";
    }
else if($message == "UDN000504"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000504";
    }
else if($message == "UDN001821"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001821";
    }
else if($message == "UDN001847"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001847";
    }
else if($message == "UDN000519"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000519";
    }
else if($message == "UDN001815"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001815";
    }
else if($message == "UDN001655"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001655";
    }
else if($message == "UDN001796"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001796";
    }
else if($message == "UDN001807"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001807";
    }
else if($message == "UDN000581"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000581";
    }
else if($message == "UDN001256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001256";
    }
else if($message == "UDN001818"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001818";
    }
else if($message == "UDN001656"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001656";
    }
else if($message == "UDN000547"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000547";
    }
else if($message == "UDN001190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001190";
    }
else if($message == "UDN001800"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001800";
    }
else if($message == "UDN000972"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000972";
    }
else if($message == "UDN000547"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000547";
    }
else if($message == "UDN001799"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001799";
    }
else if($message == "UDN000551"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000551";
    }
else if($message == "UDN000581"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000581";
    }
else if($message == "UDN001816"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001816";
    }
else if($message == "UDN000754"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000754";
    }
else if($message == "UDN000973"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000973";
    }
else if($message == "UDN000972"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000972";
    }
else if($message == "UDN000973"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000973";
    }
else if($message == "UDN001349"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001349";
    }
else if($message == "UDN001351"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001351";
    }
else if($message == "UDN001795"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001795";
    }
else if($message == "UDN001355"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001355";
    }
else if($message == "UDN001348"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001348";
    }
else if($message == "UDN001350"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001350";
    }
else if($message == "UDN001795"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001795";
    }
else if($message == "UDN001350"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001350";
    }
else if($message == "UDN001349"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001349";
    }
else if($message == "UDN001348"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001348";
    }
else if($message == "UDN001796"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001796";
    }
else if($message == "UDN001356"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001356";
    }
else if($message == "UDN001797"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001797";
    }
else if($message == "UDN001356"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001356";
    }
else if($message == "UDN001797"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001797";
    }
else if($message == "UDN001809"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001809";
    }
else if($message == "UDN001810"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001810";
    }
else if($message == "UDN001347"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001347";
    }
else if($message == "UDN001798"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001798";
    }
else if($message == "UDN001803"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001803";
    }
else if($message == "UDN001799"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001799";
    }
else if($message == "UDN001798"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001798";
    }
else if($message == "UDN001800"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001800";
    }
else if($message == "UDN001805"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001805";
    }
else if($message == "UDN001351"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001351";
    }
else if($message == "UDN001802"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001802";
    }
else if($message == "UDN001801"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001801";
    }
else if($message == "UDN001802"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001802";
    }
else if($message == "UDN001804"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001804";
    }
else if($message == "UDN001803"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001803";
    }
else if($message == "UDN001804"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001804";
    }
else if($message == "UDN001805"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001805";
    }
else if($message == "UDN001806"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001806";
    }
else if($message == "UDN001808"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001808";
    }
else if($message == "UDN001809"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001809";
    }
else if($message == "UDN001811"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001811";
    }
else if($message == "UDN001810"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001810";
    }
else if($message == "UDN001812"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001812";
    }
else if($message == "UDN001811"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001811";
    }
else if($message == "UDN001814"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001814";
    }
else if($message == "UDN001812"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001812";
    }
else if($message == "UDN001813"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001813";
    }
else if($message == "UDN001813"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001813";
    }
else if($message == "UDN001814"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001814";
    }
else if($message == "UDN001347"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001347";
    }
else if($message == "UDN001815"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001815";
    }
else if($message == "UDN001816"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001816";
    }
else if($message == "UDN001817"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001817";
    }
else if($message == "UDN001817"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001817";
    }
else if($message == "UDN001818"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001818";
    }
else if($message == "UDN001820"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001820";
    }
else if($message == "UDN001821"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001821";
    }
else if($message == "UDN000814"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000814";
    }
else if($message == "UDN000978"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000978";
    }
else if($message == "UDN001575"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001575";
    }
else if($message == "UDN000977"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000977";
    }
else if($message == "UDN001331"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001331";
    }
else if($message == "UDN001514"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001514";
    }
else if($message == "UDN001325"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001325";
    }
else if($message == "UDN001325"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001325";
    }
else if($message == "UDN001408"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001408";
    }
else if($message == "UDN001822"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001822";
    }
else if($message == "UDN001330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001330";
    }
else if($message == "UDN001330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001330";
    }
else if($message == "UDN001370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001370";
    }
else if($message == "UDN001836"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001836";
    }
else if($message == "UDN001823"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001823";
    }
else if($message == "UDN001827"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001827";
    }
else if($message == "UDN001329"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001329";
    }
else if($message == "UDN001329"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001329";
    }
else if($message == "UDN001825"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001825";
    }
else if($message == "UDN001824"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001824";
    }
else if($message == "UDN001328"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001328";
    }
else if($message == "UDN001825"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001825";
    }
else if($message == "UDN001396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001396";
    }
else if($message == "UDN001833"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001833";
    }
else if($message == "UDN001328"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001328";
    }
else if($message == "UDN001831"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001831";
    }
else if($message == "UDN001826"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001826";
    }
else if($message == "UDN001331"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001331";
    }
else if($message == "UDN001827"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001827";
    }
else if($message == "UDN001370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001370";
    }
else if($message == "UDN001575"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001575";
    }
else if($message == "UDN001574"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001574";
    }
else if($message == "UDN001578"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001578";
    }
else if($message == "UDN001578"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001578";
    }
else if($message == "UDN001576"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001576";
    }
else if($message == "UDN001573"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001573";
    }
else if($message == "UDN001577"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001577";
    }
else if($message == "UDN001834"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001834";
    }
else if($message == "UDN001573"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001573";
    }
else if($message == "UDN001829"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001829";
    }
else if($message == "UDN001828"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001828";
    }
else if($message == "UDN001577"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001577";
    }
else if($message == "UDN001829"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001829";
    }
else if($message == "UDN001828"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001828";
    }
else if($message == "UDN001835"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001835";
    }
else if($message == "UDN001830"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001830";
    }
else if($message == "UDN001831"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001831";
    }
else if($message == "UDN001576"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001576";
    }
else if($message == "UDN001832"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001832";
    }
else if($message == "UDN001514"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001514";
    }
else if($message == "UDN001833"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001833";
    }
else if($message == "UDN001440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001440";
    }
else if($message == "UDN001440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001440";
    }
else if($message == "UDN001574"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001574";
    }
else if($message == "UDN001725"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001725";
    }
else if($message == "UDN001482"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001482";
    }
else if($message == "UDN001834"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001834";
    }
else if($message == "UDN001835"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001835";
    }
else if($message == "UDN001836"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001836";
    }
else if($message == "UDN001838"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001838";
    }
else if($message == "UDN000768"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000768";
    }
else if($message == "UDN000924"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000924";
    }
else if($message == "UDN000579"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000579";
    }
else if($message == "UDN000765"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000765";
    }
else if($message == "UDN001124"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001124";
    }
else if($message == "UDN000996"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000996";
    }
else if($message == "UDN000771"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000771";
    }
else if($message == "UDN000974"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000974";
    }
else if($message == "UDN001124"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001124";
    }
else if($message == "UDN001143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001143";
    }
else if($message == "UDN000764"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000764";
    }
else if($message == "UDN001636"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001636";
    }
else if($message == "UDN001636"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001636";
    }
else if($message == "UDN001657"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001657";
    }
else if($message == "UDN001658"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001658";
    }
else if($message == "UDN000769"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000769";
    }
else if($message == "UDN000579"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000579";
    }
else if($message == "UDN000764"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000764";
    }
else if($message == "UDN000765"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000765";
    }
else if($message == "UDN001678"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001678";
    }
else if($message == "UDN000766"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000766";
    }
else if($message == "UDN000766"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000766";
    }
else if($message == "UDN000772"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000772";
    }
else if($message == "UDN000767"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000767";
    }
else if($message == "UDN000770"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000770";
    }
else if($message == "UDN000924"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000924";
    }
else if($message == "UDN000683"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000683";
    }
else if($message == "UDN000768"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000768";
    }
else if($message == "UDN000683"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000683";
    }
else if($message == "UDN000769"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000769";
    }
else if($message == "UDN000974"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000974";
    }
else if($message == "UDN000767"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000767";
    }
else if($message == "UDN000770"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000770";
    }
else if($message == "UDN000771"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000771";
    }
else if($message == "UDN001453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001453";
    }
else if($message == "UDN000772"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000772";
    }
else if($message == "UDN001837"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001837";
    }
else if($message == "UDN001453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001453";
    }
else if($message == "UDN001838"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001838";
    }
else if($message == "UDN001841"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001841";
    }
else if($message == "UDN001843"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001843";
    }
else if($message == "UDN001839"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001839";
    }
else if($message == "UDN000975"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000975";
    }
else if($message == "UDN001631"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001631";
    }
else if($message == "UDN001659"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001659";
    }
else if($message == "UDN001842"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001842";
    }
else if($message == "UDN000991"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000991";
    }
else if($message == "UDN000992"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000992";
    }
else if($message == "UDN001840"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001840";
    }
else if($message == "UDN001659"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001659";
    }
else if($message == "UDN000975"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000975";
    }
else if($message == "UDN001072"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001072";
    }
else if($message == "UDN000925"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000925";
    }
else if($message == "UDN001631"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001631";
    }
else if($message == "UDN001268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001268";
    }
else if($message == "UDN000925"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000925";
    }
else if($message == "UDN001098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001098";
    }
else if($message == "UDN001458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001458";
    }
else if($message == "UDN001545"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001545";
    }
else if($message == "UDN001268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001268";
    }
else if($message == "UDN000564"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000564";
    }
else if($message == "UDN001072"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001072";
    }
else if($message == "UDN001071"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001071";
    }
else if($message == "UDN001660"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001660";
    }
else if($message == "UDN001607"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001607";
    }
else if($message == "UDN000564"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000564";
    }
else if($message == "UDN001840"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001840";
    }
else if($message == "UDN000684"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000684";
    }
else if($message == "UDN000684"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000684";
    }
else if($message == "UDN001139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001139";
    }
else if($message == "UDN001841"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001841";
    }
else if($message == "UDN001839"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001839";
    }
else if($message == "UDN001842"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001842";
    }
else if($message == "UDN001458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001458";
    }
else if($message == "UDN001545"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001545";
    }
else if($message == "UDN001843"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001843";
    }
else if($message == "UDN001844"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001844";
    }
else if($message == "UDN001845"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001845";
    }
else if($message == "UDN001607"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001607";
    }
else if($message == "UDN000521"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000521";
    }
else if($message == "UDN001315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001315";
    }
else if($message == "UDN001439"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001439";
    }
else if($message == "UDN000522"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000522";
    }
else if($message == "UDN000503"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000503";
    }
else if($message == "UDN000520"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000520";
    }
else if($message == "UDN000522"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000522";
    }
else if($message == "UDN000580"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000580";
    }
else if($message == "UDN000502"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000502";
    }
else if($message == "UDN000997"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000997";
    }
else if($message == "UDN001314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001314";
    }
else if($message == "UDN001510"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001510";
    }
else if($message == "UDN000520"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000520";
    }
else if($message == "UDN000926"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000926";
    }
else if($message == "UDN001526"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001526";
    }
else if($message == "UDN000521"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000521";
    }
else if($message == "UDN001317"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001317";
    }
else if($message == "UDN001851"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001851";
    }
else if($message == "UDN000531"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000531";
    }
else if($message == "UDN001138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001138";
    }
else if($message == "UDN001436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001436";
    }
else if($message == "UDN001437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001437";
    }
else if($message == "UDN001661"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001661";
    }
else if($message == "UDN000544"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000544";
    }
else if($message == "UDN001850"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001850";
    }
else if($message == "UDN001210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001210";
    }
else if($message == "UDN000544"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000544";
    }
else if($message == "UDN000580"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000580";
    }
else if($message == "UDN001191"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001191";
    }
else if($message == "UDN000926"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000926";
    }
else if($message == "UDN001137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001137";
    }
else if($message == "UDN001854"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001854";
    }
else if($message == "UDN001024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001024";
    }
else if($message == "UDN000708"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000708";
    }
else if($message == "UDN001135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001135";
    }
else if($message == "UDN001136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001136";
    }
else if($message == "UDN000927"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000927";
    }
else if($message == "UDN001136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001136";
    }
else if($message == "UDN001137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001137";
    }
else if($message == "UDN000927"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000927";
    }
else if($message == "UDN001138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001138";
    }
else if($message == "UDN001355"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001355";
    }
else if($message == "UDN001354"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001354";
    }
else if($message == "UDN001354"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001354";
    }
else if($message == "UDN001352"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001352";
    }
else if($message == "UDN001352"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001352";
    }
else if($message == "UDN001848"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001848";
    }
else if($message == "UDN001353"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001353";
    }
else if($message == "UDN001353"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001353";
    }
else if($message == "UDN001319"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001319";
    }
else if($message == "UDN001316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001316";
    }
else if($message == "UDN001315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001315";
    }
else if($message == "UDN001855"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001855";
    }
else if($message == "UDN001318"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001318";
    }
else if($message == "UDN001318"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001318";
    }
else if($message == "UDN001319"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001319";
    }
else if($message == "UDN001853"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001853";
    }
else if($message == "UDN001317"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001317";
    }
else if($message == "UDN001316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001316";
    }
else if($message == "UDN001314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001314";
    }
else if($message == "UDN001846"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001846";
    }
else if($message == "UDN001847"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001847";
    }
else if($message == "UDN001848"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001848";
    }
else if($message == "UDN001509"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001509";
    }
else if($message == "UDN001849"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001849";
    }
else if($message == "UDN001313"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001313";
    }
else if($message == "UDN001439"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001439";
    }
else if($message == "UDN001524"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001524";
    }
else if($message == "UDN001524"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001524";
    }
else if($message == "UDN001837"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001837";
    }
else if($message == "UDN001526"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001526";
    }
else if($message == "UDN001850"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001850";
    }
else if($message == "UDN001438"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001438";
    }
else if($message == "UDN001851"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001851";
    }
else if($message == "UDN001437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001437";
    }
else if($message == "UDN001852"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001852";
    }
else if($message == "UDN001509"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001509";
    }
else if($message == "UDN001856"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001856";
    }
else if($message == "UDN001436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001436";
    }
else if($message == "UDN001510"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001510";
    }
else if($message == "UDN001853"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001853";
    }
else if($message == "UDN001511"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001511";
    }
else if($message == "UDN001512"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001512";
    }
else if($message == "UDN001511"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001511";
    }
else if($message == "UDN001512"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001512";
    }
else if($message == "UDN001854"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001854";
    }
else if($message == "UDN001855"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001855";
    }
else if($message == "UDN001856"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001856";
    }
else if($message == "UDN001858"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001858";
    }
else if($message == "UDN001862"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001862";
    }
else if($message == "UDN001863"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001863";
    }
else if($message == "UDN001864"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001864";
    }
else if($message == "UDN000998"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000998";
    }
else if($message == "UDN001293"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001293";
    }
else if($message == "UDN001662"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001662";
    }
else if($message == "UDN001292"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001292";
    }
else if($message == "UDN001291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001291";
    }
else if($message == "UDN001861"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001861";
    }
else if($message == "UDN001292"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001292";
    }
else if($message == "UDN001290"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001290";
    }
else if($message == "UDN001291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001291";
    }
else if($message == "UDN001293"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001293";
    }
else if($message == "UDN001310"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001310";
    }
else if($message == "UDN001593"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001593";
    }
else if($message == "UDN001595"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001595";
    }
else if($message == "UDN001311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001311";
    }
else if($message == "UDN001310"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001310";
    }
else if($message == "UDN001857"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001857";
    }
else if($message == "UDN001858"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001858";
    }
else if($message == "UDN001859"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001859";
    }
else if($message == "UDN001857"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001857";
    }
else if($message == "UDN001859"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001859";
    }
else if($message == "UDN001860"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001860";
    }
else if($message == "UDN001568"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001568";
    }
else if($message == "UDN001568"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001568";
    }
else if($message == "UDN001861"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001861";
    }
else if($message == "UDN001600"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001600";
    }
else if($message == "UDN001594"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001594";
    }
else if($message == "UDN001594"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001594";
    }
else if($message == "UDN001593"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001593";
    }
else if($message == "UDN001597"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001597";
    }
else if($message == "UDN001595"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001595";
    }
else if($message == "UDN001600"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001600";
    }
else if($message == "UDN001862"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001862";
    }
else if($message == "UDN001863"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001863";
    }
else if($message == "UDN001864"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001864";
    }
else if($message == "UDN001305"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001305";
    }
else if($message == "UDN001450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001450";
    }
else if($message == "UDN001427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001427";
    }
else if($message == "UDN001363"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001363";
    }
else if($message == "UDN001432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001432";
    }
else if($message == "UDN001516"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001516";
    }
else if($message == "UDN001466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001466";
    }
else if($message == "UDN001466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001466";
    }
else if($message == "UDN001463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001463";
    }
else if($message == "UDN001515"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001515";
    }
else if($message == "UDN001566"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001566";
    }
else if($message == "UDN001865"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001865";
    }
else if($message == "UDN001566"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001566";
    }
else if($message == "UDN001865"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001865";
    }
else if($message == "UDN001583"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001583";
    }
else if($message == "UDN001558"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001558";
    }
else if($message == "UDN001581"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001581";
    }
else if($message == "UDN001582"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001582";
    }
else if($message == "UDN001583"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001583";
    }
else if($message == "UDN001558"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001558";
    }
else if($message == "UDN001581"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001581";
    }
else if($message == "UDN001543"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001543";
    }
else if($message == "UDN001541"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001541";
    }
else if($message == "UDN001543"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001543";
    }
else if($message == "UDN001541"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001541";
    }
else if($message == "UDN001542"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001542";
    }
else if($message == "UDN001540"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001540";
    }
else if($message == "UDN001866"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001866";
    }
else if($message == "UDN001467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001467";
    }
else if($message == "UDN001867"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001867";
    }
else if($message == "UDN001598"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001598";
    }
else if($message == "UDN001873"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001873";
    }
else if($message == "UDN001521"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001521";
    }
else if($message == "UDN001603"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001603";
    }
else if($message == "UDN001520"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001520";
    }
else if($message == "UDN001599"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001599";
    }
else if($message == "UDN001599"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001599";
    }
else if($message == "UDN001603"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001603";
    }
else if($message == "UDN001868"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001868";
    }
else if($message == "UDN001589"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001589";
    }
else if($message == "UDN001589"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001589";
    }
else if($message == "UDN001587"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001587";
    }
else if($message == "UDN001588"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001588";
    }
else if($message == "UDN001939"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001939";
    }
else if($message == "UDN001519"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001519";
    }
else if($message == "UDN001596"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001596";
    }
else if($message == "UDN001590"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001590";
    }
else if($message == "UDN001869"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001869";
    }
else if($message == "UDN001590"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001590";
    }
else if($message == "UDN001591"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001591";
    }
else if($message == "UDN001592"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001592";
    }
else if($message == "UDN001596"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001596";
    }
else if($message == "UDN001518"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001518";
    }
else if($message == "UDN001557"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001557";
    }
else if($message == "UDN001462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001462";
    }
else if($message == "UDN001465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001465";
    }
else if($message == "UDN001462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001462";
    }
else if($message == "UDN001464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001464";
    }
else if($message == "UDN001444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001444";
    }
else if($message == "UDN001539"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001539";
    }
else if($message == "UDN001539"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001539";
    }
else if($message == "UDN001450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001450";
    }
else if($message == "UDN001601"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001601";
    }
else if($message == "UDN001870"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001870";
    }
else if($message == "UDN001601"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001601";
    }
else if($message == "UDN001871"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001871";
    }
else if($message == "UDN001598"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001598";
    }
else if($message == "UDN001602"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001602";
    }
else if($message == "UDN001872"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001872";
    }
else if($message == "UDN001880"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001880";
    }
else if($message == "UDN001873"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001873";
    }
else if($message == "UDN001874"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001874";
    }
else if($message == "UDN001875"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001875";
    }
else if($message == "UDN001876"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001876";
    }
else if($message == "UDN001878"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001878";
    }
else if($message == "UDN001877"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001877";
    }
else if($message == "UDN001878"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001878";
    }
else if($message == "UDN001877"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001877";
    }
else if($message == "UDN001879"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001879";
    }
else if($message == "UDN001880"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001880";
    }
else if($message == "UDN001663"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001663";
    }
else if($message == "UDN000456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000456";
    }
else if($message == "UDN001875"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001875";
    }
else if($message == "UDN000455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000455";
    }
else if($message == "UDN001001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001001";
    }
else if($message == "UDN001042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001042";
    }
else if($message == "UDN000479"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000479";
    }
else if($message == "UDN001874"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001874";
    }
else if($message == "UDN000456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000456";
    }
else if($message == "UDN001592"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001592";
    }
else if($message == "UDN000457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000457";
    }
else if($message == "UDN001884"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001884";
    }
else if($message == "UDN000479"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000479";
    }
else if($message == "UDN000539"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000539";
    }
else if($message == "UDN001431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001431";
    }
else if($message == "UDN001664"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001664";
    }
else if($message == "UDN000539"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000539";
    }
else if($message == "UDN000543"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000543";
    }
else if($message == "UDN001665"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001665";
    }
else if($message == "UDN001637"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001637";
    }
else if($message == "UDN001638"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001638";
    }
else if($message == "UDN001885"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001885";
    }
else if($message == "UDN001665"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001665";
    }
else if($message == "UDN001638"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001638";
    }
else if($message == "UDN000928"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000928";
    }
else if($message == "UDN000929"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000929";
    }
else if($message == "UDN001883"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001883";
    }
else if($message == "UDN001893"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001893";
    }
else if($message == "UDN001043"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001043";
    }
else if($message == "UDN000928"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000928";
    }
else if($message == "UDN001602"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001602";
    }
else if($message == "UDN000929"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000929";
    }
else if($message == "UDN001517"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001517";
    }
else if($message == "UDN001300"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001300";
    }
else if($message == "UDN001295"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001295";
    }
else if($message == "UDN001036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001036";
    }
else if($message == "UDN000930"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000930";
    }
else if($message == "UDN001296"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001296";
    }
else if($message == "UDN001298"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001298";
    }
else if($message == "UDN001299"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001299";
    }
else if($message == "UDN001322"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001322";
    }
else if($message == "UDN000685"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000685";
    }
else if($message == "UDN000930"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000930";
    }
else if($message == "UDN001296"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001296";
    }
else if($message == "UDN001367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001367";
    }
else if($message == "UDN001297"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001297";
    }
else if($message == "UDN000931"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000931";
    }
else if($message == "UDN000932"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000932";
    }
else if($message == "UDN001363"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001363";
    }
else if($message == "UDN001298"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001298";
    }
else if($message == "UDN000931"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000931";
    }
else if($message == "UDN001297"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001297";
    }
else if($message == "UDN001299"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001299";
    }
else if($message == "UDN000685"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000685";
    }
else if($message == "UDN001518"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001518";
    }
else if($message == "UDN001300"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001300";
    }
else if($message == "UDN000932"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000932";
    }
else if($message == "UDN001587"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001587";
    }
else if($message == "UDN001868"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001868";
    }
else if($message == "UDN001301"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001301";
    }
else if($message == "UDN001463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001463";
    }
else if($message == "UDN001302"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001302";
    }
else if($message == "UDN001434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001434";
    }
else if($message == "UDN001606"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001606";
    }
else if($message == "UDN001879"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001879";
    }
else if($message == "UDN001881"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001881";
    }
else if($message == "UDN001430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001430";
    }
else if($message == "UDN001876"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001876";
    }
else if($message == "UDN001882"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001882";
    }
else if($message == "UDN001520"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001520";
    }
else if($message == "UDN001886"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001886";
    }
else if($message == "UDN001887"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001887";
    }
else if($message == "UDN001883"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001883";
    }
else if($message == "UDN001881"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001881";
    }
else if($message == "UDN001884"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001884";
    }
else if($message == "UDN001425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001425";
    }
else if($message == "UDN001882"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001882";
    }
else if($message == "UDN001885"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001885";
    }
else if($message == "UDN001521"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001521";
    }
else if($message == "UDN001886"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001886";
    }
else if($message == "UDN001444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001444";
    }
else if($message == "UDN001887"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001887";
    }
else if($message == "UDN001888"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001888";
    }
else if($message == "UDN001529"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001529";
    }
else if($message == "UDN001888"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001888";
    }
else if($message == "UDN001889"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001889";
    }
else if($message == "UDN001890"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001890";
    }
else if($message == "UDN001322"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001322";
    }
else if($message == "UDN001606"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001606";
    }
else if($message == "UDN001891"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001891";
    }
else if($message == "UDN001465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001465";
    }
else if($message == "UDN001540"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001540";
    }
else if($message == "UDN001557"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001557";
    }
else if($message == "UDN001367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001367";
    }
else if($message == "UDN001309"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001309";
    }
else if($message == "UDN001866"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001866";
    }
else if($message == "UDN001429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001429";
    }
else if($message == "UDN001429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001429";
    }
else if($message == "UDN001431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001431";
    }
else if($message == "UDN001467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001467";
    }
else if($message == "UDN001430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001430";
    }
else if($message == "UDN001425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001425";
    }
else if($message == "UDN001435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001435";
    }
else if($message == "UDN001517"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001517";
    }
else if($message == "UDN001435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001435";
    }
else if($message == "UDN001426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001426";
    }
else if($message == "UDN001519"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001519";
    }
else if($message == "UDN001892"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001892";
    }
else if($message == "NKI000385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000385";
    }
else if($message == "NKI000555"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000555";
    }
else if($message == "UDN001426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001426";
    }
else if($message == "UDN001663"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001663";
    }
else if($message == "UDN001893"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001893";
    }
else if($message == "UDN001542"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001542";
    }
else if($message == "UDN001896"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001896";
    }
else if($message == "UDN001434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001434";
    }
else if($message == "UDN001309"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001309";
    }
else if($message == "UDN001894"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001894";
    }
else if($message == "UDN001464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001464";
    }
else if($message == "UDN001584"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001584";
    }
else if($message == "UDN001584"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001584";
    }
else if($message == "UDN001895"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001895";
    }
else if($message == "UDN001582"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001582";
    }
else if($message == "UDN001896"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001896";
    }
else if($message == "UDN001591"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001591";
    }
else if($message == "UDN001432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001432";
    }
else if($message == "UDN000933"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000933";
    }
else if($message == "UDN000994"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000994";
    }
else if($message == "UDN001639"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001639";
    }
else if($message == "UDN000993"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000993";
    }
else if($message == "UDN001899"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001899";
    }
else if($message == "UDN000933"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000933";
    }
else if($message == "UDN000934"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000934";
    }
else if($message == "UDN001022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001022";
    }
else if($message == "UDN001639"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001639";
    }
else if($message == "UDN001145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001145";
    }
else if($message == "UDN000934"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000934";
    }
else if($message == "UDN000569"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000569";
    }
else if($message == "UDN000705"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000705";
    }
else if($message == "UDN001097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001097";
    }
else if($message == "UDN001144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001144";
    }
else if($message == "UDN001126"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001126";
    }
else if($message == "UDN001898"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001898";
    }
else if($message == "UDN000569"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000569";
    }
else if($message == "UDN001065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001065";
    }
else if($message == "UDN001901"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001901";
    }
else if($message == "UDN000567"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000567";
    }
else if($message == "UDN000567"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000567";
    }
else if($message == "UDN000568"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000568";
    }
else if($message == "UDN001145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001145";
    }
else if($message == "UDN000935"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000935";
    }
else if($message == "UDN000935"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000935";
    }
else if($message == "UDN001897"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001897";
    }
else if($message == "UDN001065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001065";
    }
else if($message == "UDN000725"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000725";
    }
else if($message == "UDN000724"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000724";
    }
else if($message == "UDN000773"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000773";
    }
else if($message == "UDN001609"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001609";
    }
else if($message == "UDN000725"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000725";
    }
else if($message == "UDN001134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001134";
    }
else if($message == "UDN001126"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001126";
    }
else if($message == "UDN000773"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000773";
    }
else if($message == "UDN001900"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001900";
    }
else if($message == "UDN001134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001134";
    }
else if($message == "UDN001897"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001897";
    }
else if($message == "UDN001475"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001475";
    }
else if($message == "UDN001476"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001476";
    }
else if($message == "UDN001898"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001898";
    }
else if($message == "UDN001477"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001477";
    }
else if($message == "UDN001899"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001899";
    }
else if($message == "UDN001476"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001476";
    }
else if($message == "UDN001475"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001475";
    }
else if($message == "UDN001900"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001900";
    }
else if($message == "UDN001609"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001609";
    }
else if($message == "UDN001901"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001901";
    }
else if($message == "UDN000552"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000552";
    }
else if($message == "UDN000082"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000082";
    }
else if($message == "UDN000250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000250";
    }
else if($message == "UDN000258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000258";
    }
else if($message == "UDN001912"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001912";
    }
else if($message == "UDN000083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000083";
    }
else if($message == "UDN000037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000037";
    }
else if($message == "UDN000084"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000084";
    }
else if($message == "UDN000491"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000491";
    }
else if($message == "UDN000085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000085";
    }
else if($message == "UDN000443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000443";
    }
else if($message == "UDN000086"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000086";
    }
else if($message == "UDN000087"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000087";
    }
else if($message == "UDN000380"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000380";
    }
else if($message == "UDN000088"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000088";
    }
else if($message == "UDN000115"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000115";
    }
else if($message == "UDN000241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000241";
    }
else if($message == "UDN000089"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000089";
    }
else if($message == "UDN001930"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001930";
    }
else if($message == "UDN000090"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000090";
    }
else if($message == "UDN000090"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000090";
    }
else if($message == "UDN000091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000091";
    }
else if($message == "UDN000092"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000092";
    }
else if($message == "UDN000206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000206";
    }
else if($message == "UDN000249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000249";
    }
else if($message == "UDN000878"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000878";
    }
else if($message == "UDN000879"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000879";
    }
else if($message == "UDN000950"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000950";
    }
else if($message == "UDN001614"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001614";
    }
else if($message == "UDN001910"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001910";
    }
else if($message == "UDN001931"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001931";
    }
else if($message == "UDN000093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000093";
    }
else if($message == "UDN000252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000252";
    }
else if($message == "UDN001196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001196";
    }
else if($message == "UDN001934"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001934";
    }
else if($message == "UDN000094"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000094";
    }
else if($message == "UDN000020"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000020";
    }
else if($message == "UDN000043"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000043";
    }
else if($message == "UDN000153"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000153";
    }
else if($message == "UDN000181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000181";
    }
else if($message == "UDN000193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000193";
    }
else if($message == "UDN000430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000430";
    }
else if($message == "UDN000434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000434";
    }
else if($message == "UDN000422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000422";
    }
else if($message == "UDN000423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000423";
    }
else if($message == "UDN001614"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001614";
    }
else if($message == "UDN000097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000097";
    }
else if($message == "UDN000096"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000096";
    }
else if($message == "UDN000098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000098";
    }
else if($message == "UDN000097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000097";
    }
else if($message == "UDN000099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000099";
    }
else if($message == "UDN000098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000098";
    }
else if($message == "UDN000022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000022";
    }
else if($message == "UDN000099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000099";
    }
else if($message == "UDN000104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000104";
    }
else if($message == "UDN000100"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000100";
    }
else if($message == "UDN000587"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000587";
    }
else if($message == "UDN000101"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000101";
    }
else if($message == "UDN000101"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000101";
    }
else if($message == "UDN000102"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000102";
    }
else if($message == "UDN000102"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000102";
    }
else if($message == "UDN001666"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001666";
    }
else if($message == "UDN000103"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000103";
    }
else if($message == "UDN000103"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000103";
    }
else if($message == "UDN000247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000247";
    }
else if($message == "UDN001911"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001911";
    }
else if($message == "UDN000104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000104";
    }
else if($message == "UDN000079"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000079";
    }
else if($message == "UDN000100"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000100";
    }
else if($message == "UDN000106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000106";
    }
else if($message == "UDN000164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000164";
    }
else if($message == "UDN000165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000165";
    }
else if($message == "UDN000191"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000191";
    }
else if($message == "UDN000232"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000232";
    }
else if($message == "UDN000377"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000377";
    }
else if($message == "UDN000422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000422";
    }
else if($message == "UDN000428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000428";
    }
else if($message == "UDN000429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000429";
    }
else if($message == "UDN000420"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000420";
    }
else if($message == "UDN000107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000107";
    }
else if($message == "UDN000106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000106";
    }
else if($message == "UDN000108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000108";
    }
else if($message == "UDN000585"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000585";
    }
else if($message == "UDN000107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000107";
    }
else if($message == "UDN000108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000108";
    }
else if($message == "UDN000498"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000498";
    }
else if($message == "UDN000109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000109";
    }
else if($message == "UDN000242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000242";
    }
else if($message == "UDN000496"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000496";
    }
else if($message == "UDN000110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000110";
    }
else if($message == "UDN000030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000030";
    }
else if($message == "UDN000425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000425";
    }
else if($message == "UDN000991"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000991";
    }
else if($message == "UDN001283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001283";
    }
else if($message == "UDN000005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000005";
    }
else if($message == "UDN000006"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000006";
    }
else if($message == "UDN000424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000424";
    }
else if($message == "UDN000032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000032";
    }
else if($message == "UDN000174"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000174";
    }
else if($message == "UDN000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000220";
    }
else if($message == "UDN000271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000271";
    }
else if($message == "UDN000275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000275";
    }
else if($message == "UDN000155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000155";
    }
else if($message == "UDN000112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000112";
    }
else if($message == "UDN000244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000244";
    }
else if($message == "UDN000113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000113";
    }
else if($message == "UDN000184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000184";
    }
else if($message == "UDN000114"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000114";
    }
else if($message == "UDN000115"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000115";
    }
else if($message == "UDN001274"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001274";
    }
else if($message == "UDN000116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000116";
    }
else if($message == "UDN000117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000117";
    }
else if($message == "UDN000121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000121";
    }
else if($message == "UDN000122"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000122";
    }
else if($message == "UDN000118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000118";
    }
else if($message == "UDN000587"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000587";
    }
else if($message == "UDN000124"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000124";
    }
else if($message == "UDN001641"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001641";
    }
else if($message == "UDN000119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000119";
    }
else if($message == "UDN000119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000119";
    }
else if($message == "UDN000120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000120";
    }
else if($message == "UDN000120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000120";
    }
else if($message == "UDN000409"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000409";
    }
else if($message == "UDN000121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000121";
    }
else if($message == "UDN000117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000117";
    }
else if($message == "UDN000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000145";
    }
else if($message == "UDN000375"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000375";
    }
else if($message == "UDN000122"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000122";
    }
else if($message == "UDN000130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000130";
    }
else if($message == "UDN000161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000161";
    }
else if($message == "UDN000433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000433";
    }
else if($message == "UDN000123"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000123";
    }
else if($message == "UDN000024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000024";
    }
else if($message == "UDN000124"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000124";
    }
else if($message == "UDN000125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000125";
    }
else if($message == "UDN000010"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000010";
    }
else if($message == "UDN000011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000011";
    }
else if($message == "UDN000127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000127";
    }
else if($message == "UDN000197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000197";
    }
else if($message == "UDN000279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000279";
    }
else if($message == "UDN000280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000280";
    }
else if($message == "UDN000532"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000532";
    }
else if($message == "UDN000123"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000123";
    }
else if($message == "UDN000180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000180";
    }
else if($message == "UDN000127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000127";
    }
else if($message == "UDN000233"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000233";
    }
else if($message == "UDN000128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000128";
    }
else if($message == "UDN001902"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001902";
    }
else if($message == "UDN000488"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000488";
    }
else if($message == "UDN000152"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000152";
    }
else if($message == "UDN001258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001258";
    }
else if($message == "UDN000130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000130";
    }
else if($message == "UDN000136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000136";
    }
else if($message == "UDN000131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000131";
    }
else if($message == "UDN000005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000005";
    }
else if($message == "UDN000008"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000008";
    }
else if($message == "UDN000088"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000088";
    }
else if($message == "UDN000137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000137";
    }
else if($message == "UDN000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000144";
    }
else if($message == "UDN000169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000169";
    }
else if($message == "UDN000177"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000177";
    }
else if($message == "UDN000222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000222";
    }
else if($message == "UDN000228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000228";
    }
else if($message == "UDN000234"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000234";
    }
else if($message == "UDN000007"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000007";
    }
else if($message == "UDN000133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000133";
    }
else if($message == "UDN000386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000386";
    }
else if($message == "UDN000166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000166";
    }
else if($message == "UDN000134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000134";
    }
else if($message == "UDN000168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000168";
    }
else if($message == "UDN000135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000135";
    }
else if($message == "UDN000015"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000015";
    }
else if($message == "UDN000147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000147";
    }
else if($message == "UDN000136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000136";
    }
else if($message == "UDN000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000138";
    }
else if($message == "UDN000137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000137";
    }
else if($message == "UDN000133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000133";
    }
else if($message == "UDN000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000138";
    }
else if($message == "UDN001212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001212";
    }
else if($message == "UDN001669"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001669";
    }
else if($message == "UDN001274"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001274";
    }
else if($message == "UDN000001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000001";
    }
else if($message == "UDN000010"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000010";
    }
else if($message == "UDN000128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000128";
    }
else if($message == "UDN000148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000148";
    }
else if($message == "UDN000014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000014";
    }
else if($message == "UDN000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000139";
    }
else if($message == "UDN000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000139";
    }
else if($message == "UDN000379"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000379";
    }
else if($message == "UDN001668"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001668";
    }
else if($message == "UDN000013"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000013";
    }
else if($message == "UDN000141"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000141";
    }
else if($message == "UDN000289"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000289";
    }
else if($message == "UDN000463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000463";
    }
else if($message == "UDN001285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001285";
    }
else if($message == "UDN000142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000142";
    }
else if($message == "UDN000207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000207";
    }
else if($message == "UDN000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000143";
    }
else if($message == "UDN000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000144";
    }
else if($message == "UDN000230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000230";
    }
else if($message == "UDN000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000145";
    }
else if($message == "UDN000135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000135";
    }
else if($message == "UDN000146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000146";
    }
else if($message == "UDN000146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000146";
    }
else if($message == "UDN000147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000147";
    }
else if($message == "UDN000035"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000035";
    }
else if($message == "UDN000148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000148";
    }
else if($message == "UDN000150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000150";
    }
else if($message == "UDN000149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000149";
    }
else if($message == "UDN000027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000027";
    }
else if($message == "UDN000266"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000266";
    }
else if($message == "UDN000150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000150";
    }
else if($message == "UDN000041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000041";
    }
else if($message == "UDN000151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000151";
    }
else if($message == "UDN001187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001187";
    }
else if($message == "UDN000182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000182";
    }
else if($message == "UDN000225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000225";
    }
else if($message == "UDN000152"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000152";
    }
else if($message == "UDN000096"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000096";
    }
else if($message == "UDN000246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000246";
    }
else if($message == "UDN000153"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000153";
    }
else if($message == "UDN000265"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000265";
    }
else if($message == "UDN000410"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000410";
    }
else if($message == "UDN000154"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000154";
    }
else if($message == "UDN000034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000034";
    }
else if($message == "UDN000155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000155";
    }
else if($message == "UDN000156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000156";
    }
else if($message == "UDN000149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000149";
    }
else if($message == "UDN000524"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000524";
    }
else if($message == "UDN000157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000157";
    }
else if($message == "UDN000012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000012";
    }
else if($message == "UDN000159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000159";
    }
else if($message == "UDN000008"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000008";
    }
else if($message == "UDN000042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000042";
    }
else if($message == "UDN000085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000085";
    }
else if($message == "UDN000110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000110";
    }
else if($message == "UDN000157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000157";
    }
else if($message == "UDN000159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000159";
    }
else if($message == "UDN000160"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000160";
    }
else if($message == "UDN000282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000282";
    }
else if($message == "UDN000161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000161";
    }
else if($message == "UDN000033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000033";
    }
else if($message == "UDN000038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000038";
    }
else if($message == "UDN000156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000156";
    }
else if($message == "UDN000219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000219";
    }
else if($message == "UDN000224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000224";
    }
else if($message == "UDN000367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000367";
    }
else if($message == "UDN000374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000374";
    }
else if($message == "UDN000267"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000267";
    }
else if($message == "UDN000163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000163";
    }
else if($message == "UDN000172"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000172";
    }
else if($message == "UDN000164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000164";
    }
else if($message == "UDN000183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000183";
    }
else if($message == "UDN000165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000165";
    }
else if($message == "UDN000142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000142";
    }
else if($message == "UDN000166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000166";
    }
else if($message == "UDN000471"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000471";
    }
else if($message == "UDN001253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001253";
    }
else if($message == "UDN000167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000167";
    }
else if($message == "UDN000168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000168";
    }
else if($message == "UDN000195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000195";
    }
else if($message == "UDN000370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000370";
    }
else if($message == "UDN000372"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000372";
    }
else if($message == "UDN000169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000169";
    }
else if($message == "UDN000171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000171";
    }
else if($message == "UDN000170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000170";
    }
else if($message == "UDN000173"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000173";
    }
else if($message == "UDN000171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000171";
    }
else if($message == "UDN000189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000189";
    }
else if($message == "UDN000172"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000172";
    }
else if($message == "UDN000378"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000378";
    }
else if($message == "UDN000173"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000173";
    }
else if($message == "UDN000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000143";
    }
else if($message == "UDN000397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000397";
    }
else if($message == "UDN001286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001286";
    }
else if($message == "UDN000174"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000174";
    }
else if($message == "UDN000176"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000176";
    }
else if($message == "UDN000187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000187";
    }
else if($message == "UDN000175"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000175";
    }
else if($message == "UDN000176"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000176";
    }
else if($message == "UDN000134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000134";
    }
else if($message == "UDN000177"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000177";
    }
else if($message == "UDN000031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000031";
    }
else if($message == "UDN001928"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001928";
    }
else if($message == "UDN000178"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000178";
    }
else if($message == "UDN000179"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000179";
    }
else if($message == "UDN000036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000036";
    }
else if($message == "UDN000179"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000179";
    }
else if($message == "UDN000180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000180";
    }
else if($message == "UDN000112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000112";
    }
else if($message == "UDN000181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000181";
    }
else if($message == "UDN000125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000125";
    }
else if($message == "UDN000285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000285";
    }
else if($message == "UDN000182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000182";
    }
else if($message == "UDN000183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000183";
    }
else if($message == "UDN000188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000188";
    }
else if($message == "UDN000184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000184";
    }
else if($message == "UDN000185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000185";
    }
else if($message == "UDN000417"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000417";
    }
else if($message == "UDN000589"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000589";
    }
else if($message == "UDN001927"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001927";
    }
else if($message == "UDN000186"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000186";
    }
else if($message == "UDN000187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000187";
    }
else if($message == "UDN000856"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000856";
    }
else if($message == "UDN001933"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001933";
    }
else if($message == "UDN000188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000188";
    }
else if($message == "UDN000190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000190";
    }
else if($message == "UDN000189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000189";
    }
else if($message == "UDN000190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000190";
    }
else if($message == "UDN000185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000185";
    }
else if($message == "UDN000191"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000191";
    }
else if($message == "UDN000083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000083";
    }
else if($message == "UDN000192"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000192";
    }
else if($message == "UDN000196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000196";
    }
else if($message == "UDN000193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000193";
    }
else if($message == "UDN000194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000194";
    }
else if($message == "UDN000385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000385";
    }
else if($message == "UDN000229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000229";
    }
else if($message == "UDN000195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000195";
    }
else if($message == "UDN000196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000196";
    }
else if($message == "UDN000231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000231";
    }
else if($message == "UDN000197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000197";
    }
else if($message == "UDN000239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000239";
    }
else if($message == "UDN000245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000245";
    }
else if($message == "UDN000540"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000540";
    }
else if($message == "UDN001637"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001637";
    }
else if($message == "UDN000198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000198";
    }
else if($message == "UDN000014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000014";
    }
else if($message == "UDN000003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000003";
    }
else if($message == "UDN000016"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000016";
    }
else if($message == "UDN000368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000368";
    }
else if($message == "UDN000376"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000376";
    }
else if($message == "UDN000427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000427";
    }
else if($message == "UDN000494"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000494";
    }
else if($message == "UDN000011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000011";
    }
else if($message == "UDN000240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000240";
    }
else if($message == "UDN000002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000002";
    }
else if($message == "UDN000017"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000017";
    }
else if($message == "UDN000413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000413";
    }
else if($message == "UDN000420"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000420";
    }
else if($message == "UDN000421"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000421";
    }
else if($message == "UDN000423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000423";
    }
else if($message == "UDN000424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000424";
    }
else if($message == "UDN000109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000109";
    }
else if($message == "UDN000211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000211";
    }
else if($message == "UDN000270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000270";
    }
else if($message == "UDN000286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000286";
    }
else if($message == "UDN000583"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000583";
    }
else if($message == "UDN000199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000199";
    }
else if($message == "UDN000040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000040";
    }
else if($message == "UDN001916"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001916";
    }
else if($message == "UDN000200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000200";
    }
else if($message == "UDN000200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000200";
    }
else if($message == "UDN000208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000208";
    }
else if($message == "UDN000236"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000236";
    }
else if($message == "UDN000276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000276";
    }
else if($message == "UDN000281"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000281";
    }
else if($message == "UDN000365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000365";
    }
else if($message == "UDN000369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000369";
    }
else if($message == "UDN000401"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000401";
    }
else if($message == "UDN000506"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000506";
    }
else if($message == "UDN000487"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000487";
    }
else if($message == "UDN000202"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000202";
    }
else if($message == "UDN000202"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000202";
    }
else if($message == "UDN000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000216";
    }
else if($message == "UDN000203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000203";
    }
else if($message == "UDN000866"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000866";
    }
else if($message == "UDN000204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000204";
    }
else if($message == "UDN001282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001282";
    }
else if($message == "UDN000205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000205";
    }
else if($message == "UDN000094"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000094";
    }
else if($message == "UDN000198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000198";
    }
else if($message == "UDN000476"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000476";
    }
else if($message == "UDN000525"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000525";
    }
else if($message == "UDN000206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000206";
    }
else if($message == "UDN000238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000238";
    }
else if($message == "UDN000207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000207";
    }
else if($message == "UDN000269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000269";
    }
else if($message == "UDN000208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000208";
    }
else if($message == "UDN001667"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001667";
    }
else if($message == "UDN000209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000209";
    }
else if($message == "UDN000072"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000072";
    }
else if($message == "UDN000073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000073";
    }
else if($message == "UDN000210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000210";
    }
else if($message == "UDN000454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000454";
    }
else if($message == "UDN000861"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000861";
    }
else if($message == "UDN000211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000211";
    }
else if($message == "UDN001194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001194";
    }
else if($message == "UDN001203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001203";
    }
else if($message == "UDN001275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001275";
    }
else if($message == "UDN001929"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001929";
    }
else if($message == "UDN000212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000212";
    }
else if($message == "UDN000268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000268";
    }
else if($message == "UDN000291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000291";
    }
else if($message == "UDN000416"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000416";
    }
else if($message == "UDN000464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000464";
    }
else if($message == "UDN000213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000213";
    }
else if($message == "UDN000259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000259";
    }
else if($message == "UDN000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000215";
    }
else if($message == "UDN000389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000389";
    }
else if($message == "UDN000264"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000264";
    }
else if($message == "UDN001674"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001674";
    }
else if($message == "UDN001941"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001941";
    }
else if($message == "UDN000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000216";
    }
else if($message == "UDN000392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000392";
    }
else if($message == "UDN000217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000217";
    }
else if($message == "UDN000218"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000218";
    }
else if($message == "UDN000219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000219";
    }
else if($message == "UDN000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000220";
    }
else if($message == "UDN000387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000387";
    }
else if($message == "UDN000221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000221";
    }
else if($message == "UDN000222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000222";
    }
else if($message == "UDN000253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000253";
    }
else if($message == "UDN000223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000223";
    }
else if($message == "UDN001281"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001281";
    }
else if($message == "UDN000224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000224";
    }
else if($message == "UDN000225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000225";
    }
else if($message == "UDN000477"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000477";
    }
else if($message == "UDN001284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001284";
    }
else if($message == "UDN000226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000226";
    }
else if($message == "UDN001304"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001304";
    }
else if($message == "UDN000089"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000089";
    }
else if($message == "UDN001211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001211";
    }
else if($message == "UDN000227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000227";
    }
else if($message == "UDN000411"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000411";
    }
else if($message == "UDN000228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000228";
    }
else if($message == "UDN000229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000229";
    }
else if($message == "UDN000230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000230";
    }
else if($message == "UDN000255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000255";
    }
else if($message == "UDN000231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000231";
    }
else if($message == "UDN000232"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000232";
    }
else if($message == "UDN000233"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000233";
    }
else if($message == "UDN000234"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000234";
    }
else if($message == "UDN000235"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000235";
    }
else if($message == "UDN000483"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000483";
    }
else if($message == "UDN001502"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001502";
    }
else if($message == "UDN000236"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000236";
    }
else if($message == "UDN000435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000435";
    }
else if($message == "UDN000857"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000857";
    }
else if($message == "UDN000237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000237";
    }
else if($message == "UDN000287"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000287";
    }
else if($message == "UDN000238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000238";
    }
else if($message == "UDN000284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000284";
    }
else if($message == "UDN000473"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000473";
    }
else if($message == "UDN001197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001197";
    }
else if($message == "UDN000239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000239";
    }
else if($message == "UDN000240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000240";
    }
else if($message == "UDN000241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000241";
    }
else if($message == "UDN001211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001211";
    }
else if($message == "UDN000242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000242";
    }
else if($message == "UDN000588"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000588";
    }
else if($message == "UDN000243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000243";
    }
else if($message == "UDN000244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000244";
    }
else if($message == "UDN000478"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000478";
    }
else if($message == "UDN001909"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001909";
    }
else if($message == "UDN000245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000245";
    }
else if($message == "UDN000246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000246";
    }
else if($message == "UDN000247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000247";
    }
else if($message == "UDN000248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000248";
    }
else if($message == "UDN000249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000249";
    }
else if($message == "UDN000257"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000257";
    }
else if($message == "UDN000250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000250";
    }
else if($message == "UDN001205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001205";
    }
else if($message == "UDN000251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000251";
    }
else if($message == "UDN001252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001252";
    }
else if($message == "UDN000252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000252";
    }
else if($message == "UDN000253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000253";
    }
else if($message == "UDN000254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000254";
    }
else if($message == "UDN000255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000255";
    }
else if($message == "UDN000589"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000589";
    }
else if($message == "UDN000418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000418";
    }
else if($message == "UDN000416"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000416";
    }
else if($message == "UDN001673"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001673";
    }
else if($message == "UDN000417"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000417";
    }
else if($message == "UDN000588"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000588";
    }
else if($message == "UDN000433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000433";
    }
else if($message == "UDN001099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001099";
    }
else if($message == "UDN000009"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000009";
    }
else if($message == "UDN000434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000434";
    }
else if($message == "UDN000435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000435";
    }
else if($message == "UDN000442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000442";
    }
else if($message == "UDN000443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000443";
    }
else if($message == "UDN000444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000444";
    }
else if($message == "UDN000018"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000018";
    }
else if($message == "UDN000214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000214";
    }
else if($message == "UDN000454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000454";
    }
else if($message == "UDN000477"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000477";
    }
else if($message == "UDN000482"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000482";
    }
else if($message == "UDN000483"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000483";
    }
else if($message == "UDN000453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000453";
    }
else if($message == "UDN000495"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000495";
    }
else if($message == "UDN000463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000463";
    }
else if($message == "UDN000464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000464";
    }
else if($message == "UDN000484"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000484";
    }
else if($message == "UDN000473"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000473";
    }
else if($message == "UDN000500"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000500";
    }
else if($message == "UDN000686"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000686";
    }
else if($message == "UDN001924"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001924";
    }
else if($message == "UDN000476"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000476";
    }
else if($message == "UDN000478"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000478";
    }
else if($message == "UDN001201"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001201";
    }
else if($message == "UDN000471"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000471";
    }
else if($message == "UDN001917"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001917";
    }
else if($message == "UDN000484"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000484";
    }
else if($message == "UDN000487"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000487";
    }
else if($message == "UDN000212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000212";
    }
else if($message == "UDN000488"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000488";
    }
else if($message == "UDN000129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000129";
    }
else if($message == "UDN000482"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000482";
    }
else if($message == "UDN000495"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000495";
    }
else if($message == "UDN001448"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001448";
    }
else if($message == "UDN001926"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001926";
    }
else if($message == "UDN000492"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000492";
    }
else if($message == "UDN001263"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001263";
    }
else if($message == "UDN000493"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000493";
    }
else if($message == "UDN001212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001212";
    }
else if($message == "UDN000494"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000494";
    }
else if($message == "UDN000497"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000497";
    }
else if($message == "UDN000497"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000497";
    }
else if($message == "UDN000498"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000498";
    }
else if($message == "UDN000585"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000585";
    }
else if($message == "UDN000496"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000496";
    }
else if($message == "UDN000492"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000492";
    }
else if($message == "UDN000491"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000491";
    }
else if($message == "UDN000507"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000507";
    }
else if($message == "UDN000650"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000650";
    }
else if($message == "UDN000945"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000945";
    }
else if($message == "UDN000500"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000500";
    }
else if($message == "UDN001025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001025";
    }
else if($message == "UDN001947"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001947";
    }
else if($message == "UDN000501"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000501";
    }
else if($message == "UDN000508"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000508";
    }
else if($message == "UDN000533"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000533";
    }
else if($message == "UDN000532"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000532";
    }
else if($message == "UDN000533"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000533";
    }
else if($message == "UDN000534"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000534";
    }
else if($message == "UDN000506"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000506";
    }
else if($message == "UDN001908"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001908";
    }
else if($message == "UDN000523"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000523";
    }
else if($message == "UDN000524"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000524";
    }
else if($message == "UDN000525"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000525";
    }
else if($message == "UDN000557"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000557";
    }
else if($message == "UDN001214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001214";
    }
else if($message == "UDN001217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001217";
    }
else if($message == "UDN001418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001418";
    }
else if($message == "UDN001787"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001787";
    }
else if($message == "UDN000507"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000507";
    }
else if($message == "UDN001320"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001320";
    }
else if($message == "UDN001428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001428";
    }
else if($message == "UDN000528"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000528";
    }
else if($message == "UDN000537"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000537";
    }
else if($message == "UDN001914"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001914";
    }
else if($message == "UDN001253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001253";
    }
else if($message == "UDN001666"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001666";
    }
else if($message == "UDN001198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001198";
    }
else if($message == "UDN001252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001252";
    }
else if($message == "UDN001119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001119";
    }
else if($message == "UDN001921"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001921";
    }
else if($message == "UDN000526"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000526";
    }
else if($message == "UDN000655"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000655";
    }
else if($message == "UDN001263"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001263";
    }
else if($message == "UDN001667"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001667";
    }
else if($message == "UDN001902"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001902";
    }
else if($message == "UDN001769"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001769";
    }
else if($message == "UDN001261"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001261";
    }
else if($message == "UDN000847"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000847";
    }
else if($message == "UDN001923"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001923";
    }
else if($message == "UDN001131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001131";
    }
else if($message == "UDN000936"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000936";
    }
else if($message == "UDN000858"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000858";
    }
else if($message == "UDN001258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001258";
    }
else if($message == "UDN001270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001270";
    }
else if($message == "UDN001918"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001918";
    }
else if($message == "UDN001025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001025";
    }
else if($message == "UDN000947"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000947";
    }
else if($message == "UDN001273"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001273";
    }
else if($message == "UDN000937"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000937";
    }
else if($message == "UDN001668"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001668";
    }
else if($message == "UDN000543"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000543";
    }
else if($message == "UDN000940"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000940";
    }
else if($message == "UDN001588"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001588";
    }
else if($message == "UDN001892"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001892";
    }
else if($message == "UDN001640"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001640";
    }
else if($message == "UDN000542"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000542";
    }
else if($message == "UDN001261"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001261";
    }
else if($message == "UDN001922"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001922";
    }
else if($message == "UDN001119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001119";
    }
else if($message == "UDN001270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001270";
    }
else if($message == "UDN001266"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001266";
    }
else if($message == "UDN001275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001275";
    }
else if($message == "UDN000941"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000941";
    }
else if($message == "UDN001259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001259";
    }
else if($message == "UDN001669"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001669";
    }
else if($message == "UDN000756"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000756";
    }
else if($message == "UDN001670"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001670";
    }
else if($message == "UDN000570"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000570";
    }
else if($message == "UDN001906"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001906";
    }
else if($message == "UDN000849"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000849";
    }
else if($message == "UDN001271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001271";
    }
else if($message == "UDN001272"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001272";
    }
else if($message == "UDN000761"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000761";
    }
else if($message == "UDN001273"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001273";
    }
else if($message == "UDN000855"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000855";
    }
else if($message == "UDN001660"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001660";
    }
else if($message == "UDN001904"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001904";
    }
else if($message == "UDN001925"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001925";
    }
else if($message == "UDN001671"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001671";
    }
else if($message == "UDN000538"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000538";
    }
else if($message == "UDN000540"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000540";
    }
else if($message == "UDN000847"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000847";
    }
else if($message == "UDN000848"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000848";
    }
else if($message == "UDN000848"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000848";
    }
else if($message == "UDN000537"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000537";
    }
else if($message == "UDN001672"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001672";
    }
else if($message == "UDN001073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001073";
    }
else if($message == "UDN001675"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001675";
    }
else if($message == "UDN000849"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000849";
    }
else if($message == "UDN000542"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000542";
    }
else if($message == "UDN001673"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001673";
    }
else if($message == "UDN000583"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000583";
    }
else if($message == "UDN001608"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001608";
    }
else if($message == "UDN000552"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000552";
    }
else if($message == "UDN000657"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000657";
    }
else if($message == "UDN001612"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001612";
    }
else if($message == "UDN001073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001073";
    }
else if($message == "UDN001044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001044";
    }
else if($message == "UDN000566"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000566";
    }
else if($message == "UDN001677"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001677";
    }
else if($message == "UDN000570"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000570";
    }
else if($message == "UDN000653"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000653";
    }
else if($message == "UDN001674"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001674";
    }
else if($message == "UDN000651"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000651";
    }
else if($message == "UDN000728"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000728";
    }
else if($message == "UDN000729"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000729";
    }
else if($message == "UDN001132"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001132";
    }
else if($message == "UDN001676"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001676";
    }
else if($message == "UDN001675"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001675";
    }
else if($message == "UDN001625"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001625";
    }
else if($message == "UDN001676"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001676";
    }
else if($message == "UDN000851"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000851";
    }
else if($message == "UDN001903"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001903";
    }
else if($message == "UDN000940"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000940";
    }
else if($message == "UDN000941"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000941";
    }
else if($message == "UDN000757"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000757";
    }
else if($message == "UDN000686"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000686";
    }
else if($message == "UDN000658"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000658";
    }
else if($message == "UDN000577"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000577";
    }
else if($message == "UDN000855"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000855";
    }
else if($message == "UDN000856"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000856";
    }
else if($message == "UDN001641"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001641";
    }
else if($message == "UDN000857"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000857";
    }
else if($message == "UDN000863"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000863";
    }
else if($message == "UDN001940"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001940";
    }
else if($message == "UDN000858"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000858";
    }
else if($message == "UDN000732"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000732";
    }
else if($message == "UDN001634"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001634";
    }
else if($message == "UDN001677"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001677";
    }
else if($message == "UDN000649"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000649";
    }
else if($message == "UDN000757"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000757";
    }
else if($message == "UDN000687"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000687";
    }
else if($message == "UDN000734"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000734";
    }
else if($message == "UDN000758"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000758";
    }
else if($message == "UDN000727"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000727";
    }
else if($message == "UDN000758"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000758";
    }
else if($message == "UDN000943"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000943";
    }
else if($message == "UDN001271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001271";
    }
else if($message == "UDN000654"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000654";
    }
else if($message == "UDN001133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001133";
    }
else if($message == "UDN001932"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001932";
    }
else if($message == "UDN000687"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000687";
    }
else if($message == "UDN000861"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000861";
    }
else if($message == "UDN000694"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000694";
    }
else if($message == "UDN000876"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000876";
    }
else if($message == "UDN000862"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000862";
    }
else if($message == "UDN000688"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000688";
    }
else if($message == "UDN000864"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000864";
    }
else if($message == "UDN000863"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000863";
    }
else if($message == "UDN000864"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000864";
    }
else if($message == "UDN001935"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001935";
    }
else if($message == "UDN000944"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000944";
    }
else if($message == "UDN000689"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000689";
    }
else if($message == "UDN000688"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000688";
    }
else if($message == "UDN000689"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000689";
    }
else if($message == "UDN001943"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001943";
    }
else if($message == "UDN000866"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000866";
    }
else if($message == "UDN000867"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000867";
    }
else if($message == "UDN000759"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000759";
    }
else if($message == "UDN001474"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001474";
    }
else if($message == "UDN000868"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000868";
    }
else if($message == "UDN000869"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000869";
    }
else if($message == "UDN000870"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000870";
    }
else if($message == "UDN001194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001194";
    }
else if($message == "UDN001195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001195";
    }
else if($message == "UDN001904"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001904";
    }
else if($message == "UDN000647"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000647";
    }
else if($message == "UDN000647"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000647";
    }
else if($message == "UDN000761"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000761";
    }
else if($message == "UDN001196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001196";
    }
else if($message == "UDN000885"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000885";
    }
else if($message == "UDN001197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001197";
    }
else if($message == "UDN000649"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000649";
    }
else if($message == "UDN001301"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001301";
    }
else if($message == "UDN001938"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001938";
    }
else if($message == "UDN000650"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000650";
    }
else if($message == "UDN000945"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000945";
    }
else if($message == "UDN000651"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000651";
    }
else if($message == "UDN000652"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000652";
    }
else if($message == "UDN001130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001130";
    }
else if($message == "UDN001198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001198";
    }
else if($message == "UDN000653"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000653";
    }
else if($message == "UDN000538"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000538";
    }
else if($message == "UDN000947"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000947";
    }
else if($message == "UDN000951"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000951";
    }
else if($message == "UDN000876"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000876";
    }
else if($message == "UDN000877"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000877";
    }
else if($message == "UDN000949"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000949";
    }
else if($message == "UDN000878"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000878";
    }
else if($message == "UDN000950"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000950";
    }
else if($message == "UDN000879"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000879";
    }
else if($message == "UDN000654"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000654";
    }
else if($message == "UDN000728"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000728";
    }
else if($message == "UDN001445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001445";
    }
else if($message == "UDN000729"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000729";
    }
else if($message == "UDN000951"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000951";
    }
else if($message == "UDN001287"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001287";
    }
else if($message == "UDN001200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001200";
    }
else if($message == "UDN000882"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000882";
    }
else if($message == "UDN001193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001193";
    }
else if($message == "UDN000655"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000655";
    }
else if($message == "UDN000656"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000656";
    }
else if($message == "UDN000659"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000659";
    }
else if($message == "UDN001937"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001937";
    }
else if($message == "UDN001946"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001946";
    }
else if($message == "UDN000657"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000657";
    }
else if($message == "UDN000763"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000763";
    }
else if($message == "UDN001131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001131";
    }
else if($message == "UDN001201"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001201";
    }
else if($message == "UDN000732"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000732";
    }
else if($message == "UDN001132"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001132";
    }
else if($message == "UDN000658"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000658";
    }
else if($message == "UDN000733"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000733";
    }
else if($message == "UDN001044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001044";
    }
else if($message == "UDN001199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001199";
    }
else if($message == "UDN000652"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000652";
    }
else if($message == "UDN000659"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000659";
    }
else if($message == "UDN001130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001130";
    }
else if($message == "UDN001945"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001945";
    }
else if($message == "UDN001203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001203";
    }
else if($message == "UDN000734"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000734";
    }
else if($message == "UDN001133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001133";
    }
else if($message == "UDN001283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001283";
    }
else if($message == "UDN001441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001441";
    }
else if($message == "UDN001284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001284";
    }
else if($message == "UDN001285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001285";
    }
else if($message == "UDN001286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001286";
    }
else if($message == "UDN001281"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001281";
    }
else if($message == "UDN001419"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001419";
    }
else if($message == "UDN001287"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001287";
    }
else if($message == "UDN000981"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000981";
    }
else if($message == "UDN000885"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000885";
    }
else if($message == "UDN001944"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001944";
    }
else if($message == "UDN001905"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001905";
    }
else if($message == "UDN001323"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001323";
    }
else if($message == "UDN001323"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001323";
    }
else if($message == "UDN001320"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001320";
    }
else if($message == "UDN001282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001282";
    }
else if($message == "UDN001947"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001947";
    }
else if($message == "UDN001428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001428";
    }
else if($message == "UDN001474"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001474";
    }
else if($message == "UDN000256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000256";
    }
else if($message == "UDN000256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000256";
    }
else if($message == "UDN000383"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000383";
    }
else if($message == "UDN001906"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001906";
    }
else if($message == "UDN001448"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001448";
    }
else if($message == "UDN001907"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001907";
    }
else if($message == "UDN001449"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001449";
    }
else if($message == "UDN001908"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001908";
    }
else if($message == "UDN001909"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001909";
    }
else if($message == "UDN001910"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001910";
    }
else if($message == "UDN000257"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000257";
    }
else if($message == "UDN001911"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001911";
    }
else if($message == "UDN001903"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001903";
    }
else if($message == "UDN000258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000258";
    }
else if($message == "UDN001912"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001912";
    }
else if($message == "UDN001913"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001913";
    }
else if($message == "UDN000076"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000076";
    }
else if($message == "UDN000444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000444";
    }
else if($message == "UDN000867"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000867";
    }
else if($message == "UDN000868"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000868";
    }
else if($message == "UDN001920"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001920";
    }
else if($message == "UDN000259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000259";
    }
else if($message == "UDN001264"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001264";
    }
else if($message == "UDN001915"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001915";
    }
else if($message == "UDN001915"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001915";
    }
else if($message == "UDN001916"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001916";
    }
else if($message == "UDN001917"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001917";
    }
else if($message == "UDN001918"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001918";
    }
else if($message == "UDN001919"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001919";
    }
else if($message == "UDN000260"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000260";
    }
else if($message == "UDN001920"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001920";
    }
else if($message == "UDN001921"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001921";
    }
else if($message == "UDN001922"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001922";
    }
else if($message == "UDN001923"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001923";
    }
else if($message == "UDN000261"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000261";
    }
else if($message == "UDN001924"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001924";
    }
else if($message == "UDN001925"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001925";
    }
else if($message == "UDN001259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001259";
    }
else if($message == "UDN000262"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000262";
    }
else if($message == "UDN001926"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001926";
    }
else if($message == "UDN001927"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001927";
    }
else if($message == "UDN001928"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001928";
    }
else if($message == "UDN000870"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000870";
    }
else if($message == "UDN000263"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000263";
    }
else if($message == "UDN000391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000391";
    }
else if($message == "UDN000264"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000264";
    }
else if($message == "UDN001929"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001929";
    }
else if($message == "UDN000862"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000862";
    }
else if($message == "UDN000877"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000877";
    }
else if($message == "UDN000949"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000949";
    }
else if($message == "UDN000265"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000265";
    }
else if($message == "UDN001502"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001502";
    }
else if($message == "UDN001930"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001930";
    }
else if($message == "UDN000288"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000288";
    }
else if($message == "UDN000528"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000528";
    }
else if($message == "UDN000566"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000566";
    }
else if($message == "UDN000266"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000266";
    }
else if($message == "UDN000384"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000384";
    }
else if($message == "UDN000267"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000267";
    }
else if($message == "UDN001615"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001615";
    }
else if($message == "UDN001931"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001931";
    }
else if($message == "UDN001612"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001612";
    }
else if($message == "UDN001193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001193";
    }
else if($message == "UDN000268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000268";
    }
else if($message == "UDN001932"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001932";
    }
else if($message == "UDN000724"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000724";
    }
else if($message == "UDN000269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000269";
    }
else if($message == "UDN001933"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001933";
    }
else if($message == "UDN001934"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001934";
    }
else if($message == "UDN001935"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001935";
    }
else if($message == "UDN001936"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001936";
    }
else if($message == "UDN001937"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001937";
    }
else if($message == "UDN001938"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001938";
    }
else if($message == "UDN001939"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001939";
    }
else if($message == "UDN000270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000270";
    }
else if($message == "UDN001940"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001940";
    }
else if($message == "UDN001941"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001941";
    }
else if($message == "UDN001942"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001942";
    }
else if($message == "UDN001608"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001608";
    }
else if($message == "UDN000271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000271";
    }
else if($message == "UDN000418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000418";
    }
else if($message == "UDN000272"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000272";
    }
else if($message == "UDN001943"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001943";
    }
else if($message == "UDN001944"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001944";
    }
else if($message == "UDN001945"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001945";
    }
else if($message == "UDN000273"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000273";
    }
else if($message == "UDN001200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001200";
    }
else if($message == "UDN000274"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000274";
    }
else if($message == "UDN001946"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001946";
    }
else if($message == "UDN000275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000275";
    }
else if($message == "UDN000388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000388";
    }
else if($message == "UDN000396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000396";
    }
else if($message == "UDN000276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000276";
    }
else if($message == "UDN000442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000442";
    }
else if($message == "UDN000453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000453";
    }
else if($message == "UDN000277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000277";
    }
else if($message == "UDN000278"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000278";
    }
else if($message == "UDN000279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000279";
    }
else if($message == "UDN000448"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000448";
    }
else if($message == "UDN000449"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000449";
    }
else if($message == "UDN000450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000450";
    }
else if($message == "UDN000458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000458";
    }
else if($message == "UDN000458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000458";
    }
else if($message == "UDN000280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000280";
    }
else if($message == "UDN000281"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000281";
    }
else if($message == "UDN000282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000282";
    }
else if($message == "UDN000235"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000235";
    }
else if($message == "UDN001266"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001266";
    }
else if($message == "UDN001441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001441";
    }
else if($message == "UDN000283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000283";
    }
else if($message == "UDN000284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000284";
    }
else if($message == "UDN000851"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000851";
    }
else if($message == "UDN000285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000285";
    }
else if($message == "UDN000199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000199";
    }
else if($message == "UDN000286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000286";
    }
else if($message == "UDN000287"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000287";
    }
else if($message == "UDN000577"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000577";
    }
else if($message == "UDN000727"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000727";
    }
else if($message == "UDN000288"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000288";
    }
else if($message == "UDN000151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000151";
    }
else if($message == "UDN000289"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000289";
    }
else if($message == "UDN000399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000399";
    }
else if($message == "UDN000290"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000290";
    }
else if($message == "UDN000291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000291";
    }
else if($message == "UDN000390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000390";
    }
else if($message == "UDN000383"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000383";
    }
else if($message == "UDN000733"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000733";
    }
else if($message == "UDN000384"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000384";
    }
else if($message == "UDN001265"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001265";
    }
else if($message == "UDN001670"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001670";
    }
else if($message == "UDN000385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000385";
    }
else if($message == "UDN001205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001205";
    }
else if($message == "UDN000386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000386";
    }
else if($message == "UDN001265"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001265";
    }
else if($message == "UDN000387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000387";
    }
else if($message == "UDN000396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000396";
    }
else if($message == "UDN000388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000388";
    }
else if($message == "UDN000389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000389";
    }
else if($message == "UDN000390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000390";
    }
else if($message == "UDN000391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000391";
    }
else if($message == "UDN001427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001427";
    }
else if($message == "UDN000214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000214";
    }
else if($message == "UDN000937"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000937";
    }
else if($message == "UDN000392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000392";
    }
else if($message == "UDN001942"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001942";
    }
else if($message == "UDN000397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000397";
    }
else if($message == "UDN000493"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000493";
    }
else if($message == "UDN000398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000398";
    }
else if($message == "UDN000400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000400";
    }
else if($message == "UDN000501"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000501";
    }
else if($message == "UDN000869"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000869";
    }
else if($message == "UDN000399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000399";
    }
else if($message == "UDN000402"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000402";
    }
else if($message == "UDN000763"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000763";
    }
else if($message == "UDN000882"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000882";
    }
else if($message == "UDN000936"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000936";
    }
else if($message == "UDN000400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000400";
    }
else if($message == "UDN001419"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001419";
    }
else if($message == "UDN000401"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000401";
    }
else if($message == "UDN000526"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000526";
    }
else if($message == "UDN000402"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000402";
    }
else if($message == "BUN000185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=BUN000185";
    }
else if($message == "NLP000299"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000299";
    }
else if($message == "NLP000299"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000299";
    }
else if($message == "NLP000300"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000300";
    }
else if($message == "NLP000301"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000301";
    }
else if($message == "NPL000184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000184";
    }
else if($message == "NPL000184"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000184";
    }
else if($message == "NLP000301"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000301";
    }
else if($message == "NLP000302"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000302";
    }
else if($message == "NPL000185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000185";
    }
else if($message == "NPL000186"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000186";
    }
else if($message == "NPL000186"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000186";
    }
else if($message == "NPL000188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000188";
    }
else if($message == "NPL000187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000187";
    }
else if($message == "NPL000188"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000188";
    }
else if($message == "NPL000185"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000185";
    }
else if($message == "NPL000190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000190";
    }
else if($message == "NPL000189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000189";
    }
else if($message == "NPL000190"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000190";
    }
else if($message == "NLP000312"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000312";
    }
else if($message == "NPL000180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000180";
    }
else if($message == "NPL000180"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000180";
    }
else if($message == "NPL000181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000181";
    }
else if($message == "NPL000182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000182";
    }
else if($message == "NPL000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000216";
    }
else if($message == "NLP000303"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000303";
    }
else if($message == "NLP000304"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000304";
    }
else if($message == "NPL000254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000254";
    }
else if($message == "NLP000305"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000305";
    }
else if($message == "NLP000306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000306";
    }
else if($message == "NLP000307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000307";
    }
else if($message == "NLP000306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000306";
    }
else if($message == "NLP000308"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000308";
    }
else if($message == "NLP000310"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000310";
    }
else if($message == "NLP000309"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000309";
    }
else if($message == "NLP000322"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000322";
    }
else if($message == "NLP000310"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000310";
    }
else if($message == "NPL000253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000253";
    }
else if($message == "NPL000253"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000253";
    }
else if($message == "NLP000309"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000309";
    }
else if($message == "NPL000252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000252";
    }
else if($message == "NPL000245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000245";
    }
else if($message == "NPL000247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000247";
    }
else if($message == "NPL000248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000248";
    }
else if($message == "NPL000249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000249";
    }
else if($message == "NLP000311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000311";
    }
else if($message == "NPL000248"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000248";
    }
else if($message == "NLP000312"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000312";
    }
else if($message == "NLP000313"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000313";
    }
else if($message == "NPL000242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000242";
    }
else if($message == "NPL000244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000244";
    }
else if($message == "NPL000255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000255";
    }
else if($message == "NPL000255"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000255";
    }
else if($message == "NPL000241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000241";
    }
else if($message == "NPL000243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000243";
    }
else if($message == "NPL000246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000246";
    }
else if($message == "NLP000314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000314";
    }
else if($message == "NLP000315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000315";
    }
else if($message == "NLP000316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000316";
    }
else if($message == "NPL000250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000250";
    }
else if($message == "NLP000315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000315";
    }
else if($message == "NLP000314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000314";
    }
else if($message == "NLP000316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000316";
    }
else if($message == "NPL000254"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000254";
    }
else if($message == "NPL000252"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000252";
    }
else if($message == "NLP000317"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000317";
    }
else if($message == "NPL000256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000256";
    }
else if($message == "NPL000251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000251";
    }
else if($message == "NLP000317"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000317";
    }
else if($message == "NPL000256"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000256";
    }
else if($message == "NPL000251"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000251";
    }
else if($message == "NLP000318"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000318";
    }
else if($message == "NLP000319"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000319";
    }
else if($message == "NLP000320"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000320";
    }
else if($message == "NLP000321"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000321";
    }
else if($message == "NLP000322"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000322";
    }
else if($message == "NLP000020"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000020";
    }
else if($message == "NLP000035"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000035";
    }
else if($message == "UDN000425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000425";
    }
else if($message == "NLP000011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000011";
    }
else if($message == "NLP000003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000003";
    }
else if($message == "NLP000004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000004";
    }
else if($message == "UDN000988"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000988";
    }
else if($message == "NLP000031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000031";
    }
else if($message == "NLP000004"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000004";
    }
else if($message == "NLP000006"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000006";
    }
else if($message == "NLP000005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000005";
    }
else if($message == "NLP000010"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000010";
    }
else if($message == "NLP000006"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000006";
    }
else if($message == "NLP000001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000001";
    }
else if($message == "NLP000012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000012";
    }
else if($message == "NLP000026"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000026";
    }
else if($message == "NLP000027"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000027";
    }
else if($message == "NPL000132"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000132";
    }
else if($message == "NLP000007"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000007";
    }
else if($message == "NLP000022"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000022";
    }
else if($message == "NLP000023"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000023";
    }
else if($message == "NLP000007"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000007";
    }
else if($message == "NLP000036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000036";
    }
else if($message == "NLP000319"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000319";
    }
else if($message == "NLP000008"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000008";
    }
else if($message == "NPL000061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000061";
    }
else if($message == "NLP000030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000030";
    }
else if($message == "NLP000009"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000009";
    }
else if($message == "NLP000029"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000029";
    }
else if($message == "NLP000010"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000010";
    }
else if($message == "NPL000085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000085";
    }
else if($message == "NLP000011"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000011";
    }
else if($message == "NPL000080"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000080";
    }
else if($message == "NPL000244"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000244";
    }
else if($message == "NLP000021"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000021";
    }
else if($message == "NLP000028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000028";
    }
else if($message == "NLP000012"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000012";
    }
else if($message == "NPL000077"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000077";
    }
else if($message == "NLP000047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000047";
    }
else if($message == "NLP000025"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000025";
    }
else if($message == "NPL000078"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000078";
    }
else if($message == "NPL000160"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000160";
    }
else if($message == "NPL000169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000169";
    }
else if($message == "NPL000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000216";
    }
else if($message == "NPL000243"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000243";
    }
else if($message == "NLP000028"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000028";
    }
else if($message == "NLP000325"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000325";
    }
else if($message == "NLP000030"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000030";
    }
else if($message == "NPL000083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000083";
    }
else if($message == "NLP000042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000042";
    }
else if($message == "NLP000029"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000029";
    }
else if($message == "NLP000034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000034";
    }
else if($message == "NLP000031"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000031";
    }
else if($message == "NLP000036"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000036";
    }
else if($message == "NLP000034"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000034";
    }
else if($message == "NPL000132"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000132";
    }
else if($message == "NLP000003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000003";
    }
else if($message == "NLP000005"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000005";
    }
else if($message == "NLP000008"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000008";
    }
else if($message == "NLP000009"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000009";
    }
else if($message == "NLP000038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000038";
    }
else if($message == "NPL000134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000134";
    }
else if($message == "NLP000042"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000042";
    }
else if($message == "NPL000182"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000182";
    }
else if($message == "NLP000285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000285";
    }
else if($message == "NLP000326"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000326";
    }
else if($message == "NLP000044"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000044";
    }
else if($message == "NPL000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000138";
    }
else if($message == "NPL000242"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000242";
    }
else if($message == "NPL000246"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000246";
    }
else if($message == "NPL000080"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000080";
    }
else if($message == "NPL000081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000081";
    }
else if($message == "NPL000081"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000081";
    }
else if($message == "NPL000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000138";
    }
else if($message == "NPL000181"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000181";
    }
else if($message == "NPL000187"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000187";
    }
else if($message == "NLP000286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000286";
    }
else if($message == "NPL000082"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000082";
    }
else if($message == "NPL000245"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000245";
    }
else if($message == "NPL000241"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000241";
    }
else if($message == "NPL000083"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000083";
    }
else if($message == "NPL000183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000183";
    }
else if($message == "NLP000324"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000324";
    }
else if($message == "NLP000285"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000285";
    }
else if($message == "NPL000247"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000247";
    }
else if($message == "NLP000311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000311";
    }
else if($message == "NPL000249"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000249";
    }
else if($message == "NLP000329"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000329";
    }
else if($message == "NPL000082"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000082";
    }
else if($message == "NLP000286"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000286";
    }
else if($message == "NPL000061"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000061";
    }
else if($message == "NPL000212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000212";
    }
else if($message == "NPL000213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000213";
    }
else if($message == "NPL000084"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000084";
    }
else if($message == "NPL000085"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000085";
    }
else if($message == "NPL000250"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000250";
    }
else if($message == "NLP000305"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000305";
    }
else if($message == "NPL000078"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000078";
    }
else if($message == "NPL000168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000168";
    }
else if($message == "NLP000320"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000320";
    }
else if($message == "NPL000077"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000077";
    }
else if($message == "NPL000161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000161";
    }
else if($message == "NPL000054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000054";
    }
else if($message == "NPL000160"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000160";
    }
else if($message == "NPL000161"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000161";
    }
else if($message == "NPL000166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000166";
    }
else if($message == "NPL000162"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000162";
    }
else if($message == "NPL000167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000167";
    }
else if($message == "NPL000163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000163";
    }
else if($message == "NPL000164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000164";
    }
else if($message == "NPL000165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000165";
    }
else if($message == "NLP000321"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000321";
    }
else if($message == "NPL000166"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000166";
    }
else if($message == "NPL000162"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000162";
    }
else if($message == "NPL000164"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000164";
    }
else if($message == "NLP000303"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000303";
    }
else if($message == "NPL000167"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000167";
    }
else if($message == "NPL000168"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000168";
    }
else if($message == "NPL000165"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000165";
    }
else if($message == "NPL000169"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000169";
    }
else if($message == "NPL000267"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000267";
    }
else if($message == "NPL000270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000270";
    }
else if($message == "NLP000426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000426";
    }
else if($message == "NPL000227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000227";
    }
else if($message == "NPL000272"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000272";
    }
else if($message == "NLP000327"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000327";
    }
else if($message == "NLP000323"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000323";
    }
else if($message == "NLP000300"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000300";
    }
else if($message == "NLP000328"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000328";
    }
else if($message == "NPL000272"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000272";
    }
else if($message == "NLP000324"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000324";
    }
else if($message == "NLP000325"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000325";
    }
else if($message == "NLP000313"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000313";
    }
else if($message == "NPL000183"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000183";
    }
else if($message == "NLP000326"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000326";
    }
else if($message == "NPL000258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000258";
    }
else if($message == "NPL000280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000280";
    }
else if($message == "NPL000213"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000213";
    }
else if($message == "NPL000258"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000258";
    }
else if($message == "NPL000280"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000280";
    }
else if($message == "NPL000270"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000270";
    }
else if($message == "NLP000323"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000323";
    }
else if($message == "NPL000267"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000267";
    }
else if($message == "NPL000268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000268";
    }
else if($message == "NPL000271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000271";
    }
else if($message == "NPL000271"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000271";
    }
else if($message == "NPL000269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000269";
    }
else if($message == "NPL000268"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000268";
    }
else if($message == "NLP000327"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000327";
    }
else if($message == "NLP000328"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000328";
    }
else if($message == "NLP000330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000330";
    }
else if($message == "NLP000329"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000329";
    }
else if($message == "NLP000355"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000355";
    }
else if($message == "NLP000330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000330";
    }
else if($message == "NPL000279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000279";
    }
else if($message == "NLP000332"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000332";
    }
else if($message == "NLP000331"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000331";
    }
else if($message == "NLP000332"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000332";
    }
else if($message == "NLP000333"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000333";
    }
else if($message == "NLP000333"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000333";
    }
else if($message == "NLP000334"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000334";
    }
else if($message == "NLP000335"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000335";
    }
else if($message == "NLP000336"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000336";
    }
else if($message == "NLP000337"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000337";
    }
else if($message == "NLP000338"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000338";
    }
else if($message == "NLP000339"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000339";
    }
else if($message == "NLP000341"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000341";
    }
else if($message == "NLP000340"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000340";
    }
else if($message == "NLP000342"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000342";
    }
else if($message == "NLP000341"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000341";
    }
else if($message == "NLP000342"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000342";
    }
else if($message == "NPL000193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000193";
    }
else if($message == "NLP000343"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000343";
    }
else if($message == "NPL000193"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000193";
    }
else if($message == "NPL000231"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000231";
    }
else if($message == "NPL000192"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000192";
    }
else if($message == "NPL000230"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000230";
    }
else if($message == "NPL000192"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000192";
    }
else if($message == "NLP000346"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000346";
    }
else if($message == "NLP000349"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000349";
    }
else if($message == "NLP000344"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000344";
    }
else if($message == "NLP000345"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000345";
    }
else if($message == "NLP000354"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000354";
    }
else if($message == "NLP000346"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000346";
    }
else if($message == "NLP000344"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000344";
    }
else if($message == "NLP000347"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000347";
    }
else if($message == "NLP000348"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000348";
    }
else if($message == "NLP000349"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000349";
    }
else if($message == "NLP000350"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000350";
    }
else if($message == "NLP000352"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000352";
    }
else if($message == "NLP000351"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000351";
    }
else if($message == "NLP000352"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000352";
    }
else if($message == "NLP000351"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000351";
    }
else if($message == "NLP000353"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000353";
    }
else if($message == "NLP000353"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000353";
    }
else if($message == "NLP000291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000291";
    }
else if($message == "NLP000354"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000354";
    }
else if($message == "NLP000339"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000339";
    }
else if($message == "NLP000355"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000355";
    }
else if($message == "NLP000292"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000292";
    }
else if($message == "NLP000356"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000356";
    }
else if($message == "UDN000990"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000990";
    }
else if($message == "NPL000156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000156";
    }
else if($message == "UDN000989"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000989";
    }
else if($message == "NPL000156"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000156";
    }
else if($message == "NPL000091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000091";
    }
else if($message == "NLP000287"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000287";
    }
else if($message == "NPL000214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000214";
    }
else if($message == "NPL000091"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000091";
    }
else if($message == "NPL000259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000259";
    }
else if($message == "NPL000214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000214";
    }
else if($message == "NLP000337"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000337";
    }
else if($message == "NPL000259"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000259";
    }
else if($message == "NPL000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000215";
    }
else if($message == "NPL000279"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000279";
    }
else if($message == "NLP000357"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000357";
    }
else if($message == "NPL000283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000283";
    }
else if($message == "NPL000284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000284";
    }
else if($message == "NLP000291"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000291";
    }
else if($message == "NLP000334"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000334";
    }
else if($message == "NLP000345"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000345";
    }
else if($message == "NLP000347"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000347";
    }
else if($message == "NPL000283"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000283";
    }
else if($message == "NPL000282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000282";
    }
else if($message == "NLP000356"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000356";
    }
else if($message == "NLP000358"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000358";
    }
else if($message == "UDN001371"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001371";
    }
else if($message == "NLP000340"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000340";
    }
else if($message == "NLP000343"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000343";
    }
else if($message == "NPL000282"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000282";
    }
else if($message == "NLP000359"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000359";
    }
else if($message == "NLP000360"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000360";
    }
else if($message == "NLP000338"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000338";
    }
else if($message == "NLP000361"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000361";
    }
else if($message == "NPL000210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000210";
    }
else if($message == "NPL000206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000206";
    }
else if($message == "NLP000362"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000362";
    }
else if($message == "NLP000362"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000362";
    }
else if($message == "NLP000363"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000363";
    }
else if($message == "NLP000363"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000363";
    }
else if($message == "NLP000364"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000364";
    }
else if($message == "NPL000207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000207";
    }
else if($message == "NPL000205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000205";
    }
else if($message == "NPL000209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000209";
    }
else if($message == "NKI000397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000397";
    }
else if($message == "NPL000209"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000209";
    }
else if($message == "NPL000206"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000206";
    }
else if($message == "NPL000210"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000210";
    }
else if($message == "NPL000205"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000205";
    }
else if($message == "NLP000366"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000366";
    }
else if($message == "NLP000365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000365";
    }
else if($message == "NLP000366"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000366";
    }
else if($message == "NLP000365"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000365";
    }
else if($message == "NPL000208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000208";
    }
else if($message == "NPL000208"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000208";
    }
else if($message == "NLP000367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000367";
    }
else if($message == "NLP000367"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000367";
    }
else if($message == "NPL000204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000204";
    }
else if($message == "NLP000369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000369";
    }
else if($message == "NLP000368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000368";
    }
else if($message == "NLP000370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000370";
    }
else if($message == "NLP000369"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000369";
    }
else if($message == "NLP000370"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000370";
    }
else if($message == "NLP000372"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000372";
    }
else if($message == "NLP000371"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000371";
    }
else if($message == "NLP000377"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000377";
    }
else if($message == "NLP000372"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000372";
    }
else if($message == "NLP000374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000374";
    }
else if($message == "NLP000376"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000376";
    }
else if($message == "NLP000373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000373";
    }
else if($message == "NLP000374"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000374";
    }
else if($message == "NLP000375"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000375";
    }
else if($message == "NLP000375"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000375";
    }
else if($message == "NLP000376"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000376";
    }
else if($message == "NLP000373"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000373";
    }
else if($message == "NLP000377"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000377";
    }
else if($message == "NLP000378"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000378";
    }
else if($message == "NKI000397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000397";
    }
else if($message == "NLP000378"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000378";
    }
else if($message == "NLP000379"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000379";
    }
else if($message == "NLP000380"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000380";
    }
else if($message == "NPL000134"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000134";
    }
else if($message == "NLP000051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000051";
    }
else if($message == "NPL000130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000130";
    }
else if($message == "NPL000054"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000054";
    }
else if($message == "NPL000097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000097";
    }
else if($message == "NPL000063"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000063";
    }
else if($message == "NLP000422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000422";
    }
else if($message == "NLP000423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000423";
    }
else if($message == "NPL000127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000127";
    }
else if($message == "NPL000075"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000075";
    }
else if($message == "NPL000189"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000189";
    }
else if($message == "NLP000302"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000302";
    }
else if($message == "NLP000307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000307";
    }
else if($message == "NPL000093"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000093";
    }
else if($message == "NPL000127"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000127";
    }
else if($message == "NPL000137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000137";
    }
else if($message == "NPL000075"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000075";
    }
else if($message == "NPL000131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000131";
    }
else if($message == "NPL000131"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000131";
    }
else if($message == "NPL000095"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000095";
    }
else if($message == "NPL000095"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000095";
    }
else if($message == "NPL000125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000125";
    }
else if($message == "NLP000052"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000052";
    }
else if($message == "NPL000207"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000207";
    }
else if($message == "NLP000053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000053";
    }
else if($message == "UDN000988"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000988";
    }
else if($message == "NLP000050"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000050";
    }
else if($message == "NLP000050"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000050";
    }
else if($message == "NLP000051"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000051";
    }
else if($message == "NPL000125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000125";
    }
else if($message == "NLP000380"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000380";
    }
else if($message == "NLP000382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000382";
    }
else if($message == "NPL000133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000133";
    }
else if($message == "NPL000133"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000133";
    }
else if($message == "NLP000368"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000368";
    }
else if($message == "NLP000288"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000288";
    }
else if($message == "NLP000389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000389";
    }
else if($message == "NLP000053"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000053";
    }
else if($message == "NPL000097"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000097";
    }
else if($message == "NLP000381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000381";
    }
else if($message == "NLP000385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000385";
    }
else if($message == "NLP000381"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000381";
    }
else if($message == "NLP000382"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000382";
    }
else if($message == "NPL000204"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000204";
    }
else if($message == "NLP000383"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000383";
    }
else if($message == "NLP000384"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000384";
    }
else if($message == "NLP000364"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000364";
    }
else if($message == "NLP000385"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000385";
    }
else if($message == "NLP000386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000386";
    }
else if($message == "NLP000386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000386";
    }
else if($message == "NLP000388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000388";
    }
else if($message == "NLP000387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000387";
    }
else if($message == "NLP000388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000388";
    }
else if($message == "NLP000387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000387";
    }
else if($message == "NLP000389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000389";
    }
else if($message == "NLP000390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000390";
    }
else if($message == "NLP000390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000390";
    }
else if($message == "NLP000391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000391";
    }
else if($message == "NLP000391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000391";
    }
else if($message == "NPL000217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000217";
    }
else if($message == "NLP000397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000397";
    }
else if($message == "NPL000219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000219";
    }
else if($message == "NLP000392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000392";
    }
else if($message == "NLP000393"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000393";
    }
else if($message == "NLP000393"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000393";
    }
else if($message == "NLP000394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000394";
    }
else if($message == "NLP000394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000394";
    }
else if($message == "NLP000395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000395";
    }
else if($message == "NLP000395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000395";
    }
else if($message == "NLP000396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000396";
    }
else if($message == "NLP000392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000392";
    }
else if($message == "NLP000397"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000397";
    }
else if($message == "NLP000398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000398";
    }
else if($message == "NLP000399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000399";
    }
else if($message == "NLP000400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000400";
    }
else if($message == "NLP000401"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000401";
    }
else if($message == "NLP000402"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000402";
    }
else if($message == "NLP000403"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000403";
    }
else if($message == "NLP000402"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000402";
    }
else if($message == "NLP000403"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000403";
    }
else if($message == "NLP000404"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000404";
    }
else if($message == "NLP000406"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000406";
    }
else if($message == "NLP000405"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000405";
    }
else if($message == "NLP000406"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000406";
    }
else if($message == "NLP000407"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000407";
    }
else if($message == "NLP000408"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000408";
    }
else if($message == "NLP000293"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000293";
    }
else if($message == "NLP000293"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000293";
    }
else if($message == "NLP000409"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000409";
    }
else if($message == "NLP000409"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000409";
    }
else if($message == "NLP000411"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000411";
    }
else if($message == "NLP000410"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000410";
    }
else if($message == "NLP000411"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000411";
    }
else if($message == "NLP000412"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000412";
    }
else if($message == "NLP000414"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000414";
    }
else if($message == "NLP000413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000413";
    }
else if($message == "NLP000414"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000414";
    }
else if($message == "NLP000415"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000415";
    }
else if($message == "NLP000415"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000415";
    }
else if($message == "NLP000416"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000416";
    }
else if($message == "NLP000418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000418";
    }
else if($message == "NLP000428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000428";
    }
else if($message == "NLP000417"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000417";
    }
else if($message == "NLP000418"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000418";
    }
else if($message == "NLP000420"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000420";
    }
else if($message == "NLP000419"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000419";
    }
else if($message == "NLP000421"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000421";
    }
else if($message == "NLP000420"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000420";
    }
else if($message == "NLP000421"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000421";
    }
else if($message == "NLP000429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000429";
    }
else if($message == "NLP000422"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000422";
    }
else if($message == "NLP000433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000433";
    }
else if($message == "NLP000423"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000423";
    }
else if($message == "NLP000424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000424";
    }
else if($message == "NLP000425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000425";
    }
else if($message == "NPL000129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000129";
    }
else if($message == "NPL000130"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000130";
    }
else if($message == "NPL000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000139";
    }
else if($message == "NPL000146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000146";
    }
else if($message == "NPL000211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000211";
    }
else if($message == "NPL000226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000226";
    }
else if($message == "NLP000039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000039";
    }
else if($message == "NPL000121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000121";
    }
else if($message == "NPL000151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000151";
    }
else if($message == "NLP000038"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000038";
    }
else if($message == "NPL000065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000065";
    }
else if($message == "NPL000079"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000079";
    }
else if($message == "NLP000041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000041";
    }
else if($message == "NLP000424"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000424";
    }
else if($message == "NLP000039"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000039";
    }
else if($message == "NLP000043"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000043";
    }
else if($message == "NLP000408"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000408";
    }
else if($message == "NLP000041"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000041";
    }
else if($message == "NPL000150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000150";
    }
else if($message == "NLP000404"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000404";
    }
else if($message == "NLP000435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000435";
    }
else if($message == "NLP000046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000046";
    }
else if($message == "NLP000046"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000046";
    }
else if($message == "NLP000043"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000043";
    }
else if($message == "NPL000064"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000064";
    }
else if($message == "NPL000063"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000063";
    }
else if($message == "NPL000227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000227";
    }
else if($message == "NPL000064"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000064";
    }
else if($message == "NLP000399"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000399";
    }
else if($message == "NPL000065"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000065";
    }
else if($message == "NPL000069"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000069";
    }
else if($message == "NPL000158"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000158";
    }
else if($message == "NLP000398"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000398";
    }
else if($message == "NPL000066"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000066";
    }
else if($message == "NPL000128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000128";
    }
else if($message == "NPL000158"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000158";
    }
else if($message == "NLP000400"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000400";
    }
else if($message == "NPL000079"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000079";
    }
else if($message == "NPL000141"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000141";
    }
else if($message == "NLP000427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000427";
    }
else if($message == "NPL000068"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000068";
    }
else if($message == "NPL000069"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000069";
    }
else if($message == "NPL000056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000056";
    }
else if($message == "NPL000055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000055";
    }
else if($message == "NPL000055"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000055";
    }
else if($message == "NPL000128"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000128";
    }
else if($message == "NPL000070"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000070";
    }
else if($message == "NPL000076"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000076";
    }
else if($message == "NPL000056"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000056";
    }
else if($message == "NPL000140"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000140";
    }
else if($message == "NLP000401"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000401";
    }
else if($message == "NPL000076"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000076";
    }
else if($message == "NPL000140"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000140";
    }
else if($message == "NPL000148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000148";
    }
else if($message == "NPL000171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000171";
    }
else if($message == "NPL000141"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000141";
    }
else if($message == "NPL000142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000142";
    }
else if($message == "NPL000142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000142";
    }
else if($message == "NPL000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000143";
    }
else if($message == "NPL000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000144";
    }
else if($message == "NPL000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000143";
    }
else if($message == "NPL000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000144";
    }
else if($message == "NPL000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000145";
    }
else if($message == "NPL000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000145";
    }
else if($message == "NPL000146"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000146";
    }
else if($message == "NLP000425"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000425";
    }
else if($message == "NPL000147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000147";
    }
else if($message == "NPL000148"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000148";
    }
else if($message == "NPL000171"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000171";
    }
else if($message == "NPL000147"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000147";
    }
else if($message == "NLP000396"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000396";
    }
else if($message == "NLP000437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000437";
    }
else if($message == "NPL000149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000149";
    }
else if($message == "NPL000170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000170";
    }
else if($message == "NPL000149"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000149";
    }
else if($message == "NPL000170"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000170";
    }
else if($message == "NPL000150"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000150";
    }
else if($message == "NLP000426"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000426";
    }
else if($message == "NPL000269"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000269";
    }
else if($message == "NPL000211"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000211";
    }
else if($message == "UDN001447"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001447";
    }
else if($message == "NLP000417"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000417";
    }
else if($message == "NPL000212"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000212";
    }
else if($message == "NPL000226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000226";
    }
else if($message == "NLP000427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000427";
    }
else if($message == "NLP000428"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000428";
    }
else if($message == "NLP000430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000430";
    }
else if($message == "NLP000429"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000429";
    }
else if($message == "NLP000430"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000430";
    }
else if($message == "NLP000431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000431";
    }
else if($message == "NLP000432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000432";
    }
else if($message == "NLP000434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000434";
    }
else if($message == "NLP000433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000433";
    }
else if($message == "NLP000434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000434";
    }
else if($message == "NPL000228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000228";
    }
else if($message == "NLP000436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000436";
    }
else if($message == "NLP000435"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000435";
    }
else if($message == "NPL000273"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000273";
    }
else if($message == "NPL000229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000229";
    }
else if($message == "NPL000229"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000229";
    }
else if($message == "NPL000276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000276";
    }
else if($message == "NPL000275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000275";
    }
else if($message == "NPL000276"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000276";
    }
else if($message == "NPL000277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000277";
    }
else if($message == "NLP000436"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000436";
    }
else if($message == "NPL000222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000222";
    }
else if($message == "NPL000275"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000275";
    }
else if($message == "NPL000277"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000277";
    }
else if($message == "NPL000238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000238";
    }
else if($message == "NPL000239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000239";
    }
else if($message == "NPL000238"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000238";
    }
else if($message == "NPL000239"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000239";
    }
else if($message == "NLP000437"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000437";
    }
else if($message == "NPL000240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000240";
    }
else if($message == "NPL000237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000237";
    }
else if($message == "NPL000218"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000218";
    }
else if($message == "NPL000237"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000237";
    }
else if($message == "NPL000222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000222";
    }
else if($message == "NPL000223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000223";
    }
else if($message == "NPL000228"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000228";
    }
else if($message == "NPL000240"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000240";
    }
else if($message == "NPL000221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000221";
    }
else if($message == "NPL000223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000223";
    }
else if($message == "NPL000221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000221";
    }
else if($message == "NPL000219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000219";
    }
else if($message == "NPL000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000220";
    }
else if($message == "NPL000218"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000218";
    }
else if($message == "NPL000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000220";
    }
else if($message == "NPL000217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000217";
    }
else if($message == "NPL000200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000200";
    }
else if($message == "NPL000197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000197";
    }
else if($message == "NPL000198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000198";
    }
else if($message == "NLP000438"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000438";
    }
else if($message == "NPL000196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000196";
    }
else if($message == "NPL000194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000194";
    }
else if($message == "NPL000196"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000196";
    }
else if($message == "NLP000443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000443";
    }
else if($message == "NLP000440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000440";
    }
else if($message == "NLP000441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000441";
    }
else if($message == "NLP000453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000453";
    }
else if($message == "NLP000442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000442";
    }
else if($message == "NLP000441"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000441";
    }
else if($message == "NLP000442"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000442";
    }
else if($message == "NLP000443"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000443";
    }
else if($message == "NPL000194"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000194";
    }
else if($message == "NLP000440"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000440";
    }
else if($message == "NPL000195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000195";
    }
else if($message == "NLP000444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000444";
    }
else if($message == "NLP000445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000445";
    }
else if($message == "NLP000446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000446";
    }
else if($message == "NPL000099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000099";
    }
else if($message == "NLP000013"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000013";
    }
else if($message == "UDN000989"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000989";
    }
else if($message == "NPL000121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000121";
    }
else if($message == "NPL000151"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000151";
    }
else if($message == "NLP000014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000014";
    }
else if($message == "NLP000015"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000015";
    }
else if($message == "NLP000016"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000016";
    }
else if($message == "NLP000001"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000001";
    }
else if($message == "NLP000013"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000013";
    }
else if($message == "NLP000037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000037";
    }
else if($message == "NLP000049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000049";
    }
else if($message == "NLP000015"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000015";
    }
else if($message == "NPL000098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000098";
    }
else if($message == "NLP000002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000002";
    }
else if($message == "NLP000016"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000016";
    }
else if($message == "NPL000157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000157";
    }
else if($message == "NLP000445"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000445";
    }
else if($message == "NPL000098"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000098";
    }
else if($message == "NPL000195"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000195";
    }
else if($message == "NLP000444"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000444";
    }
else if($message == "NPL000099"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000099";
    }
else if($message == "NPL000159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000159";
    }
else if($message == "NPL000197"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000197";
    }
else if($message == "NLP000449"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000449";
    }
else if($message == "NLP000014"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000014";
    }
else if($message == "NLP000002"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000002";
    }
else if($message == "NLP000037"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000037";
    }
else if($message == "NLP000048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000048";
    }
else if($message == "NLP000047"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000047";
    }
else if($message == "NLP000450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000450";
    }
else if($message == "NLP000048"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000048";
    }
else if($message == "NPL000104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000104";
    }
else if($message == "NLP000049"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000049";
    }
else if($message == "NPL000157"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000157";
    }
else if($message == "NPL000060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000060";
    }
else if($message == "NLP000446"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000446";
    }
else if($message == "NPL000101"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000101";
    }
else if($message == "NPL000057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000057";
    }
else if($message == "NPL000102"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000102";
    }
else if($message == "NPL000103"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000103";
    }
else if($message == "NPL000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000215";
    }
else if($message == "NLP000336"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000336";
    }
else if($message == "NLP000294"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000294";
    }
else if($message == "NPL000109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000109";
    }
else if($message == "NPL000191"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000191";
    }
else if($message == "NPL000103"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000103";
    }
else if($message == "NPL000108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000108";
    }
else if($message == "NPL000203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000203";
    }
else if($message == "NLP000295"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000295";
    }
else if($message == "NPL000106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000106";
    }
else if($message == "NLP000296"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000296";
    }
else if($message == "NPL000104"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000104";
    }
else if($message == "NLP000296"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000296";
    }
else if($message == "NPL000107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000107";
    }
else if($message == "NPL000202"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000202";
    }
else if($message == "NPL000106"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000106";
    }
else if($message == "NPL000107"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000107";
    }
else if($message == "NPL000058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000058";
    }
else if($message == "NPL000135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000135";
    }
else if($message == "NLP000447"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000447";
    }
else if($message == "NPL000071"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000071";
    }
else if($message == "NPL000135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000135";
    }
else if($message == "NPL000199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000199";
    }
else if($message == "NLP000447"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000447";
    }
else if($message == "NPL000059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000059";
    }
else if($message == "NLP000448"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000448";
    }
else if($message == "NPL000057"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000057";
    }
else if($message == "NPL000058"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000058";
    }
else if($message == "NPL000198"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000198";
    }
else if($message == "NPL000059"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000059";
    }
else if($message == "NPL000200"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000200";
    }
else if($message == "NPL000060"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000060";
    }
else if($message == "NPL000108"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000108";
    }
else if($message == "NPL000110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000110";
    }
else if($message == "NPL000163"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000163";
    }
else if($message == "NPL000109"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000109";
    }
else if($message == "NPL000111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000111";
    }
else if($message == "NPL000110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000110";
    }
else if($message == "NPL000112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000112";
    }
else if($message == "NPL000201"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000201";
    }
else if($message == "NPL000111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000111";
    }
else if($message == "NPL000191"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000191";
    }
else if($message == "NPL000112"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000112";
    }
else if($message == "NLP000448"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000448";
    }
else if($message == "NLP000449"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000449";
    }
else if($message == "NPL000284"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000284";
    }
else if($message == "NLP000450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000450";
    }
else if($message == "NLP000451"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000451";
    }
else if($message == "NLP000452"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000452";
    }
else if($message == "NPL000203"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000203";
    }
else if($message == "NPL000202"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000202";
    }
else if($message == "NPL000201"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000201";
    }
else if($message == "NPL000199"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000199";
    }
else if($message == "NLP000454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000454";
    }
else if($message == "NLP000455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000455";
    }
else if($message == "NLP000453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000453";
    }
else if($message == "NLP000413"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000413";
    }
else if($message == "NLP000454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000454";
    }
else if($message == "NLP000455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000455";
    }
else if($message == "NLP000456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000456";
    }
else if($message == "NPL000119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000119";
    }
else if($message == "NLP000018"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000018";
    }
else if($message == "NLP000033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000033";
    }
else if($message == "NLP000017"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000017";
    }
else if($message == "NPL000074"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000074";
    }
else if($message == "NLP000032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000032";
    }
else if($message == "NLP000040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000040";
    }
else if($message == "NLP000045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000045";
    }
else if($message == "NLP000468"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000468";
    }
else if($message == "NPL000120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000120";
    }
else if($message == "NPL000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000139";
    }
else if($message == "NLP000018"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000018";
    }
else if($message == "NLP000024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000024";
    }
else if($message == "NPL000117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000117";
    }
else if($message == "NPL000136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000136";
    }
else if($message == "NLP000017"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000017";
    }
else if($message == "NLP000019"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000019";
    }
else if($message == "NPL000155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000155";
    }
else if($message == "NPL000159"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000159";
    }
else if($message == "NLP000024"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000024";
    }
else if($message == "NLP000032"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000032";
    }
else if($message == "NPL000118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000118";
    }
else if($message == "NLP000033"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000033";
    }
else if($message == "NLP000040"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000040";
    }
else if($message == "NPL000126"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000126";
    }
else if($message == "NLP000045"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000045";
    }
else if($message == "NLP000298"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000298";
    }
else if($message == "NLP000461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000461";
    }
else if($message == "NPL000136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000136";
    }
else if($message == "NPL000155"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000155";
    }
else if($message == "NPL000126"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000126";
    }
else if($message == "NLP000457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000457";
    }
else if($message == "NLP000465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000465";
    }
else if($message == "NLP000467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000467";
    }
else if($message == "NLP000289"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000289";
    }
else if($message == "NPL000116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000116";
    }
else if($message == "NLP000466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000466";
    }
else if($message == "NLP000290"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000290";
    }
else if($message == "NPL000073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000073";
    }
else if($message == "NLP000469"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000469";
    }
else if($message == "NPL000116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000116";
    }
else if($message == "NPL000129"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000129";
    }
else if($message == "NLP000463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000463";
    }
else if($message == "NLP000464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000464";
    }
else if($message == "NPL000117"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000117";
    }
else if($message == "NLP000297"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000297";
    }
else if($message == "NPL000073"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000073";
    }
else if($message == "NPL000118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000118";
    }
else if($message == "NLP000298"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000298";
    }
else if($message == "NPL000119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000119";
    }
else if($message == "NPL000074"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000074";
    }
else if($message == "NLP000458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000458";
    }
else if($message == "NLP000457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000457";
    }
else if($message == "NLP000459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000459";
    }
else if($message == "NLP000458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000458";
    }
else if($message == "NLP000459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000459";
    }
else if($message == "NLP000460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000460";
    }
else if($message == "NLP000439"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000439";
    }
else if($message == "NLP000461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000461";
    }
else if($message == "NLP000462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000462";
    }
else if($message == "NLP000462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000462";
    }
else if($message == "NLP000463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000463";
    }
else if($message == "NLP000464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000464";
    }
else if($message == "NLP000465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000465";
    }
else if($message == "NLP000466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000466";
    }
else if($message == "NLP000467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000467";
    }
else if($message == "NLP000468"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000468";
    }
else if($message == "NLP000469"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NLP000469";
    }
else if($message == "NKI000111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000111";
    }
else if($message == "NKI000110"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000110";
    }
else if($message == "NKI000113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000113";
    }
else if($message == "NKI000111"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000111";
    }
else if($message == "NKI000515"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000515";
    }
else if($message == "NKI000113"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000113";
    }
else if($message == "NKI000115"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000115";
    }
else if($message == "NKI000311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000311";
    }
else if($message == "NKI000116"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000116";
    }
else if($message == "NKI000118"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000118";
    }
else if($message == "NKI000314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000314";
    }
else if($message == "NKI000119"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000119";
    }
else if($message == "NKI000473"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000473";
    }
else if($message == "NKI000120"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000120";
    }
else if($message == "NKI000122"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000122";
    }
else if($message == "NKI000121"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000121";
    }
else if($message == "NKI000330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000330";
    }
else if($message == "NKI000387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000387";
    }
else if($message == "NKI000457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000457";
    }
else if($message == "NKI000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000220";
    }
else if($message == "NKI000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000215";
    }
else if($message == "NKI000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000216";
    }
else if($message == "NKI000125"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000125";
    }
else if($message == "NKI000226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000226";
    }
else if($message == "NKI000431"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000431";
    }
else if($message == "NKI000432"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000432";
    }
else if($message == "NKI000306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000306";
    }
else if($message == "NKI000391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000391";
    }
else if($message == "NKI000221"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000221";
    }
else if($message == "NKI000222"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000222";
    }
else if($message == "NKI000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000139";
    }
else if($message == "NKI000486"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000486";
    }
else if($message == "NKI000556"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000556";
    }
else if($message == "NKI000223"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000223";
    }
else if($message == "NKI000224"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000224";
    }
else if($message == "NKI000433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000433";
    }
else if($message == "NKI000135"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000135";
    }
else if($message == "NKI000220"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000220";
    }
else if($message == "NKI000475"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000475";
    }
else if($message == "NKI000433"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000433";
    }
else if($message == "NKI000136"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000136";
    }
else if($message == "NKI000318"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000318";
    }
else if($message == "NKI000451"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000451";
    }
else if($message == "NKI000126"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000126";
    }
else if($message == "NKI000140"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000140";
    }
else if($message == "NKI000137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000137";
    }
else if($message == "NKI000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000138";
    }
else if($message == "NKI000137"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000137";
    }
else if($message == "NKI000138"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000138";
    }
else if($message == "NKI000139"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000139";
    }
else if($message == "NKI000140"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000140";
    }
else if($message == "NKI000214"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000214";
    }
else if($message == "NKI000427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000427";
    }
else if($message == "NKI000215"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000215";
    }
else if($message == "NKI000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000143";
    }
else if($message == "NKI000427"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000427";
    }
else if($message == "NKI000216"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000216";
    }
else if($message == "NKI000307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000307";
    }
else if($message == "NKI000434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000434";
    }
else if($message == "NKI000142"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000142";
    }
else if($message == "NKI000217"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000217";
    }
else if($message == "NKI000218"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000218";
    }
else if($message == "NKI000316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000316";
    }
else if($message == "NKI000219"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000219";
    }
else if($message == "NKI000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000144";
    }
else if($message == "NKI000225"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000225";
    }
else if($message == "NKI000226"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000226";
    }
else if($message == "NKI000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000145";
    }
else if($message == "NKI000143"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000143";
    }
else if($message == "NKI000460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000460";
    }
else if($message == "NKI000307"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000307";
    }
else if($message == "NKI000144"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000144";
    }
else if($message == "NKI000227"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000227";
    }
else if($message == "NKI000450"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000450";
    }
else if($message == "NKI000451"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000451";
    }
else if($message == "NKI000319"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000319";
    }
else if($message == "NKI000474"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000474";
    }
else if($message == "NKI000452"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000452";
    }
else if($message == "NKI000392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000392";
    }
else if($message == "NKI000314"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000314";
    }
else if($message == "NKI000313"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000313";
    }
else if($message == "NKI000311"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000311";
    }
else if($message == "NKI000318"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000318";
    }
else if($message == "NKI000388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000388";
    }
else if($message == "NKI000317"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000317";
    }
else if($message == "NKI000453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000453";
    }
else if($message == "NKI000316"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000316";
    }
else if($message == "NKI000315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000315";
    }
else if($message == "NKI000315"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000315";
    }
else if($message == "NKI000389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000389";
    }
else if($message == "NKI000453"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000453";
    }
else if($message == "NKI000454"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000454";
    }
else if($message == "NKI000310"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000310";
    }
else if($message == "NKI000455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000455";
    }
else if($message == "NKI000309"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000309";
    }
else if($message == "NKI000308"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000308";
    }
else if($message == "NKI000456"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000456";
    }
else if($message == "NKI000306"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000306";
    }
else if($message == "NKI000394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000394";
    }
else if($message == "NKI000145"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000145";
    }
else if($message == "NKI000455"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000455";
    }
else if($message == "NKI000457"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000457";
    }
else if($message == "NKI000305"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000305";
    }
else if($message == "NKI000458"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000458";
    }
else if($message == "NKI000459"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000459";
    }
else if($message == "NKI000386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000386";
    }
else if($message == "NKI000330"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000330";
    }
else if($message == "NKI000387"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000387";
    }
else if($message == "NKI000331"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000331";
    }
else if($message == "NKI000391"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000391";
    }
else if($message == "NKI000390"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000390";
    }
else if($message == "NKI000389"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000389";
    }
else if($message == "NKI000388"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000388";
    }
else if($message == "NKI000393"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000393";
    }
else if($message == "NKI000393"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000393";
    }
else if($message == "NKI000414"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000414";
    }
else if($message == "NKI000395"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000395";
    }
else if($message == "NKI000386"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000386";
    }
else if($message == "NKI000392"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000392";
    }
else if($message == "NKI000394"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000394";
    }
else if($message == "NKI000460"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000460";
    }
else if($message == "NKI000461"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000461";
    }
else if($message == "NKI000462"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000462";
    }
else if($message == "NKI000463"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000463";
    }
else if($message == "NKI000464"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000464";
    }
else if($message == "NKI000465"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000465";
    }
else if($message == "NKI000466"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000466";
    }
else if($message == "NKI000467"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000467";
    }
else if($message == "NKI000468"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000468";
    }
else if($message == "NKI000469"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000469";
    }
else if($message == "NKI000470"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000470";
    }
else if($message == "NKI000471"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000471";
    }
else if($message == "NKI000468"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000468";
    }
else if($message == "NKI000472"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000472";
    }
else if($message == "NKI000473"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000473";
    }
else if($message == "NKI000474"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000474";
    }
else if($message == "NKI000475"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000475";
    }
else if($message == "NKI000434"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000434";
    }
else if($message == "NKI000015"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000015";
    }
else if($message == "NKI000020"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000020";
    }
else if($message == "NKI000003"){
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000003";
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