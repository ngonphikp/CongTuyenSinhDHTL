<div class="me-dvpt container article-list me-top3">
    <div class="intro">
        <h2 class="text-center">Bảng Xếp Hạng Dịch Vụ</h2>
        <p class="text-center">Dựa trên sự đánh giá , bình chọn của khách hàng, traveling đưa ra danh sách những địa điểm và dịch vu được nhiều du khách yêu thích, lựa chọn và đánh giá cao .</p>
    </div>
    <div class="row">
        <?php
        foreach ($listdvbxhtop3 as $row){?>
            <div class="col-4 py-3 mx-auto col-xl-4 col-lg-6 col-md-6 col-sm-10" style="min-width:280px;min-height:280px;">
                <div class="card" style="width:100%;height:100%;">
                    <img class="img-fluid card-img-top w3-animate-zoom" src="<?php echo base_url() . "assets/img/dv/". $row['link_dv']; ?>" style="height:200px;">
                    <div class="card-body" style="background-color: aliceblue">
                        <h5><?php echo $row['ten_dv']?></h5>
                        <p><?php echo $row['tieu_de_dv']?></p>
                    </div>
                    <div class="card-footer text-center w3-animate-top"><small>
                            <a href="<?php echo base_url(). "index.php/dich_vu/view_detail/" . $row['id_dv'];?>"><i class="fa fa-eye pr-1"></i>Visit<br></a>
                        </small></div>
                </div>
            </div>
            <?php
        }
        ?>
        <div id="top3show"><a href="<?php echo base_url();?>index.php/dich_vu/view_bxh">Xem thêm</a></div>
    </div>
</div>