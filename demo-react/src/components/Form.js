import React, {Component} from 'react';
import Demoform1 from './Form/demo-form1.js';
import Demoform2 from './Form/demo-form2.js';
import Demolightng from './Form/demo-lightngstayup.js';

class Form extends Component{
  render(){
    return (
    	<div className="container form">
          <Demoform1 />
          <br/>
     		<Demoform2 />
         <br/>
         <br/>
         <br/>
         <Demolightng />
      </div>
    );
  }
}


export default Form;
