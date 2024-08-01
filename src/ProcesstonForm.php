<?php

namespace Processton\ProcesstonForm;
use Processton\ProcesstonInteraction\ProcesstonInteraction;
use Processton\ProcesstonInteraction\ProcesstonInteractionWidth;

class ProcesstonForm
{
    public static function generateForm(
        $title, 
        $submitAt = '', 
        $schema = [],
        $value = [],
        $attachments = [],
        $subTitle = '',
        $width = false,
        $name = ''
    ){
        return ProcesstonInteraction::generateElement(
            'form',
            $title,
            self::generateFormData($schema, $value, $submitAt),
            $subTitle,
            $attachments,
            [],
            $width,
            (
                $name ? $name : $title
            )
        );
    }

    public static function generateFormFromURL(
        $dataSrc,
        $title = '',
        $submitAt = '',
        $attachments = [],
        $subTitle = '',
        $width = false,
        $name = ''
    ) {
        return ProcesstonInteraction::generateElementByUrl(
            $dataSrc,
            $title,
            $subTitle,
            'form',
            $attachments,
            [],
            $width,
            (
                $name ? $name : $title
            )
        );
    }
    public static function generateFormData($schema, $data, $submitAt){

        return [
            'form' => $schema,
            'submitAt' => $submitAt,
            'values' => $data
        ];

    }

    public static function generateFormSchema($title, $type, $rows = [], $name = '', $before_form = null, $after_form = null){

        return [
            'name' => $name ? $name : $title,
            'title' => $title,
            'type' => $type,
            'rows' => $rows,
            'before_form' => $before_form,
            'after_form' => $after_form
        ];

    }
    
    public static function generateFormRows(...$rows){
        
        return $rows;
    }
    
    public static function generateFormRow(
        $elements,
        $show_when = [],
        $group_label = '',
        $group_description = '',
        $title = '',
        $type = 'row',
        $width = false,
    ){
        return [
            'width' => $width instanceof ProcesstonInteractionWidth ? $width->toArray() : ProcesstonInteraction::width(12, 12, 12)->toArray(),
            'title' => $title,
            'type' => $type,
            'group_label' => $group_label,
            'group_description' => $group_description,
            'tabs' => [],
            'sections' => [],
            'elements' => $elements,
            'show_when' => $show_when,
        ];
    }
    public static function generateFormRowElement(
        $label,
        $type,
        $map,
        $value = null,
        $required = false,
        $info = '',
        $show_when = [] ,
        $options = [],
        $url = '',
        $elements = [],
        $defaultCountry = '',
        $attachments = [],
        $allow_new = false,
        $step = null,
        $width = false,
    ){
        return [
            'label' => $label,
            'type' => $type,
            'required' => $required,
            'map' => $map,
            'options' => $options,
            'show_when' => $show_when,
            'url' => $url,
            'info' => $info,
            'value' => $value,
            'config' => [
                'elements' => $elements,
                'defaultCountry' => $defaultCountry,
                'attachments' => $attachments,
                'allow_new' => $allow_new,
                'step' => $step,
            ],
            'width' => $width instanceof ProcesstonInteractionWidth ? $width->toArray() : ProcesstonInteraction::width(12, 12, 12)->toArray(),
        ];
    }
}
