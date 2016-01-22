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
$("#newForm").submit(function(event) {
 var auth2 = gapi.auth2.getAuthInstance();
	if(!(auth2.isSignedIn.get()) || profile == null) {
		$("#newFormOut").html("<div class='alert alert-danger'>You Must Be Logged in to Google</div>")
	} else if(profile.getEmail().indexOf("@simivalleyusd.org") > -1) {
		$("#newFormOut").html("<div class='alert alert-warning'><i class='fa fa-spinner fa-spin'></i> Sending Data To Server</div>")
		var form = $("#newForm").children();
		$.ajax({
			type: "POST",
			url: "addClub.php",
			data: {
				"name": form.find("input[name='newName']").val(),
				"website": form.find("input[name='newWebsite']").val(),
				"president": form.find("input[name='newPresident']").val(),
				"advisor": form.find("input[name='newAdvisor']").val(),
				"time": form.find("input[name='newTime']").val(),
				"room": form.find("input[name='newRoom']").val(),
				"userEmail": profile.getEmail().substring(0 , profile.getEmail().indexOf("@"))
			},
			cache: false,
			success: function(data){
				$("#newFormOut").html(data);
			}
		});
	} else {
		$("#newFormOut").html("<div class='alert alert-danger'>Your Email is not a Simi Valley USD account.</div>")
	}
});
var clubId;
function onListChange() {
	var form = $("#editForm");
	if($("#clubList").val() < 1) {
		clubId = 1;
	} else {
		clubId = $("#clubList").val();
	}
	$.ajax({
		type: "POST",
		dataType: "json",
		url: "clubInfoToForm.php",
		data: {
			"clubId": clubId
		},
		cache: false,
		success: function(data) {
			$("#editName").val(data["clubName"]);
			$("#editWebsite").val(data["clubSite"]);
			if(data["clubApproved"] == 1) {
				document.getElementById("editApproved").checked  = true;
			} else {
				document.getElementById("editApproved").checked  = false;
			}
			$("#editPresident").val(data["clubPresident"]);	
			$("#editAdvisor").val(data["clubAdvisor"]);
			$("#editTime").val(data["clubTime"]);
			$("#editRoom").val(data["clubRoom"]);
		} 
	});
}
$("#clubList").on('change', function() {
	onListChange();
});
$(document).ready(function() {
	$("#clubList").load("loadClubList.php");
	onListChange();
});