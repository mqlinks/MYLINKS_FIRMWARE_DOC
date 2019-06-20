<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx342b72af88b3fefb", "31c6e229c9f4b366767b144d939ec426");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>劢领WiFi快速配置</title>
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="stylesheet" href="/weicat/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="/weicat/common.css" media="screen" type="text/css" />
    
    <link rel="stylesheet" href="/weicat/wifi-config.css" media="screen" type="text/css" /> 
    
    <script src="/weicat/zepto.min.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script src="/weicat/common.js"></script>
</head>

<body>

  <div class="pic">
    <div class="wifi"></div>
  </div>
  <div class="tips">
    <ul>
      <li>1. 确保当前手机已连接路由器</li>
      <li>2. 请按下WiFi模组上的配置引脚</li>
      <li>3. 配置指示灯闪烁后点击开始配置</li>
    </ul>
  </div>
  <div class="action">
    开始配置
  </div>

  <script>
  wx.config({
    debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
        'configWXDeviceWiFi',
        'scanQRCode'
    ]
  });
  wx.ready(function(){
    $('.action').click(function(){
		WeixinJSBridge.invoke('configWXDeviceWiFi', {}, function(res){
		  if(res.err_msg == 'configWXDeviceWiFi:ok'){
			alert('配置成功!');
			wx.closeWindow();
		  }else if(res.err_msg == 'configWXDeviceWiFi:cancel')
		  {
			alert('已取消配置！');
			wx.closeWindow();
		  }else {
			alert('配置失败！请重试');
		  }
		});
    });
  });
    wx.error(function (res) {
  
    });
  </script>
    
    <div class="ui-blocker" style="display:none">
      <div class="ui-blocker-wrapper">
        <div class="ui-blocker-spinner"></div>
      </div>
    </div>
</body>

</html>