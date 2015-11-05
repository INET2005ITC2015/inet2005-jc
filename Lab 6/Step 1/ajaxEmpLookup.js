/**
 * Created by inet2005 on 11/5/15.
 */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var xmlhttp;
function showMatches(str)
{
    if (str.length==0)
    {
        document.getElementById("TxtHint").innerHTML="";
        return;
    }
    xmlhttp=GetXmlHttpObject();
    if (xmlhttp==null)
    {  	alert ("Your browser does not support XMLHTTP!");
        return;
    }
    var url="newEmpSearch.php";
    url=url+"?q="+str;
    url=url+"&sid="+Math.random();
    xmlhttp.onreadystatechange=stateChanged;
    xmlhttp.open("GET",url,true);
    xmlhttp.send(null);
}

function stateChanged()
{
    if (xmlhttp.readyState==4)
    {
        document.getElementById("TxtHint").innerHTML=xmlhttp.responseText;
    }
}