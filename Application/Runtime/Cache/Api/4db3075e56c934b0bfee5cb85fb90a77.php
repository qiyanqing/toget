<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>返回页面</title>
	<link rel="stylesheet" href="/Public/Api/css/home.css">
	<link rel="stylesheet" href="/Public/Api/css/font-awesome.css">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no">
	<script type="text/javascript" src="/Public/Api/js/jquery-3.2.0.min.js"></script>
	<script src="/Public/Api/js/vue.js"></script>
	<script src="/Public/Api/js/function.js"></script>
</head>
<body>
<div id="app">
		<p class="app_p"><img src="/Public/Api/image/return.png" @click="onClick">题库</p>
		<!-- <div class="sign" v-for="(items,index) in drug" @click="ok(index)">
			<img :src="items.img">
			<p>{{items.name}}</p>
			<p class="sign_p"><span><i class="fa fa-pencil"></i>{{items.user_done_num}}人做过</span><span><i class="fa fa-star-o"></i>20人收藏</span></p>
		</div> -->
		<div class="sign" v-for="(items,index) in list" @click="click(index)">
			<img :src="items.head_image">
			<p v-if="renter">{{items.name}}</p>
			<p class="sign_p"><span><i class="fa fa-pencil"></i>{{items.do_num}}人做过</span><span><i class="fa fa-star-o"></i>{{items.collect_num}}人收藏</span></p>
		</div>
</div>
<script>
var id=getQueryStr("id");
var user_id=localStorage.getItem("user_id");
	var vm=new Vue({
		el:"#app",
		data:{
			renter:false,
			list:{},
		},
		mounted:function(){
			this.s();
		},
		methods:{
			s:function(res){	
				$.ajax({
					type:"post",
					dataType:"json",
					url:"http://toget.cn/home/course/lists",
					data:{
						category_id:id,
						user_id:user_id,
					},
					success:function(res){
						if(res.status=="ok"){
							this.renter=true;
							this.list=res.lists;
							console.log(res)
						}
					}.bind(this)
 
				})
			},
			click:function(index){
				var id=this.list[index].id;
				console.log(id)
				// var name=names;
				// console.log(name)
				window.location.href="detail.html?id="+id+"";
					
			},
			onClick:function(){
				window.history.go(-1);
			}
	}
})
</script>
</body>
</html>