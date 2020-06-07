<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Bảng Danh Mục</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">            
            <?php            
                function CreateListChild($listDm, $ma_cha){
                    foreach($listDm as $dm){                        
                        if ($dm["ma_dm_cha"] == $ma_cha){?>
                            <ul>
                                <li>
                                    <a href="#"><?php echo $dm["ma_dm"] . ": " . $dm["ten_dm"];?></a>
                                    <?php CreateListChild($listDm, $dm["ma_dm"]); ?>                                                                        
                                </li>
                            </ul>
                            <?php
                        }
                    }
                }
            ?>
            <?php CreateListChild($listDm, null); ?>
            <button type="button" class="btn btn-primary">+</button>

            <?php echo form_open_multipart('/admin/pro_add_dm'); ?>
                <div class="form">
                    <table class="table">
                        <tr>
                            <td><P>Mã: </p></td>
                            <td><textarea name="ma" class="form-control" id="" cols="30" rows="1"></textarea></td>
                            <td><P>Tên: </p></td>
                            <td><textarea name="ten" class="form-control" id="" cols="30" rows="1"></textarea></td>
                        </tr>
                    </table>
                </div>                
                <div class="col-md-3 form-group pull-right">
                    <input type="submit" name="ok" value="Xác nhận" class="btn btn-primary btn-block">
                </div> 
                <div class="col-md-3 form-group pull-right">
                    <input value = "Hủy" class="btn btn-default btn-block">
                </div>               
            </form>
            <?php echo validation_errors();?>

        </div>
    </div>
</div>