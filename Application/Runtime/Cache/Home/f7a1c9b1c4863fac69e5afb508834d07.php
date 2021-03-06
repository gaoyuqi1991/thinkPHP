<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="/Public/mall/css/common.css" type="text/css">
	<link rel="stylesheet" href="/Public/mall/css/goods.css" type="text/css">
	<script type="text/javascript" src="/Public/mall/js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="/Public/mall/js/common.js"></script>
	<script type="text/javascript" src="/Public/mall/js/scroll.js"></script>
<!-- 	<script type="text/javascript" src="/Public/mall/js/jquery.rotate.min.js"></script> -->
	<!--[if IE]> 
	<script> 
	(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->

	<!--[if lt IE 8]>
	<script src="/Public/mall/IE8.js" type="text/javascript"></script>
	<![endif]-->
</head>
<body>
	<a href="/home/goods/index.html">首页</a><a href="/home/goods/goodsdetail.html">商品详情页</a><a href="http://192.168.115.175/home/store/index.html">商铺页</a>
	<header><!-- 头部开始 -->
		<article class="headerTop clear">
			<section class="header-left"> <!-- 头部左边 未读消息 -->
				<a href="/home/goods/goodslist.html" class="message-title">
					<div><img src="/Public/mall/images/messageImg3.png" alt="">未读消息<span class="fb messageNum">10</span></div></a>
					<ul class="messageBox hide">
							<li>
								<div>2015-05-05<i>10:53:48</i></div>
								<div><a href="消息.html" class="c6">发货啦！您购买的 <span class="green">梧宁®—梧宁梧宁梧宁梧宁梧宁</span></a></div>
							</li>
							<li>
								<div>2015-05-05<i>10:53:48</i></div>
								<div><a href="消息.html" class="c6">发货啦！您购买的 <span class="green">梧宁®—梧宁梧宁梧宁梧宁梧宁</span></a></div>
							</li>
							<li>
								<div>2015-05-05<i>10:53:48</i></div>
								<div><a href="消息.html" class="c6">发货啦！您购买的 <span class="green">梧宁®—梧宁梧宁梧宁梧宁梧宁</span></a></div>
							</li>
							<a href="消息.html" class="messageSet">设置</a>
							<a href="消息.html" class="messageAll">查看全部</a>
					</ul>
			</section>
			<section class="header-right"> <!-- 头部右边导航 -->
				<ul>
					<li style="display: none;">
						<a href="#" class="orange">登陆</a>
					</li>
					<li style="display: none;">
						<a href="#">注册</a>
					</li>
					<li class="list1">
						<a href="打印机.html" class="list-title">Hi,cehiyi</a>
						<ul class="list1-cont" style="display: none;">
							<li><a href="账户管理-我的财富.html">帐号管理</a></li>
							<li><a href="">退出登录</a></li>
						</ul>
					</li>
					<li class="list2">
						<a href="买家用户中心.html" class="list-title">我的订单</a>
						<ul class="list1-cont" style="display: none;">
							<li><a href="买家中心-已买到的商品.html">已买到的商品</a></li>
						</ul>
					</li>
					<li class="list3">
						<a href="#" class="list-title">收藏夹</a>
						<ul class="list1-cont" style="display: none;">
							<li><a href="买家中心-我的收藏-我收藏的商品.html">收藏的商品</a></li>
							<li><a href="买家中心-我的收藏-我收藏的商铺.html">商场的商铺</a></li>
						</ul>
					</li>
					<li class="list4">
						<a href="卖家中心.html" class="list-title">卖家中心</a>
						<ul class="list1-cont" style="display: none;">
							<li><a href="交易管理-已卖出的商品.html">卖出的商品</a></li>
							<li><a href="商品管理-出售中的商品.html">出售中的商品</a></li>
							<li><a href="客户管理-认证客户.html">认证客户</a></li>
							<li><a href="授信管理-授信关系.html">关系管理</a></li>
						</ul>
					</li>
					<li>
						<a href="#">帮助中心</a>
					</li>
					<li style="margin:0">
						<a href="javascript:void(0);" onclick="AddFavorite('百度','http://www.baidu.com')">收藏本站</a>
					</li>
					<li style="padding:0;margin-right: 0;">
						<p>服务热线：0571-87661678</p>
					</li>
				</ul>
			</section>
		</article>
		<div class="hr2"></div>
		<article class="headerBottom clear">
			<section class="headerBottom-box">
			<section class="logo"> <!-- 中农在线Logo -->
				<img src="/Public/mall/images/logo.png" alt="">
			</section>
			<section class="searchBox">   <!-- 搜索框 -->
				<form action="" method="">
					<div class="search-list">
						<ul class="serachBar">
							<div class="selected">商品</div>
							<li>商品</li>
							<li>厂家</li>
						</ul>
					</div>
					<input type="text" name="" id="" placeholder="输入关键字">  
					<input type="submit" name="" id="" value="搜索">
				</form>
				<div class="searchList">   <!-- 默认搜索商品 -->
					<ul>
						<li><a href="#">雅苒</a></li>
						<li><a href="#">诺普丰</a></li>
						<li><a href="#">怀农特</a></li>
						<li><a href="#">沃家福</a></li>
						<li><a href="#">康宽</a></li>
						<li><a href="#">福帅得</a></li>
					</ul>
				</div>
				<div class="goodsCar">   <!-- 购物车按钮 -->
					<a href="#">
						<img src="/Public/mall/images/car.png" alt="">
						<p>购物车<span>0</span></p>
					</a>
				</div>
			</section>
			</section>
		</article>
		<div class="bannarBox-bj clear"><!-- 公司导航栏开始 -->
			<article class="bannarBox  sellerNav">
				<div class="bannarLeft mr" style="width: auto;"> <!-- 所有商品分类开始 -->
					<div class="title" style="width: auto;">
						<!-- <img src="/Public/mall/images/bannartitle.png" alt="所有商品分类"> -->
						<span class="fb">首页</span>
					</div>
				</div><!-- 所有商品分类结束 -->
				<!-- 中间导航开始 -->
				<div class="bannarMiddle">
					<ul id="box2">
						<li><a href="#">网上庄稼医院</a></li>
						<li><a href="#">试验示范</a></li>
						<li><a href="#">农技培训 </a></li>
						<li><a href="#">病虫害图库</a></li>
					</ul>
				</div><!-- 中间导航结束 -->
				<div class="areaShops fastNav"> <!-- 区域商铺开始 -->
						<div class="shopTitle">
							快速导航
							<img src="/Public/mall/images/moreup2.png" alt="">
						</div>
						<div class="fastNav-cont" style="display: none;"><!-- 显示盒子 -->
							<div class="loginedWrap" style="display: none;"><!-- 已经登录的状态 -->
								<div class="logined-title">HI! 您好，<span class="fb">王思聪</span></div>
								<div class="logined-cont">
									<ul id="login-btn">
										<li class="active">我加入的商铺</li>
										<li>查找别的商铺</li>
									</ul>
									<div id="showBox">
										<div class="showCont"> <!-- 内容1开始 -->
											<form action="">
												<select id="aa">
													<option value="">北京省</option>
													<option value="">浙江省</option>
												</select>
												<select>
													<option value="">杭州市</option>
													<option value="">上海市</option>
												</select>
												<select>
													<option value="">滨江</option>
													<option value="">萧山</option>
												</select>
											</form>
											<dl>
												<dd>
													<a href="">
														<p>宁波金泰惠多利农资连锁公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span>
													</a>
												</dd>
												<dd><a href=""><p>苍南县永丰农业生产资料有限公司</p>
													<span>
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
													</span></a></dd>
												<dd>
													<a href=""><p>杭州萧山农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a>
													</dd>
													<dd><a href=""><p>杭州市农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>嘉兴市金泰农资有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">		
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt=""></span></a></dd>
															<dd><a href=""><p>浙江惠多利农资连锁有限公司</p>
																<span>
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																</span>
															</a></dd>
													<dd><a href=""><p>建德市新安植保有限责任公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															</span></a>
													</dd>
													</dl>
											<div class="changeBtn clear">
												<p style="text-align: right;"><a href=""><span>&lt;</span>上一页</a></p>
												<p style="float: right;"><a href=""><span>下一页</span>&gt;</a></p>
											</div>
										</div><!-- 内容1结束 -->
										<div class="showCont hide"><!-- 内容2开始 -->
											<form action="">
												<select id="aa">
													<option value="">北京省</option>
													<option value="">浙江省</option>
												</select>
												<select>
													<option value="">杭州市</option>
													<option value="">上海市</option>
												</select>
												<select>
													<option value="">滨江</option>
													<option value="">萧山</option>
												</select>
											</form>
											<div class="searchWrap">
												<input type="text" name="" id="" class="txt" placeholder="直接输入要查找的公司">
												<input type="button" value="查找" class="btn">
											</div>
											<dl>
												<dd>
													<a href="">
														<p>宁波金泰惠多利农资连锁公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span>
													</a>
												</dd>
												<dd><a href=""><p>苍南县永丰农业生产资料有限公司</p>
													<span>
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
													</span></a></dd>
												<dd>
													<a href=""><p>杭州萧山农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a>
													</dd>
													<dd><a href=""><p>杭州市农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>嘉兴市金泰农资有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">		
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt=""></span></a></dd>
															<dd><a href=""><p>浙江惠多利农资连锁有限公司</p>
																<span>
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																</span>
															</a></dd>
													<dd><a href=""><p>建德市新安植保有限责任公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															</span></a></dd>
													</dl>
											<div class="changeBtn clear">
												<p style="text-align: right;"><a href=""><span>&lt;</span>上一页</a></p>
												<p style="float: right;"><a href=""><span>下一页</span>&gt;</a></p>
											</div><!-- 内容2结束 -->
										</div>
									</div>
								</div>
							</div><!-- 已经登录的状态end -->
							<div class="bfloginWrap" style="display: none;"><!-- 未登录的状态 -->
								<div class="bflogin-title">
									<p>HI! 您好，请先登录/注册</p>
									<div class="go" style="margin-left: 20px"><a href="">登录</a></div>
									<div class="go"><a href="">注册</a></div>
									<div class="go"><a href="">申请开店</a></div>
								</div>
								<div class="shoppes">
									<img src="/Public/mall/images/shoppes.png" alt="">
									<span>名铺推荐</span>
								</div>
								<dl>
												<dd>
													<a href="">
														<p>宁波金泰惠多利农资连锁公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span>
													</a>
												</dd>
												<dd><a href=""><p>苍南县永丰农业生产资料有限公司</p>
													<span>
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
													</span></a></dd>
												<dd>
													<a href=""><p>杭州萧山农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a>
													</dd>
													<dd><a href=""><p>杭州市农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>嘉兴市金泰农资有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">		
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt=""></span></a></dd>
															<dd><a href=""><p>浙江惠多利农资连锁有限公司</p>
																<span>
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																</span>
															</a></dd>
													<dd>
														<a href=""><p>建德市新安植保有限责任公司</p>
															<span>
																<img src="/Public/mall/images/start2.png" alt="">
																<img src="/Public/mall/images/start2.png" alt="">
																<img src="/Public/mall/images/start2.png" alt="">
																<img src="/Public/mall/images/start2.png" alt="">
																<img src="/Public/mall/images/start2.png" alt="">
															</span>
														</a>
													</dd>
													</dl>
									<div class="other">
										<img src="/Public/mall/images/changeone.png" alt=""><span>换一组</span>
									</div>
							</div><!-- 未登录的状态end -->
							<div class="notapply" style="display: none;"><!-- 未申请店铺的 -->
								<div class="notapply-title">
									<p>HI! 您好，<span class="fb">宁波金泰惠多利农资有限公司</span></p>
									<a href="">申请开店</a>
								</div>
								<form action="">
												<select id="aa">
													<option value="">北京省</option>
													<option value="">浙江省</option>
												</select>
												<select>
													<option value="">杭州市</option>
													<option value="">上海市</option>
												</select>
												<select>
													<option value="">滨江</option>
													<option value="">萧山</option>
												</select>
											</form>
											<div class="searchWrap">
												<input type="text" name="" id="" class="txt" placeholder="直接输入要查找的公司">
												<input type="button" value="查找" class="btn">
											</div>
											<dl>
												<dd>
													<a href="">
														<p>宁波金泰惠多利农资连锁公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span>
													</a>
												</dd>
												<dd><a href=""><p>苍南县永丰农业生产资料有限公司</p>
													<span>
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
													</span></a></dd>
												<dd>
													<a href=""><p>杭州萧山农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a>
													</dd>
													<dd><a href=""><p>杭州市农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>嘉兴市金泰农资有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">		
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt=""></span></a></dd>
															<dd><a href=""><p>浙江惠多利农资连锁有限公司</p>
																<span>
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																</span>
															</a></dd>
													<dd><a href=""><p>建德市新安植保有限责任公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															</span></a></dd>
													</dl>
									<div class="other">
										<img src="/Public/mall/images/changeone.png" alt=""><span>换一组</span>
									</div>
							</div><!-- 未申请店铺的end -->
							<div class="apply"><!-- 已经申请店铺的end -->
								<div class="apply-title">HI! 您好，<span class="fb">宁波金泰惠多利农资连锁公司</span></div>
								<div class="order-active">
									<div class="list">
										<a href="">
											<p>待发货</p>
											<h5>5</h5>
										</a>
									</div>
									<div class="list">
										<a href="">
											<p>待发货</p>
											<h5>5</h5>
										</a>
									</div>
									<div class="list list2">
										<a href="">
											<p>待发货</p>
											<h5>5</h5>
										</a>
									</div>
								</div>
								<div class="goodsList clear "><!-- 出售中的商品 -->
									<div class="list1">
										<a href="">
											<img src="/Public/mall/images/indexlist1.png" alt="">
											<p>出售中的商品</p>
										</a>
									</div>
									<div class="list1" style="border-right: none;">
										<a href="">
											<img src="/Public/mall/images/indexlist2.png" alt="">
											<p>仓库中的商品</p>
										</a>
									</div>
									<div class="list1">
										<a href="">
											<img src="/Public/mall/images/indexlist3.png" alt="">
											<p>我的客户</p>
										</a>
									</div>
									<div class="list1" style="border-right: none;">
										<a href="">
											<img src="/Public/mall/images/indexlist4.png" alt="">
											<p>新申请客户</p>
										</a>
									</div>
								</div><!-- 出售中的商品 -->
								<div class="shoppes">
									<img src="/Public/mall/images/shoppes.png" alt="">
									<span>名铺推荐</span>
								</div>
								<dl>
												<dd>
													<a href="">
														<p>宁波金泰惠多利农资连锁公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span>
													</a>
												</dd>
												<dd><a href=""><p>苍南县永丰农业生产资料有限公司</p>
													<span>
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
													</span></a></dd>
												<dd>
													<a href=""><p>杭州萧山农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a>
													</dd>
													<dd><a href=""><p>杭州市农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
														<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>												
													</dl>
								<div class="other">
										<img src="/Public/mall/images/changeone.png" alt="" ><span>换一组</span>
								</div>
							</div><!-- 已经申请店铺的end -->
						</div><!-- 显示盒子end -->
				</div><!-- 区域商铺结束 -->
			</article><!-- 公司导航栏结束 -->
		</div>
	</header><!-- 头部结束 -->

	<section class="container" style="border-bottom: 1px solid #d1d1d1;padding-bottom: 80px;"><!-- 主体内容开始 -->
		<div class="containerBox clear">
			<article class="goodsList-Cont"><!-- 左边部分 -->
				<div class="goodsList-topBox"><!-- 首页位置搜索按钮上面部分 -->
					<a href="">首页</a><span class="leftHook">></span>
					<a href="">产品库</a><span class="leftHook">></span>
					<a href="">全部</a>
					<form action="" method="">
						<input type="text" name="" id="" placeholder="输入关键字">
						<input type="button" value="搜索">
					</form>
					<p class="right-txt">搜索到<span>13390</span>件</p>
				</div><!-- 首页位置搜索按钮上面部分结束 -->
				<div class="goodsNav-box"><!-- 列表导航 -->
					<div class="goodsWrap">
						<h2>农药药剂：</h2>
						<div class="goodsNav-list">
							<a href="">全部</a>
							<a href="">杀虫剂</a>
							<a href="">除草剂</a>
							<a href="">杀菌剂</a>
							<a href="">杀螨剂</a>
							<a href="">杀线虫剂</a>
							<a href="">植物生长调节剂</a>
							<a href="">杀软体动物剂</a>
							<a href="">农药助剂</a>
							<a href="">杀鼠剂</a>
							<a href="">农药原药</a>
							<a href="">中间体</a>
							<a href="">其他</a>
						</div>
						<div class="showBtn">
							<div class="btn-show">更多</div>
						</div>
					</div>
					<div class="goodsWrap">
						<h2>化肥肥料：</h2>
						<div class="goodsNav-list">
							<a href="">全部</a>
							<a href="">氮肥</a>
							<a href="">除磷肥</a>
							<a href="">钾肥</a>
							<a href="">钙肥</a>
							<a href="">复合肥,复合肥</a>
							<a href="">生物肥</a>
							<a href="">控释肥</a>
							<a href="">有机肥</a>
							<a href="">水溶肥</a>
							<a href="">微量元素肥</a>
							<a href="">化肥原料</a>
							<a href="">添加剂</a>
							<a href="">其他肥料</a>
							<a href="">全部</a>
							<a href="">氮肥</a>
							<a href="">除磷肥</a>
							<a href="">钾肥</a>
							<a href="">钙肥</a>
							<a href="">复合肥,复合肥</a>
							<a href="">生物肥</a>
							<a href="">控释肥</a>
							<a href="">有机肥</a>
							<a href="">水溶肥</a>
							<a href="">微量元素肥</a>
							<a href="">化肥原料</a>
							<a href="">添加剂</a>
							<a href="">其他肥料</a>
						</div>
						<div class="showBtn">
								<div class="btn-show">更多</div>
						</div>
					</div>
					<div class="goodsWrap" >
						<h2>农膜：</h2>
						<div class="goodsNav-list" >
							<a href="">全部</a>
							<a href="">棚膜</a>
							<a href="">地魔</a>
							<a href="">塑料包装肥</a>
							<a href="">其他</a>
						</div>
						<div class="showBtn">
							<div class="btn-show">更多</div>
						</div>
					</div>
					<div class="goodsWrap">
						<h2>植物种子：</h2>
						<div class="goodsNav-list">
							<a href="">全部</a>
							<a href="">玉米种子</a>
							<a href="">水稻种子</a>
							<a href="">小麦种子</a>
							<a href="">棉花种子</a>
							<a href="">大豆种子</a>
							<a href="">花生种子</a>
							<a href="">油菜种苗</a>
							<a href="">蔬菜种子</a>
							<a href="">瓜果种子</a>
							<a href="">其他</a>
						</div>
						<div class="showBtn">
							<div class="btn-show">更多</div>
						</div>
					</div>
					<div class="goodsWrap" style="border-bottom: none;">
						<h2>农机工具：</h2>
						<div class="goodsNav-list">
							<a href="">全部</a>
							<a href="">播种机械</a>
							<a href="">灌溉机械</a>
							<a href="">采摘机械</a>
							<a href="">育苗育秧设备</a>
							<a href="">栽植机械</a>
							<a href="">耕种机械</a>
							<a href="">收获机械</a>
							<a href="">植保机械</a>
							<a href="">农业仪器</a>
							<a href="">农机配件</a>
							<a href="">中其他机械</a>
							<a href="">中其他机械</a>
							<a href="">中其他机械</a>
							<a href="">中其他机械</a>
							<a href="">中其他机械</a>
							<a href="">中其他机械</a>
						</div>
						<div class="showBtn">
							<div class="btn-show">更多</div>
						</div>
					</div>
				</div><!-- 列表导航结束 -->
				<div class="goodsList-filter"> <!-- 筛选栏 -->
					<div class="goodsList-filterTop">
						<span class="filterTop-title">综合排序</span>
						<span class="newBar">
							<i>最新<img src="/Public/mall/images/smalldown.png" alt=""></i>
							<i>收藏数<img src="/Public/mall/images/smalldown.png" alt=""></i>
							<i>销量<img src="/Public/mall/images/smalldown.png" alt=""></i>
						</span>
						<span class="priceBar">
							<span>价格:</span>
							<i>全部</i>
							<i>500元以下</i>
							<i>500-1000元以下</i>
							<i>1000-2000元以下</i>
							<i>3000元以上</i>
						</span>
						<span class="page">
							<a href=""><</a>
							<strong>2</strong>/31
							<a href="">></a>
						</span>
					</div>
					<!-- <div class="goodsList-filterBottom">
						<span class="origin">产地：</span>
						<div class="originBox">
							<select name="" id="">
								<option value="">浙江</option>
								<option value="">北京</option>
							</select>
						</div>
						<div class="originBox">
							<select name="" id="">
								<option value="">杭州</option>
								<option value="">河北</option>
							</select>
						</div>
						<div class="originBox">
							<select name="" id="">
								<option value="">滨江</option>
								<option value="">下沙</option>
							</select>
						</div>
					</div> -->
				</div><!-- 筛选栏结束 -->
				<div><!-- 商品列表展示区域 -->
					<ul class="goodsList-ul clear">
						<li>
							<div class="goodsList-wrap">
								<!-- 大图begin -->
								<div  class="spec-preview"> 
									<span class="jqzoom"><img jqimg="" src="/Public/mall/images/goodslist.jpg" /></span>
									<div class="spec-bottom hide">
										<div class="bj">
											杜邦贸易(上海)有限公司
										</div>
									</div> 
								</div>
								<!-- 大图end -->
								<!-- 缩略图begin -->
								<div class="spec-scroll">
								  <div class="items">
								    <ul>
								      <li class="active">
								      	<img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg">
								      </li>
								      <li>
								      	<img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg">
								      </li>
								      <li><img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg"></li>
								      <li><img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg"></li>
								    </ul>
								  </div>
								</div>
								<!-- 缩略图end -->
								<h5>杜邦农得时肥料农药剂杀菌抗菌业防治霜霉、疫病高效安全型</h5>
								<p class="f12 c9"><span class="buyerNum">322人已购买</span><span class="address">浙江杭州</span></p>
								<div class="btns"><a href="" class="car">加入购物车</a><span class="collect">收藏</span></div>
							</div>
						</li>
						<li>
							<div class="goodsList-wrap">
								<!-- 大图begin -->
								<div  class="spec-preview"> 
									<span class="jqzoom"><img jqimg="" src="/Public/mall/images/goodslist.jpg" /></span> 
								</div>
								<!-- 大图end -->
								<!-- 缩略图begin -->
								<div class="spec-scroll">
								  <div class="items">
								    <ul>
								      <li class="active">
								      	<img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg">
								      </li>
								      <li>
								      	<img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg">
								      </li>
								      <li><img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg"></li>
								      <li><img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg"></li>
								    </ul>
								  </div>
								</div>
								<!-- 缩略图end -->
								<h5>杜邦农得时肥料农药剂杀菌抗菌业防治霜霉、疫病高效安全型杀菌
								疫病高效安全型杀菌</h5>
								<p class="f12 c9"><span class="buyerNum">322人已购买</span><span class="address">浙江杭州</span></p>
								<div class="btns"><a href="" class="car">加入购物车</a><span class="collect">收藏</span></div>
							</div>
						</li>
						<li>
							<div class="goodsList-wrap">
								<!-- 大图begin -->
								<div  class="spec-preview"> 
									<span class="jqzoom"><img jqimg="" src="/Public/mall/images/goodslist.jpg" /></span> 
								</div>
								<!-- 大图end -->
								<!-- 缩略图begin -->
								<div class="spec-scroll">
								  <div class="items">
								    <ul>
								      <li>
								      	<img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg">
								      </li>
								      <li>
								      	<img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg">
								      </li>
								      <li><img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg"></li>
								      <li><img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg"></li>
								    </ul>
								  </div>
								</div>
								<!-- 缩略图end -->
								<h5>杜邦农得时肥料农药剂杀菌抗菌业防治霜霉、疫病高效安全型杀菌
								疫病高效安全型杀菌</h5>
								<p class="f12 c9"><span class="buyerNum">322人已购买</span><span class="address">浙江杭州</span></p>
								<div class="btns"><a href="" class="car">加入购物车</a><span class="collect">收藏</span></div>
							</div>
						</li>
						<li>
							<div class="goodsList-wrap">
								<!-- 大图begin -->
								<div  class="spec-preview"> 
									<span class="jqzoom"><img jqimg="" src="/Public/mall/images/goodslist.jpg" /></span> 
								</div>
								<!-- 大图end -->
								<!-- 缩略图begin -->
								<div class="spec-scroll">
								  <div class="items">
								    <ul>
								      <li>
								      	<img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg">
								      </li>
								      <li>
								      	<img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg">
								      </li>
								      <li><img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg"></li>
								      <li><img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg"></li>
								    </ul>
								  </div>
								</div>
								<!-- 缩略图end -->
								<h5>杜邦农得时肥料农药剂杀菌抗菌业防治霜霉、疫病高效安全型杀菌
								疫病高效安全型杀菌</h5>
								<p class="f12 c9"><span class="buyerNum">322人已购买</span><span class="address">浙江杭州</span></p>
								<div class="btns"><a href="" class="car">加入购物车</a><span class="collect">收藏</span></div>
							</div>
						</li>
						<li>
							<div class="goodsList-wrap">
								<!-- 大图begin -->
								<div  class="spec-preview"> 
									<span class="jqzoom"><img jqimg="" src="/Public/mall/images/goodslist.jpg" /></span> 
								</div>
								<!-- 大图end -->
								<!-- 缩略图begin -->
								<div class="spec-scroll">
								  <div class="items">
								    <ul>
								      <li>
								      	<img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg">
								      </li>
								      <li>
								      	<img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg">
								      </li>
								      <li><img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg"></li>
								      <li><img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg"></li>
								    </ul>
								  </div>
								</div>
								<!-- 缩略图end -->
								<h5>杜邦农得时肥料农药剂杀菌抗菌业防治霜霉、疫病高效安全型杀菌
								疫病高效安全型杀菌</h5>
								<p class="f12 c9"><span class="buyerNum">322人已购买</span><span class="address">浙江杭州</span></p>
								<div class="btns"><a href="" class="car">加入购物车</a><span class="collect">收藏</span></div>
							</div>
						</li>
						<li>
							<div class="goodsList-wrap">
								<!-- 大图begin -->
								<div  class="spec-preview"> 
									<span class="jqzoom"><img jqimg="" src="/Public/mall/images/goodslist.jpg" /></span> 
								</div>
								<!-- 大图end -->
								<!-- 缩略图begin -->
								<div class="spec-scroll">
								  <div class="items">
								    <ul>
								      <li>
								      	<img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg">
								      </li>
								      <li>
								      	<img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg">
								      </li>
								      <li><img bimg="" src="/Public/mall/images/goodslist.jpg" class="smallImg"></li>
								      <li><img bimg="" src="/Public/mall/images/goodslist2.jpg" class="smallImg"></li>
								    </ul>
								  </div>
								</div>
								<!-- 缩略图end -->
								<h5>杜邦农得时肥料农药剂杀菌抗菌业防治霜霉、疫病高效安全型杀菌
								疫病高效安全型杀菌</h5>
								<p class="f12 c9"><span class="buyerNum">322人已购买</span><span class="address">浙江杭州</span></p>
								<div class="btns"><a href="" class="car">加入购物车</a><span class="collect">收藏</span></div>
							</div>
						</li>
					</ul>
					<div class="pageBox"> <!-- 分页开始 -->
					<dl>
						<dd class="left"><a href=""><</a></dd>
						<dd ><a href="">1</a></dd>
						<dd class="active"><a href="">2</a></dd>
						<dd><a href="">3</a></dd>
						<dd><a href="">4</a></dd>
						<dd><a href="">5</a></dd>
						<dd><a href="">6</a></dd>
						<dd>...</dd>
						<dd><a href="">33</a></dd>
						<dd><a href="">34</a></dd>
						<dd class="right"><a href="">></a></dd>
						<dd class="pageBtn">
							<p>到第
								<input type="text" name="" id="" value="15">页
								<input type="button" value="确定">
							</p>
						</dd>
					</dl>
				</div><!-- 分页结束 -->
				</div><!-- 商品列表展示区域结束 -->
			</article><!-- 左边部分结束 -->
			<div class="right-ad"><!-- 右边广告部分 -->
				<h4 class="green">热门推荐</h4>
				<ul class="topUl">
					<li>
						<a href="" class="imgs"><img src="/Public/mall/images/goods7.jpg" alt=""></a>
						<a href=""><p>杜邦农得时肥料农药剂杀菌抗菌业防治</p></a>
					</li>
					<li>
						<a href="" class="imgs"><img src="/Public/mall/images/goods7.jpg" alt=""></a>
						<a href=""><p>杜邦农得时肥料农药剂杀菌抗菌业防治</p></a>
					</li>
					<li>
						<a href="" class="imgs"><img src="/Public/mall/images/goods7.jpg" alt=""></a>
						<a href=""><p>杜邦农得时肥料农药剂杀菌抗菌业防治</p></a>
					</li>
					<li>
						<a href="" class="imgs"><img src="/Public/mall/images/goods7.jpg" alt=""></a>
						<a href=""><p>杜邦农得时肥料农药剂杀菌抗菌业防治</p></a>
					</li>
					<li>
						<a href="" class="imgs"><img src="/Public/mall/images/goods7.jpg" alt=""></a>
						<a href=""><p>杜邦农得时肥料农药剂杀菌抗菌业防治</p></a>
					</li>
				</ul>
				<ul class="bottomUl">
					<li><a href=""><img src="/Public/mall/images/bottomul.jpg" alt=""></a></li>
					<li><a href=""><img src="/Public/mall/images/bottomul.jpg" alt=""></a></li>
					<li><a href=""><img src="/Public/mall/images/bottomul.jpg" alt=""></a></li>
					<li><a href=""><img src="/Public/mall/images/bottomul.jpg" alt=""></a></li>
				</ul>
			</div><!-- 右边广告部分结束 -->
		</div>
		<div class="goodsList-bottom"><!-- 底部热门分类 -->
			<ul class="ul-nav clear">
				<span>热门分类：</span>
				<li class="active">除草剂</li>
				<li>杀鼠剂</li>
				<li>磷肥</li>
				<li>钾肥</li>
				<li>钙肥</li>
				<li>棉花种子</li>
				<li>大豆种子</li>
				<li>花生种子</li>
			</ul>
			<ul class="ul-cont clear">
				<li>
					<div class="imgs"><a href=""><img src="/Public/mall/images/goodslist2.jpg" alt=""></a></div>
					<h5><a href="">杜邦农得时肥料农药剂杀菌抗菌业防治杀菌抗菌业防治</a></h5>
					<div class="ul-cont-bottom"><span class="ul-cont-buyer">16879人已购买</span><span>浙江杭州</span></div>
				</li>
				<li>
					<div class="imgs"><a href=""><img src="/Public/mall/images/goodslist2.jpg" alt=""></a></div>
					<h5><a href="">杜邦农得时肥料农药剂杀菌抗菌业防治杀菌抗菌业防治</a></h5>
					<div class="ul-cont-bottom"><span class="ul-cont-buyer">16879人已购买</span><span>浙江杭州</span></div>
				</li>
				<li>
					<div class="imgs"><a href=""><img src="/Public/mall/images/goodslist2.jpg" alt=""></a></div>
					<h5><a href="">杜邦农得时肥料农药剂杀菌抗菌业防治杀菌抗菌业防治</a></h5>
					<div class="ul-cont-bottom"><span class="ul-cont-buyer">16879人已购买</span><span>浙江杭州</span></div>
				</li>
				<li>
					<div class="imgs"><a href=""><img src="/Public/mall/images/goodslist2.jpg" alt=""></a></div>
					<h5><a href="">杜邦农得时肥料农药剂杀菌抗菌业防治杀菌抗菌业防治</a></h5>
					<div class="ul-cont-bottom"><span class="ul-cont-buyer">16879人已购买</span><span>浙江杭州</span></div>
				</li>
				<li>
					<div class="imgs"><a href=""><img src="/Public/mall/images/goodslist2.jpg" alt=""></a></div>
					<h5><a href="">杜邦农得时肥料农药剂杀菌抗菌业防治杀菌抗菌业防治</a></h5>
					<div class="ul-cont-bottom"><span class="ul-cont-buyer">16879人已购买</span><span>浙江杭州</span></div>
				</li>
			</ul>
			<div class="change-one"><img src="/Public/mall/images/changeone.png" alt="" id="img6">换一批</div>
		</div><!-- 底部热门分类END -->
	</section><!-- 主体内容结束 -->

	<footer style="border:none;background: #f5f5f5;"><!-- 脚部开始 -->
		<div style="width: 100%;background: #fff">
			<ul class="clear sellerTop">
				<li class="footLi01">
					<div></div>
					<span>配送服务</span>
				</li>
				<li class="footLi02">
					<div></div>
					<span>售后服务保证</span>
				</li>
				<li class="footLi03">
					<div></div>
					<span>产品质量保证</span>
				</li>
				<li class="footLi04">
					<div></div>
					<span>多种支付方式</span>
				</li>
				<li class="footLi05">
					<div></div>
					<span>特约商家</span>
				</li>
			</ul>
		</div>
		<ul class="aboutUs clear ">
				<li>
					<p>关于我们</p>
					<p>会员服务</p>
				</li>
				<li>
					<p>招商代理</p>
					<p>广告服务</p>
				</li>
				<li>
					<p>帮助中心</p>
					<p>意见和建议</p>
				</li>
				<li>
					<p>汇款方式</p>
					<p>联系方式</p>
				</li>
				<li>
					<p>友情链接</p>
					<p>商家入驻</p>
				</li>
		</ul>
		<section class="footnote clear" style="border:none">
			<p>© &nbsp;2015 &nbsp;网上农资商城&nbsp; 版权所有，&nbsp;并保留所有权利</p>
			<p>增值电信业务经营许可证:浙B2-20150086</p>
		</section> 
	</footer><!-- 脚部结束 -->
	<div id="gotop">顶部</p></div>
<script type="text/javascript">
	$(function(){	
		//缩略图对应大图
		$('.smallImg').hover(function(){
			$(this).parent().parent().parent().parent().parent('.goodsList-wrap').find('.jqzoom img').attr("src",$(this).attr("src"));
			$(this).parent().parent().parent().parent().parent('.goodsList-wrap').find('.jqzoom img').attr("jqimg",$(this).attr("bimg"));
		});
		
		//图片下方公司出现
		$('.spec-preview').hover(function(){
			$(this).find('.spec-bottom').toggle();
		})

		//收藏
		$('.btns .collect').click(function(){
			var txt1 = $(this).text();
			if (txt1=="收藏") {
				$(this).text("已收藏");
				alert("已收藏");
			}else{
				$(this).text("收藏");
				alert("已取消");
			}
		})
		
		//缩略图的边框变化
		$('.spec-scroll .items li').hover(function(){
			$(this).addClass('active').siblings().removeClass('active');
		})


		// 导航栏的更多按钮下拉效果
		$('.btn-show').click(function(){
			var txt = $(this).text();
			if(txt == "更多"){       //按钮为更多的时候
				$(this).text("收起");    //点击后变成收起
				$(this).addClass('active'); //按钮的箭头变成向上
				$(this).parent().prev().css("height","auto"); //导航内容显示全部，不再超出隐藏
			}else{                   //按钮为收起的时候
				$(this).text("更多");  //按钮变成更多
				$(this).removeClass('active'); //按钮的箭头变成向下
				$(this).parent().prev().css("height","33px"); //导航高度为33px，超出部分隐藏
			}
		})

		// 页面底部换一批图片动画效果
		// $(".change-one").rotate({ 
		//    bind: 
		//      { 
		//         click: function(){
		//             $(this).find("#img6").rotate({ 
		//             								angle:0,  //初始角度
		//             								animateTo:2000, //旋转的角度总数
		//             								duration:5000, //完成所有角度需要的时间
		//             								easing: $.easing.easeInOutExpo, //定于运动的效果
		//             								callback:function(){   //返回函数
		//             									alert("数据加载完成");
		//             								} 
		//             							});
		            
		            
		//         }
		//      } 
		   
		// });
		$(".change-one").click(function(){
			$('#img6').addClass('ans');
		})


		



	})
</script>
</body>
</html>