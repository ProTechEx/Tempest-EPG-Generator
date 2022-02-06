<?php return array (
  'filename' => 'amazon.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2021-11-21',
  'rev_no' => 'R0',
  'timezone' => '##usertime##',
  'culture' => 'en',
  'max_day' => '6.1',
  'url1' => 'https://www.amazon.com/gp/video/epg?currency=USD&language=en_US',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html;charset=UTF-8',
  'show' => '\\{"channelName":"##channel##",".*?(?:\\{)(.*?)(?:\\}).*?\\]\\}||#exclude#"playbackAction"',
  'start' => '"unixStart":(\\d+)',
  'start_format' => 'java',
  'stop' => '"unixEnd":(\\d+)',
  'stop_format' => 'java',
  'title' => '"title":"(.*?)","',
  'channel_logo' => '\\{"channelName":"##channel##",".*?"logo":"(.*?)"',
  'ccurl1' => 'https://www.amazon.com/gp/video/epg?currency=USD&language=en_US',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html;charset=UTF-8',
  'ccchannel_block' => '\\{"channelName":".*?,"logo":".*?"',
  'ccchannel_id' => '"channelName":"(.*?)","',
  'ccchannel_name' => '"channelName":"(.*?)","',
);
?>