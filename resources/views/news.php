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
        <h2 class="text_title">Жаңылыктар</h2>
        <div class="sblock">
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
                    <span><? echo date('d-m-Y', strtotime($newsItem[9]));?></span>
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
           <div class="paginationContent">
            <div class="pagination" >
              <?php if($thisPage<=1){echo '<a href="#">&laquo;</a>';}
                    else{echo '<a href="/news?page='.$prevPage.'">&laquo;</a>';
                    }
              for($page=1;$page<=$pageCount;$page++){
                  if($thisPage == $page)
                    {
                     echo'<a class="active" href="/news?page='.$page.'">'.$page .'</a>'; 
                   }
                  else
                    { 
                      echo '<a href="/news?page='.$page.'">'.$page .'</a>';
                    }
              }
                if($thisPage >= $pageCount){echo '<a href="#">&raquo;</a>';}
                else{ echo '<a href="/news?page='.$nextPage.'">&raquo;</a>';}
              ?>
            </div>
          </div>
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
