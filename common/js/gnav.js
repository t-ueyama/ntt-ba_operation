
$(function () {

    var pre = '';
    var requrl = window.location.pathname;
    if (requrl.match(/staging/)) {
        pre = '/nttba/staging';
        requrl = requrl.replace(pre, '');
    }

    var linkOffObj = {
        m1: '<img src="' + pre + '/common/img/gnavi_r2_c1.png" alt="NTTビジネスアソシエの特長" />',
        m2: '<img src="' + pre + '/common/img/gnavi_r2_c2.png" alt="サービスメニュー" />',
        m3: '<img src="' + pre + '/common/img/gnavi_r2_c3.png" alt="導入事例" />',
        m4: '<img src="' + pre + '/common/img/gnavi_r2_c4.png" alt="最新情報" />',
        m5: '<img src="' + pre + '/common/img/gnavi_r2_c5.png" alt="企業情報" />'
    };

    var linkOnObj = {
        m1: '<a href="' + pre + '/concept/"><em><img src="' + pre + '/common/img/gnavi_r2_c1.png" alt="NTTビジネスアソシエの特長" /></em></a>',
        m2: '<a href="' + pre + '/service/"><em><img src="' + pre + '/common/img/gnavi_r2_c2.png" alt="サービスメニュー" /></em></a>',
        m3: '<a href="' + pre + '/case/"><em><img src="' + pre + '/common/img/gnavi_r2_c3.png" alt="導入事例" /></em></a>',
        m4: '<a href="' + pre + '/topics/"><em><img src="' + pre + '/common/img/gnavi_r2_c4.png" alt="最新情報" /></em></a>',
        m5: '<a href="' + pre + '/company/"><em><img src="' + pre + '/common/img/gnavi_r2_c5.png" alt="企業情報" /></em></a>'
    };

    var paths = requrl.split("/");
    var url = "/" + paths[1] + "/";
    var url2 = paths[2];

    $('.gnv_btn li a').each(function() {
        if ($(this).attr("href").match(url)) {
            $(this).parent().attr('id', 'current');
            var classname = $(this).parent().attr("class");
            if ((url2 == "index.html") || (url2 == "")) {
                $(this).parent().html(linkOffObj[classname]);
            } else {
                $(this).parent().html(linkOnObj[classname]);
            }
           return;
        }
    });


});