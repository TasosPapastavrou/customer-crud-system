<?php

class Database{
    
    public function connect(){

        $pdo = new PDO('mysql:host=localhost;dbname=api','root','');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }
}


class Customer extends Database{

    protected $tableName = 'servera';

    public function add($data){    

        $firstname=$data['firstname'];
        $lastname=$data['lastname'];
        $email=$data['email'];
        $phone_num=$data['phone_num'];
        $category=$data['category'];
       
      $sql = "INSERT INTO servera (firstname,lastname,email,phone_num,category) VALUES (?,?,?,?,?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$firstname,$lastname,$email,$phone_num,$category]);  

    }

    public function getCusts(){

        $sql = "SELECT * FROM servera"; 
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount()>0){
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            $results = [];
        }
        return $results;

    }


    public function getCust($user){

        $sql = "SELECT * FROM servera WHERE id=?"; 
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user]);
        if($stmt->rowCount()>0){
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            $results = [];
        }
        return $results;

    }


    public function update($data){    

        $firstname=$data['firstname'];
        $lastname=$data['lastname'];
        $email=$data['email'];
        $phone_num=$data['phone_num'];
        $category=$data['category'];
        $id=$data['id'];


        $sql = "UPDATE servera SET firstname=?, lastname=?, email=? , phone_num=? , category=? WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname,$lastname,$email,$phone_num,$category,$id]);  

    }





}


$action = $_REQUEST['action'];

if(!empty($action)){
   
    $obj = new Customer();
}
else{
    $obj = new Customer();
    $customers = $obj->getCusts();
    if(!empty($customers)){
        $customerslist = $customers;
    }
    else{
        $customerslist = [];
    }
    echo json_encode($customerslist);
}


if($action == 'adduser' && !empty($_POST)){

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone_num=$_POST['phone_num'];
    $email=$_POST['email'];
    $category=$_POST['category'];

    $custData = [
        'firstname'=>$firstname,
        'lastname'=>$lastname,
        'phone_num'=>$phone_num,
        'email'=>$email,
        'category'=>$category,
    
    ];



    $obj->add($custData);
    $ar=[];
    $ar = ["messasge"=>"ok"];
    $newr = json_encode($ar);
    echo $newr;
}


if($action == 'edituser'){

    $user=$_REQUEST["edituser"];
    $result = $obj->getCust($user);
    $newr = json_encode($result);
    echo $newr;
 
}

  
if($action == 'updateuser' && !empty($_POST)){

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone_num=$_POST['phone_num'];
    $email=$_POST['email'];
    $category=$_POST['category'];
    $id=$_POST['updateuserid'];
 

    $custData = [
        'firstname'=>$firstname,
        'lastname'=>$lastname,
        'phone_num'=>$phone_num,
        'email'=>$email,
        'category'=>$category,
        'id'=>$id
    ]; 

    $obj->update($custData);
    $ar=[];
    $ar = ["messasge"=>"ok"];
    $newr = json_encode($ar);
    echo $newr;
}
 




 