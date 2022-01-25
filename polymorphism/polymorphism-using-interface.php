<?php

interface Greeting
{
    public function greet();
}
?>
<?php
// ...
class English implements Greeting
{
    public function greet()
    {
        return 'Hello!';
    }
}

class German implements Greeting
{
    public function greet()
    {
        return 'Hallo!';
    }
}

class French implements Greeting
{
    public function greet()
    {
        return 'Bonjour!';
    }
}
