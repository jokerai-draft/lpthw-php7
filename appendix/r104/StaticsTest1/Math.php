<?php
// math service
class Math
{
    private static $state;
    public static function getState() {
        if (!isset(self::$state)) { self::initState(); } // effect
      return self::$state;
    }

    public static function updateState($payload = 1) { // int
          if (!isset(self::$state)) { self::initState(); } // effect
        self::$state['counter'] += (int)$payload; // new item add to list, get the new list
    }

    // heavy effect, acturally
    private static function initState() {
        if (true) {
            self::$state = [];
            $arr1 = ['result' => 2, 'writtingTimes' => 0, 'counter' => 0, ];
            ++$arr1['writtingTimes'];
            self::$state = array_merge(self::$state, $arr1);
            self::$state['randomNumber'] = 42;
        }
    }

}
