<div class="videos">
<?php 
   function getYoutubeEmbedUrl($url)
    {
      $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
      $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

      if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
      }

      if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
      }
      return 'https://www.youtube.com/embed/' . $youtube_id ;
    }
    $output1 = getYoutubeEmbedUrl($menu[1]);
    
    foreach($RightBlockLinks as $key => $menu){
      $output1 = getYoutubeEmbedUrl($menu[1]);
      echo "<iframe width='100%' height='200' src='$output1;'>
  </iframe>";
    }
?>
</div>