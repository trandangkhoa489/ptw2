import React from 'react';
class Toggle extends React.Component {
    constructor(props) {
      super(props);
      this.state = {isToggleOn: true};
      this.handleClick = this.handleClick.bind(this);
    }
  
    handleClick() {
      this.setState(state => ({
        isToggleOn: !state.isToggleOn
      }));
    }
  
    render() {
      return (
        <button onClick={this.handleClick}>
          {this.state.isToggleOn ? 'ĐĂNG KÝ' : 'ĐĂNG KÍ THÀNH CÔNG'}
  
        </button>
      );
    }
  }
class btnclick extends React.Component {
    render() {
        return (
            <div>
                <Toggle/>
            </div>
        );
    }
}

export default btnclick;