import React, {Component} from 'react';
import { NavLink, Link } from 'react-router-dom';

class Header extends Component{
  constructor(props){
      super(props);
      this.state = {
            addpress: ['addProduct','changeColor','form','lissItem','tan', 'linh']
      };
      console.log(window.location.pathname);
  }


	render(){

      const navStyle = {
          color: '#9d9d8d',

      };
        
    	return (
      		<nav className="navbar navbar-inverse">
      			<div className="container-fluid">
      				<a className="navbar-brand" href="/">Logo</a>
              {/**/}
      				<ul className="nav navbar-nav">
      					<li>
      						<Link style={navStyle} to="/">Trang chủ</Link>
      					</li>
      					<li>
                  {/*Dùng link sẽ giảm tải thời gian tải lại website*/}
                  <NavLink style={navStyle} to="addProduct">Sản phẩm</NavLink>
      					</li>
                <li>
                  <Link style={navStyle} to="changeColor">Đổi màu</Link>
                </li>
                <li>
                  <Link style={navStyle} to="form">Form</Link>
                </li>
                <li>
                  <Link style={navStyle} to="lissItem">Tùng</Link>
                </li>
                <li>
                  <Link style={navStyle} to="tan">Tân</Link>
                </li>
                <li>
                  <Link style={navStyle} to="linh">Component and Props</Link>
                </li>
      				</ul>
      			</div>
      		</nav>
    	);
      }
}


export default Header;
