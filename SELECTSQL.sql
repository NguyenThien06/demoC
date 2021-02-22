USE QUANLYDETAI
GO
---C�U 1
SELECT COUNT(MAGV) FROM GIAOVIEN
---C�U 2 DEM SO LUONG GIAO VIEN CO MABM LA HTTT;
SELECT COUNT(MAGV) FROM GIAOVIEN WHERE MABM =N'HTTT'
--CAU 3 TINH SO LUONG GIAO VIEN CO NGUOI QUAN LY VE MAT CHUYEN MON
SELECT COUNT(MAGV) FROM GIAOVIEN WHERE GVQLCM  IS NOT NULL
-- CAU 4 TINH SO LUONG GIAO VIEN LAM NHIEM QUAN LY CHUYEN MON CHO GIAO VIEN KHAC THUOC BO MON HTTT

--CAU 5 CHO BIET TEN VA LUONG CUA 1 GIAO VIEN
 SELECT HOTEN,LUONG FROM GIAOVIEN
 WHERE LUONG >2000
 ORDER BY LUONG DESC
 ---CAU6 CHO BIET LUONG CUA GIAO VIEN LON 5000
 SELECT LUONG FROM GIAOVIEN WHERE LUONG > 2000
  -- CAU 7 CHO BIET GIAO VIEN CO PHAI LA NAM
  SELECT HOTEN ,PHAI FROM GIAOVIEN WHERE PHAI = 'NAM'
  ---CAU 8 LAM VOI CU PHAM LIKE VA % 
  --DE DAU % O SAU CHU CAI CAN TIM THI CHUOI CO BAT DAU BANG TU N
  SELECT * FROM GIAOVIEN WHERE PHAI LIKE '%M'
  -- CAU 9 CAU LENH HIEN KHOANG CACH CAN TIM
  --- BETWEEN AND 
  -- NEU CO NOT TRUOC BETWEEN THI TA KHONG LAY TRONG KHOA DO
  SELECT * FROM GIAOVIEN WHERE LUONG NOT BETWEEN 1000 AND 2000

-- HAM LAY NAM SINH CUA COT CO DATE
   SELECT * FROM GIAOVIEN WHERE YEAR(NGAYSINH) NOT BETWEEN 1970 AND 1980
-- HAM NULL PHAI CO IS NULL MOI CHINH XAC
select * FROM GIAOVIEN WHERE GVQLCM IS NOT NULL
 --HAM CAST LA CONG CHUOI VAO
 SELECT HOTEN + CAST(LUONG AS VARCHAR) FROM GIAOVIEN
 -- DUNG JOIN
SELECT GV.HOTEN ,BM.TENBM
FROM GIAOVIEN AS GV JOIN BOMON AS BM ON GV.MABM = BM.MABM