 <?php 
namespace Api\Model;
use Think\Model;
class CatalogueModel extends Model{ 
	function subAll(){
		$catalogue = M("catalogue"); // 实例化catalogue对象
		$map = 'status>0';
		$a = $catalogue->where($map)->count(); 
		return($a);
	}
}	