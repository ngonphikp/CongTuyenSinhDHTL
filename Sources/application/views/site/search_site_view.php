<div class="container">
    <h1 align="center"> Tìm Kiếm Nâng Cao</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="w3-row-padding w3-padding-64 w3-theme-l1">
                <a href="<?php echo base_url();?>index.php/dia_diem"><h3 align="center">Địa Điểm : <?php echo $countdd; ?> Kết quả</h3></a>
                <br>
                <?php foreach ($listdds as $row){?>
                    <div class="w3-quarter" style="width: 100%">
                        <div class="w3-card w3-white">
                            <a href="<?php echo base_url() . "index.php/dia_diem/view_detail/" . $row['id_dd'];?>">
                                <img class="w3-animate-zoom w3-hover-opacity" src="<?php echo base_url() . "assets/img/dd/". $row['link_dd']; ?>" alt="Snow" style="width:100%">
                            </a>
                            <div class="w3-container">
                                <p><?php echo $row['tieu_de_dd']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="w3-row-padding w3-padding-64 w3-theme-l1">
                <a href="<?php echo base_url();?>index.php/cam_nang"><h3 align="center">Cẩm Nang : <?php echo $countcn; ?> Kết quả</h3></a>
                <br>
                <?php foreach ($listcns as $row){?>
                    <div class="w3-quarter" style="width: 100%">
                        <div class="w3-card w3-white">
                            <a href="<?php echo base_url() . "index.php/cam_nang/view_detail/" . $row['id_cn'];?>">
                                <img class="w3-animate-zoom w3-hover-opacity" src="<?php echo base_url() . "assets/img/cn/". $row['link_cn']; ?>" alt="Snow" style="width:100%">
                            </a>
                            <div class="w3-container">
                                <p><?php echo $row['tieu_de_cn']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="w3-row-padding w3-padding-64 w3-theme-l1">
                <a href="<?php echo base_url();?>index.php/dich_vu"><h3 align="center">Dịch Vụ : <?php echo $countdv; ?> Kết quả</h3></a>
                <br>
                <?php foreach ($listdvs as $row){?>
                    <div class="w3-quarter" style="width: 100%">
                        <div class="w3-card w3-white">
                            <a href="<?php echo base_url() . "index.php/dich_vu/view_detail/" . $row['id_dv'];?>">
                                <img class="w3-animate-zoom w3-hover-opacity" src="<?php echo base_url() . "assets/img/dv/". $row['link_dv']; ?>" alt="Snow" style="width:100%">
                            </a>
                            <div class="w3-container">
                                <p><?php echo $row['tieu_de_dv']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>