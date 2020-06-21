<div class="content">
    <div class="col-md-12">
        <h1 class="title_form">Thêm bài viết</h1>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_bv'); ?>
        <div class="form">
            <div class="form-row form-group">
                <div class="col-lg-2 col-md-2 label-column"><label class="col-form-label">Lựa chọn danh mục</label></div>
                <div class="col-lg-8 col-md-8 input-column">
                    <select name="dm" class="form-control">
                        <?php foreach ($listDanhMuc as $row){?>                            
                            <option value="<?php echo $row["ma_dm"]; ?>"><?php echo $row["ma_dm"] . ": " . $row["ten_dm"]; ?></option>
                            <?php
                        }
                        ?>
                        <!-- <option value="Danh Mục Khác">Danh Mục Khác</option> -->
                    </select>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-2 col-md-2 label-column"><label class="col-form-label">Tiêu đề</label></div>
                <div class="col-lg-8 col-md-8 label-column">
                    <textarea name="chuongtrinhdaotao" id="" cols="30" rows="2" style="width:100%;"></textarea>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-2 col-md-2 label-column"><label class="col-form-label">Nội dung tóm tắt</label></div>
                <div class="col-lg-8 col-md-8 label-column">
                    <textarea name="chuongtrinhdaotao" id="" cols="30" rows="3" style="width:100%;"></textarea>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-2 col-md-2 label-column"><label class="col-form-label">Ảnh bìa</label></div>
                <div class="col-lg-2 col-md-2 label-column">
                    <input class="form-control" type="file" name="anhbia">
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-2 col-md-2 label-column"><label class="col-form-label"></label></div>
                <div class="col-lg-8 col-md-8 row_add-bv ">
                    <input value="Thêm chi tiết" class="btn btn-primary" id = "add_ctbv_form_add_bv">                  
                    <div class="add_bv">
                        <input type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block" id = "save_form_add_bv">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php echo validation_errors();?>
</div>