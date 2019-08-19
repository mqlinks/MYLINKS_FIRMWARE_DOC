# M0E1系列WIFI模块AT指令(MQTT透传)版本说明

## 一.WIFI固件下载

**MQTT版本固件下载地址：[点击查看](http://mqlinks.tpddns.cn:1888/kodexplorer/index.php?share/folder&user=100&sid=IfrKCUMb)**

## 二.版本说明

## 发布日期:2019.8.18 版本号:3.0.0.030

1.增加AT+GPIOEN的指令，可以使用mqtt直接控制GPIO4和GPIO5的高低电平。具体使用[点击查看](https://blog.csdn.net/mqlinks/article/details/99712224)


## 发布日期:2019.8.13 版本号:3.0.0.029

1.使用最新3.0.0 SDK编译。

## 发布日期:2019.8.9 版本号:2.2.1.029

1.增加对mylinks_tools.exe的支持，可以在局域网中升级更新设备。


## 发布日期:2019.6.22 版本号:2.2.1.028

1.AT+UART可以正确的设置串口的数据位，停止位，检验位。

2.从比版本开始，当模块烧写全部的BIN文件后，设备将支持非劢领智能ESP8266模块临时32次的使用权限。

## 发布日期:2019.5.5    版本号:2.2.1.027

1.增加AT+DNS指令，可以解析域名为IP地址。

2.增加AT+TCPCONNECT，可以在AT指令下建立一个TCP的服务器。

3.增加T+TCPSEND，可以在AT指令下发送数据。

4.增加AT+TCPCLS，可以关闭TCP连接。
