// Here's my data model
jQuery(function($) {

	var ViewModel = function() {
    	var self = this;

    	self.firstName = ko.observable();
    	self.lastName = ko.observable();
 		self.fullName = ko.computed(function() {
        	// Knockout tracks dependencies automatically. It knows that fullName depends on firstName and lastName, because these get called when evaluating fullName.
        	return this.firstName() + " " + this.lastName();
    	}, this);
		
		self.update = function() {
    		$.getJSON("https://api.twitter.com/1/statuses/user_timeline.json", { screen_name: 'emerson_soares', count: 1 } ,function(data){
    			console.log(data);
    		});
    	};
	};
 
	ko.applyBindings(new ViewModel()); // This makes Knockout get to work​​​
});
