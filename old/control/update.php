<?php
/* �ļ�����: update.php */
/* ������:������ */
/* �޸�ʱ��: 2014-8-20 20:45:18 */
/* ���ܽ���:��ȡ��tiji.php�õ������ݷ��͸�update2.php���в��� */
include_once '../common/check.php';
include_once '../common/conn.php';
$title="�����޸�";
include_once '../common/header.php';
if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM admin WHERE id='$id'";
		$query = mysql_query($sql);
		$rows = mysql_fetch_array($query);
		if($_SESSION['username']!="admin"){
			if($rows['state']=="�ѷ���"){
			echo "<script language='javascript'>alert('�Բ��𣬴˶����ѷ�����ʱ�޷��޸ģ�');location='../index.php';</script>";
			}
		}
		if($rows['state']=="��ȷ���ջ�"){
		echo "<script language='javascript'>alert('�Բ��𣬴˶�����ȷ���ջ���ʱ�޷��޸ģ�');location='../index.php';</script>";
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
//�û��޸Ľ���
$user="<form action='update2.php' method='post' class='col-md-8' id='form1' name='form1'>
            <div class='row'>
                <div class='col-md-12'>
                <h2>�޸Ĳ�Ʒ����</h2>
                </div>
                <div class='col-md-6'>
                    <p>�ջ�������</p>
                    <input type='text' name='name' id='name' value=".$name." />
                </div>
				<div class='col-md-6'>
                    <p>��Ʒ��Ϣ</p>
                    <input type='text' name='product' id='product' value=".$product." />
                </div>
                <div class='col-md-6'>
                    <p>�绰����</p>
                    <input type='text' name='tel' id='tel' value=".$tel." />
                </div>
				<div class='col-md-12'>
                    <p>��ϸ��ַ</p>
                    <textarea name='address' id='address' />".$address."</textarea>
				</div>
				<div class='col-md-6'>
					<p>��������������ն�������</p>
					<input type='text' name='email' id='email' value=".$email." />
				</div>
				<div class='col-md-6'>
                    <p>��֤�룺</p>
					<input type='text' name='auth' class='input' id='auth' placeholder='�����·����ַ�'>
					<img src='../common/code.php?act=yes' align='middle' onClick='this.src=this.src+'?'''>
                </div>
				<div class='col-md-6'>
					<p>���������û���</p>
					<input type='text' name='username' id='username' placeholder='���������û���ȷ����ݣ������û����ǣ�".$username."' />
				</div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='submit' name='Submit' class='button' value='�ύ' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='button' name='button' class='button' onclick='javascript:history.go(-1)' value='����' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='hidden' name='update' id='update' value='�����޸�' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='hidden' name='id' id='id' value=".$id." />
                </div>
            </div>
			</div>
        </form>";
//����Ա�޸Ľ���
$admin="<form action='update2.php' method='post' class='col-md-8' id='form1' name='form1'>
            <div class='row'>
                <div class='col-md-12'>
                <h2>��Ʒ����</h2>
                </div>
                <div class='col-md-6'>
                    <p>����</p>
                    <input type='text' name='money' id='money' placeholder=".$money." />
                </div>
				<div class='col-md-6'>
                    <p>�˷�</p>
                    <input type='text' name='money2' id='money2' placeholder=".$money2." />
                </div>
                <div class='col-md-6'>
                    <p>��ݹ�˾</p>
                    <select name='express'>
					<option value=zhongtong>��ͨ���</option>
					</select>
                </div>
				<div class='col-md-6'>
                    <p>��ݵ���</p>
                    <input type='text' name='expresscode' id='expresscode' placeholder=".$expresscode." />
                </div>
				<div class='col-md-6'>
                    <p>��֤�룺</p>
					<input type='text' name='auth' class='input' id='auth' placeholder='�����·����ַ�'>
					<img src='../common/code.php?act=yes' align='middle' onClick='this.src=this.src+'?'''>
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='submit' name='Submit' class='button' value='�ύ' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='button' name='button' class='button' onclick='javascript:history.go(-1)' value='����' />
                </div>
				<div class='col-xs-6 col-sm-3'>
                    <input type='hidden' name='update' id='update' value='".$id."������Ϣ' />
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