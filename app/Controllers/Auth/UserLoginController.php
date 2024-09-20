<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

use App\Models\UserModel\Users;
use App\Helpers\GetDataHelper;
use Exception;

class UserLoginController extends BaseController
{
    
    protected $getDataHelper;

    public function __construct()
    {
        $this->getDataHelper = new GetDataHelper();
    }

    public function index()
    {
        $user = new Users();
        $db = $this->getDataHelper->dataBaseConnection();
        $prodField = $db->getFieldData($user->getTableName());
        $excludedFieldUser = $this->getDataHelper->getExcludeColumn($user->getTableName());
        $userExcludeField = array_filter($prodField, function($field) use ($excludedFieldUser) {
            return !in_array($field->name, $excludedFieldUser);
        });

        $registerData = [
            'userExclude' => $userExcludeField                
        ];

        echo view('Auth/userLoginView', $registerData);
    }

    public function login()
    {
        // Retrieve user data based on username
        $Users = new USERS();
        $user = $Users->where('USERNAME', $this->request->getPost('username'))->first();

        if ($user) {
            // Verify the password
            /**  @var string $password */
            $password = $this->request->getPost('password');
            if (password_verify($password, $user['PASSWORD_HASH'])) {
                // Password correct, set session and return success response
                $session = session();
                $session->set('username', $user['USERNAME']);
                $session->set('user_id', $user['ID']);
                return $this->response->setJSON(['success' => true]);
            }
        }

        // Password incorrect or user not found, return error response
        return $this->response->setJSON(['error' => 'Invalid username or password']);
    }


    public function register()
    {
        // Validate form data (you can use CodeIgniter's validation library)

      
         /**  @var string $password */
            $password = $this->request->getPost('password');
            if ($password !== null) {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            } else {
                log_message('Error','Password Should not be empty');
            }

            $user_role = $this->request->getPost('user_role')?$this->request->getPost('user_role'):"USER";

        // Insert user data into the database
        $secureUserModel = new USERS();
        try{
            $secureUserModel->insert([
                'USERNAME' => $this->request->getPost('username'),
                'PASSWORD_HASH' => $passwordHash,
                'USER_ROLE' => $user_role,
                'IS_ACTIVE' => 1,
                'ORGANIZATION_ID' => $this->request->getPost('organization_id'),
                'ORGANIZATION_NAME' => $this->request->getPost('organization_name')
            ]);
            return $this->response->setJSON(['success' => true]);
        }catch(Exception $e){
            return $this->response->setJSON(['error' => 'Register user fail please try again !!!']);
        }
       

        // Redirect to login page or any other page
        //return $this->response->setJSON(['error' => 'Invalid username or password']);
        //return redirect()->to('/login');
    }
}
