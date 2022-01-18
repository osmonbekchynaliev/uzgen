<? include "../resources/views/admin/app/header.php"; ?> 
<div class="content content-full">
          <!-- Posts Statistics -->
          <div class="row text-center">
            <div class="col-6 col-xl-12">
              <!-- New Post -->
              <a class="block block-rounded" href="/DashBoard/infoblock/create">
                <div class="block-content block-content-full">
                  <div class="py-md-3">
                    <div class="py-3 d-none d-md-block">
                      <i class="fa fa-2x fa-plus text-primary"></i>
                    </div>
                    <p class="fs-4 fw-bold mb-0">
                      <i class="fa fa-plus text-primary me-1 d-md-none"></i> Жаңы статистика түзүү
                    </p>
                   
                  </div>
                </div>
              </a>
              <!-- END New Post -->
            </div>
          </div>
          <!-- Post Statistics -->

          <!-- Posts -->
          <div class="block">
            <div class="block-header block-header-default">
              <h3 class="block-title">Статистикалардын тизмеси</h3>
            </div>
            <div class="block-content">
              
            <form action="/DashBoard/infoblock/delete" method="post">
              <!-- Posts Table -->
              <table class="table table-striped table-borderless table-vcenter">
                <thead>
                  <tr class="bg-body-dark">
                    <th style="width: 60px;">ID</th>
                    <th style="width: 33%;">Аты</th>
                    <th style="width: 200px;" class="text-center">Иш-аракеттер</th>
                  </tr>
                </thead>
                <tbody>
                  <?foreach ($infoblocks as $key => $infoblock):?>
                    <tr>
                      <td>
                        <?echo $infoblock[0];?>
                      </td>
                      <td>
                        <i class="fa fa-eye text-success me-1"></i>
                        <a href="/DashBoard/infoblock/show">
                          <?echo $infoblock[1];?>
                        </a>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="/DashBoard/infoblock/edit?id=<? echo $infoblock[0];?>">
                          <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="/DashBoard/infoblock/delete?id=<? echo $infoblock[0];?>">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                  <?endforeach?>
                </tbody>
              </table>
              </form>
            </div>
              <!-- END Posts Table -->

            </div>
          </div>
          <!-- END Posts -->
        </div>
