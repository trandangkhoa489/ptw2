import React, {Component} from 'react';

class AddProduct extends Component{

    constructor(props){
        super(props);
        this.textInput = React.createRef();
        this.onAddProduct = this.onAddProduct.bind(this);
    }

    onAddProduct(){
        const text = this.textInput.current.value;
        console.log('Text:' + text);
    }


    render(){
        return (
            <div className="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div className="panel panel-danger">
                    <div className="panel-heading">
                        <h3 className="panel-title">Thêm sản phẩm </h3>
                    </div>
                    <div className="panel-body">
                        <div className="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" className="form-control" ref={this.textInput} />
                        </div> 
                        <button type="submit" className="btn btn-primary" onClick={ this.onAddProduct }>
                            Thêm
                        </button>
                    </div>
                </div>
            </div>
        );
    }
}

export default AddProduct;
