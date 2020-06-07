<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Sửa Bài Viết : <?php echo $bv['ma_bv'];?></b></h4>
    </div>
    <?php echo form_open_multipart('/admin/pro_edit_bv/' . $bv['ma_bv']); ?>
        <div class="form">
            <table class="table">
                <tr><td><p>Lựa chọn danh mục:</p></td>
                    <td><select name="dm" class="form-control">
                        <?php foreach ($listDanhMuc as $row){?>                            
                            <option value="<?php echo $row["ma_dm"]; ?>" <?php if ($bv["ma_dm"] === $row["ma_dm"]) echo "selected"?> ><?php echo $row["ma_dm"] . ": " . $row["ten_dm"]; ?></option>
                            <?php
                        }
                        ?>
                        <!-- <option value="Danh Mục Khác">Danh Mục Khác</option> -->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>Tiêu đề</p></td>
                    <td><textarea name="td" class="form-control" id="" cols="30" rows="1"><?php echo $bv['tieu_de_bv'];?></textarea></td>
                </tr>
                <tr>
                    <td><P>Nội dung Tóm Tắt</p></td>
                    <td><textarea name="ndtt" class="form-control" id="" cols="30" rows="5"><?php echo $bv['noi_dung_tom_tat_bv'];?></textarea></td>
                </tr>
                <tr>
                    <td><p>Ảnh Bìa: <a href="<?php echo base_url() . 'assets/img/bv/'. $bv['link_anh_bia_bv']; ?>" class="btn btn-primary" target="_blank">Xem Ảnh</a></p></td>
                    <td><p>Chọn Ảnh Mới<input type="file" name="link" class="form-control"></p></td>
                </tr>                
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Lưu" class="btn btn-primary btn-block">
        </div>
    </form>
    <?php echo validation_errors();?>
</div>