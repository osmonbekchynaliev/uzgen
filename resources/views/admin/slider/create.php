<? include "../resources/views/admin/app/header.php"; ?> 
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3 center">Жаны слайдер кошуу</h1>
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
          <form action="/DashBoard/slider/store" method="POST" enctype="multipart/form-data">
            <div class="block">
              <div class="block-header block-header-default">
                <a class="btn btn-alt-secondary" href="/DashBoard/slider">
                  <i class="fa fa-arrow-left me-1"></i> Слайдерлердин тизмеси
                </a>
              </div>
              <div class="block-content">
                <div class="row justify-content-center push">
                  <div class="col-md-20">
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-title">Слайдердин ссылкасы</label>
                      <input type="text" name="slug" class="form-control" id="dm-post-add-title"  placeholder="Слайдердин ссылкасын кийириңиздер..">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-title">Слайдердин атын кыргызча</label>
                      <input type="text" name="title_kg" required class="form-control" id="dm-post-add-title"  placeholder="Слайдердин атын кийириңиздер..">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-title">Слайдердин атын орусча</label>
                      <input type="text" name="title_ru" required class="form-control" id="dm-post-add-title"  placeholder="Слайдердин атын кийириңиздер..">
                    </div>
                    <div class="row mb-4">
                      <div class="col-xl-6">
                        <label class="form-label" for="dm-post-add-image">Слайдердин сүрөтү</label>
                        <input type="file" name="img" class="form-control" required>
                      </div>
                    </div>
                  </div>
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
