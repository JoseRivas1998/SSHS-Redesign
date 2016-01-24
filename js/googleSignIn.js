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
