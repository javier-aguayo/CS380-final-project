<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: Home;
		--web-view-id: Home;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
		--web-page-font: Gotham;
	}
	:root {
		--web-view-ids: Home;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Home {
		position: absolute;
		background: #E5E5E5;
		width: 1366px;
		height: 768px;
		font-family: Gotham;
		background-color: rgba(241,243,249,1);
		overflow: hidden;
		--web-view-name: Home;
		--web-view-id: Home;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
		--web-page-font: Gotham;
	}
	.Rectangle_1493 {
		position: absolute;
		overflow: visible;
		width: 1301px;
		height: 378px;
		left: 65px;
		top: 0px;
	}
	#Group_15 {
		position: absolute;
		width: 247px;
		height: 50px;
		left: 115px;
		top: 20px;
		overflow: visible;
	}
	.Rectangle_1494 {
		filter: drop-shadow(0px 3px 6px rgba(23, 23, 23, 0.176));
		position: absolute;
		overflow: visible;
		width: 265px;
		height: 68px;
		left: 0px;
		top: 0px;
	}
	#search {
		opacity: 0.8;
		position: absolute;
		width: 20.414px;
		height: 20.414px;
		left: 20px;
		top: 15px;
		overflow: visible;
	}
	.Ellipse_342 {
		position: absolute;
		overflow: visible;
		width: 18px;
		height: 18px;
		left: 1px;
		top: 1px;
	}
	.Line_11 {
		overflow: visible;
		position: absolute;
		width: 7.178px;
		height: 7.178px;
		left: 14.65px;
		top: 14.65px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Search_bc {
		opacity: 0.8;
		position: absolute;
		left: 60px;
		top: 20px;
		overflow: visible;
		width: 42px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#bell {
		position: absolute;
		width: 20px;
		height: 21.996px;
		left: 1081px;
		top: 34px;
		overflow: visible;
	}
	.Path_447 {
		overflow: visible;
		position: absolute;
		width: 20px;
		height: 17px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_448 {
		overflow: visible;
		position: absolute;
		width: 6.193px;
		height: 3.363px;
		left: 8.27px;
		top: 20px;
		transform: matrix(1,0,0,1,0,0);
	}
	#help_circle {
		position: absolute;
		width: 22px;
		height: 22px;
		left: 1141px;
		top: 34px;
		overflow: visible;
	}
	.Ellipse_351 {
		position: absolute;
		overflow: visible;
		width: 22px;
		height: 22px;
		left: 1px;
		top: 1px;
	}
	.Path_465 {
		overflow: visible;
		position: absolute;
		width: 8.105px;
		height: 8.299px;
		left: 8.09px;
		top: 5.995px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Line_25 {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 1px;
		left: 11px;
		top: 16px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_14 {
		position: absolute;
		width: 126px;
		height: 50px;
		left: 1203px;
		top: 20px;
		overflow: visible;
	}
	#Mask_Group_1 {
		position: absolute;
		width: 50px;
		height: 50px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Arya_Stark {
		position: absolute;
		left: 65px;
		top: 20px;
		overflow: visible;
		width: 62px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(255,255,255,1);
	}
	#Group_16 {
		position: absolute;
		width: 64px;
		height: 22px;
		left: 133px;
		top: 112px;
		overflow: visible;
	}
	#home {
		position: absolute;
		width: 20px;
		height: 22px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Path_435 {
		overflow: visible;
		position: absolute;
		width: 20px;
		height: 22px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_436 {
		overflow: visible;
		position: absolute;
		width: 8px;
		height: 12px;
		left: 7px;
		top: 11px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Home_bt {
		position: absolute;
		left: 35px;
		top: 7px;
		overflow: visible;
		width: 30px;
		white-space: nowrap;
		line-height: 13px;
		margin-top: -1px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 11px;
		color: rgba(255,255,255,1);
	}
	#Group_172 {
		position: absolute;
		width: 65px;
		height: 768px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_1490 {
		position: absolute;
		overflow: visible;
		width: 65px;
		height: 768px;
		left: 0px;
		top: 0px;
	}
	#bar_chart_2 {
		transform: translate(0px, 0px) matrix(1,0,0,1,27,29) rotate(-90deg);
		transform-origin: center;
		position: absolute;
		width: 12px;
		height: 16px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Line_1 {
		overflow: visible;
		position: absolute;
		width: 18px;
		height: 2px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Line_2 {
		overflow: visible;
		position: absolute;
		width: 18px;
		height: 2px;
		left: 0px;
		top: 6px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Line_3 {
		overflow: visible;
		position: absolute;
		width: 18px;
		height: 2px;
		left: 0px;
		top: 12px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_155 {
		position: absolute;
		width: 1100px;
		height: 515px;
		left: 133px;
		top: 201px;
		overflow: visible;
	}
	.Rectangle_1496 {
		filter: drop-shadow(0px 3px 6px rgba(44, 40, 40, 0.11));
		position: absolute;
		overflow: visible;
		width: 1118px;
		height: 533px;
		left: 0px;
		top: 0px;
	}
	#Project_Selection {
		position: absolute;
		left: 40px;
		top: 33px;
		overflow: visible;
		width: 136px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -1px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(23,43,77,1);
	}
	.Rectangle_1510 {
		position: absolute;
		overflow: visible;
		width: 1100px;
		height: 40px;
		left: 0px;
		top: 80px;
	}
	#CREATED_AT {
		position: absolute;
		left: 305px;
		top: 96px;
		overflow: visible;
		width: 68px;
		white-space: nowrap;
		line-height: 13px;
		margin-top: -1px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 11px;
		color: rgba(136,152,170,1);
	}
	#TEAM {
		position: absolute;
		left: 706px;
		top: 96px;
		overflow: visible;
		width: 32px;
		white-space: nowrap;
		line-height: 13px;
		margin-top: -1px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 11px;
		color: rgba(136,152,170,1);
	}
	#Group_154 {
		position: absolute;
		width: 72px;
		height: 15px;
		left: 40px;
		top: 93px;
		overflow: visible;
	}
	#PROJECT {
		position: absolute;
		left: 0px;
		top: 3px;
		overflow: visible;
		width: 52px;
		white-space: nowrap;
		line-height: 13px;
		margin-top: -1px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 11px;
		color: rgba(136,152,170,1);
	}
	#Group_129 {
		position: absolute;
		width: 9px;
		height: 15px;
		left: 63px;
		top: 0px;
		overflow: visible;
	}
	#chevron_down {
		position: absolute;
		width: 9px;
		height: 5px;
		left: 0px;
		top: 10px;
		overflow: visible;
	}
	.chevron_down_ca {
		overflow: visible;
		position: absolute;
		width: 8.41px;
		height: 4.205px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	#chevron_up {
		position: absolute;
		width: 9px;
		height: 5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.chevron_up_cc {
		overflow: visible;
		position: absolute;
		width: 8.41px;
		height: 4.205px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_153 {
		position: absolute;
		width: 64px;
		height: 15px;
		left: 449px;
		top: 93px;
		overflow: visible;
	}
	#STATUS {
		position: absolute;
		left: 0px;
		top: 3px;
		overflow: visible;
		width: 43px;
		white-space: nowrap;
		line-height: 13px;
		margin-top: -1px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 11px;
		color: rgba(136,152,170,1);
	}
	#Group_130 {
		position: absolute;
		width: 9px;
		height: 15px;
		left: 55px;
		top: 0px;
		overflow: visible;
	}
	#chevron_down_cg {
		position: absolute;
		width: 9px;
		height: 5px;
		left: 0px;
		top: 10px;
		overflow: visible;
	}
	.chevron_down_ch {
		overflow: visible;
		position: absolute;
		width: 8.41px;
		height: 4.205px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	#chevron_up_ci {
		position: absolute;
		width: 9px;
		height: 5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.chevron_up_cj {
		overflow: visible;
		position: absolute;
		width: 8.41px;
		height: 4.205px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_152 {
		position: absolute;
		width: 67px;
		height: 15px;
		left: 583px;
		top: 93px;
		overflow: visible;
	}
	#BUDGET {
		position: absolute;
		left: 0px;
		top: 3px;
		overflow: visible;
		width: 47px;
		white-space: nowrap;
		line-height: 13px;
		margin-top: -1px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 11px;
		color: rgba(136,152,170,1);
	}
	#Group_131 {
		position: absolute;
		width: 9px;
		height: 15px;
		left: 58px;
		top: 0px;
		overflow: visible;
	}
	#chevron_down_cn {
		position: absolute;
		width: 9px;
		height: 5px;
		left: 0px;
		top: 10px;
		overflow: visible;
	}
	.chevron_down_co {
		overflow: visible;
		position: absolute;
		width: 8.41px;
		height: 4.205px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	#chevron_up_cp {
		position: absolute;
		width: 9px;
		height: 5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.chevron_up_cq {
		overflow: visible;
		position: absolute;
		width: 8.41px;
		height: 4.205px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_151 {
		position: absolute;
		width: 96px;
		height: 15px;
		left: 823px;
		top: 93px;
		overflow: visible;
	}
	#COMPLETION {
		position: absolute;
		left: 0px;
		top: 3px;
		overflow: visible;
		width: 74px;
		white-space: nowrap;
		line-height: 13px;
		margin-top: -1px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 11px;
		color: rgba(136,152,170,1);
	}
	#Group_132 {
		position: absolute;
		width: 9px;
		height: 15px;
		left: 87px;
		top: 0px;
		overflow: visible;
	}
	#chevron_down_cu {
		position: absolute;
		width: 9px;
		height: 5px;
		left: 0px;
		top: 10px;
		overflow: visible;
	}
	.chevron_down_cv {
		overflow: visible;
		position: absolute;
		width: 8.41px;
		height: 4.205px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	#chevron_up_cw {
		position: absolute;
		width: 9px;
		height: 5px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.chevron_up_cx {
		overflow: visible;
		position: absolute;
		width: 8.41px;
		height: 4.205px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_135 {
		position: absolute;
		width: 1100px;
		height: 75px;
		left: 0px;
		top: 120px;
		overflow: visible;
	}
	.Rectangle_1511 {
		position: absolute;
		overflow: visible;
		width: 1100px;
		height: 75px;
		left: 0px;
		top: 0px;
	}
	#Mask_Group_1_c {
		position: absolute;
		width: 50px;
		height: 50px;
		left: 40px;
		top: 13px;
		overflow: visible;
	}
	#Project_X {
		position: absolute;
		left: 100px;
		top: 33px;
		overflow: visible;
		width: 57px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: bold;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#ID20_03_2020 {
		position: absolute;
		left: 305px;
		top: 33px;
		overflow: visible;
		width: 66px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_33 {
		position: absolute;
		width: 66px;
		height: 13px;
		left: 449px;
		top: 32px;
		overflow: visible;
	}
	#Pending {
		position: absolute;
		left: 18px;
		top: 0px;
		overflow: visible;
		width: 49px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	.Ellipse_355 {
		position: absolute;
		overflow: visible;
		width: 10px;
		height: 10px;
		left: 0px;
		top: 0px;
	}
	#_2500 {
		position: absolute;
		left: 583px;
		top: 33px;
		overflow: visible;
		width: 37px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_133 {
		position: absolute;
		width: 70px;
		height: 30px;
		left: 706px;
		top: 23px;
		overflow: visible;
	}
	#Mask_Group_1_da {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 40px;
		top: 0px;
		overflow: visible;
	}
	#Mask_Group_1_dd {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 20px;
		top: 0px;
		overflow: visible;
	}
	#Mask_Group_1_dg {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_50 {
		position: absolute;
		width: 112.412px;
		height: 1px;
		left: 861.5px;
		top: 38.5px;
		overflow: visible;
	}
	#Line_49 {
		opacity: 0.6;
	}
	.Line_49 {
		overflow: visible;
		position: absolute;
		width: 112.412px;
		height: 3px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Line_50 {
		overflow: visible;
		position: absolute;
		width: 27px;
		height: 3px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID20_ {
		position: absolute;
		left: 823px;
		top: 33px;
		overflow: visible;
		width: 27px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_134 {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 1030px;
		top: 24px;
		overflow: visible;
	}
	.Ellipse_369 {
		filter: drop-shadow(0px 3px 6px rgba(44, 40, 40, 0.11));
		position: absolute;
		overflow: visible;
		width: 48px;
		height: 48px;
		left: 0px;
		top: 0px;
	}
	#more_vertical {
		position: absolute;
		width: 4px;
		height: 18px;
		left: 13px;
		top: 6px;
		overflow: visible;
	}
	.Ellipse_348 {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 8px;
	}
	.Ellipse_349 {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 1px;
	}
	.Ellipse_350 {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 15px;
	}
	#Group_136 {
		position: absolute;
		width: 1100px;
		height: 75px;
		left: 0px;
		top: 195px;
		overflow: visible;
	}
	.Rectangle_1511_du {
		position: absolute;
		overflow: visible;
		width: 1100px;
		height: 75px;
		left: 0px;
		top: 0px;
	}
	#Mask_Group_1_dv {
		position: absolute;
		width: 50px;
		height: 50px;
		left: 40px;
		top: 13px;
		overflow: visible;
	}
	#Dashboard_Enterprise {
		position: absolute;
		left: 100px;
		top: 33px;
		overflow: visible;
		width: 137px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: bold;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#ID20_03_2020_dz {
		position: absolute;
		left: 305px;
		top: 33px;
		overflow: visible;
		width: 66px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_33_d {
		position: absolute;
		width: 81px;
		height: 13px;
		left: 449px;
		top: 32px;
		overflow: visible;
	}
	#Completed {
		position: absolute;
		left: 18px;
		top: 0px;
		overflow: visible;
		width: 64px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	.Ellipse_355_d {
		position: absolute;
		overflow: visible;
		width: 10px;
		height: 10px;
		left: 0px;
		top: 0px;
	}
	#_4400 {
		position: absolute;
		left: 583px;
		top: 33px;
		overflow: visible;
		width: 37px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_133_d {
		position: absolute;
		width: 70px;
		height: 30px;
		left: 706px;
		top: 23px;
		overflow: visible;
	}
	#Mask_Group_1_d {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 40px;
		top: 0px;
		overflow: visible;
	}
	#Mask_Group_1_ea {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 20px;
		top: 0px;
		overflow: visible;
	}
	#Mask_Group_1_eb {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_50_ee {
		position: absolute;
		width: 112.412px;
		height: 1px;
		left: 861.5px;
		top: 38.5px;
		overflow: visible;
	}
	#Line_49_ef {
		opacity: 0.6;
	}
	.Line_49_ef {
		overflow: visible;
		position: absolute;
		width: 112.412px;
		height: 3px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Line_50_eg {
		overflow: visible;
		position: absolute;
		width: 112px;
		height: 3px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID100_ {
		position: absolute;
		left: 823px;
		top: 33px;
		overflow: visible;
		width: 34px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_134_ei {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 1030px;
		top: 24px;
		overflow: visible;
	}
	.Ellipse_369_ej {
		filter: drop-shadow(0px 3px 6px rgba(44, 40, 40, 0.11));
		position: absolute;
		overflow: visible;
		width: 48px;
		height: 48px;
		left: 0px;
		top: 0px;
	}
	#more_vertical_ek {
		position: absolute;
		width: 4px;
		height: 18px;
		left: 13px;
		top: 6px;
		overflow: visible;
	}
	.Ellipse_348_el {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 8px;
	}
	.Ellipse_349_em {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 1px;
	}
	.Ellipse_350_en {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 15px;
	}
	#Group_137 {
		position: absolute;
		width: 1100px;
		height: 75px;
		left: 0px;
		top: 270px;
		overflow: visible;
	}
	.Rectangle_1511_ep {
		position: absolute;
		overflow: visible;
		width: 1100px;
		height: 75px;
		left: 0px;
		top: 0px;
	}
	#Mask_Group_1_eq {
		position: absolute;
		width: 50px;
		height: 50px;
		left: 40px;
		top: 13px;
		overflow: visible;
	}
	#The_black_Project {
		position: absolute;
		left: 100px;
		top: 33px;
		overflow: visible;
		width: 109px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: bold;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#ID20_03_2020_eu {
		position: absolute;
		left: 305px;
		top: 33px;
		overflow: visible;
		width: 66px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_33_ev {
		position: absolute;
		width: 93px;
		height: 13px;
		left: 449px;
		top: 32px;
		overflow: visible;
	}
	#On_Schedule {
		position: absolute;
		left: 18px;
		top: 0px;
		overflow: visible;
		width: 76px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	.Ellipse_355_ex {
		position: absolute;
		overflow: visible;
		width: 10px;
		height: 10px;
		left: 0px;
		top: 0px;
	}
	#_2133 {
		position: absolute;
		left: 583px;
		top: 33px;
		overflow: visible;
		width: 37px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_133_ez {
		position: absolute;
		width: 70px;
		height: 30px;
		left: 706px;
		top: 23px;
		overflow: visible;
	}
	#Mask_Group_1_e {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 40px;
		top: 0px;
		overflow: visible;
	}
	#Mask_Group_1_fa {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 20px;
		top: 0px;
		overflow: visible;
	}
	#Mask_Group_1_fb {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_50_e {
		position: absolute;
		width: 112.412px;
		height: 1px;
		left: 861.5px;
		top: 38.5px;
		overflow: visible;
	}
	#Line_49_fa {
		opacity: 0.6;
	}
	.Line_49_fa {
		overflow: visible;
		position: absolute;
		width: 112.412px;
		height: 3px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Line_50_fb {
		overflow: visible;
		position: absolute;
		width: 78px;
		height: 3px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID90_ {
		position: absolute;
		left: 823px;
		top: 33px;
		overflow: visible;
		width: 27px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_134_fd {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 1030px;
		top: 24px;
		overflow: visible;
	}
	.Ellipse_369_fe {
		filter: drop-shadow(0px 3px 6px rgba(44, 40, 40, 0.11));
		position: absolute;
		overflow: visible;
		width: 48px;
		height: 48px;
		left: 0px;
		top: 0px;
	}
	#more_vertical_ff {
		position: absolute;
		width: 4px;
		height: 18px;
		left: 13px;
		top: 6px;
		overflow: visible;
	}
	.Ellipse_348_fg {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 8px;
	}
	.Ellipse_349_fh {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 1px;
	}
	.Ellipse_350_fi {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 15px;
	}
	#Group_138 {
		position: absolute;
		width: 1100px;
		height: 75px;
		left: 0px;
		top: 345px;
		overflow: visible;
	}
	.Rectangle_1511_fk {
		position: absolute;
		overflow: visible;
		width: 1100px;
		height: 75px;
		left: 0px;
		top: 0px;
	}
	#Mask_Group_1_fl {
		position: absolute;
		width: 50px;
		height: 50px;
		left: 40px;
		top: 13px;
		overflow: visible;
	}
	#React_Project {
		position: absolute;
		left: 100px;
		top: 33px;
		overflow: visible;
		width: 84px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: bold;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#ID20_03_2020_fp {
		position: absolute;
		left: 305px;
		top: 33px;
		overflow: visible;
		width: 66px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_33_fq {
		position: absolute;
		width: 66px;
		height: 13px;
		left: 449px;
		top: 32px;
		overflow: visible;
	}
	#Delayed {
		position: absolute;
		left: 18px;
		top: 0px;
		overflow: visible;
		width: 49px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	.Ellipse_355_fs {
		position: absolute;
		overflow: visible;
		width: 10px;
		height: 10px;
		left: 0px;
		top: 0px;
	}
	#_4566 {
		position: absolute;
		left: 583px;
		top: 33px;
		overflow: visible;
		width: 37px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_133_fu {
		position: absolute;
		width: 70px;
		height: 30px;
		left: 706px;
		top: 23px;
		overflow: visible;
	}
	#Mask_Group_1_fv {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 40px;
		top: 0px;
		overflow: visible;
	}
	#Mask_Group_1_fy {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 20px;
		top: 0px;
		overflow: visible;
	}
	#Mask_Group_1_f {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_50_f {
		position: absolute;
		width: 112.412px;
		height: 1px;
		left: 861.5px;
		top: 38.5px;
		overflow: visible;
	}
	#Line_49_f {
		opacity: 0.6;
	}
	.Line_49_f {
		overflow: visible;
		position: absolute;
		width: 112.412px;
		height: 3px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Line_50_f {
		overflow: visible;
		position: absolute;
		width: 82px;
		height: 3px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID72_ {
		position: absolute;
		left: 823px;
		top: 33px;
		overflow: visible;
		width: 27px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(23,43,77,1);
	}
	#Group_134_f {
		position: absolute;
		width: 30px;
		height: 30px;
		left: 1030px;
		top: 24px;
		overflow: visible;
	}
	.Ellipse_369_f {
		filter: drop-shadow(0px 3px 6px rgba(44, 40, 40, 0.11));
		position: absolute;
		overflow: visible;
		width: 48px;
		height: 48px;
		left: 0px;
		top: 0px;
	}
	#more_vertical_ga {
		position: absolute;
		width: 4px;
		height: 18px;
		left: 13px;
		top: 6px;
		overflow: visible;
	}
	.Ellipse_348_gb {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 8px;
	}
	.Ellipse_349_gc {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 1px;
	}
	.Ellipse_350_gd {
		position: absolute;
		overflow: visible;
		width: 4px;
		height: 4px;
		left: 1px;
		top: 15px;
	}
	#Group_150 {
		position: absolute;
		width: 260px;
		height: 35px;
		left: 810px;
		top: 450px;
		overflow: visible;
	}
	#Group_149 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_139 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Ellipse_369_gh {
		position: absolute;
		overflow: visible;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
	}
	#chevron_left {
		position: absolute;
		width: 8px;
		height: 14px;
		left: 14px;
		top: 11px;
		overflow: visible;
	}
	.chevron_left_gj {
		overflow: visible;
		position: absolute;
		width: 8.414px;
		height: 14.828px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_148 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 225px;
		top: 0px;
		overflow: visible;
	}
	#Group_140 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Ellipse_369_gm {
		position: absolute;
		overflow: visible;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
	}
	#chevron_right {
		position: absolute;
		width: 8px;
		height: 14px;
		left: 14px;
		top: 11px;
		overflow: visible;
	}
	.chevron_right_go {
		overflow: visible;
		position: absolute;
		width: 8.414px;
		height: 14.828px;
		left: 1px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_143 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 45px;
		top: 0px;
		overflow: visible;
	}
	#Group_141 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Ellipse_369_gr {
		filter: drop-shadow(0px 3px 6px rgba(44, 40, 40, 0.11));
		position: absolute;
		overflow: visible;
		width: 53px;
		height: 53px;
		left: 0px;
		top: 0px;
	}
	#ID1 {
		position: absolute;
		left: 15px;
		top: 13px;
		overflow: visible;
		width: 8px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(255,255,255,1);
	}
	#Group_146 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 90px;
		top: 0px;
		overflow: visible;
	}
	#Group_142 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Ellipse_369_gv {
		position: absolute;
		overflow: visible;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
	}
	#ID2 {
		position: absolute;
		left: 14px;
		top: 13px;
		overflow: visible;
		width: 8px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(119,100,228,1);
	}
	#Group_145 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 135px;
		top: 0px;
		overflow: visible;
	}
	#Group_144 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Ellipse_369_gz {
		position: absolute;
		overflow: visible;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
	}
	#ID3 {
		position: absolute;
		left: 14px;
		top: 13px;
		overflow: visible;
		width: 8px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(119,100,228,1);
	}
	#Group_147 {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 180px;
		top: 0px;
		overflow: visible;
	}
	#Group_144_g {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Ellipse_369_g {
		position: absolute;
		overflow: visible;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
	}
	#ID4 {
		position: absolute;
		left: 13px;
		top: 13px;
		overflow: visible;
		width: 8px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(119,100,228,1);
	}
	#Group_128 {
		position: absolute;
		width: 120px;
		height: 40px;
		left: 950px;
		top: 20px;
		overflow: visible;
	}
	.Rectangle_1498 {
		filter: drop-shadow(0px 3px 6px rgba(44, 40, 40, 0.11));
		position: absolute;
		overflow: visible;
		width: 138px;
		height: 58px;
		left: 0px;
		top: 0px;
	}
	#Export_Data {
		position: absolute;
		left: 21px;
		top: 15px;
		overflow: visible;
		width: 70px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(119,100,228,1);
	}
	#Group_343 {
		position: absolute;
		width: 120px;
		height: 40px;
		left: 811px;
		top: 20px;
		overflow: visible;
	}
	.Path_489 {
		filter: drop-shadow(0px 3px 6px rgba(44, 40, 40, 0.11));
		overflow: visible;
		position: absolute;
		width: 138px;
		height: 58px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#New_Project {
		position: absolute;
		left: 21px;
		top: 15px;
		overflow: visible;
		width: 71px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(255,255,255,1);
	}
</style>
<script id="applicationScript">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page. 
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

var Application = function() {
	// event constants
	this.NAVIGATION_CHANGE = "viewChange";
	this.VIEW_NOT_FOUND = "viewNotFound";
	this.VIEW_CHANGE = "viewChange";
	this.STATE_NOT_FOUND = "stateNotFound";
	this.APPLICATION_COMPLETE = "applicationComplete";
	this.SIZE_STATE_NAME = "data-is-view-scaled";

	this.lastView = null;
	this.lastState = null;
	this.lastOverlay = null;
	this.currentView = null;
	this.currentState = null;
	this.currentOverlay = null;
	this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
	this.inclusionQuery = "(min-width: 0px)";
	this.exclusionQuery = "none and (min-width: 99999px)";
	this.LastModifiedDateLabelName = "LastModifiedDateLabel";
	this.viewScaleSliderId = "ViewScaleSliderInput";
	this.pageRefreshedName = "showPageRefreshedNotification";
	this.prefix = "--web-";
	this.applicationStylesheet = null;
	this.mediaQueryDictionary = {};
	this.viewsDictionary = {};
	this.addedViews = [];
	this.views = {};
	this.viewIds = [];
	this.viewQueries = {};
	this.numberOfViews = 0;
	this.verticalPadding = 0;
	this.horizontalPadding = 0;
	this.stateName = null;
	this.viewScale = 1;
	this.viewLeft = 0;
	this.viewTop = 0;

	// view settings
	this.showUpdateNotification = false;
	this.showNavigationControls = false;
	this.scaleViewsToFit = false;
	this.scaleToFitOnDoubleClick = false;
	this.actualSizeOnDoubleClick = false;
	this.scaleViewsOnResize = false;
	this.navigationOnKeypress = false;
	this.showViewName = false;
	this.enableDeepLinking = true;
	this.refreshPageForChanges = false;
	this.showRefreshNotifications = true;

	// view controls
	this.scaleViewSlider = null;
	this.lastModifiedLabel = null;
	this.supportsPopState = false; // window.history.pushState!=null;
	this.initialized = false;

	// refresh properties
	this.refreshDuration = 250;
	this.lastModifiedDate = null;
	this.refreshRequest = null;
	this.refreshInterval = null;
	this.refreshContent = null;
	this.refreshContentSize = null;
	this.refreshCheckContent = false;
	this.refreshCheckContentSize = false;

	var self = this;

	self.initialize = function(event) {
		var view = self.getVisibleView();
		if (view==null) view = self.getInitialView();
		self.collectViews();
		self.collectMediaQueries();
		self.setViewOptions(view);
		self.setViewVariables(view);

		// sometimes the body size is 0 so we call this now and again later
		if (self.initialized) {
			window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
			window.addEventListener("keyup", self.keypressHandler);
			window.addEventListener("keypress", self.keypressHandler);
			window.addEventListener("resize", self.resizeHandler);
			window.document.addEventListener("dblclick", self.doubleClickHandler);

			if (self.supportsPopState) {
				window.addEventListener('popstate', self.popStateHandler);
			}
			else {
				window.addEventListener('hashchange', self.hashChangeHandler);
			}

			// we are ready to go
			window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
		}

		if (self.initialized==false) {
			if (self.showNavigationControls || (self.singlePageApplication && self.showByMediaQuery==false)) {
				self.syncronizeViewToURL();
			}
	
			if (self.refreshPageForChanges) {
				self.setupRefreshForChanges();
			}
	
			self.initialized = true;
		}
		
		if (self.scaleViewsToFit) {
			self.viewScale = self.scaleViewToFit(view);
			
			if (self.viewScale<0) {
				setTimeout(self.scaleViewToFit, 500, view);
			}
		}
		else if (view) {
			self.viewScale = self.getViewScaleValue(view);
			self.updateSliderValue(self.viewScale);
		}
		else {
			// no view found
		}
	
		if (self.showUpdateNotification) {
			self.showNotification();
		}
	
		//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
		//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
	}


	///////////////////////////////////////
	// AUTO REFRESH 
	///////////////////////////////////////

	self.setupRefreshForChanges = function() {
		self.refreshRequest = new XMLHttpRequest();

		if (!self.refreshRequest) {
			return false;
		}

		// get document start values immediately
		self.requestRefreshUpdate();
	}

	/**
	 * Attempt to check the last modified date by the headers 
	 * or the last modified property from the byte array (experimental)
	 **/
	self.requestRefreshUpdate = function() {
		var url = document.location.href;
		var protocol = window.location.protocol;
		var method;
		
		try {

			if (self.refreshCheckContentSize) {
				self.refreshRequest.open('HEAD', url, true);
			}
			else if (self.refreshCheckContent) {
				self.refreshContent = document.documentElement.outerHTML;
				self.refreshRequest.open('GET', url, true);
				self.refreshRequest.responseType = "text";
			}
			else {

				// get page last modified date for the first call to compare to later
				if (self.lastModifiedDate==null) {

					// File system does not send headers in FF so get blob if possible
					if (protocol=="file:") {
						self.refreshRequest.open("GET", url, true);
						self.refreshRequest.responseType = "blob";
					}
					else {
						self.refreshRequest.open("HEAD", url, true);
						self.refreshRequest.responseType = "blob";
					}

					self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

					// In some browsers (Chrome & Safari) this error occurs at send: 
					// 
					// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null' 
					// has been blocked by CORS policy: 
					// Cross origin requests are only supported for protocol schemes: 
					// http, data, chrome, chrome-extension, https.
					// 
					// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
					// 
					// Solution is to run a local server, set local permissions or test in another browser
					self.refreshRequest.send(null);

					// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date: 
					// 
					// DOM7011: The code on this page disabled back and forward caching.

					// In Brave (Chrome) error when on the server
					// index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
					// self.refreshRequest.send(null);

				}
				else {
					self.refreshRequest = new XMLHttpRequest();
					self.refreshRequest.onreadystatechange = self.refreshHandler;
					self.refreshRequest.ontimeout = function() {
						self.log("Couldn't find page to check for updates");
					}
					
					var method;
					if (protocol=="file:") {
						method = "GET";
					}
					else {
						method = "HEAD";
					}

					//refreshRequest.open('HEAD', url, true);
					self.refreshRequest.open(method, url, true);
					self.refreshRequest.responseType = "blob";
					self.refreshRequest.send(null);
				}
			}
		}
		catch (error) {
			self.log("Refresh failed for the following reason:")
			self.log(error);
		}
	}

	self.refreshHandler = function() {
		var contentSize;

		try {

			if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {
				
				if (self.refreshRequest.status === 2 || 
					self.refreshRequest.status === 200) {
					var pageChanged = false;

					self.updateLastModifiedLabel();

					if (self.refreshCheckContentSize) {
						var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
						contentSize = self.refreshRequest.getResponseHeader("Content-Length");
						//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
						var headers = self.refreshRequest.getAllResponseHeaders();
						var hasContentHeader = headers.indexOf("Content-Length")!=-1;
						
						if (hasContentHeader) {
							contentSize = self.refreshRequest.getResponseHeader("Content-Length");

							// size has not been set yet
							if (self.refreshContentSize==null) {
								self.refreshContentSize = contentSize;
								// exit and let interval call this method again
								return;
							}

							if (contentSize!=self.refreshContentSize) {
								pageChanged = true;
							}
						}
					}
					else if (self.refreshCheckContent) {

						if (self.refreshRequest.responseText!=self.refreshContent) {
							pageChanged = true;
						}
					}
					else {
						lastModifiedHeader = self.getLastModified(self.refreshRequest);

						if (self.lastModifiedDate!=lastModifiedHeader) {
							self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
							pageChanged = true;
						}

					}

					
					if (pageChanged) {
						clearInterval(self.refreshInterval);
						self.refreshUpdatedPage();
						return;
					}

				}
				else {
					self.log('There was a problem with the request.');
				}

			}
		}
		catch( error ) {
			//console.log('Caught Exception: ' + error);
		}
	}

	self.refreshOnLoadOnceHandler = function(event) {

		// get the last modified date
		if (self.refreshRequest.response) {
			self.lastModifiedDate = self.getLastModified(self.refreshRequest);

			if (self.lastModifiedDate!=null) {

				if (self.refreshInterval==null) {
					self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
				}
			}
			else {
				self.log("Could not get last modified date from the server");
			}
		}
	}

	self.refreshUpdatedPage = function() {
		if (self.showRefreshNotifications) {
			var date = new Date().setTime((new Date().getTime()+10000));
			document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
		}

		document.location.reload(true);
	}

	self.showNotification = function(duration) {
		var notificationID = self.pageRefreshedName+"ID";
		var notification = document.getElementById(notificationID);
		if (duration==null) duration = 4000;

		if (notification!=null) {return;}

		notification = document.createElement("div");
		notification.id = notificationID;
		notification.textContent = "PAGE UPDATED";
		var styleRule = ""
		styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
		styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
		styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1))";
		notification.setAttribute("style", styleRule);

		notification.className= "PageRefreshedClass";
		
		document.body.appendChild(notification);

		setTimeout(function() {
			notification.style.opacity = "0";
			notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
			setTimeout(function() {
				notification.parentNode.removeChild(notification);
			}, duration)
		}, duration);

		document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
	}

	/**
	 * Get the last modified date from the header 
	 * or file object after request has been received
	 **/
	self.getLastModified = function(request) {
		var date;

		// file protocol - FILE object with last modified property
		if (request.response && request.response.lastModified) {
			date = request.response.lastModified;
		}
		
		// http protocol - check headers
		if (date==null) {
			date = request.getResponseHeader("Last-Modified");
		}

		return date;
	}

	self.updateLastModifiedLabel = function() {
		var labelValue = "";
		
		if (self.lastModifiedLabel==null) {
			self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
		}

		if (self.lastModifiedLabel) {
			var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
			var minutes = 0;
			var hours = 0;

			if (seconds < 60) {
				seconds = Math.floor(seconds/10)*10;
				labelValue = seconds + " seconds";
			}
			else {
				minutes = parseInt((seconds/60) + "");

				if (minutes>60) {
					hours = parseInt((seconds/60/60) +"");
					labelValue += hours==1 ? " hour" : " hours";
				}
				else {
					labelValue = minutes+"";
					labelValue += minutes==1 ? " minute" : " minutes";
				}
			}
			
			if (seconds<10) {
				labelValue = "Updated now";
			}
			else {
				labelValue = "Updated " + labelValue + " ago";
			}

			if (self.lastModifiedLabel.firstElementChild) {
				self.lastModifiedLabel.firstElementChild.textContent = labelValue;

			}
			else if ("textContent" in self.lastModifiedLabel) {
				self.lastModifiedLabel.textContent = labelValue;
			}
		}
	}

	self.getShortString = function(string, length) {
		if (length==null) length = 30;
		string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
		return string;
	}

	self.getShortNumber = function(value, places) {
		if (places==null || places<1) places = 4;
		value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
		return value;
	}

	///////////////////////////////////////
	// NAVIGATION CONTROLS
	///////////////////////////////////////

	self.updateViewLabel = function() {
		var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;
		var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
		var viewId = view ? view.id : null;

		if (viewNavigationLabel && view) {
			if (viewName && viewName.indexOf('"')!=-1) {
				viewName = viewName.replace(/"/g, "");
			}

			if (self.showViewName) {
				viewNavigationLabel.textContent = viewName;
				self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
			}
			else {
				viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
				self.setTooltip(viewNavigationLabel, viewName);
			}

		}
	}

	self.updateURL = function(view) {
		view = view == null ? self.getVisibleView() : view;
		var viewId = view ? view.id : null
		var viewFragment = view ? "#"+ viewId : null;

		if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

			if (self.supportsPopState==false) {
				self.setFragment(viewId);
			}
			else {
				if (viewFragment!=window.location.hash) {

					if (window.location.hash==null) {
						window.history.replaceState({name:viewId}, null, viewFragment);
					}
					else {
						window.history.pushState({name:viewId}, null, viewFragment);
					}
				}
			}
		}
	}

	self.setFragment = function(value) {
		window.location.hash = "#" + value;
	}

	self.setTooltip = function(element, value) {
		// setting the tooltip in edge causes a page crash on hover
		if (/Edge/.test(navigator.userAgent)) { return; }

		if ("title" in element) {
			element.title = value;
		}
	}

	self.getStylesheetRules = function(styleSheet) {
		try {
			if (styleSheet) return styleSheet.cssRules || styleSheet.rules;
	
			return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
		}
		catch (error) {
			// ERRORS:
			// SecurityError: The operation is insecure.
			// Errors happen when script loads before stylesheet or loading an external css locally

			// InvalidAccessError: A parameter or an operation is not supported by the underlying object
			// Place script after stylesheet

			console.log(error);
			if (error.toString().indexOf("The operation is insecure")!=-1) {
				console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
			}
			return [];
		}
	}

	/**
	 * If single page application hide all of the views. 
	 * @param {Number} selectedIndex if provided shows the view at index provided
	 **/
	self.hideViews = function(selectedIndex, animation) {
		var rules = self.getStylesheetRules();
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==selectedIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = selectedIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
				}
				else {
					if (animation) {
						self.fadeOut(rule)
					}
					else {
						self.disableMediaQuery(rule);
					}
				}
				
				queryIndex++;
			}
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();

		self.dispatchViewChange();

		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;

		return viewIndex==selectedIndex ? view : null;
	}

	/**
	 * Hide view
	 * @param {Object} view element to hide
	 **/
	self.hideView = function(view) {
		var rule = view ? self.mediaQueryDictionary[view.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);
		}
	}

	/**
	 * Show the view by media query. Does not hide current views
	 * Sets view options by default
	 * @param {Object} view element to show
	 * @param {Boolean} setViewOptions sets view options if null or true
	 */
	self.showViewByMediaQuery = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view && setViewOptions) self.setViewOptions(view);
			if (view && setViewOptions) self.setViewVariables(view);
		}
	}

	/**
	 * Show the view. Does not hide current views
	 */
	self.showView = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view==null) view =self.getVisibleView();
			if (view && setViewOptions) self.setViewOptions(view);
		}
		else if (id) {
			display = window.getComputedStyle(view).getPropertyValue("display");
			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		if (view) {
			if (self.currentView!=null) {
				self.lastView = self.currentView;
			}

			self.currentView = view;
		}
	}

	self.showViewById = function(id, setViewOptions) {
		var view = id ? self.getViewById(id) : null;

		if (view) {
			self.showView(view);
			return;
		}

		self.log("View not found '" + id + "'");
	}

	/**
	 * Show overlay over view
	 * @param {String} id id of view
	 * @param {Number} x x location
	 * @param {Number} y y location
	 * @param {Event | HTMLElement} event event or html element with styles applied
	 */
	self.showOverlay = function(id, x, y, event) {
		var view = id ? self.getViewById(id) : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var centerHorizontally = false;
		var centerVertically = false;
		var display = null;

		// get enter animation - event target must have css variables declared
		if (event) {
			var button = event.currentTarget || event; // can be event or htmlelement
			var buttonComputedStyles = getComputedStyle(button);
			var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
			var targetAnimation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
			var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
			var actionTarget = self.application ? null : self.getElement(actionTargetValue);
			var actionTargetStyles = actionTarget ? actionTarget.style : null;

			if (actionTargetStyles) {
				actionTargetStyles.setProperty("animation", targetAnimation);
			}
		}
		
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		if (query) {
			self.enableMediaQuery(query);
		}
		else if (id) {
			if (view==null) {
				self.log("View not found, '"+ id + "'");
				return;
			}

			display = window.getComputedStyle(view).getPropertyValue("display");

			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		// do not set x or y position if centering
		centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
		centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");

		if (view && centerHorizontally==false) {
			view.style.left = x + "px";
		}
		
		if (view && centerVertically==false) {
			view.style.top = y + "px";
		}

		self.currentOverlay = view;
	}

	self.goBack = function() {
		if (self.currentOverlay) {
			self.removeOverlay();
		}
		else if (self.lastView) {
			self.goToView(self.lastView.id);
		}
	}

	self.removeOverlay = function() {
		var overlay = self.currentOverlay;

		if (overlay) {
			var style = overlay.style;
			
			if (style.animation) {
				self.reverseAnimation(overlay, true);
			}
			else {
				self.setViewVariables(null, self.currentOverlay);
				self.hideView(self.currentOverlay);
			}
		}
	}

	/**
	 * Reverse the animation and hide after
	 * @param {Object} target element with animation
	 * @param {Boolean} hide hide after animation ends
	 */
	self.reverseAnimation = function(target, hide) {
		var lastAnimation = null;
		var style = target.style;

		style.animationPlayState = "paused";
		lastAnimation = style.animation;
		style.animation = null;
		style.animationPlayState = "paused";

		if (hide) {
			target.addEventListener("animationend", self.animationEndHideHandler);
		}

		setTimeout(function() {
			style.animation = lastAnimation;
			style.animationPlayState = "paused";
			style.animationDirection = "reverse";
			style.animationPlayState = "running";
		}, 30);
	}

	self.animationEndHandler = function(event) {
		var target = event.currentTarget;
	}

	self.animationEndHideHandler = function(event) {
		var target = event.currentTarget;
		self.setViewVariables(null, target);
		self.hideView(target);
		target.removeEventListener("animationend", self.animationEndHideHandler);
	}

	self.animationEndShowHandler = function(event) {
		var target = event.currentTarget;
		target.removeEventListener("animationend", self.animationEndShowHandler);
	}

	self.setViewOptions = function(view) {

		if (view) {
			self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
			self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
			self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
			self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
			self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
			self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
			self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
			self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
			self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
			self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
			self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
			self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
			self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
			self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
			self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
			self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
			self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
			self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
			self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
			self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
			self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

			if (self.scaleViewsToFit) {
				var newScaleValue = self.scaleViewToFit(view);
				
				if (newScaleValue<0) {
					setTimeout(self.scaleViewToFit, 500, view);
				}
			}
			else {
				self.viewScale = self.getViewScaleValue(view);
				self.updateSliderValue(self.viewScale);
			}

			if (self.imageComparisonDuration!=null) {
				// todo
			}

			if (self.refreshPageForChangesInterval!=null) {
				self.refreshDuration = Number(self.refreshPageForChangesInterval);
			}
		}
	}

	self.previousView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView()
		var index = view ? self.getViewIndex(view) : -1;
		var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		if (event) {
			event.stopImmediatePropagation();
		}

		if (prevQueryIndex<0) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==prevQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = prevQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.nextView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView();
		var index = view ? self.getViewIndex(view) : -1;
		var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;
		var numberOfMediaQueries = self.getNumberOfMediaRules();

		if (event) {
			event.stopImmediatePropagation();
		}

		if (nextQueryIndex>=numberOfMediaQueries) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==nextQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = nextQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	/**
	 * Enables a view via media query
	 */
	self.enableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.inclusionQuery;
		}
		catch(error) {
			//self.log(error);
			rule.conditionText = self.inclusionQuery;
		}
	}

	self.disableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.exclusionQuery;
		}
		catch(error) {
			rule.conditionText = self.exclusionQuery;
		}
	}

	self.dispatchViewChange = function() {
		try {
			var event = new Event(self.NAVIGATION_CHANGE);
			window.dispatchEvent(event);
		}
		catch (error) {
			// In IE 11: Object doesn't support this action
		}
	}

	self.getNumberOfMediaRules = function() {
		var rules = self.getStylesheetRules();
		var numberOfRules = rules ? rules.length : 0;
		var numberOfQueries = 0;

		for (var i=0;i<numberOfRules;i++) {
			if (rules[i].media!=null) { numberOfQueries++; }
		}
		return numberOfQueries;
	}

	/////////////////////////////////////////
	// VIEW SCALE 
	/////////////////////////////////////////

	self.sliderChangeHandler = function(event) {
		var value = self.getShortNumber(event.currentTarget.value/100);
		var view = self.getVisibleView();
		self.setViewScaleValue(view, false, value, true);
	}

	self.updateSliderValue = function(scale) {
		var slider = document.getElementById(self.viewScaleSliderId);
		var tooltip = parseInt(scale * 100 + "") + "%";
		var inputType;
		var inputValue;
		
		if (slider) {
			inputValue = self.getShortNumber(scale * 100);
			if (inputValue!=slider["value"]) {
				slider["value"] = inputValue;
			}
			inputType = slider.getAttributeNS(null, "type");

			if (inputType!="range") {
				// input range is not supported
				slider.style.display = "none";
			}

			self.setTooltip(slider, tooltip);
		}
	}

	self.viewChangeHandler = function(event) {
		var view = self.getVisibleView();
		var matrix = view ? getComputedStyle(view).transform : null;
		
		if (matrix) {
			self.viewScale = self.getViewScaleValue(view);
			
			var scaleNeededToFit = self.getViewFitToViewportScale(view);
			var isViewLargerThanViewport = scaleNeededToFit<1;
			
			// scale large view to fit if scale to fit is enabled
			if (self.scaleViewsToFit) {
				self.scaleViewToFit(view);
			}
			else {
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.getViewScaleValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var scaleX = parseFloat(matrixArray[0]);
			var scaleY = parseFloat(matrixArray[3]);
			var scale = Math.min(scaleX, scaleY);
		}

		return scale;
	}

	/**
	 * Scales view to scale. 
	 * @param {Object} view view to scale. views are in views array
	 * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
	 * @param {Number} desiredScale scale to define. not used if scale to fit is false
	 * @param {Boolean} isSliderChange indicates if slider is callee
	 */
	self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
		var enableScaleUp = self.enableScaleUp;
		var scaleToFitType = self.scaleToFitType;
		var minimumScale = self.minimumScale;
		var hasMinimumScale = !isNaN(minimumScale) && minimumScale!=""
		var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
		var scaleToFitFull = self.getViewFitToViewportScale(view, true);
		var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
		var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
		var scaleToWidth = scaleToFitType=="width";
		var scaleToHeight = scaleToFitType=="height";
		var shrunkToFit = false;
		var topPosition = null;
		var leftPosition = null;
		var translateY = null;
		var translateX = null;
		var transformValue = "";
		var canCenterVertically = true;
		var canCenterHorizontally = true;

		//console.log("height:"+scaleNeededToFitHeight+",width:"+scaleNeededToFitWidth+",fit:"+scaleNeededToFit,"desired:"+desiredScale);

		if (scaleToFit && isSliderChange!=true) {
			if (scaleToFitType=="fit") {
				desiredScale = scaleNeededToFit;
			}
			else if (scaleToFitType=="width") {
				desiredScale = scaleNeededToFitWidth;
			}
			else if (scaleToFitType=="height") {
				desiredScale = scaleNeededToFitHeight;
			}
		}
		else {
			if (isNaN(desiredScale)) {
				desiredScale = 1;
			}
		}

		self.updateSliderValue(desiredScale);
		
		// scale to fit width
		if (scaleToWidth && scaleToHeight==false) {
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitWidth;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			//desiredScale = self.getShortNumber(desiredScale);
			desiredScale = self.getShortNumber(desiredScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			view.style.transformOrigin = "0 0";
			view.style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return desiredScale;
		}

		// scale to fit height
		if (scaleToHeight && scaleToWidth==false) {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;
			
			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullHeight;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitHeight;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			view.style.transformOrigin = "0 0";
			view.style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return scaleNeededToFitHeight;
		}

		if (scaleToFitType=="fit") {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
			canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (isSliderChange || scaleToFit==false) {
				canCenterVertically = scaleToFitFullHeight>=desiredScale;
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFit;
			}

			transformValue = "scale(" + desiredScale + ")";

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			view.style.transformOrigin = "0 0";
			view.style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);
			
			return desiredScale;
		}
	}

	self.getViewFitToViewportScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		availableWidth -= self.horizontalPadding;
		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		else if (elementWidth > availableWidth || elementHeight > availableHeight) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		
		return newScale;
	}

	self.getViewFitToViewportWidthScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var newScale = 1;

		availableWidth -= self.horizontalPadding;

		if (enableScaleUp) {
			newScale = availableWidth/elementWidth;
		}
		else if (elementWidth > availableWidth) {
			newScale = availableWidth/elementWidth;
		}
		
		return newScale;
	}

	self.getViewFitToViewportHeightScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = availableHeight/elementHeight;
		}
		else if (elementHeight > availableHeight) {
			newScale = availableHeight/elementHeight;
		}
		
		return newScale;
	}

	self.keypressHandler = function(event) {
		var rightKey = 39;
		var leftKey = 37;
		
		// listen for both events 
		if (event.type=="keypress") {
			window.removeEventListener("keyup", self.keypressHandler);
		}
		else {
			window.removeEventListener("keypress", self.keypressHandler);
		}
		
		if (self.showNavigationControls) {
			if (self.navigationOnKeypress) {
				if (event.keyCode==rightKey) {
					self.nextView();
				}
				if (event.keyCode==leftKey) {
					self.previousView();
				}
			}
		}
		else if (self.navigationOnKeypress) {
			if (event.keyCode==rightKey) {
				self.nextView();
			}
			if (event.keyCode==leftKey) {
				self.previousView();
			}
		}
	}

	///////////////////////////////////
	// GENERAL FUNCTIONS
	///////////////////////////////////

	self.getViewById = function(id) {
		id = id ? id.replace("#", "") : "";
		var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
		return view;
	}

	self.getViewIds = function() {
		var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
		var viewId = null;

		viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

		if (viewIds.length==0) {
			viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
			viewIds = viewId ? [viewId] : [];
		}

		return viewIds;
	}

	self.getInitialViewId = function() {
		var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
		return viewId;
	}

	self.getApplicationStylesheet = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		self.applicationStylesheet = document.getElementById("applicationStylesheet");
		return self.applicationStylesheet.sheet;
	}

	self.getVisibleView = function() {
		var viewIds = self.getViewIds();
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = getComputedStyle(view).display;
		
				if (display=="block" || display=="flex") {
					return view;
				}
			}
		}

		return null;
	}

	self.getInitialView = function() {
		var viewId = self.getInitialViewId();
		viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
		var view = self.getElement(viewId);
		var postName = "_Class";

		if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
			view = self.getElement(viewId.replace(postName, ""));
		}

		return view;
	}

	self.getViewIndex = function(view) {
		var viewIds = self.getViewIds();
		var id = view ? view.id : null;
		var index = id && viewIds ? viewIds.indexOf(id) : -1;

		return index;
	}

	self.syncronizeViewToURL = function() {
		var fragment = window.location.hash;
		var view = self.getViewById(fragment);
		var index = view ? self.getViewIndex(view) : 0;
		if (index==-1) index = 0;
		var currentView = self.hideViews(index);

		if (self.supportsPopState && currentView) {

			if (fragment==null) {
				window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
			}
			else {
				window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
			}
		}
		
		self.setViewVariables(view);
		return view;
	}

	/**
	 * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
	 */
	self.setViewVariables = function(view, overlay, parentView) {
		if (view) {
			if (self.currentView) {
				self.lastView = self.currentView;
			}
			self.currentView = view;
		}

		if (overlay) {
			if (self.currentOverlay) {
				self.lastOverlay = self.currentOverlay;
			}
			self.currentOverlay = overlay;
		}
	}

	self.getViewPreferenceBoolean = function(view, property, altValue) {
		var computedStyle = window.getComputedStyle(view);
		var value = computedStyle.getPropertyValue(property);
		var type = typeof value;
		
		if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
			return true;
		}
		else if (value=="" && arguments.length==3) {
			return altValue;
		}

		return false;
	}

	self.getViewPreferenceValue = function(view, property, defaultValue) {
		var value = window.getComputedStyle(view).getPropertyValue(property);

		if (value===undefined) {
			return defaultValue;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	self.getStyleRuleValue = function(cssRule, property) {
		var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

		if (value===undefined) {
			return null;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	self.getCSSPropertyValueForElement = function(id, property) {
		var styleSheets = document.styleSheets;
		var numOfStylesheets = styleSheets.length;
		var values = [];
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var value;

		for(var i=0;i<numOfStylesheets;i++) {
			var styleSheet = styleSheets[i];
			var cssRules = self.getStylesheetRules(styleSheet);
			var numOfCSSRules = cssRules.length;
			var cssRule;
			
			for (var j=0;j<numOfCSSRules;j++) {
				cssRule = cssRules[j];
				
				if (cssRule.media) {
					var mediaRules = cssRule.cssRules;
					var numOfMediaRules = mediaRules ? mediaRules.length : 0;
					
					for(var k=0;k<numOfMediaRules;k++) {
						var mediaRule = mediaRules[k];
						
						if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {
							
							if (mediaRule.style && property in mediaRule.style) {
								value = mediaRule.style.getPropertyValue(property);
								values.push(value);
							}
						}
					}
				}
				else {

					if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
						if (cssRule.style && property in cssRule.style) {
							value = cssRule.style.getPropertyValue(property);
							values.push(value);
						}
					}
				}
			}
		}
		
		return values.pop();
	}

	self.collectViews = function() {
		var viewIds = self.getViewIds();

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getViewById(id);
			//view && view.addEventListener("animationend", self.animationEndHandler);
			self.views[id] = view;
		}
		
		self.viewIds = viewIds;
	}

	self.collectMediaQueries = function() {
		var viewIds = self.getViewIds();
		var styleSheet = self.getApplicationStylesheet();
		var cssRules = self.getStylesheetRules(styleSheet);
		var numOfCSSRules = cssRules ? cssRules.length : 0;
		var cssRule;
		var id = viewIds.length ? viewIds[0]: ""; // single view
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var viewsNotFound = viewIds.slice();
		var viewsFound = [];
		var selectorText = null;
		var property = self.prefix + "view-id";
		
		for (var j=0;j<numOfCSSRules;j++) {
			cssRule = cssRules[j];
			
			if (cssRule.media) {
				var mediaRules = cssRule.cssRules;
				var numOfMediaRules = mediaRules ? mediaRules.length : 0;
				
				for(var k=0;k<numOfMediaRules;k++) {
					var mediaRule = mediaRules[k];
					var mediaId = null;

					selectorText = mediaRule.selectorText;
					
					if (selectorText==".mediaViewInfo") {

						mediaId = self.getStyleRuleValue(mediaRule, property);

						self.addView(mediaId, cssRule);
						viewsFound.push(mediaId);

						if (viewsNotFound.indexOf(mediaId)!=-1) {
							viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
						}

						break;
					}
				}
			}
			else {
				selectorText = cssRule.selectorText.replace(/[#|\s|*]?/g, "");

				if (viewIds.indexOf(selectorText)!=-1) {
					self.addView(selectorText, cssRule);

					if (viewsNotFound.indexOf(selectorText)!=-1) {
						viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
					}

					break;
				}
			}
		}

		if (viewsNotFound.length) {
			console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
			console.log("Views found:" + viewsFound.join(",") + "");
		}
	}

	/**
	 * Adds a view. A view object contains the id of the view and the style rule
	 * Use enableMediaQuery(rule) to enable
	 * An array of view names are in self.views array
	 */
	self.addView = function(name, cssRule, parentId) {
		var state = {name:name, rule:cssRule, id:name, parentId:parentId};
		self.addedViews.push(name);
		self.viewsDictionary[name] = state;
		self.mediaQueryDictionary[name] = cssRule;
	}

	self.hasView = function(name) {

		if (self.addedViews.indexOf(name)!=-1) {
			return true;
		}
		return false;
	}

	/**
	 * Go to view by id. Views are added in addView()
	 * @param {String} name id of view in current
	 * @param {String} parent id of parent view
	 * @param {Boolean} maintainPreviousState if true then do not hide other views
	 */
	self.goToView = function(name, maintainPreviousState, parent) {
		var state = self.viewsDictionary[name];

		if (state) {
			if (maintainPreviousState==false || maintainPreviousState==null) {
				self.hideViews();
			}
			self.enableMediaQuery(state.rule);
			self.updateViewLabel();
			self.updateURL();
		}
		else {
			var event = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(event);
		}
	}

	/**
	 * Go to the view in the event targets CSS variable
	 */
	self.goToTargetView = function(event) {
		var button = event.currentTarget;
		var buttonComputedStyles = getComputedStyle(button);
		var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
		var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
		var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
		var targetView = self.application ? null : self.getElement(actionTargetValue);
		var actionTargetStyles = targetView ? targetView.style : null;
		var state = self.viewsDictionary[actionTargetValue];
		
		// navigate to page
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// if view is found
		if (targetView) {

			// add animation set in event target style declaration
			if (animation && self.supportAnimations) {
				self.crossFade(self.currentView, targetView, false, animation);
			}
			else {
				self.setViewVariables(self.currentView);
				self.hideViews();
				self.enableMediaQuery(state.rule);
				self.scaleViewIfNeeded(targetView);
				self.updateViewLabel();
				self.updateURL();
			}
		}
		else {
			var stateEvent = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(stateEvent);
		}
		
	}

	/**
	 * Cross fade between views
	 **/
	self.crossFade = function(from, to, update, animation) {
		var targetIndex = to.parentNode
		var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
		var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

		if (from.parentNode==to.parentNode) {
			var reverse = self.getReverseAnimation(animation);
			var duration = self.getAnimationDuration(animation, true);

			// if target view is above (higher index)
			// then fade in target view 
			// and after fade in then hide previous view instantly
			if (fromIndex<toIndex) {
				self.setElementAnimation(from, null);
				self.setElementAnimation(to, null);
				self.showViewByMediaQuery(to);
				self.fadeIn(to, update, animation);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
					self.updateViewLabel();
				}, duration)
			}
			// if target view is on bottom
			// then show target view instantly 
			// and fade out current view
			else if (fromIndex>toIndex) {
				self.setElementAnimation(to, null);
				self.setElementAnimation(from, null);
				self.showViewByMediaQuery(to);
				self.fadeOut(from, update, reverse);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
				}, duration)
			}
		}
	}

	self.fadeIn = function(element, update, animation) {
		self.showViewByMediaQuery(element);

		if (update) {
			self.updateURL(element);
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.setViewVariables(element);
				self.updateViewLabel();
				element.removeEventListener("animationend", arguments.callee);
			});
		}
		
		element.style.animation = animation;
	}

	self.fadeOutCurrentView = function(animation, update) {
		if (self.currentView) {
			self.fadeOut(self.currentView, update, animation);
		}
		if (self.currentOverlay) {
			self.fadeOut(self.currentOverlay, update, animation);
		}
	}

	self.fadeOut = function(element, update, animation) {
		if (update) {
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.hideView(element);
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		element.style.animationPlayState = "paused";
		element.style.animation = animation;
		element.style.animationPlayState = "running";
	}

	self.getReverseAnimation = function(animation) {
		if (animation && animation.indexOf("reverse")==-1) {
			animation += " reverse";
		}

		return animation;
	}

	self.getAnimationDuration = function(animation, inMilliseconds) {
		var duration = 0;
		var expression = /.+(\d\.\d)s.+/;

		if (animation && animation.match(expression)) {
			duration = animation.replace(expression, "$" + "1");
			if (duration && inMilliseconds) duration = duration * 1000;
		}

		return duration;
	}

	self.setElementAnimation = function(element, animation, priority) {
		element.style.setProperty("animation", animation, "important");
	}

	self.getElement = function(id) {
		var elementId = id ? id.trim() : id;
		var element = elementId ? document.getElementById(elementId) : null;

		return element;
	}

	self.resizeHandler = function(event) {
		self.scaleViewIfNeeded();
	}

	self.scaleViewIfNeeded = function(view) {

		if (self.scaleViewsOnResize) {
			if (view==null) {
				view = self.getVisibleView();
			}

			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

			if (isViewScaled) {
				self.scaleViewToFit(view, true);
			}
			else {
				self.scaleViewToActualSize(view);
			}
		}
	}

	self.preventDoubleClick = function(event) {
		event.stopImmediatePropagation();
	}

	self.hashChangeHandler = function(event) {
		var fragment = window.location.hash ? window.location.hash.replace("#", "") : "";
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.setViewVariables(view);
			self.updateViewLabel();
			window.dispatchEvent(new Event(self.VIEW_CHANGE));
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.popStateHandler = function(event) {
		var state = event.state;
		var fragment = state ? state.name : window.location.hash;
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.doubleClickHandler = function(event) {
		var view = self.getVisibleView();
		var scaleValue = view ? self.getViewScaleValue(view) : 1;
		var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
		var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
		var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
		var scaleToFitType = self.scaleToFitType;

		// Three scenarios
		// - scale to fit on double click
		// - set scale to actual size on double click
		// - switch between scale to fit and actual page size

		if (scaleToFitType=="width") {
			scaleNeededToFit = scaleNeededToFitWidth;
		}
		else if (scaleToFitType=="height") {
			scaleNeededToFit = scaleNeededToFitHeight;
		}

		// if scale and actual size enabled then switch between
		if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
			var isScaled = false;
			
			// if scale is not 1 then view needs scaling
			if (scaleNeededToFit!=1) {

				// if current scale is at 1 it is at actual size
				// scale it to fit
				if (scaleValue==1) {
					self.scaleViewToFit(view);
					isScaled = true;
				}
				else {
					// scale is not at 1 so switch to actual size
					self.scaleViewToActualSize(view);
					isScaled = false;
				}
			}
			else {
				// view is smaller than viewport 
				// so scale to fit() is scale actual size
				// actual size and scaled size are the same
				// but call scale to fit to retain centering
				self.scaleViewToFit(view);
				isScaled = false;
			}
			
			view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
			isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
		}
		else if (self.scaleToFitOnDoubleClick) {
			self.scaleViewToFit(view);
		}
		else if (self.actualSizeOnDoubleClick) {
			self.scaleViewToActualSize(view);
		}

	}

	self.scaleViewToFit = function(view) {
		return self.setViewScaleValue(view, true);
	}

	self.scaleViewToActualSize = function(view) {
		self.setViewScaleValue(view, false, 1);
	}

	self.onloadHandler = function(event) {
		self.initialize();
	}

	self.getStackArray = function(error) {
		var value = "";
		
		if (error==null) {
		  try {
			 error = new Error("Stack");
		  }
		  catch (e) {
			 
		  }
		}
		
		if ("stack" in error) {
		  value = error.stack;
		  var methods = value.split(/\n/g);
	 
		  var newArray = methods ? methods.map(function (value, index, array) {
			 value = value.replace(/\@.*/,"");
			 return value;
		  }) : null;
	 
		  if (newArray && newArray[0].includes("getStackTrace")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0].includes("getStackArray")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="") {
			 newArray.shift();
		  }
	 
			return newArray;
		}
		
		return null;
	}

	self.log = function(value) {
		console.log.apply(this, [value]);
	}
	
	// initialize on load
	// sometimes the body size is 0 so we call this now and again later
	window.addEventListener("load", self.onloadHandler);
	window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

window.application = new Application();
</script>
</head>
<body>
<div id="Home">
	<svg class="Rectangle_1493">
		<rect fill="rgba(23,43,77,1)" id="Rectangle_1493" rx="0" ry="0" x="0" y="0" width="1301" height="378">
		</rect>
	</svg>
	<div id="Group_15">
		<svg class="Rectangle_1494">
			<rect fill="rgba(247,250,252,1)" id="Rectangle_1494" rx="25" ry="25" x="0" y="0" width="247" height="50">
			</rect>
		</svg>
		<div id="search" class="search">
			<svg class="Ellipse_342">
				<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_342" rx="8" ry="8" cx="8" cy="8">
				</ellipse>
			</svg>
			<svg class="Line_11" viewBox="0 0 4.35 4.35">
				<path fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Line_11" d="M 4.349999904632568 4.349999904632568 L 0 0">
				</path>
			</svg>
		</div>
		<div id="Search_bc">
			<span>Search</span>
		</div>
	</div>
	<div id="bell" class="bell">
		<svg class="Path_447" viewBox="3 2 18 15">
			<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Path_447" d="M 18 8 C 18 4.686291217803955 15.31370830535889 2 12 2 C 8.686290740966797 2 6 4.686291694641113 6 8 C 6 15 3 17 3 17 L 21 17 C 21 17 18 15 18 8">
			</path>
		</svg>
		<svg class="Path_448" viewBox="10.27 21 3.46 0.996">
			<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Path_448" d="M 13.72999954223633 21 C 13.37220191955566 21.6168041229248 12.71306800842285 21.99645614624023 12 21.99645614624023 C 11.28693103790283 21.99645614624023 10.62779808044434 21.6168041229248 10.27000045776367 21">
			</path>
		</svg>
	</div>
	<div id="help_circle" class="help_circle">
		<svg class="Ellipse_351">
			<ellipse fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_351" rx="10" ry="10" cx="10" cy="10">
			</ellipse>
		</svg>
		<svg class="Path_465" viewBox="9.09 6.995 5.83 6.005">
			<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Path_465" d="M 9.090000152587891 9 C 9.575439453125 7.620044708251953 10.98538589477539 6.791407585144043 12.42717742919922 7.038713932037354 C 13.86896991729736 7.286019802093506 14.92218017578125 8.537154197692871 14.92000007629395 10.00000095367432 C 14.92000007629395 12 11.92000007629395 13 11.92000007629395 13">
			</path>
		</svg>
		<svg class="Line_25" viewBox="0 0 2 2">
			<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Line_25" d="M 0 0 L 0 0">
			</path>
		</svg>
	</div>
	<div id="Group_14">
		<div id="Mask_Group_1">
		<svg style="width:inherit;height:inherit;overflow:visible;">
			<rect fill="url(#Mask_Group_1_hb_pattern)" width="100%" height="100%"></rect>
				<pattern elementId="Mask_Group_1_hb" id="Mask_Group_1_hb_pattern" x="0" y="0" width="100%" height="100%">
					<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hb_pattern.png" xlink:href="Mask_Group_1_hb_pattern.png"></image>
				</pattern>
				</svg>
			</div>
		<div id="Arya_Stark">
			<span>Arya Stark</span>
		</div>
	</div>
	<div id="Group_16">
		<div id="home" class="home">
			<svg class="Path_435" viewBox="3 2 18 20">
				<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Path_435" d="M 3 9 L 12 2 L 21 9 L 21 20 C 21 21.10457038879395 20.10456848144531 22 19 22 L 5 22 C 3.895430564880371 22 3 21.10456848144531 3 20 L 3 9 Z">
				</path>
			</svg>
			<svg class="Path_436" viewBox="9 12 6 10">
				<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Path_436" d="M 9 22 L 9 12 L 15 12 L 15 22">
				</path>
			</svg>
		</div>
		<div id="Home_bt">
			<span>Home</span>
		</div>
	</div>
	<div id="Group_172">
		<svg class="Rectangle_1490">
			<rect fill="rgba(31,31,31,1)" id="Rectangle_1490" rx="0" ry="0" x="0" y="0" width="65" height="768">
			</rect>
		</svg>
		<div id="bar_chart_2" class="bar_chart_2">
			<svg class="Line_1" viewBox="0 0 2 16">
				<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Line_1" d="M 0 16 L 0 0">
				</path>
			</svg>
			<svg class="Line_2" viewBox="0 0 2 16">
				<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Line_2" d="M 0 16 L 0 0">
				</path>
			</svg>
			<svg class="Line_3" viewBox="0 0 2 16">
				<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Line_3" d="M 0 16 L 0 0">
				</path>
			</svg>
		</div>
	</div>
	<div id="Group_155">
		<svg class="Rectangle_1496">
			<rect fill="rgba(255,255,255,1)" id="Rectangle_1496" rx="10" ry="10" x="0" y="0" width="1100" height="515">
			</rect>
		</svg>
		<div id="Project_Selection">
			<span>Project Selection</span>
		</div>
		<svg class="Rectangle_1510">
			<rect fill="rgba(241,243,249,1)" id="Rectangle_1510" rx="0" ry="0" x="0" y="0" width="1100" height="40">
			</rect>
		</svg>
		<div id="CREATED_AT">
			<span>CREATED AT</span>
		</div>
		<div id="TEAM">
			<span>TEAM</span>
		</div>
		<div id="Group_154">
			<div id="PROJECT">
				<span>PROJECT</span>
			</div>
			<div id="Group_129">
				<div id="chevron_down" class="chevron_down">
					<svg class="chevron_down_ca" viewBox="6 9 7 3">
						<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="chevron_down_ca" d="M 6 9 L 9.5 12 L 13 9">
						</path>
					</svg>
				</div>
				<div id="chevron_up" class="chevron_up">
					<svg class="chevron_up_cc" viewBox="6 9 7 3">
						<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="chevron_up_cc" d="M 13 12 L 9.5 9 L 6 12">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Group_153">
			<div id="STATUS">
				<span>STATUS</span>
			</div>
			<div id="Group_130">
				<div id="chevron_down_cg" class="chevron_down">
					<svg class="chevron_down_ch" viewBox="6 9 7 3">
						<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="chevron_down_ch" d="M 6 9 L 9.5 12 L 13 9">
						</path>
					</svg>
				</div>
				<div id="chevron_up_ci" class="chevron_up">
					<svg class="chevron_up_cj" viewBox="6 9 7 3">
						<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="chevron_up_cj" d="M 13 12 L 9.5 9 L 6 12">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Group_152">
			<div id="BUDGET">
				<span>BUDGET</span>
			</div>
			<div id="Group_131">
				<div id="chevron_down_cn" class="chevron_down">
					<svg class="chevron_down_co" viewBox="6 9 7 3">
						<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="chevron_down_co" d="M 6 9 L 9.5 12 L 13 9">
						</path>
					</svg>
				</div>
				<div id="chevron_up_cp" class="chevron_up">
					<svg class="chevron_up_cq" viewBox="6 9 7 3">
						<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="chevron_up_cq" d="M 13 12 L 9.5 9 L 6 12">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Group_151">
			<div id="COMPLETION">
				<span>COMPLETION</span>
			</div>
			<div id="Group_132">
				<div id="chevron_down_cu" class="chevron_down">
					<svg class="chevron_down_cv" viewBox="6 9 7 3">
						<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="chevron_down_cv" d="M 6 9 L 9.5 12 L 13 9">
						</path>
					</svg>
				</div>
				<div id="chevron_up_cw" class="chevron_up">
					<svg class="chevron_up_cx" viewBox="6 9 7 3">
						<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="chevron_up_cx" d="M 13 12 L 9.5 9 L 6 12">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Group_135">
			<a href="/dashboard">
			<svg class="Rectangle_1511">
				<rect fill="rgba(255,255,255,1)" id="Rectangle_1511" rx="0" ry="0" x="0" y="0" width="1100" height="75">
				</rect>
			</svg>
			<div id="Mask_Group_1_c">
			<svg style="width:inherit;height:inherit;overflow:visible;">
				<rect fill="url(#Mask_Group_1_hc_pattern)" width="100%" height="100%"></rect>
					<pattern elementId="Mask_Group_1_hc" id="Mask_Group_1_hc_pattern" x="0" y="0" width="100%" height="100%">
						<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hc_pattern.png" xlink:href="Mask_Group_1_hc_pattern.png"></image>
					</pattern>
					</svg>
				</div>
			<div id="Project_X">
				<span>Project X</span>
			</div>
			<div id="ID20_03_2020">
				<span>20/03/2020</span>
			</div>
			<div id="Group_33">
				<div id="Pending">
					<span>Pending</span>
				</div>
				<svg class="Ellipse_355">
					<ellipse fill="rgba(245,60,86,1)" id="Ellipse_355" rx="5" ry="5" cx="5" cy="5">
					</ellipse>
				</svg>
			</div>
			<div id="_2500">
				<span>$2500</span>
			</div>
			<div id="Group_133">
				<div id="Mask_Group_1_da">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hd_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hd" id="Mask_Group_1_hd_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hd_pattern.png" xlink:href="Mask_Group_1_hd_pattern.png"></image>
						</pattern>
						</svg>
					</div>
				<div id="Mask_Group_1_dd">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_he_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_he" id="Mask_Group_1_he_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_he_pattern.png" xlink:href="Mask_Group_1_he_pattern.png"></image>
						</pattern>
						</svg>
					</div>
				<div id="Mask_Group_1_dg">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hf_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hf" id="Mask_Group_1_hf_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hf_pattern.png" xlink:href="Mask_Group_1_hf_pattern.png"></image>
						</pattern>
						</svg>
					</div>
			</div>
			<div id="Group_50">
				<svg class="Line_49" viewBox="0 0 112.412 3">
					<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_49" d="M 0 0 L 112.412109375 0">
					</path>
				</svg>
				<svg class="Line_50" viewBox="0 0 27 3">
					<path fill="transparent" stroke="rgba(245,60,86,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_50" d="M 0 0 L 27 0">
					</path>
				</svg>
			</div>
			<div id="ID20_">
				<span>20%</span>
			</div>
			<div id="Group_134">
				<svg class="Ellipse_369">
					<ellipse fill="rgba(247,250,252,1)" id="Ellipse_369" rx="15" ry="15" cx="15" cy="15">
					</ellipse>
				</svg>
				<div id="more_vertical" class="more_vertical">
					<svg class="Ellipse_348">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_348" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
					<svg class="Ellipse_349">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_349" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
					<svg class="Ellipse_350">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_350" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
				</div>
			</div></a>
		</div>
		<div id="Group_136">
			<svg class="Rectangle_1511_du">
				<rect fill="rgba(247,250,252,1)" id="Rectangle_1511_du" rx="0" ry="0" x="0" y="0" width="1100" height="75">
				</rect>
			</svg>
			<div id="Mask_Group_1_dv">
			<svg style="width:inherit;height:inherit;overflow:visible;">
				<rect fill="url(#Mask_Group_1_hg_pattern)" width="100%" height="100%"></rect>
					<pattern elementId="Mask_Group_1_hg" id="Mask_Group_1_hg_pattern" x="0" y="0" width="100%" height="100%">
						<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hg_pattern.png" xlink:href="Mask_Group_1_hg_pattern.png"></image>
					</pattern>
					</svg>
				</div>
			<div id="Dashboard_Enterprise">
				<span>Dashboard Enterprise</span>
			</div>
			<div id="ID20_03_2020_dz">
				<span>20/03/2020</span>
			</div>
			<div id="Group_33_d">
				<div id="Completed">
					<span>Completed</span>
				</div>
				<svg class="Ellipse_355_d">
					<ellipse fill="rgba(45,206,152,1)" id="Ellipse_355_d" rx="5" ry="5" cx="5" cy="5">
					</ellipse>
				</svg>
			</div>
			<div id="_4400">
				<span>$4400</span>
			</div>
			<div id="Group_133_d">
				<div id="Mask_Group_1_d">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hh_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hh" id="Mask_Group_1_hh_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hh_pattern.png" xlink:href="Mask_Group_1_hh_pattern.png"></image>
						</pattern>
						</svg>
					</div>
				<div id="Mask_Group_1_ea">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hi_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hi" id="Mask_Group_1_hi_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hi_pattern.png" xlink:href="Mask_Group_1_hi_pattern.png"></image>
						</pattern>
						</svg>
					</div>
				<div id="Mask_Group_1_eb">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hj_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hj" id="Mask_Group_1_hj_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hj_pattern.png" xlink:href="Mask_Group_1_hj_pattern.png"></image>
						</pattern>
						</svg>
					</div>
			</div>
			<div id="Group_50_ee">
				<svg class="Line_49_ef" viewBox="0 0 112.412 3">
					<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_49_ef" d="M 0 0 L 112.412109375 0">
					</path>
				</svg>
				<svg class="Line_50_eg" viewBox="0 0 112 3">
					<path fill="transparent" stroke="rgba(45,206,152,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_50_eg" d="M 0 0 L 112 0">
					</path>
				</svg>
			</div>
			<div id="ID100_">
				<span>100%</span>
			</div>
			<div id="Group_134_ei">
				<svg class="Ellipse_369_ej">
					<ellipse fill="rgba(255,255,255,1)" id="Ellipse_369_ej" rx="15" ry="15" cx="15" cy="15">
					</ellipse>
				</svg>
				<div id="more_vertical_ek" class="more_vertical">
					<svg class="Ellipse_348_el">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_348_el" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
					<svg class="Ellipse_349_em">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_349_em" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
					<svg class="Ellipse_350_en">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_350_en" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
				</div>
			</div>
		</div>
		<div id="Group_137">
			<svg class="Rectangle_1511_ep">
				<rect fill="rgba(255,255,255,1)" id="Rectangle_1511_ep" rx="0" ry="0" x="0" y="0" width="1100" height="75">
				</rect>
			</svg>
			<div id="Mask_Group_1_eq">
			<svg style="width:inherit;height:inherit;overflow:visible;">
				<rect fill="url(#Mask_Group_1_hk_pattern)" width="100%" height="100%"></rect>
					<pattern elementId="Mask_Group_1_hk" id="Mask_Group_1_hk_pattern" x="0" y="0" width="100%" height="100%">
						<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hk_pattern.png" xlink:href="Mask_Group_1_hk_pattern.png"></image>
					</pattern>
					</svg>
				</div>
			<div id="The_black_Project">
				<span>The black Project</span>
			</div>
			<div id="ID20_03_2020_eu">
				<span>20/03/2020</span>
			</div>
			<div id="Group_33_ev">
				<div id="On_Schedule">
					<span>On Schedule</span>
				</div>
				<svg class="Ellipse_355_ex">
					<ellipse fill="rgba(17,205,239,1)" id="Ellipse_355_ex" rx="5" ry="5" cx="5" cy="5">
					</ellipse>
				</svg>
			</div>
			<div id="_2133">
				<span>$2133</span>
			</div>
			<div id="Group_133_ez">
				<div id="Mask_Group_1_e">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hl_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hl" id="Mask_Group_1_hl_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hl_pattern.png" xlink:href="Mask_Group_1_hl_pattern.png"></image>
						</pattern>
						</svg>
					</div>
				<div id="Mask_Group_1_fa">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hm_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hm" id="Mask_Group_1_hm_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hm_pattern.png" xlink:href="Mask_Group_1_hm_pattern.png"></image>
						</pattern>
						</svg>
					</div>
				<div id="Mask_Group_1_fb">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hn_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hn" id="Mask_Group_1_hn_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hn_pattern.png" xlink:href="Mask_Group_1_hn_pattern.png"></image>
						</pattern>
						</svg>
					</div>
			</div>
			<div id="Group_50_e">
				<svg class="Line_49_fa" viewBox="0 0 112.412 3">
					<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_49_fa" d="M 0 0 L 112.412109375 0">
					</path>
				</svg>
				<svg class="Line_50_fb" viewBox="0 0 78 3">
					<path fill="transparent" stroke="rgba(17,205,239,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_50_fb" d="M 0 0 L 78 0">
					</path>
				</svg>
			</div>
			<div id="ID90_">
				<span>90%</span>
			</div>
			<div id="Group_134_fd">
				<svg class="Ellipse_369_fe">
					<ellipse fill="rgba(247,250,252,1)" id="Ellipse_369_fe" rx="15" ry="15" cx="15" cy="15">
					</ellipse>
				</svg>
				<div id="more_vertical_ff" class="more_vertical">
					<svg class="Ellipse_348_fg">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_348_fg" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
					<svg class="Ellipse_349_fh">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_349_fh" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
					<svg class="Ellipse_350_fi">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_350_fi" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
				</div>
			</div>
		</div>
		<div id="Group_138">
			<svg class="Rectangle_1511_fk">
				<rect fill="rgba(247,250,252,1)" id="Rectangle_1511_fk" rx="0" ry="0" x="0" y="0" width="1100" height="75">
				</rect>
			</svg>
			<div id="Mask_Group_1_fl">
			<svg style="width:inherit;height:inherit;overflow:visible;">
				<rect fill="url(#Mask_Group_1_ho_pattern)" width="100%" height="100%"></rect>
					<pattern elementId="Mask_Group_1_ho" id="Mask_Group_1_ho_pattern" x="0" y="0" width="100%" height="100%">
						<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_ho_pattern.png" xlink:href="Mask_Group_1_ho_pattern.png"></image>
					</pattern>
					</svg>
				</div>
			<div id="React_Project">
				<span>React Project</span>
			</div>
			<div id="ID20_03_2020_fp">
				<span>20/03/2020</span>
			</div>
			<div id="Group_33_fq">
				<div id="Delayed">
					<span>Delayed</span>
				</div>
				<svg class="Ellipse_355_fs">
					<ellipse fill="rgba(251,99,64,1)" id="Ellipse_355_fs" rx="5" ry="5" cx="5" cy="5">
					</ellipse>
				</svg>
			</div>
			<div id="_4566">
				<span>$4566</span>
			</div>
			<div id="Group_133_fu">
				<div id="Mask_Group_1_fv">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hp_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hp" id="Mask_Group_1_hp_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hp_pattern.png" xlink:href="Mask_Group_1_hp_pattern.png"></image>
						</pattern>
						</svg>
					</div>
				<div id="Mask_Group_1_fy">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hq_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hq" id="Mask_Group_1_hq_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hq_pattern.png" xlink:href="Mask_Group_1_hq_pattern.png"></image>
						</pattern>
						</svg>
					</div>
				<div id="Mask_Group_1_f">
				<svg style="width:inherit;height:inherit;overflow:visible;">
					<rect fill="url(#Mask_Group_1_hr_pattern)" width="100%" height="100%"></rect>
						<pattern elementId="Mask_Group_1_hr" id="Mask_Group_1_hr_pattern" x="0" y="0" width="100%" height="100%">
							<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_hr_pattern.png" xlink:href="Mask_Group_1_hr_pattern.png"></image>
						</pattern>
						</svg>
					</div>
			</div>
			<div id="Group_50_f">
				<svg class="Line_49_f" viewBox="0 0 112.412 3">
					<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_49_f" d="M 0 0 L 112.412109375 0">
					</path>
				</svg>
				<svg class="Line_50_f" viewBox="0 0 82 3">
					<path fill="transparent" stroke="rgba(251,99,64,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_50_f" d="M 0 0 L 82 0">
					</path>
				</svg>
			</div>
			<div id="ID72_">
				<span>72%</span>
			</div>
			<div id="Group_134_f">
				<svg class="Ellipse_369_f">
					<ellipse fill="rgba(255,255,255,1)" id="Ellipse_369_f" rx="15" ry="15" cx="15" cy="15">
					</ellipse>
				</svg>
				<div id="more_vertical_ga" class="more_vertical">
					<svg class="Ellipse_348_gb">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_348_gb" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
					<svg class="Ellipse_349_gc">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_349_gc" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
					<svg class="Ellipse_350_gd">
						<ellipse fill="transparent" stroke="rgba(23,43,77,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_350_gd" rx="1" ry="1" cx="1" cy="1">
						</ellipse>
					</svg>
				</div>
			</div>
		</div>
		<div id="Group_150">
			<div id="Group_149">
				<div id="Group_139">
					<svg class="Ellipse_369_gh">
						<ellipse fill="rgba(255,255,255,1)" stroke="rgba(136,152,170,0.502)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_369_gh" rx="17.5" ry="17.5" cx="17.5" cy="17.5">
						</ellipse>
					</svg>
				</div>
				<div id="chevron_left" class="chevron_left">
					<svg class="chevron_left_gj" viewBox="9 6 6 12">
						<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="chevron_left_gj" d="M 15 18 L 9 12 L 15 6">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_148">
				<div id="Group_140">
					<svg class="Ellipse_369_gm">
						<ellipse fill="rgba(255,255,255,1)" stroke="rgba(136,152,170,0.502)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_369_gm" rx="17.5" ry="17.5" cx="17.5" cy="17.5">
						</ellipse>
					</svg>
				</div>
				<div id="chevron_right" class="chevron_right">
					<svg class="chevron_right_go" viewBox="9 6 6 12">
						<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="chevron_right_go" d="M 9 18 L 15 12 L 9 6">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_143">
				<div id="Group_141">
					<svg class="Ellipse_369_gr">
						<ellipse fill="rgba(119,100,228,1)" id="Ellipse_369_gr" rx="17.5" ry="17.5" cx="17.5" cy="17.5">
						</ellipse>
					</svg>
				</div>
				<div id="ID1">
					<span>1</span>
				</div>
			</div>
			<div id="Group_146">
				<div id="Group_142">
					<svg class="Ellipse_369_gv">
						<ellipse fill="rgba(255,255,255,1)" stroke="rgba(136,152,170,0.502)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_369_gv" rx="17.5" ry="17.5" cx="17.5" cy="17.5">
						</ellipse>
					</svg>
				</div>
				<div id="ID2">
					<span>2</span>
				</div>
			</div>
			<div id="Group_145">
				<div id="Group_144">
					<svg class="Ellipse_369_gz">
						<ellipse fill="rgba(255,255,255,1)" stroke="rgba(136,152,170,0.502)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_369_gz" rx="17.5" ry="17.5" cx="17.5" cy="17.5">
						</ellipse>
					</svg>
				</div>
				<div id="ID3">
					<span>3</span>
				</div>
			</div>
			<div id="Group_147">
				<div id="Group_144_g">
					<svg class="Ellipse_369_g">
						<ellipse fill="rgba(255,255,255,1)" stroke="rgba(136,152,170,0.502)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_369_g" rx="17.5" ry="17.5" cx="17.5" cy="17.5">
						</ellipse>
					</svg>
				</div>
				<div id="ID4">
					<span>4</span>
				</div>
			</div>
		</div>
		<div id="Group_128">
			<svg class="Rectangle_1498">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(119,100,228,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_1498" rx="5" ry="5" x="0" y="0" width="120" height="40">
				</rect>
			</svg>
			<div id="Export_Data">
				<span>Export Data</span>
			</div>
		</div>
		<div id="Group_343">
			<svg class="Path_489" viewBox="0 0 120 40">
				<path fill="rgba(119,100,228,1)" stroke="rgba(119,100,228,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Path_489" d="M 5 0 L 115 0 C 117.7614212036133 0 120 2.238576173782349 120 5 L 120 35 C 120 37.76142501831055 117.7614212036133 40 115 40 L 5 40 C 2.238576173782349 40 0 37.76142501831055 0 35 L 0 5 C 0 2.238576173782349 2.238576173782349 0 5 0 Z">
				</path>
			</svg>
			<div id="New_Project">
				<span>New Project</span>
			</div>
		</div>
	</div>
</div>
</body>
</html>