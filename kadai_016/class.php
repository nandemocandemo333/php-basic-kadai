<?php
        class Food {
            private $name;
            private $price;

            public function show_price(int $price) {
                $this->price =$price;
            }
            public function __construct(string $name,int $price) {
                $this->name =$name;
                $this->price =$price;
            }
        }
        $Food =new Food('potato',250);
        print_r($Food);
        ?>
        <br>
        <?php
        class Animal {
            private $name;
            private $height;
            private $weight;

            public function show_height(int $height) {
                $this->height =$height;
            }
            public function __construct(string $name,int $height,string $weight) {
                $this->name =$name;
                $this->height =$height;
                $this->weight =$weight;
            }
        }
        $Animal =new Animal('dog',60,5000);
        print_r($Animal);
        $Food->show_price(250);
        $Animal->show_height(60);

        ?>