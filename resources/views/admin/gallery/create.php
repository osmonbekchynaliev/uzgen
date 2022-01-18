<? include "../resources/views/admin/app/header.php"; ?> 

        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3 center">Жаны категория кошуу</h1>
              <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item">Pages</li>
                  <li class="breadcrumb-item">Blog</li>
                  <li class="breadcrumb-item active" aria-current="page">New</li>
                </ol> -->
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
          <!-- New Post -->
          <form action="/DashBoard/menu-block/store" method="POST" enctype="multipart/form-data">
            <div class="block">
              <div class="block-header block-header-default">
                <a class="btn btn-alt-secondary" href="/DashBoard/menu-block">
                      
                  <i class="fa fa-arrow-left me-1"></i> Категориянын тизмеси

                </a>
              </div>
              <div class="block-content">
                <div class="row justify-content-center push">
                  <div class="col-md-20">
                    <div class="row mb-4">
                      <div class="col-xl-6">
                        <label class="form-label" for="dm-post-add-image">Сүрөт</label>
                        <input class="form-control" type="file" name="img[]" id="dm-post-add-image">
                      </div>
                    </div>
                    <select class="form-select form-select-sm" name="menu_id" aria-label=".form-select-sm example">
                      <option selected value=" " >Башкы меню тандоо</option>
              <? foreach ($this->Menu as $key => $menu):  ?>
                      <option  value="<?php echo $menu[0]; ?>" ><?php echo $menu[1]; ?></option>
                <? endforeach?>
                    </select>
                </div>
              </div>
              <div class="block-content bg-body-light">
                <div class="row justify-content-center push">
                  <div class="col-md-10">
                    <button type="submit" name="submit" class="btn btn-alt-primary">
                      <i class="fa fa-fw fa-check opacity-50 me-1"></i> Сактоо
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!-- END New Post -->
        </div>
        <!-- END Page Content -->
<? include "../resources/views/admin/app/footer.php"; ?> 
