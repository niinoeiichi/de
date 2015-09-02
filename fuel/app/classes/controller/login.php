<?php

use Auth\Auth;

class Controller_Login extends Controller_Tbase
{
    public function action_index()
    {
        //すでにログイン済であればログイン後のページへリダイレクト
        Auth::check() and Response::redirect('top');

        //エラーメッセージ用変数初期化
        $error = null;
        //ログイン用のオブジェクト生成
        $auth = Auth::instance();
        //ログインボタンが押されたら、ユーザ名、パスワードをチェックする
        if (Input::post()) {
            if ($auth->login(Input::post('username'), Input::post('password'))) {
                // ログイン成功時、ログイン後のページへリダイレクト
                Response::redirect('top');
            }else{
                // ログイン失敗時、エラーメッセージ作成
                $error = 'ユーザ名かパスワードに誤りがあります';
            }
        }
        //ビューテンプレートを呼び出し
        $this->template->content = View::forge('login/index');
        //エラーメッセージをビューにセット
        $this->template->content->set('error', $error);
        $this->template->title = "login";
    }
}