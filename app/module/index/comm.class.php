<?php

    class comm extends indexMain{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("commodity");
        }


        function init(){
            $cid=P("cid");
            $result=$this->db->where("cid=$cid")->select(); 

            $this->smarty->assign("result",$result);
            $this->smarty->display("index/comm.html");
        }

        function commshow(){
            $cid=P("cid");
            /*
             * 增加分类点击量
             * */
            $hit=$this->db->update("update commodity set chit=chit+1 where cid=$cid");

            $result=$this->db->where("cid=$cid")->select(); 


            $this->smarty->assign("result",$result);
            $this->smarty->display("index/commshow.html");
        }

    }