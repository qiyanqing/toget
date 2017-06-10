<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>工学</title>
	<link rel="stylesheet" href="/Public/Api/css/technology.css">
	<link rel="stylesheet" href="/Public/Api/css/font-awesome.css">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no">
	<script type="text/javascript" src="/Public/Api/js/jquery-3.2.0.min.js"></script>
	<script src="/Public/Api/js/vue.js"></script>
	<script src="/Public/Api/js/function.js"></script>
</head>
<body>
<div id="ok">
	<div class="app">
		<p class="app_p" v-if="renter"><img src="/Public/Api/image/return.png" @click="click">{{drugs.cate_info.name}}<img src="/Public/Api/image/Search.png"></p>
	</div>
	<div class="center">
		<div class="center_div" v-for="(items,index1) in drugs.lists">
			<p class="center_p" v-if="renter"><i class="fa" :class="'fa-'+items.icon"></i>{{items.name}}</p>
			<ul class="center_ul clearfix">
				<li v-for="(item,index) in items.child" @click="demo(index,index1)" v-if="renter"><a href="#">{{item.name}}</a></li>
			</ul>
		</div>
	</div>
</div>
<script>
	var vm=new Vue({
	el:"#ok",
	data:{
		renter:false,
		drugs:{},
	},
	mounted:function(){
		this.s();
	},
	methods:{
		s:function(res){
			var parent_id=getQueryStr("parent_id");
			console.log(parent_id)
			var name=getQueryStr("name");
			$.ajax({
				type:"post",
				dataType:"json",
				url:"http://toget.cn/index.php/home/category/lists",
				data:{
					parent_id:parent_id,
					name:name,
				},
				success:function(res){
					if(res.status=="ok"){
						this.renter=true;
						this.drugs=res;
						console.log(res)
					}
				}.bind(this)

			})
		},
		demo:function(index,index1){
		var category_id=this.drugs.lists[index1].child[index].id;
		console.log(category_id)
		// var name=this.drugs.lists[index1].child[index].name;
		window.location.href="course_l.html?id="+category_id+"";
	},
	click:function(){
		window.history.go(-1);
	}
	}
})
	</script>
</body>
</html>