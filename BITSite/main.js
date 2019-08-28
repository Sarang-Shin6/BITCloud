function openContractor(jobcatid, locid, dur, duedate, jobid) {
    document.getElementById("contractorListTable").style.display = "table";
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("contractorAssignmentTable").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","getCompatibleCon.php?jobcatid=" + jobcatid + "&locid=" + locid + "&dur=" + dur + "&duedate=" + duedate + "&jobid=" + jobid);
    xmlhttp.send();
}

function assignContractor(jobid, conid) {
    document.getElementById("contractorListTable").style.display = "none";
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("AssignmentTable").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET","assignContractor.php?jobid=" + jobid + "&conid=" + conid);
    xmlhttp.send();
}

function addJob(clientid, companyid, jobcategoryid, desc, startdate) {
    document.getElementById("AssignmentTable").innerHTML = "";
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("contractorAssignmentTable").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET","rejectAssignment.php?jobid=" + jobid + "&conid=" + conid);
    xmlhttp.send();
}

function verifyJob(jobid, coorid) {
    document.getElementById("coorJobsList").innerHTML = "";
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("coorJobsList").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET","verifyJob.php?jobid=" + jobid + "&coorid=" + coorid);
    xmlhttp.send();
}

$(function(){  // $(document).ready shorthand
    $('.sneak').fadeIn('slow');
  });
  $(document).ready(function() {
      /* Every time the window is scrolled ... */
      $(window).scroll( function(){
          /* Check the location of each desired element */
          $('.sneak').each( function(i){              
              var bottom_of_object = $(this).position().top + $(this).outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height();              
              /* If the object is completely visible in the window, fade it it */
              if( bottom_of_window > bottom_of_object - 200){
                  $(this).animate({'opacity':'1'},1500);                      
              }
          });       
      });      
  });

$(function(){
$('.fadein').fadeIn('slow');
});
$(document).ready(function() {
    $('.fadein').each( function(i){              
        var bottom_of_object = $(this).position().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        if( bottom_of_window > 0){                  
            $(this).animate({'opacity':'1'},1500);                      
        }              
    });    
});

