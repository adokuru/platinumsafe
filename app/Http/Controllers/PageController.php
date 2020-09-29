<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PageController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loadPage($layout = 'side-menu', $pageName = 'dashboard')
    {   
        $activeMenu = $this->activeMenu($layout, $pageName);
        return view('pages/' . $pageName, [
            'side_menu' => $this->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'layout' => $layout,
        ]);
    }

    /**
     * Determine active menu & submenu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function activeMenu($layout, $pageName)
    {
        $firstPageName = '';
        $secondPageName = '';
        $thirdPageName = '';

        if ($layout == 'top-menu') {
            foreach ($this->topMenu() as $menu) {
                if ($menu['page_name'] == $pageName && empty($firstPageName)) {
                    $firstPageName = $menu['page_name'];
                }

                if (isset($menu['sub_menu'])) {
                    foreach ($menu['sub_menu'] as $subMenu) {
                        if ($subMenu['page_name'] == $pageName && empty($secondPageName) && $subMenu['page_name'] != 'dashboard') {
                            $firstPageName = $menu['page_name'];
                            $secondPageName = $subMenu['page_name'];
                        }

                        if (isset($subMenu['sub_menu'])) {
                            foreach ($subMenu['sub_menu'] as $lastSubmenu) {
                                if ($lastSubmenu['page_name'] == $pageName) {
                                    $firstPageName = $menu['page_name'];
                                    $secondPageName = $subMenu['page_name'];
                                    $thirdPageName = $lastSubmenu['page_name'];
                                }       
                            }
                        }
                    }
                }
            }
        } else if ($layout == 'simple-menu') {
            foreach ($this->simpleMenu() as $menu) {
                if ($menu !== 'devider' && $menu['page_name'] == $pageName && empty($firstPageName)) {
                    $firstPageName = $menu['page_name'];
                }

                if (isset($menu['sub_menu'])) {
                    foreach ($menu['sub_menu'] as $subMenu) {
                        if ($subMenu['page_name'] == $pageName && empty($secondPageName) && $subMenu['page_name'] != 'dashboard') {
                            $firstPageName = $menu['page_name'];
                            $secondPageName = $subMenu['page_name'];
                        }

                        if (isset($subMenu['sub_menu'])) {
                            foreach ($subMenu['sub_menu'] as $lastSubmenu) {
                                if ($lastSubmenu['page_name'] == $pageName) {
                                    $firstPageName = $menu['page_name'];
                                    $secondPageName = $subMenu['page_name'];
                                    $thirdPageName = $lastSubmenu['page_name'];
                                }       
                            }
                        }
                    }
                }
            }
        } else {
            foreach ($this->sideMenu() as $menu) {
                if ($menu !== 'devider' && $menu['page_name'] == $pageName && empty($firstPageName)) {
                    $firstPageName = $menu['page_name'];
                }

                if (isset($menu['sub_menu'])) {
                    foreach ($menu['sub_menu'] as $subMenu) {
                        if ($subMenu['page_name'] == $pageName && empty($secondPageName) && $subMenu['page_name'] != 'dashboard') {
                            $firstPageName = $menu['page_name'];
                            $secondPageName = $subMenu['page_name'];
                        }

                        if (isset($subMenu['sub_menu'])) {
                            foreach ($subMenu['sub_menu'] as $lastSubmenu) {
                                if ($lastSubmenu['page_name'] == $pageName) {
                                    $firstPageName = $menu['page_name'];
                                    $secondPageName = $subMenu['page_name'];
                                    $thirdPageName = $lastSubmenu['page_name'];
                                }       
                            }
                        }
                    }
                }
            }
        }

        return [
            'first_page_name' => $firstPageName,
            'second_page_name' => $secondPageName,
            'third_page_name' => $thirdPageName
        ];
    }

    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sideMenu()
    {
        if (auth()->user()->hasRole('Admin')) {
            return [
                'dashboard' => [
                    'icon' => 'home',
                    'layout' => 'side-menu',
                    'page_name' => 'dashboard',
                    'title' => 'Dashboard'
                ],
                
                'gold' => [
                    'icon' => 'hexagon',
                    'layout' => 'side-menu',
                    'page_name' => 'stones',
                    'title' => 'Precious Metal Storage'
                ],
                'box' => [
                    'icon' => 'box',
                    'layout' => 'side-menu',
                    'page_name' => 'box',
                    'title' => 'Safety Deposit Box '
                ],
                'fine-arts-storage' => [
                    'icon' => 'book-open',
                    'layout' => 'side-menu',
                    'page_name' => 'arts',
                    'title' => 'Fine Arts Storage'
                ]
                    
                
            ];
        }else{
            return [
                'dashboard' => [
                    'icon' => 'home',
                    'layout' => 'side-menu',
                    'page_name' => 'dashboard',
                    'title' => 'Dashboard'
                ],
                
                'gold' => [
                    'icon' => 'hexagon',
                    'layout' => 'side-menu',
                    'page_name' => 'stones',
                    'title' => 'Precious Metal Storage'
                ],
                'box' => [
                    'icon' => 'box',
                    'layout' => 'side-menu',
                    'page_name' => 'box',
                    'title' => 'Safety Deposit Box '
                ],
                'fine-arts-storage' => [
                    'icon' => 'book-open',
                    'layout' => 'side-menu',
                    'page_name' => 'arts',
                    'title' => 'Fine Arts Storage'
                ]
                  
            ];
        }
    }



}
