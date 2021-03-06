<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/system/seo.inc"}
{include file="include/system/css.inc"}
{include file="include/system/js.inc"}
</head>
<body>
<div id="wrapper">
{*サイトポジション*}
{include file="include/system/position.inc"}
<div id="page">
<div id="main_l">
<div id="roof_l_white">
    <div class="inside_l">
    {include file="include/system/shop_navi.inc"}
    <h2 class="h_title">商品管理</h2>
    <p class="m_b10">以下の項目を入力して[確認画面へ]ボタンをクリックしてください。<span class="attention">＊</span>の項目は必須となります。</p>
    <form id="couponForm" name="couponForm" action= "{$smarty.const.KUJAPANURLSSL}/system/shop/product/drop/input/siid/{$siid}" method="post" enctype="multipart/form-data">

    <table id="suggest">
    <tr>
    <th colspan="2">商品写真</th>
    </tr>
    <tr>
    <td width="150" valign="top">写真<span class="attention">＊</span></td>
    <td>
        <div id="fbox" class="fbox">
            <div style="float:left;">
        {if isset($shop_item.0.file_id)}
                ■現在の写真<br />
                <img src="{$shop_item.0.file_id|getFilePath:$shop_item.0.col_extension}" width="{$shop_item.0.col_width}" height="{$shop_item.0.col_height}" alt="{$shop_item.0.col_alt}" />
                <input type="hidden" name="fid" value="{$shop_item.0.file_id}">
        {/if}
            </div>
        </div>
    </td>
    </tr>
    </table>

    {foreach from=$form key="group_name" item="form_data" name="form_data"}
    <table id="suggest">
    <tr>
    <th colspan="2">{$group_name}</th>
    </tr>
    {foreach from=$form_data key="form_name" item="form_setting" name="form_setting"}
    {$form_name|make_form:$form_setting:$error:$smarty.const.SMARTY_BOOL_OFF:$smarty.const.SMARTY_BOOL_ON}
    {/foreach}
    </table>
    {/foreach}

<div>
</div>
    <div id="form_btn">
    <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
    <input type="hidden" name="siid" value="{$siid}" />
    <input type="hidden" name="delete_section" value="delete_section" />
    <input type="hidden" name="delete_file" value="on" />
    <input type="hidden" name="operation" value="regist" />
    <a href="javascript:history.back();"><img src="/img/system/b_modoru.gif" width="156" height="36" alt="戻る" /></a>
    <input type="image" src="/img/system/b_sakujyo.gif" value="submit" class="btn" onClick="return form_regist()" />
    </div>
    </form>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>
