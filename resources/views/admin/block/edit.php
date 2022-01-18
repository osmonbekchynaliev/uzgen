<? include "../resources/views/admin/app/header.php"; ?> 
<!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Категорияны өзгөртүү</h1>
              <!-- <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Pages</li>
                  <li class="breadcrumb-item">Blog</li>
                  <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
              </nav> -->
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
          <!-- New Post -->
          <form action="/DashBoard/menu-block/update" method="POST" enctype="multipart/form-data">
            <div class="block">
              <div class="block-header block-header-default">
                <a class="btn btn-alt-secondary" href="/DashBoard/menu-block">
                  <i class="fa fa-arrow-left me-1"></i> Категориянын тизмеси
                </a>
              
              </div>
              <div class="block-content">
                <div class="row justify-content-center push">
                  <div class="col-md-10">
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-edit-id">ID</label>
                      <input type="text" class="visually-hidden" name="id" id="dm-post-edit-id" value="<?echo $blocks[0]?>" readonly><?echo $blocks[0]?>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-title">Категориянын кыскача аты кыргызча</label>
                      <input type="text" name="title_kg" class="form-control" id="dm-post-add-title" required value="<?echo $blocks[1]?>" placeholder="Менюнун атын кийириңиздер..">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-title">Категориянын кыскача аты орусча</label>
                      <input type="text" name="title_ru" class="form-control" id="dm-post-add-title" required value="<?echo $blocks[2]?>" placeholder="Менюнун атын кийириңиздер..">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-excerpt">Категориянын толук аты кыргызча</label>
                      <textarea class="form-control"   id="dm-post-add-excerpt" required name="long_title_kg" rows="2" placeholder="Категориянын толук атын кийириңиздер.."><?echo $blocks[3]?></textarea>
                      <div class="form-text">Категориянын толук аты.</div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-add-excerpt">Категориянын толук аты орусча</label>
                      <textarea class="form-control"   id="dm-post-add-excerpt" required name="long_title_ru" rows="2" placeholder="Категориянын толук атын кийириңиздер.."><?echo $blocks[4]?></textarea>
                      <div class="form-text">Категориянын толук аты.</div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label">Толук текст кыргызча</label>
                      <textarea id="kg" required name="text_kg"><?echo $blocks[5]?></textarea>
                    </div>
                    <div class="mb-4">
                      <label class="form-label">Толук текст орусча</label>
                      <textarea id="ru" required name="text_ru"><?echo $blocks[6]?></textarea>
                    </div>
                    <div class="row mb-4">
                      <div class="col-xl-6">
                        <label class="form-label" for="dm-post-add-image">Сүрөт</label>
                        <input class="form-control" type="file" name="img" id="dm-post-add-image" value="<?echo $blocks[7]?>">
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
