<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="/Public/mall/css/vipdate.css" type="text/css">
	<script type="text/javascript" src="/Public/mall/js/jquery.1.11.3.min.js"></script>

	<!--[if IE]> 
	<script> 
	(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->
	<!--[if lt IE 8]>
	<script type="text/javascript" src="/Public/mall/js/IE8.js"></script>
	<![endif]-->

	<script type="text/javascript">
		$(function(){

			//地区
			$(".selectWrap").blur(function(){	            	
                $(".selectWrap select").each(function(){
                    if($(this).val()=="0"){
                    	$(this).parent().css("border","1px solid #ff6600");
                    	$(this).addClass("onError");
                    }else{
                    	$(this).parent().removeAttr("style");
                    }

                });
                  
	        }).click(function(){
	        	$(this).triggerHandler("blur");
	        }).keyup(function(){
	        	$(this).triggerHandler("blur");
	        });
	        
			
        	$('form :input').blur(function(){
				var $parent = $(this).parent();
				$parent.find(".formtips").remove();
				$(this).removeAttr("style");
				//真实姓名验证
				if($(this).is('#realName')){
					var realNameReg= /^[\u4e00-\u9fa5 ]{2,20}$/; //中文验证
					if (this.value=="" || (!realNameReg.test(this.value))) {
						var errorMsg = '请您填写您的真实信息';
						$parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
						$(this).css("border","1px solid #ff6600");
					}
				}
				//手机号
	            if ($(this).is('#phoneNumber')) {
	            	var telReg= /^1[3|4|5|8|9]\d{9}$/;
	            	if (this.value=="" ||(!telReg.test(this.value))) {
	                	var errorMsg = '请输入正确的手机号';
	              		$parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	              		$(this).css("border","1px solid #ff6600");
	                }
	            }
	
	        }).keyup(function(){
	           $(this).triggerHandler("blur");
	        });//end blur


	        //提交，最终验证。
	         $('.form-btn').click(function(){
	                $("form :input.require , .selectWrap.require").trigger("blur");//点击btn之后再次检测一遍form的内容
	                var numError = $('form .onError').length;
	                if(numError){
	                    return false;
	                }

	         });

		});
	</script>
</head>
<body>
	<header>
	<div class="main-header">
		<section>
			<div class="logo fl"></div>
			<div class="li-link fr">
				<a href="###">农资商城</a>&emsp;|&emsp;
				<a href="###">网上庄稼医院</a>&emsp;|&emsp;
				<a href="###">中农在线</a>
			</div>
		</section>
	</div>	
</header>


	<section class="main-wrap">
		<h3>完善个人资料</h3>
		<div class="main-form">
			<form action="" method="">
				<div class="item">
					<span>姓名：</span>
					<input type="text" name="realName" id="realName" value="" class="input250 require" placeholder="请输入您的姓名" />
				</div>
				<!-- 手机验证 -->
				<div class="tel-check"> 
					<div class="item">
					<span>手机号码：</span>
					<input type="text" name="phoneNumber" id="phoneNumber" value="" class="input250 require" placeholder="请输入您的手机号" />
					</div>
					<div class="item">
						<span>所在地区：</span>
						<div class="selectWrap require">
							<select name="" id="" class="input78 ">
					            <option value="0">省</option>
					            <option value="1">11</option>
					            <option value="2">22</option>
					            <option value="3">33</option>
					            <option value="4">44</option>
					            <option value="5">55</option>
					        </select>
					        <select name="" id="" class="input78 ">
					            <option value="0">市</option>
					            <option value="1">11</option>
					        </select>
					        <select name="" id="" class="input78 ">
					            <option value="0">区</option>
					            <option value="1">11</option>
					        </select>
				        </div>
					</div>
					<div class="item">
						<span> </span>
						<a href="###" class="form-btn">完成去购物吧</a>
						<a href="###" class="form-btn2" style="float:left;">完善更多资料</a>
					</div>
				</div>
				
			</form>
		</div>
	</section>

	<footer>
	<div class="footerImg">
		<ul>
			<li>政府护航  购物无忧</li>
			<li style="background-position:-22px -141px;">随时随地  想问就问</li>
			<li style="background-position:-22px -214px;">全程跟踪  放心农资</li>
			<li style="background-position:-22px -289px;">省内热线 <em>96318</em></li>
		</ul>
	</div>
	<p>© &nbsp;2015 &nbsp;中农在线&nbsp; 版权所有，&nbsp;并保留所有权利</p>
	<p>增值电信业务经营许可证:浙B2-20150086</p>
</footer>

</body>
</html>