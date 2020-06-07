DROP DATABASE dhtl;
CREATE DATABASE dhtl CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
Use dhtl;

create table tai_khoan(
id_tk int AUTO_INCREMENT primary key,
ten_dang_nhap varchar(30) not null UNIQUE,
mat_khau varchar(30) not null,
cap_do int default 1
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE tinh_thanh_pho (
    ma_ttp VARCHAR(10) PRIMARY KEY,
    ten_ttp TEXT
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;

CREATE TABLE quan_huyen (
    ma_qh VARCHAR(10) PRIMARY KEY,
    ten_qh TEXT,
    ma_ttp VARCHAR(5),
    FOREIGN KEY (ma_ttp)
        REFERENCES tinh_thanh_pho (ma_ttp)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;

CREATE TABLE phuong_thi_xa (
    ma_ptx VARCHAR(10) PRIMARY KEY,
    ten_ptx TEXT,
    ma_qh VARCHAR(10),
    FOREIGN KEY (ma_qh)
        REFERENCES quan_huyen (ma_qh)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;

create table thong_tin_tai_khoan(
id_tk int primary key,
ho_ten_tk  text not null,
email_tk  varchar(50) not null,
ngay_sinh_tk  date,
gioi_tinh_tk  varchar(4),
dia_chi_tk  varchar(10),
sdt_tk  varchar(20),
foreign key(id_tk) references tai_khoan(id_tk),
FOREIGN KEY (dia_chi_tk) REFERENCES phuong_thi_xa (ma_ptx)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE danh_muc (
    ma_dm VARCHAR(10) PRIMARY KEY,
    ten_dm TEXT NOT NULL,
    ma_dm_cha VARCHAR(10)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;

CREATE TABLE bai_viet (
    ma_bv INT AUTO_INCREMENT PRIMARY KEY,
    ma_dm VARCHAR(10),
    tieu_de_bv TEXT,
    noi_dung_tom_tat_bv LONGTEXT,
    link_anh_bia_bv LONGTEXT,
    FOREIGN KEY (ma_dm)
        REFERENCES danh_muc (ma_dm)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE chi_tiet_bai_viet (
    ma_ctbv INT AUTO_INCREMENT PRIMARY KEY,
    ma_bv INT,
    noi_dung_chi_tiet_ctbv LONGTEXT,
    link_anh_ctbv LONGTEXT,
    FOREIGN KEY (ma_bv)
        REFERENCES bai_viet (ma_bv)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;


CREATE TABLE thi_sinh (
    ma_ts INT AUTO_INCREMENT PRIMARY KEY,
    ho_ten_ts TEXT,
    gioi_tinh_ts TEXT,
    ngay_sinh_ts DATE,
    dia_chi_ts VARCHAR(10),
    so_cmnd_cccd_ts VARCHAR(20),
    sdt_ts VARCHAR(20),
    email_ts VARCHAR(50),
    link_anh_cmnd_ts VARCHAR(50),
    link_anh_chan_dung_ts VARCHAR(50),
    dan_toc_ts TEXT,
    ton_giao_ts TEXT,
    ngay_dang_ki_ts DATE,
    FOREIGN KEY (dia_chi_ts)
        REFERENCES phuong_thi_xa (ma_ptx)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE truong (
    ma_truong VARCHAR(10) PRIMARY KEY,
    ten_truong TEXT,
    dia_chi_truong VARCHAR(10),
    FOREIGN KEY (dia_chi_truong)
        REFERENCES quan_huyen (ma_qh)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;

CREATE TABLE ho_so_xet_tuyen (
    ma_hsxt INT AUTO_INCREMENT PRIMARY KEY,
    ma_ts INT,
    FOREIGN KEY (ma_ts)
        REFERENCES thi_sinh (ma_ts)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE trang_thai_ho_son (
    ma_tths INT AUTO_INCREMENT PRIMARY KEY,
    ma_hsxt INT,
    kieu_tths TEXT,
    ngay_tths DATE,
    FOREIGN KEY (ma_hsxt)
        REFERENCES ho_so_xet_tuyen (ma_hsxt)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE co_so_dao_tao (
    ma_csdt INT AUTO_INCREMENT PRIMARY KEY,
    ten_csdt TEXT,
    dia_chi_csdt VARCHAR(10),
    FOREIGN KEY (dia_chi_csdt)
        REFERENCES phuong_thi_xa (ma_ptx)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE nganh_dao_tao (
    ma_ndt INT AUTO_INCREMENT PRIMARY KEY,
    ma_csdt INT,
    ten_ndt TEXT NOT NULL,
    chuong_trinh_dao_tao_ndt TEXT,
    ghi_chu_ndt TEXT,
    gioi_thieu_ndt TEXT,
    FOREIGN KEY (ma_csdt)
        REFERENCES co_so_dao_tao (ma_csdt)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE diem_chuan (
    ma_dc INT AUTO_INCREMENT PRIMARY KEY,
    ma_ndt INT,
    nam_dc DATE,
    diem_dc FLOAT,
    chi_tieu_dc INT,
    FOREIGN KEY (ma_ndt)
        REFERENCES nganh_dao_tao (ma_ndt)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE to_hop_mon (
    ma_thm VARCHAR(5) PRIMARY KEY,
    ten_mon_1 TEXT,
    ten_mon_2 TEXT,
    ten_mon_3 TEXT
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE to_hop_mon_xet_tuyen (
    ma_thm VARCHAR(5),
    ma_ndt INT,
    FOREIGN KEY (ma_ndt)
        REFERENCES nganh_dao_tao (ma_ndt),
    FOREIGN KEY (ma_thm)
        REFERENCES to_hop_mon (ma_thm),
    PRIMARY KEY (ma_thm , ma_ndt)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE nguyen_vong (
    ma_thm VARCHAR(5),
    ma_hsxt INT,
    ma_ndt INT,
    PRIMARY KEY (ma_thm , ma_hsxt),
    FOREIGN KEY (ma_ndt)
        REFERENCES nganh_dao_tao (ma_ndt),
    FOREIGN KEY (ma_hsxt)
        REFERENCES ho_so_xet_tuyen (ma_hsxt),
    FOREIGN KEY (ma_thm)
        REFERENCES to_hop_mon (ma_thm)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;

CREATE TABLE hoc_ba (
    ma_hb INT AUTO_INCREMENT PRIMARY KEY,
    ma_ts INT,
    xep_loai_hb TEXT,
    link_anh_hb VARCHAR(50),
    FOREIGN KEY (ma_ts)
        REFERENCES thi_sinh (ma_ts)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE lop (
    ma_lop INT AUTO_INCREMENT PRIMARY KEY,
    ma_hb INT,
    ma_truong VARCHAR(5),
    cap_do_lop INT,
    FOREIGN KEY (ma_hb)
        REFERENCES hoc_ba (ma_hb),
    FOREIGN KEY (ma_truong)
        REFERENCES truong (ma_truong)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE mon (
    ma_mon INT AUTO_INCREMENT PRIMARY KEY,
    ten_mon TEXT,
    diem_mon FLOAT,
    ma_lop INT,
    FOREIGN KEY (ma_lop)
        REFERENCES lop (ma_lop)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

insert into tai_khoan(ten_dang_nhap, mat_khau, cap_do) values('admin', '123456', 2);
insert into tai_khoan(ten_dang_nhap, mat_khau) values('khach1', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('khach2', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('khach3', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('khach4', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('khach5', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('khach6', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('khach7', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('khach8', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('khach9', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('khach10', '123456');




INSERT INTO tinh_thanh_pho VALUES ('51', 'An Giang');
INSERT INTO tinh_thanh_pho VALUES ('52', 'Bà Rịa-Vũng Tàu');
INSERT INTO tinh_thanh_pho VALUES ('18', 'Bắc Giang');
INSERT INTO tinh_thanh_pho VALUES ('11', 'Bắc Kạn');
INSERT INTO tinh_thanh_pho VALUES ('60', 'Bạc Liêu');
INSERT INTO tinh_thanh_pho VALUES ('19', 'Bắc Ninh');
INSERT INTO tinh_thanh_pho VALUES ('56', 'Bến Tre');
INSERT INTO tinh_thanh_pho VALUES ('44', 'Bình Dương');
INSERT INTO tinh_thanh_pho VALUES ('43', 'Bình Phước');
INSERT INTO tinh_thanh_pho VALUES ('47', 'Bình Thuận');
INSERT INTO tinh_thanh_pho VALUES ('37', 'Bình Định');
INSERT INTO tinh_thanh_pho VALUES ('61', 'Cà Mau');
INSERT INTO tinh_thanh_pho VALUES ('55', 'Cần Thơ');
INSERT INTO tinh_thanh_pho VALUES ('06', 'Cao Bằng');
INSERT INTO tinh_thanh_pho VALUES ('65', 'Cục nhà trường');
INSERT INTO tinh_thanh_pho VALUES ('38', 'Gia Lai');
INSERT INTO tinh_thanh_pho VALUES ('05', 'Hà Giang');
INSERT INTO tinh_thanh_pho VALUES ('24', 'Hà Nam');
INSERT INTO tinh_thanh_pho VALUES ('01', 'Hà Nội');
INSERT INTO tinh_thanh_pho VALUES ('30', 'Hà Tĩnh');
INSERT INTO tinh_thanh_pho VALUES ('21', 'Hải Dương');
INSERT INTO tinh_thanh_pho VALUES ('03', 'Hải Phòng');
INSERT INTO tinh_thanh_pho VALUES ('64', 'Hậu Giang');
INSERT INTO tinh_thanh_pho VALUES ('23', 'Hoà Bình');
INSERT INTO tinh_thanh_pho VALUES ('22', 'Hưng Yên');
INSERT INTO tinh_thanh_pho VALUES ('41', 'Khánh Hoà');
INSERT INTO tinh_thanh_pho VALUES ('54', 'Kiên Giang');
INSERT INTO tinh_thanh_pho VALUES ('36', 'Kon Tum');
INSERT INTO tinh_thanh_pho VALUES ('07', 'Lai Châu');
INSERT INTO tinh_thanh_pho VALUES ('42', 'Lâm Đồng');
INSERT INTO tinh_thanh_pho VALUES ('10', 'Lạng Sơn');
INSERT INTO tinh_thanh_pho VALUES ('08', 'Lào Cai');
INSERT INTO tinh_thanh_pho VALUES ('49', 'Long An');
INSERT INTO tinh_thanh_pho VALUES ('25', 'Nam Định');
INSERT INTO tinh_thanh_pho VALUES ('29', 'Nghệ An');
INSERT INTO tinh_thanh_pho VALUES ('27', 'Ninh Bình');
INSERT INTO tinh_thanh_pho VALUES ('45', 'Ninh Thuận');
INSERT INTO tinh_thanh_pho VALUES ('15', 'Phú Thọ');
INSERT INTO tinh_thanh_pho VALUES ('39', 'Phú Yên');
INSERT INTO tinh_thanh_pho VALUES ('31', 'Quảng Bình');
INSERT INTO tinh_thanh_pho VALUES ('34', 'Quảng Nam');
INSERT INTO tinh_thanh_pho VALUES ('35', 'Quảng Ngãi');
INSERT INTO tinh_thanh_pho VALUES ('17', 'Quảng Ninh');
INSERT INTO tinh_thanh_pho VALUES ('32', 'Quảng Trị');
INSERT INTO tinh_thanh_pho VALUES ('59', 'Sóc Trăng');
INSERT INTO tinh_thanh_pho VALUES ('14', 'Sơn La');
INSERT INTO tinh_thanh_pho VALUES ('46', 'Tây Ninh');
INSERT INTO tinh_thanh_pho VALUES ('26', 'Thái Bình');
INSERT INTO tinh_thanh_pho VALUES ('12', 'Thái Nguyên');
INSERT INTO tinh_thanh_pho VALUES ('28', 'Thanh Hoá');
INSERT INTO tinh_thanh_pho VALUES ('33', 'Thừa Thiên -Huế');
INSERT INTO tinh_thanh_pho VALUES ('53', 'Tiền Giang');
INSERT INTO tinh_thanh_pho VALUES ('02', 'Tp. Hồ Chí Minh');
INSERT INTO tinh_thanh_pho VALUES ('58', 'Trà Vinh');
INSERT INTO tinh_thanh_pho VALUES ('09', 'Tuyên Quang');
INSERT INTO tinh_thanh_pho VALUES ('57', 'Vĩnh Long');
INSERT INTO tinh_thanh_pho VALUES ('16', 'Vĩnh Phúc');
INSERT INTO tinh_thanh_pho VALUES ('13', 'Yên Bái');
INSERT INTO tinh_thanh_pho VALUES ('04', 'Đà Nẵng');
INSERT INTO tinh_thanh_pho VALUES ('40', 'Đắk Lắk');
INSERT INTO tinh_thanh_pho VALUES ('63', 'Đăk Nông');
INSERT INTO tinh_thanh_pho VALUES ('62', 'Điện Biên');
INSERT INTO tinh_thanh_pho VALUES ('48', 'Đồng Nai');
INSERT INTO tinh_thanh_pho VALUES ('50', 'Đồng Tháp');

INSERT INTO quan_huyen VALUES ('0059', 'Sở Giáo dục và Đào tạo', '59');
INSERT INTO quan_huyen VALUES ('0101', 'Quận Ba Đình', '01');
INSERT INTO quan_huyen VALUES ('0102', 'Quận 1', '02');
INSERT INTO quan_huyen VALUES ('0105', 'Thành phố Hà Giang', '05');
INSERT INTO quan_huyen VALUES ('0107', 'Thành Phố Lai Châu', '07');
INSERT INTO quan_huyen VALUES ('0110', 'Thành phố Lạng Sơn', '10');
INSERT INTO quan_huyen VALUES ('0111', 'Thành phố Bắc Kạn', '11');
INSERT INTO quan_huyen VALUES ('0112', 'Thành phố Thái Nguyên', '12');
INSERT INTO quan_huyen VALUES ('0113', 'Thành phố Yên Bái', '13');
INSERT INTO quan_huyen VALUES ('0115', 'Thành phố Việt Trì', '15');
INSERT INTO quan_huyen VALUES ('0116', 'Thành phố Vĩnh Yên', '16');
INSERT INTO quan_huyen VALUES ('0118', 'Thành phố Bắc Giang', '18');
INSERT INTO quan_huyen VALUES ('0119', 'Thành phố Bắc Ninh', '19');
INSERT INTO quan_huyen VALUES ('0123', 'Thành phố Hòa Bình', '23');
INSERT INTO quan_huyen VALUES ('0124', 'Thành phố Phủ Lý', '24');
INSERT INTO quan_huyen VALUES ('0125', 'Thành phố Nam Định', '25');
INSERT INTO quan_huyen VALUES ('0126', 'Thành phố Thái Bình', '26');
INSERT INTO quan_huyen VALUES ('0127', 'Thành phố Ninh Bình', '27');
INSERT INTO quan_huyen VALUES ('0128', 'Thành phố Thanh Hóa', '28');
INSERT INTO quan_huyen VALUES ('0129', 'Thành phố Vinh', '29');
INSERT INTO quan_huyen VALUES ('0130', 'Thành phố Hà Tĩnh', '30');
INSERT INTO quan_huyen VALUES ('0131', 'Thành phố Đồng Hới', '31');
INSERT INTO quan_huyen VALUES ('0133', 'Thành phố Huế', '33');
INSERT INTO quan_huyen VALUES ('0134', 'Thành phố Tam Kỳ', '34');
INSERT INTO quan_huyen VALUES ('0136', 'Thành phố Kon Tum', '36');
INSERT INTO quan_huyen VALUES ('0137', 'Thành phố Quy Nhơn', '37');
INSERT INTO quan_huyen VALUES ('0139', 'Thành phố Tuy Hòa', '39');
INSERT INTO quan_huyen VALUES ('0140', 'Thành phố Buôn Ma Thuột', '40');
INSERT INTO quan_huyen VALUES ('0141', 'Thành phố Nha Trang', '41');
INSERT INTO quan_huyen VALUES ('0142', 'Thành phố Đà Lạt', '42');
INSERT INTO quan_huyen VALUES ('0146', 'Thành phố Tây Ninh', '46');
INSERT INTO quan_huyen VALUES ('0147', 'Thành phố Phan Thiết', '47');
INSERT INTO quan_huyen VALUES ('0148', 'Thành phố Biên Hòa', '48');
INSERT INTO quan_huyen VALUES ('0149', 'Thành phố Tân An', '49');
INSERT INTO quan_huyen VALUES ('0151', 'Thành phố Long Xuyên', '51');
INSERT INTO quan_huyen VALUES ('0152', 'Thành phố Vũng Tàu', '52');
INSERT INTO quan_huyen VALUES ('0154', 'Thành phố Rạch Giá', '54');
INSERT INTO quan_huyen VALUES ('0155', 'Quận Ninh Kiều', '55');
INSERT INTO quan_huyen VALUES ('0156', 'Thành phố Bến Tre', '56');
INSERT INTO quan_huyen VALUES ('0157', 'Thành phố Vĩnh Long', '57');
INSERT INTO quan_huyen VALUES ('0158', 'Thành phố Trà Vinh', '58');
INSERT INTO quan_huyen VALUES ('0159', 'Thành phố Sóc Trăng', '59');
INSERT INTO quan_huyen VALUES ('0160', 'Thành phố Bạc Liêu', '60');
INSERT INTO quan_huyen VALUES ('0161', 'Thành phố Cà Mau', '61');
INSERT INTO quan_huyen VALUES ('0201', 'Quận Hoàn Kiếm', '01');
INSERT INTO quan_huyen VALUES ('0205', 'Huyện Đồng Văn', '05');
INSERT INTO quan_huyen VALUES ('0212', 'Thành phố Sông Công', '12');
INSERT INTO quan_huyen VALUES ('0217', 'Thành phố Cẩm Phả', '17');
INSERT INTO quan_huyen VALUES ('0227', 'Thành phố Tam Điệp', '27');
INSERT INTO quan_huyen VALUES ('0229', 'Thị xã Cửa Lò', '29');
INSERT INTO quan_huyen VALUES ('0233', 'Huyện Phong Điền', '33');
INSERT INTO quan_huyen VALUES ('0242', 'Thành phố Bảo Lộc', '42');
INSERT INTO quan_huyen VALUES ('0255', 'Quận Bình Thủy', '55');
INSERT INTO quan_huyen VALUES ('0301', 'Quận Hai Bà Trưng', '01');
INSERT INTO quan_huyen VALUES ('0302', 'Quận 3', '02');
INSERT INTO quan_huyen VALUES ('0305', 'Huyện Mèo Vạc', '05');
INSERT INTO quan_huyen VALUES ('0317', 'Thành phố Uông Bí', '17');
INSERT INTO quan_huyen VALUES ('0327', 'Huyện Nho Quan', '27');
INSERT INTO quan_huyen VALUES ('0343', 'Huyện Chơn Thành', '43');
INSERT INTO quan_huyen VALUES ('0355', 'Quận Cái Răng', '55');
INSERT INTO quan_huyen VALUES ('0401', 'Quận Đống Đa', '01');
INSERT INTO quan_huyen VALUES ('0405', 'Huyện Yên Minh', '05');
INSERT INTO quan_huyen VALUES ('0407', 'Huyện Sìn Hồ', '07');
INSERT INTO quan_huyen VALUES ('0412', 'Huyện Phú Lương', '12');
INSERT INTO quan_huyen VALUES ('0422', 'Huyện Khoái Châu', '22');
INSERT INTO quan_huyen VALUES ('0427', 'Huyện Gia Viễn', '27');
INSERT INTO quan_huyen VALUES ('0444', 'Thị xã Thuận An', '44');
INSERT INTO quan_huyen VALUES ('0450', 'Thành phố Sa Đéc', '50');
INSERT INTO quan_huyen VALUES ('0452', 'Huyện Long Điền', '52');
INSERT INTO quan_huyen VALUES ('0455', 'Quận Ô Môn', '55');
INSERT INTO quan_huyen VALUES ('0501', 'Quận Tây Hồ', '01');
INSERT INTO quan_huyen VALUES ('0505', 'Huyện Quản Bạ', '05');
INSERT INTO quan_huyen VALUES ('0508', 'Thành phố Lào Cai', '08');
INSERT INTO quan_huyen VALUES ('0519', 'Thị xã Từ Sơn', '19');
INSERT INTO quan_huyen VALUES ('0522', 'Huyện Yên Mỹ', '22');
INSERT INTO quan_huyen VALUES ('0527', 'Huyện Hoa Lư', '27');
INSERT INTO quan_huyen VALUES ('0544', 'Thị xã Dĩ An', '44');
INSERT INTO quan_huyen VALUES ('0550', 'Thành phố Cao Lãnh', '50');
INSERT INTO quan_huyen VALUES ('0555', 'Huyện Phong Điền', '55');
INSERT INTO quan_huyen VALUES ('0564', 'Huyện Châu Thành', '64');
INSERT INTO quan_huyen VALUES ('0601', 'Quận Cầu Giấy', '01');
INSERT INTO quan_huyen VALUES ('0602', 'Quận 6', '02');
INSERT INTO quan_huyen VALUES ('0605', 'Huyện Vị Xuyên', '05');
INSERT INTO quan_huyen VALUES ('0607', 'Huyện Than Uyên', '07');
INSERT INTO quan_huyen VALUES ('0616', 'Huyện Bình Xuyên', '16');
INSERT INTO quan_huyen VALUES ('0625', 'Huyện Vụ Bản', '25');
INSERT INTO quan_huyen VALUES ('0627', 'Huyện Yên Mô', '27');
INSERT INTO quan_huyen VALUES ('0633', 'Thị xã Hương Thủy', '33');
INSERT INTO quan_huyen VALUES ('0652', 'Thị xã Phú Mỹ (H. Tân Thành)', '52');
INSERT INTO quan_huyen VALUES ('0655', 'Huyện Cờ Đỏ', '55');
INSERT INTO quan_huyen VALUES ('0701', 'Quận Thanh Xuân', '01');
INSERT INTO quan_huyen VALUES ('0702', 'Quận 7', '02');
INSERT INTO quan_huyen VALUES ('0705', 'Huyện Bắc Mê', '05');
INSERT INTO quan_huyen VALUES ('0727', 'Huyện Kim Sơn', '27');
INSERT INTO quan_huyen VALUES ('0755', 'Huyện Vĩnh Thạnh', '55');
INSERT INTO quan_huyen VALUES ('0801', 'Quận Hoàng Mai', '01');
INSERT INTO quan_huyen VALUES ('0805', 'Huyện Hoàng Su Phì', '05');
INSERT INTO quan_huyen VALUES ('0807', 'Huyện Nậm Nhùn', '07');
INSERT INTO quan_huyen VALUES ('0816', 'Thành phố Phúc Yên', '16');
INSERT INTO quan_huyen VALUES ('0822', 'Huyện Mỹ Hào', '22');
INSERT INTO quan_huyen VALUES ('0827', 'Huyện Yên Khánh', '27');
INSERT INTO quan_huyen VALUES ('0848', 'Huyện Long Thành', '48');
INSERT INTO quan_huyen VALUES ('0849', 'Huyện Bến Lức', '49');
INSERT INTO quan_huyen VALUES ('0855', 'Quận Thốt Nốt', '55');
INSERT INTO quan_huyen VALUES ('0901', 'Quận Long Biên', '01');
INSERT INTO quan_huyen VALUES ('0902', 'Quận 9', '02');
INSERT INTO quan_huyen VALUES ('0905', 'Huyện Xín Mần', '05');
INSERT INTO quan_huyen VALUES ('0912', 'Thị xã Phổ Yên', '12');
INSERT INTO quan_huyen VALUES ('0922', 'Huyện Văn Lâm', '22');
INSERT INTO quan_huyen VALUES ('0923', 'Huyện Lạc Thủy', '23');
INSERT INTO quan_huyen VALUES ('0939', 'Huyện Tây Hòa', '39');
INSERT INTO quan_huyen VALUES ('0955', 'Huyện Thới Lai', '55');
INSERT INTO quan_huyen VALUES ('1001', 'Quận Bắc Từ Liêm', '01');
INSERT INTO quan_huyen VALUES ('1002', 'Quận 10', '02');
INSERT INTO quan_huyen VALUES ('1005', 'Huyện Bắc Quang', '05');
INSERT INTO quan_huyen VALUES ('1048', 'Huyện Trảng Bom', '48');
INSERT INTO quan_huyen VALUES ('1101', 'Huyện Thanh Trì', '01');
INSERT INTO quan_huyen VALUES ('1105', 'Huyện Quang Bình', '05');
INSERT INTO quan_huyen VALUES ('1110', 'Huyện Hữu Lũng', '10');
INSERT INTO quan_huyen VALUES ('1201', 'Huyện Gia Lâm', '01');
INSERT INTO quan_huyen VALUES ('1301', 'Huyện Đông Anh', '01');
INSERT INTO quan_huyen VALUES ('1330', 'Thị xã Kỳ Anh', '30');
INSERT INTO quan_huyen VALUES ('1401', 'Huyện Sóc Sơn', '01');
INSERT INTO quan_huyen VALUES ('1402', 'Quận Tân Bình', '02');
INSERT INTO quan_huyen VALUES ('1501', 'Quận Hà Đông', '01');
INSERT INTO quan_huyen VALUES ('1502', 'Quận Tân Phú', '02');
INSERT INTO quan_huyen VALUES ('1601', 'Thị xã Sơn Tây', '01');
INSERT INTO quan_huyen VALUES ('1602', 'Quận Bình Thạnh', '02');
INSERT INTO quan_huyen VALUES ('1701', 'Huyện Ba Vì', '01');
INSERT INTO quan_huyen VALUES ('1702', 'Quận Phú Nhuận', '02');
INSERT INTO quan_huyen VALUES ('1801', 'Huyện Phúc Thọ', '01');
INSERT INTO quan_huyen VALUES ('1802', 'Quận Thủ Đức', '02');
INSERT INTO quan_huyen VALUES ('1901', 'Huyện Thạch Thất', '01');
INSERT INTO quan_huyen VALUES ('2001', 'Huyện Quốc Oai', '01');
INSERT INTO quan_huyen VALUES ('2101', 'Huyện Chương Mỹ', '01');
INSERT INTO quan_huyen VALUES ('2201', 'Huyện Đan Phượng', '01');
INSERT INTO quan_huyen VALUES ('2301', 'Huyện Hoài Đức', '01');
INSERT INTO quan_huyen VALUES ('2401', 'Huyện Thanh Oai', '01');
INSERT INTO quan_huyen VALUES ('2501', 'Huyện Mỹ Đức', '01');
INSERT INTO quan_huyen VALUES ('2601', 'Huyện Ứng Hòa', '01');
INSERT INTO quan_huyen VALUES ('2628', 'Huyện Tĩnh Gia', '28');
INSERT INTO quan_huyen VALUES ('2701', 'Huyện Thường Tín', '01');
INSERT INTO quan_huyen VALUES ('2801', 'Huyện Phú Xuyên', '01');
INSERT INTO quan_huyen VALUES ('2901', 'Huyện Mê Linh', '01');
INSERT INTO quan_huyen VALUES ('3001', 'Quận Nam Từ Liêm', '01');

insert into phuong_thi_xa(ma_ptx,ten_ptx,ma_qh) values('1','Tây Sơn','0401');


insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(1,'Nguyễn Xuân Phi','admin@gmail.com','1998-02-13','Nam','1','0123456789');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(2,'Nguyễn Thị A','a@gmail.com','1998-10-2','Nữ','1','0923456719');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(3,'Nguyễn Văn JK','b@gmail.com','1997-02-26','Nam','1','0163456729');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(4,'Nguyễn Văn GH','c@gmail.com','1998-02-18','Nam','1','0963453589');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(5,'Nguyễn Thị AX','d@gmail.com','1998-03-06','Nữ','1','0123396789');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(6,'Nguyễn Văn O','e@gmail.com','1995-12-03','Nam','1','0823456709');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(7,'Nguyễn Thị LK','f@gmail.com','1998-02-01','Nữ','1','0166456789');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(8,'Nguyễn Thị UJ','g@gmail.com','1996-03-01','Nữ','1','0123234789');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(9,'Nguyễn Văn OP','h@gmail.com','1993-04-24','Nam','1','01234556339');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(10,'Nguyễn Thị ER','i@gmail.com','1998-11-22','Nữ','1','0963456789');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(11,'Nguyễn Văn QW','k@gmail.com','1994-08-11','Nam','1','0973456779');

INSERT INTO truong VALUES ('1299', 'Bán công Phan Bội Châu', '0113');
INSERT INTO truong VALUES ('3914', 'Bổ Túc Văn Hóa Tỉnh', '0148');
INSERT INTO truong VALUES ('4337', 'BTVH Cấp 2,3 Nguyễn Thái Học', '0152');
INSERT INTO truong VALUES ('107', 'BTVH Công ty Xây dựng Công nghiệp', '0701');
INSERT INTO truong VALUES ('409', 'BTVH CĐKT Cao Thắng', '0102');
INSERT INTO truong VALUES ('4814', 'BTVH Pali Trung cấp Nam Bộ', '0159');
INSERT INTO truong VALUES ('618', 'BTVH Thanh Đa', '1602');
INSERT INTO truong VALUES ('629', 'BTVH ĐH Ngoại Thương', '1702');
INSERT INTO truong VALUES ('1988', 'Cao đẳng ASEAN', '0922');
INSERT INTO truong VALUES ('4569', 'Cao đẳng Cần Thơ', '0155');
INSERT INTO truong VALUES ('1950', 'Cao đẳng Cơ điện và Thủy Lợi', '0422');
INSERT INTO truong VALUES ('2618', 'Cao đẳng Công nghệ Hà Tĩnh', '0130');
INSERT INTO truong VALUES ('2691', 'Cao đẳng Công nghệ Hà Tĩnh (cơ sở 2)', '1330');
INSERT INTO truong VALUES ('1771', 'Cao đẳng Công nghiệp Bắc Ninh', '0119');
INSERT INTO truong VALUES ('2115', 'Cao đẳng Công nghiệp Dệt May Nam Định', '0125');
INSERT INTO truong VALUES ('1958', 'Cao đẳng Công Nghiệp Hưng Yên', '0522');
INSERT INTO truong VALUES ('3345', 'Cao đẳng Công thương Miền Trung', '0139');
INSERT INTO truong VALUES ('4173', 'Cao đẳng cộng đồng Đồng Tháp', '0550');
INSERT INTO truong VALUES ('1979', 'Cao đẳng Hàng Không', '0822');
INSERT INTO truong VALUES ('4460', 'Cao đẳng Kinh tế - Kỹ thuật Kiên Giang', '0154');
INSERT INTO truong VALUES ('1441', 'Cao đẳng Kinh tế - Kỹ thuật Phú Thọ', '0115');
INSERT INTO truong VALUES ('2011', 'Cao Đẳng Kinh tế -Kỹ Thuật HB', '0123');
INSERT INTO truong VALUES ('1951', 'Cao đẳng Kinh tế Kỹ thuật Tô Hiệu Hưng Yên', '0422');
INSERT INTO truong VALUES ('4703', 'Cao đẳng Kinh tế Tài chính Vĩnh Long', '0157');
INSERT INTO truong VALUES ('2620', 'Cao đẳng Kỹ thuật Việt - Đức Hà Tĩnh', '0130');
INSERT INTO truong VALUES ('1033', 'Cao đẳng Lào Cai', '0508');
INSERT INTO truong VALUES ('4887', 'Cao đẳng Nghề Bạc Liêu', '0160');
INSERT INTO truong VALUES ('3671', 'Cao đẳng nghề Bình Phước', '0343');
INSERT INTO truong VALUES ('1948', 'Cao đẳng Nghề Cơ điện và Thủy lợi', '0422');
INSERT INTO truong VALUES ('2695', 'Cao đẳng Nghề công nghệ Hà Tĩnh (cơ sở 2-đến 4/2017)', '1330');
INSERT INTO truong VALUES ('3558', 'Cao đẳng nghề Du lịch Đà Lạt', '0142');
INSERT INTO truong VALUES ('2067', 'Cao đẳng nghề Hà Nam', '0124');
INSERT INTO truong VALUES ('1104', 'Cao đẳng nghề Lạng Sơn', '0110');
INSERT INTO truong VALUES ('3477', 'Cao đẳng nghề Nha Trang', '0141');
INSERT INTO truong VALUES ('3343', 'Cao đẳng nghề Phú Yên', '0139');
INSERT INTO truong VALUES ('2705', 'Cao đẳng nghề Quảng Bình', '0131');
INSERT INTO truong VALUES ('3494', 'Cao đẳng nghề Quốc tế Nam Việt', '0141');
INSERT INTO truong VALUES ('2206', 'Cao đẳng nghề số 19 - Bộ Quốc phòng', '0126');
INSERT INTO truong VALUES ('3945', 'Cao Đẳng Nghề Số 8', '0148');
INSERT INTO truong VALUES ('3813', 'Cao đẳng Nghề Tây Ninh', '0146');
INSERT INTO truong VALUES ('2205', 'Cao đẳng nghề Thái Bình', '0126');
INSERT INTO truong VALUES ('19', 'Cao đẳng Nghệ thuật Hà Nội', '0201');
INSERT INTO truong VALUES ('2014', 'Cao đẳng Nghệ thuật Tây Bắc', '0123');
INSERT INTO truong VALUES ('4457', 'Cao đẳng Nghề tỉnh Kiên Giang', '0154');
INSERT INTO truong VALUES ('4756', 'Cao đẳng nghề Trà Vinh', '0158');
INSERT INTO truong VALUES ('4939', 'Cao đẳng Nghề Việt Nam-Hàn Quốc Cà Mau', '0161');
INSERT INTO truong VALUES ('2622', 'Cao đẳng nghề Việt Đức Hà Tĩnh', '0130');
INSERT INTO truong VALUES ('3560', 'Cao đẳng nghề Đà Lạt', '0142');
INSERT INTO truong VALUES ('4890', 'Cao đẳng Sư phạm Bạc Liêu', '0160');
INSERT INTO truong VALUES ('1030', 'Cao Đẳng Sư Phạm Lào Cai', '0508');
INSERT INTO truong VALUES ('2711', 'Cao đẳng Sư phạm Quảng Bình', '0131');
INSERT INTO truong VALUES ('4760', 'Cao đẳng Sư phạm Trà Vinh', '0158');
INSERT INTO truong VALUES ('84', 'Cao đẳng Sư phạm Trung ương', '0601');
INSERT INTO truong VALUES ('3561', 'Cao đẳng sư phạm Đà Lạt', '0142');
INSERT INTO truong VALUES ('1769', 'Cao đẳng thống kê', '0119');
INSERT INTO truong VALUES ('2069', 'Cao đẳng Thủy lợi Bắc Bộ', '0124');
INSERT INTO truong VALUES ('4246', 'Cao Đẳng Y Tế An Giang', '0151');
INSERT INTO truong VALUES ('1297', 'Cao đẳng Y tế Yên Bái', '0113');
INSERT INTO truong VALUES ('3386', 'Cấp 2-3 Sơn Thành', '0939');
INSERT INTO truong VALUES ('4463', 'Chính trị tỉnh Kiên Giang', '0154');
INSERT INTO truong VALUES ('2470', 'Chuyên Toán ĐH Vinh', '0129');
INSERT INTO truong VALUES ('4808', 'Công an, Quân nhân tại ngũ 59', '0059');
INSERT INTO truong VALUES ('472', 'CĐ BC CN&QTDN', '0702');
INSERT INTO truong VALUES ('4633', 'CĐ Bến Tre', '0156');
INSERT INTO truong VALUES ('4021', 'CĐ Cơ giới - Thủy lợi', '1048');
INSERT INTO truong VALUES ('1233', 'CĐ Cơ khí luyện kim', '0212');
INSERT INTO truong VALUES ('1554', 'CĐ cơ khí nông nghiệp', '0616');
INSERT INTO truong VALUES ('4598', 'CĐ Cơ điện và Nông nghiệp Nam Bộ', '0455');
INSERT INTO truong VALUES ('3575', 'CĐ Công nghệ & Kinh tế Bảo Lộc', '0242');
INSERT INTO truong VALUES ('3997', 'CĐ Công Nghệ Quốc Tế LiLaMa2', '0848');
INSERT INTO truong VALUES ('3401', 'CĐ Công nghệ Tây Nguyên', '0140');
INSERT INTO truong VALUES ('645', 'CĐ Công nghệ Thủ Đức', '1802');
INSERT INTO truong VALUES ('1281', 'CĐ Công nghệ và Kinh tế Công nghiệp', '0912');
INSERT INTO truong VALUES ('1274', 'CĐ Công nghệ và Kinh tế Công nghiệp', '0912');
INSERT INTO truong VALUES ('1154', 'CĐ Công nghệ và Nông lâm Đông Bắc', '1110');
INSERT INTO truong VALUES ('1599', 'CĐ Công nghiệp Cẩm Phả', '0217');
INSERT INTO truong VALUES ('2856', 'CĐ Công nghiệp Huế', '0133');
INSERT INTO truong VALUES ('1801', 'CĐ Công nghiệp Hưng Yên (cơ sở 2)', '0519');
INSERT INTO truong VALUES ('2157', 'CĐ Công nghiệp Nam Định', '0625');
INSERT INTO truong VALUES ('1226', 'CĐ Công nghiệp Thái Nguyên', '0112');
INSERT INTO truong VALUES ('1245', 'CĐ Công nghiệp Thái Nguyên', '0412');
INSERT INTO truong VALUES ('1568', 'CĐ Công nghiệp và Thương mại', '0816');
INSERT INTO truong VALUES ('1605', 'CĐ Công nghiệp và Xây dựng', '0317');
INSERT INTO truong VALUES ('1234', 'CĐ Công nghiệp Việt Đức', '0212');
INSERT INTO truong VALUES ('3874', 'CĐ Cộng đồng Bình Thuận', '0147');
INSERT INTO truong VALUES ('4459', 'CĐ Cộng đồng Kiên Giang', '0154');
INSERT INTO truong VALUES ('950', 'CĐ Cộng đồng Lai Châu', '0107');
INSERT INTO truong VALUES ('1029', 'CĐ Cộng đồng Lào Cai', '0508');
INSERT INTO truong VALUES ('429', 'CĐ Giao thông Vận tải', '0302');
INSERT INTO truong VALUES ('1208', 'CĐ Giao thông Vận tải miền núi', '0112');
INSERT INTO truong VALUES ('459', 'CĐ GTVT 3', '0602');
INSERT INTO truong VALUES ('4022', 'CĐ Hòa Bình Xuân Lộc', '1048');
INSERT INTO truong VALUES ('508', 'CĐ Kinh Tế', '1002');
INSERT INTO truong VALUES ('4568', 'CĐ Kinh tế - Kỹ thuật Cần Thơ', '0155');
INSERT INTO truong VALUES ('3095', 'CĐ Kinh tế - Kỹ thuật Kon Tum', '0136');
INSERT INTO truong VALUES ('2927', 'CĐ Kinh tế - Kỹ thuật Quảng Nam', '0134');
INSERT INTO truong VALUES ('1214', 'CĐ Kinh tế kỹ thuật - ĐH TN', '0112');
INSERT INTO truong VALUES ('1518', 'CĐ Kinh tế Kỹ thuật Vĩnh Phúc', '0116');
INSERT INTO truong VALUES ('1207', 'CĐ Kinh tế Tài chính Thái Nguyên', '0112');
INSERT INTO truong VALUES ('4584', 'CĐ Kinh tế Đối ngoại TPHCM (Cơ sở 2 Cần Thơ)', '0255');
INSERT INTO truong VALUES ('1800', 'CĐ Kinh tế, Kỹ thuật và Thủy sản', '0519');
INSERT INTO truong VALUES ('492', 'CĐ KT KT Công Nghiệp 2', '0902');
INSERT INTO truong VALUES ('1672', 'CĐ Kỹ thuật Công nghiệp', '0118');
INSERT INTO truong VALUES ('460', 'CĐ Kỹ thuật Phú Lâm', '0602');
INSERT INTO truong VALUES ('51', 'CĐ Kỹ thuật thiết bị y tế', '0401');
INSERT INTO truong VALUES ('3400', 'CĐ Kỹ thuật Đắk Lắk', '0140');
INSERT INTO truong VALUES ('3947', 'CĐ kỹ thuật Đồng Nai', '0148');
INSERT INTO truong VALUES ('4233', 'CĐ Nghề An Giang', '0151');
INSERT INTO truong VALUES ('1671', 'CĐ Nghề Bắc Giang', '0118');
INSERT INTO truong VALUES ('297', 'CĐ nghề bách Khoa', '2301');
INSERT INTO truong VALUES ('33', 'CĐ nghề Bách Khoa Hà Nội', '0301');
INSERT INTO truong VALUES ('3869', 'CĐ Nghề Bình Thuận', '0147');
INSERT INTO truong VALUES ('4581', 'CĐ Nghề Cần Thơ', '0255');
INSERT INTO truong VALUES ('2330', 'CĐ nghề CN T.Hóa', '0128');
INSERT INTO truong VALUES ('4016', 'CĐ nghề Cơ giới - Thủy lợi', '1048');
INSERT INTO truong VALUES ('2270', 'CĐ nghề Cơ giới Ninh Bình', '0227');
INSERT INTO truong VALUES ('2269', 'CĐ nghề Cơ điện - Xây dựng Tam Điệp', '0227');
INSERT INTO truong VALUES ('85', 'CĐ nghề cơ điện Hà Nội', '0601');
INSERT INTO truong VALUES ('1215', 'CĐ Nghề Cơ điện LK', '0112');
INSERT INTO truong VALUES ('2052', 'CĐ nghề Cơ điện Tây Bắc', '0923');
INSERT INTO truong VALUES ('1765', 'CĐ Nghề Cơ điện Xây dựng Bắc Ninh', '0119');
INSERT INTO truong VALUES ('3166', 'CĐ nghề cơ điện xây dựng và Nông lâm Trung bộ', '0137');
INSERT INTO truong VALUES ('4172', 'CĐ Nghề Cơ điện Xây dựng Việt Xô', '0550');
INSERT INTO truong VALUES ('368', 'CĐ nghề công nghệ cao Hà Nội', '3001');
INSERT INTO truong VALUES ('4000', 'CĐ nghề công nghệ cao Đồng Nai', '0848');
INSERT INTO truong VALUES ('1152', 'CĐ Nghề Công nghệ và Nông Lâm Đông Bắc', '1110');
INSERT INTO truong VALUES ('1678', 'CĐ nghề Công nghệ Việt Hàn Bắc Giang', '0118');
INSERT INTO truong VALUES ('52', 'CĐ nghề Công nghiệp Hà Nội', '0401');
INSERT INTO truong VALUES ('1164', 'CĐ Nghề Dân tộc Nội trú Bắc Kạn', '0111');
INSERT INTO truong VALUES ('4338', 'CĐ nghề Dầu khí', '0152');
INSERT INTO truong VALUES ('2491', 'CĐ Nghề Du lịch - Thương mại Nghệ An', '0229');
INSERT INTO truong VALUES ('4571', 'CĐ Nghề Du lịch Cần Thơ', '0155');
INSERT INTO truong VALUES ('2861', 'CĐ Nghề Du lịch Huế', '0133');
INSERT INTO truong VALUES ('4341', 'CĐ nghề Du lịch Vũng Tàu', '0152');
INSERT INTO truong VALUES ('247', 'CĐ nghề Giao thông vận tải Trung ương I', '1701');
INSERT INTO truong VALUES ('604', 'CĐ nghề Giao thông vận tải TW3', '1502');
INSERT INTO truong VALUES ('832', 'CĐ Nghề Hà Giang', '0105');
INSERT INTO truong VALUES ('2012', 'CĐ nghề Hòa Bình', '0123');
INSERT INTO truong VALUES ('12', 'CĐ nghề Hùng Vương', '0101');
INSERT INTO truong VALUES ('4560', 'CĐ Nghề ISPACE, Phân hiệu CT', '0155');
INSERT INTO truong VALUES ('120', 'CĐ nghề kinh doanh và công nghệ Hà Nội', '0801');
INSERT INTO truong VALUES ('1764', 'CĐ Nghề Kinh tế Kỹ thuật Bắc Ninh', '0119');
INSERT INTO truong VALUES ('34', 'CĐ nghề KT công nghệ LOD -Phân hiệu HN', '0301');
INSERT INTO truong VALUES ('3998', 'CĐ nghề KV Long Thành-Nhơn Trạch', '0848');
INSERT INTO truong VALUES ('308', 'CĐ nghề kỹ thuật - công nghệ -kinh tế S', '2401');
INSERT INTO truong VALUES ('2479', 'CĐ Nghề Kỹ thuật - Công nghiệp Việt Nam - Hàn Quốc', '0129');
INSERT INTO truong VALUES ('189', 'CĐ nghề Kỹ thuật Công nghệ', '1301');
INSERT INTO truong VALUES ('493', 'CĐ nghề Kỹ thuật Công nghệ', '0902');
INSERT INTO truong VALUES ('4042', 'CĐ nghề Kỹ thuật Công nghệ LADEC', '0149');
INSERT INTO truong VALUES ('173', 'CĐ nghề Kỹ thuật Mỹ nghệ Việt Nam', '1201');
INSERT INTO truong VALUES ('2480', 'CĐ Nghề Kỹ thuật Việt - Đức', '0129');
INSERT INTO truong VALUES ('2260', 'CĐ nghề LiLaMa 1', '0127');
INSERT INTO truong VALUES ('4043', 'CĐ Nghề Long An', '0149');
INSERT INTO truong VALUES ('138', 'CĐ nghề Long Biên', '0901');
INSERT INTO truong VALUES ('3932', 'CĐ nghề Miền Đông Nam Bộ', '0148');
INSERT INTO truong VALUES ('2114', 'CĐ nghề Nam Định', '0125');
INSERT INTO truong VALUES ('2455', 'CĐ nghề Nghi Sơn', '2628');
INSERT INTO truong VALUES ('2871', 'CĐ Nghề Nguyễn Tri Phương', '0233');
INSERT INTO truong VALUES ('86', 'CĐ nghề Phú Châu', '0601');
INSERT INTO truong VALUES ('4370', 'CĐ nghề quốc tế Hồng Lam', '0652');
INSERT INTO truong VALUES ('3165', 'CĐ nghề Quy Nhơn', '0137');
INSERT INTO truong VALUES ('1219', 'CĐ nghề số 1- Bộ Quốc phòng', '0112');
INSERT INTO truong VALUES ('2863', 'CĐ Nghề số 23 Bộ Quốc phòng', '0133');
INSERT INTO truong VALUES ('2013', 'CĐ nghề Sông Đà', '0123');
INSERT INTO truong VALUES ('4083', 'CĐ nghề Tây Sài Gòn', '0849');
INSERT INTO truong VALUES ('1227', 'CĐ Nghề than khoáng sản Việt Nam', '0112');
INSERT INTO truong VALUES ('1246', 'CĐ Nghề than khoáng sản Việt Nam', '0412');
INSERT INTO truong VALUES ('190', 'CĐ nghề Thăng Long', '1301');
INSERT INTO truong VALUES ('411', 'CĐ nghề Thành phố Hồ Chí Minh', '0102');
INSERT INTO truong VALUES ('2899', 'CĐ Nghề Thừa Thiên Huế', '0633');
INSERT INTO truong VALUES ('4360', 'CĐ nghề tỉnh Bà Rịa-Vũng Tàu', '0452');
INSERT INTO truong VALUES ('1027', 'CĐ nghề tỉnh Lào Cai', '0508');
INSERT INTO truong VALUES ('87', 'CĐ nghề Trần Hưng Đạo', '0601');
INSERT INTO truong VALUES ('5119', 'CĐ Nghề Trần Đại Nghĩa', '0564');
INSERT INTO truong VALUES ('149', 'CĐ nghề Văn Lang Hà Nội', '1001');
INSERT INTO truong VALUES ('430', 'CĐ nghề Việt Mỹ', '0302');
INSERT INTO truong VALUES ('4559', 'CĐ Nghề Việt Mỹ, Phân hiệu CT', '0155');
INSERT INTO truong VALUES ('1570', 'CĐ nghề Việt Xô số 1', '0816');
INSERT INTO truong VALUES ('1510', 'CĐ nghề Việt Đức', '0116');
INSERT INTO truong VALUES ('13', 'CĐ nghề VIGLACERA', '0101');
INSERT INTO truong VALUES ('1521', 'CĐ nghề Vĩnh Phúc', '0116');
INSERT INTO truong VALUES ('207', 'CĐ nghề điện', '1401');
INSERT INTO truong VALUES ('4635', 'CĐ nghề Đồng Khởi', '0156');
INSERT INTO truong VALUES ('3931', 'CĐ nghề Đồng Nai', '0148');
INSERT INTO truong VALUES ('4158', 'CĐ nghề Đồng Tháp', '0450');
INSERT INTO truong VALUES ('137', 'CĐ nghề đường sắt I', '0901');
INSERT INTO truong VALUES ('1206', 'CĐ SP Thái Nguyên', '0112');
INSERT INTO truong VALUES ('4461', 'CĐ Sư phạm Kiên Giang', '0154');
INSERT INTO truong VALUES ('3094', 'CĐ Sư phạm Kon Tum', '0136');
INSERT INTO truong VALUES ('1248', 'CĐ than khoáng sản Việt Nam', '0412');
INSERT INTO truong VALUES ('1211', 'CĐ Thương mại và Du lịch', '0112');
INSERT INTO truong VALUES ('1210', 'CĐ Văn hoá Nghệ thuật Việt Bắc', '0112');
INSERT INTO truong VALUES ('2113', 'CĐ Xây dựng Nam Định', '0125');
INSERT INTO truong VALUES ('3875', 'CĐ Y tế Bình Thuận', '0147');
INSERT INTO truong VALUES ('4570', 'CĐ Y tế Cần Thơ', '0155');
INSERT INTO truong VALUES ('4462', 'CĐ Y tế Kiên Giang', '0154');
INSERT INTO truong VALUES ('3557', 'CĐ Y tế Lâm Đồng', '0142');
INSERT INTO truong VALUES ('2251', 'CĐ Y tế Ninh Bình', '0127');
INSERT INTO truong VALUES ('1209', 'CĐ Y tế Thái Nguyên', '0112');
INSERT INTO truong VALUES ('576', 'CĐKT Lý Tự Trọng TP. HCM', '1402');
INSERT INTO truong VALUES ('3748', 'CĐN Công nghệ và NL Nam Bộ', '0544');
INSERT INTO truong VALUES ('2328', 'CĐN NN - PTNT T.Hóa', '0128');
INSERT INTO truong VALUES ('3737', 'CĐN Việt Nam - Singapore', '0444');
INSERT INTO truong VALUES ('3747', 'CĐN Đồng An', '0544');
INSERT INTO truong VALUES ('833', 'CĐSP Hà Giang', '0105');
INSERT INTO truong VALUES ('3566', 'Dân lập Lê Lợi - Bảo Lộc', '0242');
INSERT INTO truong VALUES ('986', 'DTNT THPT huyện Nậm Nhùn', '0807');
INSERT INTO truong VALUES ('965', 'DTNT THPT huyện Sìn Hồ', '0407');
INSERT INTO truong VALUES ('977', 'DTNT THPT huyện Than Uyên', '0607');
INSERT INTO truong VALUES ('863', 'GDNN - GDTX Bắc Mê', '0705');
INSERT INTO truong VALUES ('884', 'GDNN - GDTX Bắc Quang', '1005');
INSERT INTO truong VALUES ('2286', 'GDNN - GDTX Gia Viễn', '0427');
INSERT INTO truong VALUES ('2291', 'GDNN - GDTX Hoa Lư', '0527');
INSERT INTO truong VALUES ('868', 'GDNN - GDTX Hoàng Su Phì', '0805');
INSERT INTO truong VALUES ('4607', 'GDNN - GDTX huyện Cờ Đỏ', '0655');
INSERT INTO truong VALUES ('4600', 'GDNN - GDTX huyện Phong Điền', '0555');
INSERT INTO truong VALUES ('4620', 'GDNN - GDTX huyện Thới Lai', '0955');
INSERT INTO truong VALUES ('4609', 'GDNN - GDTX huyện Vĩnh Thạnh', '0755');
INSERT INTO truong VALUES ('2303', 'GDNN - GDTX Kim Sơn', '0727');
INSERT INTO truong VALUES ('841', 'GDNN - GDTX Mèo Vạc', '0305');
INSERT INTO truong VALUES ('2281', 'GDNN - GDTX Nho Quan', '0327');
INSERT INTO truong VALUES ('851', 'GDNN - GDTX Quản Bạ', '0505');
INSERT INTO truong VALUES ('4579', 'GDNN - GDTX quận Bình Thủy', '0255');
INSERT INTO truong VALUES ('4589', 'GDNN - GDTX quận Cái Răng', '0355');
INSERT INTO truong VALUES ('4552', 'GDNN - GDTX quận Ninh Kiều', '0155');
INSERT INTO truong VALUES ('4596', 'GDNN - GDTX quận Ô Môn', '0455');
INSERT INTO truong VALUES ('4615', 'GDNN - GDTX quận Thốt Nốt', '0855');
INSERT INTO truong VALUES ('890', 'GDNN - GDTX Quang Bình', '1105');
INSERT INTO truong VALUES ('2274', 'GDNN - GDTX Tam Điệp', '0227');
INSERT INTO truong VALUES ('859', 'GDNN - GDTX Vị Xuyên', '0605');
INSERT INTO truong VALUES ('873', 'GDNN - GDTX Xín Mần', '0905');
INSERT INTO truong VALUES ('2309', 'GDNN - GDTX Yên Khánh', '0827');
INSERT INTO truong VALUES ('847', 'GDNN - GDTX Yên Minh', '0405');
INSERT INTO truong VALUES ('2297', 'GDNN - GDTX Yên Mô', '0627');
INSERT INTO truong VALUES ('838', 'GDNN - GDTX Đồng Văn', '0205');
INSERT INTO truong VALUES ('245', 'GDNN-GDTX huyện Ba Vì', '1701');
INSERT INTO truong VALUES ('282', 'GDNN-GDTX huyện Chương Mỹ', '2101');
INSERT INTO truong VALUES ('170', 'GDNN-GDTX huyện Gia Lâm', '1201');
INSERT INTO truong VALUES ('295', 'GDNN-GDTX huyện Hoài Đức', '2301');
INSERT INTO truong VALUES ('352', 'GDNN-GDTX huyện Mê Linh', '2901');
INSERT INTO truong VALUES ('315', 'GDNN-GDTX huyện Mỹ Đức', '2501');
INSERT INTO truong VALUES ('341', 'GDNN-GDTX huyện Phú Xuyên', '2801');
INSERT INTO truong VALUES ('253', 'GDNN-GDTX huyện Phúc Thọ', '1801');
INSERT INTO truong VALUES ('271', 'GDNN-GDTX huyện Quốc Oai', '2001');
INSERT INTO truong VALUES ('205', 'GDNN-GDTX huyện Sóc Sơn', '1401');
INSERT INTO truong VALUES ('261', 'GDNN-GDTX huyện Thạch Thất', '1901');
INSERT INTO truong VALUES ('306', 'GDNN-GDTX huyện Thanh Oai', '2401');
INSERT INTO truong VALUES ('157', 'GDNN-GDTX huyện Thanh Trì', '1101');
INSERT INTO truong VALUES ('332', 'GDNN-GDTX huyện Thường Tín', '2701');
INSERT INTO truong VALUES ('324', 'GDNN-GDTX huyện Ứng Hòa', '2601');
INSERT INTO truong VALUES ('288', 'GDNN-GDTX huyện Đan Phượng', '2201');
INSERT INTO truong VALUES ('187', 'GDNN-GDTX huyện Đông Anh', '1301');
INSERT INTO truong VALUES ('17', 'GDNN-GDTX Nguyễn Văn Tố quận Hoàn Kiếm', '0201');
INSERT INTO truong VALUES ('10', 'GDNN-GDTX quận Ba Đình', '0101');
INSERT INTO truong VALUES ('81', 'GDNN-GDTX quận Cầu Giấy', '0601');
INSERT INTO truong VALUES ('220', 'GDNN-GDTX quận Hà Đông', '1501');
INSERT INTO truong VALUES ('31', 'GDNN-GDTX quận Hai Bà Trưng', '0301');
INSERT INTO truong VALUES ('118', 'GDNN-GDTX quận Hoàng Mai', '0801');
INSERT INTO truong VALUES ('134', 'GDNN-GDTX quận Long Biên', '0901');
INSERT INTO truong VALUES ('366', 'GDNN-GDTX quận Nam Từ Liêm', '3001');
INSERT INTO truong VALUES ('64', 'GDNN-GDTX quận Tây Hồ', '0501');
INSERT INTO truong VALUES ('105', 'GDNN-GDTX quận Thanh Xuân', '0701');
INSERT INTO truong VALUES ('47', 'GDNN-GDTX quận Đống Đa', '0401');
INSERT INTO truong VALUES ('230', 'GDNN-GDTX thị xã Sơn Tây', '1601');
INSERT INTO truong VALUES ('835', 'GDTX - HN tỉnh Hà Giang', '0105');
INSERT INTO truong VALUES ('246', 'GDTX Ba Vì', '1701');
INSERT INTO truong VALUES ('11', 'GDTX Ba Đình', '0101');
INSERT INTO truong VALUES ('861', 'GDTX Bắc Mê', '0705');
INSERT INTO truong VALUES ('879', 'GDTX Bắc Quang', '1005');
INSERT INTO truong VALUES ('283', 'GDTX Chương Mỹ', '2101');
INSERT INTO truong VALUES ('221', 'GDTX Hà Tây', '1501');
INSERT INTO truong VALUES ('32', 'GDTX Hai Bà Trưng', '0301');
INSERT INTO truong VALUES ('296', 'GDTX Hoài Đức', '2301');
INSERT INTO truong VALUES ('119', 'GDTX Hoàng Mai', '0801');
INSERT INTO truong VALUES ('865', 'GDTX Hoàng Su Phì', '0805');
INSERT INTO truong VALUES ('353', 'GDTX Mê Linh', '2901');
INSERT INTO truong VALUES ('840', 'GDTX Mèo Vạc', '0305');
INSERT INTO truong VALUES ('316', 'GDTX Mỹ Đức', '2501');
INSERT INTO truong VALUES ('18', 'GDTX Nguyễn Văn Tố', '0201');
INSERT INTO truong VALUES ('2259', 'GDTX Ninh Bình', '0127');
INSERT INTO truong VALUES ('172', 'GDTX Phú Thị', '1201');
INSERT INTO truong VALUES ('342', 'GDTX Phú Xuyên', '2801');
INSERT INTO truong VALUES ('254', 'GDTX Phúc Thọ', '1801');
INSERT INTO truong VALUES ('849', 'GDTX Quản Bạ', '0505');
INSERT INTO truong VALUES ('272', 'GDTX Quốc Oai', '2001');
INSERT INTO truong VALUES ('206', 'GDTX Sóc Sơn', '1401');
INSERT INTO truong VALUES ('231', 'GDTX Sơn Tây', '1601');
INSERT INTO truong VALUES ('65', 'GDTX Tây Hồ', '0501');
INSERT INTO truong VALUES ('831', 'GDTX Tỉnh', '0105');
INSERT INTO truong VALUES ('367', 'GDTX Từ Liêm', '3001');
INSERT INTO truong VALUES ('854', 'GDTX Vị Xuyên', '0605');
INSERT INTO truong VALUES ('135', 'GDTX Việt Hưng', '0901');
INSERT INTO truong VALUES ('870', 'GDTX Xín Mần', '0905');
INSERT INTO truong VALUES ('843', 'GDTX Yên Minh', '0405');
INSERT INTO truong VALUES ('289', 'GDTX Đan Phượng', '2201');
INSERT INTO truong VALUES ('171', 'GDTX Đình Xuyên', '1201');
INSERT INTO truong VALUES ('188', 'GDTX Đông Anh', '1301');
INSERT INTO truong VALUES ('158', 'GDTX Đông Mỹ', '1101');
INSERT INTO truong VALUES ('837', 'GDTX Đồng Văn', '0205');
INSERT INTO truong VALUES ('48', 'GDTX Đống Đa', '0401');
INSERT INTO truong VALUES ('82', 'GDTX&DN Cầu Giấy', '0601');
INSERT INTO truong VALUES ('3492', 'GDTX&HN Nha Trang', '0141');
INSERT INTO truong VALUES ('4820', 'Hệ thiếu sinh quân Trường Quân sự Quân khu 9', '0159');
INSERT INTO truong VALUES ('2855', 'Học viện Âm nhạc Huế', '0133');
INSERT INTO truong VALUES ('49', 'Học viện âm nhạc QGVN', '0401');
INSERT INTO truong VALUES ('224', 'Hữu Nghị 80', '1601');
INSERT INTO truong VALUES ('248', 'Hữu Nghị T78', '1801');
INSERT INTO truong VALUES ('2850', 'Khối chuyên ĐHKH Huế', '0133');
INSERT INTO truong VALUES ('3491', 'KTTH-HN tỉnh Khánh Hòa', '0141');
INSERT INTO truong VALUES ('4168', 'Năng khiếu TDTT', '0550');
INSERT INTO truong VALUES ('4637', 'Năng khiếu TDTT Bến Tre', '0156');
INSERT INTO truong VALUES ('4466', 'Năng khiếu TDTT Kiên Giang', '0154');
INSERT INTO truong VALUES ('4702', 'Năng khiếu Thể dục thể thao', '0157');
INSERT INTO truong VALUES ('4238', 'Năng khiếu thể thao', '0151');
INSERT INTO truong VALUES ('408', 'Nhạc Viện Thành phố Hồ Chí Minh', '0102');
INSERT INTO truong VALUES ('426', 'Phân hiệu BTVH Lê Thị Hồng Gấm', '0302');
INSERT INTO truong VALUES ('3749', 'Phân hiệu CĐN Đường sắt phía Nam', '0544');
INSERT INTO truong VALUES ('3559', 'Phân hiệu TC Văn thư lưu trữ TW', '0142');
INSERT INTO truong VALUES ('419', 'Phân hiệu THPT Lê Thị Hồng Gấm', '0302');
INSERT INTO truong VALUES ('4752', 'Phổ thông Dân Tộc Nội Trú - THPT tỉnh Trà Vinh', '0158');
INSERT INTO truong VALUES ('3809', 'Phổ thông dân tộc nội trú Tây Ninh', '0146');
INSERT INTO truong VALUES ('2851', 'Phổ thông Dân tộc Nội trú Tỉnh', '0133');
INSERT INTO truong VALUES ('2703', 'Phổ thông dân tộc nội trú tỉnh', '0131');
INSERT INTO truong VALUES ('3493', 'Phổ thông Dân tộc Nội trú tỉnh Khánh Hòa', '0141');
INSERT INTO truong VALUES ('4818', 'Phổ thông DTNT Sóc Trăng', '0159');
-- ===========================Test Danh mục Bài viết Chi tiết bài viết==========================
-- CREATE TABLE danh_muc (
--     ma_dm VARCHAR(10) PRIMARY KEY,
--     ten_dm TEXT NOT NULL,
--     ma_dm_cha VARCHAR(10)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;
INSERT INTO danh_muc VALUES ('1', 'Danh mục 1', null);
INSERT INTO danh_muc VALUES ('2', 'Danh mục 2', null);
INSERT INTO danh_muc VALUES ('3', 'Danh mục 3', null);

INSERT INTO danh_muc VALUES ('1.1', 'Danh mục 1.1', '1');
INSERT INTO danh_muc VALUES ('1.2', 'Danh mục 1.2', '1');
INSERT INTO danh_muc VALUES ('1.3', 'Danh mục 1.3', '1');

INSERT INTO danh_muc VALUES ('1.1.1', 'Danh mục 1.1.1', '1.1');
INSERT INTO danh_muc VALUES ('1.1.1.1', 'Danh mục 1.1.1.1', '1.1.1');
INSERT INTO danh_muc VALUES ('1.1.2', 'Danh mục 1.1.2', '1.1');

INSERT INTO danh_muc VALUES ('2.2.1', 'Danh mục 2.2.1', '2.2');

INSERT INTO danh_muc VALUES ('2.1', 'Danh mục 2.1', '2');
INSERT INTO danh_muc VALUES ('2.2', 'Danh mục 2.2', '2');

INSERT INTO danh_muc VALUES ('3.1', 'Danh mục 3.1', '3');
INSERT INTO danh_muc VALUES ('3.2', 'Danh mục 3.2', '3');

-- CREATE TABLE bai_viet (
--     ma_bv INT AUTO_INCREMENT PRIMARY KEY,
--     ma_dm VARCHAR(10),
--     tieu_de_bv TEXT,
--     noi_dung_tom_tat_bv LONGTEXT,
--     link_anh_bia_bv LONGTEXT,
--     FOREIGN KEY (ma_dm)
--         REFERENCES danh_muc (ma_dm)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Tieu De 1', 'Noi Dung Tom Tat', 'Link anh bia 1');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Tieu De 2', 'Noi Dung Tom Tat', 'Link anh bia 2');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Tieu De 3', 'Noi Dung Tom Tat', 'Link anh bia 3');

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('2.1', 'Tieu De 4', 'Noi Dung Tom Tat', 'Link anh bia 4');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('3.2', 'Tieu De 5', 'Noi Dung Tom Tat', 'Link anh bia 5');

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.3', 'Tieu De 6', 'Noi Dung Tom Tat', 'Link anh bia 6');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.3', 'Tieu De 7', 'Noi Dung Tom Tat', 'Link anh bia 7');

-- CREATE TABLE chi_tiet_bai_viet (
--     ma_ctbv INT AUTO_INCREMENT PRIMARY KEY,
--     ma_bv INT,
--     noi_dung_chi_tiet_ctbv LONGTEXT,
--     link_anh_ctbv LONGTEXT,
--     FOREIGN KEY (ma_bv)
--         REFERENCES bai_viet (ma_bv)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('1', 'Noi Dung Chi Tiet 1', 'Link anh 1');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('1', 'Noi Dung Chi Tiet 2', 'Link anh 2');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('2', 'Noi Dung Chi Tiet 1', 'Link anh 3');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('3', 'Noi Dung Chi Tiet 1', 'Link anh 4');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('4', 'Noi Dung Chi Tiet 1', 'Link anh 5');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('4', null, 'Link anh 6');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('4', 'Noi Dung Chi Tiet 3', null);
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('5', 'Noi Dung Chi Tiet 1', 'Link anh 8');

-- select * from chi_tiet_bai_viet where ma_bv = '1';
-- delete from chi_tiet_bai_viet where ma_bv = '1';
-- select * from bai_viet bv inner join danh_muc dm on bv.ma_dm = dm.ma_dm limit 0, 3;
-- select * from danh_muc;


-- use dhtl;
-- insert into tinh_thanh_pho(ma_ttp,ten_ttp) values('1','Hà Nội');
-- insert into quan_huyen(ma_qh,ten_qh,ma_ttp) values('1','Đống Đa','1');
-- 
-- insert into co_so_dao_tao(ma_csdt,ten_csdt,dia_chi_csdt) values('1','Cơ sở 1','1');
-- insert into nganh_dao_tao(ten_ndt, chuong_trinh_dao_tao_ndt, ghi_chu_ndt, gioi_thieu_ndt,ma_csdt) values('1','1','1','1','1');
-- select * from nganh_dao_tao ndt inner join co_so_dao_tao csdt on ndt.ma_csdt = csdt.ma_csdt;