<?php

/* /usr/share/nginx/html/imdemo/themes/rainlab-vanilla/pages/demo.htm */
class __TwigTemplate_3d8a82631c76ca10c76170075b58226ecf6f93f7d9d18e4757496eb16adab889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('CMS')->startBlock('styles'        );
        // line 2
        echo "<style>
    #msg_box{
        overflow-y:auto;
        height:400px;
    }
</style>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 9
        echo "
<div class=\"row\">
    <div class=\"col-md-8\">
        <div id=\"msg_box\">
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_user"]) ? $context["cur_user"] : null), "name", array()), "html", null, true);
        echo " 编号为: ";
        echo twig_escape_filter($this->env, (isset($context["cur_id"]) ? $context["cur_id"] : null), "html", null, true);
        echo " 消息初始化...
            
        </div>
    </div>
    <div class=\"col-md-4\">
        ";
        // line 18
        if (((isset($context["user"]) ? $context["user"] : null) && ($this->getAttribute((isset($context["cur_user"]) ? $context["cur_user"] : null), "id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())))) {
            // line 19
            echo "            <form class=\"form-inline\" id=\"msg_sub\" method=\"post\">
              <div class=\"form-group\">
                <label for=\"exampleInputName2\">消息:</label>
                <input type=\"hidden\" name=\"user_id\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_user"]) ? $context["cur_user"] : null), "id", array()), "html", null, true);
            echo "\">
                <input type=\"text\" name=\"content\" class=\"form-control\" id=\"exampleInputName2\" placeholder=\"请输入\">
              </div>
              <button type=\"button\" class=\"btn btn-default\" id=\"submit_msg\">发送</button>
            </form>
        ";
        }
        // line 28
        echo "        
        ";
        // line 29
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 30
            echo "        ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) != (isset($context["cur_id"]) ? $context["cur_id"] : null))) {
                // line 31
                echo "        <a href=\"/demo/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
                echo "\">进入我的频道</a>
        ";
            }
            // line 33
            echo "        ";
        } else {
            // line 34
            echo "        <a href=\"/account\">请先登录</a>
        ";
        }
        // line 36
        echo "
    </div>
</div>

";
        // line 40
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 41
        echo "
<script>
    
    \$(document).ready(function(){
        
        // 该直播室消息条数
        var c = 0;
        
        
        // render msg html
        var renderMsg = function(data){
            var list = '';
            
            for (var i = 0; i < data.length; i++) {
\t\t\t\tlist += '<p>ID:' + data[i].user_id + '在 ' + data[i].created_at + '说:<br/>' +data[i].content + '</p>';
\t\t\t}
\t\t\t
\t\t\treturn list;
        };
        
        // 初始化消息列表
        var initMsgBox = function(){
            var cur_id = parseInt('";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["cur_id"]) ? $context["cur_id"] : null), "html", null, true);
        echo "');
            \$.request('onLoadMsg' , {
                success: function(res){
                    var html = renderMsg(res);
                    \$(\"#msg_box\").html(html);
                },
                data: {'cur_id':cur_id}
            });
        };
        
        
        // 点击提交动态
        \$(\"#submit_msg\").click(function(event){
            var data = {
                'user_id': \$('input[name=user_id]').val(),
                'content': \$('input[name=content]').val(),
            };
            
            \$.request('onSubmitMsg' , {
                success: function(res){
                    if(parseInt(res.id) != 0){
                        \$('input[name=content]').val('');
                        alert('发送成功');
                    }else {
                        alert('发送失败请重试');
                    }
                },
                data:data
            });
            
            initMsgBox();
        });
        
        // 
        initMsgBox();
        
        // 每隔秒刷新一次
        setInterval(initMsgBox , 3000);
            
    });
    
</script>

";
        // line 40
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/imdemo/themes/rainlab-vanilla/pages/demo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 40,  116 => 63,  92 => 41,  90 => 40,  84 => 36,  80 => 34,  77 => 33,  71 => 31,  68 => 30,  66 => 29,  63 => 28,  54 => 22,  49 => 19,  47 => 18,  37 => 13,  31 => 9,  29 => 1,  21 => 2,  19 => 1,);
    }
}
/* {% put styles %}*/
/* <style>*/
/*     #msg_box{*/
/*         overflow-y:auto;*/
/*         height:400px;*/
/*     }*/
/* </style>*/
/* {% endput %}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-8">*/
/*         <div id="msg_box">*/
/*             {{ cur_user.name }} 编号为: {{ cur_id }} 消息初始化...*/
/*             */
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*         {% if user and (cur_user.id == user.id) %}*/
/*             <form class="form-inline" id="msg_sub" method="post">*/
/*               <div class="form-group">*/
/*                 <label for="exampleInputName2">消息:</label>*/
/*                 <input type="hidden" name="user_id" value="{{ cur_user.id }}">*/
/*                 <input type="text" name="content" class="form-control" id="exampleInputName2" placeholder="请输入">*/
/*               </div>*/
/*               <button type="button" class="btn btn-default" id="submit_msg">发送</button>*/
/*             </form>*/
/*         {% endif %}*/
/*         */
/*         {% if user %}*/
/*         {% if user.id != cur_id %}*/
/*         <a href="/demo/{{ user.id }}">进入我的频道</a>*/
/*         {% endif %}*/
/*         {% else %}*/
/*         <a href="/account">请先登录</a>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* {% put scripts %}*/
/* */
/* <script>*/
/*     */
/*     $(document).ready(function(){*/
/*         */
/*         // 该直播室消息条数*/
/*         var c = 0;*/
/*         */
/*         */
/*         // render msg html*/
/*         var renderMsg = function(data){*/
/*             var list = '';*/
/*             */
/*             for (var i = 0; i < data.length; i++) {*/
/* 				list += '<p>ID:' + data[i].user_id + '在 ' + data[i].created_at + '说:<br/>' +data[i].content + '</p>';*/
/* 			}*/
/* 			*/
/* 			return list;*/
/*         };*/
/*         */
/*         // 初始化消息列表*/
/*         var initMsgBox = function(){*/
/*             var cur_id = parseInt('{{ cur_id }}');*/
/*             $.request('onLoadMsg' , {*/
/*                 success: function(res){*/
/*                     var html = renderMsg(res);*/
/*                     $("#msg_box").html(html);*/
/*                 },*/
/*                 data: {'cur_id':cur_id}*/
/*             });*/
/*         };*/
/*         */
/*         */
/*         // 点击提交动态*/
/*         $("#submit_msg").click(function(event){*/
/*             var data = {*/
/*                 'user_id': $('input[name=user_id]').val(),*/
/*                 'content': $('input[name=content]').val(),*/
/*             };*/
/*             */
/*             $.request('onSubmitMsg' , {*/
/*                 success: function(res){*/
/*                     if(parseInt(res.id) != 0){*/
/*                         $('input[name=content]').val('');*/
/*                         alert('发送成功');*/
/*                     }else {*/
/*                         alert('发送失败请重试');*/
/*                     }*/
/*                 },*/
/*                 data:data*/
/*             });*/
/*             */
/*             initMsgBox();*/
/*         });*/
/*         */
/*         // */
/*         initMsgBox();*/
/*         */
/*         // 每隔秒刷新一次*/
/*         setInterval(initMsgBox , 3000);*/
/*             */
/*     });*/
/*     */
/* </script>*/
/* */
/* {% endput %}*/
