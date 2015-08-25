<?php
//添加分类
function addCate($link){
    $arr=$_POST;
    if(insert($link,"imooc_cate",$arr)){
        $mes="分类添加成功!<br/><a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看分类</a>";
    }else{
        $mes="分类添加失败!<br/><a href='addCate.php'>重新添加</a>|<a href='listCate.php'>查看分类</a>";
    }
    return $mes;
}

//分页获得分类
function getAllCateByPage($link, $pageSize = 2){
    $sql = "select * from imooc_cate";
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
    $sql = "select id,cName from imooc_cate limit {$offset},{$pageSize}";
    $rows = fetchAll($link, $sql);
    return $rows;
}

//删除分类
function delCate($link,$id){
    if(delete($link,"imooc_cate","id={$id}")){
        $mes="删除成功!<br/><a href='listCate.php'>查看分类</a>";
    }else{
        $mes="删除失败! <br/><a href='listCate.php'>请重新删除 </a>";
    }
    return $mes;
}

//编辑分类
function editCate($link,$id){
    $arr=$_POST;
    if(update($link,"imooc_cate",$arr,"id={$id}")){
        $mes="编辑成功!<br/><a href='listCate.php'>查看分类</a>";
    }else{
        $mes="添加失败! <br/><a href='listCate.php'>重新修改 </a>";
    }
    return $mes;
}

