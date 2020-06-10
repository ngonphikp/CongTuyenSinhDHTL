<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Thêm Bài Viết</b></h4>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_bv'); ?>
        <div class="form">
            <table class="table">
                <tr><td><p>Lựa chọn danh mục</p></td>
                    <td><select name="dm" class="form-control">
                        <?php foreach ($listDanhMuc as $row){?>                            
                            <option value="<?php echo $row["ma_dm"]; ?>"><?php echo $row["ma_dm"] . ": " . $row["ten_dm"]; ?></option>
                            <?php
                        }
                        ?>
                        <!-- <option value="Danh Mục Khác">Danh Mục Khác</option> -->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>Tiêu đề</p></td>
                    <td><textarea name="td" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
                <tr>
                    <td><P>Nội dung Tóm Tắt</p></td>
                    <td><textarea name="ndtt" class="form-control" id="" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td><P>Ảnh Bìa</p></td>
                    <td><input type="file" name="link" class="form-control"></td>
                </tr>
                
                <!-- Form CTBV + Trừ -->
                <!-- Ảnh + Nội dung chi tiết -->
                <tr>
                    <td><input type="button" value="-">
                        <p>Nội dung chi tiết</p>
                        <textarea name="ndct" class="form-control" id="" cols="30" rows="3"></textarea>
                    </td>
                    <td><P>Ảnh chi tiết</p>
                        <input type="file" name="linkct" class="form-control"></td>
                </tr>
                
                <!-- Cộng -->
                <tr>
                    <td></td>
                    <td><input type="button" value="+"></td>
                </tr>

            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block">
        </div>
    </form>
    <?php echo validation_errors();?>
</div>