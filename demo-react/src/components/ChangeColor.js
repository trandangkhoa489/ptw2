import React, {Component} from 'react';
import ColorPicker from './ChangeColor/ColorPicker';
import Reset from './ChangeColor/Reset';
import Result from './ChangeColor/Result';
import SizeSetting from './ChangeColor/SizeSetting';

class ChangeColor extends Component{

	constructor(props){
        super(props);
        this.state = {
            color: 'red',
            fontSize: 15
        };
        this.onSetColor = this.onSetColor.bind(this);
        this.onChangeSize = this.onChangeSize.bind(this);
    }

    onSetColor(params){
        this.setState({
            color: params
        });
    }

    onChangeSize(value){
        this.setState({
            //fontSize này trong constructor của this.static
            //value là giá trị khi nhấn nút tăng hoặc giảm ở file SizeSetting.js
            fontSize: (this.state.fontSize + value >= 8 && this.state.fontSize + value <= 36) ? this.state.fontSize + value : this.state.fontSize
        });
    }
    //Thêm =()=> sẽ không cần vào constructor bind(this)
    onSetting =()=>{
        this.setState({
            color: 'red',
            fontSize: 15
        });
    }

    render(){
        return (
            <div className="container mt-50">
                <div className="row">
                    <ColorPicker color={ this.state.color } onReceiveColor={ this.onSetColor }/>
                    <div className="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        {/*this.state.fontSize lấy giá trị ở state trong constructor trên kia*/}
                        <SizeSetting 
                                    kichThuoc={ this.state.fontSize } 
                                    onChangeSize={ this.onChangeSize }  />
                        <Reset onSetting={ this.onSetting }/>
                    </div>
                    <Result color={ this.state.color } kichThuoc={ this.state.fontSize } />
                </div>
            </div>
        );
    }
}

export default ChangeColor;