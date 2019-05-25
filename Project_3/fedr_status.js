var alist;
var arr = [];

jQuery(document).ready(function() {
	jQuery.post("http://www.cs.colostate.edu/~ct310/yr2017sp/more_assignments/project03masterlist.php", {}, function(data, status) {
		addRows(data)
		jQuery("#outp1").html(status);
	})
});

function addRows(lst) {
        var color = "";
	var rt = "";
	var tab = document.getElementById('sites');
	var i = tab.rows.length;
	var len = lst.length;
	for (j = len - 1; j >= 0; j--) {
		rt  = "<tr><td>";
		rt += "<a href=\"" + lst[j].baseURL + "\">" + lst[j].nameShort + "</a></td>";
                rt += "<td>" + lst[j].nameLong +  "</td>";
                //rt += "<a href=\"" + lst[j].baseURL + "ajax_status.php\">Status</a></td>";
                getStatus(lst[j].baseURL, j);
		rt += "<td id=\"" + j + "_status\" style=\"color: yellow\">unknown</td> </tr>";
		var rr = tab.insertRow(i);
		rr.innerHTML = rt;
	}
}

function getStatus(n, i) {
	jQuery.post(n + "ajax_status.php", {}, function(data, status) {
          target = "#" + i + "_status";
          if(data['status'].localeCompare("closed") == 0){
            jQuery(target).text(data['status']);
            jQuery(target).css("color", "red");
          }
          else if(data['status'].localeCompare("open") == 0){
            jQuery(target).text(data['status']);
            jQuery(target).css("color", "green");
            arr.push(n);
            //arr.toString();
            //document.getElementById("demo").innerHTML = arr;
          }
	})
}
