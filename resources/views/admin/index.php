<? include "app/header.php"; ?> 
<div class="content content-full">
  <!-- Posts Statistics -->

  <div class="row text-center">
  
  <div class="col-6 col-xl-3">
      <!-- New Post -->
      <a class="block block-rounded" href="/DashBoard/create">
        <div class="block-content block-content-full">
          <div class="py-md-3">
            <div class="py-3 d-none d-md-block">
              <i class="fa fa-2x fa-plus text-primary"></i>
            </div>
            <p class="fs-4 fw-bold mb-0">
              <i class="fa fa-plus text-primary me-1 d-md-none"></i> ЖАҢЫ ПОСТТОРДУ КОШУУ
            </p>
           
          </div>
        </div>
      </a>
      <!-- END New Post -->
    </div>
        <?foreach ($newBlock as $key => $value):?>

    <div class="col-6 col-xl-3">
      <!-- All Posts -->
      <a class="block block-rounded" href="<?echo $value[3];?>">
        <div class="block-content block-content-full">
          <div class="py-md-3">
            <div class="py-3 d-none d-md-block">
              <i class="far fa-2x fa-file-alt text-primary"></i>
            </div>
            <!-- <p class="fs-4 fw-bold mb-0">
              150 посттун саны
            </p> -->
            <p class="text-muted mb-0">
              <?echo $value[1];?>
            </p>
          </div>
        </div>

      </a>
      <!-- END All Posts -->
    </div>
      <?endforeach?>

    
  </div>
</div>

