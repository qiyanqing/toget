<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作业</title>
	<!-- <link rel="stylesheet" href="./css/details.css"> -->
	<link rel="stylesheet" href="/Public/Api/css/home.css">
	<link rel="stylesheet" href="/Public/Api/css/font-awesome.css">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no">
	<script type="text/javascript" src="/Public/Api/js/jquery-3.2.0.min.js"></script>
	<script src="/Public/Api/js/vue.js"></script>
	<script src="/Public/Api/js/details.js"></script>
</head>
<body>
	<div class="app">
		<p class="app_p">题库</p>
		<div class="App_p">
			<ul class="center_ul clearfix">
				<li class="center_li" v-for="items in drugs"><a :href="items.address"><img :src="items.img" alt=""></a></li>
			</ul>
		</div>
		<div class="pointer">
			<p><span class="owner" v-for="items in drugs"></span></p>
		</div>
		<div class="sign" v-for="(items,index) in drug" @click="ok(index)">
			<img :src="items.head_image">
			<p>{{items.name}}</p>
			<p class="sign_p"><span><i class="fa fa-pencil"></i>{{items.do_num}}人做过</span><span @click.stop="onclick(index)"><i :class="items.is_collect_status==true?'fa fa-star':'fa fa-star-o'"></i>{{items.collect_num}}人收藏</span></p>
		</div>
		<!-- <div class="sign">
			<img src="./image/java.png" >
			<p>java语言程序设计</p>
			<p class="sign_p"><span><i class="fa fa-pencil"></i>18人做过</span><span><i class="fa fa-star-o"></i>20人收藏</span></p>
		</div> -->
	</div>
	<div class="bottom clearfix">
		<div class="bottom_div">
			<img src="/Public/Api/image/book.png" alt=""><p class="color">题库</p>
		</div>
		<div class="bottom_div" @click="classify">
			<img src="/Public/Api/image/four.jpg" alt=""><p>分类</p>
		</div>
		<div class="bottom_div">
			<img src="/Public/Api/image/person.png" alt=""><p>我的</p>
		</div>
	</div>
<script>
	var user_id=localStorage.getItem("user_id");
	console.log(user_id)
	var vm=new Vue({
		el:".app",
		data:{
			// show:false,
			drug:{},
			drugs:{},
			collect:[],
		},
		mounted:function(){
			this.s();
		},
		methods:{
			s:function(res){
				$.ajax({
					type:"post",
					dataType:"json",
					url:"/index.php/home/index/index",
					data:{
						user_id:user_id,
					},
					success:function(res){
						if(res.status=="ok"){
							console.log(res);
							this.drug=res.lists;
							this.drugs=res.ad;
							for(var i=0;i<this.drug.length;i++){
									this.collect.push(this.drug[i].is_collect_status);
							}
							console.log(this.collect)
							
						}
						console.log(this.drug);
					}.bind(this)
 
				})
			},
			ok:function(index){
				var name=this.drug[index].name;
				var id=this.drug[index].id;
				window.location.href="/index.php/Api/category/detail.html?id="+id+"&name="+name+"";
			},
			onclick:function(index){
				var course_id=this.drug[index].id;
				if(this.collect[index]==false){
					this.collect.splice(index,1,true);
					$.ajax({
						type:"post",
						dataType:"json",
						url:"/index.php/home/course/addcollect",
						data:{
							user_id:user_id,
							course_id:course_id,
						},
						success:function(res){
							
							this.s();
						}.bind(this)
	 
					})
				}else{
					this.collect.splice(index,1,false);
					$.ajax({
						type:"post",
						dataType:"json",
						url:"/index.php/home/course/uncollect",
						data:{
							user_id:user_id,
							course_id:course_id,
						},
						success:function(res){
							this.s();
						}.bind(this)
	 
					})
				}
				
			}

		}
	})
	var  bottom=new Vue({
		el:".bottom",
		data:{

		},
		methods:{
			classify:function(){
			window.location.href="/index.php/Api/category/lists";
			}
		}
	})
</script>
</body>
</html>