<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
    'UsersController/createUser' => array(
        array(
            'field' => 'lastname',
            'label' => 'nom',
            'rules' => 'required'
        ),
        array(
            'field' => 'firstname',
            'label' => 'prénom',
            'rules' => 'required'
        ),
        array(
            'field' => 'mail',
            'label' => 'e-mail',
            'rules' => array('valid_email', 'required')
        ),
        array(
            'field' => 'password',
            'label' => 'mot de passe',
            'rules' => 'required'
        ),
        array(
            'field' => 'passwordConfirm',
            'label' => 'confirmation de mot de passe',
            'rules' => 'required|matches[password]'
        )
    ),
    'UsersController/updateUser' => array(
        array(
            'field' => 'lastname',
            'label' => 'nom',
            'rules' => 'required'
        ),
        array(
            'field' => 'firstname',
            'label' => 'prénom',
            'rules' => 'required'
        ),
        array(
            'field' => 'mail',
            'label' => 'e-mail',
            'rules' => array('valid_email', 'required')
        ),
        array(
            'field' => 'password',
            'label' => 'mot de passe',
            'rules' => 'required'
        ),
        array(
            'field' => 'passwordConfirm',
            'label' => 'confirmation de mot de passe',
            'rules' => 'required|matches[password]'
        )
    )
);
