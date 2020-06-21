<div class="content">
    <div class="col-md-12">
        <h1 class="title_form">Thêm ngành đào tạo</h1>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_ndt'); ?>
        <div class="form">
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Mã ngành</label></div>
                <div class="col-lg-8 col-md-8 input-column"><input class="form-control" type="text" name=""></div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Tên ngành</label></div>
                <div class="col-lg-8 col-md-8 input-column"><input class="form-control" type="text" name="manganh"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Chương trình đào tạo</label></div>
                <div class="col-lg-8 col-md-8 label-column">
                    <textarea name="chuongtrinhdaotao" id="" cols="30" rows="2" style="width:100%;"></textarea>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Ghi chú</label></div>
                <div class="col-lg-8 col-md-8 label-column">
                    <textarea name="ghichu" id="" cols="30" rows="2" style="width:100%;"></textarea>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Giới thiệu</label></div>
                <div class="col-lg-8 col-md-8 label-column">
                    <textarea name="gioithieu" id="" cols="30" rows="2" style="width:100%;"></textarea>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Lựa chọn cơ sở</label></div>
                <div class="col-lg-8 col-md-8 label-column">
                    <select name="coso" class="form-control">
                        <?php foreach ($listCoSoDaoTao as $row){?>                            
                            <option value="<?php echo $row["ma_csdt"]; ?>"><?php echo $row["ma_csdt"] . ": " . $row["ten_csdt"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label"></label></div>
                <div class="col-lg-8 col-md-8 label-column"> <input class="btn btn-info" type="submit" value="Thêm"></div>
            </div>
        </div>
    </form>
    <?php echo validation_errors();?>
</div>