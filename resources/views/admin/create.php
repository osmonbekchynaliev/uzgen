 <? include "app/header.php"; ?> 
<div class="content content-full">
          <!-- Posts Statistics -->
          <div class="row text-center">
            <?foreach ($newBlock as $key => $newsItem):?>
            <div class="col-6 col-xl-3">
              <!-- New Post -->
              <a class="block block-rounded" href="<?echo $newsItem[3]?>">
                <div class="block-content block-content-full">
                  <div class="py-md-3">
                    <div class="py-3 d-none d-md-block">
                      <i class="fa fa-2x fa-plus text-primary"></i>
                    </div>
                    <p class="fs-4 fw-bold mb-0">
                      <i class="fa fa-plus text-primary me-1 d-md-none"></i><?echo $newsItem[1]?>
                    </p>
                    <p class="text-muted mb-0">
                      <?echo $newsItem[2]?>
                    </p>
                  </div>
                </div>
              </a>
              <!-- END New Post -->
          </div>
          <? endforeach?>
          <!-- Post Statistics -->

        </div>

