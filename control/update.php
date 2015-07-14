<?php

/* 文件名字: update.php */

/* 制作人:刘建涛 */

/* 修改时间: 2014-8-20 20:45:18 */

/* 功能介绍:获取从tiji.php得到的数据发送给update2.php进行操作 */

include_once '../common/check.php';

include_once '../common/conn.php';

$title="订单修改";

include_once '../common/header.php';

if(isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "SELECT * FROM admin WHERE id='$id'";

		$query = mysql_query($sql);

		$rows = mysql_fetch_array($query);

		if($_SESSION['username']!="admin"){

			if($_SESSION['username']!=$rows['username']){
				echo "<script language='javascript'>alert('对不起，暂无权限！');location='../index.php';</script>";
				exit();
			}
			if($rows['state']=="已发货"){

			echo "<script language='javascript'>alert('对不起，此订单已发货暂时无法修改！');location='../index.php';</script>";

			exit();
			}

		}

		if($rows['state']=="已确认收货"){

		echo "<script language='javascript'>alert('对不起，此订单已确认收货暂时无法修改！');location='../index.php';</script>";

		exit();
		}

}

$username=$rows['username'];

$name=$rows['name'];

$product=$rows['product'];

$tel=$rows['tel'];

$address=$rows['address'];

$time=$rows['time'];

$ip=$rows['ip'];

$state=$rows['state'];

$express=$rows['express'];

$expresscode=$rows['expresscode'];

$money=$rows['money'];

$money2=$rows['money2'];

?>

<div id="templatemo_contact" class="container_wapper">

	<div class="container-fluid">

<?php

//用户修改界面

$user="<form method='post' class='am-form' action='update2.php'>
		<h2 class='am-text-center'>订单修改</h2>
		<hr>
		  <div class='am-g am-margin-top-sm'>
            <div class='am-u-sm-2 am-text-right'>
              收货人姓名
            </div>
            <div class='am-u-sm-4 am-u-end'>
              <input type='text' class='am-input-sm' name='name' id='name'>
            </div>
          </div>
          <div class='am-g am-margin-top-sm'>
            <div class='am-u-sm-2 am-text-right'>
              产品信息
            </div>
            <div class='am-u-sm-4 am-u-end'>
			  <textarea rows='4' name='product' id='product'></textarea>
            </div>
          </div>
		  <div class='am-g am-margin-top-sm'>
            <div class='am-u-sm-2 am-text-right'>
              电话号码
            </div>
            <div class='am-u-sm-4 am-u-end'>
              <input type='text' class='am-input-sm' name='tel' id='tel'>
            </div>
          </div>
          <div class='am-g am-margin-top-sm'>
            <div class='am-u-sm-2 am-text-right'>
              详细地址
            </div>
            <div class='am-u-sm-4 am-u-end'>
              <textarea rows='4' name='address' id='address'></textarea>
            </div>
          </div>
		  <div class='am-g am-margin-top-sm'>
            <div class='am-u-sm-2 am-text-right'>
              验证码
            </div>
            <div class='am-u-sm-4 am-u-end'>
              <input type='text' class='am-input-sm' name='auth' id='auth'>
			  <img src='../common/code.php?act=yes' align='middle' onClick='this.src=this.src+'?''>
            </div>
          </div>
	  <div class='am-margin'>
		<input type='hidden' name='id' id='id' value=".$id." />
		<input type='hidden' name='update' id='update' value='订单修改' />
		<input type='submit' class='am-btn am-btn-primary am-btn-xs' value='提交'>
		<input type='button' onClick='window.history.back()' class='am-btn am-btn-primary am-btn-xs' value='返回'>
	  </div>
        </form>";

//管理员修改界面

$admin="
<form method='post' class='am-form' action='update2.php'>
		<h2 class='am-text-center'>产品发货</h2>
		<hr>
		  <div class='am-g am-margin-top-sm'>
            <div class='am-u-sm-2 am-text-right'>
              货款
            </div>
            <div class='am-u-sm-4 am-u-end'>
              <input type='text' class='am-input-sm' name='money' id='money' value=".$money.">
            </div>
          </div>
          <div class='am-g am-margin-top-sm'>
            <div class='am-u-sm-2 am-text-right'>
              运费
            </div>
            <div class='am-u-sm-4 am-u-end'>
              <input type='text' class='am-input-sm' name='money2' id='money2' value=".$money2.">
            </div>
           </div>
          <div class='am-g am-margin-top-sm'>
            <div class='am-u-sm-2 am-text-right'>
              货款
            </div>
            <div class='am-u-sm-4 am-u-end'>
              <input type='text' class='am-input-sm' name='express' id='express' value=".$express.">
            </div>
          </div>
		  <div class='am-g am-margin-top-sm'>
            <div class='am-u-sm-2 am-text-right'>
              快递单号
            </div>
            <div class='am-u-sm-4 am-u-end'>
              <input type='text' class='am-input-sm' name='expresscode' id='expresscode' value=".$expresscode.">
            </div>
          </div>
		  <div class='am-g am-margin-top-sm'>
            <div class='am-u-sm-2 am-text-right'>
              验证码
            </div>
            <div class='am-u-sm-4 am-u-end'>
              <input type='text' class='am-input-sm' name='auth' id='auth'>
			  <img src='../common/code.php?act=yes' align='middle' onClick='this.src=this.src+'?''>
            </div>
          </div>
		  <div class='am-margin'>
			<input type='hidden' name='update' id='update' value='".$id."发货信息' />
			<input type='hidden' name='id' id='id' value=".$id." />
			<input type='hidden' name='email' id='email' value=".$email." />
			<input type='submit' class='am-btn am-btn-primary am-btn-xs' value='提交'>
			<input type='button' onClick='window.history.back()' class='am-btn am-btn-primary am-btn-xs' value='返回'>
		  </div>
        </form>";

if($_SESSION['username'] == "admin"){

	echo "$admin";

}else{

	echo "$user";

}

include_once '../common/footer.php';

?>