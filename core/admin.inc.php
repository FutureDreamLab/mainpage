<?php
function checkAdmin($link,$sql){
   return fetchOne($link,$sql);
}

/**
 * 检测是否有管理员登陆.
 */
function checkLogined(){
    if($_SESSION['adminId']==""&&$_COOKIE['adminId']==""){
        alertMes("请先登陆","login.php");
    }
}

//注销
function logout(){
    $_SESSION=array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),"",time()-1);
    }
    if(isset($_COOKIE['adminId'])){
        setcookie("adminId","",time()-1);
    }
    if(isset($_COOKIE['adminName'])){
        setcookie("adminName","",time()-1);
    }
    session_destroy();
    header("location:login.php");
}
//添加管理员
function addAdmin($link){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if(insert($link,"imooc_admin",$arr)){
        $mes="添加成功!<br/><a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php'>查看管理员列表</a>";
    }else{
        $mes="添加失败!<br/><a href='addAdmin.php'>重新添加</a>";
    }
    return $mes;
}

/**
 * 得到所有的管理员
 * @return array
 */
function getAllAdmin($link){

    $sql="select id,username,email from imooc_admin {$where}";
    $rows=fetchAll($link,$sql);
    return $rows;
}

//编辑管理员
function editAdmin($link,$id){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if(update($link,"imooc_admin",$arr,"id={$id}")){
        $mes="编辑成功!<br/><a href='listAdmin.php'>查看管理员列表</a>";
    }else{
        $mes="添加失败! <br/><a href='listAdmin.php'>重新修改 </a>";
    }
    return $mes;
}

//删除管理员
function delAdmin($link,$id){
    if(delete($link,"imooc_admin","id={$id}")){
        $mes="删除成功!<br/><a href='listAdmin.php'>查看管理员列表</a>";
    }else{
        $mes="删除失败! <br/><a href='listAdmin.php'>请重新删除 </a>";
    }
    return $mes;
}

function getAdminByPage($link, $pageSize = 2){
    $sql = "select * from imooc_admin";
    global $totalRows;
    $totalRows = getResultNum($link, $sql);
    global $totalPage;
    $totalPage = ceil($totalRows / $pageSize);
    $page = $_REQUEST['page'] ? (int) $_REQUEST['page'] : 1;
    if ($page < 1 || $page == null || ! is_numeric($page)) {
        $page = 1;
    }
    if ($page >= $totalPage)
        $page = $totalPage;
    $offset = ($page - 1) * $pageSize;
    $sql = "select id,username,email from imooc_admin limit {$offset},{$pageSize}";
    $rows = fetchAll($link, $sql);
    return $rows;
}

