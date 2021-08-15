<?php declare(strict_types=1);

if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Blueberry.php');

class Catalog
{
    public int $catalogid,$journalid;
    public ?string $journal=null;
    public static string $edition="January-February 2020";
    var bool $flag;
    public float $f=1;
    public function __construct(int $catalogid,int $journalid,string $journal,bool $flag)
    {
        $this->catalogid = $catalogid;
        $this->journalid = $journalid;
        $this->journal = $journal;
        $this->flag = $flag;
    }
}

$c = new Catalog(123,345,"PHP Magazine",true);
echo "Catalogid: ".$c->catalogid."\n";
echo "Journalid: ".$c->journalid."\n";
echo "Journal: ".$c->journal."\n";
echo "Flag: ".$c->flag."\n";
echo "Edition: ".Catalog::$edition."\n";

// https://www.infoq.com/articles/php7-new-type-features/
