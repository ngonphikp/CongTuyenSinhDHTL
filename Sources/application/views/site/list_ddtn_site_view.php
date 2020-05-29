<div class="article-list me-top3">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Địa Điểm Trong Nước</h2>
            <p class="text-center">Du lịch trong nước luôn là lựa chọn tuyệt vời. Đường bờ biển dài hơn 3260km, những khu bảo tồn thiên nhiên tuyệt vời, những thành phố nhộn nhịp, những di tích lịch sử hào hùng, nền văn hóa độc đáo và hấp dẫn, cùng một danh sách dài những món ăn ngon nhất thế giới, Việt Nam có tất cả những điều đó</p>
        </div>
        <div class="row articles">
            <?php
            foreach ($listddtntop3 as $row){?>
                <div class="col-sm-6 col-md-4 item">
                    <a href="<?php echo base_url() . "index.php/dia_diem/view_detail/" . $row['id_dd'];?>">
                        <img class="img-fluid w3-animate-zoom w3-hover-opacity" src="<?php echo base_url() . "assets/img/dd/". $row['link_dd']; ?>">
                    </a>
                    <h3 class="name"><?php echo $row['ten_dd'];?></h3>
                    <p class="description"><?php echo $row['tieu_de_dd'];?></p>
                </div>
            <?php
            }
            ?>
            <div id="top3show"><a href="<?php echo base_url();?>index.php/dia_diem/view_trong_nuoc">Xem thêm</a></div>
        </div>
    </div>
</div>