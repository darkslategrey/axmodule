

$(function() { 
    $("#socid").change(function() { 
        var socid = $(this).val();
	var baseUri = document.baseURI;
	baseUri = baseUri.slice(0, baseUri.indexOf("/contact"));

	if(socid == -1) {
	    $("textarea[name=address]").text("");
	    $("#departement_id option").removeAttr("selected");
	    $("#zipcode").val("");
	    $("#town").val("");
	    $("input[name=phone_pro]").val("");
	    $("input[name=fax]").val("");
	} else {
            jQuery.getJSON(baseUri + "/axmodule/ajax/ajaxsociete.php?socid="+socid,
			   {},
			   function(data) { 
			       $("textarea[name=address]").text(data.address);
			       jQuery.getJSON(baseUri + '/core/ajaxziptown.php', 
					      { zipcode: data.cp }, 
					      function(data) { 
						  $("#departement_id option[value="+data[0].departement_id+"]").attr("selected", "true");
					      });
			       $("#zipcode").val(data.cp);
			       $("#town").val(data.ville);
			       $("input[name=phone_pro]").val(data.telpro);
			       $("input[name=fax]").val(data.fax);
			   });
        }
    });
});

