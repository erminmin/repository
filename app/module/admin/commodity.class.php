<?php

class commodity extends adminMain
{
    function __construct()
    {
        parent::__construct();
        $this->db = new db("commodity");
    }

    function init()
    {
        if ($this->checkLogin()) {
            $this->smarty->assign("username", $_SESSION["aname"]);
            $this->smarty->display("admin/index.html");
        }
    }

    function addcom()
    {
        $db = $this->db->connect;
        $sname = new infinite();
        $sname->sname($db);
        $this->smarty->assign("sname", $sname->str);
        $uname = new infinite();
        $uname->uname($db);
        $this->smarty->assign("uname", $uname->str);
        $this->smarty->display("admin/addcom.html");
    }

    function addcomInfo()
    {
        $sid = P("sid");
        $ctitle = P("title");
        $cnew = P("cnew");
        $cname = P("cname");
        $uid = P("uid");
        $cintroduce = P("edit");
        $caddress = P("caddress");
        $cprice = P("cprice");
        $cimgurl = P("cimgurl");
        
        $result = $this->db->insert("ctitle='$ctitle';cnew='$cnew';cname='$cname';cimgurl='$cimgurl';cintroduce='$cintroduce';sid=$sid;uid='$uid';caddress='$caddress';cprice='$cprice'");
        if ($result > 0) {
            $url = "index.php?m=admin&f=commodity&a=addcom";
            $message = "商品保存成功";-
            $this->jump($url, $message);
        } else {
            $url = "index.php?m=admin&f=commodity&a=addcom";
            $message = "商品保存失败，如发生多次，请联系管理员";
            $this->jump($url, $message);
        }

    }


    function showcom()
    {

        $result = $this->db->select();
        $pages = new pages(count($result), 3);

        $result = $this->db->limit($pages->limit)->select();
        $result=$this->db->select("select * from commodity ".$pages->limit);
        $pages = $pages->out();

        $this->smarty->assign("pages", $pages);
        $this->smarty->assign("result", $result);
        $this->smarty->display("admin/showcom.html");
    }

    function statucom()
    {
        $cid = P("cid");
        $result = $this->db->where("cid=" . $cid)->select();
        $sql="select * from sort";
        $sort=$this->db->select($sql);

        $this->smarty->assign("result", $result);
        $this->smarty->assign("sort", $sort);
        $this->smarty->display("admin/statucom.html");
    }

    function statucomInfo()
    {
        $cid = P("cid");
        $sortid = P("sortid");

        $result = $this->db->where("cid=$cid")->update("sid=$sortid");
        if ($result > 0) {
            $url = "index.php?m=admin&f=commodity&a=showcom";
            $message = "分类修改成功";
            $this->jump($url, $message);
        } else {
            $url = "index.php?m=admin&f=commodity&a=showcom";
            $message = "未修改分类";
            $this->jump($url, $message);
        }
    }

    /*
     * 删除文章
     * */
    function delcom()
    {
        $cid = P("cid");
        $result = $this->db->delete("cid=$cid");
        if ($result > 0) {
            $url = "index.php?m=admin&f=commodity&a=showcom";
            $message="商品删除成功";
            $this->jump($url,$message);
        }else{
            $url = "index.php?m=admin&f=commodity&a=showcom";
            $message="商品删除失败";
            $this->jump($url,$message);
        }
    }


}