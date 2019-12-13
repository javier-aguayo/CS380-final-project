<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: Dashboard;
		--web-view-id: Dashboard;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
		--web-page-font: Gotham;
	}
	:root {
		--web-view-ids: Dashboard;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Dashboard {
		position: absolute;
		background: #E5E5E5;
		width: 1366px;
		height: 768px;
		font-family: Gotham;
		background-color: rgba(241,243,249,1);
		overflow: hidden;
		--web-view-name: Dashboard;
		--web-view-id: Dashboard;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
		--web-page-font: Gotham;
	}
	#Dashboard_ {
		position: absolute;
		width: 1884.232px;
		height: 768px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_1493 {
		position: absolute;
		overflow: visible;
		width: 1121px;
		height: 189px;
		left: 245px;
		top: 0px;
	}
	#Group_15 {
		position: absolute;
		width: 247px;
		height: 50px;
		left: 275px;
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
	#Search_bd {
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
	#Group_173 {
		position: absolute;
		width: 245px;
		height: 768px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_1490 {
		position: absolute;
		overflow: visible;
		width: 245px;
		height: 768px;
		left: 0px;
		top: 0px;
	}
	#Group_7 {
		position: absolute;
		width: 214px;
		height: 25px;
		left: 20px;
		top: 24px;
		overflow: visible;
	}
	#bar_chart_2 {
		transform: translate(-20px, -24px) matrix(1,0,0,1,218,25) rotate(-90deg);
		transform-origin: center;
		position: absolute;
		width: 14px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Line_1 {
		overflow: visible;
		position: absolute;
		width: 12px;
		height: 2px;
		left: 7px;
		top: 1px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Line_2 {
		overflow: visible;
		position: absolute;
		width: 18px;
		height: 2px;
		left: 1px;
		top: 7px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Line_3 {
		overflow: visible;
		position: absolute;
		width: 8px;
		height: 2px;
		left: 11px;
		top: 13px;
		transform: matrix(1,0,0,1,0,0);
	}
	#PMS {
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 55px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		color: rgba(255,255,255,1);
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
	#Group_288 {
		position: absolute;
		width: 1639.232px;
		height: 617.232px;
		left: 245px;
		top: 150.768px;
		overflow: visible;
	}
	#Group_290 {
		position: absolute;
		width: 1252px;
		height: 582px;
		left: 0px;
		top: 1.232px;
		overflow: visible;
	}
	.Rectangle_75 {
		filter: drop-shadow(0px 9px 26px rgba(0, 0, 0, 0.027));
		position: absolute;
		overflow: visible;
		width: 1330px;
		height: 660px;
		left: 0px;
		top: 0px;
	}
	#Group_292 {
		position: absolute;
		width: 86.901px;
		height: 577.98px;
		left: 173.5px;
		top: 2px;
		overflow: visible;
	}
	#Line_23 {
		opacity: 0.1;
	}
	.Line_23 {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 577.98px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Mon__7_1 {
		position: absolute;
		left: 20.901px;
		top: 10.981px;
		overflow: visible;
		width: 67px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Group_40 {
		position: absolute;
		width: 81.195px;
		height: 578.019px;
		left: 286.052px;
		top: 1px;
		overflow: visible;
	}
	#Line_23_b {
		opacity: 0.2;
	}
	.Line_23_b {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 578.019px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Tue__7_2 {
		position: absolute;
		left: 19.195px;
		top: 10.981px;
		overflow: visible;
		width: 63px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Group_41 {
		position: absolute;
		width: 87.195px;
		height: 578.019px;
		left: 387.899px;
		top: 1px;
		overflow: visible;
	}
	#Line_23_ca {
		opacity: 0.2;
	}
	.Line_23_ca {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 578.019px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Wed__7_3 {
		position: absolute;
		left: 19.195px;
		top: 10.981px;
		overflow: visible;
		width: 69px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Group_42 {
		position: absolute;
		width: 81.195px;
		height: 578.019px;
		left: 495.745px;
		top: 2px;
		overflow: visible;
	}
	#Line_23_cb {
		opacity: 0.2;
	}
	.Line_23_cb {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 578.019px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Thu__7_4 {
		position: absolute;
		left: 19.195px;
		top: 10.981px;
		overflow: visible;
		width: 63px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Line_23_cd {
		opacity: 0.2;
	}
	.Line_23_cd {
		overflow: visible;
		position: absolute;
		width: 1.092px;
		height: 577.98px;
		left: 602.5px;
		top: 2px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Fri__7_5 {
		position: absolute;
		left: 637.142px;
		top: 12.981px;
		overflow: visible;
		width: 54px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Group_289 {
		position: absolute;
		width: 92.015px;
		height: 577.98px;
		left: 724.438px;
		top: 1px;
		overflow: visible;
	}
	#Line_23_cg {
		opacity: 0.2;
	}
	.Line_23_cg {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 577.98px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Sat__7_6 {
		position: absolute;
		left: 33.015px;
		top: 10.981px;
		overflow: visible;
		width: 60px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Group_291 {
		position: absolute;
		width: 89.873px;
		height: 577.98px;
		left: 850.285px;
		top: 1px;
		overflow: visible;
	}
	#Line_23_cj {
		opacity: 0.2;
	}
	.Line_23_cj {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 577.98px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Sun__7_7 {
		position: absolute;
		left: 26.873px;
		top: 10.981px;
		overflow: visible;
		width: 64px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Group_46 {
		position: absolute;
		width: 85.195px;
		height: 577.98px;
		left: 956.131px;
		top: 2px;
		overflow: visible;
	}
	#Line_23_cm {
		opacity: 0.2;
	}
	.Line_23_cm {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 577.98px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Mon__7_8 {
		position: absolute;
		left: 19.195px;
		top: 10.981px;
		overflow: visible;
		width: 67px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Line_23_co {
		opacity: 0.2;
	}
	.Line_23_co {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 577.98px;
		left: 1056.978px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Tue__7_9 {
		position: absolute;
		left: 1082.314px;
		top: 10.981px;
		overflow: visible;
		width: 63px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Line_23_cq {
		opacity: 0.2;
	}
	.Line_23_cq {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 577.98px;
		left: 1156.824px;
		top: 2px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Wed__7_10 {
		position: absolute;
		left: 1171.412px;
		top: 12.981px;
		overflow: visible;
		width: 78px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Line_23_cs {
		opacity: 0.2;
	}
	.Line_23_cs {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 577.98px;
		left: 1260.67px;
		top: 2px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Thu__7_11 {
		position: absolute;
		left: 1276.794px;
		top: 12.981px;
		overflow: visible;
		width: 72px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Line_24 {
		opacity: 0.1;
	}
	.Line_24 {
		overflow: visible;
		position: absolute;
		width: 1638.465px;
		height: 1px;
		left: 0.768px;
		top: 44.996px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Line_26 {
		opacity: 0.2;
	}
	.Line_26 {
		overflow: visible;
		position: absolute;
		width: 1638.465px;
		height: 1px;
		left: 0.768px;
		top: 265.414px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Line_27 {
		opacity: 0.2;
	}
	.Line_27 {
		overflow: visible;
		position: absolute;
		width: 1638.465px;
		height: 1px;
		left: 0.768px;
		top: 421.909px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Line_28 {
		opacity: 0.2;
	}
	.Line_28 {
		overflow: visible;
		position: absolute;
		width: 1638.465px;
		height: 1px;
		left: 0.768px;
		top: 580.019px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Task_1 {
		position: absolute;
		left: 85.992px;
		top: 69.798px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Task_2 {
		position: absolute;
		left: 85.992px;
		top: 123.132px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Task_3 {
		position: absolute;
		left: 85.992px;
		top: 175.827px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Task_4 {
		position: absolute;
		left: 85.992px;
		top: 228.523px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Task_5 {
		position: absolute;
		left: 85.992px;
		top: 281.219px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Task_6 {
		position: absolute;
		left: 85.992px;
		top: 333.914px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Task_7 {
		position: absolute;
		left: 85.992px;
		top: 386.61px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Task_8 {
		position: absolute;
		left: 85.992px;
		top: 439.306px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Task_9 {
		position: absolute;
		left: 85.992px;
		top: 492.723px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Task_10 {
		position: absolute;
		left: 85.992px;
		top: 544.933px;
		overflow: visible;
		width: 63px;
		white-space: nowrap;
		line-height: 24px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(70,66,66,1);
	}
	#Line_25_c {
		opacity: 0.1;
	}
	.Line_25_c {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 577.98px;
		left: 60.656px;
		top: 2px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Deliverable_1 {
		transform: translate(-140px, -144.507px) matrix(1,0,0,1,129.6386,288.7931) rotate(90deg);
		transform-origin: center;
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 101px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(14,57,142,1);
	}
	#Deliverable_2 {
		transform: translate(-140px, -144.507px) matrix(1,0,0,1,133.1386,470.4763) rotate(90deg);
		transform-origin: center;
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 95px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(14,57,142,1);
	}
	#Deliverable_3 {
		transform: translate(-140px, -144.507px) matrix(1,0,0,1,129.6386,632.412) rotate(90deg);
		transform-origin: center;
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 101px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(14,57,142,1);
	}
	#Group_279 {
		position: absolute;
		width: 550.558px;
		height: 26.105px;
		left: 173.401px;
		top: 67.798px;
		overflow: visible;
	}
	#Rectangle_76 {
		opacity: 0.2;
	}
	.Rectangle_76 {
		position: absolute;
		overflow: visible;
		width: 550.558px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_77 {
		position: absolute;
		overflow: visible;
		width: 385.431px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	#ID70_ {
		position: absolute;
		left: 340.899px;
		top: 4.071px;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(255,255,255,1);
	}
	#Group_278 {
		position: absolute;
		width: 563.558px;
		height: 26.105px;
		left: 286.142px;
		top: 113.946px;
		overflow: visible;
	}
	#Group_277 {
		position: absolute;
		width: 563.558px;
		height: 26.105px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_87 {
		opacity: 0.2;
	}
	.Rectangle_87 {
		position: absolute;
		overflow: visible;
		width: 563.558px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_86 {
		position: absolute;
		overflow: visible;
		width: 385.431px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	#ID70__dk {
		position: absolute;
		left: 340.899px;
		top: 4.071px;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(255,255,255,1);
	}
	#Group_282 {
		position: absolute;
		width: 947.981px;
		height: 26.105px;
		left: 285.401px;
		top: 228.448px;
		overflow: visible;
	}
	#Rectangle_80 {
		opacity: 0.2;
	}
	.Rectangle_80 {
		position: absolute;
		overflow: visible;
		width: 947.981px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_81 {
		position: absolute;
		overflow: visible;
		width: 377.753px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	#ID40_ {
		position: absolute;
		left: 330.15px;
		top: 4.071px;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(255,255,255,1);
	}
	#Group_284 {
		position: absolute;
		width: 770.663px;
		height: 38.071px;
		left: 286.314px;
		top: 543.326px;
		overflow: visible;
	}
	#Rectangle_89 {
		opacity: 0.2;
	}
	.Rectangle_89 {
		position: absolute;
		overflow: visible;
		width: 770.663px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_88 {
		position: absolute;
		overflow: visible;
		width: 377.753px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	#ID50__ {
		position: absolute;
		left: 242.971px;
		top: 4.071px;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(255,255,255,1);
	}
	#Group_280 {
		position: absolute;
		width: 563.558px;
		height: 26.105px;
		left: 495.401px;
		top: 276.414px;
		overflow: visible;
	}
	#Rectangle_76_du {
		opacity: 0.2;
	}
	.Rectangle_76_du {
		position: absolute;
		overflow: visible;
		width: 563.558px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_77_dv {
		position: absolute;
		overflow: visible;
		width: 385.431px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	#ID70__dw {
		position: absolute;
		left: 340.899px;
		top: 4.071px;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(255,255,255,1);
	}
	#Group_281 {
		position: absolute;
		width: 563.558px;
		height: 26.105px;
		left: 392.401px;
		top: 324.849px;
		overflow: visible;
	}
	#Rectangle_76_dy {
		opacity: 0.2;
	}
	.Rectangle_76_dy {
		position: absolute;
		overflow: visible;
		width: 563.558px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_77_dz {
		position: absolute;
		overflow: visible;
		width: 385.431px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	#ID70__d {
		position: absolute;
		left: 340.899px;
		top: 4.071px;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(255,255,255,1);
	}
	#Group_283 {
		position: absolute;
		width: 883.599px;
		height: 26.105px;
		left: 173.401px;
		top: 380.905px;
		overflow: visible;
	}
	#Rectangle_80_d {
		opacity: 0.2;
	}
	.Rectangle_80_d {
		position: absolute;
		overflow: visible;
		width: 883.599px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_81_d {
		position: absolute;
		overflow: visible;
		width: 377.753px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	#ID40__d {
		position: absolute;
		left: 301.329px;
		top: 4.071px;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(255,255,255,1);
	}
	#Group_286 {
		position: absolute;
		width: 563.558px;
		height: 26.105px;
		left: 443.142px;
		top: 445.002px;
		overflow: visible;
	}
	#Group_277_d {
		position: absolute;
		width: 563.558px;
		height: 26.105px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_87_d {
		opacity: 0.2;
	}
	.Rectangle_87_d {
		position: absolute;
		overflow: visible;
		width: 563.558px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_86_d {
		position: absolute;
		overflow: visible;
		width: 385.431px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	#ID70__ea {
		position: absolute;
		left: 340.899px;
		top: 4.071px;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(255,255,255,1);
	}
	#Group_287 {
		position: absolute;
		width: 551.779px;
		height: 26.105px;
		left: 173.142px;
		top: 494.09px;
		overflow: visible;
	}
	#Group_277_eb {
		position: absolute;
		width: 551.779px;
		height: 26.105px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_87_ec {
		opacity: 0.2;
	}
	.Rectangle_87_ec {
		position: absolute;
		overflow: visible;
		width: 551.779px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_86_ed {
		position: absolute;
		overflow: visible;
		width: 373.652px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	#ID70__ee {
		position: absolute;
		left: 333.316px;
		top: 4.071px;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(255,255,255,1);
	}
	#Group_293 {
		position: absolute;
		width: 86.901px;
		height: 577.98px;
		left: 173.5px;
		top: 2px;
		overflow: visible;
	}
	#Line_23_eg {
		opacity: 0.1;
	}
	.Line_23_eg {
		overflow: visible;
		position: absolute;
		width: 1px;
		height: 577.98px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Mon__7_1_eh {
		position: absolute;
		left: 20.901px;
		top: 10.981px;
		overflow: visible;
		width: 67px;
		white-space: nowrap;
		line-height: 23px;
		margin-top: -3px;
		text-align: left;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(70,66,66,1);
	}
	#Group_294 {
		position: absolute;
		width: 568.558px;
		height: 26.105px;
		left: 387.401px;
		top: 169.798px;
		overflow: visible;
	}
	#Rectangle_76_ej {
		opacity: 0.2;
	}
	.Rectangle_76_ej {
		position: absolute;
		overflow: visible;
		width: 568.558px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	.Rectangle_77_ek {
		position: absolute;
		overflow: visible;
		width: 403.431px;
		height: 26.105px;
		left: 0px;
		top: 0px;
	}
	#ID70__el {
		position: absolute;
		left: 352.778px;
		top: 4.071px;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: center;
		font-family: Cera Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(255,255,255,1);
	}
	#Component_69___3 {
		opacity: 0.3;
		transform: translate(-140px, -144.507px) matrix(1,0,0,1,671,235.7397) rotate(90deg);
		transform-origin: center;
		position: absolute;
		width: 35px;
		height: 1017px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_1529 {
		width: 1017px;
		height: 35px;
		position: absolute;
		overflow: visible;
		transform: translate(1017px, 0px) matrix(1,0,0,1,-491,491) rotate(90deg);
		transform-origin: center;
	}
	#button_next {
		position: absolute;
		width: 37px;
		height: 37px;
		left: 1296px;
		top: 731px;
		overflow: visible;
	}
	.Rectangle_156 {
		position: absolute;
		overflow: visible;
		width: 37px;
		height: 37px;
		left: 0px;
		top: 0px;
	}
	.Path_294 {
		overflow: visible;
		position: absolute;
		width: 8.672px;
		height: 13.694px;
		left: 15.092px;
		top: 12.542px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Rectangle_1527 {
		position: absolute;
		overflow: visible;
		width: 68px;
		height: 35px;
		left: 280px;
		top: 733px;
	}
	#button_previous {
		position: absolute;
		width: 35px;
		height: 35px;
		left: 245px;
		top: 733px;
		overflow: visible;
	}
	.Rectangle_156_et {
		position: absolute;
		overflow: visible;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
	}
	.Path_294_eu {
		overflow: visible;
		position: absolute;
		width: 8.669px;
		height: 13.694px;
		left: 13.5px;
		top: 11.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Simple_Cards__Quick_Tip_ {
		position: absolute;
		width: 449px;
		height: 64px;
		left: 917px;
		top: 87px;
		overflow: visible;
	}
	#Total_Revenue {
		position: absolute;
		width: 449px;
		height: 64px;
		left: 0px;
		top: 0px;
		overflow: hidden;
	}
	#Total_Revenue_ex {
		position: absolute;
		width: 116px;
		height: 47px;
		left: 9px;
		top: 7px;
		overflow: visible;
	}
	.BG {
		filter: drop-shadow(0px 2px 6px rgba(0, 0, 0, 0.039));
		position: absolute;
		overflow: visible;
		width: 134px;
		height: 65px;
		left: 0px;
		top: 0px;
	}
	.menu_icon {
		overflow: visible;
		position: absolute;
		width: 16px;
		height: 4px;
		left: 80px;
		top: 21px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Total_Revenue_e {
		position: absolute;
		width: 67px;
		height: 45px;
		left: 13px;
		top: 1px;
		overflow: visible;
	}
	#Deliverables {
		position: absolute;
		left: 0px;
		top: 27px;
		overflow: visible;
		width: 68px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Source Sans Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(77,79,92,1);
	}
	#ID16 {
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 19px;
		white-space: nowrap;
		text-align: left;
		font-family: Source Sans Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(86,217,254,1);
	}
	#Total_Revenue_fa {
		position: absolute;
		width: 116px;
		height: 47px;
		left: 163px;
		top: 7px;
		overflow: visible;
	}
	.BG_e {
		filter: drop-shadow(0px 2px 6px rgba(0, 0, 0, 0.039));
		position: absolute;
		overflow: visible;
		width: 134px;
		height: 65px;
		left: 0px;
		top: 0px;
	}
	.menu_icon_e {
		overflow: visible;
		position: absolute;
		width: 16px;
		height: 4px;
		left: 80px;
		top: 21px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Total_Revenue_fb {
		position: absolute;
		width: 30px;
		height: 45px;
		left: 13px;
		top: 1px;
		overflow: visible;
	}
	#Tasks {
		position: absolute;
		left: 0px;
		top: 27px;
		overflow: visible;
		width: 31px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Source Sans Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(77,79,92,1);
	}
	#ID67 {
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 19px;
		white-space: nowrap;
		text-align: left;
		font-family: Source Sans Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(86,217,254,1);
	}
	#Total_Revenue_fc {
		position: absolute;
		width: 116px;
		height: 47px;
		left: 317px;
		top: 7px;
		overflow: visible;
	}
	.BG_fa {
		filter: drop-shadow(0px 2px 6px rgba(0, 0, 0, 0.039));
		position: absolute;
		overflow: visible;
		width: 134px;
		height: 65px;
		left: 0px;
		top: 0px;
	}
	.menu_icon_fb {
		overflow: visible;
		position: absolute;
		width: 16px;
		height: 4px;
		left: 80px;
		top: 21px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Total_Revenue_fd {
		position: absolute;
		width: 33px;
		height: 45px;
		left: 13px;
		top: 1px;
		overflow: visible;
	}
	#Issues {
		position: absolute;
		left: 0px;
		top: 27px;
		overflow: visible;
		width: 34px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Source Sans Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(77,79,92,1);
	}
	#ID9 {
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 10px;
		white-space: nowrap;
		text-align: left;
		font-family: Source Sans Pro, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(86,217,254,1);
	}
	#Repeat_Grid_5 {
		position: absolute;
		width: 225px;
		height: 494px;
		left: 10px;
		top: 83px;
		overflow: hidden;
	}
	#Group_295 {
		position: absolute;
		width: 225px;
		height: 494px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_5 {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_1491 {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Home {
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 36px;
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
	#Group_6 {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 55px;
		overflow: visible;
	}
	.Rectangle_1492 {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Dashboard_fm {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 65px;
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
	#Group_8 {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 110px;
		overflow: visible;
	}
	.Rectangle_1492_fo {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Deliverables_fp {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 73px;
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
	#Group_9 {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 165px;
		overflow: visible;
	}
	.Rectangle_1492_fr {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Tasks_fs {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 34px;
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
	#Group_10 {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 220px;
		overflow: visible;
	}
	.Rectangle_1492_fu {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Issues_fv {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 39px;
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
	#Group_11 {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 275px;
		overflow: visible;
	}
	.Rectangle_1492_fx {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Changes {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 53px;
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
	#Group_12 {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 330px;
		overflow: visible;
	}
	.Rectangle_1492_f {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#References {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 67px;
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
	#Group_13 {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 385px;
		overflow: visible;
	}
	.Rectangle_1492_ga {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Resources {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 63px;
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
	#Group_13_f {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 439px;
		overflow: visible;
	}
	.Rectangle_1492_gb {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Action_Items {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 73px;
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
	#Repeat_Grid_4 {
		position: absolute;
		width: 225px;
		height: 174px;
		left: 10px;
		top: 577px;
		overflow: hidden;
	}
	#Group_296 {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_1492_gc {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Requirements {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 82px;
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
	#Group_296_gc {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 55px;
		overflow: visible;
	}
	.Rectangle_1492_gd {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Decisions {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 57px;
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
	#Group_296_gf {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 110px;
		overflow: visible;
	}
	.Rectangle_1492_gg {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Risks {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 33px;
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
	#Group_296_gi {
		position: absolute;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 165px;
		overflow: visible;
	}
	.Rectangle_1492_gj {
		position: absolute;
		overflow: visible;
		width: 225px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#Risks_gk {
		opacity: 0.8;
		position: absolute;
		left: 50px;
		top: 23px;
		overflow: visible;
		width: 33px;
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
	#Scroll_Bar {
		position: absolute;
		width: 35px;
		height: 583px;
		left: 1331px;
		top: 151px;
		overflow: visible;
	}
	#Component_69___1 {
		position: absolute;
		width: 35px;
		height: 513px;
		left: 0px;
		top: 35px;
		overflow: visible;
	}
	.Rectangle_1529_gn {
		width: 513px;
		height: 35px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, 0px) matrix(1,0,0,1,-239,239) rotate(90deg);
		transform-origin: center;
	}
	#button_previous_go {
		transform: translate(-1331px, -151px) matrix(1,0,0,1,1331,151) rotate(90deg);
		transform-origin: center;
		position: absolute;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_156_gp {
		position: absolute;
		overflow: visible;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
	}
	.Path_294_gq {
		overflow: visible;
		position: absolute;
		width: 13.694px;
		height: 8.669px;
		left: 10.566px;
		top: 13.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Rectangle_1528 {
		width: 190px;
		height: 35px;
		position: absolute;
		overflow: visible;
		transform: translate(-1331px, -151px) matrix(1,0,0,1,1253.5,263.5) rotate(90deg);
		transform-origin: center;
	}
	#button_next_gs {
		transform: translate(-1331px, -151px) matrix(1,0,0,1,1331,699) rotate(90deg);
		transform-origin: center;
		position: absolute;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_156_gt {
		position: absolute;
		overflow: visible;
		width: 35px;
		height: 35px;
		left: 0px;
		top: 0px;
	}
	.Path_294_gu {
		overflow: visible;
		position: absolute;
		width: 13.694px;
		height: 8.672px;
		left: 10.566px;
		top: 14.067px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Some_Project {
		position: absolute;
		left: 262px;
		top: 101px;
		overflow: visible;
		width: 161px;
		white-space: nowrap;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		color: rgba(255,255,255,1);
	}
	#Group_311 {
		position: absolute;
		width: 145px;
		height: 22px;
		left: 455px;
		top: 101px;
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
	#Home_g {
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
	#_ {
		position: absolute;
		left: 77px;
		top: 7px;
		overflow: visible;
		width: 5px;
		white-space: nowrap;
		line-height: 13px;
		margin-top: -1px;
		text-align: left;
		font-family: Gotham, Gotham;
		font-style: normal;
		font-weight: normal;
		font-size: 11px;
		color: rgba(246,249,252,1);
	}
	#Dashboard_g {
		position: absolute;
		left: 91px;
		top: 7px;
		overflow: visible;
		width: 55px;
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
<div id="Dashboard">
	<div id="Dashboard_">
		<svg class="Rectangle_1493">
			<rect fill="rgba(23,43,77,1)" id="Rectangle_1493" rx="0" ry="0" x="0" y="0" width="1121" height="189">
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
			<div id="Search_bd">
				<span>Search</span>
			</div>
		</div>
		<div id="Group_173">
			<svg class="Rectangle_1490">
				<rect fill="rgba(31,31,31,1)" id="Rectangle_1490" rx="0" ry="0" x="0" y="0" width="245" height="768">
				</rect>
			</svg>
			<div id="Group_7">
				<div id="bar_chart_2" class="bar_chart_2">
					<svg class="Line_1" viewBox="0 0 2 10">
						<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Line_1" d="M 0 10 L 0 0">
						</path>
					</svg>
					<svg class="Line_2" viewBox="0 0 2 16">
						<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Line_2" d="M 0 16 L 0 0">
						</path>
					</svg>
					<svg class="Line_3" viewBox="0 0 2 6">
						<path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="2px" stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="4" shape-rendering="auto" id="Line_3" d="M 0 6 L 0 0">
						</path>
					</svg>
				</div>
				<div id="PMS">
					<span>PMS</span>
				</div>
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
				<rect fill="url(#Mask_Group_1_g_pattern)" width="100%" height="100%"></rect>
					<pattern elementId="Mask_Group_1_g" id="Mask_Group_1_g_pattern" x="0" y="0" width="100%" height="100%">
						<image x="0" y="0" width="100%" height="100%" href="Mask_Group_1_g_pattern.png" xlink:href="Mask_Group_1_g_pattern.png"></image>
					</pattern>
					</svg>
				</div>
			<div id="Arya_Stark">
				<span>Arya Stark</span>
			</div>
		</div>
		<div id="Group_288">
			<div id="Group_290">
				<svg class="Rectangle_75">
					<rect fill="rgba(255,255,255,1)" id="Rectangle_75" rx="12" ry="12" x="0" y="0" width="1252" height="582">
					</rect>
				</svg>
			</div>
			<div id="Group_292">
				<svg class="Line_23" viewBox="0 0 1 577.98">
					<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23" d="M 0 0 L 0 577.9795532226562">
					</path>
				</svg>
				<div id="Mon__7_1">
					<span>Mon, 7/1</span>
				</div>
			</div>
			<div id="Group_40">
				<svg class="Line_23_b" viewBox="0 0 1 578.019">
					<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_b" d="M 0 0 L 0 578.0186767578125">
					</path>
				</svg>
				<div id="Tue__7_2">
					<span>Tue, 7/2</span>
				</div>
			</div>
			<div id="Group_41">
				<svg class="Line_23_ca" viewBox="0 0 1 578.019">
					<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_ca" d="M 0 0 L 0 578.0186767578125">
					</path>
				</svg>
				<div id="Wed__7_3">
					<span>Wed, 7/3</span>
				</div>
			</div>
			<div id="Group_42">
				<svg class="Line_23_cb" viewBox="0 0 1 578.019">
					<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_cb" d="M 0 0 L 0 578.0186767578125">
					</path>
				</svg>
				<div id="Thu__7_4">
					<span>Thu, 7/4</span>
				</div>
			</div>
			<svg class="Line_23_cd" viewBox="0 0 0.092 577.98">
				<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_cd" d="M 0.091796875 0 L 0 577.9795532226562">
				</path>
			</svg>
			<div id="Fri__7_5">
				<span>Fri, 7/5</span>
			</div>
			<div id="Group_289">
				<svg class="Line_23_cg" viewBox="0 0 1 577.98">
					<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_cg" d="M 0 0 L 0 577.9795532226562">
					</path>
				</svg>
				<div id="Sat__7_6">
					<span>Sat, 7/6</span>
				</div>
			</div>
			<div id="Group_291">
				<svg class="Line_23_cj" viewBox="0 0 1 577.98">
					<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_cj" d="M 0 0 L 0 577.9795532226562">
					</path>
				</svg>
				<div id="Sun__7_7">
					<span>Sun, 7/7</span>
				</div>
			</div>
			<div id="Group_46">
				<svg class="Line_23_cm" viewBox="0 0 1 577.98">
					<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_cm" d="M 0 0 L 0 577.9795532226562">
					</path>
				</svg>
				<div id="Mon__7_8">
					<span>Mon, 7/8</span>
				</div>
			</div>
			<svg class="Line_23_co" viewBox="0 0 1 577.98">
				<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_co" d="M 0 0 L 0 577.9795532226562">
				</path>
			</svg>
			<div id="Tue__7_9">
				<span>Tue, 7/9</span>
			</div>
			<svg class="Line_23_cq" viewBox="0 0 1 577.98">
				<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_cq" d="M 0 0 L 0 577.9795532226562">
				</path>
			</svg>
			<div id="Wed__7_10">
				<span>Wed, 7/10</span>
			</div>
			<svg class="Line_23_cs" viewBox="0 0 1 577.98">
				<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_cs" d="M 0 0 L 0 577.9795532226562">
				</path>
			</svg>
			<div id="Thu__7_11">
				<span>Thu, 7/11</span>
			</div>
			<svg class="Line_24" viewBox="0 0 1638.464 1">
				<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_24" d="M 0 0 L 1638.46435546875 0">
				</path>
			</svg>
			<svg class="Line_26" viewBox="0 0 1638.464 1">
				<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_26" d="M 0 0 L 1638.46435546875 0">
				</path>
			</svg>
			<svg class="Line_27" viewBox="0 0 1638.464 1">
				<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_27" d="M 0 0 L 1638.46435546875 0">
				</path>
			</svg>
			<svg class="Line_28" viewBox="0 0 1638.464 1">
				<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_28" d="M 0 0 L 1638.46435546875 0">
				</path>
			</svg>
			<div id="Task_1">
				<span>Task 1</span>
			</div>
			<div id="Task_2">
				<span>Task 2</span>
			</div>
			<div id="Task_3">
				<span>Task 3</span>
			</div>
			<div id="Task_4">
				<span>Task 4</span>
			</div>
			<div id="Task_5">
				<span>Task 5</span>
			</div>
			<div id="Task_6">
				<span>Task 6</span>
			</div>
			<div id="Task_7">
				<span>Task 7</span>
			</div>
			<div id="Task_8">
				<span>Task 8</span>
			</div>
			<div id="Task_9">
				<span>Task 9</span>
			</div>
			<div id="Task_10">
				<span>Task 10</span>
			</div>
			<svg class="Line_25_c" viewBox="0 0 1 577.98">
				<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_25_c" d="M 0 0 L 0 577.9795532226562">
				</path>
			</svg>
			<div id="Deliverable_1">
				<span>Deliverable 1</span>
			</div>
			<div id="Deliverable_2">
				<span>Deliverable 2</span>
			</div>
			<div id="Deliverable_3">
				<span>Deliverable 3</span>
			</div>
			<div id="Group_279">
				<svg class="Rectangle_76">
					<rect fill="rgba(19,218,181,1)" id="Rectangle_76" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="550.558" height="26.105">
					</rect>
				</svg>
				<svg class="Rectangle_77">
					<rect fill="rgba(19,218,181,1)" id="Rectangle_77" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="385.431" height="26.105">
					</rect>
				</svg>
				<div id="ID70_">
					<span>70%</span>
				</div>
			</div>
			<div id="Group_278">
				<div id="Group_277">
					<svg class="Rectangle_87">
						<rect fill="rgba(255,136,17,1)" id="Rectangle_87" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="563.558" height="26.105">
						</rect>
					</svg>
					<svg class="Rectangle_86">
						<rect fill="rgba(255,136,17,1)" id="Rectangle_86" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="385.431" height="26.105">
						</rect>
					</svg>
				</div>
				<div id="ID70__dk">
					<span>70%</span>
				</div>
			</div>
			<div id="Group_282">
				<svg class="Rectangle_80">
					<rect fill="rgba(123,123,123,1)" id="Rectangle_80" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="947.981" height="26.105">
					</rect>
				</svg>
				<svg class="Rectangle_81">
					<rect fill="rgba(123,123,123,1)" id="Rectangle_81" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="377.753" height="26.105">
					</rect>
				</svg>
				<div id="ID40_">
					<span>40%</span>
				</div>
			</div>
			<div id="Group_284">
				<svg class="Rectangle_89">
					<rect fill="rgba(123,123,123,1)" id="Rectangle_89" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="770.663" height="26.105">
					</rect>
				</svg>
				<svg class="Rectangle_88">
					<rect fill="rgba(123,123,123,1)" id="Rectangle_88" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="377.753" height="26.105">
					</rect>
				</svg>
				<div id="ID50__">
					<span>50%</span><br>
				</div>
			</div>
			<div id="Group_280">
				<svg class="Rectangle_76_du">
					<rect fill="rgba(19,218,181,1)" id="Rectangle_76_du" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="563.558" height="26.105">
					</rect>
				</svg>
				<svg class="Rectangle_77_dv">
					<rect fill="rgba(19,218,181,1)" id="Rectangle_77_dv" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="385.431" height="26.105">
					</rect>
				</svg>
				<div id="ID70__dw">
					<span>70%</span>
				</div>
			</div>
			<div id="Group_281">
				<svg class="Rectangle_76_dy">
					<rect fill="rgba(19,218,181,1)" id="Rectangle_76_dy" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="563.558" height="26.105">
					</rect>
				</svg>
				<svg class="Rectangle_77_dz">
					<rect fill="rgba(19,218,181,1)" id="Rectangle_77_dz" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="385.431" height="26.105">
					</rect>
				</svg>
				<div id="ID70__d">
					<span>70%</span>
				</div>
			</div>
			<div id="Group_283">
				<svg class="Rectangle_80_d">
					<rect fill="rgba(123,123,123,1)" id="Rectangle_80_d" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="883.599" height="26.105">
					</rect>
				</svg>
				<svg class="Rectangle_81_d">
					<rect fill="rgba(123,123,123,1)" id="Rectangle_81_d" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="377.753" height="26.105">
					</rect>
				</svg>
				<div id="ID40__d">
					<span>40%</span>
				</div>
			</div>
			<div id="Group_286">
				<div id="Group_277_d">
					<svg class="Rectangle_87_d">
						<rect fill="rgba(255,136,17,1)" id="Rectangle_87_d" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="563.558" height="26.105">
						</rect>
					</svg>
					<svg class="Rectangle_86_d">
						<rect fill="rgba(255,136,17,1)" id="Rectangle_86_d" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="385.431" height="26.105">
						</rect>
					</svg>
				</div>
				<div id="ID70__ea">
					<span>70%</span>
				</div>
			</div>
			<div id="Group_287">
				<div id="Group_277_eb">
					<svg class="Rectangle_87_ec">
						<rect fill="rgba(255,136,17,1)" id="Rectangle_87_ec" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="551.779" height="26.105">
						</rect>
					</svg>
					<svg class="Rectangle_86_ed">
						<rect fill="rgba(255,136,17,1)" id="Rectangle_86_ed" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="373.652" height="26.105">
						</rect>
					</svg>
				</div>
				<div id="ID70__ee">
					<span>70%</span>
				</div>
			</div>
			<div id="Group_293">
				<svg class="Line_23_eg" viewBox="0 0 1 577.98">
					<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_23_eg" d="M 0 0 L 0 577.9795532226562">
					</path>
				</svg>
				<div id="Mon__7_1_eh">
					<span>Mon, 7/1</span>
				</div>
			</div>
			<div id="Group_294">
				<svg class="Rectangle_76_ej">
					<rect fill="rgba(19,218,181,1)" id="Rectangle_76_ej" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="568.558" height="26.105">
					</rect>
				</svg>
				<svg class="Rectangle_77_ek">
					<rect fill="rgba(19,218,181,1)" id="Rectangle_77_ek" rx="13.052434921264648" ry="13.052434921264648" x="0" y="0" width="403.431" height="26.105">
					</rect>
				</svg>
				<div id="ID70__el">
					<span>70%</span>
				</div>
			</div>
			<div id="Component_69___3" class="Component_69___3">
				<svg class="Rectangle_1529">
					<rect fill="rgba(218,220,225,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_1529" rx="0" ry="0" x="0" y="0" width="1017" height="35">
					</rect>
				</svg>
			</div>
		</div>
		<div id="button_next" class="button_next">
			<svg class="Rectangle_156">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(232,233,236,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_156" rx="4" ry="4" x="0" y="0" width="37" height="37">
				</rect>
			</svg>
			<svg class="Path_294" viewBox="1803.616 4362.342 7.57 12.934">
				<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Path_294" d="M 1803.61572265625 4362.341796875 C 1803.61572265625 4362.341796875 1811.185791015625 4369.0732421875 1811.185791015625 4369.0732421875 C 1811.185791015625 4369.0732421875 1803.61572265625 4375.275390625 1803.61572265625 4375.275390625">
				</path>
			</svg>
		</div>
		<svg class="Rectangle_1527">
			<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_1527" rx="0" ry="0" x="0" y="0" width="68" height="35">
			</rect>
		</svg>
		<div id="button_previous" class="button_previous">
			<svg class="Rectangle_156_et">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(232,233,236,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_156_et" rx="4" ry="4" x="0" y="0" width="35" height="35">
				</rect>
			</svg>
			<svg class="Path_294_eu" viewBox="1803.616 4362.342 7.567 12.934">
				<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Path_294_eu" d="M 1811.182495117188 4362.341796875 C 1811.182495117188 4362.341796875 1803.61572265625 4369.0732421875 1803.61572265625 4369.0732421875 C 1803.61572265625 4369.0732421875 1811.182495117188 4375.275390625 1811.182495117188 4375.275390625">
				</path>
			</svg>
		</div>
		<div id="Simple_Cards__Quick_Tip_">
			<div id="Total_Revenue">
				<div id="Total_Revenue_ex">
					<svg class="BG">
						<rect fill="rgba(255,255,255,1)" id="BG" rx="0" ry="0" x="0" y="0" width="116" height="47">
						</rect>
					</svg>
					<svg class="menu_icon" viewBox="0 0 16 4">
						<path fill="rgba(164,175,183,1)" id="menu_icon" d="M 11.99954223632812 1.99951171875 C 11.99954223632812 0.8953857421875 12.89501953125 0 14.00021362304688 0 C 15.1044921875 0 16 0.8953857421875 16 1.99951171875 C 16 3.1046142578125 15.1044921875 4 14.00021362304688 4 C 12.89501953125 4 11.99954223632812 3.1046142578125 11.99954223632812 1.99951171875 Z M 6.000213623046875 1.99951171875 C 6.000213623046875 0.8953857421875 6.895721435546875 0 8.000030517578125 0 C 9.104278564453125 0 9.999786376953125 0.8953857421875 9.999786376953125 1.99951171875 C 9.999786376953125 3.1046142578125 9.104278564453125 4 8.000030517578125 4 C 6.895721435546875 4 6.000213623046875 3.1046142578125 6.000213623046875 1.99951171875 Z M 0 1.99951171875 C 0 0.8953857421875 0.8955078125 0 1.999786376953125 0 C 3.10498046875 0 4.000457763671875 0.8953857421875 4.000457763671875 1.99951171875 C 4.000457763671875 3.1046142578125 3.10498046875 4 1.999786376953125 4 C 0.8955078125 4 0 3.1046142578125 0 1.99951171875 Z">
						</path>
					</svg>
					<div id="Total_Revenue_e">
						<div id="Deliverables">
							<span>Deliverables</span>
						</div>
						<div id="ID16">
							<span>16</span>
						</div>
					</div>
				</div>
				<div id="Total_Revenue_fa">
					<svg class="BG_e">
						<rect fill="rgba(255,255,255,1)" id="BG_e" rx="0" ry="0" x="0" y="0" width="116" height="47">
						</rect>
					</svg>
					<svg class="menu_icon_e" viewBox="0 0 16 4">
						<path fill="rgba(164,175,183,1)" id="menu_icon_e" d="M 11.99954223632812 1.99951171875 C 11.99954223632812 0.8953857421875 12.89501953125 0 14.00021362304688 0 C 15.1044921875 0 16 0.8953857421875 16 1.99951171875 C 16 3.1046142578125 15.1044921875 4 14.00021362304688 4 C 12.89501953125 4 11.99954223632812 3.1046142578125 11.99954223632812 1.99951171875 Z M 6.000213623046875 1.99951171875 C 6.000213623046875 0.8953857421875 6.895721435546875 0 8.000030517578125 0 C 9.104278564453125 0 9.999786376953125 0.8953857421875 9.999786376953125 1.99951171875 C 9.999786376953125 3.1046142578125 9.104278564453125 4 8.000030517578125 4 C 6.895721435546875 4 6.000213623046875 3.1046142578125 6.000213623046875 1.99951171875 Z M 0 1.99951171875 C 0 0.8953857421875 0.8955078125 0 1.999786376953125 0 C 3.10498046875 0 4.000457763671875 0.8953857421875 4.000457763671875 1.99951171875 C 4.000457763671875 3.1046142578125 3.10498046875 4 1.999786376953125 4 C 0.8955078125 4 0 3.1046142578125 0 1.99951171875 Z">
						</path>
					</svg>
					<div id="Total_Revenue_fb">
						<div id="Tasks">
							<span>Tasks</span>
						</div>
						<div id="ID67">
							<span>67</span>
						</div>
					</div>
				</div>
				<div id="Total_Revenue_fc">
					<svg class="BG_fa">
						<rect fill="rgba(255,255,255,1)" id="BG_fa" rx="0" ry="0" x="0" y="0" width="116" height="47">
						</rect>
					</svg>
					<svg class="menu_icon_fb" viewBox="0 0 16 4">
						<path fill="rgba(164,175,183,1)" id="menu_icon_fb" d="M 11.99954223632812 1.99951171875 C 11.99954223632812 0.8953857421875 12.89501953125 0 14.00021362304688 0 C 15.1044921875 0 16 0.8953857421875 16 1.99951171875 C 16 3.1046142578125 15.1044921875 4 14.00021362304688 4 C 12.89501953125 4 11.99954223632812 3.1046142578125 11.99954223632812 1.99951171875 Z M 6.000213623046875 1.99951171875 C 6.000213623046875 0.8953857421875 6.895721435546875 0 8.000030517578125 0 C 9.104278564453125 0 9.999786376953125 0.8953857421875 9.999786376953125 1.99951171875 C 9.999786376953125 3.1046142578125 9.104278564453125 4 8.000030517578125 4 C 6.895721435546875 4 6.000213623046875 3.1046142578125 6.000213623046875 1.99951171875 Z M 0 1.99951171875 C 0 0.8953857421875 0.8955078125 0 1.999786376953125 0 C 3.10498046875 0 4.000457763671875 0.8953857421875 4.000457763671875 1.99951171875 C 4.000457763671875 3.1046142578125 3.10498046875 4 1.999786376953125 4 C 0.8955078125 4 0 3.1046142578125 0 1.99951171875 Z">
						</path>
					</svg>
					<div id="Total_Revenue_fd">
						<div id="Issues">
							<span>Issues</span>
						</div>
						<div id="ID9">
							<span>9</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="Repeat_Grid_5">
			<div id="Group_295">
				<div id="Group_5">
					<svg class="Rectangle_1491">
						<rect fill="transparent" id="Rectangle_1491" rx="5" ry="5" x="0" y="0" width="225" height="55">
						</rect>
					</svg>
					<a href="/home">
					<div id="Home">
						<span>Home</span>
					</div></a>
				</div>
				<div id="Group_6">
					<svg class="Rectangle_1492">
						<rect fill="transparent" id="Rectangle_1492" rx="5" ry="5" x="0" y="0" width="225" height="55">
						</rect>
					</svg>
					<div id="Dashboard_fm">
						<span>Dashboard</span>
					</div>
				</div>
				<div id="Group_8">
					<svg class="Rectangle_1492_fo">
						<rect fill="transparent" id="Rectangle_1492_fo" rx="5" ry="5" x="0" y="0" width="225" height="55">
						</rect>
					</svg>
					<a href="/deliverables">
					<div id="Deliverables_fp">
						<span>Deliverables</span>
					</div></a>
				</div>
				<div id="Group_9">
					<svg class="Rectangle_1492_fr">
						<rect fill="transparent" id="Rectangle_1492_fr" rx="5" ry="5" x="0" y="0" width="225" height="55">
						</rect>
					</svg>
					<a href="/tasks">
					<div id="Tasks_fs">
						<span>Tasks</span>
					</div></a>
				</div>
				<div id="Group_10">
					<svg class="Rectangle_1492_fu">
						<rect fill="transparent" id="Rectangle_1492_fu" rx="5" ry="5" x="0" y="0" width="225" height="55">
						</rect>
					</svg>
					<a href="/issues">
					<div id="Issues_fv">
						<span>Issues</span>
					</div></a>
				</div>
				<div id="Group_11">
					<svg class="Rectangle_1492_fx">
						<rect fill="transparent" id="Rectangle_1492_fx" rx="5" ry="5" x="0" y="0" width="225" height="55">
						</rect>
					</svg>
					<a href="/changes">
					<div id="Changes">
						<span>Changes</span>
					</div></a>
				</div>
				<div id="Group_12">
					<svg class="Rectangle_1492_f">
						<rect fill="transparent" id="Rectangle_1492_f" rx="5" ry="5" x="0" y="0" width="225" height="55">
						</rect>
					</svg>
					<a href="/referenceDoc">
					<div id="References">
						<span>References</span>
					</div></a>
				</div>
				<div id="Group_13">
					<svg class="Rectangle_1492_ga">
						<rect fill="transparent" id="Rectangle_1492_ga" rx="5" ry="5" x="0" y="0" width="225" height="55">
						</rect>
					</svg>
					<a href="/resources">
					<div id="Resources">
						<span>Resources</span>
					</div></a>
				</div>
				<div id="Group_13_f">
					<svg class="Rectangle_1492_gb">
						<rect fill="transparent" id="Rectangle_1492_gb" rx="5" ry="5" x="0" y="0" width="225" height="55">
						</rect>
					</svg>
					<a href="/actionItems">
					<div id="Action_Items">
						<span>Action Items</span>
					</div></a>
				</div>
			</div>
		</div>
		<div id="Repeat_Grid_4">
			<div id="Group_296">
				<svg class="Rectangle_1492_gc">
					<rect fill="transparent" id="Rectangle_1492_gc" rx="5" ry="5" x="0" y="0" width="225" height="55">
					</rect>
				</svg>
				<a href="/requirements">
				<div id="Requirements">
					<span>Requirements</span>
				</div></a>
			</div>
			<div id="Group_296_gc">
				<svg class="Rectangle_1492_gd">
					<rect fill="transparent" id="Rectangle_1492_gd" rx="5" ry="5" x="0" y="0" width="225" height="55">
					</rect>
				</svg>
				<a href="/decisions">
				<div id="Decisions">
					<span>Decisions</span>
				</div></a>
			</div>
			<div id="Group_296_gf">
				<svg class="Rectangle_1492_gg">
					<rect fill="transparent" id="Rectangle_1492_gg" rx="5" ry="5" x="0" y="0" width="225" height="55">
					</rect>
				</svg>
				<a href="/risks">
				<div id="Risks">
					<span>Risks</span>
				</div></a>
			</div>
			<div id="Group_296_gi">
				<svg class="Rectangle_1492_gj">
					<rect fill="transparent" id="Rectangle_1492_gj" rx="5" ry="5" x="0" y="0" width="225" height="55">
					</rect>
				</svg>
				<div id="Risks_gk">
					<span>Risks</span>
				</div>
			</div>
		</div>
		<div id="Scroll_Bar">
			<div id="Component_69___1" class="Component_69___1">
				<svg class="Rectangle_1529_gn">
					<rect fill="rgba(218,220,225,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_1529_gn" rx="0" ry="0" x="0" y="0" width="513" height="35">
					</rect>
				</svg>
			</div>
			<div id="button_previous_go" class="button_previous">
				<svg class="Rectangle_156_gp">
					<rect fill="rgba(255,255,255,1)" stroke="rgba(232,233,236,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_156_gp" rx="4" ry="4" x="0" y="0" width="35" height="35">
					</rect>
				</svg>
				<svg class="Path_294_gq" viewBox="1803.616 4362.342 7.567 12.934">
					<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Path_294_gq" d="M 1811.182495117188 4362.341796875 C 1811.182495117188 4362.341796875 1803.61572265625 4369.0732421875 1803.61572265625 4369.0732421875 C 1803.61572265625 4369.0732421875 1811.182495117188 4375.275390625 1811.182495117188 4375.275390625">
					</path>
				</svg>
			</div>
			<svg class="Rectangle_1528">
				<rect fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_1528" rx="0" ry="0" x="0" y="0" width="190" height="35">
				</rect>
			</svg>
			<div id="button_next_gs" class="button_next">
				<svg class="Rectangle_156_gt">
					<rect fill="rgba(255,255,255,1)" stroke="rgba(232,233,236,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_156_gt" rx="4" ry="4" x="0" y="0" width="35" height="35">
					</rect>
				</svg>
				<svg class="Path_294_gu" viewBox="1803.616 4362.342 7.57 12.934">
					<path fill="transparent" stroke="rgba(136,152,170,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Path_294_gu" d="M 1803.61572265625 4362.341796875 C 1803.61572265625 4362.341796875 1811.185791015625 4369.0732421875 1811.185791015625 4369.0732421875 C 1811.185791015625 4369.0732421875 1803.61572265625 4375.275390625 1803.61572265625 4375.275390625">
					</path>
				</svg>
			</div>
		</div>
	</div>
	<div id="Some_Project">
		<span>Some Project</span>
	</div>
	<div id="Group_311">
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
		<div id="Home_g">
			<span>Home</span>
		</div>
		<div id="_">
			<span>-</span>
		</div>
		<div id="Dashboard_g">
			<span>Dashboard</span>
		</div>
	</div>
</div>
</body>
</html>