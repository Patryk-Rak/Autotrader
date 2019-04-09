<?php
namespace AppBundle\Menu;
use Knp\Menu\MenuFactory;

class Builder
{
    public function MainMenu(MenuFactory $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu -> setChildrenAttribute('class', 'navbar-nav');
        $menu ->addChild('Home', ['route' => 'homepage']);
        $menu ->addChild('Offer', ['route' => 'offer']);
        return $menu;
    }
}