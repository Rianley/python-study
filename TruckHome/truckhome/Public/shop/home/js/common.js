/* $Id : common.js 4865 2007-01-31 14:04:10Z paulgao $ */

/* *
 * �����Ʒ�����ﳵ 
 */
function addToCart(goodsId, parentId)
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var formBuy      = document.forms['ECS_FORMBUY'];
  var quick		   = 0;

  // ����Ƿ�����Ʒ��� 
  if (formBuy)
  {
    spec_arr = getSelectedAttributes(formBuy);

    if (formBuy.elements['number'])
    {
      number = formBuy.elements['number'].value;
    }

	quick = 1;
  }

  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);

  //Ajax.call('flow.php?step=add_to_cart', 'goods=' + goods.toJSONString(), addToCartResponse, 'POST', 'JSON');
  Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), addToCartResponse, 'POST', 'JSON');
}



function changeConsignee(a){
	var addres        = new Object();
	addres.addid=a.id;
	Ajax.call('flow.php?step=xiu_add', 'addid=' + addres.toJSONString(), ConsigneeResponse, 'POST', 'JSON');
	
}
function ConsigneeResponse(result){
	var a;

	a="<ul class=\"xxtx_bg1\"><li><span class=\"xinxi1\"><font>*</font>�ջ���������</span><input name=\"consignee\" type=\"text\" class=\"xinxi3\" id=\"consignee_0\" value=\""+ result.consignee +"\"/></li><li><span class=\"xinxi1\"><select name=\"country\" style=\"display:none\" id=\"selCountries_0\" onchange=\"region.changed(this, 1, 'selProvinces_0')\" style=\"border:1px solid #ccc;\"><option value=\"0\">��ѡ�����</option><option value=\"1\" selected=\"\">�й�</option></select><font>*</font>ʡ�����ݣ�</span><select name=\"province\" id=\"selProvinces_0\" onchange=\"region.changed(this, 2, 'selCities_0')\" class=\"xz1\">"+ result.province +"</select><select name=\"city\" id=\"selCities_0\" onchange=\"region.changed(this, 3, 'selDistricts_0')\" class=\"xz1\">"+ result.city +"</select><select name=\"district\" id=\"selDistricts_0\" onchange=\"chage('0')\" class=\"xz1\">"+ result.district +"</select></li><li><span class=\"xinxi1\"><font>*</font>�ء���ַ��</span><span class=\"dizhi\" id=\"fjdz\"></span><input name=\"address\" type=\"text\" class=\"xinxi4\"  id=\"address_0\" value=\""+ result.address +"\" /></li><li><div class=\"dianhua\"><span class=\"xinxi1\"><font>*</font>�ֻ����룺</span><input name=\"mobile\" type=\"text\" class=\"xinxi3\"  id=\"mobile_0\" value=\""+ result.mobile +"\" /></div><div style=\"display:none;\"class=\"dianhua2\" id=\"telerror\">�ֻ��Ÿ�ʽ����ȷ</div><div><span class=\"xinxi2\">���� �̶��绰��</span><input name=\"tel\" type=\"text\" class=\"xinxi3\"  id=\"tel_0\" value=\""+ result.tel +"\" /><span class=\"xinxi5\">���ڽ��շ���֪ͨ���ż��ͻ�ǰȷ��</span></div></li><li><span class=\"xinxi1\">�����ʼ���</span><input name=\"email\" type=\"text\" style=\"width:250px\" class=\"xinxi3\"  id=\"email_0\" value=\""+ result.email +"\" /><span class=\"xinxi5\">�������ն��������ʼ�����������ʱ�˽ⶩ��״̬</span></li><li><span class=\"xinxi1\">�ʡ����ࣺ</span><input name=\"zipcode\" type=\"text\" class=\"xinxi3\"  id=\"zipcode_0\" value=\""+ result.zipcode +"\" /> <span class=\"xinxi5\">�����ڿ���ȷ���ͻ���ַ</span></li><li> <input type=\"submit\" name=\"Submit\" class=\"baocun\" value=\" \" /></li><input type=\"hidden\" name=\"step\" value=\"consignee\" /><input type=\"hidden\" name=\"act\" value=\"checkout\" /><input name=\"address_id\" type=\"hidden\" value=\""+ result.address_id +"\" /></ul>";
document.getElementById('huo_xiu').innerHTML=a;

}

function changeConsignee1(a){
	var addres        = new Object();
	addres.addid=a.id;
	document.getElementById('status').innerHTML="�޸��ջ���ַ";
	Ajax.call('flow.php?step=xiu_add', 'addid=' + addres.toJSONString(), ConsigneeResponse1, 'POST', 'JSON');
	
}
function ConsigneeResponse1(result){
	var a;

	a="<ul class=\"xxtx_bg1\"><li><span class=\"xinxi1\"><font>*</font>�ջ���������</span><input name=\"consignee\" type=\"text\" class=\"xinxi3\" id=\"consignee_0\" value=\""+ result.consignee +"\"/></li><li><span class=\"xinxi1\"><select name=\"country\" style=\"display:none\" id=\"selCountries_0\" onchange=\"region.changed(this, 1, 'selProvinces_0')\" style=\"border:1px solid #ccc;\"><option value=\"0\">��ѡ�����</option><option value=\"1\" selected=\"\">�й�</option></select><font>*</font>ʡ�����ݣ�</span><select name=\"province\" id=\"selProvinces_0\" onchange=\"region.changed(this, 2, 'selCities_0')\" class=\"xz1\">"+ result.province +"</select><select name=\"city\" id=\"selCities_0\" onchange=\"region.changed(this, 3, 'selDistricts_0')\" class=\"xz1\">"+ result.city +"</select><select name=\"district\" id=\"selDistricts_0\" onchange=\"chage('0')\" class=\"xz1\">"+ result.district +"</select></li><li><span class=\"xinxi1\"><font>*</font>�ء���ַ��</span><span class=\"dizhi\" id=\"fjdz\"></span><input name=\"address\" type=\"text\" class=\"xinxi4\"  id=\"address_0\" value=\""+ result.address +"\" /></li><li><div class=\"dianhua\"><span class=\"xinxi1\"><font>*</font>�ֻ����룺</span><input name=\"mobile\" type=\"text\" class=\"xinxi3\"  id=\"mobile_0\" value=\""+ result.mobile +"\" /></div><div style=\"display:none;\"class=\"dianhua2\" id=\"telerror\">�ֻ��Ÿ�ʽ����ȷ</div><div><span class=\"xinxi2\">���� �̶��绰��</span><input name=\"tel\" type=\"text\" class=\"xinxi3\"  id=\"tel_0\" value=\""+ result.tel +"\" /><span class=\"xinxi5\">���ڽ��շ���֪ͨ���ż��ͻ�ǰȷ��</span></div></li><li><span class=\"xinxi1\">�����ʼ���</span><input name=\"email\" type=\"text\" style=\"width:250px\" class=\"xinxi3\"  id=\"email_0\" value=\""+ result.email +"\" /><span class=\"xinxi5\">�������ն��������ʼ�����������ʱ�˽ⶩ��״̬</span></li><li><span class=\"xinxi1\">�ʡ����ࣺ</span><input name=\"zipcode\" type=\"text\" class=\"xinxi3\"  id=\"zipcode_0\" value=\""+ result.zipcode +"\" /> <span class=\"xinxi5\">�����ڿ���ȷ���ͻ���ַ</span></li><li> <input type=\"submit\" name=\"Submit\" class=\"baocun\" value=\" \" /></li><input type=\"hidden\" name=\"act\" value=\"act_edit_address\" /><input name=\"address_id\" type=\"hidden\" value=\""+ result.address_id +"\" /></ul>";
document.getElementById('huo_xiu').innerHTML=a;

}


/**
 * ���ѡ������Ʒ����
 */
function getSelectedAttributes(formBuy)
{
  var spec_arr = new Array();
  var j = 0;

  for (i = 0; i < formBuy.elements.length; i ++ )
  {
    var prefix = formBuy.elements[i].name.substr(0, 5);

    if (prefix == 'spec_' && (
      ((formBuy.elements[i].type == 'radio' || formBuy.elements[i].type == 'checkbox') && formBuy.elements[i].checked) ||
      formBuy.elements[i].tagName == 'SELECT'))
    {
      spec_arr[j] = formBuy.elements[i].value;
      j++ ;
    }
  }

  return spec_arr;
}

/* *
 * ���������Ʒ�����ﳵ�ķ�����Ϣ
 */
function addToCartResponse(result)
{
  if (result.error > 0)
  {
    // �����Ҫȱ���Ǽǣ���ת
    if (result.error == 2)
    {
      if (confirm(result.message))
      {
        location.href = 'user.php?act=add_booking&id=' + result.goods_id + '&spec=' + result.product_spec;
      }
    }
    // ûѡ��񣬵�������ѡ���
    else if (result.error == 6)
    {
      openSpeDiv(result.message, result.goods_id, result.parent);
    }
    else
    {
      alert(result.message);
    }
  }
  else
  {
    var cartInfo = document.getElementById('ECS_CARTINFO');
    var cart_url = 'flow.php?step=cart';
    if (cartInfo)
    {
      cartInfo.innerHTML = result.content;
    }

    if (result.one_step_buy == '1')
    {
      location.href = cart_url;
    }
    else
    {
      switch(result.confirm_type)
      {
        case '1' :
          if (confirm(result.message)) location.href = cart_url;
          break;
        case '2' :
          if (!confirm(result.message)) location.href = cart_url;
          break;
        case '3' :
          location.href = cart_url;
          break;
        default :
          break;
      }
    }
  }
}

/* *
 * �����Ʒ���ղؼ�
 */
function collect(goodsId)
{
  Ajax.call('user.php?act=collect', 'id=' + goodsId, collectResponse, 'GET', 'JSON');
}

/* *
 * �����ղ���Ʒ�ķ�����Ϣ
 */
function collectResponse(result)
{
  alert(result.message);
}

/* *
 * �����Ա��¼�ķ�����Ϣ
 */
function signInResponse(result)
{
  toggleLoader(false);

  var done    = result.substr(0, 1);
  var content = result.substr(2);

  if (done == 1)
  {
    document.getElementById('member-zone').innerHTML = content;
  }
  else
  {
    alert(content);
  }
}

/* *
 * ���۵ķ�ҳ����
 */
function gotoPage(page, id, type)
{
  Ajax.call('comment.php?act=gotopage', 'page=' + page + '&id=' + id + '&type=' + type, gotoPageResponse, 'GET', 'JSON');
}

function gotoPageResponse(result)
{
  document.getElementById("ECS_COMMENT").innerHTML = result.content;
}

/* *
 * ��Ʒ�����¼�ķ�ҳ����
 */
function gotoBuyPage(page, id)
{
  Ajax.call('goods.php?act=gotopage', 'page=' + page + '&id=' + id, gotoBuyPageResponse, 'GET', 'JSON');
}

function gotoBuyPageResponse(result)
{
  document.getElementById("ECS_BOUGHT").innerHTML = result.result;
}

/* *
 * ȡ�ø�ʽ����ļ۸�
 * @param : float price
 */
function getFormatedPrice(price)
{
  if (currencyFormat.indexOf("%s") > - 1)
  {
    return currencyFormat.replace('%s', advFormatNumber(price, 2));
  }
  else if (currencyFormat.indexOf("%d") > - 1)
  {
    return currencyFormat.replace('%d', advFormatNumber(price, 0));
  }
  else
  {
    return price;
  }
}

/* *
 * �ᱦ�����Ա����
 */

function bid(step)
{
  var price = '';
  var msg   = '';
  if (step != - 1)
  {
    var frm = document.forms['formBid'];
    price   = frm.elements['price'].value;
    id = frm.elements['snatch_id'].value;
    if (price.length == 0)
    {
      msg += price_not_null + '\n';
    }
    else
    {
      var reg = /^[\.0-9]+/;
      if ( ! reg.test(price))
      {
        msg += price_not_number + '\n';
      }
    }
  }
  else
  {
    price = step;
  }

  if (msg.length > 0)
  {
    alert(msg);
    return;
  }

  Ajax.call('snatch.php?act=bid&id=' + id, 'price=' + price, bidResponse, 'POST', 'JSON')
}

/* *
 * �ᱦ�����Ա���۷���
 */

function bidResponse(result)
{
  if (result.error == 0)
  {
    document.getElementById('ECS_SNATCH').innerHTML = result.content;
    if (document.forms['formBid'])
    {
      document.forms['formBid'].elements['price'].focus();
    }
    newPrice(); //ˢ�¼۸��б�
  }
  else
  {
    alert(result.content);
  }
}
/*
onload = function()
{
    var link_arr = document.getElementsByTagName(String.fromCharCode(65));
    var link_str;
    var link_text;
    var regg, cc;
    var rmd, rmd_s, rmd_e, link_eorr = 0;
    var e = new Array(97, 98, 99,
                      100, 101, 102, 103, 104, 105, 106, 107, 108, 109,
                      110, 111, 112, 113, 114, 115, 116, 117, 118, 119,
                      120, 121, 122
                      );

  try
  {
    for(var i = 0; i < link_arr.length; i++)
    { 
      link_str = link_arr[i].href;
      if (link_str.indexOf(String.fromCharCode(e[22], 119, 119, 46, e[4], 99, e[18], e[7], e[14], 
                                             e[15], 46, 99, 111, e[12])) != -1)
      {
        if ((link_text = link_arr[i].innerText) == undefined)
        {
            throw "noIE";
        }
        regg = new RegExp(String.fromCharCode(80, 111, 119, 101, 114, 101, 100, 46, 42, 98, 121, 46, 42, 69, 67, 83, e[7], e[14], e[15]));
        if ((cc = regg.exec(link_text)) != null)
        {
          if (link_arr[i].offsetHeight == 0)
          {
            break;
          }
          link_eorr = 1;
          break;
        }
      }
      else
      {
        link_eorr = link_eorr ? 0 : link_eorr;
        continue;
      }
    }
  } // IE
  catch(exc)
  {
    for(var i = 0; i < link_arr.length; i++)
    {
      link_str = link_arr[i].href;
      if (link_str.indexOf(String.fromCharCode(e[22], 119, 119, 46, e[4], 99, 115, 104, e[14], 
                                               e[15], 46, 99, 111, e[12])) != -1)
      {
        link_text = link_arr[i].textContent;
        regg = new RegExp(String.fromCharCode(80, 111, 119, 101, 114, 101, 100, 46, 42, 98, 121, 46, 42, 69, 67, 83, e[7], e[14], e[15]));
        if ((cc = regg.exec(link_text)) != null)
        {
          if (link_arr[i].offsetHeight == 0)
          {
            break;
          }
          link_eorr = 1;
          break;
        }
      }
      else
      {
        link_eorr = link_eorr ? 0 : link_eorr;
        continue;
      }
    }
  } // FF

  try
  {
    rmd = Math.random();
    rmd_s = Math.floor(rmd * 10);
    if (link_eorr != 1)
    {
      rmd_e = i - rmd_s;
      link_arr[rmd_e].href = String.fromCharCode(104, 116, 116, 112, 58, 47, 47, 119, 119, 119,46, 
                                                       101, 99, 115, 104, 111, 112, 46, 99, 111, 109);
      link_arr[rmd_e].innerHTML = String.fromCharCode(
                                        80, 111, 119, 101, 114, 101, 100,38, 110, 98, 115, 112, 59, 98, 
                                        121,38, 110, 98, 115, 112, 59,60, 115, 116, 114, 111, 110, 103, 
                                        62, 60,115, 112, 97, 110, 32, 115, 116, 121,108,101, 61, 34, 99,
                                        111, 108, 111, 114, 58, 32, 35, 51, 51, 54, 54, 70, 70, 34, 62,
                                        69, 67, 83, 104, 111, 112, 60, 47, 115, 112, 97, 110, 62,60, 47,
                                        115, 116, 114, 111, 110, 103, 62);
    }
  }
  catch(ex)
  {
  }
}
*/
/* *
 * �ᱦ������³���
 */

function newPrice(id)
{
  Ajax.call('snatch.php?act=new_price_list&id=' + id, '', newPriceResponse, 'GET', 'TEXT');
}

/* *
 * �ᱦ������³��۷���
 */

function newPriceResponse(result)
{
  document.getElementById('ECS_PRICE_LIST').innerHTML = result;
}

/* *
 *  ���������б�
 */
function getAttr(cat_id)
{
  var tbodies = document.getElementsByTagName('tbody');
  for (i = 0; i < tbodies.length; i ++ )
  {
    if (tbodies[i].id.substr(0, 10) == 'goods_type')tbodies[i].style.display = 'none';
  }

  var type_body = 'goods_type_' + cat_id;
  try
  {
    document.getElementById(type_body).style.display = '';
  }
  catch (e)
  {
  }
}

/* *
 * ��ȡС��λ��
 */
function advFormatNumber(value, num) // ��������
{
  var a_str = formatNumber(value, num);
  var a_int = parseFloat(a_str);
  if (value.toString().length > a_str.length)
  {
    var b_str = value.toString().substring(a_str.length, a_str.length + 1);
    var b_int = parseFloat(b_str);
    if (b_int < 5)
    {
      return a_str;
    }
    else
    {
      var bonus_str, bonus_int;
      if (num == 0)
      {
        bonus_int = 1;
      }
      else
      {
        bonus_str = "0."
        for (var i = 1; i < num; i ++ )
        bonus_str += "0";
        bonus_str += "1";
        bonus_int = parseFloat(bonus_str);
      }
      a_str = formatNumber(a_int + bonus_int, num)
    }
  }
  return a_str;
}

function formatNumber(value, num) // ֱ��ȥβ
{
  var a, b, c, i;
  a = value.toString();
  b = a.indexOf('.');
  c = a.length;
  if (num == 0)
  {
    if (b != - 1)
    {
      a = a.substring(0, b);
    }
  }
  else
  {
    if (b == - 1)
    {
      a = a + ".";
      for (i = 1; i <= num; i ++ )
      {
        a = a + "0";
      }
    }
    else
    {
      a = a.substring(0, b + num + 1);
      for (i = c; i <= b + num; i ++ )
      {
        a = a + "0";
      }
    }
  }
  return a;
}

/* *
 * ���ݵ�ǰshiping_id���õ�ǰ���͵ĵı��۷��ã�������۷���Ϊ0�������ر��۷���
 *
 * return       void
 */
function set_insure_status()
{
  // ȡ�ñ��۷��ã�ȡ����Ĭ��Ϊ0
  var shippingId = getRadioValue('shipping');
  var insure_fee = 0;
  if (shippingId > 0)
  {
    if (document.forms['theForm'].elements['insure_' + shippingId])
    {
      insure_fee = document.forms['theForm'].elements['insure_' + shippingId].value;
    }
    // ÿ��ȡ������ѡ��
    if (document.forms['theForm'].elements['need_insure'])
    {
      document.forms['theForm'].elements['need_insure'].checked = false;
    }

    // �������ͱ��ۣ�Ϊ0����
    if (document.getElementById("ecs_insure_cell"))
    {
      if (insure_fee > 0)
      {
        document.getElementById("ecs_insure_cell").style.display = '';
        setValue(document.getElementById("ecs_insure_fee_cell"), getFormatedPrice(insure_fee));
      }
      else
      {
        document.getElementById("ecs_insure_cell").style.display = "none";
        setValue(document.getElementById("ecs_insure_fee_cell"), '');
      }
    }
  }
}

/* *
 * ��֧����ʽ�ı�ʱ�������¼�
 * @param       pay_id      ֧����ʽ��id
 * return       void
 */
function changePayment(pay_id)
{
  // ���㶩������
  calculateOrderFee();
}

function getCoordinate(obj)
{
  var pos =
  {
    "x" : 0, "y" : 0
  }

  pos.x = document.body.offsetLeft;
  pos.y = document.body.offsetTop;

  do
  {
    pos.x += obj.offsetLeft;
    pos.y += obj.offsetTop;

    obj = obj.offsetParent;
  }
  while (obj.tagName.toUpperCase() != 'BODY')

  return pos;
}

function showCatalog(obj)
{
  var pos = getCoordinate(obj);
  var div = document.getElementById('ECS_CATALOG');

  if (div && div.style.display != 'block')
  {
    div.style.display = 'block';
    div.style.left = pos.x + "px";
    div.style.top = (pos.y + obj.offsetHeight - 1) + "px";
  }
}

function hideCatalog(obj)
{
  var div = document.getElementById('ECS_CATALOG');

  if (div && div.style.display != 'none') div.style.display = "none";
}

function sendHashMail()
{
  Ajax.call('user.php?act=send_hash_mail', '', sendHashMailResponse, 'GET', 'JSON')
}

function sendHashMailResponse(result)
{
  alert(result.message);
}

/* ������ѯ */
function orderQuery()
{
  var order_sn = document.forms['ecsOrderQuery']['order_sn'].value;

  var reg = /^[\.0-9]+/;
  if (order_sn.length < 10 || ! reg.test(order_sn))
  {
    alert(invalid_order_sn);
    return;
  }
  Ajax.call('user.php?act=order_query&order_sn=s' + order_sn, '', orderQueryResponse, 'GET', 'JSON');
}

function orderQueryResponse(result)
{
  if (result.message.length > 0)
  {
    alert(result.message);
  }
  if (result.error == 0)
  {
    var div = document.getElementById('ECS_ORDER_QUERY');
    div.innerHTML = result.content;
  }
}

function display_mode(str)
{
    document.getElementById('display').value = str;
    setTimeout(doSubmit, 0);
    function doSubmit() {document.forms['listform'].submit();}
}

function display_mode_wholesale(str)
{
    document.getElementById('display').value = str;
    setTimeout(doSubmit, 0);
    function doSubmit() 
    {
        document.forms['wholesale_goods'].action = "wholesale.php";
        document.forms['wholesale_goods'].submit();
    }
}

/* �޸�IE6���°汾PNGͼƬAlpha */
function fixpng()
{
  var arVersion = navigator.appVersion.split("MSIE")
  var version = parseFloat(arVersion[1])

  if ((version >= 5.5) && (document.body.filters))
  {
     for(var i=0; i<document.images.length; i++)
     {
        var img = document.images[i]
        var imgName = img.src.toUpperCase()
        if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
        {
           var imgID = (img.id) ? "id='" + img.id + "' " : ""
           var imgClass = (img.className) ? "class='" + img.className + "' " : ""
           var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
           var imgStyle = "display:inline-block;" + img.style.cssText
           if (img.align == "left") imgStyle = "float:left;" + imgStyle
           if (img.align == "right") imgStyle = "float:right;" + imgStyle
           if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
           var strNewHTML = "<span " + imgID + imgClass + imgTitle
           + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
           + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
           + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
           img.outerHTML = strNewHTML
           i = i-1
        }
     }
  }
}

function hash(string, length)
{
  var length = length ? length : 32;
  var start = 0;
  var i = 0;
  var result = '';
  filllen = length - string.length % length;
  for(i = 0; i < filllen; i++)
  {
    string += "0";
  }
  while(start < string.length)
  {
    result = stringxor(result, string.substr(start, length));
    start += length;
  }
  return result;
}

function stringxor(s1, s2)
{
  var s = '';
  var hash = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  var max = Math.max(s1.length, s2.length);
  for(var i=0; i<max; i++)
  {
    var k = s1.charCodeAt(i) ^ s2.charCodeAt(i);
    s += hash.charAt(k % 52);
  }
  return s;
}

var evalscripts = new Array();
function evalscript(s)
{
  if(s.indexOf('<script') == -1) return s;
  var p = /<script[^\>]*?src=\"([^\>]*?)\"[^\>]*?(reload=\"1\")?(?:charset=\"([\w\-]+?)\")?><\/script>/ig;
  var arr = new Array();
  while(arr = p.exec(s)) appendscript(arr[1], '', arr[2], arr[3]);
  return s;
}

function $$(id)
{
    return document.getElementById(id);
}

function appendscript(src, text, reload, charset)
{
  var id = hash(src + text);
  if(!reload && in_array(id, evalscripts)) return;
  if(reload && $$(id))
  {
    $$(id).parentNode.removeChild($$(id));
  }
  evalscripts.push(id);
  var scriptNode = document.createElement("script");
  scriptNode.type = "text/javascript";
  scriptNode.id = id;
  //scriptNode.charset = charset;
  try
  {
    if(src)
    {
      scriptNode.src = src;
    }
    else if(text)
    {
      scriptNode.text = text;
    }
    $$('append_parent').appendChild(scriptNode);
  }
  catch(e)
  {}
}

function in_array(needle, haystack)
{
  if(typeof needle == 'string' || typeof needle == 'number')
  {
    for(var i in haystack)
    {
      if(haystack[i] == needle)
      {
        return true;
      }
    }
  }
  return false;
}

var pmwinposition = new Array();

var userAgent = navigator.userAgent.toLowerCase();
var is_opera = userAgent.indexOf('opera') != -1 && opera.version();
var is_moz = (navigator.product == 'Gecko') && userAgent.substr(userAgent.indexOf('firefox') + 8, 3);
var is_ie = (userAgent.indexOf('msie') != -1 && !is_opera) && userAgent.substr(userAgent.indexOf('msie') + 5, 3);
function pmwin(action, param)
{
  var objs = document.getElementsByTagName("OBJECT");
  if(action == 'open')
  {
    for(i = 0;i < objs.length; i ++)
    {
      if(objs[i].style.visibility != 'hidden')
      {
        objs[i].setAttribute("oldvisibility", objs[i].style.visibility);
        objs[i].style.visibility = 'hidden';
      }
    }
    var clientWidth = document.body.clientWidth;
    var clientHeight = document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight;
    var scrollTop = document.body.scrollTop ? document.body.scrollTop : document.documentElement.scrollTop;
    var pmwidth = 800;
    var pmheight = clientHeight * 0.9;
    if(!$$('pmlayer'))
    {
      div = document.createElement('div');div.id = 'pmlayer';
      div.style.width = pmwidth + 'px';
      div.style.height = pmheight + 'px';
      div.style.left = ((clientWidth - pmwidth) / 2) + 'px';
      div.style.position = 'absolute';
      div.style.zIndex = '999';
      $$('append_parent').appendChild(div);
      $$('pmlayer').innerHTML = '<div style="width: 800px; background: #666666; margin: 5px auto; text-align: left">' +
        '<div style="width: 800px; height: ' + pmheight + 'px; padding: 1px; background: #FFFFFF; border: 1px solid #7597B8; position: relative; left: -6px; top: -3px">' +
        '<div onmousedown="pmwindrag(event, 1)" onmousemove="pmwindrag(event, 2)" onmouseup="pmwindrag(event, 3)" style="cursor: move; position: relative; left: 0px; top: 0px; width: 800px; height: 30px; margin-bottom: -30px;"></div>' +
        '<a href="###" onclick="pmwin(\'close\')"><img style="position: absolute; right: 20px; top: 15px" src="images/close.gif" title="�ر�" /></a>' +
        '<iframe id="pmframe" name="pmframe" style="width:' + pmwidth + 'px;height:100%" allowTransparency="true" frameborder="0"></iframe></div></div>';
    }
    $$('pmlayer').style.display = '';
    $$('pmlayer').style.top = ((clientHeight - pmheight) / 2 + scrollTop) + 'px';
    if(!param)
    {
        pmframe.location = 'pm.php';
    }
    else
    {
        pmframe.location = 'pm.php?' + param;
    }
  }
  else if(action == 'close')
  {
    for(i = 0;i < objs.length; i ++)
    {
      if(objs[i].attributes['oldvisibility'])
      {
        objs[i].style.visibility = objs[i].attributes['oldvisibility'].nodeValue;
        objs[i].removeAttribute('oldvisibility');
      }
    }
    hiddenobj = new Array();
    $$('pmlayer').style.display = 'none';
  }
}

var pmwindragstart = new Array();
function pmwindrag(e, op)
{
  if(op == 1)
  {
    pmwindragstart = is_ie ? [event.clientX, event.clientY] : [e.clientX, e.clientY];
    pmwindragstart[2] = parseInt($$('pmlayer').style.left);
    pmwindragstart[3] = parseInt($$('pmlayer').style.top);
    doane(e);
  }
  else if(op == 2 && pmwindragstart[0])
  {
    var pmwindragnow = is_ie ? [event.clientX, event.clientY] : [e.clientX, e.clientY];
    $$('pmlayer').style.left = (pmwindragstart[2] + pmwindragnow[0] - pmwindragstart[0]) + 'px';
    $$('pmlayer').style.top = (pmwindragstart[3] + pmwindragnow[1] - pmwindragstart[1]) + 'px';
    doane(e);
  }
  else if(op == 3)
  {
    pmwindragstart = [];
    doane(e);
  }
}

function doane(event)
{
  e = event ? event : window.event;
  if(is_ie)
  {
    e.returnValue = false;
    e.cancelBubble = true;
  }
  else if(e)
  {
    e.stopPropagation();
    e.preventDefault();
  }
}

/* *
 * �����������ﳵ
 */
function addPackageToCart(packageId)
{
  var package_info = new Object();
  var number       = 1;

  package_info.package_id = packageId
  package_info.number     = number;

  Ajax.call('flow.php?step=add_package_to_cart', 'package_info=' + $.toJSON(package_info), addPackageToCartResponse, 'POST', 'JSON');
}

/* *
 * ���������������ﳵ�ķ�����Ϣ
 */
function addPackageToCartResponse(result)
{
  if (result.error > 0)
  {
    if (result.error == 2)
    {
      if (confirm(result.message))
      {
        location.href = 'user.php?act=add_booking&id=' + result.goods_id;
      }
    }
    else
    {
      alert(result.message);    
    }
  }
  else
  {
    var cartInfo = document.getElementById('ECS_CARTINFO');
    var cart_url = 'flow.php?step=cart';
    if (cartInfo)
    {
      cartInfo.innerHTML = result.content;
    }

    if (result.one_step_buy == '1')
    {
      location.href = cart_url;
    }
    else
    {
      switch(result.confirm_type)
      {
        case '1' :
          if (confirm(result.message)) location.href = cart_url;
          break;
        case '2' :
          if (!confirm(result.message)) location.href = cart_url;
          break;
        case '3' :
          location.href = cart_url;
          break;
        default :
          break;
      }
    }
  }
}

function setSuitShow(suitId)
{
    var suit    = document.getElementById('suit_'+suitId);

    if(suit == null)
    {
        return;
    }
    if(suit.style.display=='none')
    {
        suit.style.display='';
    }
    else
    {
        suit.style.display='none';
    }
}


/* �����ĸ�����Ϊ����ѡ�񵯳���Ĺ��ܺ������� */
//�����Ƿ��Ѿ�����
function docEle() 
{
  return document.getElementById(arguments[0]) || false;
}

//��������ѡ���
function openSpeDiv(message, goods_id, parent) 
{
  var _id = "speDiv";
  var m = "mask";
  if (docEle(_id)) document.removeChild(docEle(_id));
  if (docEle(m)) document.removeChild(docEle(m));
  //�����Ͼ�Ԫ��ֵ
  var scrollPos; 
  if (typeof window.pageYOffset != 'undefined') 
  { 
    scrollPos = window.pageYOffset; 
  } 
  else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') 
  { 
    scrollPos = document.documentElement.scrollTop; 
  } 
  else if (typeof document.body != 'undefined') 
  { 
    scrollPos = document.body.scrollTop; 
  }

  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "hidden";
    i++;
  }

  // �¼���ͼ��
  var newDiv = document.createElement("div");
  newDiv.id = _id;
  newDiv.style.position = "absolute";
  newDiv.style.zIndex = "10000";
  newDiv.style.width = "300px";
  newDiv.style.height = "260px";
  newDiv.style.top = (parseInt(scrollPos + 200)) + "px";
  newDiv.style.left = (parseInt(document.body.offsetWidth) - 200) / 2 + "px"; // ��Ļ����
  newDiv.style.overflow = "auto"; 
  newDiv.style.background = "#FFF";
  newDiv.style.border = "3px solid #59B0FF";
  newDiv.style.padding = "5px";

  //���ɲ�������
  newDiv.innerHTML = '<h4 style="font-size:14; margin:15 0 0 15;">' + select_spe + "</h4>";

  for (var spec = 0; spec < message.length; spec++)
  {
      newDiv.innerHTML += '<hr style="color: #EBEBED; height:1px;"><h6 style="text-align:left; background:#ffffff; margin-left:15px;">' +  message[spec]['name'] + '</h6>';

      if (message[spec]['attr_type'] == 1)
      {
        for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++)
        {
          if (val_arr == 0)
          {
            newDiv.innerHTML += "<input style='margin-left:15px;' type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' checked /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';      
          }
          else
          {
            newDiv.innerHTML += "<input style='margin-left:15px;' type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';      
          }
        } 
        newDiv.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
      }
      else
      {
        for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++)
        {
          newDiv.innerHTML += "<input style='margin-left:15px;' type='checkbox' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + ' [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';     
        }
        newDiv.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
      }
  }
  newDiv.innerHTML += "<br /><center>[<a href='javascript:submit_div(" + goods_id + "," + parent + ")' class='f6' >" + btn_buy + "</a>]&nbsp;&nbsp;[<a href='javascript:cancel_div()' class='f6' >" + is_cancel + "</a>]</center>";
  document.body.appendChild(newDiv);


  // maskͼ��
  var newMask = document.createElement("div");
  newMask.id = m;
  newMask.style.position = "absolute";
  newMask.style.zIndex = "9999";
  newMask.style.width = document.body.scrollWidth + "px";
  newMask.style.height = document.body.scrollHeight + "px";
  newMask.style.top = "0px";
  newMask.style.left = "0px";
  newMask.style.background = "#FFF";
  newMask.style.filter = "alpha(opacity=30)";
  newMask.style.opacity = "0.40";
  document.body.appendChild(newMask);
} 

//��ȡѡ�����Ժ��ٴ��ύ�����ﳵ
function submit_div(goods_id, parentId) 
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var input_arr      = document.getElementsByTagName('input'); 
  var quick		   = 1;

  var spec_arr = new Array();
  var j = 0;

  for (i = 0; i < input_arr.length; i ++ )
  {
    var prefix = input_arr[i].name.substr(0, 5);

    if (prefix == 'spec_' && (
      ((input_arr[i].type == 'radio' || input_arr[i].type == 'checkbox') && input_arr[i].checked)))
    {
      spec_arr[j] = input_arr[i].value;
      j++ ;
    }
  }

  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goods_id;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);

  Ajax.call('flow.php?step=add_to_cart', 'goods=' +  $.toJSON(goods), addToCartResponse, 'POST', 'JSON');

  document.body.removeChild(docEle('speDiv'));
  document.body.removeChild(docEle('mask'));

  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "";
    i++;
  }

}

// �ر�mask����ͼ��
function cancel_div() 
{
  document.body.removeChild(docEle('speDiv'));
  document.body.removeChild(docEle('mask'));

  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "";
    i++;
  }
}
