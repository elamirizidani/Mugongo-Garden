	function checkdate() {
	    const options = { month: 'numeric', day: 'numeric', year: 'numeric' };
	    var stday = document.getElementById('indate').value;
	    var exday = new Date(stday);
	    var dd = exday.getDate() + 1;
	    var mm = exday.getMonth() + 1;
	    var yyyy = exday.getFullYear();
	    exday = yyyy + '/' + mm + '/' + dd;

	    exday = moment(exday).format("YYYY-MM-DD");

	    document.getElementById('outdate').min = exday;


	};
	
        $('#cuantity').change(function(){
          var price = $('#prc').val();
          var ttlPrice = price * $('#cuantity').val();
          $('#price').val(ttlPrice);
          console.log(ttlPrice);
        });
        


	$(document).ready(function() {

	    // every time input change, check value existence in database
	    $('#indate').change(function() {
	        let stday = $(this).val();

	        let exday = new Date(stday);
	        let dd = exday.getDate() + 1;
	        let mm = exday.getMonth() + 1;
	        let yyyy = exday.getFullYear();

	        exday = mm + '/' + dd + '/' + yyyy;

			console.log(exday);

	    });

	    $('#days input').change(function() {
	        var indate = new Date($("#indate").val());
	        var outdate = new Date($("#outdate").val());
	        var id = $('#room_id').val();
	        var price = $('#pric').val();
	        var nrooms = $('#nrooms').val();

	        var daysit = outdate.getTime() - indate.getTime();
	        var dais = daysit / (1000 * 3600 * 24);
	        var price = price * nrooms * dais;

	        document.getElementById('price').value = price;
	        console.log(dais);





	    });


		
	    /*
	    	    $('#submit').click(function() {
	    	        $.ajaxSetup({
	    	            headers: {
	    	                'X-col-lg-12 col-md-12"CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	            }
	    	        });

	    	        var data = $("form").serialize();
	    	        var url = "/bookRoom";
	    	        var post = "post";

	    	        $.ajax({
	    	            method: post,
	    	            url: url,
	    	            data: data,
	    	            dataType: 'json',
	    	            success: function(data) {
	    	                $('#check-room-status').text(data);
	    	                console.log("hello");
	    	                // show '.info_default' and hide '.info_does_not_exist'
	    	            },
	    	            error: function(data) {
	    	                $('#check-room-status').text(data);
	    	                console.log("hellooooooooooooooo");
	    	                // show '.info_does_not_exist' and hide '.info_default'
	    	            }
	    	        })

	    	    });
	    		*/
	})