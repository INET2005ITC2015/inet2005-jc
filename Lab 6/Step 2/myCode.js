/**
 * Created by inet2005 on 11/5/15.
 */
$(document).ready(function(){
    $('#searchExpr').keyup(function () {
        var t = this;
        $("#TxtHint").load("newEmpSearcher.php?searchExpr=" + t.value);
    });
});



