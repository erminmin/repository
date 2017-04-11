<?php
    class sort extends adminMain{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("sort");
        }

        function addsort(){
            if (!$this->checkLogin()) {
                exit;
            }
            $sort=$this->db->select();
            $this->smarty->assign("sort",$sort);
            $this->smarty->display("admin/addsort.html");

        }
        function addsortInfo(){
            $sname=P("sname");

            $result=$this->db->insert("sname='$sname'");

            if($result>0){
                $message="添加成功";
                $url="index.php?m=admin&f=sort&a=addsort";
                $this->jump($url,$message);
            }else{
                $message="添加失败";
                $url="index.php?m=admin&f=sort&a=addsort";
                $this->jump($url,$message);
            }
        }

        function showsort(){
            if (!$this->checkLogin()) {
                exit;
            }

            $sort=$this->db->select();
            $this->smarty->assign("sort",$sort);
            $this->smarty->display("admin/showsort.html");
        }

        function delsort(){
            if (!$this->checkLogin()) {
                exit;
            }
            $sid=P("sid");


            $result=$this->db->where("sid=$sid")->delete();
            if($result>0){
                $message="删除成功";
                $url="index.php?m=admin&f=sort&a=showsort";
                $this->jump($url,$message);
            }else{
                $message="删除失败";
                $url="index.php?m=admin&f=sort&a=showsort";
                $this->jump($url,$message);
            }
        }

        function editsort(){
            if (!$this->checkLogin()) {
                exit;
            }

            $sid=P("sid");

            $result=$this->db->where("sid=$sid")->select();
            $result=$result[0];
            $this->smarty->assign("sort",$result);
            $this->smarty->display("admin/editsort.html");
        }

        function editsortInfo(){
            if (!$this->checkLogin()) {
                exit;
            }
            $sid=P("sid");
            $sname=P("sname");

            $result=$this->db->where("sid=$sid")->update("sname='$sname'");

            if($result>0){
                $message="修改成功";
                $url="index.php?m=admin&f=sort&a=showsort";
                $this->jump($url,$message);
            }else{
                $message="修改失败";
                $url="index.php?m=admin&f=sort&a=showsort";
                $this->jump($url,$message);
            }
        }

    }