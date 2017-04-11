<?php

    class index extends indexMain{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("headline");
        }


        function init(){
            $headline=$this->db->where("hid=1")->select();
            $this->db=new db("post");
            $post=$this->db->limit("0,6")->select();
            $this->db=new db("sort");
            $sortlist=$this->db->order("sid desc")->limit("0,3")->select();
            $this->db=new db("headline");

            $this->smarty->assign("headline",$headline[0]);
            $this->smarty->assign("post",$post);
            $this->smarty->assign("sortlist",$sortlist);
            $this->smarty->display("index/index.html");
        }

    }