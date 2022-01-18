<? include "../resources/views/admin/app/header.php"; ?> 

        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3 center">Жаңылык кошуу</h1>
              <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
          <!-- New Post -->
          <form action="/DashBoard/news/store" method="POST" enctype="multipart/form-data">
            <div class="block">
              <div class="block-header block-header-default">
                <a class="btn btn-alt-secondary" href="/DashBoard/news">
                  <i class="fa fa-arrow-left me-1"></i> Жаңылыктардын тизмеси
                </a>
              </div>
              <div class="block-content">
                <div class="row justify-content-center push">
                  <div class="col-md-20">
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-title">Жаңылыктын аты кыргызча</label>
                      <input type="text" name="title_kg" required class="form-control" id="dm-post-add-title"  placeholder="Жаңылыктын атын кийириңиздер..">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-title">Жаңылыктын аты орусча</label>
                      <input type="text" name="title_ru" required class="form-control" id="dm-post-add-title"  placeholder="Жаңылыктын атын кийириңиздер..">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-excerpt">Кыскача тексти кыргызча</label>
                      <textarea class="form-control" id="dm-post-add-excerpt" required name="mini_description_kg" rows="3" placeholder="Кыскача тексттин кийириңиздер.."></textarea>
                      <div class="form-text">Кыскача тексти.</div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-excerpt">Кыскача тексти орусча</label>
                      <textarea class="form-control" id="dm-post-add-excerpt" required name="mini_description_ru" rows="3" placeholder="Кыскача тексттин кийириңиздер.."></textarea>
                      <div class="form-text">Кыскача тексти.</div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label">Толук текст кыргызча</label>
                      <textarea id="kg" required name="text_kg"></textarea>
                    </div>
                    <div class="mb-4">
                      <label class="form-label">Толук текст орусча</label>
                      <textarea id="ru" required name="text_ru"></textarea>
                    </div>
                    <div class="row mb-4">
                      <div class="col-xl-6">
                        <label class="form-label" for="dm-post-add-image">Сүрөт</label>
                        <input class="form-control" required type="file" name="img" id="dm-post-add-image">
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
<? include "../resources/views/admin/app/footer.php"; ?> 
