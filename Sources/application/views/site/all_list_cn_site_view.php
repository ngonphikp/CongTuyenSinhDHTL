<div class="me-cn container">
    <div class="me-top-cn">
        <img src="<?php echo base_url();?>/assets/img/camnang.png" alt="Cinque Terre" width="1000" height="300">
        <div class="word">
            <h1 class="w3-animate-top">Cẩm nang du lịch</h1>
            <ul>
                <li class="w3-animate-left">Cung cấp thông tin mới về du lịch</li>
                <li class="w3-animate-right">Khám phá các vùng đất trên thế giới</li>
                <li class="w3-animate-left">Tra thông tin về văn hóa du lịch</li>
                <li class="w3-animate-right">Những địa điểm du lịch đẹp</li>
                <li class="w3-animate-left">Kinh nghiệm về đi đâu ăn gì</li>
                <li class="w3-animate-right">Tất tần tật những điều không thể bỏ qua</li>
            </ul>
        </div>
    </div>

    <main class="page service-page">
        <section class="clean-block clean-services dark">
            <div class="row">
                <?php
                foreach ($listcn as $row){?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img height = "250px" class="card-img-top w-100 d-block w3-animate-zoom" src="<?php echo base_url() . "assets/img/cn/". $row['link_cn']; ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row['tieu_de_cn'];?></h4>
                                <p class="card-text"><?php echo substr($row['noi_dung_cn'], 0,150) . "...";?></p>
                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" type="button" href="<?php echo base_url();?>index.php/cam_nang/view_detail/<?php echo $row['id_cn'];?>">Learn More</a></div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="list123">
                <?php echo $this->pagination->create_links();?>
            </div>
        </section>
    </main>
</div>