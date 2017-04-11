<?php

class headline extends adminMain
{
    function __construct()
    {
        parent::__construct();
        $this->db = new db("headline");
    }

    function init()
    {
        if ($this->checkLogin()) {
            $this->smarty->assign("username", $_SESSION["aname"]);
            $this->smarty->display("admin/index.html");
        }
    }

    function addheadline()
    {
        $db = $this->db->connect;
        $this->smarty->display("admin/addheadline.html");
    }

    function addheadlineInfo()
    {
        $htitle = P("htitle");
        $hcontent = P("edit");

        $result = $this->db->insert("htitle='$htitle';hcontent='$hcontent'");
        if ($result > 0) {
            $url = "index.php?m=admin&f=headline&a=addheadline";
            $message = "文章保存成功";
            $this->jump($url, $message);
        } else {
            $url = "index.php?m=admin&f=headline&a=addheadline";
            $message = "文章保存失败，如发生多次，请联系管理员";
            $this->jump($url, $message);
        }

    }

    function showheadline()
    {

        $result = $this->db->select();
        $pages = new pages(count($result), 3);

        $result = $this->db->limit($pages->limit)->select();
        $result=$this->db->select("select * from headline ".$pages->limit);
        $pages = $pages->out();

        $this->smarty->assign("pages", $pages);
        $this->smarty->assign("result", $result);
        $this->smarty->display("admin/showheadline.html");

    }

    function statuheadline()
    {
        $hid=P("hid");
        $result=$this->db->where("hid=$hid")->select(); //获取文章全部信息

        $this->smarty->assign("result", $result);
        $this->smarty->display("admin/statuheadline.html");
    }

    /*
     * 删除文章
     * */
    function delheadline()
    {
        $hid = P("hid");
        $result = $this->db->delete("hid=$hid");
        if ($result > 0) {
            $url = "index.php?m=admin&f=headline&a=showheadline";
            $message="文章删除成功";
            $this->jump($url,$message);
        }else{
            $url = "index.php?m=admin&f=headline&a=showheadline";
            $message="文章删除失败";
            $this->jump($url,$message);
        }
    }


}