import React, {Component} from 'react';
import './demo-form1.css';
class Demoform1 extends Component {
  constructor(props) {
    super(props);
    this.state = {value: ''};

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    this.setState({value: event.target.value});
  }

  handleSubmit(event) {
    alert('My name is ' + this.state.value);
    event.preventDefault();
  }

  
  render() {
    return (
      <form onSubmit={this.handleSubmit} className="ftextfind">
        <label>
          Name:
          <input type="text" value={this.state.value} onChange={this.handleChange} />
        </label>
        <input type="submit" value="Submit"/>
      </form>
    
    );
  }
}
export default Demoform1;