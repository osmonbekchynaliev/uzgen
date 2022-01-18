<? include "../resources/views/languages/lang_config.php";?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Официальный сайт при мэрии УЗГЕН">
  <meta name="keywords" content="Өзгөн мэрия, өзгөн, мэрия, жалал-абад, жанылык озгон, новости, горячие новости, киргизский, кыргызская ">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $lang['title'] ?></title>
  <link rel="icon" type="image/x-icon" href="img/icons/favicon.ico">
  <link rel="stylesheet" href="css/style.css">
</head>

<body> 

  <!-- top header -->
  <div class="header_top_line ">
    <div class="container">
      
      <div class="data"><?echo date("Y-m-d H:i", strtotime("now") );?></div>
      <div class="line_before"></div>
      <div class="social d-flex align-items-center">
        <a href="#"><img src="img/icons/insta.svg" alt="Instagram" class="icon"></a>
        <a href="#"><img src="img/icons/fb.svg" alt="Facebook" class="icon"></a>
      </div>
      <div class="line_before"></div>
      <div class="lang-pick">
        <a href="?lang=kg" class="lang-pick__item kg"></a>
        <a href="?lang=ru" class="lang-pick__item ru"></a>
      </div>
    </div>

  </div>
  <!-- header -->
  <header class="header">

    <div class="container">

      <div class="header_middle_line">
        <div class="logo">
          <a href="/"><img src="img/logo.png" alt="logo"></a>
          <h2><?php echo $lang['logo_1'] ?><br> <?php echo $lang['logo_2'] ?></h2>
        </div>
        <div class="burger-menu"></div>
        <div class="header_menu">
          <div class="btn_close">&times;</div>
          <div class="container">
          <nav>
              <? foreach ($this->Menu as $key => $menu):  ?>
              <div class="nav_item">
                <div class="nav_item_btn">
                    <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $menu[1]; } ?>
                    <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $menu[2]; } ?>
                  </div>
                <div class="nav_item_content">
                    <? foreach ($this->with as $key => $podMenu): ?>
                      <?if($menu[0] == $podMenu[8]):?>
                        <a href="/breakMenu?id=<? echo $podMenu[0]; ?>">
                          <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'kg'){ echo $podMenu[1]; } ?>
                          <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ echo $podMenu[2]; } ?> 
                          </a>
                      <?endif;?>
                    <? endforeach?> 
                </div>
              </div>
              <? endforeach?>
            </nav> 
          </div>
        </div>
      </div>
    </div>
  </header>
