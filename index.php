<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="lib/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="lib/knockout-2.1.0.js"></script>
	<script type="text/javascript" src="app.js"></script>
	<style type="text/css">
		body { font-family: arial; font-size: 14px; }
		.liveExample { padding: 1em; background-color: #EEEEDD; border: 1px solid #CCC; max-width: 655px; }
		.liveExample input { font-family: Arial; }
		.liveExample b { font-weight: bold; }
		.liveExample p { margin-top: 0.9em; margin-bottom: 0.9em; }
		.liveExample select[multiple] { width: 100%; height: 8em; }
		.liveExample h2 { margin-top: 0.4em; font-weight: bold; font-size: 1.2em; }​
	</style>
</head>
<body>
	<div data-bind='foreach: timeline'>   
    	<p data-bind='text: tweet.text'></p> 
    	<p data-bind='text: tweet.created_at'></p> 
    	<p data-bind='text: tweet.created_at'></p> 
    </div>​
    <button data-bind='click: updateStream' id="update">Update</button>
</body>
</html>
