<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Thêm Ngành đào tạo</b></h4>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_dd'); ?>
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Tên</p></td>
                    <td><textarea name="ten" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
               
                <tr>
                    <td><P>chuong_trinh_dao_tao</p></td>
                    <td><textarea name="nd" class="form-control" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><P>Hình ảnh</p></td>
                    <td><input type="file" name="link" class="form-control"></td>
                </tr>
                <tr>
                    <td><p>Lựa chọn cơ sở</p></td>
                    <td><select name="loai" class="form-control">
                            <option value="Cơ sở 1">Cơ sở 1</option>
                            <option value="Cơ sở 2">Cơ sở 2</option>
                            <option value="Cơ sở 3">Cơ sở 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>gioi_thieu</p></td>
                    <td><textarea name="td" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block">
        </div>
    </form>
    <?php echo validation_errors();?>
</div>