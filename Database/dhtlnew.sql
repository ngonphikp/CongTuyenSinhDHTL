DROP DATABASE dhtl;
CREATE DATABASE dhtl CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
Use dhtl;

create table admin(
tai_khoan varchar(30) primary key,
mat_khau varchar(30) not null
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

create table danh_muc(
ma_dm int AUTO_INCREMENT primary key,
ten text not null,
ma_dm_cha int -- tr?ng: lv 1, c?p d? truy v?n theo cha: t?n t?i tru?c dó
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table bai_viet(
ma_bv int AUTO_INCREMENT primary key,
ma_dm int,
tieu_de text,
noi_dung_tom_tat longtext,
link_anh_bia longtext,
foreign key(ma_dm) references danh_muc(ma_dm)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table chi_tiet_bai_viet(
ma_ctbv int AUTO_INCREMENT primary key,
ma_bv int,
noi_dung_chi_tiet longtext,
link_anh longtext,
foreign key(ma_bv) references bai_viet(ma_bv)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table tinh_thanh_pho(
ma_ttp int AUTO_INCREMENT primary key,
ten text
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table quan_huyen(
ma_qh int AUTO_INCREMENT primary key,
ma_ttp int,
ten  text,
foreign key(ma_ttp) references tinh_thanh_pho(ma_ttp)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table phuong_thi_xa(
ma_ptx int AUTO_INCREMENT primary key,
ma_qh int,
ten  text,
foreign key(ma_qh) references quan_huyen(ma_qh)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table thi_sinh(
ma_ts int AUTO_INCREMENT primary key,
ho_ten  text,
gioi_tinh text,
ngay_sinh date,
dia_chi int,
so_cmnd_cccd varchar(20),
sdt varchar(20),
email varchar(50),
link_anh_cmnd varchar(50),
link_anh_chan_dung varchar(50),
dan_toc text,
ton_giao text,
ngay_dang_ki date,
foreign key(dia_chi) references phuong_thi_xa(ma_ptx)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table truong(
ma_truong int AUTO_INCREMENT primary key,
dia_chi int,
ten  text,
foreign key(dia_chi) references phuong_thi_xa(ma_ptx)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table ho_so_xet_tuyen(
ma_hsxt int AUTO_INCREMENT primary key,
ma_ts int,
foreign key(ma_ts) references thi_sinh(ma_ts)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table trang_thai_ho_son(
ma_tths int AUTO_INCREMENT primary key,
ma_hsxt int,
kieu text,
ngay date,
foreign key(ma_hsxt) references ho_so_xet_tuyen(ma_hsxt)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table co_so_dao_tao(
ma_csdt int AUTO_INCREMENT primary key,
ten text,
dia_chi int,
foreign key(dia_chi) references phuong_thi_xa(ma_ptx)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table nganh_dao_tao(
ma_nganh int AUTO_INCREMENT primary key,
ma_csdt int,
ten_nganh text not null,
chuong_trinh_dao_tao text,
ghi_chu text,
gioi_thieu text,
foreign key(ma_csdt) references co_so_dao_tao(ma_csdt)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table diem_chuan(
ma_dc int AUTO_INCREMENT primary key,
ma_nganh int,
nam date,
diem float, -- c?p nh?t trong th?ng kê
chi_tieu int,
foreign key(ma_nganh) references nganh_dao_tao(ma_nganh)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table to_hop_mon(
ma_thm varchar(5) primary key, -- A0, A1, D, B, ....
ten_mon_1 text,
ten_mon_2 text,
ten_mon_3 text
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table to_hop_mon_xet_tuyen(
ma_thm varchar(5),
ma_nganh int,
foreign key(ma_nganh) references nganh_dao_tao(ma_nganh),
foreign key(ma_thm) references to_hop_mon(ma_thm),
primary key (ma_thm, ma_nganh)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table nguyen_vong(
ma_thm varchar(5),
ma_hsxt int,
ma_nganh int,
primary key (ma_thm, ma_hsxt),
foreign key(ma_nganh) references nganh_dao_tao(ma_nganh),
foreign key(ma_hsxt) references ho_so_xet_tuyen(ma_hsxt),
foreign key(ma_thm) references to_hop_mon(ma_thm)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

create table hoc_ba(
ma_hb int AUTO_INCREMENT primary key,
ma_ts int,
xep_loai text,
link_anh varchar(50),
foreign key(ma_ts) references thi_sinh(ma_ts)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table lop(
ma_lop int AUTO_INCREMENT primary key,
ma_hb int,
ma_truong int,
cap_do int, -- 10, 11, 12
foreign key(ma_hb) references hoc_ba(ma_hb),
foreign key(ma_truong) references truong(ma_truong)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;

create table mon(
ma_mon int AUTO_INCREMENT primary key,
ten text,
diem float
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1;
