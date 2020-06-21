<div class="content">
    <div class="col-md-12 ">
        <h1 class="title_form">Thêm Cơ sở đào tạo</h1>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_csdt'); ?>
        <div class="form">
            <table class="table">
                <table class="table">
                <tr>
                    <td><P>Tên cơ sở đào tạo:</p></td>
                    <td><textarea name="tencsdt" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
                <tr>
                    <td><p>Tỉnh/TP:</p></td>
                    <td>
                    
                    <select id="seltinhthanhphocsdt" name="tinhthanhphocsdt" class="form-control">
                    <option value="">Chọn tỉnh thành phố</option>
                            
                        </select>
                        <!-- <select id="sel">
        <option value="">Chọn tỉnh thành phố</option> -->
                        <!-- </select> -->
                    </td>
                </tr>
                <tr>
                    <td><p>Quận/huyện:</p></td>
                    <td><select id="selquanhuyencsdt" name="quanhuyencsdt" class="form-control">
                    <option value="">Chọn quận huyện</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>Xã/phường:</p></td>
                    <td><textarea name="phuongthixacsdt" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
                <tr>
                    <td><P>Thôn/bản/đường phố:</p></td>
                    <td><textarea name="thonbanduongphocsdt" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
            </table>
                
            </table>
        </div>
        <div class="form-row form-group">
            <div class="col-lg-4 col-md-4 label-column"><label class="col-form-label"></label></div>
            <div class="col-lg-8 col-md-8 label-column">
                <input class="btn btn-info" type="submit" value="Thêm">
            </div>
        </div>
        
    </form>
    <?php echo validation_errors();?>
</div>