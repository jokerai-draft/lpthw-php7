
简单派生链
https://www.phptutorial.net/php-oop/php-call-parent-constructor extender 类有自己的 constructor
https://stackoverflow.com/questions/39748226/must-i-call-parent-construct-in-the-first-line-of-the-constructor

ex40/proj2/ComputerPlayer.php

不需要工厂模式 即使用到了 extendee 的 constructor 直接用 parent::__construct(); 即可

<!-- 顶多有这样的问题
https://www.php.net/manual/zh/language.oop5.decon.php Example #1 Constructors in inheritance
https://stackoverflow.com/questions/1557608/how-do-i-get-a-php-class-constructor-to-call-its-parents-parents-constructor
https://stackoverflow.com/questions/40244181/is-it-mandatory-to-call-parent-construct-from-the-constructor-of-child-class






不会有这样的问题
Best way to do multiple constructors in PHP
https://www.php.net/manual/zh/language.oop5.decon.php#language.oop5.decon.constructor.static

更不会有这个
https://www.php.net/manual/zh/language.oop5.static.php#104823
https://www.php.net/manual/zh/language.oop5.late-static-bindings.php#122664

类似花式获取函数集

