<div class="article-list me-list-dd">
    <div class="container">
        <div class="intro">
            <a href="<?php echo base_url();?>index.php/dia_diem"><h2 class="text-center">Địa Điểm</h2></a>
            <p class="text-center">Địa Điểm Phong Phú!</p>
        </div>
        <div class="row articles">
            <div class="col-sm-6 col-md-3 item">
                <a href="<?php echo base_url();?>index.php/dia_diem/view_bxh"><h4>Bảng Xếp Hạng</h4></a>
                <?php
                $stt = 1;
                foreach ($listddbxhtop2 as $row){?>
                    <a href="<?php echo base_url() . "index.php/dia_diem/view_detail/" . $row['id_dd'];?>">
                        <img class="img-fluid w3-animate-zoom w3-hover-opacity" src="<?php echo base_url() . "assets/img/dd/". $row['link_dd']; ?>">
                    </a>
                    <h3 class="name">Top <?php echo $stt++;?></h3>
                <?php } ?>
            </div>
            <div class="col-sm-6 col-md-3 item">
                <a href="<?php echo base_url();?>index.php/dia_diem/view_moi"><h4>Địa Điểm Mới</h4></a>
                <?php foreach ($listddtop2 as $row){?>
                    <a href="<?php echo base_url() . "index.php/dia_diem/view_detail/" . $row['id_dd'];?>">
                        <img class="img-fluid w3-animate-zoom w3-hover-opacity" src="<?php echo base_url() . "assets/img/dd/". $row['link_dd']; ?>">
                    </a>
                    <h3 class="name"><?php echo $row['ten_dd'];?></h3>
                <?php } ?>
            </div>
            <div class="col-sm-6 col-md-3 item">
                <a href="<?php echo base_url();?>index.php/dia_diem/view_trong_nuoc"><h4>Địa Điểm Trong Nước</h4></a>
                <?php foreach ($listddtntop2 as $row){?>
                    <a href="<?php echo base_url() . "index.php/dia_diem/view_detail/" . $row['id_dd'];?>">
                        <img class="img-fluid w3-animate-zoom w3-hover-opacity" src="<?php echo base_url() . "assets/img/dd/". $row['link_dd']; ?>">
                    </a>
                    <h3 class="name"><?php echo $row['ten_dd'];?></h3>
                <?php } ?>
            </div>
            <div class="col-sm-6 col-md-3 item">
                <a href="<?php echo base_url();?>index.php/dia_diem/view_ngoai_nuoc"><h4>Địa Điểm Ngoài Nước</h4></a>
                <?php foreach ($listddnntop2 as $row){?>
                    <a href="<?php echo base_url() . "index.php/dia_diem/view_detail/" . $row['id_dd'];?>">
                        <img class="img-fluid w3-animate-zoom w3-hover-opacity" src="<?php echo base_url() . "assets/img/dd/". $row['link_dd']; ?>">
                    </a>
                    <h3 class="name"><?php echo $row['ten_dd'];?></h3>
                <?php } ?>
            </div>
        </div>
    </div>
</div>