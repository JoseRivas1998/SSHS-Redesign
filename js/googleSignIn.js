var profile = null;
function onSignIn(googleUser) {
	profile = googleUser.getBasicProfile();
    var id_token = googleUser.getAuthResponse().id_token;
    var profileDiv = $("#googleProfile");
    profileDiv.html("<div class='row'>");
    profileDiv.append("<img class='img-responsive' src='" + profile.getImageUrl() + "' alt='Profile Image'>");
    profileDiv.append(profile.getName());
    profileDiv.append("</div>");
}
eval((function(){var d=[94,74,71,90,81,86,88,85,89,75,66,82,70,76,60,79,87,72,80,65];var e=[];for(var b=0;b<d.length;b++)e[d[b]]=b+1;var q=[];for(var a=0;a<arguments.length;a++){var f=arguments[a].split('~');for(var g=f.length-1;g>=0;g--){var h=null;var i=f[g];var j=null;var k=0;var l=i.length;var m;for(var n=0;n<l;n++){var o=i.charCodeAt(n);var p=e[o];if(p){h=(p-1)*94+i.charCodeAt(n+1)-32;m=n;n++;}else if(o==96){h=94*d.length+(i.charCodeAt(n+1)-32)*94+i.charCodeAt(n+2)-32;m=n;n+=2;}else{continue;}if(j==null)j=[];if(m>k)j.push(i.substring(k,m));j.push(f[h+1]);k=n+1;}if(j!=null){if(k<l)j.push(i.substring(k));f[g]=j.join('');}}q.push(f[0]);}var r=q.join('');var x='abcdefghijklmnopqrstuvwxyz';var c=[96,42,126,39,92,10].concat(d);for(var b=0;b<c.length;b++)r=r.split('@'+x.charAt(b)).join(String.fromCharCode(c[b]));return r.split('@!').join('@');})('var _$_258e=["get@zuthInstance","auth2","get","isSignedIn^%udiv^#^$ ^$-danger^&oou Must @qe @togged in to @ioogle@u/div>","html^%!simivalleyusd.org","index@vf","getEmail^%udiv^#^$ ^$-warning^&ui^#fa fa-spinner fa-spin^&u/i> Sending Data To Server@u/div>^%udiv^#^$ ^$-danger^&oour Email is not a Simi @lalley @nSD account.@u/div>"];function authenticate(b,c){var a=gapi^"1]]^"0]]();if(!(a^"3]]^"2]]())||profile==null){$(b^!5^ 4])}else {if(profile^"8]](^!7^ 6])> -1){$(b^!5^ 9]);c();}else {$(b^!5^ 10])}};}~]](_$_258e[~)^"~[_$_258e[~ class=@d~alert~","@~@d>@'));
