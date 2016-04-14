$(document).ready(function () {
    var id = $(location).attr('pathname');
    $(document.getElementById(id)).addClass("active");
});
// ADD SLIDEDOWN ANIMATION TO DROPDOWN //
$('.dropdown').on('show.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// ADD SLIDEUP ANIMATION TO DROPDOWN //
$('.dropdown').on('hide.bs.dropdown', function (e) {
    e.preventDefault();
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300, function () {
        $(this).parent().removeClass('open');
    });
});

function formatDateTimeLocal(dateValue, addZeroes) {
    var indexT = dateValue.indexOf("T");
    var date = dateValue.substring(0, indexT);
    var time = dateValue.substring(indexT + 1);
    if (addZeroes) {
        time += ":00";
    }
    var dateTime = date + " " + time;
    if (!dateValue || dateValue === "") {
        return "";
    } else {
        return dateTime;
    }
}

function dateTimeToDateTimeLocal(dateTime) {
    var indexSpace = dateTime.indexOf(" ");
    var date = dateTime.substring(0, indexSpace);
    var time = dateTime.substring(indexSpace + 1);
    var dateTimeLocal = date + "T" + time;
    if (!dateTime || dateTime == null) {
        return "";
    } else {
        return dateTimeLocal;
    }
}

function tinyMceInit(selector, css, onInit) {
  tinymce.init({
    selector: selector,
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
        editor.on('init', function() {
          onInit();
        });
    },
    plugins: "link, image, code, wordcount, media, autoresize, autolink, charmap, fullscreen, fontawesome",
    toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | charmap | link | image media | fullscreen | fontawesome",
    relative_urls: false,
    autoresize_bottom_margin: 10,
    autoresize_min_height: 450,
    content_css: css
  });
}

function signOut() {
    $.ajax({
        type: "GET",
        url: $(location).attr('href') + "?logout",
        cache: false,
        success: function(data) {
            window.location.href = "/";
        }
    });
}

function popup(linkHref, windowName) {
  if(!window.focus) return true;
  var href;
  if(typeof(linkHref == "string")) {
    href = linkHref;
  } else {
    href = linkHref.href;
  }
  var left = (screen.width/2)-(500/2);
  var top = (screen.height/2)-(500/2);
  window.open(href, windowName, "width=500,height=500,scrollbars=yes,top=" + top + ",left=" + left);
  return false;
}
