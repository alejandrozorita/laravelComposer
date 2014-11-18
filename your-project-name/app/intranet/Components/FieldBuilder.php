<?php
/**
 * User: AlejandroZorita
 * Date: 18/11/14
 * Time: 10:21
 */

namespace intranet\Components;

class FieldBuilder {

    protected $defaultClass = [
        'default' => 'form-control',
        'checkbox' => '',
        'default' => '',
        'default' => '',
        'default' => ''
    ];

    public function getDefaultClass($type)
    {
        if(isset($this->defaultClass[$type]))
        {
            return $this->defaultClass[$type];
        }

        return $this->defaultClass['default'];
    }


    public function buildCssClasses($type, &$attributes)
    {
        $defaultClasses = $this->getDefaultClass($type);
        if(isset ($attributes['class']))
        {
            $attributes['class'] .= ' '. $defaultClasses;
        }
        else
        {
            $attributes['class'] = $defaultClasses;
        }
    }


    public function buildLablel($name)
    {
        if(\Lang::has('validation.attributes.' . $name))
        {
            $label = \Lang::get('validation.attributes.' . $name);
        }
        else
        {
            $label = (str_replace('_', ' ', $name));
        }

        return ucfirst($label);

    }

    public function buildControl($type, $name, $value = null, $attribures = array(), $option = array())
    {
        switch ($type)
        {
            case 'select':
                return \Form::select($name, $options, $value, $attributes);
            case 'password':
                return \Form::password($name, $attributes);
            case 'checkbox':
                return \Form::checkbox($name);
            default:
                return \Form::select($type, $name, $value, $attributes);
        }
    }

    public function buildError($name)
    {

    }

    public function buildTemplate()
    {

    }

    public function input($type, $name, $value = null, $attributes = array(), $options = array())
    {
        $this->buildCssClasses($type, $attributes);
        $labe = $this->buildLablel($name);
        $control = $this->buildControl($type, $name, $value, $attributes, $options);
        $error = $this->buildError($name);
        $template = $this->buildTemplate($type);

        return \View::make($template, compact('name','label','control','error'));
    }

}