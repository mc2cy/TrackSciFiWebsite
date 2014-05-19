$(document).ready(function() {
	
	$("#doctor").click(function() {
		$("#doctor_info").slideToggle(1500);

	});
	$("#eureka").click(function() {
		$("#eureka_info").slideToggle(1500);

	});
	$("#torchwood").click(function() {
		$("#torchwood_info").slideToggle(1500);

	});

    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();

    $( "#tabs" ).tabs();

    $( "#draggable" ).draggable();
    $( "#draggable2" ).draggable();
    $( "#draggable3" ).draggable();
    $("#username").change(function() {
    	$.ajax({
    		url: 'getInfo.php',
    		data: {username: $("#username").val()},
    		success: function(data) {
    			$("#userTable").html(data);
    		}

    	});

    });

    $("#vote").click(function() {
    	$.ajax({
    		url: 'getVote.php',
    		data: {username: $("#vote").val()},
    		success: function(data) {
    			$("#voteTable").html(data);
    		}

    	});

    });

    $("#recent").click(function() {
        $.ajax({
            url: 'recent.php',
            data: {username: $("#recent").val()},
            success: function(data) {
                $("#recentTable").html(data);
            }

        });

    });

     $("#updateseason").click(function() {
        $.ajax({
            url: 'updaterecent.php',
            data: {username: $("#updateseason").val()},
            success: function(data) {
            }

        });

    });

   
  

});


