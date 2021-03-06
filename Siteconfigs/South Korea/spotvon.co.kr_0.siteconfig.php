<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'spotvon.co.kr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-06-27',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Seoul',
  'culture' => 'ko',
  'max_day' => '7',
  'url1' => 'http://www.spotvon.co.kr/data/onAir/##channel##/Daily/D##urldate1##.asp',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/javascript, */*; q=0.01',
  'content_type1' => 'text/html',
  'host_header1' => 'www.spotvon.co.kr',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'Ymd',
  'show' => '({.*?})',
  'start' => '"sch_hour":(\\d+)|#|[|:|]"sch_min":"(\\d+)',
  'start_format' => 'G:i',
  'title' => '"title":"(.*?)"',
  'category' => '"kind":"(.*?)",||#replace#(LIVE)||생방송',
  'channel_logo' => '||#add#http://www.spotvon.co.kr/P/images/sub/sub_icon##cclogo##.png',
  'pshown' => '"kind":"(재방송)"',
  'ccurl1' => 'http://www.spotvon.co.kr/P/sub03.asp?nowYear=##urldate1_1##&nowMonth=##urldate1_2##&nowDate=##urldate1_3##',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html;charset=utf-8; Charset=utf-8',
  'cchost_header1' => 'www.spotvon.co.kr',
  'ccurldate_format1' => 'Y-m-d||#split#(-)',
  'ccchannel_block' => '<h4><img.*?<\\/h4>',
  'ccchannel_id' => 'alt="(.*?)"||#lower#',
  'ccchannel_name' => 'alt="(.*?)"',
  'ccchannel_logo' => 'sub_icon(\\d+)',
);
?>