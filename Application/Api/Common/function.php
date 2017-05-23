<?php
	function subAll($id){
		$catalogue = M("catalogue"); // 实例化catalogue对象
		$map['id'] = $id;
		$map['type'] = '章节练习';
		$a = $catalogue->where(array('course_id'=>$map['id'],'type'=>$map['type']))->count(); 
		$q['status'] = 0;
		$b = $catalogue->where(array('course_id'=>$map['id'],'type'=>$map['type'],'status'=>$q))->count(); 
		$c = "$a"-"$b";
		return($c);
	}
	function subOff($id){
		$catalogue = M("catalogue"); // 实例化catalogue对象
		$map['status'] = '2';
		$map['id'] = $id;
		$map['type'] = '章节练习';
		$a = $catalogue->where(array('course_id'=>$map['id'],'status'=>$map['status'],'type'=>$map['type']))->count();
		return($a);
	}
	function examAll($id){
		$catalogue = M("catalogue"); // 实例化catalogue对象
		$map['id'] = $id;
		$map['type'] = '真题训练';
		$a = $catalogue->where(array('course_id'=>$map['id'],'type'=>$map['type']))->count(); 
		$q['status'] = 0;
		$b = $catalogue->where(array('course_id'=>$map['id'],'type'=>$map['type'],'status'=>$q))->count(); 
		$c = "$a"-"$b";
		return($c);
	}
	function examOff($id){
		$catalogue = M("catalogue"); // 实例化catalogue对象
		$map['status'] = '2';
		$map['id'] = $id;
		$map['type'] = '真题训练';
		$a = $catalogue->where(array('course_id'=>$map['id'],'status'=>$map['status'],'type'=>$map['type']))->count();
		return($a);
	}function testAll($id){
		$catalogue = M("catalogue"); // 实例化catalogue对象
		$map['id'] = $id;
		$map['type'] = '模拟试卷';
		$a = $catalogue->where(array('course_id'=>$map['id'],'type'=>$map['type']))->count(); 
		$q['status'] = 0;
		$b = $catalogue->where(array('course_id'=>$map['id'],'type'=>$map['type'],'status'=>$q))->count(); 
		$c = "$a"-"$b";
		return($c);
	}
	function testOff($id){
		$catalogue = M("catalogue"); // 实例化catalogue对象
		$map['status'] = '2';
		$map['id'] = $id;
		$map['type'] = '模拟试卷';
		$a = $catalogue->where(array('course_id'=>$map['id'],'status'=>$map['status'],'type'=>$map['type']))->count();
		return($a);
	}