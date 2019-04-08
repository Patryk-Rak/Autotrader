<?php
namespace AppBundle\Menu;
use Knp\Menu\MenuFactory;

class Builder
{
    public function MainMenu(MenuFactory $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu ->addChild('Home', ['route' => 'homepage']);
        return $menu;
    }
}