import React, {Component} from 'react';
import './Result.css';

//Con của class ChangeColo.js
class Result extends Component{
    //Lấy props color, fontSize ở bên ChangeColor (<Result />)
	setStyle(){
		return {
			color: this.props.color,
            fontSize: this.props.kichThuoc
		};
	}

    render(){
        return (
            <div className="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div>
                    Color : {this.props.color}  - Fontsize  : { this.props.kichThuoc }px
                </div>
            	
            	<div id="content" style={ this.setStyle() }>
            		Nội dung setting
            	</div>
            </div>
        );
    }
}

export default Result;