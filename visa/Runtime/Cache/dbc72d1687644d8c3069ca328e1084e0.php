<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="__PUBLIC__/js/libs/bootstrap/css/bootstrap.min.css">

    <script src="__PUBLIC__/js/libs/jquery/jquery-2.1.1.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="__PUBLIC__/js/libs/bootstrap/js/bootstrap.min.js"></script>

    <script src="__PUBLIC__/js/libs/My97DatePicker/WdatePicker.js"></script>


    <script>


        function openLessEl (oMainEl, oLessEl, placeholder){
            var place = oLessEl.attr('placeholder');
            var p = placeholder || '请先选择该选项的前置条件';
            oLessEl.attr('placeholder', p);
            oLessEl.attr('readOnly', true);
            oMainEl.on('change', function(){
                var selected = $(this).val();
                if(selected == 1){ //如果选择了是
                    oLessEl.attr('readOnly', false);
                    oLessEl.attr('placeholder', place);
                } else { //选择否
                    oLessEl.attr('readOnly', true);
                    oLessEl.attr('placeholder', p);
                }
            });
        }

        $(function(){
            //其他国籍
            openLessEl($('select[name="other-country-option"]'), $('input[name="othercountry"]'));
            //其他国家护照
            openLessEl($('select[name="other-passport-option"]'), $('input[name="othercountrypassport"]'));
        });


    </script>

    <style>
        .row {margin: 5px -15px;}

    </style>

</head>
<body style="padding-top: 70px;">
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Visa</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#about">关于我们</a></li>
                <li><a href="contact-us.html">联系我们</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</div><!-- /.navbar -->

<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-12">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <h1>美国签证DS160申请表</h1>
                <p>注意： 每一项内容都会反映到正式的签证表格里, 请您务必认真将每一项填写完整, 正确. 若没有请写 “无” .
                    凡从事过或大学学过化工,物理,电子通信,航天航空,IT 产业等人员,都需要提供个人简历和个人工作经历
                    情况.美领馆再三强调,签证申请表格(160 表)中的内容一定要真实和完整,这是能否给予签证的最重要的
                    依据.申请人的出访记录要完整填写,要正确地列出过去 5 年中所去过的所有国家,包括因私和因公出国. 特
                    别是申请过美国签证或被拒签者,一定要准确填写(一定要精确到年月日)请认真填写,否则若因表格原因被
                    拒签,请自行负责.</p>
            </div>

            <!--
            <style>
                .visa-panel {border:1px solid #d6e9c6;border-radius: 6px;}
                .visa-panel .visa-panel-title {padding:0 15px;height: 38px;line-height: 38px;color: #3c763d;background-color: #dff0d8;font-size:16px;}
                .visa-panel .visa-panel-body {padding:15px 0px;}
                .visa-panel .visa-panel-body .visa-row {height:34px;margin:5px 0;}
                .visa-panel .visa-panel-body .visa-row span.visa-label {padding:0 15px;height:34px;line-height: 34px;display: inline-block;*display:inlie;*zoom:1;color: #555; font-style: normal;
                    text-align: center;background-color: #eee;border: 1px solid #ccc;border-right:none;float:left;}
                .visa-panel .visa-panel-body .visa-row span.visa-formel {float:left;height:34px;vertical-align:top;display: inline-block;*display:inlie;*zoom:1;}
                .visa-panel .visa-panel-body .visa-row input, .visa-panel .visa-panel-body .visa-row select {height:34px;line-height: 20px;padding:6px 10px;*height:22px;*vertical-align:top;border: 1px solid #ccc;
                    color: #555;*position: relative;*top:-1px;
                }
                .visa-panel .visa-panel-body .visa-row span:first-of-type {border-radius: 4px 0 0 4px;}
                .visa-panel .visa-panel-body .visa-row span:last-of-type input {border-radius: 0 4px 4px 0;}

                .visa-panel .visa-panel-body .visa-row input:focus {border-color: #66afe9;
                    outline: 0;
                    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
                    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
                }
                .row {margin: 5px -15px;}

            </style>


            <div class="visa-panel">
                <div class="visa-panel-title">个人基本信息</div>

                <div class="visa-panel-body">
                    <div class="visa-row">
                        <span class="visa-label">身份证号码</span><span class="visa-formel"><input type="text" placeholder="请输入身份证号"></span>
                    </div>
                    <div class="visa-row">
                        <span class="visa-label">姓名及姓名拼音(要与护照一致)</span><span class="visa-formel"><input type="text" placeholder="请输入您的姓名及姓名拼音(要与护照一致)"></span>
                    </div>
                    <div class="visa-row">
                        <span class="visa-label">身份证号码</span><span class="visa-formel"><input type="text"></span>
                    </div>
                    <div class="visa-row">
                        <span class="visa-label">身份证号码</span><span class="visa-formel"><input type="text"></span>
                    </div>
                </div>
            </div>
        -->

            <form action="__URL/Order/insert" method="post">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">个人基本信息</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">姓名(中文)</span>
                                <input type="text" name="username" class="form-control" placeholder="请输入您的中文姓名(要与护照一致)">
                                <span class="input-group-addon">姓名(英文或者拼音)</span>
                                <input type="text" name="enname" class="form-control" placeholder="请输入您的姓名及姓名拼音(姓和名请用空格分开)">
                            </div>
                        </div><!--/row-->




                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">曾用名1</span>
                                <input type="text" name="username2" class="form-control" placeholder="(有则填写)">
                                <span class="input-group-addon">曾用名2</span>
                                <input type="text" name="username3" class="form-control" placeholder="(有则填写)">
                            </div>
                        </div><!--/row-->


                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">性别</span>
                                <select name="gender" class="form-control">
                                    <option value="1">男</option>
                                    <option value="2">女</option>
                                </select>
                            </div>
                        </div><!--/row-->


                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">婚姻状况</span>
                                <select name="maritalstatus" class="form-control">
                                    <option value="1">已婚</option>
                                    <option value="2">普通法律婚姻</option>
                                    <option value="3">民事婚姻/国内同居</option>
                                    <option value="4">单身(未婚)</option>
                                    <option value="5">丧偶</option>
                                    <option value="6">离异</option>
                                    <option value="7">合法分居</option>
                                    <option value="0">其他</option>
                                </select>
                            </div>
                        </div><!--/row-->



                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">出生年月</span>
                                    <input type="text" name="birthday" onClick="WdatePicker()" class="form-control" placeholder="出生年月">
                                    <span class="input-group-addon">出生国家</span>
                                    <input type="text" name="birthcountry" class="form-control" placeholder="国家">
                                    <span class="input-group-addon">出生省/市</span>
                                    <input type="text" name="birthprovince" class="form-control" placeholder="请输入省/市">
                                    <span class="input-group-addon">出生市/县</span>
                                    <input type="text" name="birthcity" class="form-control" placeholder="请输入市/县">
                                </div>
                            </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">国籍</span>
                                <input type="text" name="country" class="form-control" placeholder="请输入您的国籍">
                            </div>
                        </div><!--/row-->



                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">您是否拥有或曾经拥有除上述国籍以外的其他国籍? </span>
                                    <select name="other-country-option" class="form-control">
                                        <option value="0">否</option>
                                        <option value="1">是</option>
                                    </select>
                                    <span class="input-group-addon">如果回答是,请告知国籍：</span>
                                    <input type="text" name="othercountry" class="form-control" placeholder="如果回答是,请告知国籍：">
                                </div>
                            </div><!--/row-->



                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">您是否持有其他国籍的护照? </span>
                                    <select name="other-passport-option" class="form-control">
                                        <option value="0">否</option>
                                        <option value="1">是</option>
                                    </select>
                                    <span class="input-group-addon">如果回答是,请告知护照号码：</span>
                                    <input type="text" name="othercountrypassport" class="form-control" placeholder="如果回答是,请告知护照号码：">
                                </div>
                            </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">身份证号码</span>
                                <input type="text" name="card-no" class="form-control" placeholder="请输入身份证号">
                            </div>
                        </div><!--/row-->


                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">你是否有美国社会安全号?</span>
                                    <select name="safe-no-option" class="form-control">
                                        <option value="0">否</option>
                                        <option value="1">是</option>
                                    </select>
                                    <span class="input-group-addon">如有请提供社会安全号</span>
                                    <input type="text" name="ussafeno" class="form-control" placeholder="如有请提供社会安全号">
                                </div>
                            </div><!--/row-->

                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">你是否有美国纳税人身份号码?</span>
                                    <select name="us-tax-option"  class="form-control">
                                        <option value="0">否</option>
                                        <option value="1">是</option>
                                    </select>
                                    <span class="input-group-addon">如有请提供纳税人身份号码</span>
                                    <input type="text" name="taxno" class="form-control" placeholder="如有请提供纳税人身份号码">
                                </div>
                            </div><!--/row-->


                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">家庭住址(国家)(请填写常住地址)</span>
                                    <input type="text" class="form-control" name="homecountry" placeholder="Username">
                                    <span class="input-group-addon">省/市</span>
                                    <input type="text" class="form-control" name="homeprovince"  placeholder="Username">
                                    <span class="input-group-addon">市/县</span>
                                    <input type="text" class="form-control" name="homecity"  placeholder="Username">
                                    <span class="input-group-addon">街道,单元号码</span>
                                    <input type="text" class="form-control" name="homestreet"  placeholder="Username">
                                    <span class="input-group-addon">邮编</span>
                                    <input type="text" class="form-control" name="homezipcode"  placeholder="Username">
                                </div>
                            </div><!--/row-->

                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">常用电话:</span>
                                    <input type="text" name="phone1" class="form-control" placeholder="请您输入常用电话">
                                    <span class="input-group-addon">备用电话</span>
                                    <input type="text" name="phone2" class="form-control" placeholder="请您输入备用电话">
                                    <span class="input-group-addon">工作电话</span>
                                    <input type="text" name="phone3" class="form-control" placeholder="请您输入工作电话">
                                    <span class="input-group-addon">电子信箱</span>
                                    <input type="text" name="email" class="form-control" placeholder="请您输入电子邮件">
                                </div>
                            </div><!--/row-->

                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">护照号码</span>
                                    <input type="text" name="passportno" class="form-control" placeholder="请您输入护照号码">
                                    <span class="input-group-addon">护照本编号(护照首页右边的数字,纵向的比其它的字小.)</span>
                                    <input type="text" name="passportbookno" class="form-control" placeholder="请您输入护照本编号">
                                    <span class="input-group-addon">护照种类</span>
                                    <select name="passporttype" class="form-control">
                                        <option value="1">普通</option>
                                        <option value="2">外交</option>
                                        <option value="3">公务</option>
                                        <option value="0">其他</option>
                                    </select>
                                </div>
                            </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">护照签发地(国家)</span>
                                <input type="text" name="portcountry" class="form-control" placeholder="请您输入护照签发地">
                                <span class="input-group-addon">护照签发地(省市)</span>
                                <input type="text" name="portprovince" class="form-control" placeholder="请您输入护照签发地">
                                <span class="input-group-addon">护照签发地(市县)</span>
                                <input type="text" name="portcity" class="form-control" placeholder="请您输入护照签发地">
                            </div>
                        </div><!--/row-->

                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">护照签发日期</span>
                                    <input type="text" name="portstartdate" onClick="WdatePicker()" class="form-control" placeholder="请您输入护照签发日期">
                                    <span class="input-group-addon">护照有效期至</span>
                                    <input type="text" name="portenddate" onClick="WdatePicker()" class="form-control" placeholder="请您输入护照有效期至">
                                </div>
                            </div><!--/row-->

                            <div class="row">
                                <div class="input-group">
                                    <!-- 有可能会出现多本丢失 -->
                                    <span class="input-group-addon">您的护照是否曾经遗失或者被盗?</span>
                                    <select name="passport-miss"  class="form-control">
                                        <option value="0">否</option>
                                        <option value="1">是</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">遗失的护照1号码:</span>
                                    <input type="text" name="portlostno1" class="form-control" placeholder="如有遗失,入护照签发国家">
                                    <span class="input-group-addon">护照签发国家:</span>
                                    <input type="text" name="portlostcountry1" class="form-control" placeholder="请输入护照签发国家">
                                    <span class="input-group-addon">丢失原因：</span>
                                    <input type="text" name="portlostexplain1" class="form-control" placeholder="请输入护照签发国家">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">遗失的护照2号码:</span>
                                    <input type="text" name="portlostno2" class="form-control" placeholder="如有遗失,入护照签发国家">
                                    <span class="input-group-addon">护照签发国家:</span>
                                    <input type="text" name="portlostcountry2" class="form-control" placeholder="请输入护照签发国家">
                                    <span class="input-group-addon">丢失原因：</span>
                                    <input type="text" name="portlostexplain2" class="form-control" placeholder="请输入护照签发国家">
                                </div>
                            </div><!--/row-->

                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">此行目的</span>
                                    <input type="text" name="tripintent" class="form-control" placeholder="请您输入此行目的">
                                </div>
                            </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您是否制定了具体的旅行计划?</span>
                                <select name="fee-offarder"  class="form-control">
                                    <option value="0">是</option>
                                    <option value="1">否</option>
                                </select>
                                <span class="input-group-addon">入境美国时间?</span>
                                <input type="text" class="form-control" placeholder="请输入入境美国时间(根据预订行程填写) (日-月-年)">
                                <span class="input-group-addon">抵达美国航班?</span>
                                <input type="text" class="form-control" placeholder="请输入入境美国时间(根据预订行程填写) (日-月-年)">
                                <span class="input-group-addon">抵达美国城市?</span>
                                <input type="text" class="form-control" placeholder="请输入入境美国时间(根据预订行程填写) (日-月-年)">

                                <span class="input-group-addon">离开美国时间?</span>
                                <input type="text" class="form-control" placeholder="请输入入境美国时间(根据预订行程填写) (日-月-年)">
                                <span class="input-group-addon">离开美国航班?</span>
                                <input type="text" class="form-control" placeholder="请输入入境美国时间(根据预订行程填写) (日-月-年)">
                                <span class="input-group-addon">从美国城市离开?</span>
                                <input type="text" class="form-control" placeholder="请输入入境美国时间(根据预订行程填写) (日-月-年)">

                                <!--选择否-->
                                <span class="input-group-addon">计划入境美国时间?</span>
                                <input type="text" class="form-control" placeholder="请输入入境美国时间(根据预订行程填写) (日-月-年)">

                                <span class="input-group-addon">计划在美停留时间(天)?</span>
                                <input type="text" class="form-control" placeholder="请输入入境美国时间(根据预订行程填写) (日-月-年)">

                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">打算访问美国哪些城市?</span>
                                <input type="text" class="form-control" placeholder="赴美同行人姓名,与您的关系?是否一同申请签证?">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">在美国你的联系地址</span>
                                <input type="text" class="form-control" name="homecountry" placeholder="Username">
                                <span class="input-group-addon">省/市</span>
                                <input type="text" class="form-control" name="homeprovince"  placeholder="Username">
                                <span class="input-group-addon">市/县</span>
                                <input type="text" class="form-control" name="homecity"  placeholder="Username">
                                <span class="input-group-addon">街道,单元号码</span>
                                <input type="text" class="form-control" name="homestreet"  placeholder="Username">
                                <span class="input-group-addon">邮编</span>
                                <input type="text" class="form-control" name="homezipcode"  placeholder="Username">
                            </div>
                        </div><!--/row-->

                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">此行费用由谁负担,与您的关系?</span>
                                    <select name="fee-offarder"  class="form-control">
                                        <option value="0">自己</option>
                                        <option value="1">其他人</option>
                                    </select>
                                    <span class="input-group-addon">负担人姓名:</span>
                                    <input type="text" name="offarder-username" class="form-control" placeholder="请您输入负担人姓名?">
                                    <span class="input-group-addon">与负担人关系</span>
                                    <input type="text" name="offarder-rela" class="form-control" placeholder="请您输入负担人与您的关系?">
                                </div>
                            </div><!--/row-->

                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">赴美同行人姓名,与您的关系?是否一同申请签证?</span>
                                    <input type="text" class="form-control" placeholder="赴美同行人姓名,与您的关系?是否一同申请签证?">
                                </div>
                            </div><!--/row-->

                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon">你是否是一个团体访问美国?</span>
                                    <select name="us-tax-option"  class="form-control">
                                        <option value="0">否</option>
                                        <option value="1">是</option>
                                    </select>
                                    <span class="input-group-addon">如是,请提供团体的名字?</span>
                                    <input type="text" name="taxno" class="form-control" placeholder="如有请提供纳税人身份号码">
                                </div>
                            </div><!--/row-->

                        </div>
                    </div>


                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">亲属关系</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您是否去过美国?</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="input-group-addon">若回答是,具体时间(日-月-年)及停留天数:</span>
                                <input type="text" class="form-control" placeholder="Username">
                                <span class="input-group-addon">若回答是,具体时间(日-月-年)及停留天数:</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->


                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您是否曾获得过美国签证? (年份请精确到“日” ,若记不清请注明)</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">若回答是,请填写：何时(日-月-年)： </span>
                                <input type="text" class="form-control" placeholder="Username">
                                <span class="input-group-addon">何地： (请填写获得签证的城市)</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">签证号码： (护照内美国签证页上的红色 8 位数) </span>
                                <input type="text" class="form-control" placeholder="Username">
                                <span class="input-group-addon">哪种签证(B1 商务,B2 旅游,B1/B2 商务及旅游,其他)：：</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">若是,您此次是否在签发您上次赴美签证的相同国家再次申请,并且这个国家是否为您的主要居住国家?</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您是否在美国领馆留过十指指纹?</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您的美国签证是否曾经遗失或者被盗? </span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="input-group-addon">如果回答是,请输入遗失或者被盗的年份：</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您的美国签证是否被注销或者撤销过? </span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="input-group-addon">如是请说明情况：</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->


                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您是否曾经被拒签,被拒绝入境美国,或者在入境时被撤销回您的入境申请?</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="input-group-addon">如果回答是,请解释：</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">是否有人为您申请过美国移民签证? </span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="input-group-addon">如有,是谁,与你的关系?</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                    </div>
                </div>


                <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">在美国的被访问者之姓名及联系方式(如有直系亲属则填写,若参团,由我社代填)</h3>
                        </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">姓名</span>
                                <input type="text" class="form-control" placeholder="Username">
                                <span class="input-group-addon">住宅电话</span>
                                <input type="text" class="form-control" placeholder="Username">
                                <span class="input-group-addon">工作电话</span>
                                <input type="text" class="form-control" placeholder="Username">
                                <span class="input-group-addon">移动电话</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">在美期间住址(若参团,由我社代填)</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->


                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您是否持有或曾经持有美国驾照? </span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="input-group-addon">如果回答是,请提供驾照号码:</span>
                                <input type="text" class="form-control" placeholder="Username">
                                <span class="input-group-addon">驾照所属的州名：</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                    </div>
                    </div>



                <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">亲属关系</h3>
                </div>
                <div class="panel-body">

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">父亲全名</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">父亲生日(日-月-年)</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">母亲全名</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">母亲生日(日-月-年)</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您在美国是否有<i style="color:red;padding:0 5px;font-weight: bold;font-style: normal;">直系</i>亲属(包括父母,夫妻,兄弟姐妹,子女)?</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">如有,姓名及与您的关系,其在美身份(有绿卡,美国公民,在美访问,学习,工作)</span>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您在美国是否有<i style="color:red;padding:0 5px;font-weight: bold;font-style: normal;">非直系</i>亲属?</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">如有,姓名及与您的关系,其在美身份(有绿卡,美国公民,在美访问,学习,工作)</span>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">配偶出生国家</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">配偶出生城市</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">配偶姓名(若离异或分居也应填写,若离异或分居请写明结婚日期,离婚日期,离婚原因)</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">配偶生日(日-月-年)</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">生活/工作/学习</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">现任工作所属行业：若选择无业或其他,请详细说明(现任工作职位)：</span>
                                <select name="gender" class="form-control">
                                    <option value="1">农业</option>
                                    <option value="2">艺术或表演</option>
                                    <option value="2">商业</option>
                                    <option value="2">通信</option>
                                    <option value="2">计算机科学</option>
                                    <option value="2">厨艺及食品服务业</option>
                                    <option value="2">教育</option>
                                    <option value="2">工程</option>
                                    <option value="2">政府</option>
                                    <option value="2">家务</option>
                                    <option value="2">法律</option>
                                    <option value="2">医学及健康</option>
                                    <option value="2">军事</option>
                                    <option value="2">自然科学</option>
                                    <option value="2">物理科学</option>
                                    <option value="2">研究</option>
                                    <option value="2">宗教</option>
                                    <option value="2">学生</option>
                                    <option value="2">退休</option>
                                    <option value="2">无业</option>
                                    <option value="2">其他</option>
                                </select>
                                <span class="input-group-addon">若选择无业或其他,请详细说明(现任工作职位)：</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您当前单位或就读学校(需同"在校证明"或"在职证明",<br/>或与名片内容相一致.如有固定的英文请提供)</span>
                                <div>
                                    <div class="input-group">
                                        <span class="input-group-addon">单位(学校名称)</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">地址</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">邮编</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">电话</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">简要描述您的工作职责(请务必填写,对您的面谈非常重要) ：</span>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">月薪(税前)</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您过去是否曾在其它单位就职?(除现任雇主外)<br/> 如果回答是,请提供以下信息(两个)：</span>
                                <div>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon">公司1名称: </span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">地址</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">邮编</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">电话</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">职务</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">主管名字</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">雇佣日期</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">离职日期</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">请简述您的工作职责(请务必填写)：</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon">公司2名称: </span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">地址</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">邮编</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">电话</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">职务</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">主管名字</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">雇佣日期</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">离职日期</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">请简述您的工作职责(请务必填写)：</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">列出你初中以上学习经历. (最高学历)</span>
                                <div>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon">学校名称: </span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">地址</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">邮编</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">专业</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">就读日期(日-月-年至日-月-年)：</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <hr>

                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon">学校名称: </span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">地址</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">邮编</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">专业</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">就读日期(日-月-年至日-月-年)：</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <hr>

                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon">学校名称: </span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">地址</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">邮编</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">专业</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">就读日期(日-月-年至日-月-年)：</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">你是否属于一个宗族或部落?</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">列出你所说语言的种类</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">列出过去的五年中您到过的国家</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">列出所有你现在和曾经所属／捐助／工作过的职业协会,社会团体和慈善机构.</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">你是否具有枪械,爆炸,核装置,或化学方面的经验,特殊技能或者受过培训?</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="input-group-addon">如答是,请给予解释.</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">你是否曾经参军?</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="input-group-addon">如答是,则列出服役的国家,军种,军衔,军事特长以及起止日期</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您是否曾经服役,为其成员或被牵涉到准军事单位,义务治安单位,反政府团体,游击团体,叛乱组织?</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="input-group-addon">如果回答是,请解释</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-addon">您是否有过威胁到公共安全的行为?(例如传染病,精神病,吸毒,卖淫,洗钱,间谍,恐怖活动或刑事案件)</span>
                                <select name="gender" class="form-control">
                                    <option value="0">否</option>
                                    <option value="1">是</option>
                                </select>
                                <span class="input-group-addon">如果回答是,请解释</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div><!--/row-->

                    </div>
                </div>

                <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">生活/工作/学习</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="input-group">
                            <span class="input-group-addon" style="text-align: left;">请注意:每位申请人必须通读并回答下列所有问题.有关法律把几类人界定为不准进入美国的人,故不得向这些人签发签证(但事先得到酌情免除者除外).下列各项是否适用于您?</span>
                        </div>
                    </div><!--/row-->

                    <div class="row">
                        <div class="input-group">
                            <span class="input-group-addon" style="text-align: left;line-height: 20px;">您是否由于犯有任何罪行而曾经被逮捕或被判有罪,即使后来得到了宽恕,赦免或受益于其他类似措施?您是否曾非法分发或出售过受控物品(毒品)?是否曾从事卖淫活动或为<br/>卖淫者拉客? </span>
                            <select name="gender" class="form-control">
                                <option value="0">否</option>
                                <option value="1">是</option>
                            </select>
                        </div>
                    </div><!--/row-->

                    <div class="row">
                        <div class="input-group">
                            <span class="input-group-addon" style="text-align: left;line-height: 20px;">您是否曾经被美国拒绝入境或成为递解出境听证的对象?是否曾以欺骗或故意作假及其他非法手段企图自己得到或帮助他人得到美国签证或任何其他移民福利,企图自己或<br/>帮助他人进入美国?您是否曾在1996年11月30日以后以学生身份到美国公立小学或公立中学就读而未向学校补偿费用?</span>
                            <select name="gender" class="form-control">
                                <option value="0">否</option>
                                <option value="1">是</option>
                            </select>
                        </div>
                    </div><!--/row-->

                    <div class="row">
                        <div class="input-group">
                            <span class="input-group-addon" style="text-align: left;line-height: 20px;">您希望进入美国是否是为了从事违反出口控制的活动、为了从事颠覆或恐怖主义活动？是否有其他非法目的？您是否是目前被美国国务卿认定的恐怖主义组织的成员或<br/>代表？您是否参加过德国纳粹政府指使下进行的迫害？您是否参加过旨在种族灭绝的屠杀？</span>
                            <select name="gender" class="form-control">
                                <option value="0">否</option>
                                <option value="1">是</option>
                            </select>
                        </div>
                    </div><!--/row-->

                    <div class="row">
                        <div class="input-group">
                            <span class="input-group-addon" style="text-align: left;">您是否曾违反过美国签证的有关规定？是否曾非法进入美国或曾被美国递解出境？ </span>
                            <select name="gender" class="form-control">
                                <option value="0">否</option>
                                <option value="1">是</option>
                            </select>
                        </div>
                    </div><!--/row-->

                    <div class="row">
                        <div class="input-group">
                            <span class="input-group-addon" style="text-align: left;">您是否曾拒绝把身为美国公民但身处美国境外的子女的监护权移交给美国法庭享有监护权的人？是否曾违反法规在美国投票或为达到逃避税务的目的而放弃美国国籍？</span>
                            <select name="gender" class="form-control">
                                <option value="0">否</option>
                                <option value="1">是</option>
                            </select>
                        </div>
                    </div><!--/row-->
                    <div class="row">
                        <div class="input-group">
                            <span class="input-group-addon">您是否曾感染对公共健康有影响的传染病或患过构成危险体质病或精神病？是否曾滥用毒品或药物？是否用毒成瘾？</span>
                            <select name="gender" class="form-control">
                                <option value="0">否</option>
                                <option value="1">是</option>
                            </select>
                        </div>
                    </div><!--/row-->

                    <div class="row">
                        <div class="input-group">
                            <span class="input-group-addon" style="color:red;text-align: left;">对上述任何问题的肯定回答并不自动意味着您无资格得到签证，但您的回答中如有任何一项是肯定的，您本人要到签证处当面说明。</span>
                        </div>
                    </div><!--/row-->
                </div>
            </div>
            </form>

        </div><!--/span-->

    </div><!--/row-->

    <hr>

    <footer>
        <p>&copy; Company 2014</p>
    </footer>





</div><!--/.container-->


</body>
</html>