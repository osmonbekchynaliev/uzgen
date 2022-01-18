  <!-- limitter -->
  <div class="container">
    <div class="limitter">
      <div class="left_block">
        <!-- slider -->
        <div class="slider">
          <? foreach ($SliderBlockLinks as $key => $slider): ?>
            <div class="item_slider">
              <a href="<?echo $slider[1]?>" target="_blank"></a>
              <img src="<? echo $this->Base_url?>img/cat/<?echo $slider[4];?>">
              <div class="description">
                <p>
                  <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $slider[2]; } ?>
                  <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $slider[3]; } ?>
                </p>
              </div>
            </div>
          <? endforeach?>
        </div>
      </div>
      <div class="right_block">
        <div class="right_block__menu">
          <? foreach ($this->withouth as $key => $menu):  ?>
            <a href="/breakMenu?id=<? echo $menu[0]; ?>" class="right_block__menu__item">
              <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $menu[1]; } ?>
            <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $menu[2]; } ?>
              </a>
          <? endforeach?>
        </div>
      </div>
    </div>    
  </div>
  <br>