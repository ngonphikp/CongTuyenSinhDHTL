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
-- select * from co_so_dao_tao csdt inner join phuong_thi_xa ptx on csdt.dia_chi_csdt = ptx.ma_ptx inner join quan_huyen qh on ptx.ma_qh = qh.ma_qh inner join tinh_thanh_pho ttp on qh.ma_ttp = ttp.ma_ttp;
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
    noi_sinh_ts NVARCHAR(50),
    dan_toc_ts TEXT,
    so_cmnd_cccd_ts VARCHAR(20),
    ngay_cap DATE,
    noi_cap TEXT,
    ho_khau_tinh_thanh_pho TEXT,
    ho_khau_quan_huyen TEXT,
    ho_khau_xa_phuong TEXT,
    ho_khau_thon_ban_duong_pho TEXT,
    tinh_tp_lop_10 TEXT,
    quan_huyen_lop_10 TEXT,
    truong_lop_10 TEXT,
    tinh_tp_lop_11 TEXT,
    quan_huyen_lop_11 TEXT,
    truong_lop_11 TEXT,
    quan_huyen_lop_12 TEXT,
    tinh_tp_lop_12 TEXT,
     truong_lop_12 TEXT,
    sdt_ts VARCHAR(20),
    email_ts VARCHAR(50),
    nam_tot_nghiep_ts INT,
    khu_vuc_uu_tien TEXT,
    doi_tuong_uu_tien TEXT
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

insert into thi_sinh (
ho_ten_ts,
gioi_tinh_ts,
ngay_sinh_ts,
noi_sinh_ts,
dan_toc_ts,
so_cmnd_cccd_ts,
ngay_cap ,
noi_cap ,
ho_khau_tinh_thanh_pho ,
ho_khau_quan_huyen,
ho_khau_xa_phuong ,
ho_khau_thon_ban_duong_pho,
tinh_tp_lop_10 ,
quan_huyen_lop_10 ,
truong_lop_10,
    tinh_tp_lop_11 ,
    quan_huyen_lop_11 ,
    truong_lop_11 ,
    tinh_tp_lop_12 ,
    quan_huyen_lop_12 ,
    truong_lop_12 ,
    sdt_ts ,
    email_ts ,
    nam_tot_nghiep_ts ,
    khu_vuc_uu_tien ,
    doi_tuong_uu_tien) values (
    'Chinh',
    'Nam',
    '2000-06-06',
    'Thành Phố Hà Nội',
    'Kinh',
    '135900840',
    '2000-10-6',
    'Hà Nội',
    'Thành Phố Hà Nội',
    'Huyện Ba Vì',
    'Xã Cờ Đỏ',
    'Thôn Đông',
    'Thành Phố Hà Nội',
    'Huyện Ba Vì',
    'THPT Diên Hồng',
    'Thành Phố Hà Nội',
    'Huyện Ba Vì',
    'THPT Diên Hồng',
    'Thành Phố Hà Nội',
    'Huyện Ba Vì',
    'THPT Diên Hồng',
    '0376182631',
    'adfdf@gmail.com',
    '2020',
    'KV1',
    '01');

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
insert into ho_so_xet_tuyen(ma_ts) values(1);
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
    dia_chi_tinh_thanh_pho NVARCHAR(50),
    dia_chi_quan_huyen NVARCHAR(50),
    dia_chi_xa_phuong NVARCHAR(50),
    dia_chi_thon_ban_duong_pho NVARCHAR(50)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;
insert into co_so_dao_tao(ten_csdt, dia_chi_tinh_thanh_pho, dia_chi_quan_huyen, dia_chi_xa_phuong, dia_chi_thon_ban_duong_pho) values('Cơ sở 1','Thành Phố Hà Nội','Quận Đống Đa' ,'Phường Trung Liệt', 'Số 175 Tây Sơn');
insert into co_so_dao_tao(ten_csdt, dia_chi_tinh_thanh_pho, dia_chi_quan_huyen, dia_chi_xa_phuong, dia_chi_thon_ban_duong_pho) values('Cơ sở 2','Thành phố Hồ Chí Minh','Quận Bình Thạnh' ,'Phường 17', 'Số 2 Trường Sa');
CREATE TABLE nganh_dao_tao (
    ma_ndt VARCHAR(50) PRIMARY KEY,
    ma_csdt INT,
    ten_ndt TEXT NOT NULL,
    chuong_trinh_dao_tao_ndt TEXT,
    ghi_chu_ndt TEXT,
    gioi_thieu_ndt TEXT,
    FOREIGN KEY (ma_csdt)
        REFERENCES co_so_dao_tao (ma_csdt)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;
insert into nganh_dao_tao(ma_ndt,ma_csdt, ten_ndt, chuong_trinh_dao_tao_ndt) values('TLA106','1','Công nghệ thông tin','Chương trình đào tạo bằng Tiếng Việt');
insert into nganh_dao_tao(ma_ndt,ma_csdt, ten_ndt, chuong_trinh_dao_tao_ndt) values('TLA201','1','Kỹ thuật xây dựng','Chương trình tiên tiến, đào tạo bằng Tiếng Anh');
insert into nganh_dao_tao(ma_ndt,ma_csdt, ten_ndt, chuong_trinh_dao_tao_ndt) values('TLS101','2','Kỹ thuật xây dựng công trình thủy','Chương trình đào tạo bằng Tiếng Việt');
CREATE TABLE diem_chuan (
    ma_dc INT AUTO_INCREMENT PRIMARY KEY,
    ma_ndt VARCHAR(50),
    nam_dc DATE,
    diem_dc FLOAT,
    chi_tieu_dc INT,
    FOREIGN KEY (ma_ndt)
        REFERENCES nganh_dao_tao (ma_ndt)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE to_hop_mon (
    ma_thm NVARCHAR(5) PRIMARY KEY,
    ten_mon_1 NVARCHAR(50),
    ten_mon_2 NVARCHAR(50),
    ten_mon_3 NVARCHAR(50)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;
insert into to_hop_mon value('A00','Toán','Lý','Hóa');
insert into to_hop_mon value('A01','Toán','Lý','Anh');
insert into to_hop_mon value('A02','Toán','Lý','Sinh');
insert into to_hop_mon value('B00','Toán','Hóa','Sinh');
insert into to_hop_mon value('D01','Toán','Ngữ Văn','Anh');
insert into to_hop_mon value('D07','Toán','Hóa','Anh');
insert into to_hop_mon value('D08','Toán','Sinh','Anh');
-- select * from to_hop_mon;
CREATE TABLE to_hop_mon_xet_tuyen (
    ma_thm NVARCHAR(50),
    ma_ndt VARCHAR(50),
    FOREIGN KEY (ma_ndt)
        REFERENCES nganh_dao_tao (ma_ndt),
    FOREIGN KEY (ma_thm)
        REFERENCES to_hop_mon (ma_thm),
    PRIMARY KEY (ma_thm , ma_ndt)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

insert into to_hop_mon_xet_tuyen value('A00','TLS101');
insert into to_hop_mon_xet_tuyen value('A01','TLS101');
insert into to_hop_mon_xet_tuyen value('A00','TLA106');
insert into to_hop_mon_xet_tuyen value('A01','TLA106');
CREATE TABLE nguyen_vong (
    ma_hsxt INT,
    ten_nguyen_vong NVARCHAR(50),
    ma_csdt INT,
    ma_ndt VARCHAR(50),
    ma_thm NVARCHAR(50),
    PRIMARY KEY (ma_hsxt , ten_nguyen_vong),
    FOREIGN KEY (ma_csdt)
        REFERENCES co_so_dao_tao (ma_csdt),
    FOREIGN KEY (ma_ndt)
        REFERENCES nganh_dao_tao (ma_ndt),
    FOREIGN KEY (ma_hsxt)
        REFERENCES ho_so_xet_tuyen (ma_hsxt),
    FOREIGN KEY (ma_thm)
        REFERENCES to_hop_mon (ma_thm)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;
-- select * from nguyen_vong-- 
-- select * from nguyen_vong where ma_hsxt='1' and ten_nguyen_vong="1";
insert into nguyen_vong(ma_hsxt, ten_nguyen_vong, ma_csdt, ma_ndt, ma_thm)  values('1','1','1', 'TLA106', 'A00');
CREATE TABLE trang_thai_nguyen_vong (
    ten_nguyen_vong NVARCHAR(50),
    ma_hsxt INT,
    PRIMARY KEY (ten_nguyen_vong , ma_hsxt),
    ma_xet_tuyen VARCHAR(50),
    to_hop_xet_tuyen NVARCHAR(50),
    trang_thai TEXT,
    FOREIGN KEY (ma_xet_tuyen)
        REFERENCES nganh_dao_tao (ma_ndt),
    FOREIGN KEY (to_hop_xet_tuyen)
        REFERENCES to_hop_mon_xet_tuyen (ma_thm)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE mon (
    ten_mon NVARCHAR(50),
    ma_hsxt INT,
    diem_lop_10 FLOAT,
    diem_lop_11 FLOAT,
    diem_lop_12 FLOAT,
    PRIMARY KEY (ten_mon , ma_hsxt),
    FOREIGN KEY (ma_hsxt)
        REFERENCES ho_so_xet_tuyen (ma_hsxt)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

CREATE TABLE hoc_ba (
    ma_hb INT AUTO_INCREMENT PRIMARY KEY,
    ma_ts INT,
    xep_loai_hb TEXT,
    link_anh_hb VARCHAR(50),
    FOREIGN KEY (ma_ts)
        REFERENCES thi_sinh (ma_ts)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;
-- lop thi dang xem xet

-- CREATE TABLE lop (
--     ma_lop INT AUTO_INCREMENT PRIMARY KEY,
--     ma_hb INT,
--     ma_truong VARCHAR(5),
--     cap_do_lop INT,
--     FOREIGN KEY (ma_hb)
--         REFERENCES hoc_ba (ma_hb),
--     FOREIGN KEY (ma_truong)
--         REFERENCES truong (ma_truong)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

-- mon nay bo thui

-- CREATE TABLE mon (
--     ma_mon INT AUTO_INCREMENT PRIMARY KEY,
--     ten_mon TEXT,
--     diem_mon FLOAT,
--     ma_lop INT,
--     FOREIGN KEY (ma_lop)
--         REFERENCES lop (ma_lop)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

-- tinh thanh pho phuong xa bo

-- CREATE TABLE tinh_thanh_pho (
--     ma_ttp VARCHAR(10) PRIMARY KEY,
--     ten_ttp TEXT
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;
-- -- select * from co_so_dao_tao csdt inner join phuong_thi_xa ptx on csdt.dia_chi_csdt = ptx.ma_ptx inner join quan_huyen qh on ptx.ma_qh = qh.ma_qh inner join tinh_thanh_pho ttp on qh.ma_ttp = ttp.ma_ttp;
-- CREATE TABLE quan_huyen (
--     ma_qh VARCHAR(10) PRIMARY KEY,
--     ten_qh TEXT,
--     ma_ttp VARCHAR(5),
--     FOREIGN KEY (ma_ttp)
--         REFERENCES tinh_thanh_pho (ma_ttp)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;

-- CREATE TABLE phuong_thi_xa (
--     ma_ptx VARCHAR(10) PRIMARY KEY,
--     ten_ptx TEXT,
--     ma_qh VARCHAR(10),
--     FOREIGN KEY (ma_qh)
--         REFERENCES quan_huyen (ma_qh)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;

insert into tinh_thanh_pho value('TEST1', 'Hà Nội');
insert into quan_huyen value('TEST1', 'Đống Đa', 'TEST1');
insert into phuong_thi_xa(ma_ptx,ten_ptx,ma_qh) values('TEST1','Tây Sơn','TEST1');

insert into tai_khoan(ten_dang_nhap, mat_khau, cap_do) values('admin', '123456', 0);
insert into tai_khoan(ten_dang_nhap, mat_khau) values('admin1', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('admin2', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('admin3', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('admin4', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('admin5', '123456');
insert into tai_khoan(ten_dang_nhap, mat_khau) values('admin6', '123456');

insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(1,'Nguyễn Xuân Phi','admin@gmail.com','1998-02-13','Nam','TEST1','0123456789');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(2,'Nguyễn Thị A','a@gmail.com','1998-10-2','Nữ','TEST1','0923456719');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(3,'Nguyễn Văn JK','b@gmail.com','1997-02-26','Nam','TEST1','0163456729');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(4,'Nguyễn Văn GH','c@gmail.com','1998-02-18','Nam','TEST1','0963453589');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(5,'Nguyễn Văn X','admin@gmail.com','1998-02-13','Nam','TEST1','0123456789');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(6,'Nguyễn Thị R','a@gmail.com','1998-10-2','Nữ','TEST1','0923456719');
insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values(7,'Nguyễn Văn FK','b@gmail.com','1997-02-26','Nam','TEST1','0163456729');

-- ===========================Test Danh mục Bài viết Chi tiết bài viết==========================
-- CREATE TABLE danh_muc (
--     ma_dm VARCHAR(10) PRIMARY KEY,
--     ten_dm TEXT NOT NULL,
--     ma_dm_cha VARCHAR(10)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;
INSERT INTO danh_muc VALUES ('1', 'Thông báo tuyển sinh', null);
INSERT INTO danh_muc VALUES ('2', 'Thông tin xét tuyển', null);
INSERT INTO danh_muc VALUES ('3', 'Thông tin ngành tuyển sinh', null);
INSERT INTO danh_muc VALUES ('4', 'Tư vấn tuyển sinh', null);
INSERT INTO danh_muc VALUES ('5', 'Liên hệ', null);
INSERT INTO danh_muc VALUES ('6', 'THÔNG TIN GIỚI THIỆU TRƯỜNG ĐẠI HỌC THỦY LỢI ', null);

INSERT INTO danh_muc VALUES ('1.1', 'Tuyển sinh 2020', '1');
INSERT INTO danh_muc VALUES ('1.2', 'Các tuyển sinh khác', '1');

INSERT INTO danh_muc VALUES ('2.1', 'THÔNG TIN TUYỂN SINH ĐẠI HỌC CHÍNH QUY NĂM 2020', '2');
INSERT INTO danh_muc VALUES ('2.2', 'Thí sinh cần lưu ý', '2');

INSERT INTO danh_muc VALUES ('2.2.1', 'Quy chế tuyển sinh', '2.2');
INSERT INTO danh_muc VALUES ('2.2.2', 'Thông tin xét tuyển', '2.2');

INSERT INTO danh_muc VALUES ('3.1', 'Khoa Công trình', '3');
INSERT INTO danh_muc VALUES ('3.2', 'Khoa Cơ khí', '3');
INSERT INTO danh_muc VALUES ('3.3', 'Khoa Công nghệ thông tin', '3');
INSERT INTO danh_muc VALUES ('3.4', 'Khoa Kỹ thuật xây dựng', '3');
INSERT INTO danh_muc VALUES ('3.5', 'Khoa Kỹ thuật tài nguyên nước', '3');
INSERT INTO danh_muc VALUES ('3.6', 'Khoa Thủy văn và tài nguyên nước', '3');
INSERT INTO danh_muc VALUES ('3.7', 'Khoa Điện - Điện tử', '3');
INSERT INTO danh_muc VALUES ('3.8', 'Khoa Kỹ thuật xây dựng', '3');
INSERT INTO danh_muc VALUES ('3.9', 'Khoa Kinh tế và quản lý', '3');
INSERT INTO danh_muc VALUES ('3.10', 'Khoa Kỹ thuật biển', '3');
INSERT INTO danh_muc VALUES ('3.11', 'Khoa Hóa và Môi trường', '3');
INSERT INTO danh_muc VALUES ('3.12', 'Khoa Lý luận chính trị', '3');

INSERT INTO danh_muc VALUES ('4.1', 'Danh sách cán bộ tư vấn tuyển sinh', '4');
INSERT INTO danh_muc VALUES ('4.2', 'Danh sách câu hỏi', '4');
INSERT INTO danh_muc VALUES ('4.3', 'Câu hỏi thường gặp', '4');

INSERT INTO danh_muc VALUES ('5.1', 'Trường Đại Học Thủy Lợi', '5');
INSERT INTO danh_muc VALUES ('5.2', 'Website Khoa viện', '5');

INSERT INTO danh_muc VALUES ('6.1', 'Thông tin hoạt động', '6');

-- CREATE TABLE bai_viet (
--     ma_bv INT AUTO_INCREMENT PRIMARY KEY,
--     ma_dm VARCHAR(10),
--     tieu_de_bv TEXT,
--     noi_dung_tom_tat_bv LONGTEXT,
--     link_anh_bia_bv LONGTEXT,
--     FOREIGN KEY (ma_dm)
--         REFERENCES danh_muc (ma_dm)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'TÓM TẮT ĐỀ ÁN TUYỂN SINH ĐẠI HỌC HỆ CHÍNH QUY NĂM 2020', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Các mốc thời gian đăng ký xét tuyển bằng kết quả thi THPT', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Trường ĐH Thủy Lợi công bố đề án tuyển sinh trình độ đại học 2020', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Trường ĐH Thủy Lợi tổ chức buổi tư vấn tuyển sinh trực tuyến ngày 24.05.2020', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Danh sách thí sinh gửi Đăng ký xét tuyển đại học chính quy bằng học bạ qua đường bưu điện', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Hướng dẫn tính điểm đủ điều kiện xét tuyển bằng hình xét tuyển học bạ THPT', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Thông báo xét tuyển đại học chính quy năm 2020 theo kết quả học bạ THPT', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'HƯỚNG DẪN ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC CHÍNH QUY BẰNG KẾT QUẢ HỌC BẠ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Thông báo tuyển sinh Đại học chính quy năm 2020', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Clip giới thiệu trường ĐH Giao thông vận tải - Tuyển sinh 2020', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Thông báo về phương thức tuyển sinh đại học hệ chính quy năm 2020', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'THÔNG TƯ Sửa đổi, bổ sung một số điều của Quy chế thi trung học phổ thông quốc gia và xét công nhận tốt nghiệp trung học phổ thông', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Thông tin tuyển sinh đại học chính quy năm 2020', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Danh sách thí sinh xác nhận nhập học qua đường bưu điện', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'NHỮNG ĐIỀU CẦN BIẾT VỚI TÂN SINH VIÊN K60', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Thông báo điểm trúng tuyển và các tiêu chí xét tuyển Đại học chính quy 2019 xét tuyển bằng kết quả thi THPT QG 2019', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Thông báo về thời gian tra cứu kết quả xét tuyển', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Hướng dẫn cách tra cứu kết quả xét tuyển Đại học hệ chính quy năm 2019 tại trường Đại học Giao thông vận tải', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Thông báo kế hoạch xác nhận nhập học đối với thí sinh xét tuyển bằng kết quả thi THPT 2019', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Thông báo gửi giấy báo nhập học đối với các thí sinh xét tuyển học bạ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Thông báo danh sách thí sinh đủ điểm trúng tuyển đại học hệ chính quy 2019 xét tuyển theo kết quả học bạ (đợt 2)', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Thông báo điểm trúng tuyển đại học chính quy 2019 xét tuyển theo kết quả học bạ (đợt 2)', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Công bố mức điểm đủ điều kiện nộp hồ sơ đăng ký xét tuyển đại học hệ chính quy năm 2019', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Phổ điểm thi THPT quốc gia 2019', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Hướng dẫn tra cứu điểm thi THPTQG 2019', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'DANH SÁCH THÍ SINH ĐĂNG KÝ XÉT TUYỂN THEO HÌNH THỨC HỌC BẠ GỬI QUA ĐƯỜNG BƯU ĐIỆN (đợt 2)', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Thông báo Điểm trúng tuyển và Danh sách thí sinh đủ điểm trúng tuyển đại học hệ chính quy 2019 xét tuyển theo kết quả học bạ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'DANH SÁCH THÍ SINH ĐĂNG KÝ XÉT TUYỂN THEO HÌNH THỨC HỌC BẠ NỘP QUA ĐƯỜNG BƯU ĐIỆN (UPDATE HÀNG NGÀY)', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Danh sách máy tính bỏ túi được đem vào phòng thi kỳ thi THPT Quốc gia năm 2019', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('5.2', 'Khoa Công trình', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('5.2', 'Khoa Cơ khí', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('5.2', 'Khoa Công nghệ thông tin', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('5.2', 'Khoa Điện - Điện tử', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('5.2', 'Khoa Vận tải - Kinh tế', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('5.2', 'Khoa Kỹ thuật xây dựng', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('5.2', 'Khoa Đào tạo quốc tế', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('5.2', 'Khoa Môi trường và An toàn giao thông', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('5.2', 'Khoa Khoa học cơ bản', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('5.2', 'Khoa Quản lý xây dựng', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('6.1', 'ĐH Giao thông vận tải tham gia Chương trình Ngày hội hướng nghiệp tại THPT Cầu Giấy', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('6.1', 'Đoàn CB-GV trường ĐH GTVT lên đường thực hiện nhiệm vụ coi thi THPT QG 2019', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('6.1', 'Trường Đại học Giao thông vận tải tham dự Ngày hội tư vấn tuyển sinh hướng nghiệp năm 2019 tại Bắc Ninh', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('6.1', 'Trường Đại học Giao thông vận tải tham dự Ngày hội tư vấn tuyển sinh hướng nghiệp năm 2019 do báo Tuổi trẻ tổ chức tại Nghệ An, Thanh Hóa', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('6.1', 'Khoa Đào tạo Quốc tế trường ĐH Giao thông vận tải tham gia Ngày hội hướng nghiệp Đường Đến Thành Công tại Trường THPT Thăng Long - Hà Nội', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'Hình thức xét tuyển bằng học bạ vào trường là lấy điểm trung bình 3 năm hay là chỉ 1 năm lớp 12 ạ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'trường mình năm nay lấy bao nhiêu chỉ tiêu xét học bạ vậy ạ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'Cho em hỏi ngành ô tô có xét học bạ tổ hợp xã hội hông ạ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'Em đã nộp online, đã có mail của trường gửi về mà sao trên danh sách nộp online không có ạ? Số cmt của em là 030202004167', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'Em muốn hỏi nếu ko đăng kí xét học bạ trực tuyến thí gửi bưu điện đk ko ạ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'học bạ của em bị sai thiếu mất nghề nghiệp của bố mẹ thì có đc xét tuyển k ạ, với lại em công chứng từ 11/5 nhưng bây h mang đi xét tuyển thì có đc k ạ? em cảm ơn nhà trường', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'Thầy cô cho e hỏi với ạ , e có xét nộp học bạ trường mình những đến 10-7 mới biết kết quả có đỗ được hay không , nên để chắc thì e điền vào hồ sơ thi thpt các ngành của trường mình thì vẫn được đúng không ạ ( và nếu đỗ đc cả xét học bạ đỗ đc cả thi thptqg thì e nộp hồ sơ nào ạ ) e cảm ơn ạ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'Cho em hỏi mã trường ạ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'em muốn hỏi là mình đăng ký onl rồi thì trường có gửi mail về không ạ? Như để xác định em đăng ký thành công ấy ạ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'Em muốn hỏi là em muốn nộp học bạ để xét tuyển vào trường thì bao giờ nộp ạ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'E đã đăng kí trực tuyến xét học bạ nguyện vọng 1 quản trị thành công rồi nhưng muốn thay đổi nguyện vọng vào kĩ thuật xây dựng thì phải làm cách nào ạ ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'Cho e hỏi là e đã đăng ký thành công rồi . thì bao giờ mới biết là mik đỗ hay trượt ạ??', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'Cho em hỏi lúc em đăng kí onl chưa tải file phiếu ĐKXT lên thì phải làm sao ạ Với lại lúc đó hệ thống báo đăng kí thành công và có 1 file phiếu ĐKXT đã có sẵn đầy đủ thông tin của em . Nếu vậy em có dùng được scan phiếu ĐKXT mà hệ thống ghi sẵn thông tin lên đó không ạ Trường mình có thu phí nguyện vọng không ạ Em cám ơn', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'Chào các thầy cô, em đang thắc mắc là tra mã xét tuyển ngành quản trị kinh doanh trên trang thì vẫn đang giữ mã GHA-01, trong khi đó, nhiều trang thông tin không chính thức của trường đã cập nhật là 7340101. Mong thầy cô giải đáp và sớm cập nhật lại nếu có nhầm lẫn', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('4.2', 'em đăng kí online vậy làm như thế nào để biết mình đã đăng kí thành công và danh sách những người đã đăng kí onl ạ? ', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');

-- select COUNT(*) from bai_viet;
-- select * from bai_viet where ma_dm = '1.1';
-- select ma_bv from bai_viet order by ma_bv desc limit 1;

-- CREATE TABLE chi_tiet_bai_viet (
--     ma_ctbv INT AUTO_INCREMENT PRIMARY KEY,
--     ma_bv INT,
--     noi_dung_chi_tiet_ctbv LONGTEXT,
--     link_anh_ctbv LONGTEXT,
--     FOREIGN KEY (ma_bv)
--         REFERENCES bai_viet (ma_bv)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('1', 'Noi Dung Chi Tiet 1', 'kimanhblog_com_(16).jpg');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('1', 'Noi Dung Chi Tiet 2', 'kimanhblog_com_(16).jpg');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('2', 'Noi Dung Chi Tiet 1', 'kimanhblog_com_(16).jpg');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('3', 'Noi Dung Chi Tiet 1', 'kimanhblog_com_(16).jpg');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('4', 'Noi Dung Chi Tiet 1', 'kimanhblog_com_(16).jpg');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('4', null, 'kimanhblog_com_(16).jpg');
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('4', 'Noi Dung Chi Tiet 3', null);
INSERT INTO chi_tiet_bai_viet (ma_bv, noi_dung_chi_tiet_ctbv, link_anh_ctbv) VALUES ('5', 'Noi Dung Chi Tiet 1', 'kimanhblog_com_(16).jpg');

-- select * from chi_tiet_bai_viet;
-- delete from chi_tiet_bai_viet where ma_bv = '5';
-- select * from danh_muc where ma_dm <> '1.1';

