<?php


namespace App\Helper;


use App\Category;

class mHelper
{

    static function categoryGetname($id)
    {
        $title[]=array();
        $data=Category::where("id",$id)->first();
        $title[0]["title"]=$data["title"];
        $title[0]["slug"]=$data["slug"];
        $parentid=$data["parent_id"];
        if($parentid!="")
        {
            $datax=Category::where("id",$parentid)->first();
            $title[1]["title"]=$datax["title"];
            $title[1]["slug"]=$datax["slug"];
            $parentid=$datax["parent_id"];
            if($parentid!="")
            {
                $datay=Category::where("id",$parentid)->first();
                $title[2]["title"]=$datay["title"];
                $title[2]["slug"]=$datay["slug"];
                $parentid=$datay["parent_id"];

                if($parentid!="")
                {
                    $dataz=Category::where("id",$parentid)->first();
                    $title[3]["title"]=$dataz["title"];
                    $title[3]["slug"]=$dataz["slug"];
                    $parentid=$dataz["parent_id"];
                    if($parentid!="")
                    {
                        $dataw=Category::where("id",$parentid)->first();
                        $title[4]["title"]=$dataw["title"];
                        $title[4]["slug"]=$dataw["slug"];
                        $parentid=$dataz["parent_id"];
                    }
                    else
                    {
                        return $title;
                    }
                }
                else
                {
                    return $title;
                }
            }
            else
            {
                return $title;
            }
        }
        else
        {
            return $title;
        }
    }
}

