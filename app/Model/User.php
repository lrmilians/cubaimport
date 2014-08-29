<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {

    public $avatarUploadDir = 'img/avatars';

    public $displayField = 'name';

    public $validate = array(
        'username' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Indique un nombre de usuario.',
                'allowEmpty' => false,
            ),
            'between' => array(
                'rule' => array('between', 5, 15),
                'required' => true,
                'message' => 'El nombre de usuario debe tener entre 5 y 15 caracteres.',
            ),
            'unique' => array(
                'rule' => array('isUniqueUsername'),
                'message' => 'El nombre de usuario indicado ya se encuentra en uso.',
            ),
            'alphaNumericDashUnderscore' => array(
                'rule' => array('alphaNumericDashUnderscore'),
                'message' => 'El nombre de usuario debe tener solamente letras, números y underscores.',
            )           
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Indique una contraseña.',
            ),
            'min_length' => array(
                'rule' => array('minLength', '8'),
                'message' => 'La contraseña debe tener como mínimo 8 caracteres.',
            )
        ),
        'password_confirm' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Por favor, confirme la contraseña.',
            ),
            'equaltofield' => array(
                'rule' => array('equaltofield', 'password'),
                'message' => 'Las contraseñas no coinciden.',
            )
        ),
        'password_update' => array(
            'min_length' => array(
                'rule' => array('minLength', '8'),
                'message' => 'La contraseña debe tener como mínimo 8 caracteres.',
                'allowEmpty' => true,
                'required' => false,
            )
        ),
        'password_confirm_update' => array(
            'equaltofield' => array(
                'rule' => array('equaltofield', 'password_update'),
                'message' => 'Las contraseñas no coinciden.',
                'required' => false,
            )
        ),
        'name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Indique el nombre completo.',
                'allowEmpty' => false,
            ),
            'between' => array(
                'rule' => array('between', 3, 50),
                'required' => true,
                'message' => 'El nombre completo debe tener entre  3 y 50 caracteres.',
            ),
        ),
        'active' => array(
            'boolean' => array(
                'rule' => array('boolean'),
                'message' => 'Campo obligatorio.',
                'allowEmpty' => false,
                'required' => true,
            ),
        ),
    );

    function isUniqueUsername($check) {
        $username = $this->find(
            'first', array(
                'fields' => array(
                    'User.id',
                    'User.username'
                ),
                'conditions' => array(
                    'User.username' => $check['username']
                )
            )
        );
        if (!empty($username)) {
            if ($this->data[$this->alias]['id'] == $username['User']['id']) {

                return true;
            } else {

                return false;
            }
        } else {

            return true;
        }
    }


    public function alphaNumericDashUnderscore($check) {
        $value = array_values($check);
        $value = $value[0];

        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }

    public function equaltofield($check, $otherfield) {
        $fname = '';
        foreach ($check as $key => $value) {
            $fname = $key;
            break;
        }

        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname];
    }

    function isCi($check) {
        if ($this->validarCedula($check['ci'])) {

            return true;
        } else {

            return false;
        }
    }

    public function isRucNat($check) {
        if ($this->validarRucPersonaNatural($check['ruc'])) {

            return true;
        } else {

            return false;
        }
    }

    public $belongsTo = array(
        'Role' => array(
            'className' => 'Role',
            'foreignKey' => 'role_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
    );

    

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }

        if (isset($this->data[$this->alias]['password_update']) && !empty($this->data[$this->alias]['password_update'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
        }

        return parent::beforeSave($options);
    }

}
