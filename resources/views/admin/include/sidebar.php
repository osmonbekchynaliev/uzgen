<div class="content-side">
  <ul class="nav-main">
    <li class="nav-main-item open">
      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
        <i class="nav-main-link-icon fa fa-clone"></i>
        <span>Категориялар</span>
      </a>
      <ul class="nav-main">
        <li class="nav-main-item">
          <?foreach($this->newBlock as $key=>$value):?>
          <a class="nav-main-link"  href="<? echo $value[4]?>">
            <span class="nav-main-link-name"><? echo $value[1]?></span>
          </a>
          <?endforeach?>
          <!-- <ul class="nav-main-submenu">
            <li class="nav-main-item">
              <a class="nav-main-link" href="be_pages_generic_blank.html">
                <span class="nav-main-link-name">Blank</span>
              </a>
            </li>
          </ul> -->
        </li>
      </ul>
    </li>
  </ul>
</div>