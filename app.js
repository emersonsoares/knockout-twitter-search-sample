jQuery(function($) {

    var TwitterViewModel = function() {
        var self = this;

        self.query = ko.observable();
        self.tweets = ko.observableArray();
        self.currentPage = ko.observable(1);

        self.searchTweets = function() {
            self.tweets.removeAll();
            self.getTweets(self.query);
        };

        self.getTweets = function(query, currentPage) {
            $.ajax({
                dataType: 'jsonp'
                ,url: 'http://search.twitter.com/search.json'
                ,data: { q: query, include_entities: true, page: currentPage, rpp: 10}
                ,success: function(json) {
                    $.each(json.results, function(i, current){
                        self.tweets.push({ 
                            tweet: current.text,
                            user: current.from_user
                        });
                    });
                    self.currentPage(json.page);
                }
                ,error: function( jqXHR, textStatus, errorThrown ) {
                    console.log( 'error: ' + textStatus);
                }
                ,timeout:5000
                ,retryMax: 2
            });
        };
    };
 
    var viewModel = new TwitterViewModel();
    ko.applyBindings(viewModel);

    $(window).scroll(function () {
        if ($(this).height() + $(this).scrollTop() == $(document).height()) {
            viewModel.getTweets(viewModel.query, viewModel.currentPage() + 1);
        }
    });

});
