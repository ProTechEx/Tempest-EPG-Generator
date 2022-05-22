<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'allatvkanaler.se',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-05-22',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Stockholm',
  'culture' => 'sv',
  'max_day' => '7',
  'srating_system' => 'IMDB',
  'episodeOption' => '1',
  'url1' => 'https://www.allatvkanaler.se/tabla/##channel##/##urldate1##/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'urldate_format1' => '#weekdayname#mandag|tisdag|onsdag|torsdag|fredag|lordag|sondag',
  'show' => '(<li>.*?<\\/li>)||#exclude#<ins class="adsbygoogle"',
  'start' => 'def lead">(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '<b class="fvs">(.*?)<\\/b>',
  'desc' => '<\\/p><p>(.*?)<\\/p>',
  'showicon' => '"background-image: url\\("(.*?)"||#addstart#https://www.allatvkanaler.se',
  'channel_logo' => '||#add#https://www.allatvkanaler.se/assets/49/logo/##channel##-tabla.webp',
  'pagekey1' => '<a href="(.*?)"',
  'detail_url1' => 'https://www.allatvkanaler.se##pagekey1##?rel=m',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => '*/*',
  'detail_content_type1' => 'text/html; charset=UTF-8',
  'detail_stop' => '"subtitle">.*?\\d{2}:\\d{2}-(\\d{2}[:\\.]\\d{2})<\\/span>',
  'detail_stop_format' => 'H#i',
  'detail_desc' => '<div><p>(.*?)<\\/p>||#replace#( Producerat år \\d{4}\\.)##( Del \\d+\\.)##( Säsong \\d+\\.)||####',
  'detail_category' => '<span class="badge">(.*?)<\\/span',
  'detail_season' => '<span itemprop="name">S(?:0+)?(\\d+)|[Ss]äsong(?:\\s*)?(\\d+)|<span>S(?:0+)?(\\d+)',
  'detail_episode' => 'itemprop="episodeNumber" content="(?!0)(\\d+)|(?:Avsnitt|Del)(?:\\s*)?(\\d+)|<span>(?:S(?:0+)?\\d+)?A(?:0+)?(\\d+)',
  'detail_production_date' => 'Producerat år (\\d{4})| från (\\d{4})',
  'detail_star_rating' => '<span itemprop="ratingValue">(?!0)(\\d(?:\\.\\d+)?)<\\/span>||#addend#/10',
  'ccurl1' => 'https://www.allatvkanaler.se/query/?t=Kanal&##urldate1##',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => '*/*',
  'cccontent_type1' => 'text/html; charset=UTF-8',
  'ccreferer_header1' => 'https://www.allatvkanaler.se/',
  'ccurldate_format1' => 'd',
  'ccchannel_block' => '<a class="navbar-item".*?<\\/a>',
  'ccchannel_id' => '\\/tabla\\/(.*?)\\/',
  'ccchannel_name' => '">(.*?)<\\/a>',
);
?>