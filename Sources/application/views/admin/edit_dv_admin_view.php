<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Sửa Địa Điểm Du Lịch : <?php echo $dv['id_dv'];?></b></h4>
    </div>
    <?php echo form_open_multipart('/admin/pro_edit_dv/' . $dv['id_dv']); ?>
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Tên</p></td>
                    <td><textarea name="ten" class="form-control" id="" cols="30" rows="1"><?php echo $dv['ten_dv'];?></textarea></td>
                </tr>
                <tr>
                    <td><P>Tiêu đề</p></td>
                    <td><textarea name="td" class="form-control" id="" cols="30" rows="1"><?php echo $dv['tieu_de_dv'];?></textarea></td>
                </tr>
                <tr>
                    <td><P>Nội dung</p></td>
                    <td><textarea name="nd" class="form-control" id="" cols="30" rows="10"><?php echo $dv['noi_dung_dv'];?></textarea></td>
                </tr>
                <tr>
                    <td><P>Hình ảnh</p></td>
                    <td><input type="file" name="link" class="form-control"></td>
                </tr>
                <tr>
                    <td><p>Lựa chọn danh mục</p></td>
                    <td><select name="loai" class="form-control">
                            <option value="Khách Sạn" selected>Khách Sạn</option>
                            <option value="Phương Tiện" <?php if ($dv['loai'] === "Phương Tiện") echo "selected"?>>Phương tiện</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Lưu" class="btn btn-primary btn-block">
        </div>
    </form>
</div>