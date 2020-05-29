<div class="article-list">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Địa Điểm Mới</h2>
            <p class="text-center">Traveling mang đến du khách các sản phẩm và điểm đến mới của du lịch Việt Nam cũng như quốc tế; đồng thời mong muốn Chính phủ Việt Nam nới lỏng hơn nữa các thủ tục nhập cảnh cho khách du lịch quốc tế, đặc biệt khách đến từ các thị trường Tây Âu như Anh, Pháp và Đức.</p>
        </div>
        <div class="row articles">
            <?php
            foreach ($listddm as $row){?>
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