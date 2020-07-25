import React, {Component} from 'react';
import logo from '../logo.svg';
import '../App.css';
import Sukienclick from './Tan/sukienclick';
import Btnclick from './Tan/btnclick';
import Conditional from './Tan/conditional';

class Toggle extends Component {
  render() {
    return (  
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title"> <Sukienclick/>  </h1>
          <Btnclick/>
          <Conditional/>
        </header>
      </div>
    );
  }
}
export default Toggle;
