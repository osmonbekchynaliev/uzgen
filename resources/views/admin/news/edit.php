<? include "../resources/views/admin/app/header.php"; ?> 
<!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Жаңылыкты өзгөртүү</h1>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
          <!-- New Post -->
          <form action="/DashBoard/news/update" method="POST" enctype="multipart/form-data">
            <div class="block">
              <div class="block-header block-header-default">
                <a class="btn btn-alt-secondary" href="/DashBoard/menu">
                  <i class="fa fa-arrow-left me-1"></i> Жаңылыктын тизмеси
                </a>
              <input type="text" class="visually-hidden" id="dm-post-edit-id" name="id" value="<?echo $news[0]?>" readonly>
              </div>
              <div class="block-content">
                <div class="row justify-content-center push">
                  <div class="col-md-10">
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-title">Жаңылыктын аты кыргызча</label>
                      <input type="text" name="title_kg" required class="form-control" id="dm-post-add-title" value="<?echo $news[1]?>"  placeholder="Менюнун атын кийириңиздер..">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-title">Жаңылыктын аты орусча</label>
                      <input type="text" name="title_ru" required class="form-control" id="dm-post-add-title" value="<?echo $news[2]?>"  placeholder="Менюнун атын кийириңиздер..">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-excerpt">Кыскача тексти кыргызча</label>
                      <textarea class="form-control" id="dm-post-add-excerpt" name="mini_description_kg" required rows="3" placeholder="Кыскача тексттин кийириңиздер.."><?echo $news[3]?></textarea>
                      <div class="form-text">Кыскача тексти.</div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-excerpt">Кыскача тексти орусча</label>
                      <textarea class="form-control" id="dm-post-add-excerpt" name="mini_description_ru" required rows="3" placeholder="Кыскача тексттин кийириңиздер.."><?echo $news[4]?></textarea>
                      <div class="form-text">Кыскача тексти.</div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label">Толук текст кыргызча</label>
                      <textarea id="kg"  name="text_kg" required><?echo $news[5]?></textarea>
                    </div>
                    <div class="mb-4">
                      <label class="form-label">Толук текст орусча</label>
                      <textarea id="ru"  name="text_ru" required ><?echo $news[6]?></textarea>
                    </div>
                    <div class="row mb-4">
                      <div class="col-xl-6">
                        <label class="form-label" for="dm-post-add-image">Сүрөт</label>
                        <input class="form-control" type="file" name="img"  required id="dm-post-add-image">
                      </div>
                    </div>
                       <img src="<? echo $this->Base_url?>/img/news/<?echo $news[7];?>" width="200px">                   

                </div>
              </div>
              <div class="block-content bg-body-light">
                <div class="row justify-content-center push">
                  <div class="col-md-10">
                    <button type="submit" name="submit" class="btn btn-alt-primary">
                      <i class="fa fa-fw fa-check opacity-50 me-1"></i> Өзгөрүүлөрдү сактоо
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
