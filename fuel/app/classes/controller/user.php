<?php

use Auth\Auth;

class Controller_User extends Controller_Tbase
{
    public function action_index()
    {
        $result = DB::select()->from('user')->execute()->as_array();
        $data['id'] = $result[0]['id'];
        $data['name'] = $result[0]['name'];
        $data['email'] = $result[0]['name'];
        $data['password'] = $result[0]['password'];
        //assign the view to browser output
        $this->template->content = View::forge('user/detail', $data);
    }

    public function action_detail()
    {
        $result = DB::select()->from('user')->execute()->as_array();
        $data['id'] = $result[0]['id'];
        $data['name'] = $result[0]['name'];
        $data['email'] = $result[0]['name'];
        $data['password'] = $result[0]['password'];
        //assign the view to browser output
        $this->template->content = View::forge('user/detail', $data);
    }

    /**
     * ユーザ登録フォーム
     * @return \Fuel\Core\View
     */
    public function get_create()
    {
        $this->template->content = View::forge('user/create');
        $this->template->title='会員登録';
    }

    /**
     * ユーザ登録
     * @return \Fuel\Core\View
     */
    public function post_create()
    {
        if ($_POST) {
            //POSTデータを受け取る
            $username = Input::post('username');
            $password = Input::post('password');
            $email = Input::post('mail');
            $gender = Input::post('gender');
            $age = Input::post('age');
            $profile['gender'] = $gender;
            $profile['age']=$age;

            //ユーザー登録
            $id = Auth::create_user($username, $password, $email);
            if(!empty($id)){
                $result = Model_Users::find_by_pk($id)->set(array(
                    'age' => $age,
                    'gender' => $gender,
                ))->save();
                Auth::login($username,$password);
            }
        }

        Response::redirect('top');
    }
}