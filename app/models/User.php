<?php

class User extends Model{
    private $id_user;
    private $name_user;
    private $email_user;
    private $adress_user;
    private $phone_user;
    private $pwd_user;
    private $role_user;
    private $change_pwd;

    protected $table = 'users';

    public function getId() {
        return $this->id_user;
    }
    public function getName(){
        return $this->name_user;
    }
    public function setName($name_user){
        $this->name_user = $name_user;
    }
    public function getEmail(){
        return $this->email_user;
    }
    public function setEmail($email_user){
        $this->email_user = $email_user;
    }
    public function getAdress(){
        return $this->adress_user;
    }
    public function setAdress($adress_user){
        $this->adress_user = $adress_user;
    }
    public function getPhone(){
        return $this->phone_user;
    }
    public function setPhone($phone_user){
        $this->phone_user = $phone_user;
    }
    public function getPwd(){
        return $this->pwd_user;
    }
    public function setPwd($pwd_user){
        $this->pwd_user = $pwd_user;
    }
    public function getRole(){
        return $this->role_user;
    }
    public function setRole($role_user){
        $this->role_user = $role_user;
    }
    public function getChangePwd(){
        return $this->change_pwd;
    }
    public function setChangePwd($change_pwd){
        $this->change_pwd = $change_pwd;
    }

    public function findByName($name){

        $query = "SELECT * FROM $this->table WHERE name_user = :name_user";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':name_user', $name, PDO::PARAM_STR);
        $stmt->execute();
        $data= $stmt->fetch();
        if($data){
            $this->hydrate($data);
            return $data;
        }
        else{
            return null;
        }

    }

    public function verifyPassword($password, $hash_pwd){

        return password_verify($password, $hash_pwd);

    }

    public function passwordVerify($name, $password){

        $user = $this->findByName($name);
        if($user !== null){
            if ($this->verifyPassword($password, $user['pwd_user'])) {
                return $user;
            }
        }
        return false;

    }

    public function add(){

        $hash = password_hash($this->pwd_user, PASSWORD_DEFAULT);
        $query = "INSERT INTO $this->table (name_user, email_user, adress_user, phone_user, pwd_user, role_user, change_pwd) VALUES (:name_user, :email_user, :adress_user, :phone_user, :pwd_user, :role_user, 1)";
        $stmt=$this->connection->prepare($query);
        
        return $stmt->execute([
            ':name_user'=>$this->name_user,
            ':email_user'=>$this->email_user,
            ':adress_user'=>$this->adress_user,
            ':phone_user'=>$this->phone_user,
            ':pwd_user'=>$hash,
            ':role_user'=>$this->role_user
           
        ]);

    }

    public function updatePwd($id_user, $pwd_user){

        $this->setPwd(password_hash($pwd_user, PASSWORD_DEFAULT));
        // $this->setPwd($pwd_user);
        $this->setChangePwd(0);
        $query = "UPDATE $this->table set pwd_user = :pwd_user, change_pwd = :change_pwd WHERE id_user = :id_user";
        $stmt = $this->connection->prepare($query);
        return $stmt->execute([
            ':pwd_user' => $this->pwd_user,
            ':change_pwd'=> $this->change_pwd,
            ':id_user' => $id_user
        ]);

    }
    
    public function hydrate($data){

        $this->id_user = $data['id_user'];
        $this->name_user = $data['name_user'];
        $this->email_user = $data['email_user'];
        $this->adress_user = $data['adress_user'];
        $this->phone_user = $data['phone_user'];
        $this->pwd_user = $data['pwd_user'];
        $this->role_user = $data['role_user'];
        $this->change_pwd = $data['change_pwd'];
        
    }


}