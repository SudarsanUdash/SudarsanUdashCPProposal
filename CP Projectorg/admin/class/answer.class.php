<?php

require_once('common.class.php');

class answer extends Common
{
	public $answer_id,$answer,$replier;
	


        public function save()
        {
                
                  $this->answer = $_POST['answer'];
                  $this->replier = $_POST['replier'];
                  
                $sql = "insert into forumanswer 
                (answer_id,answer,replier) values ('$this->answer_id','$this->answer','$this->replier')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from forumanswer";
                return $this->select($sql);
        }
       public function destroy()
{
    $sql = "delete from forumanswer where id = $this->answer_id";
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