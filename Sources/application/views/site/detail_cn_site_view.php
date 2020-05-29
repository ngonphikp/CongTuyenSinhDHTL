<div class="me-detail">
    <div class="container">
        <div class="heading">
            <h2 align="center">Cẩm nang</h2>
        </div>
        <div class="image"><img class="img-fluid scale-on-hover" src="<?php echo base_url();?>assets/img/cn/<?php echo $cn['link_cn'];?>"></div>
        <div class="description">
            <h3><?php echo $cn['tieu_de_cn'];?></h3>
            <p><?php echo $cn['noi_dung_cn'];?></p>
        </div>

        <div class="more-projects">
            <h3 class="text-center">Nhiều hơn</h3>
            <div class="row gallery">
                <?php foreach ($listcntop4 as $row){ ?>
                    <div class="col-md-4 col-lg-3">
                        <div class="item">
                            <a href="<?php echo base_url() . "index.php/cam_nang/view_detail/" . $row['id_cn'];?>">
                                <img style="width: 100%; height: 180px" class="img-fluid scale-on-hover" src="<?php echo base_url();?>assets/img/cn/<?php echo $row['link_cn'];?>">
                                <p><?php echo $row['tieu_de_cn'];?></p>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>