(function() { //加载
    var obj =  {};
    /**
    * 动态加载脚本函数
    * @param url 要加载的脚本路径
    * @param callback  回调函数
    */
    obj.loadScript =function(url,callback){
        var doc = document;
        var script = doc.createElement("script");
        script.type = "text/javascript";
        if(script.readyState){ //IE
            script.onreadystatechange = function(){
                if(script.readyState=="load"||script.readyState=="complete"){
                script.onreadystatechange = null;
                callback();
                }
            };
        }else{
            script.onload = function(){
                callback();
            };
        }
        script.src = url;
        doc.getElementsByTagName("head")[0].appendChild(script);
    };
    var jsList = [
        "/vendor/livetool/js/small/liveroom.js?t="+Math.random(),
        "/vendor/livetool/js/small/bmstic.js?t="+Math.random(),
        "/vendor/livetool/js/small/bmsim.js?t="+Math.random(),
        "/vendor/livetool/js/small/bmsboard.js?t="+Math.random(),
        "/vendor/livetool/js/small/bmsrtc.js?t="+Math.random(),
        "/vendor/livetool/js/small/bmsajax.js?t="+Math.random(),
    ];
    function callback(){
        jsList.length?obj.loadScript(jsList.shift(),callback)
        :(function(){
            time =null;
            liveroom.init(bmstic, bmsim, bmsboard, bmsrtc, bmsajax);
        })();
    }
    var time = setTimeout(function(){obj.loadScript(jsList.shift(),callback)},10);
})();