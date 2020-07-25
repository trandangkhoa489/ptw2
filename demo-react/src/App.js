import React, {Component} from 'react';
import Header from './components/Header';
import Routing from './components/Routing';
import { BrowserRouter as Router } from 'react-router-dom';
    

class App extends Component{

    render(){

        //let check = window.location.pathname === "/addProduct" ? <Header /> : '';
        return (
            <Router>
            {/*Đây là header của website*/}

                {/*{check}*/}
                <Header />
                <div className="container">
                    <Routing />
                </div>

            </Router>
        );
    }
}

export default App;
