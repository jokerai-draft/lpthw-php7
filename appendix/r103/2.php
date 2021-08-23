<?php
// 如何让一个载入页去从一个脚本里拿数据

$age = 11;


/*
// 暂时用不到 autoload class
// https://stackoverflow.com/a/2418744

// 暂时用不到 state 管理
方式一 component 统一管理单变量 $state 并接受服务 updateState  github.com/hecrj/iced#overview
方式二 (自然路由) 到达载入页 由一个载入页管理自己的 state  // 之前的路由是 生成一个实例, 现在没有实例 类似 模板开发 类似 procedural+未分出view层
方式三 mvc // 自己管理着好几个 view 通过判断 state 看激活谁; 通过路由参数 看激活到哪个controller@action
  完全可以把 /index.php?route=post&action=create 美化成 /posts/create , 通过 htaccess PHP Simple Routing System https://youtu.be/6reEBParHzQ

