<? include "Lear/Header.php"; ?>

<!-- top-line-block -->
<div class="top_line_block">
  <div class="container">
    <ul>
    </ul>
  </div>
</div>

  <!-- limitter middle -->

  <div class="container">
    <div class="limitter">
      <div class="left_block">
        <h2 class="text_title">Статистика</h2>
        <div class="sblock">
          <? foreach ($this->withInfo as $key => $newsItem):  ?>
            <?if($id == $newsItem[7]):?>
            <div class="sblock_item">
              <div class="sblock_img"><img src="<? echo $this->Base_url?>/img/news/<? echo $newsItem[6]; ?>"></div>
              <div class="sblock_item_content">
                <div class="sblock_item_content__title">
                  <h3><a href="/informsId?id=<? echo $newsItem[0]; ?>">
                      <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $newsItem[1]; } ?>
                      <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $newsItem[2]; } ?>
                    </a>
                  </h3>
                </div>
                <div class="sblock_item_content__text">
                  <p>
                    <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo substr($newsItem[3], 0, 320); } ?>
                    <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo substr($newsItem[4], 0, 320); } ?>
                  </p>
                </div>
                <div class="sblock_item_content__bottom">
                  <a href="/informsId?id=<? echo $newsItem[0]; ?>" class="sblock_item_content__bottom__read">Толук окуу</a>
                </div>
              </div>
            </div>
          <?endif;?>
        <? endforeach?>
        </div>
      </div>
      <div class="right_block">
         <div class="last_sblock">
          <h3>Видео отчеттор</h3>
      <? include "Lear/rightBlockNews.php"; ?>
      </div>
      </div>
    </div>
  </div>
<? include "Lear/footer.php"; ?>
