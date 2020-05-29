<div class="article-list">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Địa Điểm Ngoài Nước</h2>
            <p class="text-center"> Các tour du lịch nước ngoài với nhiều khuyến mãi ưu đãi cho khách hàng. Ngoài các tour thăm quan các điểm du lịch nổi tiếng nước ngoài như du lịch Thái Lan, du lịch Singapore, du lịch Malaysia, du lịch Campuchia, du lịch Trung Quốc, du lịch Hồng Kông, du lịch Hàn Quốc, du lịch Nhật Bản, du lịch Châu Âu, du lịch Mỹ… Chúng tôi còn cung cấp các tour du lịch và lịch khởi hành thăm quan tất cả các điểm khác trên thế giới. Các tour du lịch nước ngoài khởi hành hàng tuần xuất phát từ Hà Nội và Sài Gòn. Traveling cung cấp các tour du lịch nước ngoài chất lượng hàng đầu, đảm bảo uy tín,ưu đãi tốt nhất</p>
        </div>
        <div class="row articles">
            <?php
            foreach ($listddnn as $row){?>
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
        </div>
        <div class="list123">
            <?php echo $this->pagination->create_links();?>
        </div>
    </div>
</div>