<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Thêm Cẩm Nang</b></h4>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_cn'); ?>
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Tiêu đề</p></td>
                    <td><textarea name="td" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
                <tr>
                    <td><P>Nội dung</p></td>
                    <td><textarea name="nd" class="form-control" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><P>Hình ảnh</p></td>
                    <td><input type="file" name="link" class="form-control"></td>
                </tr>
                <tr>
                    <td><P>Nội dung</p></td>
                    <td><textarea name="nd" class="form-control" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><P>Hình ảnh</p></td>
                    <td><input type="file" name="link" class="form-control"></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right">
            <input type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block">
        </div>
    </form>
    <?php echo validation_errors();?>
</div>