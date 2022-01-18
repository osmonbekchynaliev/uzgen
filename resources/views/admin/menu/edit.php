<? include "../resources/views/admin/app/header.php"; ?> 
<!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Blog Post</h1>
              <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Pages</li>
                  <li class="breadcrumb-item">Blog</li>
                  <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
          <!-- New Post -->
          <form action="/DashBoard/menu/update" method="POST" enctype="multipart/form-data">
            <div class="block">
              <div class="block-header block-header-default">
                <a class="btn btn-alt-secondary" href="/DashBoard/menu">
                  <i class="fa fa-arrow-left me-1"></i> Менюнун тизмеси
                </a>
              
              </div>
              <div class="block-content">
                <div class="row justify-content-center push">
                  <div class="col-md-10">
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-edit-id">ID</label>
                                    <input type="text" class="visually-hidden" id="dm-post-edit-id" name="id" value="<?echo $menu[0]?>" readonly>

                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-edit-title">Менюнун аты кыргызча</label>
                      <input type="text" class="form-control" required id="dm-post-edit-title" value="<?echo $menu[1]?>" name="title_kg" placeholder="Менюнун атын кийириңиздер..">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-edit-title">Менюнун аты орусча</label>
                      <input type="text" class="form-control" required  id="dm-post-edit-title" value="<?echo $menu[2]?>" name="title_ru" placeholder="Менюнун атын кийириңиздер..">
                    </div>
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
