<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Thêm Hồ Sơ Xét Tuyển</b></h4>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_hsxt'); ?>
        
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Họ, chữ đệm và tên của thí sinh:</label>
                                        <input type="text" class="form-control" id="" name="ht" placeholder="Họ, chữ đệm và tên của thí sinh">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Giới tính:</label>
                                        <select name="" id="input" class="form-control" required="required" name="gt">
                                            <option value="">Giới tính</option>
                                            <option value="">Nam</option>
                                            <option value="">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Ngày/tháng/năm sinh:</label>
                                        <input type="text" class="form-control" id="" name="ns" placeholder="Họ, chữ đệm và tên của thí sinh">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Nơi sinh:</label>
                                        <select id="selNoiSinhAddHsxt" name="noisinh" class="form-control">
                    <option value="">Chọn nơi sinh</option>
                    </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Dân tộc:</label>
                                        <select id="selDanTocAddHsxt" name="dantoc" class="form-control">
                    <option value="">Chọn dân tộc</option>
                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Chứng minh thư nhân dân:</label>
                                        <input type="text" class="form-control" name="socmnd" id="" placeholder="Số chứng minh thư nhân dân hoặc căn cước công dân">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Ngày cấp:</small> </label>
                                        <input type="date" name="ngaycap" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Nơi cấp:<small>(ghi theo cmnd/cccd)</small> </label>
                                        <input type="text" class="form-control" id="" name="noicap">
                                    </div>
                                </div>
                            </div>
                        
                        

                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <b>Hộ khẩu thường trú</b>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Tỉnh/TP:</label>
                                        <select id="selTinhThanhPhoAddHsxt" name="tinhthanhpho" class="form-control">
                    <option value="">Chọn tỉnh thành phố</option>
                            
                        </select> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Quận/huyện:</label>
                                        <select id="selQuanHuyenAddHsxt" name="quanhuyen" class="form-control">
                    <option value="">Chọn quận huyện</option>
                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Xã/phường:</label>
                                        <input type="text" class="form-control" name="phuongthixa" id="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Thôn/bản/đường phố:</label>
                                        <input type="text" class="form-control" id="" name="thonbanduongpho">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <p><b>Nơi học lớp 10 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và ghi mã tỉnh, mã trường)</p>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <!-- Lớp 10 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Tỉnh/TP:</label>
                                        <select id="selTinhThanhPhoLop10AddHsxt" name="tinhthanhpholop10" class="form-control">
                    <option value="">Chọn tỉnh thành phố</option>
                            
                        </select> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Quận/huyện:</label>
                                        <select id="selQuanHuyenLop10AddHsxt" name="quanhuyenlop10" class="form-control">
                    <option value="">Chọn quận huyện</option>
                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Trường THPT:</label>
                                        <select id="selTruongThptLop10AddHsxt" name="truongthptlop10" class="form-control">
                    <option value="">Chọn trường:</option>
                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- END 10 -->

                            <!-- Lớp 11 -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <p><b>Nơi học lớp 11 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và ghi mã tỉnh, mã trường)</p>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Tỉnh/TP:</label>
                                        <select id="selTinhThanhPhoLop11AddHsxt" name="tinhthanhpholop11" class="form-control">
                    <option value="">Chọn tỉnh thành phố</option>
                            
                        </select> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Quận/huyện:</label>
                                        <select id="selQuanHuyenLop11AddHsxt" name="quanhuyenlop11" class="form-control">
                    <option value="">Chọn quận huyện</option>
                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Trường THPT:</label>
                                        <select id="selTruongThptLop11AddHsxt" name="truongthptlop11" class="form-control">
                    <option value="">Chọn trường:</option>
                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- END 11 -->

                            <!-- Lớp 12 -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <p><b>Nơi học lớp 12 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và ghi mã tỉnh, mã trường)</p>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Tỉnh/TP:</label>
                                        <select id="selTinhThanhPhoLop12AddHsxt" name="tinhthanhpholop12" class="form-control">
                    <option value="">Chọn tỉnh thành phố</option>
                            
                        </select> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Quận/huyện:</label>
                                        <select id="selQuanHuyenLop12AddHsxt" name="quanhuyenlop12" class="form-control">
                    <option value="">Chọn quận huyện</option>
                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Trường THPT:</label>
                                        <select id="selTruongThptLop12AddHsxt" name="truongthptlop12" class="form-control">
                    <option value="">Chọn trường:</option>
                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- END 12 -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Điện thoại liên lạc:</label>
                                        <input type="text" class="form-control" id="" placeholder="Điện thoại liên lạc">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Email:</label>
                                        <input type="text" class="form-control" id="" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Năm tốt nghiệp:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">2020</option>
                                            <option value="">2021</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Khu vực ưu tiên:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">KV1</option>
                                            <option value="">KV2</option>
                                            <option value="">KV2 - NT</option>
                                            <option value="">KV3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Đối tượng ưu tiên (nếu có):</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value="">Đối tượng ưu tiên </option>
                                            <option value="">01</option>
                                            <option value="">02</option>
                                            <option value="">03</option>
                                            <option value="">04</option>
                                            <option value="">05</option>
                                            <option value="">06</option>
                                            <option value="">07</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:15px 0;">
                                <div class="col-md-12">
                                    <p style="color:#dd4b39;">Lưu ý: Mỗi CMTND chỉ được lưu 1 lần, vui lòng kiểm tra kỹ các thông tin trước khi đăng ký. </p>
                                    
                                    <button type="button" class="btn btn-info">
                                        <i class="fas fa-file"></i>
                                        Lưu
                                    </button>
                                </div>
                                
                            </div>



                            
            <div class="row">

<div class="col-md-12">
    <div style="border-bottom:0px solid #AAA;padding-top:10px;margin-bottom: 15px;" ng-click="ShowAspire()" ng-show="!ViewAspireForm">
        <label><i class="fa fa-plus" aria-hidden="true"></i> Thêm nguyện vọng đăng ký</label>
    </div>
    <div style="border-bottom:0px solid #AAA;padding-top:10px;margin-bottom: 15px;" ng-click="HiddenAspire()" ng-show="ViewAspireForm">
        <label><i class="fa fa-minus" aria-hidden="true"></i> Thêm nguyện vọng đăng ký</label>
    </div>
</div>
</div>
<div ng-show="ViewAspireForm">
<div class="row">
    <div class="col-sm-6 col-12">
        <label>Cơ sở đào tạo :</label>
        <select ng-model="item.Aspiration.EduBaseCode" ng-options="sc.BaseCode as sc.Name for (key, sc) in AllEducationBase" ng-change="EducationBaseChange(item.Aspiration.EduBaseCode)" class="form-control select2" style="width: 100%;" ng-disabled="item.ProgressStep==4">
        </select>
    </div>
    <div class="col-sm-6 col-12">
        <label>Nguyện vọng:</label>
        <select ng-model="item.Aspiration.AspirationOrder" ng-options="sc.Id as sc.Name for (key, sc) in MyAspiration" ng-change="AspirationChange(item.Aspiration.AspirationOrder,'')" class="form-control select2" style="width: 100%;" ng-disabled="item.ProgressStep==4">
        </select>
    </div>
</div>

<div class="row">
    <div class="col-sm-4 col-12">
        <label>Ngành/Nhóm ngành xét tuyển :</label>
        <select ng-model="item.Aspiration.ProgramCode" ng-options="sc.ProgramCode as sc.ProgramsName for (key, sc) in EducationBase.educationPrograms" class="form-control select2" style="width: 100%;" ng-disabled="item.ProgressStep==4">
        </select>
    </div>
    <div class="col-sm-4 col-12">
        <label>Mã xét tuyển :</label>
        <input type="text" ng-model="item.Aspiration.ProgramCode" class="form-control" placeholder="mã xét tuyển" required disabled>
    </div>
    <div class="col-sm-4 col-12">
        <label>Tổ hợp xét tuyển:</label>
        <select ng-model="item.Aspiration.CombinCode" ng-options="sc.CombinCode as sc.CombinName for (key, sc) in AllCombination" ng-change="CombinationChange(item.Aspiration.CombinCode)" class="form-control select2" style="width: 100%;" ng-disabled="item.ProgressStep==4">
        </select>
    </div>
</div>
<!--Điểm lớp 10 THPT-->
<div class="row">
    <div class="col-sm-4 col-12">
        <label>Lớp 10 :</label><span ng-bind-html="CombinSubjectByCode[0].SubjectCode"></span>
        <input type="number" max="10" class="form-control" ng-model="item.Aspiration.GPA10_1" id="GPA10_1" placeholder="Điểm trung bình cả năm môn 1 {{CombinSubjectByCode[0].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
    </div>
    <div class="col-sm-4 col-12">
        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[1].SubjectCode"></span>
        <input type="number" max="10" class="form-control" ng-model="item.Aspiration.GPA10_2" id="GPA10_2" placeholder="Điểm trung bình cả năm môn 2 {{CombinSubjectByCode[1].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
    </div>
    <div class="col-sm-4 col-12">
        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[2].SubjectCode"></span>
        <input type="number" max="10" class="form-control" ng-model="item.Aspiration.GPA10_3" id="GPA10_3" placeholder="Điểm trung bình cả năm môn 3 {{CombinSubjectByCode[2].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
    </div>
</div>
<!--Điểm lớp 11 THPT-->
<div class="row">
    <div class="col-sm-4 col-12">
        <label>Lớp 11 :</label><span ng-bind-html="CombinSubjectByCode[0].SubjectCode"></span>
        <input type="number" max="10" class="form-control" ng-model="item.Aspiration.GPA11_1" id="GPA11_1" placeholder="Điểm trung bình cả năm môn 1 {{CombinSubjectByCode[0].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
    </div>
    <div class="col-sm-4 col-12">
        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[1].SubjectCode"></span>
        <input type="number" max="10" class="form-control" ng-model="item.Aspiration.GPA11_2" id="GPA11_2" placeholder="Điểm trung bình cả năm môn 2 {{CombinSubjectByCode[1].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
    </div>
    <div class="col-sm-4 col-12">
        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[2].SubjectCode"></span>
        <input type="number" min="0" max="10" class="form-control" ng-model="item.Aspiration.GPA11_3" id="GPA11_3" placeholder="Điểm trung bình cả năm môn 3 {{CombinSubjectByCode[2].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
    </div>
</div>
<!--Điểm lớp 12 THPT-->
<div class="row">
    <div class="col-sm-4 col-12">
        <label>Lớp 12 :</label><span ng-bind-html="CombinSubjectByCode[0].SubjectCode"></span>
        <input type="number" max="10" class="form-control" ng-model="item.Aspiration.GPA12_1" id="GPA12_1" placeholder="Điểm trung bình cả năm môn 1 {{CombinSubjectByCode[0].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
    </div>
    <div class="col-sm-4 col-12">
        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[1].SubjectCode"></span>
        <input type="number" max="10" class="form-control" ng-model="item.Aspiration.GPA12_2" id="GPA12_2" placeholder="Điểm trung bình cả năm môn 2 {{CombinSubjectByCode[1].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
    </div>
    <div class="col-sm-4 col-12">
        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[2].SubjectCode"></span>
        <input type="number" max="10" class="form-control" ng-model="item.Aspiration.GPA12_3" id="GPA12_3" placeholder="Điểm trung bình cả năm môn 3 {{CombinSubjectByCode[2].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
    </div>
</div>

<div class="row" style="padding-top:30px">
    <div class="col-sm-12 col-12 pull-right">
        <div class="col-sm-3 col-12" style="padding-bottom:20px">
            <button type="button" ng-click="SaveAspiration()" class="btn btn-block btn-primary btn-lg" style="height:40px;font-size:17px;text-transform:uppercase" ng-disabled="item.ProgressStep==4">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu nguyện vọng
            </button>
        </div>

    </div>
</div>

<!--End Nguyện vọng-->
</div>
<!--Minh chứng-->
<div class="col-md-12" ng-show="item.aspirationDtos.length>0">
<div class="row">
    <div style="padding-top:10px;margin-bottom: 15px;" class="form-group has-success">
        <label><i class="fa fa-check" aria-hidden="true"></i> Danh mục file minh chứng </label>
    </div>
    <table class="table table-bordered table-hover" style="background-color:white" ng-show="item.candidateAttachments.length>0">
        <tr style="background-color: bisque;">
            <th>TT</th>
            <th>Mô tả</th>
            <th>Tên file</th>
            <th>Dung lượng</th>
            <th>#</th>
        </tr>
        <tr ng-repeat="file in item.candidateAttachments">
            <td ng-bind="$index+1"></td>
            <td>
                <input type="text" max="100" class="form-control" ng-model="file.FileDescription" placeholder="Mô tả">
            </td>
            <td ng-bind="file.FileName"></td>


            <td ng-bind="file.FileSize/1024 + '(KB)'"></td>
            <td>
                <a href="javascript:void(0)" class="text-red" ng-click="DeleteAttachFile(file)" title="Xóa file" ng-if="item.ProgressStep<4">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
        </tr>
    </table>
</div>

<div class="row">
    <div class="col-md-12">
        <div style="border-bottom:0px solid #AAA;padding-top:10px;margin-bottom: 15px;" ng-click="ShowAttachFile()" ng-show="!ViewAttachForm">
            <label><i class="fa fa-plus" aria-hidden="true"></i> Nộp kèm file minh chứng và hoàn thành hồ sơ</label>
        </div>
        <div style="border-bottom:0px solid #AAA;padding-top:10px;margin-bottom: 15px;" ng-click="HiddenAttachFile()" ng-show="ViewAttachForm">
            <label><i class="fa fa-minus" aria-hidden="true"></i> Nộp kèm file minh chứng và hoàn thành hồ sơ</label>
        </div>
    </div>
</div>
<div ng-show="ViewAttachForm" id="attachfile">

    <div class="row">
        <div class="col-md-12" style="padding-top: 30px;">
            <div>
                Nộp kèm file minh chứng (ảnh chụp/scan: Phiếu ĐKXT, Học bạ hoặc Đơn xác nhận KQ học tập, Giấy xác nhận hưởng chế độ ưu tiên nếu có).
            </div>
            <div class="text-red">
                Lưu ý: Chỉ chấp nhận file pdf, jpg, jpeg, png. Có thể đính kèm nhiều file
            </div>
            <input type="file" id="fileAttach" ng-model="fileAttachs" ngf-select ngf-multiple="true" class="form-control" onchange="angular.element(this).scope().loadFile(this.files)" ng-disabled="item.ProgressStep==4" />
        </div>
    </div>

</div>

<div class="row" style="padding-top:30px">
    <div class="col-sm-12 col-12">
        <div class="col-sm-3 col-12" style="padding-bottom:20px">
            <button type="button" ng-click="SaveAttachFile()" class="btn btn-block btn-primary btn-lg" style="height:40px;font-size:17px;text-transform:uppercase" ng-disabled="item.ProgressStep==4">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu file minh chứng
            </button>
        </div>
        <div class="col-sm-3 col-12 pull-right" ng-if="item.ProgressStep>=3">
            <!--ng-if="item.ProgressStep>=3">-->
            <!--ng-disabled="item.ProgressStep==4"-->
            <button type="button" ng-click="Finish()" class="btn btn-block btn-primary btn-lg" style="height:40px;font-size:17px;text-transform:uppercase" ng-disabled="item.ProgressStep==4">
                <i class="fa fa-check" aria-hidden="true"></i> Hoàn thành hồ sơ
            </button>
        </div>
    </div>
</div>
                
    <?php echo validation_errors();?>
</div>



<div class="row">
                                