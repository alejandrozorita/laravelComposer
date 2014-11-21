<?php
/**
 * Created by PhpStorm.
 * User: AlejandroZorita
 * Date: 19/11/14
 * Time: 10:54
 */

namespace intranet\Components;
use Illuminate\Support\ServiceProvider;


class FieldServicesProvider extends ServiceProvider {

    public function register()
    {
        $this->app['field'] = $this->app->share(function($app)
        {
            $fieldBuilder = new FieldBuilder();
            return $fieldBuilder;
        });
    }
}