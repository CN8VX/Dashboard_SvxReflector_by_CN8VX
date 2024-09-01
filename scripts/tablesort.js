function tabSort(type) {
    console.log("tabSort %s", type);
    createCookie("svxrdb", escape(type), 1 );
};

function createCookie(name, value, day) {
	var expires;
 	if (day) {
  		var date = new Date();
  		// livetime 1 day
  		date.setTime(date.getTime() + (day * 86400 * 1000));
  		expires = "; expires=" + date.toGMTString();
 	} else {
  		expires = "";
 	}
  	document.cookie = escape(name) + "=" + escape(value) + expires + "path=/";
 }

function popinfo(textmsg) {
	console.log("%s", textmsg);
}
