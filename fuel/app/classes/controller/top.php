<?php

use Auth\Auth;

class Controller_Top extends Controller_Tbase
{
    public function before()
    {
        parent::before();
        if(!Auth::check()){
            Response::redirect('/');
        }
    }

    public function action_index()
    {

        $result = Model_Users::find_all();
        $data['id']="a";
        foreach($result as $value){
            $tmp = $value->to_array();
            $data['entities'][] = $tmp;
        }
        $this->template->content = View::forge('top/index',$data);
        $this->template->title='マイページ';

    }
}