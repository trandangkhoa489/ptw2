import React, {Component} from 'react';
import './Product.css';

//class cha là Mock-Product
class Product extends Component{
    onAddToCart = () =>{
        alert('Bạn mua ' + this.props.name);
        console.log('Name: ' + this.props.name + ' \nPrice: ' + this.props.price);
    }

    render(){

        return (
            <div className="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div className="thumbnail">
                    <img alt={this.props.name} src={this.props.image} />
                    <div className="caption">
                        <h3>Name: {this.props.name} </h3>
                        <h3>Price: {this.props.price}.00$ </h3>
                        <p> {this.props.children} </p>
                    </div>                     
                    <a className="btn btn-success" href="/#" onClick={  this.onAddToCart  }>Mua hàng</a>
                </div>
            </div>
        );
    }
}

export default Product;
