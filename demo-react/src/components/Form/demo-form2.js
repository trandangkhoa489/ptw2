import React from 'react';
import './demo-form1.css';
class Demoform2 extends React.Component {
  constructor(props) {
    super(props);
    this.state = {value: 'Cong Nghe Thong Tin'};

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    this.setState({value: event.target.value});
  }

  handleSubmit(event) {
    alert('Khoa : ' + this.state.value);
    event.preventDefault();
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit} className="ftextfind2">
        <label>
         Khoa :
          <select value={this.state.value} onChange={this.handleChange}>
            <option value="Cong Nghe Thong Tin">Cong Nghe Thong Tin</option>
            <option value="Ke Toan">Ke Toan</option>
            <option value="Tieng Han">Tieng Han</option>
            <option value="Dien Tu">Dien Tu</option>
          </select>
        </label>
        <input type="submit" value="Submit" />
      </form>
    );
  }
}
export default Demoform2;