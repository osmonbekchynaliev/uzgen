<? include "Lear/Header.php"; ?>
<!-- top-line-block -->
<div class="top_line_block">
  <div class="container">
  </div>
</div>
  <!-- limitter middle -->

  <div class="container">
    <div class="limitter">
      <div class="left_block">
        <div class="sblock-view">
          <div class="sblock-view__img"><img src="<?echo $this->Base_url;?>/img/cat/<?  echo $Block[7]; ?>" alt="" width="200" height="300"></div>
          <div class="sblock-view__title"><h3>
            <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $Block[1]; } ?>
            <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $Block[2]; } ?>
           </h3></div>
          <div class="sblock-view__content">
            <div class="text">
              <p>
                <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $Block[5]; } ?>
                <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $Block[6]; } ?>
            </p>
            </div>
          </div>
        </div>
      </div>
      <div class="right_block">
        <div class="last_sblock">
          <h3>Акыркы видео отчеттор</h3>
        </div>
        <? include "Lear/rightBlockMenu.php"; ?>  
      </div>
    </div>
  </div>


<? include "Lear/footer.php"; ?>  
  