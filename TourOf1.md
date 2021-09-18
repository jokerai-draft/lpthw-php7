#
Tour Of Array

array 的高级用法, 是隐藏在各个 ex 里的，比如
- 金句 "array_walk 是 foreach 的变体"

这种隐藏办法的缺点是不方便速查
这种隐藏办法是可以深入浅出的告诉是如何联想到某一点的 (往往是通过先想到数据结构, 然后想到数据结构的操作)
- 一种老旧的数据结构 indexed array 也叫 简单列表 简单数组 list
```php
$arr1 = ['apple', 'banana', 'coconut', 'donut', ];
```
- 一种全新的数据结构 associative array 也叫 hash table 哈希表 / 键值对 / kv 对 / dict 比如
```php
$arr1 = ['morning' => 'sunny', 'afternoon' => 'cloudy', 'evening' => 'rainy', ];
```
- 组合型的数据结构 比如
```php
$dummyEntities = [
    ['id' => 1, 'title' => 'title1', 'body' => 'lorem lisa'],
    ['id' => 2, 'title' => 'title2', 'body' => 'umt asphilt dor'],
];
```

对于老旧的数据结构，有以下几个常见操作:
- 数组变字符串 (implode)

对于组合型数据结构，有以下几个常见操作:
- 找出符合条件的某一个 record 且不改变原数组 (array_filter)
- 对数组做整体操作且不改变原数组 (array_map)
- 对数组做整体操作且改变原数组 (array_walk) *
- 将非数组变量 数组化 然后进行操作 且改变原数组 (array_walk) *   <-

#### 1
常见于 loginMap 对比、 getById 等

#### 2
#### 3
常见于 policy helper (set 'can' field for each article entity in $articles) 比如 articlePolicyHelper

#### 4
"将非数组变量 数组化" <-
会用在函数参数 ‘既可以是数组, 又可以是变量’ 的情况里, 即使传入的不是数组 也在初步处理(unify)之后当作数组
它会引出一个问题 "php check if array is an associative array"

# 评论区

将非数组变量 数组化 <-
最后是用了办法四(尤其是躲过了办法三)
```php
//办法一
class ArticleController
{
    public function show($id) {
        $this->state['article'] = ['title' => 'title1', 'body' => 'umt asphilt', 'user_id' => 2, 'id'=> 2,];
          $arr = [&$this->state['article'], ];
        $this->articlePolicyHelper($arr);
    }
    private function articlePolicyHelper(&$articles) {
        // set 'can' field for each article entity in $articles
        $credentialUserId = 2;
        array_walk($articles, function(&$v, $k) use ($credentialUserId) {
            $v['can'] = false;
            $articleUserId = $v['user_id'];
            $v['can'] = $credentialUserId === $articleUserId;
        });
    }
}
$a = new ArticleController();
$a->show(2);
print_r($a->state); // work, explicit
```
```php
//办法二
class ArticleController
{
    public function show($id) {
        $this->state['article'] = ['title' => 'title1', 'body' => 'umt asphilt', 'user_id' => 2, 'id'=> 2,];
          $arr = [&$this->state['article'], ];
        $this->articlePolicyHelper([&$this->state['article'], ]);
    }
    private function articlePolicyHelper(&$articles) {
        // set 'can' field for each article entity in $articles
        $credentialUserId = 2;
        array_walk($articles, function(&$v, $k) use ($credentialUserId) {
            $v['can'] = false;
            $articleUserId = $v['user_id'];
            $v['can'] = $credentialUserId === $articleUserId;
        });
    }
}
$a = new ArticleController();
$a->show(2);
print_r($a->state); // not work
```
```php
//办法三
class ArticleController
{
    public function show($id) {
        $this->state['article'] = ['title' => 'title1', 'body' => 'umt asphilt', 'user_id' => 2, 'id'=> 2,];
          // $arr = [&$this->state['article'], ];
        $this->articlePolicyHelper([&$this->state['article'], ]);  // 这里的 & 是必须
    }
    private function articlePolicyHelper($articles) {  // 这里故意去掉了 &
        // set 'can' field for each article entity in $articles
        $credentialUserId = 2;
        array_walk($articles, function(&$v, $k) use ($credentialUserId) {
            $v['can'] = false;
            $articleUserId = $v['user_id'];
            $v['can'] = $credentialUserId === $articleUserId;
        });
    }
}
$a = new ArticleController();
$a->show(2);
print_r($a->state); // work (but not explicit) (defect is huge 因为 函数参数故意去掉了 &)

```
```php
//办法四
class ArticleController
{
    public function show($id) {
        $this->state['article'] = ['title' => 'title1', 'body' => 'umt asphilt', 'user_id' => 2, 'id'=> 2,];
          $articles = [&$this->state['article'], ]; // pointer
        $this->articlePolicyHelper($articles);
          unset($articles);
    }
    private function articlePolicyHelper(&$articles) {
        // set 'can' field for each article entity in $articles
        $credentialUserId = 2;
        array_walk($articles, function(&$v, $k) use ($credentialUserId) {
            $v['can'] = false;
            $articleUserId = $v['user_id'];
            $v['can'] = $credentialUserId === $articleUserId;
        });
    }
}
$a = new ArticleController();
$a->show(2);
print_r($a->state); // work, so far so good
```
