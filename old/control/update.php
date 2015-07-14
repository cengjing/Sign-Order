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
			if($rows['state']=="已发货"){
			echo "<script language='javascript'>alert('对不起，此订单已发货暂时无法修改！');location='../index.php';</script>";
			}
		}
		if($rows['state']=="已确认收货"){
		echo "<script language='javascript'>alert('对不起，此订单已确认收货暂时无法修改！');location='../index.php';</script>";
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
$email=$rows['email'];
?>
<div id="templatemo_contact" class="container_wapper">
	<div class="container-fluid">
<?php
//用户修改界面
$user="<form action='update2.php' method='post' class='col-md-8' id='form1' name='form1'>
            <div class='row'>
                <div class='col-md-12'>
                <h2>修改产品订单</h2>
                </div>
                <div class='col-md-6'>
                    <p>收货人姓名</p>
                    <input type='text' name='name' id='name' value=".$name." />
                </div>
				<div class='col-md-6'>
                    <p>产品信息</p>
                    <input type='text' name='product' id='product' value=".$product." />
                </div>
                <div class='col-md-6'>
                    <p>电话号码</p>
                    <input type='text' name='tel' id='tel' value=".$tel." />
                </div>
				<div class='col-md-12'>
                    <p>详细地址</p>
                    <textarea name='address' id='address' />".$address."</textarea>
				</div>
				<div class='col-md-6'>
					<p>输入您的邮箱接收订单反馈</p>
					<input type='text' name='email' id='email' value=".$email." />
				</div>
				<div class='col-md-6'>
                    <p>验证码：</p>
					<input type='text' name='auth' class='input' id='auth' placeholder='输入下方的字符'>
					<img src='../common/code.php?act=yes' align='middle' onClick='this.src=this.src+'?'''>
                </div>
				<div class='col-md-6'>
					<p>输入您的用户名</p>
					<input type='text' name='username' id='username' placeholder='输入您的用户名确认身份，您的用户名是：".$username."' />
				</div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='submit' name='Submit' class='button' value='提交' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='button' name='button' class='button' onclick='javascript:history.go(-1)' value='返回' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='hidden' name='update' id='update' value='订单修改' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='hidden' name='id' id='id' value=".$id." />
                </div>
            </div>
			</div>
        </form>";
//管理员修改界面
$admin="<form action='update2.php' method='post' class='col-md-8' id='form1' name='form1'>
            <div class='row'>
                <div class='col-md-12'>
                <h2>产品发货</h2>
                </div>
                <div class='col-md-6'>
                    <p>货款</p>
                    <input type='text' name='money' id='money' placeholder=".$money." />
                </div>
				<div class='col-md-6'>
                    <p>运费</p>
                    <input type='text' name='money2' id='money2' placeholder=".$money2." />
                </div>
                <div class='col-md-6'>
                    <p>快递公司</p>
                    <select name='express'>
					<option value=zhongtong>中通快递</option>
					</select>
                </div>
				<div class='col-md-6'>
                    <p>快递单号</p>
                    <input type='text' name='expresscode' id='expresscode' placeholder=".$expresscode." />
                </div>
				<div class='col-md-6'>
                    <p>验证码：</p>
					<input type='text' name='auth' class='input' id='auth' placeholder='输入下方的字符'>
					<img src='../common/code.php?act=yes' align='middle' onClick='this.src=this.src+'?'''>
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='submit' name='Submit' class='button' value='提交' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='button' name='button' class='button' onclick='javascript:history.go(-1)' value='返回' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='hidden' name='update' id='update' value='".$id."发货信息' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='hidden' name='id' id='id' value=".$id." />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='hidden' name='email' id='email' value=".$email." />
                </div>
            </div>
			</div>
        </form>";
if($_SESSION['username'] == "admin"){
	echo "$admin";
}else{
	echo "$user";
}
include_once '../common/footer.php';
?>