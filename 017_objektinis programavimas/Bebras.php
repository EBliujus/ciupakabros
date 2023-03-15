<?php

class Bebras {
/*     galim suteikti savybe , pvz.: kaip stiliu. savybe turi tris skirtingus matomumo lygius:(prieinamuma): 1. pasiekiamumas ir matomumas ---> Public;
     2. Protected savybe ---->>>> seima gali prieitil
     3. Padaryti tik sau prieinama,  ---->>>>PRIVAT
    visos savybes turi tureti matomumo savybes pirmoj eilej!!!!! */
    /* jeigu avybej nieko nepriskiriam igauna savybe NULL -> daznai naudojami obj.programavime */
    /* PUBLIC/PRIVATE/PROTECTED */
    /* funkcijos  jei norim if'int viska daryti funkcijoj...*/
    public $color;
    // pasileidzia su kiekvienu NEW pavartojimu
    public function __construct()
    {
        $this -> color = ['rudas', 'geltonas', 'melynas', 'zalias'][rand(0, 3)];
         
    }
    // 
    public function __destruct() 
    {
        echo '<h1> Bebras Dingo </h1>';
    }

    public function __invoke() 
    {
        echo '<h1> ALIO </h1>';
    }


    public function kokiaTavoSpalva() 
    {
        // return 'Nezinau';
        return $this->color;
    }
}