<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Sửa Danh Mục : <?php echo $dm['ma_dm'];?></b></h4>
    </div>
    <?php echo form_open_multipart('/admin/pro_edit_dm/' . $dm['ma_dm']); ?>
        <div class="form">
            <table class="table">
                <tr>
                    <td><P>Tên</p></td>
                    <td><textarea name="ten" class="form-control" id="" cols="30" rows="1"><?php echo $dm['ten_dm'];?></textarea></td>
                </tr>
                <tr>
                    <td><p>Lựa chọn danh mục cha</p></td>
                    <td><select name="ma_cha" class="form-control">
                        <?php foreach ($listDanhMuc as $row){?>                            
                            <option value="<?php echo $row["ma_dm"]; ?>" <?php if ($dm["ma_dm_cha"] === $row["ma_dm"]) echo "selected"?>><?php echo $row["ma_dm"] . ": " . $row["ten_dm"]; ?></option>
                            <?php
                        }
                        ?>
                        <!-- <option value="Danh Mục Khác">Danh Mục Khác</option> -->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Danh mục con: </p>
                        <input type="button" value="+" class = "btn btn-primary">
                    </td>
                    <td>   
                        <?php
                            foreach ($dmC as $row){?>
                                <table class="table">
                                    <tr>
                                        <td>
                                            <button>X</button>
                                            <button>I</button>
                                            </td>
                                        <td><P>Mã: </p></td>
                                        <td><textarea name="maC<?php echo $row['ma_dm']; ?>" class="form-control" id="" cols="30" rows="1"><?php echo $row['ma_dm'];?></textarea></td>
                                        <td><P>Tên: </p></td>
                                        <td><textarea name="tenC<?php echo $row['ma_dm']; ?>" class="form-control" id="" cols="30" rows="1"><?php echo $row['ten_dm'];?></textarea></td>
                                    </tr>
                                </table>
                                <?php
                            }                                                    
                        ?>                                           
                    </td>
                </tr> 
            </table>            
        </div>        
        <div class="col-md-3 form-group pull-right">  
        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url() . "index.php/admin/delete_dm/" . $dm['ma_dm'];?>"><em class="fa fa-trash"></em></a>
            <input type="submit" name="ok" value="Lưu" class="btn btn-primary btn-block">
        </div>
    </form>
    <?php echo validation_errors();?>
</div>