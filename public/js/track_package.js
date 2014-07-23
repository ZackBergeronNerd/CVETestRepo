function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');

  for(var i = 0; i < ca.length; i++) {
    var c = ca[i].trim();
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }

  return "";
}

var client = getCookie("client");
var user_package = getCookie("package");

if(client.trim().length > 0) {
  console.log(user_package);
  console.log(client);
  console.log(window.location.host);
  console.log(window.location.pathname);
  console.log(document.title);
}