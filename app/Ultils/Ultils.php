<?php

namespace App\Ultils;

use App\Models\shared\Menu;
use PDO;

class Ultils
{

     public static  function parseJsonArray($jsonArray, $parentID = 0)
     {

          $return = array();
          foreach ($jsonArray as $key => $value) {
               $returnSubSubArray = array();
               if (isset($value->children)) {
                    $returnSubSubArray = Ultils::parseJsonArray($value->children, $value->id);
               }
               $return[] = array('id' => $value->id, 'parentID' => $parentID);
               $return = array_merge($return, $returnSubSubArray);
          }

          return $return;
     }

     public static  function recursiveDelete($id, $db)
     {
          $db_conn = $db;
          $query = $db->query("select * from tbl_menu where parent = '" . $id . "' ");
          if ($query->rowCount() > 0) {
               while ($current = $query->fetch(PDO::FETCH_ASSOC)) {
                    Ultils::recursiveDelete($current['id'], $db_conn);
               }
          }
          $db->exec("delete from tbl_menu where id = '" . $id . "' ");
     }

     public static function getMenuRoot($idmenu)
     {
          $menu = Menu::find($idmenu);

          if ($menu->parent != 0) {
               $menu = Ultils::getMenuRoot($menu->parents->id);
               if ($menu->parent == 0) {
                    return $menu;
               }
          } else {
               return $menu;
          }
     }
     /**Lấy tất các menu cấp trên  */
     public static function getMenuTreeTop($idmenu, &$list)
     {

          $menu = Menu::find($idmenu);
          if (!in_array($menu->id, $list)) {
               array_push($list, $menu->id);
          }

          if ($menu->parents != null) {
               if (!in_array($menu->parents->id, $list)) {
                    array_push($list, $menu->parents->id);
               }
               Ultils::getMenuTreeTop($menu->parents->id, $list);
          }
     }
}
