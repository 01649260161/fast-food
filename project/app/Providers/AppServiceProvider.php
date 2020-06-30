<?php

namespace App\Providers;
use App\Model\Admin\ConfigModel;
use App\Model\Admin\ContactModel;
use App\Model\Admin\MenuItemModel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $items1 = ContactModel::all();
        $contact =array();
        $contact[] ='email';
        $contact[] ='phone';
        $contact[] ='address';
        $contact[] ='web_intro';

        $default1 =array();

        //Tạo Mặc định cho mảng contact
        foreach ($contact as $item_contact){

            if (!isset($items1[$item_contact])){
                $default1[$item_contact] = '';
            }
        }
        
        //Lấy từ CSDL ra đè lại mảng $default1

        foreach ($items1 as $item){
            $key = $item->name;
            $default1[$key]=$item->value;
        }


        $items = ConfigModel::all();

        $config =array();
        $config[] ='web_name';
        $config[] ='header_logo';
        $config[] ='footer_logo';
        $config[] ='web_intro';
        $config[] ='desc';

        $default =array();

        //Tạo Mặc định cho mảng config
        foreach ($config as $item_config){

            if (!isset($items[$item_config])){
                $default[$item_config] = '';
            }


        }

        //Lấy từ CSDL ra đè lại mảng $default

        foreach ($items as $item){

            $key =$item->name;
            $default[$key]=$item->value;


        }

        $global_setting=$default;
        $global_contact=$default1;
        //
        Schema::defaultStringLength(191);
        $menus_items_header =MenuItemModel::getMenuItemsByHeader();
        $menus_items_header_html =MenuItemModel::getMenuUlLi($menus_items_header);
        $menus_items_footer1 =MenuItemModel::getMenuItemsByFooter1();
        $menus_items_footer2 =MenuItemModel::getMenuItemsByFooter2();
        $menus_items_footer3 =MenuItemModel::getMenuItemsByFooter3();



        View::share('fe_global_setting',$global_setting);
        View::share('fe_global_contact',$global_contact);
        //View::share('fe_total_qtt_cart',$total_qtt_cart);
        View::share('fe_menus_items_header',$menus_items_header);
        View::share('fe_menus_items_header_html',$menus_items_header_html);
        View::share('fe_menus_items_footer1',$menus_items_footer1);
        View::share('fe_menus_items_footer2',$menus_items_footer2);
        View::share('fe_menus_items_footer3',$menus_items_footer3);
    }

}
