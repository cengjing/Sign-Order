<?php
include_once 'common/check.php';
?>
<form action="control/order.php" method="post" class="col-md-8" id="form1" name="form1">
            <div class="row">
                <div class="col-md-12">
                <h2>�ύ��Ʒ����</h2>
                </div>
                <div class="col-md-6">
                    <p>�ջ�������</p>
                    <input type="text" name="name" id="name" placeholder="�ջ��˵�����" />
                </div>
				<div class="col-md-6">
                    <p>��Ʒ��Ϣ</p>
                    <input type="text" name="product" id="product" placeholder="��Ҫ�Ĳ�Ʒ" />
                </div>
                <div class="col-md-6">
                    <p>�绰����</p>
                    <input type="text" name="tel" id="tel" placeholder="�ջ��˵绰����" />
                </div>
				<div class="col-md-12">
                    <p>��ϸ��ַ</p>
                    <textarea name="address" id="address" /></textarea>
				</div>
				<div class="col-md-6">
                    <p>��֤�룺</p>
					<input type="text" name="auth" class="input" id="auth" placeholder="�����·����ַ�">
					<img src="/common/code.php?act=yes" onClick="this.src=this.src+'?'" align="middle">
                </div>
				<div class="col-md-6">
					<p>���������û���</p>
					<input type="text" name="username" id="username" placeholder="���������û���ȷ����ݣ������û����ǣ�<?php echo "$username" ?>">
				</div>
				<div class="col-md-6">
					<p>��������������ն�������</p>
					<input type="text" name="email" id="email" placeholder="��������������ն������������������ջ��˵����䣡">
				</div>
				<div class="col-xs-6 col-sm-3">
                    <input type="hidden" name="update" id="update" value="�¶���"/>
                </div>
				<div class="col-xs-6 col-sm-3">
                    <input type="submit" name="Submit" class="button" value="�ύ" />
                </div>
                <div class="col-xs-6 col-sm-3">
                    <input type="reset" name="reset" class="button" value="����" />
                </div>
            </div>
        </form>
		<hr/>