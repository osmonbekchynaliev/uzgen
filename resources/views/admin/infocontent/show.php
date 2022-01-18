<? include "../resources/views/admin/app/header.php"; ?> 

<!-- Main Container -->
      <main id="main-container">

        <!-- Hero -->
        <div class="bg-image" style='background-image: url("<?echo $this->Base_url?>/img/news/<?echo $content[6]?>");'>
          <div class="bg-black-75">
            <div class="content content-top content-full text-center">
              <h1 class="fw-bold text-white mt-5 mb-3">
                <?echo $content[1]?>
              </h1>
              <h2 class="h3 fw-normal text-white-75 mb-5"><?echo $content[2]?>
</h2>
              
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full">
          <div class="row justify-content-center">
            <div class="col-sm-8 py-5">
              <!-- Story -->
              <article class="js-gallery story">
                
                <p><?echo $content[3]?></p>
                <div class="row g-sm items-push push img-fluid-100">
                  <div class="col-6 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?echo $this->Base_url?>/img/news/<?echo $content[6]?>" target="_blank">
                      <img class="img-fluid" src="<?echo $this->Base_url?>/img/news/<?echo $content[6]?>" alt="">
                    </a>
                  </div>
              </article>
              <!-- END Story -->
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

<? include "../resources/views/admin/app/footer.php"; ?> 
