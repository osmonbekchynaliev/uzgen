<? include "Lear/Header.php"; ?>
<!-- top-line-block -->
<div class="top_line_block">
  <div class="container">
    <!-- <ul>
      <li><a href="#">Башкы</a></li>
      <li><a href="#">Жаңылыктар</a></li>
      <li><a href="#">Төрага Талант Мамытов катышты</a></li>
    </ul> -->
  </div>
</div>
  <!-- limitter middle -->

  <div class="container">
    <div class="limitter">
      <div class="left_block">
        <div class="sblock-view">
          <div class="sblock-view__img"><img src="<?echo $this->Base_url;?>/img/news/<?echo $News[6]; ?>" alt="" width="200" height="300"></div>
          <div class="sblock-view__title"><h3>
          <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $News[1]; } ?>
          <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $News[2]; } ?>
           </h3></div>
          <div class="sblock-view__content">
            <div class="text">
              <p>
              <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $News[3]; } ?>
              <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $News[4]; } ?>
            </p>
            </div>
          </div>
        </div>
      </div>
      <div class="right_block">
        <div class="last_sblock">
          <h3>Видео отчеттор</h3>
        <? include "Lear/rightBlockMenu.php"; ?>  
          
        </div>
      </div>
    </div>
  </div>


<? include "Lear/footer.php"; ?>  
  