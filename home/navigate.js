function makeCookie(name,value){
  document.cookie="name="+value;
}
function myFunction(clicked_id){
  window.location.href="class/class.php?cls="+clicked_id;
}
function run(class_id,sub_id){
    window.location.href=sub_id+".php?cls="+class_id+"&sub_id="+sub_id;
}
function myFunctionTest(clicked_id){
  makeCookie("id_t",clicked_id);
  window.location.href="class/class_t.php";
}
function getCookie(cname){
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
