<?php echo $this->fetch('./inc/header.html'); ?>
<?php
	$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/goods_information.css";
	$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/public.css";		
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['pagecss'],
);
echo $k['name']($k['v']);
?>" />
<!--商品详情-->
<div class="blank15"></div>
    <div class="goods_information_bor0">
    	<div class="show_img"><img src="<?php echo $this->_var['data']['img']; ?>"/></div>
		<h5><?php echo $this->_var['data']['goods']['name']; ?></h5>
		<ul class="Property">
			<li>所属类别：<?php echo $this->_var['data']['goods']['cate_name']; ?></li>
			<li>所需积分：<span class="c_ff4a4a"><?php if ($this->_var['data']['goods']['score'] > 0): ?><?php echo $this->_var['data']['goods']['score']; ?><?php else: ?>0<?php endif; ?></span>/分</li>
			<li>剩余数量：<span class="c_ff4a4a"><?php echo $this->_var['data']['goods']['max_bought_format']; ?></span>/份</li>
			<li>兑换人数：<?php if ($this->_var['data']['goods']['invented_number'] > 0): ?><?php echo $this->_var['data']['goods']['invented_number']; ?><?php else: ?>0<?php endif; ?>人</li>
		</ul>
		<div class="blank5"></div>
		
		<ul class="Property_choose">
			<li>
				<span class="name">兑换数量</span>
				<div class="nun_choose clearfix">
					<span class="Minus f_l">−</span>
				    <input type="text" name="number" id="number"  value="1" class="nun f_l"/>
				    <span class="Plus f_l">+</span>
				</div>
			</li>
			
			<!--
			<li>
				<span class="name">选择型号</span>
				<label for="0" class="Model">x0<input  id="0" type="radio" class="mt" name="Model"></label>
				<label for="1" class="Model">x1<input  id="1" type="radio" class="mt" name="Model"></label>
				<label for="2" class="Model">x2<input  id="2" type="radio" class="mt" name="Model"></label>
				<label for="3" class="Model">x3<input  id="3" type="radio" class="mt" name="Model"></label>
				<label for="4" class="Model">x4<input  id="4" type="radio" class="mt" name="Model"></label>
				<label for="5" class="Model">x5<input  id="5" type="radio" class="mt" name="Model"></label>
				<label for="6" class="Model">x6<input  id="6" type="radio" class="mt" name="Model"></label>
				<label for="7" class="Model">x7<input  id="7" type="radio" class="mt" name="Model"></label>
				<label for="8" class="Model">x8<input  id="8" type="radio" class="mt" name="Model"></label>
				<label for="9" class="Model">x9<input  id="9" type="radio" class="mt" name="Model"></label>
				<label for="10" class="Model">x10<input  id="10" type="radio" class="mt" name="Model"></label>
			</li>
			<li>
				<span class="name">选择颜色</span>
				<label for="c_0" class="Model">赤<input  id="c_0" type="radio" class="mt" name="Model"></label>
				<label for="c_1" class="Model">澄<input  id="c_1" type="radio" class="mt" name="Model"></label>
				<label for="c_2" class="Model">黄<input  id="c_2" type="radio" class="mt" name="Model"></label>
				<label for="c_3" class="Model">绿<input  id="c_3" type="radio" class="mt" name="Model"></label>
				<label for="c_4" class="Model">青<input  id="c_4" type="radio" class="mt" name="Model"></label>
				<label for="c_5" class="Model">蓝<input  id="c_5" type="radio" class="mt" name="Model"></label>
				<label for="c_6" class="Model">紫<input  id="c_6" type="radio" class="mt" name="Model"></label>
				<label for="c_7" class="Model">白<input  id="c_7" type="radio" class="mt" name="Model"></label>
				<label for="c_8" class="Model">棕<input  id="c_8" type="radio" class="mt" name="Model"></label>
				<label for="c_9" class="Model">褐<input  id="c_9" type="radio" class="mt" name="Model"></label>
				<label for="c_10" class="Model">粉<input  id="c_10" type="radio" class="mt" name="Model"></label>
			</li> -->
			
		</ul>
		<div class="new-but-block ">
			<div class="but-block">
				<input id="goods_id" name="goods_id" type="hidden" value="<?php echo $this->_var['data']['goods']['id']; ?>" />
		     	<button id="submitt" class="but_sure">立即兑换</button> 
			</div>
		</div>
		
    </div>
<div class="blank15"></div>
<div class="Product_Details">
	<h5>商品详情</h5>
	<div class="Details"><!--此处是输出后天编辑材料，没有按图写代码-->
		<?php echo $this->_var['data']['goods']['description']; ?>
	</div>
</div>
<div class="blank15"></div>

<div class="float_block" style=" display:none;"><!--本是隐藏，先显示，看具体情况处理-->
	<div class="float_background"></div>
	<div class="choose_address">
		<h5>
			<span class="name">收货地址</span>
			<span class="close"><i class="fa fa-close"></i></span>
		</h5>
		<div class="a_nav">
			<span class="y">选择地址</span>
			<a href="#" class="add">新增地址</a>
		</div>
		<div class="address_list">
			<label class="y">
				<i class="fa fa-toggle-off"></i>
				<i class="fa fa-toggle-on"></i>
				<input type="radio" checked="checked" name="address" />
				群升国际E区111
			</label>
			<label>
				<i class="fa fa-toggle-off"></i>
				<i class="fa fa-toggle-on"></i>
				<input type="radio"  name="address" />
				群升国际E区111
			</label>
			<label>
				<i class="fa fa-toggle-off"></i>
				<i class="fa fa-toggle-on"></i>
				<input type="radio"  name="address" />
				群升国际E区111
			</label>
		</div>
		<div class="blank10"></div>
		<div class="sure_block">
			<div class="sure_but">
				<button>确认</button>
			</div>
	        <span class="Cancel_but close">取消</span>
		</div>
	</div>
	</div>
	<script>
//        $(".address_list label").click(function(){
//        	$(this).siblings().removeClass("y");
//			$(this).addClass("y");
//        });
//        $(".choose_address .close").click(function(){
//        	$(this).parents(".float_block").hide();
//        });
	</script>
<script>
	$(document).ready(function(){

      $(".Model").click(function(){
			if(	!$(this).hasClass("y"))
		{
			$(this).siblings().removeClass("y");
			$(this).addClass("y");
		}
		});
		
		$(".Minus").click(function(){
			var x=$(".nun_choose .nun").val();
			if(x>1)
			{
				x-=1;
				$(".nun_choose .nun").val(x);
			}
			else
			{
				alert("数量不能小于1");
				$(".nun_choose .nun").val(1);
			}
		});
		$(".Plus").click(function(){
			var x=$(".nun_choose .nun").val();
			var y=<?php echo $this->_var['data']['user_can_buy_number']; ?>;//20暂代库存
		//	var y=20;
			if(x>(y-1))
			{
				
				alert("数量不能大于库存");
				$(".nun_choose .nun").val(y);
			}
			else
			{
				x=parseInt(x) + 1;
				$(".nun_choose .nun").val(x);
			}
		});


		
	});
</script>

<script type="text/javascript">

$("#submitt").click(function(){
		var ajaxurl = '<?php
echo parse_wap_url_tag("u:index|goods_exchange|"."".""); 
?>';
		var id =  $.trim($("#goods_id").val());
		var number =  $.trim($("#number").val());
		var query = new Object();
		query.number = $.trim($("#number").val());
		query.id = $.trim($("#goods_id").val());
		query.post_type = "json";
		$.ajax({
			url:ajaxurl,
			data:query,
			type:"Post",
			dataType:"json",
			success:function(data){
				//alert(data.show_err);
				if(data.response_code == 0){
					alert(data.show_err);
					window.location.href = '<?php
echo parse_wap_url_tag("u:index|login|"."".""); 
?>';
				}else{
					window.location.href = '<?php
echo parse_wap_url_tag("u:index|goods_exchange|"."id=".$this->_var['data']['goods']['id']."".""); 
?>&number='+number;
				}
				
			}
		
		});
		
	});

</script>
<?php echo $this->fetch('./inc/footer.html'); ?>

