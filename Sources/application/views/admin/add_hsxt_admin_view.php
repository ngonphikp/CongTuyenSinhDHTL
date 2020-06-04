<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Thêm Hồ Sơ Xét Tuyển</b></h4>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_hsxt'); ?>
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Họ Tên</label></div>
            <div class="col-lg-7 col-md-7 label-column"><input class="form-control" type="text" name="ht"></div>
        </div>
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Giới Tính</label></div>
            <div class="col-lg-4 col-md-4 label-column">
                <div class="Sex">
                    <div class="form-check"><input class="form-check-input" type="radio" name="gt" value="Nam"><label class="form-check-label">Nam</label></div>
                    <div class="form-check"><input class="form-check-input" type="radio" name="gt" value="Nữ"><label class="form-check-label">Nữ</label></div>
                </div>
            </div>
        </div>
        
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Ngày Sinh</label></div>
            <div class="col-lg-7 col-md-7 label-column"><input class="form-control" type="date" name="ns"></div>
        </div>

        <table class="table">
                
                <tr>
                    <td><p>Tỉnh Thành Phố</p></td>
                    <td><select id="sel" name="loai" class="form-control">
                    <option value="">-- Select --</option>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><p>Quận Huyện</p></td>
                    <td><select name="loai" class="form-control">
                            <option value="Trong Nước">Trong Nước</option>
                            <option value="Ngoài Nước">Ngoài Nước</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><p>Phường Thị Xã</p></td>
                    <td><select name="loai" class="form-control">
                            <option value="Trong Nước">Trong Nước</option>
                            <option value="Ngoài Nước">Ngoài Nước</option>
                        </select>
                    </td>
                </tr>
            </table>
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Tỉnh Thành Phố </label></div>
            <div class="col-lg-7 col-md-7 label-column"><input class="form-control" type="text" name="tinhthanhpho"></div>
        </div>
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Quận Huyện</label></div>
            <div class="col-lg-7 col-md-7 label-column"><input class="form-control" type="text" name="quanhuyen"></div>
        </div>
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Phường Thị Xã</label></div>
            <div class="col-lg-7 col-md-7 label-column"><input class="form-control" type="text" name="phuongthixa"></div>
        </div>
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Số CMND</label></div>
            <div class="col-lg-7 col-md-7 label-column"><input class="form-control" type="text" name="socmnd"></div>
        </div>
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Số Điện Thoại</label></div>
            <div class="col-lg-7 col-md-7 label-column"><input class="form-control" type="text" name="sdt"></div>
        </div>
        
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Email</label></div>
            <div class="col-lg-7 col-md-7 label-column"><input class="form-control" type="text" name="email"></div>
        </div>

        <table class="table">
                <tr>
                    <td><P>Hình ảnh CMND</p></td>
                    <td><input type="file" name="linkcmnd" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Hình ảnh chân dung</p></td>
                    <td><input type="file" name="linkcd" class="form-control"></td>
                </tr>
        </table>
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Tôn giáo</label></div>
            <div class="col-lg-7 col-md-7 label-column"><input class="form-control" type="text" name="tongiao"></div>
        </div>
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label">Ngày đăng kí</label></div>
            <div class="col-lg-7 col-md-7 label-column"><input class="form-control" type="date" name="ngaydangki"></div>
        </div>
    <?php echo validation_errors();?>
</div>