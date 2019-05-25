var alist;
var arr = [];


jQuery(document).ready(function() {
  jQuery.post("http://www.cs.colostate.edu/~ct310/yr2017sp/more_assignments/project03masterlist.php", {}, function(data, status) {
    checkSites(data)
    jQuery("#outp1").html(status);
  })
  //start();
});

function checkSites(lst) {
  var len = lst.length;
  for (j = len - 1; j >= 0; j--) {
    getStatus(lst[j].baseURL, j, lst[j].nameShort, lst[j].nameLong);
  }
}

function getStatus(n, i, nameShort, nameLong) {
  jQuery.post(n + "ajax_status.php", {}, function(data, status) {
    if(data['status'].localeCompare("open") == 0){
      arr.push(n + "ajax_listing.php");
      //arr.toString();
      //document.getElementById("demo").innerHTML = arr;
      jQuery.post(n + "ajax_listing.php", {}, function(data, status) {
        var rt = "";
        var tab = document.getElementById('sites');
        var i = tab.rows.length;
        var len = data.length;
        for (j = len - 1; j >= 0; j--) {
          rt  = "<tr><td>";
          rt += "<a href=\"" + n + "\">" + nameShort + "</a></td>";
          rt += "<td>" + nameLong +  "</td>";
          rt += "<a href=\"ingredients.php?i=" + nameShort + "~" + data[j].name + "\">" + data[j].name + "</a></td>";
          rt += "<td>" + data[j].short +  "</td>";
          //rt += "<a href=\"" + lst[j].baseURL + "ajax_status.php\">Status</a></td>";
          rt += "</tr>";
          var rr = tab.insertRow(i);
          rr.innerHTML = rt;
        }
        jQuery("#outp2").html(status);
      })
    }
  })
}

// function start() {
//   for (var i = 0, len = arr.length; i < len; i++) {
//     jQuery.post(arr[i] + "ajax_listing.php", {}, function(data, status) {
//       jQuery("#outp2").html(status);
//     })
//   }
// }
