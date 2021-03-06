<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="/Public/mall/css/vipdate.css" type="text/css">
	<script type="text/javascript" src="/Public/mall/js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="/Public/mall/js/layer/layer.js"></script>
	<!--[if IE]> 
	<script> 
	(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->
	<!--[if lt IE 8]>
	<script type="text/javascript" src="/Public/mall/js/IE8.js"></script>
	<![endif]-->

	<script type="text/javascript">
	//身份证验证
	function IdentityCodeValid(code) { 
        var city={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江 ",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北 ",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏 ",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外 "};
        var tip = "";
        var pass= true;
        
        if(!code || !/^\d{6}(18|19|20)?\d{2}(0[1-9]|1[012])(0[1-9]|[12]\d|3[01])\d{3}(\d|X)$/i.test(code)){
            tip = "身份证号格式错误";
            pass = false;
        }
        
       else if(!city[code.substr(0,2)]){
            tip = "地址编码错误";
            pass = false;
        }
        else{
            //18位身份证需要验证最后一位校验位
            if(code.length == 18){
                code = code.split('');
                //∑(ai×Wi)(mod 11)
                //加权因子
                var factor = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2 ];
                //校验位
                var parity = [ 1, 0, 'X', 9, 8, 7, 6, 5, 4, 3, 2 ];
                var sum = 0;
                var ai = 0;
                var wi = 0;
                for (var i = 0; i < 17; i++)
                {
                    ai = code[i];
                    wi = factor[i];
                    sum += ai * wi;
                }
                var last = parity[sum % 11];
                if(parity[sum % 11] != code[17].toUpperCase()){
                    tip = "校验位错误";
                    pass =false;
                }
            }
        }
        if(!pass);
        return pass;
    }

	//验证码倒计时
	var countdown=60;
	function settime(obj) { 
		 
	    if (countdown == 0) { 
	        obj.removeAttribute("disabled");
	        obj.removeAttribute("style");    
	        obj.value="重新获取验证码"; 
	        countdown = 60; 
	        return;
	    } else { 
	        obj.style.cursor = "auto";
	        obj.style.backgroundColor = "#e5e5e5";
	        obj.style.color = "#333";
	        obj.setAttribute("disabled", true); 
	        obj.value="(" + countdown + ")秒倒计时"; 
	        countdown--; 
	    } 
		setTimeout(function() { 
		    settime(obj) }
		    ,1000) 
	}

	</script>

	<script type="text/javascript">
		$(function(){

			//地区
			$(".selectWrap").blur(function(){	            	
                $(this).children("select").each(function(){
                    if($(this).val()=="0"){
                    	$(this).parent().css("border","1px solid #ff6600");
                    	$(this).addClass("onError");
                    }else{
                    	$(this).parent().removeAttr("style");
                    	$(this).removeClass("onError");
                    }
                });
                if ( $(this).children("select").hasClass("onError")) {
					$(this).css("border","1px solid #ff6600");
					// console.log(1234);
				}
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
				//身份证号验证
	            if($(this).is('#IDnumber')){
	             	if (this.value=="") {
	             		var errorMsg = '请输入身份证号';
	             		$parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	             		$(this).css("border","1px solid #ff6600");
	             	} else if ((IdentityCodeValid(this.value) == false)) {
	             		var errorMsg = '请输入正确的身份证号';
	             		$parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	             		$(this).css("border","1px solid #ff6600");
	             	}
	            }
				//手机号
	            if ($(this).is('#userName')) {
	            	var telReg= /^1[3|4|5|8|9]\d{9}$/;
	            	if (this.value=="" ||(!telReg.test(this.value))) {
	                	var errorMsg = '请输入正确的手机号';
	              		$parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	              		$(this).css("border","1px solid #ff6600");
	                }
	            }

	            //手机验证码验证
	            if( $(this).is('#smsValue') ){
	                if( this.value=="" ){
	                      var errorMsg = '请输入验证码！';
	                      $parent.append('<p class="formtips onError">'+errorMsg+'</p>');
	                      $(this).css("border","1px solid #ff6600");
	                }
	            }
	        }).keyup(function(){
	           $(this).triggerHandler("blur");
	        });//end blur

	        //点击获取短信验证
	        $('#smsValueGet').click(function(){
	        	$("#userName").parent().find(".formtips").remove();
	        	$("#userName").removeAttr("style");
	        	if(!/^1[3|4|5|8|9]\d{9}$/.test($("#userName").val())) {
	                      var errorMsg = '请输入正确的手机号！';
	                      $("#userName").parent().append('<p class="formtips onError">'+errorMsg+'</p>');
	                      $("#userName").css("border","1px solid #ff6600");
	                      return;
	                }
	            //点击获取验证码之后显示"60秒倒计时"
	            settime(this);
	        });

	        //提交，最终验证。
	         $('.form-btn').click(function(){
	                $("form :input.require , .selectWrap.require").trigger("blur");//点击btn之后再次检测一遍form的内容
	                var numError = $('form .onError').length;
	                if(numError){
	                	console.log(numError);
	                    return false;
	                }
	                alert("okokok");
	         });

		});
	</script>
</head>
<style type="text/css">

</style>
<body style="overflow-y:hidden">
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
		<h3>完善资料</h3>
		<div class="main-form">
			<form action="" method="">
				<p class="subTit">会员资料<span>请填写真实信息，我们会严格保密，所以信息都为必填项</span></p>
				<div class="item">
					<span>会员类型：</span>
					<div class="selectWrap require">
						<select name="" id="" class="input250 ">
				            <option value="0">请选择会员类型</option>
				            <option value="1">个人会员</option>
				            <option value="2">企业会员</option>
				        </select>
			        </div>
				</div>
				<div class="item">
					<span>会员身份：</span>
					<div class="selectWrap require">
						<select name="" id="" class="input250 ">
				            <option value="0">请选择会员类型</option>
				            <option value="1">厂家</option>
				            <option value="2">代理商</option>
				            <option value="3">零售商</option>
				            <option value="4">农户/家庭农场/种植基地/专业合作社</option>
				        </select>
			        </div>
				</div>
				<div class="item">
					<span>所在地区：</span>
					<div class="selectWrap require">
						<select name="" id="" class="input78 ">
				            <option value="0">省</option>
				            <option value="1">浙江省</option>
				            <option value="2">22</option>
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


				<p class="subTit">个人资料<span>请填写真实信息，我们会严格保密，所以信息都为必填项</span></p>
				<div class="item">
					<span>姓名：</span>
					<input type="text" name="realName" id="realName" value="" class="input250 require" placeholder="请输入您的姓名" />
				</div>
				<div class="item">
					<span>身份证号：</span>
					<input type="text" name="IDnumber" id="IDnumber" value="" class="input250 require" placeholder="请输入您的身份证号码" />
				</div>
				
				<div class="item">
					<span>手机号码：</span>
					<input type="text" name="userName" id="userName" value="" placeholder="请输入您的手机号码" class="input250 require" />
				</div>
				<div class="item">
					<span>效验码：</span>
					<input type="text" name="smsValue" id="smsValue" value="" placeholder="验证码" class="input120 require" />
					<input type="button" name="" id="smsValueGet" value="获取验证码" class="input120 smsValBtn" />
				</div>
				
				<div class="item">
					<span> </span>
					<a href="javascript:void(0);" class="form-btn">完成去购物吧</a>
					<a href="###" class="form-btn2" style="float:left;">完善更多资料</a>
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
	
	<script type="text/javascript">
	$(document).ready(function(){
		layer.open({
		  type: 1,
		  shade : [0.7 , '#000' , true],
		  title: false,
		  closeBtn: 0,
		  shadeClose: true,
		  area: '580px',
		  shadeClose:false,
		  // skin: 'yourclass',
		  content: '<div class="aa"><div class="bb"></div></div>',
		   success:function(layero, index){
		   	$(".bb").click(function(){ //确定按钮
		    		layer.closeAll('page');
		    		$('body').css("overflow","auto")
		    	});
		   }
		});
	})
	</script>
	<style type="text/css">
	.layui-layer-page .layui-layer-content{
		overflow: visible;
		margin-top: -100px;
	}
		.aa{
			width: 580px;
			height: 330px;
			position: relative;
			background: url(/Public/mall/images/newbj.png) no-repeat;
		}
		.bb{
			position: absolute;
			bottom: -97px;
			width: 143px;
			height: 70px;
			background: url(/Public/mall/images/newbjbtn.png) no-repeat;
			left: 50%;
   			margin-left: -70px;
   			cursor: pointer;
		}
	</style>
</body>
</html>