/*
* @Author: Administrator
* @Date:   2017-09-17 20:14:52
* @Last Modified by:   Administrator
* @Last Modified time: 2017-09-17 21:26:15
*/
window.onload = function(){
    let img1 = document.getElementById("img1");
    let img2 = document.getElementById("img2");
    let tem = 1;
    setInterval(function(){
        if(tem ==1){
            img1.style.display='none';
            img2.style.display='block';
            tem =0;
        }else{
            img2.style.display='none';
            img1.style.display='block';
            tem =1;
        }
    },3000)
}
