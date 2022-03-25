<!DOCTYPE html>
<html lang="en">

<title>Demostration of Forms in React</title>
<script src= "https://unpkg.com/react@16/umd/react.production.min.js"></script>
<script src= "https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
<script src= "https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
<body>

<h1> Demostration of Forms in React</h1>
<div id="root"></div>

<script type="text/babel">

class NameForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {value: ''};
	//this.state = {value: 'Your Name Please'};

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    //this.setState({value: event.target.value.toUpperCase()});
	this.setState({value: event.target.value});
  }

//without .preventDefault() the submitted form would be refreshed
  handleSubmit(event) {
    alert('The submitted name is: ' + this.state.value);
    event.preventDefault();
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <label>
          Name:
          <input type="text" value={this.state.value} onChange={this.handleChange} />
        </label>
        <input type="submit" value="Submit" />
      </form>	  
    );
  }
}

//Phone
class PhoneForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {phone: ''};
	//this.state = {value: 'Your Name Please'};

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    //this.setState({value: event.target.value.toUpperCase()});
	this.setState({phone: event.target.value});

  var phone = this.state.phone;

  }

//without .preventDefault() the submitted form would be refreshed
  handleSubmit(event) {
    alert('The submitted Phone is: ' +  this.state.phone);
    event.preventDefault();
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <label>
          Phone:
          <input type="text" value={this.state.phone} onChange={this.handleChange} />
        </label>
        <input type="submit" value="Submit" />
      </form>	  
    );
  }
}

//E-mail
class EmailForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {email: ''};
	//this.state = {value: 'Your Name Please'};

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    //this.setState({value: event.target.value.toUpperCase()});
	this.setState({email: event.target.value});

  var email = this.state.email;

  }

//without .preventDefault() the submitted form would be refreshed
  handleSubmit(event) {
    alert('The submitted Phone is: ' +  this.state.email);
    event.preventDefault();
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <label>
          E-mail:
          <input type="text" value={this.state.email} onChange={this.handleChange} />
        </label>
        <input type="submit" value="Submit" />
      </form>	  
    );
  }
}

ReactDOM.render([<NameForm/>,<PhoneForm/>,<EmailForm/>], document.getElementById('root'))

///////////


</script>

</body>
</html>
