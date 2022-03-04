<?php
/*
 Overloading adalah untuk membuat property dan juga method.
 Ketika membuat property itu akan menghasilkan property yang visibility typenya itu berupa protected dan juga private

 - Dalam PHP ada empat properti overloading, yaitu:
    public void __set ( string $name , mixed $value )
    public mixed __get ( string $name )
    public bool __isset ( string $name )
    public void __unset ( string $name )
    Keterangan :

    (untuk membuat magic methods ini method functionya harus public tidak boleh private atau protected ataupun static)
    __set() dijalankan ketika menulis data pada properti yang tidak dapat diakses.
    __get() digunakan untuk membaca data dari properti yang tidak dapat diakses.
    __isset() dipicu dengan memanggil method isset() atau empty() pada properti yang tidak dapat diakses.
    __unset() dipanggil saat  method unset() digunakan pada properti yang tidak dapat diakses.


 Ketika membuat method itu akan menghasilkan method yang visibility typenya itu berupa public protected dan juga private

 Method Overloading
 - Dalam PHP ada dua method overloading, yaitu :

    public mixed __call ( string $name , array $arguments )
    public static mixed __callStatic ( string $name , array $arguments )

    Keterangan :

    __call() dipicu ketika memanggil method yang tidak dapat diakses didalam object
    __callStatic() dipicu ketika memanggil method yang tidak dapat diakses didalam static

 */



// OVERLOADING PROPERTY

class PropertyTest
{
    /**  Location for overloaded data.  */
    private $data = array();

    /**  Overloading not used on declared properties. Dalam mendeklarasikan overloading dalam type visibility
     *  public itu tidak akan bisa.
     */
    public $declared = 1;

    /**  Overloading only used on this when accessed outside the class.  */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Setting " . $name . " to " . $value . "\n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting " . $name . "\n";

        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        $trace = debug_backtrace();
        trigger_error("Undefined property via __get(): " . $name . " in " . $trace[0]['file'] . " on line " . $trace[0]['line'], E_USER_NOTICE);
        return null;
    }

    public function __isset($name)
    {
        echo "Is " . $name . "set?\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Unsetting " . $name . "\n";
        unset($this->data[$name]);
    }


    /**  Not a magic method, just here for example.  */
    public function getHidden()
    {
        return $this->hidden;
    }
}


echo "<pre>\n";

$obj = new PropertyTest;

$obj->a = 2;
$obj->b = 100;
echo "\n\n";
echo $obj->a . "\n";
$hasil = $obj->b * $obj->a;
echo ($hasil) . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";

echo $obj->declared . "\n\n";

echo "Let's experiment with the private property named 'hidden':\n";
echo "Privates are visible inside the class, so __get() not used...\n";
echo $obj->getHidden() . "\n";
echo "Privates not visible outside of class, so __get() is used...\n";
echo $obj->hidden . "\n";


class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value dari $name adalah case sensitive.  
        echo "Memanggil method '$name' " . $arguments[0] . "<br/>";
    }

    public static function __callStatic($name, $arguments)
    {
        // Note: value dari $name adalah case sensitive.  
        echo "Memanggil method '$name' "
            . implode(', ', $arguments) . "<br/>";
    }
}

$obj = new MethodTest;

$obj->Jalankan('->pada konteks Object', ['tes', 'tes']);
MethodTest::Jalankan('->pada konteks Static');
