<?php
namespace usermodel;
// app/models/UserModel.php
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUsers($id='') {
        if(!$id=="")
        {
            $this->db->where('id',$id);
        }
        return $this->db->get('users');
    }

    public function addUser($data) {
        return $this->db->insert('users', $data);
    }
    public function editUser($id,$data) {
        $this->db->where('id',$id);
        return $this->db->update('users', $data);
    }
    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
   
    }
}
?>
