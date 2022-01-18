<? include "../resources/views/admin/app/header.php"; ?> 
<div class="content content-full">
          <!-- Posts Statistics -->
          <div class="row text-center">
            <div class="col-6 col-xl-12">
              <!-- New Post -->
              <a class="block block-rounded" href="/DashBoard/slider/create">
                <div class="block-content block-content-full">
                  <div class="py-md-3">
                    <div class="py-3 d-none d-md-block">
                      <i class="fa fa-2x fa-plus text-primary"></i>
                    </div>
                    <p class="fs-4 fw-bold mb-0">
                      <i class="fa fa-plus text-primary me-1 d-md-none"></i> Жаңы слайдер түзүү
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
              <h3 class="block-title">Слайдерлердин тизмеси</h3>
            </div>
            <div class="block-content">
              
            <form action="/DashBoard/slider/delete" method="post">
              <!-- Posts Table -->
              <table class="table table-striped table-borderless table-vcenter">
                <thead>
                  <tr class="bg-body-dark">
                    <th style="width: 60px;">ID</th>
                    <th style="width: 33%;">Аты</th>
                    <th class="d-none d-xl-table-cell">Датасы</th>
                    <th style="width: 200px;" class="text-center">Иш-аракеттер</th>
                  </tr>
                </thead>
                <tbody>
                  <?foreach ($sliders as $key => $slider):?>
                    <tr>
                      <td>
                        <?echo $slider[0];?>
                      </td>
                      <td>
                        <a href="<?echo $slider[1];?>" target="_blank">
                          <?echo $slider[2];?>
                        </a>
                      </td>
                      <td class="d-none d-xl-table-cell">
                         <img src="<? echo $this->Base_url?>img/cat/<?echo $slider[4];?>" width="250px" height="120px">
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-alt-secondary" href="/DashBoard/slider/delete?id=<? echo $slider[0];?>">
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
