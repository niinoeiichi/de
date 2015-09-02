<?php

class Controller_Tbase extends Controller_Template
{
    public function before()
    {
        parent::before();
//header.phpをテンプレートの$headerとbindさせる。
        $this->template->header = View::forge('header');
//footer.phpをテンプレートの$footerとbindさせる。
        $this->template->footer = View::forge('footer');
    }

    public function after($response)
    {
        $response = parent::after($response); // あなた自身のレスポンスオブジェクトを作成する場合は必要ありません。
        return $response; // after() は確実に Response オブジェクトを返すように
    }
}