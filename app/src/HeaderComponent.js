
var Picture = React.createClass({
    render: function(){
        return (
            <div>              
                <img src='http://lorempixel.com/550/350/' />
            </div>
        );
    }
});
 
var Quote = React.createClass({
    render: function(){
        return (
            <div dangerouslySetInnerHTML={{__html: this.props.quote }} />
        );
    }
});

var HeaderComponent = React.createClass({
	getInitialState: function() {
	    return {data: [], selectedQuote: ''};
	},

	componentDidMount: function() {
	    $.ajax({
	        url: this.props.dataURL,
	        dataType: 'json',
	        cache: false,
	        success: function(data) {
	            this.setState({data: data});
	            this.chooseRandomQuote();
	        }.bind(this),
	            error: function(xhr, status, err) {
	            console.error(this.props.url, status, err.toString());
	        }.bind(this)
	    });
	},

	chooseRandomQuote: function () {
	    var randomNumber = Math.floor(Math.random() * this.state.data.length);
	    var selectedQuote = this.state.data[randomNumber];
	    this.setState({selectedQuote: selectedQuote.content.rendered});
	 
	},
    render: function(){

		var HeaderComponentStyle = {
            backgroundColor: 'blue',
            color: '#fff',
            padding: '30px',
            width: '100%',
            margin: '0 auto',
            fontFamily: 'Helvetica',
            fontSize: '25px',
            fontWeight: 'bold'
        }

        return (<div style={HeaderComponentStyle}>        
		<Picture />
        <Quote quote={this.state.selectedQuote} />
        <button onClick={this.chooseRandomQuote}>Randomly pick another post</button>
        </div>);
    }
});

ReactDOM.render(<HeaderComponent dataURL="http://localhost:8888/wordpress-rest/wp-json/wp/v2/posts" />, document.getElementById('content'));