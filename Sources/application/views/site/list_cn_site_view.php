<!-- Work Row -->
<div class="container">
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">
    <div class="w3-quarter">
        <a href="<?php echo base_url();?>index.php/cam_nang"><h2 class="text-center">Cẩm nang</h2></a>
        <p>Cẩm nang du lịch – Cung cấp thông tin mới về du lịch, kinh nghiệp du lịch, khám phá các vùng đất trên thế giới, cơ hội nhạn khuyến mãi hàng ngày.</p>
    </div>
    <?php foreach ($listcntop3 as $row){?>
        <div class="w3-quarter">
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