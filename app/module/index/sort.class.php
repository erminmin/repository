<?php

    class sort extends indexMain{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("sort");
        }


        function init(){
            $sortlist=$this->db->order("sid")->limit("0,4")->select();

            $this->smarty->assign("sortlist",$sortlist);
            $this->smarty->display("index/sort.html");
        }

        function sortshow(){
            $sid=P("sid");


            /*
             * 增加分类点击量
             * */
            $hit=$this->db->update("update sort set shit=shit+1 where sid=$sid");


            $this->db=new db("commodity");
            $result=$this->db->where("sid=$sid")->select(); 
            $this->db=new db("sort");



            $this->smarty->assign("result",$result);
            $this->smarty->display("index/sortshow.html");
        }

    }