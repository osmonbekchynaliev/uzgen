  <div class="container">
    <!-- info ok -->
    <div class="inf_block">
      <div class="inf_block__menu">
        <? foreach ($InfoBlockMenu as $key => $item): ?>
            <div class="inf_block__menu__item"><img src="img/icons/<?echo $item[4]?>"> 
              <a href="/informs?id=<? echo $item[0];?>" style="color: #457b9d;">
                <span>
                <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $item[1]; } ?>
                <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $item[2]; } ?>
              : <?echo $item[3]?>
              
              </span>
              </a>
            </div>
        <? endforeach?>
        </div>
      </div>
    </div>
  </div>