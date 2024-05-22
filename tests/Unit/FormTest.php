<?php

namespace Processton\ProcesstonForm\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Processton\ProcesstonForm\ProcesstonForm;
use Processton\ProcesstonGridList\ProcesstonGridList;

class FormTest extends TestCase
{
    public function test_form(): void
    {
        $content = ProcesstonForm::generateForm(
            'Title',
            'abc.com/submit-form',
            ProcesstonForm::generateFormRows([
                ProcesstonForm::generateFormRow(
                    [
                        ProcesstonForm::generateFormRowElement(
                            'label',
                            'text',
                            'map'
                        )
                    ],
                    [],
                    '',
                    '',
                    '',
                    'row',
                )
            
            ])
        );

        $expected = [
            'type' => 'form',
            'title' => 'Title',
            'subtitle' => '',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => '',
                'attachments' => [],
            ],
            'name' => 'Title',
            'data' => [
                'form' => [
                    [
                        [
                            'title' => '',
                            'type' => 'row',
                            'group_label' => '',
                            'group_description' => '',
                            'tabs' => [],
                            'sections' => [],
                            'elements' => [
                                [
                                    'label' => 'label',
                                    'type' => 'text',
                                    'required' => false,
                                    'map' => 'map',
                                    'options' => [],
                                    'show_when' => [],
                                    'url' => '',
                                    'info' => '',
                                    'value' => null,
                                    'config' => [
                                        'elements' => [],
                                        'defaultCountry' => '',
                                        'attachments' => [],
                                        'allow_new' => false,
                                        'step' => null,
                                    ],
                                    'width' => [
                                        'sm' => 12,
                                        'lg' => 12,
                                        'md' => 12,
                                        'xs' => 12,
                                        'xxs' => 12,
                                        'xxxs' => 12,
                                        'xl' => 12,
                                        'xxl' => 12,
                                        'xxxl' => 12
                                    ],
                                ]
                            ],
                            'show_when' => [],
                            'width' => [
                                'sm' => 12,
                                'lg' => 12,
                                'md' => 12,
                                'xs' => 12,
                                'xxs' => 12,
                                'xxxs' => 12,
                                'xl' => 12,
                                'xxl' => 12,
                                'xxxl' => 12
                            ],
                        ]
                    ]
                ],
                'values' => [],
                'submitAt' => 'abc.com/submit-form',
            ],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_empty_form(): void
    {
        $content = ProcesstonForm::generateForm(
            'Title',
            'abc.com/submit-form',
        );

        $expected = [
            'type' => 'form',
            'title' => 'Title',
            'subtitle' => '',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => '',
                'attachments' => [],
            ],
            'name' => 'Title',
            'data' => [
                'form' => [],
                'values' => [],
                'submitAt' => 'abc.com/submit-form',
            ],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }
    public function test_form_url(): void
    {
        $content = ProcesstonForm::generateFormFromURL(
            'abc.com/structure',
            'Title'
        );

        $expected = [
            'type' => 'form',
            'title' => 'Title',
            'subtitle' => '',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => 'abc.com/structure',
                'attachments' => [],
            ],
            'name' => 'Title',
            'data' => [
            ],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }
    public function test_form_data(): void
    {
        $content = ProcesstonForm::generateFormData(
            [],
            [],
            'abc.com/submit-form',
        );

        $expected = [
            'form' => [],
            'values' => [],
            'submitAt' => 'abc.com/submit-form',

        ];

        $this->assertEquals($expected, $content);

    }
    public function test_form_schema(): void
    {
        $content = ProcesstonForm::generateFormSchema(
            'Title',
            'form',
            []
        );

        $expected = [
            'name' => 'Title',
            'title' => 'Title',
            'type' => 'form',
            'rows' => []
        ];

        $this->assertEquals($expected, $content);

    }
    public function test_form_rows(): void
    {
        $content = ProcesstonForm::generateFormRows([]);

        $expected = [
            []
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_form_row(): void
    {
        $content = ProcesstonForm::generateFormRow(
            [],
            [],
            '',
            '',
            '',
            'row',
        );

        $expected = [
            'type' => 'row',
            'title' => '',
            'group_label' => '',
            'group_description' => '',
            'tabs' => [],
            'sections' => [],
            'elements' => [],
            'show_when' => [],
            'width' => [
                'xxxs' => 12,
                'xxs' => 12,
                'xs' => 12,
                'sm' => 12,
                'md' => 12,
                'lg' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12,
            ]
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_form_row_element(): void
    {
        $content = ProcesstonForm::generateFormRowElement(
            'label',
            'text',
            'map'
        );

        $expected = [
            'label' => 'label',
            'type' => 'text',
            'required' => false,
            'map' => 'map',
            'options' => [],
            'show_when' => [],
            'url' => '',
            'info' => '',
            'value' => null,
            'config' => [
                'elements' => [],
                'defaultCountry' => '',
                'attachments' => [],
                'allow_new' => false,
                'step' => null,
            ],
            'width' => [
                'xxxs' => 12,
                'xxs' => 12,
                'xs' => 12,
                'sm' => 12,
                'md' => 12,
                'lg' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12,
            ],
        ];

        $this->assertEquals($expected, $content);

    }

}