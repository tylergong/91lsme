<?php

// 网站根目录
define('WEB_SITES_URL', 'http://www1.91lsme.com');
// 开启debug打印
define('WEB_DEBUG', false);
// 是否启用静态页地址（首页，文章列表页，文章页）
define('PAGE_STATIC', false);
// 页面缓存是否开始（true or false）（首页，文章列表页，文章页）
define('PAGE_MODEL', false);
define('CACHE_LIFETIME', 3600);
// 每页记录条数（前台列表）
define('PAGE_SIZE', 8);
// 分页分组间隔
define('PAGE_SPACE', 3);
// 每页记录条数（后台列表）
define('PAGE_ADMIN_SIZE', 10);
// 首页广告图显示个数
define('INDEX_AD_NUM', 5);
// 首页列表显示条数
define('INDEX_LIST_NUM', 8);


// 微信
define('WEIXIN_APPID', 'wxe2bc72465ff9c38b');
define('WEIXIN_APPSECRET', 'a2e2a4ce8096f2b8645bd7a9b3ac2680');
define('WEIXIN_TOKEN', 'tylergong');
// 回复
define("DEFAULT_STRING", "--------------------------\n想查天气？回复【天气@城市名】既可，天气状况就能跃然眼前哦~！\n\n想查附近有啥？回复【附近@目标关键词】既可，帮你搜索附近5公里的目标哦~！\n\n想查快递？太简单了，输入【快递@快递单号】即可~。方便又快捷~~\n\n想查地铁？直接回复【地铁】~~总能查到方便又可靠的行程路线~~！\n\n【隐藏功能】上传你一张您的头像或者是您和他人的合照头像试试吧~~~~~\n--------------------------\n");
define("DEFAULT_STRING1", "欢迎使用【听我说】，您可以按以下格式进行查询。\n");
define("DEFAULT_STRING2", "真是不好意思呀，对于您说的我还没有理解透彻哦，\n");
define("DEFAULT_STRING3", "你好呀，如果你想和我聊天，那可能是听说君还没有加入智能芯片哦，这次就不和您聊了，拍出丑的啦。不过也许将来就不好说了~~~\n");
define("DEFAULT_STRING4", "欢迎您关注【听我说】公众平台！\n这里将会有您意想不到的精彩和感悟！不要错过哦！\n如果你觉得这里很棒的话，快点推荐给你的朋友吧！\n");
define("DEFAULT_STRING5", "【听我说】已经成功获取您的位置。不过您不用担心您的行踪被泄漏，因为您随时可以把千里之外的地址提交过来。\n--------------------------\n现在可以发送【附近@目标关键词】，就会帮你搜索附近5公里的目标哦");
define("DEFAULT_STRING6", "提交失败，请重试。如果一直出现这样的错误，请给我们留言。");
define("DEFAULT_STRING7", "您的地理位置已经过期，请重新发送您位置给我！当然~您不用担心您的行踪被泄漏，因为您可以滑动地图，把别处的地址发送过来。");
define("DEFAULT_STRING8", "系统中没有您的地理位置信息，请先发送位置给我！您不用担心您的行踪被泄漏，因为您可以滑动地图，把别处的地址发送过来。");
// 百度map
define('BAIDU_APPID', '2147476152');
define('BAIDU_AK', '09E0957ecbdd3f9fbd7f95b7efc3471e');
// Face++
define('FACE_APIKEY', 'da1e056bf6c1070705e689e9a4b9bacd');
define('FACE_APISECRET', 'NMkRAy5I6Wj4dxQQNg31xQOD-MGtGeTS');
define('FACE_APIURL', 'http://apicn.faceplusplus.com/');
