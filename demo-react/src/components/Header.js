import React, {Component} from 'react';
import { Link } from 'react-router-dom';

class Header extends Component{
	render(){

      const navStyle = {
          color: '#9d9d8d',
          top: '5px'
      };
        
    	return (
      		<nav className="navbar navbar-inverse">
      			<div className="container-fluid">
      				<a className="navbar-brand" href="/">Logo</a>
      				<ul className="nav navbar-nav">
      					<li className="active">
      						<a href="/">Trang chủ</a>
      					</li>
      					<li>
                  {/*Dùng link sẽ giảm tải thời gian tải lại website*/}
                  <Link style={navStyle} to="/addProduct">Sản phẩm</Link>
      					</li>
                <li>
                <Link style={navStyle} to="/changeColor">Đổi màu</Link>
                  
                </li>
      				</ul>
      			</div>
      		</nav>
    	);
      }
}


export default Header;
