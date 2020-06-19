<div class="row content">
  <div class="col-lg-3 col-md-6 me-db-item"
    style="background: linear-gradient(214.27deg, rgba(189, 33, 48, 0.5) 24.07%, rgba(255, 255, 255, 0) 100%), #ADD8E6;">
    <h4 class="text-right">Tổng số tài khoản</h4>
    <h4 class="text-right"><?php echo $countUser;?></h4>
    <p class="text-left"><i class="fa fa-user fa-4x" style="color: #bd2130" aria-hidden="true"></i></p>
  </div>
  <div class="col-lg-3 col-md-6 me-db-item"
    style="background: linear-gradient(214.27deg, rgba(0, 0, 255, 0.5) 24.07%, rgba(255, 255, 255, 0) 100%), #FFFFE0;">
    <h4 class="text-right">Tổng số bài viết</h4>
    <h4 class="text-right"><?php echo $countBV;?></h4>
    <p class="text-left"><i class="fa fa-table fa-4x" style="color: blue" aria-hidden="true"></i></p>
  </div>
  <div class="col-lg-3 col-md-6 me-db-item"
    style="background: linear-gradient(214.27deg, rgba(205, 110, 0, 0.5) 24.07%, rgba(255, 255, 255, 0) 100%), #90EE90;">
    <h5 class="text-right">Tổng Số hồ sơ xét tuyển</h5>
    <h4 class="text-right"><?php echo $countHSXT;?></h4>
    <p class="text-left"><i class="fa fa-newspaper-o fa-4x" style="color: #cd6e00" aria-hidden="true"></i></p>
  </div>
  <div class="col-lg-3 col-md-6 me-db-item"
    style="background: linear-gradient(214.27deg, rgba(255, 255, 255, 0.5) 24.07%, rgba(255, 255, 255, 0) 100%), #FFDEAD;">
    <h5 class="text-right">Tổng Số ngành đào tạo</h5>
    <h4 class="text-right"><?php echo $countNDT;?></h4>
    <p class="text-left"><i class="fa fa-newspaper-o fa-4x" style="color: white" aria-hidden="true"></i></p>
  </div>
</div>

<div class="row content">
  <div class="col-lg-6 col-md-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="d-flex justify-content-between">
          <h3 class="card-title">Số lượt ghé thăm</h3>
          <a href="javascript:void(0);">View Report</a>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex">
          <p class="d-flex flex-column">
            <span class="text-bold text-lg">820</span>
            <span>Visitors Over Time</span>
          </p>
          <p class="ml-auto d-flex flex-column text-right">
            <span class="text-success">
              <i class="fas fa-arrow-up"></i> 12.5%
            </span>
            <span class="text-muted">Since last week</span>
          </p>
        </div>
        <!-- /.d-flex -->

        <div class="position-relative mb-4">
          <canvas id="visitors-chart" height="200"></canvas>
        </div>

        <div class="d-flex flex-row justify-content-end">
          <span class="mr-2">
            <i class="fas fa-square text-primary"></i> This Week
          </span>

          <span>
            <i class="fas fa-square text-gray"></i> Last Week
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- /.col-md-6 -->
  <div class="col-lg-6 col-md-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="d-flex justify-content-between">
          <h3 class="card-title">Hồ sơ xét tuyển</h3>
          <a href="javascript:void(0);">View Report</a>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex">
          <p class="d-flex flex-column">
            <span class="text-bold text-lg">$18,230.00</span>
            <span>Sales Over Time</span>
          </p>
          <p class="ml-auto d-flex flex-column text-right">
            <span class="text-success">
              <i class="fas fa-arrow-up"></i> 33.1%
            </span>
            <span class="text-muted">Since last month</span>
          </p>
        </div>
        <!-- /.d-flex -->

        <div class="position-relative mb-4">
          <canvas id="sales-chart" height="200"></canvas>
        </div>

        <div class="d-flex flex-row justify-content-end">
          <span class="mr-2">
            <i class="fas fa-square text-primary"></i> This year
          </span>

          <span>
            <i class="fas fa-square text-gray"></i> Last year
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- /.col-md-6 -->
</div>