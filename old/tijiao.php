<?php
include_once 'common/check.php';
?>
<form action="control/order.php" method="post" class="col-md-8" id="form1" name="form1">
            <div class="row">
                <div class="col-md-12">
                <h2>提交产品订单</h2>
                </div>
                <div class="col-md-6">
                    <p>收货人姓名</p>
                    <input type="text" name="name" id="name" placeholder="收货人的姓名" />
                </div>
				<div class="col-md-6">
                    <p>产品信息</p>
                    <input type="text" name="product" id="product" placeholder="需要的产品" />
                </div>
                <div class="col-md-6">
                    <p>电话号码</p>
                    <input type="text" name="tel" id="tel" placeholder="收货人电话号码" />
                </div>
				<div class="col-md-12">
                    <p>详细地址</p>
                    <textarea name="address" id="address" /></textarea>
				</div>
				<div class="col-md-6">
                    <p>验证码：</p>
					<input type="text" name="auth" class="input" id="auth" placeholder="输入下方的字符">
					<img src="/common/code.php?act=yes" onClick="this.src=this.src+'?'" align="middle">
                </div>
				<div class="col-md-6">
					<p>输入您的用户名</p>
					<input type="text" name="username" id="username" placeholder="输入您的用户名确认身份，您的用户名是：<?php echo "$username" ?>">
				</div>
				<div class="col-md-6">
					<p>输入您的邮箱接收订单反馈</p>
					<input type="text" name="email" id="email" placeholder="输入您的邮箱接收订单反馈，请勿输入收货人的邮箱！">
				</div>
				<div class="col-xs-6 col-sm-3">
                    <input type="hidden" name="update" id="update" value="新订单"/>
                </div>
				<div class="col-xs-6 col-sm-3">
                    <input type="submit" name="Submit" class="button" value="提交" />
                </div>
                <div class="col-xs-6 col-sm-3">
                    <input type="reset" name="reset" class="button" value="重置" />
                </div>
            </div>
        </form>
		<hr/>