
简单派生链
https://www.phptutorial.net/php-oop/php-call-parent-constructor extender 类有自己的 constructor
https://stackoverflow.com/questions/39748226/must-i-call-parent-construct-in-the-first-line-of-the-constructor

ex40/proj2/ComputerPlayer.php

不需要工厂模式 即使用到了 extendee 的 constructor 直接用 parent::__construct(); 即可
