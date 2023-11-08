<?php
namespace usercontroller;
// app/controllers/UserController.php
class UserController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $users = $this->model->getUsers();
        
        include 'app/views/user_list.php';
    }

    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username=$_POST['username'];
            $email=$_POST['password'];
            $data = [
                'username' =>$username ,
                'password' => $email ,
                'role' => 0
            ];

            if ($this->model->addUser($data)) {
                echo "User added successfully!";
                header('Location: /mvc/');

            } else {
                echo "Failed to add user.";
            }
        }
        
    }
    public function updateUser()
    {
        $users=$this->model->getUsers($_GET['id']);
        foreach ($users as $user)
        {
            echo $user1=$user['username'];
            echo $pass=$user['password'];
        }
        require "app/views/update.php";
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $data = 
            [
                'username' => $username,
                'password' => $password,
            ];
            if($this->model->editUser($_GET['id'],$data))
            {
                echo "User update successfully!";
                header('Location: /mvc/');
            } else {
                echo "Failed to update user.";
            }
        }

    }
    public function deleteUser()
    {
        if($this->model->deleteUser($_GET['id']))
        {
            echo "delete successfully";
            header('refresh:2;url=/mvc/');}
    }
}
