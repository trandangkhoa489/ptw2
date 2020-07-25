import React, { Component } from 'react';

class Helloword extends Component {
    render() {
        return (
            <div className="text-hello">{this.props.title}</div>
        );
    }
}
export default Helloword;

