DROP DATABASE dhtl;
CREATE DATABASE dhtl CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
Use dhtl;

CREATE TABLE tai_khoan (
    id_tk INT AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap VARCHAR(30) NOT NULL UNIQUE,
    mat_khau VARCHAR(30) NOT NULL,
    cap_do INT DEFAULT 1
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

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

CREATE TABLE thong_tin_tai_khoan (
    id_tk INT PRIMARY KEY,
    ho_ten_tk TEXT NOT NULL,
    email_tk VARCHAR(50) NOT NULL,
    ngay_sinh_tk DATE,
    gioi_tinh_tk VARCHAR(4),
    dia_chi_tk VARCHAR(10),
    sdt_tk VARCHAR(20),
    FOREIGN KEY (id_tk)
        REFERENCES tai_khoan (id_tk)
)  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI;

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
    so_cmnd_cccd_ts VARCHAR(20) ,-- unique
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
--     use dhtl;
--     select * from thi_sinh;
--     select * from ho_so_xet_tuyen;
CREATE TABLE truong (
    ma_truong VARCHAR(10) PRIMARY KEY,
    ten_truong TEXT,
    dia_chi_truong VARCHAR(10)
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
    trang_thai TEXT,
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
-- select * from nguyen_vong;
-- select * from nguyen_vong where ma_hsxt='1' and ten_nguyen_vong="1";

insert into nguyen_vong(ma_hsxt, ten_nguyen_vong, ma_csdt, ma_ndt, ma_thm,trang_thai)  values('1','1','1', 'TLA106', 'A00','Đã nhận');
-- CREATE TABLE trang_thai_nguyen_vong (
-- 	ma_hsxt INT,
--     ten_nguyen_vong NVARCHAR(50),
--     PRIMARY KEY (ten_nguyen_vong , ma_hsxt),
--     ma_xet_tuyen VARCHAR(50),
--     to_hop_xet_tuyen NVARCHAR(50),
--     trang_thai TEXT,
--     FOREIGN KEY (ma_xet_tuyen)
--         REFERENCES nganh_dao_tao (ma_ndt),
--     FOREIGN KEY (to_hop_xet_tuyen)
--         REFERENCES to_hop_mon_xet_tuyen (ma_thm)
-- )  ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE = UTF8MB4_UNICODE_CI AUTO_INCREMENT=1;

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

-- insert into tinh_thanh_pho value('TEST1', 'Hà Nội');
-- insert into quan_huyen value('TEST1', 'Đống Đa', 'TEST1');
-- insert into phuong_thi_xa(ma_ptx,ten_ptx,ma_qh) values('TEST1','Tây Sơn','TEST1');

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
INSERT INTO danh_muc VALUES ('1', 'Tuyển sinh', null);
INSERT INTO danh_muc VALUES ('2', 'Giới thiệu', null);
INSERT INTO danh_muc VALUES ('3', 'Danh mục 3', null);

INSERT INTO danh_muc VALUES ('1.1', 'Đại học chính quy', '1');
INSERT INTO danh_muc VALUES ('1.2', 'Thạc sĩ', '1');
INSERT INTO danh_muc VALUES ('1.3', 'Tiến sĩ', '1');
INSERT INTO danh_muc VALUES ('1.4', 'Vừa học vừa làm', '1');
INSERT INTO danh_muc VALUES ('1.5', 'Tuyển sinh liên thông', '1');
INSERT INTO danh_muc VALUES ('1.6', 'Văn bằng 2', '1');

INSERT INTO danh_muc VALUES ('1.1.1', 'Thông tin tuyển sinh', '1.1');
INSERT INTO danh_muc VALUES ('1.1.2', 'Điểm chuẩn các năm', '1.1');
INSERT INTO danh_muc VALUES ('1.1.3', 'Cổng tuyển sinh bộ GDĐT', '1.1');

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

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Tieu De 1', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.1', 'Tieu De 2', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.2', 'Tieu De 3', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('2.1', 'Tieu De 4', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('3.2', 'Tieu De 5', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');

INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.3', 'Tieu De 6', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');
INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('1.3', 'Tieu De 7', 'Noi Dung Tom Tat', 'kimanhblog_com_(16).jpg');

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

-- select * from thi_sinh where ma_ts = 1;
