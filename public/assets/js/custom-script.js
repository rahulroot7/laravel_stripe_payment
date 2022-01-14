  // Datatable code start

$(document).ready(function() {
   
  var table = $('#example').DataTable({ 
        select: false,
        "columnDefs": [{
            className: "Name", 
            "targets":[0],
            "visible": false,
            "searchable":false
        }]
    });//End of create main table
});
$(document).ready(function() {

  var table = $('#prospecting_example').DataTable({ 
        select: false,
        "columnDefs": [{
            className: "Name", 
            "targets":[0],
            "visible": false,
            "searchable":false
        }]
    });//End of create main table
});

function activestatus_func() {
  var x = document.getElementById("activestatus");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
// end datatable

$(document).on("click",".update_list",function() {
    var list_name = $(this).attr("data-product_id");
    $('.list_name').val($(this).data('status-text'))
    $('#date').html(list_name);
    console.log(list_name);
});

function openaccountdetail(accountdetail) {
  var i;
  var x = document.getElementsByClassName("account");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(accountdetail).style.display = "block";  
}


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

