<div class="article-list me-list-dl">
    <div class="container">
        <div class="intro">
            <a href="<?php echo base_url();?>index.php/dich_vu"><h2 class="text-center">Dịch Vụ</h2></a>
            <p class="text-center">Dịch Vụ Uy Tín!</p>
        </div>
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item w3-row-padding">
                <a href="<?php echo base_url();?>index.php/dich_vu/view_pt"><h4>Phương Tiện</h4></a>
                <?php foreach ($listdvpttop2 as $row){?>
                    <div class="w3-margin-bottom">
                        <div class="w3-display-container">
                            <a href="<?php echo base_url() . "index.php/dich_vu/view_detail/" . $row['id_dv'];?>">
                                <div class="w3-display-topleft w3-black w3-padding"><?php echo $row['ten_dv'];?></div>
                                <img class="w3-animate-zoom w3-hover-opacity" src="<?php echo base_url() . "assets/img/dv/". $row['link_dv']; ?>" alt="House" style="width:100%">
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-sm-6 col-md-4 item w3-row-padding">
                <a href="<?php echo base_url();?>index.php/dich_vu/view_pt"><h4>Khách Sạn</h4></a>
                <?php foreach ($listdvkstop2 as $row){?>
                    <div class="w3-margin-bottom">
                        <div class="w3-display-container">
                            <a href="<?php echo base_url() . "index.php/dich_vu/view_detail/" . $row['id_dv'];?>">
                                <div class="w3-display-topleft w3-black w3-padding"><?php echo $row['ten_dv'];?></div>
                                <img class="w3-animate-zoom w3-hover-opacity" src="<?php echo base_url() . "assets/img/dv/". $row['link_dv']; ?>" alt="House" style="width:100%">
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-sm-6 col-md-4 item w3-row-padding">
                <a href="<?php echo base_url();?>index.php/dich_vu/view_bxh"><h4>Bảng Xếp Hạng</h4></a>
                <div class="w3-card w3-margin">
                    <ul class="w3-ul w3-hoverable w3-white w3-animate-top">
                        <?php
                        $stt = 1;
                        foreach ($listdvbxhtop6 as $row){?>
                            <a href="<?php echo base_url() . "index.php/dich_vu/view_detail/" . $row['id_dv'];?>">
                                <?php if ($stt <= 3){ ?>
                                    <li class="w3-padding-16">
                                <?php } else{?>
                                    <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                                <?php }?>
                                <img src="<?php echo base_url() . "assets/img/dv/". $row['link_dv']; ?>" alt="Image" class="w3-left w3-margin-right"style="width:50px">
                                <span><b><?php echo "Top: " . $stt++;?></b></span>
                                <span><?php echo $row['ten_dv'];?></span>
                                </li>
                            </a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>