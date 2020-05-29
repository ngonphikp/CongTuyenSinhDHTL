<div id="nt-compact">
    <ul>
        <li><a class="btn" href="<?php echo base_url();?>"><i class="fa fa-th-large"></i><div class="nt-tooltip"><p style="font-family:'Ubuntu Condensed', sans-serif;">Traveling</p></div></a></li>
        <li><a class="btn" href="<?php echo base_url();?>index.php/dia_diem"><i class="fa fa-heart"></i><div class="nt-tooltip"><p style="font-family:'Ubuntu Condensed', sans-serif;">ĐịaĐiểm</p></div></a></li>
        <li><a class="btn" href="<?php echo base_url();?>index.php/dich_vu"><i class="fa fa-list-alt"></i><div class="nt-tooltip"><p style="font-family:'Ubuntu Condensed', sans-serif;">DịchVụ</p></div></a></li>
        <li><a class="btn" href="<?php echo base_url();?>index.php/bang_xep_hang"><i class="fa fa-calendar"></i><div class="nt-tooltip"><p style="font-family:'Ubuntu Condensed', sans-serif;">BảngXếpHạng</p></div></a></li>
        <li><a class="btn" href="<?php echo base_url();?>index.php/cam_nang"><i class="fa fa-bar-chart-o"></i><div class="nt-tooltip"><p style="font-family:'Ubuntu Condensed', sans-serif;">CẩmNang</p></div></a></li>
        <?php
        if ($this->session->userdata("CheckLogin")){?>
            <li><a class="btn" href="<?php echo base_url() . "index.php/home/ttcn/" . $this->session->userdata("id_tk");?>" title="settings"><i class="fa fa-cogs"></i><div class="nt-tooltip"><p style="font-family:'Ubuntu Condensed', sans-serif;">Settings</p></div></a></li>
            <li><a class="btn" href="<?php echo base_url();?>index.php/login/logout"><i class="fa fa-power-off"></i><div class="nt-tooltip"><p style="font-family:'Ubuntu Condensed', sans-serif;">Logout</p></div></a></li>
        <?php }
        else{?>
            <li><a class="btn btnDangNhap"><i class="fa fa-user"></i><div class="nt-tooltip"><p style="font-family:'Ubuntu Condensed', sans-serif;">ĐăngNhập</p></div></a></li>
            <li><a class="btn" href="<?php echo base_url();?>index.php/home/register"><i class="fa fa-sign-in"></i><div class="nt-tooltip"><p style="font-family:'Ubuntu Condensed', sans-serif;">ĐăngKý</p></div></a></li>
        <?php }?>
    </ul>
</div>