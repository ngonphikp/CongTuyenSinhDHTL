<div class="me-detail">
    <div class="container">
        <div class="photo-card container">
            <div class="photo-background w3-animate-zoom" style="background-image:url(<?php echo base_url() . "assets/img/dv/" . $dv['link_dv'];?>)"></div>
            <div class="photo-details w3-animate-top">
                <h1><?php echo $dv['ten_dv'];?><br></h1>
                <p>
                    <strong>
                        <?php echo $dv['tieu_de_dv'];?>
                    </strong>
                    <br>
                    <?php echo $dv['noi_dung_dv'];?>
                    <br>
                </p>
                <p class="copyright">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <?php echo $star;?>/5 trong <?php echo $counts['counts'];?> đánh giá
                </p>
                <?php if ($this->session->userdata("CheckLogin")){?>
                    <form action="<?php echo base_url() . 'index.php/dich_vu/pro_so_sao';?>" method="post">
                        <input type="number" name="so_sao" min="1" max="5" value="5">
                        <input type="hidden" value="<?php echo $dv['id_dv'];?>" name="id_dv">
                        <input class="btn-primary" type="submit" value="Gửi đánh giá của bạn">
                    </form>
                <?php }?>
            </div>
        </div>

        <div class="me-cmt">
            <h1>Đánh giá dịch vụ</h1>
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Phản hồi của du khách</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <?php foreach ($comments as $row){ ?>
                                <p><img src="<?php echo base_url();?>assets/img/user-photo4.jpg" width="20px" height="20px">
                                    <b><?php echo $row['ho_ten'];?></b> : <?php echo $row['binh_luan_dv'];?></p>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <br>

        <div>
            <?php if ($this->session->userdata("CheckLogin")){?>
                <form action="<?php echo base_url() . 'index.php/dich_vu/pro_binh_luan';?>" method="post">
                    <textarea name="binh_luan" class="col-9" cols="70" rows="1"></textarea>
                    <div class="col-3 form-group pull-right">
                        <input type="hidden" value="<?php echo $dv['id_dv'];?>" name="id_dv">
                        <input type="submit" name="ok" value="Bình Luận" class="btn btn-primary btn-block">
                    </div>
                </form>
            <?php }?>
        </div>

        <div class="more-projects">
            <h3 class="text-center">Nhiều hơn</h3>
            <div class="row gallery">
                <?php foreach ($listdvtop4 as $row){ ?>
                    <div class="col-md-4 col-lg-3">
                        <div class="item">
                            <a href="<?php echo base_url() . "index.php/dich_vu/view_detail/" . $row['id_dv'];?>">
                                <img style="width: 100%; height: 180px" class="img-fluid scale-on-hover" src="<?php echo base_url();?>assets/img/dv/<?php echo $row['link_dv'];?>">
                                <p><?php echo $row['ten_dv'];?></p>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>