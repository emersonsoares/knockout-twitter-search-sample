// Here's my data model
jQuery(function($) {

	var ViewModel = function() {
    	var self = this;

    	self.timeline = ko.observableArray();

		
		self.updateStream = function() {
			$.ajax({
      			dataType: 'jsonp'
      			,url: 'https://api.twitter.com/1/statuses/user_timeline.json'
      			,data: { screen_name: 'emerson_soares', count: 1 }
      			,success: function(json) {
         			$.each(json, function(i, tweet) {
         				console.log(tweet);
         				self.timeline.push({ tweet : tweet });
         			});
      			}
      			,error: function( jqXHR, textStatus, errorThrown ) {
         			console.log( 'error: ' + textStatus);
      			}
      			,timeout:5000
      			,retryMax: 2
   			});
		};
	};
 
	ko.applyBindings(new ViewModel()); // This makes Knockout get to work​​​
});
