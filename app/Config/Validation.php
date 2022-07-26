<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $register = [
        'user_email' => [
            'rules' => 'required',
        ],
        'user_name' => [
            'rules' => 'required',
        ],
        'user_password' => [
            'rules' => 'required |min_length[8]',
        ],
    ];

    public $login_errors = [
        'user_email' => [
            'required' => '{field} Harus Di Isi!',
        ],
        'user_name' => [
            'required' => '{field} Harus Di Isi!',
        ],
        'user_password' => [
            'required' => '{field} Harus Di Isi!',
            'min_length' => '{field} Minimal 8 karakter'
        ],
    ];
    public $login = [
        'user_name' => [
            'rules' => 'required',
        ],
        'user_password' => [
            'rules' => 'required |min_length[8]',
        ],
    ];
    public $register_errors = [
        'user_name' => [
            'required' => '{field} Harus Di Isi!',
        ],
        'user_password' => [
            'required' => '{field} Harus Di Isi!',
            'min_length' => '{field} Minimal 8 karakter'
        ],
    ];
}