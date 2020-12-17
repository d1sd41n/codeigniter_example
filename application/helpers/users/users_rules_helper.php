<?php
if(!function_exists('getCreateUserRules')){
    function getCreateUserRules(){
        return array(
            array(
                'field' => 'user',
                'label' => 'Usuario',
                'rules' => 'required|max_length[100]',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'max_length' => 'la cadena es demaciado grande'
                )
            ),
            array(
                'field' => 'correo',
                'label' => 'corrreo',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'valid_email' => 'la % email es requerido'
                )
            ),
            array(
                'field' => 'range',
                'label' => 'Rango',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                )
            ),
            array(
                'field' => 'name',
                'label' => 'Nombre',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                )
            ),
            array(
                'field' => 'lastname',
                'label' => 'Apellidos',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Sus %s son requeridos.',
                )
            ),
            array(
                'field' => 'area',
                'label' => 'Area',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerida.',
                )
            ),
            array(
                'field' => 'especialidad',
                'label' => 'Especialidad',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
            array(
                'field' => 'cedula',
                'label' => 'Cedula',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                )
            ),
        );
    }
}
