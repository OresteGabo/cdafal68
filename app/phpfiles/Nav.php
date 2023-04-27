<?php

namespace App\phpfiles;


$navData=[
    ['url' => 'kids', 'icon' => 'home', 'label' => "Acceuil"],
    ['url' => 'dashboard', 'icon' => 'dashboard', 'label' => "Dashboard"],
    ['url' => 'notifications', 'icon' => 'notifications', 'label' => "Notification"],
    ['url' => 'adherents', 'icon' => 'person', 'label' => "Adhérents"],
    ['url' => 'kids', 'icon' => 'child_care', 'label' => "Enfants"],
    ['url' => 'kids', 'icon' => 'euro', 'label' => "Cotisations"],
    ['url' => 'kids', 'icon' => 'construction', 'label' => "Activités"]
];

class Nav
{


    // Properties
    public $activeIndex;

    //Constructor
    public function __construct($activeIndex)
    {
        $this->activeIndex = $activeIndex;
    }

    // Methods
    public function set_activeIndex($activeIndex)
    {
        $this->activeIndex = $activeIndex;
    }

    public function get_activeIndex()
    {
        return $this->activeIndex;
    }

    public function getNav1()
    {
        return [
            ['url' => 'home', 'icon' => 'home', 'label' => "Acceuil"],
            ['url' => 'dashboard', 'icon' => 'dashboard', 'label' => "Dashboard"],
            ['url' => 'notifications', 'icon' => 'notifications', 'label' => "Notification"],
            ['url' => 'adherent', 'icon' => 'person', 'label' => "Adhérents"],
            ['url' => 'kids', 'icon' => 'child_care', 'label' => "Enfants"],
            ['url' => 'cotisations', 'icon' => 'euro', 'label' => "Cotisations"],
            ['url' => 'activities', 'icon' => 'construction', 'label' => "Activités"]
        ];
    }

    public function getNav2()
    {
        return [
            ['url' => 'formations', 'icon' => 'school', 'label' => "Sites des formations", 'active' => $this->activeIndex == 7 ? 'active' : $this->activeIndex],
            ['url' => 'setting', 'icon' => 'settings', 'label' => "Parametres", 'active' => $this->activeIndex == 8 ? 'active' : $this->activeIndex],
            ['url' => 'logout', 'icon' => 'logout', 'label' => "Déconnection", 'active' => $this->activeIndex == 9 ? 'active' : $this->activeIndex]
        ];
    }
    public function getThis(){
        return new Nav($this->activeIndex);
    }

}


