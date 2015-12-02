<?php 
use RainLab\User\Models\User;class Cms565e9d2679b46_158607655Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    
    $user_id = $this->param('id');
    $user_id = $user_id == 'default' ? 1 : $user_id;
    
    $this['cur_id'] = $user_id;
    $this['cur_user'] = User::findOrFail($user_id);
    
}
public function onLoadMsg()
{
    $cur_id = intval(post('cur_id'));
    $msg_list = \RainLab\Blog\Models\IMsg::where('user_id' , $cur_id)->get()->toArray();

    return $msg_list;
}
public function onSubmitMsg()
{
    $user_id = intval(post('user_id'));
    $content = post('content');
    $imsg = \RainLab\Blog\Models\IMsg::insertGetId([
        'user_id' => $user_id,
        'content' => $content,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
    ]);
    
    return ['id' => $imsg];
}

}
