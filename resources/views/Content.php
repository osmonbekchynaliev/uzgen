  <? include "Lear/SliderBlock.php"; ?>  
  <div class="container"> 
    <div class="limitter">
      <div class="left_block">
        <h2 class="text_title">Жаңылыктар</h2>
        <div class="sblock news">
        <? foreach ($News as $key => $newsItem):  ?>
          <div class="sblock_item">

            <div class="sblock_img"><img src="<? echo $this->Base_url?>/img/news/<? echo $newsItem[8]; ?>"></div>
            <div class="sblock_item_content">
              <div class="sblock_item_content__title">
                <h3><a href="/newsId?id=<? echo $newsItem[0]; ?>">
                    <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $newsItem[1]; } ?>
                    <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $newsItem[2]; } ?>
                  </a>
                </h3>
              </div>
              <div class="sblock_item_content__text">
                <p>
                  <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo substr($newsItem[5], 0, 320); } ?>
                  <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo substr($newsItem[6], 0, 320); } ?>
                  </p>
              </div>
              <div class="sblock_item_content__bottom">
                <div class="published">
                  <div class="date_created">
                    <img src="img/icons/calendar.svg" alt="">
                    <span><?date_default_timezone_set('Asia/Almaty'); echo date('d-m-Y', strtotime($newsItem[9]));?></span>
                  </div>
                  <div class="time_created">
                    <img src="img/icons/clock.svg" alt="">
                    <span><? echo date('H:i', strtotime($newsItem[9]));?></span>
                  </div>
                </div>
                <a href="/newsId?id=<? echo $newsItem[0]; ?>" class="sblock_item_content__bottom__read">Толук окуу</a>
              </div>
            </div>
          </div>
        <? endforeach?>
        </div>
        
        <div class="read_all_sblock">
          <a href="/news"><?php echo $lang['news'] ?></a>
        </div>
      </div>

      <div class="right_block">
        <? include "Lear/rightBlockMenu.php"; ?>  
      </div>
    </div>
  </div>