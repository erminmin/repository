'use strict';

/** 
 * 按设备尺寸设置根字体
 * @param {num} 设计源尺寸
 */
function resize(origin) {
    var clientW=document.documentElement.clientWidth;//屏幕的大小
    var origin=origin;//实际的盒子的大小  设计的尺寸以及屏幕上显示的尺寸
    var bili=clientW/origin*100;
    document.getElementsByTagName("html")[0].style.fontSize=bili+"px";
}
resize(750);