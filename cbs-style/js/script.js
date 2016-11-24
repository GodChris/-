/*判断输入的评价是否为空*/
function checkcontentisNull() {
    var content=document.getElementById("evaluation").value;
    if(content==null||content==''){
        alert("请正确输入您的评价");
        return false;
    }
    return true;
}
/*红包页面*/