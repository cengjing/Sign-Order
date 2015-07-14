<?php

include_once 'common/check.php';

?>

	<div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>订单提交</small></div>
    </div>
        <form method="post" class="am-form" action="control/order.php">
		  <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">
              收货人姓名
            </div>
            <div class="am-u-sm-4 am-u-end">
              <input type="text" class="am-input-sm" name="name" id="name">
            </div>
          </div>
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">
              产品信息
            </div>
            <div class="am-u-sm-4 am-u-end">
			  <textarea rows="4" name="product" id="product"></textarea>
            </div>
          </div>
		  <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">
              电话号码
            </div>
            <div class="am-u-sm-4 am-u-end">
              <input type="text" class="am-input-sm" name="tel" id="tel">
            </div>
          </div>
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">
              详细地址
            </div>
            <div class="am-u-sm-4 am-u-end">
				<textarea rows="4" name="address" id="address"></textarea>
            </div>
          </div>
		  <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">
              验证码
            </div>
            <div class="am-u-sm-4 am-u-end">
              <input type="text" class="am-input-sm" name="auth" id="auth">
			  <img src="/common/code.php?act=yes" align="middle" onClick="this.src=this.src+'?'">
            </div>
          </div>
		  <div class="am-margin">
		<input type="hidden" name="update" id="update" value="新订单"/>
		<input type="submit" class="am-btn am-btn-primary am-btn-xs" value="提交">
		<input type="reset" class="am-btn am-btn-primary am-btn-xs" value="重置">
	  </div>
        </form>