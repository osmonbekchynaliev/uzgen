<footer>
    <div class="container">
      <div class="footer_content">
        <? foreach ($this->Menu as $key => $menu):  ?>
          <div class="footer_content_item">
            <h4>
               <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $menu[1]; } ?>
                  <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $menu[2]; } ?> 
              </h4>
            <? foreach ($this->with as $key => $podMenu): ?>
              <?if($menu[0] == $podMenu[8]):?>
            <ul>
              <li><a href="/breakMenu?id=<? echo $podMenu[0]; ?>">

                <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $podMenu[1]; } ?>
                  <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $podMenu[2]; } ?>
              </a></li>
            </ul>
                <?endif;?>
            <? endforeach?> 
          </div>
        <? endforeach?>
      </div>
      <div class="footer_bottom">
        <p>&copy; Баардык укуктар корголгон 2021</p>
      </div>
    </div>
  </footer>


  <script src="js/jquery3.6.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.swipebox.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>