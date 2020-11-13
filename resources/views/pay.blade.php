<!DOCTYPE html>
<html>
<head>
	<title>Payment Form</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<style>
		h2.bg-success{
    		padding: 15px;
		}

		.required-lbl{
		    color: red;
		}

		label[for="billinginformation"]{
		    display: inline;
		    float: left;
		    margin:0px 45px 0px 0px;
		}

		.card-expiry{
		    padding-left: 0px;
		}

		.confirm-btn{
		    float:right;
		}

		.bg-primary{
		    padding: 10px;
		}

		label{
		    margin-bottom :0px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
	        <strong>Purchase Summary:</strong>
	        <h2 class="bg-success">Today's Total: RM 100.00</h2>
	        
            <form action="{{ route('payment-request') }}" method="POST">
            	@csrf
            	<div class="form-group col-md-12 bg-primary">
	                <label class="control-label" for="contactinformation">Contact Information:</label>
	            </div>
	            
	            <div class="form-group col-md-6">
	              <span class="required-lbl">* </span><label class="control-label" for="emailaddress">Name </label>
	              <div class="controls">
	                <input id="name" name="name" type="text" placeholder="" class="form-control" required="">
	              </div>
	            </div>
	            
	            <div class="form-group col-md-6">
	              <span class="required-lbl">* </span><label class="control-label" for="emailaddress">Email Address</label>
	              <div class="controls">
	                <input id="email" name="email" type="email" placeholder="" class="form-control" required="">
	              </div>
	            </div>
	            
	            <div class="form-group col-md-6">
	              <label class="control-label" for="phone">Phone</label>
	              <div class="controls">
	                <input id="contact_no" name="contact_no" type="number" placeholder="" class="form-control" required="">
	              </div>
	            </div>
	            
	            <div class="form-group col-md-12">
	                <div class="control-group confirm-btn">
	                  <label class="control-label" for="placeorderbtn"></label>
	                  <div class="controls">
	                    <button id="placeorderbtn" name="placeorderbtn" class="btn btn-primary">Pay Now</button>
	                  </div>
	                </div>
	            </div>
            </form>
        </div>
	</div>
</body>
</html>