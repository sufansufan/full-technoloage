<?php
class unit{
    function __construct()
    {
       $this->str ='';
       $this->parentid =null;
       $this->model = '';
    }
    function cateTree($pid,$db,$table,$flag,$current=null){
        $flag++;
        if($current && $this->model=='category'){
            $sql ="select * from $table where cid={$current}";
            $this->parentid = $db->query($sql)->fetch_assoc()['pid'];
        }else if($current && $this->model !='category'){
            $sql ="select cid from $this->model where nid = {$current}";
            $this->parentid = $db->query($sql)->fetch_assoc()['cid'];
        }
        $sql ="select * from {$table} where pid={$pid}";
        $data = $db->query($sql);
//        fetch_assoc  每次只转换数组第一个拿出转换成关联数组
//        fetch_all  都装换成关联数组

        while($row=$data->fetch_assoc()){
            /*str_repeat()函数*/
            $heng = str_repeat('-',$flag);
            if($row['cid'] == $this->parentid){
                $this->str .="
            <option value='{$row['cid']}' selected>{$heng}{$row['cname']}</option>
            ";
            }else{
                $this->str .="
            <option value='{$row['cid']}'>{$heng}{$row['cname']}</option>
            ";
            }
            $this->cateTree($row['cid'],$db,$table,$flag,$current=null);
        }
        return $this->str;

    }
    function cateTable($db,$table){
        $sql = "select * from $table";
        $data = $db->query($sql)->fetch_all(MYSQL_ASSOC);
        for($i=0;$i<count($data);$i++){
            $this->str .="
                <tr>
                    <td>{$data[$i]['cid']}</td>
                    <td>{$data[$i]['cname']}</td>
                    <td>{$data[$i]['pid']}</td>
                    <td>
                        <a href=\"deleteCategory.php?cid={$data[$i]['cid']}\" class=\"btn\">删除</a>
                        <a href=\"updateCategory.php?cid={$data[$i]['cid']}\" class=\"btn btnAdd\">修改</a>
                    </td>
                </tr>
            ";
        }
        return $this->str;
    }
    function cateTable1($db,$table){
        $sql = "select * from $table";
        $data = $db->query($sql)->fetch_all(MYSQL_ASSOC);
        for($i=0;$i<count($data);$i++){
            $this->str .="
                <tr>
                    <td>{$data[$i]['nid']}</td>
                    <td>{$data[$i]['title1']}</td>
                    <td>{$data[$i]['title2']}</td>
                    <td>{$data[$i]['notes']}</td>
                    <td>{$data[$i]['date1']}</td>
                    <td>{$data[$i]['content']}</td>
                    <td>
                    <img src='{$data[$i]['thumb']}' width='200px'>
                    </td>
                    <td>{$data[$i]['cid']}</td>
                    <td>
                        <a href=\"deleteArticle.php?nid={$data[$i]['nid']}\" class=\"btn\">删除</a>
                        <a href=\"updateArticle.php?nid={$data[$i]['nid']}\" class=\"btn btnAdd\">修改</a>
                    </td>
                </tr>
            ";
        }
        return $this->str;
    }
    function cateTable2($db,$table){
        $sql = "select * from $table";
        $data = $db->query($sql)->fetch_all(MYSQL_ASSOC);
        for($i=0;$i<count($data);$i++){
            $this->str .="
                <tr>
                    <td>{$data[$i]['bid']}</td>
                    <td>{$data[$i]['company']}</td>
                    <td>{$data[$i]['title']}</td>
                    <td>{$data[$i]['begins']}</td>
                    <td>{$data[$i]['about']}</td>
                    <td>
                    <img src='{$data[$i]['bimg']}' width='200px'>
                    </td>
                    <td>
                        <a href=\"deletebanner.php?bid={$data[$i]['bid']}\" class=\"btn\">删除</a>
                        <a href=\"updatebanner.php?bid={$data[$i]['bid']}\" class=\"btn btnAdd\">修改</a>
                    </td>
                </tr>
            ";
        }
        return $this->str;
    }
    function cateTable3($db,$table){
        $sql = "select * from $table";
        $data = $db->query($sql)->fetch_all(MYSQL_ASSOC);
        for($i=0;$i<count($data);$i++){
            $this->str .="
                <tr>
                     <td>{$data[$i]['id']}</td>
                    <td>{$data[$i]['iconname']}</td>
                    <td>{$data[$i]['sketch']}</td>
                    <td>{$data[$i]['description']}</td>
                    <td>{$data[$i]['com1']}</td>
                    <td>{$data[$i]['com2']}</td>
                    <td>{$data[$i]['introduction']}</td>
                    <td>
                    <img src='{$data[$i]['img']}' width='200px'>
                    </td>
                    <td>
                        <a href=\"deleteicon.php?id={$data[$i]['id']}\" class=\"btn\">删除</a>
                        <a href=\"updateicon.php?id={$data[$i]['id']}\" class=\"btn btnAdd\">修改</a>
                    </td>
                </tr>
            ";
        }
        return $this->str;
    }
    function selectOne($db,$table,$id,$attr){
        $sql = "select $attr from $table where cid = {$id}";
        $result = $db->query($sql)->fetch_assoc();
        $cname = $result[$attr];
        return $cname;
    }
    function selectOne1($db,$table,$id,$attr){
        $sql = "select $attr from $table where nid = {$id}";
        $result = $db->query($sql)->fetch_assoc();
        $cname = $result[$attr];
        return $cname;
    }
    function selectOne2($db,$table,$id,$attr){
        $sql = "select $attr from $table where bid = {$id}";
        $result = $db->query($sql)->fetch_assoc();
        $cname = $result[$attr];
        return $cname;
    }
    function selectOne3($db,$table,$id,$attr){
        $sql = "select $attr from $table where id = {$id}";
        $result = $db->query($sql)->fetch_assoc();
        $cname = $result[$attr];
        return $cname;
    }
}