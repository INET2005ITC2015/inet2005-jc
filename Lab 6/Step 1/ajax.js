/**
 * Created by inet2005 on 11/5/15.
 */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function GetXmlHttpObject()
{
    if (window.XMLHttpRequest)
    {     // code for IE7+, Firefox, Chrome, Opera, Safari
        return new XMLHttpRequest();
    }
    if (window.ActiveXObject)
    {     // code for IE6, IE5
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
    return null;
}