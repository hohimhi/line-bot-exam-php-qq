﻿<?php
    $accessToken = "cTnKGPoV5We1pHUXDXJpRQGySzdPehWnp1DYJQwueVzwtOXONHFaKAs185kcpWV8T1Jivxv5xKrfWcGRyf9b1ARnLBYlMa4vuqntDdt4HC6pbgJgQ9XqzP52zyXefNnWbkdb0PJ1d7U2td3+qXivxwdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
   $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    
    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "UDN001187"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001187";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001264"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001264";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000013"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000013";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001206"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001206";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "NKI000001"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000001";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000421"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000421";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000428"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000428";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000430"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000430";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000091"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000091";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000113"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000113";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000092"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000092";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000114"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000114";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000131"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000131";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000170"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000170";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000175"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000175";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000218"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000218";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000039"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000039";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000021"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000021";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001207"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001207";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000429"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000429";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000534"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000534";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000371"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000371";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000022"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000022";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001206"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001206";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001207"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001207";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000015"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000015";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000016"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000016";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000044"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000044";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000248"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000248";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000278"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000278";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000024"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000024";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000093"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000093";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000262"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000262";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000277"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000277";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000373"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000373";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000025"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000025";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000227"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000227";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000026"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000026";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000018"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000018";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000027"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000027";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000087"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000087";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000508"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000508";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001615"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001615";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000012"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000012";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000025"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000025";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000215"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000215";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000028"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000028";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000398"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000398";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000223"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000223";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001304"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001304";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000029"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000029";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001303"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001303";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000071"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000071";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000075"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000075";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000210"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000210";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000985"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000985";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000030"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000030";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000028"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000028";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000194"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000194";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000031"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000031";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000251"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000251";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000523"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000523";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000032"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000032";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000944"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000944";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001936"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001936";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000033"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000033";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000217"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000217";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000034"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000034";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000035"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000035";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000021"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000021";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000036"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000036";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000254"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000254";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000037"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000037";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000026"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000026";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000038"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000038";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000086"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000086";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000039"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000039";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000237"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000237";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000260"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000260";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000756"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000756";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001199"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001199";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000040"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000040";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000290"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000290";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000943"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000943";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001919"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001919";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000041"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000041";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000042"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000042";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000141"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000141";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000043"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000043";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000205"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000205";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000044"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000044";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001078"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001078";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000559"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000559";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000560"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000560";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000560"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000560";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001455"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001455";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001129"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001129";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001128"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001128";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001109"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001109";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000565"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000565";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001208"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001208";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000573"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000573";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001127"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001127";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001094"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001094";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001142"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001142";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001058"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001058";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001070"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001070";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000691"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000691";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000693"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000693";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001058"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001058";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000693"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000693";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000656"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000656";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001075"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001075";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000735"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000735";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000735"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000735";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001844"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001844";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001845"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001845";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000694"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000694";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001449"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001449";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001679"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001679";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN00560"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN00560";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001114"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001114";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001686"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001686";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000695"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000695";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001074"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001074";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN00560"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN00560";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001114"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001114";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001075"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001075";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001096"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001096";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001687"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001687";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001076"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001076";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000593"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000593";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001077"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001077";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001078"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001078";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001080"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001080";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001079"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001079";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001081"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001081";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001080"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001080";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001083"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001083";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001081"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001081";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001082"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001082";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001082"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001082";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001083"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001083";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001084"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001084";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001084"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001084";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001085"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001085";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000602"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000602";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001085"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001085";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001086"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001086";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001086"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001086";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001168"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001168";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001087"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001087";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001087"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001087";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001088"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001088";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001438"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001438";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001089"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001089";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001088"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001088";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001090"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001090";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001089"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001089";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001091"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001091";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001092"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001092";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001357"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001357";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001357"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001357";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001678"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001678";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001093"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001093";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001095"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001095";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001094"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001094";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001095"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001095";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000593"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000593";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001077"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001077";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001108"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001108";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001849"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001849";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001096"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001096";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000705"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000705";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001097"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001097";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001098"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001098";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001360"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001360";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001100"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001100";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001099"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001099";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001100"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001100";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001101"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001101";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001135"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001135";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000708"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000708";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001102"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001102";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000785"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000785";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001103"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001103";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001104"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001104";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001104"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001104";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001106"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001106";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001105"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001105";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001105"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001105";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001107"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001107";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000602"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000602";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001106"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001106";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001107"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001107";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001108"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001108";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001110"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001110";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001109"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001109";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001110"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001110";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001111"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001111";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001093"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001093";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001112"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001112";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001113"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001113";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001115"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001115";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001116"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001116";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001679"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001679";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001455"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001455";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001680"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001680";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001456"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001456";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001461"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001461";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001461"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001461";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001454"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001454";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001454"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001454";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001681"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001681";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001682"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001682";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001690"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001690";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001683"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001683";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001684"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001684";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001685"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001685";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001611"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001611";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001686"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001686";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001687"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001687";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001688"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001688";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001689"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001689";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000436"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000436";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000553"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000553";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000045"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000045";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001027"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001027";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000056"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000056";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000046"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000046";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000366"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000366";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001101"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001101";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000047"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000047";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000049"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000049";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000053"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000053";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000057"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000057";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000048"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000048";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000787"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000787";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001683"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001683";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000049"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000049";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000059"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000059";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000062"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000062";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000475"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000475";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000556"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000556";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000790"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000790";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000992"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000992";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000993"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000993";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001027"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001027";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001113"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001113";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001127"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001127";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001269"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001269";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001681"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001681";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000003"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000003";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000004"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000004";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000048"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000048";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000437"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000437";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000051"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000051";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000046"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000046";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000047"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000047";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000787"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000787";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001682"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001682";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000052"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000052";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000052"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000052";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000054"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000054";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000055"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000055";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000058"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000058";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000502"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000502";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000791"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000791";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000995"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000995";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000996"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000996";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001644"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001644";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000053"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000053";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000441"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000441";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001128"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001128";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000054"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000054";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000060"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000060";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000055"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000055";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001112"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001112";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001684"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001684";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000056"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000056";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000061"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000061";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001685"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001685";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000057"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000057";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000058"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000058";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000059"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000059";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001074"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001074";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001680"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001680";
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "UDN000790"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000790";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000051"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000051";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000060"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000060";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000061"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000061";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000791"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000791";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000394"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000394";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000440"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000440";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000472"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000472";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000393"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000393";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000559"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000559";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001079"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001079";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001208"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001208";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001643"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001643";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000394"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000394";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000403"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000403";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000405"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000405";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000404"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000404";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001129"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001129";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001091"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001091";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001689"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001689";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000405"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000405";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000062"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000062";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001028"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001028";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000436"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000436";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000438"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000438";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000437"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000437";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001115"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001115";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001672"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001672";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000438"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000438";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000480"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000480";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000795"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000795";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001116"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001116";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000440"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000440";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001028"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001028";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001611"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001611";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000441"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000441";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000480"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000480";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001071"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001071";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001111"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001111";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000472"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000472";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000475"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000475";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000573"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000573";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000691"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000691";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001070"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001070";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000785"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000785";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000695"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000695";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000796"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000796";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001456"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001456";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001102"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001102";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000793"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000793";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001477"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001477";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001642"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001642";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001360"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001360";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001269"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001269";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000568"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000568";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001642"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001642";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001090"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001090";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001026"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001026";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000556"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000556";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000795"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000795";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000565"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000565";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001688"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001688";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001643"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001643";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001690"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001690";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000796"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000796";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000553"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000553";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001026"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001026";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001644"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001644";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001246"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001246";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001247"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001247";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001245"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001245";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001246"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001246";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001248"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001248";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001247"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001247";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001250"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001250";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001251"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001251";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001699"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001699";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001046"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001046";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001046"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001046";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001047"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001047";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001048"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001048";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000743"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000743";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000808"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000808";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001048"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001048";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001361"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001361";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001049"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001049";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001049"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001049";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001333"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001333";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001051"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001051";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001051"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001051";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001052"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001052";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001052"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001052";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001053"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001053";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000807"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000807";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000743"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000743";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001054"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001054";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001290"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001290";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000889"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000889";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000744"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000744";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000745"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000745";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001242"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001242";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001337"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001337";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001241"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001241";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000710"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000710";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000712"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000712";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000711"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000711";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000710"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000710";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000712"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000712";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000713"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000713";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000713"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000713";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001346"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001346";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001341"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001341";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001346"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001346";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001345"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001345";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001345"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001345";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001691"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001691";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001691"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001691";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001695"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001695";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001692"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001692";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001692"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001692";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001342"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001342";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000804"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000804";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001693"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001693";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001564"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001564";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001565"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001565";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001716"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001716";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001336"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001336";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001334"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001334";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001336"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001336";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001335"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001335";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001335"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001335";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001433"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001433";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001731"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001731";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001694"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001694";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001327"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001327";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001327"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001327";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001326"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001326";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001326"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001326";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001695"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001695";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001341"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001341";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001696"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001696";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001697"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001697";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001340"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001340";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001698"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001698";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001338"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001338";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001339"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001339";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001340"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001340";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001339"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001339";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001338"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001338";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001334"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001334";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001699"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001699";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001321"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001321";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001321"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001321";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001487"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001487";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001700"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001700";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001701"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001701";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001702"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001702";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001703"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001703";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001704"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001704";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001392"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001392";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001390"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001390";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001392"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001392";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001391"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001391";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001389"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001389";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001390"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001390";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001389"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001389";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001645"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001645";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001381"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001381";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001381"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001381";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001380"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001380";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001380"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001380";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001379"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001379";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001379"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001379";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001378"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001378";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001378"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001378";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001377"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001377";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001377"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001377";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001376"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001376";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001376"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001376";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001388"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001388";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001709"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001709";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001386"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001386";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001386"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001386";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001388"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001388";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001385"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001385";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001384"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001384";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001385"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001385";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001387"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001387";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001383"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001383";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001384"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001384";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001382"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001382";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001383"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001383";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001705"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001705";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001382"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001382";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001387"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001387";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001412"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001412";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001400"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001400";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001401"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001401";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001400"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001400";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001406"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001406";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001399"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001399";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001712"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001712";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001333"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001333";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001361"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001361";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001696"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001696";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001697"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001697";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001706"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001706";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001707"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001707";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001713"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001713";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001337"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001337";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001708"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001708";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001406"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001406";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001407"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001407";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001709"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001709";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001487"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001487";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001564"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001564";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001565"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001565";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001489"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001489";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001490"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001490";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001527"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001527";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001710"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001710";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001528"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001528";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001710"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001710";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001711"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001711";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001712"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001712";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001713"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001713";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001645"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001645";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001714"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001714";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001715"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001715";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001716"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001716";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001244"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001244";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000510"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000510";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000798"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000798";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001000"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001000";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001042"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001042";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001053"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001053";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001528"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001528";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001711"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001711";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000509"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000509";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000511"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000511";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000510"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000510";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001646"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001646";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000511"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000511";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000541"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000541";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000797"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000797";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001646"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001646";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000809"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000809";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001236"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001236";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001251"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001251";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000797"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000797";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000744"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000744";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001714"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001714";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000798"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000798";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001704"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001704";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001047"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001047";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001399"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001399";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001401"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001401";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000541"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000541";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000745"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000745";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001489"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001489";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001703"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001703";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001708"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001708";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000799"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000799";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001412"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001412";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001647"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001647";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000800"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000800";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000746"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000746";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001647"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001647";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001527"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001527";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000746"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000746";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000801"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000801";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001717"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001717";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000711"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000711";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001407"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001407";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001490"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001490";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001494"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001494";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000801"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000801";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001249"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001249";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001715"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001715";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001248"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001248";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "NKI000334"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000334";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001249"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001249";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000804"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000804";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001250"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001250";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001239"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001239";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001433"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001433";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001238"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001238";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001243"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001243";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000806"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000806";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001242"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001242";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000889"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000889";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000807"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000807";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001054"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001054";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001702"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001702";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000808"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000808";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001237"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001237";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000809"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000809";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001236"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001236";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001238"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001238";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001342"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001342";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001693"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001693";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001237"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001237";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001240"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001240";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001239"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001239";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001241"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001241";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001240"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001240";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000806"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000806";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001243"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001243";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001245"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001245";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001244"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001244";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001481"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001481";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001420"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001420";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001421"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001421";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001478"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001478";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001480"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001480";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001472"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001472";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001472"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001472";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001480"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001480";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001718"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001718";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001719"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001719";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001720"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001720";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001721"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001721";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001722"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001722";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001723"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001723";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001724"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001724";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001725"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001725";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001726"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001726";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001481"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001481";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001722"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001722";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000535"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000535";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001720"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001720";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000530"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000530";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000529"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000529";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001719"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001719";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001724"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001724";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000978"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000978";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000990"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000990";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001257"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001257";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000530"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000530";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001473"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001473";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001721"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001721";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000529"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000529";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001369"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001369";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000549"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000549";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001288"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001288";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001369"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001369";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001255"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001255";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001405"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001405";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000813"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000813";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001723"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001723";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000584"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000584";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000584"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000584";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000549"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000549";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001289"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001289";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001289"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001289";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001403"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001403";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000814"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000814";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001288"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001288";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001513"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001513";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001324"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001324";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001395"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001395";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001332"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001332";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001395"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001395";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001727"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001727";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001394"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001394";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001396"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001396";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001394"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001394";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001324"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001324";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001728"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001728";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001408"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001408";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001482"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001482";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001332"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001332";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001403"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001403";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001424"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001424";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001478"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001478";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001371"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001371";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001404"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001404";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001372"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001372";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001372"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001372";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001414"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001414";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001404"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001404";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001405"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001405";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001422"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001422";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001473"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001473";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001422"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001422";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001424"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001424";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "NPL000224"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000224";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001513"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001513";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001726"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001726";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "NPL000224"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NPL000224";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001728"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001728";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001420"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001420";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001423"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001423";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001423"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001423";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000892"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000892";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001556"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001556";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001735"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001735";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000816"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000816";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001001"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001001";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "NKI000264"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000264";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000892"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000892";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001000"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001000";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001034"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001034";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000747"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000747";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000953"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000953";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000816"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000816";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000954"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000954";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001733"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001733";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000817"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000817";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000817"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000817";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001483"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001483";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001484"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001484";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001485"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001485";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001034"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001034";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001307"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001307";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001035"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001035";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000894"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000894";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000953"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000953";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001302"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001302";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000954"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000954";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001037"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001037";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001306"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001306";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001036"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001036";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001037"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001037";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001729"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001729";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001730"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001730";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001729"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001729";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001732"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001732";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001731"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001731";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001732"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001732";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001733"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001733";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001306"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001306";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001305"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001305";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001515"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001515";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001516"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001516";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001734"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001734";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001308"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001308";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001308"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001308";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001552"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001552";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001307"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001307";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001556"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001556";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001484"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001484";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001483"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001483";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001555"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001555";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001554"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001554";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001555"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001555";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001485"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001485";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001554"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001554";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001553"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001553";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001552"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001552";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001553"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001553";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001735"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001735";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000460"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000460";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000614"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000614";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001751"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001751";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000459"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000459";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000461"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000461";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000462"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000462";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000576"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000576";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000819"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000819";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000997"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000997";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001056"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001056";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001495"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001495";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000460"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000460";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001649"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001649";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000461"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000461";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000462"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000462";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000818"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000818";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000819"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000819";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000716"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000716";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001547"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001547";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001741"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001741";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001648"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001648";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001492"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001492";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001649"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001649";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000576"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000576";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000818"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000818";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001057"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001057";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000716"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000716";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001002"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001002";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001057"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001057";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001493"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001493";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001002"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001002";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001493"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001493";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001055"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001055";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001056"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001056";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000896"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000896";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001548"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001548";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001740"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001740";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000955"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000955";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001738"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001738";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000896"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000896";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001496"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001496";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000955"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000955";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001055"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001055";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001736"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001736";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001492"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001492";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001494"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001494";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001567"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001567";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001737"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001737";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001496"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001496";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001567"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001567";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001495"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001495";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001547"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001547";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001738"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001738";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001739"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001739";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001739"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001739";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001740"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001740";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001548"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001548";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001741"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001741";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000898"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000898";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001746"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001746";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000821"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000821";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001402"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001402";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001748"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001748";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000513"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000513";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000509"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000509";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000513"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000513";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000586"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000586";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000821"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000821";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001398"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001398";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000512"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000512";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000823"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000823";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001294"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001294";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001650"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001650";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001397"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001397";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000897"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000897";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001362"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001362";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001402"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001402";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001362"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001362";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000956"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000956";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001391"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001391";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000822"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000822";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000822"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000822";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000824"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000824";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000823"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000823";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001742"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001742";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000956"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000956";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001743"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001743";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001742"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001742";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001488"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001488";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001743"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001743";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001744"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001744";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001486"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001486";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001651"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001651";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001745"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001745";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001744"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001744";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001651"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001651";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001745"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001745";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000824"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000824";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001294"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001294";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001747"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001747";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001749"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001749";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001398"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001398";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000897"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000897";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000898"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000898";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001746"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001746";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001488"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001488";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001486"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001486";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001747"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001747";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001748"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001748";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001749"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001749";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000717"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000717";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000899"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000899";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001544"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001544";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001632"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001632";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000825"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000825";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000899"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000899";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001632"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001632";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000900"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000900";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000631"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000631";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001457"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001457";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001752"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001752";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001633"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001633";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000901"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000901";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001750"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001750";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000748"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000748";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000829"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000829";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001041"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001041";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000609"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000609";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000609"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000609";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000610"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000610";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000774"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000774";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000611"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000611";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000612"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000612";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000638"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000638";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000774"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000774";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000775"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000775";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000632"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000632";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000829"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000829";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001003"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001003";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000610"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000610";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000776"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000776";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000777"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000777";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000613"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000613";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000614"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000614";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001022"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001022";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001204"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001204";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000615"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000615";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000634"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000634";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000616"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000616";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000616"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000616";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000636"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000636";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000617"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000617";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000617"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000617";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000619"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000619";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000618"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000618";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000620"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000620";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000622"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000622";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000619"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000619";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000633"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000633";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000620"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000620";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000623"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000623";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000621"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000621";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000621"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000621";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000622"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000622";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001004"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001004";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001040"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001040";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000623"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000623";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000749"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000749";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001004"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001004";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000778"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000778";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000778"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000778";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000779"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000779";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000779"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000779";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000780"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000780";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000781"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000781";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001005"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001005";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001751"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001751";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000781"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000781";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000624"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000624";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001759"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001759";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000625"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000625";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000626"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000626";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000627"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000627";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001311"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001311";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000628"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000628";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000629"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000629";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000628"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000628";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000629"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000629";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000630"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000630";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000630"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000630";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000631"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000631";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000632"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000632";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001041"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001041";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000633"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000633";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000634"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000634";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000637"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000637";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000635"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000635";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000615"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000615";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000636"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000636";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000782"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000782";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000783"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000783";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000748"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000748";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000749"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000749";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001040"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001040";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000750"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000750";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000618"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000618";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000637"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000637";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000638"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000638";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000639"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000639";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001005"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001005";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000640"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000640";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000641"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000641";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001752"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001752";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001368"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001368";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001366"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001366";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001544"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001544";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001457"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001457";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001753"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001753";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001754"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001754";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001755"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001755";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001446"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001446";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001756"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001756";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001758"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001758";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001757"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001757";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001442"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001442";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001758"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001758";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001759"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001759";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000064"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000064";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000065"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000065";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000067"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000067";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000414"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000414";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000466"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000466";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000998"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000998";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001442"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001442";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000063"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000063";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000413"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000413";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000994"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000994";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000995"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000995";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000069"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000069";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001368"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001368";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001755"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001755";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000064"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000064";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001753"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001753";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000065"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000065";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000070"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000070";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000512"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000512";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000582"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000582";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000639"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000639";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000641"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000641";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000836"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000836";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001209"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001209";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000066"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000066";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001260"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001260";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000562"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000562";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000563"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000563";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001038"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001038";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001754"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001754";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000067"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000067";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000514"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000514";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000516"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000516";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000903"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000903";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001260"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001260";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000068"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000068";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000635"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000635";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001366"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001366";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000069"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000069";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000070"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000070";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000066"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000066";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000446"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000446";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000395"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000395";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000555"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000555";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001118"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001118";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000415"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000415";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000439"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000439";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000486"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000486";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000624"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000624";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000640"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000640";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001195"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001195";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000412"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000412";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000900"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000900";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001905"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001905";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000439"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000439";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000459"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000459";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000485"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000485";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000445"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000445";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000445"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000445";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000489"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000489";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000446"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000446";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001185"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001185";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000467"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000467";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000517"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000517";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000466"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000466";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000467"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000467";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000485"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000485";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000625"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000625";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000958"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000958";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001033"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001033";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001122"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001122";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000486"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000486";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000499"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000499";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000489"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000489";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000515"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000515";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000782"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000782";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001757"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001757";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000514"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000514";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001397"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001397";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000515"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000515";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000586"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000586";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000837"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000837";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000499"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000499";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000517"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000517";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000574"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000574";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000825"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000825";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001032"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001032";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000516"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000516";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000626"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000626";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000957"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000957";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001204"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001204";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001254"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001254";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000903"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000903";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001032"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001032";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000833"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000833";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000901"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000901";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000957"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000957";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001031"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001031";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000545"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000545";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000578"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000578";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001030"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001030";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001123"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001123";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000627"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000627";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001003"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001003";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001033"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001033";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000958"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000958";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001122"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001122";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001209"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001209";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000558"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000558";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001446"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001446";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001038"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001038";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001031"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001031";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000833"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000833";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000611"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000611";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001750"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001750";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000545"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000545";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000750"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000750";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001120"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001120";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000555"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000555";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000562"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000562";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000613"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000613";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000777"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000777";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000558"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000558";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000563"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000563";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000776"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000776";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000783"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000783";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000834"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000834";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001652"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001652";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000834"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000834";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001030"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001030";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001756"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001756";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001118"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001118";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000612"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000612";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000836"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000836";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000717"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000717";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000574"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000574";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000775"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000775";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000578"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000578";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000582"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000582";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001184"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001184";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000837"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000837";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001184"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001184";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000780"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000780";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001120"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001120";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001610"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001610";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001760"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001760";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001761"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001761";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000019"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000019";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001760"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001760";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001763"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001763";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001765"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001765";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000071"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000071";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000468"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000468";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000072"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000072";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000074"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000074";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000073"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000073";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000548"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000548";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000074"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000074";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000075"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000075";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000431"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000431";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000527"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000527";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000561"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000561";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001767"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001767";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000019"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000019";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000426"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000426";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000431"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000431";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000432"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000432";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001610"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001610";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000426"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000426";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000642"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000642";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001039"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001039";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001189"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001189";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001762"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001762";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000432"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000432";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001766"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001766";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000468"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000468";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000572"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000572";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001653"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001653";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000469"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000469";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000527"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000527";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000546"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000546";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000720"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000720";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001125"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001125";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001276"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001276";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001039"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001039";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001068"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001068";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000959"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000959";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001186"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001186";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000548"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000548";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000550"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000550";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000546"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000546";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000663"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000663";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001761"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001761";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001764"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001764";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000550"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000550";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000561"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000561";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000643"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000643";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001279"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001279";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001125"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001125";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000843"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000843";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000840"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000840";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000719"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000719";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000572"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000572";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000907"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000907";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001189"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001189";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001653"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001653";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000719"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000719";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001068"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001068";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000720"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000720";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000661"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000661";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000662"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000662";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001634"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001634";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000662"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000662";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000907"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000907";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000840"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000840";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000959"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000959";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000843"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000843";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000664"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000664";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000663"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000663";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001277"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001277";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000664"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000664";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001280"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001280";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000642"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000642";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000643"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000643";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001279"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001279";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001278"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001278";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001276"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001276";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001277"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001277";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001278"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001278";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001280"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001280";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001762"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001762";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001763"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001763";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001764"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001764";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001445"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001445";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001765"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001765";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001766"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001766";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001767"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001767";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001153"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001153";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001533"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001533";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001152"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001152";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001153"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001153";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001622"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001622";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001623"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001623";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001768"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001768";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001570"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001570";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001621"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001621";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001623"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001623";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001155"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001155";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001156"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001156";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001770"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001770";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001162"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001162";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001157"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001157";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001156"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001156";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001768"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001768";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001622"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001622";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001769"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001769";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001770"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001770";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001771"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001771";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000077"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000077";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001624"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001624";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000076"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000076";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000078"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000078";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000382"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000382";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000667"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000667";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001117"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001117";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000077"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000077";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000985"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000985";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001192"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001192";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000078"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000078";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000536"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000536";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000846"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000846";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000381"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000381";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000381"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000381";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000382"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000382";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001160"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001160";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001117"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001117";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000536"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000536";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000668"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000668";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000909"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000909";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000667"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000667";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000968"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000968";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001580"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001580";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000668"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000668";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001624"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001624";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001617"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001617";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001630"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001630";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000909"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000909";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000846"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000846";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001158"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001158";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001618"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001618";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001159"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001159";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001625"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001625";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001498"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001498";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001498"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001498";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001011"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001011";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001012"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001012";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001580"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001580";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001617"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001617";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001630"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001630";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001014"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001014";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001570"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001570";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001151"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001151";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001154"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001154";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001050"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001050";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001150"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001150";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001146"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001146";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001146"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001146";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001159"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001159";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001629"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001629";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001147"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001147";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001629"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001629";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001616"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001616";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001618"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001618";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001158"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001158";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001147"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001147";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001161"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001161";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001148"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001148";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001162"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001162";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001161"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001161";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001148"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001148";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001149"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001149";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001619"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001619";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001160"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001160";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001050"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001050";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001150"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001150";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001771"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001771";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001149"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001149";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001620"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001620";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001619"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001619";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001621"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001621";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001620"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001620";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001479"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001479";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001479"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001479";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001014"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001014";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001154"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001154";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001152"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001152";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001151"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001151";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001155"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001155";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001157"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001157";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000080"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000080";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000081"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000081";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001059"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001059";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001164"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001164";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001171"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001171";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001181"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001181";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001613"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001613";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001654"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001654";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001774"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001774";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000020"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000020";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000447"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000447";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001182"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001182";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001262"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001262";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000080"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000080";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000081"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000081";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001180"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001180";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001775"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001775";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001262"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001262";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000912"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000912";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001654"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001654";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000575"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000575";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001059"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001059";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000721"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000721";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000575"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000575";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001060"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001060";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000722"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000722";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001060"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001060";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001174"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001174";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000721"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000721";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001061"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001061";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001023"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001023";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001061"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001061";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001170"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001170";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000722"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000722";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000751"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000751";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001023"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001023";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000912"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000912";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000913"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000913";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000751"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000751";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001183"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001183";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000913"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000913";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001166"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001166";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001773"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001773";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001163"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001163";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001163"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001163";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001164"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001164";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001165"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001165";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001165"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001165";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001166"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001166";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001139"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001139";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001167"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001167";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001174"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001174";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001169"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001169";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001168"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001168";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001169"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001169";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001076"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001076";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001170"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001170";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001175"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001175";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000673"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000673";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001177"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001177";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001777"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001777";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001176"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001176";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001776"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001776";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001177"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001177";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000673"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000673";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001171"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001171";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001167"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001167";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001176"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001176";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001172"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001172";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001172"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001172";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001178"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001178";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001178"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001178";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001179"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001179";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001179"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001179";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001180"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001180";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001181"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001181";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000918"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000918";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001173"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001173";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000918"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000918";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001173"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001173";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001182"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001182";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001175"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001175";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001183"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001183";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001772"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001772";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001773"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001773";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001774"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001774";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001775"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001775";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001776"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001776";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001777"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001777";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001613"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001613";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001374"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001374";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001365"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001365";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001409"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001409";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001409"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001409";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001531"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001531";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001778"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001778";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001375"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001375";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001778"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001778";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001413"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001413";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001531"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001531";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001375"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001375";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001413"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001413";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001364"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001364";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001364"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001364";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001530"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001530";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001530"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001530";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001781"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001781";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001373"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001373";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001411"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001411";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001411"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001411";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001532"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001532";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001235"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001235";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001562"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001562";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001230"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001230";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001374"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001374";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001410"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001410";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001365"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001365";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001410"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001410";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001561"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001561";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001786"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001786";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001789"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001789";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001563"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001563";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001460"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001460";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001586"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001586";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001560"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001560";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001443"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001443";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001779"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001779";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001559"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001559";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001532"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001532";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001533"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001533";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001538"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001538";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001538"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001538";
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "UDN001780"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001780";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001781"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001781";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001549"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001549";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001585"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001585";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001790"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001790";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001782"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001782";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001585"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001585";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001522"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001522";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001783"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001783";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001460"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001460";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001586"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001586";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001551"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001551";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001534"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001534";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001604"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001604";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001536"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001536";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001535"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001535";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001536"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001536";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001546"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001546";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001534"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001534";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001784"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001784";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001626"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001626";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001546"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001546";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001785"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001785";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001459"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001459";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001626"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001626";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001550"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001550";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001459"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001459";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001549"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001549";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001550"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001550";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001537"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001537";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001537"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001537";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001535"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001535";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001447"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001447";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001786"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001786";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001605"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001605";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001523"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001523";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001373"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001373";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001787"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001787";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001788"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001788";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001789"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001789";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001790"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001790";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001791"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001791";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000407"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000407";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000474"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000474";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001226"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001226";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000406"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000406";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000981"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000981";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000408"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000408";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001551"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001551";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001560"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001560";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000407"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000407";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000465"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000465";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000753"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000753";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000965"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000965";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000408"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000408";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000964"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000964";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000966"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000966";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001225"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001225";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001791"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001791";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000419"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000419";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001793"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001793";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000465"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000465";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000481"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000481";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000970"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000970";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001788"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001788";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000470"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000470";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000490"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000490";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000481"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000481";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001231"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001231";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000490"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000490";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001523"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001523";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000964"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000964";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000557"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000557";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001604"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001604";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001121"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001121";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001627"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001627";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001635"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001635";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000679"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000679";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000723"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000723";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001067"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001067";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001188"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001188";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001067"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001067";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001228"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001228";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000723"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000723";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000752"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000752";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001230"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001230";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000965"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000965";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001227"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001227";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000753"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000753";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000966"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000966";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001219"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001219";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001229"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001229";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001213"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001213";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001213"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001213";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001214"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001214";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001045"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001045";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001017"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001017";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001215"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001215";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000968"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000968";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000969"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000969";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001045"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001045";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001215"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001215";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001216"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001216";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001217"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001217";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001418"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001418";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001627"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001627";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001216"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001216";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001219"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001219";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001222"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001222";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000679"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000679";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001559"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001559";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001220"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001220";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001221"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001221";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001220"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001220";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001221"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001221";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001222"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001222";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001605"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001605";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001223"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001223";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001223"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001223";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001224"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001224";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001226"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001226";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001227"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001227";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000969"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000969";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001228"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001228";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001229"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001229";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001224"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001224";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001225"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001225";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001235"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001235";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001780"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001780";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001234"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001234";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001232"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001232";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001231"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001231";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001233"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001233";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001232"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001232";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001234"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001234";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001443"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001443";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001779"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001779";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001233"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001233";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000970"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000970";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001522"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001522";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001782"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001782";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000923"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000923";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000923"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000923";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001792"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001792";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001792"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001792";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001793"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001793";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001563"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001563";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001562"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001562";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001794"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001794";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001561"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001561";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000504"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000504";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000551"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000551";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001190"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001190";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001656"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001656";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000503"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000503";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000754"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000754";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000505"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000505";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000519"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000519";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000518"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000518";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000505"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000505";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000504"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000504";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001821"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001821";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001847"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001847";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000519"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000519";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001815"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001815";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001655"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001655";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001796"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001796";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001807"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001807";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000581"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000581";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001256"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001256";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001818"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001818";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001656"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001656";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000547"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000547";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001190"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001190";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001800"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001800";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000972"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000972";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000547"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000547";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001799"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001799";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000551"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000551";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000581"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000581";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001816"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001816";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000754"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000754";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000973"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000973";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000972"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000972";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000973"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000973";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001349"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001349";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001351"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001351";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001795"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001795";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001355"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001355";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001348"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001348";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001350"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001350";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001795"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001795";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001350"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001350";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001349"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001349";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001348"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001348";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001796"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001796";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001356"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001356";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001797"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001797";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001356"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001356";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001797"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001797";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001809"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001809";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001810"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001810";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001347"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001347";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001798"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001798";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001803"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001803";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001799"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001799";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001798"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001798";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001800"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001800";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001805"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001805";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001351"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001351";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001802"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001802";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001801"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001801";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001802"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001802";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001804"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001804";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001803"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001803";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001804"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001804";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001805"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001805";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001806"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001806";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001808"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001808";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001809"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001809";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001811"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001811";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001810"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001810";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001812"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001812";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001811"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001811";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001814"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001814";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001812"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001812";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001813"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001813";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001813"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001813";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001814"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001814";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001347"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001347";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001815"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001815";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001816"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001816";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001817"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001817";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001817"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001817";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001818"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001818";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001820"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001820";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001821"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001821";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000814"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000814";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000978"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000978";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001575"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001575";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000977"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000977";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001331"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001331";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001514"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001514";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001325"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001325";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001325"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001325";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001408"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001408";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001822"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001822";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001330"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001330";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001330"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001330";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001370"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001370";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001836"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001836";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001823"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001823";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001827"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001827";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001329"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001329";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001329"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001329";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001825"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001825";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001824"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001824";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001328"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001328";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001825"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001825";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001396"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001396";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001833"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001833";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001328"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001328";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001831"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001831";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001826"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001826";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001331"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001331";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001827"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001827";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001370"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001370";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001575"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001575";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001574"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001574";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001578"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001578";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001578"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001578";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001576"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001576";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001573"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001573";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001577"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001577";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001834"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001834";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001573"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001573";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001829"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001829";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001828"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001828";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001577"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001577";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001829"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001829";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001828"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001828";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001835"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001835";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001830"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001830";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001831"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001831";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001576"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001576";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001832"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001832";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001514"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001514";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001833"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001833";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001440"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001440";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001440"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001440";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001574"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001574";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001725"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001725";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001482"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001482";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001834"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001834";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001835"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001835";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001836"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001836";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001838"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001838";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000768"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000768";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000924"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000924";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000579"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000579";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000765"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000765";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001124"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001124";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000996"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000996";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000771"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000771";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000974"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000974";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001124"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001124";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001143"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001143";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000764"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000764";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001636"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001636";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001636"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001636";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001657"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001657";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001658"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001658";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000769"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000769";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000579"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000579";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000764"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000764";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000765"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000765";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001678"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001678";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000766"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000766";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000766"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000766";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000772"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000772";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000767"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000767";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000770"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000770";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000924"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000924";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000683"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000683";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000768"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000768";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000683"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000683";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000769"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000769";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000974"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000974";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000767"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000767";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000770"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000770";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000771"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000771";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001453"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001453";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000772"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000772";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001837"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001837";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001453"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001453";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001838"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001838";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001841"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001841";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001843"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001843";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001839"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001839";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000975"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000975";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001631"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001631";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001659"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001659";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001842"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001842";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000991"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000991";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000992"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000992";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001840"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001840";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001659"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001659";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000975"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000975";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001072"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001072";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000925"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000925";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001631"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001631";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001268"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001268";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000925"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000925";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001098"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001098";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001458"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001458";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001545"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001545";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001268"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001268";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000564"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000564";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001072"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001072";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001071"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001071";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001660"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001660";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001607"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001607";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000564"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000564";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001840"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001840";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000684"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000684";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000684"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000684";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001139"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001139";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001841"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001841";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001839"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001839";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001842"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001842";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001458"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001458";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001545"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001545";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001843"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001843";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001844"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001844";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001845"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001845";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001607"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001607";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000521"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000521";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001315"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001315";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001439"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001439";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000522"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000522";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000503"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000503";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000520"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000520";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000522"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000522";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000580"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000580";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000502"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000502";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000997"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000997";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001314"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001314";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001510"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001510";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000520"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000520";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000926"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000926";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001526"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001526";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000521"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000521";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001317"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001317";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001851"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001851";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000531"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000531";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001138"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001138";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001436"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001436";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001437"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001437";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001661"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001661";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000544"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000544";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001850"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001850";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001210"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001210";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000544"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000544";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000580"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000580";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001191"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001191";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000926"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000926";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001137"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001137";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001854"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001854";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001024"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001024";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000708"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000708";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001135"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001135";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001136"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001136";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000927"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000927";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001136"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001136";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001137"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001137";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000927"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000927";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001138"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001138";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001355"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001355";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001354"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001354";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001354"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001354";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001352"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001352";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001352"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001352";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001848"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001848";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001353"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001353";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001353"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001353";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001319"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001319";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001316"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001316";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001315"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001315";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001855"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001855";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001318"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001318";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001318"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001318";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001319"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001319";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001853"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001853";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001317"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001317";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001316"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001316";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001314"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001314";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001846"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001846";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001847"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001847";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001848"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001848";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001509"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001509";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001849"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001849";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001313"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001313";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001439"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001439";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001524"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001524";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001524"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001524";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001837"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001837";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001526"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001526";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001850"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001850";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001438"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001438";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001851"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001851";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001437"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001437";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001852"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001852";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001509"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001509";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001856"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001856";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001436"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001436";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001510"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001510";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001853"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001853";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001511"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001511";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001512"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001512";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001511"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001511";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001512"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001512";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001854"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001854";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001855"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001855";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001856"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001856";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001858"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001858";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001862"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001862";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001863"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001863";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001864"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001864";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000998"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000998";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001293"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001293";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001662"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001662";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001292"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001292";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001291"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001291";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001861"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001861";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001292"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001292";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001290"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001290";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001291"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001291";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001293"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001293";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001310"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001310";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001593"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001593";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001595"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001595";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001311"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001311";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001310"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001310";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001857"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001857";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001858"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001858";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001859"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001859";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001857"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001857";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001859"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001859";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001860"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001860";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001568"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001568";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001568"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001568";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001861"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001861";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001600"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001600";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001594"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001594";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001594"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001594";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001593"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001593";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001597"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001597";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001595"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001595";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001600"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001600";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001862"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001862";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001863"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001863";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001864"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001864";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001305"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001305";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001450"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001450";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001427"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001427";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001363"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001363";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001432"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001432";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001516"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001516";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001466"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001466";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001466"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001466";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001463"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001463";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001515"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001515";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001566"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001566";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001865"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001865";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001566"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001566";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001865"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001865";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001583"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001583";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001558"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001558";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001581"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001581";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001582"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001582";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001583"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001583";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001558"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001558";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001581"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001581";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001543"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001543";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001541"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001541";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001543"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001543";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001541"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001541";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001542"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001542";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001540"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001540";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001866"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001866";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001467"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001467";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001867"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001867";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001598"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001598";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001873"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001873";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001521"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001521";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001603"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001603";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001520"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001520";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001599"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001599";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001599"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001599";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001603"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001603";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001868"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001868";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001589"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001589";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001589"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001589";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001587"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001587";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001588"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001588";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001939"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001939";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001519"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001519";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001596"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001596";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001590"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001590";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001869"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001869";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001590"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001590";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001591"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001591";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001592"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001592";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001596"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001596";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001518"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001518";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001557"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001557";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001462"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001462";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001465"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001465";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001462"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001462";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001464"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001464";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001444"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001444";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001539"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001539";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001539"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001539";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001450"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001450";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001601"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001601";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001870"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001870";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001601"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001601";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001871"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001871";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001598"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001598";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001602"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001602";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001872"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001872";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001880"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001880";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001873"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001873";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001874"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001874";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001875"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001875";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001876"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001876";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001878"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001878";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001877"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001877";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001878"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001878";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001877"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001877";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001879"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001879";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001880"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001880";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001663"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001663";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000456"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000456";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001875"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001875";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000455"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000455";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001001"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001001";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001042"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001042";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000479"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000479";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001874"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001874";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000456"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000456";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001592"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001592";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000457"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000457";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001884"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001884";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000479"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000479";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000539"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000539";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001431"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001431";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001664"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001664";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000539"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000539";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000543"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000543";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001665"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001665";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001637"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001637";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001638"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001638";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001885"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001885";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001665"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001665";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001638"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001638";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000928"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000928";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000929"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000929";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001883"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001883";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001893"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001893";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001043"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001043";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000928"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000928";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001602"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001602";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000929"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000929";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001517"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001517";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001300"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001300";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001295"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001295";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001036"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001036";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000930"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000930";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001296"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001296";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001298"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001298";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001299"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001299";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001322"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001322";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000685"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000685";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000930"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000930";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001296"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001296";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001367"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001367";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001297"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001297";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000931"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000931";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000932"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000932";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001363"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001363";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001298"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001298";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000931"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000931";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001297"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001297";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001299"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001299";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000685"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000685";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001518"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001518";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001300"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001300";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000932"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000932";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001587"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001587";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001868"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001868";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001301"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001301";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001463"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001463";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001302"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001302";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001434"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001434";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001606"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001606";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001879"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001879";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001881"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001881";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001430"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001430";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001876"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001876";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001882"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001882";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001520"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001520";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001886"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001886";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001887"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001887";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001883"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001883";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001881"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001881";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001884"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001884";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001425"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001425";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001882"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001882";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001885"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001885";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001521"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001521";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001886"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001886";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001444"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001444";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001887"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001887";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001888"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001888";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001529"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001529";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001888"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001888";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001889"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001889";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001890"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001890";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001322"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001322";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001606"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001606";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001891"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001891";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001465"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001465";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001540"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001540";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001557"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001557";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001367"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001367";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001309"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001309";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001866"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001866";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001429"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001429";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001429"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001429";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001431"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001431";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001467"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001467";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001430"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001430";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001425"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001425";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001435"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001435";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001517"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001517";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001435"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001435";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001426"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001426";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001519"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001519";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001892"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001892";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "NKI000385"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000385";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "NKI000555"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=NKI000555";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001426"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001426";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001663"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001663";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001893"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001893";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001542"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001542";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001896"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001896";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001434"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001434";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001309"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001309";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001894"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001894";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001464"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001464";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001584"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001584";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001584"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001584";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001895"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001895";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001582"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001582";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001896"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001896";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001591"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001591";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001432"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001432";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000933"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000933";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000994"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000994";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001639"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001639";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000993"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000993";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001899"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001899";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000933"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000933";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000934"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000934";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001022"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001022";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001639"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001639";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001145"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001145";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000934"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000934";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000569"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000569";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000705"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000705";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001097"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001097";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001144"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001144";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001126"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001126";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001898"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001898";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000569"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000569";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001065"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001065";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001901"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001901";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000567"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000567";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000567"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000567";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000568"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000568";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001145"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001145";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000935"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000935";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000935"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000935";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001897"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001897";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001065"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001065";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000725"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000725";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000724"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000724";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000773"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000773";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001609"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001609";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000725"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000725";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001134"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001134";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001126"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001126";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000773"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000773";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001900"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001900";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001134"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001134";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001897"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001897";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001475"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001475";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001476"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001476";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001898"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001898";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001477"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001477";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001899"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001899";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001476"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001476";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001475"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001475";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001900"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001900";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001609"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001609";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001901"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001901";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000552"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000552";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000082"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000082";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000250"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000250";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000258"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000258";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001912"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001912";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000083"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000083";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000037"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000037";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000084"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000084";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000491"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000491";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000085"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000085";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000443"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000443";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000086"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000086";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000087"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000087";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000380"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000380";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000088"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000088";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000115"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000115";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000241"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000241";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000089"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000089";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001930"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001930";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000090"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000090";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000090"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000090";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000091"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000091";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000092"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000092";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000206"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000206";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000249"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000249";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000878"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000878";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000879"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000879";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000950"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000950";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001614"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001614";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001910"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001910";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001931"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001931";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000093"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000093";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000252"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000252";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001196"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001196";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001934"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001934";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000094"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000094";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000020"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000020";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000043"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000043";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000153"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000153";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000181"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000181";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000193"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000193";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000430"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000430";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000434"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000434";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000422"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000422";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000423"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000423";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001614"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001614";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000097"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000097";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000096"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000096";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000098"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000098";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000097"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000097";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000099"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000099";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000098"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000098";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000022"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000022";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000099"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000099";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000104"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000104";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000100"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000100";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000587"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000587";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000101"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000101";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000101"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000101";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000102"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000102";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000102"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000102";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001666"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001666";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000103"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000103";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000103"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000103";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000247"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000247";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001911"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001911";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000104"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000104";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000079"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000079";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000100"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000100";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000106"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000106";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000164"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000164";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000165"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000165";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000191"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000191";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000232"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000232";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000377"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000377";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000422"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000422";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000428"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000428";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000429"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000429";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000420"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000420";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000107"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000107";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000106"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000106";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000108"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000108";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000585"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000585";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000107"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000107";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000108"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000108";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000498"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000498";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000109"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000109";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000242"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000242";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000496"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000496";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000110"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000110";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000030"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000030";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000425"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000425";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000991"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000991";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001283"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001283";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000005"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000005";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000006"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000006";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000424"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000424";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000032"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000032";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000174"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000174";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000220"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000220";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000271"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000271";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000275"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000275";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000155"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000155";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000112"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000112";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000244"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000244";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000113"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000113";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000184"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000184";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000114"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000114";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000115"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000115";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001274"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001274";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000116"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000116";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000117"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000117";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000121"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000121";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000122"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000122";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000118"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000118";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000587"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000587";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000124"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000124";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001641"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001641";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000119"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000119";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000119"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000119";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000120"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000120";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000120"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000120";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000409"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000409";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000121"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000121";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000117"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000117";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000145"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000145";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000375"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000375";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000122"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000122";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000130"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000130";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000161"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000161";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000433"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000433";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000123"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000123";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000024"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000024";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000124"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000124";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000125"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000125";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000010"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000010";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000011"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000011";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000127"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000127";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000197"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000197";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000279"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000279";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000280"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000280";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000532"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000532";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000123"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000123";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000180"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000180";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000127"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000127";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000233"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000233";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000128"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000128";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001902"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001902";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000488"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000488";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000152"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000152";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001258"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001258";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000130"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000130";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000136"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000136";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000131"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000131";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000005"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000005";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000008"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000008";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000088"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000088";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000137"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000137";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000144"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000144";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000169"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000169";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000177"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000177";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000222"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000222";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000228"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000228";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000234"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000234";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000007"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000007";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000133"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000133";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000386"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000386";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000166"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000166";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000134"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000134";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000168"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000168";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000135"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000135";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000015"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000015";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000147"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000147";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000136"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000136";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000138"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000138";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000137"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000137";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000133"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000133";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000138"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000138";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001212"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001212";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001669"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001669";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001274"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001274";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000001"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000001";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000010"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000010";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000128"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000128";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000148"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000148";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000014"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000014";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000139"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000139";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000139"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000139";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000379"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000379";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001668"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001668";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000013"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000013";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000141"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000141";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000289"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000289";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000463"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000463";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001285"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001285";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000142"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000142";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000207"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000207";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000143"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000143";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000144"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000144";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000230"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000230";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000145"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000145";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000135"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000135";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000146"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000146";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000146"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000146";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000147"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000147";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000035"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000035";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000148"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000148";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000150"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000150";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000149"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000149";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000027"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000027";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000266"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000266";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000150"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000150";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000041"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000041";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000151"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000151";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001187"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001187";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000182"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000182";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000225"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000225";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000152"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000152";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000096"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000096";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000246"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000246";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000153"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000153";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000265"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000265";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000410"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000410";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000154"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000154";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000034"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000034";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000155"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000155";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000156"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000156";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000149"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000149";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000524"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000524";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000157"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000157";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000012"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000012";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000159"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000159";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000008"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000008";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000042"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000042";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000085"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000085";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000110"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000110";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000157"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000157";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000159"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000159";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000160"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000160";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000282"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000282";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000161"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000161";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000033"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000033";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000038"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000038";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000156"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000156";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000219"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000219";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000224"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000224";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000367"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000367";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000374"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000374";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000267"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000267";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000163"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000163";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000172"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000172";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000164"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000164";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000183"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000183";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000165"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000165";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000142"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000142";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000166"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000166";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000471"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000471";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001253"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001253";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000167"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000167";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000168"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000168";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000195"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000195";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000370"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000370";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000372"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000372";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000169"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000169";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000171"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000171";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000170"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000170";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000173"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000173";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000171"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000171";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000189"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000189";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000172"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000172";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000378"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000378";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000173"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000173";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000143"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000143";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000397"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000397";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001286"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001286";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000174"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000174";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000176"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000176";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000187"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000187";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000175"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000175";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000176"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000176";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000134"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000134";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000177"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000177";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000031"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000031";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN001928"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN001928";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000178"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000178";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000179"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000179";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000036"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000036";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000179"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000179";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000180"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000180";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000112"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000112";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000181"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000181";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000125"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000125";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000285"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000285";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000182"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000182";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000183"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000183";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000188"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000188";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000184"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000184";
        replyMsg($arrayHeader,$arrayPostData);
    }

else if($message == "UDN000185"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "http://nproject.triplet.co.th:90/fund2014/show_core_assignment.php?id=UDN000185";
        replyMsg($arrayHeader,$arrayPostData);
    }



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
