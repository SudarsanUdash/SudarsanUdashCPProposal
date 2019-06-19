<?php

require_once('common.class.php');

class forumquestion extends Common
{
	public $question_id,$question,$username;
	


        public function save()
        {
                
                  $this->question = $_POST['question'];

                  $this->username = $_POST['username'];
                  
                $sql = "insert into forumquestion 
                (question_id,question,username) values ('$this->question_id','$this->question','$this->username')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from forumquestion";
                return $this->select($sql);
        }
       public function destroy()
{
    $sql = "delete from forum_question where id = $this->question_id";
        return $this->delete($sql);
}


        public function edit()
        {
         $sql = "update forumquestion set question_id = '$this->question_id',";
        return $this->update($sql);       
        }

        public function getforumquestionByID()
{
    $sql= "select * from forumquestion where id = '$this->question_id'";
        return $this->select($sql);}
}
?>